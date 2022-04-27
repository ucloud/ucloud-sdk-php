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

namespace UCloud\UMem\Models;

use UCloud\Core\Response\Response;

use UCloud\UMem\Models\DescribeUDRedisProxyInfoResponse;

class UDRedisProxyInfo extends Response
{

    /**
     * ResourceId: 代理资源id
     *
     * @return string|null
     */
    public function getResourceId()
    {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: 代理资源id
     *
     * @param string $resourceId
     */
    public function setResourceId(string $resourceId)
    {
        $this->set("ResourceId", $resourceId);
    }
    /**
     * ProxyId: 代理id
     *
     * @return string|null
     */
    public function getProxyId()
    {
        return $this->get("ProxyId");
    }

    /**
     * ProxyId: 代理id
     *
     * @param string $proxyId
     */
    public function setProxyId(string $proxyId)
    {
        $this->set("ProxyId", $proxyId);
    }
    /**
     * Vip: 代理ip
     *
     * @return string|null
     */
    public function getVip()
    {
        return $this->get("Vip");
    }

    /**
     * Vip: 代理ip
     *
     * @param string $vip
     */
    public function setVip(string $vip)
    {
        $this->set("Vip", $vip);
    }
    /**
     * State: 代理状态
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 代理状态
     *
     * @param string $state
     */
    public function setState(string $state)
    {
        $this->set("State", $state);
    }
}
