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
namespace UCloud\UPhone\Apis;

use UCloud\Core\Response\Response;
use UCloud\UPhone\Models\CityInstance;

class DescribeUPhoneCitiesResponse extends Response
{
    

    /**
     * UPhoneCities: 云手机城市实例列表，每项参数可见数据模型 [CityInstance](#CityInstance)
     *
     * @return CityInstance[]|null
     */
    public function getUPhoneCities()
    {
        $items = $this->get("UPhoneCities");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CityInstance($item));
        }
        return $result;
    }

    /**
     * UPhoneCities: 云手机城市实例列表，每项参数可见数据模型 [CityInstance](#CityInstance)
     *
     * @param CityInstance[] $uPhoneCities
     */
    public function setUPhoneCities(array $uPhoneCities)
    {
        $result = [];
        foreach ($uPhoneCities as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }


}
