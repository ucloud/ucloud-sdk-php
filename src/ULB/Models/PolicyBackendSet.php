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
namespace UCloud\ULB\Models;

use UCloud\Core\Response\Response;

class PolicyBackendSet extends Response
{
    

    /**
     * BackendId: 所添加的后端资源在ULB中的对象ID，（为ULB系统中使用，与资源自身ID无关
     *
     * @return string|null
     */
    public function getBackendId(): string
    {
        return $this->get("BackendId");
    }

    /**
     * BackendId: 所添加的后端资源在ULB中的对象ID，（为ULB系统中使用，与资源自身ID无关
     *
     * @param string $backendId
     */
    public function setBackendId(string $backendId)
    {
        $this->set("BackendId", $backendId);
    }

    /**
     * ResourceType: 所添加的后端资源的类型，枚举值：UHost -> 云主机；UPM -> 物理云主机； UDHost -> 私有专区主机；UDocker -> 容器；UHybrid->混合云主机；CUBE->Cube；UNI -> 虚拟网卡
     *
     * @return string|null
     */
    public function getResourceType(): string
    {
        return $this->get("ResourceType");
    }

    /**
     * ResourceType: 所添加的后端资源的类型，枚举值：UHost -> 云主机；UPM -> 物理云主机； UDHost -> 私有专区主机；UDocker -> 容器；UHybrid->混合云主机；CUBE->Cube；UNI -> 虚拟网卡
     *
     * @param string $resourceType
     */
    public function setResourceType(string $resourceType)
    {
        $this->set("ResourceType", $resourceType);
    }

    /**
     * ResourceName: 后端资源的实例名称
     *
     * @return string|null
     */
    public function getResourceName(): string
    {
        return $this->get("ResourceName");
    }

    /**
     * ResourceName: 后端资源的实例名称
     *
     * @param string $resourceName
     */
    public function setResourceName(string $resourceName)
    {
        $this->set("ResourceName", $resourceName);
    }

    /**
     * SubResourceId: 如果资源绑定了弹性网卡，则展示弹性网卡的资源ID
     *
     * @return string|null
     */
    public function getSubResourceId(): string
    {
        return $this->get("SubResourceId");
    }

    /**
     * SubResourceId: 如果资源绑定了弹性网卡，则展示弹性网卡的资源ID
     *
     * @param string $subResourceId
     */
    public function setSubResourceId(string $subResourceId)
    {
        $this->set("SubResourceId", $subResourceId);
    }

    /**
     * SubResourceName: 如果资源绑定了弹性网卡，则展示弹性网卡的资源名称
     *
     * @return string|null
     */
    public function getSubResourceName(): string
    {
        return $this->get("SubResourceName");
    }

    /**
     * SubResourceName: 如果资源绑定了弹性网卡，则展示弹性网卡的资源名称
     *
     * @param string $subResourceName
     */
    public function setSubResourceName(string $subResourceName)
    {
        $this->set("SubResourceName", $subResourceName);
    }

    /**
     * SubResourceType: "UNI"或者为空
     *
     * @return string|null
     */
    public function getSubResourceType(): string
    {
        return $this->get("SubResourceType");
    }

    /**
     * SubResourceType: "UNI"或者为空
     *
     * @param string $subResourceType
     */
    public function setSubResourceType(string $subResourceType)
    {
        $this->set("SubResourceType", $subResourceType);
    }

    /**
     * ObjectId: 后端资源的对象ID
     *
     * @return string|null
     */
    public function getObjectId(): string
    {
        return $this->get("ObjectId");
    }

    /**
     * ObjectId: 后端资源的对象ID
     *
     * @param string $objectId
     */
    public function setObjectId(string $objectId)
    {
        $this->set("ObjectId", $objectId);
    }

    /**
     * Port: 所添加的后端资源服务端口
     *
     * @return integer|null
     */
    public function getPort(): int
    {
        return $this->get("Port");
    }

    /**
     * Port: 所添加的后端资源服务端口
     *
     * @param int $port
     */
    public function setPort(int $port)
    {
        $this->set("Port", $port);
    }

    /**
     * PrivateIP: 后端资源的内网IP
     *
     * @return string|null
     */
    public function getPrivateIP(): string
    {
        return $this->get("PrivateIP");
    }

    /**
     * PrivateIP: 后端资源的内网IP
     *
     * @param string $privateIP
     */
    public function setPrivateIP(string $privateIP)
    {
        $this->set("PrivateIP", $privateIP);
    }
}
