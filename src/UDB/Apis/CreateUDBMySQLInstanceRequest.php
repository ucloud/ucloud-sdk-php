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
use UCloud\UDB\Params\CreateUDBMySQLInstanceParamLabels;

class CreateUDBMySQLInstanceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUDBMySQLInstance"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("Name");
        $this->markRequired("AdminPassword");
        $this->markRequired("DBTypeId");
        $this->markRequired("Port");
        $this->markRequired("DiskSpace");
        $this->markRequired("ParamGroupId");
        $this->markRequired("MachineType");
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
     * DBTypeId: DB类型，mysql按版本细分 mysql-8.4, mysql-8.0,  mysql-5.7, percona-5.7, mysql-5.6, percona-5.6、mysql-5.5
     *
     * @return string|null
     */
    public function getDBTypeId()
    {
        return $this->get("DBTypeId");
    }

    /**
     * DBTypeId: DB类型，mysql按版本细分 mysql-8.4, mysql-8.0,  mysql-5.7, percona-5.7, mysql-5.6, percona-5.6、mysql-5.5
     *
     * @param string $dbTypeId
     */
    public function setDBTypeId($dbTypeId)
    {
        $this->set("DBTypeId", $dbTypeId);
    }

    /**
     * Port: 端口号，mysql默认3306
     *
     * @return integer|null
     */
    public function getPort()
    {
        return $this->get("Port");
    }

    /**
     * Port: 端口号，mysql默认3306
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
     * MachineType: 规格类型 ID，请通过 ListUDBMachineType 接口获取，返回体中的ID字段为MachineType的值。
     *
     * @return string|null
     */
    public function getMachineType()
    {
        return $this->get("MachineType");
    }

    /**
     * MachineType: 规格类型 ID，请通过 ListUDBMachineType 接口获取，返回体中的ID字段为MachineType的值。
     *
     * @param string $machineType
     */
    public function setMachineType($machineType)
    {
        $this->set("MachineType", $machineType);
    }

    /**
     * StorageClass: 存储类型 CLOUD_RSSD: RSSD 云盘， CLOUD_SSD_ESSENTIAL: SSD Essential云盘 ，该字段和SpecificationClass组合使用，CLOUD_RSSD对应O型，CLOUD_SSD_ESSENTIAL对应OM型(北京2、乌兰察布支持)，注：圣保罗、丹佛、哈萨克斯坦地域仅支持O2机型，CLOUD_RSSD对应O2型
     *
     * @return string|null
     */
    public function getStorageClass()
    {
        return $this->get("StorageClass");
    }

    /**
     * StorageClass: 存储类型 CLOUD_RSSD: RSSD 云盘， CLOUD_SSD_ESSENTIAL: SSD Essential云盘 ，该字段和SpecificationClass组合使用，CLOUD_RSSD对应O型，CLOUD_SSD_ESSENTIAL对应OM型(北京2、乌兰察布支持)，注：圣保罗、丹佛、哈萨克斯坦地域仅支持O2机型，CLOUD_RSSD对应O2型
     *
     * @param string $storageClass
     */
    public function setStorageClass($storageClass)
    {
        $this->set("StorageClass", $storageClass);
    }

    /**
     * SpecificationClass: 规格类型 O: NVMe型, O2: O2 ,OM: 共享型
     *
     * @return string|null
     */
    public function getSpecificationClass()
    {
        return $this->get("SpecificationClass");
    }

    /**
     * SpecificationClass: 规格类型 O: NVMe型, O2: O2 ,OM: 共享型
     *
     * @param string $specificationClass
     */
    public function setSpecificationClass($specificationClass)
    {
        $this->set("SpecificationClass", $specificationClass);
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
     * @return CreateUDBMySQLInstanceParamLabels[]|null
     */
    public function getLabels()
    {
        $items = $this->get("Labels");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CreateUDBMySQLInstanceParamLabels($item));
        }
        return $result;
    }

    /**
     * Labels:
     *
     * @param CreateUDBMySQLInstanceParamLabels[] $labels
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
