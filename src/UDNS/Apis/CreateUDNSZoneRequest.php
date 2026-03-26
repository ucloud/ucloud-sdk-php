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
namespace UCloud\UDNS\Apis;

use UCloud\Core\Request\Request;

class CreateUDNSZoneRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUDNSZone"]);
        $this->markRequired("Region");
        $this->markRequired("DNSZoneName");
        $this->markRequired("Type");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * DNSZoneName: 域名字符串
     *
     * @return string|null
     */
    public function getDNSZoneName()
    {
        return $this->get("DNSZoneName");
    }

    /**
     * DNSZoneName: 域名字符串
     *
     * @param string $dnsZoneName
     */
    public function setDNSZoneName($dnsZoneName)
    {
        $this->set("DNSZoneName", $dnsZoneName);
    }

    /**
     * Type: 域名类型。枚举值，“private”，内网DNS；“public”，公网DNS，暂只支持private。
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 域名类型。枚举值，“private”，内网DNS；“public”，公网DNS，暂只支持private。
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * Tag: 所属业务组名称
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 所属业务组名称
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
     * Quantity: 购买时长，默认为1
     *
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买时长，默认为1
     *
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->set("Quantity", $quantity);
    }

    /**
     * ChargeType: 付费方式, 枚举值为: Year, 按年付费; Month, 按月付费; Dynamic, 按需付费，默认为按月付费
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 付费方式, 枚举值为: Year, 按年付费; Month, 按月付费; Dynamic, 按需付费，默认为按月付费
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * CouponId: 代金券ID，默认不使用
     *
     * @return string|null
     */
    public function getCouponId()
    {
        return $this->get("CouponId");
    }

    /**
     * CouponId: 代金券ID，默认不使用
     *
     * @param string $couponId
     */
    public function setCouponId($couponId)
    {
        $this->set("CouponId", $couponId);
    }
}
