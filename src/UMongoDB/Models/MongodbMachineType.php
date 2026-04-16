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
namespace UCloud\UMongoDB\Models;

use UCloud\Core\Response\Response;

class MongodbMachineType extends Response
{
    

    /**
     * MachineTypeId: 机器类型ID o.mongo2m.medium，o.mongo2m.xlarge
     *
     * @return string|null
     */
    public function getMachineTypeId()
    {
        return $this->get("MachineTypeId");
    }

    /**
     * MachineTypeId: 机器类型ID o.mongo2m.medium，o.mongo2m.xlarge
     *
     * @param string $machineTypeId
     */
    public function setMachineTypeId($machineTypeId)
    {
        $this->set("MachineTypeId", $machineTypeId);
    }

    /**
     * Description: 配置简称  2C4G
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->get("Description");
    }

    /**
     * Description: 配置简称  2C4G
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->set("Description", $description);
    }

    /**
     * Cpu: cpu核数
     *
     * @return integer|null
     */
    public function getCpu()
    {
        return $this->get("Cpu");
    }

    /**
     * Cpu: cpu核数
     *
     * @param int $cpu
     */
    public function setCpu($cpu)
    {
        $this->set("Cpu", $cpu);
    }

    /**
     * Memory: 内存用量(GB)
     *
     * @return integer|null
     */
    public function getMemory()
    {
        return $this->get("Memory");
    }

    /**
     * Memory: 内存用量(GB)
     *
     * @param int $memory
     */
    public function setMemory($memory)
    {
        $this->set("Memory", $memory);
    }

    /**
     * UHhostMachineType: 机器类型，N/O
     *
     * @return string|null
     */
    public function getUHhostMachineType()
    {
        return $this->get("UHhostMachineType");
    }

    /**
     * UHhostMachineType: 机器类型，N/O
     *
     * @param string $uHhostMachineType
     */
    public function setUHhostMachineType($uHhostMachineType)
    {
        $this->set("UHhostMachineType", $uHhostMachineType);
    }

    /**
     * Group: 配置分组，2m , 4m
     *
     * @return string|null
     */
    public function getGroup()
    {
        return $this->get("Group");
    }

    /**
     * Group: 配置分组，2m , 4m
     *
     * @param string $group
     */
    public function setGroup($group)
    {
        $this->set("Group", $group);
    }
}
