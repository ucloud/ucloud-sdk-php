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

class OrderItemDetail extends Response
{
    

    /**
     * Region: 地域
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * ProductCode: 产品类型
     *
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->get("ProductCode");
    }

    /**
     * ProductCode: 产品类型
     *
     * @param string $productCode
     */
    public function setProductCode($productCode)
    {
        $this->set("ProductCode", $productCode);
    }

    /**
     * ProductCodeDisplay: 产品类型显示名
     *
     * @return string|null
     */
    public function getProductCodeDisplay()
    {
        return $this->get("ProductCodeDisplay");
    }

    /**
     * ProductCodeDisplay: 产品类型显示名
     *
     * @param string $productCodeDisplay
     */
    public function setProductCodeDisplay($productCodeDisplay)
    {
        $this->set("ProductCodeDisplay", $productCodeDisplay);
    }

    /**
     * StarCardAccount: 星力卡抵扣金额
     *
     * @return string|null
     */
    public function getStarCardAccount()
    {
        return $this->get("StarCardAccount");
    }

    /**
     * StarCardAccount: 星力卡抵扣金额
     *
     * @param string $starCardAccount
     */
    public function setStarCardAccount($starCardAccount)
    {
        $this->set("StarCardAccount", $starCardAccount);
    }

    /**
     * OrderNo: 订单号
     *
     * @return string|null
     */
    public function getOrderNo()
    {
        return $this->get("OrderNo");
    }

    /**
     * OrderNo: 订单号
     *
     * @param string $orderNo
     */
    public function setOrderNo($orderNo)
    {
        $this->set("OrderNo", $orderNo);
    }

    /**
     * CompanyID: 公司id
     *
     * @return integer|null
     */
    public function getCompanyID()
    {
        return $this->get("CompanyID");
    }

    /**
     * CompanyID: 公司id
     *
     * @param int $companyID
     */
    public function setCompanyID($companyID)
    {
        $this->set("CompanyID", $companyID);
    }

    /**
     * OrganizationID: 项目ID
     *
     * @return integer|null
     */
    public function getOrganizationID()
    {
        return $this->get("OrganizationID");
    }

    /**
     * OrganizationID: 项目ID
     *
     * @param int $organizationID
     */
    public function setOrganizationID($organizationID)
    {
        $this->set("OrganizationID", $organizationID);
    }

    /**
     * OrganizationName: 项目名称
     *
     * @return string|null
     */
    public function getOrganizationName()
    {
        return $this->get("OrganizationName");
    }

    /**
     * OrganizationName: 项目名称
     *
     * @param string $organizationName
     */
    public function setOrganizationName($organizationName)
    {
        $this->set("OrganizationName", $organizationName);
    }

    /**
     * UserEmail: 用户邮箱
     *
     * @return string|null
     */
    public function getUserEmail()
    {
        return $this->get("UserEmail");
    }

