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

namespace UCloud\VPC\Models;

use UCloud\Core\Response\Response;

use UCloud\VPC\Models\RouteRuleInfo;
use UCloud\VPC\Models\DescribeRouteTableResponse;

class RouteTableInfo extends Response
{

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
    public function setRouteTableId(string $routeTableId)
    {
        $this->set("RouteTableId", $routeTableId);
    }
    /**
     * RouteTableType: 路由表类型。1为默认路由表，0为自定义路由表
     *
     * @return integer|null
     */
    public function getRouteTableType()
    {
        return $this->get("RouteTableType");
    }

    /**
     * RouteTableType: 路由表类型。1为默认路由表，0为自定义路由表
     *
     * @param int $routeTableType
     */
    public function setRouteTableType(int $routeTableType)
    {
        $this->set("RouteTableType", $routeTableType);
    }
    /**
     * SubnetCount: 绑定该路由表的子网数量
     *
     * @return integer|null
     */
    public function getSubnetCount()
    {
        return $this->get("SubnetCount");
    }

    /**
     * SubnetCount: 绑定该路由表的子网数量
     *
     * @param int $subnetCount
     */
    public function setSubnetCount(int $subnetCount)
    {
        $this->set("SubnetCount", $subnetCount);
    }
    /**
     * VPCId: 路由表所属的VPC资源ID
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: 路由表所属的VPC资源ID
     *
     * @param string $vpcId
     */
    public function setVPCId(string $vpcId)
    {
        $this->set("VPCId", $vpcId);
    }
    /**
     * VPCName: 路由表所属的VPC资源名称
     *
     * @return string|null
     */
    public function getVPCName()
    {
        return $this->get("VPCName");
    }

    /**
     * VPCName: 路由表所属的VPC资源名称
     *
     * @param string $vpcName
     */
    public function setVPCName(string $vpcName)
    {
        $this->set("VPCName", $vpcName);
    }
    /**
     * Tag: 路由表所属业务组
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 路由表所属业务组
     *
     * @param string $tag
     */
    public function setTag(string $tag)
    {
        $this->set("Tag", $tag);
    }
    /**
     * Remark: 路由表备注
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 路由表备注
     *
     * @param string $remark
     */
    public function setRemark(string $remark)
    {
        $this->set("Remark", $remark);
    }
    /**
     * CreateTime: 创建时间戳
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间戳
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime)
    {
        $this->set("CreateTime", $createTime);
    }
    /**
     * RouteRules: 路由规则
     *
     * @return RouteRuleInfoModel[]|null
     */
    public function getRouteRules()
    {
        $items = $this->get("RouteRules");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new RouteRuleInfoModel($item));
        }
        return $result;
    }

    /**
     * RouteRules: 路由规则
     *
     * @param RouteRuleInfoModel[] $routeRules
     */
    public function setRouteRules(array $routeRules)
    {
        $result = [];
        foreach ($routeRules as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
