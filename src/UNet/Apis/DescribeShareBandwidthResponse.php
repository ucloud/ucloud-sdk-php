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
namespace UCloud\UNet\Apis;

use UCloud\Core\Response\Response;
use UCloud\UNet\Models\UnetShareBandwidthSet;
use UCloud\UNet\Models\EIPSetData;
use UCloud\UNet\Models\EIPAddrSet;

class DescribeShareBandwidthResponse extends Response
{
    

    /**
     * DataSet: 共享带宽信息组 参见 UnetShareBandwidthSet
     *
     * @return UnetShareBandwidthSet[]|null
     */
    public function getDataSet()
    {
        $items = $this->get("DataSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UnetShareBandwidthSet($item));
        }
        return $result;
    }

    /**
     * DataSet: 共享带宽信息组 参见 UnetShareBandwidthSet
     *
     * @param UnetShareBandwidthSet[] $dataSet
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
     * TotalCount: 符合条件的共享带宽总数，大于等于返回DataSet长度
     *
     * @return int|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 符合条件的共享带宽总数，大于等于返回DataSet长度
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }


}
