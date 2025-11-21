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

class UFileDailyBillItem extends Response
{
    

    /**
     * GetCountIaBill: 下载低频存储次数费用；分
     *
     * @return float|null
     */
    public function getGetCountIaBill()
    {
        return $this->get("GetCountIaBill");
    }

    /**
     * GetCountIaBill: 下载低频存储次数费用；分
     *
     * @param float $getCountIaBill
     */
    public function setGetCountIaBill($getCountIaBill)
    {
        $this->set("GetCountIaBill", $getCountIaBill);
    }

    /**
     * GetCountBill: 下载标准存储次数费用；分
     *
     * @return float|null
     */
    public function getGetCountBill()
    {
        return $this->get("GetCountBill");
    }

    /**
     * GetCountBill: 下载标准存储次数费用；分
     *
     * @param float $getCountBill
     */
    public function setGetCountBill($getCountBill)
    {
        $this->set("GetCountBill", $getCountBill);
    }

    /**
     * PutCountAcBill: 上传归档存储次数费用；分
     *
     * @return float|null
     */
    public function getPutCountAcBill()
    {
        return $this->get("PutCountAcBill");
    }

    /**
     * PutCountAcBill: 上传归档存储次数费用；分
     *
     * @param float $putCountAcBill
     */
    public function setPutCountAcBill($putCountAcBill)
    {
        $this->set("PutCountAcBill", $putCountAcBill);
    }

    /**
     * PutCountIaBill: 上传低频存储次数费用；分
     *
     * @return float|null
     */
    public function getPutCountIaBill()
    {
        return $this->get("PutCountIaBill");
    }

    /**
     * PutCountIaBill: 上传低频存储次数费用；分
     *
     * @param float $putCountIaBill
     */
    public function setPutCountIaBill($putCountIaBill)
    {
        $this->set("PutCountIaBill", $putCountIaBill);
    }

    /**
     * PutCountBill: 上传标准存储次数费用；分
     *
     * @return float|null
     */
    public function getPutCountBill()
    {
        return $this->get("PutCountBill");
    }

    /**
     * PutCountBill: 上传标准存储次数费用；分
     *
     * @param float $putCountBill
     */
    public function setPutCountBill($putCountBill)
    {
        $this->set("PutCountBill", $putCountBill);
    }

    /**
     * ObjectTagCountBill: 对象标签费用: 分
     *
     * @return float|null
     */
    public function getObjectTagCountBill()
    {
        return $this->get("ObjectTagCountBill");
    }

    /**
     * ObjectTagCountBill: 对象标签费用: 分
     *
     * @param float $objectTagCountBill
     */
    public function setObjectTagCountBill($objectTagCountBill)
    {
        $this->set("ObjectTagCountBill", $objectTagCountBill);
    }

    /**
     * StorageBill: 标准-存储总容量费用；分
     *
     * @return float|null
     */
    public function getStorageBill()
    {
        return $this->get("StorageBill");
    }

    /**
     * StorageBill: 标准-存储总容量费用；分
     *
     * @param float $storageBill
     */
    public function setStorageBill($storageBill)
    {
        $this->set("StorageBill", $storageBill);
    }

    /**
     * IaStorageBill: 低频-存储总容量费用；分
     *
     * @return float|null
     */
    public function getIaStorageBill()
    {
        return $this->get("IaStorageBill");
    }

    /**
     * IaStorageBill: 低频-存储总容量费用；分
     *
     * @param float $iaStorageBill
     */
    public function setIaStorageBill($iaStorageBill)
    {
        $this->set("IaStorageBill", $iaStorageBill);
    }

    /**
     * AcStorageBill: 归档-存储总容量费用；分
     *
     * @return float|null
     */
    public function getAcStorageBill()
    {
        return $this->get("AcStorageBill");
    }

    /**
     * AcStorageBill: 归档-存储总容量费用；分
     *
     * @param float $acStorageBill
     */
    public function setAcStorageBill($acStorageBill)
    {
        $this->set("AcStorageBill", $acStorageBill);
    }

    /**
     * IaGetSizeBill: 低频-数据取回量，即低频文件的数据取回量费用；分
     *
     * @return float|null
     */
    public function getIaGetSizeBill()
    {
        return $this->get("IaGetSizeBill");
    }

    /**
     * IaGetSizeBill: 低频-数据取回量，即低频文件的数据取回量费用；分
     *
     * @param float $iaGetSizeBill
     */
    public function setIaGetSizeBill($iaGetSizeBill)
    {
        $this->set("IaGetSizeBill", $iaGetSizeBill);
    }

    /**
     * AcRestoreBill: 归档-标准解冻量，即归档文件的解冻类型为标准（Strandard）的解冻量费用； 分
     *
     * @return float|null
     */
    public function getAcRestoreBill()
    {
        return $this->get("AcRestoreBill");
    }

    /**
     * AcRestoreBill: 归档-标准解冻量，即归档文件的解冻类型为标准（Strandard）的解冻量费用； 分
     *
     * @param float $acRestoreBill
     */
    public function setAcRestoreBill($acRestoreBill)
    {
        $this->set("AcRestoreBill", $acRestoreBill);
    }

