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

class PHostMachineTypeSet extends Response
{
    

    /**
     * Type: 物理云主机机型别名，全网唯一。
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 物理云主机机型别名，全网唯一。
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * CPU: CPU信息
     *
     * @return PHostCPUSet|null
     */
    public function getCPU()
    {
        return new PHostCPUSet($this->get("CPU"));
    }

    /**
     * CPU: CPU信息
     *
     * @param PHostCPUSet $cpu
     */
    public function setCPU(array $cpu)
    {
        $this->set("CPU", $cpu->getAll());
    }

    /**
     * Memory: 内存大小，单位MB
     *
     * @return integer|null
     */
    public function getMemory()
    {
        return $this->get("Memory");
    }

    /**
     * Memory: 内存大小，单位MB
     *
     * @param int $memory
     */
    public function setMemory($memory)
    {
        $this->set("Memory", $memory);
    }

    /**
     * Disks: 磁盘信息
     *
     * @return PHostDiskSet[]|null
     */
    public function getDisks()
    {
        $items = $this->get("Disks");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new PHostDiskSet($item));
        }
        return $result;
    }

    /**
     * Disks: 磁盘信息
     *
     * @param PHostDiskSet[] $disks
     */
    public function setDisks(array $disks)
    {
        $result = [];
        foreach ($disks as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Components: 其他组件信息
     *
     * @return PHostComponentSet|null
     */
    public function getComponents()
    {
        return new PHostComponentSet($this->get("Components"));
    }

    /**
     * Components: 其他组件信息
     *
     * @param PHostComponentSet $components
     */
    public function setComponents(array $components)
    {
        $this->set("Components", $components->getAll());
    }

    /**
     * Clusters: 集群库存信息
     *
     * @return PHostClusterSet[]|null
     */
    public function getClusters()
    {
        $items = $this->get("Clusters");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new PHostClusterSet($item));
        }
        return $result;
    }

    /**
     * Clusters: 集群库存信息
     *
     * @param PHostClusterSet[] $clusters
     */
    public function setClusters(array $clusters)
    {
        $result = [];
        foreach ($clusters as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * RaidSupported: 是否支持Raid。枚举值：支持：YES；不支持：NO
     *
     * @return string|null
     */
    public function getRaidSupported()
    {
        return $this->get("RaidSupported");
    }

    /**
     * RaidSupported: 是否支持Raid。枚举值：支持：YES；不支持：NO
     *
     * @param string $raidSupported
     */
    public function setRaidSupported($raidSupported)
    {
        $this->set("RaidSupported", $raidSupported);
    }
}
