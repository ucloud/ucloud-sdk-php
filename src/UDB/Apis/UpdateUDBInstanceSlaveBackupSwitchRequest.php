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
namespace UCloud\UDB\Apis;

use UCloud\Core\Request\Request;

class UpdateUDBInstanceSlaveBackupSwitchRequest extends Request {
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateUDBInstanceSlaveBackupSwitch"]);
        $this->markRequired("Region");
        $this->markRequired("MasterDBId");
        $this->markRequired("BackupSwitch");
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
     * MasterDBId: 主库的Id
     *
     * @return string|null
     */
    public function getMasterDBId(): string {
        return $this->get("MasterDBId");
    }

    /**
     * MasterDBId: 主库的Id
     *
     * @param string $masterDBId
     */
    public function setMasterDBId(string $masterDBId) {
        $this->set("MasterDBId", $masterDBId);
    }

    /**
     * BackupSwitch: 从库的备份开关，范围[0,1],0表示从库备份功能关闭,1 表示从库备份开关打开。
     *
     * @return int|null
     */
    public function getBackupSwitch(): int {
        return $this->get("BackupSwitch");
    }

    /**
     * BackupSwitch: 从库的备份开关，范围[0,1],0表示从库备份功能关闭,1 表示从库备份开关打开。
     *
     * @param int $backupSwitch
     */
    public function setBackupSwitch(int $backupSwitch) {
        $this->set("BackupSwitch", $backupSwitch);
    }

    /**
     * SlaveDBId: 从库的Id,如果从库备份开关设定为打开，则必须赋值。
     *
     * @return string|null
     */
    public function getSlaveDBId(): string {
        return $this->get("SlaveDBId");
    }

    /**
     * SlaveDBId: 从库的Id,如果从库备份开关设定为打开，则必须赋值。
     *
     * @param string $slaveDBId
     */
    public function setSlaveDBId(string $slaveDBId) {
        $this->set("SlaveDBId", $slaveDBId);
    }


}
