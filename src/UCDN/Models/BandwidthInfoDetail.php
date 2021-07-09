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

class BandwidthInfoDetail extends Response
{
    

    /**
     * Time: 宽获取的时间点。格式：时间戳
     *
     * @return integer|null
     */
    public function getTime(): int
    {
        return $this->get("Time");
    }

    /**
     * Time: 宽获取的时间点。格式：时间戳
     *
     * @param int $time
     */
    public function setTime(int $time)
    {
        $this->set("Time", $time);
    }

    /**
     * Bandwidth: 返回值带宽值数据。
     *
     * @return float|null
     */
    public function getBandwidth(): float
    {
        return $this->get("Bandwidth");
    }

    /**
     * Bandwidth: 返回值带宽值数据。
     *
     * @param float $bandwidth
     */
    public function setBandwidth(float $bandwidth)
    {
        $this->set("Bandwidth", $bandwidth);
    }
}
