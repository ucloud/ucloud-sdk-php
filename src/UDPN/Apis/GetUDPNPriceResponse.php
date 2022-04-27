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
namespace UCloud\UDPN\Apis;

use UCloud\Core\Response\Response;

class GetUDPNPriceResponse extends Response
{
    

    /**
     * PurchaseValue: 资源有效期 unix 时间戳
     *
     * @return integer|null
     */
    public function getPurchaseValue(): int
    {
        return $this->get("PurchaseValue");
    }

    /**
     * PurchaseValue: 资源有效期 unix 时间戳
     *
     * @param int $purchaseValue
     */
    public function setPurchaseValue(int $purchaseValue)
    {
        $this->set("PurchaseValue", $purchaseValue);
    }

    /**
     * Price: 专线价格
     *
     * @return float|null
     */
    public function getPrice(): float
    {
        return $this->get("Price");
    }

    /**
     * Price: 专线价格
     *
     * @param float $price
     */
    public function setPrice(float $price)
    {
        $this->set("Price", $price);
    }
}
