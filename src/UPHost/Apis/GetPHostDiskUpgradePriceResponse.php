<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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
namespace UCloud\UPHost\Apis;

use UCloud\Core\Response\Response;

class GetPHostDiskUpgradePriceResponse extends Response {
    

    /**
     * Price: 升级差价。精度为小数点后2位。
     *
     * @return float|null
     */
    public function getPrice(): float {
        return $this->get("Price");
    }

    /**
     * Price: 升级差价。精度为小数点后2位。
     *
     * @param float $price
     */
    public function setPrice(float $price) {
        $this->set("Price", $price);
    }

    /**
     * OriginalPrice: 升价差价原价。精度为小数点后2位。
     *
     * @return float|null
     */
    public function getOriginalPrice(): float {
        return $this->get("OriginalPrice");
    }

    /**
     * OriginalPrice: 升价差价原价。精度为小数点后2位。
     *
     * @param float $originalPrice
     */
    public function setOriginalPrice(float $originalPrice) {
        $this->set("OriginalPrice", $originalPrice);
    }


}
