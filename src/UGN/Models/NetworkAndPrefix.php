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
namespace UCloud\UGN\Models;

use UCloud\Core\Response\Response;

class NetworkAndPrefix extends Response
{
    

    /**
     * NetworkId: 网络实例ID
     *
     * @return string|null
     */
    public function getNetworkId()
    {
        return $this->get("NetworkId");
    }

    /**
     * NetworkId: 网络实例ID
     *
     * @param string $networkId
     */
    public function setNetworkId($networkId)
    {
        $this->set("NetworkId", $networkId);
    }

    /**
     * Prefixes: 网络实例上报的网段
     *
     * @return string[]|null
     */
    public function getPrefixes()
    {
        return $this->get("Prefixes");
    }

    /**
     * Prefixes: 网络实例上报的网段
     *
     * @param string[] $prefixes
     */
    public function setPrefixes(array $prefixes)
    {
        $this->set("Prefixes", $prefixes);
    }
}
