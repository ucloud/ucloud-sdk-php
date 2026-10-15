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
namespace UCloud\UK8S\Apis;

use UCloud\Core\Response\Response;
use UCloud\UK8S\Models\UK8SAvailableInstanceType;
use UCloud\UK8S\Models\InstanceTypeUHostFamily;
use UCloud\UK8S\Models\InstanceTypeCpuPlatform;
use UCloud\UK8S\Models\InstanceTypeDisk;
use UCloud\UK8S\Models\InstanceTypeBootDisk;
use UCloud\UK8S\Models\InstanceTypeDataDisk;
use UCloud\UK8S\Models\InstanceTypeMachineSize;
use UCloud\UK8S\Models\InstanceTypeMachineSizeCollection;
use UCloud\UK8S\Models\InstanceTypeFeature;
use UCloud\UK8S\Models\InstanceTypeFeatureMode;
use UCloud\UK8S\Models\InstanceTypeValueRate;

class GetUK8SAvailableInstanceTypesResponse extends Response
{
    

    /**
     * Status: 当前区域是否可售
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 当前区域是否可售
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * AvailableInstanceTypes: UK8S 支持的可用机型列表
     *
     * @return UK8SAvailableInstanceType[]|null
     */
    public function getAvailableInstanceTypes()
    {
        $items = $this->get("AvailableInstanceTypes");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UK8SAvailableInstanceType($item));
        }
        return $result;
    }

    /**
     * AvailableInstanceTypes: UK8S 支持的可用机型列表
     *
     * @param UK8SAvailableInstanceType[] $availableInstanceTypes
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
