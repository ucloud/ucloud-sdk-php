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

class DescribeGlobalSSHInstanceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeGlobalSSHInstance"]);
        $this->markRequired("ProjectId");
    }

    

    /**
     * ProjectId: 项目ID，如org-xxxx。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID，如org-xxxx。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * InstanceId: 实例ID，资源唯一标识
     *
     * @return string|null
     */
    public function getInstanceId(): string
    {
        return $this->get("InstanceId");
    }

    /**
     * InstanceId: 实例ID，资源唯一标识
     *
     * @param string $instanceId
     */
    public function setInstanceId(string $instanceId)
    {
        $this->set("InstanceId", $instanceId);
    }
}
