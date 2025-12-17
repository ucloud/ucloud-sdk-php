<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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
namespace UCloud\ULightHost;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\ULightHost\Apis\CheckULHostResourceCapacityRequest;
use UCloud\ULightHost\Apis\CheckULHostResourceCapacityResponse;
use UCloud\ULightHost\Apis\CreateULHostInstanceRequest;
use UCloud\ULightHost\Apis\CreateULHostInstanceResponse;
use UCloud\ULightHost\Apis\DescribeULHostBundlesRequest;
use UCloud\ULightHost\Apis\DescribeULHostBundlesResponse;
use UCloud\ULightHost\Apis\DescribeULHostImageRequest;
use UCloud\ULightHost\Apis\DescribeULHostImageResponse;
use UCloud\ULightHost\Apis\DescribeULHostInstanceRequest;
use UCloud\ULightHost\Apis\DescribeULHostInstanceResponse;
use UCloud\ULightHost\Apis\GetULHostInstancePriceRequest;
use UCloud\ULightHost\Apis\GetULHostInstancePriceResponse;
use UCloud\ULightHost\Apis\GetULHostRenewPriceRequest;
use UCloud\ULightHost\Apis\GetULHostRenewPriceResponse;
use UCloud\ULightHost\Apis\ModifyULHostAttributeRequest;
use UCloud\ULightHost\Apis\ModifyULHostAttributeResponse;
use UCloud\ULightHost\Apis\PoweroffULHostInstanceRequest;
use UCloud\ULightHost\Apis\PoweroffULHostInstanceResponse;
use UCloud\ULightHost\Apis\RebootULHostInstanceRequest;
use UCloud\ULightHost\Apis\RebootULHostInstanceResponse;
use UCloud\ULightHost\Apis\ReinstallULHostInstanceRequest;
use UCloud\ULightHost\Apis\ReinstallULHostInstanceResponse;
use UCloud\ULightHost\Apis\ResetULHostInstancePasswordRequest;
use UCloud\ULightHost\Apis\ResetULHostInstancePasswordResponse;
use UCloud\ULightHost\Apis\StartULHostInstanceRequest;
use UCloud\ULightHost\Apis\StartULHostInstanceResponse;
use UCloud\ULightHost\Apis\StopULHostInstanceRequest;
use UCloud\ULightHost\Apis\StopULHostInstanceResponse;
use UCloud\ULightHost\Apis\TerminateULHostInstanceRequest;
use UCloud\ULightHost\Apis\TerminateULHostInstanceResponse;

/**
 * This client is used to call actions of **ULightHost** service
 */
class ULightHostClient extends Client
{

