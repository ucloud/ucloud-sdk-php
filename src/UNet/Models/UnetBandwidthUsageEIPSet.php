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
namespace UCloud\UNet\Models;

use UCloud\Core\Response\Response;

class UnetBandwidthUsageEIPSet extends Response
{
    

    /**
     * CurBandwidth: 最近5分钟带宽用量, 单位Mbps
     *
     * @return float|null
     */
    public function getCurBandwidth(): float
    {
        return $this->get("CurBandwidth");
    }

    /**
     * CurBandwidth: 最近5分钟带宽用量, 单位Mbps
     *
     * @param float $curBandwidth
     */
    public function setCurBandwidth(float $curBandwidth)
    {
        $this->set("CurBandwidth", $curBandwidth);
    }

    /**
     * EIPId: 弹性IP资源ID
     *
     * @return string|null
     */
    public function getEIPId(): string
    {
        return $this->get("EIPId");
    }

    /**
     * EIPId: 弹性IP资源ID
     *
     * @param string $eipId
     */
    public function setEIPId(string $eipId)
    {
        $this->set("EIPId", $eipId);
    }
}
