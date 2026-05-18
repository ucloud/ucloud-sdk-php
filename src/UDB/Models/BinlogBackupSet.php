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
namespace UCloud\UDB\Models;

use UCloud\Core\Response\Response;

class BinlogBackupSet extends Response
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
     * BinlogType: binlog备份类型 Manual:手动备份 ,Auto:自动备份
     *
     * @return string|null
     */
    public function getBinlogType()
    {
        return $this->get("BinlogType");
    }

    /**
     * BinlogType: binlog备份类型 Manual:手动备份 ,Auto:自动备份
     *
     * @param string $binlogType
     */
    public function setBinlogType($binlogType)
    {
        $this->set("BinlogType", $binlogType);
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
     * ServerId: 节点标识ID
     *
     * @return string|null
     */
    public function getServerId()
    {
        return $this->get("ServerId");
    }

    /**
     * ServerId: 节点标识ID
     *
     * @param string $serverId
     */
    public function setServerId($serverId)
    {
        $this->set("ServerId", $serverId);
    }

    /**
     * LogStartTime: 日志开始时间
     *
     * @return integer|null
     */
    public function getLogStartTime()
    {
        return $this->get("LogStartTime");
    }

    /**
     * LogStartTime: 日志开始时间
     *
     * @param int $logStartTime
     */
    public function setLogStartTime($logStartTime)
    {
        $this->set("LogStartTime", $logStartTime);
    }

    /**
     * LogEndTime: 日志结束时间
     *
     * @return integer|null
     */
    public function getLogEndTime()
    {
        return $this->get("LogEndTime");
    }

    /**
     * LogEndTime: 日志结束时间
     *
     * @param int $logEndTime
     */
    public function setLogEndTime($logEndTime)
    {
        $this->set("LogEndTime", $logEndTime);
    }
}
