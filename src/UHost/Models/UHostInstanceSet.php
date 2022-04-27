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

namespace UCloud\UHost\Models;

use UCloud\Core\Response\Response;

use UCloud\UHost\Models\UHostKeyPair;
use UCloud\UHost\Models\DescribeUHostLiteResponse;
use UCloud\UHost\Models\UHostDiskSet;
use UCloud\UHost\Models\UHostIPSet;
use UCloud\UHost\Models\DescribeUHostInstanceResponse;

class UHostInstanceSet extends Response
{

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
     * IPv6Feature: true:有ipv6特性；false，没有ipv6特性
     *
     * @return boolean|null
     */
    public function getIPv6Feature()
    {
        return $this->get("IPv6Feature");
    }

    /**
     * IPv6Feature: true:有ipv6特性；false，没有ipv6特性
     *
     * @param boolean $iPv6Feature
     */
    public function setIPv6Feature(bool $iPv6Feature)
    {
        $this->set("IPv6Feature", $iPv6Feature);
    }
    /**
     * UHostId: UHost实例ID
     *
     * @return string|null
     */
    public function getUHostId()
    {
        return $this->get("UHostId");
    }

    /**
     * UHostId: UHost实例ID
     *
     * @param string $uHostId
     */
    public function setUHostId(string $uHostId)
    {
        $this->set("UHostId", $uHostId);
    }
    /**
     * UHostType: 【建议不再使用】云主机机型（旧）。参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     *
     * @return string|null
     */
    public function getUHostType()
    {
        return $this->get("UHostType");
    }

    /**
     * UHostType: 【建议不再使用】云主机机型（旧）。参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     *
     * @param string $uHostType
     */
    public function setUHostType(string $uHostType)
    {
        $this->set("UHostType", $uHostType);
    }
    /**
     * MachineType: 云主机机型（新）。参考[[api:uhost-api:uhost_type#主机概念20版本|云主机机型说明]]。
     *
     * @return string|null
     */
    public function getMachineType()
    {
        return $this->get("MachineType");
    }

    /**
     * MachineType: 云主机机型（新）。参考[[api:uhost-api:uhost_type#主机概念20版本|云主机机型说明]]。
     *
     * @param string $machineType
     */
    public function setMachineType(string $machineType)
    {
        $this->set("MachineType", $machineType);
    }
    /**
     * CpuPlatform: 云主机CPU平台。参考[[api:uhost-api:uhost_type#主机概念20版本|云主机机型说明]]。
     *
     * @return string|null
     */
    public function getCpuPlatform()
    {
        return $this->get("CpuPlatform");
    }

    /**
     * CpuPlatform: 云主机CPU平台。参考[[api:uhost-api:uhost_type#主机概念20版本|云主机机型说明]]。
     *
     * @param string $cpuPlatform
     */
    public function setCpuPlatform(string $cpuPlatform)
    {
        $this->set("CpuPlatform", $cpuPlatform);
    }
    /**
     * StorageType: 【建议不再使用】主机磁盘类型。 枚举值为：\\ > LocalDisk，本地磁盘; \\ > UDisk 云盘。\\只要有一块磁盘为本地盘，即返回LocalDisk。
     *
     * @return string|null
     */
    public function getStorageType()
    {
        return $this->get("StorageType");
    }

    /**
     * StorageType: 【建议不再使用】主机磁盘类型。 枚举值为：\\ > LocalDisk，本地磁盘; \\ > UDisk 云盘。\\只要有一块磁盘为本地盘，即返回LocalDisk。
     *
     * @param string $storageType
     */
    public function setStorageType(string $storageType)
    {
        $this->set("StorageType", $storageType);
    }
    /**
     * ImageId: 【建议不再使用】主机的系统盘ID。
     *
     * @return string|null
     */
    public function getImageId()
    {
        return $this->get("ImageId");
    }

    /**
     * ImageId: 【建议不再使用】主机的系统盘ID。
     *
     * @param string $imageId
     */
    public function setImageId(string $imageId)
    {
        $this->set("ImageId", $imageId);
    }
    /**
     * BasicImageId: 基础镜像ID（指当前自定义镜像的来源镜像）
     *
     * @return string|null
     */
    public function getBasicImageId()
    {
        return $this->get("BasicImageId");
    }

    /**
     * BasicImageId: 基础镜像ID（指当前自定义镜像的来源镜像）
     *
     * @param string $basicImageId
     */
    public function setBasicImageId(string $basicImageId)
    {
        $this->set("BasicImageId", $basicImageId);
    }
    /**
     * BasicImageName: 基础镜像名称（指当前自定义镜像的来源镜像）
     *
     * @return string|null
     */
    public function getBasicImageName()
    {
        return $this->get("BasicImageName");
    }

