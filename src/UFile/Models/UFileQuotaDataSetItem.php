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
namespace UCloud\UFile\Models;

use UCloud\Core\Response\Response;

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
    public function setRegion($region)
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
    public function setOwe($owe)
    {
        $this->set("Owe", $owe);
    }

    /**
     * Storage: 剩余存储容量
     *
     * @return UFileQuotaLeft|null
     */
    public function getStorage()
    {
        return new UFileQuotaLeft($this->get("Storage"));
    }

    /**
     * Storage: 剩余存储容量
     *
     * @param UFileQuotaLeft $storage
     */
    public function setStorage(array $storage)
    {
        $this->set("Storage", $storage->getAll());
    }

    /**
     * DownloadFlow: 剩余下载流量
     *
     * @return UFileQuotaLeft|null
     */
    public function getDownloadFlow()
    {
        return new UFileQuotaLeft($this->get("DownloadFlow"));
    }

    /**
     * DownloadFlow: 剩余下载流量
     *
     * @param UFileQuotaLeft $downloadFlow
     */
    public function setDownloadFlow(array $downloadFlow)
    {
        $this->set("DownloadFlow", $downloadFlow->getAll());
    }

    /**
     * RequestCnt: 剩余请求次数
     *
     * @return UFileQuotaLeft|null
     */
    public function getRequestCnt()
    {
        return new UFileQuotaLeft($this->get("RequestCnt"));
    }

    /**
     * RequestCnt: 剩余请求次数
     *
     * @param UFileQuotaLeft $requestCnt
     */
    public function setRequestCnt(array $requestCnt)
    {
        $this->set("RequestCnt", $requestCnt->getAll());
    }
}
