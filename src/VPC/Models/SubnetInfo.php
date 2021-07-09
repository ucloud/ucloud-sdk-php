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
namespace UCloud\VPC\Models;

use UCloud\Core\Response\Response;

class SubnetInfo extends Response
{
    

    /**
     * Zone: 可用区名称
     *
     * @return string|null
     */
    public function getZone(): string
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区名称
     *
     * @param string $zone
     */
    public function setZone(string $zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * IPv6Network: 子网关联的IPv6网段
     *
     * @return string|null
     */
    public function getIPv6Network(): string
    {
        return $this->get("IPv6Network");
    }

    /**
     * IPv6Network: 子网关联的IPv6网段
     *
     * @param string $iPv6Network
     */
    public function setIPv6Network(string $iPv6Network)
    {
        $this->set("IPv6Network", $iPv6Network);
    }

    /**
     * VPCId: VPCId
     *
     * @return string|null
     */
    public function getVPCId(): string
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: VPCId
     *
     * @param string $vpcId
     */
    public function setVPCId(string $vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * VPCName: VPC名称
     *
     * @return string|null
     */
    public function getVPCName(): string
    {
        return $this->get("VPCName");
    }

    /**
     * VPCName: VPC名称
     *
     * @param string $vpcName
     */
    public function setVPCName(string $vpcName)
    {
        $this->set("VPCName", $vpcName);
    }

    /**
     * SubnetId: 子网Id
     *
     * @return string|null
     */
    public function getSubnetId(): string
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 子网Id
     *
     * @param string $subnetId
     */
    public function setSubnetId(string $subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * SubnetName: 子网名称
     *
     * @return string|null
     */
    public function getSubnetName(): string
    {
        return $this->get("SubnetName");
    }

    /**
     * SubnetName: 子网名称
     *
     * @param string $subnetName
     */
    public function setSubnetName(string $subnetName)
    {
        $this->set("SubnetName", $subnetName);
    }

    /**
     * Remark: 备注
     *
     * @return string|null
     */
    public function getRemark(): string
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 备注
     *
     * @param string $remark
     */
    public function setRemark(string $remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * Tag: 业务组
     *
     * @return string|null
     */
    public function getTag(): string
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组
     *
     * @param string $tag
     */
    public function setTag(string $tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * SubnetType: 子网类型
     *
     * @return integer|null
     */
    public function getSubnetType(): int
    {
        return $this->get("SubnetType");
    }

    /**
     * SubnetType: 子网类型
     *
     * @param int $subnetType
     */
    public function setSubnetType(int $subnetType)
    {
        $this->set("SubnetType", $subnetType);
    }

    /**
     * Subnet: 子网网段
     *
     * @return string|null
     */
    public function getSubnet(): string
    {
        return $this->get("Subnet");
    }

    /**
     * Subnet: 子网网段
     *
     * @param string $subnet
     */
    public function setSubnet(string $subnet)
    {
        $this->set("Subnet", $subnet);
    }

    /**
     * Netmask: 子网掩码
     *
     * @return string|null
     */
    public function getNetmask(): string
    {
        return $this->get("Netmask");
    }

    /**
     * Netmask: 子网掩码
     *
     * @param string $netmask
     */
    public function setNetmask(string $netmask)
    {
        $this->set("Netmask", $netmask);
    }

    /**
     * Gateway: 子网网关
     *
     * @return string|null
     */
    public function getGateway(): string
    {
        return $this->get("Gateway");
    }

    /**
     * Gateway: 子网网关
     *
     * @param string $gateway
     */
    public function setGateway(string $gateway)
    {
        $this->set("Gateway", $gateway);
    }

    /**
     * CreateTime: 创建时间
     *
     * @return integer|null
     */
    public function getCreateTime(): int
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * HasNATGW: 是否有natgw
     *
     * @return boolean|null
     */
    public function getHasNATGW(): bool
    {
        return $this->get("HasNATGW");
    }

    /**
     * HasNATGW: 是否有natgw
     *
     * @param boolean $hasNATGW
     */
    public function setHasNATGW(bool $hasNATGW)
    {
        $this->set("HasNATGW", $hasNATGW);
    }

    /**
     * RouteTableId: 路由表Id
     *
     * @return string|null
     */
    public function getRouteTableId(): string
    {
        return $this->get("RouteTableId");
    }

    /**
     * RouteTableId: 路由表Id
     *
     * @param string $routeTableId
     */
    public function setRouteTableId(string $routeTableId)
    {
        $this->set("RouteTableId", $routeTableId);
    }

    /**
     * AvailableIPs: 可用IP数量
     *
     * @return integer|null
     */
    public function getAvailableIPs(): int
    {
        return $this->get("AvailableIPs");
    }

    /**
     * AvailableIPs: 可用IP数量
     *
     * @param int $availableIPs
     */
    public function setAvailableIPs(int $availableIPs)
    {
        $this->set("AvailableIPs", $availableIPs);
    }
}
