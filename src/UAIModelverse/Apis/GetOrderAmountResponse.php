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
namespace UCloud\UAIModelverse\Apis;

use UCloud\Core\Response\Response;

class GetOrderAmountResponse extends Response
{
    

    /**
     * TotalOrderAmount: 订单总额（所有订单的总金额）
     *
     * @return string|null
     */
    public function getTotalOrderAmount()
    {
        return $this->get("TotalOrderAmount");
    }

    /**
     * TotalOrderAmount: 订单总额（所有订单的总金额）
     *
     * @param string $totalOrderAmount
     */
    public function setTotalOrderAmount($totalOrderAmount)
    {
        $this->set("TotalOrderAmount", $totalOrderAmount);
    }

    /**
     * PaidAmount: 已支付金额
     *
     * @return string|null
     */
    public function getPaidAmount()
    {
        return $this->get("PaidAmount");
    }

    /**
     * PaidAmount: 已支付金额
     *
     * @param string $paidAmount
     */
    public function setPaidAmount($paidAmount)
    {
        $this->set("PaidAmount", $paidAmount);
    }

    /**
     * UnpaidAmount: 待支付金额
     *
     * @return string|null
     */
    public function getUnpaidAmount()
    {
        return $this->get("UnpaidAmount");
    }

    /**
     * UnpaidAmount: 待支付金额
     *
     * @param string $unpaidAmount
     */
    public function setUnpaidAmount($unpaidAmount)
    {
        $this->set("UnpaidAmount", $unpaidAmount);
    }

    /**
     * CashAmount: 现金账户总金额
     *
     * @return string|null
     */
    public function getCashAmount()
    {
        return $this->get("CashAmount");
    }

    /**
     * CashAmount: 现金账户总金额
     *
     * @param string $cashAmount
     */
    public function setCashAmount($cashAmount)
    {
        $this->set("CashAmount", $cashAmount);
    }

    /**
     * BonusAmount: 赠金账户总金额
     *
     * @return string|null
     */
    public function getBonusAmount()
    {
        return $this->get("BonusAmount");
    }

    /**
     * BonusAmount: 赠金账户总金额
     *
     * @param string $bonusAmount
     */
    public function setBonusAmount($bonusAmount)
    {
        $this->set("BonusAmount", $bonusAmount);
    }

    /**
     * CouponAmount: 代金券抵扣总额
     *
     * @return string|null
     */
    public function getCouponAmount()
    {
        return $this->get("CouponAmount");
    }

    /**
     * CouponAmount: 代金券抵扣总额
     *
     * @param string $couponAmount
     */
    public function setCouponAmount($couponAmount)
    {
        $this->set("CouponAmount", $couponAmount);
    }

    /**
     * StarCardAmount: 星力卡抵扣总金额
     *
     * @return string|null
     */
    public function getStarCardAmount()
    {
        return $this->get("StarCardAmount");
    }

    /**
     * StarCardAmount: 星力卡抵扣总金额
     *
     * @param string $starCardAmount
     */
    public function setStarCardAmount($starCardAmount)
    {
        $this->set("StarCardAmount", $starCardAmount);
    }

    /**
     * OrderCount: 订单总数
     *
     * @return integer|null
     */
    public function getOrderCount()
    {
        return $this->get("OrderCount");
    }

    /**
     * OrderCount: 订单总数
     *
     * @param int $orderCount
     */
    public function setOrderCount($orderCount)
    {
        $this->set("OrderCount", $orderCount);
    }

    /**
     * PaidCount: 已支付订单数
     *
     * @return integer|null
     */
    public function getPaidCount()
    {
        return $this->get("PaidCount");
    }

    /**
     * PaidCount: 已支付订单数
     *
     * @param int $paidCount
     */
    public function setPaidCount($paidCount)
    {
        $this->set("PaidCount", $paidCount);
    }

    /**
     * UnpaidCount: 待支付订单数量
     *
     * @return integer|null
     */
    public function getUnpaidCount()
    {
        return $this->get("UnpaidCount");
    }

    /**
     * UnpaidCount: 待支付订单数量
     *
     * @param int $unpaidCount
     */
    public function setUnpaidCount($unpaidCount)
    {
        $this->set("UnpaidCount", $unpaidCount);
    }
}
