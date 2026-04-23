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
namespace UCloud\UES\Models;

use UCloud\Core\Response\Response;

class NodeV2Info extends Response
{
    

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
     * NodeRole: 节点类型
     *
     * @return string|null
     */
    public function getNodeRole()
    {
        return $this->get("NodeRole");
    }

    /**
     * NodeRole: 节点类型
     *
     * @param string $nodeRole
     */
    public function setNodeRole($nodeRole)
    {
        $this->set("NodeRole", $nodeRole);
    }

    /**
     * NodeIP: 节点IP
     *
     * @return string|null
     */
    public function getNodeIP()
    {
        return $this->get("NodeIP");
    }

    /**
     * NodeIP: 节点IP
     *
     * @param string $nodeIP
     */
    public function setNodeIP($nodeIP)
    {
        $this->set("NodeIP", $nodeIP);
    }

    /**
     * NodeConf: 节点配置标识
     *
     * @return string|null
     */
    public function getNodeConf()
    {
        return $this->get("NodeConf");
    }

    /**
     * NodeConf: 节点配置标识
     *
     * @param string $nodeConf
     */
    public function setNodeConf($nodeConf)
    {
        $this->set("NodeConf", $nodeConf);
    }

    /**
     * NodeState: 节点状态
     *
     * @return string|null
     */
    public function getNodeState()
    {
        return $this->get("NodeState");
    }

    /**
     * NodeState: 节点状态
     *
     * @param string $nodeState
     */
    public function setNodeState($nodeState)
    {
        $this->set("NodeState", $nodeState);
    }

    /**
     * DiskType: 节点磁盘类型
     *
     * @return string|null
     */
    public function getDiskType()
    {
        return $this->get("DiskType");
    }

    /**
     * DiskType: 节点磁盘类型
     *
     * @param string $diskType
     */
    public function setDiskType($diskType)
    {
        $this->set("DiskType", $diskType);
    }

    /**
     * DiskSize: 节点磁盘大小
     *
     * @return integer|null
     */
    public function getDiskSize()
    {
        return $this->get("DiskSize");
    }

    /**
     * DiskSize: 节点磁盘大小
     *
     * @param int $diskSize
     */
    public function setDiskSize($diskSize)
    {
        $this->set("DiskSize", $diskSize);
    }

    /**
     * Memory: 节点内存大小
     *
     * @return integer|null
     */
    public function getMemory()
    {
        return $this->get("Memory");
    }

    /**
     * Memory: 节点内存大小
     *
     * @param int $memory
     */
    public function setMemory($memory)
    {
        $this->set("Memory", $memory);
    }

    /**
     * CPU: 节点cpu数量
     *
     * @return integer|null
     */
    public function getCPU()
    {
        return $this->get("CPU");
    }

    /**
     * CPU: 节点cpu数量
     *
     * @param int $cpu
     */
    public function setCPU($cpu)
    {
        $this->set("CPU", $cpu);
    }
}
