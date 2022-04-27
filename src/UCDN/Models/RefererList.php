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

class RefererList extends Response
{
    

    /**
     * Referer: 客户端请求的referer
     *
     * @return string|null
     */
    public function getReferer(): string
    {
        return $this->get("Referer");
    }

    /**
     * Referer: 客户端请求的referer
     *
     * @param string $referer
     */
    public function setReferer(string $referer)
    {
        $this->set("Referer", $referer);
    }

    /**
     * RequestTimes: 次数
     *
     * @return integer|null
     */
    public function getRequestTimes(): int
    {
        return $this->get("RequestTimes");
    }

    /**
     * RequestTimes: 次数
     *
     * @param int $requestTimes
     */
    public function setRequestTimes(int $requestTimes)
    {
        $this->set("RequestTimes", $requestTimes);
    }

    /**
     * Percent: 次数占比，单位%
     *
     * @return float|null
     */
    public function getPercent(): float
    {
        return $this->get("Percent");
    }

    /**
     * Percent: 次数占比，单位%
     *
     * @param float $percent
     */
    public function setPercent(float $percent)
    {
        $this->set("Percent", $percent);
    }
}
