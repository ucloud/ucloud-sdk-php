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
namespace UCloud\UCDN\Apis;

use UCloud\Core\Response\Response;
use UCloud\UCDN\Models\BandwidthTrafficInfo;

class GetUcdnDomainBandwidthV2Response extends Response
{
    

    /**
     * BandwidthTrafficList: 带宽信息列表，参见BandwidthTrafficInfo
     *
     * @return BandwidthTrafficInfo[]|null
     */
    public function getBandwidthTrafficList()
    {
        $items = $this->get("BandwidthTrafficList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new BandwidthTrafficInfo($item));
        }
        return $result;
    }

    /**
     * BandwidthTrafficList: 带宽信息列表，参见BandwidthTrafficInfo
     *
     * @param BandwidthTrafficInfo[] $bandwidthTrafficList
     */
    public function setBandwidthTrafficList(array $bandwidthTrafficList)
    {
        $result = [];
        foreach ($bandwidthTrafficList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
