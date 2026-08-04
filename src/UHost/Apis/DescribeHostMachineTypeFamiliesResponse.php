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
namespace UCloud\UHost\Apis;

use UCloud\Core\Response\Response;
use UCloud\UHost\Models\MachineTypes;
use UCloud\UHost\Models\CpuPlatformStatus;
use UCloud\UHost\Models\FamiliesDisks;
use UCloud\UHost\Models\FamiliesBootDiskInfo;
use UCloud\UHost\Models\DiskFeature;
use UCloud\UHost\Models\NameOperationStatus;
use UCloud\UHost\Models\FamiliesDataDiskInfo;
use UCloud\UHost\Models\DiskFeature;
use UCloud\UHost\Models\NameOperationStatus;
use UCloud\UHost\Models\MachineSizes;
use UCloud\UHost\Models\Collection;
use UCloud\UHost\Models\Features;
use UCloud\UHost\Models\FeatureModes;
use UCloud\UHost\Models\FamiliesGpuType;
use UCloud\UHost\Models\GraphicsMemory;
use UCloud\UHost\Models\Performance;
use UCloud\UHost\Models\UHostFamily;
use UCloud\UHost\Models\CpuPlatformWithModels;
use UCloud\UHost\Models\NameFrequency;
use UCloud\UHost\Models\Frequency;

class DescribeHostMachineTypeFamiliesResponse extends Response
{
    

    /**
     * MachineTypes: 机型配置列表
     *
     * @return MachineTypes[]|null
     */
    public function getMachineTypes()
    {
        $items = $this->get("MachineTypes");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new MachineTypes($item));
        }
        return $result;
    }

    /**
     * MachineTypes: 机型配置列表
     *
     * @param MachineTypes[] $machineTypes
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
