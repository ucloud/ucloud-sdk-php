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

class UNIIpInfo extends Response
{
    

    /**
     * IpType: ip类型 SecondaryIp/PrimaryIp
     *
     * @return string|null
     */
    public function getIpType()
    {
        return $this->get("IpType");
    }

    /**
     * IpType: ip类型 SecondaryIp/PrimaryIp
     *
     * @param string $ipType
     */
    public function setIpType($ipType)
    {
        $this->set("IpType", $ipType);
    }

    /**
     * IpAddr: ip 地址
     *
     * @return string[]|null
     */
    public function getIpAddr()
    {
        return $this->get("IpAddr");
    }

    /**
     * IpAddr: ip 地址
     *
     * @param string[] $ipAddr
     */
    public function setIpAddr(array $ipAddr)
    {
        $this->set("IpAddr", $ipAddr);
    }
}
