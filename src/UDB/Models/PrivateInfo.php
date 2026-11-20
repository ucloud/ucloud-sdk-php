<?php
/**
 * Copyright 2026 UCloud Technology Co., Ltd.
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
namespace UCloud\UDB\Models;

use UCloud\Core\Response\Response;

class PrivateInfo extends Response
{
    

    /**
     * VPCId: 实例内网所在的 VPC ID
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: 实例内网所在的 VPC ID
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * SubnetId: 实例内网所在的子网 ID
     *
     * @return string|null
     */
    public function getSubnetId()
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 实例内网所在的子网 ID
     *
     * @param string $subnetId
     */
    public function setSubnetId($subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * PrivateIP: 实例内网服务地址（VIP）
     *
     * @return string|null
     */
    public function getPrivateIP()
    {
        return $this->get("PrivateIP");
    }

    /**
     * PrivateIP: 实例内网服务地址（VIP）
     *
     * @param string $privateIP
     */
    public function setPrivateIP($privateIP)
    {
        $this->set("PrivateIP", $privateIP);
    }

    /**
     * PrivateDomain: 实例的内网域名；未开通内网域名时为空字符串
     *
     * @return string|null
     */
    public function getPrivateDomain()
    {
        return $this->get("PrivateDomain");
    }

    /**
     * PrivateDomain: 实例的内网域名；未开通内网域名时为空字符串
     *
     * @param string $privateDomain
     */
    public function setPrivateDomain($privateDomain)
    {
        $this->set("PrivateDomain", $privateDomain);
    }

    /**
     * PrivatePort: 内网域名状态，字符串枚举，取值与 Status 同源；未开通内网域名时返回NetworkConnectionDisabled
     *
     * @return integer|null
     */
    public function getPrivatePort()
    {
        return $this->get("PrivatePort");
    }

    /**
     * PrivatePort: 内网域名状态，字符串枚举，取值与 Status 同源；未开通内网域名时返回NetworkConnectionDisabled
     *
     * @param int $privatePort
     */
    public function setPrivatePort($privatePort)
    {
        $this->set("PrivatePort", $privatePort);
    }

    /**
     * PrivateDomainStatus: 实例内网服务端口
     *
     * @return string|null
     */
    public function getPrivateDomainStatus()
    {
        return $this->get("PrivateDomainStatus");
    }

    /**
     * PrivateDomainStatus: 实例内网服务端口
     *
     * @param string $privateDomainStatus
     */
    public function setPrivateDomainStatus($privateDomainStatus)
    {
        $this->set("PrivateDomainStatus", $privateDomainStatus);
    }
}