    /**
     * UserEmail: 用户邮箱
     *
     * @param string $userEmail
     */
    public function setUserEmail($userEmail)
    {
        $this->set("UserEmail", $userEmail);
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
     * ChargeTypeDisplay: 计费类型显示名
     *
     * @return string|null
     */
    public function getChargeTypeDisplay()
    {
        return $this->get("ChargeTypeDisplay");
    }

    /**
     * ChargeTypeDisplay: 计费类型显示名
     *
     * @param string $chargeTypeDisplay
     */
    public function setChargeTypeDisplay($chargeTypeDisplay)
    {
        $this->set("ChargeTypeDisplay", $chargeTypeDisplay);
    }

    /**
     * Channel: 渠道
     *
     * @return integer|null
     */
    public function getChannel()
    {
        return $this->get("Channel");
    }

    /**
     * Channel: 渠道
     *
     * @param int $channel
     */
    public function setChannel($channel)
    {
        $this->set("Channel", $channel);
    }

    /**
     * Currency: 币种（如：CNY、USD）
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->get("Currency");
    }

    /**
     * Currency: 币种（如：CNY、USD）
     *
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->set("Currency", $currency);
    }

    /**
     * CurrencyDisplay: 币种显示名
     *
     * @return string|null
     */
    public function getCurrencyDisplay()
    {
        return $this->get("CurrencyDisplay");
    }

    /**
     * CurrencyDisplay: 币种显示名
     *
     * @param string $currencyDisplay
     */
    public function setCurrencyDisplay($currencyDisplay)
    {
        $this->set("CurrencyDisplay", $currencyDisplay);
    }

    /**
     * ResourceID: 资源ID
     *
     * @return string|null
     */
    public function getResourceID()
    {
        return $this->get("ResourceID");
    }

    /**
     * ResourceID: 资源ID
     *
     * @param string $resourceID
     */
    public function setResourceID($resourceID)
    {
        $this->set("ResourceID", $resourceID);
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
     * Quantity: 用量
     *
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 用量
     *
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->set("Quantity", $quantity);
    }

    /**
     * QuantityDisplay: 用量显示（含单位）
     *
     * @return string|null
     */
    public function getQuantityDisplay()
    {
        return $this->get("QuantityDisplay");
    }

    /**
     * QuantityDisplay: 用量显示（含单位）
     *
     * @param string $quantityDisplay
     */
    public function setQuantityDisplay($quantityDisplay)
    {
        $this->set("QuantityDisplay", $quantityDisplay);
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
     * PricingUnitDisplay: 计费单位显示名（如：千Token、张、秒）
     *
     * @return string|null
     */
    public function getPricingUnitDisplay()
    {
        return $this->get("PricingUnitDisplay");
    }

    /**
     * PricingUnitDisplay: 计费单位显示名（如：千Token、张、秒）
     *
     * @param string $pricingUnitDisplay
     */
    public function setPricingUnitDisplay($pricingUnitDisplay)
    {
        $this->set("PricingUnitDisplay", $pricingUnitDisplay);
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
     * DiscountPrice: 折后价（折后单价）
     *
     * @return string|null
     */
    public function getDiscountPrice()
    {
        return $this->get("DiscountPrice");
    }

    /**
     * DiscountPrice: 折后价（折后单价）
     *
     * @param string $discountPrice
     */
    public function setDiscountPrice($discountPrice)
    {
        $this->set("DiscountPrice", $discountPrice);
    }

    /**
     * OrderTotalPrice: 订单总额
     *
     * @return string|null
     */
    public function getOrderTotalPrice()
    {
        return $this->get("OrderTotalPrice");
    }

    /**
     * OrderTotalPrice: 订单总额
     *
     * @param string $orderTotalPrice
     */
    public function setOrderTotalPrice($orderTotalPrice)
    {
        $this->set("OrderTotalPrice", $orderTotalPrice);
    }

    /**
     * OriginalPrice: 原价
     *
     * @return string|null
     */
    public function getOriginalPrice()
    {
        return $this->get("OriginalPrice");
    }

    /**
     * OriginalPrice: 原价
     *
     * @param string $originalPrice
     */
    public function setOriginalPrice($originalPrice)
    {
        $this->set("OriginalPrice", $originalPrice);
    }

    /**
     * Status: 订单状态
     *
     * @return integer|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 订单状态
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
     * StartTime: 开始计费时间（Unix 时间戳，秒级）
     *
     * @return integer|null
     */
    public function getStartTime()
    {
        return $this->get("StartTime");
    }

    /**
     * StartTime: 开始计费时间（Unix 时间戳，秒级）
     *
     * @param int $startTime
     */
    public function setStartTime($startTime)
    {
        $this->set("StartTime", $startTime);
    }

    /**
     * EndTime: 结束计费时间（Unix 时间戳，秒级）
     *
     * @return integer|null
     */
    public function getEndTime()
    {
        return $this->get("EndTime");
    }

    /**
     * EndTime: 结束计费时间（Unix 时间戳，秒级）
     *
     * @param int $endTime
     */
    public function setEndTime($endTime)
    {
        $this->set("EndTime", $endTime);
    }

    /**
     * PaidTime: 支付完成时间（Unix 时间戳，秒级）
     *
     * @return integer|null
     */
    public function getPaidTime()
    {
        return $this->get("PaidTime");
    }

    /**
     * PaidTime: 支付完成时间（Unix 时间戳，秒级）
     *
     * @param int $paidTime
     */
    public function setPaidTime($paidTime)
    {
        $this->set("PaidTime", $paidTime);
    }

    /**
     * CashAccount: 现金账户扣款金额
     *
     * @return string|null
     */
    public function getCashAccount()
    {
        return $this->get("CashAccount");
    }

    /**
     * CashAccount: 现金账户扣款金额
     *
     * @param string $cashAccount
     */
    public function setCashAccount($cashAccount)
    {
        $this->set("CashAccount", $cashAccount);
    }

    /**
     * BonusAccount: 赠金账户扣款金额
     *
     * @return string|null
     */
    public function getBonusAccount()
    {
        return $this->get("BonusAccount");
    }

    /**
     * BonusAccount: 赠金账户扣款金额
     *
     * @param string $bonusAccount
     */
    public function setBonusAccount($bonusAccount)
    {
        $this->set("BonusAccount", $bonusAccount);
    }

    /**
     * Coupon: 代金券抵扣金额
     *
     * @return string|null
     */
    public function getCoupon()
    {
        return $this->get("Coupon");
    }

    /**
     * Coupon: 代金券抵扣金额
     *
     * @param string $coupon
     */
    public function setCoupon($coupon)
    {
        $this->set("Coupon", $coupon);
    }

    /**
     * UnpaidOrderNo: 欠费订单号
     *
     * @return string|null
     */
    public function getUnpaidOrderNo()
    {
        return $this->get("UnpaidOrderNo");
    }

    /**
     * UnpaidOrderNo: 欠费订单号
     *
     * @param string $unpaidOrderNo
     */
    public function setUnpaidOrderNo($unpaidOrderNo)
    {
        $this->set("UnpaidOrderNo", $unpaidOrderNo);
    }

    /**
     * RegionDisplay: 地域显示名
     *
     * @return string|null
     */
    public function getRegionDisplay()
    {
        return $this->get("RegionDisplay");
    }

    /**
     * RegionDisplay: 地域显示名
     *
     * @param string $regionDisplay
     */
    public function setRegionDisplay($regionDisplay)
    {
        $this->set("RegionDisplay", $regionDisplay);
    }
}
