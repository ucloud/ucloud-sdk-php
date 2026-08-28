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
namespace UCloud\UK8S\Models;

use UCloud\Core\Response\Response;

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
    public function setZone($zone)
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
    public function setNodeId($nodeId)
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
    public function setNodeRole($nodeRole)
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
    public function setNodeStatus($nodeStatus)
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
    public function setInstanceType($instanceType)
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
    public function setInstanceName($instanceName)
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
    public function setInstanceId($instanceId)
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
    public function setMachineType($machineType)
    {
        $this->set("MachineType", $machineType);
    }

    /**
     * CPUPlatform: CPU平台
     *
     * @return string|null
     */
    public function getCPUPlatform()
    {
        return $this->get("CPUPlatform");
    }

    /**
     * CPUPlatform: CPU平台
     *
     * @param string $cpuPlatform
     */
    public function setCPUPlatform($cpuPlatform)
    {
        $this->set("CPUPlatform", $cpuPlatform);
    }

    /**
     * UHostFamily: 主机规格族
     *
     * @return string|null
     */
    public function getUHostFamily()
    {
        return $this->get("UHostFamily");
    }

    /**
     * UHostFamily: 主机规格族
     *
     * @param string $uHostFamily
     */
    public function setUHostFamily($uHostFamily)
    {
        $this->set("UHostFamily", $uHostFamily);
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
    public function setOsType($osType)
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
    public function setOsName($osName)
    {
        $this->set("OsName", $osName);
    }

    /**
     * CPU: Node节点CPU核数，单位: 核。
     *
     * @return integer|null
     */
    public function getCPU()
    {
        return $this->get("CPU");
    }

    /**
     * CPU: Node节点CPU核数，单位: 核。
     *
     * @param int $cpu
     */
    public function setCPU($cpu)
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
    public function setMemory($memory)
    {
        $this->set("Memory", $memory);
    }

    /**
     * IPSet: 节点IP信息，详细信息见 UHostIPSet。
     *
     * @return UHostIPSet[]|null
     */
    public function getIPSet()
    {
        $items = $this->get("IPSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UHostIPSet($item));
        }
        return $result;
    }

    /**
     * IPSet: 节点IP信息，详细信息见 UHostIPSet。
     *
     * @param UHostIPSet[] $ipSet
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
    public function setCreateTime($createTime)
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
    public function setExpireTime($expireTime)
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
    public function setAsgId($asgId)
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
    public function setUnschedulable($unschedulable)
    {
        $this->set("Unschedulable", $unschedulable);
    }

    /**
     * KubeProxy: kubeproxy信息，详细信息见KubeProxy。
     *
     * @return KubeProxy|null
     */
    public function getKubeProxy()
    {
        return new KubeProxy($this->get("KubeProxy"));
    }

    /**
     * KubeProxy: kubeproxy信息，详细信息见KubeProxy。
     *
     * @param KubeProxy $kubeProxy
     */
    public function setKubeProxy(array $kubeProxy)
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
    public function setNodeLogInfo($nodeLogInfo)
    {
        $this->set("NodeLogInfo", $nodeLogInfo);
    }

    /**
     * Labels: 节点标签
     *
     * @return string[]|null
     */
    public function getLabels()
    {
        return $this->get("Labels");
    }

    /**
     * Labels: 节点标签
     *
     * @param string[] $labels
     */
    public function setLabels(array $labels)
    {
        $this->set("Labels", $labels);
    }

    /**
     * KubeletVersion: Kubelet版本
     *
     * @return string|null
     */
    public function getKubeletVersion()
    {
        return $this->get("KubeletVersion");
    }

    /**
     * KubeletVersion: Kubelet版本
     *
     * @param string $kubeletVersion
     */
    public function setKubeletVersion($kubeletVersion)
    {
        $this->set("KubeletVersion", $kubeletVersion);
    }

    /**
     * MaxPod: pod最大可用
     *
     * @return integer|null
     */
    public function getMaxPod()
    {
        return $this->get("MaxPod");
    }

    /**
     * MaxPod: pod最大可用
     *
     * @param int $maxPod
     */
    public function setMaxPod($maxPod)
    {
        $this->set("MaxPod", $maxPod);
    }

    /**
     * MaxMemory: 内存最大可用
     *
     * @return integer|null
     */
    public function getMaxMemory()
    {
        return $this->get("MaxMemory");
    }

    /**
     * MaxMemory: 内存最大可用
     *
     * @param int $maxMemory
     */
    public function setMaxMemory($maxMemory)
    {
        $this->set("MaxMemory", $maxMemory);
    }

    /**
     * MaxCPU: CPU最大可用
     *
     * @return integer|null
     */
    public function getMaxCPU()
    {
        return $this->get("MaxCPU");
    }

    /**
     * MaxCPU: CPU最大可用
     *
     * @param int $maxCPU
     */
    public function setMaxCPU($maxCPU)
    {
        $this->set("MaxCPU", $maxCPU);
    }

    /**
     * RequestPod: 已申请的pod
     *
     * @return integer|null
     */
    public function getRequestPod()
    {
        return $this->get("RequestPod");
    }

    /**
     * RequestPod: 已申请的pod
     *
     * @param int $requestPod
     */
    public function setRequestPod($requestPod)
    {
        $this->set("RequestPod", $requestPod);
    }

    /**
     * RequestMemory: 已申请的Memory
     *
     * @return integer|null
     */
    public function getRequestMemory()
    {
        return $this->get("RequestMemory");
    }

    /**
     * RequestMemory: 已申请的Memory
     *
     * @param int $requestMemory
     */
    public function setRequestMemory($requestMemory)
    {
        $this->set("RequestMemory", $requestMemory);
    }

    /**
     * RequestCPU: 已申请的CPU
     *
     * @return integer|null
     */
    public function getRequestCPU()
    {
        return $this->get("RequestCPU");
    }

    /**
     * RequestCPU: 已申请的CPU
     *
     * @param int $requestCPU
     */
    public function setRequestCPU($requestCPU)
    {
        $this->set("RequestCPU", $requestCPU);
    }

    /**
     * RuntimeVersion: Runtime 版本
     *
     * @return string|null
     */
    public function getRuntimeVersion()
    {
        return $this->get("RuntimeVersion");
    }

    /**
     * RuntimeVersion: Runtime 版本
     *
     * @param string $runtimeVersion
     */
    public function setRuntimeVersion($runtimeVersion)
    {
        $this->set("RuntimeVersion", $runtimeVersion);
    }

    /**
     * RuntimeName: Runtime 名字
     *
     * @return string|null
     */
    public function getRuntimeName()
    {
        return $this->get("RuntimeName");
    }

    /**
     * RuntimeName: Runtime 名字
     *
     * @param string $runtimeName
     */
    public function setRuntimeName($runtimeName)
    {
        $this->set("RuntimeName", $runtimeName);
    }

    /**
     * UsedCPU: 已使用的CPU
     *
     * @return integer|null
     */
    public function getUsedCPU()
    {
        return $this->get("UsedCPU");
    }

    /**
     * UsedCPU: 已使用的CPU
     *
     * @param int $usedCPU
     */
    public function setUsedCPU($usedCPU)
    {
        $this->set("UsedCPU", $usedCPU);
    }

    /**
     * UsedMemory: 已使用的Memory
     *
     * @return integer|null
     */
    public function getUsedMemory()
    {
        return $this->get("UsedMemory");
    }

    /**
     * UsedMemory: 已使用的Memory
     *
     * @param int $usedMemory
     */
    public function setUsedMemory($usedMemory)
    {
        $this->set("UsedMemory", $usedMemory);
    }

    /**
     * BootDiskSize: 系统盘大小
     *
     * @return integer|null
     */
    public function getBootDiskSize()
    {
        return $this->get("BootDiskSize");
    }

    /**
     * BootDiskSize: 系统盘大小
     *
     * @param int $bootDiskSize
     */
    public function setBootDiskSize($bootDiskSize)
    {
        $this->set("BootDiskSize", $bootDiskSize);
    }

    /**
     * DataDiskSize: 数据盘大小，如果有多块数据盘会汇总展示，不包括PVC
     *
     * @return integer|null
     */
    public function getDataDiskSize()
    {
        return $this->get("DataDiskSize");
    }

    /**
     * DataDiskSize: 数据盘大小，如果有多块数据盘会汇总展示，不包括PVC
     *
     * @param int $dataDiskSize
     */
    public function setDataDiskSize($dataDiskSize)
    {
        $this->set("DataDiskSize", $dataDiskSize);
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
    public function setGPU($gpu)
    {
        $this->set("GPU", $gpu);
    }

    /**
     * NodeGroupId: 节点池id
     *
     * @return string|null
     */
    public function getNodeGroupId()
    {
        return $this->get("NodeGroupId");
    }

    /**
     * NodeGroupId: 节点池id
     *
     * @param string $nodeGroupId
     */
    public function setNodeGroupId($nodeGroupId)
    {
        $this->set("NodeGroupId", $nodeGroupId);
    }

    /**
     * IDCId: 边缘机房id
     *
     * @return string|null
     */
    public function getIDCId()
    {
        return $this->get("IDCId");
    }

    /**
     * IDCId: 边缘机房id
     *
     * @param string $idcId
     */
    public function setIDCId($idcId)
    {
        $this->set("IDCId", $idcId);
    }

    /**
     * IDCName: 边缘机房
     *
     * @return string|null
     */
    public function getIDCName()
    {
        return $this->get("IDCName");
    }

    /**
     * IDCName: 边缘机房
     *
     * @param string $idcName
     */
    public function setIDCName($idcName)
    {
        $this->set("IDCName", $idcName);
    }

    /**
     * Remark: 节点主机备注信息
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 节点主机备注信息
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * GPUType: 节点GPU型号(如果为GPU机型)
     *
     * @return string|null
     */
    public function getGPUType()
    {
        return $this->get("GPUType");
    }

    /**
     * GPUType: 节点GPU型号(如果为GPU机型)
     *
     * @param string $gpuType
     */
    public function setGPUType($gpuType)
    {
        $this->set("GPUType", $gpuType);
    }

    /**
     * ImageAccelable: 是否启用了容器镜像加速
     *
     * @return boolean|null
     */
    public function getImageAccelable()
    {
        return $this->get("ImageAccelable");
    }

    /**
     * ImageAccelable: 是否启用了容器镜像加速
     *
     * @param boolean $imageAccelable
     */
    public function setImageAccelable($imageAccelable)
    {
        $this->set("ImageAccelable", $imageAccelable);
    }

    /**
     * Tag: 节点所属业务组
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 节点所属业务组
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * PodCIDR: Pod CIDR
     *
     * @return string|null
     */
    public function getPodCIDR()
    {
        return $this->get("PodCIDR");
    }

    /**
     * PodCIDR: Pod CIDR
     *
     * @param string $podCIDR
     */
    public function setPodCIDR($podCIDR)
    {
        $this->set("PodCIDR", $podCIDR);
    }

    /**
     * NodeGroupName: 节点所属节点池名称
     *
     * @return string|null
     */
    public function getNodeGroupName()
    {
        return $this->get("NodeGroupName");
    }

    /**
     * NodeGroupName: 节点所属节点池名称
     *
     * @param string $nodeGroupName
     */
    public function setNodeGroupName($nodeGroupName)
    {
        $this->set("NodeGroupName", $nodeGroupName);
    }
}
