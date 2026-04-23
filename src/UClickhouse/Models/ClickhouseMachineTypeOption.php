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
namespace UCloud\UClickhouse\Models;

use UCloud\Core\Response\Response;

class ClickhouseMachineTypeOption extends Response
{
    

    /**
     * ClickhouseMachineTypeId: Clickhouse机型ID
     *
     * @return string|null
     */
    public function getClickhouseMachineTypeId()
    {
        return $this->get("ClickhouseMachineTypeId");
    }

    /**
     * ClickhouseMachineTypeId: Clickhouse机型ID
     *
     * @param string $clickhouseMachineTypeId
     */
    public function setClickhouseMachineTypeId($clickhouseMachineTypeId)
    {
        $this->set("ClickhouseMachineTypeId", $clickhouseMachineTypeId);
    }

    /**
     * MachineType: 机型
     *
     * @return string|null
     */
    public function getMachineType()
    {
        return $this->get("MachineType");
    }

    /**
     * MachineType: 机型
     *
     * @param string $machineType
     */
    public function setMachineType($machineType)
    {
        $this->set("MachineType", $machineType);
    }

    /**
     * CPU: CPU大小
     *
     * @return integer|null
     */
    public function getCPU()
    {
        return $this->get("CPU");
    }

    /**
     * CPU: CPU大小
     *
     * @param int $cpu
     */
    public function setCPU($cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * Memory: 内存大小，GB
     *
     * @return integer|null
     */
    public function getMemory()
    {
        return $this->get("Memory");
    }

    /**
     * Memory: 内存大小，GB
     *
     * @param int $memory
     */
    public function setMemory($memory)
    {
        $this->set("Memory", $memory);
    }

    /**
     * DataDisks: 数据盘列表
     *
     * @return ClickhouseDataDisk[]|null
     */
    public function getDataDisks()
    {
        $items = $this->get("DataDisks");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ClickhouseDataDisk($item));
        }
        return $result;
    }

    /**
     * DataDisks: 数据盘列表
     *
     * @param ClickhouseDataDisk[] $dataDisks
     */
    public function setDataDisks(array $dataDisks)
    {
        $result = [];
        foreach ($dataDisks as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * NodeCounts: 允许创建的节点个数
     *
     * @return int[]|null
     */
    public function getNodeCounts()
    {
        return $this->get("NodeCounts");
    }

    /**
     * NodeCounts: 允许创建的节点个数
     *
     * @param int[] $nodeCounts
     */
    public function setNodeCounts(array $nodeCounts)
    {
        $this->set("NodeCounts", $nodeCounts);
    }
}
