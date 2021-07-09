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
namespace UCloud\PathX\Apis;

use UCloud\Core\Request\Request;

class DescribeUPathRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeUPath"]);
        $this->markRequired("ProjectId");
    }

    

    /**
     * ProjectId: 项目ID。请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * UPathId: 如果不填参数 返回 ProjectId 下所有的线路资源，填此参数则返回upath实例ID匹配的线路
     *
     * @return string|null
     */
    public function getUPathId(): string
    {
        return $this->get("UPathId");
    }

    /**
     * UPathId: 如果不填参数 返回 ProjectId 下所有的线路资源，填此参数则返回upath实例ID匹配的线路
     *
     * @param string $uPathId
     */
    public function setUPathId(string $uPathId)
    {
        $this->set("UPathId", $uPathId);
    }
}
