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
namespace UCloud\UDB\Apis;

use UCloud\Core\Request\Request;

class CreateUDBInstanceByRecoveryRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUDBInstanceByRecovery"]);
        $this->markRequired("Region");
        $this->markRequired("Name");
        $this->markRequired("SrcDBId");
        $this->markRequired("RecoveryTime");
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
     * SrcDBId: 源实例的Id
     *
     * @return string|null
     */
    public function getSrcDBId()
    {
        return $this->get("SrcDBId");
    }

    /**
     * SrcDBId: 源实例的Id
     *
     * @param string $srcDBId
     */
    public function setSrcDBId($srcDBId)
    {
        $this->set("SrcDBId", $srcDBId);
    }

    /**
     * RecoveryTime: 恢复到某个时间点的时间戳(UTC时间格式，默认单位秒)
     *
     * @return integer|null
     */
    public function getRecoveryTime()
    {
        return $this->get("RecoveryTime");
    }

    /**
     * RecoveryTime: 恢复到某个时间点的时间戳(UTC时间格式，默认单位秒)
     *
     * @param int $recoveryTime
     */
    public function setRecoveryTime($recoveryTime)
    {
        $this->set("RecoveryTime", $recoveryTime);
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
     * UseSSD: 指定是否是否使用SSD，默认使用主库的配置
     *
     * @return boolean|null
     */
    public function getUseSSD()
    {
        return $this->get("UseSSD");
    }

    /**
     * UseSSD: 指定是否是否使用SSD，默认使用主库的配置
     *
     * @param boolean $useSSD
     */
    public function setUseSSD($useSSD)
    {
        $this->set("UseSSD", $useSSD);
    }

    /**
     * UDBCId: 专区的Id
     *
     * @return string|null
     */
    public function getUDBCId()
    {
        return $this->get("UDBCId");
    }

    /**
     * UDBCId: 专区的Id
     *
     * @param string $udbcId
     */
    public function setUDBCId($udbcId)
    {
        $this->set("UDBCId", $udbcId);
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
    public function setEnableIpV6($enableIpV6)
    {
        $this->set("EnableIpV6", $enableIpV6);
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
