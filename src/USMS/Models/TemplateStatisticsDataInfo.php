<?php
/**
 * Copyright 2026 UCloud Technology Co., Ltd.
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
namespace UCloud\USMS\Models;

use UCloud\Core\Response\Response;

class TemplateStatisticsDataInfo extends Response
{
    

    /**
     * SendDate: 发送时间
     *
     * @return string|null
     */
    public function getSendDate()
    {
        return $this->get("SendDate");
    }

    /**
     * SendDate: 发送时间
     *
     * @param string $sendDate
     */
    public function setSendDate($sendDate)
    {
        $this->set("SendDate", $sendDate);
    }

    /**
     * BrevityCode: 国际/地区标识码
     *
     * @return string|null
     */
    public function getBrevityCode()
    {
        return $this->get("BrevityCode");
    }

    /**
     * BrevityCode: 国际/地区标识码
     *
     * @param string $brevityCode
     */
    public function setBrevityCode($brevityCode)
    {
        $this->set("BrevityCode", $brevityCode);
    }

    /**
     * TemplateId: 短信模板ID
     *
     * @return string|null
     */
    public function getTemplateId()
    {
        return $this->get("TemplateId");
    }

    /**
     * TemplateId: 短信模板ID
     *
     * @param string $templateId
     */
    public function setTemplateId($templateId)
    {
        $this->set("TemplateId", $templateId);
    }

    /**
     * Count: 发送总数（提交条数）
     *
     * @return integer|null
     */
    public function getCount()
    {
        return $this->get("Count");
    }

    /**
     * Count: 发送总数（提交条数）
     *
     * @param int $count
     */
    public function setCount($count)
    {
        $this->set("Count", $count);
    }

    /**
     * CostCount: 发送总数（拆分条数）
     *
     * @return integer|null
     */
    public function getCostCount()
    {
        return $this->get("CostCount");
    }

    /**
     * CostCount: 发送总数（拆分条数）
     *
     * @param int $costCount
     */
    public function setCostCount($costCount)
    {
        $this->set("CostCount", $costCount);
    }

    /**
     * SuccessCount: 发送成功数（提交条数）
     *
     * @return integer|null
     */
    public function getSuccessCount()
    {
        return $this->get("SuccessCount");
    }

    /**
     * SuccessCount: 发送成功数（提交条数）
     *
     * @param int $successCount
     */
    public function setSuccessCount($successCount)
    {
        $this->set("SuccessCount", $successCount);
    }

    /**
     * SuccessCostCount: 发送成功数（拆分条数）
     *
     * @return integer|null
     */
    public function getSuccessCostCount()
    {
        return $this->get("SuccessCostCount");
    }

    /**
     * SuccessCostCount: 发送成功数（拆分条数）
     *
     * @param int $successCostCount
     */
    public function setSuccessCostCount($successCostCount)
    {
        $this->set("SuccessCostCount", $successCostCount);
    }

    /**
     * FailedCount: 发送失败数（提交条数）
     *
     * @return integer|null
     */
    public function getFailedCount()
    {
        return $this->get("FailedCount");
    }

    /**
     * FailedCount: 发送失败数（提交条数）
     *
     * @param int $failedCount
     */
    public function setFailedCount($failedCount)
    {
        $this->set("FailedCount", $failedCount);
    }

    /**
     * FailedCostCount: 发送失败数（拆分条数）
     *
     * @return integer|null
     */
    public function getFailedCostCount()
    {
        return $this->get("FailedCostCount");
    }

    /**
     * FailedCostCount: 发送失败数（拆分条数）
     *
     * @param int $failedCostCount
     */
    public function setFailedCostCount($failedCostCount)
    {
        $this->set("FailedCostCount", $failedCostCount);
    }

    /**
     * UnknownCount: 状态未知数（提交条数）
     *
     * @return integer|null
     */
    public function getUnknownCount()
    {
        return $this->get("UnknownCount");
    }

    /**
     * UnknownCount: 状态未知数（提交条数）
     *
     * @param int $unknownCount
     */
    public function setUnknownCount($unknownCount)
    {
        $this->set("UnknownCount", $unknownCount);
    }

    /**
     * UnknownCostCount: 状态未知数（拆分条数）
     *
     * @return integer|null
     */
    public function getUnknownCostCount()
    {
        return $this->get("UnknownCostCount");
    }

    /**
     * UnknownCostCount: 状态未知数（拆分条数）
     *
     * @param int $unknownCostCount
     */
    public function setUnknownCostCount($unknownCostCount)
    {
        $this->set("UnknownCostCount", $unknownCostCount);
    }

    /**
     * SubmitFailedCount: 提交失败数（提交条数）
     *
     * @return integer|null
     */
    public function getSubmitFailedCount()
    {
        return $this->get("SubmitFailedCount");
    }

    /**
     * SubmitFailedCount: 提交失败数（提交条数）
     *
     * @param int $submitFailedCount
     */
    public function setSubmitFailedCount($submitFailedCount)
    {
        $this->set("SubmitFailedCount", $submitFailedCount);
    }

    /**
     * SubmitFailedCostCount: 提交失败数（拆分条数）
     *
     * @return integer|null
     */
    public function getSubmitFailedCostCount()
    {
        return $this->get("SubmitFailedCostCount");
    }

    /**
     * SubmitFailedCostCount: 提交失败数（拆分条数）
     *
     * @param int $submitFailedCostCount
     */
    public function setSubmitFailedCostCount($submitFailedCostCount)
    {
        $this->set("SubmitFailedCostCount", $submitFailedCostCount);
    }
}
