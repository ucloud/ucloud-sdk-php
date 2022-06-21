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

class UDBInstanceSet extends Response
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
     * ClusterRole: 当DB类型为mongodb时，返回该实例所在集群中的角色，包括：mongos、configsrv_sccc、configsrv_csrs、shardsrv_datanode、shardsrv_arbiter，其中congfigsrv分为sccc和csrs两种模式，shardsrv分为datanode和arbiter两种模式
     *
     * @return string|null
     */
    public function getClusterRole()
    {
        return $this->get("ClusterRole");
    }

    /**
     * ClusterRole: 当DB类型为mongodb时，返回该实例所在集群中的角色，包括：mongos、configsrv_sccc、configsrv_csrs、shardsrv_datanode、shardsrv_arbiter，其中congfigsrv分为sccc和csrs两种模式，shardsrv分为datanode和arbiter两种模式
     *
     * @param string $clusterRole
     */
    public function setClusterRole($clusterRole)
    {
        $this->set("ClusterRole", $clusterRole);
    }

    /**
     * DBId: DB实例id
     *
     * @return string|null
     */
    public function getDBId()
    {
        return $this->get("DBId");
    }

    /**
     * DBId: DB实例id
     *
     * @param string $dbId
     */
    public function setDBId($dbId)
    {
        $this->set("DBId", $dbId);
    }

    /**
     * Name: 实例名称，至少6位
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 实例名称，至少6位
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * DBTypeId: DB类型id，mysql/mongodb按版本细分各有一个id 目前id的取值范围为[1,7],数值对应的版本如下： 1：mysql-5.5，2：mysql-5.1，3：percona-5.5 4：mongodb-2.4，5：mongodb-2.6，6：mysql-5.6， 7：percona-5.6
     *
     * @return string|null
     */
    public function getDBTypeId()
    {
        return $this->get("DBTypeId");
    }

    /**
     * DBTypeId: DB类型id，mysql/mongodb按版本细分各有一个id 目前id的取值范围为[1,7],数值对应的版本如下： 1：mysql-5.5，2：mysql-5.1，3：percona-5.5 4：mongodb-2.4，5：mongodb-2.6，6：mysql-5.6， 7：percona-5.6
     *
     * @param string $dbTypeId
     */
    public function setDBTypeId($dbTypeId)
    {
        $this->set("DBTypeId", $dbTypeId);
    }

    /**
     * ParamGroupId: DB实例使用的配置参数组id
     *
     * @return int|null
     */
    public function getParamGroupId()
    {
        return $this->get("ParamGroupId");
    }

    /**
     * ParamGroupId: DB实例使用的配置参数组id
     *
     * @param int $paramGroupId
     */
    public function setParamGroupId($paramGroupId)
    {
        $this->set("ParamGroupId", $paramGroupId);
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
     * VirtualIP: DB实例虚ip
     *
     * @return string|null
     */
    public function getVirtualIP()
    {
        return $this->get("VirtualIP");
    }

    /**
     * VirtualIP: DB实例虚ip
     *
     * @param string $virtualIP
     */
    public function setVirtualIP($virtualIP)
    {
        $this->set("VirtualIP", $virtualIP);
    }

    /**
     * VirtualIPMac: DB实例虚ip的mac地址
     *
     * @return string|null
     */
    public function getVirtualIPMac()
    {
        return $this->get("VirtualIPMac");
    }

    /**
     * VirtualIPMac: DB实例虚ip的mac地址
     *
     * @param string $virtualIPMac
     */
    public function setVirtualIPMac($virtualIPMac)
    {
        $this->set("VirtualIPMac", $virtualIPMac);
    }

    /**
     * VPCId: VPC的ID
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: VPC的ID
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * SubnetId: 子网ID
     *
     * @return string|null
     */
    public function getSubnetId()
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 子网ID
     *
     * @param string $subnetId
     */
    public function setSubnetId($subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * InstanceType: UDB数据库机型
     *
     * @return string|null
     */
    public function getInstanceType()
    {
        return $this->get("InstanceType");
    }

    /**
     * InstanceType: UDB数据库机型
     *
     * @param string $instanceType
     */
    public function setInstanceType($instanceType)
    {
        $this->set("InstanceType", $instanceType);
    }

    /**
     * InstanceTypeId: UDB数据库机型ID
     *
     * @return int|null
     */
    public function getInstanceTypeId()
    {
        return $this->get("InstanceTypeId");
    }

    /**
     * InstanceTypeId: UDB数据库机型ID
     *
     * @param int $instanceTypeId
     */
    public function setInstanceTypeId($instanceTypeId)
    {
        $this->set("InstanceTypeId", $instanceTypeId);
    }

    /**
     * Tag: 获取资源其他信息
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 获取资源其他信息
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * Port: 端口号，mysql默认3306，mongodb默认27017
     *
     * @return int|null
     */
    public function getPort()
    {
        return $this->get("Port");
    }

    /**
     * Port: 端口号，mysql默认3306，mongodb默认27017
     *
     * @param int $port
     */
    public function setPort($port)
    {
        $this->set("Port", $port);
    }

    /**
     * SrcDBId: 对mysql的slave而言是master的DBId，对master则为空， 对mongodb则是副本集id
     *
     * @return string|null
     */
    public function getSrcDBId()
    {
        return $this->get("SrcDBId");
    }

    /**
     * SrcDBId: 对mysql的slave而言是master的DBId，对master则为空， 对mongodb则是副本集id
     *
     * @param string $srcDBId
     */
    public function setSrcDBId($srcDBId)
    {
        $this->set("SrcDBId", $srcDBId);
    }

    /**
     * BackupCount: 备份策略，不可修改，备份文件保留的数量，默认7次
     *
     * @return int|null
     */
    public function getBackupCount()
    {
        return $this->get("BackupCount");
    }

    /**
     * BackupCount: 备份策略，不可修改，备份文件保留的数量，默认7次
     *
     * @param int $backupCount
     */
    public function setBackupCount($backupCount)
    {
        $this->set("BackupCount", $backupCount);
    }

    /**
     * BackupBeginTime: 备份策略，不可修改，开始时间，单位小时计，默认3点
     *
     * @return int|null
     */
    public function getBackupBeginTime()
    {
        return $this->get("BackupBeginTime");
    }

    /**
     * BackupBeginTime: 备份策略，不可修改，开始时间，单位小时计，默认3点
     *
     * @param int $backupBeginTime
     */
    public function setBackupBeginTime($backupBeginTime)
    {
        $this->set("BackupBeginTime", $backupBeginTime);
    }

    /**
     * BackupDuration: 备份策略，一天内备份时间间隔，单位小时，默认24小时
     *
     * @return int|null
     */
    public function getBackupDuration()
    {
        return $this->get("BackupDuration");
    }

    /**
     * BackupDuration: 备份策略，一天内备份时间间隔，单位小时，默认24小时
     *
     * @param int $backupDuration
     */
    public function setBackupDuration($backupDuration)
    {
        $this->set("BackupDuration", $backupDuration);
    }

    /**
     * BackupBlacklist: 备份策略，备份黑名单，mongodb则不适用
     *
     * @return string|null
     */
    public function getBackupBlacklist()
    {
        return $this->get("BackupBlacklist");
    }

    /**
     * BackupBlacklist: 备份策略，备份黑名单，mongodb则不适用
     *
     * @param string $backupBlacklist
     */
    public function setBackupBlacklist($backupBlacklist)
    {
        $this->set("BackupBlacklist", $backupBlacklist);
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
     * @return int|null
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
     * @return int|null
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
     * @return int|null
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
     * ChargeType: Year， Month， Dynamic，Trial，默认: Dynamic
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: Year， Month， Dynamic，Trial，默认: Dynamic
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * MemoryLimit: 内存限制(MB)，默认根据配置机型
     *
     * @return int|null
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
     * @return int|null
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
     * UseSSD: 是否使用SSD
     *
     * @return boolean|null
     */
    public function getUseSSD()
    {
        return $this->get("UseSSD");
    }

    /**
     * UseSSD: 是否使用SSD
     *
     * @param boolean $useSSD
     */
    public function setUseSSD($useSSD)
    {
        $this->set("UseSSD", $useSSD);
    }

    /**
     * SSDType: SSD类型，SATA/PCI-E/NVMe
     *
     * @return string|null
     */
    public function getSSDType()
    {
        return $this->get("SSDType");
    }

    /**
     * SSDType: SSD类型，SATA/PCI-E/NVMe
     *
     * @param string $ssdType
     */
    public function setSSDType($ssdType)
    {
        $this->set("SSDType", $ssdType);
    }

    /**
     * Role: DB实例角色，mysql区分master/slave，mongodb多种角色
     *
     * @return string|null
     */
    public function getRole()
    {
        return $this->get("Role");
    }

    /**
     * Role: DB实例角色，mysql区分master/slave，mongodb多种角色
     *
     * @param string $role
     */
    public function setRole($role)
    {
        $this->set("Role", $role);
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
     * BackupDate: 备份日期标记位。共7位,每一位为一周中一天的备份情况 0表示关闭当天备份,1表示打开当天备份。最右边的一位 为星期天的备份开关，其余从右到左依次为星期一到星期 六的备份配置开关，每周必须至少设置两天备份。 例如：1100000 表示打开星期六和星期五的自动备份功能
     *
     * @return string|null
     */
    public function getBackupDate()
    {
        return $this->get("BackupDate");
    }

    /**
     * BackupDate: 备份日期标记位。共7位,每一位为一周中一天的备份情况 0表示关闭当天备份,1表示打开当天备份。最右边的一位 为星期天的备份开关，其余从右到左依次为星期一到星期 六的备份配置开关，每周必须至少设置两天备份。 例如：1100000 表示打开星期六和星期五的自动备份功能
     *
     * @param string $backupDate
     */
    public function setBackupDate($backupDate)
    {
        $this->set("BackupDate", $backupDate);
    }

    /**
     * InstanceMode: UDB实例模式类型, 可选值如下: “Normal”： 普通版UDB实例 “HA”: 高可用版UDB实例
     *
     * @return string|null
     */
    public function getInstanceMode()
    {
        return $this->get("InstanceMode");
    }

    /**
     * InstanceMode: UDB实例模式类型, 可选值如下: “Normal”： 普通版UDB实例 “HA”: 高可用版UDB实例
     *
     * @param string $instanceMode
     */
    public function setInstanceMode($instanceMode)
    {
        $this->set("InstanceMode", $instanceMode);
    }

    /**
     * DataSet: 如果在需要返回从库的场景下，返回该DB实例的所有从库DB实例信息列表。列表中每一个元素的内容同UDBSlaveInstanceSet 。如果这个DB实例没有从库的情况下，此时返回一个空的列表
     *
     * @return UDBSlaveInstanceSet[]|null
     */
    public function getDataSet()
    {
        $items = $this->get("DataSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UDBSlaveInstanceSet($item));
        }
        return $result;
    }

    /**
     * DataSet: 如果在需要返回从库的场景下，返回该DB实例的所有从库DB实例信息列表。列表中每一个元素的内容同UDBSlaveInstanceSet 。如果这个DB实例没有从库的情况下，此时返回一个空的列表
     *
     * @param UDBSlaveInstanceSet[] $dataSet
     */
    public function setDataSet(array $dataSet)
    {
        $result = [];
        foreach ($dataSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
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

    /**
     * IPv6Address: 该实例的ipv6地址
     *
     * @return string|null
     */
    public function getIPv6Address()
    {
        return $this->get("IPv6Address");
    }

    /**
     * IPv6Address: 该实例的ipv6地址
     *
     * @param string $iPv6Address
     */
    public function setIPv6Address($iPv6Address)
    {
        $this->set("IPv6Address", $iPv6Address);
    }

    /**
     * UserUFileData: 用户转存备份到自己的UFILE配置, 结构参考UFileDataSet
     *
     * @return UFileDataSet|null
     */
    public function getUserUFileData()
    {
        return new UFileDataSet($this->get("UserUFileData"));
    }

    /**
     * UserUFileData: 用户转存备份到自己的UFILE配置, 结构参考UFileDataSet
     *
     * @param UFileDataSet $userUFileData
     */
    public function setUserUFileData(array $userUFileData)
    {
        $this->set("UserUFileData", $userUFileData->getAll());
    }


}
