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

class UDBInstance extends Response
{
    

    /**
     * Zone: DB实例所在可用区
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: DB实例所在可用区
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * BackupZone: 备份所在可用区
     *
     * @return string|null
     */
    public function getBackupZone()
    {
        return $this->get("BackupZone");
    }

    /**
     * BackupZone: 备份所在可用区
     *
     * @param string $backupZone
     */
    public function setBackupZone($backupZone)
    {
        $this->set("BackupZone", $backupZone);
    }

    /**
     * InstanceID: DB实例id
     *
     * @return string|null
     */
    public function getInstanceID()
    {
        return $this->get("InstanceID");
    }

    /**
     * InstanceID: DB实例id
     *
     * @param string $instanceID
     */
    public function setInstanceID($instanceID)
    {
        $this->set("InstanceID", $instanceID);
    }

    /**
     * Name: 实例名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 实例名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * DBVersion: DB 版本
     *
     * @return string|null
     */
    public function getDBVersion()
    {
        return $this->get("DBVersion");
    }

    /**
     * DBVersion: DB 版本
     *
     * @param string $dbVersion
     */
    public function setDBVersion($dbVersion)
    {
        $this->set("DBVersion", $dbVersion);
    }

    /**
     * ParamGroupID: DB实例使用的配置参数组id
     *
     * @return integer|null
     */
    public function getParamGroupID()
    {
        return $this->get("ParamGroupID");
    }

    /**
     * ParamGroupID: DB实例使用的配置参数组id
     *
     * @param int $paramGroupID
     */
    public function setParamGroupID($paramGroupID)
    {
        $this->set("ParamGroupID", $paramGroupID);
    }

    /**
     * AdminUser: 管理员帐户名，默认root
     *
     * @return string|null
     */
    public function getAdminUser()
    {
        return $this->get("AdminUser");
    }

    /**
     * AdminUser: 管理员帐户名，默认root
     *
     * @param string $adminUser
     */
    public function setAdminUser($adminUser)
    {
        $this->set("AdminUser", $adminUser);
    }

    /**
     * IP: DBip
     *
     * @return string|null
     */
    public function getIP()
    {
        return $this->get("IP");
    }

    /**
     * IP: DBip
     *
     * @param string $ip
     */
    public function setIP($ip)
    {
        $this->set("IP", $ip);
    }

    /**
     * Port: DB port
     *
     * @return integer|null
     */
    public function getPort()
    {
        return $this->get("Port");
    }

    /**
     * Port: DB port
     *
     * @param int $port
     */
    public function setPort($port)
    {
        $this->set("Port", $port);
    }

    /**
     * VPCID: VPC的ID
     *
     * @return string|null
     */
    public function getVPCID()
    {
        return $this->get("VPCID");
    }

    /**
     * VPCID: VPC的ID
     *
     * @param string $vpcid
     */
    public function setVPCID($vpcid)
    {
        $this->set("VPCID", $vpcid);
    }

    /**
     * SubnetID: 子网ID
     *
     * @return string|null
     */
    public function getSubnetID()
    {
        return $this->get("SubnetID");
    }

    /**
     * SubnetID: 子网ID
     *
     * @param string $subnetID
     */
    public function setSubnetID($subnetID)
    {
        $this->set("SubnetID", $subnetID);
    }

    /**
     * Remark: 备注
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 备注
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * BackupCount: 备份文件保留的数量，默认7次
     *
     * @return integer|null
     */
    public function getBackupCount()
    {
        return $this->get("BackupCount");
    }

    /**
     * BackupCount: 备份文件保留的数量，默认7次
     *
     * @param int $backupCount
     */
    public function setBackupCount($backupCount)
    {
        $this->set("BackupCount", $backupCount);
    }

    /**
     * BackupBeginTime: 备份开始时间，单位小时计，默认3点
     *
     * @return integer|null
     */
    public function getBackupBeginTime()
    {
        return $this->get("BackupBeginTime");
    }

