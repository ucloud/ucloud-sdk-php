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
namespace UCloud\UHadoop\Apis;

use UCloud\Core\Request\Request;

class RestartUHadoopServiceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "RestartUHadoopService"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("ServiceName");
        $this->markRequired("InstanceId");
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
     * ServiceName: 要操作的服务名。可通过ListUHadoopFrameworkApp接口获取
     *
     * @return string|null
     */
    public function getServiceName()
    {
        return $this->get("ServiceName");
    }

    /**
     * ServiceName: 要操作的服务名。可通过ListUHadoopFrameworkApp接口获取
     *
     * @param string $serviceName
     */
    public function setServiceName($serviceName)
    {
        $this->set("ServiceName", $serviceName);
    }

    /**
     * InstanceId: 实例ID
     *
     * @return string|null
     */
    public function getInstanceId()
    {
        return $this->get("InstanceId");
    }

    /**
     * InstanceId: 实例ID
     *
     * @param string $instanceId
     */
    public function setInstanceId($instanceId)
    {
        $this->set("InstanceId", $instanceId);
    }

    /**
     * ApplicationVersion: 应用版本，ApplicationVersion传参时，表示这次操作是整个应用所有服务。
     *
     * @return string|null
     */
    public function getApplicationVersion()
    {
        return $this->get("ApplicationVersion");
    }

    /**
     * ApplicationVersion: 应用版本，ApplicationVersion传参时，表示这次操作是整个应用所有服务。
     *
     * @param string $applicationVersion
     */
    public function setApplicationVersion($applicationVersion)
    {
        $this->set("ApplicationVersion", $applicationVersion);
    }

    /**
     * OnlyStart: 只启动。值为false|true之一，默认false，当OnlyStart和OnlyStop同时置为true，则重启。
     *
     * @return boolean|null
     */
    public function getOnlyStart()
    {
        return $this->get("OnlyStart");
    }

    /**
     * OnlyStart: 只启动。值为false|true之一，默认false，当OnlyStart和OnlyStop同时置为true，则重启。
     *
     * @param boolean $onlyStart
     */
    public function setOnlyStart($onlyStart)
    {
        $this->set("OnlyStart", $onlyStart);
    }

    /**
     * OnlyStop: 只停止。值为false|true之一，默认false。当OnlyStart和OnlyStop同时置为true，则重启。
     *
     * @return boolean|null
     */
    public function getOnlyStop()
    {
        return $this->get("OnlyStop");
    }

    /**
     * OnlyStop: 只停止。值为false|true之一，默认false。当OnlyStart和OnlyStop同时置为true，则重启。
     *
     * @param boolean $onlyStop
     */
    public function setOnlyStop($onlyStop)
    {
        $this->set("OnlyStop", $onlyStop);
    }

    /**
     * NodeId: 要操作的NodeId数组。如果传入，则用于过滤操作哪些Node。
     *
     * @return string[]|null
     */
    public function getNodeId()
    {
        return $this->get("NodeId");
    }

    /**
     * NodeId: 要操作的NodeId数组。如果传入，则用于过滤操作哪些Node。
     *
     * @param string[] $nodeId
     */
    public function setNodeId(array $nodeId)
    {
        $this->set("NodeId", $nodeId);
    }

    /**
     * NodeRole: 要操作的NodeRole数组。如果传入，则用于过滤操作哪些Node。值为以下之一master|core|task
     *
     * @return string[]|null
     */
    public function getNodeRole()
    {
        return $this->get("NodeRole");
    }

    /**
     * NodeRole: 要操作的NodeRole数组。如果传入，则用于过滤操作哪些Node。值为以下之一master|core|task
     *
     * @param string[] $nodeRole
     */
    public function setNodeRole(array $nodeRole)
    {
        $this->set("NodeRole", $nodeRole);
    }
}
