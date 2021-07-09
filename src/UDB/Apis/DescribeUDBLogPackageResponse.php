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
use UCloud\UDB\Models\LogPackageDataSet;

class DescribeUDBLogPackageResponse extends Response {
    

    /**
     * DataSet: 备份信息 参见LogPackageDataSet
     *
     * @return LogPackageDataSet[]|null
     */
    public function getDataSet(): array {
        $items = $this->get("DataSet") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new LogPackageDataSet($item));
        }
        return $result;
    }

    /**
     * DataSet: 备份信息 参见LogPackageDataSet
     *
     * @param LogPackageDataSet[] $dataSet
     */
    public function setDataSet(array $dataSet) {
        $result = [];
        foreach ($dataSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * TotalCount: 备份总数，如果指定dbid，则是该db备份总数
     *
     * @return int|null
     */
    public function getTotalCount(): int {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 备份总数，如果指定dbid，则是该db备份总数
     *
     * @param int $totalCount
     */
    public function setTotalCount(int $totalCount) {
        $this->set("TotalCount", $totalCount);
    }


}
