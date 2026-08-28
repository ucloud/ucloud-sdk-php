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

class NodeGroupSet extends Response
{
    

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * NodeGroupId: 节点池ID
     *
     * @return string|null
     */
    public function getNodeGroupId()
    {
        return $this->get("NodeGroupId");
    }

    /**
     * NodeGroupId: 节点池ID
     *
     * @param string $nodeGroupId
     */
    public function setNodeGroupId($nodeGroupId)
    {
        $this->set("NodeGroupId", $nodeGroupId);
    }

    /**
     * NodeGroupName: 节点池名字
     *
     * @return string|null
     */
    public function getNodeGroupName()
    {
        return $this->get("NodeGroupName");
    }

    /**
     * NodeGroupName: 节点池名字
     *
     * @param string $nodeGroupName
     */
    public function setNodeGroupName($nodeGroupName)
    {
        $this->set("NodeGroupName", $nodeGroupName);
    }

    /**
     * NodeNamePrefix: 自定义Uhost主机名前缀。完整的自定义Uhost主机名为{NodeNamePrefix}-{NodeIP}。
     *
     * @return string|null
     */
    public function getNodeNamePrefix()
    {
        return $this->get("NodeNamePrefix");
    }

    /**
     * NodeNamePrefix: 自定义Uhost主机名前缀。完整的自定义Uhost主机名为{NodeNamePrefix}-{NodeIP}。
     *
     * @param string $nodeNamePrefix
     */
    public function setNodeNamePrefix($nodeNamePrefix)
    {
        $this->set("NodeNamePrefix", $nodeNamePrefix);
    }

    /**
     * ImageId: 镜像ID
     *
     * @return string|null
     */
    public function getImageId()
    {
        return $this->get("ImageId");
    }

