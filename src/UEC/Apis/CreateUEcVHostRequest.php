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
namespace UCloud\UEC\Apis;

use UCloud\Core\Request\Request;

class CreateUEcVHostRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUEcVHost"]);
        $this->markRequired("IdcId");
        $this->markRequired("CpuCore");
        $this->markRequired("MemSize");
        $this->markRequired("DiskSize");
        $this->markRequired("ImageId");
        $this->markRequired("NetLimit");
    }

    

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * IdcId: 机房id
     *
     * @return string|null
     */
    public function getIdcId(): string
    {
        return $this->get("IdcId");
    }

    /**
     * IdcId: 机房id
     *
     * @param string $idcId
     */
    public function setIdcId(string $idcId)
    {
        $this->set("IdcId", $idcId);
    }

    /**
     * CpuCore: cpu核心数
     *
     * @return integer|null
     */
    public function getCpuCore(): int
    {
        return $this->get("CpuCore");
    }

    /**
     * CpuCore: cpu核心数
     *
     * @param int $cpuCore
     */
    public function setCpuCore(int $cpuCore)
    {
        $this->set("CpuCore", $cpuCore);
    }

    /**
     * MemSize: 内存大小，单位GB
     *
     * @return integer|null
     */
    public function getMemSize(): int
    {
        return $this->get("MemSize");
    }

    /**
     * MemSize: 内存大小，单位GB
     *
     * @param int $memSize
     */
    public function setMemSize(int $memSize)
    {
        $this->set("MemSize", $memSize);
    }

    /**
     * DiskSize: 数据盘大小，单位GB
     *
     * @return integer|null
     */
    public function getDiskSize(): int
    {
        return $this->get("DiskSize");
    }

    /**
     * DiskSize: 数据盘大小，单位GB
     *
     * @param int $diskSize
     */
    public function setDiskSize(int $diskSize)
    {
        $this->set("DiskSize", $diskSize);
    }

    /**
     * ImageId: 镜像ID
     *
     * @return string|null
     */
    public function getImageId(): string
    {
        return $this->get("ImageId");
    }

    /**
     * ImageId: 镜像ID
     *
     * @param string $imageId
     */
    public function setImageId(string $imageId)
    {
        $this->set("ImageId", $imageId);
    }

    /**
     * NetLimit: 节点带宽限制，单位Mbs
     *
     * @return integer|null
     */
    public function getNetLimit(): int
    {
        return $this->get("NetLimit");
    }

    /**
     * NetLimit: 节点带宽限制，单位Mbs
     *
     * @param int $netLimit
     */
    public function setNetLimit(int $netLimit)
    {
        $this->set("NetLimit", $netLimit);
    }

    /**
     * NodeName: 节点名称
     *
     * @return string|null
     */
    public function getNodeName(): string
    {
        return $this->get("NodeName");
    }

    /**
     * NodeName: 节点名称
     *
     * @param string $nodeName
     */
    public function setNodeName(string $nodeName)
    {
        $this->set("NodeName", $nodeName);
    }

    /**
     * SysDiskSize: 系统盘大小，单位GB， 默认20GB
     *
     * @return integer|null
     */
    public function getSysDiskSize(): int
    {
        return $this->get("SysDiskSize");
    }

    /**
     * SysDiskSize: 系统盘大小，单位GB， 默认20GB
     *
     * @param int $sysDiskSize
     */
    public function setSysDiskSize(int $sysDiskSize)
    {
        $this->set("SysDiskSize", $sysDiskSize);
    }

    /**
     * AccountName: 账户名，默认root
     *
     * @return string|null
     */
    public function getAccountName(): string
    {
        return $this->get("AccountName");
    }

    /**
     * AccountName: 账户名，默认root
     *
     * @param string $accountName
     */
    public function setAccountName(string $accountName)
    {
        $this->set("AccountName", $accountName);
    }

    /**
     * PassWord: 密码
     *
     * @return string|null
     */
    public function getPassWord(): string
    {
        return $this->get("PassWord");
    }

    /**
     * PassWord: 密码
     *
     * @param string $passWord
     */
    public function setPassWord(string $passWord)
    {
        $this->set("PassWord", $passWord);
    }

    /**
     * NodeCount: 创建节点数量，默认1
     *
     * @return integer|null
     */
    public function getNodeCount(): int
    {
        return $this->get("NodeCount");
    }

    /**
     * NodeCount: 创建节点数量，默认1
     *
     * @param int $nodeCount
     */
    public function setNodeCount(int $nodeCount)
    {
        $this->set("NodeCount", $nodeCount);
    }

    /**
     * ChargeType: 付费方式，1按时，2按月，3按年，默认2
     *
     * @return integer|null
     */
    public function getChargeType(): int
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 付费方式，1按时，2按月，3按年，默认2
     *
     * @param int $chargeType
     */
    public function setChargeType(int $chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * ChargeQuantity: 月数或者年数，0计费到月底， 默认0
     *
     * @return integer|null
     */
    public function getChargeQuantity(): int
    {
        return $this->get("ChargeQuantity");
    }

    /**
     * ChargeQuantity: 月数或者年数，0计费到月底， 默认0
     *
     * @param int $chargeQuantity
     */
    public function setChargeQuantity(int $chargeQuantity)
    {
        $this->set("ChargeQuantity", $chargeQuantity);
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
     * ProductType: 产品类型：normal（标准型），hf（高频型）
     *
     * @return string|null
     */
    public function getProductType(): string
    {
        return $this->get("ProductType");
    }

    /**
     * ProductType: 产品类型：normal（标准型），hf（高频型）
     *
     * @param string $productType
     */
    public function setProductType(string $productType)
    {
        $this->set("ProductType", $productType);
    }

    /**
     * FirewallId: 外网防护墙规则组，默认
     *
     * @return string|null
     */
    public function getFirewallId(): string
    {
        return $this->get("FirewallId");
    }

    /**
     * FirewallId: 外网防护墙规则组，默认
     *
     * @param string $firewallId
     */
    public function setFirewallId(string $firewallId)
    {
        $this->set("FirewallId", $firewallId);
    }

    /**
     * Isp: 运营商（1-电信，2-联通，4移动）
     *
     * @return int[]|null
     */
    public function getIsp(): array
    {
        return $this->get("Isp");
    }

    /**
     * Isp: 运营商（1-电信，2-联通，4移动）
     *
     * @param int[] $isp
     */
    public function setIsp(array $isp)
    {
        $this->set("Isp", $isp);
    }

    /**
     * IsNeedOuterIp: （已废弃）是否需要外网ip（yes-是，no-否）
     *
     * @return string|null
     */
    public function getIsNeedOuterIp(): string
    {
        return $this->get("IsNeedOuterIp");
    }

    /**
     * IsNeedOuterIp: （已废弃）是否需要外网ip（yes-是，no-否）
     *
     * @param string $isNeedOuterIp
     */
    public function setIsNeedOuterIp(string $isNeedOuterIp)
    {
        $this->set("IsNeedOuterIp", $isNeedOuterIp);
    }
}
