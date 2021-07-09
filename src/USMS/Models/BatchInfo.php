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

class BatchInfo extends Response
{
    

    /**
     * TemplateId: 模板ID
     *
     * @return string|null
     */
    public function getTemplateId(): string
    {
        return $this->get("TemplateId");
    }

    /**
     * TemplateId: 模板ID
     *
     * @param string $templateId
     */
    public function setTemplateId(string $templateId)
    {
        $this->set("TemplateId", $templateId);
    }

    /**
     * SigContent: 签名
     *
     * @return string|null
     */
    public function getSigContent(): string
    {
        return $this->get("SigContent");
    }

    /**
     * SigContent: 签名
     *
     * @param string $sigContent
     */
    public function setSigContent(string $sigContent)
    {
        $this->set("SigContent", $sigContent);
    }

    /**
     * Target: 具体号码信息
     *
     * @return FailPhoneDetail[]|null
     */
    public function getTarget(): array
    {
        $items = $this->get("Target") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new FailPhoneDetail($item));
        }
        return $result;
    }

    /**
     * Target: 具体号码信息
     *
     * @param FailPhoneDetail[] $target
     */
    public function setTarget(array $target)
    {
        $result = [];
        foreach ($target as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * FailureDetails: 未能成功发送的详情。注：模板/签名检验失败时，该字段有效
     *
     * @return string|null
     */
    public function getFailureDetails(): string
    {
        return $this->get("FailureDetails");
    }

    /**
     * FailureDetails: 未能成功发送的详情。注：模板/签名检验失败时，该字段有效
     *
     * @param string $failureDetails
     */
    public function setFailureDetails(string $failureDetails)
    {
        $this->set("FailureDetails", $failureDetails);
    }
}
