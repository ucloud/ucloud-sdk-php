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

namespace UCloud\UK8S\Models;

use UCloud\Core\Response\Response;

use UCloud\UK8S\Models\KubeProxy;
use UCloud\UK8S\Models\UHostIPSet;
use UCloud\UK8S\Models\ListUK8SClusterNodeV2Response;

class NodeInfoV2 extends Response
{

    /**
     * Zone: Node所在可用区
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: Node所在可用区
     *
     * @param string $zone
     */
    public function setZone(string $zone)
    {
        $this->set("Zone", $zone);
    }
    /**
     * NodeId: NodeId，Node在UK8S处的唯一标示，如uk8s-reewqe5-sdasadsda
     *
     * @return string|null
     */
    public function getNodeId()
    {
        return $this->get("NodeId");
    }

    /**
     * NodeId: NodeId，Node在UK8S处的唯一标示，如uk8s-reewqe5-sdasadsda
     *
     * @param string $nodeId
     */
    public function setNodeId(string $nodeId)
    {
        $this->set("NodeId", $nodeId);
    }
    /**
     * NodeRole: node角色，枚举值为master、node
     *
     * @return string|null
     */
    public function getNodeRole()
    {
        return $this->get("NodeRole");
    }

    /**
     * NodeRole: node角色，枚举值为master、node
     *
     * @param string $nodeRole
     */
    public function setNodeRole(string $nodeRole)
    {
        $this->set("NodeRole", $nodeRole);
    }
    /**
     * NodeStatus: Node的状态：枚举值：初始化："Initializing"；启动中："Starting"；运行："Running"；停止中："Stopping"；停止："Stopped"；待删除："ToBeDeleted"；删除中："Deleting"；异常："Error"；安装失败："Install Fail"；
     *
     * @return string|null
     */
    public function getNodeStatus()
    {
        return $this->get("NodeStatus");
    }

    /**
     * NodeStatus: Node的状态：枚举值：初始化："Initializing"；启动中："Starting"；运行："Running"；停止中："Stopping"；停止："Stopped"；待删除："ToBeDeleted"；删除中："Deleting"；异常："Error"；安装失败："Install Fail"；
     *
     * @param string $nodeStatus
     */
    public function setNodeStatus(string $nodeStatus)
    {
        $this->set("NodeStatus", $nodeStatus);
    }
    /**
     * InstanceType: Node节点的资源类型，枚举值为UHost或UPHost。
     *
     * @return string|null
     */
    public function getInstanceType()
    {
        return $this->get("InstanceType");
    }

    /**
     * InstanceType: Node节点的资源类型，枚举值为UHost或UPHost。
     *
     * @param string $instanceType
     */
    public function setInstanceType(string $instanceType)
    {
        $this->set("InstanceType", $instanceType);
    }
    /**
     * InstanceName: 资源名称，初始值等于NodeId，用户可在UHost或UPHost处修改。
     *
     * @return string|null
     */
    public function getInstanceName()
    {
        return $this->get("InstanceName");
    }

    /**
     * InstanceName: 资源名称，初始值等于NodeId，用户可在UHost或UPHost处修改。
     *
     * @param string $instanceName
     */
    public function setInstanceName(string $instanceName)
    {
        $this->set("InstanceName", $instanceName);
    }
    /**
     * InstanceId: 资源ID，如uhost-xxxx，或uphost-xxxxx。
     *
     * @return string|null
     */
    public function getInstanceId()
    {
        return $this->get("InstanceId");
    }

    /**
     * InstanceId: 资源ID，如uhost-xxxx，或uphost-xxxxx。
     *
     * @param string $instanceId
     */
    public function setInstanceId(string $instanceId)
    {
        $this->set("InstanceId", $instanceId);
    }
    /**
     * MachineType: 机型类别，分别对应Uhost的MachineType或PHost的PHostType。
     *
     * @return string|null
     */
    public function getMachineType()
    {
        return $this->get("MachineType");
    }

    /**
     * MachineType: 机型类别，分别对应Uhost的MachineType或PHost的PHostType。
     *
     * @param string $machineType
     */
    public function setMachineType(string $machineType)
    {
        $this->set("MachineType", $machineType);
    }
    /**
     * OsType: Node节点的操作系统类别，如Linux或Windows。
     *
     * @return string|null
     */
    public function getOsType()
    {
        return $this->get("OsType");
    }

