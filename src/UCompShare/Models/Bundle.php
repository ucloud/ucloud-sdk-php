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

class Bundle extends Response
{
    

    /**
     * BundleId: 套餐ID。
     *
     * @return string|null
     */
    public function getBundleId()
    {
        return $this->get("BundleId");
    }

    /**
     * BundleId: 套餐ID。
     *
     * @param string $bundleId
     */
    public function setBundleId($bundleId)
    {
        $this->set("BundleId", $bundleId);
    }

    /**
     * CPU: CPU核数。
     *
     * @return integer|null
     */
    public function getCPU()
    {
        return $this->get("CPU");
    }

    /**
     * CPU: CPU核数。
     *
     * @param int $cpu
     */
    public function setCPU($cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * Memory: 内存大小。单位：MB。
     *
     * @return integer|null
     */
    public function getMemory()
    {
        return $this->get("Memory");
    }

    /**
     * Memory: 内存大小。单位：MB。
     *
     * @param int $memory
     */
    public function setMemory($memory)
    {
        $this->set("Memory", $memory);
    }

    /**
     * SysDiskSpace: 系统盘大小。单位：GB。
     *
     * @return integer|null
     */
    public function getSysDiskSpace()
    {
        return $this->get("SysDiskSpace");
    }

    /**
     * SysDiskSpace: 系统盘大小。单位：GB。
     *
     * @param int $sysDiskSpace
     */
    public function setSysDiskSpace($sysDiskSpace)
    {
        $this->set("SysDiskSpace", $sysDiskSpace);
    }

    /**
     * Bandwidth: 外网带宽。单位：Mbps。
     *
     * @return integer|null
     */
    public function getBandwidth()
    {
        return $this->get("Bandwidth");
    }

    /**
     * Bandwidth: 外网带宽。单位：Mbps。
     *
     * @param int $bandwidth
     */
    public function setBandwidth($bandwidth)
    {
        $this->set("Bandwidth", $bandwidth);
    }

    /**
     * TrafficPacket: 流量包大小。单位：GB。
     *
     * @return integer|null
     */
    public function getTrafficPacket()
    {
        return $this->get("TrafficPacket");
    }

    /**
     * TrafficPacket: 流量包大小。单位：GB。
     *
     * @param int $trafficPacket
     */
    public function setTrafficPacket($trafficPacket)
    {
        $this->set("TrafficPacket", $trafficPacket);
    }
}
