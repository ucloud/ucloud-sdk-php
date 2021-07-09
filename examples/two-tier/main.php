<?php

require_once '../../vendor/autoload.php';

use UCloud\UHost\UHostClient;
use UCloud\UHost\Apis\CreateUHostInstanceRequest;
use UCloud\UHost\Apis\DescribeImageRequest;
use UCloud\UHost\Apis\DescribeUHostInstanceRequest;
use UCloud\UHost\Apis\StopUHostInstanceRequest;
use UCloud\UHost\Apis\TerminateUHostInstanceRequest;

use UCloud\ULB\ULBClient;
use UCloud\ULB\Apis\AllocateBackendRequest;
use UCloud\ULB\Apis\CreateULBRequest;
use UCloud\ULB\Apis\CreateVServerRequest;
use UCloud\ULB\Apis\DeleteULBRequest;
use UCloud\ULB\Apis\DeleteVServerRequest;
use UCloud\ULB\Apis\ReleaseBackendRequest;

use UCloud\Core\Exception\UCloudException;

// Build client


class Main
{
    private UHostClient $uhostClient;
    private ULBClient $ulbClient;
    private string $zone;
    private string $name;

    public function __construct()
    {
        $cfg = [
            "publicKey" => getenv("UCLOUD_PUBLIC_KEY"),
            "privateKey" => getenv("UCLOUD_PRIVATE_KEY"),
            "projectId" => getenv("UCLOUD_PROJECT_ID"),
            "region" => "cn-bj2",
        ];
        $this->uhostClient = new UHostClient($cfg);
        $this->ulbClient = new ULBClient($cfg);
        $this->zone = "cn-bj2-05";
        $this->name = "sdk-php-example-two-tier";
    }

    /**
     * @throws UCloudException
     */
    public function __invoke()
    {
        $imageId = $this->describeImage();

        $uhostIds = $this->createUHostBatch($imageId, 2);

        $ulbId = $this->createUlb();

        $vserverId = $this->createVServer($ulbId);

        $backendIds = $this->allocateBackendBatch($ulbId, $vserverId, $uhostIds);

        $this->releaseBackendBatch($ulbId, $backendIds);

        $this->deleteVServer($ulbId, $vserverId);

        $this->deleteUlb($ulbId);

        $this->deleteUHostBatch($uhostIds);
    }

    /**
     * Describe Image
     *
     * @return string
     * @throws UCloudException
     */
    private function describeImage(): string
    {
        $req = new DescribeImageRequest();
        $req->setZone($this->zone);
        $req->setImageType("Base");
        $req->setOsType("Linux");
        $resp = $this->uhostClient->describeImage($req);
        $image = $resp->getImageSet()[0];
        return $image->getImageId();
    }

    /**
     * Create Instance
     *
     * @param string $imageId
     * @param int $count
     * @return array
     * @throws UCloudException
     */
    private function createUHostBatch(string $imageId, int $count): array
    {
        $ids = [];
        foreach(range(1, $count) as $index) {
            $req = new CreateUHostInstanceRequest();
            $req->setName($this->name);
            $req->setZone($this->zone);
            $req->setImageId($imageId);
            $req->setLoginMode("Password");
            $req->setPassword(base64_encode("UCloud1234!"));
            $req->setCPU(1);
            $req->setMemory(1024);

            $resp = $this->uhostClient->createUHostInstance($req);
            array_push($ids, $resp->getUHostIds()[0]);
        }
        $this->waitUHostState($ids, "Running");
        return $ids;
    }

    /**
     * Create ULB
     *
     * @return string
     * @throws UCloudException
     */
    private function createUlb(): string
    {
        $req = new CreateULBRequest();
        $req->setULBName($this->name);
        $resp = $this->ulbClient->createULB($req);
        return $resp->getULBId();
    }

    /**
     * Create VServer under ULB
     *
     * @param string $ulbId
     * @return string
     * @throws UCloudException
     */
    private function createVServer(string $ulbId): string
    {

        $req = new CreateVServerRequest();
        $req->setVServerName($this->name);
        $req->setULBId($ulbId);
        $resp = $this->ulbClient->createVServer($req);
        return $resp->getVServerId();
    }

    /**
     * Create several backends under VServer
     *
     * @param string $ulbId
     * @param string $vserverId
     * @param array $uhostIds
     * @return array
     * @throws UCloudException
     */
    private function allocateBackendBatch(string $ulbId, string $vserverId, array $uhostIds): array
    {
        $backendIds = [];
        foreach ($uhostIds as $uhostId) {
            $req = new AllocateBackendRequest();
            $req->setULBId($ulbId);
            $req->setVServerId($vserverId);
            $req->setResourceId($uhostId);
            $req->setResourceType("UHost");
            $resp = $this->ulbClient->allocateBackend($req);
            array_push($backendIds, $resp->getBackendId());
        }
        return $backendIds;
    }

    /**
     * Delete backends from VServer
     *
     * @param string $ulbId
     * @param string $vserverId
     * @param array $backendIds
     * @throws UCloudException
     */
    private function releaseBackendBatch(string $ulbId, array $backendIds)
    {
        foreach ($backendIds as $backendId) {
            $req = new ReleaseBackendRequest();
            $req->setULBId($ulbId);
            $req->setBackendId($backendId);
            $this->ulbClient->releaseBackend($req);
        }
    }

    /**
     * Delete VServer from ULB
     *
     * @param string $ulbId
     * @param string $vserverId
     * @throws UCloudException
     */
    private function deleteVServer(string $ulbId, string $vserverId)
    {
        $req = new DeleteVServerRequest();
        $req->setULBId($ulbId);
        $req->setVServerId($vserverId);
    }

    /**
     * Delete ULB
     *
     * @param string $ulbId
     * @throws UCloudException
     */
    private function deleteUlb(string $ulbId)
    {
        $req = new DeleteULBRequest();
        $req->setULBId($ulbId);
        $this->ulbClient->deleteULB($req);
    }

    /**
     * Delete UHost instances
     *
     * @param array $uhostIds
     * @throws UCloudException
     */
    private function deleteUHostBatch(array $uhostIds)
    {
        foreach ($uhostIds as $uhostId) {
            $req = new StopUHostInstanceRequest();
            $req->setUHostId($uhostId);
            $this->uhostClient->stopUHostInstance($req);
        }

        $this->waitUHostState($uhostIds, "Stopped");

        foreach ($uhostIds as $uhostId) {
            $req = new TerminateUHostInstanceRequest();
            $req->setUHostId($uhostId);
            $this->uhostClient->terminateUHostInstance($req);
        }
    }

    /**
     * @throws UCloudException
     */
    private function waitUHostState(array $uhostIds, string $state)
    {
        while (true) {
            $hasNotReady = false;

            $req = new DescribeUHostInstanceRequest();
            $req->setUHostIds($uhostIds);
            $resp = $this->uhostClient->describeUHostInstance($req);
            foreach ($resp->getUHostSet() as $instance) {
                if ($instance->getState() != $state) {
                    $hasNotReady = true;
                }
            }
            if (!$hasNotReady) {
                break;
            }
            sleep(1);
        }
    }
}


$main = new Main();
$main();
