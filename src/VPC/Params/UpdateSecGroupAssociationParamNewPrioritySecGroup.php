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

class UpdateSecGroupAssociationParamNewPrioritySecGroup extends Request
{
    

    /**
     * Priority: 新绑定安全组的绑定优先级。支持 NewPrioritySecGroup 为数组格式，即传对应数据的 JSON 格式数组。
     *
     * @return integer|null
     */
    public function getPriority()
    {
        return $this->get("Priority");
    }

    /**
     * Priority: 新绑定安全组的绑定优先级。支持 NewPrioritySecGroup 为数组格式，即传对应数据的 JSON 格式数组。
     *
     * @param int $priority
     */
    public function setPriority($priority)
    {
        $this->set("Priority", $priority);
    }

    /**
     * SecGroupId: 需新绑定的安全组ID
     *
     * @return string|null
     */
    public function getSecGroupId()
    {
        return $this->get("SecGroupId");
    }

    /**
     * SecGroupId: 需新绑定的安全组ID
     *
     * @param string $secGroupId
     */
    public function setSecGroupId($secGroupId)
    {
        $this->set("SecGroupId", $secGroupId);
    }
}
