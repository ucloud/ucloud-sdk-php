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

namespace UCloud\UDB\Apis;

use UCloud\Core\Request\Request;

class DescribeUDBInstanceBackupStateRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeUDBInstanceBackupState"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("BackupId");
    }


    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @param string $region
     */
    public function setRegion(string $region)
    {
        $this->set("Region", $region);
    }
    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @param string $zone
     */
    public function setZone(string $zone)
    {
        $this->set("Zone", $zone);
    }
    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }
    /**
     * BackupId: 备份记录ID
     *
     * @return integer|null
     */
    public function getBackupId()
    {
        return $this->get("BackupId");
    }

    /**
     * BackupId: 备份记录ID
     *
     * @param int $backupId
     */
    public function setBackupId(int $backupId)
    {
        $this->set("BackupId", $backupId);
    }
    /**
     * BackupZone: 跨可用区高可用备库所在可用区，参见［可用区列表］
     *
     * @return string|null
     */
    public function getBackupZone()
    {
        return $this->get("BackupZone");
    }

    /**
     * BackupZone: 跨可用区高可用备库所在可用区，参见［可用区列表］
     *
     * @param string $backupZone
     */
    public function setBackupZone(string $backupZone)
    {
        $this->set("BackupZone", $backupZone);
    }
}
