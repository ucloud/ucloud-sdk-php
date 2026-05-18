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
namespace UCloud\UDB\Models;

use UCloud\Core\Response\Response;

class MachineType extends Response
{
    

    /**
     * ID: 计算规格id, 目前支持CPU和内存比1:2、1:4、1:8三类配比规格;规格的格式为："机型.配比.CPU核数规格"；机型支持o和n两种机型，分别代表快杰NVMe和SSD云盘机型；配比映射关系如下:2m代表CPU内存配比1比2，4m代表CPU内存配比1比4，8m代表CPU内存配比1比8，CPU核数规格射关系如下：small代表1C，medium代表2C，xlarge代表4C，2xlarge代表8C，4xlarge代表16C，8xlarge代表32C，16xlarge代表64C，例如 "o.mysql4m.medium"表示创建快杰NVMe机型2C8G的实例，"o.mysql8m.4xlarge"表示创建快杰NVMe机型16C128G的实例
     *
     * @return string|null
     */
    public function getID()
    {
        return $this->get("ID");
    }

    /**
     * ID: 计算规格id, 目前支持CPU和内存比1:2、1:4、1:8三类配比规格;规格的格式为："机型.配比.CPU核数规格"；机型支持o和n两种机型，分别代表快杰NVMe和SSD云盘机型；配比映射关系如下:2m代表CPU内存配比1比2，4m代表CPU内存配比1比4，8m代表CPU内存配比1比8，CPU核数规格射关系如下：small代表1C，medium代表2C，xlarge代表4C，2xlarge代表8C，4xlarge代表16C，8xlarge代表32C，16xlarge代表64C，例如 "o.mysql4m.medium"表示创建快杰NVMe机型2C8G的实例，"o.mysql8m.4xlarge"表示创建快杰NVMe机型16C128G的实例
     *
     * @param string $id
     */
    public function setID($id)
    {
        $this->set("ID", $id);
    }

    /**
     * Description: 计算规格描述，格式为"nCmG"，表示n核mG内存实例
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->get("Description");
    }

    /**
     * Description: 计算规格描述，格式为"nCmG"，表示n核mG内存实例
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->set("Description", $description);
    }

    /**
     * Cpu: 规格cpu核数
     *
     * @return integer|null
     */
    public function getCpu()
    {
        return $this->get("Cpu");
    }

    /**
     * Cpu: 规格cpu核数
     *
     * @param int $cpu
     */
    public function setCpu($cpu)
    {
        $this->set("Cpu", $cpu);
    }

    /**
     * Memory: 规格内存大小，单位（GB）
     *
     * @return integer|null
     */
    public function getMemory()
    {
        return $this->get("Memory");
    }

    /**
     * Memory: 规格内存大小，单位（GB）
     *
     * @param int $memory
     */
    public function setMemory($memory)
    {
        $this->set("Memory", $memory);
    }

    /**
     * Os: 内部云主机机型，可选"o/n"
     *
     * @return string|null
     */
    public function getOs()
    {
        return $this->get("Os");
    }

    /**
     * Os: 内部云主机机型，可选"o/n"
     *
     * @param string $os
     */
    public function setOs($os)
    {
        $this->set("Os", $os);
    }

    /**
     * Group: 内存/cpu配比
     *
     * @return string|null
     */
    public function getGroup()
    {
        return $this->get("Group");
    }

    /**
     * Group: 内存/cpu配比
     *
     * @param string $group
     */
    public function setGroup($group)
    {
        $this->set("Group", $group);
    }
}
