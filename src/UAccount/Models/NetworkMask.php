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
namespace UCloud\UAccount\Models;

use UCloud\Core\Response\Response;

class NetworkMask extends Response
{
    

    /**
     * APINetworkMask: API调用网络掩码，默认空字符串，不限制登录IP，多个IP以英文逗号分隔。
     *
     * @return string|null
     */
    public function getAPINetworkMask(): string
    {
        return $this->get("APINetworkMask");
    }

    /**
     * APINetworkMask: API调用网络掩码，默认空字符串，不限制登录IP，多个IP以英文逗号分隔。
     *
     * @param string $apiNetworkMask
     */
    public function setAPINetworkMask(string $apiNetworkMask)
    {
        $this->set("APINetworkMask", $apiNetworkMask);
    }

    /**
     * LoginNetworkMask: 登录网络掩码，默认空字符串，不限制登录IP，多个IP以英文逗号分隔。
     *
     * @return string|null
     */
    public function getLoginNetworkMask(): string
    {
        return $this->get("LoginNetworkMask");
    }

    /**
     * LoginNetworkMask: 登录网络掩码，默认空字符串，不限制登录IP，多个IP以英文逗号分隔。
     *
     * @param string $loginNetworkMask
     */
    public function setLoginNetworkMask(string $loginNetworkMask)
    {
        $this->set("LoginNetworkMask", $loginNetworkMask);
    }
}
