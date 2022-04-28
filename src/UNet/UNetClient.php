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
namespace UCloud\UNet;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\UNet\Apis\AllocateEIPRequest;
use UCloud\UNet\Apis\AllocateEIPResponse;
use UCloud\UNet\Apis\AllocateShareBandwidthRequest;
use UCloud\UNet\Apis\AllocateShareBandwidthResponse;
use UCloud\UNet\Apis\AssociateEIPWithShareBandwidthRequest;
use UCloud\UNet\Apis\AssociateEIPWithShareBandwidthResponse;
use UCloud\UNet\Apis\BindEIPRequest;
use UCloud\UNet\Apis\BindEIPResponse;
use UCloud\UNet\Apis\CreateBandwidthPackageRequest;
use UCloud\UNet\Apis\CreateBandwidthPackageResponse;
use UCloud\UNet\Apis\CreateFirewallRequest;
use UCloud\UNet\Apis\CreateFirewallResponse;
use UCloud\UNet\Apis\DeleteBandwidthPackageRequest;
use UCloud\UNet\Apis\DeleteBandwidthPackageResponse;
use UCloud\UNet\Apis\DeleteFirewallRequest;
use UCloud\UNet\Apis\DeleteFirewallResponse;
use UCloud\UNet\Apis\DescribeBandwidthPackageRequest;
use UCloud\UNet\Apis\DescribeBandwidthPackageResponse;
use UCloud\UNet\Apis\DescribeBandwidthUsageRequest;
use UCloud\UNet\Apis\DescribeBandwidthUsageResponse;
use UCloud\UNet\Apis\DescribeEIPRequest;
use UCloud\UNet\Apis\DescribeEIPResponse;
use UCloud\UNet\Apis\DescribeFirewallRequest;
use UCloud\UNet\Apis\DescribeFirewallResponse;
use UCloud\UNet\Apis\DescribeFirewallResourceRequest;
use UCloud\UNet\Apis\DescribeFirewallResourceResponse;
use UCloud\UNet\Apis\DescribeShareBandwidthRequest;
use UCloud\UNet\Apis\DescribeShareBandwidthResponse;
use UCloud\UNet\Apis\DescribeShareBandwidthPriceRequest;
use UCloud\UNet\Apis\DescribeShareBandwidthPriceResponse;
use UCloud\UNet\Apis\DescribeShareBandwidthUpdatePriceRequest;
use UCloud\UNet\Apis\DescribeShareBandwidthUpdatePriceResponse;
use UCloud\UNet\Apis\DisassociateEIPWithShareBandwidthRequest;
use UCloud\UNet\Apis\DisassociateEIPWithShareBandwidthResponse;
use UCloud\UNet\Apis\DisassociateFirewallRequest;
use UCloud\UNet\Apis\DisassociateFirewallResponse;
use UCloud\UNet\Apis\GetEIPPayModeRequest;
use UCloud\UNet\Apis\GetEIPPayModeResponse;
use UCloud\UNet\Apis\GetEIPPriceRequest;
use UCloud\UNet\Apis\GetEIPPriceResponse;
use UCloud\UNet\Apis\GetEIPUpgradePriceRequest;
use UCloud\UNet\Apis\GetEIPUpgradePriceResponse;
use UCloud\UNet\Apis\GetThroughputDailyBillingInfoRequest;
use UCloud\UNet\Apis\GetThroughputDailyBillingInfoResponse;
use UCloud\UNet\Apis\GrantFirewallRequest;
use UCloud\UNet\Apis\GrantFirewallResponse;
use UCloud\UNet\Apis\ModifyEIPBandwidthRequest;
use UCloud\UNet\Apis\ModifyEIPBandwidthResponse;
use UCloud\UNet\Apis\ModifyEIPWeightRequest;
use UCloud\UNet\Apis\ModifyEIPWeightResponse;
use UCloud\UNet\Apis\ReleaseEIPRequest;
use UCloud\UNet\Apis\ReleaseEIPResponse;
use UCloud\UNet\Apis\ReleaseShareBandwidthRequest;
use UCloud\UNet\Apis\ReleaseShareBandwidthResponse;
use UCloud\UNet\Apis\ResizeShareBandwidthRequest;
use UCloud\UNet\Apis\ResizeShareBandwidthResponse;
use UCloud\UNet\Apis\SetEIPPayModeRequest;
use UCloud\UNet\Apis\SetEIPPayModeResponse;
use UCloud\UNet\Apis\UnBindEIPRequest;
use UCloud\UNet\Apis\UnBindEIPResponse;
use UCloud\UNet\Apis\UpdateEIPAttributeRequest;
use UCloud\UNet\Apis\UpdateEIPAttributeResponse;
use UCloud\UNet\Apis\UpdateFirewallRequest;
use UCloud\UNet\Apis\UpdateFirewallResponse;
use UCloud\UNet\Apis\UpdateFirewallAttributeRequest;
use UCloud\UNet\Apis\UpdateFirewallAttributeResponse;

/**
 * This client is used to call actions of **UNet** service
 */
