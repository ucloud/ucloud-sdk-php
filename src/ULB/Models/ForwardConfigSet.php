<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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
namespace UCloud\ULB\Models;

use UCloud\Core\Response\Response;

class ForwardConfigSet extends Response
{
    

    /**
     * Targets: 转发的后端服务节点。限定在监听器的服务节点池里；数组长度可以为0。具体结构详见 ForwardTargetSet
     *
     * @return ForwardTargetSet[]|null
     */
    public function getTargets()
    {
        $items = $this->get("Targets");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ForwardTargetSet($item));
        }
        return $result;
    }

    /**
     * Targets: 转发的后端服务节点。限定在监听器的服务节点池里；数组长度可以为0。具体结构详见 ForwardTargetSet
     *
     * @param ForwardTargetSet[] $targets
     */
    public function setTargets(array $targets)
    {
        $result = [];
        foreach ($targets as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
