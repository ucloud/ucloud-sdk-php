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

class GetUcdnDomain95BandwidthV2Response extends Response {
    

    /**
     * Time: 查询时间期间的95带宽时间点  Unix时间戳
     *
     * @return int|null
     */
    public function getTime(): int {
        return $this->get("Time");
    }

    /**
     * Time: 查询时间期间的95带宽时间点  Unix时间戳
     *
     * @param int $time
     */
    public function setTime(int $time) {
        $this->set("Time", $time);
    }

    /**
     * CdnBandwidth: 查询期间的CDN的95带宽值，单位Mbps
     *
     * @return float|null
     */
    public function getCdnBandwidth(): float {
        return $this->get("CdnBandwidth");
    }

    /**
     * CdnBandwidth: 查询期间的CDN的95带宽值，单位Mbps
     *
     * @param float $cdnBandwidth
     */
    public function setCdnBandwidth(float $cdnBandwidth) {
        $this->set("CdnBandwidth", $cdnBandwidth);
    }


}
