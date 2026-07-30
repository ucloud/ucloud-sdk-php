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
namespace UCloud\UHost\Apis;

use UCloud\Core\Request\Request;
use UCloud\UHost\Params\CheckUHostResourceCapacityParamDisks;
use UCloud\UHost\Params\CheckUHostResourceCapacityParamDisksCustomBackup;
use UCloud\UHost\Params\CheckUHostResourceCapacityParamFeatures;

class CheckUHostResourceCapacityRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CheckUHostResourceCapacity"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("ImageId");
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
     * ImageId: 镜像ID。 请通过 [DescribeImage](describe_image.html)获取
     *
     * @return string|null
     */
    public function getImageId()
    {
        return $this->get("ImageId");
    }

    /**
     * ImageId: 镜像ID。 请通过 [DescribeImage](describe_image.html)获取
     *
     * @param string $imageId
     */
    public function setImageId($imageId)
    {
        $this->set("ImageId", $imageId);
    }

    /**
     * Disks:
     *
     * @return CheckUHostResourceCapacityParamDisks[]|null
     */
    public function getDisks()
    {
        $items = $this->get("Disks");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CheckUHostResourceCapacityParamDisks($item));
        }
        return $result;
    }

    /**
     * Disks:
     *
     * @param CheckUHostResourceCapacityParamDisks[] $disks
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
     * ChargeType: 计费模式。枚举值为： \\ > Year，按年付费； \\ > Month，按月付费；\\ > Dynamic，按小时预付费 \\ > Postpay，按小时后付费（支持关机不收费，目前仅部分可用区支持，请联系您的客户经理） \\ > Spot计费为抢占式实例(内测阶段) \\ 默认为月付
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费模式。枚举值为： \\ > Year，按年付费； \\ > Month，按月付费；\\ > Dynamic，按小时预付费 \\ > Postpay，按小时后付费（支持关机不收费，目前仅部分可用区支持，请联系您的客户经理） \\ > Spot计费为抢占式实例(内测阶段) \\ 默认为月付
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * CPU: 虚拟CPU核数。可选参数：1-64（具体机型与CPU的对应关系参照控制台）。默认值: 4。
     *
     * @return integer|null
     */
    public function getCPU()
    {
        return $this->get("CPU");
    }

    /**
     * CPU: 虚拟CPU核数。可选参数：1-64（具体机型与CPU的对应关系参照控制台）。默认值: 4。
     *
     * @param int $cpu
     */
    public function setCPU($cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * Memory: 内存大小。单位：MB。范围 ：[1024, 262144]，取值为1024的倍数（可选范围参考控制台）。默认值：8192
     *
     * @return integer|null
     */
    public function getMemory()
    {
        return $this->get("Memory");
    }

    /**
     * Memory: 内存大小。单位：MB。范围 ：[1024, 262144]，取值为1024的倍数（可选范围参考控制台）。默认值：8192
     *
     * @param int $memory
     */
    public function setMemory($memory)
    {
        $this->set("Memory", $memory);
    }

    /**
     * GpuType: GPU类型，枚举值["K80", "P40", "V100", "T4","T4A", "T4S","2080Ti","2080Ti-4C","1080Ti", "T4/4", "MI100", "V100S",2080","2080TiS","2080TiPro","3090","A100", "4090", "4090Pro", "4090_48G", "5090"]，MachineType为G时必填
     *
     * @return string|null
     */
    public function getGpuType()
    {
        return $this->get("GpuType");
    }

    /**
     * GpuType: GPU类型，枚举值["K80", "P40", "V100", "T4","T4A", "T4S","2080Ti","2080Ti-4C","1080Ti", "T4/4", "MI100", "V100S",2080","2080TiS","2080TiPro","3090","A100", "4090", "4090Pro", "4090_48G", "5090"]，MachineType为G时必填
     *
     * @param string $gpuType
     */
    public function setGpuType($gpuType)
    {
        $this->set("GpuType", $gpuType);
    }

    /**
     * GPU: GPU卡核心数。仅GPU机型支持此字段（可选范围与MachineType+GpuType相关）
     *
     * @return integer|null
     */
    public function getGPU()
    {
        return $this->get("GPU");
    }

    /**
     * GPU: GPU卡核心数。仅GPU机型支持此字段（可选范围与MachineType+GpuType相关）
     *
     * @param int $gpu
     */
    public function setGPU($gpu)
    {
        $this->set("GPU", $gpu);
    }

    /**
     * NetCapability: 网络增强特性。枚举值：Normal，不开启;  Super，开启网络增强1.0； Ultra，开启网络增强2.0（详情参考官网文档）
     *
     * @return string|null
     */
    public function getNetCapability()
    {
        return $this->get("NetCapability");
    }

    /**
     * NetCapability: 网络增强特性。枚举值：Normal，不开启;  Super，开启网络增强1.0； Ultra，开启网络增强2.0（详情参考官网文档）
     *
     * @param string $netCapability
     */
    public function setNetCapability($netCapability)
    {
        $this->set("NetCapability", $netCapability);
    }

    /**
     * HotplugFeature: 热升级特性。True为开启，False为未开启，默认False。
     *
     * @return boolean|null
     */
    public function getHotplugFeature()
    {
        return $this->get("HotplugFeature");
    }

    /**
     * HotplugFeature: 热升级特性。True为开启，False为未开启，默认False。
     *
     * @param boolean $hotplugFeature
     */
    public function setHotplugFeature($hotplugFeature)
    {
        $this->set("HotplugFeature", $hotplugFeature);
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
     * MachineType: 云主机机型（V2.0），在本字段和字段UHostType中，仅需要其中1个字段即可。枚举值["N", "C", "G", "O", "OS", "OM", "OPRO", "OMAX", "O.BM", "O.EPC"]。参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     *
     * @return string|null
     */
    public function getMachineType()
    {
        return $this->get("MachineType");
    }

    /**
     * MachineType: 云主机机型（V2.0），在本字段和字段UHostType中，仅需要其中1个字段即可。枚举值["N", "C", "G", "O", "OS", "OM", "OPRO", "OMAX", "O.BM", "O.EPC"]。参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     *
     * @param string $machineType
     */
    public function setMachineType($machineType)
    {
        $this->set("MachineType", $machineType);
    }

    /**
     * MinimalCpuPlatform: 最低cpu平台，枚举值["Intel/Auto", "Intel/IvyBridge", "Intel/Haswell", "Intel/Broadwell", "Intel/Skylake", "Intel/Cascadelake", "Intel/CascadelakeR", "Intel/IceLake", "Amd/Epyc2", "Amd/Auto","Ampere/Auto","Ampere/Altra"],默认值是"Intel/Auto"。
     *
     * @return string|null
     */
    public function getMinimalCpuPlatform()
    {
        return $this->get("MinimalCpuPlatform");
    }

    /**
     * MinimalCpuPlatform: 最低cpu平台，枚举值["Intel/Auto", "Intel/IvyBridge", "Intel/Haswell", "Intel/Broadwell", "Intel/Skylake", "Intel/Cascadelake", "Intel/CascadelakeR", "Intel/IceLake", "Amd/Epyc2", "Amd/Auto","Ampere/Auto","Ampere/Altra"],默认值是"Intel/Auto"。
     *
     * @param string $minimalCpuPlatform
     */
    public function setMinimalCpuPlatform($minimalCpuPlatform)
    {
        $this->set("MinimalCpuPlatform", $minimalCpuPlatform);
    }

    /**
     * MaxCount: 本次最大创建主机数量，取值范围是[1,100]，默认值为1。
     *
     * @return integer|null
     */
    public function getMaxCount()
    {
        return $this->get("MaxCount");
    }

    /**
     * MaxCount: 本次最大创建主机数量，取值范围是[1,100]，默认值为1。
     *
     * @param int $maxCount
     */
    public function setMaxCount($maxCount)
    {
        $this->set("MaxCount", $maxCount);
    }

    /**
     * Features:
     *
     * @return CheckUHostResourceCapacityParamFeatures|null
     */
    public function getFeatures()
    {
        return new CheckUHostResourceCapacityParamFeatures($this->get("Features"));
    }

    /**
     * Features:
     *
     * @param CheckUHostResourceCapacityParamFeatures $features
     */
    public function setFeatures(array $features)
    {
        $this->set("Features", $features->getAll());
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
     * UHostFamily: 规格族。由机型代号和 CPU 平台组成，用于指定云主机的硬件类型与处理器平台。当 MachineType 为 "O"（快杰型）时，支持以下取值：o1i：快杰型 O1 代，Intel 平台o1a：快杰型 O1 代，AMD 平台o1r：快杰型 O1 代，ARM 平台o2i：快杰型 O2 代，Intel 平台默认值：o1i 或 o1a（系统将根据资源情况自动选择）当 MachineType 为 "OM"（快杰共享型）时，支持以下取值：om1i：快杰内存增强型 OM1 代，Intel 平台om2i：快杰内存增强型 OM2 代，Intel 平台⚠️ 注意：规格族必须与 MachineType 匹配，否则请求将被拒绝。
     *
     * @return string|null
     */
    public function getUHostFamily()
    {
        return $this->get("UHostFamily");
    }

    /**
     * UHostFamily: 规格族。由机型代号和 CPU 平台组成，用于指定云主机的硬件类型与处理器平台。当 MachineType 为 "O"（快杰型）时，支持以下取值：o1i：快杰型 O1 代，Intel 平台o1a：快杰型 O1 代，AMD 平台o1r：快杰型 O1 代，ARM 平台o2i：快杰型 O2 代，Intel 平台默认值：o1i 或 o1a（系统将根据资源情况自动选择）当 MachineType 为 "OM"（快杰共享型）时，支持以下取值：om1i：快杰内存增强型 OM1 代，Intel 平台om2i：快杰内存增强型 OM2 代，Intel 平台⚠️ 注意：规格族必须与 MachineType 匹配，否则请求将被拒绝。
     *
     * @param string $uHostFamily
     */
    public function setUHostFamily($uHostFamily)
    {
        $this->set("UHostFamily", $uHostFamily);
    }

    /**
     * MinCount: 本次最小创建主机数量，取值范围是[1,100]，默认值为1。
     *
     * @return integer|null
     */
    public function getMinCount()
    {
        return $this->get("MinCount");
    }

    /**
     * MinCount: 本次最小创建主机数量，取值范围是[1,100]，默认值为1。
     *
     * @param int $minCount
     */
    public function setMinCount($minCount)
    {
        $this->set("MinCount", $minCount);
    }
}
