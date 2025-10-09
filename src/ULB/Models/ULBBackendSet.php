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

class ULBBackendSet extends Response
{
    

    /**
     * BackendId: 后端资源实例的Id
     *
     * @return string|null
     */
    public function getBackendId()
    {
        return $this->get("BackendId");
    }

    /**
     * BackendId: 后端资源实例的Id
     *
     * @param string $backendId
     */
    public function setBackendId($backendId)
    {
        $this->set("BackendId", $backendId);
    }

    /**
     * ResourceType: 资源实例的类型
     *
     * @return string|null
     */
    public function getResourceType()
    {
        return $this->get("ResourceType");
    }

    /**
     * ResourceType: 资源实例的类型
     *
     * @param string $resourceType
     */
    public function setResourceType($resourceType)
    {
        $this->set("ResourceType", $resourceType);
    }

    /**
     * ResourceId: 资源实例的资源Id
     *
     * @return string|null
     */
    public function getResourceId()
    {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: 资源实例的资源Id
     *
     * @param string $resourceId
     */
    public function setResourceId($resourceId)
    {
        $this->set("ResourceId", $resourceId);
    }

    /**
     * ResourceName: 资源实例的资源名称
     *
     * @return string|null
     */
    public function getResourceName()
    {
        return $this->get("ResourceName");
    }

    /**
     * ResourceName: 资源实例的资源名称
     *
     * @param string $resourceName
     */
    public function setResourceName($resourceName)
    {
        $this->set("ResourceName", $resourceName);
    }

    /**
     * SubResourceType: 资源绑定的虚拟网卡实例的类型
     *
     * @return string|null
     */
    public function getSubResourceType()
    {
        return $this->get("SubResourceType");
    }

    /**
     * SubResourceType: 资源绑定的虚拟网卡实例的类型
     *
     * @param string $subResourceType
     */
    public function setSubResourceType($subResourceType)
    {
        $this->set("SubResourceType", $subResourceType);
    }

    /**
     * SubResourceId: 资源绑定的虚拟网卡实例的资源Id
     *
     * @return string|null
     */
    public function getSubResourceId()
    {
        return $this->get("SubResourceId");
    }

    /**
     * SubResourceId: 资源绑定的虚拟网卡实例的资源Id
     *
     * @param string $subResourceId
     */
    public function setSubResourceId($subResourceId)
    {
        $this->set("SubResourceId", $subResourceId);
    }

    /**
     * SubResourceName: 资源绑定的虚拟网卡实例的资源名称
     *
     * @return string|null
     */
    public function getSubResourceName()
    {
        return $this->get("SubResourceName");
    }

    /**
     * SubResourceName: 资源绑定的虚拟网卡实例的资源名称
     *
     * @param string $subResourceName
     */
    public function setSubResourceName($subResourceName)
    {
        $this->set("SubResourceName", $subResourceName);
    }

    /**
     * PrivateIP: 后端提供服务的内网IP
     *
     * @return string|null
     */
    public function getPrivateIP()
    {
        return $this->get("PrivateIP");
    }

    /**
     * PrivateIP: 后端提供服务的内网IP
     *
     * @param string $privateIP
     */
    public function setPrivateIP($privateIP)
    {
        $this->set("PrivateIP", $privateIP);
    }

    /**
     * Port: 后端提供服务的端口
     *
     * @return integer|null
     */
    public function getPort()
    {
        return $this->get("Port");
    }

    /**
     * Port: 后端提供服务的端口
     *
     * @param int $port
     */
    public function setPort($port)
    {
        $this->set("Port", $port);
    }

    /**
     * Enabled: 后端提供服务的实例启用与否，枚举值：0 禁用 1 启用
     *
     * @return integer|null
     */
    public function getEnabled()
    {
        return $this->get("Enabled");
    }

    /**
     * Enabled: 后端提供服务的实例启用与否，枚举值：0 禁用 1 启用
     *
     * @param int $enabled
     */
    public function setEnabled($enabled)
    {
        $this->set("Enabled", $enabled);
    }

    /**
     * Status: 后端提供服务的实例运行状态，枚举值：0健康检查健康状态 1 健康检查异常
     *
     * @return integer|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 后端提供服务的实例运行状态，枚举值：0健康检查健康状态 1 健康检查异常
     *
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * SubnetId: 后端提供服务的资源所在的子网的ID
     *
     * @return string|null
     */
    public function getSubnetId()
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 后端提供服务的资源所在的子网的ID
     *
     * @param string $subnetId
     */
    public function setSubnetId($subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * IsBackup: 是否为backup，只有当vserver的Backup属性为1时才会有此字段，说明：0：主rs1：备rs
     *
     * @return integer|null
     */
    public function getIsBackup()
    {
        return $this->get("IsBackup");
    }

    /**
     * IsBackup: 是否为backup，只有当vserver的Backup属性为1时才会有此字段，说明：0：主rs1：备rs
     *
     * @param int $isBackup
     */
    public function setIsBackup($isBackup)
    {
        $this->set("IsBackup", $isBackup);
    }

    /**
     * Weight: 后端RS权重（在加权轮询算法下有效）
     *
     * @return integer|null
     */
    public function getWeight()
    {
        return $this->get("Weight");
    }

    /**
     * Weight: 后端RS权重（在加权轮询算法下有效）
     *
     * @param int $weight
     */
    public function setWeight($weight)
    {
        $this->set("Weight", $weight);
    }

    /**
     * VPCId: 后端服务器所在的VPC
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: 后端服务器所在的VPC
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }
}
