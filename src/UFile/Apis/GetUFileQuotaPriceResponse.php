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
namespace UCloud\UFile\Apis;

use UCloud\Core\Response\Response;

class GetUFileQuotaPriceResponse extends Response
{
    

    /**
     * Price: 待支付价格，单位：分
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->get("Price");
    }

    /**
     * Price: 待支付价格，单位：分
     *
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->set("Price", $price);
    }


}
