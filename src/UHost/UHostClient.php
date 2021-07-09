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
namespace UCloud\UHost;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\UHost\Apis\CopyCustomImageRequest;
use UCloud\UHost\Apis\CopyCustomImageResponse;
use UCloud\UHost\Apis\CreateCustomImageRequest;
use UCloud\UHost\Apis\CreateCustomImageResponse;
use UCloud\UHost\Apis\CreateIsolationGroupRequest;
use UCloud\UHost\Apis\CreateIsolationGroupResponse;
use UCloud\UHost\Apis\CreateUHostInstanceRequest;
use UCloud\UHost\Apis\CreateUHostInstanceResponse;
use UCloud\UHost\Apis\CreateUHostKeyPairRequest;
use UCloud\UHost\Apis\CreateUHostKeyPairResponse;
use UCloud\UHost\Apis\DeleteIsolationGroupRequest;
use UCloud\UHost\Apis\DeleteIsolationGroupResponse;
use UCloud\UHost\Apis\DeleteUHostKeyPairsRequest;
use UCloud\UHost\Apis\DeleteUHostKeyPairsResponse;
use UCloud\UHost\Apis\DescribeImageRequest;
use UCloud\UHost\Apis\DescribeImageResponse;
use UCloud\UHost\Apis\DescribeIsolationGroupRequest;
use UCloud\UHost\Apis\DescribeIsolationGroupResponse;
use UCloud\UHost\Apis\DescribeUHostInstanceRequest;
use UCloud\UHost\Apis\DescribeUHostInstanceResponse;
use UCloud\UHost\Apis\DescribeUHostKeyPairsRequest;
use UCloud\UHost\Apis\DescribeUHostKeyPairsResponse;
use UCloud\UHost\Apis\DescribeUHostTagsRequest;
use UCloud\UHost\Apis\DescribeUHostTagsResponse;
use UCloud\UHost\Apis\GetAttachedDiskUpgradePriceRequest;
use UCloud\UHost\Apis\GetAttachedDiskUpgradePriceResponse;
use UCloud\UHost\Apis\GetUHostInstancePriceRequest;
use UCloud\UHost\Apis\GetUHostInstancePriceResponse;
use UCloud\UHost\Apis\GetUHostInstanceVncInfoRequest;
use UCloud\UHost\Apis\GetUHostInstanceVncInfoResponse;
use UCloud\UHost\Apis\GetUHostUpgradePriceRequest;
use UCloud\UHost\Apis\GetUHostUpgradePriceResponse;
use UCloud\UHost\Apis\ImportCustomImageRequest;
use UCloud\UHost\Apis\ImportCustomImageResponse;
use UCloud\UHost\Apis\ImportUHostKeyPairsRequest;
use UCloud\UHost\Apis\ImportUHostKeyPairsResponse;
use UCloud\UHost\Apis\LeaveIsolationGroupRequest;
use UCloud\UHost\Apis\LeaveIsolationGroupResponse;
use UCloud\UHost\Apis\ModifyUHostIPRequest;
use UCloud\UHost\Apis\ModifyUHostIPResponse;
use UCloud\UHost\Apis\ModifyUHostInstanceNameRequest;
use UCloud\UHost\Apis\ModifyUHostInstanceNameResponse;
use UCloud\UHost\Apis\ModifyUHostInstanceRemarkRequest;
use UCloud\UHost\Apis\ModifyUHostInstanceRemarkResponse;
use UCloud\UHost\Apis\ModifyUHostInstanceTagRequest;
use UCloud\UHost\Apis\ModifyUHostInstanceTagResponse;
use UCloud\UHost\Apis\PoweroffUHostInstanceRequest;
use UCloud\UHost\Apis\PoweroffUHostInstanceResponse;
use UCloud\UHost\Apis\RebootUHostInstanceRequest;
use UCloud\UHost\Apis\RebootUHostInstanceResponse;
use UCloud\UHost\Apis\ReinstallUHostInstanceRequest;
use UCloud\UHost\Apis\ReinstallUHostInstanceResponse;
use UCloud\UHost\Apis\ResetUHostInstancePasswordRequest;
use UCloud\UHost\Apis\ResetUHostInstancePasswordResponse;
use UCloud\UHost\Apis\ResizeAttachedDiskRequest;
use UCloud\UHost\Apis\ResizeAttachedDiskResponse;
use UCloud\UHost\Apis\ResizeUHostInstanceRequest;
use UCloud\UHost\Apis\ResizeUHostInstanceResponse;
use UCloud\UHost\Apis\StartUHostInstanceRequest;
use UCloud\UHost\Apis\StartUHostInstanceResponse;
use UCloud\UHost\Apis\StopUHostInstanceRequest;
use UCloud\UHost\Apis\StopUHostInstanceResponse;
use UCloud\UHost\Apis\TerminateCustomImageRequest;
use UCloud\UHost\Apis\TerminateCustomImageResponse;
use UCloud\UHost\Apis\TerminateUHostInstanceRequest;
use UCloud\UHost\Apis\TerminateUHostInstanceResponse;
use UCloud\UHost\Apis\UpgradeToArkUHostInstanceRequest;
use UCloud\UHost\Apis\UpgradeToArkUHostInstanceResponse;

/**
 * This client is used to call actions of **UHost** service
 */
class UHostClient extends Client
{

