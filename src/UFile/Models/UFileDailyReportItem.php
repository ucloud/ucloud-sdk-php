<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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

class UFileDailyReportItem extends Response
{
    

    /**
     * Storage: 标准-存储总容量；单位GB
     *
     * @return float|null
     */
    public function getStorage()
    {
        return $this->get("Storage");
    }

    /**
     * Storage: 标准-存储总容量；单位GB
     *
     * @param float $storage
     */
    public function setStorage($storage)
    {
        $this->set("Storage", $storage);
    }

    /**
     * IaStorage: 低频-存储总容量；单位GB
     *
     * @return float|null
     */
    public function getIaStorage()
    {
        return $this->get("IaStorage");
    }

    /**
     * IaStorage: 低频-存储总容量；单位GB
     *
     * @param float $iaStorage
     */
    public function setIaStorage($iaStorage)
    {
        $this->set("IaStorage", $iaStorage);
    }

    /**
     * AcStorage: 归档-存储总容量；单位GB
     *
     * @return float|null
     */
    public function getAcStorage()
    {
        return $this->get("AcStorage");
    }

    /**
     * AcStorage: 归档-存储总容量；单位GB
     *
     * @param float $acStorage
     */
    public function setAcStorage($acStorage)
    {
        $this->set("AcStorage", $acStorage);
    }

    /**
     * IaGetSize: 低频-数据取回量，即低频文件的数据取回量；单位GB
     *
     * @return float|null
     */
    public function getIaGetSize()
    {
        return $this->get("IaGetSize");
    }

    /**
     * IaGetSize: 低频-数据取回量，即低频文件的数据取回量；单位GB
     *
     * @param float $iaGetSize
     */
    public function setIaGetSize($iaGetSize)
    {
        $this->set("IaGetSize", $iaGetSize);
    }

    /**
     * AcRestore: 归档-标准解冻量，即归档文件的解冻类型为标准（Strandard）的解冻量；单位GB
     *
     * @return float|null
     */
    public function getAcRestore()
    {
        return $this->get("AcRestore");
    }

    /**
     * AcRestore: 归档-标准解冻量，即归档文件的解冻类型为标准（Strandard）的解冻量；单位GB
     *
     * @param float $acRestore
     */
    public function setAcRestore($acRestore)
    {
        $this->set("AcRestore", $acRestore);
    }

    /**
     * AcExpeditedRetrieval: 归档-高优先级解冻量，即归档文件的解冻类型为高优先级（Expedited）的解冻量；单位GB
     *
     * @return float|null
     */
    public function getAcExpeditedRetrieval()
    {
        return $this->get("AcExpeditedRetrieval");
    }

    /**
     * AcExpeditedRetrieval: 归档-高优先级解冻量，即归档文件的解冻类型为高优先级（Expedited）的解冻量；单位GB
     *
     * @param float $acExpeditedRetrieval
     */
    public function setAcExpeditedRetrieval($acExpeditedRetrieval)
    {
        $this->set("AcExpeditedRetrieval", $acExpeditedRetrieval);
    }

    /**
     * IaShortStorage: 低频-短期存储量，即补足未满最短存储期限的剩余天数的存储量；单位GB
     *
     * @return float|null
     */
    public function getIaShortStorage()
    {
        return $this->get("IaShortStorage");
    }

    /**
     * IaShortStorage: 低频-短期存储量，即补足未满最短存储期限的剩余天数的存储量；单位GB
     *
     * @param float $iaShortStorage
     */
    public function setIaShortStorage($iaShortStorage)
    {
        $this->set("IaShortStorage", $iaShortStorage);
    }

    /**
     * AcShortStorage: 归档-短期存储量，即补足未满最短存储期限的剩余天数的存储量；单位GB
     *
     * @return float|null
     */
    public function getAcShortStorage()
    {
        return $this->get("AcShortStorage");
    }

