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
namespace UCloud\UHost\Models;

use UCloud\Core\Response\Response;

class UHostPriceSet extends Response
{
    

    /**
     * ChargeType: 计费类型。Year，Month，Dynamic
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费类型。Year，Month，Dynamic
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
     * OriginalPrice: 限时优惠的折前原价。
     *
     * @return float|null
     */
    public function getOriginalPrice()
    {
        return $this->get("OriginalPrice");
    }

    /**
     * OriginalPrice: 限时优惠的折前原价。
     *
     * @param float $originalPrice
     */
    public function setOriginalPrice($originalPrice)
    {
        $this->set("OriginalPrice", $originalPrice);
    }

    /**
     * PriceDetail: 价格详细信息（只有询价接口返回）。
     *
     * @return PriceDetail|null
     */
    public function getPriceDetail()
    {
        return new PriceDetail($this->get("PriceDetail"));
    }

    /**
     * PriceDetail: 价格详细信息（只有询价接口返回）。
     *
     * @param PriceDetail $priceDetail
     */
    public function setPriceDetail(array $priceDetail)
    {
        $this->set("PriceDetail", $priceDetail->getAll());
    }

    /**
     * OriginalPriceDetail: 原价详细信息（只有询价接口返回）。
     *
     * @return PriceDetail|null
     */
    public function getOriginalPriceDetail()
    {
        return new PriceDetail($this->get("OriginalPriceDetail"));
    }

    /**
     * OriginalPriceDetail: 原价详细信息（只有询价接口返回）。
     *
     * @param PriceDetail $originalPriceDetail
     */
    public function setOriginalPriceDetail(array $originalPriceDetail)
    {
        $this->set("OriginalPriceDetail", $originalPriceDetail->getAll());
    }
}
