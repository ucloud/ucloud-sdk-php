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
namespace UCloud\UPhone\Models;

use UCloud\Core\Response\Response;

class UPhoneModelInstance extends Response
{
    

    /**
     * UPhoneModelName: UPhoneModel名称
     *
     * @return string|null
     */
    public function getUPhoneModelName()
    {
        return $this->get("UPhoneModelName");
    }

    /**
     * UPhoneModelName: UPhoneModel名称
     *
     * @param string $uPhoneModelName
     */
    public function setUPhoneModelName($uPhoneModelName)
    {
        $this->set("UPhoneModelName", $uPhoneModelName);
    }

    /**
     * CPU: 虚拟CPU核数。
     *
     * @return int|null
     */
    public function getCPU()
    {
        return $this->get("CPU");
    }

    /**
     * CPU: 虚拟CPU核数。
     *
     * @param int $cpu
     */
    public function setCPU($cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * Memory: 内存大小。单位MB
     *
     * @return int|null
     */
    public function getMemory()
    {
        return $this->get("Memory");
    }

    /**
     * Memory: 内存大小。单位MB
     *
     * @param int $memory
     */
    public function setMemory($memory)
    {
        $this->set("Memory", $memory);
    }

    /**
     * DiskSize: 磁盘大小，单位: GB
     *
     * @return int|null
     */
    public function getDiskSize()
    {
        return $this->get("DiskSize");
    }

    /**
     * DiskSize: 磁盘大小，单位: GB
     *
     * @param int $diskSize
     */
    public function setDiskSize($diskSize)
    {
        $this->set("DiskSize", $diskSize);
    }

    /**
     * Resolution: 分辨率
     *
     * @return string|null
     */
    public function getResolution()
    {
        return $this->get("Resolution");
    }

    /**
     * Resolution: 分辨率
     *
     * @param string $resolution
     */
    public function setResolution($resolution)
    {
        $this->set("Resolution", $resolution);
    }

    /**
     * Refresh: 刷新率
     *
     * @return int|null
     */
    public function getRefresh()
    {
        return $this->get("Refresh");
    }

    /**
     * Refresh: 刷新率
     *
     * @param int $refresh
     */
    public function setRefresh($refresh)
    {
        $this->set("Refresh", $refresh);
    }

    /**
     * Dpi: DPI
     *
     * @return int|null
     */
    public function getDpi()
    {
        return $this->get("Dpi");
    }

    /**
     * Dpi: DPI
     *
     * @param int $dpi
     */
    public function setDpi($dpi)
    {
        $this->set("Dpi", $dpi);
    }

    /**
     * Description: 型号描述信息
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->get("Description");
    }

    /**
     * Description: 型号描述信息
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->set("Description", $description);
    }


}
