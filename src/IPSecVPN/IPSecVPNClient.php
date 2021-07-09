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
namespace UCloud\IPSecVPN;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\IPSecVPN\Apis\CreateRemoteVPNGatewayRequest;
use UCloud\IPSecVPN\Apis\CreateRemoteVPNGatewayResponse;
use UCloud\IPSecVPN\Apis\CreateVPNGatewayRequest;
use UCloud\IPSecVPN\Apis\CreateVPNGatewayResponse;
use UCloud\IPSecVPN\Apis\CreateVPNTunnelRequest;
use UCloud\IPSecVPN\Apis\CreateVPNTunnelResponse;
use UCloud\IPSecVPN\Apis\DeleteRemoteVPNGatewayRequest;
use UCloud\IPSecVPN\Apis\DeleteRemoteVPNGatewayResponse;
use UCloud\IPSecVPN\Apis\DeleteVPNGatewayRequest;
use UCloud\IPSecVPN\Apis\DeleteVPNGatewayResponse;
use UCloud\IPSecVPN\Apis\DeleteVPNTunnelRequest;
use UCloud\IPSecVPN\Apis\DeleteVPNTunnelResponse;
use UCloud\IPSecVPN\Apis\DescribeRemoteVPNGatewayRequest;
use UCloud\IPSecVPN\Apis\DescribeRemoteVPNGatewayResponse;
use UCloud\IPSecVPN\Apis\DescribeVPNGatewayRequest;
use UCloud\IPSecVPN\Apis\DescribeVPNGatewayResponse;
use UCloud\IPSecVPN\Apis\DescribeVPNTunnelRequest;
use UCloud\IPSecVPN\Apis\DescribeVPNTunnelResponse;
use UCloud\IPSecVPN\Apis\GetVPNGatewayPriceRequest;
use UCloud\IPSecVPN\Apis\GetVPNGatewayPriceResponse;
use UCloud\IPSecVPN\Apis\GetVPNGatewayUpgradePriceRequest;
use UCloud\IPSecVPN\Apis\GetVPNGatewayUpgradePriceResponse;
use UCloud\IPSecVPN\Apis\UpdateVPNGatewayRequest;
use UCloud\IPSecVPN\Apis\UpdateVPNGatewayResponse;
use UCloud\IPSecVPN\Apis\UpdateVPNTunnelAttributeRequest;
use UCloud\IPSecVPN\Apis\UpdateVPNTunnelAttributeResponse;

/**
 * This client is used to call actions of **IPSecVPN** service
 */
class IPSecVPNClient extends Client {

