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

class WithoutGpuSpec extends Response
{
    

    /**
     * Cpu: cpu
     *
     * @return integer|null
     */
    public function getCpu()
    {
        return $this->get("Cpu");
    }

    /**
     * Cpu: cpu
     *
     * @param int $cpu
     */
    public function setCpu($cpu)
    {
        $this->set("Cpu", $cpu);
    }

    /**
     * Memory: 内存
     *
     * @return integer|null
     */
    public function getMemory()
    {
        return $this->get("Memory");
    }

    /**
     * Memory: 内存
     *
     * @param int $memory
     */
    public function setMemory($memory)
    {
        $this->set("Memory", $memory);
    }

    /**
     * Gpu: gpu
     *
     * @return integer|null
     */
    public function getGpu()
    {
        return $this->get("Gpu");
    }

    /**
     * Gpu: gpu
     *
     * @param int $gpu
     */
    public function setGpu($gpu)
    {
        $this->set("Gpu", $gpu);
    }
}
