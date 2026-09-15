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
namespace UCloud\VPC\Models;

use UCloud\Core\Response\Response;

class NetworkInterface extends Response
{
    

    /**
     * InterfaceId: 虚拟网卡资源ID
     *
     * @return string|null
     */
    public function getInterfaceId()
    {
        return $this->get("InterfaceId");
    }

    /**
     * InterfaceId: 虚拟网卡资源ID
     *
     * @param string $interfaceId
     */
    public function setInterfaceId($interfaceId)
    {
        $this->set("InterfaceId", $interfaceId);
    }

    /**
     * VPCId: 所属VPC
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: 所属VPC
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * SubnetId: 所属子网
     *
     * @return string|null
     */
    public function getSubnetId()
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 所属子网
     *
     * @param string $subnetId
     */
    public function setSubnetId($subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * PrivateIpSet: 关联内网IP。当前一个网卡仅支持绑定一个内网IP
     *
     * @return string[]|null
     */
    public function getPrivateIpSet()
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
    public function getMacAddress()
    {
        return $this->get("MacAddress");
    }

    /**
     * MacAddress: 关联Mac
     *
     * @param string $macAddress
     */
    public function setMacAddress($macAddress)
    {
        $this->set("MacAddress", $macAddress);
    }

    /**
     * Status: 绑定状态
     *
     * @return integer|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 绑定状态
     *
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * EIPIdSet: EIP Id 集合
     *
     * @return string[]|null
     */
    public function getEIPIdSet()
    {
        return $this->get("EIPIdSet");
    }

    /**
     * EIPIdSet: EIP Id 集合
     *
     * @param string[] $eipIdSet
     */
    public function setEIPIdSet(array $eipIdSet)
    {
        $this->set("EIPIdSet", $eipIdSet);
    }

    /**
     * FirewallIdSet: 防火墙 ID 集合
     *
     * @return string[]|null
     */
    public function getFirewallIdSet()
    {
        return $this->get("FirewallIdSet");
    }

    /**
     * FirewallIdSet: 防火墙 ID 集合
     *
     * @param string[] $firewallIdSet
     */
    public function setFirewallIdSet(array $firewallIdSet)
    {
        $this->set("FirewallIdSet", $firewallIdSet);
    }

    /**
     * FirewallSet: 防火墙信息
     *
     * @return FwInfo[]|null
     */
    public function getFirewallSet()
    {
        $items = $this->get("FirewallSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new FwInfo($item));
        }
        return $result;
    }

    /**
     * FirewallSet: 防火墙信息
     *
     * @param FwInfo[] $firewallSet
     */
    public function setFirewallSet(array $firewallSet)
    {
        $result = [];
        foreach ($firewallSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * EipDirectMode: EIP 直通 false：不是，true：是
     *
     * @return boolean|null
     */
    public function getEipDirectMode()
    {
        return $this->get("EipDirectMode");
    }

    /**
     * EipDirectMode: EIP 直通 false：不是，true：是
     *
     * @param boolean $eipDirectMode
     */
    public function setEipDirectMode($eipDirectMode)
    {
        $this->set("EipDirectMode", $eipDirectMode);
    }

    /**
     * EipDirectionVersion: EIP 直通版本信息
     *
     * @return integer|null
     */
    public function getEipDirectionVersion()
    {
        return $this->get("EipDirectionVersion");
    }

    /**
     * EipDirectionVersion: EIP 直通版本信息
     *
     * @param int $eipDirectionVersion
     */
    public function setEipDirectionVersion($eipDirectionVersion)
    {
        $this->set("EipDirectionVersion", $eipDirectionVersion);
    }

    /**
     * DefaultOutput: 默认IP 出口
     *
     * @return string|null
     */
    public function getDefaultOutput()
    {
        return $this->get("DefaultOutput");
    }

    /**
     * DefaultOutput: 默认IP 出口
     *
     * @param string $defaultOutput
     */
    public function setDefaultOutput($defaultOutput)
    {
        $this->set("DefaultOutput", $defaultOutput);
    }

    /**
     * PrivateIp: 私有 IP 信息
     *
     * @return UNIIpInfo[]|null
     */
    public function getPrivateIp()
    {
        $items = $this->get("PrivateIp");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UNIIpInfo($item));
        }
        return $result;
    }

    /**
     * PrivateIp: 私有 IP 信息
     *
     * @param UNIIpInfo[] $privateIp
     */
    public function setPrivateIp(array $privateIp)
    {
        $result = [];
        foreach ($privateIp as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * IPv6AddressInfo: IPv6 地址信息
     *
     * @return SimpleIPv6AddressInfo[]|null
     */
    public function getIPv6AddressInfo()
    {
        $items = $this->get("IPv6AddressInfo");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new SimpleIPv6AddressInfo($item));
        }
        return $result;
    }

    /**
     * IPv6AddressInfo: IPv6 地址信息
     *
     * @param SimpleIPv6AddressInfo[] $iPv6AddressInfo
     */
    public function setIPv6AddressInfo(array $iPv6AddressInfo)
    {
        $result = [];
        foreach ($iPv6AddressInfo as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * IPv6Gateway: IPv6 网关地址
     *
     * @return string|null
     */
    public function getIPv6Gateway()
    {
        return $this->get("IPv6Gateway");
    }

    /**
     * IPv6Gateway: IPv6 网关地址
     *
     * @param string $iPv6Gateway
     */
    public function setIPv6Gateway($iPv6Gateway)
    {
        $this->set("IPv6Gateway", $iPv6Gateway);
    }

    /**
     * IPv6Mask: IPv6 掩码
     *
     * @return integer|null
     */
    public function getIPv6Mask()
    {
        return $this->get("IPv6Mask");
    }

    /**
     * IPv6Mask: IPv6 掩码
     *
     * @param int $iPv6Mask
     */
    public function setIPv6Mask($iPv6Mask)
    {
        $this->set("IPv6Mask", $iPv6Mask);
    }

    /**
     * OperatorName: 运营商
     *
     * @return string|null
     */
    public function getOperatorName()
    {
        return $this->get("OperatorName");
    }

    /**
     * OperatorName: 运营商
     *
     * @param string $operatorName
     */
    public function setOperatorName($operatorName)
    {
        $this->set("OperatorName", $operatorName);
    }

    /**
     * SecGroupCount: 关联安全组数量
     *
     * @return integer|null
     */
    public function getSecGroupCount()
    {
        return $this->get("SecGroupCount");
    }

    /**
     * SecGroupCount: 关联安全组数量
     *
     * @param int $secGroupCount
     */
    public function setSecGroupCount($secGroupCount)
    {
        $this->set("SecGroupCount", $secGroupCount);
    }

    /**
     * SecGroup: 关联安全组信息
     *
     * @return SecGroup[]|null
     */
    public function getSecGroup()
    {
        $items = $this->get("SecGroup");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new SecGroup($item));
        }
        return $result;
    }

    /**
     * SecGroup: 关联安全组信息
     *
     * @param SecGroup[] $secGroup
     */
    public function setSecGroup(array $secGroup)
    {
        $result = [];
        foreach ($secGroup as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Name: 虚拟网卡名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 虚拟网卡名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Netmask: 内网IP掩码
     *
     * @return string|null
     */
    public function getNetmask()
    {
        return $this->get("Netmask");
    }

    /**
     * Netmask: 内网IP掩码
     *
     * @param string $netmask
     */
    public function setNetmask($netmask)
    {
        $this->set("Netmask", $netmask);
    }

    /**
     * Gateway: 默认网关
     *
     * @return string|null
     */
    public function getGateway()
    {
        return $this->get("Gateway");
    }

    /**
     * Gateway: 默认网关
     *
     * @param string $gateway
     */
    public function setGateway($gateway)
    {
        $this->set("Gateway", $gateway);
    }

    /**
     * AttachInstanceId: 绑定实例资源ID
     *
     * @return string|null
     */
    public function getAttachInstanceId()
    {
        return $this->get("AttachInstanceId");
    }

    /**
     * AttachInstanceId: 绑定实例资源ID
     *
     * @param string $attachInstanceId
     */
    public function setAttachInstanceId($attachInstanceId)
    {
        $this->set("AttachInstanceId", $attachInstanceId);
    }

    /**
     * Default: 是否是绑定实例的默认网卡 false:不是 true:是
     *
     * @return boolean|null
     */
    public function getDefault()
    {
        return $this->get("Default");
    }

    /**
     * Default: 是否是绑定实例的默认网卡 false:不是 true:是
     *
     * @param boolean $default
     */
    public function setDefault($default)
    {
        $this->set("Default", $default);
    }

    /**
     * CreateTime: 创建时间
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * Remark: 备注
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 备注
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * Tag: 业务组
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * PrivateIpLimit: 私有 IP 配额
     *
     * @return UNIQuotaInfo|null
     */
    public function getPrivateIpLimit()
    {
        return new UNIQuotaInfo($this->get("PrivateIpLimit"));
    }

    /**
     * PrivateIpLimit: 私有 IP 配额
     *
     * @param UNIQuotaInfo $privateIpLimit
     */
    public function setPrivateIpLimit(array $privateIpLimit)
    {
        $this->set("PrivateIpLimit", $privateIpLimit->getAll());
    }
}