    /**
     * AcShortStorage: 归档-短期存储量，即补足未满最短存储期限的剩余天数的存储量；单位GB
     *
     * @param float $acShortStorage
     */
    public function setAcShortStorage($acShortStorage)
    {
        $this->set("AcShortStorage", $acShortStorage);
    }

    /**
     * ImageHandleFlow: 基础图片处理量；单位GB
     *
     * @return float|null
     */
    public function getImageHandleFlow()
    {
        return $this->get("ImageHandleFlow");
    }

    /**
     * ImageHandleFlow: 基础图片处理量；单位GB
     *
     * @param float $imageHandleFlow
     */
    public function setImageHandleFlow($imageHandleFlow)
    {
        $this->set("ImageHandleFlow", $imageHandleFlow);
    }

    /**
     * ImageCompressCount: 图片高级压缩次数；单位千次
     *
     * @return float|null
     */
    public function getImageCompressCount()
    {
        return $this->get("ImageCompressCount");
    }

    /**
     * ImageCompressCount: 图片高级压缩次数；单位千次
     *
     * @param float $imageCompressCount
     */
    public function setImageCompressCount($imageCompressCount)
    {
        $this->set("ImageCompressCount", $imageCompressCount);
    }

    /**
     * BusyFlow: 忙时流量；单位GB；海外无此字段
     *
     * @return float|null
     */
    public function getBusyFlow()
    {
        return $this->get("BusyFlow");
    }

    /**
     * BusyFlow: 忙时流量；单位GB；海外无此字段
     *
     * @param float $busyFlow
     */
    public function setBusyFlow($busyFlow)
    {
        $this->set("BusyFlow", $busyFlow);
    }

    /**
     * IdleFlow: 闲时流量；单位GB；海外无此字段
     *
     * @return float|null
     */
    public function getIdleFlow()
    {
        return $this->get("IdleFlow");
    }

    /**
     * IdleFlow: 闲时流量；单位GB；海外无此字段
     *
     * @param float $idleFlow
     */
    public function setIdleFlow($idleFlow)
    {
        $this->set("IdleFlow", $idleFlow);
    }

    /**
     * CdnFlow: cdn回源流量;单位GB
     *
     * @return float|null
     */
    public function getCdnFlow()
    {
        return $this->get("CdnFlow");
    }

    /**
     * CdnFlow: cdn回源流量;单位GB
     *
     * @param float $cdnFlow
     */
    public function setCdnFlow($cdnFlow)
    {
        $this->set("CdnFlow", $cdnFlow);
    }

    /**
     * Flow: 下载流量：单位GB；国内无此字段
     *
     * @return float|null
     */
    public function getFlow()
    {
        return $this->get("Flow");
    }

    /**
     * Flow: 下载流量：单位GB；国内无此字段
     *
     * @param float $flow
     */
    public function setFlow($flow)
    {
        $this->set("Flow", $flow);
    }

    /**
     * Date: 配额消费时间，unix时间戳；单位s，精确到日期
     *
     * @return integer|null
     */
    public function getDate()
    {
        return $this->get("Date");
    }

    /**
     * Date: 配额消费时间，unix时间戳；单位s，精确到日期
     *
     * @param int $date
     */
    public function setDate($date)
    {
        $this->set("Date", $date);
    }

    /**
     * ApiTimes: 请求次数；单位万次
     *
     * @return float|null
     */
    public function getApiTimes()
    {
        return $this->get("ApiTimes");
    }

    /**
     * ApiTimes: 请求次数；单位万次
     *
     * @param float $apiTimes
     */
    public function setApiTimes($apiTimes)
    {
        $this->set("ApiTimes", $apiTimes);
    }

    /**
     * ObjectTagCount: 对象标签个数; 单位万个
     *
     * @return float|null
     */
    public function getObjectTagCount()
    {
        return $this->get("ObjectTagCount");
    }

    /**
     * ObjectTagCount: 对象标签个数; 单位万个
     *
     * @param float $objectTagCount
     */
    public function setObjectTagCount($objectTagCount)
    {
        $this->set("ObjectTagCount", $objectTagCount);
    }
}
