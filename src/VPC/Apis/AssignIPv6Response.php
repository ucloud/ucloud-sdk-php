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
namespace UCloud\VPC\Apis;

use UCloud\Core\Response\Response;

class AssignIPv6Response extends Response
{
    

    /**
     * IPv6Addresses: IPv6地址
     *
     * @return string[]|null
     */
    public function getIPv6Addresses()
    {
        return $this->get("IPv6Addresses");
    }

    /**
     * IPv6Addresses: IPv6地址
     *
     * @param string[] $iPv6Addresses
     */
    public function setIPv6Addresses(array $iPv6Addresses)
    {
        $this->set("IPv6Addresses", $iPv6Addresses);
    }

    /**
     * OperatorName: IP类型
     *
     * @return string|null
     */
    public function getOperatorName()
    {
        return $this->get("OperatorName");
    }

    /**
     * OperatorName: IP类型
     *
     * @param string $operatorName
     */
    public function setOperatorName($operatorName)
    {
        $this->set("OperatorName", $operatorName);
    }

    /**
     * IPv6Gateway: IPv6网关
     *
     * @return string|null
     */
    public function getIPv6Gateway()
    {
        return $this->get("IPv6Gateway");
    }

    /**
     * IPv6Gateway: IPv6网关
     *
     * @param string $iPv6Gateway
     */
    public function setIPv6Gateway($iPv6Gateway)
    {
        $this->set("IPv6Gateway", $iPv6Gateway);
    }

    /**
     * Mask: 掩码
     *
     * @return integer|null
     */
    public function getMask()
    {
        return $this->get("Mask");
    }

    /**
     * Mask: 掩码
     *
     * @param int $mask
     */
    public function setMask($mask)
    {
        $this->set("Mask", $mask);
    }
}