    /**
     * BackupBeginTime: 备份开始时间，单位小时计，默认3点
     *
     * @param int $backupBeginTime
     */
    public function setBackupBeginTime($backupBeginTime)
    {
        $this->set("BackupBeginTime", $backupBeginTime);
    }

    /**
     * BackupTimeRange: 备份的时间段，范围[0,23]
     *
     * @return integer|null
     */
    public function getBackupTimeRange()
    {
        return $this->get("BackupTimeRange");
    }

    /**
     * BackupTimeRange: 备份的时间段，范围[0,23]
     *
     * @param int $backupTimeRange
     */
    public function setBackupTimeRange($backupTimeRange)
    {
        $this->set("BackupTimeRange", $backupTimeRange);
    }

    /**
     * BackupDate: 用于设置备份策略的备份日期标记位。共7位,每一位为一周中一天的备份情况 0表示关闭当天备份,1表示打开当天备份。最右边的一位 为星期天的备份开关，其余从右到左依次为星期一到星期 六的备份配置开关，每周必须至少设置两天备份。 例如：1100000 表示打开星期六和星期五的自动备份功能
     *
     * @return string|null
     */
    public function getBackupDate()
    {
        return $this->get("BackupDate");
    }

    /**
     * BackupDate: 用于设置备份策略的备份日期标记位。共7位,每一位为一周中一天的备份情况 0表示关闭当天备份,1表示打开当天备份。最右边的一位 为星期天的备份开关，其余从右到左依次为星期一到星期 六的备份配置开关，每周必须至少设置两天备份。 例如：1100000 表示打开星期六和星期五的自动备份功能
     *
     * @param string $backupDate
     */
    public function setBackupDate($backupDate)
    {
        $this->set("BackupDate", $backupDate);
    }

    /**
     * State: DB状态标记 Init：初始化中，Fail：安装失败，Starting：启动中，Running：运行，Shutdown：关闭中，Shutoff：已关闭，Delete：已删除，Upgrading：升级中，Promoting：提升为独库进行中，Recovering：恢复中，Recover fail：恢复失败
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: DB状态标记 Init：初始化中，Fail：安装失败，Starting：启动中，Running：运行，Shutdown：关闭中，Shutoff：已关闭，Delete：已删除，Upgrading：升级中，Promoting：提升为独库进行中，Recovering：恢复中，Recover fail：恢复失败
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }

    /**
     * CreateTime: DB实例创建时间，采用UTC计时时间戳
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: DB实例创建时间，采用UTC计时时间戳
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * ModifyTime: DB实例修改时间，采用UTC计时时间戳
     *
     * @return integer|null
     */
    public function getModifyTime()
    {
        return $this->get("ModifyTime");
    }

    /**
     * ModifyTime: DB实例修改时间，采用UTC计时时间戳
     *
     * @param int $modifyTime
     */
    public function setModifyTime($modifyTime)
    {
        $this->set("ModifyTime", $modifyTime);
    }

    /**
     * ExpiredTime: DB实例过期时间，采用UTC计时时间戳
     *
     * @return integer|null
     */
    public function getExpiredTime()
    {
        return $this->get("ExpiredTime");
    }

    /**
     * ExpiredTime: DB实例过期时间，采用UTC计时时间戳
     *
     * @param int $expiredTime
     */
    public function setExpiredTime($expiredTime)
    {
        $this->set("ExpiredTime", $expiredTime);
    }

    /**
     * Cpu: CPU限制(核)，默认根据配置机型
     *
     * @return integer|null
     */
    public function getCpu()
    {
        return $this->get("Cpu");
    }

    /**
     * Cpu: CPU限制(核)，默认根据配置机型
     *
     * @param int $cpu
     */
    public function setCpu($cpu)
    {
        $this->set("Cpu", $cpu);
    }

