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
namespace UCloud\UFile\Apis;

use UCloud\Core\Request\Request;

class GetUFileQuotaRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetUFileQuota"]);
        $this->markRequired("QuotaType");
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
     * QuotaType: 配额类型，取值为storage-volume, download-traffic或request-count
     *
     * @return string|null
     */
    public function getQuotaType()
    {
        return $this->get("QuotaType");
    }

    /**
     * QuotaType: 配额类型，取值为storage-volume, download-traffic或request-count
     *
     * @param string $quotaType
     */
    public function setQuotaType($quotaType)
    {
        $this->set("QuotaType", $quotaType);
    }
}