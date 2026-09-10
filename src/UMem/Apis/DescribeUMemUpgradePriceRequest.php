<?php
/**
 * Copyright 2026 UCloud Technology Co., Ltd.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *  http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace UCloud\UMem\Apis;

use UCloud\Core\Request\Request;

class DescribeUMemUpgradePriceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeUMemUpgradePrice"]);
        $this->markRequired("Region");
        $this->markRequired("Size");
        $this->markRequired("Type");
        $this->markRequired("SpaceId");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * Size: 购买UMem大小,单位:GB
     *
     * @return integer|null
     */
    public function getSize()
    {
        return $this->get("Size");
    }

    /**
     * Size: 购买UMem大小,单位:GB
     *
     * @param int $size
     */
    public function setSize($size)
    {
        $this->set("Size", $size);
    }

    /**
     * Type: 空间类型:single(无热备),double(热备)(默认: double)
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 空间类型:single(无热备),double(热备)(默认: double)
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * SpaceId: 需要升级的空间的SpaceId
     *
     * @return string|null
     */
    public function getSpaceId()
    {
        return $this->get("SpaceId");
    }

    /**
     * SpaceId: 需要升级的空间的SpaceId
     *
     * @param string $spaceId
     */
    public function setSpaceId($spaceId)
    {
        $this->set("SpaceId", $spaceId);
    }

    /**
     * HighPerformance: 是否为性能增强型。默认为false，或者不填，true为性能增强型。
     *
     * @return string|null
     */
    public function getHighPerformance()
    {
        return $this->get("HighPerformance");
    }

    /**
     * HighPerformance: 是否为性能增强型。默认为false，或者不填，true为性能增强型。
     *
     * @param string $highPerformance
     */
    public function setHighPerformance($highPerformance)
    {
        $this->set("HighPerformance", $highPerformance);
    }

    /**
     * IsSplit: 如果是拆分按钮查询价格就填 true, 否则就填 false,默认为 false
     *
     * @return string|null
     */
    public function getIsSplit()
    {
        return $this->get("IsSplit");
    }

    /**
     * IsSplit: 如果是拆分按钮查询价格就填 true, 否则就填 false,默认为 false
     *
     * @param string $isSplit
     */
    public function setIsSplit($isSplit)
    {
        $this->set("IsSplit", $isSplit);
    }

    /**
     * BlockIds: 进行容量调整分片的分片ID(性能增强型不需要传入)
     *
     * @return string[]|null
     */
    public function getBlockIds()
    {
        return $this->get("BlockIds");
    }

    /**
     * BlockIds: 进行容量调整分片的分片ID(性能增强型不需要传入)
     *
     * @param string[] $blockIds
     */
    public function setBlockIds(array $blockIds)
    {
        $this->set("BlockIds", $blockIds);
    }

    /**
     * BlockSize: 进行容量调整的分片的目标容量,单位 GB(性能增强型不需要传入)
     *
     * @return int[]|null
     */
    public function getBlockSize()
    {
        return $this->get("BlockSize");
    }

    /**
     * BlockSize: 进行容量调整的分片的目标容量,单位 GB(性能增强型不需要传入)
     *
     * @param int[] $blockSize
     */
    public function setBlockSize(array $blockSize)
    {
        $this->set("BlockSize", $blockSize);
    }

    /**
     * ProxyId:  代理id
     *
     * @return string|null
     */
    public function getProxyId()
    {
        return $this->get("ProxyId");
    }

    /**
     * ProxyId:  代理id
     *
     * @param string $proxyId
     */
    public function setProxyId($proxyId)
    {
        $this->set("ProxyId", $proxyId);
    }

    /**
     * NewCPU: 代理升级后CPU核数
     *
     * @return integer|null
     */
    public function getNewCPU()
    {
        return $this->get("NewCPU");
    }

    /**
     * NewCPU: 代理升级后CPU核数
     *
     * @param int $newCPU
     */
    public function setNewCPU($newCPU)
    {
        $this->set("NewCPU", $newCPU);
    }

    /**
     * ReplicaSize: 新增读写分离节点容量大小
     *
     * @return integer|null
     */
    public function getReplicaSize()
    {
        return $this->get("ReplicaSize");
    }

    /**
     * ReplicaSize: 新增读写分离节点容量大小
     *
     * @param int $replicaSize
     */
    public function setReplicaSize($replicaSize)
    {
        $this->set("ReplicaSize", $replicaSize);
    }
}
