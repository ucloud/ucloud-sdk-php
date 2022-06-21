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

class DeleteUSMSTemplateRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DeleteUSMSTemplate"]);
        $this->markRequired("ProjectId");
        $this->markRequired("TemplateIds");
    }

    

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * TemplateIds: 模板ID（也即短信模板申请时的工单ID），支持以数组的方式，举例，以TemplateIds.0、TemplateIds.1...TemplateIds.N方式传入
     *
     * @return string[]|null
     */
    public function getTemplateIds()
    {
        return $this->get("TemplateIds");
    }

    /**
     * TemplateIds: 模板ID（也即短信模板申请时的工单ID），支持以数组的方式，举例，以TemplateIds.0、TemplateIds.1...TemplateIds.N方式传入
     *
     * @param string[] $templateIds
     */
    public function setTemplateIds(array $templateIds)
    {
        $this->set("TemplateIds", $templateIds);
    }


}
