<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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
namespace UCloud\UCompShare\Models;

use UCloud\Core\Response\Response;

class CompShareInstanceSet extends Response
{
    

    /**
     * Zone: 可用区
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * StopSchedulerTime: 计划关机时间
     *
     * @return integer|null
     */
    public function getStopSchedulerTime()
    {
        return $this->get("StopSchedulerTime");
    }

    /**
     * StopSchedulerTime: 计划关机时间
     *
     * @param int $stopSchedulerTime
     */
    public function setStopSchedulerTime($stopSchedulerTime)
    {
        $this->set("StopSchedulerTime", $stopSchedulerTime);
    }

    /**
     * UHostId: 实例Id
     *
     * @return string|null
     */
    public function getUHostId()
    {
        return $this->get("UHostId");
    }

    /**
     * UHostId: 实例Id
     *
     * @param string $uHostId
     */
    public function setUHostId($uHostId)
    {
        $this->set("UHostId", $uHostId);
    }

    /**
     * MachineType: 机型信息
     *
     * @return string|null
     */
    public function getMachineType()
    {
        return $this->get("MachineType");
    }

    /**
     * MachineType: 机型信息
     *
     * @param string $machineType
     */
    public function setMachineType($machineType)
    {
        $this->set("MachineType", $machineType);
    }

    /**
     * CpuPlatform: CPU平台。如"Intel/Auto"、"Amd/Auto"等等
     *
     * @return string|null
     */
    public function getCpuPlatform()
    {
        return $this->get("CpuPlatform");
    }

    /**
     * CpuPlatform: CPU平台。如"Intel/Auto"、"Amd/Auto"等等
     *
     * @param string $cpuPlatform
     */
    public function setCpuPlatform($cpuPlatform)
    {
        $this->set("CpuPlatform", $cpuPlatform);
    }

    /**
     * CompShareImageId: 镜像Id
     *
     * @return string|null
     */
    public function getCompShareImageId()
    {
        return $this->get("CompShareImageId");
    }

    /**
     * CompShareImageId: 镜像Id
     *
     * @param string $compShareImageId
     */
    public function setCompShareImageId($compShareImageId)
    {
        $this->set("CompShareImageId", $compShareImageId);
    }

    /**
     * CompShareImageName: 镜像名称
     *
     * @return string|null
     */
    public function getCompShareImageName()
    {
        return $this->get("CompShareImageName");
    }

    /**
     * CompShareImageName: 镜像名称
     *
     * @param string $compShareImageName
     */
    public function setCompShareImageName($compShareImageName)
    {
        $this->set("CompShareImageName", $compShareImageName);
    }

    /**
     * CompShareImageOwnerAlias: 镜像来源
     *
     * @return string|null
     */
    public function getCompShareImageOwnerAlias()
    {
        return $this->get("CompShareImageOwnerAlias");
    }

    /**
     * CompShareImageOwnerAlias: 镜像来源
     *
     * @param string $compShareImageOwnerAlias
     */
    public function setCompShareImageOwnerAlias($compShareImageOwnerAlias)
    {
        $this->set("CompShareImageOwnerAlias", $compShareImageOwnerAlias);
    }

    /**
     * CompShareImageBillId: 用于镜像计费的Id
     *
     * @return string|null
     */
    public function getCompShareImageBillId()
    {
        return $this->get("CompShareImageBillId");
    }

    /**
     * CompShareImageBillId: 用于镜像计费的Id
     *
     * @param string $compShareImageBillId
     */
    public function setCompShareImageBillId($compShareImageBillId)
    {
        $this->set("CompShareImageBillId", $compShareImageBillId);
    }

    /**
     * CompShareImageStatus: 镜像状态
     *
     * @return string|null
     */
    public function getCompShareImageStatus()
    {
        return $this->get("CompShareImageStatus");
    }

    /**
     * CompShareImageStatus: 镜像状态
     *
     * @param string $compShareImageStatus
     */
    public function setCompShareImageStatus($compShareImageStatus)
    {
        $this->set("CompShareImageStatus", $compShareImageStatus);
    }

    /**
     * CompShareImageType: 镜像类型- System 系统镜像- App 应用镜像- Custom 自制镜像- Community 社区镜像
     *
     * @return string|null
     */
    public function getCompShareImageType()
    {
        return $this->get("CompShareImageType");
    }