    /**
     * CreateRemoteVPNGateway - 创建客户VPN网关
     *
     * See also: https://docs.ucloud.cn/api/IPSecVPN-api/create_remote_vpn_gateway
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "RemoteVPNGatewayName" => (string) 客户VPN网关名称
     *     "RemoteVPNGatewayAddr" => (string) 客户VPN网关地址
     *     "Tag" => (string) 业务组名称，默认为 "Default"
     *     "Remark" => (string) 备注，默认为空
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "RemoteVPNGatewayId" => (string) 新建客户VPN网关的资源ID
     * ]
     *
     * @throws UCloudException
     */
    public function createRemoteVPNGateway(CreateRemoteVPNGatewayRequest $request = null): CreateRemoteVPNGatewayResponse {
        $resp = $this->invoke($request);
        return new CreateRemoteVPNGatewayResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateVPNGateway - 创建VPN网关
     *
     * See also: https://docs.ucloud.cn/api/IPSecVPN-api/create_vpn_gateway
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "VPNGatewayName" => (string) 新建VPN网关名称
     *     "VPCId" => (string) 新建VPN网关所属VPC的资源ID
     *     "Grade" => (string) 购买的VPN网关规格，枚举值为: Standard, 标准型; Enhanced, 增强型
     *     "Remark" => (string) 备注，默认为空
     *     "Tag" => (string) 业务组名称，默认为 "Default"
     *     "Quantity" => (integer) 购买时长, 默认: 1
     *     "ChargeType" => (string) 付费方式, 枚举值为: Year, 按年付费; Month, 按月付费；Dynamic, 按需付费(需开启权限)；Trial, 试用(需开启权限)；默认为按月付费
     *     "BusinessId" => (string) 业务组ID
     *     "EIPId" => (string) 若要绑定EIP，在此填上EIP的资源ID
     *     "CouponId" => (string) 代金券ID, 默认不使用
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "VPNGatewayId" => (string) 新建VPN网关的资源ID
     * ]
     *
     * @throws UCloudException
     */
    public function createVPNGateway(CreateVPNGatewayRequest $request = null): CreateVPNGatewayResponse {
        $resp = $this->invoke($request);
        return new CreateVPNGatewayResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateVPNTunnel - 创建VPN隧道
     *
     * See also: https://docs.ucloud.cn/api/IPSecVPN-api/create_vpn_tunnel
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "VPNTunnelName" => (string) VPN隧道名称
     *     "VPNGatewayId" => (string) VPN网关的资源ID
     *     "RemoteVPNGatewayId" => (string) 客户VPN网关的资源ID
     *     "IKEPreSharedKey" => (string) 预共享密钥
     *     "VPCId" => (string) vpcId
     *     "IPSecLocalSubnetIds" => (array<string>) 指定VPN连接的本地子网的资源ID，最多可填写10个。
     *     "IPSecRemoteSubnets" => (array<string>) 指定VPN连接的客户网段，最多可填写20个。
     *     "IKEVersion" => (string) ike版本，枚举值： "IKE V1"，"IKE V2"，默认v1
     *     "Tag" => (string) 业务组，默认为“Default”
     *     "Remark" => (string) 备注，默认为空
     *     "IKEEncryptionAlgorithm" => (string) IKE协商过程中使用的加密算法，枚举值，"aes128", "aes192", "aes256", "aes512", "3des"。默认值为“aes128”
     *     "IKEAuthenticationAlgorithm" => (string) IKE协商过程中使用的认证算法，"md5", "sha1", "sha2-256"。默认值为“sha1”
     *     "IKEExchangeMode" => (string) IKE协商过程中使用的模式，枚举值，主模式，“main”；野蛮模式，“aggressive”。IKEV1默认为主模式“main”，IKEV2时不使用该参数。
     *     "IKELocalId" => (string) 本端标识。枚举值，自动识别，“auto”；IP地址或域名。默认为自动识别“auto”。IKEV2必填该参数
     *     "IKERemoteId" => (string) 客户端标识。枚举值，自动识别，“auto”；IP地址或域名。默认为“自动识别“auto”。IKEV2必填该参数
     *     "IKEDhGroup" => (string) IKE协商过程中使用的DH组，枚举值，"1", "2", "5", "14", "15", "16"。默认为“15”
     *     "IKESALifetime" => (string) IKE中SA的生存时间，可填写范围为600-604800。默认为86400。
     *     "IPSecProtocol" => (string) 使用的安全协议，枚举值，“esp”，“ah”。默认为“esp”
     *     "IPSecEncryptionAlgorithm" => (string) IPSec隧道中使用的加密算法，枚举值，"aes128", "aes192", "aes256", "aes512", "3des"。默认值为“aes128”
     *     "IPSecAuthenticationAlgorithm" => (string) IPSec隧道中使用的认证算法，枚举值，"md5", "sha1"。默认值为“sha1”
     *     "IPSecSALifetime" => (string) IPSec中SA的生存时间，可填写范围为1200 - 604800。默认为3600
     *     "IPSecSALifetimeBytes" => (string) IPSec中SA的生存时间（以字节计）。可选为8000 – 20000000。默认使用SA生存时间，
     *     "IPSecPFSDhGroup" => (string) IPSec的PFS是否开启，枚举值，，不开启，"disable"；数字表示DH组, "1", "2", "5", "14", "15", "16"。默认为“disable”。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "VPNTunnelId" => (string) VPN隧道的资源ID
     * ]
     *
     * @throws UCloudException
     */
    public function createVPNTunnel(CreateVPNTunnelRequest $request = null): CreateVPNTunnelResponse {
        $resp = $this->invoke($request);
        return new CreateVPNTunnelResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteRemoteVPNGateway - 删除客户VPN网关
     *
     * See also: https://docs.ucloud.cn/api/IPSecVPN-api/delete_remote_vpn_gateway
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "RemoteVPNGatewayId" => (string) 客户VPN网关的资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function deleteRemoteVPNGateway(DeleteRemoteVPNGatewayRequest $request = null): DeleteRemoteVPNGatewayResponse {
        $resp = $this->invoke($request);
        return new DeleteRemoteVPNGatewayResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteVPNGateway - 删除VPN网关
     *
     * See also: https://docs.ucloud.cn/api/IPSecVPN-api/delete_vpn_gateway
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "VPNGatewayId" => (string) VPN网关的资源ID
     *     "ReleaseEip" => (boolean) 删除VPN时是否一并释放EIP。false，只解绑EIP不删除EIP；true，解绑并释放EIP。默认是false
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function deleteVPNGateway(DeleteVPNGatewayRequest $request = null): DeleteVPNGatewayResponse {
        $resp = $this->invoke($request);
        return new DeleteVPNGatewayResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteVPNTunnel - 删除VPN隧道
     *
     * See also: https://docs.ucloud.cn/api/IPSecVPN-api/delete_vpn_tunnel
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "VPNTunnelId" => (string) VPN隧道的资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function deleteVPNTunnel(DeleteVPNTunnelRequest $request = null): DeleteVPNTunnelResponse {
        $resp = $this->invoke($request);
        return new DeleteVPNTunnelResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeRemoteVPNGateway - 获取客户VPN网关信息
     *
     * See also: https://docs.ucloud.cn/api/IPSecVPN-api/describe_remote_vpn_gateway
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "RemoteVPNGatewayIds" => (array<string>) 客户VPN网关的资源ID，例如RemoteVPNGatewayIds.0代表希望获取客户VPN网关1的信息，RemoteVPNGatewayIds.1代表客户VPN网关2，如果为空，则返回当前Region中所有客户VPN网关实例的信息
     *     "Tag" => (string) 业务组名称，若指定则返回业务组下所有客户VPN网关信息
     *     "Offset" => (integer) 数据偏移量, 默认为0
     *     "Limit" => (integer) 数据分页值, 默认为20
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 符合条件的客户VPN网关总数
     *     "DataSet" => (array<object>) 客户VPN网关列表, 每项参数详见 RemoteVPNGatewayDataSet[
     *         [
     *             "RemoteVPNGatewayId" => (string) 客户网关ID
     *             "RemoteVPNGatewayName" => (string) 客户网关名称
     *             "RemoteVPNGatewayAddr" => (string) 客户网关IP地址
     *             "Tag" => (string) 用户组
     *             "Remark" => (string) 备注
     *             "CreateTime" => (integer) 创建时间
     *             "TunnelCount" => (integer) 活跃的隧道数量
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function describeRemoteVPNGateway(DescribeRemoteVPNGatewayRequest $request = null): DescribeRemoteVPNGatewayResponse {
        $resp = $this->invoke($request);
        return new DescribeRemoteVPNGatewayResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeVPNGateway - 获取VPN网关信息
     *
     * See also: https://docs.ucloud.cn/api/IPSecVPN-api/describe_vpn_gateway
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "VPNGatewayIds" => (array<string>) VPN网关的资源ID，例如VPNGatewayIds.0代表希望获取VPN网关1的信息，VPNGatewayIds.1代表VPN网关2，如果为空，则返回当前Region中所有VPN网关的信息
     *     "VPCId" => (string) VPC的资源ID，返回指定的VPC下的所有VPN网关的信息。默认返回当前Region中所有VPN网关实例的信息
     *     "Offset" => (integer) 数据偏移量。默认为0
     *     "Tag" => (string) 业务组名称，若指定则返回指定的业务组下的所有VPN网关的信息。
     *     "Limit" => (integer) 数据分页值。默认为20
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 满足条件的VPN网关总数
     *     "DataSet" => (array<object>) 获取的VPN网关信息列表，每项参数详见 VPNGatewayDataSet[
     *         [
     *             "VPNGatewayId" => (string) 网关Id
     *             "VPNGatewayName" => (string) 网关名字
     *             "Tag" => (string) 网关业务组
     *             "Remark" => (string) 网关备注
     *             "VPCId" => (string) 所属VPCId
     *             "VPCName" => (string) 所属VPC名字
     *             "ChargeType" => (string) 付费类型
     *             "CreateTime" => (integer) 创建时间
     *             "ExpireTime" => (integer) 到期时间
     *             "AutoRenew" => (string) 是否自动续费
     *             "Grade" => (string) 网关类型
     *             "EIP" => (string) 绑定EIP的IP地址
     *             "EIPType" => (string) EIP类型
     *             "EIPId" => (string) EIPID
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function describeVPNGateway(DescribeVPNGatewayRequest $request = null): DescribeVPNGatewayResponse {
        $resp = $this->invoke($request);
        return new DescribeVPNGatewayResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeVPNTunnel - 获取VPN隧道信息
     *
     * See also: https://docs.ucloud.cn/api/IPSecVPN-api/describe_vpn_tunnel
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "VPNTunnelIds" => (array<string>) VPN隧道的资源ID，例如VPNTunnelIds.0代表希望获取信息的VPN隧道1，VPNTunneIds.1代表VPN隧道2，如果为空，则返回当前Region中所有的VPN隧道实例
     *     "Offset" => (integer) 数据偏移量, 默认为0
     *     "Limit" => (integer) 数据分页值, 默认为20
     *     "Tag" => (string) 业务组名称，若指定则返回指定的业务组下的所有VPN网关的信息
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) VPN隧道总数
     *     "DataSet" => (array<object>) 获取的VPN隧道信息列表，每项参数详见 VPNTunnelDataSet[
     *         [
     *             "VPNTunnelId" => (string) 隧道id
     *             "VPNTunnelName" => (string) 隧道名称
     *             "Tag" => (string) 用户组
     *             "Remark" => (string) 备注
     *             "VPNGatewayId" => (string) 所属VPN网关id
     *             "RemoteVPNGatewayId" => (string) 对端网关Id
     *             "VPNGatewayName" => (string) VPN网关名字
     *             "RemoteVPNGatewayName" => (string) 对端网关名字
     *             "VPCId" => (string) 所属VPCId
     *             "VPCName" => (string) 所属VOC名字
     *             "CreateTime" => (integer) 创建时间
     *             "IKEData" => (object) IKE参数[
     *                 "IKEAuthenticationAlgorithm" => (string) IKE认证算法
     *                 "IKEDhGroup" => (string) IKEDH组
     *                 "IKEEncryptionAlgorithm" => (string) IKE加密算法
     *                 "IKEExchangeMode" => (string) IKEv1协商模式
     *                 "IKELocalId" => (string) IKE本地ID标识
     *                 "IKEPreSharedKey" => (string) IKE预共享秘钥
     *                 "IKERemoteId" => (string) IKE对端ID标识
     *                 "IKESALifetime" => (string) IKE秘钥生存时间
     *                 "IKEVersion" => (string) IKE版本
     *             ]
     *             "IPSecData" => (object) IPSec参数[
     *                 "IPSecAuthenticationAlgorithm" => (string) IPSec通道中使用的认证算法
     *                 "IPSecEncryptionAlgorithm" => (string) IPSec通道中使用的加密算法
     *                 "IPSecLocalSubnetIds" => (array<string>) 指定VPN连接的本地子网，用逗号分隔
     *                 "IPSecProtocol" => (string) 使用的安全协议，ESP或AH
     *                 "IPSecRemoteSubnets" => (array<string>) 指定VPN连接的客户网段，用逗号分隔
     *                 "IPSecSALifetime" => (string) IPSec中SA的生存时间
     *                 "IPSecSALifetimeBytes" => (string) IPSec中SA的生存时间（以字节计）
     *                 "IPSecPFSDhGroup" => (string) 是否开启PFS功能,Disable表示关闭，数字表示DH组
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function describeVPNTunnel(DescribeVPNTunnelRequest $request = null): DescribeVPNTunnelResponse {
        $resp = $this->invoke($request);
        return new DescribeVPNTunnelResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetVPNGatewayPrice - 获取VPN价格
     *
     * See also: https://docs.ucloud.cn/api/IPSecVPN-api/get_vpn_gateway_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "Grade" => (string) VPN网关规格。枚举值，包括：标准型：Standard，增强型：Enhanced。
     *     "ChargeType" => (string) 付费方式, 枚举值为: Year, 按年付费; Month, 按月付费; Dynamic, 按需付费(需开启权限); 默认为获取三种价格
     *     "Quantity" => (integer) 购买时长, 默认: 1
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "PriceSet" => (array<object>) 获取的VPN网关价格信息列表，每项参数详见 VPNGatewayPriceSet[
     *         [
     *             "ChargeType" => (string) VPN网关付费方式
     *             "Price" => (number) VPN网关价格, 单位"元"
     *             "PurchaseValue" => (integer) 资源有效期, 以Unix Timestamp表示
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function getVPNGatewayPrice(GetVPNGatewayPriceRequest $request = null): GetVPNGatewayPriceResponse {
        $resp = $this->invoke($request);
        return new GetVPNGatewayPriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetVPNGatewayUpgradePrice - 获取VPN网关规格改动价格
     *
     * See also: https://docs.ucloud.cn/api/IPSecVPN-api/get_vpn_gateway_upgrade_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "VPNGatewayId" => (string) VPN网关的资源ID
     *     "Grade" => (string) 更改的VPN网关规格，枚举值为: Standard, 标准型; Enhanced, 增强型。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Price" => (number) 调整规格后的VPN网关价格, 单位为"元", 如需退费此处为负值
     * ]
     *
     * @throws UCloudException
     */
    public function getVPNGatewayUpgradePrice(GetVPNGatewayUpgradePriceRequest $request = null): GetVPNGatewayUpgradePriceResponse {
        $resp = $this->invoke($request);
        return new GetVPNGatewayUpgradePriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateVPNGateway - 更改VPN网关规格
     *
     * See also: https://docs.ucloud.cn/api/IPSecVPN-api/update_vpn_gateway
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "VPNGatewayId" => (string) VPN网关的资源ID
     *     "Grade" => (string) 网关规格。枚举值为: Standard, 标准型; Enhanced, 增强型。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function updateVPNGateway(UpdateVPNGatewayRequest $request = null): UpdateVPNGatewayResponse {
        $resp = $this->invoke($request);
        return new UpdateVPNGatewayResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateVPNTunnelAttribute - 更新VPN隧道属性
     *
     * See also: https://docs.ucloud.cn/api/IPSecVPN-api/update_vpn_tunnel_attribute
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "VPNTunnelId" => (string) VPN隧道的资源ID
     *     "IKEPreSharedKey" => (string) 预共享密钥
     *     "IKEEncryptionAlgorithm" => (string) IKE协商过程中使用的加密算法
     *     "IKEAuthenticationAlgorithm" => (string) IKE协商过程中使用的认证算法
     *     "IKEExchangeMode" => (string) IKE协商过程中使用的模式，可选“主动模式”与“野蛮模式”。IKEV2不使用该参数。
     *     "IKELocalId" => (string) 本端标识。不填时默认使用之前的参数，结合IKEversion进行校验，IKEV2时不能为auto。
     *     "IKERemoteId" => (string) 客户端标识。不填时默认使用之前的参数，结合IKEversion进行校验，IKEV2时不能为auto。
     *     "IKEDhGroup" => (string) IKE协商过程中使用的DH组
     *     "IKESALifetime" => (string) IKE中SA的生存时间
     *     "IPSecProtocol" => (string) 使用的安全协议，ESP或AH
     *     "IPSecLocalSubnetIds" => (array<string>) 指定VPN连接的本地子网的id，用逗号分隔
     *     "IPSecRemoteSubnets" => (array<string>) 指定VPN连接的客户网段，用逗号分隔
     *     "IPSecEncryptionAlgorithm" => (string) IPSec隧道中使用的加密算法
     *     "IPSecAuthenticationAlgorithm" => (string) IPSec隧道中使用的认证算法
     *     "IPSecSALifetime" => (string) IPSec中SA的生存时间
     *     "IPSecSALifetimeBytes" => (string) IPSec中SA的生存时间（以字节计）
     *     "IPSecPFSDhGroup" => (string) IPSec中的PFS是否开启
     *     "IKEVersion" => (string) 枚举值："IKE V1","IKE V2"
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function updateVPNTunnelAttribute(UpdateVPNTunnelAttributeRequest $request = null): UpdateVPNTunnelAttributeResponse {
        $resp = $this->invoke($request);
        return new UpdateVPNTunnelAttributeResponse($resp->toArray(), $resp->getRequestId());
    }
}
