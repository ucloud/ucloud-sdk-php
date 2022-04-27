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

use UCloud\UCDN\Models\GetNewUcdnLogUrlStatisticsResponse;
use UCloud\UCDN\Models\UrlStatistics;

class DownloadStatisticInfo extends Response
{

    /**
     * Url: 下载链接的url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->get("Url");
    }

    /**
     * Url: 下载链接的url
     *
     * @param string $url
     */
    public function setUrl(string $url)
    {
        $this->set("Url", $url);
    }
    /**
     * Traffic: 流量（单位为G）
     *
     * @return float|null
     */
    public function getTraffic()
    {
        return $this->get("Traffic");
    }

    /**
     * Traffic: 流量（单位为G）
     *
     * @param float $traffic
     */
    public function setTraffic(float $traffic)
    {
        $this->set("Traffic", $traffic);
    }
    /**
     * DownloadTimes: 下载次数
     *
     * @return integer|null
     */
    public function getDownloadTimes()
    {
        return $this->get("DownloadTimes");
    }

    /**
     * DownloadTimes: 下载次数
     *
     * @param int $downloadTimes
     */
    public function setDownloadTimes(int $downloadTimes)
    {
        $this->set("DownloadTimes", $downloadTimes);
    }
    /**
     * Percent: 流量占比，单位%
     *
     * @return float|null
     */
    public function getPercent()
    {
        return $this->get("Percent");
    }

    /**
     * Percent: 流量占比，单位%
     *
     * @param float $percent
     */
    public function setPercent(float $percent)
    {
        $this->set("Percent", $percent);
    }
}
