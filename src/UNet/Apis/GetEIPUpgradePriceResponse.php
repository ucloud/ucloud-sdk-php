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
namespace UCloud\UNet\Apis;

use UCloud\Core\Response\Response;

class GetEIPUpgradePriceResponse extends Response {
    

    /**
     * Price: 调整带宽后的EIP价格, 单位为"元", 如需退费此处为负值
     *
     * @return float|null
     */
    public function getPrice(): float {
        return $this->get("Price");
    }

    /**
     * Price: 调整带宽后的EIP价格, 单位为"元", 如需退费此处为负值
     *
     * @param float $price
     */
    public function setPrice(float $price) {
        $this->set("Price", $price);
    }


}
