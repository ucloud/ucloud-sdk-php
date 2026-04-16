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
namespace UCloud\UMongoDB\Models;

use UCloud\Core\Response\Response;

class PackageInfo extends Response
{
    

    /**
     * Id: id
     *
     * @return integer|null
     */
    public function getId()
    {
        return $this->get("Id");
    }

    /**
     * Id: id
     *
     * @param int $id
     */
    public function setId($id)
    {
        $this->set("Id", $id);
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
     * State: Package_Running,Package_Success,Package_Failed,Package_Deleting,Package_Deleted,Package_DeleteFailed
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: Package_Running,Package_Success,Package_Failed,Package_Deleting,Package_Deleted,Package_DeleteFailed
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }

    /**
     * Size: 大小,单位字节
     *
     * @return integer|null
     */
    public function getSize()
    {
        return $this->get("Size");
    }

    /**
     * Size: 大小,单位字节
     *
     * @param int $size
     */
    public function setSize($size)
    {
        $this->set("Size", $size);
    }

    /**
     * PackageType: SlowLog,ErrorLog
     *
     * @return string|null
     */
    public function getPackageType()
    {
        return $this->get("PackageType");
    }

    /**
     * PackageType: SlowLog,ErrorLog
     *
     * @param string $packageType
     */
    public function setPackageType($packageType)
    {
        $this->set("PackageType", $packageType);
    }

    /**
     * ClusterId: 集群id
     *
     * @return string|null
     */
    public function getClusterId()
    {
        return $this->get("ClusterId");
    }

    /**
     * ClusterId: 集群id
     *
     * @param string $clusterId
     */
    public function setClusterId($clusterId)
    {
        $this->set("ClusterId", $clusterId);
    }

    /**
     * NodeId: 节点id
     *
     * @return string|null
     */
    public function getNodeId()
    {
        return $this->get("NodeId");
    }

    /**
     * NodeId: 节点id
     *
     * @param string $nodeId
     */
    public function setNodeId($nodeId)
    {
        $this->set("NodeId", $nodeId);
    }

    /**
     * Role: 角色
     *
     * @return string|null
     */
    public function getRole()
    {
        return $this->get("Role");
    }

    /**
     * Role: 角色
     *
     * @param string $role
     */
    public function setRole($role)
    {
        $this->set("Role", $role);
    }

    /**
     * Begin: 开始时间
     *
     * @return integer|null
     */
    public function getBegin()
    {
        return $this->get("Begin");
    }

    /**
     * Begin: 开始时间
     *
     * @param int $begin
     */
    public function setBegin($begin)
    {
        $this->set("Begin", $begin);
    }

    /**
     * End: 结束时间
     *
     * @return integer|null
     */
    public function getEnd()
    {
        return $this->get("End");
    }

    /**
     * End: 结束时间
     *
     * @param int $end
     */
    public function setEnd($end)
    {
        $this->set("End", $end);
    }

    /**
     * CreateTime: 创建时间
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * FinishTime: 完成时间
     *
     * @return integer|null
     */
    public function getFinishTime()
    {
        return $this->get("FinishTime");
    }

    /**
     * FinishTime: 完成时间
     *
     * @param int $finishTime
     */
    public function setFinishTime($finishTime)
    {
        $this->set("FinishTime", $finishTime);
    }
}
