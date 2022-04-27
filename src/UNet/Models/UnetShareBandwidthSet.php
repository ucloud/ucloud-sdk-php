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

use UCloud\UNet\Models\EIPAddrSet;
use UCloud\UNet\Models\DescribeShareBandwidthResponse;
use UCloud\UNet\Models\EIPSetData;

class UnetShareBandwidthSet extends Response
{

    /**
     * IPVersion: 共享带宽类型
     *
     * @return string|null
     */
    public function getIPVersion()
    {
        return $this->get("IPVersion");
    }

    /**
     * IPVersion: 共享带宽类型
     *
     * @param string $ipVersion
     */
    public function setIPVersion(string $ipVersion)
    {
        $this->set("IPVersion", $ipVersion);
    }
    /**
     * ShareBandwidth: 共享带宽值(预付费)/共享带宽峰值(后付费), 单位Mbps
     *
     * @return integer|null
     */
    public function getShareBandwidth()
    {
        return $this->get("ShareBandwidth");
    }

    /**
     * ShareBandwidth: 共享带宽值(预付费)/共享带宽峰值(后付费), 单位Mbps
     *
     * @param int $shareBandwidth
     */
    public function setShareBandwidth(int $shareBandwidth)
    {
        $this->set("ShareBandwidth", $shareBandwidth);
    }
    /**
     * ShareBandwidthId: 共享带宽的资源ID
     *
     * @return string|null
     */
    public function getShareBandwidthId()
    {
        return $this->get("ShareBandwidthId");
    }

    /**
     * ShareBandwidthId: 共享带宽的资源ID
     *
     * @param string $shareBandwidthId
     */
    public function setShareBandwidthId(string $shareBandwidthId)
    {
        $this->set("ShareBandwidthId", $shareBandwidthId);
    }
    /**
     * ChargeType: 付费方式, 预付费:Year 按年,Month 按月,Dynamic 按需;后付费:PostPay(按月)
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 付费方式, 预付费:Year 按年,Month 按月,Dynamic 按需;后付费:PostPay(按月)
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }
    /**
     * CreateTime: 创建时间, 格式为Unix Timestamp
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间, 格式为Unix Timestamp
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime)
    {
        $this->set("CreateTime", $createTime);
    }
    /**
     * ExpireTime: 过期时间, 格式为Unix Timestamp
     *
     * @return integer|null
     */
    public function getExpireTime()
    {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: 过期时间, 格式为Unix Timestamp
     *
     * @param int $expireTime
     */
    public function setExpireTime(int $expireTime)
    {
        $this->set("ExpireTime", $expireTime);
    }
    /**
     * EIPSet: EIP信息,详情见 EIPSetData
     *
     * @return EIPSetDataModel[]|null
     */
    public function getEIPSet()
    {
        $items = $this->get("EIPSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new EIPSetDataModel($item));
        }
        return $result;
    }

    /**
     * EIPSet: EIP信息,详情见 EIPSetData
     *
     * @param EIPSetDataModel[] $eipSet
     */
    public function setEIPSet(array $eipSet)
    {
        $result = [];
        foreach ($eipSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
    /**
     * Name: 共享带宽名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 共享带宽名称
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->set("Name", $name);
    }
}
