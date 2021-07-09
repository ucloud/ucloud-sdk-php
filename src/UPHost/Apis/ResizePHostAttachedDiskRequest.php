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
namespace UCloud\UPHost\Apis;

use UCloud\Core\Request\Request;

class ResizePHostAttachedDiskRequest extends Request {
    public function __construct()
    {
        parent::__construct(["Action" => "ResizePHostAttachedDisk"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion(): string {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion(string $region) {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getZone(): string {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $zone
     */
    public function setZone(string $zone) {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId(): string {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId) {
        $this->set("ProjectId", $projectId);
    }

    /**
     * PHostId: UPHost实例ID。
     *
     * @return string|null
     */
    public function getPHostId(): string {
        return $this->get("PHostId");
    }

    /**
     * PHostId: UPHost实例ID。
     *
     * @param string $pHostId
     */
    public function setPHostId(string $pHostId) {
        $this->set("PHostId", $pHostId);
    }

    /**
     * UDiskId: 磁盘ID。
     *
     * @return string|null
     */
    public function getUDiskId(): string {
        return $this->get("UDiskId");
    }

    /**
     * UDiskId: 磁盘ID。
     *
     * @param string $uDiskId
     */
    public function setUDiskId(string $uDiskId) {
        $this->set("UDiskId", $uDiskId);
    }

    /**
     * DiskSpace: 裸金属机型参数->磁盘大小，单位GB，必须是10GB的整数倍。系统盘20-500GB，数据盘单块盘20-32000GB。
     *
     * @return int|null
     */
    public function getDiskSpace(): int {
        return $this->get("DiskSpace");
    }

    /**
     * DiskSpace: 裸金属机型参数->磁盘大小，单位GB，必须是10GB的整数倍。系统盘20-500GB，数据盘单块盘20-32000GB。
     *
     * @param int $diskSpace
     */
    public function setDiskSpace(int $diskSpace) {
        $this->set("DiskSpace", $diskSpace);
    }


}
