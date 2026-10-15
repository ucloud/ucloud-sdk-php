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

class AddUK8SAutoScalingGroupV2Request extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "AddUK8SAutoScalingGroupV2"]);
        $this->markRequired("Zone");
        $this->markRequired("Region");
        $this->markRequired("ClusterId");
        $this->markRequired("Name");
        $this->markRequired("CPU");
        $this->markRequired("Mem");
        $this->markRequired("MachineType");
        $this->markRequired("Min");
        $this->markRequired("Max");
        $this->markRequired("NodeGroupId");
    }

    

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
     * ProjectId: 项目ID
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * Region: 地域
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
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
     * CPU: 节点CPU大小
     *
     * @return integer|null
     */
    public function getCPU()
    {
        return $this->get("CPU");
    }

    /**
     * CPU: 节点CPU大小
     *
     * @param int $cpu
     */
    public function setCPU($cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * Mem: 节点Mem大小
     *
     * @return integer|null
     */
    public function getMem()
    {
        return $this->get("Mem");
    }

    /**
     * Mem: 节点Mem大小
     *
     * @param int $mem
     */
    public function setMem($mem)
    {
        $this->set("Mem", $mem);
    }

    /**
     * MachineType: 云主机机型。该参数仍需传入；实际节点规格取自绑定的节点池。
     *
     * @return string|null
     */
    public function getMachineType()
    {
        return $this->get("MachineType");
    }

    /**
     * MachineType: 云主机机型。该参数仍需传入；实际节点规格取自绑定的节点池。
     *
     * @param string $machineType
     */
    public function setMachineType($machineType)
    {
        $this->set("MachineType", $machineType);
    }

    /**
     * Min: 最小节点数，范围 0–100，且不得大于 Max。必须显式传入，允许为 0。
     *
     * @return integer|null
     */
    public function getMin()
    {
        return $this->get("Min");
    }

    /**
     * Min: 最小节点数，范围 0–100，且不得大于 Max。必须显式传入，允许为 0。
     *
     * @param int $min
     */
    public function setMin($min)
    {
        $this->set("Min", $min);
    }

    /**
     * Max: 最大节点数，范围 1–100，且不得小于 Min。
     *
     * @return integer|null
     */
    public function getMax()
    {
        return $this->get("Max");
    }

    /**
     * Max: 最大节点数，范围 1–100，且不得小于 Min。
     *
     * @param int $max
     */
    public function setMax($max)
    {
        $this->set("Max", $max);
    }

    /**
     * NodeGroupId: 伸缩组绑定的有效节点池 ID。当前实现必须提供，节点配置取自该节点池。
     *
     * @return string|null
     */
    public function getNodeGroupId()
    {
        return $this->get("NodeGroupId");
    }

    /**
     * NodeGroupId: 伸缩组绑定的有效节点池 ID。当前实现必须提供，节点配置取自该节点池。
     *
     * @param string $nodeGroupId
     */
    public function setNodeGroupId($nodeGroupId)
    {
        $this->set("NodeGroupId", $nodeGroupId);
    }

    /**
     * Password: Base64 编码的节点登录密码。LoginMode 为 Password（默认）时必填，不会自动生成随机密码；KeyPair 模式下可不填。
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->get("Password");
    }

    /**
     * Password: Base64 编码的节点登录密码。LoginMode 为 Password（默认）时必填，不会自动生成随机密码；KeyPair 模式下可不填。
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->set("Password", $password);
    }

    /**
     * BootDiskType: 磁盘类型。请参考[[api:uhost-api:disk_type|磁盘类型]]。默认为SSD云盘
     *
     * @return string|null
     */
    public function getBootDiskType()
    {
        return $this->get("BootDiskType");
    }

    /**
     * BootDiskType: 磁盘类型。请参考[[api:uhost-api:disk_type|磁盘类型]]。默认为SSD云盘
     *
     * @param string $bootDiskType
     */
    public function setBootDiskType($bootDiskType)
    {
        $this->set("BootDiskType", $bootDiskType);
    }

    /**
     * DataDiskType: 磁盘类型。请参考[[api:uhost-api:disk_type|磁盘类型]]。默认为SSD云盘
     *
     * @return string|null
     */
    public function getDataDiskType()
    {
        return $this->get("DataDiskType");
    }

    /**
     * DataDiskType: 磁盘类型。请参考[[api:uhost-api:disk_type|磁盘类型]]。默认为SSD云盘
     *
     * @param string $dataDiskType
     */
    public function setDataDiskType($dataDiskType)
    {
        $this->set("DataDiskType", $dataDiskType);
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
     * MinmalCpuPlatform: 最低 CPU 平台的兼容字段；同时提供 MinimalCpuPlatform 时以其为准。
     *
     * @return string|null
     */
    public function getMinmalCpuPlatform()
    {
        return $this->get("MinmalCpuPlatform");
    }

    /**
     * MinmalCpuPlatform: 最低 CPU 平台的兼容字段；同时提供 MinimalCpuPlatform 时以其为准。
     *
     * @param string $minmalCpuPlatform
     */
    public function setMinmalCpuPlatform($minmalCpuPlatform)
    {
        $this->set("MinmalCpuPlatform", $minmalCpuPlatform);
    }

    /**
     * GpuType: GPU 类型；实际节点规格取自绑定的节点池。
     *
     * @return string|null
     */
    public function getGpuType()
    {
        return $this->get("GpuType");
    }

    /**
     * GpuType: GPU 类型；实际节点规格取自绑定的节点池。
     *
     * @param string $gpuType
     */
    public function setGpuType($gpuType)
    {
        $this->set("GpuType", $gpuType);
    }

    /**
     * GPU: GPU卡核心数。仅GPU机型支持此字段
     *
     * @return integer|null
     */
    public function getGPU()
    {
        return $this->get("GPU");
    }

    /**
     * GPU: GPU卡核心数。仅GPU机型支持此字段
     *
     * @param int $gpu
     */
    public function setGPU($gpu)
    {
        $this->set("GPU", $gpu);
    }

    /**
     * Labels: key=value,多组用”,“隔开，最多5组
     *
     * @return string|null
     */
    public function getLabels()
    {
        return $this->get("Labels");
    }

    /**
     * Labels: key=value,多组用”,“隔开，最多5组
     *
     * @param string $labels
     */
    public function setLabels($labels)
    {
        $this->set("Labels", $labels);
    }

    /**
     * MaxPods: 默认110, 支持16-512
     *
     * @return integer|null
     */
    public function getMaxPods()
    {
        return $this->get("MaxPods");
    }

    /**
     * MaxPods: 默认110, 支持16-512
     *
     * @param int $maxPods
     */
    public function setMaxPods($maxPods)
    {
        $this->set("MaxPods", $maxPods);
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
     * ImageId: 镜像 Id，不填时后台程序会自动选用一个可用的镜像 Id，不支持用户自定义镜像，传入自定义镜像 Id 将报错
     *
     * @return string|null
     */
    public function getImageId()
    {
        return $this->get("ImageId");
    }

    /**
     * ImageId: 镜像 Id，不填时后台程序会自动选用一个可用的镜像 Id，不支持用户自定义镜像，传入自定义镜像 Id 将报错
     *
     * @param string $imageId
     */
    public function setImageId($imageId)
    {
        $this->set("ImageId", $imageId);
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
     * InitScript: Base64 编码的用户脚本，在 UK8S 节点初始化完成后执行。
     *
     * @return string|null
     */
    public function getInitScript()
    {
        return $this->get("InitScript");
    }

    /**
     * InitScript: Base64 编码的用户脚本，在 UK8S 节点初始化完成后执行。
     *
     * @param string $initScript
     */
    public function setInitScript($initScript)
    {
        $this->set("InitScript", $initScript);
    }

    /**
     * ChargeType: 计费模式：Year、Month、Dynamic、Postpay，默认 Dynamic。此接口不接受 Preemptive。
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费模式：Year、Month、Dynamic、Postpay，默认 Dynamic。此接口不接受 Preemptive。
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
     * Priority: 伸缩组的优先级，取值[1, 100]，数值越大优先级越高，在扩容的时候会被更优先考虑。
     *
     * @return integer|null
     */
    public function getPriority()
    {
        return $this->get("Priority");
    }

    /**
     * Priority: 伸缩组的优先级，取值[1, 100]，数值越大优先级越高，在扩容的时候会被更优先考虑。
     *
     * @param int $priority
     */
    public function setPriority($priority)
    {
        $this->set("Priority", $priority);
    }

    /**
     * LoginMode: 节点登录方式：Password 或 KeyPair，默认 Password。
     *
     * @return string|null
     */
    public function getLoginMode()
    {
        return $this->get("LoginMode");
    }

    /**
     * LoginMode: 节点登录方式：Password 或 KeyPair，默认 Password。
     *
     * @param string $loginMode
     */
    public function setLoginMode($loginMode)
    {
        $this->set("LoginMode", $loginMode);
    }

    /**
     * KeyPairId: 登录密钥对 ID。LoginMode 为 KeyPair 时必填。
     *
     * @return string|null
     */
    public function getKeyPairId()
    {
        return $this->get("KeyPairId");
    }

    /**
     * KeyPairId: 登录密钥对 ID。LoginMode 为 KeyPair 时必填。
     *
     * @param string $keyPairId
     */
    public function setKeyPairId($keyPairId)
    {
        $this->set("KeyPairId", $keyPairId);
    }

    /**
     * MinimalCpuPlatform: 最低 CPU 平台；优先于兼容字段 MinmalCpuPlatform。
     *
     * @return string|null
     */
    public function getMinimalCpuPlatform()
    {
        return $this->get("MinimalCpuPlatform");
    }

    /**
     * MinimalCpuPlatform: 最低 CPU 平台；优先于兼容字段 MinmalCpuPlatform。
     *
     * @param string $minimalCpuPlatform
     */
    public function setMinimalCpuPlatform($minimalCpuPlatform)
    {
        $this->set("MinimalCpuPlatform", $minimalCpuPlatform);
    }
}
