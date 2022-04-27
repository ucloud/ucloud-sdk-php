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

namespace UCloud\ULB\Models;

use UCloud\Core\Response\Response;

use UCloud\ULB\Models\ULBSet;
use UCloud\ULB\Models\DescribeULBResponse;
use UCloud\ULB\Models\ULBSimpleSet;
use UCloud\ULB\Models\DescribeULBSimpleResponse;

class ULBIPSet extends Response
{

    /**
     * OperatorName: 弹性IP的运营商信息，枚举值为：  Bgp：BGP IP International：国际IP
     *
     * @return string|null
     */
    public function getOperatorName()
    {
        return $this->get("OperatorName");
    }

    /**
     * OperatorName: 弹性IP的运营商信息，枚举值为：  Bgp：BGP IP International：国际IP
     *
     * @param string $operatorName
     */
    public function setOperatorName(string $operatorName)
    {
        $this->set("OperatorName", $operatorName);
    }
    /**
     * EIP: 弹性IP地址
     *
     * @return string|null
     */
    public function getEIP()
    {
        return $this->get("EIP");
    }

    /**
     * EIP: 弹性IP地址
     *
     * @param string $eip
     */
    public function setEIP(string $eip)
    {
        $this->set("EIP", $eip);
    }
    /**
     * EIPId: 弹性IP的ID
     *
     * @return string|null
     */
    public function getEIPId()
    {
        return $this->get("EIPId");
    }

    /**
     * EIPId: 弹性IP的ID
     *
     * @param string $eipId
     */
    public function setEIPId(string $eipId)
    {
        $this->set("EIPId", $eipId);
    }
    /**
     * BandwidthType: 弹性IP的带宽类型，枚举值：1 表示是共享带宽，0 普通带宽类型（暂未对外开放）
     *
     * @return integer|null
     */
    public function getBandwidthType()
    {
        return $this->get("BandwidthType");
    }

    /**
     * BandwidthType: 弹性IP的带宽类型，枚举值：1 表示是共享带宽，0 普通带宽类型（暂未对外开放）
     *
     * @param int $bandwidthType
     */
    public function setBandwidthType(int $bandwidthType)
    {
        $this->set("BandwidthType", $bandwidthType);
    }
    /**
     * Bandwidth: 弹性IP的带宽值（暂未对外开放）
     *
     * @return integer|null
     */
    public function getBandwidth()
    {
        return $this->get("Bandwidth");
    }

    /**
     * Bandwidth: 弹性IP的带宽值（暂未对外开放）
     *
     * @param int $bandwidth
     */
    public function setBandwidth(int $bandwidth)
    {
        $this->set("Bandwidth", $bandwidth);
    }
}
