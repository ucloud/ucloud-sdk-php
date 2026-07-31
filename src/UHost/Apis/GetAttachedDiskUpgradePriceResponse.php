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
namespace UCloud\UHost\Apis;

use UCloud\Core\Response\Response;
use UCloud\UHost\Models\DiskUpgradePriceDetail;
use UCloud\UHost\Models\DiskUpgradePriceDetail;
use UCloud\UHost\Models\DiskUpgradePriceDetail;

class GetAttachedDiskUpgradePriceResponse extends Response
{
    

    /**
     * Price: 升级差价。精度为小数点后2位。
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->get("Price");
    }

    /**
     * Price: 升级差价。精度为小数点后2位。
     *
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->set("Price", $price);
    }

    /**
     * OriginalPrice: 用户折后价。精度为小数点后2位。
     *
     * @return float|null
     */
    public function getOriginalPrice()
    {
        return $this->get("OriginalPrice");
    }

    /**
     * OriginalPrice: 用户折后价。精度为小数点后2位。
     *
     * @param float $originalPrice
     */
    public function setOriginalPrice($originalPrice)
    {
        $this->set("OriginalPrice", $originalPrice);
    }

    /**
     * ListPrice: 原价。精度为小数点后2位。
     *
     * @return float|null
     */
    public function getListPrice()
    {
        return $this->get("ListPrice");
    }

    /**
     * ListPrice: 原价。精度为小数点后2位。
     *
     * @param float $listPrice
     */
    public function setListPrice($listPrice)
    {
        $this->set("ListPrice", $listPrice);
    }

    /**
     * PriceDetail: 升级价格详情，精度为小数点后2位。
     *
     * @return DiskUpgradePriceDetail|null
     */
    public function getPriceDetail()
    {
        return new DiskUpgradePriceDetail($this->get("PriceDetail"));
    }

    /**
     * PriceDetail: 升级价格详情，精度为小数点后2位。
     *
     * @param DiskUpgradePriceDetail $priceDetail
     */
    public function setPriceDetail(array $priceDetail)
    {
        $this->set("PriceDetail", $priceDetail->getAll());
    }

    /**
     * OriginalPriceDetail: 用户折后价详情，精度为小数点后2位。
     *
     * @return DiskUpgradePriceDetail|null
     */
    public function getOriginalPriceDetail()
    {
        return new DiskUpgradePriceDetail($this->get("OriginalPriceDetail"));
    }

    /**
     * OriginalPriceDetail: 用户折后价详情，精度为小数点后2位。
     *
     * @param DiskUpgradePriceDetail $originalPriceDetail
     */
    public function setOriginalPriceDetail(array $originalPriceDetail)
    {
        $this->set("OriginalPriceDetail", $originalPriceDetail->getAll());
    }

    /**
     * ListPriceDetail: 原价详情，精度为小数点后2位。
     *
     * @return DiskUpgradePriceDetail|null
     */
    public function getListPriceDetail()
    {
        return new DiskUpgradePriceDetail($this->get("ListPriceDetail"));
    }

    /**
     * ListPriceDetail: 原价详情，精度为小数点后2位。
     *
     * @param DiskUpgradePriceDetail $listPriceDetail
     */
    public function setListPriceDetail(array $listPriceDetail)
    {
        $this->set("ListPriceDetail", $listPriceDetail->getAll());
    }
}
