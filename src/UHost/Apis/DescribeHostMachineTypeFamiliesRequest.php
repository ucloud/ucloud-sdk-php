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
namespace UCloud\UHost\Apis;

use UCloud\Core\Request\Request;

class DescribeHostMachineTypeFamiliesRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeHostMachineTypeFamilies"]);
        $this->markRequired("ProjectId");
    }

    

    /**
     * ProjectId: 项目ID。如果不填写，则使用默认项目，子账户必须填写。请参阅[GetProjectList界面](https://docs.ucloud.cn/api/summary/get_project_list).
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。如果不填写，则使用默认项目，子账户必须填写。请参阅[GetProjectList界面](https://docs.ucloud.cn/api/summary/get_project_list).
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }
}
