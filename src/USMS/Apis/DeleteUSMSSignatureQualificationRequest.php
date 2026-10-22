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
namespace UCloud\USMS\Apis;

use UCloud\Core\Request\Request;

class DeleteUSMSSignatureQualificationRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DeleteUSMSSignatureQualification"]);
        $this->markRequired("ProjectId");
        $this->markRequired("QualificationIds");
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
     * QualificationIds: 签名资质Id，支持以数组的方式，举例，以QualificationIds.0、QualificationIds.1...QualificationIds.N方式传入
     *
     * @return string[]|null
     */
    public function getQualificationIds()
    {
        return $this->get("QualificationIds");
    }

    /**
     * QualificationIds: 签名资质Id，支持以数组的方式，举例，以QualificationIds.0、QualificationIds.1...QualificationIds.N方式传入
     *
     * @param string[] $qualificationIds
     */
    public function setQualificationIds(array $qualificationIds)
    {
        $this->set("QualificationIds", $qualificationIds);
    }
}
