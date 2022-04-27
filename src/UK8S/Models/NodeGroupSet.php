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
namespace UCloud\UK8S\Models;

use UCloud\Core\Response\Response;

class NodeGroupSet extends Response
{
    

    /**
     * NodeGroupId: 节点池ID
     *
     * @return string|null
     */
    public function getNodeGroupId(): string
    {
        return $this->get("NodeGroupId");
    }

    /**
     * NodeGroupId: 节点池ID
     *
     * @param string $nodeGroupId
     */
    public function setNodeGroupId(string $nodeGroupId)
    {
        $this->set("NodeGroupId", $nodeGroupId);
    }

    /**
     * NodeGroupName: 节点池名字
     *
     * @return string|null
     */
    public function getNodeGroupName(): string
    {
        return $this->get("NodeGroupName");
    }

    /**
     * NodeGroupName: 节点池名字
     *
     * @param string $nodeGroupName
     */
    public function setNodeGroupName(string $nodeGroupName)
    {
        $this->set("NodeGroupName", $nodeGroupName);
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
     * MachineType: 机型
     *
     * @return string|null
     */
    public function getMachineType(): string
    {
        return $this->get("MachineType");
    }

    /**
     * MachineType: 机型
     *
     * @param string $machineType
     */
    public function setMachineType(string $machineType)
    {
        $this->set("MachineType", $machineType);
    }

    /**
     * MinimalCpuPlatform: cpu平台
     *
     * @return string|null
     */
    public function getMinimalCpuPlatform(): string
    {
        return $this->get("MinimalCpuPlatform");
    }

    /**
     * MinimalCpuPlatform: cpu平台
     *
     * @param string $minimalCpuPlatform
     */
    public function setMinimalCpuPlatform(string $minimalCpuPlatform)
    {
        $this->set("MinimalCpuPlatform", $minimalCpuPlatform);
    }

    /**
     * CPU: 虚拟CPU核数
     *
     * @return integer|null
     */
    public function getCPU(): int
    {
        return $this->get("CPU");
    }

    /**
     * CPU: 虚拟CPU核数
     *
     * @param int $cpu
     */
    public function setCPU(int $cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * Mem: 内存大小
     *
     * @return integer|null
     */
    public function getMem(): int
    {
        return $this->get("Mem");
    }

    /**
     * Mem: 内存大小
     *
     * @param int $mem
     */
    public function setMem(int $mem)
    {
        $this->set("Mem", $mem);
    }

    /**
     * GpuType: GPU类型
     *
     * @return string|null
     */
    public function getGpuType(): string
    {
        return $this->get("GpuType");
    }

    /**
     * GpuType: GPU类型
     *
     * @param string $gpuType
     */
    public function setGpuType(string $gpuType)
    {
        $this->set("GpuType", $gpuType);
    }

    /**
     * GPU: GPU卡核心数
     *
     * @return integer|null
     */
    public function getGPU(): int
    {
        return $this->get("GPU");
    }

    /**
     * GPU: GPU卡核心数
     *
     * @param int $gpu
     */
    public function setGPU(int $gpu)
    {
        $this->set("GPU", $gpu);
    }

    /**
     * BootDiskType: 系统盘类型
     *
     * @return string|null
     */
    public function getBootDiskType(): string
    {
        return $this->get("BootDiskType");
    }

    /**
     * BootDiskType: 系统盘类型
     *
     * @param string $bootDiskType
     */
    public function setBootDiskType(string $bootDiskType)
    {
        $this->set("BootDiskType", $bootDiskType);
    }

    /**
     * DataDiskSize: 数据盘大小
     *
     * @return integer|null
     */
    public function getDataDiskSize(): int
    {
        return $this->get("DataDiskSize");
    }

    /**
     * DataDiskSize: 数据盘大小
     *
     * @param int $dataDiskSize
     */
    public function setDataDiskSize(int $dataDiskSize)
    {
        $this->set("DataDiskSize", $dataDiskSize);
    }

    /**
     * DataDiskType: 数据盘类型
     *
     * @return string|null
     */
    public function getDataDiskType(): string
    {
        return $this->get("DataDiskType");
    }

    /**
     * DataDiskType: 数据盘类型
     *
     * @param string $dataDiskType
     */
    public function setDataDiskType(string $dataDiskType)
    {
        $this->set("DataDiskType", $dataDiskType);
    }

    /**
     * Tag: 业务组
     *
     * @return string|null
     */
    public function getTag(): string
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
     * ChargeType: 付费方式
     *
     * @return string|null
     */
    public function getChargeType(): string
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 付费方式
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * NodeList: 节点id列表
     *
     * @return string[]|null
     */
    public function getNodeList(): array
    {
        return $this->get("NodeList");
    }

    /**
     * NodeList: 节点id列表
     *
     * @param string[] $nodeList
     */
    public function setNodeList(array $nodeList)
    {
        $this->set("NodeList", $nodeList);
    }
}
