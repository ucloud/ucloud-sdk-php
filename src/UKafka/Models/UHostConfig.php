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
namespace UCloud\UKafka\Models;

use UCloud\Core\Response\Response;

class UHostConfig extends Response
{
    

    /**
     * DiskType: 节点数据盘类型
     *
     * @return string|null
     */
    public function getDiskType()
    {
        return $this->get("DiskType");
    }

    /**
     * DiskType: 节点数据盘类型
     *
     * @param string $diskType
     */
    public function setDiskType($diskType)
    {
        $this->set("DiskType", $diskType);
    }

    /**
     * BootDiskSize: 节点系统盘大小（单位G)【删除】
     *
     * @return integer|null
     */
    public function getBootDiskSize()
    {
        return $this->get("BootDiskSize");
    }

    /**
     * BootDiskSize: 节点系统盘大小（单位G)【删除】
     *
     * @param int $bootDiskSize
     */
    public function setBootDiskSize($bootDiskSize)
    {
        $this->set("BootDiskSize", $bootDiskSize);
    }

    /**
     * CPU: 节点 CPU 核心数
     *
     * @return integer|null
     */
    public function getCPU()
    {
        return $this->get("CPU");
    }

    /**
     * CPU: 节点 CPU 核心数
     *
     * @param int $cpu
     */
    public function setCPU($cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * DataDiskSize: 节点数据盘大小（单位G)
     *
     * @return integer|null
     */
    public function getDataDiskSize()
    {
        return $this->get("DataDiskSize");
    }

    /**
     * DataDiskSize: 节点数据盘大小（单位G)
     *
     * @param int $dataDiskSize
     */
    public function setDataDiskSize($dataDiskSize)
    {
        $this->set("DataDiskSize", $dataDiskSize);
    }

    /**
     * Memory: 节点内存(单位MB)
     *
     * @return integer|null
     */
    public function getMemory()
    {
        return $this->get("Memory");
    }

    /**
     * Memory: 节点内存(单位MB)
     *
     * @param int $memory
     */
    public function setMemory($memory)
    {
        $this->set("Memory", $memory);
    }

    /**
     * OS: 节点内部系统名称【删除】
     *
     * @return string|null
     */
    public function getOS()
    {
        return $this->get("OS");
    }

    /**
     * OS: 节点内部系统名称【删除】
     *
     * @param string $os
     */
    public function setOS($os)
    {
        $this->set("OS", $os);
    }
}
