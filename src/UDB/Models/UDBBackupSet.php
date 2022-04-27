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
namespace UCloud\UDB\Models;

use UCloud\Core\Response\Response;

class UDBBackupSet extends Response
{
    

    /**
     * BackupId: 备份id
     *
     * @return integer|null
     */
    public function getBackupId(): int
    {
        return $this->get("BackupId");
    }

    /**
     * BackupId: 备份id
     *
     * @param int $backupId
     */
    public function setBackupId(int $backupId)
    {
        $this->set("BackupId", $backupId);
    }

    /**
     * BackupName: 备份名称
     *
     * @return string|null
     */
    public function getBackupName(): string
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
     * BackupTime: 备份时间(Unix时间戳)
     *
     * @return integer|null
     */
    public function getBackupTime(): int
    {
        return $this->get("BackupTime");
    }

    /**
     * BackupTime: 备份时间(Unix时间戳)
     *
     * @param int $backupTime
     */
    public function setBackupTime(int $backupTime)
    {
        $this->set("BackupTime", $backupTime);
    }

    /**
     * BackupSize: 备份文件大小(字节)
     *
     * @return integer|null
     */
    public function getBackupSize(): int
    {
        return $this->get("BackupSize");
    }

    /**
     * BackupSize: 备份文件大小(字节)
     *
     * @param int $backupSize
     */
    public function setBackupSize(int $backupSize)
    {
        $this->set("BackupSize", $backupSize);
    }

    /**
     * BackupType: 备份类型,取值为0或1,0表示自动，1表示手动
     *
     * @return integer|null
     */
    public function getBackupType(): int
    {
        return $this->get("BackupType");
    }

    /**
     * BackupType: 备份类型,取值为0或1,0表示自动，1表示手动
     *
     * @param int $backupType
     */
    public function setBackupType(int $backupType)
    {
        $this->set("BackupType", $backupType);
    }

    /**
     * State: 备份状态 Backuping // 备份中 Success // 备份成功 Failed // 备份失败 Expired // 备份过期
     *
     * @return string|null
     */
    public function getState(): string
    {
        return $this->get("State");
    }

    /**
     * State: 备份状态 Backuping // 备份中 Success // 备份成功 Failed // 备份失败 Expired // 备份过期
     *
     * @param string $state
     */
    public function setState(string $state)
    {
        $this->set("State", $state);
    }

    /**
     * DBId: dbid
     *
     * @return string|null
     */
    public function getDBId(): string
    {
        return $this->get("DBId");
    }

    /**
     * DBId: dbid
     *
     * @param string $dbId
     */
    public function setDBId(string $dbId)
    {
        $this->set("DBId", $dbId);
    }

    /**
     * DBName: 对应的db名称
     *
     * @return string|null
     */
    public function getDBName(): string
    {
        return $this->get("DBName");
    }

    /**
     * DBName: 对应的db名称
     *
     * @param string $dbName
     */
    public function setDBName(string $dbName)
    {
        $this->set("DBName", $dbName);
    }

    /**
     * Zone: 备份所在可用区
     *
     * @return string|null
     */
    public function getZone(): string
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 备份所在可用区
     *
     * @param string $zone
     */
    public function setZone(string $zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * BackupZone: 跨机房高可用备库所在可用区
     *
     * @return string|null
     */
    public function getBackupZone(): string
    {
        return $this->get("BackupZone");
    }

    /**
     * BackupZone: 跨机房高可用备库所在可用区
     *
     * @param string $backupZone
     */
    public function setBackupZone(string $backupZone)
    {
        $this->set("BackupZone", $backupZone);
    }

    /**
     * BackupEndTime: 备份完成时间(Unix时间戳)
     *
     * @return integer|null
     */
    public function getBackupEndTime(): int
    {
        return $this->get("BackupEndTime");
    }

    /**
     * BackupEndTime: 备份完成时间(Unix时间戳)
     *
     * @param int $backupEndTime
     */
    public function setBackupEndTime(int $backupEndTime)
    {
        $this->set("BackupEndTime", $backupEndTime);
    }
}
