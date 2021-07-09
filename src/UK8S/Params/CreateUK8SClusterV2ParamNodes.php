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
namespace UCloud\UK8S\Params;

use UCloud\Core\Request\Request;

class CreateUK8SClusterV2ParamNodes extends Request
{
    

    /**
     * Zone: 一组Nodes节点所属可用区，可创建多组Nodes节点，如一组是CPU Nodes节点，另一组是GPU Nodes节点。参见 [可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getZone(): string
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 一组Nodes节点所属可用区，可创建多组Nodes节点，如一组是CPU Nodes节点，另一组是GPU Nodes节点。参见 [可用区列表](../summary/regionlist.html)
     *
     * @param string $zone
     */
    public function setZone(string $zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * MachineType: 一组Nodes节点云主机机型，如["N", "C", "O", "OS"]，具体请参照云主机机型。
     *
     * @return string|null
     */
    public function getMachineType(): string
    {
        return $this->get("MachineType");
    }

    /**
     * MachineType: 一组Nodes节点云主机机型，如["N", "C", "O", "OS"]，具体请参照云主机机型。
     *
     * @param string $machineType
     */
    public function setMachineType(string $machineType)
    {
        $this->set("MachineType", $machineType);
    }

    /**
     * CPU: 一组Node节点的虚拟CPU核数。单位：核，范围：[2, 64]，可选范围参考控制台。
     *
     * @return integer|null
     */
    public function getCPU(): int
    {
        return $this->get("CPU");
    }

    /**
     * CPU: 一组Node节点的虚拟CPU核数。单位：核，范围：[2, 64]，可选范围参考控制台。
     *
     * @param int $cpu
     */
    public function setCPU(int $cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * Mem: 一组Node节点的内存大小。单位：MB,范围 ：[4096, 262144]，取值为1024的倍数，可选范围参考控制台。
     *
     * @return integer|null
     */
    public function getMem(): int
    {
        return $this->get("Mem");
    }

    /**
     * Mem: 一组Node节点的内存大小。单位：MB,范围 ：[4096, 262144]，取值为1024的倍数，可选范围参考控制台。
     *
     * @param int $mem
     */
    public function setMem(int $mem)
    {
        $this->set("Mem", $mem);
    }

    /**
     * Count: 一组Node节点的数量，范围：[1,10]。
     *
     * @return integer|null
     */
    public function getCount(): int
    {
        return $this->get("Count");
    }

    /**
     * Count: 一组Node节点的数量，范围：[1,10]。
     *
     * @param int $count
     */
    public function setCount(int $count)
    {
        $this->set("Count", $count);
    }

    /**
     * IsolationGroup: 一组Node节点的隔离组Id，归属于同一隔离组的虚拟机节点将落在不同的物理机上，单个隔离组最多只能容纳8个节点。参见DescribeIsolationGroup。
     *
     * @return string|null
     */
    public function getIsolationGroup(): string
    {
        return $this->get("IsolationGroup");
    }

    /**
     * IsolationGroup: 一组Node节点的隔离组Id，归属于同一隔离组的虚拟机节点将落在不同的物理机上，单个隔离组最多只能容纳8个节点。参见DescribeIsolationGroup。
     *
     * @param string $isolationGroup
     */
    public function setIsolationGroup(string $isolationGroup)
    {
        $this->set("IsolationGroup", $isolationGroup);
    }

    /**
     * MaxPods: Node节点上可运行最大节点数，默认为110。
     *
     * @return integer|null
     */
    public function getMaxPods(): int
    {
        return $this->get("MaxPods");
    }

    /**
     * MaxPods: Node节点上可运行最大节点数，默认为110。
     *
     * @param int $maxPods
     */
    public function setMaxPods(int $maxPods)
    {
        $this->set("MaxPods", $maxPods);
    }

    /**
     * Labels: Node节点标签，形式为key=value，多组Labels用”,“隔开,最多支持五组。
     *
     * @return string|null
     */
    public function getLabels(): string
    {
        return $this->get("Labels");
    }

    /**
     * Labels: Node节点标签，形式为key=value，多组Labels用”,“隔开,最多支持五组。
     *
     * @param string $labels
     */
    public function setLabels(string $labels)
    {
        $this->set("Labels", $labels);
    }

    /**
     * BootDiskType: 一组Node节点的系统盘类型，请参考[[api:uhost-api:disk_type|磁盘类型]]。默认为SSD云盘
     *
     * @return string|null
     */
    public function getBootDiskType(): string
    {
        return $this->get("BootDiskType");
    }

    /**
     * BootDiskType: 一组Node节点的系统盘类型，请参考[[api:uhost-api:disk_type|磁盘类型]]。默认为SSD云盘
     *
     * @param string $bootDiskType
     */
    public function setBootDiskType(string $bootDiskType)
    {
        $this->set("BootDiskType", $bootDiskType);
    }

    /**
     * DataDiskType: 一组Node节点的数据盘类型，请参考[[api:uhost-api:disk_type|磁盘类型]]。默认为SSD云盘
     *
     * @return string|null
     */
    public function getDataDiskType(): string
    {
        return $this->get("DataDiskType");
    }

    /**
     * DataDiskType: 一组Node节点的数据盘类型，请参考[[api:uhost-api:disk_type|磁盘类型]]。默认为SSD云盘
     *
     * @param string $dataDiskType
     */
    public function setDataDiskType(string $dataDiskType)
    {
        $this->set("DataDiskType", $dataDiskType);
    }

    /**
     * MinmalCpuPlatform: Node节点的最低cpu平台，不选则随机。枚举值["Intel/Auto", "Intel/IvyBridge", "Intel/Haswell", "Intel/Broadwell", "Intel/Skylake", "Intel/Cascadelake"。
     *
     * @return string|null
     */
    public function getMinmalCpuPlatform(): string
    {
        return $this->get("MinmalCpuPlatform");
    }

    /**
     * MinmalCpuPlatform: Node节点的最低cpu平台，不选则随机。枚举值["Intel/Auto", "Intel/IvyBridge", "Intel/Haswell", "Intel/Broadwell", "Intel/Skylake", "Intel/Cascadelake"。
     *
     * @param string $minmalCpuPlatform
     */
    public function setMinmalCpuPlatform(string $minmalCpuPlatform)
    {
        $this->set("MinmalCpuPlatform", $minmalCpuPlatform);
    }

    /**
     * GpuType: 一组Node节点的GPU类型，枚举值["K80", "P40", "V100"]，最新值参考Console。
     *
     * @return string|null
     */
    public function getGpuType(): string
    {
        return $this->get("GpuType");
    }

    /**
     * GpuType: 一组Node节点的GPU类型，枚举值["K80", "P40", "V100"]，最新值参考Console。
     *
     * @param string $gpuType
     */
    public function setGpuType(string $gpuType)
    {
        $this->set("GpuType", $gpuType);
    }

    /**
     * GPU: 一组Node节点的GPU卡核心数，仅GPU机型支持此字段。
     *
     * @return integer|null
     */
    public function getGPU(): int
    {
        return $this->get("GPU");
    }

    /**
     * GPU: 一组Node节点的GPU卡核心数，仅GPU机型支持此字段。
     *
     * @param int $gpu
     */
    public function setGPU(int $gpu)
    {
        $this->set("GPU", $gpu);
    }

    /**
     * DataDiskSize: 数据磁盘大小，单位GB。默认0。范围 ：[20, 1000]
     *
     * @return integer|null
     */
    public function getDataDiskSize(): int
    {
        return $this->get("DataDiskSize");
    }

    /**
     * DataDiskSize: 数据磁盘大小，单位GB。默认0。范围 ：[20, 1000]
     *
     * @param int $dataDiskSize
     */
    public function setDataDiskSize(int $dataDiskSize)
    {
        $this->set("DataDiskSize", $dataDiskSize);
    }
}
