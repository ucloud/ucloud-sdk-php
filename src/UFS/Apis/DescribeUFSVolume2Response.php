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
namespace UCloud\UFS\Apis;

use UCloud\Core\Response\Response;
use UCloud\UFS\Models\UFSVolumeInfo2;

class DescribeUFSVolume2Response extends Response {
    

    /**
     * TotalCount: 文件系统总数
     *
     * @return int|null
     */
    public function getTotalCount(): int {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 文件系统总数
     *
     * @param int $totalCount
     */
    public function setTotalCount(int $totalCount) {
        $this->set("TotalCount", $totalCount);
    }

    /**
     * DataSet: 文件系统详细信息列表
     *
     * @return UFSVolumeInfo2[]|null
     */
    public function getDataSet(): array {
        $items = $this->get("DataSet") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UFSVolumeInfo2($item));
        }
        return $result;
    }

    /**
     * DataSet: 文件系统详细信息列表
     *
     * @param UFSVolumeInfo2[] $dataSet
     */
    public function setDataSet(array $dataSet) {
        $result = [];
        foreach ($dataSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }


}
