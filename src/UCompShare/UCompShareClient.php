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
namespace UCloud\UCompShare;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\UCompShare\Apis\CreateCompShareInstanceRequest;
use UCloud\UCompShare\Apis\CreateCompShareInstanceResponse;
use UCloud\UCompShare\Apis\CreateULHostInstanceRequest;
use UCloud\UCompShare\Apis\CreateULHostInstanceResponse;
use UCloud\UCompShare\Apis\DescribeCommunityImagesRequest;
use UCloud\UCompShare\Apis\DescribeCommunityImagesResponse;
use UCloud\UCompShare\Apis\DescribeCompShareCustomImagesRequest;
use UCloud\UCompShare\Apis\DescribeCompShareCustomImagesResponse;
use UCloud\UCompShare\Apis\DescribeCompShareImagesRequest;
use UCloud\UCompShare\Apis\DescribeCompShareImagesResponse;
use UCloud\UCompShare\Apis\DescribeCompShareInstanceRequest;
use UCloud\UCompShare\Apis\DescribeCompShareInstanceResponse;
use UCloud\UCompShare\Apis\DescribeULHostBundlesRequest;
use UCloud\UCompShare\Apis\DescribeULHostBundlesResponse;
use UCloud\UCompShare\Apis\DescribeULHostInstanceRequest;
use UCloud\UCompShare\Apis\DescribeULHostInstanceResponse;
use UCloud\UCompShare\Apis\GetULHostInstancePriceRequest;
use UCloud\UCompShare\Apis\GetULHostInstancePriceResponse;
use UCloud\UCompShare\Apis\GetULHostRenewPriceRequest;
use UCloud\UCompShare\Apis\GetULHostRenewPriceResponse;
use UCloud\UCompShare\Apis\ModifyULHostAttributeRequest;
use UCloud\UCompShare\Apis\ModifyULHostAttributeResponse;
use UCloud\UCompShare\Apis\PoweroffULHostInstanceRequest;
use UCloud\UCompShare\Apis\PoweroffULHostInstanceResponse;
use UCloud\UCompShare\Apis\RebootCompShareInstanceRequest;
use UCloud\UCompShare\Apis\RebootCompShareInstanceResponse;
use UCloud\UCompShare\Apis\RebootULHostInstanceRequest;
use UCloud\UCompShare\Apis\RebootULHostInstanceResponse;
use UCloud\UCompShare\Apis\ReinstallCompShareInstanceRequest;
use UCloud\UCompShare\Apis\ReinstallCompShareInstanceResponse;
use UCloud\UCompShare\Apis\ReinstallULHostInstanceRequest;
use UCloud\UCompShare\Apis\ReinstallULHostInstanceResponse;
use UCloud\UCompShare\Apis\ResetCompShareInstancePasswordRequest;
use UCloud\UCompShare\Apis\ResetCompShareInstancePasswordResponse;
use UCloud\UCompShare\Apis\ResetULHostInstancePasswordRequest;
use UCloud\UCompShare\Apis\ResetULHostInstancePasswordResponse;
use UCloud\UCompShare\Apis\StartCompShareInstanceRequest;
use UCloud\UCompShare\Apis\StartCompShareInstanceResponse;
use UCloud\UCompShare\Apis\StartULHostInstanceRequest;
use UCloud\UCompShare\Apis\StartULHostInstanceResponse;
use UCloud\UCompShare\Apis\StopCompShareInstanceRequest;
use UCloud\UCompShare\Apis\StopCompShareInstanceResponse;
use UCloud\UCompShare\Apis\StopULHostInstanceRequest;
use UCloud\UCompShare\Apis\StopULHostInstanceResponse;
use UCloud\UCompShare\Apis\TerminateCompShareInstanceRequest;
use UCloud\UCompShare\Apis\TerminateCompShareInstanceResponse;
use UCloud\UCompShare\Apis\TerminateULHostInstanceRequest;
use UCloud\UCompShare\Apis\TerminateULHostInstanceResponse;

/**
 * This client is used to call actions of **UCompShare** service
 */
class UCompShareClient extends Client
{

