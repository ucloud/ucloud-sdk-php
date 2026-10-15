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

class AutoScalingGroup extends Response
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
     * Id: 伸缩组ID
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->get("Id");
    }

    /**
     * Id: 伸缩组ID
     *
     * @param string $id
     */
    public function setId($id)
    {
        $this->set("Id", $id);
    }

    /**
     * Name: 伸缩组名字
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 伸缩组名字
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * CPU: 节点CPU
     *
     * @return integer|null
     */
    public function getCPU()
    {
        return $this->get("CPU");
    }

    /**
     * CPU: 节点CPU
     *
     * @param int $cpu
     */
    public function setCPU($cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * Mem: 节点内存
     *
     * @return integer|null
     */
    public function getMem()
    {
        return $this->get("Mem");
    }

    /**
     * Mem: 节点内存
     *
     * @param int $mem
     */
    public function setMem($mem)
    {
        $this->set("Mem", $mem);
    }

    /**
     * DataDiskType: 节点数据盘类型。请参考[[api:uhost-api:disk_type|磁盘类型]]。默认为SSD云盘
     *
     * @return string|null
     */
    public function getDataDiskType()
    {
        return $this->get("DataDiskType");
    }

    /**
     * DataDiskType: 节点数据盘类型。请参考[[api:uhost-api:disk_type|磁盘类型]]。默认为SSD云盘
     *
     * @param string $dataDiskType
     */
    public function setDataDiskType($dataDiskType)
    {
        $this->set("DataDiskType", $dataDiskType);
    }

    /**
     * DataDiskSize: 节点数据盘大小
     *
     * @return integer|null
     */
    public function getDataDiskSize()
    {
        return $this->get("DataDiskSize");
    }

    /**
     * DataDiskSize: 节点数据盘大小
     *
     * @param int $dataDiskSize
     */
    public function setDataDiskSize($dataDiskSize)
    {
        $this->set("DataDiskSize", $dataDiskSize);
    }

    /**
     * BootDiskType: 节点系统盘类型。请参考[[api:uhost-api:disk_type|磁盘类型]]。默认为SSD云盘
     *
     * @return string|null
     */
    public function getBootDiskType()
    {
        return $this->get("BootDiskType");
    }

    /**
     * BootDiskType: 节点系统盘类型。请参考[[api:uhost-api:disk_type|磁盘类型]]。默认为SSD云盘
     *
     * @param string $bootDiskType
     */
    public function setBootDiskType($bootDiskType)
    {
        $this->set("BootDiskType", $bootDiskType);
    }

    /**
     * BootDiskSize: 节点系统盘大小
     *
     * @return integer|null
     */
    public function getBootDiskSize()
    {
        return $this->get("BootDiskSize");
    }

    /**
     * BootDiskSize: 节点系统盘大小
     *
     * @param int $bootDiskSize
     */
    public function setBootDiskSize($bootDiskSize)
    {
        $this->set("BootDiskSize", $bootDiskSize);
    }

    /**
     * MachineType: 云主机机型。
     *
     * @return string|null
     */
    public function getMachineType()
    {
        return $this->get("MachineType");
    }

    /**
     * MachineType: 云主机机型。
     *
     * @param string $machineType
     */
    public function setMachineType($machineType)
    {
        $this->set("MachineType", $machineType);
    }

    /**
     * GPU: GPU 数量。
     *
     * @return integer|null
     */
    public function getGPU()
    {
        return $this->get("GPU");
    }

    /**
     * GPU: GPU 数量。
     *
     * @param int $gpu
     */
    public function setGPU($gpu)
    {
        $this->set("GPU", $gpu);
    }

    /**
     * GpuType: GPU 类型。
     *
     * @return string|null
     */
    public function getGpuType()
    {
        return $this->get("GpuType");
    }

    /**
     * GpuType: GPU 类型。
     *
     * @param string $gpuType
     */
    public function setGpuType($gpuType)
    {
        $this->set("GpuType", $gpuType);
    }

    /**
     * Labels: 节点标签 key=value,多组用”,“隔开，最多5组
     *
     * @return string|null
     */
    public function getLabels()
    {
        return $this->get("Labels");
    }

    /**
     * Labels: 节点标签 key=value,多组用”,“隔开，最多5组
     *
     * @param string $labels
     */
    public function setLabels($labels)
    {
        $this->set("Labels", $labels);
    }

    /**
     * MaxPods: Pods数量 默认110, 支持16-512
     *
     * @return integer|null
     */
    public function getMaxPods()
    {
        return $this->get("MaxPods");
    }

    /**
     * MaxPods: Pods数量 默认110, 支持16-512
     *
     * @param int $maxPods
     */
    public function setMaxPods($maxPods)
    {
        $this->set("MaxPods", $maxPods);
    }

    /**
     * MinmalCpuPlatform: 最低 CPU 平台的兼容字段，与 MinimalCpuPlatform 相同。
     *
     * @return string|null
     */
    public function getMinmalCpuPlatform()
    {
        return $this->get("MinmalCpuPlatform");
    }

    /**
     * MinmalCpuPlatform: 最低 CPU 平台的兼容字段，与 MinimalCpuPlatform 相同。
     *
     * @param string $minmalCpuPlatform
     */
    public function setMinmalCpuPlatform($minmalCpuPlatform)
    {
        $this->set("MinmalCpuPlatform", $minmalCpuPlatform);
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
     * Min: 最小node数量
     *
     * @return integer|null
     */
    public function getMin()
    {
        return $this->get("Min");
    }

    /**
     * Min: 最小node数量
     *
     * @param int $min
     */
    public function setMin($min)
    {
        $this->set("Min", $min);
    }

    /**
     * Max: 最大node数量
     *
     * @return integer|null
     */
    public function getMax()
    {
        return $this->get("Max");
    }

    /**
     * Max: 最大node数量
     *
     * @param int $max
     */
    public function setMax($max)
    {
        $this->set("Max", $max);
    }

    /**
     * CurrentNodeNum: 当前该伸缩组管理的node数量
     *
     * @return integer|null
     */
    public function getCurrentNodeNum()
    {
        return $this->get("CurrentNodeNum");
    }

    /**
     * CurrentNodeNum: 当前该伸缩组管理的node数量
     *
     * @param int $currentNodeNum
     */
    public function setCurrentNodeNum($currentNodeNum)
    {
        $this->set("CurrentNodeNum", $currentNodeNum);
    }

    /**
     * CreateTime: 创建时间，Unix 时间戳，单位秒。
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间，Unix 时间戳，单位秒。
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * UpdateTime: 更新时间，Unix 时间戳，单位秒。
     *
     * @return integer|null
     */
    public function getUpdateTime()
    {
        return $this->get("UpdateTime");
    }

    /**
     * UpdateTime: 更新时间，Unix 时间戳，单位秒。
     *
     * @param int $updateTime
     */
    public function setUpdateTime($updateTime)
    {
        $this->set("UpdateTime", $updateTime);
    }

    /**
     * ChargeType: 伸缩组的计费模式。
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 伸缩组的计费模式。
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * IsolationGroup: 硬件隔离组id。可通过DescribeIsolationGroup获取。
     *
     * @return string|null
     */
    public function getIsolationGroup()
    {
        return $this->get("IsolationGroup");
    }

    /**
     * IsolationGroup: 硬件隔离组id。可通过DescribeIsolationGroup获取。
     *
     * @param string $isolationGroup
     */
    public function setIsolationGroup($isolationGroup)
    {
        $this->set("IsolationGroup", $isolationGroup);
    }

    /**
     * Priority: 优先级
     *
     * @return integer|null
     */
    public function getPriority()
    {
        return $this->get("Priority");
    }

    /**
     * Priority: 优先级
     *
     * @param int $priority
     */
    public function setPriority($priority)
    {
        $this->set("Priority", $priority);
    }

    /**
     * NodeCPU: 节点CPU【兼容】
     *
     * @return integer|null
     */
    public function getNodeCPU()
    {
        return $this->get("NodeCPU");
    }

    /**
     * NodeCPU: 节点CPU【兼容】
     *
     * @param int $nodeCPU
     */
    public function setNodeCPU($nodeCPU)
    {
        $this->set("NodeCPU", $nodeCPU);
    }

    /**
     * NodeMem: 节点内存【兼容】
     *
     * @return integer|null
     */
    public function getNodeMem()
    {
        return $this->get("NodeMem");
    }

    /**
     * NodeMem: 节点内存【兼容】
     *
     * @param int $nodeMem
     */
    public function setNodeMem($nodeMem)
    {
        $this->set("NodeMem", $nodeMem);
    }

    /**
     * NodeDataDiskType: 节点数据盘类型【兼容】
     *
     * @return string|null
     */
    public function getNodeDataDiskType()
    {
        return $this->get("NodeDataDiskType");
    }

    /**
     * NodeDataDiskType: 节点数据盘类型【兼容】
     *
     * @param string $nodeDataDiskType
     */
    public function setNodeDataDiskType($nodeDataDiskType)
    {
        $this->set("NodeDataDiskType", $nodeDataDiskType);
    }

    /**
     * NodeDataDiskSize: 节点数据盘大小【兼容】
     *
     * @return integer|null
     */
    public function getNodeDataDiskSize()
    {
        return $this->get("NodeDataDiskSize");
    }

    /**
     * NodeDataDiskSize: 节点数据盘大小【兼容】
     *
     * @param int $nodeDataDiskSize
     */
    public function setNodeDataDiskSize($nodeDataDiskSize)
    {
        $this->set("NodeDataDiskSize", $nodeDataDiskSize);
    }

    /**
     * NodeBootDiskType: 旧伸缩组的系统盘类型。
     *
     * @return string|null
     */
    public function getNodeBootDiskType()
    {
        return $this->get("NodeBootDiskType");
    }

    /**
     * NodeBootDiskType: 旧伸缩组的系统盘类型。
     *
     * @param string $nodeBootDiskType
     */
    public function setNodeBootDiskType($nodeBootDiskType)
    {
        $this->set("NodeBootDiskType", $nodeBootDiskType);
    }

    /**
     * NodeUHostType: 节点云主机机型【兼容】
     *
     * @return string|null
     */
    public function getNodeUHostType()
    {
        return $this->get("NodeUHostType");
    }

    /**
     * NodeUHostType: 节点云主机机型【兼容】
     *
     * @param string $nodeUHostType
     */
    public function setNodeUHostType($nodeUHostType)
    {
        $this->set("NodeUHostType", $nodeUHostType);
    }

    /**
     * NodeGroupId: 节点所属节点池id
     *
     * @return string|null
     */
    public function getNodeGroupId()
    {
        return $this->get("NodeGroupId");
    }

    /**
     * NodeGroupId: 节点所属节点池id
     *
     * @param string $nodeGroupId
     */
    public function setNodeGroupId($nodeGroupId)
    {
        $this->set("NodeGroupId", $nodeGroupId);
    }

    /**
     * SubnetId: 节点子网id【兼容】
     *
     * @return string|null
     */
    public function getSubnetId()
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 节点子网id【兼容】
     *
     * @param string $subnetId
     */
    public function setSubnetId($subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * LoginMode: 节点登录方式：Password 或 KeyPair。
     *
     * @return string|null
     */
    public function getLoginMode()
    {
        return $this->get("LoginMode");
    }

    /**
     * LoginMode: 节点登录方式：Password 或 KeyPair。
     *
     * @param string $loginMode
     */
    public function setLoginMode($loginMode)
    {
        $this->set("LoginMode", $loginMode);
    }

    /**
     * KeyPairId: 登录密钥对 ID。
     *
     * @return string|null
     */
    public function getKeyPairId()
    {
        return $this->get("KeyPairId");
    }

    /**
     * KeyPairId: 登录密钥对 ID。
     *
     * @param string $keyPairId
     */
    public function setKeyPairId($keyPairId)
    {
        $this->set("KeyPairId", $keyPairId);
    }

    /**
     * MinimalCpuPlatform: 最低 CPU 平台。
     *
     * @return string|null
     */
    public function getMinimalCpuPlatform()
    {
        return $this->get("MinimalCpuPlatform");
    }

    /**
     * MinimalCpuPlatform: 最低 CPU 平台。
     *
     * @param string $minimalCpuPlatform
     */
    public function setMinimalCpuPlatform($minimalCpuPlatform)
    {
        $this->set("MinimalCpuPlatform", $minimalCpuPlatform);
    }

    /**
     * Taints: 节点污点配置。
     *
     * @return string|null
     */
    public function getTaints()
    {
        return $this->get("Taints");
    }

    /**
     * Taints: 节点污点配置。
     *
     * @param string $taints
     */
    public function setTaints($taints)
    {
        $this->set("Taints", $taints);
    }

    /**
     * Tag: 业务组。
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组。
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * ImageId: 镜像 ID。
     *
     * @return string|null
     */
    public function getImageId()
    {
        return $this->get("ImageId");
    }

    /**
     * ImageId: 镜像 ID。
     *
     * @param string $imageId
     */
    public function setImageId($imageId)
    {
        $this->set("ImageId", $imageId);
    }

    /**
     * OsName: 操作系统名称。
     *
     * @return string|null
     */
    public function getOsName()
    {
        return $this->get("OsName");
    }

    /**
     * OsName: 操作系统名称。
     *
     * @param string $osName
     */
    public function setOsName($osName)
    {
        $this->set("OsName", $osName);
    }

    /**
     * UserData: Base64 编码的 cloud-init 用户数据。
     *
     * @return string|null
     */
    public function getUserData()
    {
        return $this->get("UserData");
    }

    /**
     * UserData: Base64 编码的 cloud-init 用户数据。
     *
     * @param string $userData
     */
    public function setUserData($userData)
    {
        $this->set("UserData", $userData);
    }

    /**
     * InitScript: Base64 编码的节点初始化后脚本。
     *
     * @return string|null
     */
    public function getInitScript()
    {
        return $this->get("InitScript");
    }

    /**
     * InitScript: Base64 编码的节点初始化后脚本。
     *
     * @param string $initScript
     */
    public function setInitScript($initScript)
    {
        $this->set("InitScript", $initScript);
    }

    /**
     * SecurityMode: 节点安全模式：Firewall 或 SecGroup。
     *
     * @return string|null
     */
    public function getSecurityMode()
    {
        return $this->get("SecurityMode");
    }

    /**
     * SecurityMode: 节点安全模式：Firewall 或 SecGroup。
     *
     * @param string $securityMode
     */
    public function setSecurityMode($securityMode)
    {
        $this->set("SecurityMode", $securityMode);
    }

    /**
     * SecGroupId: 安全组配置列表。
     *
     * @return SecGroupId[]|null
     */
    public function getSecGroupId()
    {
        $items = $this->get("SecGroupId");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new SecGroupId($item));
        }
        return $result;
    }

    /**
     * SecGroupId: 安全组配置列表。
     *
     * @param SecGroupId[] $secGroupId
     */
    public function setSecGroupId(array $secGroupId)
    {
        $result = [];
        foreach ($secGroupId as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * SecurityGroupId: 防火墙 ID。
     *
     * @return string|null
     */
    public function getSecurityGroupId()
    {
        return $this->get("SecurityGroupId");
    }

    /**
     * SecurityGroupId: 防火墙 ID。
     *
     * @param string $securityGroupId
     */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->set("SecurityGroupId", $securityGroupId);
    }

    /**
     * NetworkInterface: 网卡配置列表。
     *
     * @return NetworkInterface[]|null
     */
    public function getNetworkInterface()
    {
        $items = $this->get("NetworkInterface");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new NetworkInterface($item));
        }
        return $result;
    }

    /**
     * NetworkInterface: 网卡配置列表。
     *
     * @param NetworkInterface[] $networkInterface
     */
    public function setNetworkInterface(array $networkInterface)
    {
        $result = [];
        foreach ($networkInterface as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * KubeletConfiguration: Kubelet 自定义配置。
     *
     * @return KubeletConfiguration|null
     */
    public function getKubeletConfiguration()
    {
        return new KubeletConfiguration($this->get("KubeletConfiguration"));
    }

    /**
     * KubeletConfiguration: Kubelet 自定义配置。
     *
     * @param KubeletConfiguration $kubeletConfiguration
     */
    public function setKubeletConfiguration(array $kubeletConfiguration)
    {
        $this->set("KubeletConfiguration", $kubeletConfiguration->getAll());
    }

    /**
     * Password: Base64 编码的节点登录密码。
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->get("Password");
    }

    /**
     * Password: Base64 编码的节点登录密码。
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->set("Password", $password);
    }
}
