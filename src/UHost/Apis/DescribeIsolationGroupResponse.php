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
use UCloud\UHost\Models\IsolationGroup;
use UCloud\UHost\Models\SpreadInfo;

class DescribeIsolationGroupResponse extends Response
{
    

    /**
     * IsolationGroupSet: 硬件隔离组集合。参见数据结构IsolationGroup。
     *
     * @return IsolationGroup[]|null
     */
    public function getIsolationGroupSet()
    {
        $items = $this->get("IsolationGroupSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new IsolationGroup($item));
        }
        return $result;
    }

    /**
     * IsolationGroupSet: 硬件隔离组集合。参见数据结构IsolationGroup。
     *
     * @param IsolationGroup[] $isolationGroupSet
     */
    public function setIsolationGroupSet(array $isolationGroupSet)
    {
        $result = [];
        foreach ($isolationGroupSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * TotalCount: 硬件隔离组总数
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 硬件隔离组总数
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }
}
