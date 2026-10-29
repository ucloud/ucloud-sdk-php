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

class UpdateUPgSQLBackupStrategyRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateUPgSQLBackupStrategy"]);
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
     * InstanceID: DB实例Id
     *
     * @return string|null
     */
    public function getInstanceID()
    {
        return $this->get("InstanceID");
    }

    /**
     * InstanceID: DB实例Id
     *
     * @param string $instanceID
     */
    public function setInstanceID($instanceID)
    {
        $this->set("InstanceID", $instanceID);
    }

    /**
     * BackupTimeRange: 自动备份预计开始时间范围(00:00~23:59)，例如:(3:00~4:00)
     *
     * @return string|null
     */
    public function getBackupTimeRange()
    {
        return $this->get("BackupTimeRange");
    }

    /**
     * BackupTimeRange: 自动备份预计开始时间范围(00:00~23:59)，例如:(3:00~4:00)
     *
     * @param string $backupTimeRange
     */
    public function setBackupTimeRange($backupTimeRange)
    {
        $this->set("BackupTimeRange", $backupTimeRange);
    }

    /**
     * BackupWeek: 自动备份预期星期几(1~7)开始。默认1,2,3,4,5,6,7(星期一到星期日)
     *
     * @return string|null
     */
    public function getBackupWeek()
    {
        return $this->get("BackupWeek");
    }

    /**
     * BackupWeek: 自动备份预期星期几(1~7)开始。默认1,2,3,4,5,6,7(星期一到星期日)
     *
     * @param string $backupWeek
     */
    public function setBackupWeek($backupWeek)
    {
        $this->set("BackupWeek", $backupWeek);
    }

    /**
     * BackupMethod: 选择默认的备份方式
     *
     * @return string|null
     */
    public function getBackupMethod()
    {
        return $this->get("BackupMethod");
    }

    /**
     * BackupMethod: 选择默认的备份方式
     *
     * @param string $backupMethod
     */
    public function setBackupMethod($backupMethod)
    {
        $this->set("BackupMethod", $backupMethod);
    }
}
