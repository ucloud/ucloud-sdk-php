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

class HitRateInfoV2 extends Response {
    

    /**
     * Time: 带宽获取的时间点。格式：时间戳
     *
     * @return int|null
     */
    public function getTime(): int {
        return $this->get("Time");
    }

    /**
     * Time: 带宽获取的时间点。格式：时间戳
     *
     * @param int $time
     */
    public function setTime(int $time) {
        $this->set("Time", $time);
    }

    /**
     * FlowHitRate: 总流量命中率，单位%
     *
     * @return float|null
     */
    public function getFlowHitRate(): float {
        return $this->get("FlowHitRate");
    }

    /**
     * FlowHitRate: 总流量命中率，单位%
     *
     * @param float $flowHitRate
     */
    public function setFlowHitRate(float $flowHitRate) {
        $this->set("FlowHitRate", $flowHitRate);
    }

    /**
     * RequestHitRate: 请求数命中率，单位%
     *
     * @return float|null
     */
    public function getRequestHitRate(): float {
        return $this->get("RequestHitRate");
    }

    /**
     * RequestHitRate: 请求数命中率，单位%
     *
     * @param float $requestHitRate
     */
    public function setRequestHitRate(float $requestHitRate) {
        $this->set("RequestHitRate", $requestHitRate);
    }


}
