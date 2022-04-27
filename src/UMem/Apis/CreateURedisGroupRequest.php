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

namespace UCloud\UMem\Apis;

use UCloud\Core\Request\Request;

class CreateURedisGroupRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateURedisGroup"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("Name");
        $this->markRequired("HighAvailability");
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
    public function setRegion(string $region)
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
    public function setZone(string $zone)
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
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }
    /**
     * Name: 请求创建组的名称 (范围[6-63],只能包含英文、数字以及符号-和_)
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 请求创建组的名称 (范围[6-63],只能包含英文、数字以及符号-和_)
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->set("Name", $name);
    }
    /**
     * HighAvailability: 是否开启高可用,enable或disable
     *
     * @return string|null
     */
    public function getHighAvailability()
    {
        return $this->get("HighAvailability");
    }

    /**
     * HighAvailability: 是否开启高可用,enable或disable
     *
     * @param string $highAvailability
     */
    public function setHighAvailability(string $highAvailability)
    {
        $this->set("HighAvailability", $highAvailability);
    }
    /**
     * Size: 每个节点的内存大小,单位GB,默认1GB,目前仅支持1/2/4/8/16/32,六种
     *
     * @return integer|null
     */
    public function getSize()
    {
        return $this->get("Size");
    }

    /**
     * Size: 每个节点的内存大小,单位GB,默认1GB,目前仅支持1/2/4/8/16/32,六种
     *
     * @param int $size
     */
    public function setSize(int $size)
    {
        $this->set("Size", $size);
    }
    /**
     * AutoBackup: 是否自动备份,enable或disable，默认disable
     *
     * @return string|null
     */
    public function getAutoBackup()
    {
        return $this->get("AutoBackup");
    }

    /**
     * AutoBackup: 是否自动备份,enable或disable，默认disable
     *
     * @param string $autoBackup
     */
    public function setAutoBackup(string $autoBackup)
    {
        $this->set("AutoBackup", $autoBackup);
    }
    /**
     * BackupTime: 自动备份开始时间,范围[0-23],默认3点
     *
     * @return integer|null
     */
    public function getBackupTime()
    {
        return $this->get("BackupTime");
    }

    /**
     * BackupTime: 自动备份开始时间,范围[0-23],默认3点
     *
     * @param int $backupTime
     */
    public function setBackupTime(int $backupTime)
    {
        $this->set("BackupTime", $backupTime);
    }
    /**
     * ConfigId: 配置ID,目前支持 3.0版本配置ID:"03f58ca9-b64d-4bdd-abc7-c6b9a46fd801",3.2版本配置ID:"3e45ac48-f8a2-a9q2-261d-l342dab130gf", 4.0版本配置ID:"6c9298a3-9d7f-428c-b1d0-e87ab3b8a1ea",默认版本3.0,从备份创建为必传项
     *
     * @return string|null
     */
    public function getConfigId()
    {
        return $this->get("ConfigId");
    }

    /**
     * ConfigId: 配置ID,目前支持 3.0版本配置ID:"03f58ca9-b64d-4bdd-abc7-c6b9a46fd801",3.2版本配置ID:"3e45ac48-f8a2-a9q2-261d-l342dab130gf", 4.0版本配置ID:"6c9298a3-9d7f-428c-b1d0-e87ab3b8a1ea",默认版本3.0,从备份创建为必传项
     *
     * @param string $configId
     */
    public function setConfigId(string $configId)
    {
        $this->set("ConfigId", $configId);
    }
    /**
     * Version: Redis版本信息(详见DescribeURedisVersion返回结果),默认版本3.0
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->get("Version");
    }

    /**
     * Version: Redis版本信息(详见DescribeURedisVersion返回结果),默认版本3.0
     *
     * @param string $version
     */
    public function setVersion(string $version)
    {
        $this->set("Version", $version);
    }
    /**
     * ChargeType: 计费模式，Year , Month, Dynamic 默认: Month
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费模式，Year , Month, Dynamic 默认: Month
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }
    /**
     * Quantity: 购买时长，默认为1
     *
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买时长，默认为1
     *
     * @param int $quantity
     */
    public function setQuantity(int $quantity)
    {
        $this->set("Quantity", $quantity);
    }
    /**
     * Tag: 业务组名称
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组名称
     *
     * @param string $tag
     */
    public function setTag(string $tag)
    {
        $this->set("Tag", $tag);
    }
    /**
     * Password: 初始化密码,需要 base64 编码
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->get("Password");
    }

    /**
     * Password: 初始化密码,需要 base64 编码
     *
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $this->set("Password", $password);
    }
    /**
     * BackupId: 有此项代表从备份中创建，无代表正常创建
     *
     * @return string|null
     */
    public function getBackupId()
    {
        return $this->get("BackupId");
    }

    /**
     * BackupId: 有此项代表从备份中创建，无代表正常创建
     *
     * @param string $backupId
     */
    public function setBackupId(string $backupId)
    {
        $this->set("BackupId", $backupId);
    }
    /**
     * SlaveZone: 跨机房URedis，slave所在可用区（必须和Zone在同一Region，且不可相同）
     *
     * @return string|null
     */
    public function getSlaveZone()
    {
        return $this->get("SlaveZone");
    }

    /**
     * SlaveZone: 跨机房URedis，slave所在可用区（必须和Zone在同一Region，且不可相同）
     *
     * @param string $slaveZone
     */
    public function setSlaveZone(string $slaveZone)
    {
        $this->set("SlaveZone", $slaveZone);
    }
    /**
     * MasterGroupId: Master Redis Group的ID，创建只读Slave时，必须填写
     *
     * @return string|null
     */
    public function getMasterGroupId()
    {
        return $this->get("MasterGroupId");
    }

    /**
     * MasterGroupId: Master Redis Group的ID，创建只读Slave时，必须填写
     *
     * @param string $masterGroupId
     */
    public function setMasterGroupId(string $masterGroupId)
    {
        $this->set("MasterGroupId", $masterGroupId);
    }
    /**
     * EnableIpV6: 是否创建使用ipv6 资源， 默认为false， 或者不填， 创建ipv6为true
     *
     * @return boolean|null
     */
    public function getEnableIpV6()
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
    public function setSubnetId(string $subnetId)
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
    public function setVPCId(string $vpcId)
    {
        $this->set("VPCId", $vpcId);
    }
    /**
     * CouponId: 代金券ID
     *
     * @return string|null
     */
    public function getCouponId()
    {
        return $this->get("CouponId");
    }

    /**
     * CouponId: 代金券ID
     *
     * @param string $couponId
     */
    public function setCouponId(string $couponId)
    {
        $this->set("CouponId", $couponId);
    }
}
