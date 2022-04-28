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

class NatGatewaySubnetSet extends Response
{
    

    /**
     * SubnetworkId: 子网id
     *
     * @return string|null
     */
    public function getSubnetworkId()
    {
        return $this->get("SubnetworkId");
    }

    /**
     * SubnetworkId: 子网id
     *
     * @param string $subnetworkId
     */
    public function setSubnetworkId($subnetworkId)
    {
        $this->set("SubnetworkId", $subnetworkId);
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
    public function setSubnet($subnet)
    {
        $this->set("Subnet", $subnet);
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
    public function setSubnetName($subnetName)
    {
        $this->set("SubnetName", $subnetName);
    }
}
