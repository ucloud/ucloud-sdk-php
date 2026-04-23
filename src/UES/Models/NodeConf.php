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
namespace UCloud\UES\Models;

use UCloud\Core\Response\Response;

class NodeConf extends Response
{
    

    /**
     * Memory: 内存，单位为GB
     *
     * @return integer|null
     */
    public function getMemory()
    {
        return $this->get("Memory");
    }

    /**
     * Memory: 内存，单位为GB
     *
     * @param int $memory
     */
    public function setMemory($memory)
    {
        $this->set("Memory", $memory);
    }

    /**
     * CPU: CPU数量
     *
     * @return integer|null
     */
    public function getCPU()
    {
        return $this->get("CPU");
    }

    /**
     * CPU: CPU数量
     *
     * @param int $cpu
     */
    public function setCPU($cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * NodeConf: 节点配置标识
     *
     * @return string|null
     */
    public function getNodeConf()
    {
        return $this->get("NodeConf");
    }

    /**
     * NodeConf: 节点配置标识
     *
     * @param string $nodeConf
     */
    public function setNodeConf($nodeConf)
    {
        $this->set("NodeConf", $nodeConf);
    }

    /**
     * DiskType: 磁盘类型[RSSD|SSD]
     *
     * @return string|null
     */
    public function getDiskType()
    {
        return $this->get("DiskType");
    }

    /**
     * DiskType: 磁盘类型[RSSD|SSD]
     *
     * @param string $diskType
     */
    public function setDiskType($diskType)
    {
        $this->set("DiskType", $diskType);
    }

    /**
     * DiskSize: 磁盘大小，单位为GB
     *
     * @return integer|null
     */
    public function getDiskSize()
    {
        return $this->get("DiskSize");
    }

    /**
     * DiskSize: 磁盘大小，单位为GB
     *
     * @param int $diskSize
     */
    public function setDiskSize($diskSize)
    {
        $this->set("DiskSize", $diskSize);
    }

    /**
     * IsSecGroup: 是否支持安全组[true|false]
     *
     * @return boolean|null
     */
    public function getIsSecGroup()
    {
        return $this->get("IsSecGroup");
    }

    /**
     * IsSecGroup: 是否支持安全组[true|false]
     *
     * @param boolean $isSecGroup
     */
    public function setIsSecGroup($isSecGroup)
    {
        $this->set("IsSecGroup", $isSecGroup);
    }
}
