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

class ExpandUClickhouseClusterRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ExpandUClickhouseCluster"]);
        $this->markRequired("Region");
        $this->markRequired("ClusterId");
        $this->markRequired("TotalNodeCount");
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
     * TotalNodeCount: 扩容后集群的节点数量，集群为高可用时，需要传入偶数个节点
     *
     * @return integer|null
     */
    public function getTotalNodeCount()
    {
        return $this->get("TotalNodeCount");
    }

    /**
     * TotalNodeCount: 扩容后集群的节点数量，集群为高可用时，需要传入偶数个节点
     *
     * @param int $totalNodeCount
     */
    public function setTotalNodeCount($totalNodeCount)
    {
        $this->set("TotalNodeCount", $totalNodeCount);
    }

    /**
     * SyncNodeId: 水平扩容时，选择某一个原节点的ID，用于同步表结构/用户信息。不传递时，表示不同步表结构/用户信息，仅水平扩容节点数量
     *
     * @return string|null
     */
    public function getSyncNodeId()
    {
        return $this->get("SyncNodeId");
    }

    /**
     * SyncNodeId: 水平扩容时，选择某一个原节点的ID，用于同步表结构/用户信息。不传递时，表示不同步表结构/用户信息，仅水平扩容节点数量
     *
     * @param string $syncNodeId
     */
    public function setSyncNodeId($syncNodeId)
    {
        $this->set("SyncNodeId", $syncNodeId);
    }
}
