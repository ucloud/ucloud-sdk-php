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
namespace UCloud\UNet\Apis;

use UCloud\Core\Request\Request;

class AllocateEIPRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "AllocateEIP"]);
        $this->markRequired("Region");
        $this->markRequired("OperatorName");
        $this->markRequired("Bandwidth");
    }

    

    /**
     * Region: 地域。
     *
     * @return string|null
     */
    public function getRegion(): string
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。
     *
     * @param string $region
     */
    public function setRegion(string $region)
    {
        $this->set("Region", $region);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * OperatorName: 弹性IP线路，枚举值：国际线路， International；BGP线路：Bgp；精品BGP：BGPPro。使用BGP线路的地域：北京二、上海金融云、上海二、广州等，其他地域均使用国际线路。使用BGPPro线路的地域：香港
     *
     * @return string|null
     */
    public function getOperatorName(): string
    {
        return $this->get("OperatorName");
    }

    /**
     * OperatorName: 弹性IP线路，枚举值：国际线路， International；BGP线路：Bgp；精品BGP：BGPPro。使用BGP线路的地域：北京二、上海金融云、上海二、广州等，其他地域均使用国际线路。使用BGPPro线路的地域：香港
     *
     * @param string $operatorName
     */
    public function setOperatorName(string $operatorName)
    {
        $this->set("OperatorName", $operatorName);
    }

    /**
     * Bandwidth: 弹性IP的外网带宽, 单位为Mbps. 共享带宽模式必须指定0M带宽, 非共享带宽模式必须指定非0Mbps带宽. 各地域非共享带宽的带宽范围如下： 流量计费[1-300]，带宽计费[1-10000]
     *
     * @return integer|null
     */
    public function getBandwidth(): int
    {
        return $this->get("Bandwidth");
    }

    /**
     * Bandwidth: 弹性IP的外网带宽, 单位为Mbps. 共享带宽模式必须指定0M带宽, 非共享带宽模式必须指定非0Mbps带宽. 各地域非共享带宽的带宽范围如下： 流量计费[1-300]，带宽计费[1-10000]
     *
     * @param int $bandwidth
     */
    public function setBandwidth(int $bandwidth)
    {
        $this->set("Bandwidth", $bandwidth);
    }

    /**
     * Tag: 业务组名称, 默认为 "Default"
     *
     * @return string|null
     */
    public function getTag(): string
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组名称, 默认为 "Default"
     *
     * @param string $tag
     */
    public function setTag(string $tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * ChargeType: 付费方式, 枚举值为: Year, 按年付费; Month, 按月付费; Dynamic, 按时付费，默认为按月付费。
     *
     * @return string|null
     */
    public function getChargeType(): string
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 付费方式, 枚举值为: Year, 按年付费; Month, 按月付费; Dynamic, 按时付费，默认为按月付费。
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Quantity: 购买的时长, 默认: 1
     *
     * @return integer|null
     */
    public function getQuantity(): int
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买的时长, 默认: 1
     *
     * @param int $quantity
     */
    public function setQuantity(int $quantity)
    {
        $this->set("Quantity", $quantity);
    }

    /**
     * PayMode: 弹性IP的计费模式. 枚举值: "Traffic", 流量计费; "Bandwidth", 带宽计费; "ShareBandwidth",共享带宽模式. 默认为 "Bandwidth".“PostAccurateBandwidth”：带宽后付费模式
     *
     * @return string|null
     */
    public function getPayMode(): string
    {
        return $this->get("PayMode");
    }

    /**
     * PayMode: 弹性IP的计费模式. 枚举值: "Traffic", 流量计费; "Bandwidth", 带宽计费; "ShareBandwidth",共享带宽模式. 默认为 "Bandwidth".“PostAccurateBandwidth”：带宽后付费模式
     *
     * @param string $payMode
     */
    public function setPayMode(string $payMode)
    {
        $this->set("PayMode", $payMode);
    }

    /**
     * ShareBandwidthId: 绑定的共享带宽Id,仅当PayMode为ShareBandwidth时有效
     *
     * @return string|null
     */
    public function getShareBandwidthId(): string
    {
        return $this->get("ShareBandwidthId");
    }

    /**
     * ShareBandwidthId: 绑定的共享带宽Id,仅当PayMode为ShareBandwidth时有效
     *
     * @param string $shareBandwidthId
     */
    public function setShareBandwidthId(string $shareBandwidthId)
    {
        $this->set("ShareBandwidthId", $shareBandwidthId);
    }

    /**
     * Name: 弹性IP的名称, 默认为 "EIP"
     *
     * @return string|null
     */
    public function getName(): string
    {
        return $this->get("Name");
    }

    /**
     * Name: 弹性IP的名称, 默认为 "EIP"
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->set("Name", $name);
    }

    /**
     * Count: 购买EIP数量，默认值为1
     *
     * @return integer|null
     */
    public function getCount(): int
    {
        return $this->get("Count");
    }

    /**
     * Count: 购买EIP数量，默认值为1
     *
     * @param int $count
     */
    public function setCount(int $count)
    {
        $this->set("Count", $count);
    }

    /**
     * Remark: 弹性IP的备注, 默认为空
     *
     * @return string|null
     */
    public function getRemark(): string
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 弹性IP的备注, 默认为空
     *
     * @param string $remark
     */
    public function setRemark(string $remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * CouponId: 代金券ID, 默认不使用
     *
     * @return string|null
     */
    public function getCouponId(): string
    {
        return $this->get("CouponId");
    }

    /**
     * CouponId: 代金券ID, 默认不使用
     *
     * @param string $couponId
     */
    public function setCouponId(string $couponId)
    {
        $this->set("CouponId", $couponId);
    }
}
