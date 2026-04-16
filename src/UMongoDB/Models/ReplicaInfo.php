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

class ReplicaInfo extends Response
{
    

    /**
     * ReplicaId: 副本集ID
     *
     * @return string|null
     */
    public function getReplicaId()
    {
        return $this->get("ReplicaId");
    }

    /**
     * ReplicaId: 副本集ID
     *
     * @param string $replicaId
     */
    public function setReplicaId($replicaId)
    {
        $this->set("ReplicaId", $replicaId);
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
     * ReplicaType: 副本类型,ConfigRepl或者DataRepl
     *
     * @return string|null
     */
    public function getReplicaType()
    {
        return $this->get("ReplicaType");
    }

    /**
     * ReplicaType: 副本类型,ConfigRepl或者DataRepl
     *
     * @param string $replicaType
     */
    public function setReplicaType($replicaType)
    {
        $this->set("ReplicaType", $replicaType);
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
     * MachineType: 机器类型
     *
     * @return string|null
     */
    public function getMachineType()
    {
        return $this->get("MachineType");
    }

    /**
     * MachineType: 机器类型
     *
     * @param string $machineType
     */
    public function setMachineType($machineType)
    {
        $this->set("MachineType", $machineType);
    }

    /**
     * MachineTypeId: 机器类型Id
     *
     * @return string|null
     */
    public function getMachineTypeId()
    {
        return $this->get("MachineTypeId");
    }

    /**
     * MachineTypeId: 机器类型Id
     *
     * @param string $machineTypeId
     */
    public function setMachineTypeId($machineTypeId)
    {
        $this->set("MachineTypeId", $machineTypeId);
    }

    /**
     * IsolationGroupId: 隔离组ID
     *
     * @return string|null
     */
    public function getIsolationGroupId()
    {
        return $this->get("IsolationGroupId");
    }

    /**
     * IsolationGroupId: 隔离组ID
     *
     * @param string $isolationGroupId
     */
    public function setIsolationGroupId($isolationGroupId)
    {
        $this->set("IsolationGroupId", $isolationGroupId);
    }

    /**
     * NodeInfos: 副本集下的节点信息
     *
     * @return NodeInfo[]|null
     */
    public function getNodeInfos()
    {
        $items = $this->get("NodeInfos");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new NodeInfo($item));
        }
        return $result;
    }

    /**
     * NodeInfos: 副本集下的节点信息
     *
     * @param NodeInfo[] $nodeInfos
     */
    public function setNodeInfos(array $nodeInfos)
    {
        $result = [];
        foreach ($nodeInfos as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * NodeCount: 副本集下的节点数量
     *
     * @return integer|null
     */
    public function getNodeCount()
    {
        return $this->get("NodeCount");
    }

    /**
     * NodeCount: 副本集下的节点数量
     *
     * @param int $nodeCount
     */
    public function setNodeCount($nodeCount)
    {
        $this->set("NodeCount", $nodeCount);
    }

    /**
     * CreateTime: 副本集创建时间
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 副本集创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * DeleteTime: 副本集删除时间
     *
     * @return integer|null
     */
    public function getDeleteTime()
    {
        return $this->get("DeleteTime");
    }

    /**
     * DeleteTime: 副本集删除时间
     *
     * @param int $deleteTime
     */
    public function setDeleteTime($deleteTime)
    {
        $this->set("DeleteTime", $deleteTime);
    }

    /**
     * ModifyTime: 副本集修改时间
     *
     * @return integer|null
     */
    public function getModifyTime()
    {
        return $this->get("ModifyTime");
    }

    /**
     * ModifyTime: 副本集修改时间
     *
     * @param int $modifyTime
     */
    public function setModifyTime($modifyTime)
    {
        $this->set("ModifyTime", $modifyTime);
    }
}
