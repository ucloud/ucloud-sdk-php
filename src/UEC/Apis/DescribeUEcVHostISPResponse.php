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
namespace UCloud\UEC\Apis;

use UCloud\Core\Response\Response;
use UCloud\UEC\Models\NodeIspList;

class DescribeUEcVHostISPResponse extends Response
{
    

    /**
     * NodeIspList: 节点运营商列表
     *
     * @return NodeIspList[]|null
     */
    public function getNodeIspList()
    {
        $items = $this->get("NodeIspList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new NodeIspList($item));
        }
        return $result;
    }

    /**
     * NodeIspList: 节点运营商列表
     *
     * @param NodeIspList[] $nodeIspList
     */
    public function setNodeIspList(array $nodeIspList)
    {
        $result = [];
        foreach ($nodeIspList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
