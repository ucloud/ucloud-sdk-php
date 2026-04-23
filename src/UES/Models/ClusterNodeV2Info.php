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
namespace UCloud\UES\Models;

use UCloud\Core\Response\Response;

class ClusterNodeV2Info extends Response
{
    

    /**
     * RequestId:
     *
     * @return string|null
     */
    public function getRequestId()
    {
        return $this->get("RequestId");
    }

    /**
     * RequestId:
     *
     * @param string $requestId
     */
    public function setRequestId($requestId)
    {
        $this->set("RequestId", $requestId);
    }

    /**
     * ClusterInfo:
     *
     * @return ClusterV2Info|null
     */
    public function getClusterInfo()
    {
        return new ClusterV2Info($this->get("ClusterInfo"));
    }

    /**
     * ClusterInfo:
     *
     * @param ClusterV2Info $clusterInfo
     */
    public function setClusterInfo(array $clusterInfo)
    {
        $this->set("ClusterInfo", $clusterInfo->getAll());
    }

    /**
     * NodeInfoList:
     *
     * @return NodeV2Info[]|null
     */
    public function getNodeInfoList()
    {
        $items = $this->get("NodeInfoList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new NodeV2Info($item));
        }
        return $result;
    }

    /**
     * NodeInfoList:
     *
     * @param NodeV2Info[] $nodeInfoList
     */
    public function setNodeInfoList(array $nodeInfoList)
    {
        $result = [];
        foreach ($nodeInfoList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
