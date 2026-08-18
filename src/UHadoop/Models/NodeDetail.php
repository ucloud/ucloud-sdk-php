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
namespace UCloud\UHadoop\Models;

use UCloud\Core\Response\Response;

class NodeDetail extends Response
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
     * HostType: 机型种类，可选OutStanding(快杰机型)|Genenal(普通机型)|BareMetal(裸金属机型)三种类型
     *
     * @return string|null
     */
    public function getHostType()
    {
        return $this->get("HostType");
    }

    /**
     * HostType: 机型种类，可选OutStanding(快杰机型)|Genenal(普通机型)|BareMetal(裸金属机型)三种类型
     *
     * @param string $hostType
     */
    public function setHostType($hostType)
    {
        $this->set("HostType", $hostType);
    }

    /**
     * DiskSet: 磁盘信息集合
     *
     * @return DiskInfo[]|null
     */
    public function getDiskSet()
    {
        $items = $this->get("DiskSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new DiskInfo($item));
        }
        return $result;
    }

    /**
     * DiskSet: 磁盘信息集合
     *
     * @param DiskInfo[] $diskSet
     */
    public function setDiskSet(array $diskSet)
    {
        $result = [];
        foreach ($diskSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * CPU: CPU数量
     *
     * @return integer|null
     */
    public function getCPU()
    {
        return $this->get("CPU");
    }

    /**
     * CPU: CPU数量
     *
     * @param int $cpu
     */
    public function setCPU($cpu)
    {
        $this->set("CPU", $cpu);
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

    /**
     * InstanceId: 实例ID
     *
     * @return string|null
     */
    public function getInstanceId()
    {
        return $this->get("InstanceId");
    }

    /**
     * InstanceId: 实例ID
     *
     * @param string $instanceId
     */
    public function setInstanceId($instanceId)
    {
        $this->set("InstanceId", $instanceId);
    }

    /**
     * CreateTime: 创建时间戳
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间戳
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * IsNewType: 是否是新机型,快杰机型，GPU机型，云盘裸金属机型为新机型
     *
     * @return boolean|null
     */
    public function getIsNewType()
    {
        return $this->get("IsNewType");
    }

    /**
     * IsNewType: 是否是新机型,快杰机型，GPU机型，云盘裸金属机型为新机型
     *
     * @param boolean $isNewType
     */
    public function setIsNewType($isNewType)
    {
        $this->set("IsNewType", $isNewType);
    }

    /**
     * Memory: 内存大小，单位为MB
     *
     * @return integer|null
     */
    public function getMemory()
    {
        return $this->get("Memory");
    }

    /**
     * Memory: 内存大小，单位为MB
     *
     * @param int $memory
     */
    public function setMemory($memory)
    {
        $this->set("Memory", $memory);
    }

    /**
     * NodeRole: 节点在集群中的⻆色(有Master,Core,Task 3种)
     *
     * @return string|null
     */
    public function getNodeRole()
    {
        return $this->get("NodeRole");
    }

    /**
     * NodeRole: 节点在集群中的⻆色(有Master,Core,Task 3种)
     *
     * @param string $nodeRole
     */
    public function setNodeRole($nodeRole)
    {
        $this->set("NodeRole", $nodeRole);
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
     * ExpireTime: 节点的到期时间(下次扣款时间)
     *
     * @return integer|null
     */
    public function getExpireTime()
    {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: 节点的到期时间(下次扣款时间)
     *
     * @param int $expireTime
     */
    public function setExpireTime($expireTime)
    {
        $this->set("ExpireTime", $expireTime);
    }

    /**
     * NodeType: 机型
     *
     * @return string|null
     */
    public function getNodeType()
    {
        return $this->get("NodeType");
    }

    /**
     * NodeType: 机型
     *
     * @param string $nodeType
     */
    public function setNodeType($nodeType)
    {
        $this->set("NodeType", $nodeType);
    }

    /**
     * FirewallGroupConfig: 防火墙 信息
     *
     * @return SecurityGroupConfig[]|null
     */
    public function getFirewallGroupConfig()
    {
        $items = $this->get("FirewallGroupConfig");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new SecurityGroupConfig($item));
        }
        return $result;
    }

    /**
     * FirewallGroupConfig: 防火墙 信息
     *
     * @param SecurityGroupConfig[] $firewallGroupConfig
     */
    public function setFirewallGroupConfig(array $firewallGroupConfig)
    {
        $result = [];
        foreach ($firewallGroupConfig as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * State: 运行：Running； 创建中：Creating； 删除中：Deleting； 创建失败：CreateFailed； 不可用：Unavailable； 删除失败：DeleteFailed； 已删除：Deleted； 部署中： Deploying
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 运行：Running； 创建中：Creating； 删除中：Deleting； 创建失败：CreateFailed； 不可用：Unavailable； 删除失败：DeleteFailed； 已删除：Deleted； 部署中： Deploying
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }

    /**
     * IPSet: IP 信息
     *
     * @return IPSet[]|null
     */
    public function getIPSet()
    {
        $items = $this->get("IPSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new IPSet($item));
        }
        return $result;
    }

    /**
     * IPSet: IP 信息
     *
     * @param IPSet[] $ipSet
     */
    public function setIPSet(array $ipSet)
    {
        $result = [];
        foreach ($ipSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Scaling: 是否是弹性伸缩节点
     *
     * @return boolean|null
     */
    public function getScaling()
    {
        return $this->get("Scaling");
    }

    /**
     * Scaling: 是否是弹性伸缩节点
     *
     * @param boolean $scaling
     */
    public function setScaling($scaling)
    {
        $this->set("Scaling", $scaling);
    }
}
