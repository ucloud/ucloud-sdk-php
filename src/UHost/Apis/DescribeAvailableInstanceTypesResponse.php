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
namespace UCloud\UHost\Apis;

use UCloud\Core\Response\Response;
use UCloud\UHost\Models\AvailableInstanceTypes;
use UCloud\UHost\Models\CpuPlatforms;
use UCloud\UHost\Models\Disks;
use UCloud\UHost\Models\BootDiskInfo;
use UCloud\UHost\Models\DataDiskInfo;
use UCloud\UHost\Models\MachineSizes;
use UCloud\UHost\Models\Collection;
use UCloud\UHost\Models\Features;
use UCloud\UHost\Models\FeatureModes;
use UCloud\UHost\Models\GraphicsMemory;
use UCloud\UHost\Models\Performance;

class DescribeAvailableInstanceTypesResponse extends Response
{
    

    /**
     * AvailableInstanceTypes: AvailableInstanceTypes
     *
     * @return AvailableInstanceTypes[]|null
     */
    public function getAvailableInstanceTypes()
    {
        $items = $this->get("AvailableInstanceTypes");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new AvailableInstanceTypes($item));
        }
        return $result;
    }

    /**
     * AvailableInstanceTypes: AvailableInstanceTypes
     *
     * @param AvailableInstanceTypes[] $availableInstanceTypes
     */
    public function setAvailableInstanceTypes(array $availableInstanceTypes)
    {
        $result = [];
        foreach ($availableInstanceTypes as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }


}
