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

namespace UCloud\UPHost\Models;

use UCloud\Core\Response\Response;

use UCloud\UPHost\Models\DescribePHostResponse;
use UCloud\UPHost\Models\PHostCPUSet;
use UCloud\UPHost\Models\PHostIPSet;
use UCloud\UPHost\Models\PHostDescDiskSet;

class PHostSet extends Response
{

    /**
     * Zone: 可用区，参见 [可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区，参见 [可用区列表](../summary/regionlist.html)
     *
     * @param string $zone
     */
    public function setZone(string $zone)
    {
        $this->set("Zone", $zone);
    }
    /**
     * PHostId: PHost资源ID
     *
     * @return string|null
     */
    public function getPHostId()
    {
        return $this->get("PHostId");
    }

    /**
     * PHostId: PHost资源ID
     *
     * @param string $pHostId
     */
    public function setPHostId(string $pHostId)
    {
        $this->set("PHostId", $pHostId);
    }
    /**
     * SN: 物理机序列号
     *
     * @return string|null
     */
    public function getSN()
    {
        return $this->get("SN");
    }

    /**
     * SN: 物理机序列号
     *
     * @param string $sn
     */
    public function setSN(string $sn)
    {
        $this->set("SN", $sn);
    }
    /**
     * PMStatus: 物理云主机状态。枚举值：\\ > 初始化:Initializing; \\ > 启动中：Starting； \\ > 运行中：Running；\\ > 关机中：Stopping； \\ > 安装失败：InstallFailed； \\ > 重启中：Rebooting；\\ > 关机：Stopped； \\ > 迁移中(裸金属云盘)：Migrating
     *
     * @return string|null
     */
    public function getPMStatus()
    {
        return $this->get("PMStatus");
    }

    /**
     * PMStatus: 物理云主机状态。枚举值：\\ > 初始化:Initializing; \\ > 启动中：Starting； \\ > 运行中：Running；\\ > 关机中：Stopping； \\ > 安装失败：InstallFailed； \\ > 重启中：Rebooting；\\ > 关机：Stopped； \\ > 迁移中(裸金属云盘)：Migrating
     *
     * @param string $pmStatus
     */
    public function setPMStatus(string $pmStatus)
    {
        $this->set("PMStatus", $pmStatus);
    }
    /**
     * Name: 物理机名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 物理机名称
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->set("Name", $name);
    }
    /**
     * Remark: 物理机备注
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 物理机备注
     *
     * @param string $remark
     */
    public function setRemark(string $remark)
    {
        $this->set("Remark", $remark);
    }
    /**
     * Tag: 业务组
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组
     *
     * @param string $tag
     */
    public function setTag(string $tag)
    {
        $this->set("Tag", $tag);
    }
    /**
     * ImageName: 镜像名称
     *
     * @return string|null
     */
    public function getImageName()
    {
        return $this->get("ImageName");
    }

    /**
     * ImageName: 镜像名称
     *
     * @param string $imageName
     */
    public function setImageName(string $imageName)
    {
        $this->set("ImageName", $imageName);
    }
    /**
     * OSname: 操作系统名称
     *
     * @return string|null
     */
    public function getOSname()
    {
        return $this->get("OSname");
    }

