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

class CreateMongoDBReplicaSetRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateMongoDBReplicaSet"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("Name");
        $this->markRequired("AdminPassword");
        $this->markRequired("DBTypeId");
        $this->markRequired("DiskSpace");
        $this->markRequired("ParamGroupId");
        $this->markRequired("MemoryLimit");
        $this->markRequired("Port");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * Name: PrimaryDB实例名称，至少6位
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: PrimaryDB实例名称，至少6位
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
     * DBTypeId: DB类型id对应的字符串形式（例如：mongodb-2.6）注意：当前仅支持mongodb
     *
     * @return string|null
     */
    public function getDBTypeId()
    {
        return $this->get("DBTypeId");
    }

    /**
     * DBTypeId: DB类型id对应的字符串形式（例如：mongodb-2.6）注意：当前仅支持mongodb
     *
     * @param string $dbTypeId
     */
    public function setDBTypeId($dbTypeId)
    {
        $this->set("DBTypeId", $dbTypeId);
    }

    /**
     * DiskSpace: 磁盘空间(GB), 暂时支持20G - 3000G
     *
     * @return integer|null
     */
    public function getDiskSpace()
    {
        return $this->get("DiskSpace");
    }

    /**
     * DiskSpace: 磁盘空间(GB), 暂时支持20G - 3000G
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
     * MemoryLimit: 内存限制(MB)，目前支持以下几档 1000M/2000M/4000M/ 6000M/8000M/12000M/16000M/ 24000M/32000M/48000M/ 64000M/96000M
     *
     * @return integer|null
     */
    public function getMemoryLimit()
    {
        return $this->get("MemoryLimit");
    }

    /**
     * MemoryLimit: 内存限制(MB)，目前支持以下几档 1000M/2000M/4000M/ 6000M/8000M/12000M/16000M/ 24000M/32000M/48000M/ 64000M/96000M
     *
     * @param int $memoryLimit
     */
    public function setMemoryLimit($memoryLimit)
    {
        $this->set("MemoryLimit", $memoryLimit);
    }

    /**
     * Port: 端口号
     *
     * @return integer|null
     */
    public function getPort()
    {
        return $this->get("Port");
    }

    /**
     * Port: 端口号
     *
     * @param int $port
     */
    public function setPort($port)
    {
        $this->set("Port", $port);
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
     * Quantity: 购买时长(N个月)，默认值1个月。如果为0，代表购买到月底。
     *
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买时长(N个月)，默认值1个月。如果为0，代表购买到月底。
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
     * UseSSD: 是否使用SSD，默认为true
     *
     * @return boolean|null
     */
    public function getUseSSD()
    {
        return $this->get("UseSSD");
    }

    /**
     * UseSSD: 是否使用SSD，默认为true
     *
     * @param boolean $useSSD
     */
    public function setUseSSD($useSSD)
    {
        $this->set("UseSSD", $useSSD);
    }

    /**
     * SSDType: SSD类型，可选值为"SATA"、"PCI-E"，如果UseSSD为true ，则必选
     *
     * @return string|null
     */
    public function getSSDType()
    {
        return $this->get("SSDType");
    }

    /**
     * SSDType: SSD类型，可选值为"SATA"、"PCI-E"，如果UseSSD为true ，则必选
     *
     * @param string $ssdType
     */
    public function setSSDType($ssdType)
    {
        $this->set("SSDType", $ssdType);
    }

    /**
     * CPU: cpu核数
     *
     * @return integer|null
     */
    public function getCPU()
    {
        return $this->get("CPU");
    }

    /**
     * CPU: cpu核数
     *
     * @param int $cpu
     */
    public function setCPU($cpu)
    {
        $this->set("CPU", $cpu);
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
     * ClusterId: 所属分片集群的ID
     *
     * @return string|null
     */
    public function getClusterId()
    {
        return $this->get("ClusterId");
    }

    /**
     * ClusterId: 所属分片集群的ID
     *
     * @param string $clusterId
     */
    public function setClusterId($clusterId)
    {
        $this->set("ClusterId", $clusterId);
    }

    /**
     * CouponId: CouponId.0 代表第一个代金券id，对于传入多个代金券id，后面为 CouponId.1, CouponId.2 以此类推
     *
     * @return string[]|null
     */
    public function getCouponId()
    {
        return $this->get("CouponId");
    }

    /**
     * CouponId: CouponId.0 代表第一个代金券id，对于传入多个代金券id，后面为 CouponId.1, CouponId.2 以此类推
     *
     * @param string[] $couponId
     */
    public function setCouponId(array $couponId)
    {
        $this->set("CouponId", $couponId);
    }
}
