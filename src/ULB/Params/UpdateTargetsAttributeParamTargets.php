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
namespace UCloud\ULB\Params;

use UCloud\Core\Request\Request;

class UpdateTargetsAttributeParamTargets extends Request
{
    

    /**
     * Id: 服务节点的标识ID。限定枚举值："UHost" / "UNI"/"UPM"/"IP"；要更新的Targets数组长度至少为1，不超过20个
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->get("Id");
    }

    /**
     * Id: 服务节点的标识ID。限定枚举值："UHost" / "UNI"/"UPM"/"IP"；要更新的Targets数组长度至少为1，不超过20个
     *
     * @param string $id
     */
    public function setId($id)
    {
        $this->set("Id", $id);
    }

    /**
     * Weight: 服务节点的权重。限定取值：[1-100]，默认值1；仅在加权轮询算法时有效；要更新的Targets数组长度至少为1，不超过20个
     *
     * @return integer|null
     */
    public function getWeight()
    {
        return $this->get("Weight");
    }

    /**
     * Weight: 服务节点的权重。限定取值：[1-100]，默认值1；仅在加权轮询算法时有效；要更新的Targets数组长度至少为1，不超过20个
     *
     * @param int $weight
     */
    public function setWeight($weight)
    {
        $this->set("Weight", $weight);
    }

    /**
     * Enabled: 服务节点是否启用。默认值true；要更新的Targets数组长度至少为1，不超过20个
     *
     * @return boolean|null
     */
    public function getEnabled()
    {
        return $this->get("Enabled");
    }

    /**
     * Enabled: 服务节点是否启用。默认值true；要更新的Targets数组长度至少为1，不超过20个
     *
     * @param boolean $enabled
     */
    public function setEnabled($enabled)
    {
        $this->set("Enabled", $enabled);
    }

    /**
     * IsBackup: 服务节点是否为备节点。默认值false；要更新的Targets数组长度至少为1，不超过20个
     *
     * @return boolean|null
     */
    public function getIsBackup()
    {
        return $this->get("IsBackup");
    }

    /**
     * IsBackup: 服务节点是否为备节点。默认值false；要更新的Targets数组长度至少为1，不超过20个
     *
     * @param boolean $isBackup
     */
    public function setIsBackup($isBackup)
    {
        $this->set("IsBackup", $isBackup);
    }
}
