<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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

class AddUK8SUHostNodeRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "AddUK8SUHostNode"]);
        $this->markRequired("Zone");
        $this->markRequired("Region");
        $this->markRequired("ClusterId");
        $this->markRequired("CPU");
        $this->markRequired("Count");
        $this->markRequired("Password");
        $this->markRequired("Mem");
        $this->markRequired("ChargeType");
    }

    

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getZone(): string
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $zone
     */
    public function setZone(string $zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion(): string
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion(string $region)
    {
        $this->set("Region", $region);
    }

    /**
     * ClusterId: UK8S集群ID。 可从UK8S控制台获取。
     *
     * @return string|null
     */
    public function getClusterId(): string
    {
        return $this->get("ClusterId");
    }

    /**
     * ClusterId: UK8S集群ID。 可从UK8S控制台获取。
     *
     * @param string $clusterId
     */
    public function setClusterId(string $clusterId)
    {
        $this->set("ClusterId", $clusterId);
    }

    /**
     * CPU: 虚拟CPU核数。可选参数：2-64（具体机型与CPU的对应关系参照控制台）。默认值: 4。
     *
     * @return integer|null
     */
    public function getCPU(): int
    {
        return $this->get("CPU");
    }

    /**
     * CPU: 虚拟CPU核数。可选参数：2-64（具体机型与CPU的对应关系参照控制台）。默认值: 4。
     *
     * @param int $cpu
     */
    public function setCPU(int $cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * Count: 创建Node节点数量，取值范围是[1,50]。
     *
     * @return integer|null
     */
    public function getCount(): int
    {
        return $this->get("Count");
    }

    /**
     * Count: 创建Node节点数量，取值范围是[1,50]。
     *
     * @param int $count
     */
    public function setCount(int $count)
    {
        $this->set("Count", $count);
    }

    /**
     * Password: Node节点密码。请遵照[[api:uhost-api:specification|字段规范]]设定密码。密码需使用base64进行编码，如下：# echo -n Password1 | base64
     *
     * @return string|null
     */
    public function getPassword(): string
    {
        return $this->get("Password");
    }

    /**
     * Password: Node节点密码。请遵照[[api:uhost-api:specification|字段规范]]设定密码。密码需使用base64进行编码，如下：# echo -n Password1 | base64
     *
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $this->set("Password", $password);
    }

    /**
     * Mem: 内存大小。单位：MB。范围 ：[4096, 262144]，取值为1024的倍数（可选范围参考控制台）。默认值：8192
     *
     * @return integer|null
     */
    public function getMem(): int
    {
        return $this->get("Mem");
    }

    /**
     * Mem: 内存大小。单位：MB。范围 ：[4096, 262144]，取值为1024的倍数（可选范围参考控制台）。默认值：8192
     *
     * @param int $mem
     */
    public function setMem(int $mem)
    {
        $this->set("Mem", $mem);
    }

    /**
     * ChargeType: 计费模式。枚举值为： \\ > Year，按年付费； \\ > Month，按月付费；\\ > Dynamic，按小时预付费 \\ > Postpay，按小时后付费（支持关机不收费，目前仅部分可用区支持，请联系您的客户经理） \\ 默认为月付
     *
     * @return string|null
     */
    public function getChargeType(): string
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费模式。枚举值为： \\ > Year，按年付费； \\ > Month，按月付费；\\ > Dynamic，按小时预付费 \\ > Postpay，按小时后付费（支持关机不收费，目前仅部分可用区支持，请联系您的客户经理） \\ 默认为月付
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * BootDiskType: 磁盘类型。请参考[[api:uhost-api:disk_type|磁盘类型]]。默认为SSD云盘
     *
     * @return string|null
     */
    public function getBootDiskType(): string
    {
        return $this->get("BootDiskType");
    }

    /**
     * BootDiskType: 磁盘类型。请参考[[api:uhost-api:disk_type|磁盘类型]]。默认为SSD云盘
     *
     * @param string $bootDiskType
     */
    public function setBootDiskType(string $bootDiskType)
    {
        $this->set("BootDiskType", $bootDiskType);
    }

    /**
     * DataDiskType: 磁盘类型。请参考[[api:uhost-api:disk_type|磁盘类型]]。默认为SSD云盘
     *
     * @return string|null
     */
    public function getDataDiskType(): string
    {
        return $this->get("DataDiskType");
    }

    /**
     * DataDiskType: 磁盘类型。请参考[[api:uhost-api:disk_type|磁盘类型]]。默认为SSD云盘
     *
     * @param string $dataDiskType
     */
    public function setDataDiskType(string $dataDiskType)
    {
        $this->set("DataDiskType", $dataDiskType);
    }

    /**
     * DataDiskSize: 数据磁盘大小，单位GB。默认0。范围 ：[20, 1000]
     *
     * @return integer|null
     */
    public function getDataDiskSize(): int
    {
        return $this->get("DataDiskSize");
    }

    /**
     * DataDiskSize: 数据磁盘大小，单位GB。默认0。范围 ：[20, 1000]
     *
     * @param int $dataDiskSize
     */
    public function setDataDiskSize(int $dataDiskSize)
    {
        $this->set("DataDiskSize", $dataDiskSize);
    }

    /**
     * Quantity: 购买时长。默认: 1。按小时购买(Dynamic)时无需此参数。 月付时，此参数传0，代表了购买至月末。
     *
     * @return integer|null
     */
    public function getQuantity(): int
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买时长。默认: 1。按小时购买(Dynamic)时无需此参数。 月付时，此参数传0，代表了购买至月末。
     *
     * @param int $quantity
     */
    public function setQuantity(int $quantity)
    {
        $this->set("Quantity", $quantity);
    }

    /**
     * MachineType: 云主机机型。枚举值["N", "C", "G", "O", "OS"]。参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     *
     * @return string|null
     */
    public function getMachineType(): string
    {
        return $this->get("MachineType");
    }

    /**
     * MachineType: 云主机机型。枚举值["N", "C", "G", "O", "OS"]。参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     *
     * @param string $machineType
     */
    public function setMachineType(string $machineType)
    {
        $this->set("MachineType", $machineType);
    }

    /**
     * MinmalCpuPlatform: 最低cpu平台，枚举值["Intel/Auto", "Intel/IvyBridge", "Intel/Haswell", "Intel/Broadwell", "Intel/Skylake", "Intel/Cascadelake"；"Intel/CascadelakeR"; “Amd/Epyc2”,"Amd/Auto"],默认值是"Intel/Auto"
     *
     * @return string|null
     */
    public function getMinmalCpuPlatform(): string
    {
        return $this->get("MinmalCpuPlatform");
    }

    /**
     * MinmalCpuPlatform: 最低cpu平台，枚举值["Intel/Auto", "Intel/IvyBridge", "Intel/Haswell", "Intel/Broadwell", "Intel/Skylake", "Intel/Cascadelake"；"Intel/CascadelakeR"; “Amd/Epyc2”,"Amd/Auto"],默认值是"Intel/Auto"
     *
     * @param string $minmalCpuPlatform
     */
    public function setMinmalCpuPlatform(string $minmalCpuPlatform)
    {
        $this->set("MinmalCpuPlatform", $minmalCpuPlatform);
    }

    /**
     * GpuType: GPU类型，枚举值["K80", "P40", "V100",]，MachineType为G时必填
     *
     * @return string|null
     */
    public function getGpuType(): string
    {
        return $this->get("GpuType");
    }

    /**
     * GpuType: GPU类型，枚举值["K80", "P40", "V100",]，MachineType为G时必填
     *
     * @param string $gpuType
     */
    public function setGpuType(string $gpuType)
    {
        $this->set("GpuType", $gpuType);
    }

    /**
     * GPU: GPU卡核心数。仅GPU机型支持此字段（可选范围与MachineType+GpuType相关）
     *
     * @return integer|null
     */
    public function getGPU(): int
    {
        return $this->get("GPU");
    }

    /**
     * GPU: GPU卡核心数。仅GPU机型支持此字段（可选范围与MachineType+GpuType相关）
     *
     * @param int $gpu
     */
    public function setGPU(int $gpu)
    {
        $this->set("GPU", $gpu);
    }

    /**
     * Labels: Node节点标签。key=value形式,多组用”,“隔开，最多5组。 如env=pro,type=game
     *
     * @return string|null
     */
    public function getLabels(): string
    {
        return $this->get("Labels");
    }

    /**
     * Labels: Node节点标签。key=value形式,多组用”,“隔开，最多5组。 如env=pro,type=game
     *
     * @param string $labels
     */
    public function setLabels(string $labels)
    {
        $this->set("Labels", $labels);
    }

    /**
     * MaxPods: 默认110，生产环境建议小于等于110。
     *
     * @return integer|null
     */
    public function getMaxPods(): int
    {
        return $this->get("MaxPods");
    }

    /**
     * MaxPods: 默认110，生产环境建议小于等于110。
     *
     * @param int $maxPods
     */
    public function setMaxPods(int $maxPods)
    {
        $this->set("MaxPods", $maxPods);
    }

    /**
     * IsolationGroup: 硬件隔离组id。可通过DescribeIsolationGroup获取。
     *
     * @return string|null
     */
    public function getIsolationGroup(): string
    {
        return $this->get("IsolationGroup");
    }

    /**
     * IsolationGroup: 硬件隔离组id。可通过DescribeIsolationGroup获取。
     *
     * @param string $isolationGroup
     */
    public function setIsolationGroup(string $isolationGroup)
    {
        $this->set("IsolationGroup", $isolationGroup);
    }

    /**
     * ImageId: 镜像 Id，不填时后台程序会自动选用一个可用的镜像 Id，支持用户自定义镜像，自定义镜像必须基于基础镜像制作。
     *
     * @return string|null
     */
    public function getImageId(): string
    {
        return $this->get("ImageId");
    }

    /**
     * ImageId: 镜像 Id，不填时后台程序会自动选用一个可用的镜像 Id，支持用户自定义镜像，自定义镜像必须基于基础镜像制作。
     *
     * @param string $imageId
     */
    public function setImageId(string $imageId)
    {
        $this->set("ImageId", $imageId);
    }

    /**
     * SubnetId: 子网 ID。默认为集群创建时填写的子网ID，也可以填写集群同VPC内的子网ID。
     *
     * @return string|null
     */
    public function getSubnetId(): string
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 子网 ID。默认为集群创建时填写的子网ID，也可以填写集群同VPC内的子网ID。
     *
     * @param string $subnetId
     */
    public function setSubnetId(string $subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * DisableSchedule: 用于标示添加完节点后是否将节点临时禁用. 传入 "true" 表示禁用,传入其它或不传表示不禁用
     *
     * @return boolean|null
     */
    public function getDisableSchedule(): bool
    {
        return $this->get("DisableSchedule");
    }

    /**
     * DisableSchedule: 用于标示添加完节点后是否将节点临时禁用. 传入 "true" 表示禁用,传入其它或不传表示不禁用
     *
     * @param boolean $disableSchedule
     */
    public function setDisableSchedule(bool $disableSchedule)
    {
        $this->set("DisableSchedule", $disableSchedule);
    }

    /**
     * UserData: 用户自定义数据。当镜像支持Cloud-init Feature时可填写此字段。注意：1、总数据量大小不超过 16K；2、使用base64编码。
     *
     * @return string|null
     */
    public function getUserData(): string
    {
        return $this->get("UserData");
    }

    /**
     * UserData: 用户自定义数据。当镜像支持Cloud-init Feature时可填写此字段。注意：1、总数据量大小不超过 16K；2、使用base64编码。
     *
     * @param string $userData
     */
    public function setUserData(string $userData)
    {
        $this->set("UserData", $userData);
    }

    /**
     * InitScript: 用户自定义Shell脚本。与UserData的区别在于InitScript在节点初始化完毕后才执行，UserData则是云主机初始化时执行。
     *
     * @return string|null
     */
    public function getInitScript(): string
    {
        return $this->get("InitScript");
    }

    /**
     * InitScript: 用户自定义Shell脚本。与UserData的区别在于InitScript在节点初始化完毕后才执行，UserData则是云主机初始化时执行。
     *
     * @param string $initScript
     */
    public function setInitScript(string $initScript)
    {
        $this->set("InitScript", $initScript);
    }
}
