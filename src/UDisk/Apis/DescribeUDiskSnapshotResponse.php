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
namespace UCloud\UDisk\Apis;

use UCloud\Core\Response\Response;
use UCloud\UDisk\Models\UDiskSnapshotSet;

class DescribeUDiskSnapshotResponse extends Response {
    

    /**
     * DataSet: JSON 格式的Snapshot列表, 详细参见 UDiskSnapshotSet
     *
     * @return UDiskSnapshotSet[]|null
     */
    public function getDataSet(): array {
        $items = $this->get("DataSet") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UDiskSnapshotSet($item));
        }
        return $result;
    }

    /**
     * DataSet: JSON 格式的Snapshot列表, 详细参见 UDiskSnapshotSet
     *
     * @param UDiskSnapshotSet[] $dataSet
     */
    public function setDataSet(array $dataSet) {
        $result = [];
        foreach ($dataSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * TotalCount: 根据过滤条件得到的总数
     *
     * @return int|null
     */
    public function getTotalCount(): int {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 根据过滤条件得到的总数
     *
     * @param int $totalCount
     */
    public function setTotalCount(int $totalCount) {
        $this->set("TotalCount", $totalCount);
    }


}
