<?php
/**
 * Copyright 2026 UCloud Technology Co., Ltd.
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
namespace UCloud\UHadoop\Models;

use UCloud\Core\Response\Response;

class InstanceType extends Response
{
    

    /**
     * NodeType: 机型名称
     *
     * @return string|null
     */
    public function getNodeType()
    {
        return $this->get("NodeType");
    }

    /**
     * NodeType: 机型名称
     *
     * @param string $nodeType
     */
    public function setNodeType($nodeType)
    {
        $this->set("NodeType", $nodeType);
    }

    /**
     * HostType: 机型种类，可选Outstanding(快杰机型)|General(普通机型)|BareMetal(裸金属机型)|GPU(GPU机型)四种类型
     *
     * @return string|null
     */
    public function getHostType()
    {
        return $this->get("HostType");
    }

    /**
     * HostType: 机型种类，可选Outstanding(快杰机型)|General(普通机型)|BareMetal(裸金属机型)|GPU(GPU机型)四种类型
     *
     * @param string $hostType
     */
    public function setHostType($hostType)
    {
        $this->set("HostType", $hostType);
    }

    /**
     * SuitableRole: 可用的节点类型，值为core|task|master之一
     *
     * @return string[]|null
     */
    public function getSuitableRole()
    {
        return $this->get("SuitableRole");
    }

    /**
     * SuitableRole: 可用的节点类型，值为core|task|master之一
     *
     * @param string[] $suitableRole
     */
    public function setSuitableRole(array $suitableRole)
    {
        $this->set("SuitableRole", $suitableRole);
    }

    /**
     * CPU: cpu大小
     *
     * @return string|null
     */
    public function getCPU()
    {
        return $this->get("CPU");
    }

    /**
     * CPU: cpu大小
     *
     * @param string $cpu
     */
    public function setCPU($cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * CPUToMemoryRatio: cpu内存比
     *
     * @return string|null
     */
    public function getCPUToMemoryRatio()
    {
        return $this->get("CPUToMemoryRatio");
    }

    /**
     * CPUToMemoryRatio: cpu内存比
     *
     * @param string $cpuToMemoryRatio
     */
    public function setCPUToMemoryRatio($cpuToMemoryRatio)
    {
        $this->set("CPUToMemoryRatio", $cpuToMemoryRatio);
    }

    /**
     * Memory: 内存大小
     *
     * @return string|null
     */
    public function getMemory()
    {
        return $this->get("Memory");
    }

    /**
     * Memory: 内存大小
     *
     * @param string $memory
     */
    public function setMemory($memory)
    {
        $this->set("Memory", $memory);
    }

    /**
     * DiskSet: 磁盘信息
     *
     * @return DiskSet[]|null
     */
    public function getDiskSet()
    {
        $items = $this->get("DiskSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new DiskSet($item));
        }
        return $result;
    }

    /**
     * DiskSet: 磁盘信息
     *
     * @param DiskSet[] $diskSet
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
     * IsUsable: 是否可用,该机型是否支持创建
     *
     * @return string|null
     */
    public function getIsUsable()
    {
        return $this->get("IsUsable");
    }

    /**
     * IsUsable: 是否可用,该机型是否支持创建
     *
     * @param string $isUsable
     */
    public function setIsUsable($isUsable)
    {
        $this->set("IsUsable", $isUsable);
    }

    /**
     * IsOpenSecgroup: 是否支持开启安全组
     *
     * @return string|null
     */
    public function getIsOpenSecgroup()
    {
        return $this->get("IsOpenSecgroup");
    }

    /**
     * IsOpenSecgroup: 是否支持开启安全组
     *
     * @param string $isOpenSecgroup
     */
    public function setIsOpenSecgroup($isOpenSecgroup)
    {
        $this->set("IsOpenSecgroup", $isOpenSecgroup);
    }

    /**
     * GpuType: GPU型号
     *
     * @return string|null
     */
    public function getGpuType()
    {
        return $this->get("GpuType");
    }

    /**
     * GpuType: GPU型号
     *
     * @param string $gpuType
     */
    public function setGpuType($gpuType)
    {
        $this->set("GpuType", $gpuType);
    }

    /**
     * GpuCount: GPU数量
     *
     * @return integer|null
     */
    public function getGpuCount()
    {
        return $this->get("GpuCount");
    }

    /**
     * GpuCount: GPU数量
     *
     * @param int $gpuCount
     */
    public function setGpuCount($gpuCount)
    {
        $this->set("GpuCount", $gpuCount);
    }
}
