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

class Collection extends Response
{
    

    /**
     * Cpu: CPU规格
     *
     * @return int|null
     */
    public function getCpu()
    {
        return $this->get("Cpu");
    }

    /**
     * Cpu: CPU规格
     *
     * @param int $cpu
     */
    public function setCpu($cpu)
    {
        $this->set("Cpu", $cpu);
    }

    /**
     * Memory: 内存规格
     *
     * @return int[]|null
     */
    public function getMemory()
    {
        return $this->get("Memory");
    }

    /**
     * Memory: 内存规格
     *
     * @param int[] $memory
     */
    public function setMemory(array $memory)
    {
        $this->set("Memory", $memory);
    }

    /**
     * MinimalCpuPlatform: CPU和内存规格只能在列出来的CPU平台支持
     *
     * @return string[]|null
     */
    public function getMinimalCpuPlatform()
    {
        return $this->get("MinimalCpuPlatform");
    }

    /**
     * MinimalCpuPlatform: CPU和内存规格只能在列出来的CPU平台支持
     *
     * @param string[] $minimalCpuPlatform
     */
    public function setMinimalCpuPlatform(array $minimalCpuPlatform)
    {
        $this->set("MinimalCpuPlatform", $minimalCpuPlatform);
    }


}
