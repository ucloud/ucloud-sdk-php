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
namespace UCloud\Sandbox\Models;

use UCloud\Core\Response\Response;

class SiteResource extends Response
{
    

    /**
     * CPU: CPU核心
     *
     * @return integer|null
     */
    public function getCPU()
    {
        return $this->get("CPU");
    }

    /**
     * CPU: CPU核心
     *
     * @param int $cpu
     */
    public function setCPU($cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * MemoryMB: 内存占用MB
     *
     * @return integer|null
     */
    public function getMemoryMB()
    {
        return $this->get("MemoryMB");
    }

    /**
     * MemoryMB: 内存占用MB
     *
     * @param int $memoryMB
     */
    public function setMemoryMB($memoryMB)
    {
        $this->set("MemoryMB", $memoryMB);
    }
}
