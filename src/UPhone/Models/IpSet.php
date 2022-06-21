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
namespace UCloud\UPhone\Models;

use UCloud\Core\Response\Response;

class IpSet extends Response
{
    

    /**
     * Ip: IP地址
     *
     * @return string|null
     */
    public function getIp()
    {
        return $this->get("Ip");
    }

    /**
     * Ip: IP地址
     *
     * @param string $ip
     */
    public function setIp($ip)
    {
        $this->set("Ip", $ip);
    }

    /**
     * IpMode: ipv4或者ipv6
     *
     * @return string|null
     */
    public function getIpMode()
    {
        return $this->get("IpMode");
    }

    /**
     * IpMode: ipv4或者ipv6
     *
     * @param string $ipMode
     */
    public function setIpMode($ipMode)
    {
        $this->set("IpMode", $ipMode);
    }

    /**
     * IpType: 共有或私有
     *
     * @return string|null
     */
    public function getIpType()
    {
        return $this->get("IpType");
    }

    /**
     * IpType: 共有或私有
     *
     * @param string $ipType
     */
    public function setIpType($ipType)
    {
        $this->set("IpType", $ipType);
    }

    /**
     * Isp: 运营商
     *
     * @return string|null
     */
    public function getIsp()
    {
        return $this->get("Isp");
    }

    /**
     * Isp: 运营商
     *
     * @param string $isp
     */
    public function setIsp($isp)
    {
        $this->set("Isp", $isp);
    }


}
