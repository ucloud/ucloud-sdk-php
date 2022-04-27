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

class DescribeWhiteListResourceObjectIPInfo extends Response
{
    

    /**
     * GwType: natgw字符串
     *
     * @return string|null
     */
    public function getGwType(): string
    {
        return $this->get("GwType");
    }

    /**
     * GwType: natgw字符串
     *
     * @param string $gwType
     */
    public function setGwType(string $gwType)
    {
        $this->set("GwType", $gwType);
    }

    /**
     * PrivateIP: 白名单资源的内网IP
     *
     * @return string|null
     */
    public function getPrivateIP(): string
    {
        return $this->get("PrivateIP");
    }

    /**
     * PrivateIP: 白名单资源的内网IP
     *
     * @param string $privateIP
     */
    public function setPrivateIP(string $privateIP)
    {
        $this->set("PrivateIP", $privateIP);
    }

    /**
     * ResourceId: 白名单资源Id信息
     *
     * @return string|null
     */
    public function getResourceId(): string
    {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: 白名单资源Id信息
     *
     * @param string $resourceId
     */
    public function setResourceId(string $resourceId)
    {
        $this->set("ResourceId", $resourceId);
    }

    /**
     * ResourceName: 白名单资源名称
     *
     * @return string|null
     */
    public function getResourceName(): string
    {
        return $this->get("ResourceName");
    }

    /**
     * ResourceName: 白名单资源名称
     *
     * @param string $resourceName
     */
    public function setResourceName(string $resourceName)
    {
        $this->set("ResourceName", $resourceName);
    }

    /**
     * ResourceType: 白名单资源类型
     *
     * @return string|null
     */
    public function getResourceType(): string
    {
        return $this->get("ResourceType");
    }

    /**
     * ResourceType: 白名单资源类型
     *
     * @param string $resourceType
     */
    public function setResourceType(string $resourceType)
    {
        $this->set("ResourceType", $resourceType);
    }

    /**
     * SubResourceId: 资源绑定的虚拟网卡的实例ID
     *
     * @return string|null
     */
    public function getSubResourceId(): string
    {
        return $this->get("SubResourceId");
    }

    /**
     * SubResourceId: 资源绑定的虚拟网卡的实例ID
     *
     * @param string $subResourceId
     */
    public function setSubResourceId(string $subResourceId)
    {
        $this->set("SubResourceId", $subResourceId);
    }

    /**
     * SubResourceName: 资源绑定的虚拟网卡的实例名称
     *
     * @return string|null
     */
    public function getSubResourceName(): string
    {
        return $this->get("SubResourceName");
    }

    /**
     * SubResourceName: 资源绑定的虚拟网卡的实例名称
     *
     * @param string $subResourceName
     */
    public function setSubResourceName(string $subResourceName)
    {
        $this->set("SubResourceName", $subResourceName);
    }

    /**
     * SubResourceType: 资源绑定的虚拟网卡的类型
     *
     * @return string|null
     */
    public function getSubResourceType(): string
    {
        return $this->get("SubResourceType");
    }

    /**
     * SubResourceType: 资源绑定的虚拟网卡的类型
     *
     * @param string $subResourceType
     */
    public function setSubResourceType(string $subResourceType)
    {
        $this->set("SubResourceType", $subResourceType);
    }

    /**
     * VPCId: 白名单资源所属VPCId
     *
     * @return string|null
     */
    public function getVPCId(): string
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: 白名单资源所属VPCId
     *
     * @param string $vpcId
     */
    public function setVPCId(string $vpcId)
    {
        $this->set("VPCId", $vpcId);
    }
}
