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

namespace UCloud\UPHost\Models;

use UCloud\Core\Response\Response;

use UCloud\UPHost\Models\GetPHostPriceResponse;

class PHostPriceSet extends Response
{

    /**
     * ChargeType: Year/Month
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: Year/Month
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }
    /**
     * Price: 价格, 单位:元, 保留小数点后两位有效数字
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->get("Price");
    }

    /**
     * Price: 价格, 单位:元, 保留小数点后两位有效数字
     *
     * @param float $price
     */
    public function setPrice(float $price)
    {
        $this->set("Price", $price);
    }
    /**
     * Product: 枚举值：phost=>为主机价格，如果是云盘包括了系统盘价格。cloudDisk=>所有数据盘价格，只是裸金属机型才返回此参数。
     *
     * @return string|null
     */
    public function getProduct()
    {
        return $this->get("Product");
    }

    /**
     * Product: 枚举值：phost=>为主机价格，如果是云盘包括了系统盘价格。cloudDisk=>所有数据盘价格，只是裸金属机型才返回此参数。
     *
     * @param string $product
     */
    public function setProduct(string $product)
    {
        $this->set("Product", $product);
    }
    /**
     * OriginalPrice: 原价格, 单位:元, 保留小数点后两位有效数字
     *
     * @return float|null
     */
    public function getOriginalPrice()
    {
        return $this->get("OriginalPrice");
    }

    /**
     * OriginalPrice: 原价格, 单位:元, 保留小数点后两位有效数字
     *
     * @param float $originalPrice
     */
    public function setOriginalPrice(float $originalPrice)
    {
        $this->set("OriginalPrice", $originalPrice);
    }
}
