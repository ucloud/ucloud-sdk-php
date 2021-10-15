<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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

class EIPPriceDetailSet extends Response
{
    

    /**
     * ChargeType: 弹性IP付费方式
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 弹性IP付费方式
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Price: 购买弹性IP的实际价格, 单位"元"
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->get("Price");
    }

    /**
     * Price: 购买弹性IP的实际价格, 单位"元"
     *
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->set("Price", $price);
    }

    /**
     * OriginalPrice: 弹性IP的原价，单位“元”
     *
     * @return float|null
     */
    public function getOriginalPrice()
    {
        return $this->get("OriginalPrice");
    }

    /**
     * OriginalPrice: 弹性IP的原价，单位“元”
     *
     * @param float $originalPrice
     */
    public function setOriginalPrice($originalPrice)
    {
        $this->set("OriginalPrice", $originalPrice);
    }

    /**
     * PurchaseValue: 资源有效期, 以Unix Timestamp表示
     *
     * @return integer|null
     */
    public function getPurchaseValue()
    {
        return $this->get("PurchaseValue");
    }

    /**
     * PurchaseValue: 资源有效期, 以Unix Timestamp表示
     *
     * @param int $purchaseValue
     */
    public function setPurchaseValue($purchaseValue)
    {
        $this->set("PurchaseValue", $purchaseValue);
    }
}
