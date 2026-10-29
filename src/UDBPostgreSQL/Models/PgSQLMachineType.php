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
namespace UCloud\UDBPostgreSQL\Models;

use UCloud\Core\Response\Response;

class PgSQLMachineType extends Response
{
    

    /**
     * ID: 机器类型ID
     *
     * @return string|null
     */
    public function getID()
    {
        return $this->get("ID");
    }

    /**
     * ID: 机器类型ID
     *
     * @param string $id
     */
    public function setID($id)
    {
        $this->set("ID", $id);
    }

    /**
     * Description: 格式为nCmG,n代表cpu核数，m代表内存大小(GB)
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->get("Description");
    }

    /**
     * Description: 格式为nCmG,n代表cpu核数，m代表内存大小(GB)
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
     * Os: 机器类型，N/O
     *
     * @return string|null
     */
    public function getOs()
    {
        return $this->get("Os");
    }

    /**
     * Os: 机器类型，N/O
     *
     * @param string $os
     */
    public function setOs($os)
    {
        $this->set("Os", $os);
    }
}
