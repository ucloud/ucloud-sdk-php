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
namespace UCloud\UK8S\Apis;

use UCloud\Core\Request\Request;
use UCloud\UK8S\Params\UpdateUK8SNodeGroupParamSecGroupId;
use UCloud\UK8S\Params\UpdateUK8SNodeGroupParamNetworkInterface;
use UCloud\UK8S\Params\UpdateUK8SNodeGroupParamNetworkInterfaceEIP;
use UCloud\UK8S\Params\UpdateUK8SNodeGroupParamKubeletConfiguration;

class UpdateUK8SNodeGroupRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateUK8SNodeGroup"]);
        $this->markRequired("Region");
        $this->markRequired("NodeGroupId");
        $this->markRequired("ClusterId");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

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
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * NodeGroupId: 要修改的节点池Id
     *
     * @return string|null
     */
    public function getNodeGroupId()
    {
        return $this->get("NodeGroupId");
    }

    /**
     * NodeGroupId: 要修改的节点池Id
     *
     * @param string $nodeGroupId
     */
    public function setNodeGroupId($nodeGroupId)
    {
        $this->set("NodeGroupId", $nodeGroupId);
    }

    /**
     * ClusterId: 要修改的集群ID
     *
     * @return string|null
     */
    public function getClusterId()
    {
        return $this->get("ClusterId");
    }

    /**
     * ClusterId: 要修改的集群ID
     *
     * @param string $clusterId
     */
    public function setClusterId($clusterId)
    {
        $this->set("ClusterId", $clusterId);
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
     * MachineType: 云主机机型。枚举值["N", "C", "G", "O", "OS"]。参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     *
     * @return string|null
     */
    public function getMachineType()
    {
        return $this->get("MachineType");
    }

    /**
     * MachineType: 云主机机型。枚举值["N", "C", "G", "O", "OS"]。参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     *
     * @param string $machineType
     */
    public function setMachineType($machineType)
    {
        $this->set("MachineType", $machineType);
    }

    /**
     * MinimalCpuPlatform: 最低cpu平台，枚举值["Intel/Auto", "Intel/IvyBridge", "Intel/Haswell", "Intel/Broadwell", "Intel/Skylake", "Intel/Cascadelake"；"Intel/CascadelakeR"; “Amd/Epyc2”,"Amd/Auto"],默认值是"Intel/Auto"
     *
     * @return string|null
     */
    public function getMinimalCpuPlatform()
    {
        return $this->get("MinimalCpuPlatform");
    }

    /**
     * MinimalCpuPlatform: 最低cpu平台，枚举值["Intel/Auto", "Intel/IvyBridge", "Intel/Haswell", "Intel/Broadwell", "Intel/Skylake", "Intel/Cascadelake"；"Intel/CascadelakeR"; “Amd/Epyc2”,"Amd/Auto"],默认值是"Intel/Auto"
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
     * CPU: GPU卡核心数。仅GPU机型支持此字段（可选范围与MachineType+GpuType相关）
     *
     * @return integer|null
     */
    public function getCPU()
    {
        return $this->get("CPU");
    }

    /**
     * CPU: GPU卡核心数。仅GPU机型支持此字段（可选范围与MachineType+GpuType相关）
     *
     * @param int $cpu
     */
    public function setCPU($cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * Mem: 内存大小。单位：MB
     *
     * @return integer|null
     */
    public function getMem()
    {
        return $this->get("Mem");
    }

    /**
     * Mem: 内存大小。单位：MB
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
     * BootDiskType: 磁盘类型
     *
     * @return string|null
     */
    public function getBootDiskType()
    {
        return $this->get("BootDiskType");
    }

    /**
     * BootDiskType: 磁盘类型
     *
     * @param string $bootDiskType
     */
    public function setBootDiskType($bootDiskType)
    {
        $this->set("BootDiskType", $bootDiskType);
    }

    /**
     * DataDiskSize: 数据磁盘大小
     *
     * @return integer|null
     */
    public function getDataDiskSize()
    {
        return $this->get("DataDiskSize");
    }

    /**
     * DataDiskSize: 数据磁盘大小
     *
     * @param int $dataDiskSize
     */
    public function setDataDiskSize($dataDiskSize)
    {
        $this->set("DataDiskSize", $dataDiskSize);
    }

    /**
     * DataDiskType: 磁盘类型
     *
     * @return string|null
     */
    public function getDataDiskType()
    {
        return $this->get("DataDiskType");
    }

    /**
     * DataDiskType: 磁盘类型
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
     * ChargeType: 计费模式
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费模式
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * BootDiskSize: 系统盘大小，单位GB。默认40。范围：[40, 500]。注意SSD本地盘无法调整。
     *
     * @return integer|null
     */
    public function getBootDiskSize()
    {
        return $this->get("BootDiskSize");
    }

    /**
     * BootDiskSize: 系统盘大小，单位GB。默认40。范围：[40, 500]。注意SSD本地盘无法调整。
     *
     * @param int $bootDiskSize
     */
    public function setBootDiskSize($bootDiskSize)
    {
        $this->set("BootDiskSize", $bootDiskSize);
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
     * ZoneBaned: 重复 待删除 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getZoneBaned()
    {
        return $this->get("ZoneBaned");
    }

    /**
     * ZoneBaned: 重复 待删除 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $zoneBaned
     */
    public function setZoneBaned($zoneBaned)
    {
        $this->set("ZoneBaned", $zoneBaned);
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
     * MaxPods: 默认110，生产环境建议小于等于110。
     *
     * @return string|null
     */
    public function getMaxPods()
    {
        return $this->get("MaxPods");
    }

    /**
     * MaxPods: 默认110，生产环境建议小于等于110。
     *
     * @param string $maxPods
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
     * NetCapability: 网络增强特性。枚举值：Normal，不开启; Super，开启网络增强1.0； Ultra，开启网络增强2.0；Extreme，开启网络增强3.0; Infiniband, 开启网络增强4.0（详情参考主机官网文档）
     *
     * @return string|null
     */
    public function getNetCapability()
    {
        return $this->get("NetCapability");
    }

    /**
     * NetCapability: 网络增强特性。枚举值：Normal，不开启; Super，开启网络增强1.0； Ultra，开启网络增强2.0；Extreme，开启网络增强3.0; Infiniband, 开启网络增强4.0（详情参考主机官网文档）
     *
     * @param string $netCapability
     */
    public function setNetCapability($netCapability)
    {
        $this->set("NetCapability", $netCapability);
    }

    /**
     * UNIFeature: 弹性网卡特性。开启了弹性网卡权限位，此特性才生效，默认 false 未开启，true 开启。
     *
     * @return boolean|null
     */
    public function getUNIFeature()
    {
        return $this->get("UNIFeature");
    }

    /**
     * UNIFeature: 弹性网卡特性。开启了弹性网卡权限位，此特性才生效，默认 false 未开启，true 开启。
     *
     * @param boolean $uniFeature
     */
    public function setUNIFeature($uniFeature)
    {
        $this->set("UNIFeature", $uniFeature);
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
     * NodeNamePrefix: 自定义主机名前缀。完整的自定义主机名为{NodeNamePrefix}-{NodeIP}。
     *
     * @return string|null
     */
    public function getNodeNamePrefix()
    {
        return $this->get("NodeNamePrefix");
    }

    /**
     * NodeNamePrefix: 自定义主机名前缀。完整的自定义主机名为{NodeNamePrefix}-{NodeIP}。
     *
     * @param string $nodeNamePrefix
     */
    public function setNodeNamePrefix($nodeNamePrefix)
    {
        $this->set("NodeNamePrefix", $nodeNamePrefix);
    }

    /**
     * SecGroupId:
     *
     * @return UpdateUK8SNodeGroupParamSecGroupId[]|null
     */
    public function getSecGroupId()
    {
        $items = $this->get("SecGroupId");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UpdateUK8SNodeGroupParamSecGroupId($item));
        }
        return $result;
    }

    /**
     * SecGroupId:
     *
     * @param UpdateUK8SNodeGroupParamSecGroupId[] $secGroupId
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
     * NetworkInterface:
     *
     * @return UpdateUK8SNodeGroupParamNetworkInterface[]|null
     */
    public function getNetworkInterface()
    {
        $items = $this->get("NetworkInterface");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UpdateUK8SNodeGroupParamNetworkInterface($item));
        }
        return $result;
    }

    /**
     * NetworkInterface:
     *
     * @param UpdateUK8SNodeGroupParamNetworkInterface[] $networkInterface
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
     * KubeletConfiguration:
     *
     * @return UpdateUK8SNodeGroupParamKubeletConfiguration|null
     */
    public function getKubeletConfiguration()
    {
        return new UpdateUK8SNodeGroupParamKubeletConfiguration($this->get("KubeletConfiguration"));
    }

    /**
     * KubeletConfiguration:
     *
     * @param UpdateUK8SNodeGroupParamKubeletConfiguration $kubeletConfiguration
     */
    public function setKubeletConfiguration(array $kubeletConfiguration)
    {
        $this->set("KubeletConfiguration", $kubeletConfiguration->getAll());
    }
}
