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
namespace UCloud\UDB\Apis;

use UCloud\Core\Request\Request;
use UCloud\UDB\Params\CreateUDBInstanceParamLabels;

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
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
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
     * AdminPassword: 管理员密码
     *
     * @return string|null
     */
    public function getAdminPassword()
    {
        return $this->get("AdminPassword");
    }

    /**
     * AdminPassword: 管理员密码
     *
     * @param string $adminPassword
     */
    public function setAdminPassword($adminPassword)
    {
        $this->set("AdminPassword", $adminPassword);
    }

    /**
     * DBTypeId: DB类型，mysql/sqlserver按版本细分 mysql-8.0, mysql-5.6, percona-5.6, mysql-5.7, percona-5.7,  sqlserver-2017
     *
     * @return string|null
     */
    public function getDBTypeId()
    {
        return $this->get("DBTypeId");
    }

    /**
     * DBTypeId: DB类型，mysql/sqlserver按版本细分 mysql-8.0, mysql-5.6, percona-5.6, mysql-5.7, percona-5.7,  sqlserver-2017
     *
     * @param string $dbTypeId
     */
    public function setDBTypeId($dbTypeId)
    {
        $this->set("DBTypeId", $dbTypeId);
    }

    /**
     * Port: 端口号，mysql默认3306，sqlserver默认1433
     *
     * @return integer|null
     */
    public function getPort()
    {
        return $this->get("Port");
    }

    /**
     * Port: 端口号，mysql默认3306，sqlserver默认1433
     *
     * @param int $port
     */
    public function setPort($port)
    {
        $this->set("Port", $port);
    }

    /**
     * DiskSpace: 磁盘空间(GB), 暂时支持20G - 32T
     *
     * @return integer|null
     */
    public function getDiskSpace()
    {
        return $this->get("DiskSpace");
    }

    /**
     * DiskSpace: 磁盘空间(GB), 暂时支持20G - 32T
     *
     * @param int $diskSpace
     */
    public function setDiskSpace($diskSpace)
    {
        $this->set("DiskSpace", $diskSpace);
    }

    /**
     * ParamGroupId: DB实例使用的配置参数组id
     *
     * @return integer|null
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
     * MemoryLimit: 内存限制(MB)（待废弃，请通过指定MachineType和SpecificationType创建），目前支持以下几档 2000M/4000M/ 6000M/8000M/12000M/16000M/ 24000M/32000M/48000M/ 64000M/96000M/128000M/192000M/256000M/320000M
     *
     * @return integer|null
     */
    public function getMemoryLimit()
    {
        return $this->get("MemoryLimit");
    }

    /**
     * MemoryLimit: 内存限制(MB)（待废弃，请通过指定MachineType和SpecificationType创建），目前支持以下几档 2000M/4000M/ 6000M/8000M/12000M/16000M/ 24000M/32000M/48000M/ 64000M/96000M/128000M/192000M/256000M/320000M
     *
     * @param int $memoryLimit
     */
    public function setMemoryLimit($memoryLimit)
    {
        $this->set("MemoryLimit", $memoryLimit);
    }

    /**
     * ChargeType: Year， Month， Dynamic，Trial，默认: Month
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: Year， Month， Dynamic，Trial，默认: Month
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Quantity: 购买时长，默认值1
     *
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买时长，默认值1
     *
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->set("Quantity", $quantity);
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
     * BackupCount: 备份策略，每周备份数量，默认7次
     *
     * @return integer|null
     */
    public function getBackupCount()
    {
        return $this->get("BackupCount");
    }

    /**
     * BackupCount: 备份策略，每周备份数量，默认7次
     *
     * @param int $backupCount
     */
    public function setBackupCount($backupCount)
    {
        $this->set("BackupCount", $backupCount);
    }

    /**
     * BackupTime: 备份策略，备份开始时间，单位小时计，默认1点
     *
     * @return integer|null
     */
    public function getBackupTime()
    {
        return $this->get("BackupTime");
    }

    /**
     * BackupTime: 备份策略，备份开始时间，单位小时计，默认1点
     *
     * @param int $backupTime
     */
    public function setBackupTime($backupTime)
    {
        $this->set("BackupTime", $backupTime);
    }

    /**
     * BackupDuration: 备份策略，备份时间间隔，单位小时计，默认24小时
     *
     * @return integer|null
     */
    public function getBackupDuration()
    {
        return $this->get("BackupDuration");
    }

    /**
     * BackupDuration: 备份策略，备份时间间隔，单位小时计，默认24小时
     *
     * @param int $backupDuration
     */
    public function setBackupDuration($backupDuration)
    {
        $this->set("BackupDuration", $backupDuration);
    }

    /**
     * BackupId: 备份id，如果指定，则表明从备份恢复实例
     *
     * @return integer|null
     */
    public function getBackupId()
    {
        return $this->get("BackupId");
    }

    /**
     * BackupId: 备份id，如果指定，则表明从备份恢复实例
     *
     * @param int $backupId
     */
    public function setBackupId($backupId)
    {
        $this->set("BackupId", $backupId);
    }

    /**
     * InstanceType: 对于快杰机型，请使用最新的 SpecificationClass 和 StorageClass 字段进行创建。目前仅有少量地域支持 SATA_SSD 存储类型；若创建的是 SATA_SSD 机型，可通过该字段指定。字段说明：SATA_SSD：SATA SSD 机型（仅部分地域支持）NVMe_SSD：快杰机型
     *
     * @return string|null
     */
    public function getInstanceType()
    {
        return $this->get("InstanceType");
    }

    /**
     * InstanceType: 对于快杰机型，请使用最新的 SpecificationClass 和 StorageClass 字段进行创建。目前仅有少量地域支持 SATA_SSD 存储类型；若创建的是 SATA_SSD 机型，可通过该字段指定。字段说明：SATA_SSD：SATA SSD 机型（仅部分地域支持）NVMe_SSD：快杰机型
     *
     * @param string $instanceType
     */
    public function setInstanceType($instanceType)
    {
        $this->set("InstanceType", $instanceType);
    }

    /**
     * SSDType: 已废弃
     *
     * @return string|null
     */
    public function getSSDType()
    {
        return $this->get("SSDType");
    }

    /**
     * SSDType: 已废弃
     *
     * @param string $ssdType
     */
    public function setSSDType($ssdType)
    {
        $this->set("SSDType", $ssdType);
    }

    /**
     * InstanceMode: UDB实例模式类型, 可选值如下: "Normal": 普通版UDB实例 "HA": 高可用版UDB实例 默认是"Normal"
     *
     * @return string|null
     */
    public function getInstanceMode()
    {
        return $this->get("InstanceMode");
    }

    /**
     * InstanceMode: UDB实例模式类型, 可选值如下: "Normal": 普通版UDB实例 "HA": 高可用版UDB实例 默认是"Normal"
     *
     * @param string $instanceMode
     */
    public function setInstanceMode($instanceMode)
    {
        $this->set("InstanceMode", $instanceMode);
    }

    /**
     * CPU: cpu核数，如果db类型为sqlserver，必传参数
     *
     * @return integer|null
     */
    public function getCPU()
    {
        return $this->get("CPU");
    }

    /**
     * CPU: cpu核数，如果db类型为sqlserver，必传参数
     *
     * @param int $cpu
     */
    public function setCPU($cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * BackupZone: 跨可用区高可用备库所在可用区，参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getBackupZone()
    {
        return $this->get("BackupZone");
    }

    /**
     * BackupZone: 跨可用区高可用备库所在可用区，参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $backupZone
     */
    public function setBackupZone($backupZone)
    {
        $this->set("BackupZone", $backupZone);
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
     * DisableSemisync: 是否开启异步高可用，默认不填，可置为true
     *
     * @return boolean|null
     */
    public function getDisableSemisync()
    {
        return $this->get("DisableSemisync");
    }

    /**
     * DisableSemisync: 是否开启异步高可用，默认不填，可置为true
     *
     * @param boolean $disableSemisync
     */
    public function setDisableSemisync($disableSemisync)
    {
        $this->set("DisableSemisync", $disableSemisync);
    }

    /**
     * ClusterRole: 已废弃
     *
     * @return string|null
     */
    public function getClusterRole()
    {
        return $this->get("ClusterRole");
    }

    /**
     * ClusterRole: 已废弃
     *
     * @param string $clusterRole
     */
    public function setClusterRole($clusterRole)
    {
        $this->set("ClusterRole", $clusterRole);
    }

    /**
     * Tag: 实例所在的业务组名称
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 实例所在的业务组名称
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * DBSubVersion: MySQL 小版本号，支持指定小版本进行创建，请通过 DescribeUDBType 接口获取可用版本。
     *
     * @return string|null
     */
    public function getDBSubVersion()
    {
        return $this->get("DBSubVersion");
    }

    /**
     * DBSubVersion: MySQL 小版本号，支持指定小版本进行创建，请通过 DescribeUDBType 接口获取可用版本。
     *
     * @param string $dbSubVersion
     */
    public function setDBSubVersion($dbSubVersion)
    {
        $this->set("DBSubVersion", $dbSubVersion);
    }

    /**
     * CaseSensitivityParam: mysql大小写参数, 0 为大小写敏感, 1 为大小写不敏感, 目前只针对mysql8.0有效
     *
     * @return integer|null
     */
    public function getCaseSensitivityParam()
    {
        return $this->get("CaseSensitivityParam");
    }

    /**
     * CaseSensitivityParam: mysql大小写参数, 0 为大小写敏感, 1 为大小写不敏感, 目前只针对mysql8.0有效
     *
     * @param int $caseSensitivityParam
     */
    public function setCaseSensitivityParam($caseSensitivityParam)
    {
        $this->set("CaseSensitivityParam", $caseSensitivityParam);
    }

    /**
     * SpecificationType: 实例计算规格类型，0或不传代表使用内存方式购买，1代表使用内存-cpu可选配比方式购买，需要填写MachineType
     *
     * @return string|null
     */
    public function getSpecificationType()
    {
        return $this->get("SpecificationType");
    }

    /**
     * SpecificationType: 实例计算规格类型，0或不传代表使用内存方式购买，1代表使用内存-cpu可选配比方式购买，需要填写MachineType
     *
     * @param string $specificationType
     */
    public function setSpecificationType($specificationType)
    {
        $this->set("SpecificationType", $specificationType);
    }

    /**
     * MachineType: 规格类型 ID，当 SpecificationType = 1 时生效，请通过 ListUDBMachineType 接口获取。
     *
     * @return string|null
     */
    public function getMachineType()
    {
        return $this->get("MachineType");
    }

    /**
     * MachineType: 规格类型 ID，当 SpecificationType = 1 时生效，请通过 ListUDBMachineType 接口获取。
     *
     * @param string $machineType
     */
    public function setMachineType($machineType)
    {
        $this->set("MachineType", $machineType);
    }

    /**
     * AlarmTemplateId: 告警模版id
     *
     * @return string|null
     */
    public function getAlarmTemplateId()
    {
        return $this->get("AlarmTemplateId");
    }

    /**
     * AlarmTemplateId: 告警模版id
     *
     * @param string $alarmTemplateId
     */
    public function setAlarmTemplateId($alarmTemplateId)
    {
        $this->set("AlarmTemplateId", $alarmTemplateId);
    }

    /**
     * BackupURL: 备份文件的US3内网下载地址
     *
     * @return string|null
     */
    public function getBackupURL()
    {
        return $this->get("BackupURL");
    }

    /**
     * BackupURL: 备份文件的US3内网下载地址
     *
     * @param string $backupURL
     */
    public function setBackupURL($backupURL)
    {
        $this->set("BackupURL", $backupURL);
    }

    /**
     * StorageClass: 存储类型 CLOUD_SSD: SSD云盘, CLOUD_RSSD: RSSD 云盘， CLOUD_SSD_ESSENTIAL: SSD Essential云盘 ，该字段和SpecificationClass组合优先级比InstanceType字段高
     *
     * @return string|null
     */
    public function getStorageClass()
    {
        return $this->get("StorageClass");
    }

    /**
     * StorageClass: 存储类型 CLOUD_SSD: SSD云盘, CLOUD_RSSD: RSSD 云盘， CLOUD_SSD_ESSENTIAL: SSD Essential云盘 ，该字段和SpecificationClass组合优先级比InstanceType字段高
     *
     * @param string $storageClass
     */
    public function setStorageClass($storageClass)
    {
        $this->set("StorageClass", $storageClass);
    }

    /**
     * SpecificationClass: 规格类型 O: NVMe型, OM: 共享型，N: 通用型
     *
     * @return string|null
     */
    public function getSpecificationClass()
    {
        return $this->get("SpecificationClass");
    }

    /**
     * SpecificationClass: 规格类型 O: NVMe型, OM: 共享型，N: 通用型
     *
     * @param string $specificationClass
     */
    public function setSpecificationClass($specificationClass)
    {
        $this->set("SpecificationClass", $specificationClass);
    }

    /**
     * SemisyncFlag: 半同步开启开关 1：表示开启半同步，2：表示关闭半同步，0：表示默认值，默认也是开启半同步
     *
     * @return integer|null
     */
    public function getSemisyncFlag()
    {
        return $this->get("SemisyncFlag");
    }

    /**
     * SemisyncFlag: 半同步开启开关 1：表示开启半同步，2：表示关闭半同步，0：表示默认值，默认也是开启半同步
     *
     * @param int $semisyncFlag
     */
    public function setSemisyncFlag($semisyncFlag)
    {
        $this->set("SemisyncFlag", $semisyncFlag);
    }

    /**
     * Labels:
     *
     * @return CreateUDBInstanceParamLabels[]|null
     */
    public function getLabels()
    {
        $items = $this->get("Labels");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CreateUDBInstanceParamLabels($item));
        }
        return $result;
    }

    /**
     * Labels:
     *
     * @param CreateUDBInstanceParamLabels[] $labels
     */
    public function setLabels(array $labels)
    {
        $result = [];
        foreach ($labels as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * CouponId: 使用的代金券id
     *
     * @return string|null
     */
    public function getCouponId()
    {
        return $this->get("CouponId");
    }

    /**
     * CouponId: 使用的代金券id
     *
     * @param string $couponId
     */
    public function setCouponId($couponId)
    {
        $this->set("CouponId", $couponId);
    }
}