    /**
     * OsType: Node节点的操作系统类别，如Linux或Windows。
     *
     * @param string $osType
     */
    public function setOsType(string $osType)
    {
        $this->set("OsType", $osType);
    }
    /**
     * OsName: Node节点的镜像名称。
     *
     * @return string|null
     */
    public function getOsName()
    {
        return $this->get("OsName");
    }

    /**
     * OsName: Node节点的镜像名称。
     *
     * @param string $osName
     */
    public function setOsName(string $osName)
    {
        $this->set("OsName", $osName);
    }
    /**
     * CPU: Node节点CPU核数，单位: 个。
     *
     * @return integer|null
     */
    public function getCPU()
    {
        return $this->get("CPU");
    }

    /**
     * CPU: Node节点CPU核数，单位: 个。
     *
     * @param int $cpu
     */
    public function setCPU(int $cpu)
    {
        $this->set("CPU", $cpu);
    }
    /**
     * Memory: 内存大小，单位: MB。
     *
     * @return integer|null
     */
    public function getMemory()
    {
        return $this->get("Memory");
    }

    /**
     * Memory: 内存大小，单位: MB。
     *
     * @param int $memory
     */
    public function setMemory(int $memory)
    {
        $this->set("Memory", $memory);
    }
    /**
     * IPSet: 节点IP信息，详细信息见 UHostIPSet。
     *
     * @return UHostIPSetModel[]|null
     */
    public function getIPSet()
    {
        $items = $this->get("IPSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UHostIPSetModel($item));
        }
        return $result;
    }

    /**
     * IPSet: 节点IP信息，详细信息见 UHostIPSet。
     *
     * @param UHostIPSetModel[] $ipSet
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
     * CreateTime: 节点创建时间
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 节点创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime)
    {
        $this->set("CreateTime", $createTime);
    }
    /**
     * ExpireTime: 节点计费到期时间
     *
     * @return integer|null
     */
    public function getExpireTime()
    {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: 节点计费到期时间
     *
     * @param int $expireTime
     */
    public function setExpireTime(int $expireTime)
    {
        $this->set("ExpireTime", $expireTime);
    }
    /**
     * AsgId: 节点所属伸缩组ID，非伸缩组创建出来的节点，伸缩组ID为Default。
     *
     * @return string|null
     */
    public function getAsgId()
    {
        return $this->get("AsgId");
    }

    /**
     * AsgId: 节点所属伸缩组ID，非伸缩组创建出来的节点，伸缩组ID为Default。
     *
     * @param string $asgId
     */
    public function setAsgId(string $asgId)
    {
        $this->set("AsgId", $asgId);
    }
    /**
     * Unschedulable: 是否允许Pod调度到该节点，枚举值为true或false。
     *
     * @return boolean|null
     */
    public function getUnschedulable()
    {
        return $this->get("Unschedulable");
    }

    /**
     * Unschedulable: 是否允许Pod调度到该节点，枚举值为true或false。
     *
     * @param boolean $unschedulable
     */
    public function setUnschedulable(bool $unschedulable)
    {
        $this->set("Unschedulable", $unschedulable);
    }
    /**
     * KubeProxy: kubeproxy信息，详细信息见KubeProxy。
     *
     * @return KubeProxyModel|null
     */
    public function getKubeProxy()
    {
        return new KubeProxyModel($this->get("KubeProxy"));
    }

    /**
     * KubeProxy: kubeproxy信息，详细信息见KubeProxy。
     *
     * @param KubeProxyModel $kubeProxy
     */
    public function setKubeProxy(KubeProxyModel $kubeProxy)
    {
        $this->set("KubeProxy", $kubeProxy->getAll());
    }
    /**
     * NodeLogInfo: 加节点时判断是否没有资源，如果返回NORESOURCE则代表没有资源了
     *
     * @return string|null
     */
    public function getNodeLogInfo()
    {
        return $this->get("NodeLogInfo");
    }

    /**
     * NodeLogInfo: 加节点时判断是否没有资源，如果返回NORESOURCE则代表没有资源了
     *
     * @param string $nodeLogInfo
     */
    public function setNodeLogInfo(string $nodeLogInfo)
    {
        $this->set("NodeLogInfo", $nodeLogInfo);
    }
    /**
     * GPU: 节点的GPU颗数。
     *
     * @return integer|null
     */
    public function getGPU()
    {
        return $this->get("GPU");
    }

    /**
     * GPU: 节点的GPU颗数。
     *
     * @param int $gpu
     */
    public function setGPU(int $gpu)
    {
        $this->set("GPU", $gpu);
    }
}
