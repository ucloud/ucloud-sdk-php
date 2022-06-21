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
namespace UCloud\UDisk\Models;

use UCloud\Core\Response\Response;

class UDiskPriceDataSet extends Response
{
    

    /**
     * ChargeType: Year， Month， Dynamic，Trial
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: Year， Month， Dynamic，Trial
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Price: 实际价格 (单位: 分)
     *
     * @return int|null
     */
    public function getPrice()
    {
        return $this->get("Price");
    }

    /**
     * Price: 实际价格 (单位: 分)
     *
     * @param int $price
     */
    public function setPrice($price)
    {
        $this->set("Price", $price);
    }

    /**
     * ChargeName: "UDataArk","SnapshotService","UDisk","Total"
     *
     * @return string|null
     */
    public function getChargeName()
    {
        return $this->get("ChargeName");
    }

    /**
     * ChargeName: "UDataArk","SnapshotService","UDisk","Total"
     *
     * @param string $chargeName
     */
    public function setChargeName($chargeName)
    {
        $this->set("ChargeName", $chargeName);
    }

    /**
     * OriginalPrice: 用户折后价(对应计费CustomPrice)
     *
     * @return int|null
     */
    public function getOriginalPrice()
    {
        return $this->get("OriginalPrice");
    }

    /**
     * OriginalPrice: 用户折后价(对应计费CustomPrice)
     *
     * @param int $originalPrice
     */
    public function setOriginalPrice($originalPrice)
    {
        $this->set("OriginalPrice", $originalPrice);
    }

    /**
     * ListPrice: 原价(对应计费OriginalPrice)
     *
     * @return int|null
     */
    public function getListPrice()
    {
        return $this->get("ListPrice");
    }

    /**
     * ListPrice: 原价(对应计费OriginalPrice)
     *
     * @param int $listPrice
     */
    public function setListPrice($listPrice)
    {
        $this->set("ListPrice", $listPrice);
    }


}
