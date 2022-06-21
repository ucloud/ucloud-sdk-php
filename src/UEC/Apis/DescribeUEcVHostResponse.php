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
namespace UCloud\UEC\Apis;

use UCloud\Core\Response\Response;
use UCloud\UEC\Models\NodeInfo;
use UCloud\UEC\Models\NodeIpList;

class DescribeUEcVHostResponse extends Response
{
    

    /**
     * TotalCount: 满足条件的节点总数
     *
     * @return int|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 满足条件的节点总数
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }

    /**
     * NodeList: 节点列表
     *
     * @return NodeInfo[]|null
     */
    public function getNodeList()
    {
        $items = $this->get("NodeList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new NodeInfo($item));
        }
        return $result;
    }

    /**
     * NodeList: 节点列表
     *
     * @param NodeInfo[] $nodeList
     */
    public function setNodeList(array $nodeList)
    {
        $result = [];
        foreach ($nodeList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }


}
