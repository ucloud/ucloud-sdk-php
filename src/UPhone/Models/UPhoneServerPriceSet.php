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
namespace UCloud\UPhone\Models;

use UCloud\Core\Response\Response;

class UPhoneServerPriceSet extends Response
{
    

    /**
     * ChargeType: 计费类型，枚举值：Year，Month
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费类型，枚举值：Year，Month
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Price: 价格，单位: 元，保留小数点后两位有效数字
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->get("Price");
    }

    /**
     * Price: 价格，单位: 元，保留小数点后两位有效数字
     *
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->set("Price", $price);
    }

    /**
     * OriginalPrice: 限时优惠的折前原价（即列表价乘以商务折扣后的单价）
     *
     * @return float|null
     */
    public function getOriginalPrice()
    {
        return $this->get("OriginalPrice");
    }

    /**
     * OriginalPrice: 限时优惠的折前原价（即列表价乘以商务折扣后的单价）
     *
     * @param float $originalPrice
     */
    public function setOriginalPrice($originalPrice)
    {
        $this->set("OriginalPrice", $originalPrice);
    }

    /**
     * ListPrice: 产品列表价
     *
     * @return float|null
     */
    public function getListPrice()
    {
        return $this->get("ListPrice");
    }

    /**
     * ListPrice: 产品列表价
     *
     * @param float $listPrice
     */
    public function setListPrice($listPrice)
    {
        $this->set("ListPrice", $listPrice);
    }
}
