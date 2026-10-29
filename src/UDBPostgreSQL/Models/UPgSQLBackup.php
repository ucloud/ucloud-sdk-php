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
namespace UCloud\UDBPostgreSQL\Models;

use UCloud\Core\Response\Response;

class UPgSQLBackup extends Response
{
    

    /**
     * Region: 备份所在地域
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 备份所在地域
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
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
     * BackupID: 备份id
     *
     * @return string|null
     */
    public function getBackupID()
    {
        return $this->get("BackupID");
    }

    /**
     * BackupID: 备份id
     *
     * @param string $backupID
     */
    public function setBackupID($backupID)
    {
        $this->set("BackupID", $backupID);
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
    public function setBackupName($backupName)
    {
        $this->set("BackupName", $backupName);
    }

    /**
     * BackupStartTime: 备份时间(Unix时间戳)
     *
     * @return integer|null
     */
    public function getBackupStartTime()
    {
        return $this->get("BackupStartTime");
    }

    /**
     * BackupStartTime: 备份时间(Unix时间戳)
     *
     * @param int $backupStartTime
     */
    public function setBackupStartTime($backupStartTime)
    {
        $this->set("BackupStartTime", $backupStartTime);
    }

    /**
     * BackupSize: 备份文件大小(字节)
     *
     * @return integer|null
     */
    public function getBackupSize()
    {
        return $this->get("BackupSize");
    }

    /**
     * BackupSize: 备份文件大小(字节)
     *
     * @param int $backupSize
     */
    public function setBackupSize($backupSize)
    {
        $this->set("BackupSize", $backupSize);
    }

    /**
     * BackupType: 备份类型，手动或者自动
     *
     * @return integer|null
     */
    public function getBackupType()
    {
        return $this->get("BackupType");
    }

    /**
     * BackupType: 备份类型，手动或者自动
     *
     * @param int $backupType
     */
    public function setBackupType($backupType)
    {
        $this->set("BackupType", $backupType);
    }

    /**
     * State: 备份状态 (Backuping：备份中,Success:备份成功, Failed:备份失败, Expired:备份过期)
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 备份状态 (Backuping：备份中,Success:备份成功, Failed:备份失败, Expired:备份过期)
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }

    /**
     * BackupEndTime: 备份完成时间(Unix时间戳)
     *
     * @return integer|null
     */
    public function getBackupEndTime()
    {
        return $this->get("BackupEndTime");
    }

    /**
     * BackupEndTime: 备份完成时间(Unix时间戳)
     *
     * @param int $backupEndTime
     */
    public function setBackupEndTime($backupEndTime)
    {
        $this->set("BackupEndTime", $backupEndTime);
    }
}
