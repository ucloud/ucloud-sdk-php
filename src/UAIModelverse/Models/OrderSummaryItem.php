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
namespace UCloud\UAIModelverse\Models;

use UCloud\Core\Response\Response;

class OrderSummaryItem extends Response
{
    

    /**
     * ResourceId: 资源ID
     *
     * @return string|null
     */
    public function getResourceId()
    {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: 资源ID
     *
     * @param string $resourceId
     */
    public function setResourceId($resourceId)
    {
        $this->set("ResourceId", $resourceId);
    }

    /**
     * PricingSKU: 计费单元（SKU）名称
     *
     * @return string|null
     */
    public function getPricingSKU()
    {
        return $this->get("PricingSKU");
    }

    /**
     * PricingSKU: 计费单元（SKU）名称
     *
     * @param string $pricingSKU
     */
    public function setPricingSKU($pricingSKU)
    {
        $this->set("PricingSKU", $pricingSKU);
    }

    /**
     * ModelID: 模型ID
     *
     * @return string|null
     */
    public function getModelID()
    {
        return $this->get("ModelID");
    }

    /**
     * ModelID: 模型ID
     *
     * @param string $modelID
     */
    public function setModelID($modelID)
    {
        $this->set("ModelID", $modelID);
    }

    /**
     * ModelName: 模型名称
     *
     * @return string|null
     */
    public function getModelName()
    {
        return $this->get("ModelName");
    }

    /**
     * ModelName: 模型名称
     *
     * @param string $modelName
     */
    public function setModelName($modelName)
    {
        $this->set("ModelName", $modelName);
    }

    /**
     * PricingUnit: 计费单位（计量单元）
     *
     * @return integer|null
     */
    public function getPricingUnit()
    {
        return $this->get("PricingUnit");
    }

    /**
     * PricingUnit: 计费单位（计量单元）
     *
     * @param int $pricingUnit
     */
    public function setPricingUnit($pricingUnit)
    {
        $this->set("PricingUnit", $pricingUnit);
    }

    /**
     * PricingUnitName: 计费单位名称
     *
     * @return string|null
     */
    public function getPricingUnitName()
    {
        return $this->get("PricingUnitName");
    }

    /**
     * PricingUnitName: 计费单位名称
     *
     * @param string $pricingUnitName
     */
    public function setPricingUnitName($pricingUnitName)
    {
        $this->set("PricingUnitName", $pricingUnitName);
    }

    /**
     * OrderType: 订单类型
     *
     * @return integer|null
     */
    public function getOrderType()
    {
        return $this->get("OrderType");
    }

    /**
     * OrderType: 订单类型
     *
     * @param int $orderType
     */
    public function setOrderType($orderType)
    {
        $this->set("OrderType", $orderType);
    }

    /**
     * OrderTypeDisplay: 订单类型显示名
     *
     * @return string|null
     */
    public function getOrderTypeDisplay()
    {
        return $this->get("OrderTypeDisplay");
    }

    /**
     * OrderTypeDisplay: 订单类型显示名
     *
     * @param string $orderTypeDisplay
     */
    public function setOrderTypeDisplay($orderTypeDisplay)
    {
        $this->set("OrderTypeDisplay", $orderTypeDisplay);
    }

    /**
     * ChargeType: 计费类型
     *
     * @return integer|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费类型
     *
     * @param int $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Status: 订单状态（2=已支付; 3=已撤销）
     *
     * @return integer|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 订单状态（2=已支付; 3=已撤销）
     *
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * StatusDisplay: 订单状态显示名
     *
     * @return string|null
     */
    public function getStatusDisplay()
    {
        return $this->get("StatusDisplay");
    }

    /**
     * StatusDisplay: 订单状态显示名
     *
     * @param string $statusDisplay
     */
    public function setStatusDisplay($statusDisplay)
    {
        $this->set("StatusDisplay", $statusDisplay);
    }

    /**
     * ListPrice: 列表价（原单价）
     *
     * @return string|null
     */
    public function getListPrice()
    {
        return $this->get("ListPrice");
    }

    /**
     * ListPrice: 列表价（原单价）
     *
     * @param string $listPrice
     */
    public function setListPrice($listPrice)
    {
        $this->set("ListPrice", $listPrice);
    }

    /**
     * DiscountPrice: 折后单价
     *
     * @return string|null
     */
    public function getDiscountPrice()
    {
        return $this->get("DiscountPrice");
    }

    /**
     * DiscountPrice: 折后单价
     *
     * @param string $discountPrice
     */
    public function setDiscountPrice($discountPrice)
    {
        $this->set("DiscountPrice", $discountPrice);
    }

    /**
     * SumQuantity: 总用量（原始值）
     *
     * @return integer|null
     */
    public function getSumQuantity()
    {
        return $this->get("SumQuantity");
    }

    /**
     * SumQuantity: 总用量（原始值）
     *
     * @param int $sumQuantity
     */
    public function setSumQuantity($sumQuantity)
    {
        $this->set("SumQuantity", $sumQuantity);
    }

    /**
     * SumQuantityDisplay: 总用量显示（格式化后的字符串，千token和百万token会进行转换）
     *
     * @return string|null
     */
    public function getSumQuantityDisplay()
    {
        return $this->get("SumQuantityDisplay");
    }

    /**
     * SumQuantityDisplay: 总用量显示（格式化后的字符串，千token和百万token会进行转换）
     *
     * @param string $sumQuantityDisplay
     */
    public function setSumQuantityDisplay($sumQuantityDisplay)
    {
        $this->set("SumQuantityDisplay", $sumQuantityDisplay);
    }

    /**
     * SumOrderPrice: 总订单金额（格式化后的字符串）
     *
     * @return string|null
     */
    public function getSumOrderPrice()
    {
        return $this->get("SumOrderPrice");
    }

    /**
     * SumOrderPrice: 总订单金额（格式化后的字符串）
     *
     * @param string $sumOrderPrice
     */
    public function setSumOrderPrice($sumOrderPrice)
    {
        $this->set("SumOrderPrice", $sumOrderPrice);
    }

    /**
     * SumOriginalPrice: 总原价（格式化后的字符串）
     *
     * @return string|null
     */
    public function getSumOriginalPrice()
    {
        return $this->get("SumOriginalPrice");
    }

    /**
     * SumOriginalPrice: 总原价（格式化后的字符串）
     *
     * @param string $sumOriginalPrice
     */
    public function setSumOriginalPrice($sumOriginalPrice)
    {
        $this->set("SumOriginalPrice", $sumOriginalPrice);
    }

    /**
     * SumCashAccount: 总现金账户扣款（仅已完成订单返回）
     *
     * @return string|null
     */
    public function getSumCashAccount()
    {
        return $this->get("SumCashAccount");
    }

    /**
     * SumCashAccount: 总现金账户扣款（仅已完成订单返回）
     *
     * @param string $sumCashAccount
     */
    public function setSumCashAccount($sumCashAccount)
    {
        $this->set("SumCashAccount", $sumCashAccount);
    }

    /**
     * SumStarCardAccount: 总星力卡抵扣金额（仅已完成订单返回）
     *
     * @return string|null
     */
    public function getSumStarCardAccount()
    {
        return $this->get("SumStarCardAccount");
    }

    /**
     * SumStarCardAccount: 总星力卡抵扣金额（仅已完成订单返回）
     *
     * @param string $sumStarCardAccount
     */
    public function setSumStarCardAccount($sumStarCardAccount)
    {
        $this->set("SumStarCardAccount", $sumStarCardAccount);
    }

    /**
     * SumBonusAccount: 总赠金账户扣款（仅已完成订单返回）
     *
     * @return string|null
     */
    public function getSumBonusAccount()
    {
        return $this->get("SumBonusAccount");
    }

    /**
     * SumBonusAccount: 总赠金账户扣款（仅已完成订单返回）
     *
     * @param string $sumBonusAccount
     */
    public function setSumBonusAccount($sumBonusAccount)
    {
        $this->set("SumBonusAccount", $sumBonusAccount);
    }

    /**
     * SumCoupon: 总代金券抵扣（仅已完成订单返回）
     *
     * @return string|null
     */
    public function getSumCoupon()
    {
        return $this->get("SumCoupon");
    }

    /**
     * SumCoupon: 总代金券抵扣（仅已完成订单返回）
     *
     * @param string $sumCoupon
     */
    public function setSumCoupon($sumCoupon)
    {
        $this->set("SumCoupon", $sumCoupon);
    }
}
