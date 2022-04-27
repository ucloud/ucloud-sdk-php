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

namespace UCloud\PathX\Apis;

use UCloud\Core\Response\Response;

use UCloud\PathX\Models\UGA3Price;

class GetUGA3PriceResponse extends Response
{

    /**
     * UGA3Price: 加速大区对应价格
     *
     * @return UGA3PriceModel[]|null
     */
    public function getUGA3Price()
    {
        $items = $this->get("UGA3Price");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UGA3PriceModel($item));
        }
        return $result;
    }

    /**
     * UGA3Price: 加速大区对应价格
     *
     * @param UGA3PriceModel[] $uga3Price
     */
    public function setUGA3Price(array $uga3Price)
    {
        $result = [];
        foreach ($uga3Price as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
