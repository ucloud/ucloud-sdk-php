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
namespace UCloud\UK8S\Models;

use UCloud\Core\Response\Response;

class InstanceTypeMachineSizeCollection extends Response
{
    

    /**
     * Cpu: CPU 核数
     *
     * @return integer|null
     */
    public function getCpu()
    {
        return $this->get("Cpu");
    }

    /**
     * Cpu: CPU 核数
     *
     * @param int $cpu
     */
    public function setCpu($cpu)
    {
        $this->set("Cpu", $cpu);
    }

    /**
     * Memory: 可用内存容量列表
     *
     * @return int[]|null
     */
    public function getMemory()
    {
        return $this->get("Memory");
    }

    /**
     * Memory: 可用内存容量列表
     *
     * @param int[] $memory
     */
    public function setMemory(array $memory)
    {
        $this->set("Memory", $memory);
    }

    /**
     * MinimalCpuPlatform: 最低 CPU 平台列表
     *
     * @return string[]|null
     */
    public function getMinimalCpuPlatform()
    {
        return $this->get("MinimalCpuPlatform");
    }

    /**
     * MinimalCpuPlatform: 最低 CPU 平台列表
     *
     * @param string[] $minimalCpuPlatform
     */
    public function setMinimalCpuPlatform(array $minimalCpuPlatform)
    {
        $this->set("MinimalCpuPlatform", $minimalCpuPlatform);
    }
}