    /**
     * CopyCustomImage - 复制自制镜像
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/copy_custom_image
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SourceImageId" => (string) 源镜像Id, 参见 DescribeImage
     *     "TargetProjectId" => (string) 目标项目Id, 参见 GetProjectList
     *     "TargetRegion" => (string) 目标地域，不跨地域不用填
     *     "TargetImageName" => (string) 目标镜像名称
     *     "TargetImageDescription" => (string) 目标镜像描述
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TargetImageId" => (string) 目标镜像Id
     * ]
     *
     * @throws UCloudException
     */
    public function copyCustomImage(CopyCustomImageRequest $request = null): CopyCustomImageResponse
    {
        $resp = $this->invoke($request);
        return new CopyCustomImageResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateCustomImage - 从指定UHost实例，生成自定义镜像。
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/create_custom_image
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UHostId" => (string) UHost实例ID 参见 [DescribeUHostInstance](describe_uhost_instance.html)
     *     "ImageName" => (string) 镜像名称
     *     "ImageDescription" => (string) 镜像描述
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ImageId" => (string) 镜像Id
     * ]
     *
     * @throws UCloudException
     */
    public function createCustomImage(CreateCustomImageRequest $request = null): CreateCustomImageResponse
    {
        $resp = $this->invoke($request);
        return new CreateCustomImageResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateIsolationGroup - 创建硬件隔离组，组内机器严格隔离在不同宿主机上。
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/create_isolation_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目id
     *     "GroupName" => (string) 硬件隔离组名称。请遵照[[api:uhost-api:specification|字段规范]]设定隔离组名称。
     *     "Remark" => (string) 备注。请遵照[[api:uhost-api:specification|字段规范]]设定隔离组备注。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "GroupId" => (string) 硬件隔离组id
     * ]
     *
     * @throws UCloudException
     */
    public function createIsolationGroup(CreateIsolationGroupRequest $request = null): CreateIsolationGroupResponse
    {
        $resp = $this->invoke($request);
        return new CreateIsolationGroupResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUHostInstance - 创建UHost实例。
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/create_uhost_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ImageId" => (string) 镜像ID。 请通过 [DescribeImage](describe_image.html)获取
     *     "Disks" => (array<object>) [
     *         [
     *             "IsBoot" => (string) 是否是系统盘。枚举值：\\ > True，是系统盘 \\ > False，是数据盘（默认）。Disks数组中有且只能有一块盘是系统盘。
     *             "Type" => (string) 磁盘类型。请参考[[api:uhost-api:disk_type|磁盘类型]]。
     *             "Size" => (integer) 磁盘大小，单位GB，必须是10GB的整数倍。请参考[[api:uhost-api:disk_type|磁盘类型]]。
     *             "BackupType" => (string) 磁盘备份方案。枚举值：\\ > NONE，无备份 \\ > DATAARK，数据方舟 \\ > SNAPSHOT（SNAPSHOT模式目前仅在上海C支持），快照 \\当前磁盘支持的备份模式参考 [[api:uhost-api:disk_type|磁盘类型]],默认值:NONE
     *             "Encrypted" => (boolean) 【功能仅部分可用区开放，详询技术支持】磁盘是否加密。加密：true, 不加密: false加密必须传入对应的的KmsKeyId,默认值false
     *             "KmsKeyId" => (string) 【功能仅部分可用区开放，详询技术支持】kms key id。选择加密盘时必填。
     *             "CouponId" => (string) 云盘代金券id。不适用于系统盘/本地盘。请通过DescribeCoupon接口查询，或登录用户中心查看
     *         ]
     *     ]
     *     "LoginMode" => (string) 主机登陆模式。密码（默认选项）: Password，密钥：KeyPair。
     *     "Password" => (string) UHost密码。请遵照[[api:uhost-api:specification|字段规范]]设定密码。密码需使用base64进行编码，举例如下：# echo -n Password1 | base64UGFzc3dvcmQx。
     *     "Name" => (string) UHost实例名称。默认：UHost。请遵照[[api:uhost-api:specification|字段规范]]设定实例名称。
     *     "Tag" => (string) 业务组。默认：Default（Default即为未分组）。请遵照[[api:uhost-api:specification|字段规范]]设定业务组。
     *     "ChargeType" => (string) 计费模式。枚举值为： \\ > Year，按年付费； \\ > Month，按月付费；\\ > Dynamic，按小时预付费 \\ > Postpay，按小时后付费（支持关机不收费，目前仅部分可用区支持，请联系您的客户经理） \\Preemptive计费为抢占式实例 \\ 默认为月付
     *     "Quantity" => (integer) 购买时长。默认:值 1。按小时购买（Dynamic/Postpay）时无需此参数。 月付时，此参数传0，代表购买至月末。
     *     "UHostType" => (string) 【建议后续不再使用】云主机机型（V1.0），在本字段和字段MachineType中，仅需要其中1个字段即可。参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     *     "CPU" => (integer) 虚拟CPU核数。可选参数：1-64（具体机型与CPU的对应关系参照控制台）。默认值: 4。
     *     "Memory" => (integer) 内存大小。单位：MB。范围 ：[1024, 262144]，取值为1024的倍数（可选范围参考控制台）。默认值：8192
     *     "GpuType" => (string) GPU类型，枚举值["K80", "P40", "V100", "T4", "T4S","2080Ti","2080Ti-4C","1080Ti"]，MachineType为G时必填
     *     "GPU" => (integer) GPU卡核心数。仅GPU机型支持此字段（可选范围与MachineType+GpuType相关）
     *     "VirtualGpu" => (object)
     *     "NetCapability" => (string) 网络增强特性。枚举值：Normal（默认），不开启;  Super，开启网络增强1.0； Ultra，开启网络增强2.0（仅支持部分可用区，请参考控制台）
     *     "HotplugFeature" => (boolean) 热升级特性。True为开启，False为未开启，默认False。
     *     "VPCId" => (string) VPC ID。默认为当前地域的默认VPC。
     *     "SubnetId" => (string) 子网 ID。默认为当前地域的默认子网。
     *     "PrivateIp" => (array<string>) 【数组】创建云主机时指定内网IP。若不传值，则随机分配当前子网下的IP。调用方式举例：PrivateIp.0=x.x.x.x。当前只支持一个内网IP。
     *     "SecurityGroupId" => (string) 防火墙ID，默认：Web推荐防火墙。如何查询SecurityGroupId请参见 [DescribeFirewall](api/unet-api/describe_firewall.html)。
     *     "IsolationGroup" => (string) 硬件隔离组id。可通过DescribeIsolationGroup获取。
     *     "AlarmTemplateId" => (integer) 告警模板id，如果传了告警模板id，且告警模板id正确，则绑定告警模板。绑定告警模板失败只会在后台有日志，不会影响创建主机流程，也不会在前端报错。
     *     "MachineType" => (string) 云主机机型（V2.0），在本字段和字段UHostType中，仅需要其中1个字段即可。枚举值["N", "C", "G", "O", "OS", "OPRO", "OMAX", "O.BM"]。参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     *     "MinimalCpuPlatform" => (string) 最低cpu平台，枚举值["Intel/Auto", "Intel/IvyBridge", "Intel/Haswell", "Intel/Broadwell", "Intel/Skylake", "Intel/Cascadelake"；"Intel/CascadelakeR"; “Amd/Epyc2”,"Amd/Auto"],默认值是"Intel/Auto"。
     *     "MaxCount" => (integer) 本次最大创建主机数量，取值范围是[1,100]，默认值为1。
     *     "NetworkInterface" => (array<object>) [
     *         [
     *             "EIP" => (object) [
     *                 "Bandwidth" => (integer) 【若绑定EIP，此参数必填】弹性IP的外网带宽, 单位为Mbps. 共享带宽模式必须指定0M带宽, 非共享带宽模式必须指定非0Mbps带宽. 各地域非共享带宽的带宽范围如下： 流量计费[1-300]，带宽计费[1-800]
     *                 "PayMode" => (string) 弹性IP的计费模式. 枚举值: "Traffic", 流量计费; "Bandwidth", 带宽计费; "ShareBandwidth",共享带宽模式. "Free":免费带宽模式,默认为 "Bandwidth"
     *                 "ShareBandwidthId" => (string) 绑定的共享带宽Id，仅当PayMode为ShareBandwidth时有效
     *                 "GlobalSSH" => (object) [
     *                     "Area" => (string) 填写支持SSH访问IP的地区名称，如“洛杉矶”，“新加坡”，“香港”，“东京”，“华盛顿”，“法兰克福”。Area和AreaCode两者必填其中之一。
     *                     "Port" => (integer) SSH端口，1-65535且不能使用80，443端口
     *                     "AreaCode" => (string) GlobalSSH的地区编码，格式为区域航空港国际通用代码。Area和AreaCode两者必填其中之一。
     *                 ]
     *                 "OperatorName" => (string) 【若绑定EIP，此参数必填】弹性IP的线路。枚举值: 国际: International BGP: Bgp 各地域允许的线路参数如下: cn-sh1: Bgp cn-sh2: Bgp cn-gd: Bgp cn-bj1: Bgp cn-bj2: Bgp hk: International us-ca: International th-bkk: International kr-seoul:International us-ws:International ge-fra:International sg:International tw-kh:International.其他海外线路均为 International
     *                 "CouponId" => (string) 当前EIP代金券id。请通过DescribeCoupon接口查询，或登录用户中心查看。
     *             ]
     *             "IPv6" => (object)
     *             "CreateCernetIp" => (boolean) 申请并绑定一个教育网EIP。True为申请并绑定，False为不会申请绑定，默认False。当前只支持具有HPC特性的机型。
     *         ]
     *     ]
     *     "UserData" => (string) 用户自定义数据。当镜像支持Cloud-init Feature时可填写此字段。注意：1、总数据量大小不超过 16K；2、使用base64编码
     *     "AutoDataDiskInit" => (string) 数据盘是否需要自动分区挂载。当镜像支持“Cloud-init”Feature时可填写此字段。取值 >“On” 自动挂载（默认值）> “Off” 不自动挂载。
     *     "Volumes" => (array<object>)
     *     "KeyPairId" => (string) KeypairId 密钥对ID，LoginMode为KeyPair时此项必须
     *     "CouponId" => (string) 主机代金券ID。请通过DescribeCoupon接口查询，或登录用户中心查看
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UHostIds" => (array<string>) UHost实例Id集合
     *     "IPs" => (array<string>) 【批量创建不会返回】IP信息
     * ]
     *
     * @throws UCloudException
     */
    public function createUHostInstance(CreateUHostInstanceRequest $request = null): CreateUHostInstanceResponse
    {
        $resp = $this->invoke($request);
        return new CreateUHostInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUHostKeyPair - 创建主机密钥对信息
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/create_uhost_key_pair
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "KeyPairName" => (string) 密钥对名称。 由字母，数字，符号组成，长度为1-63位。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "KeyPair" => (object) 密钥信息[
     *         "ProjectId" => (string) 项目ID。
     *         "KeyPairId" => (string) 密钥对ID。
     *         "KeyPairName" => (string) 密钥对名称。 长度为1~63个英文或中文字符。
     *         "KeyPairFingerPrint" => (string) 密钥对指纹。md5(ProjectId|KeyPairId|PublicKey)
     *         "PrivateKeyBody" => (string) 密钥对的私钥内容。只有创建接口才会返回。
     *         "CreateTime" => (integer) 密钥对的创建时间，格式为Unix Timestamp。
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function createUHostKeyPair(CreateUHostKeyPairRequest $request = null): CreateUHostKeyPairResponse
    {
        $resp = $this->invoke($request);
        return new CreateUHostKeyPairResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteIsolationGroup - 删除硬件隔离组。
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/delete_isolation_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目id
     *     "GroupId" => (string) 硬件隔离组id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "GroupId" => (string) 硬件隔离组id
     * ]
     *
     * @throws UCloudException
     */
    public function deleteIsolationGroup(DeleteIsolationGroupRequest $request = null): DeleteIsolationGroupResponse
    {
        $resp = $this->invoke($request);
        return new DeleteIsolationGroupResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUHostKeyPairs - 删除一对或者多对密钥对。
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/delete_uhost_key_pairs
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "KeyPairIds" => (array<string>) 密钥对ID，最多支持 100 对。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function deleteUHostKeyPairs(DeleteUHostKeyPairsRequest $request = null): DeleteUHostKeyPairsResponse
    {
        $resp = $this->invoke($request);
        return new DeleteUHostKeyPairsResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeImage - 获取指定数据中心镜像列表，用户可通过指定操作系统类型，镜像Id进行过滤。
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/describe_image
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ImageType" => (string) 镜像类型。标准镜像：Base，镜像市场：Business， 自定义镜像：Custom，默认返回所有类型
     *     "OsType" => (string) 操作系统类型：Linux， Windows 默认返回所有类型
     *     "ImageId" => (string) 镜像Id
     *     "Offset" => (integer) 列表起始位置偏移量，默认为0
     *     "Limit" => (integer) 返回数据长度，默认为20
     *     "PriceSet" => (integer) 是否返回价格：1返回，0不返回；默认不返回
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 满足条件的镜像总数
     *     "ImageSet" => (array<object>) 镜像列表详见 UHostImageSet[
     *         [
     *             "Zone" => (string) 可用区，参见 [可用区列表](../summary/regionlist.html)
     *             "ImageId" => (string) 镜像ID
     *             "ImageName" => (string) 镜像名称
     *             "OsType" => (string) 操作系统类型：Linux，Windows
     *             "OsName" => (string) 操作系统名称
     *             "ImageType" => (string) 镜像类型 标准镜像：Base， 行业镜像：Business，自定义镜像：Custom
     *             "Features" => (array<string>) 特殊状态标识， 目前包含NetEnhnced（网络增强1.0）, NetEnhanced_Ultra]（网络增强2.0）, HotPlug(热升级), CloudInit, IPv6
     *             "FuncType" => (string) 行业镜像类型（仅行业镜像将返回这个值）
     *             "IntegratedSoftware" => (string) 集成软件名称（仅行业镜像将返回这个值）
     *             "Vendor" => (string) 供应商（仅行业镜像将返回这个值）
     *             "Links" => (string) 介绍链接（仅行业镜像将返回这个值）
     *             "State" => (string) 镜像状态， 可用：Available，制作中：Making， 不可用：Unavailable
     *             "ImageDescription" => (string) 镜像描述
     *             "CreateTime" => (integer) 创建时间，格式为Unix时间戳
     *             "ImageSize" => (integer) 镜像大小
     *             "MinimalCPU" => (string) 默认值为空'''。当CentOS 7.3/7.4/7.5等镜像会标记为“Broadwell”
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function describeImage(DescribeImageRequest $request = null): DescribeImageResponse
    {
        $resp = $this->invoke($request);
        return new DescribeImageResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeIsolationGroup - 查询硬件隔离组列表。
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/describe_isolation_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目id
     *     "GroupId" => (string) 待查的硬件隔离组id
     *     "Offset" => (integer) 列表起始位置偏移量，默认为0
     *     "Limit" => (integer) 返回数据长度，默认为20，最大100
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "IsolationGroupSet" => (array<object>) 硬件隔离组集合。参见数据结构IsolationGroup。[
     *         [
     *             "GroupName" => (string) 硬件隔离组名称
     *             "GroupId" => (string) 硬件隔离组id
     *             "SpreadInfoSet" => (array<object>) 每个可用区中的机器数量。参见数据结构SpreadInfo。[
     *                 [
     *                     "Zone" => (string) 可用区信息
     *                     "UHostCount" => (integer) 当前地域所有可用区中硬件隔离组中云主机的数量，不超过7。
     *                 ]
     *             ]
     *             "Remark" => (string) 备注
     *         ]
     *     ]
     *     "TotalCount" => (integer) 硬件隔离组总数
     * ]
     *
     * @throws UCloudException
     */
    public function describeIsolationGroup(DescribeIsolationGroupRequest $request = null): DescribeIsolationGroupResponse
    {
        $resp = $this->invoke($request);
        return new DescribeIsolationGroupResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUHostInstance - 获取主机或主机列表信息，并可根据数据中心，主机ID等参数进行过滤。
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/describe_uhost_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UHostIds" => (array<string>) 【数组】UHost主机的资源ID，例如UHostIds.0代表希望获取信息 的主机1，UHostIds.1代表主机2。 如果不传入，则返回当前Region 所有符合条件的UHost实例。
     *     "Tag" => (string) 要查询的业务组名称
     *     "Offset" => (integer) 列表起始位置偏移量，默认为0
     *     "Limit" => (integer) 返回数据长度，默认为20，最大100
     *     "IsolationGroup" => (string) 硬件隔离组id。通过硬件隔离组筛选主机。
     *     "VPCId" => (string) vpc id。通过VPC筛选主机。北京一地域无效。
     *     "SubnetId" => (string) 子网id。通过子网筛选主机。北京一地域无效。
     *     "UDiskIdForAttachment" => (string) 要挂载的云盘id，过滤返回能被UDiskId挂载的云主机。目前主要针对rssd云盘使用
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) UHostInstance总数
     *     "UHostSet" => (array<object>) 云主机实例列表，每项参数可见下面 UHostInstanceSet[
     *         [
     *             "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *             "IPv6Feature" => (boolean) true:有ipv6特性；false，没有ipv6特性
     *             "UHostId" => (string) UHost实例ID
     *             "UHostType" => (string) 【建议不再使用】云主机机型（旧）。参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     *             "MachineType" => (string) 云主机机型（新）。参考[[api:uhost-api:uhost_type#主机概念20版本|云主机机型说明]]。
     *             "CpuPlatform" => (string) 云主机CPU平台。参考[[api:uhost-api:uhost_type#主机概念20版本|云主机机型说明]]。
     *             "StorageType" => (string) 【建议不再使用】主机磁盘类型。 枚举值为：\\ > LocalDisk，本地磁盘; \\ > UDisk 云盘。\\只要有一块磁盘为本地盘，即返回LocalDisk。
     *             "ImageId" => (string) 【建议不再使用】主机的系统盘ID。
     *             "BasicImageId" => (string) 基础镜像ID（指当前自定义镜像的来源镜像）
     *             "BasicImageName" => (string) 基础镜像名称（指当前自定义镜像的来源镜像）
     *             "Tag" => (string) 业务组名称
     *             "Remark" => (string) 备注
     *             "Name" => (string) UHost实例名称
     *             "State" => (string) 实例状态，枚举值：\\ >初始化: Initializing; \\ >启动中: Starting; \\> 运行中: Running; \\> 关机中: Stopping; \\ >关机: Stopped \\ >安装失败: Install Fail; \\ >重启中: Rebooting; \\ > 未知(空字符串，获取状态超时或出错)：""
     *             "CreateTime" => (integer) 创建时间，格式为Unix时间戳
     *             "ChargeType" => (string) 计费模式，枚举值为： Year，按年付费； Month，按月付费； Dynamic，按需付费（需开启权限）；Preemptive 为抢占式实例；
     *             "ExpireTime" => (integer) 到期时间，格式为Unix时间戳
     *             "CPU" => (integer) 虚拟CPU核数，单位: 个
     *             "Memory" => (integer) 内存大小，单位: MB
     *             "AutoRenew" => (string) 是否自动续费，自动续费：“Yes”，不自动续费：“No”
     *             "DiskSet" => (array<object>) 磁盘信息见 UHostDiskSet[
     *                 [
     *                     "DiskType" => (string) 磁盘类型。请参考[[api:uhost-api:disk_type|磁盘类型]]。
     *                     "IsBoot" => (string) 是否是系统盘。枚举值：\\ > True，是系统盘 \\ > False，是数据盘（默认）。Disks数组中有且只能有一块盘是系统盘。
     *                     "Encrypted" => (string) "true": 加密盘 "false"：非加密盘
     *                     "Type" => (string) 【建议不再使用】磁盘类型。系统盘: Boot，数据盘: Data,网络盘：Udisk
     *                     "DiskId" => (string) 磁盘ID
     *                     "Name" => (string) UDisk名字（仅当磁盘是UDisk时返回）
     *                     "Drive" => (string) 磁盘盘符
     *                     "Size" => (integer) 磁盘大小，单位: GB
     *                     "BackupType" => (string) 备份方案。若开通了数据方舟，则为DATAARK
     *                 ]
     *             ]
     *             "IPSet" => (array<object>) 详细信息见 UHostIPSet[
     *                 [
     *                     "IPMode" => (string) IPv4/IPv6；
     *                     "Default" => (string) 内网 Private 类型下，表示是否为默认网卡。true: 是默认网卡；其他值：不是。
     *                     "Mac" => (string) 内网 Private 类型下，当前网卡的Mac。
     *                     "Weight" => (integer) 当前EIP的权重。权重最大的为当前的出口IP。
     *                     "Type" => (string) 国际: Internation，BGP: Bgp，内网: Private
     *                     "IPId" => (string) 外网IP资源ID 。(内网IP无对应的资源ID)
     *                     "IP" => (string) IP地址
     *                     "Bandwidth" => (integer) IP对应的带宽, 单位: Mb  (内网IP不显示带宽信息)
     *                     "VPCId" => (string) IP地址对应的VPC ID。（北京一不支持，字段返回为空）
     *                     "SubnetId" => (string) IP地址对应的子网 ID。（北京一不支持，字段返回为空）
     *                     "NetworkInterfaceId" => (string) 弹性网卡为默认网卡时，返回对应的 ID 值
     *                 ]
     *             ]
     *             "NetCapability" => (string) 网络增强。Normal: 无；Super： 网络增强1.0； Ultra: 网络增强2.0
     *             "NetworkState" => (string) 【建议不再使用】网络状态。 连接：Connected， 断开：NotConnected
     *             "TimemachineFeature" => (string) 【建议不再使用】数据方舟模式。枚举值：\\ > Yes: 开启方舟； \\ > no，未开启方舟
     *             "HotplugFeature" => (boolean) true: 开启热升级； false，未开启热升级
     *             "SubnetType" => (string) 【建议不再使用】仅北京A的云主机会返回此字段。基础网络模式：Default；子网模式：Private
     *             "OsName" => (string) 创建主机的最初来源镜像的操作系统名称（若直接通过基础镜像创建，此处返回和BasicImageName一致）
     *             "OsType" => (string) 操作系统类别。返回"Linux"或者"Windows"
     *             "HostType" => (string) 【建议不再使用】主机系列：N2，表示系列2；N1，表示系列1
     *             "LifeCycle" => (string) 主机的生命周期类型。目前仅支持Normal：普通；
     *             "GPU" => (integer) GPU个数
     *             "BootDiskState" => (string) 系统盘状态 Normal表示初始化完成；Initializing表示在初始化。仍在初始化的系统盘无法制作镜像。
     *             "TotalDiskSpace" => (integer) 总的数据盘存储空间。
     *             "IsolationGroup" => (string) 隔离组id，不在隔离组则返回""
     *             "CloudInitFeature" => (boolean) true，支持cloutinit方式初始化；false,不支持
     *             "RdmaClusterId" => (string) RDMA集群id，仅快杰云主机返回该值；其他类型云主机返回""。当云主机的此值与RSSD云盘的RdmaClusterId相同时，RSSD可以挂载到这台云主机。
     *             "RestrictMode" => (string) 仅抢占式实例返回，LowSpeed为低速模式，PowerOff为关机模式
     *             "HpcFeature" => (boolean) true: 开启 hpc 系列功能；false: 未开启
     *             "KeyPair" => (object) 密钥信息见 UHostKeyPair[
     *                 "KeyPairId" => (string) 密钥对ID
     *                 "KeyPairState" => (string) 主机密钥对状态，Normal 正常，Deleted 删除
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function describeUHostInstance(DescribeUHostInstanceRequest $request = null): DescribeUHostInstanceResponse
    {
        $resp = $this->invoke($request);
        return new DescribeUHostInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUHostKeyPairs - 查询一个或多个密钥对。
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/describe_uhost_key_pairs
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "KeyPairName" => (string) 密钥对名称。
     *     "KeyPairFingerPrint" => (string) 密钥对的指纹。
     *     "Offset" => (integer) 列表起始位置偏移量，默认为0
     *     "Limit" => (integer) 返回数据长度，默认为20，最大100
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "KeyPairs" => (array<object>) 密钥对信息集合[
     *         [
     *             "ProjectId" => (string) 项目ID。
     *             "KeyPairId" => (string) 密钥对ID。
     *             "KeyPairName" => (string) 密钥对名称。 长度为1~63个英文或中文字符。
     *             "KeyPairFingerPrint" => (string) 密钥对指纹。md5(ProjectId|KeyPairId|PublicKey)
     *             "PrivateKeyBody" => (string) 密钥对的私钥内容。只有创建接口才会返回。
     *             "CreateTime" => (integer) 密钥对的创建时间，格式为Unix Timestamp。
     *         ]
     *     ]
     *     "TotalCount" => (integer) 密钥对总数
     * ]
     *
     * @throws UCloudException
     */
    public function describeUHostKeyPairs(DescribeUHostKeyPairsRequest $request = null): DescribeUHostKeyPairsResponse
    {
        $resp = $this->invoke($request);
        return new DescribeUHostKeyPairsResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUHostTags - 获取指定数据中心的业务组列表。
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/describe_uhost_tags
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 已有主机的业务组总数
     *     "TagSet" => (array<object>) 业务组集合见 UHostTagSet[
     *         [
     *             "Tag" => (string) 业务组名称
     *             "TotalCount" => (integer) 该业务组中包含的主机个数
     *             "Zone" => (string) 可用区
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function describeUHostTags(DescribeUHostTagsRequest $request = null): DescribeUHostTagsResponse
    {
        $resp = $this->invoke($request);
        return new DescribeUHostTagsResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetAttachedDiskUpgradePrice - 获取挂载磁盘的升级价格
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/get_attached_disk_upgrade_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "DiskSpace" => (integer) 磁盘大小，单位GB，步长为10。取值范围需大于当前磁盘大小，最大值请参考[[api:uhost-api:disk_type|磁盘类型]]。
     *     "DiskId" => (string) 磁盘ID。参见 [DescribeUHostInstance](describe_uhost_instance.html)返回值中的DiskSet。
     *     "UHostId" => (string) UHost实例ID。 参见 [DescribeUHostInstance](describe_uhost_instance.html)。
     *     "BackupMode" => (string) 磁盘备份方案。枚举值：\\ > NONE，无备份 \\ > DATAARK，数据方舟 \\> SNAPSHOT(SNAPSHOT模式目前仅在上海C支持)，快照 \\ 当前磁盘支持的备份模式参考 [[api:uhost-api:disk_type|磁盘类型]]。默认值为当前的备份模式。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Price" => (number) 升级差价。精度为小数点后2位。
     * ]
     *
     * @throws UCloudException
     */
    public function getAttachedDiskUpgradePrice(GetAttachedDiskUpgradePriceRequest $request = null): GetAttachedDiskUpgradePriceResponse
    {
        $resp = $this->invoke($request);
        return new GetAttachedDiskUpgradePriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUHostInstancePrice - 根据UHost实例配置，获取UHost实例的价格。
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/get_uhost_instance_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CPU" => (integer) CPU核数。可选参数：1-64。可选范围参照控制台。默认值: 4
     *     "Memory" => (integer) 内存大小。单位：MB。范围 ：[1024, 262144]，取值为1024的倍数（可选范围参照好控制台）。默认值：8192
     *     "Count" => (integer) 购买台数，范围[1,5]
     *     "Disks" => (array<object>) [
     *         [
     *             "IsBoot" => (string) 是否是系统盘。枚举值：\\ > True，是系统盘 \\ > False，是数据盘（默认）。Disks数组中有且只能有一块盘是系统盘。
     *             "Size" => (integer) 磁盘大小，单位GB。请参考[[api:uhost-api:disk_type|磁盘类型]]。
     *             "Type" => (string) 磁盘类型。请参考[[api:uhost-api:disk_type|磁盘类型]]。
     *             "BackupType" => (string) 磁盘备份方案。枚举值：\\ > NONE，无备份 \\ > DATAARK，数据方舟 \\ > SNAPSHOT，快照\\ 当前磁盘支持的备份模式参考 [[api:uhost-api:disk_type|磁盘类型]]
     *         ]
     *     ]
     *     "ImageId" => (string) 镜像Id，可通过 [DescribeImage](describe_image.html) 获取镜像ID， 如果镜像ID不传，系统盘大小必传
     *     "GPU" => (integer) GPU卡核心数。仅GPU机型支持此字段。
     *     "ChargeType" => (string) 计费模式。枚举值为： \\ > Year，按年付费； \\ > Month，按月付费；\\ > Dynamic，按小时付费 // >Preemptive 抢占式实例 \\ 如果不传某个枚举值，默认返回年付、月付、时付的价格组合集。
     *     "NetCapability" => (string) 网络增强。枚举值：Normal，不开启; Super，开启网络增强1.0。 默认值为Normal。
     *     "UHostType" => (string) 【待废弃】云主机机型（V1版本概念）。参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     *     "MachineType" => (string) 云主机机型（V2版本概念）。枚举值["N", "C", "G", "O", "OS", "OPRO", "OMAX", "O.BM"]。参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     *     "GpuType" => (string) GPU类型，枚举值["K80", "P40", "V100", "T4","T4S","2080Ti","2080Ti-4C","1080Ti"]
     *     "Quantity" => (integer) 购买时长。默认: 1。按小时购买(Dynamic)时无需此参数。 月付时，此参数传0，代表了购买至月末。
     *     "CpuPlatform" => (string) 取值"Intel" "Amd"，默认值“Intel”
     *     "Volumes" => (array<object>)
     *     "VirtualGpu" => (object)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "PriceSet" => (array<object>) 价格列表 UHostPriceSet[
     *         [
     *             "ChargeType" => (string) 计费类型。Year，Month，Dynamic
     *             "Price" => (number) 价格，单位: 元，保留小数点后两位有效数字
     *             "OriginalPrice" => (number) 限时优惠的折前原价（即列表价乘以商务折扣后的单价）。
     *             "ListPrice" => (number) 产品列表价。
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function getUHostInstancePrice(GetUHostInstancePriceRequest $request = null): GetUHostInstancePriceResponse
    {
        $resp = $this->invoke($request);
        return new GetUHostInstancePriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUHostInstanceVncInfo - 获取指定UHost实例的管理VNC配置详细信息。
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/get_uhost_instance_vnc_info
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UHostId" => (string) UHost实例ID 参见 [DescribeUHostInstance](./describe_uhost_instance.html)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UHostId" => (string) UHost实例ID
     *     "VncIP" => (string) Vnc登录IP
     *     "VncPort" => (integer) Vnc登录端口
     *     "VncPassword" => (string) Vnc 登录密码
     * ]
     *
     * @throws UCloudException
     */
    public function getUHostInstanceVncInfo(GetUHostInstanceVncInfoRequest $request = null): GetUHostInstanceVncInfoResponse
    {
        $resp = $this->invoke($request);
        return new GetUHostInstanceVncInfoResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUHostUpgradePrice - 获取UHost实例升级配置的价格。可选配置范围请参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/get_uhost_upgrade_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UHostId" => (string) UHost实例ID。 参见 [DescribeUHostInstance](describe_uhost_instance.html)。
     *     "CPU" => (integer) 虚拟CPU核数。可选参数：1-64（可选范围参考控制台）。默认值为当前实例的CPU核数。
     *     "Memory" => (integer) 内存大小。单位：MB。范围 ：[1024, 262144]，取值为1024的倍数（可选范围参考控制台）。默认值为当前实例的内存大小。
     *     "NetCapValue" => (integer) 网卡升降级（1，表示升级，2表示降级，0表示不变）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Price" => (number) 规格调整差价。精确到小数点后2位。
     *     "OriginalPrice" => (number) 限时优惠的折前原价
     * ]
     *
     * @throws UCloudException
     */
    public function getUHostUpgradePrice(GetUHostUpgradePriceRequest $request = null): GetUHostUpgradePriceResponse
    {
        $resp = $this->invoke($request);
        return new GetUHostUpgradePriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ImportCustomImage - 把UFile的镜像文件导入到UHost，生成自定义镜像
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/import_custom_image
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ImageName" => (string) 镜像名称
     *     "UFileUrl" => (string) UFile私有空间地址
     *     "OsType" => (string) 操作系统平台，比如CentOS、Ubuntu、Windows、RedHat等，请参考控制台的镜像版本；若导入控制台上没有的操作系统，参数为Other
     *     "OsName" => (string) 操作系统详细版本，请参考控制台的镜像版本；OsType为Other时，输入参数为Other
     *     "Format" => (string) 镜像格式，可选RAW、VHD、VMDK、qcow2
     *     "Auth" => (boolean) 是否授权。必须填true
     *     "ImageDescription" => (string) 镜像描述
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ImageId" => (string) 镜像Id
     * ]
     *
     * @throws UCloudException
     */
    public function importCustomImage(ImportCustomImageRequest $request = null): ImportCustomImageResponse
    {
        $resp = $this->invoke($request);
        return new ImportCustomImageResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ImportUHostKeyPairs - 导入密钥对后，仅保管公钥部分，需自行妥善保存密钥对的私钥部分。
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/import_uhost_key_pairs
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "KeyPairName" => (string) 密钥对名称。由字母，数字，符号组成，长度为1-63位。
     *     "PublicKeyBody" => (string) 密钥对的公钥内容。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "KeyPairName" => (string) 密钥对名称
     *     "KeyPairId" => (string) 密钥对标识
     *     "KeyPairFingerPrint" => (string) 密钥对指纹。根据RFC4716定义的公钥指纹格式，采用MD5信息摘要算法。算法处理的具体信息格式：`ProjectIdKeyPairId|PublicKeyBody`。
     * ]
     *
     * @throws UCloudException
     */
    public function importUHostKeyPairs(ImportUHostKeyPairsRequest $request = null): ImportUHostKeyPairsResponse
    {
        $resp = $this->invoke($request);
        return new ImportUHostKeyPairsResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * LeaveIsolationGroup - 移除硬件隔离组中的主机
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/leave_isolation_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区信息
     *     "ProjectId" => (string) 项目id
     *     "GroupId" => (string) 硬件隔离组id
     *     "UHostId" => (string) 主机id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UHostId" => (string) 主机id
     * ]
     *
     * @throws UCloudException
     */
    public function leaveIsolationGroup(LeaveIsolationGroupRequest $request = null): LeaveIsolationGroupResponse
    {
        $resp = $this->invoke($request);
        return new LeaveIsolationGroupResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyUHostIP - 修改云主机内网 IP 地址
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/modify_uhost_ip
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写时为默认项目。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "PresentIpAddress" => (string) 需要修改为的 IP 地址。新的IP地址和旧IP地址必须属于统一子网，且和主机内部的配置文件一致。
     *     "UHostId" => (string) 指定云主机 ID。
     *     "PreviousIpAddress" => (string) 所需修改的原 IP 地址 ，当云主机只有一个IP地址时，此参数不必填写。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UHostId" => (string) 目标云主机 ID
     * ]
     *
     * @throws UCloudException
     */
    public function modifyUHostIP(ModifyUHostIPRequest $request = null): ModifyUHostIPResponse
    {
        $resp = $this->invoke($request);
        return new ModifyUHostIPResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyUHostInstanceName - 修改指定UHost实例名称，需要给出数据中心，UHostId，及新的实例名称。
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/modify_uhost_instance_name
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UHostId" => (string) UHost实例ID 参见 [DescribeUHostInstance](describe_uhost_instance.html)
     *     "Name" => (string) UHost实例名称
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UHostId" => (string) UHost实例ID
     * ]
     *
     * @throws UCloudException
     */
    public function modifyUHostInstanceName(ModifyUHostInstanceNameRequest $request = null): ModifyUHostInstanceNameResponse
    {
        $resp = $this->invoke($request);
        return new ModifyUHostInstanceNameResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyUHostInstanceRemark - 修改指定UHost实例备注信息。
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/modify_uhost_instance_remark
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UHostId" => (string) UHost实例ID 参见 [DescribeUHostInstance](describe_uhost_instance.html)
     *     "Remark" => (string) 备注
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UHostId" => (string) UHost实例ID
     * ]
     *
     * @throws UCloudException
     */
    public function modifyUHostInstanceRemark(ModifyUHostInstanceRemarkRequest $request = null): ModifyUHostInstanceRemarkResponse
    {
        $resp = $this->invoke($request);
        return new ModifyUHostInstanceRemarkResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyUHostInstanceTag - 修改指定UHost实例业务组标识。
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/modify_uhost_instance_tag
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UHostId" => (string) UHost实例ID 参见 [DescribeUHostInstance](describe_uhost_instance.html)
     *     "Tag" => (string) 业务组名称
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UHostId" => (string) UHost实例ID
     * ]
     *
     * @throws UCloudException
     */
    public function modifyUHostInstanceTag(ModifyUHostInstanceTagRequest $request = null): ModifyUHostInstanceTagResponse
    {
        $resp = $this->invoke($request);
        return new ModifyUHostInstanceTagResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * PoweroffUHostInstance - 直接关闭UHost实例电源，无需等待实例正常关闭。
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/poweroff_uhost_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UHostId" => (string) UHost实例ID 参见 [DescribeUHostInstance](./describe_uhost_instance.html)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UHostId" => (string) UHost的实例ID
     * ]
     *
     * @throws UCloudException
     */
    public function poweroffUHostInstance(PoweroffUHostInstanceRequest $request = null): PoweroffUHostInstanceResponse
    {
        $resp = $this->invoke($request);
        return new PoweroffUHostInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * RebootUHostInstance - 重新启动UHost实例，需要指定数据中心及UHostID两个参数的值。
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/reboot_uhost_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UHostId" => (string) UHost实例ID 参见 [DescribeUHostInstance](describe_uhost_instance.html)
     *     "DiskPassword" => (string) 加密盘密码
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UHostId" => (string) UHost实例ID
     * ]
     *
     * @throws UCloudException
     */
    public function rebootUHostInstance(RebootUHostInstanceRequest $request = null): RebootUHostInstanceResponse
    {
        $resp = $this->invoke($request);
        return new RebootUHostInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ReinstallUHostInstance - 重新安装指定UHost实例的操作系统
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/reinstall_uhost_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UHostId" => (string) UHost实例资源ID 参见 [DescribeUHostInstance](describe_uhost_instance.html)
     *     "Password" => (string) 如果重装UHost实例时LoginMode为Password，则必须填写，如果LoginMode为KeyPair，不需要填写 （密码格式使用BASE64编码；举例如下：# echo -n Password1 | base64UGFzc3dvcmQx。）
     *     "ImageId" => (string) 镜像Id，默认使用原镜像 参见 [DescribeImage](describe_image.html)
     *     "ReserveDisk" => (string) 是否保留数据盘，保留：Yes，不报留：No， 默认：Yes；如果是从Windows重装为Linux或反之，则无法保留数据盘（该参数目前仅对本地数据盘起作用）
     *     "BootDiskSpace" => (integer) 系统盘大小。 单位：GB， 范围[20,100]， 步长：10
     *     "UserData" => (string) cloudinit初始化使用。注意：1、总数据量大小不超多16K 2、使用base64编码
     *     "AutoDataDiskInit" => (string) 数据盘是否需要自动分区挂载。当镜像支持Cloud-init Feature时可填写此字段。取值“On”（默认值）， “Off”
     *     "LoginMode" => (string) 主机登陆模式。密码（默认选项）: Password，密钥 KeyPair。
     *     "KeyPairId" => (string) KeypairId 密钥对ID，LoginMode为KeyPair时此项必须。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UHostId" => (string) UHost实例资源ID
     * ]
     *
     * @throws UCloudException
     */
    public function reinstallUHostInstance(ReinstallUHostInstanceRequest $request = null): ReinstallUHostInstanceResponse
    {
        $resp = $this->invoke($request);
        return new ReinstallUHostInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ResetUHostInstancePassword - 重置UHost实例的管理员密码。
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/reset_uhost_instance_password
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UHostId" => (string) UHost实例ID
     *     "Password" => (string) UHost新密码（密码格式使用BASE64编码）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UHostId" => (string) UHost实例ID
     * ]
     *
     * @throws UCloudException
     */
    public function resetUHostInstancePassword(ResetUHostInstancePasswordRequest $request = null): ResetUHostInstancePasswordResponse
    {
        $resp = $this->invoke($request);
        return new ResetUHostInstancePasswordResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ResizeAttachedDisk - 修改挂载的磁盘大小，包含系统盘和数据盘
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/resize_attached_disk
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UHostId" => (string) UHost实例ID。 参见 [DescribeUHostInstance](describe_uhost_instance.html)。
     *     "DiskSpace" => (integer) 磁盘大小，单位GB，步长为10。取值范围需大于当前磁盘大小，最大值请参考[[api:uhost-api:disk_type|磁盘类型]]。
     *     "DiskId" => (string) 磁盘ID。参见 [DescribeUHostInstance](describe_uhost_instance.html)返回值中的DiskSet。
     *     "DryRun" => (boolean) 用于测试磁盘是否支持在线扩容。DryRun=true,不会执行实际操作，只会返回操作的预期结果。DryRun = false ，正常执行扩容操作。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DiskId" => (string) 改配成功的磁盘id
     *     "NeedRestart" => (boolean) 扩容后的状态。NeedRestart = true，必须关闭后启动实例才能使用扩容的磁盘空间。NeedRestart = false,磁盘扩容后无需重启操作。
     * ]
     *
     * @throws UCloudException
     */
    public function resizeAttachedDisk(ResizeAttachedDiskRequest $request = null): ResizeAttachedDiskResponse
    {
        $resp = $this->invoke($request);
        return new ResizeAttachedDiskResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ResizeUHostInstance - 修改指定UHost实例的资源配置，如CPU核心数，内存容量大小，网络增强等。可选配置范围请参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/resize_uhost_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UHostId" => (string) UHost实例ID 参见 [DescribeUHostInstance](describe_uhost_instance.html)
     *     "CPU" => (integer) 虚拟CPU核数。可选参数：1-240（可选范围与UHostType相关）。默认值为当前实例的CPU核数
     *     "Memory" => (integer) 内存大小。单位：MB。范围 ：[1024, 1966080]，取值为1024的倍数（可选范围与UHostType相关）。默认值为当前实例的内存大小。
     *     "NetCapValue" => (integer) 网卡升降级（1，表示升级，2表示降级，0表示不变）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UHostId" => (string) UHost实例ID
     * ]
     *
     * @throws UCloudException
     */
    public function resizeUHostInstance(ResizeUHostInstanceRequest $request = null): ResizeUHostInstanceResponse
    {
        $resp = $this->invoke($request);
        return new ResizeUHostInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * StartUHostInstance - 启动处于关闭状态的UHost实例，需要指定数据中心及UHostID两个参数的值。
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/start_uhost_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UHostId" => (string) UHost实例ID 参见 [DescribeUHostInstance](describe_uhost_instance.html)
     *     "DiskPassword" => (string) 加密盘密码
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UHostId" => (string) UHost实例ID
     * ]
     *
     * @throws UCloudException
     */
    public function startUHostInstance(StartUHostInstanceRequest $request = null): StartUHostInstanceResponse
    {
        $resp = $this->invoke($request);
        return new StartUHostInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * StopUHostInstance - 指停止处于运行状态的UHost实例，需指定数据中心及UhostID。
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/stop_uhost_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UHostId" => (string) UHost实例ID 参见 [DescribeUHostInstance](describe_uhost_instance.html)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UHostId" => (string) UHost实例ID
     * ]
     *
     * @throws UCloudException
     */
    public function stopUHostInstance(StopUHostInstanceRequest $request = null): StopUHostInstanceResponse
    {
        $resp = $this->invoke($request);
        return new StopUHostInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * TerminateCustomImage - 删除用户自定义镜像
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/terminate_custom_image
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ImageId" => (string) 自制镜像ID 参见 [DescribeImage](describe_image.html)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ImageId" => (string) 自制镜像Id
     * ]
     *
     * @throws UCloudException
     */
    public function terminateCustomImage(TerminateCustomImageRequest $request = null): TerminateCustomImageResponse
    {
        $resp = $this->invoke($request);
        return new TerminateCustomImageResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * TerminateUHostInstance - 删除指定数据中心的UHost实例。
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/terminate_uhost_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UHostId" => (string) UHost资源Id 参见 [DescribeUHostInstance](describe_uhost_instance.html)
     *     "ReleaseEIP" => (boolean) 删除主机时是否释放绑定的EIP。默认为false。
     *     "ReleaseUDisk" => (boolean) 删除主机时是否同时删除挂载的数据盘。默认为false。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "InRecycle" => (string) 用于判断主机删除时是否进入回收站。放入回收站:"Yes", 彻底删除：“No”。
     *     "UHostId" => (string) UHost 实例 Id
     * ]
     *
     * @throws UCloudException
     */
    public function terminateUHostInstance(TerminateUHostInstanceRequest $request = null): TerminateUHostInstanceResponse
    {
        $resp = $this->invoke($request);
        return new TerminateUHostInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpgradeToArkUHostInstance - 普通升级为方舟机型
     *
     * See also: https://docs.ucloud.cn/api/UHost-api/upgrade_to_ark_uhost_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "UHostIds" => (array<string>) UHost主机的资源ID，例如UHostIds.0代表希望升级的主机1，UHostIds.1代表主机2。
     *     "CouponId" => (string) 代金券ID 请参考DescribeCoupon接口
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UHostSet" => (array<string>) UHost主机的资源ID数组
     * ]
     *
     * @throws UCloudException
     */
    public function upgradeToArkUHostInstance(UpgradeToArkUHostInstanceRequest $request = null): UpgradeToArkUHostInstanceResponse
    {
        $resp = $this->invoke($request);
        return new UpgradeToArkUHostInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
}
