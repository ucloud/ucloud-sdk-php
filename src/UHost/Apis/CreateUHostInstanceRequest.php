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
namespace UCloud\UHost\Apis;

use UCloud\Core\Request\Request;
use UCloud\UHost\Params\CreateUHostInstanceParamDisks;
use UCloud\UHost\Params\CreateUHostInstanceParamNetworkInterface;
use UCloud\UHost\Params\CreateUHostInstanceParamNetworkInterfaceEIP;
use UCloud\UHost\Params\CreateUHostInstanceParamNetworkInterfaceIPv6;
use UCloud\UHost\Params\CreateUHostInstanceParamVolumes;
use UCloud\UHost\Params\CreateUHostInstanceParamFeatures;

class CreateUHostInstanceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUHostInstance"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("ImageId");
        $this->markRequired("LoginMode");
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
     * @return CreateUHostInstanceParamDisks[]|null
     */
    public function getDisks()
    {
        $items = $this->get("Disks");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CreateUHostInstanceParamDisks($item));
        }
        return $result;
    }

    /**
     * Disks:
     *
     * @param CreateUHostInstanceParamDisks[] $disks
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
     * LoginMode: 主机登陆模式。密码（默认选项）: Password，密钥：KeyPair。
     *
     * @return string|null
     */
    public function getLoginMode()
    {
        return $this->get("LoginMode");
    }

    /**
     * LoginMode: 主机登陆模式。密码（默认选项）: Password，密钥：KeyPair。
     *
     * @param string $loginMode
     */
    public function setLoginMode($loginMode)
    {
        $this->set("LoginMode", $loginMode);
    }

    /**
     * Password: UHost密码。请遵照[[api:uhost-api:specification|字段规范]]设定密码。密码需使用base64进行编码，举例如下：# echo -n Password1 | base64UGFzc3dvcmQx。
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->get("Password");
    }

    /**
     * Password: UHost密码。请遵照[[api:uhost-api:specification|字段规范]]设定密码。密码需使用base64进行编码，举例如下：# echo -n Password1 | base64UGFzc3dvcmQx。
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->set("Password", $password);
    }

    /**
     * Name: UHost实例名称。默认：UHost。请遵照[[api:uhost-api:specification|字段规范]]设定实例名称。
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: UHost实例名称。默认：UHost。请遵照[[api:uhost-api:specification|字段规范]]设定实例名称。
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Tag: 业务组。默认：Default（Default即为未分组）。请遵照[[api:uhost-api:specification|字段规范]]设定业务组。
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组。默认：Default（Default即为未分组）。请遵照[[api:uhost-api:specification|字段规范]]设定业务组。
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * ChargeType: 计费模式。枚举值为： \\ > Year，按年付费； \\ > Month，按月付费；\\ > Dynamic，按小时预付费 \\ > Postpay，按小时后付费（支持关机不收费，目前仅部分可用区支持，请联系您的客户经理） \\Preemptive计费为抢占式实例(内测阶段) \\ 默认为月付
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费模式。枚举值为： \\ > Year，按年付费； \\ > Month，按月付费；\\ > Dynamic，按小时预付费 \\ > Postpay，按小时后付费（支持关机不收费，目前仅部分可用区支持，请联系您的客户经理） \\Preemptive计费为抢占式实例(内测阶段) \\ 默认为月付
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Quantity: 购买时长。默认:值 1。按小时购买（Dynamic/Postpay）时无需此参数。 月付时，此参数传0，代表购买至月末。
     *
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买时长。默认:值 1。按小时购买（Dynamic/Postpay）时无需此参数。 月付时，此参数传0，代表购买至月末。
     *
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->set("Quantity", $quantity);
    }

    /**
     * UHostType: 【建议后续不再使用】云主机机型（V1.0），在本字段和字段MachineType中，仅需要其中1个字段即可。参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     *
     * @return string|null
     */
    public function getUHostType()
    {
        return $this->get("UHostType");
    }

    /**
     * UHostType: 【建议后续不再使用】云主机机型（V1.0），在本字段和字段MachineType中，仅需要其中1个字段即可。参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     *
     * @param string $uHostType
     */
    public function setUHostType($uHostType)
    {
        $this->set("UHostType", $uHostType);
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
     * GpuType: GPU类型，枚举值["K80", "P40", "V100", "T4", "T4S","2080Ti","2080Ti-4C","1080Ti", "T4/4", "MI100", "V100S"]，MachineType为G时必填
     *
     * @return string|null
     */
    public function getGpuType()
    {
        return $this->get("GpuType");
    }

    /**
     * GpuType: GPU类型，枚举值["K80", "P40", "V100", "T4", "T4S","2080Ti","2080Ti-4C","1080Ti", "T4/4", "MI100", "V100S"]，MachineType为G时必填
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
     * NetCapability: 网络增强特性。枚举值：Normal（默认），不开启;  Super，开启网络增强1.0； Ultra，开启网络增强2.0（仅支持部分可用区，请参考控制台）
     *
     * @return string|null
     */
    public function getNetCapability()
    {
        return $this->get("NetCapability");
    }

    /**
     * NetCapability: 网络增强特性。枚举值：Normal（默认），不开启;  Super，开启网络增强1.0； Ultra，开启网络增强2.0（仅支持部分可用区，请参考控制台）
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
     * VPCId: VPC ID。默认为当前地域的默认VPC。
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: VPC ID。默认为当前地域的默认VPC。
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * SubnetId: 子网 ID。默认为当前地域的默认子网。
     *
     * @return string|null
     */
    public function getSubnetId()
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 子网 ID。默认为当前地域的默认子网。
     *
     * @param string $subnetId
     */
    public function setSubnetId($subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * PrivateIp: 【数组】创建云主机时指定内网IP。若不传值，则随机分配当前子网下的IP。调用方式举例：PrivateIp.0=x.x.x.x。当前只支持一个内网IP。
     *
     * @return string[]|null
     */
    public function getPrivateIp()
    {
        return $this->get("PrivateIp");
    }

    /**
     * PrivateIp: 【数组】创建云主机时指定内网IP。若不传值，则随机分配当前子网下的IP。调用方式举例：PrivateIp.0=x.x.x.x。当前只支持一个内网IP。
     *
     * @param string[] $privateIp
     */
    public function setPrivateIp(array $privateIp)
    {
        $this->set("PrivateIp", $privateIp);
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
     * AlarmTemplateId: 告警模板id，如果传了告警模板id，且告警模板id正确，则绑定告警模板。绑定告警模板失败只会在后台有日志，不会影响创建主机流程，也不会在前端报错。
     *
     * @return integer|null
     */
    public function getAlarmTemplateId()
    {
        return $this->get("AlarmTemplateId");
    }

    /**
     * AlarmTemplateId: 告警模板id，如果传了告警模板id，且告警模板id正确，则绑定告警模板。绑定告警模板失败只会在后台有日志，不会影响创建主机流程，也不会在前端报错。
     *
     * @param int $alarmTemplateId
     */
    public function setAlarmTemplateId($alarmTemplateId)
    {
        $this->set("AlarmTemplateId", $alarmTemplateId);
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
     * MinimalCpuPlatform: 最低cpu平台，枚举值["Intel/Auto", "Intel/IvyBridge", "Intel/Haswell", "Intel/Broadwell", "Intel/Skylake", "Intel/Cascadelake", "Intel/CascadelakeR", "Intel/IceLake", "Amd/Epyc2", "Amd/Auto"],默认值是"Intel/Auto"。
     *
     * @return string|null
     */
    public function getMinimalCpuPlatform()
    {
        return $this->get("MinimalCpuPlatform");
    }

    /**
     * MinimalCpuPlatform: 最低cpu平台，枚举值["Intel/Auto", "Intel/IvyBridge", "Intel/Haswell", "Intel/Broadwell", "Intel/Skylake", "Intel/Cascadelake", "Intel/CascadelakeR", "Intel/IceLake", "Amd/Epyc2", "Amd/Auto"],默认值是"Intel/Auto"。
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
     * NetworkInterface:
     *
     * @return CreateUHostInstanceParamNetworkInterface[]|null
     */
    public function getNetworkInterface()
    {
        $items = $this->get("NetworkInterface");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CreateUHostInstanceParamNetworkInterface($item));
        }
        return $result;
    }

    /**
     * NetworkInterface:
     *
     * @param CreateUHostInstanceParamNetworkInterface[] $networkInterface
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
     * UserData: 用户自定义数据。当镜像支持Cloud-init Feature时可填写此字段。注意：1、总数据量大小不超过 16K；2、使用base64编码
     *
     * @return string|null
     */
    public function getUserData()
    {
        return $this->get("UserData");
    }

    /**
     * UserData: 用户自定义数据。当镜像支持Cloud-init Feature时可填写此字段。注意：1、总数据量大小不超过 16K；2、使用base64编码
     *
     * @param string $userData
     */
    public function setUserData($userData)
    {
        $this->set("UserData", $userData);
    }

    /**
     * AutoDataDiskInit: 数据盘是否需要自动分区挂载。当镜像支持“Cloud-init”Feature时可填写此字段。取值 >“On” 自动挂载（默认值）> “Off” 不自动挂载。
     *
     * @return string|null
     */
    public function getAutoDataDiskInit()
    {
        return $this->get("AutoDataDiskInit");
    }

    /**
     * AutoDataDiskInit: 数据盘是否需要自动分区挂载。当镜像支持“Cloud-init”Feature时可填写此字段。取值 >“On” 自动挂载（默认值）> “Off” 不自动挂载。
     *
     * @param string $autoDataDiskInit
     */
    public function setAutoDataDiskInit($autoDataDiskInit)
    {
        $this->set("AutoDataDiskInit", $autoDataDiskInit);
    }

    /**
     * Volumes:
     *
     * @return CreateUHostInstanceParamVolumes[]|null
     */
    public function getVolumes()
    {
        $items = $this->get("Volumes");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CreateUHostInstanceParamVolumes($item));
        }
        return $result;
    }

    /**
     * Volumes:
     *
     * @param CreateUHostInstanceParamVolumes[] $volumes
     */
    public function setVolumes(array $volumes)
    {
        $result = [];
        foreach ($volumes as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * KeyPairId: KeypairId 密钥对ID，LoginMode为KeyPair时此项必须
     *
     * @return string|null
     */
    public function getKeyPairId()
    {
        return $this->get("KeyPairId");
    }

    /**
     * KeyPairId: KeypairId 密钥对ID，LoginMode为KeyPair时此项必须
     *
     * @param string $keyPairId
     */
    public function setKeyPairId($keyPairId)
    {
        $this->set("KeyPairId", $keyPairId);
    }

    /**
     * Features:
     *
     * @return CreateUHostInstanceParamFeatures|null
     */
    public function getFeatures()
    {
        return new CreateUHostInstanceParamFeatures($this->get("Features"));
    }

    /**
     * Features:
     *
     * @param CreateUHostInstanceParamFeatures $features
     */
    public function setFeatures(array $features)
    {
        $this->set("Features", $features->getAll());
    }

    /**
     * CouponId: 主机代金券ID。请通过DescribeCoupon接口查询，或登录用户中心查看
     *
     * @return string|null
     */
    public function getCouponId()
    {
        return $this->get("CouponId");
    }

    /**
     * CouponId: 主机代金券ID。请通过DescribeCoupon接口查询，或登录用户中心查看
     *
     * @param string $couponId
     */
    public function setCouponId($couponId)
    {
        $this->set("CouponId", $couponId);
    }
}
