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
namespace UCloud\UFile\Models;

use UCloud\Core\Response\Response;

class UFileReportSet extends Response
{
    

    /**
     * Time: 配额消费时间，unix时间戳，精确到日期
     *
     * @return integer|null
     */
    public function getTime(): int
    {
        return $this->get("Time");
    }

    /**
     * Time: 配额消费时间，unix时间戳，精确到日期
     *
     * @param int $time
     */
    public function setTime(int $time)
    {
        $this->set("Time", $time);
    }

    /**
     * StorageVolume: 配额消费当日使用的存储容量，单位：GB*天
     *
     * @return float|null
     */
    public function getStorageVolume(): float
    {
        return $this->get("StorageVolume");
    }

    /**
     * StorageVolume: 配额消费当日使用的存储容量，单位：GB*天
     *
     * @param float $storageVolume
     */
    public function setStorageVolume(float $storageVolume)
    {
        $this->set("StorageVolume", $storageVolume);
    }

    /**
     * DownloadTraffic: 配额消费当日使用的下载流量，单位：GB
     *
     * @return float|null
     */
    public function getDownloadTraffic(): float
    {
        return $this->get("DownloadTraffic");
    }

    /**
     * DownloadTraffic: 配额消费当日使用的下载流量，单位：GB
     *
     * @param float $downloadTraffic
     */
    public function setDownloadTraffic(float $downloadTraffic)
    {
        $this->set("DownloadTraffic", $downloadTraffic);
    }

    /**
     * RequestCount: 配额消费当日使用的请求次数，单位：万次
     *
     * @return float|null
     */
    public function getRequestCount(): float
    {
        return $this->get("RequestCount");
    }

    /**
     * RequestCount: 配额消费当日使用的请求次数，单位：万次
     *
     * @param float $requestCount
     */
    public function setRequestCount(float $requestCount)
    {
        $this->set("RequestCount", $requestCount);
    }
}
