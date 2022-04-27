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

use UCloud\UFile\Models\UFileQuotaLeft;
use UCloud\UFile\Models\GetUFileQuotaInfoResponse;

class UFileQuotaDataSetItem extends Response
{

    /**
     * Region: 可用地域
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 可用地域
     *
     * @param string $region
     */
    public function setRegion(string $region)
    {
        $this->set("Region", $region);
    }
    /**
     * Owe: 是否欠费：1表示欠费；0表示未欠费
     *
     * @return integer|null
     */
    public function getOwe()
    {
        return $this->get("Owe");
    }

    /**
     * Owe: 是否欠费：1表示欠费；0表示未欠费
     *
     * @param int $owe
     */
    public function setOwe(int $owe)
    {
        $this->set("Owe", $owe);
    }
    /**
     * Storage: 剩余存储容量
     *
     * @return UFileQuotaLeftModel|null
     */
    public function getStorage()
    {
        return new UFileQuotaLeftModel($this->get("Storage"));
    }

    /**
     * Storage: 剩余存储容量
     *
     * @param UFileQuotaLeftModel $storage
     */
    public function setStorage(UFileQuotaLeftModel $storage)
    {
        $this->set("Storage", $storage->getAll());
    }
    /**
     * DownloadFlow: 剩余下载流量
     *
     * @return UFileQuotaLeftModel|null
     */
    public function getDownloadFlow()
    {
        return new UFileQuotaLeftModel($this->get("DownloadFlow"));
    }

    /**
     * DownloadFlow: 剩余下载流量
     *
     * @param UFileQuotaLeftModel $downloadFlow
     */
    public function setDownloadFlow(UFileQuotaLeftModel $downloadFlow)
    {
        $this->set("DownloadFlow", $downloadFlow->getAll());
    }
    /**
     * RequestCnt: 剩余请求次数
     *
     * @return UFileQuotaLeftModel|null
     */
    public function getRequestCnt()
    {
        return new UFileQuotaLeftModel($this->get("RequestCnt"));
    }

    /**
     * RequestCnt: 剩余请求次数
     *
     * @param UFileQuotaLeftModel $requestCnt
     */
    public function setRequestCnt(UFileQuotaLeftModel $requestCnt)
    {
        $this->set("RequestCnt", $requestCnt->getAll());
    }
}
