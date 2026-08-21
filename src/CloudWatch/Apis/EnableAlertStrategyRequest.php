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
namespace UCloud\CloudWatch\Apis;

use UCloud\Core\Request\Request;

class EnableAlertStrategyRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "EnableAlertStrategy"]);
        $this->markRequired("ProjectId");
        $this->markRequired("AlertStrategyID");
        $this->markRequired("Status");
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
     * AlertStrategyID: 告警策略id
     *
     * @return integer|null
     */
    public function getAlertStrategyID()
    {
        return $this->get("AlertStrategyID");
    }

    /**
     * AlertStrategyID: 告警策略id
     *
     * @param int $alertStrategyID
     */
    public function setAlertStrategyID($alertStrategyID)
    {
        $this->set("AlertStrategyID", $alertStrategyID);
    }

    /**
     * Status: 启用状态0 停用 1 启用
     *
     * @return integer|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 启用状态0 停用 1 启用
     *
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }
}
