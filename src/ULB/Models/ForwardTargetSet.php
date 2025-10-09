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

class ForwardTargetSet extends Response
{
    

    /**
     * Id: 服务节点的标识ID
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->get("Id");
    }

    /**
     * Id: 服务节点的标识ID
     *
     * @param string $id
     */
    public function setId($id)
    {
        $this->set("Id", $id);
    }

    /**
     * Weight: 权重。仅监听器负载均衡算法是加权轮询是有效；取值范围[1-100]，默认值为1
     *
     * @return integer|null
     */
    public function getWeight()
    {
        return $this->get("Weight");
    }

    /**
     * Weight: 权重。仅监听器负载均衡算法是加权轮询是有效；取值范围[1-100]，默认值为1
     *
     * @param int $weight
     */
    public function setWeight($weight)
    {
        $this->set("Weight", $weight);
    }
}
