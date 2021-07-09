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
namespace UCloud\UDB\Apis;

use UCloud\Core\Request\Request;

class CreateUDBInstanceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUDBInstance"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("Name");
        $this->markRequired("AdminPassword");
        $this->markRequired("DBTypeId");
        $this->markRequired("Port");
        $this->markRequired("DiskSpace");
        $this->markRequired("ParamGroupId");
        $this->markRequired("MemoryLimit");
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
     * Name: 实例名称，至少6位
     *
     * @return string|null
     */
    public function getName(): string
    {
        return $this->get("Name");
    }

    /**
     * Name: 实例名称，至少6位
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->set("Name", $name);
    }

    /**
     * AdminPassword: 管理员密码
     *
     * @return string|null
     */
    public function getAdminPassword(): string
    {
        return $this->get("AdminPassword");
    }

    /**
     * AdminPassword: 管理员密码
     *
     * @param string $adminPassword
     */
    public function setAdminPassword(string $adminPassword)
    {
        $this->set("AdminPassword", $adminPassword);
    }

    /**
     * DBTypeId: DB类型id，mysql/mongodb/postgesql按版本细分 1：mysql-5.1，2：mysql-5.5，3：percona-5.5，4：mysql-5.6，5：percona-5.6，6：mysql-5.7，7：percona-5.7，8：mariadb-10.0，9：mongodb-2.4，10：mongodb-2.6，11：mongodb-3.0，12：mongodb-3.2,13：postgresql-9.4，14：postgresql-9.6，14：postgresql-10.4
     *
     * @return string|null
     */
    public function getDBTypeId(): string
    {
        return $this->get("DBTypeId");
    }

    /**
     * DBTypeId: DB类型id，mysql/mongodb/postgesql按版本细分 1：mysql-5.1，2：mysql-5.5，3：percona-5.5，4：mysql-5.6，5：percona-5.6，6：mysql-5.7，7：percona-5.7，8：mariadb-10.0，9：mongodb-2.4，10：mongodb-2.6，11：mongodb-3.0，12：mongodb-3.2,13：postgresql-9.4，14：postgresql-9.6，14：postgresql-10.4
     *
     * @param string $dbTypeId
     */
    public function setDBTypeId(string $dbTypeId)
    {
        $this->set("DBTypeId", $dbTypeId);
    }

    /**
     * Port: 端口号，mysql默认3306，mongodb默认27017，postgresql默认5432
     *
     * @return integer|null
     */
    public function getPort(): int
    {
        return $this->get("Port");
    }

    /**
     * Port: 端口号，mysql默认3306，mongodb默认27017，postgresql默认5432
     *
     * @param int $port
     */
    public function setPort(int $port)
    {
        $this->set("Port", $port);
    }

    /**
     * DiskSpace: 磁盘空间(GB), 暂时支持20G - 32T
     *
     * @return integer|null
     */
    public function getDiskSpace(): int
    {
        return $this->get("DiskSpace");
    }

    /**
     * DiskSpace: 磁盘空间(GB), 暂时支持20G - 32T
     *
     * @param int $diskSpace
     */
    public function setDiskSpace(int $diskSpace)
    {
        $this->set("DiskSpace", $diskSpace);
    }

    /**
     * ParamGroupId: DB实例使用的配置参数组id
     *
     * @return integer|null
     */
    public function getParamGroupId(): int
    {
        return $this->get("ParamGroupId");
    }

    /**
     * ParamGroupId: DB实例使用的配置参数组id
     *
     * @param int $paramGroupId
     */
    public function setParamGroupId(int $paramGroupId)
    {
        $this->set("ParamGroupId", $paramGroupId);
    }

    /**
     * MemoryLimit: 内存限制(MB)，目前支持以下几档 1000M/2000M/4000M/ 6000M/8000M/12000M/16000M/ 24000M/32000M/48000M/ 64000M/96000M/128000M/192000M/256000M/320000M
     *
     * @return integer|null
     */
    public function getMemoryLimit(): int
    {
        return $this->get("MemoryLimit");
    }

    /**
     * MemoryLimit: 内存限制(MB)，目前支持以下几档 1000M/2000M/4000M/ 6000M/8000M/12000M/16000M/ 24000M/32000M/48000M/ 64000M/96000M/128000M/192000M/256000M/320000M
     *
     * @param int $memoryLimit
     */
    public function setMemoryLimit(int $memoryLimit)
    {
        $this->set("MemoryLimit", $memoryLimit);
    }

    /**
     * ChargeType: Year， Month， Dynamic，Trial，默认: Month
     *
     * @return string|null
     */
    public function getChargeType(): string
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: Year， Month， Dynamic，Trial，默认: Month
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Quantity: 购买时长，默认值1
     *
     * @return integer|null
     */
    public function getQuantity(): int
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买时长，默认值1
     *
     * @param int $quantity
     */
    public function setQuantity(int $quantity)
    {
        $this->set("Quantity", $quantity);
    }

    /**
     * AdminUser: 管理员帐户名，默认root
     *
     * @return string|null
     */
    public function getAdminUser(): string
    {
        return $this->get("AdminUser");
    }

    /**
     * AdminUser: 管理员帐户名，默认root
     *
     * @param string $adminUser
     */
    public function setAdminUser(string $adminUser)
    {
        $this->set("AdminUser", $adminUser);
    }

    /**
     * BackupCount: 备份策略，每周备份数量，默认7次
     *
     * @return integer|null
     */
    public function getBackupCount(): int
    {
        return $this->get("BackupCount");
    }

    /**
     * BackupCount: 备份策略，每周备份数量，默认7次
     *
     * @param int $backupCount
     */
    public function setBackupCount(int $backupCount)
    {
        $this->set("BackupCount", $backupCount);
    }

    /**
     * BackupTime: 备份策略，备份开始时间，单位小时计，默认1点
     *
     * @return integer|null
     */
    public function getBackupTime(): int
    {
        return $this->get("BackupTime");
    }

    /**
     * BackupTime: 备份策略，备份开始时间，单位小时计，默认1点
     *
     * @param int $backupTime
     */
    public function setBackupTime(int $backupTime)
    {
        $this->set("BackupTime", $backupTime);
    }

    /**
     * BackupDuration: 备份策略，备份时间间隔，单位小时计，默认24小时
     *
     * @return integer|null
     */
    public function getBackupDuration(): int
    {
        return $this->get("BackupDuration");
    }

    /**
     * BackupDuration: 备份策略，备份时间间隔，单位小时计，默认24小时
     *
     * @param int $backupDuration
     */
    public function setBackupDuration(int $backupDuration)
    {
        $this->set("BackupDuration", $backupDuration);
    }

    /**
     * BackupId: 备份id，如果指定，则表明从备份恢复实例
     *
     * @return integer|null
     */
    public function getBackupId(): int
    {
        return $this->get("BackupId");
    }

    /**
     * BackupId: 备份id，如果指定，则表明从备份恢复实例
     *
     * @param int $backupId
     */
    public function setBackupId(int $backupId)
    {
        $this->set("BackupId", $backupId);
    }

    /**
     * UseSSD: 是否使用SSD，默认为true。目前主要可用区、海外机房、新机房只提供SSD资源，非SSD资源不再提供。
     *
     * @return boolean|null
     */
    public function getUseSSD(): bool
    {
        return $this->get("UseSSD");
    }

    /**
     * UseSSD: 是否使用SSD，默认为true。目前主要可用区、海外机房、新机房只提供SSD资源，非SSD资源不再提供。
     *
     * @param boolean $useSSD
     */
    public function setUseSSD(bool $useSSD)
    {
        $this->set("UseSSD", $useSSD);
    }

    /**
     * SSDType: SSD类型，可选值为"SATA"、“NVMe”，如果UseSSD为true ，则必选
     *
     * @return string|null
     */
    public function getSSDType(): string
    {
        return $this->get("SSDType");
    }

    /**
     * SSDType: SSD类型，可选值为"SATA"、“NVMe”，如果UseSSD为true ，则必选
     *
     * @param string $ssdType
     */
    public function setSSDType(string $ssdType)
    {
        $this->set("SSDType", $ssdType);
    }

    /**
     * InstanceMode: UDB实例模式类型, 可选值如下: "Normal": 普通版UDB实例 "HA": 高可用版UDB实例 默认是"Normal"
     *
     * @return string|null
     */
    public function getInstanceMode(): string
    {
        return $this->get("InstanceMode");
    }

    /**
     * InstanceMode: UDB实例模式类型, 可选值如下: "Normal": 普通版UDB实例 "HA": 高可用版UDB实例 默认是"Normal"
     *
     * @param string $instanceMode
     */
    public function setInstanceMode(string $instanceMode)
    {
        $this->set("InstanceMode", $instanceMode);
    }

    /**
     * UDBCId: 专区ID信息（如果这个参数存在这说明是在专区中创建DB）
     *
     * @return string|null
     */
    public function getUDBCId(): string
    {
        return $this->get("UDBCId");
    }

    /**
     * UDBCId: 专区ID信息（如果这个参数存在这说明是在专区中创建DB）
     *
     * @param string $udbcId
     */
    public function setUDBCId(string $udbcId)
    {
        $this->set("UDBCId", $udbcId);
    }

    /**
     * CPU: cpu核数
     *
     * @return integer|null
     */
    public function getCPU(): int
    {
        return $this->get("CPU");
    }

    /**
     * CPU: cpu核数
     *
     * @param int $cpu
     */
    public function setCPU(int $cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * BackupZone: 跨可用区高可用备库所在可用区，参见 [可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getBackupZone(): string
    {
        return $this->get("BackupZone");
    }

    /**
     * BackupZone: 跨可用区高可用备库所在可用区，参见 [可用区列表](../summary/regionlist.html)
     *
     * @param string $backupZone
     */
    public function setBackupZone(string $backupZone)
    {
        $this->set("BackupZone", $backupZone);
    }

    /**
     * SubnetId: 子网ID
     *
     * @return string|null
     */
    public function getSubnetId(): string
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 子网ID
     *
     * @param string $subnetId
     */
    public function setSubnetId(string $subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * VPCId: VPC的ID
     *
     * @return string|null
     */
    public function getVPCId(): string
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: VPC的ID
     *
     * @param string $vpcId
     */
    public function setVPCId(string $vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * DisableSemisync: 是否开启异步高可用，默认不填，可置为true
     *
     * @return boolean|null
     */
    public function getDisableSemisync(): bool
    {
        return $this->get("DisableSemisync");
    }

    /**
     * DisableSemisync: 是否开启异步高可用，默认不填，可置为true
     *
     * @param boolean $disableSemisync
     */
    public function setDisableSemisync(bool $disableSemisync)
    {
        $this->set("DisableSemisync", $disableSemisync);
    }

    /**
     * ClusterRole: 当DB类型(DBTypeId)为mongodb时，需要指定mongo的角色，可选值为configsrv (配置节点)，shardsrv (数据节点)
     *
     * @return string|null
     */
    public function getClusterRole(): string
    {
        return $this->get("ClusterRole");
    }

    /**
     * ClusterRole: 当DB类型(DBTypeId)为mongodb时，需要指定mongo的角色，可选值为configsrv (配置节点)，shardsrv (数据节点)
     *
     * @param string $clusterRole
     */
    public function setClusterRole(string $clusterRole)
    {
        $this->set("ClusterRole", $clusterRole);
    }

    /**
     * HAArch: 高可用架构:1） haproxy（默认）: 当前仅支持mysql。2） sentinel: 基于vip和哨兵节点的架构，当前支持mysql和pg。
     *
     * @return string|null
     */
    public function getHAArch(): string
    {
        return $this->get("HAArch");
    }

    /**
     * HAArch: 高可用架构:1） haproxy（默认）: 当前仅支持mysql。2） sentinel: 基于vip和哨兵节点的架构，当前支持mysql和pg。
     *
     * @param string $haArch
     */
    public function setHAArch(string $haArch)
    {
        $this->set("HAArch", $haArch);
    }

    /**
     * Tag: 实例所在的业务组名称
     *
     * @return string|null
     */
    public function getTag(): string
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 实例所在的业务组名称
     *
     * @param string $tag
     */
    public function setTag(string $tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * EnableIpV6: 是否创建使用ipv6 资源， 默认为false， 或者不填， 创建ipv6为true
     *
     * @return boolean|null
     */
    public function getEnableIpV6(): bool
    {
        return $this->get("EnableIpV6");
    }

    /**
     * EnableIpV6: 是否创建使用ipv6 资源， 默认为false， 或者不填， 创建ipv6为true
     *
     * @param boolean $enableIpV6
     */
    public function setEnableIpV6(bool $enableIpV6)
    {
        $this->set("EnableIpV6", $enableIpV6);
    }

    /**
     * CouponId: 使用的代金券id
     *
     * @return string|null
     */
    public function getCouponId(): string
    {
        return $this->get("CouponId");
    }

    /**
     * CouponId: 使用的代金券id
     *
     * @param string $couponId
     */
    public function setCouponId(string $couponId)
    {
        $this->set("CouponId", $couponId);
    }
}
