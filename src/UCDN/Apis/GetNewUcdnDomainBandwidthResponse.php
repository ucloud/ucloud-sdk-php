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
use UCloud\UCDN\Models\BandwidthInfo;

class GetNewUcdnDomainBandwidthResponse extends Response
{
    

    /**
     * BandwidthList: 带宽信息列表，参见BandwidthInfo
     *
     * @return BandwidthInfo[]|null
     */
    public function getBandwidthList()
    {
        $items = $this->get("BandwidthList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new BandwidthInfo($item));
        }
        return $result;
    }

    /**
     * BandwidthList: 带宽信息列表，参见BandwidthInfo
     *
     * @param BandwidthInfo[] $bandwidthList
     */
    public function setBandwidthList(array $bandwidthList)
    {
        $result = [];
        foreach ($bandwidthList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Traffic: 从起始时间到结束时间内的所使用的CDN总流量，单位GB
     *
     * @return float|null
     */
    public function getTraffic()
    {
        return $this->get("Traffic");
    }

    /**
     * Traffic: 从起始时间到结束时间内的所使用的CDN总流量，单位GB
     *
     * @param float $traffic
     */
    public function setTraffic($traffic)
    {
        $this->set("Traffic", $traffic);
    }
}
