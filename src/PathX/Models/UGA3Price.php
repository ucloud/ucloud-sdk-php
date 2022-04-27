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

namespace UCloud\PathX\Models;

use UCloud\Core\Response\Response;

use UCloud\PathX\Models\GetUGA3PriceResponse;

class UGA3Price extends Response
{

    /**
     * AccelerationArea: 加速大区代码
     *
     * @return string|null
     */
    public function getAccelerationArea()
    {
        return $this->get("AccelerationArea");
    }

    /**
     * AccelerationArea: 加速大区代码
     *
     * @param string $accelerationArea
     */
    public function setAccelerationArea(string $accelerationArea)
    {
        $this->set("AccelerationArea", $accelerationArea);
    }
    /**
     * AccelerationAreaName: 加速大区名称
     *
     * @return string|null
     */
    public function getAccelerationAreaName()
    {
        return $this->get("AccelerationAreaName");
    }

    /**
     * AccelerationAreaName: 加速大区名称
     *
     * @param string $accelerationAreaName
     */
    public function setAccelerationAreaName(string $accelerationAreaName)
    {
        $this->set("AccelerationAreaName", $accelerationAreaName);
    }
    /**
     * AccelerationForwarderPrice: 转发配置价格
     *
     * @return float|null
     */
    public function getAccelerationForwarderPrice()
    {
        return $this->get("AccelerationForwarderPrice");
    }

    /**
     * AccelerationForwarderPrice: 转发配置价格
     *
     * @param float $accelerationForwarderPrice
     */
    public function setAccelerationForwarderPrice(float $accelerationForwarderPrice)
    {
        $this->set("AccelerationForwarderPrice", $accelerationForwarderPrice);
    }
    /**
     * AccelerationBandwidthPrice: 加速配置带宽价格
     *
     * @return float|null
     */
    public function getAccelerationBandwidthPrice()
    {
        return $this->get("AccelerationBandwidthPrice");
    }

    /**
     * AccelerationBandwidthPrice: 加速配置带宽价格
     *
     * @param float $accelerationBandwidthPrice
     */
    public function setAccelerationBandwidthPrice(float $accelerationBandwidthPrice)
    {
        $this->set("AccelerationBandwidthPrice", $accelerationBandwidthPrice);
    }
}
