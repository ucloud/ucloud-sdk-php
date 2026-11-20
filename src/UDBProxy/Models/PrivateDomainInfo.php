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
namespace UCloud\UDBProxy\Models;

use UCloud\Core\Response\Response;

class PrivateDomainInfo extends Response
{
    

    /**
     * PrivateDomain: 实例的内网域名地址，形如 xxx.ucloudcs.com；未开通内网域名时为空字符串
     *
     * @return string|null
     */
    public function getPrivateDomain()
    {
        return $this->get("PrivateDomain");
    }

    /**
     * PrivateDomain: 实例的内网域名地址，形如 xxx.ucloudcs.com；未开通内网域名时为空字符串
     *
     * @param string $privateDomain
     */
    public function setPrivateDomain($privateDomain)
    {
        $this->set("PrivateDomain", $privateDomain);
    }

    /**
     * EnablePrivateDomain: 内网域名是否已开启：1 已开启，2 已关闭；未开通内网域名时返回 2
     *
     * @return integer|null
     */
    public function getEnablePrivateDomain()
    {
        return $this->get("EnablePrivateDomain");
    }

    /**
     * EnablePrivateDomain: 内网域名是否已开启：1 已开启，2 已关闭；未开通内网域名时返回 2
     *
     * @param int $enablePrivateDomain
     */
    public function setEnablePrivateDomain($enablePrivateDomain)
    {
        $this->set("EnablePrivateDomain", $enablePrivateDomain);
    }

    /**
     * EnableConnectToDB: 内网域名指向的数据源：1 指向主库（可直连数据库），2 指向代理（经 UDBProxy访问）；未开通时返回 2
     *
     * @return integer|null
     */
    public function getEnableConnectToDB()
    {
        return $this->get("EnableConnectToDB");
    }

    /**
     * EnableConnectToDB: 内网域名指向的数据源：1 指向主库（可直连数据库），2 指向代理（经 UDBProxy访问）；未开通时返回 2
     *
     * @param int $enableConnectToDB
     */
    public function setEnableConnectToDB($enableConnectToDB)
    {
        $this->set("EnableConnectToDB", $enableConnectToDB);
    }
}