    /**
     * CompShareImageType: 镜像类型- System 系统镜像- App 应用镜像- Custom 自制镜像- Community 社区镜像
     *
     * @param string $compShareImageType
     */
    public function setCompShareImageType($compShareImageType)
    {
        $this->set("CompShareImageType", $compShareImageType);
    }

    /**
     * InstanceType: 实例类型。"UHost": 普通主机；"Container": 容器主机
     *
     * @return string|null
     */
    public function getInstanceType()
    {
        return $this->get("InstanceType");
    }

    /**
     * InstanceType: 实例类型。"UHost": 普通主机；"Container": 容器主机
     *
     * @param string $instanceType
     */
    public function setInstanceType($instanceType)
    {
        $this->set("InstanceType", $instanceType);
    }

    /**
     * Password: 主机密码。由Base64编码
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->get("Password");
    }

    /**
     * Password: 主机密码。由Base64编码
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->set("Password", $password);
    }

    /**
     * SshLoginCommand: SSH登录命令
     *
     * @return string|null
     */
    public function getSshLoginCommand()
    {
        return $this->get("SshLoginCommand");
    }

    /**
     * SshLoginCommand: SSH登录命令
     *
     * @param string $sshLoginCommand
     */
    public function setSshLoginCommand($sshLoginCommand)
    {
        $this->set("SshLoginCommand", $sshLoginCommand);
    }

    /**
     * Name: 实例名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 实例名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Tag: 实例业务组
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 实例业务组
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * Remark: 实例备注
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 实例备注
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * State: 实例状态，枚举值：\\ >初始化: Initializing; \\ >启动中: Starting; \\> 运行中: Running; \\> 关机中: Stopping; \\ >关机: Stopped \\ >安装失败: Install Fail; \\ >重启中: Rebooting; \\ >升级改配中: Resizing; \\ > 未知(空字符串，获取状态超时或出错)：
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 实例状态，枚举值：\\ >初始化: Initializing; \\ >启动中: Starting; \\> 运行中: Running; \\> 关机中: Stopping; \\ >关机: Stopped \\ >安装失败: Install Fail; \\ >重启中: Rebooting; \\ >升级改配中: Resizing; \\ > 未知(空字符串，获取状态超时或出错)：
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }

    /**
     * ChargeType: 计费模式，枚举值为： Year，按年付费； Month，按月付费； Dynamic，按时付费；Postpay，按需付费
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费模式，枚举值为： Year，按年付费； Month，按月付费； Dynamic，按时付费；Postpay，按需付费
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
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
    public function setCPU($cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * Memory: 内存大小，单位：MB
     *
     * @return integer|null
     */
    public function getMemory()
    {
        return $this->get("Memory");
    }

    /**
     * Memory: 内存大小，单位：MB
     *
     * @param int $memory
     */
    public function setMemory($memory)
    {
        $this->set("Memory", $memory);
    }

    /**
     * GpuType: GPU类型。如: "4090"
     *
     * @return string|null
     */
    public function getGpuType()
    {
        return $this->get("GpuType");
    }

