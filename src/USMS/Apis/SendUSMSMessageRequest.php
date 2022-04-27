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

use UCloud\Core\Request\Request;

class SendUSMSMessageRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "SendUSMSMessage"]);
        $this->markRequired("ProjectId");
        $this->markRequired("PhoneNumbers");
        $this->markRequired("SigContent");
        $this->markRequired("TemplateId");
    }

    

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * PhoneNumbers: 电话号码数组，电话号码格式为(60)1xxxxxxxx，()中为国际长途区号(如中国为86或0086，两种格式都支持)，后面为电话号码.若不传入国际区号，如1851623xxxx，则默认为国内手机号
     *
     * @return string[]|null
     */
    public function getPhoneNumbers(): array
    {
        return $this->get("PhoneNumbers");
    }

    /**
     * PhoneNumbers: 电话号码数组，电话号码格式为(60)1xxxxxxxx，()中为国际长途区号(如中国为86或0086，两种格式都支持)，后面为电话号码.若不传入国际区号，如1851623xxxx，则默认为国内手机号
     *
     * @param string[] $phoneNumbers
     */
    public function setPhoneNumbers(array $phoneNumbers)
    {
        $this->set("PhoneNumbers", $phoneNumbers);
    }

    /**
     * SigContent: 短信签名内容，请到[USMS控制台](https://console.ucloud.cn/usms)的签名管理页面查看；使用的短信签名必须是已申请并且通过审核；
     *
     * @return string|null
     */
    public function getSigContent(): string
    {
        return $this->get("SigContent");
    }

    /**
     * SigContent: 短信签名内容，请到[USMS控制台](https://console.ucloud.cn/usms)的签名管理页面查看；使用的短信签名必须是已申请并且通过审核；
     *
     * @param string $sigContent
     */
    public function setSigContent(string $sigContent)
    {
        $this->set("SigContent", $sigContent);
    }

    /**
     * TemplateId: 模板ID（也即短信模板申请时的工单ID），请到[USMS控制台](https://console.ucloud.cn/usms)的模板管理页面查看；使用的短信模板必须是已申请并通过审核；
     *
     * @return string|null
     */
    public function getTemplateId(): string
    {
        return $this->get("TemplateId");
    }

    /**
     * TemplateId: 模板ID（也即短信模板申请时的工单ID），请到[USMS控制台](https://console.ucloud.cn/usms)的模板管理页面查看；使用的短信模板必须是已申请并通过审核；
     *
     * @param string $templateId
     */
    public function setTemplateId(string $templateId)
    {
        $this->set("TemplateId", $templateId);
    }

    /**
     * TemplateParams: 模板可变参数，以数组的方式填写，举例，TemplateParams.0，TemplateParams.1，... 若模板中无可变参数，则该项可不填写；若模板中有可变参数，则该项为必填项，参数个数需与变量个数保持一致，否则无法发送；
     *
     * @return string[]|null
     */
    public function getTemplateParams(): array
    {
        return $this->get("TemplateParams");
    }

    /**
     * TemplateParams: 模板可变参数，以数组的方式填写，举例，TemplateParams.0，TemplateParams.1，... 若模板中无可变参数，则该项可不填写；若模板中有可变参数，则该项为必填项，参数个数需与变量个数保持一致，否则无法发送；
     *
     * @param string[] $templateParams
     */
    public function setTemplateParams(array $templateParams)
    {
        $this->set("TemplateParams", $templateParams);
    }

    /**
     * ExtendCode: 短信扩展码，格式为阿拉伯数字串，默认不开通，如需开通请联系 UCloud技术支持
     *
     * @return string|null
     */
    public function getExtendCode(): string
    {
        return $this->get("ExtendCode");
    }

    /**
     * ExtendCode: 短信扩展码，格式为阿拉伯数字串，默认不开通，如需开通请联系 UCloud技术支持
     *
     * @param string $extendCode
     */
    public function setExtendCode(string $extendCode)
    {
        $this->set("ExtendCode", $extendCode);
    }

    /**
     * UserId: 自定义的业务标识ID，字符串（ 长度不能超过32 位），不支持 单引号、表情包符号等特殊字符
     *
     * @return string|null
     */
    public function getUserId(): string
    {
        return $this->get("UserId");
    }

    /**
     * UserId: 自定义的业务标识ID，字符串（ 长度不能超过32 位），不支持 单引号、表情包符号等特殊字符
     *
     * @param string $userId
     */
    public function setUserId(string $userId)
    {
        $this->set("UserId", $userId);
    }
}
