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

namespace UCloud\UMem\Models;

use UCloud\Core\Response\Response;

use UCloud\UMem\Models\DescribeUMemcachePriceResponse;

class UMemcachePriceSet extends Response
{

    /**
     * ChargeType: 计费模式，Year, Month, Dynamic
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费模式，Year, Month, Dynamic
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }
    /**
     * Price: 总价格
     *
     * @return integer|null
     */
    public function getPrice()
    {
        return $this->get("Price");
    }

    /**
     * Price: 总价格
     *
     * @param int $price
     */
    public function setPrice(int $price)
    {
        $this->set("Price", $price);
    }
    /**
     * ListPrice: 产品列表价
     *
     * @return integer|null
     */
    public function getListPrice()
    {
        return $this->get("ListPrice");
    }

    /**
     * ListPrice: 产品列表价
     *
     * @param int $listPrice
     */
    public function setListPrice(int $listPrice)
    {
        $this->set("ListPrice", $listPrice);
    }
    /**
     * OriginalPrice: 原价
     *
     * @return integer|null
     */
    public function getOriginalPrice()
    {
        return $this->get("OriginalPrice");
    }

    /**
     * OriginalPrice: 原价
     *
     * @param int $originalPrice
     */
    public function setOriginalPrice(int $originalPrice)
    {
        $this->set("OriginalPrice", $originalPrice);
    }
}
