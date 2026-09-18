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
namespace UCloud\SES\Apis;

use UCloud\Core\Response\Response;
use UCloud\SES\Models\FailedTargetEmail;

class SendSESEmailResponse extends Response
{
    

    /**
     * SessionNo: 本次发送任务的唯一标识
     *
     * @return string|null
     */
    public function getSessionNo()
    {
        return $this->get("SessionNo");
    }

    /**
     * SessionNo: 本次发送任务的唯一标识
     *
     * @param string $sessionNo
     */
    public function setSessionNo($sessionNo)
    {
        $this->set("SessionNo", $sessionNo);
    }

    /**
     * SuccessCount: 发送成功数
     *
     * @return integer|null
     */
    public function getSuccessCount()
    {
        return $this->get("SuccessCount");
    }

    /**
     * SuccessCount: 发送成功数
     *
     * @param int $successCount
     */
    public function setSuccessCount($successCount)
    {
        $this->set("SuccessCount", $successCount);
    }

    /**
     * FailContent: 发送失败的收件人列表
     *
     * @return FailedTargetEmail[]|null
     */
    public function getFailContent()
    {
        $items = $this->get("FailContent");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new FailedTargetEmail($item));
        }
        return $result;
    }

    /**
     * FailContent: 发送失败的收件人列表
     *
     * @param FailedTargetEmail[] $failContent
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
