<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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
namespace UCloud\UK8S\Apis;

use UCloud\Core\Request\Request;

class DelUK8SClusterNodeV2Request extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DelUK8SClusterNodeV2"]);
        $this->markRequired("Region");
        $this->markRequired("ClusterId");
        $this->markRequired("NodeId");
    }

    

    /**
     * ProjectId: 项目ID项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * ClusterId: UK8S集群ID。 可从UK8S控制台获取。
     *
     * @return string|null
     */
    public function getClusterId()
    {
        return $this->get("ClusterId");
    }

    /**
     * ClusterId: UK8S集群ID。 可从UK8S控制台获取。
     *
     * @param string $clusterId
     */
    public function setClusterId($clusterId)
    {
        $this->set("ClusterId", $clusterId);
    }

    /**
     * NodeId: Node在UK8S处的唯一标示，如uk8s-reewqe5-sdasadsda。**非云主机或物理云主机资源Id**
     *
     * @return string|null
     */
    public function getNodeId()
    {
        return $this->get("NodeId");
    }

    /**
     * NodeId: Node在UK8S处的唯一标示，如uk8s-reewqe5-sdasadsda。**非云主机或物理云主机资源Id**
     *
     * @param string $nodeId
     */
    public function setNodeId($nodeId)
    {
        $this->set("NodeId", $nodeId);
    }

    /**
     * ReleaseDataUDisk: 删除节点时是否释放数据盘。 枚举值[true:释放，false: 不释放]，默认为true。
     *
     * @return boolean|null
     */
    public function getReleaseDataUDisk()
    {
        return $this->get("ReleaseDataUDisk");
    }

    /**
     * ReleaseDataUDisk: 删除节点时是否释放数据盘。 枚举值[true:释放，false: 不释放]，默认为true。
     *
     * @param boolean $releaseDataUDisk
     */
    public function setReleaseDataUDisk($releaseDataUDisk)
    {
        $this->set("ReleaseDataUDisk", $releaseDataUDisk);
    }
}
