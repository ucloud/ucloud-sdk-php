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
namespace UCloud\VPC\Apis;

use UCloud\Core\Request\Request;

class DescribeRouteTableRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeRouteTable"]);
        $this->markRequired("Region");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getRegion(): string
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @param string $region
     */
    public function setRegion(string $region)
    {
        $this->set("Region", $region);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * VPCId: 所属VPC的资源ID
     *
     * @return string|null
     */
    public function getVPCId(): string
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: 所属VPC的资源ID
     *
     * @param string $vpcId
     */
    public function setVPCId(string $vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * RouteTableId: 路由表资源ID
     *
     * @return string|null
     */
    public function getRouteTableId(): string
    {
        return $this->get("RouteTableId");
    }

    /**
     * RouteTableId: 路由表资源ID
     *
     * @param string $routeTableId
     */
    public function setRouteTableId(string $routeTableId)
    {
        $this->set("RouteTableId", $routeTableId);
    }

    /**
     * OffSet: 数据偏移量。默认为0
     *
     * @return integer|null
     */
    public function getOffSet(): int
    {
        return $this->get("OffSet");
    }

    /**
     * OffSet: 数据偏移量。默认为0
     *
     * @param int $offSet
     */
    public function setOffSet(int $offSet)
    {
        $this->set("OffSet", $offSet);
    }

    /**
     * Limit: 数据分页值。默认为20
     *
     * @return integer|null
     */
    public function getLimit(): int
    {
        return $this->get("Limit");
    }

    /**
     * Limit: 数据分页值。默认为20
     *
     * @param int $limit
     */
    public function setLimit(int $limit)
    {
        $this->set("Limit", $limit);
    }

    /**
     * BusinessId: 业务组ID
     *
     * @return string|null
     */
    public function getBusinessId(): string
    {
        return $this->get("BusinessId");
    }

    /**
     * BusinessId: 业务组ID
     *
     * @param string $businessId
     */
    public function setBusinessId(string $businessId)
    {
        $this->set("BusinessId", $businessId);
    }
}
