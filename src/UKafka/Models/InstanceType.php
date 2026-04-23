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

class InstanceType extends Response
{
    

    /**
     * DiskSet: 机型磁盘类型信息
     *
     * @return DiskSet|null
     */
    public function getDiskSet()
    {
        return new DiskSet($this->get("DiskSet"));
    }

    /**
     * DiskSet: 机型磁盘类型信息
     *
     * @param DiskSet $diskSet
     */
    public function setDiskSet(array $diskSet)
    {
        $this->set("DiskSet", $diskSet->getAll());
    }

    /**
     * CPU: CPU核心数
     *
     * @return integer|null
     */
    public function getCPU()
    {
        return $this->get("CPU");
    }

    /**
     * CPU: CPU核心数
     *
     * @param int $cpu
     */
    public function setCPU($cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * DiskType: 磁盘类型。RSSD 表示固态云盘，SSD 表示本地固态盘，COMMON 表示本地 SATA 盘
     *
     * @return string|null
     */
    public function getDiskType()
    {
        return $this->get("DiskType");
    }

    /**
     * DiskType: 磁盘类型。RSSD 表示固态云盘，SSD 表示本地固态盘，COMMON 表示本地 SATA 盘
     *
     * @param string $diskType
     */
    public function setDiskType($diskType)
    {
        $this->set("DiskType", $diskType);
    }

    /**
     * NodeTypeName: 机型名称
     *
     * @return string|null
     */
    public function getNodeTypeName()
    {
        return $this->get("NodeTypeName");
    }

    /**
     * NodeTypeName: 机型名称
     *
     * @param string $nodeTypeName
     */
    public function setNodeTypeName($nodeTypeName)
    {
        $this->set("NodeTypeName", $nodeTypeName);
    }

    /**
     * Memory: 内存大小（单位 MB）
     *
     * @return string|null
     */
    public function getMemory()
    {
        return $this->get("Memory");
    }

    /**
     * Memory: 内存大小（单位 MB）
     *
     * @param string $memory
     */
    public function setMemory($memory)
    {
        $this->set("Memory", $memory);
    }
}
