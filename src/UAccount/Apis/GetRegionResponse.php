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

namespace UCloud\UAccount\Apis;

use UCloud\Core\Response\Response;

use UCloud\UAccount\Models\RegionInfo;

class GetRegionResponse extends Response
{

    /**
     * Regions: 各数据中心信息
     *
     * @return RegionInfoModel[]|null
     */
    public function getRegions()
    {
        $items = $this->get("Regions");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new RegionInfoModel($item));
        }
        return $result;
    }

    /**
     * Regions: 各数据中心信息
     *
     * @param RegionInfoModel[] $regions
     */
    public function setRegions(array $regions)
    {
        $result = [];
        foreach ($regions as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
