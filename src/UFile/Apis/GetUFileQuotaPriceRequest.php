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

namespace UCloud\UFile\Apis;

use UCloud\Core\Request\Request;

class GetUFileQuotaPriceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetUFileQuotaPrice"]);
        $this->markRequired("Region");
    }


    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @param string $region
     */
    public function setRegion(string $region)
    {
        $this->set("Region", $region);
    }
    /**
     * StorageVolume: 存储容量，单位: GB*天，范围: [0, 30 000 000]，步长：100GB*天
     *
     * @return integer|null
     */
    public function getStorageVolume()
    {
        return $this->get("StorageVolume");
    }

    /**
     * StorageVolume: 存储容量，单位: GB*天，范围: [0, 30 000 000]，步长：100GB*天
     *
     * @param int $storageVolume
     */
    public function setStorageVolume(int $storageVolume)
    {
        $this->set("StorageVolume", $storageVolume);
    }
    /**
     * DownloadTraffic: 下载流量，单位: GB，范围: [0, 60 000]，步长：1GB
     *
     * @return integer|null
     */
    public function getDownloadTraffic()
    {
        return $this->get("DownloadTraffic");
    }

    /**
     * DownloadTraffic: 下载流量，单位: GB，范围: [0, 60 000]，步长：1GB
     *
     * @param int $downloadTraffic
     */
    public function setDownloadTraffic(int $downloadTraffic)
    {
        $this->set("DownloadTraffic", $downloadTraffic);
    }
    /**
     * RequestCount: 请求次数，单位：万次，范围：[0, 1 000 000]，步长：1万次
     *
     * @return integer|null
     */
    public function getRequestCount()
    {
        return $this->get("RequestCount");
    }

    /**
     * RequestCount: 请求次数，单位：万次，范围：[0, 1 000 000]，步长：1万次
     *
     * @param int $requestCount
     */
    public function setRequestCount(int $requestCount)
    {
        $this->set("RequestCount", $requestCount);
    }
}
