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
use UCloud\UGN\Models\UgnRegion;

class ListUGNRegionsResponse extends Response
{
    

    /**
     * RegionLIst: 可加入地域列表
     *
     * @return UgnRegion[]|null
     */
    public function getRegionLIst()
    {
        $items = $this->get("RegionLIst");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UgnRegion($item));
        }
        return $result;
    }

    /**
     * RegionLIst: 可加入地域列表
     *
     * @param UgnRegion[] $regionLIst
     */
    public function setRegionLIst(array $regionLIst)
    {
        $result = [];
        foreach ($regionLIst as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
