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
namespace UCloud\UDNS\Models;

use UCloud\Core\Response\Response;

class ZoneInfo extends Response
{
    

    /**
     * DNSZoneName: 域名名称
     *
     * @return string|null
     */
    public function getDNSZoneName()
    {
        return $this->get("DNSZoneName");
    }

    /**
     * DNSZoneName: 域名名称
     *
     * @param string $dnsZoneName
     */
    public function setDNSZoneName($dnsZoneName)
    {
        $this->set("DNSZoneName", $dnsZoneName);
    }

    /**
     * DNSZoneId: UDNS私有域名 Zone ID
     *
     * @return string|null
     */
    public function getDNSZoneId()
    {
        return $this->get("DNSZoneId");
    }

    /**
     * DNSZoneId: UDNS私有域名 Zone ID
     *
     * @param string $dnsZoneId
     */
    public function setDNSZoneId($dnsZoneId)
    {
        $this->set("DNSZoneId", $dnsZoneId);
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
     * IsRecursionEnabled: 是否支持迭代。枚举值,"enable",支持迭代; "disable",不支持迭代
     *
     * @return string|null
     */
    public function getIsRecursionEnabled()
    {
        return $this->get("IsRecursionEnabled");
    }

    /**
     * IsRecursionEnabled: 是否支持迭代。枚举值,"enable",支持迭代; "disable",不支持迭代
     *
     * @param string $isRecursionEnabled
     */
    public function setIsRecursionEnabled($isRecursionEnabled)
    {
        $this->set("IsRecursionEnabled", $isRecursionEnabled);
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
     * ExpireTime: 过期时间
     *
     * @return integer|null
     */
    public function getExpireTime()
    {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: 过期时间
     *
     * @param int $expireTime
     */
    public function setExpireTime($expireTime)
    {
        $this->set("ExpireTime", $expireTime);
    }

    /**
     * ChargeType: 计费类型（Dynamic、Month、Year）
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费类型（Dynamic、Month、Year）
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * IsAutoRenew: 是否开启自动续费（Yes No）
     *
     * @return string|null
     */
    public function getIsAutoRenew()
    {
        return $this->get("IsAutoRenew");
    }

    /**
     * IsAutoRenew: 是否开启自动续费（Yes No）
     *
     * @param string $isAutoRenew
     */
    public function setIsAutoRenew($isAutoRenew)
    {
        $this->set("IsAutoRenew", $isAutoRenew);
    }

    /**
     * RecordInfos: 记录相关ID
     *
     * @return string[]|null
     */
    public function getRecordInfos()
    {
        return $this->get("RecordInfos");
    }

    /**
     * RecordInfos: 记录相关ID
     *
     * @param string[] $recordInfos
     */
    public function setRecordInfos(array $recordInfos)
    {
        $this->set("RecordInfos", $recordInfos);
    }

    /**
     * VPCInfos: 绑定的VPC信息
     *
     * @return VPCInfo[]|null
     */
    public function getVPCInfos()
    {
        $items = $this->get("VPCInfos");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new VPCInfo($item));
        }
        return $result;
    }

    /**
     * VPCInfos: 绑定的VPC信息
     *
     * @param VPCInfo[] $vpcInfos
     */
    public function setVPCInfos(array $vpcInfos)
    {
        $result = [];
        foreach ($vpcInfos as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
