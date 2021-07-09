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
namespace UCloud\UNet\Models;

use UCloud\Core\Response\Response;

class ResourceSet extends Response
{
    

    /**
     * Zone: 可用区
     *
     * @return integer|null
     */
    public function getZone(): int
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区
     *
     * @param int $zone
     */
    public function setZone(int $zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * Name: 名称
     *
     * @return string|null
     */
    public function getName(): string
    {
        return $this->get("Name");
    }

    /**
     * Name: 名称
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->set("Name", $name);
    }

    /**
     * PrivateIP: 内网IP
     *
     * @return string|null
     */
    public function getPrivateIP(): string
    {
        return $this->get("PrivateIP");
    }

    /**
     * PrivateIP: 内网IP
     *
     * @param string $privateIP
     */
    public function setPrivateIP(string $privateIP)
    {
        $this->set("PrivateIP", $privateIP);
    }

    /**
     * Remark: 备注
     *
     * @return string|null
     */
    public function getRemark(): string
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 备注
     *
     * @param string $remark
     */
    public function setRemark(string $remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * ResourceID: 绑定该防火墙的资源id
     *
     * @return string|null
     */
    public function getResourceID(): string
    {
        return $this->get("ResourceID");
    }

    /**
     * ResourceID: 绑定该防火墙的资源id
     *
     * @param string $resourceID
     */
    public function setResourceID(string $resourceID)
    {
        $this->set("ResourceID", $resourceID);
    }

    /**
     * ResourceType: 绑定防火墙组的资源类型。"unatgw"，NAT网关； "uhost"，云主机； "upm"，物理云主机； "hadoophost"，hadoop节点； "fortresshost"，堡垒机； "udhost"，私有专区主机；"udockhost"，容器；"dbaudit"，数据库审计.
     *
     * @return string|null
     */
    public function getResourceType(): string
    {
        return $this->get("ResourceType");
    }

    /**
     * ResourceType: 绑定防火墙组的资源类型。"unatgw"，NAT网关； "uhost"，云主机； "upm"，物理云主机； "hadoophost"，hadoop节点； "fortresshost"，堡垒机； "udhost"，私有专区主机；"udockhost"，容器；"dbaudit"，数据库审计.
     *
     * @param string $resourceType
     */
    public function setResourceType(string $resourceType)
    {
        $this->set("ResourceType", $resourceType);
    }

    /**
     * Status: 状态
     *
     * @return integer|null
     */
    public function getStatus(): int
    {
        return $this->get("Status");
    }

    /**
     * Status: 状态
     *
     * @param int $status
     */
    public function setStatus(int $status)
    {
        $this->set("Status", $status);
    }

    /**
     * Tag: 业务组
     *
     * @return string|null
     */
    public function getTag(): string
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组
     *
     * @param string $tag
     */
    public function setTag(string $tag)
    {
        $this->set("Tag", $tag);
    }
}
