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
namespace UCloud\Cube\Apis;

use UCloud\Core\Response\Response;

class GetCubePriceResponse extends Response {
    

    /**
     * Price: 折扣后价格，单位为分
     *
     * @return int|null
     */
    public function getPrice(): int {
        return $this->get("Price");
    }

    /**
     * Price: 折扣后价格，单位为分
     *
     * @param int $price
     */
    public function setPrice(int $price) {
        $this->set("Price", $price);
    }

    /**
     * OriginalPrice: 列表价格，单位为分
     *
     * @return int|null
     */
    public function getOriginalPrice(): int {
        return $this->get("OriginalPrice");
    }

    /**
     * OriginalPrice: 列表价格，单位为分
     *
     * @param int $originalPrice
     */
    public function setOriginalPrice(int $originalPrice) {
        $this->set("OriginalPrice", $originalPrice);
    }


}
