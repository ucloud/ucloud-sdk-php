<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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
namespace UCloud\UPHost\Apis;

use UCloud\Core\Response\Response;
use UCloud\UPHost\Models\PHostCloudMachineTypeSet;
use UCloud\UPHost\Models\PHostCPUSet;
use UCloud\UPHost\Models\PHostComponentSet;
use UCloud\UPHost\Models\PHostClusterSet;

class DescribeBaremetalMachineTypeResponse extends Response
{
    

    /**
     * MachineTypes: 机型列表，模型：PHostCloudMachineTypeSet
     *
     * @return PHostCloudMachineTypeSet[]|null
     */
    public function getMachineTypes(): array
    {
        $items = $this->get("MachineTypes") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new PHostCloudMachineTypeSet($item));
        }
        return $result;
    }

    /**
     * MachineTypes: 机型列表，模型：PHostCloudMachineTypeSet
     *
     * @param PHostCloudMachineTypeSet[] $machineTypes
     */
    public function setMachineTypes(array $machineTypes)
    {
        $result = [];
        foreach ($machineTypes as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
