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

class AddTargetsParamTargets extends Request
{
    

    /**
     * ResourceType: 服务节点的类型。限定枚举值："UHost" / "UNI"/"UPM"/"IP"，默认值："UHost"；非IP类型，如果该资源有多个IP，将只能添加主IP；非IP类型，展示时，会显示相关资源信息，IP类型只展示IP信息。在相关资源被删除时，非IP类型会把相关资源从lb中剔除，IP类型不保证这个逻辑
     *
     * @return string|null
     */
    public function getResourceType()
    {
        return $this->get("ResourceType");
    }

    /**
     * ResourceType: 服务节点的类型。限定枚举值："UHost" / "UNI"/"UPM"/"IP"，默认值："UHost"；非IP类型，如果该资源有多个IP，将只能添加主IP；非IP类型，展示时，会显示相关资源信息，IP类型只展示IP信息。在相关资源被删除时，非IP类型会把相关资源从lb中剔除，IP类型不保证这个逻辑
     *
     * @param string $resourceType
     */
    public function setResourceType($resourceType)
    {
        $this->set("ResourceType", $resourceType);
    }

    /**
     * ResourceId: 服务节点的资源ID。在非IP类型时，必传
     *
     * @return string|null
     */
    public function getResourceId()
    {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: 服务节点的资源ID。在非IP类型时，必传
     *
     * @param string $resourceId
     */
    public function setResourceId($resourceId)
    {
        $this->set("ResourceId", $resourceId);
    }

    /**
     * VPCId: 服务节点的VPC资源ID。在IP类型时，必传
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: 服务节点的VPC资源ID。在IP类型时，必传
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * SubnetId: 服务节点的子网资源ID。在IP类型时，必传
     *
     * @return string|null
     */
    public function getSubnetId()
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 服务节点的子网资源ID。在IP类型时，必传
     *
     * @param string $subnetId
     */
    public function setSubnetId($subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * ResourceIP: 服务节点的IP。在IP类型时，必传
     *
     * @return string|null
     */
    public function getResourceIP()
    {
        return $this->get("ResourceIP");
    }

    /**
     * ResourceIP: 服务节点的IP。在IP类型时，必传
     *
     * @param string $resourceIP
     */
    public function setResourceIP($resourceIP)
    {
        $this->set("ResourceIP", $resourceIP);
    }

    /**
     * Port: 服务节点的端口。限定取值：[1-65535]，默认值80
     *
     * @return integer|null
     */
    public function getPort()
    {
        return $this->get("Port");
    }

    /**
     * Port: 服务节点的端口。限定取值：[1-65535]，默认值80
     *
     * @param int $port
     */
    public function setPort($port)
    {
        $this->set("Port", $port);
    }

    /**
     * Weight: 服务节点的权重。限定取值：[1-100]，默认值1；仅在加权轮询算法时有效
     *
     * @return integer|null
     */
    public function getWeight()
    {
        return $this->get("Weight");
    }

    /**
     * Weight: 服务节点的权重。限定取值：[1-100]，默认值1；仅在加权轮询算法时有效
     *
     * @param int $weight
     */
    public function setWeight($weight)
    {
        $this->set("Weight", $weight);
    }

    /**
     * Enabled: 服务节点是否启用。默认值true
     *
     * @return boolean|null
     */
    public function getEnabled()
    {
        return $this->get("Enabled");
    }

    /**
     * Enabled: 服务节点是否启用。默认值true
     *
     * @param boolean $enabled
     */
    public function setEnabled($enabled)
    {
        $this->set("Enabled", $enabled);
    }

    /**
     * IsBackup: 服务节点是否为备节点。默认值false
     *
     * @return boolean|null
     */
    public function getIsBackup()
    {
        return $this->get("IsBackup");
    }

    /**
     * IsBackup: 服务节点是否为备节点。默认值false
     *
     * @param boolean $isBackup
     */
    public function setIsBackup($isBackup)
    {
        $this->set("IsBackup", $isBackup);
    }
}
