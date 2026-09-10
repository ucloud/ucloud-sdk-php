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
namespace UCloud\UMem\Apis;

use UCloud\Core\Request\Request;

class CreateScanHotBigKeysRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateScanHotBigKeys"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("GroupId");
        $this->markRequired("Type");
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
     * GroupId: 资源id
     *
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->get("GroupId");
    }

    /**
     * GroupId: 资源id
     *
     * @param string $groupId
     */
    public function setGroupId($groupId)
    {
        $this->set("GroupId", $groupId);
    }

    /**
     * Type: 任务类型。"ScanBigKeys"：扫大key，"ScanHotKeys"：扫热key
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 任务类型。"ScanBigKeys"：扫大key，"ScanHotKeys"：扫热key
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * SpaceId: 分布式资源ID
     *
     * @return string|null
     */
    public function getSpaceId()
    {
        return $this->get("SpaceId");
    }

    /**
     * SpaceId: 分布式资源ID
     *
     * @param string $spaceId
     */
    public function setSpaceId($spaceId)
    {
        $this->set("SpaceId", $spaceId);
    }

    /**
     * IsRetry: 是否要重试任务，如果是的话，TaskId必填
     *
     * @return boolean|null
     */
    public function getIsRetry()
    {
        return $this->get("IsRetry");
    }

    /**
     * IsRetry: 是否要重试任务，如果是的话，TaskId必填
     *
     * @param boolean $isRetry
     */
    public function setIsRetry($isRetry)
    {
        $this->set("IsRetry", $isRetry);
    }

    /**
     * TaskId: 要重试的任务id
     *
     * @return string|null
     */
    public function getTaskId()
    {
        return $this->get("TaskId");
    }

    /**
     * TaskId: 要重试的任务id
     *
     * @param string $taskId
     */
    public function setTaskId($taskId)
    {
        $this->set("TaskId", $taskId);
    }
}
