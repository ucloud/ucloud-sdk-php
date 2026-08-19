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
namespace UCloud\UWSC\Params;

use UCloud\Core\Request\Request;

class CreatePOPGWParamBWConf extends Request
{
    

    /**
     * Name: 带宽的名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 带宽的名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * PayMode: 带宽的计费方式，取值：- fixed-bw：固定带宽计费；- traffic：流量计费。
     *
     * @return string|null
     */
    public function getPayMode()
    {
        return $this->get("PayMode");
    }

    /**
     * PayMode: 带宽的计费方式，取值：- fixed-bw：固定带宽计费；- traffic：流量计费。
     *
     * @param string $payMode
     */
    public function setPayMode($payMode)
    {
        $this->set("PayMode", $payMode);
    }

    /**
     * BwMax: UWAN 网关的带宽规格。取值：1-100。单位：Mbps。
     *
     * @return float|null
     */
    public function getBwMax()
    {
        return $this->get("BwMax");
    }

    /**
     * BwMax: UWAN 网关的带宽规格。取值：1-100。单位：Mbps。
     *
     * @param float $bwMax
     */
    public function setBwMax($bwMax)
    {
        $this->set("BwMax", $bwMax);
    }

    /**
     * ChargeType: 付费方式，枚举值：- Month：月付；- Year：年付；- Postpadi：后付费（仅支持流量计费方式）
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 付费方式，枚举值：- Month：月付；- Year：年付；- Postpadi：后付费（仅支持流量计费方式）
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Quantity: 带宽购买时长，默认为 0，代表有效期至月底
     *
     * @return float|null
     */
    public function getQuantity()
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 带宽购买时长，默认为 0，代表有效期至月底
     *
     * @param float $quantity
     */
    public function setQuantity($quantity)
    {
        $this->set("Quantity", $quantity);
    }

    /**
     * ProductId: 产品 ID
     *
     * @return integer|null
     */
    public function getProductId()
    {
        return $this->get("ProductId");
    }

    /**
     * ProductId: 产品 ID
     *
     * @param int $productId
     */
    public function setProductId($productId)
    {
        $this->set("ProductId", $productId);
    }

    /**
     * CouponId: 优惠券 ID
     *
     * @return string|null
     */
    public function getCouponId()
    {
        return $this->get("CouponId");
    }

    /**
     * CouponId: 优惠券 ID
     *
     * @param string $couponId
     */
    public function setCouponId($couponId)
    {
        $this->set("CouponId", $couponId);
    }

    /**
     * Remark: 带宽包备注信息
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 带宽包备注信息
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * BwType: 带宽类型，默认为空字符串
     *
     * @return string|null
     */
    public function getBwType()
    {
        return $this->get("BwType");
    }

    /**
     * BwType: 带宽类型，默认为空字符串
     *
     * @param string $bwType
     */
    public function setBwType($bwType)
    {
        $this->set("BwType", $bwType);
    }
}
