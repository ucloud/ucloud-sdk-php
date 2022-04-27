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

class PHostCloudMachineTypeSet extends Response
{
    

    /**
     * Type: 物理云主机机型别名，全网唯一。
     *
     * @return string|null
     */
    public function getType(): string
    {
        return $this->get("Type");
    }

    /**
     * Type: 物理云主机机型别名，全网唯一。
     *
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->set("Type", $type);
    }

    /**
     * CPU: CPU信息
     *
     * @return PHostCPUSet|null
     */
    public function getCPU(): PHostCPUSet
    {
        return new PHostCPUSet($this->get("CPU"));
    }

    /**
     * CPU: CPU信息
     *
     * @param PHostCPUSet $cpu
     */
    public function setCPU(PHostCPUSet $cpu)
    {
        $this->set("CPU", $cpu->getAll());
    }

    /**
     * Memory: 内存大小，单位MB
     *
     * @return integer|null
     */
    public function getMemory(): int
    {
        return $this->get("Memory");
    }

    /**
     * Memory: 内存大小，单位MB
     *
     * @param int $memory
     */
    public function setMemory(int $memory)
    {
        $this->set("Memory", $memory);
    }

    /**
     * Components: 其他组件信息
     *
     * @return PHostComponentSet|null
     */
    public function getComponents(): PHostComponentSet
    {
        return new PHostComponentSet($this->get("Components"));
    }

    /**
     * Components: 其他组件信息
     *
     * @param PHostComponentSet $components
     */
    public function setComponents(PHostComponentSet $components)
    {
        $this->set("Components", $components->getAll());
    }

    /**
     * Clusters: 集群库存信息
     *
     * @return PHostClusterSet[]|null
     */
    public function getClusters(): array
    {
        $items = $this->get("Clusters") ?? [];
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
}
