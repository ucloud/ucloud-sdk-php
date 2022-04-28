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
namespace UCloud\UMem\Models;

use UCloud\Core\Response\Response;

class URedisBackupSet extends Response
{
    

    /**
     * BackupId: 备份ID
     *
     * @return string|null
     */
    public function getBackupId()
    {
        return $this->get("BackupId");
    }

    /**
     * BackupId: 备份ID
     *
     * @param string $backupId
     */
    public function setBackupId($backupId)
    {
        $this->set("BackupId", $backupId);
    }

    /**
     * Zone: 可用区，参见[可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区，参见[可用区列表](../summary/regionlist.html)
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * GroupId: 对应的实例ID
     *
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->get("GroupId");
    }

    /**
     * GroupId: 对应的实例ID
     *
     * @param string $groupId
     */
    public function setGroupId($groupId)
    {
        $this->set("GroupId", $groupId);
    }

    /**
     * GroupName: 组名称
     *
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->get("GroupName");
    }

    /**
     * GroupName: 组名称
     *
     * @param string $groupName
     */
    public function setGroupName($groupName)
    {
        $this->set("GroupName", $groupName);
    }

    /**
     * BackupName: 备份的名称
     *
     * @return string|null
     */
    public function getBackupName()
    {
        return $this->get("BackupName");
    }

    /**
     * BackupName: 备份的名称
     *
     * @param string $backupName
     */
    public function setBackupName($backupName)
    {
        $this->set("BackupName", $backupName);
    }

    /**
     * BackupTime: 备份时间 (UNIX时间戳)
     *
     * @return integer|null
     */
    public function getBackupTime()
    {
        return $this->get("BackupTime");
    }

    /**
     * BackupTime: 备份时间 (UNIX时间戳)
     *
     * @param int $backupTime
     */
    public function setBackupTime($backupTime)
    {
        $this->set("BackupTime", $backupTime);
    }

    /**
     * BackupSize: 备份文件大小, 以字节为单位
     *
     * @return integer|null
     */
    public function getBackupSize()
    {
        return $this->get("BackupSize");
    }

    /**
     * BackupSize: 备份文件大小, 以字节为单位
     *
     * @param int $backupSize
     */
    public function setBackupSize($backupSize)
    {
        $this->set("BackupSize", $backupSize);
    }

    /**
     * BackupType: 备份类型: Manual 手动 Auto 自动
     *
     * @return string|null
     */
    public function getBackupType()
    {
        return $this->get("BackupType");
    }

    /**
     * BackupType: 备份类型: Manual 手动 Auto 自动
     *
     * @param string $backupType
     */
    public function setBackupType($backupType)
    {
        $this->set("BackupType", $backupType);
    }

    /**
     * State: 备份的状态: Backuping 备份中 Success 备份成功 Error 备份失败 Expired 备份过期
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 备份的状态: Backuping 备份中 Success 备份成功 Error 备份失败 Expired 备份过期
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }
}
