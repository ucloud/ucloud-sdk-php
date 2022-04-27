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

namespace UCloud\UMem\Apis;

use UCloud\Core\Response\Response;

class DescribeUMemUpgradePriceResponse extends Response
{

    /**
     * Price: 价格
     *
     * @return integer|null
     */
    public function getPrice()
    {
        return $this->get("Price");
    }

    /**
     * Price: 价格
     *
     * @param int $price
     */
    public function setPrice(int $price)
    {
        $this->set("Price", $price);
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