    /**
     * AcExpeditedRetrievalBill: 归档-高优先级解冻量，即归档文件的解冻类型为高优先级（Expedited）的解冻量费用； 分
     *
     * @return float|null
     */
    public function getAcExpeditedRetrievalBill()
    {
        return $this->get("AcExpeditedRetrievalBill");
    }

    /**
     * AcExpeditedRetrievalBill: 归档-高优先级解冻量，即归档文件的解冻类型为高优先级（Expedited）的解冻量费用； 分
     *
     * @param float $acExpeditedRetrievalBill
     */
    public function setAcExpeditedRetrievalBill($acExpeditedRetrievalBill)
    {
        $this->set("AcExpeditedRetrievalBill", $acExpeditedRetrievalBill);
    }

    /**
     * IaShortStorageBill: 低频-短期存储量，即补足未满最短存储期限的剩余天数的存储量费用；分
     *
     * @return float|null
     */
    public function getIaShortStorageBill()
    {
        return $this->get("IaShortStorageBill");
    }

    /**
     * IaShortStorageBill: 低频-短期存储量，即补足未满最短存储期限的剩余天数的存储量费用；分
     *
     * @param float $iaShortStorageBill
     */
    public function setIaShortStorageBill($iaShortStorageBill)
    {
        $this->set("IaShortStorageBill", $iaShortStorageBill);
    }

    /**
     * AcShortStorageBill: 归档-短期存储量，即补足未满最短存储期限的剩余天数的存储量费用；分
     *
     * @return float|null
     */
    public function getAcShortStorageBill()
    {
        return $this->get("AcShortStorageBill");
    }

    /**
     * AcShortStorageBill: 归档-短期存储量，即补足未满最短存储期限的剩余天数的存储量费用；分
     *
     * @param float $acShortStorageBill
     */
    public function setAcShortStorageBill($acShortStorageBill)
    {
        $this->set("AcShortStorageBill", $acShortStorageBill);
    }

    /**
     * ImageHandleFlowBill: 基础图片处理量费用；分
     *
     * @return float|null
     */
    public function getImageHandleFlowBill()
    {
        return $this->get("ImageHandleFlowBill");
    }

    /**
     * ImageHandleFlowBill: 基础图片处理量费用；分
     *
     * @param float $imageHandleFlowBill
     */
    public function setImageHandleFlowBill($imageHandleFlowBill)
    {
        $this->set("ImageHandleFlowBill", $imageHandleFlowBill);
    }

    /**
     * ImageCompressCountBill: 图片高级压缩次数费用；分
     *
     * @return float|null
     */
    public function getImageCompressCountBill()
    {
        return $this->get("ImageCompressCountBill");
    }

    /**
     * ImageCompressCountBill: 图片高级压缩次数费用；分
     *
     * @param float $imageCompressCountBill
     */
    public function setImageCompressCountBill($imageCompressCountBill)
    {
        $this->set("ImageCompressCountBill", $imageCompressCountBill);
    }

    /**
     * BusyFlowBill: 忙时流量费用；分；海外无此字段
     *
     * @return float|null
     */
    public function getBusyFlowBill()
    {
        return $this->get("BusyFlowBill");
    }

    /**
     * BusyFlowBill: 忙时流量费用；分；海外无此字段
     *
     * @param float $busyFlowBill
     */
    public function setBusyFlowBill($busyFlowBill)
    {
        $this->set("BusyFlowBill", $busyFlowBill);
    }

    /**
     * IdleFlowBill: 闲时流量费用；分；海外无此字段
     *
     * @return float|null
     */
    public function getIdleFlowBill()
    {
        return $this->get("IdleFlowBill");
    }

    /**
     * IdleFlowBill: 闲时流量费用；分；海外无此字段
     *
     * @param float $idleFlowBill
     */
    public function setIdleFlowBill($idleFlowBill)
    {
        $this->set("IdleFlowBill", $idleFlowBill);
    }

    /**
     * CdnFlowBill: cdn回源流量费用;分
     *
     * @return float|null
     */
    public function getCdnFlowBill()
    {
        return $this->get("CdnFlowBill");
    }

    /**
     * CdnFlowBill: cdn回源流量费用;分
     *
     * @param float $cdnFlowBill
     */
    public function setCdnFlowBill($cdnFlowBill)
    {
        $this->set("CdnFlowBill", $cdnFlowBill);
    }

    /**
     * FlowBill: 下载流量费用：分；国内无此字段
     *
     * @return float|null
     */
    public function getFlowBill()
    {
        return $this->get("FlowBill");
    }

    /**
     * FlowBill: 下载流量费用：分；国内无此字段
     *
     * @param float $flowBill
     */
    public function setFlowBill($flowBill)
    {
        $this->set("FlowBill", $flowBill);
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
     * GetCountAcBill: 下载归档存储次数费用；分
     *
     * @return float|null
     */
    public function getGetCountAcBill()
    {
        return $this->get("GetCountAcBill");
    }

    /**
     * GetCountAcBill: 下载归档存储次数费用；分
     *
     * @param float $getCountAcBill
     */
    public function setGetCountAcBill($getCountAcBill)
    {
        $this->set("GetCountAcBill", $getCountAcBill);
    }
}
