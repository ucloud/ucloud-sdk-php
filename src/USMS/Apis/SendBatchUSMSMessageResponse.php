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
namespace UCloud\USMS\Apis;

use UCloud\Core\Response\Response;
use UCloud\USMS\Models\BatchInfo;
use UCloud\USMS\Models\FailPhoneDetail;

class SendBatchUSMSMessageResponse extends Response
{
    

    /**
     * SessionNo: 本次提交发送任务的唯一ID，可根据该值查询本次发送的短信列表。注：成功提交短信数大于0时，才返回该字段
     *
     * @return string|null
     */
    public function getSessionNo(): string
    {
        return $this->get("SessionNo");
    }

    /**
     * SessionNo: 本次提交发送任务的唯一ID，可根据该值查询本次发送的短信列表。注：成功提交短信数大于0时，才返回该字段
     *
     * @param string $sessionNo
     */
    public function setSessionNo(string $sessionNo)
    {
        $this->set("SessionNo", $sessionNo);
    }

    /**
     * ReqUuid: 本次请求Uuid
     *
     * @return string|null
     */
    public function getReqUuid(): string
    {
        return $this->get("ReqUuid");
    }

    /**
     * ReqUuid: 本次请求Uuid
     *
     * @param string $reqUuid
     */
    public function setReqUuid(string $reqUuid)
    {
        $this->set("ReqUuid", $reqUuid);
    }

    /**
     * SuccessCount: 成功提交短信（未拆分）条数
     *
     * @return integer|null
     */
    public function getSuccessCount(): int
    {
        return $this->get("SuccessCount");
    }

    /**
     * SuccessCount: 成功提交短信（未拆分）条数
     *
     * @param int $successCount
     */
    public function setSuccessCount(int $successCount)
    {
        $this->set("SuccessCount", $successCount);
    }

    /**
     * FailContent: 未发送成功的详情，返回码非0时该字段有效，可根据该字段数据重发
     *
     * @return BatchInfo[]|null
     */
    public function getFailContent(): array
    {
        $items = $this->get("FailContent") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new BatchInfo($item));
        }
        return $result;
    }

    /**
     * FailContent: 未发送成功的详情，返回码非0时该字段有效，可根据该字段数据重发
     *
     * @param BatchInfo[] $failContent
     */
    public function setFailContent(array $failContent)
    {
        $result = [];
        foreach ($failContent as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
