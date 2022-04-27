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

use UCloud\UFile\Models\UFileReportItem;
use UCloud\UFile\Models\GetUFileBucketDailyReportResponse;
use UCloud\UFile\Models\GetUFileDailyReportResponse;

class UFileDailyReportItem extends Response
{

    /**
     * Storage: 标准存储量；单位byte
     *
     * @return float|null
     */
    public function getStorage()
    {
        return $this->get("Storage");
    }

    /**
     * Storage: 标准存储量；单位byte
     *
     * @param float $storage
     */
    public function setStorage(float $storage)
    {
        $this->set("Storage", $storage);
    }
    /**
     * IaStorage: 低频存储量；单位byte
     *
     * @return float|null
     */
    public function getIaStorage()
    {
        return $this->get("IaStorage");
    }

    /**
     * IaStorage: 低频存储量；单位byte
     *
     * @param float $iaStorage
     */
    public function setIaStorage(float $iaStorage)
    {
        $this->set("IaStorage", $iaStorage);
    }
    /**
     * AcStorage: 冷存（归档）存储量；单位byte
     *
     * @return float|null
     */
    public function getAcStorage()
    {
        return $this->get("AcStorage");
    }

    /**
     * AcStorage: 冷存（归档）存储量；单位byte
     *
     * @param float $acStorage
     */
    public function setAcStorage(float $acStorage)
    {
        $this->set("AcStorage", $acStorage);
    }
    /**
     * IaGetSize: 低频数据取回量；单位byte
     *
     * @return float|null
     */
    public function getIaGetSize()
    {
        return $this->get("IaGetSize");
    }

    /**
     * IaGetSize: 低频数据取回量；单位byte
     *
     * @param float $iaGetSize
     */
    public function setIaGetSize(float $iaGetSize)
    {
        $this->set("IaGetSize", $iaGetSize);
    }
    /**
     * AcRestore: 冷存激活量，即归档数据取回量；单位byte
     *
     * @return float|null
     */
    public function getAcRestore()
    {
        return $this->get("AcRestore");
    }

    /**
     * AcRestore: 冷存激活量，即归档数据取回量；单位byte
     *
     * @param float $acRestore
     */
    public function setAcRestore(float $acRestore)
    {
        $this->set("AcRestore", $acRestore);
    }
    /**
     * BusyFlow: 忙时流量；单位byte；海外无此字段
     *
     * @return float|null
     */
    public function getBusyFlow()
    {
        return $this->get("BusyFlow");
    }

    /**
     * BusyFlow: 忙时流量；单位byte；海外无此字段
     *
     * @param float $busyFlow
     */
    public function setBusyFlow(float $busyFlow)
    {
        $this->set("BusyFlow", $busyFlow);
    }
    /**
     * IdleFlow: 闲时流量；单位byte；海外无此字段
     *
     * @return float|null
     */
    public function getIdleFlow()
    {
        return $this->get("IdleFlow");
    }

    /**
     * IdleFlow: 闲时流量；单位byte；海外无此字段
     *
     * @param float $idleFlow
     */
    public function setIdleFlow(float $idleFlow)
    {
        $this->set("IdleFlow", $idleFlow);
    }
    /**
     * CdnFlow: cdn回源流量;单位byte
     *
     * @return float|null
     */
    public function getCdnFlow()
    {
        return $this->get("CdnFlow");
    }

    /**
     * CdnFlow: cdn回源流量;单位byte
     *
     * @param float $cdnFlow
     */
    public function setCdnFlow(float $cdnFlow)
    {
        $this->set("CdnFlow", $cdnFlow);
    }
    /**
     * Flow: 下载流量：单位byte；国内无此字段
     *
     * @return float|null
     */
    public function getFlow()
    {
        return $this->get("Flow");
    }

    /**
     * Flow: 下载流量：单位byte；国内无此字段
     *
     * @param float $flow
     */
    public function setFlow(float $flow)
    {
        $this->set("Flow", $flow);
    }
    /**
     * Date: 配额消费时间，unix时间戳（单位s），精确到日期
     *
     * @return integer|null
     */
    public function getDate()
    {
        return $this->get("Date");
    }

    /**
     * Date: 配额消费时间，unix时间戳（单位s），精确到日期
     *
     * @param int $date
     */
    public function setDate(int $date)
    {
        $this->set("Date", $date);
    }
    /**
     * ApiTimes: API请求次数（万次）
     *
     * @return float|null
     */
    public function getApiTimes()
    {
        return $this->get("ApiTimes");
    }

    /**
     * ApiTimes: API请求次数（万次）
     *
     * @param float $apiTimes
     */
    public function setApiTimes(float $apiTimes)
    {
        $this->set("ApiTimes", $apiTimes);
    }
}
