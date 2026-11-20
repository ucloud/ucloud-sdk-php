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
namespace UCloud\UDBProxy\Apis;

use UCloud\Core\Response\Response;
use UCloud\UDBProxy\Models\NodeClientInfo;
use UCloud\UDBProxy\Models\ProxyProcesslist;

class ListUDBProxyClientResponse extends Response
{
    

    /**
     * UDBProxyID: 代理ID
     *
     * @return string|null
     */
    public function getUDBProxyID()
    {
        return $this->get("UDBProxyID");
    }

    /**
     * UDBProxyID: 代理ID
     *
     * @param string $udbProxyID
     */
    public function setUDBProxyID($udbProxyID)
    {
        $this->set("UDBProxyID", $udbProxyID);
    }

    /**
     * NodeClientInfos: 代理节点客户端IP连接信息
     *
     * @return NodeClientInfo[]|null
     */
    public function getNodeClientInfos()
    {
        $items = $this->get("NodeClientInfos");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new NodeClientInfo($item));
        }
        return $result;
    }

    /**
     * NodeClientInfos: 代理节点客户端IP连接信息
     *
     * @param NodeClientInfo[] $nodeClientInfos
     */
    public function setNodeClientInfos(array $nodeClientInfos)
    {
        $result = [];
        foreach ($nodeClientInfos as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
