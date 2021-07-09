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
namespace UCloud\ULB\Apis;

use UCloud\Core\Response\Response;
use UCloud\ULB\Models\ULBVServerSet;
use UCloud\ULB\Models\ULBSSLSet;
use UCloud\ULB\Models\SSLBindedTargetSet;
use UCloud\ULB\Models\ULBBackendSet;
use UCloud\ULB\Models\ULBPolicySet;
use UCloud\ULB\Models\PolicyBackendSet;

class DescribeVServerResponse extends Response
{
    

    /**
     * TotalCount: 满足条件的VServer总数
     *
     * @return integer|null
     */
    public function getTotalCount(): int
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 满足条件的VServer总数
     *
     * @param int $totalCount
     */
    public function setTotalCount(int $totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }

    /**
     * DataSet: VServer列表，每项参数详见 ULBVServerSet
     *
     * @return ULBVServerSet[]|null
     */
    public function getDataSet(): array
    {
        $items = $this->get("DataSet") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ULBVServerSet($item));
        }
        return $result;
    }

    /**
     * DataSet: VServer列表，每项参数详见 ULBVServerSet
     *
     * @param ULBVServerSet[] $dataSet
     */
    public function setDataSet(array $dataSet)
    {
        $result = [];
        foreach ($dataSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
