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

class MonitorMessage extends Response
{
    

    /**
     * CpuUsageRate: CPU使用率
     *
     * @return string|null
     */
    public function getCpuUsageRate()
    {
        return $this->get("CpuUsageRate");
    }

    /**
     * CpuUsageRate: CPU使用率
     *
     * @param string $cpuUsageRate
     */
    public function setCpuUsageRate($cpuUsageRate)
    {
        $this->set("CpuUsageRate", $cpuUsageRate);
    }

    /**
     * MemUsageRate: 内存使用率
     *
     * @return string|null
     */
    public function getMemUsageRate()
    {
        return $this->get("MemUsageRate");
    }

    /**
     * MemUsageRate: 内存使用率
     *
     * @param string $memUsageRate
     */
    public function setMemUsageRate($memUsageRate)
    {
        $this->set("MemUsageRate", $memUsageRate);
    }

    /**
     * GpuInfo: GPU卡监控信息
     *
     * @return GpuMonitorInfo[]|null
     */
    public function getGpuInfo()
    {
        $items = $this->get("GpuInfo");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new GpuMonitorInfo($item));
        }
        return $result;
    }

    /**
     * GpuInfo: GPU卡监控信息
     *
     * @param GpuMonitorInfo[] $gpuInfo
     */
    public function setGpuInfo(array $gpuInfo)
    {
        $result = [];
        foreach ($gpuInfo as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
