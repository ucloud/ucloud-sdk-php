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

class GpuMonitorInfo extends Response
{
    

    /**
     * GpuUsageRate: GPU卡使用率
     *
     * @return string|null
     */
    public function getGpuUsageRate()
    {
        return $this->get("GpuUsageRate");
    }

    /**
     * GpuUsageRate: GPU卡使用率
     *
     * @param string $gpuUsageRate
     */
    public function setGpuUsageRate($gpuUsageRate)
    {
        $this->set("GpuUsageRate", $gpuUsageRate);
    }

    /**
     * MemoryUsageRate: GPU显存使用率
     *
     * @return string|null
     */
    public function getMemoryUsageRate()
    {
        return $this->get("MemoryUsageRate");
    }

    /**
     * MemoryUsageRate: GPU显存使用率
     *
     * @param string $memoryUsageRate
     */
    public function setMemoryUsageRate($memoryUsageRate)
    {
        $this->set("MemoryUsageRate", $memoryUsageRate);
    }

    /**
     * GPU: GPU卡名称
     *
     * @return string|null
     */
    public function getGPU()
    {
        return $this->get("GPU");
    }

    /**
     * GPU: GPU卡名称
     *
     * @param string $gpu
     */
    public function setGPU($gpu)
    {
        $this->set("GPU", $gpu);
    }
}
