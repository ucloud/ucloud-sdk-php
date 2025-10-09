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
namespace UCloud\ULB\Models;

use UCloud\Core\Response\Response;

class LoadBalancer extends Response
{
    

    /**
     * VPCId: 负载均衡实例所属的VPC资源ID
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: 负载均衡实例所属的VPC资源ID
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * SubnetId: 负载均衡实例所属的子网资源ID。负载均衡实例的内网VIP和SNAT场景的源IP限定在该子网内；指定子网不影响添加后端服务节点时的范围，依旧是整个VPC下支持的资源
     *
     * @return string|null
     */
    public function getSubnetId()
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 负载均衡实例所属的子网资源ID。负载均衡实例的内网VIP和SNAT场景的源IP限定在该子网内；指定子网不影响添加后端服务节点时的范围，依旧是整个VPC下支持的资源
     *
     * @param string $subnetId
     */
    public function setSubnetId($subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * LoadBalancerId: 负载均衡实例的ID
     *
     * @return string|null
     */
    public function getLoadBalancerId()
    {
        return $this->get("LoadBalancerId");
    }

    /**
     * LoadBalancerId: 负载均衡实例的ID
     *
     * @param string $loadBalancerId
     */
    public function setLoadBalancerId($loadBalancerId)
    {
        $this->set("LoadBalancerId", $loadBalancerId);
    }

    /**
     * Type: 负载均衡实例的类型。限定枚举值：Application -> 应用型，Network -> 网络型
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 负载均衡实例的类型。限定枚举值：Application -> 应用型，Network -> 网络型
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * Name: 负载均衡实例的名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 负载均衡实例的名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Tag: 负载均衡实例所属的业务组ID
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 负载均衡实例所属的业务组ID
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * Remark: 负载均衡实例的备注信息
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 负载均衡实例的备注信息
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * IPVersion: 负载均衡实例支持的IP协议版本
     *
     * @return string|null
     */
    public function getIPVersion()
    {
        return $this->get("IPVersion");
    }

    /**
     * IPVersion: 负载均衡实例支持的IP协议版本
     *
     * @param string $ipVersion
     */
    public function setIPVersion($ipVersion)
    {
        $this->set("IPVersion", $ipVersion);
    }

    /**
     * IPInfos: 绑定的IP信息。具体结构详见 IPInfo
     *
     * @return IPInfo[]|null
     */
    public function getIPInfos()
    {
        $items = $this->get("IPInfos");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new IPInfo($item));
        }
        return $result;
    }

    /**
     * IPInfos: 绑定的IP信息。具体结构详见 IPInfo
     *
     * @param IPInfo[] $ipInfos
     */
    public function setIPInfos(array $ipInfos)
    {
        $result = [];
        foreach ($ipInfos as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * SnatIPs: 应用型实例的代理IP或网络型FULLNAT模式下snat所用的IP
     *
     * @return string[]|null
     */
    public function getSnatIPs()
    {
        return $this->get("SnatIPs");
    }

    /**
     * SnatIPs: 应用型实例的代理IP或网络型FULLNAT模式下snat所用的IP
     *
     * @param string[] $snatIPs
     */
    public function setSnatIPs(array $snatIPs)
    {
        $this->set("SnatIPs", $snatIPs);
    }

    /**
     * Firewall: 防火墙信息
     *
     * @return FirewallSet|null
     */
    public function getFirewall()
    {
        return new FirewallSet($this->get("Firewall"));
    }

    /**
     * Firewall: 防火墙信息
     *
     * @param FirewallSet $firewall
     */
    public function setFirewall(array $firewall)
    {
        $this->set("Firewall", $firewall->getAll());
    }

    /**
     * AccessLogConfig: （应用型专用）访问日志相关配置
     *
     * @return AccessLogConfigSet|null
     */
    public function getAccessLogConfig()
    {
        return new AccessLogConfigSet($this->get("AccessLogConfig"));
    }

    /**
     * AccessLogConfig: （应用型专用）访问日志相关配置
     *
     * @param AccessLogConfigSet $accessLogConfig
     */
    public function setAccessLogConfig(array $accessLogConfig)
    {
        $this->set("AccessLogConfig", $accessLogConfig->getAll());
    }

    /**
     * ChargeType: 付费模式
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 付费模式
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * PurchaseValue: 有效期（计费）。格式为Unix Timestamp
     *
     * @return integer|null
     */
    public function getPurchaseValue()
    {
        return $this->get("PurchaseValue");
    }

    /**
     * PurchaseValue: 有效期（计费）。格式为Unix Timestamp
     *
     * @param int $purchaseValue
     */
    public function setPurchaseValue($purchaseValue)
    {
        $this->set("PurchaseValue", $purchaseValue);
    }

    /**
     * CreateTime: 负载均衡实例创建时间。格式为Unix Timestamp
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 负载均衡实例创建时间。格式为Unix Timestamp
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * Listeners: 监听器信息。当ShowDetail为false时，为空
     *
     * @return Listener[]|null
     */
    public function getListeners()
    {
        $items = $this->get("Listeners");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new Listener($item));
        }
        return $result;
    }

    /**
     * Listeners: 监听器信息。当ShowDetail为false时，为空
     *
     * @param Listener[] $listeners
     */
    public function setListeners(array $listeners)
    {
        $result = [];
        foreach ($listeners as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Status: lb状态：Normal-正常；Arrears-欠费停服
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: lb状态：Normal-正常；Arrears-欠费停服
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * AutoRenewEnabled: 是否开启自动续费
     *
     * @return boolean|null
     */
    public function getAutoRenewEnabled()
    {
        return $this->get("AutoRenewEnabled");
    }

    /**
     * AutoRenewEnabled: 是否开启自动续费
     *
     * @param boolean $autoRenewEnabled
     */
    public function setAutoRenewEnabled($autoRenewEnabled)
    {
        $this->set("AutoRenewEnabled", $autoRenewEnabled);
    }
}
