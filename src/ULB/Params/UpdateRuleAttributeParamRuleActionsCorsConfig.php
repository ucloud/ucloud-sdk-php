<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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
namespace UCloud\ULB\Params;

use UCloud\Core\Request\Request;

class UpdateRuleAttributeParamRuleActionsCorsConfig extends Request
{
    

    /**
     * AllowOrigin: 允许的访问来源列表。支持只配置一个元素*，或配置一个或多个值。单个值必须以http://或者https://开头，后边加一个正确的域名或一级泛域名。（例：http://*.test.abc.example.com）单个值可以不加端口，也可以指定端口，端口范围：1~65535。最多支持5个值
     *
     * @return string[]|null
     */
    public function getAllowOrigin()
    {
        return $this->get("AllowOrigin");
    }

    /**
     * AllowOrigin: 允许的访问来源列表。支持只配置一个元素*，或配置一个或多个值。单个值必须以http://或者https://开头，后边加一个正确的域名或一级泛域名。（例：http://*.test.abc.example.com）单个值可以不加端口，也可以指定端口，端口范围：1~65535。最多支持5个值
     *
     * @param string[] $allowOrigin
     */
    public function setAllowOrigin(array $allowOrigin)
    {
        $this->set("AllowOrigin", $allowOrigin);
    }

    /**
     * AllowHeaders: 允许跨域的 Header 列表。支持配置为*或配置一个或多个 value 值。单个 value 值只允许包含大小写字母、数字，不能以下划线（_）和短划线（-）开头或结尾，最大长度限制为 32 个字符。最多支持20个值
     *
     * @return string[]|null
     */
    public function getAllowHeaders()
    {
        return $this->get("AllowHeaders");
    }

    /**
     * AllowHeaders: 允许跨域的 Header 列表。支持配置为*或配置一个或多个 value 值。单个 value 值只允许包含大小写字母、数字，不能以下划线（_）和短划线（-）开头或结尾，最大长度限制为 32 个字符。最多支持20个值
     *
     * @param string[] $allowHeaders
     */
    public function setAllowHeaders(array $allowHeaders)
    {
        $this->set("AllowHeaders", $allowHeaders);
    }

    /**
     * ExposeHeaders: 允许暴露的 Header 列表。支持配置为*或配置一个或多个 value 值。单个 value 值只允许包含大小写字母、数字，不能以下划线（_）和短划线（-）开头或结尾，最大长度限制为 32 个字符。最多支持20个值
     *
     * @return string[]|null
     */
    public function getExposeHeaders()
    {
        return $this->get("ExposeHeaders");
    }

    /**
     * ExposeHeaders: 允许暴露的 Header 列表。支持配置为*或配置一个或多个 value 值。单个 value 值只允许包含大小写字母、数字，不能以下划线（_）和短划线（-）开头或结尾，最大长度限制为 32 个字符。最多支持20个值
     *
     * @param string[] $exposeHeaders
     */
    public function setExposeHeaders(array $exposeHeaders)
    {
        $this->set("ExposeHeaders", $exposeHeaders);
    }

    /**
     * AllowMethods: 选择跨域访问时允许的 HTTP 方法。取值：GET。POST。PUT。DELETE。HEAD。OPTIONS。PATCH。
     *
     * @return string[]|null
     */
    public function getAllowMethods()
    {
        return $this->get("AllowMethods");
    }

    /**
     * AllowMethods: 选择跨域访问时允许的 HTTP 方法。取值：GET。POST。PUT。DELETE。HEAD。OPTIONS。PATCH。
     *
     * @param string[] $allowMethods
     */
    public function setAllowMethods(array $allowMethods)
    {
        $this->set("AllowMethods", $allowMethods);
    }

    /**
     * AllowCredentials: 是否允许携带凭证信息。取值：on：是。off：否。
     *
     * @return string|null
     */
    public function getAllowCredentials()
    {
        return $this->get("AllowCredentials");
    }

    /**
     * AllowCredentials: 是否允许携带凭证信息。取值：on：是。off：否。
     *
     * @param string $allowCredentials
     */
    public function setAllowCredentials($allowCredentials)
    {
        $this->set("AllowCredentials", $allowCredentials);
    }

    /**
     * MaxAge: 预检请求在浏览器的最大缓存时间，单位：秒。取值范围：-1~172800。
     *
     * @return integer|null
     */
    public function getMaxAge()
    {
        return $this->get("MaxAge");
    }

    /**
     * MaxAge: 预检请求在浏览器的最大缓存时间，单位：秒。取值范围：-1~172800。
     *
     * @param int $maxAge
     */
    public function setMaxAge($maxAge)
    {
        $this->set("MaxAge", $maxAge);
    }
}
