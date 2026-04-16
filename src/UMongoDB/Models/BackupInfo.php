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
namespace UCloud\UMongoDB\Models;

use UCloud\Core\Response\Response;

class BackupInfo extends Response
{
    

    /**
     * Zone: 可用区
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

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
     * ClusterId: 实例ID
     *
     * @return string|null
     */
    public function getClusterId()
    {
        return $this->get("ClusterId");
    }

    /**
     * ClusterId: 实例ID
     *
     * @param string $clusterId
     */
    public function setClusterId($clusterId)
    {
        $this->set("ClusterId", $clusterId);
    }

    /**
     * State: 备份状态
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 备份状态
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }

    /**
     * BackupSize: 备份数据大小
     *
     * @return integer|null
     */
    public function getBackupSize()
    {
        return $this->get("BackupSize");
    }

    /**
     * BackupSize: 备份数据大小
     *
     * @param int $backupSize
     */
    public function setBackupSize($backupSize)
    {
        $this->set("BackupSize", $backupSize);
    }

    /**
     * BackupType: 备份类型
     *
     * @return string|null
     */
    public function getBackupType()
    {
        return $this->get("BackupType");
    }

    /**
     * BackupType: 备份类型
     *
     * @param string $backupType
     */
    public function setBackupType($backupType)
    {
        $this->set("BackupType", $backupType);
    }

    /**
     * StartTime: 备份开始时间
     *
     * @return integer|null
     */
    public function getStartTime()
    {
        return $this->get("StartTime");
    }

    /**
     * StartTime: 备份开始时间
     *
     * @param int $startTime
     */
    public function setStartTime($startTime)
    {
        $this->set("StartTime", $startTime);
    }

    /**
     * EndTime: 备份结束时间
     *
     * @return integer|null
     */
    public function getEndTime()
    {
        return $this->get("EndTime");
    }

    /**
     * EndTime: 备份结束时间
     *
     * @param int $endTime
     */
    public function setEndTime($endTime)
    {
        $this->set("EndTime", $endTime);
    }

    /**
     * VirtualClusterId: 虚拟节点id
     *
     * @return string|null
     */
    public function getVirtualClusterId()
    {
        return $this->get("VirtualClusterId");
    }

    /**
     * VirtualClusterId: 虚拟节点id
     *
     * @param string $virtualClusterId
     */
    public function setVirtualClusterId($virtualClusterId)
    {
        $this->set("VirtualClusterId", $virtualClusterId);
    }

    /**
     * ReplicaType: 副本类型,ConfigRepl或者DataRepl
     *
     * @return string|null
     */
    public function getReplicaType()
    {
        return $this->get("ReplicaType");
    }

    /**
     * ReplicaType: 副本类型,ConfigRepl或者DataRepl
     *
     * @param string $replicaType
     */
    public function setReplicaType($replicaType)
    {
        $this->set("ReplicaType", $replicaType);
    }

    /**
     * BatchId: 批次id
     *
     * @return string|null
     */
    public function getBatchId()
    {
        return $this->get("BatchId");
    }

    /**
     * BatchId: 批次id
     *
     * @param string $batchId
     */
    public function setBatchId($batchId)
    {
        $this->set("BatchId", $batchId);
    }

    /**
     * DiskSize: 磁盘大小
     *
     * @return integer|null
     */
    public function getDiskSize()
    {
        return $this->get("DiskSize");
    }

    /**
     * DiskSize: 磁盘大小
     *
     * @param int $diskSize
     */
    public function setDiskSize($diskSize)
    {
        $this->set("DiskSize", $diskSize);
    }
}
