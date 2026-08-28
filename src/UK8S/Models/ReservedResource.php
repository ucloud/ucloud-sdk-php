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

class ReservedResource extends Response
{
    

    /**
     * CPU: CPU
     *
     * @return string|null
     */
    public function getCPU()
    {
        return $this->get("CPU");
    }

    /**
     * CPU: CPU
     *
     * @param string $cpu
     */
    public function setCPU($cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * Memory: 内存
     *
     * @return string|null
     */
    public function getMemory()
    {
        return $this->get("Memory");
    }

    /**
     * Memory: 内存
     *
     * @param string $memory
     */
    public function setMemory($memory)
    {
        $this->set("Memory", $memory);
    }

    /**
     * EphemeralStorage: 存储
     *
     * @return string|null
     */
    public function getEphemeralStorage()
    {
        return $this->get("EphemeralStorage");
    }

    /**
     * EphemeralStorage: 存储
     *
     * @param string $ephemeralStorage
     */
    public function setEphemeralStorage($ephemeralStorage)
    {
        $this->set("EphemeralStorage", $ephemeralStorage);
    }

    /**
     * Pid: Pid
     *
     * @return string|null
     */
    public function getPid()
    {
        return $this->get("Pid");
    }

    /**
     * Pid: Pid
     *
     * @param string $pid
     */
    public function setPid($pid)
    {
        $this->set("Pid", $pid);
    }
}