    /**
     * ImageId: 镜像ID
     *
     * @param string $imageId
     */
    public function setImageId($imageId)
    {
        $this->set("ImageId", $imageId);
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
     * MinimalCpuPlatform: cpu平台
     *
     * @return string|null
     */
    public function getMinimalCpuPlatform()
    {
        return $this->get("MinimalCpuPlatform");
    }

    /**
     * MinimalCpuPlatform: cpu平台
     *
     * @param string $minimalCpuPlatform
     */
    public function setMinimalCpuPlatform($minimalCpuPlatform)
    {
        $this->set("MinimalCpuPlatform", $minimalCpuPlatform);
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
     * CPU: 虚拟CPU核数
     *
     * @return integer|null
     */
    public function getCPU()
    {
        return $this->get("CPU");
    }

    /**
     * CPU: 虚拟CPU核数
     *
     * @param int $cpu
     */
    public function setCPU($cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * Mem: 内存大小
     *
     * @return integer|null
     */
    public function getMem()
    {
        return $this->get("Mem");
    }

    /**
     * Mem: 内存大小
     *
     * @param int $mem
     */
    public function setMem($mem)
    {
        $this->set("Mem", $mem);
    }

    /**
     * GpuType: GPU类型
     *
     * @return string|null
     */
    public function getGpuType()
    {
        return $this->get("GpuType");
    }

    /**
     * GpuType: GPU类型
     *
     * @param string $gpuType
     */
    public function setGpuType($gpuType)
    {
        $this->set("GpuType", $gpuType);
    }

    /**
     * GPU: GPU卡核心数
     *
     * @return integer|null
     */
    public function getGPU()
    {
        return $this->get("GPU");
    }

    /**
     * GPU: GPU卡核心数
     *
     * @param int $gpu
     */
    public function setGPU($gpu)
    {
        $this->set("GPU", $gpu);
    }

    /**
     * BootDiskType: 系统盘类型
     *
     * @return string|null
     */
    public function getBootDiskType()
    {
        return $this->get("BootDiskType");
    }

    /**
     * BootDiskType: 系统盘类型
     *
     * @param string $bootDiskType
     */
    public function setBootDiskType($bootDiskType)
    {
        $this->set("BootDiskType", $bootDiskType);
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
     * DataDiskSize: 数据盘大小
     *
     * @return integer|null
     */
    public function getDataDiskSize()
    {
        return $this->get("DataDiskSize");
    }

    /**
     * DataDiskSize: 数据盘大小
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
     * Tag: 业务组
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * ChargeType: 付费方式
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 付费方式
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * NodeList: 节点id列表
     *
     * @return string[]|null
     */
    public function getNodeList()
    {
        return $this->get("NodeList");
    }

    /**
     * NodeList: 节点id列表
     *
     * @param string[] $nodeList
     */
    public function setNodeList(array $nodeList)
    {
        $this->set("NodeList", $nodeList);
    }

    /**
     * SubnetId: 子网 ID。默认为集群创建时填写的子网ID，也可以填写集群同VPC内的子网ID。
     *
     * @return string|null
     */
    public function getSubnetId()
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 子网 ID。默认为集群创建时填写的子网ID，也可以填写集群同VPC内的子网ID。
     *
     * @param string $subnetId
     */
    public function setSubnetId($subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * IsolationGroupId: 硬件隔离组id。可通过DescribeIsolationGroup获取。
     *
     * @return string|null
     */
    public function getIsolationGroupId()
    {
        return $this->get("IsolationGroupId");
    }

    /**
     * IsolationGroupId: 硬件隔离组id。可通过DescribeIsolationGroup获取。
     *
     * @param string $isolationGroupId
     */
    public function setIsolationGroupId($isolationGroupId)
    {
        $this->set("IsolationGroupId", $isolationGroupId);
    }

    /**
     * MaxPods: int默认110，生产环境建议小于等于110。
     *
     * @return integer|null
     */
    public function getMaxPods()
    {
        return $this->get("MaxPods");
    }

    /**
     * MaxPods: int默认110，生产环境建议小于等于110。
     *
     * @param int $maxPods
     */
    public function setMaxPods($maxPods)
    {
        $this->set("MaxPods", $maxPods);
    }

    /**
     * UserData: 用户自定义数据。当镜像支持Cloud-init Feature时可填写此字段。注意：1、总数据量大小不超过 16K；2、使用base64编码。
     *
     * @return string|null
     */
    public function getUserData()
    {
        return $this->get("UserData");
    }

    /**
     * UserData: 用户自定义数据。当镜像支持Cloud-init Feature时可填写此字段。注意：1、总数据量大小不超过 16K；2、使用base64编码。
     *
     * @param string $userData
     */
    public function setUserData($userData)
    {
        $this->set("UserData", $userData);
    }

    /**
     * InitScript: 用户自定义Shell脚本。与UserData的区别在于InitScript在节点初始化完毕后才执行，UserData则是云主机初始化时执行。
     *
     * @return string|null
     */
    public function getInitScript()
    {
        return $this->get("InitScript");
    }

    /**
     * InitScript: 用户自定义Shell脚本。与UserData的区别在于InitScript在节点初始化完毕后才执行，UserData则是云主机初始化时执行。
     *
     * @param string $initScript
     */
    public function setInitScript($initScript)
    {
        $this->set("InitScript", $initScript);
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
     * Labels: Node节点标签。key=value形式,多组用”,“隔开，最多5组。 如env=pro,type=game
     *
     * @return string|null
     */
    public function getLabels()
    {
        return $this->get("Labels");
    }

    /**
     * Labels: Node节点标签。key=value形式,多组用”,“隔开，最多5组。 如env=pro,type=game
     *
     * @param string $labels
     */
    public function setLabels($labels)
    {
        $this->set("Labels", $labels);
    }

    /**
     * SecGroupId: Node所属的安全组id（最多5个）
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
     * SecGroupId: Node所属的安全组id（最多5个）
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
     * NetworkInterface: Node节点网卡配置
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
     * NetworkInterface: Node节点网卡配置
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
     * KubeletConfiguration: KubeletConfiguration
     *
     * @return KubeletConfiguration|null
     */
    public function getKubeletConfiguration()
    {
        return new KubeletConfiguration($this->get("KubeletConfiguration"));
    }

    /**
     * KubeletConfiguration: KubeletConfiguration
     *
     * @param KubeletConfiguration $kubeletConfiguration
     */
    public function setKubeletConfiguration(array $kubeletConfiguration)
    {
        $this->set("KubeletConfiguration", $kubeletConfiguration->getAll());
    }

    /**
     * ImageName: 镜像名称
     *
     * @return string|null
     */
    public function getImageName()
    {
        return $this->get("ImageName");
    }

    /**
     * ImageName: 镜像名称
     *
     * @param string $imageName
     */
    public function setImageName($imageName)
    {
        $this->set("ImageName", $imageName);
    }

    /**
     * ImageType: 镜像类型
     *
     * @return string|null
     */
    public function getImageType()
    {
        return $this->get("ImageType");
    }

    /**
     * ImageType: 镜像类型
     *
     * @param string $imageType
     */
    public function setImageType($imageType)
    {
        $this->set("ImageType", $imageType);
    }

    /**
     * OsType: 操作系统类型
     *
     * @return string|null
     */
    public function getOsType()
    {
        return $this->get("OsType");
    }

    /**
     * OsType: 操作系统类型
     *
     * @param string $osType
     */
    public function setOsType($osType)
    {
        $this->set("OsType", $osType);
    }

    /**
     * OsName: 操作系统名称
     *
     * @return string|null
     */
    public function getOsName()
    {
        return $this->get("OsName");
    }

    /**
     * OsName: 操作系统名称
     *
     * @param string $osName
     */
    public function setOsName($osName)
    {
        $this->set("OsName", $osName);
    }

    /**
     * NetCapability: 网络配置
     *
     * @return string|null
     */
    public function getNetCapability()
    {
        return $this->get("NetCapability");
    }

    /**
     * NetCapability: 网络配置
     *
     * @param string $netCapability
     */
    public function setNetCapability($netCapability)
    {
        $this->set("NetCapability", $netCapability);
    }

    /**
     * UNIFeature: 是否启用 UNI 网络特性
     *
     * @return boolean|null
     */
    public function getUNIFeature()
    {
        return $this->get("UNIFeature");
    }

    /**
     * UNIFeature: 是否启用 UNI 网络特性
     *
     * @param boolean $uniFeature
     */
    public function setUNIFeature($uniFeature)
    {
        $this->set("UNIFeature", $uniFeature);
    }

    /**
     * Disks: 磁盘列表
     *
     * @return DiskSet[]|null
     */
    public function getDisks()
    {
        $items = $this->get("Disks");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new DiskSet($item));
        }
        return $result;
    }

    /**
     * Disks: 磁盘列表
     *
     * @param DiskSet[] $disks
     */
    public function setDisks(array $disks)
    {
        $result = [];
        foreach ($disks as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * RelatedAsg: 节点池关联的弹性伸缩组ID
     *
     * @return string[]|null
     */
    public function getRelatedAsg()
    {
        return $this->get("RelatedAsg");
    }

    /**
     * RelatedAsg: 节点池关联的弹性伸缩组ID
     *
     * @param string[] $relatedAsg
     */
    public function setRelatedAsg(array $relatedAsg)
    {
        $this->set("RelatedAsg", $relatedAsg);
    }

    /**
     * CreateTime: 节点池创建时间
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 节点池创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * UpdateTime: 节点池更新时间
     *
     * @return integer|null
     */
    public function getUpdateTime()
    {
        return $this->get("UpdateTime");
    }

    /**
     * UpdateTime: 节点池更新时间
     *
     * @param int $updateTime
     */
    public function setUpdateTime($updateTime)
    {
        $this->set("UpdateTime", $updateTime);
    }
}
