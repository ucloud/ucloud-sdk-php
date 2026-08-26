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
namespace UCloud\ULogService\Apis;

use UCloud\Core\Response\Response;
use UCloud\ULogService\Models\MachineInfo;
use UCloud\ULogService\Models\LogAgent;

class DescribeULogServiceMachineGroupResponse extends Response
{
    

    /**
     * MachineGroup: 机器组信息
     *
     * @return MachineInfo|null
     */
    public function getMachineGroup()
    {
        return new MachineInfo($this->get("MachineGroup"));
    }

    /**
     * MachineGroup: 机器组信息
     *
     * @param MachineInfo $machineGroup
     */
    public function setMachineGroup(array $machineGroup)
    {
        $this->set("MachineGroup", $machineGroup->getAll());
    }
}
