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
namespace UCloud\UDBPostgreSQL\Apis;

use UCloud\Core\Request\Request;

class RestartUPgSQLInstanceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "RestartUPgSQLInstance"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("InstanceID");
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
     * InstanceID: 实例ID
     *
     * @return string|null
     */
    public function getInstanceID()
    {
        return $this->get("InstanceID");
    }

    /**
     * InstanceID: 实例ID
     *
     * @param string $instanceID
     */
    public function setInstanceID($instanceID)
    {
        $this->set("InstanceID", $instanceID);
    }

    /**
     * RestartHost: 是否一并重启主机
     *
     * @return boolean|null
     */
    public function getRestartHost()
    {
        return $this->get("RestartHost");
    }

    /**
     * RestartHost: 是否一并重启主机
     *
     * @param boolean $restartHost
     */
    public function setRestartHost($restartHost)
    {
        $this->set("RestartHost", $restartHost);
    }

    /**
     * ForceToRestart: 是否强制重启
     *
     * @return boolean|null
     */
    public function getForceToRestart()
    {
        return $this->get("ForceToRestart");
    }

    /**
     * ForceToRestart: 是否强制重启
     *
     * @param boolean $forceToRestart
     */
    public function setForceToRestart($forceToRestart)
    {
        $this->set("ForceToRestart", $forceToRestart);
    }
}
