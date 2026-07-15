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
namespace UCloud\UGN\Apis;

use UCloud\Core\Response\Response;

class GetSimpleBuyBwPriceResponse extends Response
{
    

    /**
     * TotalPrice: 最终价格 = 原价 * 用户折扣 * 产品折扣
     *
     * @return integer|null
     */
    public function getTotalPrice()
    {
        return $this->get("TotalPrice");
    }

    /**
     * TotalPrice: 最终价格 = 原价 * 用户折扣 * 产品折扣
     *
     * @param int $totalPrice
     */
    public function setTotalPrice($totalPrice)
    {
        $this->set("TotalPrice", $totalPrice);
    }

    /**
     * CustomPrice: 客户折扣价 = 原价 * 用户折扣
     *
     * @return integer|null
     */
    public function getCustomPrice()
    {
        return $this->get("CustomPrice");
    }

    /**
     * CustomPrice: 客户折扣价 = 原价 * 用户折扣
     *
     * @param int $customPrice
     */
    public function setCustomPrice($customPrice)
    {
        $this->set("CustomPrice", $customPrice);
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
    public function setOriginalPrice($originalPrice)
    {
        $this->set("OriginalPrice", $originalPrice);
    }
}
