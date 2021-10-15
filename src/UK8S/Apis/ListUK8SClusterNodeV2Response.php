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
namespace UCloud\UK8S\Apis;

use UCloud\Core\Response\Response;
use UCloud\UK8S\Models\NodeInfoV2;
use UCloud\UK8S\Models\UHostIPSet;
use UCloud\UK8S\Models\KubeProxy;

class ListUK8SClusterNodeV2Response extends Response
{
    

    /**
     * NodeSet: 节点详细信息，见NodeInfoV2。
     *
     * @return NodeInfoV2[]|null
     */
    public function getNodeSet()
    {
        $items = $this->get("NodeSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new NodeInfoV2($item));
        }
        return $result;
    }

    /**
     * NodeSet: 节点详细信息，见NodeInfoV2。
     *
     * @param NodeInfoV2[] $nodeSet
     */
    public function setNodeSet(array $nodeSet)
    {
        $result = [];
        foreach ($nodeSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * TotalCount: 满足条件的节点数量，包括Master。
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 满足条件的节点数量，包括Master。
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }
}
