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
namespace UCloud\UDB\Apis;

use UCloud\Core\Response\Response;
use UCloud\UDB\Models\UDBInstanceSet;
use UCloud\UDB\Models\UDBSlaveInstanceSet;
use UCloud\UDB\Models\UFileDataSet;

class DescribeUDBInstanceResponse extends Response
{
    

    /**
     * DataSet: DB实例信息列表 UDBInstanceSet
     *
     * @return UDBInstanceSet[]|null
     */
    public function getDataSet(): array
    {
        $items = $this->get("DataSet") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UDBInstanceSet($item));
        }
        return $result;
    }

    /**
     * DataSet: DB实例信息列表 UDBInstanceSet
     *
     * @param UDBInstanceSet[] $dataSet
     */
    public function setDataSet(array $dataSet)
    {
        $result = [];
        foreach ($dataSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * TotalCount: 用户db组的数量，对于 mysql: 主从结对数量，没有slave，则只有master mongodb: 副本集数量
     *
     * @return integer|null
     */
    public function getTotalCount(): int
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 用户db组的数量，对于 mysql: 主从结对数量，没有slave，则只有master mongodb: 副本集数量
     *
     * @param int $totalCount
     */
    public function setTotalCount(int $totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }
}
