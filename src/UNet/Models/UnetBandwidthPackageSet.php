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

class UnetBandwidthPackageSet extends Response
{
    

    /**
     * BandwidthPackageId: 带宽包的资源ID
     *
     * @return string|null
     */
    public function getBandwidthPackageId(): string
    {
        return $this->get("BandwidthPackageId");
    }

    /**
     * BandwidthPackageId: 带宽包的资源ID
     *
     * @param string $bandwidthPackageId
     */
    public function setBandwidthPackageId(string $bandwidthPackageId)
    {
        $this->set("BandwidthPackageId", $bandwidthPackageId);
    }

    /**
     * EnableTime: 生效时间, 格式为 Unix Timestamp
     *
     * @return integer|null
     */
    public function getEnableTime(): int
    {
        return $this->get("EnableTime");
    }

    /**
     * EnableTime: 生效时间, 格式为 Unix Timestamp
     *
     * @param int $enableTime
     */
    public function setEnableTime(int $enableTime)
    {
        $this->set("EnableTime", $enableTime);
    }

    /**
     * DisableTime: 失效时间, 格式为 Unix Timestamp
     *
     * @return integer|null
     */
    public function getDisableTime(): int
    {
        return $this->get("DisableTime");
    }

    /**
     * DisableTime: 失效时间, 格式为 Unix Timestamp
     *
     * @param int $disableTime
     */
    public function setDisableTime(int $disableTime)
    {
        $this->set("DisableTime", $disableTime);
    }

    /**
     * CreateTime: 创建时间, 格式为 Unix Timestamp
     *
     * @return integer|null
     */
    public function getCreateTime(): int
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间, 格式为 Unix Timestamp
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * Bandwidth: 带宽包的临时带宽值, 单位Mbps
     *
     * @return integer|null
     */
    public function getBandwidth(): int
    {
        return $this->get("Bandwidth");
    }

    /**
     * Bandwidth: 带宽包的临时带宽值, 单位Mbps
     *
     * @param int $bandwidth
     */
    public function setBandwidth(int $bandwidth)
    {
        $this->set("Bandwidth", $bandwidth);
    }

    /**
     * EIPId: 带宽包所绑定弹性IP的资源ID
     *
     * @return string|null
     */
    public function getEIPId(): string
    {
        return $this->get("EIPId");
    }

    /**
     * EIPId: 带宽包所绑定弹性IP的资源ID
     *
     * @param string $eipId
     */
    public function setEIPId(string $eipId)
    {
        $this->set("EIPId", $eipId);
    }

    /**
     * EIPAddr: 带宽包所绑定弹性IP的详细信息,只有当EIPId对应双线IP时, EIPAddr的长度为2, 其他情况, EIPAddr长度均为1.参见 EIPAddrSet
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
     * EIPAddr: 带宽包所绑定弹性IP的详细信息,只有当EIPId对应双线IP时, EIPAddr的长度为2, 其他情况, EIPAddr长度均为1.参见 EIPAddrSet
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
}
