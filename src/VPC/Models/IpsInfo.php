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

class IpsInfo extends Response
{
    

    /**
     * Ip: 内网IP地址
     *
     * @return string|null
     */
    public function getIp()
    {
        return $this->get("Ip");
    }

    /**
     * Ip: 内网IP地址
     *
     * @param string $ip
     */
    public function setIp($ip)
    {
        $this->set("Ip", $ip);
    }

    /**
     * Mask: 掩码
     *
     * @return string|null
     */
    public function getMask()
    {
        return $this->get("Mask");
    }

    /**
     * Mask: 掩码
     *
     * @param string $mask
     */
    public function setMask($mask)
    {
        $this->set("Mask", $mask);
    }

    /**
     * Gateway: 网关
     *
     * @return string|null
     */
    public function getGateway()
    {
        return $this->get("Gateway");
    }

    /**
     * Gateway: 网关
     *
     * @param string $gateway
     */
    public function setGateway($gateway)
    {
        $this->set("Gateway", $gateway);
    }

    /**
     * Mac: MAC地址
     *
     * @return string|null
     */
    public function getMac()
    {
        return $this->get("Mac");
    }

    /**
     * Mac: MAC地址
     *
     * @param string $mac
     */
    public function setMac($mac)
    {
        $this->set("Mac", $mac);
    }

    /**
     * SubnetId: 子网资源ID
     *
     * @return string|null
     */
    public function getSubnetId()
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 子网资源ID
     *
     * @param string $subnetId
     */
    public function setSubnetId($subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * VPCId: VPC资源ID
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: VPC资源ID
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * Status: IP分配结果，详见StatusInfo
     *
     * @return StatusInfo|null
     */
    public function getStatus()
    {
        return new StatusInfo($this->get("Status"));
    }

    /**
     * Status: IP分配结果，详见StatusInfo
     *
     * @param StatusInfo $status
     */
    public function setStatus(array $status)
    {
        $this->set("Status", $status->getAll());
    }


}