    /**
     * BasicImageName: 基础镜像名称（指当前自定义镜像的来源镜像）
     *
     * @param string $basicImageName
     */
    public function setBasicImageName(string $basicImageName)
    {
        $this->set("BasicImageName", $basicImageName);
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
     * Remark: 备注
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 备注
     *
     * @param string $remark
     */
    public function setRemark(string $remark)
    {
        $this->set("Remark", $remark);
    }
    /**
     * Name: UHost实例名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: UHost实例名称
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->set("Name", $name);
    }
    /**
     * State: 实例状态，枚举值：\\ >初始化: Initializing; \\ >启动中: Starting; \\> 运行中: Running; \\> 关机中: Stopping; \\ >关机: Stopped \\ >安装失败: Install Fail; \\ >重启中: Rebooting; \\ > 未知(空字符串，获取状态超时或出错)：""
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 实例状态，枚举值：\\ >初始化: Initializing; \\ >启动中: Starting; \\> 运行中: Running; \\> 关机中: Stopping; \\ >关机: Stopped \\ >安装失败: Install Fail; \\ >重启中: Rebooting; \\ > 未知(空字符串，获取状态超时或出错)：""
     *
     * @param string $state
     */
    public function setState(string $state)
    {
        $this->set("State", $state);
    }
    /**
     * CreateTime: 创建时间，格式为Unix时间戳
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间，格式为Unix时间戳
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime)
    {
        $this->set("CreateTime", $createTime);
    }
    /**
     * ChargeType: 计费模式，枚举值为： Year，按年付费； Month，按月付费； Dynamic，按需付费（需开启权限）；Preemptive 为抢占式实例；
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费模式，枚举值为： Year，按年付费； Month，按月付费； Dynamic，按需付费（需开启权限）；Preemptive 为抢占式实例；
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }
    /**
     * ExpireTime: 到期时间，格式为Unix时间戳
     *
     * @return integer|null
     */
    public function getExpireTime()
    {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: 到期时间，格式为Unix时间戳
     *
     * @param int $expireTime
     */
    public function setExpireTime(int $expireTime)
    {
        $this->set("ExpireTime", $expireTime);
    }
    /**
     * CPU: 虚拟CPU核数，单位: 个
     *
     * @return integer|null
     */
    public function getCPU()
    {
        return $this->get("CPU");
    }

    /**
     * CPU: 虚拟CPU核数，单位: 个
     *
     * @param int $cpu
     */
    public function setCPU(int $cpu)
    {
        $this->set("CPU", $cpu);
    }
    /**
     * Memory: 内存大小，单位: MB
     *
     * @return integer|null
     */
    public function getMemory()
    {
        return $this->get("Memory");
    }

    /**
     * Memory: 内存大小，单位: MB
     *
     * @param int $memory
     */
    public function setMemory(int $memory)
    {
        $this->set("Memory", $memory);
    }
    /**
     * AutoRenew: 是否自动续费，自动续费：“Yes”，不自动续费：“No”
     *
     * @return string|null
     */
    public function getAutoRenew()
    {
        return $this->get("AutoRenew");
    }

    /**
     * AutoRenew: 是否自动续费，自动续费：“Yes”，不自动续费：“No”
     *
     * @param string $autoRenew
     */
    public function setAutoRenew(string $autoRenew)
    {
        $this->set("AutoRenew", $autoRenew);
    }
    /**
     * DiskSet: 磁盘信息见 UHostDiskSet
     *
     * @return UHostDiskSetModel[]|null
     */
    public function getDiskSet()
    {
        $items = $this->get("DiskSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UHostDiskSetModel($item));
        }
        return $result;
    }

    /**
     * DiskSet: 磁盘信息见 UHostDiskSet
     *
     * @param UHostDiskSetModel[] $diskSet
     */
    public function setDiskSet(array $diskSet)
    {
        $result = [];
        foreach ($diskSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
    /**
     * IPSet: 详细信息见 UHostIPSet
     *
     * @return UHostIPSetModel[]|null
     */
    public function getIPSet()
    {
        $items = $this->get("IPSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UHostIPSetModel($item));
        }
        return $result;
    }

    /**
     * IPSet: 详细信息见 UHostIPSet
     *
     * @param UHostIPSetModel[] $ipSet
     */
    public function setIPSet(array $ipSet)
    {
        $result = [];
        foreach ($ipSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
    /**
     * NetCapability: 网络增强。Normal: 无；Super： 网络增强1.0； Ultra: 网络增强2.0
     *
     * @return string|null
     */
    public function getNetCapability()
    {
        return $this->get("NetCapability");
    }

    /**
     * NetCapability: 网络增强。Normal: 无；Super： 网络增强1.0； Ultra: 网络增强2.0
     *
     * @param string $netCapability
     */
    public function setNetCapability(string $netCapability)
    {
        $this->set("NetCapability", $netCapability);
    }
    /**
     * NetworkState: 【建议不再使用】网络状态。 连接：Connected， 断开：NotConnected
     *
     * @return string|null
     */
    public function getNetworkState()
    {
        return $this->get("NetworkState");
    }

    /**
     * NetworkState: 【建议不再使用】网络状态。 连接：Connected， 断开：NotConnected
     *
     * @param string $networkState
     */
    public function setNetworkState(string $networkState)
    {
        $this->set("NetworkState", $networkState);
    }
    /**
     * TimemachineFeature: 【建议不再使用】数据方舟模式。枚举值：\\ > Yes: 开启方舟； \\ > no，未开启方舟
     *
     * @return string|null
     */
    public function getTimemachineFeature()
    {
        return $this->get("TimemachineFeature");
    }

    /**
     * TimemachineFeature: 【建议不再使用】数据方舟模式。枚举值：\\ > Yes: 开启方舟； \\ > no，未开启方舟
     *
     * @param string $timemachineFeature
     */
    public function setTimemachineFeature(string $timemachineFeature)
    {
        $this->set("TimemachineFeature", $timemachineFeature);
    }
    /**
     * HotplugFeature: true: 开启热升级； false，未开启热升级
     *
     * @return boolean|null
     */
    public function getHotplugFeature()
    {
        return $this->get("HotplugFeature");
    }

    /**
     * HotplugFeature: true: 开启热升级； false，未开启热升级
     *
     * @param boolean $hotplugFeature
     */
    public function setHotplugFeature(bool $hotplugFeature)
    {
        $this->set("HotplugFeature", $hotplugFeature);
    }
    /**
     * SubnetType: 【建议不再使用】仅北京A的云主机会返回此字段。基础网络模式：Default；子网模式：Private
     *
     * @return string|null
     */
    public function getSubnetType()
    {
        return $this->get("SubnetType");
    }

    /**
     * SubnetType: 【建议不再使用】仅北京A的云主机会返回此字段。基础网络模式：Default；子网模式：Private
     *
     * @param string $subnetType
     */
    public function setSubnetType(string $subnetType)
    {
        $this->set("SubnetType", $subnetType);
    }
    /**
     * OsName: 创建主机的最初来源镜像的操作系统名称（若直接通过基础镜像创建，此处返回和BasicImageName一致）
     *
     * @return string|null
     */
    public function getOsName()
    {
        return $this->get("OsName");
    }

    /**
     * OsName: 创建主机的最初来源镜像的操作系统名称（若直接通过基础镜像创建，此处返回和BasicImageName一致）
     *
     * @param string $osName
     */
    public function setOsName(string $osName)
    {
        $this->set("OsName", $osName);
    }
    /**
     * OsType: 操作系统类别。返回"Linux"或者"Windows"
     *
     * @return string|null
     */
    public function getOsType()
    {
        return $this->get("OsType");
    }

    /**
     * OsType: 操作系统类别。返回"Linux"或者"Windows"
     *
     * @param string $osType
     */
    public function setOsType(string $osType)
    {
        $this->set("OsType", $osType);
    }
    /**
     * HostType: 【建议不再使用】主机系列：N2，表示系列2；N1，表示系列1
     *
     * @return string|null
     */
    public function getHostType()
    {
        return $this->get("HostType");
    }

    /**
     * HostType: 【建议不再使用】主机系列：N2，表示系列2；N1，表示系列1
     *
     * @param string $hostType
     */
    public function setHostType(string $hostType)
    {
        $this->set("HostType", $hostType);
    }
    /**
     * LifeCycle: 主机的生命周期类型。目前仅支持Normal：普通；
     *
     * @return string|null
     */
    public function getLifeCycle()
    {
        return $this->get("LifeCycle");
    }

    /**
     * LifeCycle: 主机的生命周期类型。目前仅支持Normal：普通；
     *
     * @param string $lifeCycle
     */
    public function setLifeCycle(string $lifeCycle)
    {
        $this->set("LifeCycle", $lifeCycle);
    }
    /**
     * GPU: GPU个数
     *
     * @return integer|null
     */
    public function getGPU()
    {
        return $this->get("GPU");
    }

    /**
     * GPU: GPU个数
     *
     * @param int $gpu
     */
    public function setGPU(int $gpu)
    {
        $this->set("GPU", $gpu);
    }
    /**
     * BootDiskState: 系统盘状态 Normal表示初始化完成；Initializing表示在初始化。仍在初始化的系统盘无法制作镜像。
     *
     * @return string|null
     */
    public function getBootDiskState()
    {
        return $this->get("BootDiskState");
    }

    /**
     * BootDiskState: 系统盘状态 Normal表示初始化完成；Initializing表示在初始化。仍在初始化的系统盘无法制作镜像。
     *
     * @param string $bootDiskState
     */
    public function setBootDiskState(string $bootDiskState)
    {
        $this->set("BootDiskState", $bootDiskState);
    }
    /**
     * TotalDiskSpace: 总的数据盘存储空间。
     *
     * @return integer|null
     */
    public function getTotalDiskSpace()
    {
        return $this->get("TotalDiskSpace");
    }

    /**
     * TotalDiskSpace: 总的数据盘存储空间。
     *
     * @param int $totalDiskSpace
     */
    public function setTotalDiskSpace(int $totalDiskSpace)
    {
        $this->set("TotalDiskSpace", $totalDiskSpace);
    }
    /**
     * IsolationGroup: 隔离组id，不在隔离组则返回""
     *
     * @return string|null
     */
    public function getIsolationGroup()
    {
        return $this->get("IsolationGroup");
    }

    /**
     * IsolationGroup: 隔离组id，不在隔离组则返回""
     *
     * @param string $isolationGroup
     */
    public function setIsolationGroup(string $isolationGroup)
    {
        $this->set("IsolationGroup", $isolationGroup);
    }
    /**
     * CloudInitFeature: true，支持cloutinit方式初始化；false,不支持
     *
     * @return boolean|null
     */
    public function getCloudInitFeature()
    {
        return $this->get("CloudInitFeature");
    }

    /**
     * CloudInitFeature: true，支持cloutinit方式初始化；false,不支持
     *
     * @param boolean $cloudInitFeature
     */
    public function setCloudInitFeature(bool $cloudInitFeature)
    {
        $this->set("CloudInitFeature", $cloudInitFeature);
    }
    /**
     * RdmaClusterId: RDMA集群id，仅快杰云主机返回该值；其他类型云主机返回""。当云主机的此值与RSSD云盘的RdmaClusterId相同时，RSSD可以挂载到这台云主机。
     *
     * @return string|null
     */
    public function getRdmaClusterId()
    {
        return $this->get("RdmaClusterId");
    }

    /**
     * RdmaClusterId: RDMA集群id，仅快杰云主机返回该值；其他类型云主机返回""。当云主机的此值与RSSD云盘的RdmaClusterId相同时，RSSD可以挂载到这台云主机。
     *
     * @param string $rdmaClusterId
     */
    public function setRdmaClusterId(string $rdmaClusterId)
    {
        $this->set("RdmaClusterId", $rdmaClusterId);
    }
    /**
     * RestrictMode: 仅抢占式实例返回，LowSpeed为低速模式，PowerOff为关机模式
     *
     * @return string|null
     */
    public function getRestrictMode()
    {
        return $this->get("RestrictMode");
    }

    /**
     * RestrictMode: 仅抢占式实例返回，LowSpeed为低速模式，PowerOff为关机模式
     *
     * @param string $restrictMode
     */
    public function setRestrictMode(string $restrictMode)
    {
        $this->set("RestrictMode", $restrictMode);
    }
    /**
     * HpcFeature: true: 开启 hpc 系列功能；false: 未开启
     *
     * @return boolean|null
     */
    public function getHpcFeature()
    {
        return $this->get("HpcFeature");
    }

    /**
     * HpcFeature: true: 开启 hpc 系列功能；false: 未开启
     *
     * @param boolean $hpcFeature
     */
    public function setHpcFeature(bool $hpcFeature)
    {
        $this->set("HpcFeature", $hpcFeature);
    }
    /**
     * KeyPair: 密钥信息见 UHostKeyPair
     *
     * @return UHostKeyPairModel|null
     */
    public function getKeyPair()
    {
        return new UHostKeyPairModel($this->get("KeyPair"));
    }

    /**
     * KeyPair: 密钥信息见 UHostKeyPair
     *
     * @param UHostKeyPairModel $keyPair
     */
    public function setKeyPair(UHostKeyPairModel $keyPair)
    {
        $this->set("KeyPair", $keyPair->getAll());
    }
}
