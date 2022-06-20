<?php
/**
 * Copyright 2022 UCloud Technology Co., Ltd.
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
     * VPCId: 所属VPC的资源ID
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: 所属VPC的资源ID
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * RouteTableId: 路由表资源ID
     *
     * @return string|null
     */
    public function getRouteTableId()
    {
        return $this->get("RouteTableId");
    }

    /**
     * RouteTableId: 路由表资源ID
     *
     * @param string $routeTableId
     */
    public function setRouteTableId($routeTableId)
    {
        $this->set("RouteTableId", $routeTableId);
    }

    /**
     * OffSet: 数据偏移量。默认为0
     *
     * @return integer|null
     */
    public function getOffSet()
    {
        return $this->get("OffSet");
    }

    /**
     * OffSet: 数据偏移量。默认为0
     *
     * @param int $offSet
     */
    public function setOffSet($offSet)
    {
        $this->set("OffSet", $offSet);
    }

    /**
     * Limit: 数据分页值。默认为20
     *
     * @return integer|null
     */
    public function getLimit()
    {
        return $this->get("Limit");
    }

    /**
     * Limit: 数据分页值。默认为20
     *
     * @param int $limit
     */
    public function setLimit($limit)
    {
        $this->set("Limit", $limit);
    }

    /**
     * BusinessId: 业务组ID
     *
     * @return string|null
     */
    public function getBusinessId()
    {
        return $this->get("BusinessId");
    }

    /**
     * BusinessId: 业务组ID
     *
     * @param string $businessId
     */
    public function setBusinessId($businessId)
    {
        $this->set("BusinessId", $businessId);
    }

    /**
     * Brief: 默认为 false, 返回详细路由规则信息
     *
     * @return boolean|null
     */
    public function getBrief()
    {
        return $this->get("Brief");
    }

    /**
     * Brief: 默认为 false, 返回详细路由规则信息
     *
     * @param boolean $brief
     */
    public function setBrief($brief)
    {
        $this->set("Brief", $brief);
    }

    /**
     * LongId: 默认为 false, 表示路由表是短 ID
     *
     * @return string|null
     */
    public function getLongId()
    {
        return $this->get("LongId");
    }

    /**
     * LongId: 默认为 false, 表示路由表是短 ID
     *
     * @param string $longId
     */
    public function setLongId($longId)
    {
        $this->set("LongId", $longId);
    }
}
