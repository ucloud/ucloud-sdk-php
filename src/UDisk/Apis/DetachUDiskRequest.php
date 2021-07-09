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
namespace UCloud\UDisk\Apis;

use UCloud\Core\Request\Request;

class DetachUDiskRequest extends Request {
    public function __construct()
    {
        parent::__construct(["Action" => "DetachUDisk"]);
        $this->markRequired("Region");
        $this->markRequired("UDiskId");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getRegion(): string {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @param string $region
     */
    public function setRegion(string $region) {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getZone(): string {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @param string $zone
     */
    public function setZone(string $zone) {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId(): string {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId) {
        $this->set("ProjectId", $projectId);
    }

    /**
     * UDiskId: 需要卸载的UDisk实例ID
     *
     * @return string|null
     */
    public function getUDiskId(): string {
        return $this->get("UDiskId");
    }

    /**
     * UDiskId: 需要卸载的UDisk实例ID
     *
     * @param string $uDiskId
     */
    public function setUDiskId(string $uDiskId) {
        $this->set("UDiskId", $uDiskId);
    }

    /**
     * UHostId: UHost实例ID。【UHostId和HostId必须选填一个，本字段即将废弃，建议使用HostId】
     *
     * @return string|null
     */
    public function getUHostId(): string {
        return $this->get("UHostId");
    }

    /**
     * UHostId: UHost实例ID。【UHostId和HostId必须选填一个，本字段即将废弃，建议使用HostId】
     *
     * @param string $uHostId
     */
    public function setUHostId(string $uHostId) {
        $this->set("UHostId", $uHostId);
    }

    /**
     * HostId: Host实例ID
     *
     * @return string|null
     */
    public function getHostId(): string {
        return $this->get("HostId");
    }

    /**
     * HostId: Host实例ID
     *
     * @param string $hostId
     */
    public function setHostId(string $hostId) {
        $this->set("HostId", $hostId);
    }


}
