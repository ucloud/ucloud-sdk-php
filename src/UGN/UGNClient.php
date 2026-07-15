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
namespace UCloud\UGN;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\UGN\Apis\AddRoutePolicyRequest;
use UCloud\UGN\Apis\AddRoutePolicyResponse;
use UCloud\UGN\Apis\AttachUGNNetworksRequest;
use UCloud\UGN\Apis\AttachUGNNetworksResponse;
use UCloud\UGN\Apis\CreateSimpleUGNBwPackageRequest;
use UCloud\UGN\Apis\CreateSimpleUGNBwPackageResponse;
use UCloud\UGN\Apis\CreateUGNRequest;
use UCloud\UGN\Apis\CreateUGNResponse;
use UCloud\UGN\Apis\DelUGNRequest;
use UCloud\UGN\Apis\DelUGNResponse;
use UCloud\UGN\Apis\DeleteRoutePolicyRequest;
use UCloud\UGN\Apis\DeleteRoutePolicyResponse;
use UCloud\UGN\Apis\DeleteUGNBwPackageRequest;
use UCloud\UGN\Apis\DeleteUGNBwPackageResponse;
use UCloud\UGN\Apis\DescribeSimpleUGNRequest;
use UCloud\UGN\Apis\DescribeSimpleUGNResponse;
use UCloud\UGN\Apis\DetachUGNNetworksRequest;
use UCloud\UGN\Apis\DetachUGNNetworksResponse;
use UCloud\UGN\Apis\EnableRoutePolicyRequest;
use UCloud\UGN\Apis\EnableRoutePolicyResponse;
use UCloud\UGN\Apis\GetSimpleBuyBwPriceRequest;
use UCloud\UGN\Apis\GetSimpleBuyBwPriceResponse;
use UCloud\UGN\Apis\GetSimpleUGNBwPackagesRequest;
use UCloud\UGN\Apis\GetSimpleUGNBwPackagesResponse;
use UCloud\UGN\Apis\GetSwitchableBillingModesRequest;
use UCloud\UGN\Apis\GetSwitchableBillingModesResponse;
use UCloud\UGN\Apis\GetUGNRouteTableRequest;
use UCloud\UGN\Apis\GetUGNRouteTableResponse;
use UCloud\UGN\Apis\ListSimpleBwPackageRequest;
use UCloud\UGN\Apis\ListSimpleBwPackageResponse;
use UCloud\UGN\Apis\ListUGNRequest;
use UCloud\UGN\Apis\ListUGNResponse;
use UCloud\UGN\Apis\ListUGNRegionsRequest;
use UCloud\UGN\Apis\ListUGNRegionsResponse;
use UCloud\UGN\Apis\ModifyUGNBandwidthRequest;
use UCloud\UGN\Apis\ModifyUGNBandwidthResponse;
use UCloud\UGN\Apis\SendUGNApplyNetworkRequest;
use UCloud\UGN\Apis\SendUGNApplyNetworkResponse;
use UCloud\UGN\Apis\UpdateRoutePolicyRequest;
use UCloud\UGN\Apis\UpdateRoutePolicyResponse;

/**
 * This client is used to call actions of **UGN** service
 */
class UGNClient extends Client
{

