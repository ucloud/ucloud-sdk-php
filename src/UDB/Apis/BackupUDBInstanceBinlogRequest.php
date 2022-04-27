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

class BackupUDBInstanceBinlogRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "BackupUDBInstanceBinlog"]);
        $this->markRequired("Region");
        $this->markRequired("DBId");
        $this->markRequired("BackupFile");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getRegion(): string
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
    public function getZone(): string
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
    public function getProjectId(): string
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
     * DBId: DB实例Id,该值可以通过DescribeUDBInstance获取
     *
     * @return string|null
     */
    public function getDBId(): string
    {
        return $this->get("DBId");
    }

    /**
     * DBId: DB实例Id,该值可以通过DescribeUDBInstance获取
     *
     * @param string $dbId
     */
    public function setDBId(string $dbId)
    {
        $this->set("DBId", $dbId);
    }

    /**
     * BackupFile: 需要备份文件,可通过DescribeUDBInstanceBinlog获得 如果要传入多个文件名，以空格键分割,用单引号包含.
     *
     * @return string|null
     */
    public function getBackupFile(): string
    {
        return $this->get("BackupFile");
    }

    /**
     * BackupFile: 需要备份文件,可通过DescribeUDBInstanceBinlog获得 如果要传入多个文件名，以空格键分割,用单引号包含.
     *
     * @param string $backupFile
     */
    public function setBackupFile(string $backupFile)
    {
        $this->set("BackupFile", $backupFile);
    }

    /**
     * BackupName: DB备份文件名称
     *
     * @return string|null
     */
    public function getBackupName(): string
    {
        return $this->get("BackupName");
    }

    /**
     * BackupName: DB备份文件名称
     *
     * @param string $backupName
     */
    public function setBackupName(string $backupName)
    {
        $this->set("BackupName", $backupName);
    }
}
