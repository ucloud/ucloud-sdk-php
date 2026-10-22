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

class StatisticsData extends Response
{
    

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
     * SendCostCount: 发送总数（拆分条数）
     *
     * @return integer|null
     */
    public function getSendCostCount()
    {
        return $this->get("SendCostCount");
    }

    /**
     * SendCostCount: 发送总数（拆分条数）
     *
     * @param int $sendCostCount
     */
    public function setSendCostCount($sendCostCount)
    {
        $this->set("SendCostCount", $sendCostCount);
    }

    /**
     * FailCount: 发送失败数（提交条数）
     *
     * @return integer|null
     */
    public function getFailCount()
    {
        return $this->get("FailCount");
    }

    /**
     * FailCount: 发送失败数（提交条数）
     *
     * @param int $failCount
     */
    public function setFailCount($failCount)
    {
        $this->set("FailCount", $failCount);
    }

    /**
     * SendCount: 发送总数（提交条数）
     *
     * @return integer|null
     */
    public function getSendCount()
    {
        return $this->get("SendCount");
    }

    /**
     * SendCount: 发送总数（提交条数）
     *
     * @param int $sendCount
     */
    public function setSendCount($sendCount)
    {
        $this->set("SendCount", $sendCount);
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
     * FailCostCount: 发送失败数（拆分条数）
     *
     * @return integer|null
     */
    public function getFailCostCount()
    {
        return $this->get("FailCostCount");
    }

    /**
     * FailCostCount: 发送失败数（拆分条数）
     *
     * @param int $failCostCount
     */
    public function setFailCostCount($failCostCount)
    {
        $this->set("FailCostCount", $failCostCount);
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
     * SubmitFailCount: 提交失败数（提交条数）
     *
     * @return integer|null
     */
    public function getSubmitFailCount()
    {
        return $this->get("SubmitFailCount");
    }

    /**
     * SubmitFailCount: 提交失败数（提交条数）
     *
     * @param int $submitFailCount
     */
    public function setSubmitFailCount($submitFailCount)
    {
        $this->set("SubmitFailCount", $submitFailCount);
    }

    /**
     * SubmitFailCostCount: 提交失败数（拆分条数）
     *
     * @return integer|null
     */
    public function getSubmitFailCostCount()
    {
        return $this->get("SubmitFailCostCount");
    }

    /**
     * SubmitFailCostCount: 提交失败数（拆分条数）
     *
     * @param int $submitFailCostCount
     */
    public function setSubmitFailCostCount($submitFailCostCount)
    {
        $this->set("SubmitFailCostCount", $submitFailCostCount);
    }
}
