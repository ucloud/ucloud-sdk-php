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
namespace UCloud\UDB\Models;

use UCloud\Core\Response\Response;

class LogPackageDataSet extends Response
{
    

    /**
     * BackupId: 备份id
     *
     * @return integer|null
     */
    public function getBackupId()
    {
        return $this->get("BackupId");
    }

    /**
     * BackupId: 备份id
     *
     * @param int $backupId
     */
    public function setBackupId($backupId)
    {
        $this->set("BackupId", $backupId);
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
     * BackupTime: 备份时间
     *
     * @return integer|null
     */
    public function getBackupTime()
    {
        return $this->get("BackupTime");
    }

    /**
     * BackupTime: 备份时间
     *
     * @param int $backupTime
     */
    public function setBackupTime($backupTime)
    {
        $this->set("BackupTime", $backupTime);
    }

    /**
     * BackupSize: 备份文件大小
     *
     * @return integer|null
     */
    public function getBackupSize()
    {
        return $this->get("BackupSize");
    }

    /**
     * BackupSize: 备份文件大小
     *
     * @param int $backupSize
     */
    public function setBackupSize($backupSize)
    {
        $this->set("BackupSize", $backupSize);
    }

    /**
     * BackupType: 备份类型，包括2-binlog备份，3-slowlog备份
     *
     * @return integer|null
     */
    public function getBackupType()
    {
        return $this->get("BackupType");
    }

    /**
     * BackupType: 备份类型，包括2-binlog备份，3-slowlog备份
     *
     * @param int $backupType
     */
    public function setBackupType($backupType)
    {
        $this->set("BackupType", $backupType);
    }

    /**
     * State: 备份状态 Backuping // 备份中 Success // 备份成功 Failed // 备份失败 Expired // 备份过期
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 备份状态 Backuping // 备份中 Success // 备份成功 Failed // 备份失败 Expired // 备份过期
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }

    /**
     * DBId: dbid
     *
     * @return string|null
     */
    public function getDBId()
    {
        return $this->get("DBId");
    }

    /**
     * DBId: dbid
     *
     * @param string $dbId
     */
    public function setDBId($dbId)
    {
        $this->set("DBId", $dbId);
    }

    /**
     * DBName: 对应的db名称
     *
     * @return string|null
     */
    public function getDBName()
    {
        return $this->get("DBName");
    }

    /**
     * DBName: 对应的db名称
     *
     * @param string $dbName
     */
    public function setDBName($dbName)
    {
        $this->set("DBName", $dbName);
    }

    /**
     * Zone: 所在可用区
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 所在可用区
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * BackupZone: 跨可用区高可用备库所在可用区
     *
     * @return string|null
     */
    public function getBackupZone()
    {
        return $this->get("BackupZone");
    }

    /**
     * BackupZone: 跨可用区高可用备库所在可用区
     *
     * @param string $backupZone
     */
    public function setBackupZone($backupZone)
    {
        $this->set("BackupZone", $backupZone);
    }
}
