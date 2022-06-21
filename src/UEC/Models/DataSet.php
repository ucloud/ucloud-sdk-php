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
namespace UCloud\UEC\Models;

use UCloud\Core\Response\Response;

class DataSet extends Response
{
    

    /**
     * CPUUtilization: cpu使用率
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
     * CPUUtilization: cpu使用率
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
     * MemUtilization: 内存使用率
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
     * MemUtilization: 内存使用率
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
     * NICOut: 网卡出带宽
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
     * NICOut: 网卡出带宽
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
     * NICIn: 网卡入带宽
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
     * NICIn: 网卡入带宽
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

    /**
     * NetPacketOut: 网卡出包量
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
     * NetPacketOut: 网卡出包量
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
     * NetPacketIn: 网卡入包量
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
     * NetPacketIn: 网卡入包量
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
     * IORead: 磁盘读取量
     *
     * @return MonitorInfo[]|null
     */
    public function getIORead()
    {
        $items = $this->get("IORead");
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
     * IORead: 磁盘读取量
     *
     * @param MonitorInfo[] $ioRead
     */
    public function setIORead(array $ioRead)
    {
        $result = [];
        foreach ($ioRead as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * IOWrite: 磁盘写入量
     *
     * @return MonitorInfo[]|null
     */
    public function getIOWrite()
    {
        $items = $this->get("IOWrite");
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
     * IOWrite: 磁盘写入量
     *
     * @param MonitorInfo[] $ioWrite
     */
    public function setIOWrite(array $ioWrite)
    {
        $result = [];
        foreach ($ioWrite as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * DiskReadOps: 磁盘读取次数
     *
     * @return MonitorInfo[]|null
     */
    public function getDiskReadOps()
    {
        $items = $this->get("DiskReadOps");
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
     * DiskReadOps: 磁盘读取次数
     *
     * @param MonitorInfo[] $diskReadOps
     */
    public function setDiskReadOps(array $diskReadOps)
    {
        $result = [];
        foreach ($diskReadOps as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * DiskWriteOps: 磁盘写入次数
     *
     * @return MonitorInfo[]|null
     */
    public function getDiskWriteOps()
    {
        $items = $this->get("DiskWriteOps");
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
     * DiskWriteOps: 磁盘写入次数
     *
     * @param MonitorInfo[] $diskWriteOps
     */
    public function setDiskWriteOps(array $diskWriteOps)
    {
        $result = [];
        foreach ($diskWriteOps as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }


}
