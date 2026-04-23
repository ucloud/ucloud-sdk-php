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
namespace UCloud\UClickhouse\Apis;

use UCloud\Core\Request\Request;

class ResizeUClickhouseClusterRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ResizeUClickhouseCluster"]);
        $this->markRequired("Region");
        $this->markRequired("ClusterId");
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
     * ClusterId: 集群ID
     *
     * @return string|null
     */
    public function getClusterId()
    {
        return $this->get("ClusterId");
    }

    /**
     * ClusterId: 集群ID
     *
     * @param string $clusterId
     */
    public function setClusterId($clusterId)
    {
        $this->set("ClusterId", $clusterId);
    }

    /**
     * TargetMachineTypeId: 目标机型ID，可通过GetUClickhouseClusterCreateOption接口获取具体值，与TargetDataDiskSize不能同时为空
     *
     * @return string|null
     */
    public function getTargetMachineTypeId()
    {
        return $this->get("TargetMachineTypeId");
    }

    /**
     * TargetMachineTypeId: 目标机型ID，可通过GetUClickhouseClusterCreateOption接口获取具体值，与TargetDataDiskSize不能同时为空
     *
     * @param string $targetMachineTypeId
     */
    public function setTargetMachineTypeId($targetMachineTypeId)
    {
        $this->set("TargetMachineTypeId", $targetMachineTypeId);
    }

    /**
     * TargetDataDiskSize: 目标磁盘大小，单位GB，只能扩容，与TargetMachineTypeId不能同时为空
     *
     * @return integer|null
     */
    public function getTargetDataDiskSize()
    {
        return $this->get("TargetDataDiskSize");
    }

    /**
     * TargetDataDiskSize: 目标磁盘大小，单位GB，只能扩容，与TargetMachineTypeId不能同时为空
     *
     * @param int $targetDataDiskSize
     */
    public function setTargetDataDiskSize($targetDataDiskSize)
    {
        $this->set("TargetDataDiskSize", $targetDataDiskSize);
    }

    /**
     * IsZooKeeperNode: 是否为zookeeper节点，为true时表示升级zookeeper节点规格，为false时表示升级clickhouse节点规格，默认为false
     *
     * @return boolean|null
     */
    public function getIsZooKeeperNode()
    {
        return $this->get("IsZooKeeperNode");
    }

    /**
     * IsZooKeeperNode: 是否为zookeeper节点，为true时表示升级zookeeper节点规格，为false时表示升级clickhouse节点规格，默认为false
     *
     * @param boolean $isZooKeeperNode
     */
    public function setIsZooKeeperNode($isZooKeeperNode)
    {
        $this->set("IsZooKeeperNode", $isZooKeeperNode);
    }
}
