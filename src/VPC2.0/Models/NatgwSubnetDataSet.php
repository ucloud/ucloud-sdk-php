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

use UCloud\VPC\Models\ListSubnetForNATGWResponse;

class NatgwSubnetDataSet extends Response
{

    /**
     * SubnetId: 子网id
     *
     * @return string|null
     */
    public function getSubnetId()
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 子网id
     *
     * @param string $subnetId
     */
    public function setSubnetId(string $subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }
    /**
     * Subnet: 子网网段
     *
     * @return string|null
     */
    public function getSubnet()
    {
        return $this->get("Subnet");
    }

    /**
     * Subnet: 子网网段
     *
     * @param string $subnet
     */
    public function setSubnet(string $subnet)
    {
        $this->set("Subnet", $subnet);
    }
    /**
     * Netmask: 掩码
     *
     * @return string|null
     */
    public function getNetmask()
    {
        return $this->get("Netmask");
    }

    /**
     * Netmask: 掩码
     *
     * @param string $netmask
     */
    public function setNetmask(string $netmask)
    {
        $this->set("Netmask", $netmask);
    }
    /**
     * SubnetName: 子网名字
     *
     * @return string|null
     */
    public function getSubnetName()
    {
        return $this->get("SubnetName");
    }

    /**
     * SubnetName: 子网名字
     *
     * @param string $subnetName
     */
    public function setSubnetName(string $subnetName)
    {
        $this->set("SubnetName", $subnetName);
    }
    /**
     * HasNATGW: 是否绑定NATGW
     *
     * @return boolean|null
     */
    public function getHasNATGW()
    {
        return $this->get("HasNATGW");
    }

    /**
     * HasNATGW: 是否绑定NATGW
     *
     * @param boolean $hasNATGW
     */
    public function setHasNATGW(bool $hasNATGW)
    {
        $this->set("HasNATGW", $hasNATGW);
    }
}
