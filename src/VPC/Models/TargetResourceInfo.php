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
namespace UCloud\VPC\Models;

use UCloud\Core\Response\Response;

class TargetResourceInfo extends Response
{
    

    /**
     * SubnetworkId: 子网ID
     *
     * @return string|null
     */
    public function getSubnetworkId()
    {
        return $this->get("SubnetworkId");
    }

    /**
     * SubnetworkId: 子网ID
     *
     * @param string $subnetworkId
     */
    public function setSubnetworkId($subnetworkId)
    {
        $this->set("SubnetworkId", $subnetworkId);
    }

    /**
     * ResourceName: 资源名称
     *
     * @return string|null
     */
    public function getResourceName()
    {
        return $this->get("ResourceName");
    }

    /**
     * ResourceName: 资源名称
     *
     * @param string $resourceName
     */
    public function setResourceName($resourceName)
    {
        $this->set("ResourceName", $resourceName);
    }

    /**
     * ResourceId: 资源ID
     *
     * @return string|null
     */
    public function getResourceId()
    {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: 资源ID
     *
     * @param string $resourceId
     */
    public function setResourceId($resourceId)
    {
        $this->set("ResourceId", $resourceId);
    }

    /**
     * ResourceType: 资源类型
     *
     * @return integer|null
     */
    public function getResourceType()
    {
        return $this->get("ResourceType");
    }

    /**
     * ResourceType: 资源类型
     *
     * @param int $resourceType
     */
    public function setResourceType($resourceType)
    {
        $this->set("ResourceType", $resourceType);
    }

    /**
     * SubResourceName: 资源绑定的虚拟网卡的名称
     *
     * @return string|null
     */
    public function getSubResourceName()
    {
        return $this->get("SubResourceName");
    }

    /**
     * SubResourceName: 资源绑定的虚拟网卡的名称
     *
     * @param string $subResourceName
     */
    public function setSubResourceName($subResourceName)
    {
        $this->set("SubResourceName", $subResourceName);
    }

    /**
     * SubResourceId: 资源绑定的虚拟网卡的ID
     *
     * @return string|null
     */
    public function getSubResourceId()
    {
        return $this->get("SubResourceId");
    }

    /**
     * SubResourceId: 资源绑定的虚拟网卡的ID
     *
     * @param string $subResourceId
     */
    public function setSubResourceId($subResourceId)
    {
        $this->set("SubResourceId", $subResourceId);
    }

    /**
     * SubResourceType: 资源绑定虚拟网卡的类型
     *
     * @return integer|null
     */
    public function getSubResourceType()
    {
        return $this->get("SubResourceType");
    }

    /**
     * SubResourceType: 资源绑定虚拟网卡的类型
     *
     * @param int $subResourceType
     */
    public function setSubResourceType($subResourceType)
    {
        $this->set("SubResourceType", $subResourceType);
    }

    /**
     * PrivateIp: 资源内网IP
     *
     * @return string|null
     */
    public function getPrivateIp()
    {
        return $this->get("PrivateIp");
    }

    /**
     * PrivateIp: 资源内网IP
     *
     * @param string $privateIp
     */
    public function setPrivateIp($privateIp)
    {
        $this->set("PrivateIp", $privateIp);
    }
}
