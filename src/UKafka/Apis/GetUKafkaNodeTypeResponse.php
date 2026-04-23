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
namespace UCloud\UKafka\Apis;

use UCloud\Core\Response\Response;
use UCloud\UKafka\Models\InstanceType;
use UCloud\UKafka\Models\DiskSet;

class GetUKafkaNodeTypeResponse extends Response
{
    

    /**
     * NodeTypeSet: 机型信息列表
     *
     * @return InstanceType[]|null
     */
    public function getNodeTypeSet()
    {
        $items = $this->get("NodeTypeSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new InstanceType($item));
        }
        return $result;
    }

    /**
     * NodeTypeSet: 机型信息列表
     *
     * @param InstanceType[] $nodeTypeSet
     */
    public function setNodeTypeSet(array $nodeTypeSet)
    {
        $result = [];
        foreach ($nodeTypeSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
