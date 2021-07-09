<?php

require_once '../../vendor/autoload.php';

use UCloud\UHost\UHostClient;
use UCloud\UHost\Apis\CreateUHostInstanceRequest;
use UCloud\UHost\Apis\DescribeImageRequest;
use UCloud\UHost\Apis\DescribeUHostInstanceRequest;
use UCloud\UHost\Apis\StopUHostInstanceRequest;
use UCloud\UHost\Apis\TerminateUHostInstanceRequest;
use UCloud\UHost\Params\CreateUHostInstanceParamDisks;
use UCloud\Core\Exception\UCloudException;

/**
 * @throws UCloudException
 */
function main() {
    // Build client
    $client = new UHostClient([
        "publicKey" => getenv("UCLOUD_PUBLIC_KEY"),
        "privateKey" => getenv("UCLOUD_PRIVATE_KEY"),
        "projectId" => getenv("UCLOUD_PROJECT_ID"),
        "region" => "cn-bj2",
    ]);
    $zone = "cn-bj2-05";

    // Describe Image
    try {
        $req = new DescribeImageRequest();
        $req->setZone($zone);
        $req->setImageType("Base");
        $req->setOsType("Linux");

        $resp = $client->describeImage($req);
    } catch (UCloudException $e) {
        throw $e;
    }
    $image = $resp->getImageSet()[0];

    // Create Instance
    try {
        $req = new CreateUHostInstanceRequest();
        $req->setName("sdk-php-example");
        $req->setZone($zone);
        $req->setImageId($image->getImageId());
        $req->setLoginMode("Password");
        $req->setPassword(base64_encode("UCloud1234!"));
        $req->setCPU(1);
        $req->setMemory(1024);

        $disk = new CreateUHostInstanceParamDisks();
        $disk->setSize($image->getImageSize());
        $disk->setType("CLOUD_SSD");
        $disk->setIsBoot("True");

        $req->setDisks([$disk]);

        $resp = $client->createUHostInstance($req);
    } catch (UCloudException $e) {
        throw $e;
    }
    $id = $resp->getUHostIds()[0];

    // Wait instance to boot
    while (True) {
        sleep(3);

        try {
            $req = new DescribeUHostInstanceRequest();
            $req->setZone($zone);
            $req->setUHostIds([$id]);
            $resp = $client->describeUHostInstance($req);
        } catch (UCloudException $e) {
            break;
        }

        $instance = $resp->getUHostSet()[0];
        echo "waiting " . $id . " to boot, got " . $instance->getState() . "\n";
        if (in_array($instance->getState(), ["Running"])) {
            break;
        }
    }

    // Stop the instance
    try {
        $req = new StopUHostInstanceRequest();
        $req->setZone($zone);
        $req->setUHostId($id);
        $client->stopUHostInstance($req);
    } catch (UCloudException $e) {
        throw $e;
    }

    // Wait instance to boot
    while (True) {
        sleep(3);

        try {
            $req = new DescribeUHostInstanceRequest();
            $req->setZone($zone);
            $req->setUHostIds([$id]);
            $resp = $client->describeUHostInstance($req);
        } catch (UCloudException $e) {
            break;
        }
        $instance = $resp->getUHostSet()[0];
        echo "waiting " . $id . " to stopped, got " . $instance->getState() . "\n";
        if (in_array($instance->getState(), ["Stopped"])) {
            break;
        }
    }

    // Cleanup the instance
    try {
        $req = new TerminateUHostInstanceRequest();
        $req->setZone($zone);
        $req->setUHostId($id);
        $client->terminateUHostInstance($req);
    } catch (UCloudException $e) {
        throw $e;
    }
}

main();
