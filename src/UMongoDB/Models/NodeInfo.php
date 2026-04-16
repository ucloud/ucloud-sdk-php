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

class NodeInfo extends Response
{
    

    /**
     * Zone: 可用区
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * ZoneId: 可用区ID
     *
     * @return integer|null
     */
    public function getZoneId()
    {
        return $this->get("ZoneId");
    }

    /**
     * ZoneId: 可用区ID
     *
     * @param int $zoneId
     */
    public function setZoneId($zoneId)
    {
        $this->set("ZoneId", $zoneId);
    }

    /**
     * NodeId: 节点ID
     *
     * @return string|null
     */
    public function getNodeId()
    {
        return $this->get("NodeId");
    }

    /**
     * NodeId: 节点ID
     *
     * @param string $nodeId
     */
    public function setNodeId($nodeId)
    {
        $this->set("NodeId", $nodeId);
    }

    /**
     * NodeRole: 节点角色，Primary/Secondary/Arbiter/Startup等等
     *
     * @return string|null
     */
    public function getNodeRole()
    {
        return $this->get("NodeRole");
    }

    /**
     * NodeRole: 节点角色，Primary/Secondary/Arbiter/Startup等等
     *
     * @param string $nodeRole
     */
    public function setNodeRole($nodeRole)
    {
        $this->set("NodeRole", $nodeRole);
    }

    /**
     * NodeType: 节点类型
     *
     * @return string|null
     */
    public function getNodeType()
    {
        return $this->get("NodeType");
    }

    /**
     * NodeType: 节点类型
     *
     * @param string $nodeType
     */
    public function setNodeType($nodeType)
    {
        $this->set("NodeType", $nodeType);
    }

    /**
     * State: 副本集/分片集群状态标记 Initing：初始化中，InitFailed：安装失败，Starting：启动中，StartFailed：启动失败，Running：运行，Stopping：关闭中，Stopped：已关闭, StopFailed：关闭失败，Deleting：删除中，Deleted：已删除，DeleteFailed：删除失败，Restarting：重启中，RestartFailed：重启失败。
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 副本集/分片集群状态标记 Initing：初始化中，InitFailed：安装失败，Starting：启动中，StartFailed：启动失败，Running：运行，Stopping：关闭中，Stopped：已关闭, StopFailed：关闭失败，Deleting：删除中，Deleted：已删除，DeleteFailed：删除失败，Restarting：重启中，RestartFailed：重启失败。
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }

    /**
     * DBVersion: 副本集的Mongodb的版本
     *
     * @return string|null
     */
    public function getDBVersion()
    {
        return $this->get("DBVersion");
    }

    /**
     * DBVersion: 副本集的Mongodb的版本
     *
     * @param string $dbVersion
     */
    public function setDBVersion($dbVersion)
    {
        $this->set("DBVersion", $dbVersion);
    }

    /**
     * ClusterId: 节点所属副本集ID
     *
     * @return string|null
     */
    public function getClusterId()
    {
        return $this->get("ClusterId");
    }

    /**
     * ClusterId: 节点所属副本集ID
     *
     * @param string $clusterId
     */
    public function setClusterId($clusterId)
    {
        $this->set("ClusterId", $clusterId);
    }

    /**
     * VirtualClusterId: 虚拟节点ID
     *
     * @return string|null
     */
    public function getVirtualClusterId()
    {
        return $this->get("VirtualClusterId");
    }

    /**
     * VirtualClusterId: 虚拟节点ID
     *
     * @param string $virtualClusterId
     */
    public function setVirtualClusterId($virtualClusterId)
    {
        $this->set("VirtualClusterId", $virtualClusterId);
    }

    /**
     * MachineType: 机型信息
     *
     * @return string|null
     */
    public function getMachineType()
    {
        return $this->get("MachineType");
    }

    /**
     * MachineType: 机型信息
     *
     * @param string $machineType
     */
    public function setMachineType($machineType)
    {
        $this->set("MachineType", $machineType);
    }

    /**
     * MachineTypeId: 机型信息ID
     *
     * @return string|null
     */
    public function getMachineTypeId()
    {
        return $this->get("MachineTypeId");
    }

    /**
     * MachineTypeId: 机型信息ID
     *
     * @param string $machineTypeId
     */
    public function setMachineTypeId($machineTypeId)
    {
        $this->set("MachineTypeId", $machineTypeId);
    }

    /**
     * CreateTime: DB实例创建时间
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: DB实例创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * DataDisk: 数据盘信息
     *
     * @return DiskInfo|null
     */
    public function getDataDisk()
    {
        return new DiskInfo($this->get("DataDisk"));
    }

    /**
     * DataDisk: 数据盘信息
     *
     * @param DiskInfo $dataDisk
     */
    public function setDataDisk(array $dataDisk)
    {
        $this->set("DataDisk", $dataDisk->getAll());
    }

    /**
     * SysDisk: 系统盘信息
     *
     * @return DiskInfo|null
     */
    public function getSysDisk()
    {
        return new DiskInfo($this->get("SysDisk"));
    }

    /**
     * SysDisk: 系统盘信息
     *
     * @param DiskInfo $sysDisk
     */
    public function setSysDisk(array $sysDisk)
    {
        $this->set("SysDisk", $sysDisk->getAll());
    }
}
