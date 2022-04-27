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
namespace UCloud\UCDN\Models;

use UCloud\Core\Response\Response;

class ProIspBandwidthSet extends Response
{
    

    /**
     * Province: 省份代码
     *
     * @return string|null
     */
    public function getProvince(): string
    {
        return $this->get("Province");
    }

    /**
     * Province: 省份代码
     *
     * @param string $province
     */
    public function setProvince(string $province)
    {
        $this->set("Province", $province);
    }

    /**
     * BandwidthTrafficList: 省份带宽流量实例表
     *
     * @return ProIspBandwidthList[]|null
     */
    public function getBandwidthTrafficList(): array
    {
        $items = $this->get("BandwidthTrafficList") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ProIspBandwidthList($item));
        }
        return $result;
    }

    /**
     * BandwidthTrafficList: 省份带宽流量实例表
     *
     * @param ProIspBandwidthList[] $bandwidthTrafficList
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
