<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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
namespace UCloud\UEC\Models;

use UCloud\Core\Response\Response;

class MetricisDataSet extends Response
{
    

    /**
     * CPUUtilization: cpu利用率（详情参考MonitorInfo）
     *
     * @return MonitorInfo[]|null
     */
    public function getCPUUtilization()
    {
        $items = $this->get("CPUUtilization");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new MonitorInfo($item));
        }
        return $result;
    }

    /**
     * CPUUtilization: cpu利用率（详情参考MonitorInfo）
     *
     * @param MonitorInfo[] $cpuUtilization
     */
    public function setCPUUtilization(array $cpuUtilization)
    {
        $result = [];
        foreach ($cpuUtilization as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * MemUtilization: 内存使用率（详情参考MonitorInfo）
     *
     * @return MonitorInfo[]|null
     */
    public function getMemUtilization()
    {
        $items = $this->get("MemUtilization");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new MonitorInfo($item));
        }
        return $result;
    }

    /**
     * MemUtilization: 内存使用率（详情参考MonitorInfo）
     *
     * @param MonitorInfo[] $memUtilization
     */
    public function setMemUtilization(array $memUtilization)
    {
        $result = [];
        foreach ($memUtilization as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * NetPacketOut: 网卡出包数（详情参考MonitorInfo）
     *
     * @return MonitorInfo[]|null
     */
    public function getNetPacketOut()
    {
        $items = $this->get("NetPacketOut");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new MonitorInfo($item));
        }
        return $result;
    }

    /**
     * NetPacketOut: 网卡出包数（详情参考MonitorInfo）
     *
     * @param MonitorInfo[] $netPacketOut
     */
    public function setNetPacketOut(array $netPacketOut)
    {
        $result = [];
        foreach ($netPacketOut as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * NetPacketIn: 网卡入包数（详情参考MonitorInfo）
     *
     * @return MonitorInfo[]|null
     */
    public function getNetPacketIn()
    {
        $items = $this->get("NetPacketIn");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new MonitorInfo($item));
        }
        return $result;
    }

    /**
     * NetPacketIn: 网卡入包数（详情参考MonitorInfo）
     *
     * @param MonitorInfo[] $netPacketIn
     */
    public function setNetPacketIn(array $netPacketIn)
    {
        $result = [];
        foreach ($netPacketIn as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * NICOut: 网卡出带宽（详情参考MonitorInfo）
     *
     * @return MonitorInfo[]|null
     */
    public function getNICOut()
    {
        $items = $this->get("NICOut");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new MonitorInfo($item));
        }
        return $result;
    }

    /**
     * NICOut: 网卡出带宽（详情参考MonitorInfo）
     *
     * @param MonitorInfo[] $nicOut
     */
    public function setNICOut(array $nicOut)
    {
        $result = [];
        foreach ($nicOut as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * NICIn: 网卡入带宽（详情参考MonitorInfo）
     *
     * @return MonitorInfo[]|null
     */
    public function getNICIn()
    {
        $items = $this->get("NICIn");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new MonitorInfo($item));
        }
        return $result;
    }

    /**
     * NICIn: 网卡入带宽（详情参考MonitorInfo）
     *
     * @param MonitorInfo[] $nicIn
     */
    public function setNICIn(array $nicIn)
    {
        $result = [];
        foreach ($nicIn as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
