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
namespace UCloud\VPC\Models;

use UCloud\Core\Response\Response;

class GetAvailableResourceForWhiteListDataSet extends Response
{
    

    /**
     * ResourceId: 资源类型Id
     *
     * @return string|null
     */
    public function getResourceId()
    {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: 资源类型Id
     *
     * @param string $resourceId
     */
    public function setResourceId($resourceId)
    {
        $this->set("ResourceId", $resourceId);
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
     * PrivateIP: 资源的内网Ip
     *
     * @return string|null
     */
    public function getPrivateIP()
    {
        return $this->get("PrivateIP");
    }

    /**
     * PrivateIP: 资源的内网Ip
     *
     * @param string $privateIP
     */
    public function setPrivateIP($privateIP)
    {
        $this->set("PrivateIP", $privateIP);
    }

    /**
     * ResourceType: 资源类型。"uhost"：云主机； "upm"，物理云主机； "hadoophost"：hadoop节点； "fortresshost"：堡垒机： "udockhost"，容器
     *
     * @return string|null
     */
    public function getResourceType()
    {
        return $this->get("ResourceType");
    }

    /**
     * ResourceType: 资源类型。"uhost"：云主机； "upm"，物理云主机； "hadoophost"：hadoop节点； "fortresshost"：堡垒机： "udockhost"，容器
     *
     * @param string $resourceType
     */
    public function setResourceType($resourceType)
    {
        $this->set("ResourceType", $resourceType);
    }

    /**
     * SubResourceName: 资源绑定的虚拟网卡的实例名称
     *
     * @return string|null
     */
    public function getSubResourceName()
    {
        return $this->get("SubResourceName");
    }

    /**
     * SubResourceName: 资源绑定的虚拟网卡的实例名称
     *
     * @param string $subResourceName
     */
    public function setSubResourceName($subResourceName)
    {
        $this->set("SubResourceName", $subResourceName);
    }

    /**
     * VPCId: 资源所属VPCId
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: 资源所属VPCId
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * SubnetworkId: 资源所属子网Id
     *
     * @return string|null
     */
    public function getSubnetworkId()
    {
        return $this->get("SubnetworkId");
    }

    /**
     * SubnetworkId: 资源所属子网Id
     *
     * @param string $subnetworkId
     */
    public function setSubnetworkId($subnetworkId)
    {
        $this->set("SubnetworkId", $subnetworkId);
    }

    /**
     * SubResourceId: 资源绑定的虚拟网卡的实例ID
     *
     * @return string|null
     */
    public function getSubResourceId()
    {
        return $this->get("SubResourceId");
    }

    /**
     * SubResourceId: 资源绑定的虚拟网卡的实例ID
     *
     * @param string $subResourceId
     */
    public function setSubResourceId($subResourceId)
    {
        $this->set("SubResourceId", $subResourceId);
    }

    /**
     * SubResourceType: 资源绑定的虚拟网卡的实例类型
     *
     * @return string|null
     */
    public function getSubResourceType()
    {
        return $this->get("SubResourceType");
    }

    /**
     * SubResourceType: 资源绑定的虚拟网卡的实例类型
     *
     * @param string $subResourceType
     */
    public function setSubResourceType($subResourceType)
    {
        $this->set("SubResourceType", $subResourceType);
    }
}
