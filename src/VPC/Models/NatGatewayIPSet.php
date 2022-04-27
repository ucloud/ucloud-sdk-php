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
namespace UCloud\VPC\Models;

use UCloud\Core\Response\Response;

class NatGatewayIPSet extends Response
{
    

    /**
     * EIPId: 外网IP的 EIPId
     *
     * @return string|null
     */
    public function getEIPId(): string
    {
        return $this->get("EIPId");
    }

    /**
     * EIPId: 外网IP的 EIPId
     *
     * @param string $eipId
     */
    public function setEIPId(string $eipId)
    {
        $this->set("EIPId", $eipId);
    }

    /**
     * Weight: 权重为100的为出口
     *
     * @return integer|null
     */
    public function getWeight(): int
    {
        return $this->get("Weight");
    }

    /**
     * Weight: 权重为100的为出口
     *
     * @param int $weight
     */
    public function setWeight(int $weight)
    {
        $this->set("Weight", $weight);
    }

    /**
     * BandwidthType: EIP带宽类型
     *
     * @return string|null
     */
    public function getBandwidthType(): string
    {
        return $this->get("BandwidthType");
    }

    /**
     * BandwidthType: EIP带宽类型
     *
     * @param string $bandwidthType
     */
    public function setBandwidthType(string $bandwidthType)
    {
        $this->set("BandwidthType", $bandwidthType);
    }

    /**
     * Bandwidth: 带宽
     *
     * @return integer|null
     */
    public function getBandwidth(): int
    {
        return $this->get("Bandwidth");
    }

    /**
     * Bandwidth: 带宽
     *
     * @param int $bandwidth
     */
    public function setBandwidth(int $bandwidth)
    {
        $this->set("Bandwidth", $bandwidth);
    }

    /**
     * IPResInfo: 外网IP信息
     *
     * @return NatGWIPResInfo[]|null
     */
    public function getIPResInfo(): array
    {
        $items = $this->get("IPResInfo") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new NatGWIPResInfo($item));
        }
        return $result;
    }

    /**
     * IPResInfo: 外网IP信息
     *
     * @param NatGWIPResInfo[] $ipResInfo
     */
    public function setIPResInfo(array $ipResInfo)
    {
        $result = [];
        foreach ($ipResInfo as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
