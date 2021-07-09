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
namespace UCloud\UEC\Models;

use UCloud\Core\Response\Response;

class ResourceSet extends Response {
    

    /**
     * NodeId: 节点id
     *
     * @return string|null
     */
    public function getNodeId(): string {
        return $this->get("NodeId");
    }

    /**
     * NodeId: 节点id
     *
     * @param string $nodeId
     */
    public function setNodeId(string $nodeId) {
        $this->set("NodeId", $nodeId);
    }

    /**
     * OuterIps: 机器外网ip集合
     *
     * @return string[]|null
     */
    public function getOuterIps(): array {
        return $this->get("OuterIps");
    }

    /**
     * OuterIps: 机器外网ip集合
     *
     * @param string[] $outerIps
     */
    public function setOuterIps(array $outerIps) {
        $this->set("OuterIps", $outerIps);
    }


}
