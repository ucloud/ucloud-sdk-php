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
namespace UCloud\VPC\Params;

use UCloud\Core\Request\Request;

class AssociateSecGroupParamPrioritySecGroup extends Request
{
    

    /**
     * Priority: 绑定优先级。该字段和资源 ID 只支持一个批量。支持 PrioritySecGroup 的 JSON 格式数组。
     *
     * @return integer|null
     */
    public function getPriority()
    {
        return $this->get("Priority");
    }

    /**
     * Priority: 绑定优先级。该字段和资源 ID 只支持一个批量。支持 PrioritySecGroup 的 JSON 格式数组。
     *
     * @param int $priority
     */
    public function setPriority($priority)
    {
        $this->set("Priority", $priority);
    }

    /**
     * SecGroupId: 安全组 ID。该字段和资源 ID 只支持一个批量。支持 PrioritySecGroup 的 JSON 格式数组。
     *
     * @return string|null
     */
    public function getSecGroupId()
    {
        return $this->get("SecGroupId");
    }

    /**
     * SecGroupId: 安全组 ID。该字段和资源 ID 只支持一个批量。支持 PrioritySecGroup 的 JSON 格式数组。
     *
     * @param string $secGroupId
     */
    public function setSecGroupId($secGroupId)
    {
        $this->set("SecGroupId", $secGroupId);
    }
}
