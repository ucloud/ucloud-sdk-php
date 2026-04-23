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
namespace UCloud\UKafka\Apis;

use UCloud\Core\Request\Request;

class ListUKafkaInstanceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ListUKafkaInstance"]);
        $this->markRequired("Region");
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
     * Limit: 默认为60
     *
     * @return string|null
     */
    public function getLimit()
    {
        return $this->get("Limit");
    }

    /**
     * Limit: 默认为60
     *
     * @param string $limit
     */
    public function setLimit($limit)
    {
        $this->set("Limit", $limit);
    }

    /**
     * Offset: 默认为0
     *
     * @return string|null
     */
    public function getOffset()
    {
        return $this->get("Offset");
    }

    /**
     * Offset: 默认为0
     *
     * @param string $offset
     */
    public function setOffset($offset)
    {
        $this->set("Offset", $offset);
    }

    /**
     * Filter: 是否过滤删除了的节点，默认为‘true’
     *
     * @return string|null
     */
    public function getFilter()
    {
        return $this->get("Filter");
    }

    /**
     * Filter: 是否过滤删除了的节点，默认为‘true’
     *
     * @param string $filter
     */
    public function setFilter($filter)
    {
        $this->set("Filter", $filter);
    }

    /**
     * VPCId: VPCId
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: VPCId
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * SubnetId: SubnetId
     *
     * @return string|null
     */
    public function getSubnetId()
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: SubnetId
     *
     * @param string $subnetId
     */
    public function setSubnetId($subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * BusinessId: 业务组 ID
     *
     * @return string|null
     */
    public function getBusinessId()
    {
        return $this->get("BusinessId");
    }

    /**
     * BusinessId: 业务组 ID
     *
     * @param string $businessId
     */
    public function setBusinessId($businessId)
    {
        $this->set("BusinessId", $businessId);
    }

    /**
     * ClusterInstanceId: 实例ID
     *
     * @return string|null
     */
    public function getClusterInstanceId()
    {
        return $this->get("ClusterInstanceId");
    }

    /**
     * ClusterInstanceId: 实例ID
     *
     * @param string $clusterInstanceId
     */
    public function setClusterInstanceId($clusterInstanceId)
    {
        $this->set("ClusterInstanceId", $clusterInstanceId);
    }
}
