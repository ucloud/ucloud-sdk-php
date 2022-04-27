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
namespace UCloud\UAccount\Apis;

use UCloud\Core\Request\Request;

class SetNetworkMaskRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "SetNetworkMask"]);
        $this->markRequired("Code");
    }

    

    /**
     * Code: 短信验证码
     *
     * @return string|null
     */
    public function getCode(): string
    {
        return $this->get("Code");
    }

    /**
     * Code: 短信验证码
     *
     * @param string $code
     */
    public function setCode(string $code)
    {
        $this->set("Code", $code);
    }

    /**
     * APINetworkMask: API调用网络掩码，多个IP以英文逗号分隔。默认空字符串，不限制登录IP。
     *
     * @return string|null
     */
    public function getAPINetworkMask(): string
    {
        return $this->get("APINetworkMask");
    }

    /**
     * APINetworkMask: API调用网络掩码，多个IP以英文逗号分隔。默认空字符串，不限制登录IP。
     *
     * @param string $apiNetworkMask
     */
    public function setAPINetworkMask(string $apiNetworkMask)
    {
        $this->set("APINetworkMask", $apiNetworkMask);
    }

    /**
     * LoginNetworkMask: 登录网络掩码，多个IP以英文逗号分隔。默认空字符串，不限制登录IP。
     *
     * @return string|null
     */
    public function getLoginNetworkMask(): string
    {
        return $this->get("LoginNetworkMask");
    }

    /**
     * LoginNetworkMask: 登录网络掩码，多个IP以英文逗号分隔。默认空字符串，不限制登录IP。
     *
     * @param string $loginNetworkMask
     */
    public function setLoginNetworkMask(string $loginNetworkMask)
    {
        $this->set("LoginNetworkMask", $loginNetworkMask);
    }
}
