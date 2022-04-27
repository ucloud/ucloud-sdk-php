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

class NetworkInterface extends Response
{
    

    /**
     * InterfaceId: 虚拟网卡资源ID
     *
     * @return string|null
     */
    public function getInterfaceId(): string
    {
        return $this->get("InterfaceId");
    }

    /**
     * InterfaceId: 虚拟网卡资源ID
     *
     * @param string $interfaceId
     */
    public function setInterfaceId(string $interfaceId)
    {
        $this->set("InterfaceId", $interfaceId);
    }

    /**
     * VPCId: 所属VPC
     *
     * @return string|null
     */
    public function getVPCId(): string
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: 所属VPC
     *
     * @param string $vpcId
     */
    public function setVPCId(string $vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * SubnetId: 所属子网
     *
     * @return string|null
     */
    public function getSubnetId(): string
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 所属子网
     *
     * @param string $subnetId
     */
    public function setSubnetId(string $subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * PrivateIpSet: 关联内网IP。当前一个网卡仅支持绑定一个内网IP
     *
     * @return string[]|null
     */
    public function getPrivateIpSet(): array
    {
        return $this->get("PrivateIpSet");
    }

    /**
     * PrivateIpSet: 关联内网IP。当前一个网卡仅支持绑定一个内网IP
     *
     * @param string[] $privateIpSet
     */
    public function setPrivateIpSet(array $privateIpSet)
    {
        $this->set("PrivateIpSet", $privateIpSet);
    }

    /**
     * MacAddress: 关联Mac
     *
     * @return string|null
     */
    public function getMacAddress(): string
    {
        return $this->get("MacAddress");
    }

    /**
     * MacAddress: 关联Mac
     *
     * @param string $macAddress
     */
    public function setMacAddress(string $macAddress)
    {
        $this->set("MacAddress", $macAddress);
    }

    /**
     * Status: 绑定状态
     *
     * @return integer|null
     */
    public function getStatus(): int
    {
        return $this->get("Status");
    }

    /**
     * Status: 绑定状态
     *
     * @param int $status
     */
    public function setStatus(int $status)
    {
        $this->set("Status", $status);
    }

    /**
     * PrivateIp: 网卡的内网IP信息
     *
     * @return string[]|null
     */
    public function getPrivateIp(): array
    {
        return $this->get("PrivateIp");
    }

    /**
     * PrivateIp: 网卡的内网IP信息
     *
     * @param string[] $privateIp
     */
    public function setPrivateIp(array $privateIp)
    {
        $this->set("PrivateIp", $privateIp);
    }

    /**
     * Name: 虚拟网卡名称
     *
     * @return string|null
     */
    public function getName(): string
    {
        return $this->get("Name");
    }

    /**
     * Name: 虚拟网卡名称
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->set("Name", $name);
    }

    /**
     * Netmask: 内网IP掩码
     *
     * @return string|null
     */
    public function getNetmask(): string
    {
        return $this->get("Netmask");
    }

    /**
     * Netmask: 内网IP掩码
     *
     * @param string $netmask
     */
    public function setNetmask(string $netmask)
    {
        $this->set("Netmask", $netmask);
    }

    /**
     * Gateway: 默认网关
     *
     * @return string|null
     */
    public function getGateway(): string
    {
        return $this->get("Gateway");
    }

    /**
     * Gateway: 默认网关
     *
     * @param string $gateway
     */
    public function setGateway(string $gateway)
    {
        $this->set("Gateway", $gateway);
    }

    /**
     * AttachInstanceId: 绑定实例资源ID
     *
     * @return string|null
     */
    public function getAttachInstanceId(): string
    {
        return $this->get("AttachInstanceId");
    }

    /**
     * AttachInstanceId: 绑定实例资源ID
     *
     * @param string $attachInstanceId
     */
    public function setAttachInstanceId(string $attachInstanceId)
    {
        $this->set("AttachInstanceId", $attachInstanceId);
    }

    /**
     * Default: 是否是绑定实例的默认网卡 false:不是 true:是
     *
     * @return boolean|null
     */
    public function getDefault(): bool
    {
        return $this->get("Default");
    }

    /**
     * Default: 是否是绑定实例的默认网卡 false:不是 true:是
     *
     * @param boolean $default
     */
    public function setDefault(bool $default)
    {
        $this->set("Default", $default);
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
     * EIPIdSet: 虚拟网卡绑定的EIP ID信息
     *
     * @return string[]|null
     */
    public function getEIPIdSet(): array
    {
        return $this->get("EIPIdSet");
    }

    /**
     * EIPIdSet: 虚拟网卡绑定的EIP ID信息
     *
     * @param string[] $eipIdSet
     */
    public function setEIPIdSet(array $eipIdSet)
    {
        $this->set("EIPIdSet", $eipIdSet);
    }

    /**
     * FirewallIdSet: 虚拟网卡绑定的防火墙ID信息
     *
     * @return string[]|null
     */
    public function getFirewallIdSet(): array
    {
        return $this->get("FirewallIdSet");
    }

    /**
     * FirewallIdSet: 虚拟网卡绑定的防火墙ID信息
     *
     * @param string[] $firewallIdSet
     */
    public function setFirewallIdSet(array $firewallIdSet)
    {
        $this->set("FirewallIdSet", $firewallIdSet);
    }

    /**
     * PrivateIplimit: 网卡的内网IP配额信息
     *
     * @return string[]|null
     */
    public function getPrivateIplimit(): array
    {
        return $this->get("PrivateIplimit");
    }

    /**
     * PrivateIplimit: 网卡的内网IP配额信息
     *
     * @param string[] $privateIplimit
     */
    public function setPrivateIplimit(array $privateIplimit)
    {
        $this->set("PrivateIplimit", $privateIplimit);
    }
}
