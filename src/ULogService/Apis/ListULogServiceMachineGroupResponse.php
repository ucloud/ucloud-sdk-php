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
use UCloud\ULogService\Models\MachineGroup;

class ListULogServiceMachineGroupResponse extends Response
{
    

    /**
     * MachineGroups: 机器组信息列表
     *
     * @return MachineGroup[]|null
     */
    public function getMachineGroups()
    {
        $items = $this->get("MachineGroups");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new MachineGroup($item));
        }
        return $result;
    }

    /**
     * MachineGroups: 机器组信息列表
     *
     * @param MachineGroup[] $machineGroups
     */
    public function setMachineGroups(array $machineGroups)
    {
        $result = [];
        foreach ($machineGroups as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