    /**
     * AddRoutePolicy - 新增路由策略
     *
     * See also: https://docs.ucloud.cn/api/ugn-api/add_route_policy
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UGNID" => (string) 云联网实例ID
     *     "Policy" => (object) [
     *         "Direction" => (string) 策略方向，限定取值："In"/"Out"
     *         "Priority" => (integer) 策略优先级，范围：[1,255]，数值越小优先级越大，同一方向，策略优先级不可重复
     *         "RouteAction" => (string) 策略执行动作，限定取值："Permit"/"Deny"
     *         "SrcNetworks" => (array<object>) [
     *             [
     *                 "NetworkId" => (string) 路由策略需要匹配的路由的网络实例ID数组
     *                 "Prefixes" => (array<string>) 路由策略需要匹配的路由的网络实例下的网段数组
     *             ]
     *         ]
     *         "Name" => (string) 策略名称，限定长度255
     *         "RoutePriority" => (integer) 当执行动作为 "Permit" 时，给匹配中的路由设置路由优先级，范围：[1,255]，数值越小优先级越大
     *         "SrcRegions" => (array<string>) 路由策略需要匹配的路由的所在地域数组
     *         "SrcNetworkTypes" => (array<string>) 路由策略需要匹配的路由的网络实例类型数组，限定取值："VPC" / "UWAN-VRouter"
     *         "DstNetworkTypes" => (array<string>) 路由策略需要作用的网络实例类型数组，限定取值："VPC" / "UWAN-VRouter"，"Direction" 为 "In" 时，该值无效
     *         "DstNetworks" => (array<object>) [
     *             [
     *                 "NetworkId" => (string) 路由策略需要作用的网络实例ID数组，"Direction" 为 "In" 时，该值无效
     *             ]
     *         ]
     *     ]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return AddRoutePolicyResponse
     * @throws UCloudException
     */
    public function addRoutePolicy(AddRoutePolicyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AddRoutePolicyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * AttachUGNNetworks - 批量关联网络实例
     *
     * See also: https://docs.ucloud.cn/api/ugn-api/attach_ugn_networks
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UGNID" => (string) UGN ID
     *     "Networks" => (array<object>) [
     *         [
     *             "NetworkID" => (string) 网络实例 ID，如 uvnet-xxxx
     *             "Type" => (string) 网络实例类型，枚举值：VPC/UCVR/...
     *             "Region" => (string) 网络实例所属地域，如 cn-sh2
     *             "OrgName" => (string) 网络实例所属项目名，如 org-xxx
     *         ]
     *     ]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Networks" => (array<object>) 数组，数组内每个元素的字段如下： NetworkID：string，网络实例 ID，如 uvnet-xxxx； Type：string，网络实例类型，枚举值：VPC/UCVR/...； Region：string，网络实例所属地域，如 cn-sh2； OrgName：string，网络实例所属项目名，如 org-xxx[
     *         [
     *             "Region" => (string) 网络实例所在地域
     *             "NetworkID" => (string) 网络实例的ID，如 vnet-xxxxx
     *             "Name" => (string) 网络实例名称
     *             "Type" => (string) 网络实例类型：VPC/UCVR/...
     *             "OrgName" => (string) 网络实例所在项目名
     *             "CompanyID" => (integer) 网络实例所属公司ID
     *             "RegionID" => (integer) 网络实例所在地域ID
     *             "OrgID" => (integer) 网络实例所在项目的ID
     *             "VNI" => (integer) 网络实例的唯一标识，如 vpc 的 tunnel_id
     *             "InsertTime" => (integer) 创建时间
     *         ]
     *     ]
     *     "UGNID" => (string) UGN ID
     * ]
     *
     * @return AttachUGNNetworksResponse
     * @throws UCloudException
     */
    public function attachUGNNetworks(AttachUGNNetworksRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AttachUGNNetworksResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateSimpleUGNBwPackage - 云联网简洁版创建带宽包
     *
     * See also: https://docs.ucloud.cn/api/ugn-api/create_simple_ugn_bw_package
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UGNID" => (string) ugn 资源 id
     *     "RegionA" => (string) 地域 A 名称
     *     "RegionB" => (string) 地域 B 名称
     *     "BandWidth" => (integer) 购买的带宽值
     *     "PayMode" => (string) 计费模式 FixedBw:固定带宽｜Max5:第五峰值｜Traffic:流量计费 固定带宽：按月/按年 Max5：后付费 流量计费：后付费
     *     "ChargeType" => (string) 付费方式 Month:按月｜Year:按年｜PostPay:后付费｜Count:按量
     *     "Quantity" => (number) 购买份数，主要用于预付费
     *     "Name" => (string) 带宽包名称
     *     "Remark" => (string) 备注
     *     "Qos" => (string) 服务质量 Diamond:钻石｜Platinum:铂金｜Gold:黄金
     *     "Path" => (string) 智能路径 Delay:最低时延｜IGP:普通线路｜TCO:最低成本
     *     "CouponId" => (string) 代金券 id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return CreateSimpleUGNBwPackageResponse
     * @throws UCloudException
     */
    public function createSimpleUGNBwPackage(CreateSimpleUGNBwPackageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateSimpleUGNBwPackageResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUGN - 创建云联网
     *
     * See also: https://docs.ucloud.cn/api/ugn-api/create_ugn
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Name" => (string) UGN名称
     *     "Remark" => (string) 备注
     *     "Networks" => (array<object>) [
     *         [
     *             "NetworkID" => (string) 网络实例 ID，如 uvnet-xxxx
     *             "Type" => (string) 网络实例类型，枚举值：VPC/UCVR/...
     *             "Region" => (string) 网络实例所属地域，如 cn-sh2
     *             "OrgName" => (string) 网络实例所属项目名，如 org-xxx
     *         ]
     *     ]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UGNID" => (string) UGN ID
     *     "Networks" => (array<object>) 网络实例列表[
     *         [
     *             "Region" => (string) 网络实例所在地域
     *             "NetworkID" => (string) 网络实例的ID，如 vnet-xxxxx
     *             "Name" => (string) 网络实例名称
     *             "Type" => (string) 网络实例类型：VPC/UCVR/...
     *             "OrgName" => (string) 网络实例所在项目名
     *             "CompanyID" => (integer) 网络实例所属公司ID
     *             "RegionID" => (integer) 网络实例所在地域ID
     *             "OrgID" => (integer) 网络实例所在项目的ID
     *             "VNI" => (integer) 网络实例的唯一标识，如 vpc 的 tunnel_id
     *             "InsertTime" => (integer) 创建时间
     *         ]
     *     ]
     * ]
     *
     * @return CreateUGNResponse
     * @throws UCloudException
     */
    public function createUGN(CreateUGNRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUGNResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DelUGN - 删除云联网，仅云联网内无带宽包或网络实例时才可以被删除
     *
     * See also: https://docs.ucloud.cn/api/ugn-api/del_ugn
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UGNID" => (string) UGNID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DelUGNResponse
     * @throws UCloudException
     */
    public function delUGN(DelUGNRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DelUGNResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteRoutePolicy - 删除路由策略
     *
     * See also: https://docs.ucloud.cn/api/ugn-api/delete_route_policy
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UGNID" => (string) 云联网实例ID
     *     "PolicyIds" => (array<string>) 需要删除的路由策略ID数组
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteRoutePolicyResponse
     * @throws UCloudException
     */
    public function deleteRoutePolicy(DeleteRoutePolicyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteRoutePolicyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUGNBwPackage - 删除带宽包，互通地域仅保留默认带宽包
     *
     * See also: https://docs.ucloud.cn/api/ugn-api/delete_ugn_bw_package
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "BwPackageID" => (string) 带宽包ID
     *     "UGNID" => (string) UGNID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteUGNBwPackageResponse
     * @throws UCloudException
     */
    public function deleteUGNBwPackage(DeleteUGNBwPackageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUGNBwPackageResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeSimpleUGN - 获取简洁版UGN详情
     *
     * See also: https://docs.ucloud.cn/api/ugn-api/describe_simple_ugn
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UGNID" => (string) UGN ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UGN" => (object) 云联网实例基本信息[
     *         "UGNID" => (string) 云联网资源 ID
     *         "Name" => (string) 云联网名称
     *         "Remark" => (string) 云联网备注
     *         "CreateTime" => (integer) 云联网创建时间
     *         "NetworkCount" => (integer) 关联网络实例数量
     *         "BwPackageCount" => (integer) 绑定带宽包数量
     *         "PolicyCount" => (integer) 关联的路由策略数量
     *         "ApplyNetworksCount" => (integer) 申请待加入的网络数量
     *     ]
     *     "Networks" => (array<object>) 加入云联网网络实例基本信息[
     *         [
     *             "Region" => (string) 网络实例所在地域
     *             "NetworkID" => (string) 网络实例的ID，如 vnet-xxxxx
     *             "Name" => (string) 网络实例名称
     *             "Type" => (string) 网络实例类型：VPC/HybridGW/...
     *             "OrgName" => (string) 网络实例所在项目名
     *             "RegionID" => (integer) 网络实例所在地域ID
     *             "OrgID" => (integer) 网络实例所在项目的ID
     *             "CreateTime" => (integer)
     *         ]
     *     ]
     *     "BwPackages" => (array<object>) 云联网下的带宽基本信息[
     *         [
     *             "PackageID" => (string) 带宽包 ID
     *             "UGNID" => (string) UGN ID
     *             "PayMode" => (string) 计费模式 FixedBw:固定带宽｜Peak95:经典95｜Max5:第五峰值｜Traffic:流量计费
     *             "RegionA" => (string) 地域A名称
     *             "RegionB" => (string) 地域B名称
     *             "BandWidth" => (number) 带宽值
     *             "Qos" => (string) 服务质量Diamond:钻石｜Platinum:铂金｜Gold:黄金
     *             "Path" => (string) 智能路径Delay:最低时延｜IGP:普通线路｜TCO:最低成本
     *             "CreateTime" => (integer) 创建时间
     *             "Name" => (string) 带宽包名称
     *             "Remark" => (string) 备注
     *             "ExpireTime" => (integer) 过期时间
     *             "ChangeStatus" => (integer) 带宽包切换状态
     *             "ChangeTime" => (integer) 带宽包切换时间
     *             "ChangePayMode" => (string) 带宽包切换计费类型
     *         ]
     *     ]
     *     "Routes" => (array<object>) 云联网下的路由基本信息[
     *         [
     *             "DstAddr" => (string) 目的网段
     *             "NextHopID" => (string) 下一跳网络实例 ID
     *             "NextHopType" => (string) 下一跳网络实例类型
     *             "NextHopRegion" => (string) 下一跳网络实例所属地域
     *             "NextHopRegionID" => (integer) 下一跳网络实例所属地域 id
     *             "Priority" => (integer) 路由优先级
     *             "Deny" => (boolean) true: 由于命中路由策略而失效
     *             "Restrict" => (boolean) true: 由于优先级比其他前缀相同的路由低而失效
     *             "Conflict" => (boolean) true: 由于优先级相同但插入数据库的时间比其他前缀相同的路由晚而失效
     *             "InPolicyId" => (string) 匹配中的入向路由策略id
     *             "InPolicyName" => (string) 匹配中的入向路由策略名称
     *             "OutPolicyId" => (string) 匹配中的出向路由策略id
     *             "OutPolicyName" => (string) 匹配中的出向路由策略名称
     *         ]
     *     ]
     *     "Policies" => (array<object>) 云联网的路由策略基本信息[
     *         [
     *             "Region" => (string) 作用地域
     *             "PolicyId" => (string) 路由策略ID
     *             "Name" => (string) 路由策略名称，限定长度255
     *             "Direction" => (string) 策略方向，限定取值："In"/"Out"
     *             "Enabled" => (boolean) 是否启用
     *             "Priority" => (integer) 策略优先级，范围：[1,255]，数值越小优先级越大，同一方向，策略优先级不可重复
     *             "Action" => (string) 策略执行动作，限定取值："Permit"/"Deny"
     *             "RoutePriority" => (integer) 当执行动作为 "Permit" 时，给匹配中的路由设置路由优先级，范围：[1,255]，数值越小优先级越大
     *             "SrcRegions" => (array<string>) 路由策略需要匹配的路由的所在地域数组
     *             "SrcNetworkTypes" => (array<string>) 路由策略需要匹配的路由的网络实例类型数组，限定取值："VPC" / "UWAN-VRouter"
     *             "SrcNetworks" => (array<object>) 路由策略需要匹配的路由的网络实例类型以及该实例下的网段信息[
     *                 [
     *                     "NetworkId" => (string) 网络实例ID
     *                     "Prefixes" => (array<string>) 网络实例上报的网段
     *                 ]
     *             ]
     *             "DstNetworkTypes" => (array<string>) 路由策略需要作用的网络实例类型数组，限定取值："VPC" / "UWAN-VRouter"
     *             "DstNetworks" => (array<object>) 路由策略需要作用的网络实例ID[
     *                 [
     *                     "NetworkId" => (string) 网络实例ID
     *                     "Prefixes" => (array<string>) 网络实例上报的网段
     *                 ]
     *             ]
     *             "CreateTime" => (integer) 创建时间
     *             "Matched" => (boolean) 是否匹配中路由
     *         ]
     *     ]
     * ]
     *
     * @return DescribeSimpleUGNResponse
     * @throws UCloudException
     */
    public function describeSimpleUGN(DescribeSimpleUGNRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeSimpleUGNResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DetachUGNNetworks - 批量解除关联网络实例
     *
     * See also: https://docs.ucloud.cn/api/ugn-api/detach_ugn_networks
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UGNID" => (string) UGNID
     *     "Networks" => (array<string>) 网络实例 ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Networks" => (array<object>) 数组，数组内每个元素的字段如下： NetworkID：string，网络实例 ID，如 uvnet-xxxx； Type：string，网络实例类型，枚举值：VPC/UCVR/...； Region：string，网络实例所属地域，如 cn-sh2； OrgName：string，网络实例所属项目名，如 org-xxx[
     *         [
     *             "Region" => (string) 网络实例所在地域
     *             "NetworkID" => (string) 网络实例的ID，如 vnet-xxxxx
     *             "Name" => (string) 网络实例名称
     *             "Type" => (string) 网络实例类型：VPC/UCVR/...
     *             "OrgName" => (string) 网络实例所在项目名
     *             "CompanyID" => (integer) 网络实例所属公司ID
     *             "RegionID" => (integer) 网络实例所在地域ID
     *             "OrgID" => (integer) 网络实例所在项目的ID
     *             "VNI" => (integer) 网络实例的唯一标识，如 vpc 的 tunnel_id
     *             "InsertTime" => (integer) 创建时间
     *         ]
     *     ]
     *     "UGNID" => (string) UGN ID
     * ]
     *
     * @return DetachUGNNetworksResponse
     * @throws UCloudException
     */
    public function detachUGNNetworks(DetachUGNNetworksRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DetachUGNNetworksResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * EnableRoutePolicy - 启用\停用路由策略
     *
     * See also: https://docs.ucloud.cn/api/ugn-api/enable_route_policy
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UGNID" => (string) 云联网实例ID
     *     "PolicyId" => (string) 路由策略ID
     *     "Enable" => (boolean) 是否启用
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return EnableRoutePolicyResponse
     * @throws UCloudException
     */
    public function enableRoutePolicy(EnableRoutePolicyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new EnableRoutePolicyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetSimpleBuyBwPrice - 获取简洁版带宽包价格
     *
     * See also: https://docs.ucloud.cn/api/ugn-api/get_simple_buy_bw_price
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "RegionA" => (string) 地域 A 名称
     *     "RegionB" => (string) 地域 B 名称
     *     "PayMode" => (string) 计费模式 FixedBw:固定带宽｜Max5:第五峰值｜Traffic:流量计费 固定带宽：按月/按年 Max5：后付费 流量计费：按量付费
     *     "ChargeType" => (string) 付费方式 Month:按月｜Year:按年｜PostPay:后付费｜Count:按量
     *     "Qos" => (string) 服务质量 Diamond:钻石｜Platinum:铂金｜Gold:黄金
     *     "Path" => (string) 智能路径 Delay:最低时延｜IGP:普通线路｜TCO:最低成本
     *     "BandWidth" => (integer) 购买的带宽值，默认为1
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalPrice" => (integer) 最终价格 = 原价 * 用户折扣 * 产品折扣
     *     "CustomPrice" => (integer) 客户折扣价 = 原价 * 用户折扣
     *     "OriginalPrice" => (integer) 原价
     * ]
     *
     * @return GetSimpleBuyBwPriceResponse
     * @throws UCloudException
     */
    public function getSimpleBuyBwPrice(GetSimpleBuyBwPriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetSimpleBuyBwPriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetSimpleUGNBwPackages - 获取指定云联网内的带宽包
     *
     * See also: https://docs.ucloud.cn/api/ugn-api/get_simple_ugn_bw_packages
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UGNID" => (string) UGN ID
     *     "Offset" => (integer) 偏移量，默认0
     *     "Limit" => (integer)     分页大小，默认20
     *     "PackageIds" => (array<string>) 带宽包ID列表，不填查询UGN下全部带宽包
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "BwPackages" => (array<object>) 带宽包列表[
     *         [
     *             "PackageID" => (string) 带宽包 ID
     *             "UGNID" => (string) UGN ID
     *             "PayMode" => (string) 计费模式 FixedBw:固定带宽｜Peak95:经典95｜Max5:第五峰值｜Traffic:流量计费
     *             "RegionA" => (string) 地域A名称
     *             "RegionB" => (string) 地域B名称
     *             "BandWidth" => (number) 带宽值
     *             "Qos" => (string) 服务质量Diamond:钻石｜Platinum:铂金｜Gold:黄金
     *             "Path" => (string) 智能路径Delay:最低时延｜IGP:普通线路｜TCO:最低成本
     *             "CreateTime" => (integer) 创建时间
     *             "Name" => (string) 带宽包名称
     *             "Remark" => (string) 备注
     *             "ExpireTime" => (integer) 过期时间
     *             "ChangeStatus" => (integer) 带宽包切换状态
     *             "ChangeTime" => (integer) 带宽包切换时间
     *             "ChangePayMode" => (string) 带宽包切换计费类型
     *         ]
     *     ]
     *     "TotalCount" => (integer) 带宽包数量
     *     "Offset" => (integer) 偏移量
     *     "Limit" => (integer) 分页大小
     * ]
     *
     * @return GetSimpleUGNBwPackagesResponse
     * @throws UCloudException
     */
    public function getSimpleUGNBwPackages(GetSimpleUGNBwPackagesRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetSimpleUGNBwPackagesResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetSwitchableBillingModes - 获取带宽包可以切换的计费类型
     *
     * See also: https://docs.ucloud.cn/api/ugn-api/get_switchable_billing_modes
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "BwPackageID" => (string) 带宽包 id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "PayModes" => (array<string>) 支持的计费类型。FixedBw：固定带宽，Traffic：流量计费，Max5：第五峰值。
     * ]
     *
     * @return GetSwitchableBillingModesResponse
     * @throws UCloudException
     */
    public function getSwitchableBillingModes(GetSwitchableBillingModesRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetSwitchableBillingModesResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUGNRouteTable - 获取云联网路由表
     *
     * See also: https://docs.ucloud.cn/api/ugn-api/get_ugn_route_table
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UGNID" => (string) 云联网实例ID
     *     "Type" => (string) 路由表类型，分为初始路由表、中阶路由表以及最终路由表，限定取值："Origin"/"Middle"/"Final"
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UGNID" => (string) 云联网实例ID
     *     "Routes" => (array<object>) 路由表，"Origin"/"Middle" 用这个[
     *         [
     *             "DstAddr" => (string) 目的网段
     *             "NextHopID" => (string) 下一跳网络实例 ID
     *             "NextHopType" => (string) 下一跳网络实例类型
     *             "NextHopRegion" => (string) 下一跳网络实例所属地域
     *             "NextHopRegionID" => (integer) 下一跳网络实例所属地域 id
     *             "Priority" => (integer) 路由优先级
     *             "Deny" => (boolean) true: 由于命中路由策略而失效
     *             "Restrict" => (boolean) true: 由于优先级比其他前缀相同的路由低而失效
     *             "Conflict" => (boolean) true: 由于优先级相同但插入数据库的时间比其他前缀相同的路由晚而失效
     *             "InPolicyId" => (string) 匹配中的入向路由策略id
     *             "InPolicyName" => (string) 匹配中的入向路由策略名称
     *             "OutPolicyId" => (string) 匹配中的出向路由策略id
     *             "OutPolicyName" => (string) 匹配中的出向路由策略名称
     *         ]
     *     ]
     *     "VRoutes" => (array<object>) 网络实例对应的路由表，"Final" 用这个[
     *         [
     *             "NetworkId" => (string) 网络实例ID
     *             "Routes" => (array<object>) 该网络实例对应的路由[
     *                 [
     *                     "DstAddr" => (string) 目的网段
     *                     "NextHopID" => (string) 下一跳网络实例 ID
     *                     "NextHopType" => (string) 下一跳网络实例类型
     *                     "NextHopRegion" => (string) 下一跳网络实例所属地域
     *                     "NextHopRegionID" => (integer) 下一跳网络实例所属地域 id
     *                     "Priority" => (integer) 路由优先级
     *                     "Deny" => (boolean) true: 由于命中路由策略而失效
     *                     "Restrict" => (boolean) true: 由于优先级比其他前缀相同的路由低而失效
     *                     "Conflict" => (boolean) true: 由于优先级相同但插入数据库的时间比其他前缀相同的路由晚而失效
     *                     "InPolicyId" => (string) 匹配中的入向路由策略id
     *                     "InPolicyName" => (string) 匹配中的入向路由策略名称
     *                     "OutPolicyId" => (string) 匹配中的出向路由策略id
     *                     "OutPolicyName" => (string) 匹配中的出向路由策略名称
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return GetUGNRouteTableResponse
     * @throws UCloudException
     */
    public function getUGNRouteTable(GetUGNRouteTableRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUGNRouteTableResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListSimpleBwPackage - 获取当前项目下的带宽包列表
     *
     * See also: https://docs.ucloud.cn/api/ugn-api/list_simple_bw_package
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Offset" => (integer) 偏移量，默认0
     *     "Limit" => (integer) 分页大小，默认20
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 带宽包数量
     *     "Offset" => (integer) 偏移量
     *     "Limit" => (integer) 分页大小
     *     "BwPackages" => (array<object>) 带宽包列表[
     *         [
     *             "PackageID" => (string) 带宽包 ID
     *             "UGNID" => (string) UGN ID
     *             "PayMode" => (string) 计费模式 FixedBw:固定带宽｜Peak95:经典95｜Max5:第五峰值｜Traffic:流量计费
     *             "RegionA" => (string) 地域A名称
     *             "RegionB" => (string) 地域B名称
     *             "BandWidth" => (number) 带宽值
     *             "Qos" => (string) 服务质量Diamond:钻石｜Platinum:铂金｜Gold:黄金
     *             "Path" => (string) 智能路径Delay:最低时延｜IGP:普通线路｜TCO:最低成本
     *             "CreateTime" => (integer) 创建时间
     *             "Name" => (string) 带宽包名称
     *             "Remark" => (string) 备注
     *             "ExpireTime" => (integer) 过期时间
     *             "ChangeStatus" => (integer) 带宽包切换状态
     *             "ChangeTime" => (integer) 带宽包切换时间
     *             "ChangePayMode" => (string) 带宽包切换计费类型
     *         ]
     *     ]
     * ]
     *
     * @return ListSimpleBwPackageResponse
     * @throws UCloudException
     */
    public function listSimpleBwPackage(ListSimpleBwPackageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListSimpleBwPackageResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUGN - 获取当前项目下所有云联网资源
     *
     * See also: https://docs.ucloud.cn/api/ugn-api/list_ugn
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Limit" => (integer) 分页大小，默认20
     *     "Offset" => (integer) 偏移量，默认0
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UGNs" => (array<object>) UGN 列表[
     *         [
     *             "UGNID" => (string) 云联网资源 ID
     *             "Name" => (string) 云联网名称
     *             "Remark" => (string) 云联网备注
     *             "CreateTime" => (integer) 云联网创建时间
     *             "NetworkCount" => (integer) 关联网络实例数量
     *             "BwPackageCount" => (integer) 绑定带宽包数量
     *             "PolicyCount" => (integer) 关联的路由策略数量
     *             "ApplyNetworksCount" => (integer) 申请待加入的网络数量
     *         ]
     *     ]
     *     "TotalCount" => (integer) UGN数量
     *     "Offset" => (integer) 偏移量
     *     "Limit" => (integer) 分页大小
     * ]
     *
     * @return ListUGNResponse
     * @throws UCloudException
     */
    public function listUGN(ListUGNRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUGNResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUGNRegions - 获取UGN的可加入地域列表
     *
     * See also: https://docs.ucloud.cn/api/ugn-api/list_ugn_regions
     *
     * Arguments:
     *
     * $args = [
     *     "SelectedRegions" => (array<string>) 数组，已选区域，例如：cn-bj2， cn-wlcb
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "RegionLIst" => (array<object>) 可加入地域列表[
     *         [
     *             "Region" => (string) 地域名称
     *             "RegIonId" => (integer) 地域ID
     *             "IsOverseas" => (boolean) 是否为海外地域
     *             "IsOnline" => (boolean) 是否上线
     *             "Needs" => (array<string>) 添加region需要做的校验
     *         ]
     *     ]
     * ]
     *
     * @return ListUGNRegionsResponse
     * @throws UCloudException
     */
    public function listUGNRegions(ListUGNRegionsRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUGNRegionsResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyUGNBandwidth - 修改云联网带宽大小
     *
     * See also: https://docs.ucloud.cn/api/ugn-api/modify_ugn_bandwidth
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "PackageID" => (string) 带宽包id
     *     "UGNID" => (string) 云联网id
     *     "BandWidth" => (integer) 带宽值
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ModifyUGNBandwidthResponse
     * @throws UCloudException
     */
    public function modifyUGNBandwidth(ModifyUGNBandwidthRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyUGNBandwidthResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * SendUGNApplyNetwork - 跨账号网络实例申请加入 UGN
     *
     * See also: https://docs.ucloud.cn/api/ugn-api/send_ugn_apply_network
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NetworkID" => (string) 网络实例 ID，如 uvnet-xxxx
     *     "NetworkType" => (string) 网络实例类型，枚举值：VPC/UWAN-VRouter/...
     *     "NetworkRegion" => (string) 网络实例所属地域，如 cn-sh2
     *     "NetworkOrgName" => (string) 网络实例所属项目名，如 org-xxx
     *     "UGNID" => (string) UGN id
     *     "UGNCompanyID" => (integer) UGN所属公司 id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return SendUGNApplyNetworkResponse
     * @throws UCloudException
     */
    public function sendUGNApplyNetwork(SendUGNApplyNetworkRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new SendUGNApplyNetworkResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateRoutePolicy - 修改路由策略
     *
     * See also: https://docs.ucloud.cn/api/ugn-api/update_route_policy
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UGNID" => (string) 云联网实例ID
     *     "Policy" => (object) [
     *         "PolicyId" => (string) 路由策略ID
     *         "Name" => (string) 策略名称，限定长度 255
     *         "Direction" => (string) 策略方向，限定取值："In"/"Out"
     *         "Priority" => (integer) 策略优先级，范围：[1,255]，数值越小优先级越大，同一方向，策略优先级不可重复
     *         "RouteAction" => (string) 策略执行动作，限定取值："Permit"/"Deny"
     *         "RoutePriority" => (integer) 当执行动作为 "Permit" 时，给匹配中的路由设置路由优先级，范围：[1,255]，数值越小优先级越大
     *         "SrcRegions" => (array<string>) 路由策略需要匹配的路由的所在地域数组
     *         "SrcNetworkTypes" => (array<string>) 路由策略需要匹配的路由的网络实例类型数组，限定取值："VPC" / "UWAN-VRouter"
     *         "SrcNetworks" => (array<object>) [
     *             [
     *                 "NetworkId" => (string) 路由策略需要匹配的路由的网络实例ID数组
     *                 "Prefixes" => (array<string>) 路由策略需要匹配的路由的网络实例下的网段数组
     *             ]
     *         ]
     *         "DstNetworkTypes" => (array<string>) 路由策略需要作用的网络实例类型数组，限定取值："VPC" / "UWAN-VRouter"
     *         "DstNetworks" => (array<object>) [
     *             [
     *                 "NetworkId" => (string) 路由策略需要作用的网络实例ID数组
     *             ]
     *         ]
     *     ]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateRoutePolicyResponse
     * @throws UCloudException
     */
    public function updateRoutePolicy(UpdateRoutePolicyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateRoutePolicyResponse($resp->toArray(), $resp->getRequestId());
    }
}