    /**
     * OSname: 操作系统名称
     *
     * @param string $oSname
     */
    public function setOSname(string $oSname)
    {
        $this->set("OSname", $oSname);
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
    public function setCreateTime(int $createTime)
    {
        $this->set("CreateTime", $createTime);
    }
    /**
     * ExpireTime: 到期时间
     *
     * @return integer|null
     */
    public function getExpireTime()
    {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: 到期时间
     *
     * @param int $expireTime
     */
    public function setExpireTime(int $expireTime)
    {
        $this->set("ExpireTime", $expireTime);
    }
    /**
     * ChargeType: 计费模式，枚举值为： Year，按年付费； Month，按月付费；默认为月付
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费模式，枚举值为： Year，按年付费； Month，按月付费；默认为月付
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }
    /**
     * PowerState: 电源状态，on 或 off
     *
     * @return string|null
     */
    public function getPowerState()
    {
        return $this->get("PowerState");
    }

    /**
     * PowerState: 电源状态，on 或 off
     *
     * @param string $powerState
     */
    public function setPowerState(string $powerState)
    {
        $this->set("PowerState", $powerState);
    }
    /**
     * PHostType: 物理机类型，参见DescribePHostMachineType返回值
     *
     * @return string|null
     */
    public function getPHostType()
    {
        return $this->get("PHostType");
    }

    /**
     * PHostType: 物理机类型，参见DescribePHostMachineType返回值
     *
     * @param string $pHostType
     */
    public function setPHostType(string $pHostType)
    {
        $this->set("PHostType", $pHostType);
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
    public function setMemory(int $memory)
    {
        $this->set("Memory", $memory);
    }
    /**
     * CPUSet: CPU信息，见 PHostCPUSet
     *
     * @return PHostCPUSetModel|null
     */
    public function getCPUSet()
    {
        return new PHostCPUSetModel($this->get("CPUSet"));
    }

    /**
     * CPUSet: CPU信息，见 PHostCPUSet
     *
     * @param PHostCPUSetModel $cpuSet
     */
    public function setCPUSet(PHostCPUSetModel $cpuSet)
    {
        $this->set("CPUSet", $cpuSet->getAll());
    }
    /**
     * DiskSet: 磁盘信息，见 PHostDescDiskSet
     *
     * @return PHostDescDiskSetModel[]|null
     */
    public function getDiskSet()
    {
        $items = $this->get("DiskSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new PHostDescDiskSetModel($item));
        }
        return $result;
    }

    /**
     * DiskSet: 磁盘信息，见 PHostDescDiskSet
     *
     * @param PHostDescDiskSetModel[] $diskSet
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
     * IPSet: IP信息，见 PHostIPSet
     *
     * @return PHostIPSetModel[]|null
     */
    public function getIPSet()
    {
        $items = $this->get("IPSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new PHostIPSetModel($item));
        }
        return $result;
    }

    /**
     * IPSet: IP信息，见 PHostIPSet
     *
     * @param PHostIPSetModel[] $ipSet
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
     * Cluster: 网络环境。枚举值：千兆：1G ，万兆：10G
     *
     * @return string|null
     */
    public function getCluster()
    {
        return $this->get("Cluster");
    }

    /**
     * Cluster: 网络环境。枚举值：千兆：1G ，万兆：10G
     *
     * @param string $cluster
     */
    public function setCluster(string $cluster)
    {
        $this->set("Cluster", $cluster);
    }
    /**
     * AutoRenew: 自动续费
     *
     * @return string|null
     */
    public function getAutoRenew()
    {
        return $this->get("AutoRenew");
    }

    /**
     * AutoRenew: 自动续费
     *
     * @param string $autoRenew
     */
    public function setAutoRenew(string $autoRenew)
    {
        $this->set("AutoRenew", $autoRenew);
    }
    /**
     * IsSupportKVM: 是否支持紧急登录
     *
     * @return string|null
     */
    public function getIsSupportKVM()
    {
        return $this->get("IsSupportKVM");
    }

    /**
     * IsSupportKVM: 是否支持紧急登录
     *
     * @param string $isSupportKVM
     */
    public function setIsSupportKVM(string $isSupportKVM)
    {
        $this->set("IsSupportKVM", $isSupportKVM);
    }
    /**
     * OSType: 操作系统类型
     *
     * @return string|null
     */
    public function getOSType()
    {
        return $this->get("OSType");
    }

    /**
     * OSType: 操作系统类型
     *
     * @param string $osType
     */
    public function setOSType(string $osType)
    {
        $this->set("OSType", $osType);
    }
    /**
     * Components: 组件信息（暂不支持）
     *
     * @return string|null
     */
    public function getComponents()
    {
        return $this->get("Components");
    }

    /**
     * Components: 组件信息（暂不支持）
     *
     * @param string $components
     */
    public function setComponents(string $components)
    {
        $this->set("Components", $components);
    }
    /**
     * RaidSupported: 是否支持Raid。枚举值：Yes：支持；No：不支持。
     *
     * @return string|null
     */
    public function getRaidSupported()
    {
        return $this->get("RaidSupported");
    }

    /**
     * RaidSupported: 是否支持Raid。枚举值：Yes：支持；No：不支持。
     *
     * @param string $raidSupported
     */
    public function setRaidSupported(string $raidSupported)
    {
        $this->set("RaidSupported", $raidSupported);
    }
    /**
     * PhostClass: 物理云产品类型，枚举值：LocalDisk=>代表传统本地盘机型， CloudDisk=>云盘裸金属机型
     *
     * @return string|null
     */
    public function getPhostClass()
    {
        return $this->get("PhostClass");
    }

    /**
     * PhostClass: 物理云产品类型，枚举值：LocalDisk=>代表传统本地盘机型， CloudDisk=>云盘裸金属机型
     *
     * @param string $phostClass
     */
    public function setPhostClass(string $phostClass)
    {
        $this->set("PhostClass", $phostClass);
    }
}
