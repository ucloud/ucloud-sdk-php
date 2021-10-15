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
namespace UCloud\UHost\Apis;

use UCloud\Core\Response\Response;
use UCloud\UHost\Models\UHostInstanceSet;
use UCloud\UHost\Models\UHostDiskSet;
use UCloud\UHost\Models\UHostIPSet;
use UCloud\UHost\Models\UHostKeyPair;

class DescribeUHostInstanceResponse extends Response
{
    

    /**
     * TotalCount: UHostInstance总数
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: UHostInstance总数
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }

    /**
     * UHostSet: 云主机实例列表，每项参数可见下面 UHostInstanceSet
     *
     * @return UHostInstanceSet[]|null
     */
    public function getUHostSet()
    {
        $items = $this->get("UHostSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UHostInstanceSet($item));
        }
        return $result;
    }

    /**
     * UHostSet: 云主机实例列表，每项参数可见下面 UHostInstanceSet
     *
     * @param UHostInstanceSet[] $uHostSet
     */
    public function setUHostSet(array $uHostSet)
    {
        $result = [];
        foreach ($uHostSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
