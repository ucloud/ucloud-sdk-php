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

class EIPSetData extends Response
{
    

    /**
     * Bandwidth: EIP带宽值
     *
     * @return integer|null
     */
    public function getBandwidth(): int
    {
        return $this->get("Bandwidth");
    }

    /**
     * Bandwidth: EIP带宽值
     *
     * @param int $bandwidth
     */
    public function setBandwidth(int $bandwidth)
    {
        $this->set("Bandwidth", $bandwidth);
    }

    /**
     * EIPAddr: EIP的IP信息，详情见EIPAddrSet
     *
     * @return EIPAddrSet[]|null
     */
    public function getEIPAddr(): array
    {
        $items = $this->get("EIPAddr") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new EIPAddrSet($item));
        }
        return $result;
    }

    /**
     * EIPAddr: EIP的IP信息，详情见EIPAddrSet
     *
     * @param EIPAddrSet[] $eipAddr
     */
    public function setEIPAddr(array $eipAddr)
    {
        $result = [];
        foreach ($eipAddr as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * EIPId: EIP资源Id
     *
     * @return string|null
     */
    public function getEIPId(): string
    {
        return $this->get("EIPId");
    }

    /**
     * EIPId: EIP资源Id
     *
     * @param string $eipId
     */
    public function setEIPId(string $eipId)
    {
        $this->set("EIPId", $eipId);
    }
}
