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

use UCloud\UCDN\Models\ProIspBandwidthDetailProvinceIspTrafficList;
use UCloud\UCDN\Models\GetUcdnProIspBandwidthResponse;
use UCloud\UCDN\Models\ProIspBandwidthDetailBandwidthSet;
use UCloud\UCDN\Models\GetUcdnProIspBandwidthDetailResponse;
use UCloud\UCDN\Models\GetUcdnDomain95BandwidthResponse;
use UCloud\UCDN\Models\ProIspBandwidthSet;
use UCloud\UCDN\Models\GetUcdnDailyNineFiveBandwidthResponse;
use UCloud\UCDN\Models\GetUcdnProIspBandwidthV2Response;

class ProIspBandwidthList extends Response
{

    /**
     * Time: 带宽获取的时间点。格式：时间戳
     *
     * @return integer|null
     */
    public function getTime()
    {
        return $this->get("Time");
    }

    /**
     * Time: 带宽获取的时间点。格式：时间戳
     *
     * @param int $time
     */
    public function setTime(int $time)
    {
        $this->set("Time", $time);
    }
    /**
     * CdnBandwidth: 返回值返回指定时间区间内CDN的带宽峰值，单位Mbps
     *
     * @return float|null
     */
    public function getCdnBandwidth()
    {
        return $this->get("CdnBandwidth");
    }

    /**
     * CdnBandwidth: 返回值返回指定时间区间内CDN的带宽峰值，单位Mbps
     *
     * @param float $cdnBandwidth
     */
    public function setCdnBandwidth(float $cdnBandwidth)
    {
        $this->set("CdnBandwidth", $cdnBandwidth);
    }
    /**
     * Traffic: 对应时间粒度的流量，单位字节
     *
     * @return float|null
     */
    public function getTraffic()
    {
        return $this->get("Traffic");
    }

    /**
     * Traffic: 对应时间粒度的流量，单位字节
     *
     * @param float $traffic
     */
    public function setTraffic(float $traffic)
    {
        $this->set("Traffic", $traffic);
    }
}
