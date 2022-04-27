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

use UCloud\PathX\Models\ForwardArea;

class DescribeUGA3AreaResponse extends Response
{

    /**
     * AreaSet: 支持源站的地区,比如：AreaSet[{            "Area": "首尔",            "AreaCode": "ICN",            "CountryCode": "CN",            "ContinentCode": "CN"        }]ContinentCode:["CN","NA","OT"];"CN":表示国内，"NA":表示美洲，“OT"：表示欧洲等其他地区
     *
     * @return ForwardAreaModel[]|null
     */
    public function getAreaSet()
    {
        $items = $this->get("AreaSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ForwardAreaModel($item));
        }
        return $result;
    }

    /**
     * AreaSet: 支持源站的地区,比如：AreaSet[{            "Area": "首尔",            "AreaCode": "ICN",            "CountryCode": "CN",            "ContinentCode": "CN"        }]ContinentCode:["CN","NA","OT"];"CN":表示国内，"NA":表示美洲，“OT"：表示欧洲等其他地区
     *
     * @param ForwardAreaModel[] $areaSet
     */
    public function setAreaSet(array $areaSet)
    {
        $result = [];
        foreach ($areaSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
