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
use UCloud\UNet\Models\UnetBandwidthUsageEIPSet;

class DescribeBandwidthUsageResponse extends Response
{
    

    /**
     * TotalCount: EIPSet中的元素个数
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: EIPSet中的元素个数
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }

    /**
     * EIPSet: 单个弹性IP的带宽用量详细信息, 详见 UnetBandwidthUsageEIPSet, 如没有弹性IP资源则没有该返回值。
     *
     * @return UnetBandwidthUsageEIPSet[]|null
     */
    public function getEIPSet()
    {
        $items = $this->get("EIPSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UnetBandwidthUsageEIPSet($item));
        }
        return $result;
    }

    /**
     * EIPSet: 单个弹性IP的带宽用量详细信息, 详见 UnetBandwidthUsageEIPSet, 如没有弹性IP资源则没有该返回值。
     *
     * @param UnetBandwidthUsageEIPSet[] $eipSet
     */
    public function setEIPSet(array $eipSet)
    {
        $result = [];
        foreach ($eipSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
