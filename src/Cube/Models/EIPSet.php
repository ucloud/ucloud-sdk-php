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
namespace UCloud\Cube\Models;

use UCloud\Core\Response\Response;

class EIPSet extends Response
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
     * BandwidthType: 带宽类型0标准普通带宽，1表示共享带宽
     *
     * @return integer|null
     */
    public function getBandwidthType(): int
    {
        return $this->get("BandwidthType");
    }

    /**
     * BandwidthType: 带宽类型0标准普通带宽，1表示共享带宽
     *
     * @param int $bandwidthType
     */
    public function setBandwidthType(int $bandwidthType)
    {
        $this->set("BandwidthType", $bandwidthType);
    }

    /**
     * CreateTime: EIP创建时间
     *
     * @return integer|null
     */
    public function getCreateTime(): int
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: EIP创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * EIPAddr: EIP地址
     *
     * @return EIPAddr[]|null
     */
    public function getEIPAddr(): array
    {
        $items = $this->get("EIPAddr") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new EIPAddr($item));
        }
        return $result;
    }

    /**
     * EIPAddr: EIP地址
     *
     * @param EIPAddr[] $eipAddr
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
     * EIPId: EIPId
     *
     * @return string|null
     */
    public function getEIPId(): string
    {
        return $this->get("EIPId");
    }

    /**
     * EIPId: EIPId
     *
     * @param string $eipId
     */
    public function setEIPId(string $eipId)
    {
        $this->set("EIPId", $eipId);
    }

    /**
     * PayMode: 付费模式，带宽付费或者流量付费
     *
     * @return string|null
     */
    public function getPayMode(): string
    {
        return $this->get("PayMode");
    }

    /**
     * PayMode: 付费模式，带宽付费或者流量付费
     *
     * @param string $payMode
     */
    public function setPayMode(string $payMode)
    {
        $this->set("PayMode", $payMode);
    }

    /**
     * Resource: EIP绑定对象的资源Id
     *
     * @return string|null
     */
    public function getResource(): string
    {
        return $this->get("Resource");
    }

    /**
     * Resource: EIP绑定对象的资源Id
     *
     * @param string $resource
     */
    public function setResource(string $resource)
    {
        $this->set("Resource", $resource);
    }

    /**
     * Status: EIP状态，表示使用中或者空闲
     *
     * @return string|null
     */
    public function getStatus(): string
    {
        return $this->get("Status");
    }

    /**
     * Status: EIP状态，表示使用中或者空闲
     *
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->set("Status", $status);
    }

    /**
     * Weight: EIP权重
     *
     * @return integer|null
     */
    public function getWeight(): int
    {
        return $this->get("Weight");
    }

    /**
     * Weight: EIP权重
     *
     * @param int $weight
     */
    public function setWeight(int $weight)
    {
        $this->set("Weight", $weight);
    }
}
