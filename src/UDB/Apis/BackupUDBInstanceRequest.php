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

class BackupUDBInstanceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "BackupUDBInstance"]);
        $this->markRequired("Region");
        $this->markRequired("DBId");
        $this->markRequired("BackupName");
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
     * DBId: DB实例Id,该值可以通过DescribeUDBInstance获取
     *
     * @return string|null
     */
    public function getDBId()
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
     * BackupName: 备份名称
     *
     * @return string|null
     */
    public function getBackupName()
    {
        return $this->get("BackupName");
    }

    /**
     * BackupName: 备份名称
     *
     * @param string $backupName
     */
    public function setBackupName(string $backupName)
    {
        $this->set("BackupName", $backupName);
    }
    /**
     * UseBlacklist: 是否使用黑名单备份，默认false
     *
     * @return boolean|null
     */
    public function getUseBlacklist()
    {
        return $this->get("UseBlacklist");
    }

    /**
     * UseBlacklist: 是否使用黑名单备份，默认false
     *
     * @param boolean $useBlacklist
     */
    public function setUseBlacklist(bool $useBlacklist)
    {
        $this->set("UseBlacklist", $useBlacklist);
    }
    /**
     * BackupMethod: 使用的备份方式。（快照备份即物理备份。注意只有SSD版本的mysql实例支持设置为snapshot）
     *
     * @return string|null
     */
    public function getBackupMethod()
    {
        return $this->get("BackupMethod");
    }

    /**
     * BackupMethod: 使用的备份方式。（快照备份即物理备份。注意只有SSD版本的mysql实例支持设置为snapshot）
     *
     * @param string $backupMethod
     */
    public function setBackupMethod(string $backupMethod)
    {
        $this->set("BackupMethod", $backupMethod);
    }
    /**
     * Blacklist: 备份黑名单列表，以 ; 分隔。注意：只有逻辑备份下备份黑名单才生效，快照备份备份黑名单下无效
     *
     * @return string|null
     */
    public function getBlacklist()
    {
        return $this->get("Blacklist");
    }

    /**
     * Blacklist: 备份黑名单列表，以 ; 分隔。注意：只有逻辑备份下备份黑名单才生效，快照备份备份黑名单下无效
     *
     * @param string $blacklist
     */
    public function setBlacklist(string $blacklist)
    {
        $this->set("Blacklist", $blacklist);
    }
    /**
     * ForceBackup: true表示逻辑备份时是使用 --force 参数，false表示不使用 --force 参数。物理备份此参数无效。
     *
     * @return boolean|null
     */
    public function getForceBackup()
    {
        return $this->get("ForceBackup");
    }

    /**
     * ForceBackup: true表示逻辑备份时是使用 --force 参数，false表示不使用 --force 参数。物理备份此参数无效。
     *
     * @param boolean $forceBackup
     */
    public function setForceBackup(bool $forceBackup)
    {
        $this->set("ForceBackup", $forceBackup);
    }
}
