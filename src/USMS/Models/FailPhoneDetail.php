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

class FailPhoneDetail extends Response
{
    

    /**
     * TemplateParams: 模板参数
     *
     * @return string[]|null
     */
    public function getTemplateParams()
    {
        return $this->get("TemplateParams");
    }

    /**
     * TemplateParams: 模板参数
     *
     * @param string[] $templateParams
     */
    public function setTemplateParams(array $templateParams)
    {
        $this->set("TemplateParams", $templateParams);
    }

    /**
     * Phone: 手机号
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->get("Phone");
    }

    /**
     * Phone: 手机号
     *
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->set("Phone", $phone);
    }

    /**
     * ExtendCode: 扩展号码
     *
     * @return string|null
     */
    public function getExtendCode()
    {
        return $this->get("ExtendCode");
    }

    /**
     * ExtendCode: 扩展号码
     *
     * @param string $extendCode
     */
    public function setExtendCode($extendCode)
    {
        $this->set("ExtendCode", $extendCode);
    }

    /**
     * UserId: 用户自定义ID
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->get("UserId");
    }

    /**
     * UserId: 用户自定义ID
     *
     * @param string $userId
     */
    public function setUserId($userId)
    {
        $this->set("UserId", $userId);
    }

    /**
     * FailureDetails: 发送失败原因。注：若模板/签名校验失败，该字段为空
     *
     * @return string|null
     */
    public function getFailureDetails()
    {
        return $this->get("FailureDetails");
    }

    /**
     * FailureDetails: 发送失败原因。注：若模板/签名校验失败，该字段为空
     *
     * @param string $failureDetails
     */
    public function setFailureDetails($failureDetails)
    {
        $this->set("FailureDetails", $failureDetails);
    }
}
