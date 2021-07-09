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

class EIPAddrSet extends Response
{
    

    /**
     * OperatorName: 运营商信息, 枚举值为:  BGP: BGP; International: 国际.
     *
     * @return string|null
     */
    public function getOperatorName(): string
    {
        return $this->get("OperatorName");
    }

    /**
     * OperatorName: 运营商信息, 枚举值为:  BGP: BGP; International: 国际.
     *
     * @param string $operatorName
     */
    public function setOperatorName(string $operatorName)
    {
        $this->set("OperatorName", $operatorName);
    }

    /**
     * IP: 弹性IP地址
     *
     * @return string|null
     */
    public function getIP(): string
    {
        return $this->get("IP");
    }

    /**
     * IP: 弹性IP地址
     *
     * @param string $ip
     */
    public function setIP(string $ip)
    {
        $this->set("IP", $ip);
    }
}
