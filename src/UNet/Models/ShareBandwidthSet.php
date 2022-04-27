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
namespace UCloud\UNet\Models;

use UCloud\Core\Response\Response;

class ShareBandwidthSet extends Response
{
    

    /**
     * ShareBandwidth: 共享带宽带宽值
     *
     * @return integer|null
     */
    public function getShareBandwidth(): int
    {
        return $this->get("ShareBandwidth");
    }

    /**
     * ShareBandwidth: 共享带宽带宽值
     *
     * @param int $shareBandwidth
     */
    public function setShareBandwidth(int $shareBandwidth)
    {
        $this->set("ShareBandwidth", $shareBandwidth);
    }

    /**
     * ShareBandwidthName: 共享带宽的资源名称
     *
     * @return string|null
     */
    public function getShareBandwidthName(): string
    {
        return $this->get("ShareBandwidthName");
    }

    /**
     * ShareBandwidthName: 共享带宽的资源名称
     *
     * @param string $shareBandwidthName
     */
    public function setShareBandwidthName(string $shareBandwidthName)
    {
        $this->set("ShareBandwidthName", $shareBandwidthName);
    }

    /**
     * ShareBandwidthId: 共享带宽ID
     *
     * @return string|null
     */
    public function getShareBandwidthId(): string
    {
        return $this->get("ShareBandwidthId");
    }

    /**
     * ShareBandwidthId: 共享带宽ID
     *
     * @param string $shareBandwidthId
     */
    public function setShareBandwidthId(string $shareBandwidthId)
    {
        $this->set("ShareBandwidthId", $shareBandwidthId);
    }
}
