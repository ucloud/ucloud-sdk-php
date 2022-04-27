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
namespace UCloud\UK8S\Apis;

use UCloud\Core\Response\Response;
use UCloud\UK8S\Models\NodeGroupSet;

class ListUK8SNodeGroupResponse extends Response
{
    

    /**
     * NodeGroupList: 节点池列表
     *
     * @return NodeGroupSet[]|null
     */
    public function getNodeGroupList(): array
    {
        $items = $this->get("NodeGroupList") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new NodeGroupSet($item));
        }
        return $result;
    }

    /**
     * NodeGroupList: 节点池列表
     *
     * @param NodeGroupSet[] $nodeGroupList
     */
    public function setNodeGroupList(array $nodeGroupList)
    {
        $result = [];
        foreach ($nodeGroupList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
