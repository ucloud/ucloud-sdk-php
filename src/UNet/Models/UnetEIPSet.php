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
namespace UCloud\UNet\Models;

use UCloud\Core\Response\Response;

class UnetEIPSet extends Response
{
    

    /**
     * EIPId: 弹性IP的资源ID
     *
     * @return string|null
     */
    public function getEIPId()
    {
        return $this->get("EIPId");
    }

    /**
     * EIPId: 弹性IP的资源ID
     *
     * @param string $eipId
     */
    public function setEIPId($eipId)
    {
        $this->set("EIPId", $eipId);
    }

    /**
     * Weight: 外网出口权重, 默认为50, 范围[0-100]
     *
     * @return int|null
     */
    public function getWeight()
    {
        return $this->get("Weight");
    }

    /**
     * Weight: 外网出口权重, 默认为50, 范围[0-100]
     *
     * @param int $weight
     */
    public function setWeight($weight)
    {
        $this->set("Weight", $weight);
    }

    /**
     * BandwidthType: 带宽模式, 枚举值为: 0: 非共享带宽模式, 1: 共享带宽模式
     *
     * @return int|null
     */
    public function getBandwidthType()
    {
        return $this->get("BandwidthType");
    }

    /**
     * BandwidthType: 带宽模式, 枚举值为: 0: 非共享带宽模式, 1: 共享带宽模式
     *
     * @param int $bandwidthType
     */
    public function setBandwidthType($bandwidthType)
    {
        $this->set("BandwidthType", $bandwidthType);
    }

    /**
     * Bandwidth: 弹性IP的带宽, 单位为Mbps, 当BandwidthType=1时, 该处显示为共享带宽值. 当BandwidthType=0时, 该处显示这个弹性IP的带宽.
     *
     * @return int|null
     */
    public function getBandwidth()
    {
        return $this->get("Bandwidth");
    }

    /**
     * Bandwidth: 弹性IP的带宽, 单位为Mbps, 当BandwidthType=1时, 该处显示为共享带宽值. 当BandwidthType=0时, 该处显示这个弹性IP的带宽.
     *
     * @param int $bandwidth
     */
    public function setBandwidth($bandwidth)
    {
        $this->set("Bandwidth", $bandwidth);
    }

    /**
     * Status: 弹性IP的资源绑定状态, 枚举值为: used: 已绑定, free: 未绑定, freeze: 已冻结
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 弹性IP的资源绑定状态, 枚举值为: used: 已绑定, free: 未绑定, freeze: 已冻结
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * ChargeType: 付费方式, 枚举值为: Year, 按年付费; Month, 按月付费; Dynamic, 按小时付费; Trial, 试用. 按小时付费和试用这两种付费模式需要开通权限.
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 付费方式, 枚举值为: Year, 按年付费; Month, 按月付费; Dynamic, 按小时付费; Trial, 试用. 按小时付费和试用这两种付费模式需要开通权限.
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * CreateTime: 弹性IP的创建时间, 格式为Unix Timestamp
     *
     * @return int|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 弹性IP的创建时间, 格式为Unix Timestamp
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * ExpireTime: 弹性IP的到期时间, 格式为Unix Timestamp
     *
     * @return int|null
     */
    public function getExpireTime()
    {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: 弹性IP的到期时间, 格式为Unix Timestamp
     *
     * @param int $expireTime
     */
    public function setExpireTime($expireTime)
    {
        $this->set("ExpireTime", $expireTime);
    }

    /**
     * Resource: 弹性IP的详细信息列表, 具体结构见下方 UnetEIPResourceSet
     *
     * @return UnetEIPResourceSet|null
     */
    public function getResource()
    {
        return new UnetEIPResourceSet($this->get("Resource"));
    }

    /**
     * Resource: 弹性IP的详细信息列表, 具体结构见下方 UnetEIPResourceSet
     *
     * @param UnetEIPResourceSet $resource
     */
    public function setResource(array $resource)
    {
        $this->set("Resource", $resource->getAll());
    }

    /**
     * EIPAddr: 弹性IP的详细信息列表, 具体结构见下方 UnetEIPAddrSet
     *
     * @return UnetEIPAddrSet[]|null
     */
    public function getEIPAddr()
    {
        $items = $this->get("EIPAddr");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UnetEIPAddrSet($item));
        }
        return $result;
    }

    /**
     * EIPAddr: 弹性IP的详细信息列表, 具体结构见下方 UnetEIPAddrSet
     *
     * @param UnetEIPAddrSet[] $eipAddr
     */
    public function setEIPAddr(array $eipAddr)
    {
        $result = [];
        foreach ($eipAddr as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Name: 弹性IP的名称,缺省值为 "EIP"
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 弹性IP的名称,缺省值为 "EIP"
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Tag: 弹性IP的业务组标识, 缺省值为 "Default"
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 弹性IP的业务组标识, 缺省值为 "Default"
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * Remark: 弹性IP的备注, 缺省值为 ""
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 弹性IP的备注, 缺省值为 ""
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * PayMode: 弹性IP的计费模式, 枚举值为: "Bandwidth", 带宽计费; "Traffic", 流量计费; "ShareBandwidth",共享带宽模式. 默认为 "Bandwidth".
     *
     * @return string|null
     */
    public function getPayMode()
    {
        return $this->get("PayMode");
    }

    /**
     * PayMode: 弹性IP的计费模式, 枚举值为: "Bandwidth", 带宽计费; "Traffic", 流量计费; "ShareBandwidth",共享带宽模式. 默认为 "Bandwidth".
     *
     * @param string $payMode
     */
    public function setPayMode($payMode)
    {
        $this->set("PayMode", $payMode);
    }

    /**
     * ShareBandwidthSet: 共享带宽信息 参见 ShareBandwidthSet
     *
     * @return ShareBandwidthSet|null
     */
    public function getShareBandwidthSet()
    {
        return new ShareBandwidthSet($this->get("ShareBandwidthSet"));
    }

    /**
     * ShareBandwidthSet: 共享带宽信息 参见 ShareBandwidthSet
     *
     * @param ShareBandwidthSet $shareBandwidthSet
     */
    public function setShareBandwidthSet(array $shareBandwidthSet)
    {
        $this->set("ShareBandwidthSet", $shareBandwidthSet->getAll());
    }

    /**
     * Expire: 弹性IP是否到期
     *
     * @return boolean|null
     */
    public function getExpire()
    {
        return $this->get("Expire");
    }

    /**
     * Expire: 弹性IP是否到期
     *
     * @param boolean $expire
     */
    public function setExpire($expire)
    {
        $this->set("Expire", $expire);
    }


}
