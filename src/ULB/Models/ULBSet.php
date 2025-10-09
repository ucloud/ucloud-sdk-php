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

class ULBSet extends Response
{
    

    /**
     * ULBId: 负载均衡的资源ID
     *
     * @return string|null
     */
    public function getULBId()
    {
        return $this->get("ULBId");
    }

    /**
     * ULBId: 负载均衡的资源ID
     *
     * @param string $ulbId
     */
    public function setULBId($ulbId)
    {
        $this->set("ULBId", $ulbId);
    }

    /**
     * Name: 负载均衡的资源名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 负载均衡的资源名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Tag: 负载均衡的业务组名称
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 负载均衡的业务组名称
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * Remark: 负载均衡的备注
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 负载均衡的备注
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * BandwidthType: 带宽类型，枚举值为： 0，非共享带宽； 1，共享带宽
     *
     * @return integer|null
     */
    public function getBandwidthType()
    {
        return $this->get("BandwidthType");
    }

    /**
     * BandwidthType: 带宽类型，枚举值为： 0，非共享带宽； 1，共享带宽
     *
     * @param int $bandwidthType
     */
    public function setBandwidthType($bandwidthType)
    {
        $this->set("BandwidthType", $bandwidthType);
    }

    /**
     * Bandwidth: 带宽
     *
     * @return integer|null
     */
    public function getBandwidth()
    {
        return $this->get("Bandwidth");
    }

    /**
     * Bandwidth: 带宽
     *
     * @param int $bandwidth
     */
    public function setBandwidth($bandwidth)
    {
        $this->set("Bandwidth", $bandwidth);
    }

    /**
     * CreateTime: ULB的创建时间，格式为Unix Timestamp
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: ULB的创建时间，格式为Unix Timestamp
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * IPSet: ULB的详细信息列表，具体结构见下方 ULBIPSet
     *
     * @return ULBIPSet[]|null
     */
    public function getIPSet()
    {
        $items = $this->get("IPSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ULBIPSet($item));
        }
        return $result;
    }

    /**
     * IPSet: ULB的详细信息列表，具体结构见下方 ULBIPSet
     *
     * @param ULBIPSet[] $ipSet
     */
    public function setIPSet(array $ipSet)
    {
        $result = [];
        foreach ($ipSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * VServerSet: 负载均衡实例中存在的VServer实例列表，具体结构见下方 ULBVServerSet
     *
     * @return ULBVServerSet[]|null
     */
    public function getVServerSet()
    {
        $items = $this->get("VServerSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ULBVServerSet($item));
        }
        return $result;
    }

    /**
     * VServerSet: 负载均衡实例中存在的VServer实例列表，具体结构见下方 ULBVServerSet
     *
     * @param ULBVServerSet[] $vServerSet
     */
    public function setVServerSet(array $vServerSet)
    {
        $result = [];
        foreach ($vServerSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * ULBType: ULB 的类型
     *
     * @return string|null
     */
    public function getULBType()
    {
        return $this->get("ULBType");
    }

    /**
     * ULBType: ULB 的类型
     *
     * @param string $ulbType
     */
    public function setULBType($ulbType)
    {
        $this->set("ULBType", $ulbType);
    }

    /**
     * IPVersion: ULB ip类型，枚举值：IPv6 / IPv4 （内部测试，暂未对外开放）
     *
     * @return string|null
     */
    public function getIPVersion()
    {
        return $this->get("IPVersion");
    }

    /**
     * IPVersion: ULB ip类型，枚举值：IPv6 / IPv4 （内部测试，暂未对外开放）
     *
     * @param string $ipVersion
     */
    public function setIPVersion($ipVersion)
    {
        $this->set("IPVersion", $ipVersion);
    }

    /**
     * SnatIps: ULB后向代理IP，仅当有代理IP时返回否
     *
     * @return string[]|null
     */
    public function getSnatIps()
    {
        return $this->get("SnatIps");
    }

    /**
     * SnatIps: ULB后向代理IP，仅当有代理IP时返回否
     *
     * @param string[] $snatIps
     */
    public function setSnatIps(array $snatIps)
    {
        $this->set("SnatIps", $snatIps);
    }

    /**
     * ListenType: ULB 监听器类型，枚举值：RequestProxy，请求代理； PacketsTransmit ，报文转发；Comprehensive，兼容型；Pending，未定型
     *
     * @return string|null
     */
    public function getListenType()
    {
        return $this->get("ListenType");
    }

    /**
     * ListenType: ULB 监听器类型，枚举值：RequestProxy，请求代理； PacketsTransmit ，报文转发；Comprehensive，兼容型；Pending，未定型
     *
     * @param string $listenType
     */
    public function setListenType($listenType)
    {
        $this->set("ListenType", $listenType);
    }

    /**
     * VPCId: ULB所在的VPC的ID
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: ULB所在的VPC的ID
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * SubnetId: ULB 为 InnerMode 时，ULB 所属的子网ID，默认为空
     *
     * @return string|null
     */
    public function getSubnetId()
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: ULB 为 InnerMode 时，ULB 所属的子网ID，默认为空
     *
     * @param string $subnetId
     */
    public function setSubnetId($subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * BusinessId: ULB 所属的业务组ID
     *
     * @return string|null
     */
    public function getBusinessId()
    {
        return $this->get("BusinessId");
    }

    /**
     * BusinessId: ULB 所属的业务组ID
     *
     * @param string $businessId
     */
    public function setBusinessId($businessId)
    {
        $this->set("BusinessId", $businessId);
    }

    /**
     * PrivateIP: ULB的内网IP，当ULBType为OuterMode时，该值为空
     *
     * @return string|null
     */
    public function getPrivateIP()
    {
        return $this->get("PrivateIP");
    }

    /**
     * PrivateIP: ULB的内网IP，当ULBType为OuterMode时，该值为空
     *
     * @param string $privateIP
     */
    public function setPrivateIP($privateIP)
    {
        $this->set("PrivateIP", $privateIP);
    }

    /**
     * FirewallSet: 防火墙信息，具体结构见下方 FirewallSet
     *
     * @return FirewallSet[]|null
     */
    public function getFirewallSet()
    {
        $items = $this->get("FirewallSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new FirewallSet($item));
        }
        return $result;
    }

    /**
     * FirewallSet: 防火墙信息，具体结构见下方 FirewallSet
     *
     * @param FirewallSet[] $firewallSet
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
     * EnableLog: ULB是否开启日志功能。0，关闭；1，开启
     *
     * @return integer|null
     */
    public function getEnableLog()
    {
        return $this->get("EnableLog");
    }

    /**
     * EnableLog: ULB是否开启日志功能。0，关闭；1，开启
     *
     * @param int $enableLog
     */
    public function setEnableLog($enableLog)
    {
        $this->set("EnableLog", $enableLog);
    }

    /**
     * LogSet: 日志功能相关信息，仅当EnableLog为true时会返回，具体结构见下方 LoggerSet
     *
     * @return LoggerSet|null
     */
    public function getLogSet()
    {
        return new LoggerSet($this->get("LogSet"));
    }

    /**
     * LogSet: 日志功能相关信息，仅当EnableLog为true时会返回，具体结构见下方 LoggerSet
     *
     * @param LoggerSet $logSet
     */
    public function setLogSet(array $logSet)
    {
        $this->set("LogSet", $logSet->getAll());
    }
}
