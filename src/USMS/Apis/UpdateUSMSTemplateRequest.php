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
namespace UCloud\USMS\Apis;

use UCloud\Core\Request\Request;

class UpdateUSMSTemplateRequest extends Request {
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateUSMSTemplate"]);
        $this->markRequired("ProjectId");
        $this->markRequired("TemplateId");
        $this->markRequired("Template");
    }

    

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId(): string {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId) {
        $this->set("ProjectId", $projectId);
    }

    /**
     * TemplateId: 短信模板ID
     *
     * @return string|null
     */
    public function getTemplateId(): string {
        return $this->get("TemplateId");
    }

    /**
     * TemplateId: 短信模板ID
     *
     * @param string $templateId
     */
    public function setTemplateId(string $templateId) {
        $this->set("TemplateId", $templateId);
    }

    /**
     * Template: 新的模板内容。模板名称和模板内容必须提供一个，否则会报错。小于等于600个字
     *
     * @return string|null
     */
    public function getTemplate(): string {
        return $this->get("Template");
    }

    /**
     * Template: 新的模板内容。模板名称和模板内容必须提供一个，否则会报错。小于等于600个字
     *
     * @param string $template
     */
    public function setTemplate(string $template) {
        $this->set("Template", $template);
    }

    /**
     * TemplateName: 新的模板名称。小于等于32个字，每个中文、英文、数组、符合都计为一个字
     *
     * @return string|null
     */
    public function getTemplateName(): string {
        return $this->get("TemplateName");
    }

    /**
     * TemplateName: 新的模板名称。小于等于32个字，每个中文、英文、数组、符合都计为一个字
     *
     * @param string $templateName
     */
    public function setTemplateName(string $templateName) {
        $this->set("TemplateName", $templateName);
    }

    /**
     * Remark: 短信模板申请原因说明，字数不超过128，每个中文、符号、英文、数字等都计为1个字。
     *
     * @return string|null
     */
    public function getRemark(): string {
        return $this->get("Remark");
    }

    /**
     * Remark: 短信模板申请原因说明，字数不超过128，每个中文、符号、英文、数字等都计为1个字。
     *
     * @param string $remark
     */
    public function setRemark(string $remark) {
        $this->set("Remark", $remark);
    }


}
