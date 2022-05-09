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
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("CalledNumber");
        $this->markRequired("TemplateId");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
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
}
