<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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
namespace UCloud\UCompShare\Apis;

use UCloud\Core\Response\Response;
use UCloud\UCompShare\Models\ULHostInstanceSet;
use UCloud\UCompShare\Models\UHostIPSet;
use UCloud\UCompShare\Models\ULHostDiskSet;
use UCloud\UCompShare\Models\ExclusiveUTPInfo;

class DescribeULHostInstanceResponse extends Response
{
    

    /**
     * ULHostInstanceSets: 实例列表
     *
     * @return ULHostInstanceSet[]|null
     */
    public function getULHostInstanceSets()
    {
        $items = $this->get("ULHostInstanceSets");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ULHostInstanceSet($item));
        }
        return $result;
    }

    /**
     * ULHostInstanceSets: 实例列表
     *
     * @param ULHostInstanceSet[] $ulHostInstanceSets
     */
    public function setULHostInstanceSets(array $ulHostInstanceSets)
    {
        $result = [];
        foreach ($ulHostInstanceSets as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
