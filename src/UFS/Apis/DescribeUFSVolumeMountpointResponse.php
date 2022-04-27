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
namespace UCloud\UFS\Apis;

use UCloud\Core\Response\Response;
use UCloud\UFS\Models\MountPointInfo;

class DescribeUFSVolumeMountpointResponse extends Response
{
    

    /**
     * DataSet:
     *
     * @return MountPointInfo[]|null
     */
    public function getDataSet(): array
    {
        $items = $this->get("DataSet") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new MountPointInfo($item));
        }
        return $result;
    }

    /**
     * DataSet:
     *
     * @param MountPointInfo[] $dataSet
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
     * TotalMountPointNum: 目前的挂载点总数
     *
     * @return integer|null
     */
    public function getTotalMountPointNum(): int
    {
        return $this->get("TotalMountPointNum");
    }

    /**
     * TotalMountPointNum: 目前的挂载点总数
     *
     * @param int $totalMountPointNum
     */
    public function setTotalMountPointNum(int $totalMountPointNum)
    {
        $this->set("TotalMountPointNum", $totalMountPointNum);
    }

    /**
     * MaxMountPointNum: 文件系统能创建的最大挂载点数目
     *
     * @return integer|null
     */
    public function getMaxMountPointNum(): int
    {
        return $this->get("MaxMountPointNum");
    }

    /**
     * MaxMountPointNum: 文件系统能创建的最大挂载点数目
     *
     * @param int $maxMountPointNum
     */
    public function setMaxMountPointNum(int $maxMountPointNum)
    {
        $this->set("MaxMountPointNum", $maxMountPointNum);
    }
}
