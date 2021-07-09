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

class CreateUDBSlaveRequest extends Request {
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUDBSlave"]);
        $this->markRequired("Region");
        $this->markRequired("SrcId");
        $this->markRequired("Name");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getRegion(): string {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @param string $region
     */
    public function setRegion(string $region) {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getZone(): string {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @param string $zone
     */
    public function setZone(string $zone) {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId(): string {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId) {
        $this->set("ProjectId", $projectId);
    }

    /**
     * SrcId: master实例的DBId,该值可以通过DescribeUDBInstance获取
     *
     * @return string|null
     */
    public function getSrcId(): string {
        return $this->get("SrcId");
    }

    /**
     * SrcId: master实例的DBId,该值可以通过DescribeUDBInstance获取
     *
     * @param string $srcId
     */
    public function setSrcId(string $srcId) {
        $this->set("SrcId", $srcId);
    }

    /**
     * Name: 实例名称，至少6位
     *
     * @return string|null
     */
    public function getName(): string {
        return $this->get("Name");
    }

    /**
     * Name: 实例名称，至少6位
     *
     * @param string $name
     */
    public function setName(string $name) {
        $this->set("Name", $name);
    }

    /**
     * Port: 端口号
     *
     * @return int|null
     */
    public function getPort(): int {
        return $this->get("Port");
    }

    /**
     * Port: 端口号
     *
     * @param int $port
     */
    public function setPort(int $port) {
        $this->set("Port", $port);
    }

    /**
     * UseSSD: 是否使用SSD，默认为true
     *
     * @return boolean|null
     */
    public function getUseSSD(): bool {
        return $this->get("UseSSD");
    }

    /**
     * UseSSD: 是否使用SSD，默认为true
     *
     * @param boolean $useSSD
     */
    public function setUseSSD(bool $useSSD) {
        $this->set("UseSSD", $useSSD);
    }

    /**
     * SSDType: SSD类型，可选值为"SATA"、"PCI-E"、“NVMe”，如果UseSSD为true ，则必选
     *
     * @return string|null
     */
    public function getSSDType(): string {
        return $this->get("SSDType");
    }

    /**
     * SSDType: SSD类型，可选值为"SATA"、"PCI-E"、“NVMe”，如果UseSSD为true ，则必选
     *
     * @param string $ssdType
     */
    public function setSSDType(string $ssdType) {
        $this->set("SSDType", $ssdType);
    }

    /**
     * IsLock: 是否锁主库，默认为true
     *
     * @return boolean|null
     */
    public function getIsLock(): bool {
        return $this->get("IsLock");
    }

    /**
     * IsLock: 是否锁主库，默认为true
     *
     * @param boolean $isLock
     */
    public function setIsLock(bool $isLock) {
        $this->set("IsLock", $isLock);
    }

    /**
     * InstanceMode: UDB实例部署模式，可选值如下：Normal: 普通单点实例HA: 高可用部署实例
     *
     * @return string|null
     */
    public function getInstanceMode(): string {
        return $this->get("InstanceMode");
    }

    /**
     * InstanceMode: UDB实例部署模式，可选值如下：Normal: 普通单点实例HA: 高可用部署实例
     *
     * @param string $instanceMode
     */
    public function setInstanceMode(string $instanceMode) {
        $this->set("InstanceMode", $instanceMode);
    }

    /**
     * MemoryLimit: 内存限制(MB)，目前支持以下几档 1000M/2000M/4000M/ 6000M/8000M/12000M/16000M/ 24000M/32000M/48000M/ 64000M/96000M/128000M/192000M/256000M/320000M
     *
     * @return int|null
     */
    public function getMemoryLimit(): int {
        return $this->get("MemoryLimit");
    }

    /**
     * MemoryLimit: 内存限制(MB)，目前支持以下几档 1000M/2000M/4000M/ 6000M/8000M/12000M/16000M/ 24000M/32000M/48000M/ 64000M/96000M/128000M/192000M/256000M/320000M
     *
     * @param int $memoryLimit
     */
    public function setMemoryLimit(int $memoryLimit) {
        $this->set("MemoryLimit", $memoryLimit);
    }

    /**
     * DiskSpace: 磁盘空间(GB), 暂时支持20G - 3000G（API支持，前端暂时只开放内存定制）
     *
     * @return int|null
     */
    public function getDiskSpace(): int {
        return $this->get("DiskSpace");
    }

    /**
     * DiskSpace: 磁盘空间(GB), 暂时支持20G - 3000G（API支持，前端暂时只开放内存定制）
     *
     * @param int $diskSpace
     */
    public function setDiskSpace(int $diskSpace) {
        $this->set("DiskSpace", $diskSpace);
    }

    /**
     * InstanceType: UDB实例类型：Normal、SATA_SSD、NVMe_SSD
     *
     * @return string|null
     */
    public function getInstanceType(): string {
        return $this->get("InstanceType");
    }

    /**
     * InstanceType: UDB实例类型：Normal、SATA_SSD、NVMe_SSD
     *
     * @param string $instanceType
     */
    public function setInstanceType(string $instanceType) {
        $this->set("InstanceType", $instanceType);
    }

    /**
     * SubnetId: 子网ID（如果不传用默认子网）
     *
     * @return string|null
     */
    public function getSubnetId(): string {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 子网ID（如果不传用默认子网）
     *
     * @param string $subnetId
     */
    public function setSubnetId(string $subnetId) {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * VPCId: VPCID（如果不传用默认的VPC）
     *
     * @return string|null
     */
    public function getVPCId(): string {
        return $this->get("VPCId");
    }

    /**
     * VPCId: VPCID（如果不传用默认的VPC）
     *
     * @param string $vpcId
     */
    public function setVPCId(string $vpcId) {
        $this->set("VPCId", $vpcId);
    }

    /**
     * ChargeType: Year， Month， Dynamic，Trial，默认和主库保持一致
     *
     * @return string|null
     */
    public function getChargeType(): string {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: Year， Month， Dynamic，Trial，默认和主库保持一致
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType) {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Quantity: 购买时长，默认默认和主库保持一致
     *
     * @return int|null
     */
    public function getQuantity(): int {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买时长，默认默认和主库保持一致
     *
     * @param int $quantity
     */
    public function setQuantity(int $quantity) {
        $this->set("Quantity", $quantity);
    }

    /**
     * ParamGroupId: DB实例使用的配置参数组id，默认和主库保持一致
     *
     * @return int|null
     */
    public function getParamGroupId(): int {
        return $this->get("ParamGroupId");
    }

    /**
     * ParamGroupId: DB实例使用的配置参数组id，默认和主库保持一致
     *
     * @param int $paramGroupId
     */
    public function setParamGroupId(int $paramGroupId) {
        $this->set("ParamGroupId", $paramGroupId);
    }

    /**
     * CouponId: 使用的代金券id
     *
     * @return string|null
     */
    public function getCouponId(): string {
        return $this->get("CouponId");
    }

    /**
     * CouponId: 使用的代金券id
     *
     * @param string $couponId
     */
    public function setCouponId(string $couponId) {
        $this->set("CouponId", $couponId);
    }


}
