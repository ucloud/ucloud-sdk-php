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
namespace UCloud\UClickhouse\Models;

use UCloud\Core\Response\Response;

class ClickhouseNode extends Response
{
    

    /**
     * Zone: 可用区名称
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区名称
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
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
     * ClusterId: 集群ID
     *
     * @return string|null
     */
    public function getClusterId()
    {
        return $this->get("ClusterId");
    }

    /**
     * ClusterId: 集群ID
     *
     * @param string $clusterId
     */
    public function setClusterId($clusterId)
    {
        $this->set("ClusterId", $clusterId);
    }

    /**
     * NodeName: 节点名称
     *
     * @return string|null
     */
    public function getNodeName()
    {
        return $this->get("NodeName");
    }

    /**
     * NodeName: 节点名称
     *
     * @param string $nodeName
     */
    public function setNodeName($nodeName)
    {
        $this->set("NodeName", $nodeName);
    }

    /**
     * CPU: CPU大小
     *
     * @return integer|null
     */
    public function getCPU()
    {
        return $this->get("CPU");
    }

    /**
     * CPU: CPU大小
     *
     * @param int $cpu
     */
    public function setCPU($cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * Memory: 内存，GB
     *
     * @return integer|null
     */
    public function getMemory()
    {
        return $this->get("Memory");
    }

    /**
     * Memory: 内存，GB
     *
     * @param int $memory
     */
    public function setMemory($memory)
    {
        $this->set("Memory", $memory);
    }

    /**
     * SysDiskSize: 系统盘大小,GB
     *
     * @return integer|null
     */
    public function getSysDiskSize()
    {
        return $this->get("SysDiskSize");
    }

    /**
     * SysDiskSize: 系统盘大小,GB
     *
     * @param int $sysDiskSize
     */
    public function setSysDiskSize($sysDiskSize)
    {
        $this->set("SysDiskSize", $sysDiskSize);
    }

    /**
     * SysDiskType: 系统盘类型
     *
     * @return string|null
     */
    public function getSysDiskType()
    {
        return $this->get("SysDiskType");
    }

    /**
     * SysDiskType: 系统盘类型
     *
     * @param string $sysDiskType
     */
    public function setSysDiskType($sysDiskType)
    {
        $this->set("SysDiskType", $sysDiskType);
    }

    /**
     * DataDiskSize: 数据盘大小,GB
     *
     * @return integer|null
     */
    public function getDataDiskSize()
    {
        return $this->get("DataDiskSize");
    }

    /**
     * DataDiskSize: 数据盘大小,GB
     *
     * @param int $dataDiskSize
     */
    public function setDataDiskSize($dataDiskSize)
    {
        $this->set("DataDiskSize", $dataDiskSize);
    }

    /**
     * DataDiskType: 数据盘类型
     *
     * @return string|null
     */
    public function getDataDiskType()
    {
        return $this->get("DataDiskType");
    }

    /**
     * DataDiskType: 数据盘类型
     *
     * @param string $dataDiskType
     */
    public function setDataDiskType($dataDiskType)
    {
        $this->set("DataDiskType", $dataDiskType);
    }

    /**
     * IPv4: ipv4
     *
     * @return string|null
     */
    public function getIPv4()
    {
        return $this->get("IPv4");
    }

    /**
     * IPv4: ipv4
     *
     * @param string $iPv4
     */
    public function setIPv4($iPv4)
    {
        $this->set("IPv4", $iPv4);
    }

    /**
     * CreateTimestamp: 创建时间
     *
     * @return integer|null
     */
    public function getCreateTimestamp()
    {
        return $this->get("CreateTimestamp");
    }

    /**
     * CreateTimestamp: 创建时间
     *
     * @param int $createTimestamp
     */
    public function setCreateTimestamp($createTimestamp)
    {
        $this->set("CreateTimestamp", $createTimestamp);
    }

    /**
     * MachineType: 机型
     *
     * @return string|null
     */
    public function getMachineType()
    {
        return $this->get("MachineType");
    }

    /**
     * MachineType: 机型
     *
     * @param string $machineType
     */
    public function setMachineType($machineType)
    {
        $this->set("MachineType", $machineType);
    }

    /**
     * ShardGroup: 分片组
     *
     * @return string|null
     */
    public function getShardGroup()
    {
        return $this->get("ShardGroup");
    }

    /**
     * ShardGroup: 分片组
     *
     * @param string $shardGroup
     */
    public function setShardGroup($shardGroup)
    {
        $this->set("ShardGroup", $shardGroup);
    }

    /**
     * ServiceStatus: 服务状态：RUNNING（运行中）、STARTING（启动中）、STOPPED（已停止）、RESTARTING（重启中）
     *
     * @return string|null
     */
    public function getServiceStatus()
    {
        return $this->get("ServiceStatus");
    }

    /**
     * ServiceStatus: 服务状态：RUNNING（运行中）、STARTING（启动中）、STOPPED（已停止）、RESTARTING（重启中）
     *
     * @param string $serviceStatus
     */
    public function setServiceStatus($serviceStatus)
    {
        $this->set("ServiceStatus", $serviceStatus);
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
}
