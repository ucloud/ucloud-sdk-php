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

namespace UCloud\UPHost\Apis;

use UCloud\Core\Response\Response;

use UCloud\UPHost\Models\PHostClusterSet;
use UCloud\UPHost\Models\PHostDiskSet;
use UCloud\UPHost\Models\PHostCPUSet;
use UCloud\UPHost\Models\PHostComponentSet;
use UCloud\UPHost\Models\PHostMachineTypeSet;

class DescribePHostMachineTypeResponse extends Response
{

    /**
     * MachineTypes: 机型列表，模型：PHostMachineTypeSet
     *
     * @return PHostMachineTypeSetModel[]|null
     */
    public function getMachineTypes()
    {
        $items = $this->get("MachineTypes");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new PHostMachineTypeSetModel($item));
        }
        return $result;
    }

    /**
     * MachineTypes: 机型列表，模型：PHostMachineTypeSet
     *
     * @param PHostMachineTypeSetModel[] $machineTypes
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
