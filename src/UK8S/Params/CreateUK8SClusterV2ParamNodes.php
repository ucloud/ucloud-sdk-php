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
namespace UCloud\UK8S\Params;

use UCloud\Core\Request\Request;

class CreateUK8SClusterV2ParamNodes extends Request
{
    

    /**
     * Zone: 一组Nodes节点所属可用区，可创建多组Nodes节点，如一组是CPU Nodes节点，另一组是GPU Nodes节点。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 一组Nodes节点所属可用区，可创建多组Nodes节点，如一组是CPU Nodes节点，另一组是GPU Nodes节点。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * MachineType: 一组Nodes节点云主机机型，如["N", "C", "O", "OS"]，具体请参照云主机机型。
     *
     * @return string|null
     */
    public function getMachineType()
    {
        return $this->get("MachineType");
    }

    /**
     * MachineType: 一组Nodes节点云主机机型，如["N", "C", "O", "OS"]，具体请参照云主机机型。
     *
     * @param string $machineType
     */
    public function setMachineType($machineType)
    {
        $this->set("MachineType", $machineType);
    }

    /**
     * CPU: 一组Node节点的虚拟CPU核数。单位：核，范围：[2, 64]，可选范围参考控制台。
     *
     * @return integer|null
     */
    public function getCPU()
    {
        return $this->get("CPU");
    }