    /**
     * GpuType: GPU类型。如: "4090"
     *
     * @param string $gpuType
     */
    public function setGpuType($gpuType)
    {
        $this->set("GpuType", $gpuType);
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
    public function setGPU($gpu)
    {
        $this->set("GPU", $gpu);
    }

    /**
     * GraphicsMemory: GPU显存信息
     *
     * @return GraphicsMemory|null
     */
    public function getGraphicsMemory()
    {
        return new GraphicsMemory($this->get("GraphicsMemory"));
    }

    /**
     * GraphicsMemory: GPU显存信息
     *
     * @param GraphicsMemory $graphicsMemory
     */
    public function setGraphicsMemory(array $graphicsMemory)
    {
        $this->set("GraphicsMemory", $graphicsMemory->getAll());
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
    public function setAutoRenew($autoRenew)
    {
        $this->set("AutoRenew", $autoRenew);
    }

    /**
     * IsExpire: 是否过期。Yes：已过期；No：未过期
     *
     * @return string|null
     */
    public function getIsExpire()
    {
        return $this->get("IsExpire");
    }

    /**
     * IsExpire: 是否过期。Yes：已过期；No：未过期
     *
     * @param string $isExpire
     */
    public function setIsExpire($isExpire)
    {
        $this->set("IsExpire", $isExpire);
    }

    /**
     * OsName: 虚机镜像的名称
     *
     * @return string|null
     */
    public function getOsName()
    {
        return $this->get("OsName");
    }

    /**
     * OsName: 虚机镜像的名称
     *
     * @param string $osName
     */
    public function setOsName($osName)
    {
        $this->set("OsName", $osName);
    }

    /**
     * OsType: 虚机镜像操作系统类型。"Linux"\"Windows"
     *
     * @return string|null
     */
    public function getOsType()
    {
        return $this->get("OsType");
    }

    /**
     * OsType: 虚机镜像操作系统类型。"Linux"\"Windows"
     *
     * @param string $osType
     */
    public function setOsType($osType)
    {
        $this->set("OsType", $osType);
    }

    /**
     * TotalDiskSpace: 总的数据盘存储空间
     *
     * @return integer|null
     */
    public function getTotalDiskSpace()
    {
        return $this->get("TotalDiskSpace");
    }

    /**
     * TotalDiskSpace: 总的数据盘存储空间
     *
     * @param int $totalDiskSpace
     */
    public function setTotalDiskSpace($totalDiskSpace)
    {
        $this->set("TotalDiskSpace", $totalDiskSpace);
    }

    /**
     * CpuArch: CPU架构。"x86_64"/"i386"等
     *
     * @return string|null
     */
    public function getCpuArch()
    {
        return $this->get("CpuArch");
    }

    /**
     * CpuArch: CPU架构。"x86_64"/"i386"等
     *
     * @param string $cpuArch
     */
    public function setCpuArch($cpuArch)
    {
        $this->set("CpuArch", $cpuArch);
    }

    /**
     * DiskSet: 详情见UHostDiskSet
     *
     * @return UHostDiskSet[]|null
     */
    public function getDiskSet()
    {
        $items = $this->get("DiskSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UHostDiskSet($item));
        }
        return $result;
    }

    /**
     * DiskSet: 详情见UHostDiskSet
     *
     * @param UHostDiskSet[] $diskSet
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
     * IPSet: 详情见UHostIPSet
     *
     * @return UHostIPSet[]|null
     */
    public function getIPSet()
    {
        $items = $this->get("IPSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UHostIPSet($item));
        }
        return $result;
    }

    /**
     * IPSet: 详情见UHostIPSet
     *
     * @param UHostIPSet[] $ipSet
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
     * Softwares: 软件地址
     *
     * @return SoftwareAddr[]|null
     */
    public function getSoftwares()
    {
        $items = $this->get("Softwares");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new SoftwareAddr($item));
        }
        return $result;
    }

