<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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
namespace UCloud\UPFS\Models;

use UCloud\Core\Response\Response;

class UPFSPriceDataSet extends Response
{
    

    /**
     * ChargeType: Year， Month
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: Year， Month
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Price: 价格 (单位: 分)
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->get("Price");
    }

    /**
     * Price: 价格 (单位: 分)
     *
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->set("Price", $price);
    }

    /**
     * OriginalPrice: 原价格 (单位: 分)
     *
     * @return float|null
     */
    public function getOriginalPrice()
    {
        return $this->get("OriginalPrice");
    }

    /**
     * OriginalPrice: 原价格 (单位: 分)
     *
     * @param float $originalPrice
     */
    public function setOriginalPrice($originalPrice)
    {
        $this->set("OriginalPrice", $originalPrice);
    }

    /**
     * ChargeName: “upfs”
     *
     * @return string|null
     */
    public function getChargeName()
    {
        return $this->get("ChargeName");
    }

    /**
     * ChargeName: “upfs”
     *
     * @param string $chargeName
     */
    public function setChargeName($chargeName)
    {
        $this->set("ChargeName", $chargeName);
    }
}