    /**
     * CPU: 一组Node节点的虚拟CPU核数。单位：核，范围：[2, 64]，可选范围参考控制台。
     *
     * @param int $cpu
     */
    public function setCPU($cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * Mem: 一组Node节点的内存大小。单位：MB,范围 ：[4096, 262144]，取值为1024的倍数，可选范围参考控制台。
     *
     * @return integer|null
     */
    public function getMem()
    {
        return $this->get("Mem");
    }

    /**
     * Mem: 一组Node节点的内存大小。单位：MB,范围 ：[4096, 262144]，取值为1024的倍数，可选范围参考控制台。
     *
     * @param int $mem
     */
    public function setMem($mem)
    {
        $this->set("Mem", $mem);
    }

    /**
     * Count: 一组Node节点的数量，范围：[1,10]。
     *
     * @return integer|null
     */
    public function getCount()
    {
        return $this->get("Count");
    }

    /**
     * Count: 一组Node节点的数量，范围：[1,10]。
     *
     * @param int $count
     */
    public function setCount($count)
    {
        $this->set("Count", $count);
    }

    /**
     * IsolationGroup: 一组Node节点的隔离组Id，归属于同一隔离组的虚拟机节点将落在不同的物理机上，单个隔离组最多只能容纳8个节点。参见DescribeIsolationGroup。
     *
     * @return string|null
     */
    public function getIsolationGroup()
    {
        return $this->get("IsolationGroup");
    }

    /**
     * IsolationGroup: 一组Node节点的隔离组Id，归属于同一隔离组的虚拟机节点将落在不同的物理机上，单个隔离组最多只能容纳8个节点。参见DescribeIsolationGroup。
     *
     * @param string $isolationGroup
     */
    public function setIsolationGroup($isolationGroup)
    {
        $this->set("IsolationGroup", $isolationGroup);
    }

    /**
     * MaxPods: Node节点上可运行最大节点数，默认为110。
     *
     * @return integer|null
     */
    public function getMaxPods()
    {
        return $this->get("MaxPods");
    }

    /**
     * MaxPods: Node节点上可运行最大节点数，默认为110。
     *
     * @param int $maxPods
     */
    public function setMaxPods($maxPods)
    {
        $this->set("MaxPods", $maxPods);
    }

    /**
     * Labels: Node节点标签，形式为key=value，多组Labels用”,“隔开,最多支持五组。
     *
     * @return string|null
     */
    public function getLabels()
    {
        return $this->get("Labels");
    }

    /**
     * Labels: Node节点标签，形式为key=value，多组Labels用”,“隔开,最多支持五组。
     *
     * @param string $labels
     */
    public function setLabels($labels)
    {
        $this->set("Labels", $labels);
    }

    /**
     * BootDiskType: 一组Node节点的系统盘类型，请参考[[api:uhost-api:disk_type|磁盘类型]]。默认为SSD云盘
     *
     * @return string|null
     */
    public function getBootDiskType()
    {
        return $this->get("BootDiskType");
    }

    /**
     * BootDiskType: 一组Node节点的系统盘类型，请参考[[api:uhost-api:disk_type|磁盘类型]]。默认为SSD云盘
     *
     * @param string $bootDiskType
     */
    public function setBootDiskType($bootDiskType)
    {
        $this->set("BootDiskType", $bootDiskType);
    }

    /**
     * BootDiskSIze: Node节点的系统盘大小，单位GB，默认为40。范围：[40, 500]。注意SSD本地盘无法调整。
     *
     * @return integer|null
     */
    public function getBootDiskSIze()
    {
        return $this->get("BootDiskSIze");
    }

    /**
     * BootDiskSIze: Node节点的系统盘大小，单位GB，默认为40。范围：[40, 500]。注意SSD本地盘无法调整。
     *
     * @param int $bootDiskSIze
     */
    public function setBootDiskSIze($bootDiskSIze)
    {
        $this->set("BootDiskSIze", $bootDiskSIze);
    }

    /**
     * DataDiskType: 一组Node节点的数据盘类型，请参考[[api:uhost-api:disk_type|磁盘类型]]。默认为SSD云盘
     *
     * @return string|null
     */
    public function getDataDiskType()
    {
        return $this->get("DataDiskType");
    }

    /**
     * DataDiskType: 一组Node节点的数据盘类型，请参考[[api:uhost-api:disk_type|磁盘类型]]。默认为SSD云盘
     *
     * @param string $dataDiskType
     */
    public function setDataDiskType($dataDiskType)
    {
        $this->set("DataDiskType", $dataDiskType);
    }

    /**
     * GpuType: 一组Node节点的GPU类型，枚举值["K80", "P40", "V100"]，最新值参考Console。
     *
     * @return string|null
     */
    public function getGpuType()
    {
        return $this->get("GpuType");
    }

    /**
     * GpuType: 一组Node节点的GPU类型，枚举值["K80", "P40", "V100"]，最新值参考Console。
     *
     * @param string $gpuType
     */
    public function setGpuType($gpuType)
    {
        $this->set("GpuType", $gpuType);
    }

    /**
     * GPU: 一组Node节点的GPU卡核心数，仅GPU机型支持此字段。
     *
     * @return integer|null
     */
    public function getGPU()
    {
        return $this->get("GPU");
    }

    /**
     * GPU: 一组Node节点的GPU卡核心数，仅GPU机型支持此字段。
     *
     * @param int $gpu
     */
    public function setGPU($gpu)
    {
        $this->set("GPU", $gpu);
    }

    /**
     * DataDiskSize: 数据磁盘大小，单位GB。默认0。范围 ：[20, 1000]
     *
     * @return integer|null
     */
    public function getDataDiskSize()
    {
        return $this->get("DataDiskSize");
    }

    /**
     * DataDiskSize: 数据磁盘大小，单位GB。默认0。范围 ：[20, 1000]
     *
     * @param int $dataDiskSize
     */
    public function setDataDiskSize($dataDiskSize)
    {
        $this->set("DataDiskSize", $dataDiskSize);
    }

    /**
     * MinimalCpuPlatform: Node节点的最低cpu平台，不选则随机。枚举值["Intel/Auto", "Intel/IvyBridge", "Intel/Haswell", "Intel/Broadwell", "Intel/Skylake", "Intel/Cascadelake"。
     *
     * @return string|null
     */
    public function getMinimalCpuPlatform()
    {
        return $this->get("MinimalCpuPlatform");
    }

    /**
     * MinimalCpuPlatform: Node节点的最低cpu平台，不选则随机。枚举值["Intel/Auto", "Intel/IvyBridge", "Intel/Haswell", "Intel/Broadwell", "Intel/Skylake", "Intel/Cascadelake"。
     *
     * @param string $minimalCpuPlatform
     */
    public function setMinimalCpuPlatform($minimalCpuPlatform)
    {
        $this->set("MinimalCpuPlatform", $minimalCpuPlatform);
    }

    /**
     * Taints: Node节点污点，形式为key=value:effect，多组taints用”,“隔开,最多支持五组。
     *
     * @return string|null
     */
    public function getTaints()
    {
        return $this->get("Taints");
    }

    /**
     * Taints: Node节点污点，形式为key=value:effect，多组taints用”,“隔开,最多支持五组。
     *
     * @param string $taints
     */
    public function setTaints($taints)
    {
        $this->set("Taints", $taints);
    }

    /**
     * SecurityMode: 主机安全模式。Firewall：防火墙；SecGroup：安全组；默认值：Firewall。
     *
     * @return string|null
     */
    public function getSecurityMode()
    {
        return $this->get("SecurityMode");
    }

    /**
     * SecurityMode: 主机安全模式。Firewall：防火墙；SecGroup：安全组；默认值：Firewall。
     *
     * @param string $securityMode
     */
    public function setSecurityMode($securityMode)
    {
        $this->set("SecurityMode", $securityMode);
    }

    /**
     * NamePrefix: 一组Node的自定义主机名前缀。 完整的自定义主机名为{NamePrefix}-{NodeIP}。
     *
     * @return string|null
     */
    public function getNamePrefix()
    {
        return $this->get("NamePrefix");
    }

    /**
     * NamePrefix: 一组Node的自定义主机名前缀。 完整的自定义主机名为{NamePrefix}-{NodeIP}。
     *
     * @param string $namePrefix
     */
    public function setNamePrefix($namePrefix)
    {
        $this->set("NamePrefix", $namePrefix);
    }

    /**
     * ImageId: Node节点的镜像 ID，不填则使用ImageId参数。支持用户自定义镜像。
     *
     * @return string|null
     */
    public function getImageId()
    {
        return $this->get("ImageId");
    }

    /**
     * ImageId: Node节点的镜像 ID，不填则使用ImageId参数。支持用户自定义镜像。
     *
     * @param string $imageId
     */
    public function setImageId($imageId)
    {
        $this->set("ImageId", $imageId);
    }

    /**
     * UNIFeature: 弹性网卡特性。开启了弹性网卡权限位，此特性才生效，默认 false 未开启，true 开启。
     *
     * @return string|null
     */
    public function getUNIFeature()
    {
        return $this->get("UNIFeature");
    }

    /**
     * UNIFeature: 弹性网卡特性。开启了弹性网卡权限位，此特性才生效，默认 false 未开启，true 开启。
     *
     * @param string $uniFeature
     */
    public function setUNIFeature($uniFeature)
    {
        $this->set("UNIFeature", $uniFeature);
    }

    /**
     * NetworkInterface:
     *
     * @return CreateUK8SClusterV2ParamNodesNetworkInterface[]|null
     */
    public function getNetworkInterface()
    {
        $items = $this->get("NetworkInterface");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CreateUK8SClusterV2ParamNodesNetworkInterface($item));
        }
        return $result;
    }

    /**
     * NetworkInterface:
     *
     * @param CreateUK8SClusterV2ParamNodesNetworkInterface[] $networkInterface
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
     * SecurityGroupId: 防火墙ID，默认：Web推荐防火墙。如何查询SecurityGroupId请参见 [DescribeFirewall](api/unet-api/describe_firewall.html)。
     *
     * @return string|null
     */
    public function getSecurityGroupId()
    {
        return $this->get("SecurityGroupId");
    }

    /**
     * SecurityGroupId: 防火墙ID，默认：Web推荐防火墙。如何查询SecurityGroupId请参见 [DescribeFirewall](api/unet-api/describe_firewall.html)。
     *
     * @param string $securityGroupId
     */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->set("SecurityGroupId", $securityGroupId);
    }

    /**
     * SecGroupId:
     *
     * @return CreateUK8SClusterV2ParamNodesSecGroupId[]|null
     */
    public function getSecGroupId()
    {
        $items = $this->get("SecGroupId");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CreateUK8SClusterV2ParamNodesSecGroupId($item));
        }
        return $result;
    }

    /**
     * SecGroupId:
     *
     * @param CreateUK8SClusterV2ParamNodesSecGroupId[] $secGroupId
     */
    public function setSecGroupId(array $secGroupId)
    {
        $result = [];
        foreach ($secGroupId as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
