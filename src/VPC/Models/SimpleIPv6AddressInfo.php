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
namespace UCloud\VPC\Models;

use UCloud\Core\Response\Response;

class SimpleIPv6AddressInfo extends Response
{
    

    /**
     * IPv6Address: IPv6 地址
     *
     * @return string|null
     */
    public function getIPv6Address()
    {
        return $this->get("IPv6Address");
    }

    /**
     * IPv6Address: IPv6 地址
     *
     * @param string $iPv6Address
     */
    public function setIPv6Address($iPv6Address)
    {
        $this->set("IPv6Address", $iPv6Address);
    }

    /**
     * IPv6Id: IPv6 资源 ID
     *
     * @return string|null
     */
    public function getIPv6Id()
    {
        return $this->get("IPv6Id");
    }

    /**
     * IPv6Id: IPv6 资源 ID
     *
     * @param string $iPv6Id
     */
    public function setIPv6Id($iPv6Id)
    {
        $this->set("IPv6Id", $iPv6Id);
    }

    /**
     * Attribute: 属性
     *
     * @return string|null
     */
    public function getAttribute()
    {
        return $this->get("Attribute");
    }

    /**
     * Attribute: 属性
     *
     * @param string $attribute
     */
    public function setAttribute($attribute)
    {
        $this->set("Attribute", $attribute);
    }
}
