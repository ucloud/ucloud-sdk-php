<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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
namespace UCloud\ULB\Apis;

use UCloud\Core\Request\Request;

class DescribeLoadBalancersRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeLoadBalancers"]);
        $this->markRequired("Region");
        $this->markRequired("ProjectId");
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
     * Type: 负载均衡实例的类型。限定枚举值："Application" / "Network"，默认值："Application"
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 负载均衡实例的类型。限定枚举值："Application" / "Network"，默认值："Application"
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * ShowDetail: 是否获取监听器和后端服务节点的详细信息。默认值：false
     *
     * @return boolean|null
     */
    public function getShowDetail()
    {
        return $this->get("ShowDetail");
    }

    /**
     * ShowDetail: 是否获取监听器和后端服务节点的详细信息。默认值：false
     *
     * @param boolean $showDetail
     */
    public function setShowDetail($showDetail)
    {
        $this->set("ShowDetail", $showDetail);
    }

    /**
     * LoadBalancerIds: 负载均衡实例的ID。必须是同一类型的实例，若指定了实例ID，将忽略除Type外的其他过滤条件
     *
     * @return string[]|null
     */
    public function getLoadBalancerIds()
    {
        return $this->get("LoadBalancerIds");
    }

    /**
     * LoadBalancerIds: 负载均衡实例的ID。必须是同一类型的实例，若指定了实例ID，将忽略除Type外的其他过滤条件
     *
     * @param string[] $loadBalancerIds
     */
    public function setLoadBalancerIds(array $loadBalancerIds)
    {
        $this->set("LoadBalancerIds", $loadBalancerIds);
    }

    /**
     * VPCId: 限定所在的VPC
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: 限定所在的VPC
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * SubnetId: 限定所在的子网
     *
     * @return string|null
     */
    public function getSubnetId()
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 限定所在的子网
     *
     * @param string $subnetId
     */
    public function setSubnetId($subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * Offset: 数据偏移量，默认为0
     *
     * @return string|null
     */
    public function getOffset()
    {
        return $this->get("Offset");
    }

    /**
     * Offset: 数据偏移量，默认为0
     *
     * @param string $offset
     */
    public function setOffset($offset)
    {
        $this->set("Offset", $offset);
    }

    /**
     * Limit: 数据分页值，默认为100
     *
     * @return string|null
     */
    public function getLimit()
    {
        return $this->get("Limit");
    }

    /**
     * Limit: 数据分页值，默认为100
     *
     * @param string $limit
     */
    public function setLimit($limit)
    {
        $this->set("Limit", $limit);
    }
}
