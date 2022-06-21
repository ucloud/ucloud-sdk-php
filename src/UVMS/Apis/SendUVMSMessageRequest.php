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
namespace UCloud\UVMS\Apis;

use UCloud\Core\Request\Request;

class SendUVMSMessageRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "SendUVMSMessage"]);
        $this->markRequired("CalledNumber");
        $this->markRequired("TemplateId");
    }

    

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * CalledNumber: 被叫号码，采用 E.164 标准，格式为+[国家代码][用户号码]。例如：+8613512345678， 其中前面有一个+号 ，86为国家码，13512345678为手机号
     *
     * @return string|null
     */
    public function getCalledNumber()
    {
        return $this->get("CalledNumber");
    }

    /**
     * CalledNumber: 被叫号码，采用 E.164 标准，格式为+[国家代码][用户号码]。例如：+8613512345678， 其中前面有一个+号 ，86为国家码，13512345678为手机号
     *
     * @param string $calledNumber
     */
    public function setCalledNumber($calledNumber)
    {
        $this->set("CalledNumber", $calledNumber);
    }

    /**
     * TemplateId: 模板 ID，在控制台审核通过的模板 ID。
     *
     * @return string|null
     */
    public function getTemplateId()
    {
        return $this->get("TemplateId");
    }

    /**
     * TemplateId: 模板 ID，在控制台审核通过的模板 ID。
     *
     * @param string $templateId
     */
    public function setTemplateId($templateId)
    {
        $this->set("TemplateId", $templateId);
    }

    /**
     * TemplateParams: 模板可变参数，以数组的方式填写，举例，TemplateParams.0，TemplateParams.1，... 若模板中无可变参数，则该项可不填写；若模板中有可变参数，则该项为必填项，参数个数需与变量个数保持一致，否则无法发送；
     *
     * @return string[]|null
     */
    public function getTemplateParams()
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
     * FromNumber: 主叫号码，号码随机时不填。专属号码时传入已购买的号码，仅支持一个号码，在控制台查看已购买的号码。
     *
     * @return string|null
     */
    public function getFromNumber()
    {
        return $this->get("FromNumber");
    }

    /**
     * FromNumber: 主叫号码，号码随机时不填。专属号码时传入已购买的号码，仅支持一个号码，在控制台查看已购买的号码。
     *
     * @param string $fromNumber
     */
    public function setFromNumber($fromNumber)
    {
        $this->set("FromNumber", $fromNumber);
    }

    /**
     * UserId: 自定义的业务标识ID，字符串（ 长度不能超过32 位），不支持 单引号、表情包符号等特殊字符
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->get("UserId");
    }

    /**
     * UserId: 自定义的业务标识ID，字符串（ 长度不能超过32 位），不支持 单引号、表情包符号等特殊字符
     *
     * @param string $userId
     */
    public function setUserId($userId)
    {
        $this->set("UserId", $userId);
    }

    /**
     * GroupType: 号码组类型，1-随机组，2-专属组。如不填写则根据主叫号码判断，若主叫号码为空，则为随机组，若不为空，则为专属组。
     *
     * @return int|null
     */
    public function getGroupType()
    {
        return $this->get("GroupType");
    }

    /**
     * GroupType: 号码组类型，1-随机组，2-专属组。如不填写则根据主叫号码判断，若主叫号码为空，则为随机组，若不为空，则为专属组。
     *
     * @param int $groupType
     */
    public function setGroupType($groupType)
    {
        $this->set("GroupType", $groupType);
    }

    /**
     * DispatchRule: 调度规则，0-默认（归属地优先），1-随机。当不指定外显号码（主叫号码为空）时生效。如不填写，默认为归属地优先。
     *
     * @return int|null
     */
    public function getDispatchRule()
    {
        return $this->get("DispatchRule");
    }

    /**
     * DispatchRule: 调度规则，0-默认（归属地优先），1-随机。当不指定外显号码（主叫号码为空）时生效。如不填写，默认为归属地优先。
     *
     * @param int $dispatchRule
     */
    public function setDispatchRule($dispatchRule)
    {
        $this->set("DispatchRule", $dispatchRule);
    }


}
