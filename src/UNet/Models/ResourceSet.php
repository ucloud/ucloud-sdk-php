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
namespace UCloud\UNet\Models;

use UCloud\Core\Response\Response;

class ResourceSet extends Response
{
    

    /**
     * Zone: 可用区
     *
     * @return integer|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区
     *
     * @param int $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
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
     * SubResourceType: 资源绑定的虚拟网卡的类型，“uni”，虚拟网卡。
     *
     * @return string|null
     */
    public function getSubResourceType()
    {
        return $this->get("SubResourceType");
    }

    /**
     * SubResourceType: 资源绑定的虚拟网卡的类型，“uni”，虚拟网卡。
     *
     * @param string $subResourceType
     */
    public function setSubResourceType($subResourceType)
    {
        $this->set("SubResourceType", $subResourceType);
    }

    /**
     * Name: 名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * PrivateIP: 内网IP
     *
     * @return string|null
     */
    public function getPrivateIP()
    {
        return $this->get("PrivateIP");
    }

    /**
     * PrivateIP: 内网IP
     *
     * @param string $privateIP
     */
    public function setPrivateIP($privateIP)
    {
        $this->set("PrivateIP", $privateIP);
    }

    /**
     * Remark: 备注
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 备注
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * ResourceID: 绑定该防火墙的资源id
     *
     * @return string|null
     */
    public function getResourceID()
    {
        return $this->get("ResourceID");
    }

    /**
     * ResourceID: 绑定该防火墙的资源id
     *
     * @param string $resourceID
     */
    public function setResourceID($resourceID)
    {
        $this->set("ResourceID", $resourceID);
    }

    /**
     * ResourceType: 绑定防火墙组的资源类型。"unatgw"，NAT网关； "uhost"，云主机； "upm"，物理云主机； "hadoophost"，hadoop节点； "fortresshost"，堡垒机； "udhost"，私有专区主机；"udockhost"，容器；"dbaudit"，数据库审计，“uni”，虚拟网卡。
     *
     * @return string|null
     */
    public function getResourceType()
    {
        return $this->get("ResourceType");
    }

    /**
     * ResourceType: 绑定防火墙组的资源类型。"unatgw"，NAT网关； "uhost"，云主机； "upm"，物理云主机； "hadoophost"，hadoop节点； "fortresshost"，堡垒机； "udhost"，私有专区主机；"udockhost"，容器；"dbaudit"，数据库审计，“uni”，虚拟网卡。
     *
     * @param string $resourceType
     */
    public function setResourceType($resourceType)
    {
        $this->set("ResourceType", $resourceType);
    }

    /**
     * Status: 状态
     *
     * @return integer|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 状态
     *
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * Tag: 业务组
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }
}