    /**
     * CreateCompShareInstance - 创建轻量级算力平台主机资源
     *
     * See also: https://docs.ucloud.cn/api/ucompshare-api/create_comp_share_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Disks" => (array<object>) [
     *         [
     *             "IsBoot" => (boolean) 是否是系统盘。枚举值：\\ > True，是系统盘 \\ > False，是数据盘（默认）。Disks数组中有且只能有一块盘是系统盘。
     *             "Type" => (string) 磁盘类型。请参考[[api:uhost-api:disk_type|磁盘类型]]。
     *             "Size" => (integer) 磁盘大小，单位GB。请参考[[api:uhost-api:disk_type|磁盘类型]]。
     *         ]
     *     ]
     *     "MachineType" => (string) 云主机机型（V2.0），在本字段和字段UHostType中，仅需要其中1个字段即可。枚举值["N", "C", "G", "O", "OS", "OM", "OPRO", "OMAX", "O.BM", "O.EPC"]。参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     *     "GPU" => (integer) GPU卡核心数。仅GPU机型支持此字段（可选范围与MachineType+GpuType相关）
     *     "Memory" => (integer) 内存大小。单位：MB。范围 ：[1024, 262144]，取值为1024的倍数（可选范围参考控制台）。默认值：8192
     *     "CPU" => (integer) 虚拟CPU核数。可选参数：1-64（具体机型与CPU的对应关系参照控制台）。默认值: 4。
     *     "GpuType" => (string) GPU类型，枚举值["K80", "P40", "V100", "T4","T4A", "T4S","2080Ti","2080Ti-4C","1080Ti", "T4/4", "MI100", "V100S",2080","2080TiS","2080TiPro","3090","A100"]，MachineType为G时必填
     *     "CompShareImageId" => (string) 镜像ID
     *     "LoginMode" => (string) 主机登陆模式。密码（默认选项）: Password
     *     "ChargeType" => (string) 计费模式。枚举值为: \\ > Month，按月付费；\\ > Day，按天付费；\\ > Dynamic，按小时预付费 \\ > Postpay，按小时后付费（支持关机不收费，目前仅部分可用区支持，请联系您的客户经理） \\ > Spot计费为抢占式实例(内测阶段) \\ 默认为月付
     *     "Quantity" => (integer) 购买时长。默认:值 1。按小时购买（Dynamic/Postpay）时无需此参数。 月付时，此参数传0，代表购买至月末。
     *     "MinimalCpuPlatform" => (string) 最低cpu平台，枚举值["Intel/Auto", "Intel/IvyBridge", "Intel/Haswell", "Intel/Broadwell", "Intel/Skylake", "Intel/Cascadelake", "Intel/CascadelakeR", "Intel/IceLake", "Amd/Epyc2", "Amd/Auto","Ampere/Auto","Ampere/Altra"],默认值是"Intel/Auto"。
     *     "Password" => (string) UHost密码。请遵照[[api:uhost-api:specification|字段规范]]设定密码。密码需使用base64进行编码，举例如下：# echo -n Password1 | base64UGFzc3dvcmQx。
     *     "Name" => (string) 实例名称
     *     "SecurityGroupId" => (string) 防火墙Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UHostIds" => (array<string>) UHost实例Id集合
     * ]
     *
     * @return CreateCompShareInstanceResponse
     * @throws UCloudException
     */
    public function createCompShareInstance(CreateCompShareInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateCompShareInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateULHostInstance - 创建轻量应用云主机
     *
     * See also: https://docs.ucloud.cn/api/ucompshare-api/create_ul_host_instance
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
     *     "ChargeType" => (string) 计费模式。枚举值： \\ > Year，按年付费； \\ > Month，按月付费；默认：Month
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
     * DescribeCommunityImages - 获取社区镜像列表
     *
     * See also: https://docs.ucloud.cn/api/ucompshare-api/describe_community_images
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CompShareImageId" => (string) 镜像Id。支持指定镜像Id查询
     *     "Name" => (string) 镜像名称。模糊搜索
     *     "Author" => (string) 搜索指定作者发布的镜像
     *     "Offset" => (integer) 列表起始位置偏移量，默认为0
     *     "Limit" => (string) 返回数据长度，默认为20，最大100
     *     "Tag" => (string) 按标签名称搜索，精确匹配
     *     "SortCondition" => (object) [
     *         "Field" => (string) 排序条件。- Favor：按热度排序，获取热点镜像；- PubTime：按发布时间排序，获取最新社区镜像；- Price 按价格排序；- CreatedCount 按使用量排序；默认："PubTime"
     *         "ASC" => (string) 是否升序排列
     *     ]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ImageSet" => (array<object>) 镜像详情列表[
     *         [
     *             "CompShareImageId" => (string) 镜像Id
     *             "Name" => (string) 镜像名称
     *             "Author" => (string) 镜像作者昵称
     *             "AuthInfo" => (integer) 镜像作者认证信息
     *             "ImageOwnerAlias" => (string) 镜像来源。- Official 平台镜像；- Community 社区镜像
     *             "ImageType" => (string) 镜像类型。- System 平台提供的公共镜像；- App 平台提供的应用镜像；- Custom 自制镜像；- Community 社区镜像
     *             "IsOfficial" => (boolean) 来源是否为官方镜像【仅自制镜像信息返回该字段】
     *             "Container" => (string) 是否为容器镜像。- True 容器镜像- False 虚机镜像
     *             "Status" => (string) 镜像状态。- Making 制作中；- Available 可用；- UnAvailable 不可用；- Reviewing 审核中;- Offline 已下线
     *             "Size" => (integer) 镜像大小。单位MB
     *             "Visibility" => (integer) 可见性。0：私密镜像；1：公开至镜像社区
     *             "Description" => (string) 镜像描述信息
     *             "Tags" => (array<string>) 【array of string】镜像标签
     *             "Price" => (number) 镜像价格。单位：元
     *             "Cover" => (string) 镜像封面URL
     *             "Readme" => (string) 镜像详细描述。仅指定镜像Id查询时返回
     *             "Softwares" => (object) 镜像软件信息[
     *                 "Framework" => (string) 框架名称
     *                 "FrameworkVersion" => (string) 框架版本
     *                 "CUDAVersion" => (string) CUDA版本
     *                 "Applications" => (array<string>) 【array of string】应用列表
     *             ]
     *             "CreatedCount" => (integer) 镜像引用创建计数
     *             "FavoritesCount" => (integer) 镜像收藏计数
     *             "FailedReason" => (string) 镜像制作失败错误原因
     *             "CreateTime" => (integer) 创建时间戳
     *             "PubTime" => (integer) 发布时间戳
     *             "Owner" => (object) 镜像所属账号信息[
     *                 "AccountName" => (string) 账号昵称
     *                 "AccountId" => (string) 账号Id
     *             ]
     *             "GroupId" => (string) 镜像组id
     *             "VersionName" => (string) 版本名称
     *             "VersionDesc" => (string) 版本描述
     *             "SourceGpuType" => (string) 自制镜像来源机型
     *             "AutoStart" => (boolean) 是否支持自启动 default:false
     *             "ImageCharge" => (boolean) 是否镜像收费  default: false
     *             "ImageUseTime" => (integer) 镜像使用时长
     *         ]
     *     ]
     *     "TotalCount" => (integer) 总数量
     * ]
     *
     * @return DescribeCommunityImagesResponse
     * @throws UCloudException
     */
    public function describeCommunityImages(DescribeCommunityImagesRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeCommunityImagesResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeCompShareCustomImages - 获取自制镜像列表
     *
     * See also: https://docs.ucloud.cn/api/ucompshare-api/describe_comp_share_custom_images
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CompShareImageId" => (string) 指定镜像Id查询
     *     "Offset" => (integer) 列表起始位置偏移量，默认为0
     *     "Limit" => (integer) 返回数据长度，默认为20，最大100
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ImageSet" => (array<object>) 镜像详情信息[
     *         [
     *             "CompShareImageId" => (string) 镜像Id
     *             "Name" => (string) 镜像名称
     *             "Author" => (string) 镜像作者昵称
     *             "AuthInfo" => (integer) 镜像作者认证信息
     *             "ImageOwnerAlias" => (string) 镜像来源。- Official 平台镜像；- Community 社区镜像
     *             "ImageType" => (string) 镜像类型。- System 平台提供的公共镜像；- App 平台提供的应用镜像；- Custom 自制镜像；- Community 社区镜像
     *             "IsOfficial" => (boolean) 来源是否为官方镜像【仅自制镜像信息返回该字段】
     *             "Container" => (string) 是否为容器镜像。- True 容器镜像- False 虚机镜像
     *             "Status" => (string) 镜像状态。- Making 制作中；- Available 可用；- UnAvailable 不可用；- Reviewing 审核中;- Offline 已下线
     *             "Size" => (integer) 镜像大小。单位MB
     *             "Visibility" => (integer) 可见性。0：私密镜像；1：公开至镜像社区
     *             "Description" => (string) 镜像描述信息
     *             "Tags" => (array<string>) 【array of string】镜像标签
     *             "Price" => (number) 镜像价格。单位：元
     *             "Cover" => (string) 镜像封面URL
     *             "Readme" => (string) 镜像详细描述。仅指定镜像Id查询时返回
     *             "Softwares" => (object) 镜像软件信息[
     *                 "Framework" => (string) 框架名称
     *                 "FrameworkVersion" => (string) 框架版本
     *                 "CUDAVersion" => (string) CUDA版本
     *                 "Applications" => (array<string>) 【array of string】应用列表
     *             ]
     *             "CreatedCount" => (integer) 镜像引用创建计数
     *             "FavoritesCount" => (integer) 镜像收藏计数
     *             "FailedReason" => (string) 镜像制作失败错误原因
     *             "CreateTime" => (integer) 创建时间戳
     *             "PubTime" => (integer) 发布时间戳
     *             "Owner" => (object) 镜像所属账号信息[
     *                 "AccountName" => (string) 账号昵称
     *                 "AccountId" => (string) 账号Id
     *             ]
     *             "GroupId" => (string) 镜像组id
     *             "VersionName" => (string) 版本名称
     *             "VersionDesc" => (string) 版本描述
     *             "SourceGpuType" => (string) 自制镜像来源机型
     *             "AutoStart" => (boolean) 是否支持自启动 default:false
     *             "ImageCharge" => (boolean) 是否镜像收费  default: false
     *             "ImageUseTime" => (integer) 镜像使用时长
     *         ]
     *     ]
     *     "TotalCount" => (integer) 总数量
     * ]
     *
     * @return DescribeCompShareCustomImagesResponse
     * @throws UCloudException
     */
    public function describeCompShareCustomImages(DescribeCompShareCustomImagesRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeCompShareCustomImagesResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeCompShareImages - 可获取平台、应用镜像信息
     *
     * See also: https://docs.ucloud.cn/api/ucompshare-api/describe_comp_share_images
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ImageType" => (string) 镜像类型。枚举值- System 平台镜像- App 应用镜像默认：System
     *     "CompShareImageId" => (string) 镜像Id。支持指定Id查询
     *     "Name" => (string) 镜像名称。支持模糊搜索
     *     "Author" => (string) 镜像作者昵称
     *     "Tag" => (string) 镜像标签
     *     "Offset" => (integer) 列表起始位置偏移量，默认为0
     *     "Limit" => (integer) 返回数据长度，默认为20，最大100
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ImageSet" => (array<object>) 镜像详情列表[
     *         [
     *             "CompShareImageId" => (string) 镜像Id
     *             "Name" => (string) 镜像名称
     *             "Author" => (string) 镜像作者昵称
     *             "AuthInfo" => (integer) 镜像作者认证信息
     *             "ImageOwnerAlias" => (string) 镜像来源。- Official 平台镜像；- Community 社区镜像
     *             "ImageType" => (string) 镜像类型。- System 平台提供的公共镜像；- App 平台提供的应用镜像；- Custom 自制镜像；- Community 社区镜像
     *             "IsOfficial" => (boolean) 来源是否为官方镜像【仅自制镜像信息返回该字段】
     *             "Container" => (string) 是否为容器镜像。- True 容器镜像- False 虚机镜像
     *             "Status" => (string) 镜像状态。- Making 制作中；- Available 可用；- UnAvailable 不可用；- Reviewing 审核中;- Offline 已下线
     *             "Size" => (integer) 镜像大小。单位MB
     *             "Visibility" => (integer) 可见性。0：私密镜像；1：公开至镜像社区
     *             "Description" => (string) 镜像描述信息
     *             "Tags" => (array<string>) 【array of string】镜像标签
     *             "Price" => (number) 镜像价格。单位：元
     *             "Cover" => (string) 镜像封面URL
     *             "Readme" => (string) 镜像详细描述。仅指定镜像Id查询时返回
     *             "Softwares" => (object) 镜像软件信息[
     *                 "Framework" => (string) 框架名称
     *                 "FrameworkVersion" => (string) 框架版本
     *                 "CUDAVersion" => (string) CUDA版本
     *                 "Applications" => (array<string>) 【array of string】应用列表
     *             ]
     *             "CreatedCount" => (integer) 镜像引用创建计数
     *             "FavoritesCount" => (integer) 镜像收藏计数
     *             "FailedReason" => (string) 镜像制作失败错误原因
     *             "CreateTime" => (integer) 创建时间戳
     *             "PubTime" => (integer) 发布时间戳
     *             "Owner" => (object) 镜像所属账号信息[
     *                 "AccountName" => (string) 账号昵称
     *                 "AccountId" => (string) 账号Id
     *             ]
     *             "GroupId" => (string) 镜像组id
     *             "VersionName" => (string) 版本名称
     *             "VersionDesc" => (string) 版本描述
     *             "SourceGpuType" => (string) 自制镜像来源机型
     *             "AutoStart" => (boolean) 是否支持自启动 default:false
     *             "ImageCharge" => (boolean) 是否镜像收费  default: false
     *             "ImageUseTime" => (integer) 镜像使用时长
     *         ]
     *     ]
     *     "TotalCount" => (integer) 总数量
     * ]
     *
     * @return DescribeCompShareImagesResponse
     * @throws UCloudException
     */
    public function describeCompShareImages(DescribeCompShareImagesRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeCompShareImagesResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeCompShareInstance - 获取用户所有地域下主机资源信息列表
     *
     * See also: https://docs.ucloud.cn/api/ucompshare-api/describe_comp_share_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UHostIds" => (array<string>) 【数组】UHost主机的资源ID，例如UHostIds.0代表希望获取信息 的主机1，UHostIds.1代表主机2。 如果不传入，则返回当前Region 所有符合条件的UHost实例。
     *     "WithoutGpu" => (boolean) 无卡GPU
     *     "Offset" => (integer) 列表起始位置偏移量，默认为0
     *     "Limit" => (integer) 返回数据长度，默认为20，最大100
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) UHostInstance总数
     *     "UHostSet" => (array<object>) 云主机实例列表，每项参数可见下面 UHostInstanceSet[
     *         [
     *             "Zone" => (string) 可用区
     *             "StopSchedulerTime" => (integer) 计划关机时间
     *             "UHostId" => (string) 实例Id
     *             "MachineType" => (string) 机型信息
     *             "CpuPlatform" => (string) CPU平台。如"Intel/Auto"、"Amd/Auto"等等
     *             "CompShareImageId" => (string) 镜像Id
     *             "CompShareImageName" => (string) 镜像名称
     *             "CompShareImageOwnerAlias" => (string) 镜像来源
     *             "CompShareImageBillId" => (string) 用于镜像计费的Id
     *             "CompShareImageStatus" => (string) 镜像状态
     *             "CompShareImageType" => (string) 镜像类型- System 系统镜像- App 应用镜像- Custom 自制镜像- Community 社区镜像
     *             "InstanceType" => (string) 实例类型。"UHost": 普通主机；"Container": 容器主机
     *             "Password" => (string) 主机密码。由Base64编码
     *             "SshLoginCommand" => (string) SSH登录命令
     *             "Name" => (string) 实例名称
     *             "Tag" => (string) 实例业务组
     *             "Remark" => (string) 实例备注
     *             "State" => (string) 实例状态，枚举值：\\ >初始化: Initializing; \\ >启动中: Starting; \\> 运行中: Running; \\> 关机中: Stopping; \\ >关机: Stopped \\ >安装失败: Install Fail; \\ >重启中: Rebooting; \\ >升级改配中: Resizing; \\ > 未知(空字符串，获取状态超时或出错)：
     *             "ChargeType" => (string) 计费模式，枚举值为： Year，按年付费； Month，按月付费； Dynamic，按时付费；Postpay，按需付费
     *             "CPU" => (integer) 虚拟CPU核数，单位: 个
     *             "Memory" => (integer) 内存大小，单位：MB
     *             "GpuType" => (string) GPU类型。如: "4090"
     *             "GPU" => (integer) GPU个数
     *             "GraphicsMemory" => (object) GPU显存信息[
     *                 "Value" => (integer) 值，单位是GB
     *                 "Rate" => (integer) 交互展示参数，可忽略
     *             ]
     *             "AutoRenew" => (string) 是否自动续费，自动续费：“Yes”，不自动续费：“No”
     *             "IsExpire" => (string) 是否过期。Yes：已过期；No：未过期
     *             "OsName" => (string) 虚机镜像的名称
     *             "OsType" => (string) 虚机镜像操作系统类型。"Linux"\"Windows"
     *             "TotalDiskSpace" => (integer) 总的数据盘存储空间
     *             "CpuArch" => (string) CPU架构。"x86_64"/"i386"等
     *             "DiskSet" => (array<object>) 详情见UHostDiskSet[
     *                 [
     *                     "DiskType" => (string) 磁盘类型。请参考[[api:uhost-api:disk_type|磁盘类型]]。
     *                     "IsBoot" => (string) 是否是系统盘。枚举值：\\ > True，是系统盘 \\ > False，是数据盘（默认）。Disks数组中有且只能有一块盘是系统盘。
     *                     "Encrypted" => (string) "true": 加密盘 "false"：非加密盘
     *                     "Type" => (string) 【建议不再使用】磁盘类型。系统盘: Boot，数据盘: Data,网络盘：Udisk
     *                     "DiskId" => (string) 磁盘ID
     *                     "Name" => (string) UDisk名字（仅当磁盘是UDisk时返回）
     *                     "Drive" => (string) 磁盘盘符
     *                     "Size" => (integer) 磁盘大小，单位: GB
     *                 ]
     *             ]
     *             "IPSet" => (array<object>) 详情见UHostIPSet[
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
     *             "Softwares" => (array<object>) 软件地址[
     *                 [
     *                     "Name" => (string) 软件名称
     *                     "URL" => (string) 软件地址
     *                 ]
     *             ]
     *             "InstancePrice" => (number) 主机价格
     *             "CompShareImagePrice" => (number) 镜像价格
     *             "ExpireTime" => (integer) 过期时间
     *             "CreateTime" => (integer) 创建时间
     *             "SupportWithoutGpuStart" => (boolean) 此实例是否支持无卡开机
     *             "WithoutGpuSpec" => (object) 无卡配置规格，详情见：WithoutGpuSpecInfo[
     *                 "Cpu" => (integer) cpu
     *                 "Memory" => (integer) 内存
     *                 "Gpu" => (integer) gpu
     *             ]
     *             "StopTime" => (integer) 定时关机时间
     *             "UpdateTime" => (integer) 虚机状态更新时间
     *             "ReleaseTime" => (integer) 释放时间（关机时候返回）
     *             "DiskPriceInfo" => (array<object>) 磁盘价格信息，详见:DiskPriceInfo[
     *                 [
     *                     "ChargeType" => (string) 计费类型
     *                     "Price" => (number) 磁盘价格
     *                     "IsBoot" => (boolean) 是否为系统盘
     *                 ]
     *             ]
     *             "PostPayPowerOffBillingResource" => (array<object>) 后付费关机计费信息列表，详见：详见:DiskPriceInfo[
     *                 [
     *                     "ChargeType" => (string) 计费类型
     *                     "Price" => (number) 磁盘价格
     *                     "IsBoot" => (boolean) 是否为系统盘
     *                 ]
     *             ]
     *             "MonitorMessages" => (object) 监控信息，详见：MonitorMessage[
     *                 "CpuUsageRate" => (string) CPU使用率
     *                 "MemUsageRate" => (string) 内存使用率
     *                 "GpuInfo" => (array<object>) GPU卡监控信息[
     *                     [
     *                         "GpuUsageRate" => (string) GPU卡使用率
     *                         "MemoryUsageRate" => (string) GPU显存使用率
     *                         "GPU" => (string) GPU卡名称
     *                     ]
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return DescribeCompShareInstanceResponse
     * @throws UCloudException
     */
    public function describeCompShareInstance(DescribeCompShareInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeCompShareInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeULHostBundles - 获取轻量应用云主机套餐列表
     *
     * See also: https://docs.ucloud.cn/api/ucompshare-api/describe_ul_host_bundles
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
     * DescribeULHostInstance - 获取轻量应用云主机列表
     *
     * See also: https://docs.ucloud.cn/api/ucompshare-api/describe_ul_host_instance
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
     * See also: https://docs.ucloud.cn/api/ucompshare-api/get_ul_host_instance_price
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
     * See also: https://docs.ucloud.cn/api/ucompshare-api/get_ul_host_renew_price
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
     * See also: https://docs.ucloud.cn/api/ucompshare-api/modify_ul_host_attribute
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
     * See also: https://docs.ucloud.cn/api/ucompshare-api/poweroff_ul_host_instance
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
     * RebootCompShareInstance - 重启轻量算力平台实例
     *
     * See also: https://docs.ucloud.cn/api/ucompshare-api/reboot_comp_share_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UHostId" => (string) 实例Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UHostId" => (string) 实例Id
     * ]
     *
     * @return RebootCompShareInstanceResponse
     * @throws UCloudException
     */
    public function rebootCompShareInstance(RebootCompShareInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RebootCompShareInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * RebootULHostInstance - 重新启动UHost实例。
     *
     * See also: https://docs.ucloud.cn/api/ucompshare-api/reboot_ul_host_instance
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
     * ReinstallCompShareInstance - 重装算力平台实例
     *
     * See also: https://docs.ucloud.cn/api/ucompshare-api/reinstall_comp_share_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UHostId" => (string) 实例Id
     *     "CompShareImageId" => (string) 镜像Id
     *     "Password" => (string) 实例的新密码
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UHostId" => (string) 实例Id
     * ]
     *
     * @return ReinstallCompShareInstanceResponse
     * @throws UCloudException
     */
    public function reinstallCompShareInstance(ReinstallCompShareInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ReinstallCompShareInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ReinstallULHostInstance - 重装轻量应用云主机
     *
     * See also: https://docs.ucloud.cn/api/ucompshare-api/reinstall_ul_host_instance
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
     * ResetCompShareInstancePassword - 重置算力平台实例密码
     *
     * See also: https://docs.ucloud.cn/api/ucompshare-api/reset_comp_share_instance_password
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UHostId" => (string) 实例Id
     *     "Password" => (string) 新密码。需经Base64编码
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UHostId" => (string) 实例Id
     * ]
     *
     * @return ResetCompShareInstancePasswordResponse
     * @throws UCloudException
     */
    public function resetCompShareInstancePassword(ResetCompShareInstancePasswordRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ResetCompShareInstancePasswordResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ResetULHostInstancePassword - 重置轻量应用云主机管理员密码。
     *
     * See also: https://docs.ucloud.cn/api/ucompshare-api/reset_ul_host_instance_password
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
     * StartCompShareInstance - 启动算力平台实例
     *
     * See also: https://docs.ucloud.cn/api/ucompshare-api/start_comp_share_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UHostId" => (string) 实例Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UHostId" => (string) 实例Id
     * ]
     *
     * @return StartCompShareInstanceResponse
     * @throws UCloudException
     */
    public function startCompShareInstance(StartCompShareInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new StartCompShareInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * StartULHostInstance - 启动处于关闭状态的UHost实例。
     *
     * See also: https://docs.ucloud.cn/api/ucompshare-api/start_ul_host_instance
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
     * StopCompShareInstance - 关闭算力平台实例
     *
     * See also: https://docs.ucloud.cn/api/ucompshare-api/stop_comp_share_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UHostId" => (string) 实例Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UHostId" => (string) 实例Id
     * ]
     *
     * @return StopCompShareInstanceResponse
     * @throws UCloudException
     */
    public function stopCompShareInstance(StopCompShareInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new StopCompShareInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * StopULHostInstance - 指停止处于运行状态的ULHost实例
     *
     * See also: https://docs.ucloud.cn/api/ucompshare-api/stop_ul_host_instance
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
     * TerminateCompShareInstance - 删除轻量算力共享平台虚机实例
     *
     * See also: https://docs.ucloud.cn/api/ucompshare-api/terminate_comp_share_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UHostId" => (string) 虚机资源id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UHostId" => (string) 虚机资源id
     * ]
     *
     * @return TerminateCompShareInstanceResponse
     * @throws UCloudException
     */
    public function terminateCompShareInstance(TerminateCompShareInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new TerminateCompShareInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * TerminateULHostInstance - 删除指定数据中心的ULHost实例。
     *
     * See also: https://docs.ucloud.cn/api/ucompshare-api/terminate_ul_host_instance
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
