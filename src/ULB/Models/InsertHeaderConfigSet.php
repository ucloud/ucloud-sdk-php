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
namespace UCloud\ULB\Models;

use UCloud\Core\Response\Response;

class InsertHeaderConfigSet extends Response
{
    

    /**
     * Key: 插入的 header 字段名称，长度为 1~40 个字符，支持大小写字母 a~z、数字、下划线（_）和短划线（-）。头字段名称不能重复用于InsertHeader中。header 字段不能使用以下(此处判断大小写不敏感)x-real-ip、x-forwarded-for、x-forwarded-proto、x-forwarded-srcport、ucloud-alb-trace、connection、upgrade、content-length、transfer-encoding、keep-alive、te、host、cookie、remoteip、authority
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->get("Key");
    }

    /**
     * Key: 插入的 header 字段名称，长度为 1~40 个字符，支持大小写字母 a~z、数字、下划线（_）和短划线（-）。头字段名称不能重复用于InsertHeader中。header 字段不能使用以下(此处判断大小写不敏感)x-real-ip、x-forwarded-for、x-forwarded-proto、x-forwarded-srcport、ucloud-alb-trace、connection、upgrade、content-length、transfer-encoding、keep-alive、te、host、cookie、remoteip、authority
     *
     * @param string $key
     */
    public function setKey($key)
    {
        $this->set("Key", $key);
    }

    /**
     * Value: 插入的 header 字段内容。ValueType 取值为 SystemDefined 时取值如下：ClientSrcPort：客户端端口。ClientSrcIp：客户端 IP 地址。Protocol：客户端请求的协议（HTTP 或 HTTPS)。RuleID：客户端请求命中的转发规则ID。ALBID：ALB ID。ALBPort：ALB 端口。ValueType 取值为 UserDefined 时：可以自定义头字段内容，限制长度为 1~128 个字符，只支持 ASCII 码值ch >= 32 && ch < 127范围内、不包括 $ 的可打印字符。ValueType 取值为 ReferenceHeader 时：可以引用请求头字段中的某一个字段，限制长度限制为 1~128 个字符，支持小写字母 a~z、数字、短划线（-）和下划线（_）。
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->get("Value");
    }

    /**
     * Value: 插入的 header 字段内容。ValueType 取值为 SystemDefined 时取值如下：ClientSrcPort：客户端端口。ClientSrcIp：客户端 IP 地址。Protocol：客户端请求的协议（HTTP 或 HTTPS)。RuleID：客户端请求命中的转发规则ID。ALBID：ALB ID。ALBPort：ALB 端口。ValueType 取值为 UserDefined 时：可以自定义头字段内容，限制长度为 1~128 个字符，只支持 ASCII 码值ch >= 32 && ch < 127范围内、不包括 $ 的可打印字符。ValueType 取值为 ReferenceHeader 时：可以引用请求头字段中的某一个字段，限制长度限制为 1~128 个字符，支持小写字母 a~z、数字、短划线（-）和下划线（_）。
     *
     * @param string $value
     */
    public function setValue($value)
    {
        $this->set("Value", $value);
    }

    /**
     * ValueType: 头字段内容类型。取值：UserDefined：用户指定。ReferenceHeader：引用用户请求头中的某一个字段。SystemDefined：系统定义。
     *
     * @return string|null
     */
    public function getValueType()
    {
        return $this->get("ValueType");
    }

    /**
     * ValueType: 头字段内容类型。取值：UserDefined：用户指定。ReferenceHeader：引用用户请求头中的某一个字段。SystemDefined：系统定义。
     *
     * @param string $valueType
     */
    public function setValueType($valueType)
    {
        $this->set("ValueType", $valueType);
    }
}
