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

class SnatDnatRuleInfo extends Response
{
    

    /**
     * PrivateIp: 内网IP地址
     *
     * @return string|null
     */
    public function getPrivateIp(): string
    {
        return $this->get("PrivateIp");
    }

    /**
     * PrivateIp: 内网IP地址
     *
     * @param string $privateIp
     */
    public function setPrivateIp(string $privateIp)
    {
        $this->set("PrivateIp", $privateIp);
    }

    /**
     * NATGWId: 映射所使用的NAT网关资源ID
     *
     * @return string|null
     */
    public function getNATGWId(): string
    {
        return $this->get("NATGWId");
    }

    /**
     * NATGWId: 映射所使用的NAT网关资源ID
     *
     * @param string $natgwId
     */
    public function setNATGWId(string $natgwId)
    {
        $this->set("NATGWId", $natgwId);
    }

    /**
     * EIP: EIP的IP地址
     *
     * @return string|null
     */
    public function getEIP(): string
    {
        return $this->get("EIP");
    }

    /**
     * EIP: EIP的IP地址
     *
     * @param string $eip
     */
    public function setEIP(string $eip)
    {
        $this->set("EIP", $eip);
    }
}
