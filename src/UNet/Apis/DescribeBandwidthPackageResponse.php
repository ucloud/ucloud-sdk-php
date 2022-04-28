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
use UCloud\UNet\Models\UnetBandwidthPackageSet;
use UCloud\UNet\Models\EIPAddrSet;

class DescribeBandwidthPackageResponse extends Response
{
    

    /**
     * TotalCount: 满足条件的带宽包总数
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 满足条件的带宽包总数
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }

    /**
     * DataSets: 带宽包详细信息, 参见 UnetBandwidthPackageSet
     *
     * @return UnetBandwidthPackageSet[]|null
     */
    public function getDataSets()
    {
        $items = $this->get("DataSets");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UnetBandwidthPackageSet($item));
        }
        return $result;
    }

    /**
     * DataSets: 带宽包详细信息, 参见 UnetBandwidthPackageSet
     *
     * @param UnetBandwidthPackageSet[] $dataSets
     */
    public function setDataSets(array $dataSets)
    {
        $result = [];
        foreach ($dataSets as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