    /**
     * CheckULHostResourceCapacity - 检查轻量应用云主机资源余量
     *
     * See also: https://docs.ucloud.cn/api/ulighthost-api/check_ul_host_resource_capacity
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ImageId" => (string) 镜像ID。 请通过 [DescribeImage](describe_image.html)获取
     *     "BundleId" => (string) 套餐ID。如："ulh.c1m1s40b30t800"
     *     "Name" => (string) 轻量应用主机名称。默认：套餐ID。请遵照[[api:uhost-api:specification|字段规范]]设定实例名称。
     *     "ChargeType" => (string) 计费模式。枚举值： \\ > Year，按年付费； \\ > Month，按月付费；\\ > ThirtyDay，30天期付费，跨境电商相关套餐使用此计费方式；默认：Month
     *     "Quantity" => (integer) 购买时长。默认：1。不支持购买到月末
     *     "VPCId" => (string) VPC ID。默认为当前地域的默认VPC。
     *     "SubnetId" => (string) 子网 ID。默认为当前地域的默认子网。
     *     "SecurityGroupId" => (string) 防火墙ID，默认：Web推荐防火墙。如何查询SecurityGroupId请参见 [DescribeFirewall](api/unet-api/describe_firewall.html)。
     *     "CouponId" => (string) 主机代金券ID。请通过DescribeCoupon接口查询，或登录用户中心查看
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ResourceEnough" => (boolean) 资源是否充足
     * ]
     *
     * @return CheckULHostResourceCapacityResponse
     * @throws UCloudException
     */
    public function checkULHostResourceCapacity(CheckULHostResourceCapacityRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CheckULHostResourceCapacityResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateULHostInstance - 创建轻量应用云主机
     *
     * See also: https://docs.ucloud.cn/api/ulighthost-api/create_ul_host_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ImageId" => (string) 镜像ID。 请通过 [DescribeImage](describe_image.html)获取
     *     "BundleId" => (string) 套餐ID。如："ulh.c1m1s40b30t800"
     *     "Password" => (string) ULHost密码。请遵照[[api:uhost-api:specification|字段规范]]设定密码。密码需使用base64进行编码，举例如下：# echo -n Password1 | base64
     *     "Name" => (string) 轻量应用主机名称。默认：套餐ID。请遵照[[api:uhost-api:specification|字段规范]]设定实例名称。
     *     "ChargeType" => (string) 计费模式。枚举值： \\ > Year，按年付费； \\ > Month，按月付费；\\ > ThirtyDay，30天期付费，跨境电商相关套餐使用此计费方式；默认：Month
     *     "Quantity" => (integer) 购买时长。默认：1。不支持购买到月末
     *     "VPCId" => (string) VPC ID。默认为当前地域的默认VPC。
     *     "SubnetId" => (string) 子网 ID。默认为当前地域的默认子网。
     *     "SecurityGroupId" => (string) 防火墙ID，默认：Web推荐防火墙。如何查询SecurityGroupId请参见 [DescribeFirewall](api/unet-api/describe_firewall.html)。
     *     "CouponId" => (string) 主机代金券ID。请通过DescribeCoupon接口查询，或登录用户中心查看
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ULHostId" => (string) 实例ID
     * ]
     *
     * @return CreateULHostInstanceResponse
     * @throws UCloudException
     */
    public function createULHostInstance(CreateULHostInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateULHostInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeULHostBundles - 获取轻量应用云主机套餐列表
     *
     * See also: https://docs.ucloud.cn/api/ulighthost-api/describe_ul_host_bundles
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Bundles" => (array<object>) 套餐列表[
     *         [
     *             "BundleId" => (string) 套餐ID。
     *             "CPU" => (integer) CPU核数。
     *             "Memory" => (integer) 内存大小。单位：MB。
     *             "SysDiskSpace" => (integer) 系统盘大小。单位：GB。
     *             "Bandwidth" => (integer) 外网带宽。单位：Mbps。
     *             "TrafficPacket" => (integer) 流量包大小。单位：GB。
     *         ]
     *     ]
     * ]
     *
     * @return DescribeULHostBundlesResponse
     * @throws UCloudException
     */
    public function describeULHostBundles(DescribeULHostBundlesRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeULHostBundlesResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeULHostImage - 获取指定数据中心镜像列表
     *
     * See also: https://docs.ucloud.cn/api/ulighthost-api/describe_ul_host_image
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ImageType" => (string) 镜像类型。标准镜像：Base，应用镜像：App， 自定义镜像：Custom，默认返回所有类型
     *     "Scene" => (string) 使用场景，当ImageType为"App"时生效。- Normal 常规专区- CrossBorder 跨境专区默认返回所有
     *     "OsType" => (string) 操作系统类型：Linux， Windows 默认返回所有类型
     *     "ImageId" => (string) 镜像Id
     *     "ImageIds" => (array<string>) 镜像Id列表
     *     "Tag" => (string) 业务组Id。默认：Default
     *     "Offset" => (integer) 列表起始位置偏移量，默认为0
     *     "Limit" => (integer) 返回数据长度，默认为20
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
     *             "DisplayName" => (string) 用于控制台显示的名称
     *             "Tag" => (string) 业务组
     *             "OsType" => (string) 操作系统类型：Linux，Windows
     *             "OsName" => (string) 操作系统名称
     *             "ImageType" => (string) 镜像类型 标准镜像：Base， 行业镜像：Business，自定义镜像：Custom
     *             "Features" => (array<string>) 特殊状态标识，目前包含NetEnhnced（网络增强1.0）, NetEnhanced_Ultra（网络增强2.0）, NetEnhanced_Extreme（网络增强3.0）, HotPlug(热升级), GPU（GPU镜像）,CloudInit, IPv6（支持IPv6网络）,RssdAttachable（支持RSSD云盘）,Vgpu_AMD（支持AMD的vgpu）,Vgpu_NVIDIA（支持NVIDIA的vgpu）,Aarch64_Type（支持arm64架构）
     *             "IntegratedSoftware" => (string) 集成软件名称（仅行业镜像将返回这个值）
     *             "State" => (string) 镜像状态， 可用：Available，制作中：Making， 不可用：Unavailable，复制中：Copying
     *             "ImageDescription" => (string) 镜像描述
     *             "CreateTime" => (integer) 创建时间，格式为Unix时间戳
     *             "ImageSize" => (integer) 镜像大小
     *             "MinimalCPU" => (string) 默认值为空'''。当CentOS 7.3/7.4/7.5等镜像会标记为“Broadwell”
     *             "MaintainEol" => (string) 系统EOL的时间，格式：YYYY/MM/DD
     *             "SceneCategories" => (array<string>) 场景分类，目前包含Featured（精选），PreInstalledDrivers（预装驱动），AIPainting（AI绘画），AIModels（AI模型），HPC（高性能计算）
     *             "ImageLogoLink" => (string) 应用镜像图标url
     *         ]
     *     ]
     * ]
     *
     * @return DescribeULHostImageResponse
     * @throws UCloudException
     */
    public function describeULHostImage(DescribeULHostImageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeULHostImageResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeULHostInstance - 获取轻量应用云主机列表
     *
     * See also: https://docs.ucloud.cn/api/ulighthost-api/describe_ul_host_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ULHostIds" => (array<string>) 【数组】轻量应用云主机ID。
     *     "Offset" => (integer) 列表起始位置偏移量，默认为0
     *     "Limit" => (integer) 返回数据长度，默认为20，最大100
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ULHostInstanceSets" => (array<object>) 实例列表[
     *         [
     *             "Zone" => (string) 可用区。
     *             "ULHostId" => (string) 实例Id。
     *             "Name" => (string) 实例名称。默认套餐Id
     *             "Tag" => (string) 业务组。
     *             "Remark" => (string) 备注。
     *             "ImageId" => (string) 镜像Id。
     *             "ImageName" => (string) 镜像名称。
     *             "Apps" => (array<string>) 【数组】镜像包含的应用列表。
     *             "CPU" => (integer) CPU核数。
     *             "Memory" => (integer) 内存。单位：MB
     *             "State" => (string) 实例状态。枚举值：\\ >初始化: Initializing; \\ >启动中: Starting; \\> 运行中: Running; \\> 关机中: Stopping; \\ >关机: Stopped \\ >安装失败: Install Fail; \\ >重启中: Rebooting; \\ > 未知(空字符串，获取状态超时或出错)：""
     *             "ChargeType" => (string) 计费模式。枚举值：Month/Year
     *             "IPSet" => (array<object>) IP信息[
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
     *             "DiskSet" => (array<object>) 磁盘信息[
     *                 [
     *                     "DiskId" => (string) 磁盘Id
     *                     "DiskType" => (string) 磁盘类型。如："CLOUD_RSSD"、"CLOUD_SSD"
     *                     "Type" => (string) 磁盘类型。系统盘："Boot"；数据盘："Data"
     *                     "Size" => (integer) 磁盘大小。单位：GB
     *                     "IsBoot" => (string) 是否为系统盘。是："True"；否："False"
     *                     "Drive" => (string) 磁盘盘符。系统盘："vda"
     *                 ]
     *             ]
     *             "EIPExclusiveUTPInfo" => (object) 流量包详情信息[
     *                 "TotalSize" => (integer) 当前周期总流量
     *                 "AvailableSize" => (integer) 当前周期剩余流量
     *                 "UsedSize" => (integer) 当前周期已使用流量
     *                 "ExcessSize" => (integer) 当前周期超出限额的流量
     *                 "LastResetTime" => (integer) 上次重置时间
     *                 "NextResetTime" => (integer) 下次重置时间
     *                 "CreateTime" => (integer) 创建时间
     *             ]
     *             "AutoRenew" => (string) 是否自动续费。枚举值：Yes/No
     *             "IsExpire" => (string) 是否过期。枚举值：Yes/No
     *             "ExpireTime" => (integer) 过期时间。Unix时间戳
     *             "CreateTime" => (integer) 创建时间。Unix时间戳
     *         ]
     *     ]
     * ]
     *
     * @return DescribeULHostInstanceResponse
     * @throws UCloudException
     */
    public function describeULHostInstance(DescribeULHostInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeULHostInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetULHostInstancePrice - 获取轻量应用云主机套餐价格
     *
     * See also: https://docs.ucloud.cn/api/ulighthost-api/get_ul_host_instance_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "BundleId" => (string) 套餐ID
     *     "ChargeType" => (string) 获取指定计费模式的价格。枚举值：\\ > Year，按年付费； \\ > Month。未指定时，返回所有计费模式价格
     *     "Count" => (integer) 购买台数，范围[1,5]。默认：1
     *     "Quantity" => (integer) 购买时长。默认: 1。不支持购买到月末
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "PriceSet" => (array<object>) 价格[
     *         [
     *             "ChargeType" => (string) 计费模式
     *             "Price" => (number) 价格
     *             "OriginalPrice" => (number) 原价
     *         ]
     *     ]
     * ]
     *
     * @return GetULHostInstancePriceResponse
     * @throws UCloudException
     */
    public function getULHostInstancePrice(GetULHostInstancePriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetULHostInstancePriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetULHostRenewPrice - 获取主机续费价格
     *
     * See also: https://docs.ucloud.cn/api/ulighthost-api/get_ul_host_renew_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ULHostId" => (string) ULHost实例ID
     *     "ChargeType" => (string) 计费类型。支持：Year/Month；默认：Month
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "PriceSet" => (array<object>) 价格[
     *         [
     *             "ChargeType" => (string) 计费模式
     *             "Price" => (number) 价格
     *             "OriginalPrice" => (number) 原价
     *         ]
     *     ]
     * ]
     *
     * @return GetULHostRenewPriceResponse
     * @throws UCloudException
     */
    public function getULHostRenewPrice(GetULHostRenewPriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetULHostRenewPriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyULHostAttribute - 修改指定ULHost实例属性信息，包含名称和备注
     *
     * See also: https://docs.ucloud.cn/api/ulighthost-api/modify_ul_host_attribute
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ULHostId" => (string) ULHost实例Id
     *     "Name" => (string) 名称。和Remark至少选择一个进行修改
     *     "Remark" => (string) 备注。和Name至少选择一个进行修改
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ULHostId" => (string) ULHost实例Id
     * ]
     *
     * @return ModifyULHostAttributeResponse
     * @throws UCloudException
     */
    public function modifyULHostAttribute(ModifyULHostAttributeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyULHostAttributeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * PoweroffULHostInstance - 直接关闭UHost实例电源，无需等待实例正常关闭。
     *
     * See also: https://docs.ucloud.cn/api/ulighthost-api/poweroff_ul_host_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ULHostId" => (string) ULHost实例ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ULHostId" => (string) ULHost实例ID
     * ]
     *
     * @return PoweroffULHostInstanceResponse
     * @throws UCloudException
     */
    public function poweroffULHostInstance(PoweroffULHostInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new PoweroffULHostInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * RebootULHostInstance - 重新启动UHost实例。
     *
     * See also: https://docs.ucloud.cn/api/ulighthost-api/reboot_ul_host_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ULHostId" => (string) ULHost实例ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ULHostId" => (string) ULHost实例ID
     * ]
     *
     * @return RebootULHostInstanceResponse
     * @throws UCloudException
     */
    public function rebootULHostInstance(RebootULHostInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RebootULHostInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ReinstallULHostInstance - 重装轻量应用云主机
     *
     * See also: https://docs.ucloud.cn/api/ulighthost-api/reinstall_ul_host_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ImageId" => (string) 镜像Id。暂不支持使用自定义镜像重装
     *     "ULHostId" => (string) 实例Id
     *     "Password" => (string) 登陆密码。密码需使用base64进行编码，举例如下：# echo -n Password1 | base64 UGFzc3dvcmQx
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ULHostId" => (string) 实例Id
     * ]
     *
     * @return ReinstallULHostInstanceResponse
     * @throws UCloudException
     */
    public function reinstallULHostInstance(ReinstallULHostInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ReinstallULHostInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ResetULHostInstancePassword - 重置轻量应用云主机管理员密码。
     *
     * See also: https://docs.ucloud.cn/api/ulighthost-api/reset_ul_host_instance_password
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ULHostId" => (string) ULHost实例ID
     *     "Password" => (string) ULHost新密码（密码格式使用BASE64编码）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ULHostId" => (string) ULHost实例ID
     * ]
     *
     * @return ResetULHostInstancePasswordResponse
     * @throws UCloudException
     */
    public function resetULHostInstancePassword(ResetULHostInstancePasswordRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ResetULHostInstancePasswordResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * StartULHostInstance - 启动处于关闭状态的UHost实例。
     *
     * See also: https://docs.ucloud.cn/api/ulighthost-api/start_ul_host_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ULHostId" => (string) ULHost实例ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ULHostId" => (string) ULHost实例ID
     * ]
     *
     * @return StartULHostInstanceResponse
     * @throws UCloudException
     */
    public function startULHostInstance(StartULHostInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new StartULHostInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * StopULHostInstance - 指停止处于运行状态的ULHost实例
     *
     * See also: https://docs.ucloud.cn/api/ulighthost-api/stop_ul_host_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ULHostId" => (string) ULHost实例ID。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ULHostId" => (string) ULHost实例ID
     * ]
     *
     * @return StopULHostInstanceResponse
     * @throws UCloudException
     */
    public function stopULHostInstance(StopULHostInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new StopULHostInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * TerminateULHostInstance - 删除指定数据中心的ULHost实例。
     *
     * See also: https://docs.ucloud.cn/api/ulighthost-api/terminate_ul_host_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ULHostId" => (string) ULHost资源Id
     *     "ReleaseUDisk" => (boolean) 删除主机时是否同时删除挂载的数据盘。默认为false。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "InRecycle" => (string) 用于判断主机删除时是否进入回收站。放入回收站:"Yes", 彻底删除：“No”。
     *     "ULHostId" => (string) ULHost 实例 Id
     * ]
     *
     * @return TerminateULHostInstanceResponse
     * @throws UCloudException
     */
    public function terminateULHostInstance(TerminateULHostInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new TerminateULHostInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
}