class UNetClient extends Client
{

    /**
     * AllocateEIP - 根据提供信息, 申请弹性IP
     *
     * See also: https://docs.ucloud.cn/api/unet-api/allocate_eip
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。
     *     "OperatorName" => (string) 弹性IP线路，枚举值：国际线路， International；BGP线路：Bgp；精品BGP：BGPPro。使用BGP线路的地域：北京二、上海金融云、上海二、广州等，其他地域均使用国际线路。使用BGPPro线路的地域：香港
     *     "Bandwidth" => (integer) 弹性IP的外网带宽, 单位为Mbps. 共享带宽模式必须指定0M带宽, 非共享带宽模式必须指定非0Mbps带宽. 各地域非共享带宽的带宽范围如下： 流量计费[1-300]，带宽计费[1-10000]
     *     "Tag" => (string) 业务组名称, 默认为 "Default"
     *     "ChargeType" => (string) 付费方式, 枚举值为: Year, 按年付费; Month, 按月付费; Dynamic, 按时付费，默认为按月付费。
     *     "Quantity" => (integer) 购买的时长, 默认: 1
     *     "PayMode" => (string) 弹性IP的计费模式. 枚举值: "Traffic", 流量计费; "Bandwidth", 带宽计费; "ShareBandwidth",共享带宽模式. 默认为 "Bandwidth".“PostAccurateBandwidth”：带宽后付费模式
     *     "ShareBandwidthId" => (string) 绑定的共享带宽Id,仅当PayMode为ShareBandwidth时有效
     *     "Name" => (string) 弹性IP的名称, 默认为 "EIP"
     *     "Count" => (integer) 购买EIP数量，默认值为1
     *     "Remark" => (string) 弹性IP的备注, 默认为空
     *     "CouponId" => (string) 代金券ID, 默认不使用
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "EIPSet" => (array<object>) 申请到的EIP资源详情 参见 UnetAllocateEIPSet[
     *         [
     *             "EIPId" => (string) 申请到的EIP资源ID
     *             "EIPAddr" => (array<object>) 申请到的IPv4地址. [
     *                 [
     *                     "OperatorName" => (string) 运营商信息如: 国际: International, BGP: BGP
     *                     "IP" => (string) IP地址
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return AllocateEIPResponse
     * @throws UCloudException
     */
    public function allocateEIP(AllocateEIPRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AllocateEIPResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * AllocateShareBandwidth - 开通共享带宽
     *
     * See also: https://docs.ucloud.cn/api/unet-api/allocate_share_bandwidth
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。
     *     "Name" => (string) 共享带宽名字
     *     "ChargeType" => (string) 付费方式:Year 按年,Month 按月,Dynamic 按时;
     *     "ShareBandwidth" => (integer) 共享带宽值
     *     "Quantity" => (integer) 购买时长
     *     "IPVersion" => (string) 共享带宽类型，IPv4或者IPv6，不传默认IPv4
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ShareBandwidthId" => (string) 共享带宽资源Id
     * ]
     *
     * @return AllocateShareBandwidthResponse
     * @throws UCloudException
     */
    public function allocateShareBandwidth(AllocateShareBandwidthRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AllocateShareBandwidthResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * AssociateEIPWithShareBandwidth - 将EIP加入共享带宽
     *
     * See also: https://docs.ucloud.cn/api/unet-api/associate_eip_with_share_bandwidth
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。
     *     "EIPIds" => (array<string>) 要加入共享带宽的EIP的资源Id
     *     "ShareBandwidthId" => (string) 共享带宽ID
     *     "IPVersion" => (string) 共享带宽类型，IPv4或者IPv6，不传默认IPv4
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return AssociateEIPWithShareBandwidthResponse
     * @throws UCloudException
     */
    public function associateEIPWithShareBandwidth(AssociateEIPWithShareBandwidthRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AssociateEIPWithShareBandwidthResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * BindEIP - 将尚未使用的弹性IP绑定到指定的资源
     *
     * See also: https://docs.ucloud.cn/api/unet-api/bind_eip
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写
     *     "EIPId" => (string) 弹性IP的资源Id
     *     "ResourceType" => (string) 弹性IP请求绑定的资源类型, 枚举值为: uhost: 云主机; ulb, 负载均衡器 upm: 物理机; hadoophost: 大数据集群;fortresshost：堡垒机；udockhost：容器；udhost：私有专区主机；natgw：natgw；udb：udb；vpngw：ipsec vpn；ucdr：云灾备；dbaudit：数据库审计；uni：虚拟网卡；cube，Cube容器。如果EIP为普通带宽计费，且带宽值高于2G，则只允许绑定在快杰型云主机和ULB
     *     "ResourceId" => (string) 弹性IP请求绑定的资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return BindEIPResponse
     * @throws UCloudException
     */
    public function bindEIP(BindEIPRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new BindEIPResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateBandwidthPackage - 为非共享带宽模式下, 已绑定资源实例的带宽计费弹性IP附加临时带宽包
     *
     * See also: https://docs.ucloud.cn/api/unet-api/create_bandwidth_package
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Bandwidth" => (integer) 带宽大小(单位Mbps), 取值范围[2,800] (最大值受地域限制)
     *     "EIPId" => (string) 所绑定弹性IP的资源ID
     *     "TimeRange" => (integer) 带宽包有效时长, 取值范围为大于0的整数, 即该带宽包在EnableTime到 EnableTime+TimeRange时间段内生效
     *     "EnableTime" => (integer) 生效时间, 格式为 Unix timestamp, 默认为立即开通
     *     "CouponId" => (string) 代金券ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "BandwidthPackageId" => (string) 所创建带宽包的资源ID
     * ]
     *
     * @return CreateBandwidthPackageResponse
     * @throws UCloudException
     */
    public function createBandwidthPackage(CreateBandwidthPackageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateBandwidthPackageResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateFirewall - 创建防火墙
     *
     * See also: https://docs.ucloud.cn/api/unet-api/create_firewall
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写
     *     "Rule" => (array<string>) 防火墙规则，例如：TCP|22|192.168.1.1/22|DROP|LOW|禁用22端口，第一个参数代表协议：第二个参数代表端口号，第三个参数为ip，第四个参数为ACCEPT（接受）和DROP（拒绝），第五个参数优先级：HIGH（高），MEDIUM（中），LOW（低），第六个参数为该条规则的自定义备注,bj1不支持添加备注
     *     "Name" => (string) 防火墙名称
     *     "Tag" => (string) 防火墙业务组，默认为Default
     *     "Remark" => (string) 防火墙描述，默认为空
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "FWId" => (string) 防火墙ID
     * ]
     *
     * @return CreateFirewallResponse
     * @throws UCloudException
     */
    public function createFirewall(CreateFirewallRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateFirewallResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteBandwidthPackage - 删除弹性IP上已附加带宽包
     *
     * See also: https://docs.ucloud.cn/api/unet-api/delete_bandwidth_package
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "BandwidthPackageId" => (string) 带宽包资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteBandwidthPackageResponse
     * @throws UCloudException
     */
    public function deleteBandwidthPackage(DeleteBandwidthPackageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteBandwidthPackageResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteFirewall - 删除防火墙
     *
     * See also: https://docs.ucloud.cn/api/unet-api/delete_firewall
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "FWId" => (string) 防火墙资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteFirewallResponse
     * @throws UCloudException
     */
    public function deleteFirewall(DeleteFirewallRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteFirewallResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeBandwidthPackage - 获取某地域下的带宽包信息
     *
     * See also: https://docs.ucloud.cn/api/unet-api/describe_bandwidth_package
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "Limit" => (integer) 返回数据分页值, 取值范围为 [0,10000000] 之间的整数, 默认为20
     *     "Offset" => (integer) 返回数据偏移量, 默认为0
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 满足条件的带宽包总数
     *     "DataSets" => (array<object>) 带宽包详细信息, 参见 UnetBandwidthPackageSet[
     *         [
     *             "BandwidthPackageId" => (string) 带宽包的资源ID
     *             "EnableTime" => (integer) 生效时间, 格式为 Unix Timestamp
     *             "DisableTime" => (integer) 失效时间, 格式为 Unix Timestamp
     *             "CreateTime" => (integer) 创建时间, 格式为 Unix Timestamp
     *             "Bandwidth" => (integer) 带宽包的临时带宽值, 单位Mbps
     *             "EIPId" => (string) 带宽包所绑定弹性IP的资源ID
     *             "EIPAddr" => (array<object>) 带宽包所绑定弹性IP的详细信息,只有当EIPId对应双线IP时, EIPAddr的长度为2, 其他情况, EIPAddr长度均为1.参见 EIPAddrSet[
     *                 [
     *                     "OperatorName" => (string) 运营商信息, 枚举值为:  BGP: BGP; International: 国际.
     *                     "IP" => (string) 弹性IP地址
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return DescribeBandwidthPackageResponse
     * @throws UCloudException
     */
    public function describeBandwidthPackage(DescribeBandwidthPackageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeBandwidthPackageResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeBandwidthUsage - 获取带宽用量信息
     *
     * See also: https://docs.ucloud.cn/api/unet-api/describe_bandwidth_usage
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "Limit" => (integer) 返回数据分页值, 取值范围为 [0,10000000] 之间的整数, 默认为20
     *     "OffSet" => (integer) 返回数据偏移量, 默认为0
     *     "EIPIds" => (array<string>) 弹性IP的资源Id. 如果为空, 则返回当前 Region中符合条件的所有EIP的带宽用量, n为自然数
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) EIPSet中的元素个数
     *     "EIPSet" => (array<object>) 单个弹性IP的带宽用量详细信息, 详见 UnetBandwidthUsageEIPSet, 如没有弹性IP资源则没有该返回值。[
     *         [
     *             "CurBandwidth" => (number) 最近5分钟带宽用量, 单位Mbps
     *             "EIPId" => (string) 弹性IP资源ID
     *         ]
     *     ]
     * ]
     *
     * @return DescribeBandwidthUsageResponse
     * @throws UCloudException
     */
    public function describeBandwidthUsage(DescribeBandwidthUsageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeBandwidthUsageResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeEIP - 获取弹性IP信息
     *
     * See also: https://docs.ucloud.cn/api/unet-api/describe_eip
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写
     *     "EIPIds" => (array<string>) 弹性IP的资源ID如果为空, 则返回当前 Region中符合条件的的所有EIP
     *     "Offset" => (integer) 数据偏移量, 默认为0
     *     "Limit" => (integer) 数据分页值, 默认为20
     *     "IPs" => (array<string>) IP地址，支持通过ip查询，如果ip与EIP都传，会取并集查询
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 满足条件的弹性IP总数
     *     "UnbindCount" => (integer) 未绑定的弹性IP总数
     *     "TotalBandwidth" => (integer) 满足条件的弹性IP带宽总和, 单位Mbps
     *     "EIPSet" => (array<object>) 弹性IP列表, 每项参数详见 UnetEIPSet[
     *         [
     *             "EIPId" => (string) 弹性IP的资源ID
     *             "Weight" => (integer) 外网出口权重, 默认为50, 范围[0-100]
     *             "BandwidthType" => (integer) 带宽模式, 枚举值为: 0: 非共享带宽模式, 1: 共享带宽模式
     *             "Bandwidth" => (integer) 弹性IP的带宽, 单位为Mbps, 当BandwidthType=1时, 该处显示为共享带宽值. 当BandwidthType=0时, 该处显示这个弹性IP的带宽.
     *             "Status" => (string) 弹性IP的资源绑定状态, 枚举值为: used: 已绑定, free: 未绑定, freeze: 已冻结
     *             "ChargeType" => (string) 付费方式, 枚举值为: Year, 按年付费; Month, 按月付费; Dynamic, 按小时付费; Trial, 试用. 按小时付费和试用这两种付费模式需要开通权限.
     *             "CreateTime" => (integer) 弹性IP的创建时间, 格式为Unix Timestamp
     *             "ExpireTime" => (integer) 弹性IP的到期时间, 格式为Unix Timestamp
     *             "Resource" => (object) 弹性IP的详细信息列表, 具体结构见下方 UnetEIPResourceSet[
     *                 "ResourceType" => (string) 已绑定的资源类型, 枚举值为: uhost, 云主机；natgw：NAT网关；ulb：负载均衡器；upm: 物理机; hadoophost: 大数据集群;fortresshost：堡垒机；udockhost：容器；udhost：私有专区主机；vpngw：IPSec VPN；ucdr：云灾备；dbaudit：数据库审计，uni：虚拟网卡。
     *                 "ResourceName" => (string) 已绑定的资源名称
     *                 "ResourceID" => (string) 已绑定资源的资源ID
     *                 "SubResourceType" => (string) 资源绑定的虚拟网卡的类型。uni，虚拟网卡。
     *                 "SubResourceName" => (string) 资源绑定的虚拟网卡的名称
     *                 "SubResourceId" => (string) 资源绑定的虚拟网卡的ID
     *                 "EIPId" => (string) 弹性IP的资源ID
     *             ]
     *             "EIPAddr" => (array<object>) 弹性IP的详细信息列表, 具体结构见下方 UnetEIPAddrSet[
     *                 [
     *                     "OperatorName" => (string) 运营商信息如: 国际: International, BGP: BGP
     *                     "IP" => (string) IP地址
     *                 ]
     *             ]
     *             "Name" => (string) 弹性IP的名称,缺省值为 "EIP"
     *             "Tag" => (string) 弹性IP的业务组标识, 缺省值为 "Default"
     *             "Remark" => (string) 弹性IP的备注, 缺省值为 ""
     *             "PayMode" => (string) 弹性IP的计费模式, 枚举值为: "Bandwidth", 带宽计费; "Traffic", 流量计费; "ShareBandwidth",共享带宽模式. 默认为 "Bandwidth".
     *             "ShareBandwidthSet" => (object) 共享带宽信息 参见 ShareBandwidthSet[
     *                 "ShareBandwidth" => (integer) 共享带宽带宽值
     *                 "ShareBandwidthName" => (string) 共享带宽的资源名称
     *                 "ShareBandwidthId" => (string) 共享带宽ID
     *             ]
     *             "Expire" => (boolean) 弹性IP是否到期
     *         ]
     *     ]
     * ]
     *
     * @return DescribeEIPResponse
     * @throws UCloudException
     */
    public function describeEIP(DescribeEIPRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeEIPResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeFirewall - 获取防火墙组信息
     *
     * See also: https://docs.ucloud.cn/api/unet-api/describe_firewall
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写
     *     "FWId" => (string) 防火墙ID，默认为返回所有防火墙
     *     "ResourceType" => (string) 绑定防火墙组的资源类型，默认为全部资源类型。枚举值为："unatgw"，NAT网关； "uhost"，云主机；“uni”，虚拟网卡； "upm"，物理云主机； "hadoophost"，hadoop节点； "fortresshost"，堡垒机； "udhost"，私有专区主机；"udockhost"，容器；"dbaudit"，数据库审计.
     *     "ResourceId" => (string) 绑定防火墙组的资源ID
     *     "Limit" => (integer) 返回数据长度，默认为20，最大10000000
     *     "Offset" => (integer) 列表起始位置偏移量，默认为0
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 获取的防火墙组详细信息 参见 FirewallDataSet[
     *         [
     *             "FWId" => (string) 防火墙ID
     *             "GroupId" => (string) 安全组ID（即将废弃）
     *             "Name" => (string) 防火墙名称
     *             "Tag" => (string) 防火墙业务组
     *             "Remark" => (string) 防火墙备注
     *             "ResourceCount" => (integer) 防火墙绑定资源数量
     *             "CreateTime" => (integer) 防火墙组创建时间，格式为Unix Timestamp
     *             "Type" => (string) 防火墙组类型，枚举值为： "user defined", 用户自定义防火墙； "recommend web", 默认Web防火墙； "recommend non web", 默认非Web防火墙
     *             "Rule" => (array<object>) 防火墙组中的规则列表，参见 FirewallRuleSet[
     *                 [
     *                     "SrcIP" => (string) 源地址
     *                     "Priority" => (string) 优先级
     *                     "ProtocolType" => (string) 协议类型
     *                     "DstPort" => (string) 目标端口
     *                     "RuleAction" => (string) 防火墙动作
     *                     "Remark" => (string) 防火墙规则备注
     *                 ]
     *             ]
     *         ]
     *     ]
     *     "TotalCount" => (integer) 防火墙资源数量
     * ]
     *
     * @return DescribeFirewallResponse
     * @throws UCloudException
     */
    public function describeFirewall(DescribeFirewallRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeFirewallResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeFirewallResource - 获取防火墙组所绑定资源的外网IP
     *
     * See also: https://docs.ucloud.cn/api/unet-api/describe_firewall_resource
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "FWId" => (string) 防火墙ID
     *     "Limit" => (integer) 返回数据长度，默认为20，最大1000
     *     "Offset" => (integer) 列表起始位置偏移量，默认为0
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ResourceSet" => (array<object>) 资源列表，见 ResourceSet[
     *         [
     *             "Zone" => (integer) 可用区
     *             "SubResourceName" => (string) 资源绑定的虚拟网卡的名称
     *             "SubResourceId" => (string) 资源绑定的虚拟网卡的ID
     *             "SubResourceType" => (string) 资源绑定的虚拟网卡的类型，“uni”，虚拟网卡。
     *             "Name" => (string) 名称
     *             "PrivateIP" => (string) 内网IP
     *             "Remark" => (string) 备注
     *             "ResourceID" => (string) 绑定该防火墙的资源id
     *             "ResourceType" => (string) 绑定防火墙组的资源类型。"unatgw"，NAT网关； "uhost"，云主机； "upm"，物理云主机； "hadoophost"，hadoop节点； "fortresshost"，堡垒机； "udhost"，私有专区主机；"udockhost"，容器；"dbaudit"，数据库审计，“uni”，虚拟网卡。
     *             "Status" => (integer) 状态
     *             "Tag" => (string) 业务组
     *         ]
     *     ]
     *     "TotalCount" => (integer) 绑定资源总数
     * ]
     *
     * @return DescribeFirewallResourceResponse
     * @throws UCloudException
     */
    public function describeFirewallResource(DescribeFirewallResourceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeFirewallResourceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeShareBandwidth - 获取共享带宽信息
     *
     * See also: https://docs.ucloud.cn/api/unet-api/describe_share_bandwidth
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "ShareBandwidthIds" => (array<string>) 需要返回的共享带宽Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 共享带宽信息组 参见 UnetShareBandwidthSet[
     *         [
     *             "IPVersion" => (string) 共享带宽类型
     *             "ShareBandwidth" => (integer) 共享带宽值(预付费)/共享带宽峰值(后付费), 单位Mbps
     *             "ShareBandwidthId" => (string) 共享带宽的资源ID
     *             "ChargeType" => (string) 付费方式, 预付费:Year 按年,Month 按月,Dynamic 按需;后付费:PostPay(按月)
     *             "CreateTime" => (integer) 创建时间, 格式为Unix Timestamp
     *             "ExpireTime" => (integer) 过期时间, 格式为Unix Timestamp
     *             "EIPSet" => (array<object>) EIP信息,详情见 EIPSetData[
     *                 [
     *                     "Bandwidth" => (integer) EIP带宽值
     *                     "EIPAddr" => (array<object>) EIP的IP信息，详情见EIPAddrSet[
     *                         [
     *                             "OperatorName" => (string) 运营商信息, 枚举值为:  BGP: BGP; International: 国际.
     *                             "IP" => (string) 弹性IP地址
     *                         ]
     *                     ]
     *                     "EIPId" => (string) EIP资源Id
     *                 ]
     *             ]
     *             "Name" => (string) 共享带宽名称
     *         ]
     *     ]
     *     "TotalCount" => (integer) 符合条件的共享带宽总数，大于等于返回DataSet长度
     * ]
     *
     * @return DescribeShareBandwidthResponse
     * @throws UCloudException
     */
    public function describeShareBandwidth(DescribeShareBandwidthRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeShareBandwidthResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeShareBandwidthPrice - 获取共享带宽价格
     *
     * See also: https://docs.ucloud.cn/api/unet-api/describe_share_bandwidth_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ChargeType" => (string) 付费方式, 预付费:Year 按年,Month 按月,Dynamic 按需;
     *     "ShareBandwidth" => (integer) 共享带宽值
     *     "Quantity" => (integer) 购买数量
     *     "OperatorName" => (string) 香港地域支持：BGPPro和International。其他地域无需填写该字段
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalPrice" => (integer) 共享带宽总价格
     * ]
     *
     * @return DescribeShareBandwidthPriceResponse
     * @throws UCloudException
     */
    public function describeShareBandwidthPrice(DescribeShareBandwidthPriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeShareBandwidthPriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeShareBandwidthUpdatePrice - 获取共享带宽升级价格
     *
     * See also: https://docs.ucloud.cn/api/unet-api/describe_share_bandwidth_update_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ShareBandwidthId" => (string) 共享带宽Id
     *     "ShareBandwidth" => (integer) 共享带宽值
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Price" => (number) 共享带宽升降级价格
     * ]
     *
     * @return DescribeShareBandwidthUpdatePriceResponse
     * @throws UCloudException
     */
    public function describeShareBandwidthUpdatePrice(DescribeShareBandwidthUpdatePriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeShareBandwidthUpdatePriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DisassociateEIPWithShareBandwidth - 将EIP移出共享带宽
     *
     * See also: https://docs.ucloud.cn/api/unet-api/disassociate_eip_with_share_bandwidth
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "ShareBandwidthId" => (string) 共享带宽ID
     *     "Bandwidth" => (integer) 移出共享带宽后，EIP的外网带宽, 单位为Mbps. 各地域带宽范围如下：  流量计费[1-200],带宽计费[1-800]
     *     "EIPIds" => (array<string>) EIP的资源Id；默认移出该共享带宽下所有的EIP
     *     "PayMode" => (string) 移出共享带宽后，EIP的计费模式. 枚举值: "Traffic", 流量计费; "Bandwidth", 带宽计费;  默认为 "Bandwidth".
     *     "IPVersion" => (string) 共享带宽类型，IPv4或者IPv6，不传默认IPv4
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DisassociateEIPWithShareBandwidthResponse
     * @throws UCloudException
     */
    public function disassociateEIPWithShareBandwidth(DisassociateEIPWithShareBandwidthRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DisassociateEIPWithShareBandwidthResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DisassociateFirewall - 解绑资源上的防火墙
     *
     * See also: https://docs.ucloud.cn/api/unet-api/disassociate_firewall
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "FWId" => (string) 防火墙ID
     *     "ResourceId" => (string) 需要解绑的资源ID
     *     "ResourceType" => (string) 资源类型：ULB 表示负载均衡
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DisassociateFirewallResponse
     * @throws UCloudException
     */
    public function disassociateFirewall(DisassociateFirewallRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DisassociateFirewallResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetEIPPayMode - 获取弹性IP计费模式
     *
     * See also: https://docs.ucloud.cn/api/unet-api/get_eip_pay_mode
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "EIPId" => (array<string>) 弹性IP的资源Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "EIPPayMode" => (array<object>) EIP的计费模式, 参见 EIPPayModeSet[
     *         [
     *             "EIPId" => (string) EIP的资源ID
     *             "EIPPayMode" => (string) EIP的计费模式. 枚举值为：Bandwidth, 带宽计费;Traffic, 流量计费; "ShareBandwidth",共享带宽模式
     *         ]
     *     ]
     * ]
     *
     * @return GetEIPPayModeResponse
     * @throws UCloudException
     */
    public function getEIPPayMode(GetEIPPayModeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetEIPPayModeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetEIPPrice - 获取弹性IP价格
     *
     * See also: https://docs.ucloud.cn/api/unet-api/get_eip_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "OperatorName" => (string) 弹性IP的线路如下: 国际: International BGP: Bgp 各地域允许的线路参数如下: cn-sh1: Bgp cn-sh2: Bgp cn-gd: Bgp cn-bj1: Bgp cn-bj2: Bgp hk: International us-ca: International th-bkk: International kr-seoul:International us-ws:International ge-fra:International sg:International tw-kh:International.其他海外线路均为 International,泉州为移动单线cn-qz:ChinaMobile
     *     "Bandwidth" => (integer) 弹性IP的外网带宽, 单位为Mbps, 范围 [0-800]
     *     "ChargeType" => (string) 付费方式, 枚举值为: Year, 按年付费; Month, 按月付费; Dynamic, 按时付费; 默认为获取三种价格
     *     "PayMode" => (string) 弹性IP计费方式r. 枚举值为: Traffic, 流量计费; Bandwidth, 带宽计费; "ShareBandwidth",共享带宽模式. 默认为Bandwidth
     *     "Quantity" => (integer) 购买时长。默认: 1。按小时购买(Dynamic)时无需此参数。 月付时，此参数传0，代表了购买至月末
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "PriceSet" => (array<object>) 弹性IP价格详情 详情见 EIPPriceDetailSet[
     *         [
     *             "ChargeType" => (string) 弹性IP付费方式
     *             "Price" => (number) 购买弹性IP的实际价格, 单位"元"
     *             "OriginalPrice" => (number) 弹性IP的原价，单位“元”
     *             "PurchaseValue" => (integer) 资源有效期, 以Unix Timestamp表示
     *         ]
     *     ]
     * ]
     *
     * @return GetEIPPriceResponse
     * @throws UCloudException
     */
    public function getEIPPrice(GetEIPPriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetEIPPriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetEIPUpgradePrice - 获取弹性IP带宽改动价格
     *
     * See also: https://docs.ucloud.cn/api/unet-api/get_eip_upgrade_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "EIPId" => (string) 弹性IP的资源ID
     *     "Bandwidth" => (integer) 弹性IP的外网带宽, 单位为Mbps, 范围 [1-800]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Price" => (number) 调整带宽后的EIP价格, 单位为"元", 如需退费此处为负值
     * ]
     *
     * @return GetEIPUpgradePriceResponse
     * @throws UCloudException
     */
    public function getEIPUpgradePrice(GetEIPUpgradePriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetEIPUpgradePriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetThroughputDailyBillingInfo - 获取流量计费EIP每日流量计费信息
     *
     * See also: https://docs.ucloud.cn/api/unet-api/get_throughput_daily_billing_info
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "EIPId" => (string) EIP的资源ID
     *     "StartTime" => (integer) 查询开始时间时间戳
     *     "EndTime" => (integer) 查询结束时间时间戳
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Stats" => (array<object>) EIP流量计费信息，详见模型ThroughputDailyBillingInfo[
     *         [
     *             "StartTime" => (integer) 计费开始时间
     *             "EndTime" => (integer) 计费结束时间
     *             "QuantityOut" => (integer) 计费流量，单位“GB”
     *             "BillingState" => (string) 是否已计费，“Yes”或者“No”
     *         ]
     *     ]
     *     "TotalOut" => (integer) 计费总流量
     *     "EIPId" => (string) 资源ID
     * ]
     *
     * @return GetThroughputDailyBillingInfoResponse
     * @throws UCloudException
     */
    public function getThroughputDailyBillingInfo(GetThroughputDailyBillingInfoRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetThroughputDailyBillingInfoResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GrantFirewall - 将防火墙应用到资源上
     *
     * See also: https://docs.ucloud.cn/api/unet-api/grant_firewall
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "FWId" => (string) 防火墙资源ID
     *     "ResourceType" => (string) 绑定防火墙组的资源类型，默认为全部资源类型。枚举值为："unatgw"，NAT网关； "uhost"，云主机； "upm"，物理云主机； "hadoophost"，hadoop节点； "fortresshost"，堡垒机； "udhost"，私有专区主机；"udockhost"，容器；"dbaudit"，数据库审计，”uni“，虚拟网卡，“cube”，Cube容器实例。
     *     "ResourceId" => (string) 所应用资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return GrantFirewallResponse
     * @throws UCloudException
     */
    public function grantFirewall(GrantFirewallRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GrantFirewallResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyEIPBandwidth - 调整弹性IP的外网带宽
     *
     * See also: https://docs.ucloud.cn/api/unet-api/modify_eip_bandwidth
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "EIPId" => (string) 弹性IP的资源ID
     *     "Bandwidth" => (integer) 弹性IP的外网带宽, 单位为Mbps. 各地域的带宽值范围如下：流量计费[1-200],带宽计费[1-800]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ModifyEIPBandwidthResponse
     * @throws UCloudException
     */
    public function modifyEIPBandwidth(ModifyEIPBandwidthRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyEIPBandwidthResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyEIPWeight - 修改弹性IP的外网出口权重
     *
     * See also: https://docs.ucloud.cn/api/unet-api/modify_eip_weight
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "EIPId" => (string) 弹性IP的资源ID
     *     "Weight" => (integer) 外网出口权重, 范围[0-100] 取值为0时, 该弹性IP不会被使用. 取值为100时, 同主机下只会使用这个弹性IP，其他弹性IP不会被使用 请勿将多个绑定在同一资源的弹性IP设置为相同权重
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ModifyEIPWeightResponse
     * @throws UCloudException
     */
    public function modifyEIPWeight(ModifyEIPWeightRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyEIPWeightResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ReleaseEIP - 释放弹性IP资源, 所释放弹性IP必须为非绑定状态.
     *
     * See also: https://docs.ucloud.cn/api/unet-api/release_eip
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "EIPId" => (string) 弹性IP的资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ReleaseEIPResponse
     * @throws UCloudException
     */
    public function releaseEIP(ReleaseEIPRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ReleaseEIPResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ReleaseShareBandwidth - 关闭共享带宽
     *
     * See also: https://docs.ucloud.cn/api/unet-api/release_share_bandwidth
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "ShareBandwidthId" => (string) 共享带宽ID
     *     "EIPBandwidth" => (integer) 关闭共享带宽后，各EIP恢复为的带宽值
     *     "PayMode" => (string) 默认为 Bandwidth 带宽计费
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ReleaseShareBandwidthResponse
     * @throws UCloudException
     */
    public function releaseShareBandwidth(ReleaseShareBandwidthRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ReleaseShareBandwidthResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ResizeShareBandwidth - 调整共享带宽的带宽值
     *
     * See also: https://docs.ucloud.cn/api/unet-api/resize_share_bandwidth
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ShareBandwidth" => (integer) 带宽值，单位为Mb，范围 [20-5000] (最大值受地域限制)
     *     "ShareBandwidthId" => (string) 共享带宽的Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ResizeShareBandwidthResponse
     * @throws UCloudException
     */
    public function resizeShareBandwidth(ResizeShareBandwidthRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ResizeShareBandwidthResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * SetEIPPayMode - 设置弹性IP计费模式, 切换时会涉及付费/退费.
     *
     * See also: https://docs.ucloud.cn/api/unet-api/set_eip_pay_mode
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "EIPId" => (string) 弹性IP的资源Id
     *     "PayMode" => (string) 计费模式. 枚举值："Traffic", 流量计费模式; "Bandwidth", 带宽计费模式
     *     "Bandwidth" => (integer) 调整的目标带宽值, 单位Mbps. 各地域的带宽值范围如下: 流量计费[1-200],其余情况[1-800]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return SetEIPPayModeResponse
     * @throws UCloudException
     */
    public function setEIPPayMode(SetEIPPayModeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new SetEIPPayModeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UnBindEIP - 将弹性IP从资源上解绑
     *
     * See also: https://docs.ucloud.cn/api/unet-api/un_bind_eip
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "EIPId" => (string) 弹性IP的资源Id
     *     "ResourceType" => (string) 弹性IP请求解绑的资源类型, 枚举值为: uhost: 云主机; ulb, 负载均衡器 upm: 物理机; hadoophost: 大数据集群;fortresshost：堡垒机；udockhost：容器；udhost：私有专区主机；natgw：NAT网关；udb：udb；vpngw：ipsec vpn；ucdr：云灾备；dbaudit：数据库审计；
     *     "ResourceId" => (string) 弹性IP请求解绑的资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UnBindEIPResponse
     * @throws UCloudException
     */
    public function unBindEIP(UnBindEIPRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UnBindEIPResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateEIPAttribute - 更新弹性IP名称，业务组，备注等属性字段
     *
     * See also: https://docs.ucloud.cn/api/unet-api/update_eip_attribute
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "EIPId" => (string) EIP资源ID
     *     "Name" => (string) 名字（Name Tag Remark都为空则报错）
     *     "Tag" => (string) 业务
     *     "Remark" => (string) 备注
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateEIPAttributeResponse
     * @throws UCloudException
     */
    public function updateEIPAttribute(UpdateEIPAttributeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateEIPAttributeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateFirewall - 更新防火墙规则
     *
     * See also: https://docs.ucloud.cn/api/unet-api/update_firewall
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "FWId" => (string) 防火墙资源ID
     *     "Rule" => (array<string>) 防火墙规则，例如：TCP|22|192.168.1.1/22|DROP|LOW|禁用22端口，第一个参数代表协议：第二个参数代表端口号，第三个参数为ip，第四个参数为ACCEPT（接受）和DROP（拒绝），第五个参数优先级：HIGH（高），MEDIUM（中），LOW（低），第六个参数为该条规则的自定义备注
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "FWId" => (string) 防火墙id
     * ]
     *
     * @return UpdateFirewallResponse
     * @throws UCloudException
     */
    public function updateFirewall(UpdateFirewallRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateFirewallResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateFirewallAttribute - 更新防火墙规则
     *
     * See also: https://docs.ucloud.cn/api/unet-api/update_firewall_attribute
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "FWId" => (string) 防火墙资源ID
     *     "Name" => (string) 防火墙名称，默认为空，为空则不做修改。Name,Tag,Remark必须填写1个及以上
     *     "Tag" => (string) 防火墙业务组，默认为空，为空则不做修改。Name,Tag,Remark必须填写1个及以上
     *     "Remark" => (string) 防火墙备注，默认为空，为空则不做修改。Name,Tag,Remark必须填写1个及以上
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateFirewallAttributeResponse
     * @throws UCloudException
     */
    public function updateFirewallAttribute(UpdateFirewallAttributeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateFirewallAttributeResponse($resp->toArray(), $resp->getRequestId());
    }
}
