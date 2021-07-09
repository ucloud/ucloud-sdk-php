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
namespace UCloud\UCDN\Models;

use UCloud\Core\Response\Response;

class BandwidthInfo extends Response
{
    

    /**
     * Time: 带宽获取的时间点。格式：时间戳
     *
     * @return integer|null
     */
    public function getTime(): int
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
     * CdnBandwidth: 返回值返回指定时间区间内CDN的带宽峰值，单位Mbps（如果请求参数Type为0，则Value是五分钟粒度的带宽值，如果Type为1，则Value是1小时的带宽峰值，如果Type为2，则Value是一天内的带宽峰值）
     *
     * @return float|null
     */
    public function getCdnBandwidth(): float
    {
        return $this->get("CdnBandwidth");
    }

    /**
     * CdnBandwidth: 返回值返回指定时间区间内CDN的带宽峰值，单位Mbps（如果请求参数Type为0，则Value是五分钟粒度的带宽值，如果Type为1，则Value是1小时的带宽峰值，如果Type为2，则Value是一天内的带宽峰值）
     *
     * @param float $cdnBandwidth
     */
    public function setCdnBandwidth(float $cdnBandwidth)
    {
        $this->set("CdnBandwidth", $cdnBandwidth);
    }
}
