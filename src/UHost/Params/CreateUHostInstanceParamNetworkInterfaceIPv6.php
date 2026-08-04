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
namespace UCloud\UHost\Params;

use UCloud\Core\Request\Request;

class CreateUHostInstanceParamNetworkInterfaceIPv6 extends Request
{
    

    /**
     * Address: 第N个网卡对应的IPv6地址，默认不分配IPv6，“Auto”自动分配，不为空的其他字符串为实际要分配的IPv6地址。当前仅支持分配一个IPv6地址
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->get("Address");
    }

    /**
     * Address: 第N个网卡对应的IPv6地址，默认不分配IPv6，“Auto”自动分配，不为空的其他字符串为实际要分配的IPv6地址。当前仅支持分配一个IPv6地址
     *
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->set("Address", $address);
    }
}
