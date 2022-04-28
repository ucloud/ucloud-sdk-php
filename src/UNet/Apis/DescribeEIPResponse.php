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
use UCloud\UNet\Models\UnetEIPSet;
use UCloud\UNet\Models\UnetEIPResourceSet;
use UCloud\UNet\Models\UnetEIPAddrSet;
use UCloud\UNet\Models\ShareBandwidthSet;

class DescribeEIPResponse extends Response
{
    

    /**
     * TotalCount: 满足条件的弹性IP总数
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 满足条件的弹性IP总数
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }

    /**
     * UnbindCount: 未绑定的弹性IP总数
     *
     * @return integer|null
     */
    public function getUnbindCount()
    {
        return $this->get("UnbindCount");
    }

    /**
     * UnbindCount: 未绑定的弹性IP总数
     *
     * @param int $unbindCount
     */
    public function setUnbindCount($unbindCount)
    {
        $this->set("UnbindCount", $unbindCount);
    }

    /**
     * TotalBandwidth: 满足条件的弹性IP带宽总和, 单位Mbps
     *
     * @return integer|null
     */
    public function getTotalBandwidth()
    {
        return $this->get("TotalBandwidth");
    }

    /**
     * TotalBandwidth: 满足条件的弹性IP带宽总和, 单位Mbps
     *
     * @param int $totalBandwidth
     */
    public function setTotalBandwidth($totalBandwidth)
    {
        $this->set("TotalBandwidth", $totalBandwidth);
    }

    /**
     * EIPSet: 弹性IP列表, 每项参数详见 UnetEIPSet
     *
     * @return UnetEIPSet[]|null
     */
    public function getEIPSet()
    {
        $items = $this->get("EIPSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UnetEIPSet($item));
        }
        return $result;
    }

    /**
     * EIPSet: 弹性IP列表, 每项参数详见 UnetEIPSet
     *
     * @param UnetEIPSet[] $eipSet
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
