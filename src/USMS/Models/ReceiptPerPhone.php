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
namespace UCloud\USMS\Models;

use UCloud\Core\Response\Response;

class ReceiptPerPhone extends Response
{
    

    /**
     * Phone: 手机号码
     *
     * @return string|null
     */
    public function getPhone(): string
    {
        return $this->get("Phone");
    }

    /**
     * Phone: 手机号码
     *
     * @param string $phone
     */
    public function setPhone(string $phone)
    {
        $this->set("Phone", $phone);
    }

    /**
     * CostCount: 消耗短信条数
     *
     * @return integer|null
     */
    public function getCostCount(): int
    {
        return $this->get("CostCount");
    }

    /**
     * CostCount: 消耗短信条数
     *
     * @param int $costCount
     */
    public function setCostCount(int $costCount)
    {
        $this->set("CostCount", $costCount);
    }

    /**
     * ReceiptResult: 回执结果，枚举值：\\ > 发送成功: 代表成功 \\ > Success: 代表成功 \\ > 发送失败: 代表失败 \\ > Fail: 代表失败 \\ > 状态未知: 代表未知 \\ > Unknow: 代表未知
     *
     * @return string|null
     */
    public function getReceiptResult(): string
    {
        return $this->get("ReceiptResult");
    }

    /**
     * ReceiptResult: 回执结果，枚举值：\\ > 发送成功: 代表成功 \\ > Success: 代表成功 \\ > 发送失败: 代表失败 \\ > Fail: 代表失败 \\ > 状态未知: 代表未知 \\ > Unknow: 代表未知
     *
     * @param string $receiptResult
     */
    public function setReceiptResult(string $receiptResult)
    {
        $this->set("ReceiptResult", $receiptResult);
    }

    /**
     * ReceiptCode: 状态报告编码
     *
     * @return string|null
     */
    public function getReceiptCode(): string
    {
        return $this->get("ReceiptCode");
    }

    /**
     * ReceiptCode: 状态报告编码
     *
     * @param string $receiptCode
     */
    public function setReceiptCode(string $receiptCode)
    {
        $this->set("ReceiptCode", $receiptCode);
    }

    /**
     * ReceiptDesc: 回执结果描述
     *
     * @return string|null
     */
    public function getReceiptDesc(): string
    {
        return $this->get("ReceiptDesc");
    }

    /**
     * ReceiptDesc: 回执结果描述
     *
     * @param string $receiptDesc
     */
    public function setReceiptDesc(string $receiptDesc)
    {
        $this->set("ReceiptDesc", $receiptDesc);
    }

    /**
     * ReceiptTime: 回执返回时间
     *
     * @return integer|null
     */
    public function getReceiptTime(): int
    {
        return $this->get("ReceiptTime");
    }

    /**
     * ReceiptTime: 回执返回时间
     *
     * @param int $receiptTime
     */
    public function setReceiptTime(int $receiptTime)
    {
        $this->set("ReceiptTime", $receiptTime);
    }

    /**
     * UserId: 自定义的业务标识ID，字符串
     *
     * @return string|null
     */
    public function getUserId(): string
    {
        return $this->get("UserId");
    }

    /**
     * UserId: 自定义的业务标识ID，字符串
     *
     * @param string $userId
     */
    public function setUserId(string $userId)
    {
        $this->set("UserId", $userId);
    }
}
