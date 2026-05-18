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
use UCloud\UDB\Params\CreateUDBSQLServerInstanceParamLabels;

class CreateUDBSQLServerInstanceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUDBSQLServerInstance"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("Name");
        $this->markRequired("AdminPassword");
        $this->markRequired("DBTypeId");
        $this->markRequired("Port");
        $this->markRequired("DiskSpace");
        $this->markRequired("StorageClass");
        $this->markRequired("SpecificationClass");
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
     * DBTypeId: DB类型，SQL Server按版本细分 sqlserver-2017、sqlserver-2019、sqlserver-2022
     *
     * @return string|null
     */
    public function getDBTypeId()
    {
        return $this->get("DBTypeId");
    }

    /**
     * DBTypeId: DB类型，SQL Server按版本细分 sqlserver-2017、sqlserver-2019、sqlserver-2022
     *
     * @param string $dbTypeId
     */
    public function setDBTypeId($dbTypeId)
    {
        $this->set("DBTypeId", $dbTypeId);
    }

    /**
     * Port: 端口号，sqlserver默认1433
     *
     * @return integer|null
     */
    public function getPort()
    {
        return $this->get("Port");
    }

    /**
     * Port: 端口号，sqlserver默认1433
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
     * StorageClass: 存储类型 CLOUD_RSSD: RSSD 云盘，该字段和SpecificationClass组合使用，CLOUD_RSSD对应O型
     *
     * @return string|null
     */
    public function getStorageClass()
    {
        return $this->get("StorageClass");
    }

    /**
     * StorageClass: 存储类型 CLOUD_RSSD: RSSD 云盘，该字段和SpecificationClass组合使用，CLOUD_RSSD对应O型
     *
     * @param string $storageClass
     */
    public function setStorageClass($storageClass)
    {
        $this->set("StorageClass", $storageClass);
    }

    /**
     * SpecificationClass: 规格类型 O: NVMe型
     *
     * @return string|null
     */
    public function getSpecificationClass()
    {
        return $this->get("SpecificationClass");
    }

    /**
     * SpecificationClass: 规格类型 O: NVMe型
     *
     * @param string $specificationClass
     */
    public function setSpecificationClass($specificationClass)
    {
        $this->set("SpecificationClass", $specificationClass);
    }

    /**
     * InstanceMode: UDB实例模式类型, 可选值如下: "Normal": SQL Server普通版实例 "HA": SQL Server集群版实例 默认是"Normal"
     *
     * @return string|null
     */
    public function getInstanceMode()
    {
        return $this->get("InstanceMode");
    }

    /**
     * InstanceMode: UDB实例模式类型, 可选值如下: "Normal": SQL Server普通版实例 "HA": SQL Server集群版实例 默认是"Normal"
     *
     * @param string $instanceMode
     */
    public function setInstanceMode($instanceMode)
    {
        $this->set("InstanceMode", $instanceMode);
    }

    /**
     * MachineType: 规格类型 ID，如果创建的是SQL Server集群版，该参数必填，请通过 ListUDBMachineType 接口获取，返回体中的ID字段为MachineType的值。
     *
     * @return string|null
     */
    public function getMachineType()
    {
        return $this->get("MachineType");
    }

    /**
     * MachineType: 规格类型 ID，如果创建的是SQL Server集群版，该参数必填，请通过 ListUDBMachineType 接口获取，返回体中的ID字段为MachineType的值。
     *
     * @param string $machineType
     */
    public function setMachineType($machineType)
    {
        $this->set("MachineType", $machineType);
    }

    /**
     * CPU: CPU核，如果是创建的SQL Server普通版，该参数必传，目前支持2/4/8/16/32/64
     *
     * @return integer|null
     */
    public function getCPU()
    {
        return $this->get("CPU");
    }

    /**
     * CPU: CPU核，如果是创建的SQL Server普通版，该参数必传，目前支持2/4/8/16/32/64
     *
     * @param int $cpu
     */
    public function setCPU($cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * MemoryLimit: 内存限制(MB)，如果是创建的SQL Server普通版，该参数必传，目前支持以下几档 2000M/4000M/ 6000M/8000M/12000M/16000M/ 24000M/32000M/48000M/ 64000M/96000M/128000M/192000M/256000M/320000M
     *
     * @return integer|null
     */
    public function getMemoryLimit()
    {
        return $this->get("MemoryLimit");
    }

    /**
     * MemoryLimit: 内存限制(MB)，如果是创建的SQL Server普通版，该参数必传，目前支持以下几档 2000M/4000M/ 6000M/8000M/12000M/16000M/ 24000M/32000M/48000M/ 64000M/96000M/128000M/192000M/256000M/320000M
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
     * SubnetId: 子网ID，如果创建的是SQL Server集群版，该参数必填
     *
     * @return string|null
     */
    public function getSubnetId()
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 子网ID，如果创建的是SQL Server集群版，该参数必填
     *
     * @param string $subnetId
     */
    public function setSubnetId($subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * VPCId: VPC的ID，如果创建的是SQL Server集群版，该参数必填
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: VPC的ID，如果创建的是SQL Server集群版，该参数必填
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
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
     * Labels:
     *
     * @return CreateUDBSQLServerInstanceParamLabels[]|null
     */
    public function getLabels()
    {
        $items = $this->get("Labels");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CreateUDBSQLServerInstanceParamLabels($item));
        }
        return $result;
    }

    /**
     * Labels:
     *
     * @param CreateUDBSQLServerInstanceParamLabels[] $labels
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
