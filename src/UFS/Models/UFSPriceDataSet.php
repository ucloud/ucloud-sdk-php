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
namespace UCloud\UFS\Models;

use UCloud\Core\Response\Response;

class UFSPriceDataSet extends Response
{
    

    /**
     * ChargeType: Year， Month， Dynamic，Trial
     *
     * @return string|null
     */
    public function getChargeType(): string
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: Year， Month， Dynamic，Trial
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Price: 价格 (单位: 分)
     *
     * @return float|null
     */
    public function getPrice(): float
    {
        return $this->get("Price");
    }

    /**
     * Price: 价格 (单位: 分)
     *
     * @param float $price
     */
    public function setPrice(float $price)
    {
        $this->set("Price", $price);
    }

    /**
     * ChargeName: “UFS”
     *
     * @return string|null
     */
    public function getChargeName(): string
    {
        return $this->get("ChargeName");
    }

    /**
     * ChargeName: “UFS”
     *
     * @param string $chargeName
     */
    public function setChargeName(string $chargeName)
    {
        $this->set("ChargeName", $chargeName);
    }
}
