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

use UCloud\VPC\Models\DescribeSecondaryIpResponse;
use UCloud\VPC\Models\AllocateSecondaryIpResponse;

class IpInfo extends Response
{

    /**
     * Ip:
     *
     * @return string|null
     */
    public function getIp()
    {
        return $this->get("Ip");
    }

    /**
     * Ip:
     *
     * @param string $ip
     */
    public function setIp(string $ip)
    {
        $this->set("Ip", $ip);
    }
    /**
     * Mask:
     *
     * @return string|null
     */
    public function getMask()
    {
        return $this->get("Mask");
    }

    /**
     * Mask:
     *
     * @param string $mask
     */
    public function setMask(string $mask)
    {
        $this->set("Mask", $mask);
    }
    /**
     * Gateway:
     *
     * @return string|null
     */
    public function getGateway()
    {
        return $this->get("Gateway");
    }

    /**
     * Gateway:
     *
     * @param string $gateway
     */
    public function setGateway(string $gateway)
    {
        $this->set("Gateway", $gateway);
    }
    /**
     * Mac:
     *
     * @return string|null
     */
    public function getMac()
    {
        return $this->get("Mac");
    }

    /**
     * Mac:
     *
     * @param string $mac
     */
    public function setMac(string $mac)
    {
        $this->set("Mac", $mac);
    }
    /**
     * SubnetId:
     *
     * @return string|null
     */
    public function getSubnetId()
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId:
     *
     * @param string $subnetId
     */
    public function setSubnetId(string $subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }
    /**
     * VPCId:
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId:
     *
     * @param string $vpcId
     */
    public function setVPCId(string $vpcId)
    {
        $this->set("VPCId", $vpcId);
    }
}
