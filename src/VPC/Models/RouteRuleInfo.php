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

class RouteRuleInfo extends Response
{
    

    /**
     * AccountId: 项目ID信息
     *
     * @return integer|null
     */
    public function getAccountId()
    {
        return $this->get("AccountId");
    }

    /**
     * AccountId: 项目ID信息
     *
     * @param int $accountId
     */
    public function setAccountId($accountId)
    {
        $this->set("AccountId", $accountId);
    }

    /**
     * DstAddr: 目的地址
     *
     * @return string|null
     */
    public function getDstAddr()
    {
        return $this->get("DstAddr");
    }

    /**
     * DstAddr: 目的地址
     *
     * @param string $dstAddr
     */
    public function setDstAddr($dstAddr)
    {
        $this->set("DstAddr", $dstAddr);
    }

    /**
     * DstPort: 保留字段，暂未使用
     *
     * @return integer|null
     */
    public function getDstPort()
    {
        return $this->get("DstPort");
    }

    /**
     * DstPort: 保留字段，暂未使用
     *
     * @param int $dstPort
     */
    public function setDstPort($dstPort)
    {
        $this->set("DstPort", $dstPort);
    }

    /**
     * NexthopId: 路由下一跳资源ID
     *
     * @return string|null
     */
    public function getNexthopId()
    {
        return $this->get("NexthopId");
    }

    /**
     * NexthopId: 路由下一跳资源ID
     *
     * @param string $nexthopId
     */
    public function setNexthopId($nexthopId)
    {
        $this->set("NexthopId", $nexthopId);
    }

    /**
     * NexthopType: 路由表下一跳类型。LOCAL，本VPC内部通信路由；PUBLIC，公共服务路由；CNAT，外网路由；UDPN，跨域高速通道路由；HYBRIDGW，混合云路由；INSTANCE，实例路由；VNET，VPC联通路由；IPSEC VPN，指向VPN网关的路由。
     *
     * @return string|null
     */
    public function getNexthopType()
    {
        return $this->get("NexthopType");
    }

    /**
     * NexthopType: 路由表下一跳类型。LOCAL，本VPC内部通信路由；PUBLIC，公共服务路由；CNAT，外网路由；UDPN，跨域高速通道路由；HYBRIDGW，混合云路由；INSTANCE，实例路由；VNET，VPC联通路由；IPSEC VPN，指向VPN网关的路由。
     *
     * @param string $nexthopType
     */
    public function setNexthopType($nexthopType)
    {
        $this->set("NexthopType", $nexthopType);
    }

    /**
     * OriginAddr: 保留字段，暂未使用
     *
     * @return string|null
     */
    public function getOriginAddr()
    {
        return $this->get("OriginAddr");
    }

    /**
     * OriginAddr: 保留字段，暂未使用
     *
     * @param string $originAddr
     */
    public function setOriginAddr($originAddr)
    {
        $this->set("OriginAddr", $originAddr);
    }

    /**
     * Priority: 保留字段，暂未使用
     *
     * @return integer|null
     */
    public function getPriority()
    {
        return $this->get("Priority");
    }

    /**
     * Priority: 保留字段，暂未使用
     *
     * @param int $priority
     */
    public function setPriority($priority)
    {
        $this->set("Priority", $priority);
    }

    /**
     * Remark: 路由规则备注
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 路由规则备注
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * RouteRuleId: 规则ID
     *
     * @return string|null
     */
    public function getRouteRuleId()
    {
        return $this->get("RouteRuleId");
    }

    /**
     * RouteRuleId: 规则ID
     *
     * @param string $routeRuleId
     */
    public function setRouteRuleId($routeRuleId)
    {
        $this->set("RouteRuleId", $routeRuleId);
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
     * RuleType: 路由规则类型。0，系统路由规则；1，自定义路由规则
     *
     * @return integer|null
     */
    public function getRuleType()
    {
        return $this->get("RuleType");
    }

    /**
     * RuleType: 路由规则类型。0，系统路由规则；1，自定义路由规则
     *
     * @param int $ruleType
     */
    public function setRuleType($ruleType)
    {
        $this->set("RuleType", $ruleType);
    }

    /**
     * SrcAddr: 保留字段，暂未使用
     *
     * @return string|null
     */
    public function getSrcAddr()
    {
        return $this->get("SrcAddr");
    }

    /**
     * SrcAddr: 保留字段，暂未使用
     *
     * @param string $srcAddr
     */
    public function setSrcAddr($srcAddr)
    {
        $this->set("SrcAddr", $srcAddr);
    }

    /**
     * SrcPort: 保留字段，暂未使用
     *
     * @return integer|null
     */
    public function getSrcPort()
    {
        return $this->get("SrcPort");
    }

    /**
     * SrcPort: 保留字段，暂未使用
     *
     * @param int $srcPort
     */
    public function setSrcPort($srcPort)
    {
        $this->set("SrcPort", $srcPort);
    }

    /**
     * VNetId: 所属的VPC
     *
     * @return string|null
     */
    public function getVNetId()
    {
        return $this->get("VNetId");
    }

    /**
     * VNetId: 所属的VPC
     *
     * @param string $vNetId
     */
    public function setVNetId($vNetId)
    {
        $this->set("VNetId", $vNetId);
    }
}
