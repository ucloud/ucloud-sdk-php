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
namespace UCloud\UMongoDB\Params;

use UCloud\Core\Request\Request;

class CreateUMongoDBReplSetParamSecGroupId extends Request
{
    

    /**
     * Id: 安全组 ID。至多可以同时绑定5个安全组。
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->get("Id");
    }

    /**
     * Id: 安全组 ID。至多可以同时绑定5个安全组。
     *
     * @param string $id
     */
    public function setId($id)
    {
        $this->set("Id", $id);
    }

    /**
     * Priority: 安全组优先级。取值范围[1, 5]
     *
     * @return integer|null
     */
    public function getPriority()
    {
        return $this->get("Priority");
    }

    /**
     * Priority: 安全组优先级。取值范围[1, 5]
     *
     * @param int $priority
     */
    public function setPriority($priority)
    {
        $this->set("Priority", $priority);
    }
}