    /**
     * Softwares: 软件地址
     *
     * @param SoftwareAddr[] $softwares
     */
    public function setSoftwares(array $softwares)
    {
        $result = [];
        foreach ($softwares as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * InstancePrice: 主机价格
     *
     * @return float|null
     */
    public function getInstancePrice()
    {
        return $this->get("InstancePrice");
    }

    /**
     * InstancePrice: 主机价格
     *
     * @param float $instancePrice
     */
    public function setInstancePrice($instancePrice)
    {
        $this->set("InstancePrice", $instancePrice);
    }

    /**
     * CompShareImagePrice: 镜像价格
     *
     * @return float|null
     */
    public function getCompShareImagePrice()
    {
        return $this->get("CompShareImagePrice");
    }

    /**
     * CompShareImagePrice: 镜像价格
     *
     * @param float $compShareImagePrice
     */
    public function setCompShareImagePrice($compShareImagePrice)
    {
        $this->set("CompShareImagePrice", $compShareImagePrice);
    }

    /**
     * ExpireTime: 过期时间
     *
     * @return integer|null
     */
    public function getExpireTime()
    {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: 过期时间
     *
     * @param int $expireTime
     */
    public function setExpireTime($expireTime)
    {
        $this->set("ExpireTime", $expireTime);
    }

    /**
     * CreateTime: 创建时间
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * SupportWithoutGpuStart: 此实例是否支持无卡开机
     *
     * @return boolean|null
     */
    public function getSupportWithoutGpuStart()
    {
        return $this->get("SupportWithoutGpuStart");
    }

    /**
     * SupportWithoutGpuStart: 此实例是否支持无卡开机
     *
     * @param boolean $supportWithoutGpuStart
     */
    public function setSupportWithoutGpuStart($supportWithoutGpuStart)
    {
        $this->set("SupportWithoutGpuStart", $supportWithoutGpuStart);
    }

    /**
     * WithoutGpuSpec: 无卡配置规格，详情见：WithoutGpuSpecInfo
     *
     * @return WithoutGpuSpec|null
     */
    public function getWithoutGpuSpec()
    {
        return new WithoutGpuSpec($this->get("WithoutGpuSpec"));
    }

    /**
     * WithoutGpuSpec: 无卡配置规格，详情见：WithoutGpuSpecInfo
     *
     * @param WithoutGpuSpec $withoutGpuSpec
     */
    public function setWithoutGpuSpec(array $withoutGpuSpec)
    {
        $this->set("WithoutGpuSpec", $withoutGpuSpec->getAll());
    }

    /**
     * StopTime: 定时关机时间
     *
     * @return integer|null
     */
    public function getStopTime()
    {
        return $this->get("StopTime");
    }

    /**
     * StopTime: 定时关机时间
     *
     * @param int $stopTime
     */
    public function setStopTime($stopTime)
    {
        $this->set("StopTime", $stopTime);
    }

    /**
     * UpdateTime: 虚机状态更新时间
     *
     * @return integer|null
     */
    public function getUpdateTime()
    {
        return $this->get("UpdateTime");
    }

    /**
     * UpdateTime: 虚机状态更新时间
     *
     * @param int $updateTime
     */
    public function setUpdateTime($updateTime)
    {
        $this->set("UpdateTime", $updateTime);
    }

    /**
     * ReleaseTime: 释放时间（关机时候返回）
     *
     * @return integer|null
     */
    public function getReleaseTime()
    {
        return $this->get("ReleaseTime");
    }

    /**
     * ReleaseTime: 释放时间（关机时候返回）
     *
     * @param int $releaseTime
     */
    public function setReleaseTime($releaseTime)
    {
        $this->set("ReleaseTime", $releaseTime);
    }

    /**
     * DiskPriceInfo: 磁盘价格信息，详见:DiskPriceInfo
     *
     * @return DiskPriceInfo[]|null
     */
    public function getDiskPriceInfo()
    {
        $items = $this->get("DiskPriceInfo");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new DiskPriceInfo($item));
        }
        return $result;
    }

    /**
     * DiskPriceInfo: 磁盘价格信息，详见:DiskPriceInfo
     *
     * @param DiskPriceInfo[] $diskPriceInfo
     */
    public function setDiskPriceInfo(array $diskPriceInfo)
    {
        $result = [];
        foreach ($diskPriceInfo as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * PostPayPowerOffBillingResource: 后付费关机计费信息列表，详见：详见:DiskPriceInfo
     *
     * @return DiskPriceInfo[]|null
     */
    public function getPostPayPowerOffBillingResource()
    {
        $items = $this->get("PostPayPowerOffBillingResource");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new DiskPriceInfo($item));
        }
        return $result;
    }

    /**
     * PostPayPowerOffBillingResource: 后付费关机计费信息列表，详见：详见:DiskPriceInfo
     *
     * @param DiskPriceInfo[] $postPayPowerOffBillingResource
     */
    public function setPostPayPowerOffBillingResource(array $postPayPowerOffBillingResource)
    {
        $result = [];
        foreach ($postPayPowerOffBillingResource as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * MonitorMessages: 监控信息，详见：MonitorMessage
     *
     * @return MonitorMessage|null
     */
    public function getMonitorMessages()
    {
        return new MonitorMessage($this->get("MonitorMessages"));
    }

    /**
     * MonitorMessages: 监控信息，详见：MonitorMessage
     *
     * @param MonitorMessage $monitorMessages
     */
    public function setMonitorMessages(array $monitorMessages)
    {
        $this->set("MonitorMessages", $monitorMessages->getAll());
    }
}
