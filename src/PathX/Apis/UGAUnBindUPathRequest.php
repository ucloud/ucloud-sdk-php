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
namespace UCloud\PathX\Apis;

use UCloud\Core\Request\Request;

class UGAUnBindUPathRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UGAUnBindUPath"]);
        $this->markRequired("ProjectId");
        $this->markRequired("UGAId");
        $this->markRequired("UPathId");
    }

    

    /**
     * ProjectId: 项目ID。请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * UGAId: 加速配置实例ID 格式uga-xxx
     *
     * @return string|null
     */
    public function getUGAId()
    {
        return $this->get("UGAId");
    }

    /**
     * UGAId: 加速配置实例ID 格式uga-xxx
     *
     * @param string $ugaId
     */
    public function setUGAId($ugaId)
    {
        $this->set("UGAId", $ugaId);
    }

    /**
     * UPathId: 加速线路实例ID 格式upath-xxx
     *
     * @return string|null
     */
    public function getUPathId()
    {
        return $this->get("UPathId");
    }

    /**
     * UPathId: 加速线路实例ID 格式upath-xxx
     *
     * @param string $uPathId
     */
    public function setUPathId($uPathId)
    {
        $this->set("UPathId", $uPathId);
    }


}