    /**
     * MemoryLimit: 内存限制(MB)，默认根据配置机型
     *
     * @return integer|null
     */
    public function getMemoryLimit()
    {
        return $this->get("MemoryLimit");
    }

    /**
     * MemoryLimit: 内存限制(MB)，默认根据配置机型
     *
     * @param int $memoryLimit
     */
    public function setMemoryLimit($memoryLimit)
    {
        $this->set("MemoryLimit", $memoryLimit);
    }

    /**
     * DiskSpace: 磁盘空间(GB), 默认根据配置机型
     *
     * @return integer|null
     */
    public function getDiskSpace()
    {
        return $this->get("DiskSpace");
    }

    /**
     * DiskSpace: 磁盘空间(GB), 默认根据配置机型
     *
     * @param int $diskSpace
     */
    public function setDiskSpace($diskSpace)
    {
        $this->set("DiskSpace", $diskSpace);
    }

    /**
     * DiskUsedSize: DB实例磁盘已使用空间，单位GB
     *
     * @return float|null
     */
    public function getDiskUsedSize()
    {
        return $this->get("DiskUsedSize");
    }

    /**
     * DiskUsedSize: DB实例磁盘已使用空间，单位GB
     *
     * @param float $diskUsedSize
     */
    public function setDiskUsedSize($diskUsedSize)
    {
        $this->set("DiskUsedSize", $diskUsedSize);
    }

    /**
     * DataFileSize: DB实例数据文件大小，单位GB
     *
     * @return float|null
     */
    public function getDataFileSize()
    {
        return $this->get("DataFileSize");
    }

    /**
     * DataFileSize: DB实例数据文件大小，单位GB
     *
     * @param float $dataFileSize
     */
    public function setDataFileSize($dataFileSize)
    {
        $this->set("DataFileSize", $dataFileSize);
    }

    /**
     * SystemFileSize: DB实例系统文件大小，单位GB
     *
     * @return float|null
     */
    public function getSystemFileSize()
    {
        return $this->get("SystemFileSize");
    }

    /**
     * SystemFileSize: DB实例系统文件大小，单位GB
     *
     * @param float $systemFileSize
     */
    public function setSystemFileSize($systemFileSize)
    {
        $this->set("SystemFileSize", $systemFileSize);
    }

    /**
     * LogFileSize: DB实例日志文件大小，单位GB
     *
     * @return float|null
     */
    public function getLogFileSize()
    {
        return $this->get("LogFileSize");
    }

    /**
     * LogFileSize: DB实例日志文件大小，单位GB
     *
     * @param float $logFileSize
     */
    public function setLogFileSize($logFileSize)
    {
        $this->set("LogFileSize", $logFileSize);
    }

    /**
     * InstanceMode: Normal/HA,普通/高可用
     *
     * @return string|null
     */
    public function getInstanceMode()
    {
        return $this->get("InstanceMode");
    }

    /**
     * InstanceMode: Normal/HA,普通/高可用
     *
     * @param string $instanceMode
     */
    public function setInstanceMode($instanceMode)
    {
        $this->set("InstanceMode", $instanceMode);
    }

    /**
     * MachineType: 配置机型名称
     *
     * @return string|null
     */
    public function getMachineType()
    {
        return $this->get("MachineType");
    }

    /**
     * MachineType: 配置机型名称
     *
     * @param string $machineType
     */
    public function setMachineType($machineType)
    {
        $this->set("MachineType", $machineType);
    }

    /**
     * SecGroupStatus: 安全组版本
     *
     * @return integer|null
     */
    public function getSecGroupStatus()
    {
        return $this->get("SecGroupStatus");
    }

    /**
     * SecGroupStatus: 安全组版本
     *
     * @param int $secGroupStatus
     */
    public function setSecGroupStatus($secGroupStatus)
    {
        $this->set("SecGroupStatus", $secGroupStatus);
    }
}
