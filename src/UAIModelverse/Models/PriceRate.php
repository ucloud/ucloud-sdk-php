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

class PriceRate extends Response
{
    

    /**
     * ChargeItemDescriptionEn: 收费项描述英文描述
     *
     * @return string|null
     */
    public function getChargeItemDescriptionEn()
    {
        return $this->get("ChargeItemDescriptionEn");
    }

    /**
     * ChargeItemDescriptionEn: 收费项描述英文描述
     *
     * @param string $chargeItemDescriptionEn
     */
    public function setChargeItemDescriptionEn($chargeItemDescriptionEn)
    {
        $this->set("ChargeItemDescriptionEn", $chargeItemDescriptionEn);
    }

    /**
     * Currency: 货币单位
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->get("Currency");
    }

    /**
     * Currency: 货币单位
     *
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->set("Currency", $currency);
    }

    /**
     * Unit: 计价单位
     *
     * @return string|null
     */
    public function getUnit()
    {
        return $this->get("Unit");
    }

    /**
     * Unit: 计价单位
     *
     * @param string $unit
     */
    public function setUnit($unit)
    {
        $this->set("Unit", $unit);
    }

    /**
     * UnitEn: 计价单位英文
     *
     * @return string|null
     */
    public function getUnitEn()
    {
        return $this->get("UnitEn");
    }

    /**
     * UnitEn: 计价单位英文
     *
     * @param string $unitEn
     */
    public function setUnitEn($unitEn)
    {
        $this->set("UnitEn", $unitEn);
    }

    /**
     * ChargeItem: 收费项：input/output/thinking/tool...
     *
     * @return string|null
     */
    public function getChargeItem()
    {
        return $this->get("ChargeItem");
    }

    /**
     * ChargeItem: 收费项：input/output/thinking/tool...
     *
     * @param string $chargeItem
     */
    public function setChargeItem($chargeItem)
    {
        $this->set("ChargeItem", $chargeItem);
    }

    /**
     * ChargeItemDescription: 收费项描述
     *
     * @return string|null
     */
    public function getChargeItemDescription()
    {
        return $this->get("ChargeItemDescription");
    }

    /**
     * ChargeItemDescription: 收费项描述
     *
     * @param string $chargeItemDescription
     */
    public function setChargeItemDescription($chargeItemDescription)
    {
        $this->set("ChargeItemDescription", $chargeItemDescription);
    }

    /**
     * Price: 价格
     *
     * @return string|null
     */
    public function getPrice()
    {
        return $this->get("Price");
    }

    /**
     * Price: 价格
     *
     * @param string $price
     */
    public function setPrice($price)
    {
        $this->set("Price", $price);
    }
}
