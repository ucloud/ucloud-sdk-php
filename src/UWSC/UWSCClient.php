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
namespace UCloud\UWSC;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\UWSC\Apis\AddExportLineRulesRequest;
use UCloud\UWSC\Apis\AddExportLineRulesResponse;
use UCloud\UWSC\Apis\BindCPERequest;
use UCloud\UWSC\Apis\BindCPEResponse;
use UCloud\UWSC\Apis\CreateCEGatewayRequest;
use UCloud\UWSC\Apis\CreateCEGatewayResponse;
use UCloud\UWSC\Apis\CreateCETunnelRequest;
use UCloud\UWSC\Apis\CreateCETunnelResponse;
use UCloud\UWSC\Apis\CreateCPERequest;
use UCloud\UWSC\Apis\CreateCPEResponse;
use UCloud\UWSC\Apis\CreateExportLineRequest;
use UCloud\UWSC\Apis\CreateExportLineResponse;
use UCloud\UWSC\Apis\CreatePOPGWRequest;
use UCloud\UWSC\Apis\CreatePOPGWResponse;
use UCloud\UWSC\Apis\DeleteCEGatewayRequest;
use UCloud\UWSC\Apis\DeleteCEGatewayResponse;
use UCloud\UWSC\Apis\DeleteCETunnelRequest;
use UCloud\UWSC\Apis\DeleteCETunnelResponse;
use UCloud\UWSC\Apis\DeleteExportLineRequest;
use UCloud\UWSC\Apis\DeleteExportLineResponse;
use UCloud\UWSC\Apis\DeleteExportLineRulesRequest;
use UCloud\UWSC\Apis\DeleteExportLineRulesResponse;
use UCloud\UWSC\Apis\DeletePOPGWRequest;
use UCloud\UWSC\Apis\DeletePOPGWResponse;
use UCloud\UWSC\Apis\DescribeCEGatewayRequest;
use UCloud\UWSC\Apis\DescribeCEGatewayResponse;
use UCloud\UWSC\Apis\DescribeCETunnelRequest;
use UCloud\UWSC\Apis\DescribeCETunnelResponse;
use UCloud\UWSC\Apis\DescribeCPERequest;
use UCloud\UWSC\Apis\DescribeCPEResponse;
use UCloud\UWSC\Apis\DescribeExportLineRequest;
use UCloud\UWSC\Apis\DescribeExportLineResponse;
use UCloud\UWSC\Apis\DescribeExportLineRulesRequest;
use UCloud\UWSC\Apis\DescribeExportLineRulesResponse;
use UCloud\UWSC\Apis\DescribePOPGWRequest;
use UCloud\UWSC\Apis\DescribePOPGWResponse;
use UCloud\UWSC\Apis\ListAvailableRegionRequest;
use UCloud\UWSC\Apis\ListAvailableRegionResponse;
use UCloud\UWSC\Apis\UpdateBWPackageRequest;
use UCloud\UWSC\Apis\UpdateBWPackageResponse;
use UCloud\UWSC\Apis\UpdateCEGatewayRequest;
use UCloud\UWSC\Apis\UpdateCEGatewayResponse;
use UCloud\UWSC\Apis\UpdateCETunnelRequest;
use UCloud\UWSC\Apis\UpdateCETunnelResponse;
use UCloud\UWSC\Apis\UpdateCETunnelAttributeRequest;
use UCloud\UWSC\Apis\UpdateCETunnelAttributeResponse;
use UCloud\UWSC\Apis\UpdateExportLineRequest;
use UCloud\UWSC\Apis\UpdateExportLineResponse;
use UCloud\UWSC\Apis\UpdatePOPGWAttributeRequest;
use UCloud\UWSC\Apis\UpdatePOPGWAttributeResponse;
use UCloud\UWSC\Apis\UpgradeExportLineRequest;
use UCloud\UWSC\Apis\UpgradeExportLineResponse;

/**
 * This client is used to call actions of **UWSC** service
 */
class UWSCClient extends Client
{

    /**
     * AddExportLineRules - 添加加速规则
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/add_export_line_rules
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ResourceId" => (string) UReach资源ID
     *     "RuleTypes" => (array<string>) 白名单类型：Developer、CrossBorder
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return AddExportLineRulesResponse
     * @throws UCloudException
     */
    public function addExportLineRules(AddExportLineRulesRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AddExportLineRulesResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * BindCPE - 绑定 CPE
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/bind_cpe
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CPEId" => (string) cpe id
     *     "Sn" => (string) sn id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return BindCPEResponse
     * @throws UCloudException
     */
    public function bindCPE(BindCPERequest $request = null)
    {
        $resp = $this->invoke($request);
        return new BindCPEResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateCEGateway - 创建CE客户网关
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/create_ce_gateway
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "PopGwId" => (string) 所属UWAN虚拟路由器资源ID
     *     "PublicIp" => (string) 客户自有公网IP
     *     "IpType" => (string) IP类型 枚举值：静态IP(Static) | 动态IP(Dynamic)
     *     "Name" => (string) 资源名称
     *     "Remark" => (string) 备注
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "VPNId" => (string) 客户网关资源 ID
     *     "RequestId" => (string) 请求 ID
     * ]
     *
     * @return CreateCEGatewayResponse
     * @throws UCloudException
     */
    public function createCEGateway(CreateCEGatewayRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateCEGatewayResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateCETunnel - 创建隧道
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/create_ce_tunnel
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPNId" => (string) 所属CE网关资源ID
     *     "IKEConf" => (object) [
     *         "PreSharedKey" => (string) IKE 共享密钥
     *         "Version" => (string) IKE 版本，取值： "ike v1"，"ike v2"
     *         "ExchangeMode" => (string) IKE 协商模式，主模式(main)/野蛮模式(aggressive)，IKE V2时不使用该参数
     *         "EncryptionAlgorithm" => (string) IKE 加密算法，取值："aes128", "aes192", "aes256", "aes512", "3des"
     *         "AuthenticationAlgorithm" => (string) IKE 认证算法，取值："md5", "sha1", "sha2-256"
     *         "DhGroup" => (string) DH group，指定IKE交换密钥时使用的DH组。取值："1", "2", "5", "14", "15", "16"
     *         "LocalId" => (string) 本端标识，取值：“auto”，“<ip-address>”
     *         "RemoteId" => (string) 对端标识，取值：“auto”，“<ip-address>”
     *         "SALifeTime" => (string) IKE SA的生存周期，取值范围：600-604800
     *     ]
     *     "IPSecConf" => (object) [
     *         "CENetwork" => (array<string>) 需要和 VPC 互通的本地数据中心侧的网段，用于第二阶段协商。
     *         "Protocol" => (string) IPSec 安全协议，取值：“esp”，“ah”
     *         "EncryptionAlgorithm" => (string) IPSec 加密算法，取值："aes128", "aes192", "aes256", "aes512", "3des"
     *         "AuthenticationAlgorithm" => (string) 第二阶段协商的认证算法。取值：md5、sha1、sha2-256。
     *         "PFSDhGroup" => (string) 第二阶段协商使用的 Diffie-Hellman 密钥交换算法。取值：disabled、1、2、5、14、15、16。
     *         "SALifeTime" => (string) 第二阶段协商出的 SA 的生存周期。单位：秒。取值范围：1200~604800
     *         "SALifetimeBytes" => (string) 第二阶段协商出的 SA 的生存周期。单位：字节 KB。取值范围：8000 – 20000000，默认使用SA超时时间
     *     ]
     *     "CloseAction" => (string) IPSec 关闭后动作，枚举值：restart、trap、none
     *     "DPDConf" => (object) [
     *         "Enabled" => (integer) 是否开启 DPD（对等体存活检测）功能。取值：0（关闭）、1（开启）
     *         "Action" => (string) DPD超时后的动作,Enable为1（开启）时有效。可取值为clear（断开）、restart（重试）和 trap（流量触发）
     *         "Delay" => (integer) DPD探测间隔时间。dpdEnable为1（开启）时有效。单位为秒，默认为 10
     *         "Timeout" => (integer) DPD超时时间。即探测确认对端不存在需要的时间。dpdEnable为1（开启）时有效。单位为秒。取值范围为 30-60（IKEv2 默认为 0）
     *     ]
     *     "Mode" => (string) 路由模式，枚举值：感兴趣流(FLow) | BGP(BGP)
     *     "BGPConf" => (object) [
     *         "TunnelCidr" => (string) BGP隧道网段。该网段需是一个在 169.254.0.0/16 内的掩码长度为 30 的网段。
     *         "LocalAsn" => (string) Ucloud侧的自治系统号。
     *         "PeerAsn" => (string) 对端BGP ASN号。
     *         "LocalIp" => (string) 云端BGP地址。必须从BGP隧道网段内分配。
     *         "PeerIp" => (string) 用户端BGP地址。必须从BGP隧道网段内分配。
     *     ]
     *     "Name" => (string) 资源名称
     *     "Remark" => (string) 备注
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "VPNTunnelId" => (string) VPN 隧道 ID
     * ]
     *
     * @return CreateCETunnelResponse
     * @throws UCloudException
     */
    public function createCETunnel(CreateCETunnelRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateCETunnelResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateCPE - 创建 CPE
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/create_cpe
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Name" => (string) cpe 名称
     *     "Remark" => (string) cpe 备注
     *     "DeviceType" => (string) 设备型号，枚举值: UCPE3600、UCPE3601
     *     "Label" => (string) 标签：UReach智能网关：Access
     *     "UserInfo" => (string) 结构体，详见UserInfo模型
     *     "Count" => (integer) 数量，默认为1
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "CPEId" => (string) cpe id
     * ]
     *
     * @return CreateCPEResponse
     * @throws UCloudException
     */
    public function createCPE(CreateCPERequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateCPEResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateExportLine - 创建加速线路
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/create_export_line
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "FromRegion" => (string) 本端地域
     *     "ToRegion" => (string) 目标地域
     *     "IpType" => (string) IP类型：International、BGP、Native、Resident
     *     "CPEId" => (string) CPE Id
     *     "PkgType" => (string) 套餐类型：2M-Entry、5M-Basic、10M-Enterprise
     *     "Bandwidth" => (integer) 带宽大小
     *     "Name" => (string) 资源名称
     *     "Tag" => (string) 业务组名称, 默认为 "Default"
     *     "ChargeType" => (string) 计费模式。枚举值为： Year，按年付费； Month，按月付费； Dynamic，按小时付费（需开启权限）。默认为月付
     *     "Quantity" => (integer) 购买时长。默认: 1。按小时购买(Dynamic)时无需此参数。 月付时，此参数传0，代表了购买至月末。
     *     "Remark" => (string) 备注
     *     "PayMode" => (string) 计费类型：fixed-bw，固定带宽；traffic，流量计费
     *     "CouponId" => (integer) 代金券ID。请登录用户中心查看
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ResourceId" => (string) 资源ID
     * ]
     *
     * @return CreateExportLineResponse
     * @throws UCloudException
     */
    public function createExportLine(CreateExportLineRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateExportLineResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreatePOPGW - 创建UWAN虚拟路由器
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/create_popgw
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "BWConf" => (object) [
     *         "Name" => (string) 带宽的名称
     *         "PayMode" => (string) 带宽的计费方式，取值：- fixed-bw：固定带宽计费；- traffic：流量计费。
     *         "BwMax" => (number) UWAN 网关的带宽规格。取值：1-100。单位：Mbps。
     *         "ChargeType" => (string) 付费方式，枚举值：- Month：月付；- Year：年付；- Postpadi：后付费（仅支持流量计费方式）
     *         "Quantity" => (number) 带宽购买时长，默认为 0，代表有效期至月底
     *         "ProductId" => (integer) 产品 ID
     *         "CouponId" => (string) 优惠券 ID
     *         "Remark" => (string) 带宽包备注信息
     *         "BwType" => (string) 带宽类型，默认为空字符串
     *     ]
     *     "Name" => (string) 资源名称
     *     "Quantity" => (integer) UWAN 网关的购买时长，默认为 0，代表有效期至月底。(保持和BWConf.Quantity 相同)
     *     "Remark" => (string) 资源备注信息
     *     "ChargeType" => (string) 付费方式, 枚举值为: - Year：按年付费; - Month:  按月付费；(月付非必填，默认为 0；年付必填。)
     *     "Type" => (string) 入网类型，仅支持“IPSec”
     *     "CouponId" => (string) 代金券ID, 默认不使用
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "PopGwId" => (string) UWAN 网关实例 ID
     *     "RequestId" => (string) 请求 ID
     * ]
     *
     * @return CreatePOPGWResponse
     * @throws UCloudException
     */
    public function createPOPGW(CreatePOPGWRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreatePOPGWResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteCEGateway - 删除CE网关
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/delete_ce_gateway
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPNId" => (string) CE 实例 ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "RequestId" => (string) 请求 ID
     * ]
     *
     * @return DeleteCEGatewayResponse
     * @throws UCloudException
     */
    public function deleteCEGateway(DeleteCEGatewayRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteCEGatewayResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteCETunnel - 删除隧道
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/delete_ce_tunnel
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPNTunnelId" => (string) 资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "RequestId" => (string) 请求 ID
     * ]
     *
     * @return DeleteCETunnelResponse
     * @throws UCloudException
     */
    public function deleteCETunnel(DeleteCETunnelRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteCETunnelResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteExportLine - 删除加速线路
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/delete_export_line
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ResourceId" => (string) UReach资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteExportLineResponse
     * @throws UCloudException
     */
    public function deleteExportLine(DeleteExportLineRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteExportLineResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteExportLineRules - 删除加速规则
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/delete_export_line_rules
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ResourceId" => (string) UReach资源ID
     *     "RuleTypes" => (array<string>) 白名单类型：Developer、CrossBorder
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteExportLineRulesResponse
     * @throws UCloudException
     */
    public function deleteExportLineRules(DeleteExportLineRulesRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteExportLineRulesResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeletePOPGW - 删除UWAN虚拟路由器
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/delete_popgw
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "PopGwId" => (string) UWAN虚拟路由器资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "RequestId" => (string) 请求 ID
     * ]
     *
     * @return DeletePOPGWResponse
     * @throws UCloudException
     */
    public function deletePOPGW(DeletePOPGWRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeletePOPGWResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeCEGateway - 查询CE网关，优先级 Region > PopGwId > VPNId
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/describe_ce_gateway
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "PopGwId" => (string) UWAN 实例 ID
     *     "VPNId" => (string) CE 实例 ID
     *     "Offset" => (integer) 偏移量
     *     "Limit" => (integer) 限制量
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 总数
     *     "VPNInfos" => (array<object>) CE信息[
     *         [
     *             "Region" => (string) 地域
     *             "PopGwId" => (string) UWAN 实例 ID
     *             "PopGwName" => (string) UWAN 资源名称
     *             "VPNId" => (string) CE 网关 ID
     *             "VPNTunnelIds" => (array<string>) 子隧道 ID
     *             "Name" => (string) CE 名称
     *             "PublicIp" => (string) 客户自有外网 IP
     *             "IpType" => (string) CE网关的接入方式：静态IP（Static）,动态IP（Dynamic）
     *             "Status" => (string) 状态（默认为空）
     *             "CreateTime" => (integer) 创建时间
     *             "Remark" => (string) CE备注
     *         ]
     *     ]
     *     "RequestId" => (string) 请求 ID
     * ]
     *
     * @return DescribeCEGatewayResponse
     * @throws UCloudException
     */
    public function describeCEGateway(DescribeCEGatewayRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeCEGatewayResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeCETunnel - 查询隧道
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/describe_ce_tunnel
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPNId" => (string) CE 网关 ID
     *     "VPNTunnelId" => (string) 隧道 ID
     *     "Offset" => (integer) 列表起始位置偏移量，默认为0
     *     "Limit" => (integer) 返回数据长度，默认为20，最大100
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 总数
     *     "VPNTunnelInfos" => (array<object>) 隧道信息[
     *         [
     *             "Region" => (string) 地域
     *             "VPNId" => (string) CE 网关 ID
     *             "VPNTunnelId" => (string) 隧道 ID
     *             "Name" => (string) 隧道名称
     *             "Remark" => (string) 备注
     *             "CreateTime" => (integer) 创建时间
     *             "IKEConf" => (object) IKE 配置信息[
     *                 "PreSharedKey" => (string) 预共享密钥
     *                 "Version" => (string) 版本
     *                 "ExchangeMode" => (string) 协商模式
     *                 "EncryptionAlgorithm" => (string) 加密算法
     *                 "AuthenticationAlgorithm" => (string) 认证算法
     *                 "DhGroup" => (string) 分组信息
     *                 "LocalId" => (string) 本端标识
     *                 "RemoteId" => (string) 对端标识
     *                 "SALifeTime" => (string) IKE SA的生存周期
     *             ]
     *             "IPSecConf" => (object) IPSec 配置信息[
     *                 "CENetwork" => (array<string>) 客户网段
     *                 "Protocol" => (string) 安全协议
     *                 "EncryptionAlgorithm" => (string) 加密算法
     *                 "AuthenticationAlgorithm" => (string) 认证算法
     *                 "PFSDhGroup" => (string) 第二阶段协商使用的 Diffie-Hellman 密钥交换算法
     *                 "SALifeTime" => (string) 第二阶段的 SA 的生存周期
     *                 "SALifetimeBytes" => (string) 第二阶段的 SA 的生存周期
     *             ]
     *             "CloseAction" => (string) 隧道关闭后动作
     *             "BGPConf" => (object) BGP 配置信息[
     *                 "TunnelCidr" => (string) BGP隧道网段
     *                 "LocalAsn" => (integer) 本端自治系统号
     *                 "PeerAsn" => (integer) 对端自治系统号
     *                 "LocalIp" => (string) 云端BGP地址
     *                 "PeerIp" => (string) 用户端BGP地址
     *             ]
     *             "Mode" => (string) 路由模式
     *             "DPDConf" => (object) DPD 配置信息[
     *                 "Enabled" => (integer) 是否开启 DPD
     *                 "Action" => (string) DPD 行为
     *                 "Delay" => (integer) DPD 探测间隔时间
     *                 "Timeout" => (integer) DPD 探测超时时间
     *             ]
     *             "StartAction" => (string) 隧道协商动作
     *         ]
     *     ]
     *     "RequestId" => (string) 请求 ID
     * ]
     *
     * @return DescribeCETunnelResponse
     * @throws UCloudException
     */
    public function describeCETunnel(DescribeCETunnelRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeCETunnelResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeCPE - 查询 CPE 信息
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/describe_cpe
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CPEId" => (string) cpe id
     *     "Label" => (string) 标签：Access、Network
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "CPEInfos" => (array<object>) cpe 详情[
     *         [
     *             "CPEId" => (string) 资源ID
     *             "CPEName" => (string) 资源名称
     *             "Remark" => (string) 备注
     *             "DeviceTypeName" => (string) 设备型号
     *             "Vendor" => (string) 供应商
     *             "PopGwId" => (array<string>) 绑定的UWAN资源ID
     *             "Sn" => (string) 设备SN
     *             "Status" => (integer) 状态
     *             "ConfUpdateTime" => (integer) 配置更新时间
     *             "Ports" => (array<string>) 端口
     *             "LinkNum" => (integer) 链路数量
     *             "CreateTime" => (integer) 创建时间
     *             "LineStatus" => (string) 是否与线路绑定
     *             "ResourceIds" => (array<string>) 绑定的UReach线路资源ID
     *             "UseTime" => (integer) 有效使用时间(天)
     *         ]
     *     ]
     * ]
     *
     * @return DescribeCPEResponse
     * @throws UCloudException
     */
    public function describeCPE(DescribeCPERequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeCPEResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeExportLine - 查询CPE绑定的加速线路信息
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/describe_export_line
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CPEId" => (string) CPE资源ID
     *     "ResourceId" => (string) UReach资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "LineInfos" => (array<object>) 线路信息[
     *         [
     *             "Name" => (string) 名称
     *             "Remark" => (string) 备注
     *             "ResourceId" => (string) 线路资源ID
     *             "InstanceId" => (string) 线路资源ID对应的加速线路ID
     *             "Bandwidth" => (integer) 带宽大小(Mbps)
     *             "ChargeType" => (string) 付费方式(按月、按年等)
     *             "PayMode" => (string) 计费方式(固定带宽: fixed-bw；流量计费：traffic)
     *             "FromRegion" => (string) 入口地域
     *             "FromRegionName" => (string) 入口地域名称
     *             "ToRegion" => (string) 出口地域
     *             "ToRegionName" => (string) 出口地域名称
     *             "IP" => (array<string>)
     *             "Status" => (string) 线路是否绑定CPE；"1"：已绑定；"0"未绑定
     *             "CreateTime" => (integer) 创建时间
     *             "ExpireTime" => (integer) 到期时间
     *             "CPEIds" => (array<string>) 线路绑定的CPE资源ID
     *             "PkgType" => (string) 套餐类型
     *             "IpType" => (string) IP类型
     *             "InstanceStatus" => (string) 是否过期(normal/expire)
     *             "Socks" => (object) [
     *                 "Addr" => (string)
     *                 "Port" => (integer)
     *                 "Account" => (string)
     *             ]
     *             "Source" => (array<string>) 源IP地址
     *         ]
     *     ]
     * ]
     *
     * @return DescribeExportLineResponse
     * @throws UCloudException
     */
    public function describeExportLine(DescribeExportLineRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeExportLineResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeExportLineRules - 查询白名单
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/describe_export_line_rules
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ResourceId" => (string) UReach资源ID
     *     "RuleType" => (string) 白名单类型
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "WhiteListInfos" => (array<object>) 白名单信息[
     *         [
     *             "RuleType" => (string)
     *             "Name" => (string)
     *             "Remark" => (string)
     *         ]
     *     ]
     * ]
     *
     * @return DescribeExportLineRulesResponse
     * @throws UCloudException
     */
    public function describeExportLineRules(DescribeExportLineRulesRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeExportLineRulesResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribePOPGW - 查询UWAN虚拟路由器
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/describe_popgw
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "PopGwId" => (string) UWAN 实例 ID
     *     "Offset" => (integer) 偏移量
     *     "Limit" => (integer) 限制量
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 总数
     *     "POPGWInfos" => (array<object>) UWAN 实例信息[
     *         [
     *             "Region" => (string) 地域信息
     *             "PopGwId" => (string) 网关实例 ID
     *             "Name" => (string) 网关名称
     *             "Remark" => (string) 备注
     *             "CreateTime" => (integer) 创建时间
     *             "BWPackageInfo" => (object) 带宽包信息[
     *                 "BwId" => (string) UWAN 网关带宽 ID
     *                 "Name" => (string) 带宽包名称
     *                 "Remark" => (string) 备注
     *                 "PayMode" => (string) 计费方式eg:(固定带宽)
     *                 "ChargeType" => (string) 付费方式eg:(Month)
     *                 "PublicIp" => (string) 网关外网 IP
     *                 "BandWidth" => (number) 最大带宽值
     *                 "DueTime" => (integer) 过期时间
     *             ]
     *             "UGNInfo" => (object) 云联网信息[
     *                 "UGNId" => (string) 云联网 ID
     *                 "UGNName" => (string) 云联网名称
     *                 "UGNBWInfos" => (array<object>) UGN 带宽包信息[
     *                     [
     *                         "UGNBWId" => (string) UGN带宽包ID
     *                         "UGNBWName" => (string) UGN带宽包名称
     *                     ]
     *                 ]
     *             ]
     *             "CPENum" => (integer) CPE数量
     *             "CENum" => (integer) 客户网关数量
     *             "VCPENum" => (integer) VCPE 数量
     *             "VNI" => (integer) 唯一标识
     *             "DueTime" => (integer) 过期时间
     *             "ChargeType" => (string) 付费类型
     *             "Type" => (string) 规格：IPSec、SSL
     *         ]
     *     ]
     *     "RequestId" => (string) 请求 ID
     * ]
     *
     * @return DescribePOPGWResponse
     * @throws UCloudException
     */
    public function describePOPGW(DescribePOPGWRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribePOPGWResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListAvailableRegion - 获取可用地域
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/list_available_region
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Region" => (array<string>) 可用地域
     * ]
     *
     * @return ListAvailableRegionResponse
     * @throws UCloudException
     */
    public function listAvailableRegion(ListAvailableRegionRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListAvailableRegionResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateBWPackage - 更新UWSC带宽包
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/update_bw_package
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "BwId" => (string) 带宽包资源ID
     *     "BwMax" => (number) 带宽峰值
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "RequestId" => (string) 请求 ID
     * ]
     *
     * @return UpdateBWPackageResponse
     * @throws UCloudException
     */
    public function updateBWPackage(UpdateBWPackageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateBWPackageResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateCEGateway - 更新CE网关
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/update_ce_gateway
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPNId" => (string) CE网关资源ID
     *     "PublicIp" => (string) 公网IP
     *     "Name" => (string) 资源名称
     *     "Remark" => (string) 备注
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "RequestId" => (string) 请求 ID
     * ]
     *
     * @return UpdateCEGatewayResponse
     * @throws UCloudException
     */
    public function updateCEGateway(UpdateCEGatewayRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateCEGatewayResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateCETunnel - 更新隧道配置
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/update_ce_tunnel
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPNTunnelId" => (string) 资源ID
     *     "IKEConf" => (object) [
     *         "PreSharedKey" => (string) IKE 共享密钥
     *         "Version" => (string) IKE 版本，取值： "ike v1"，"ike v2"
     *         "ExchangeMode" => (string) IKE 协商模式，主模式(main)/野蛮模式(aggressive)，IKE V2时不使用该参数
     *         "EncryptionAlgorithm" => (string) IKE 加密算法，取值："aes128", "aes192", "aes256", "aes512", "3des"
     *         "AuthenticationAlgorithm" => (string) IKE 认证算法，取值："md5", "sha1", "sha2-256"
     *         "DhGroup" => (string) DH group，指定IKE交换密钥时使用的DH组。取值："1", "2", "5", "14", "15", "16"
     *         "LocalId" => (string) 本端标识，取值：“auto”，“<ip-address>”
     *         "RemoteId" => (string) 对端标识，取值：“auto”，“<ip-address>”
     *         "SALifeTime" => (string) IKE SA的生存周期，取值范围：600-604800
     *     ]
     *     "IPSecConf" => (object) [
     *         "CENetwork" => (array<string>) 需要和 VPC 互通的本地数据中心侧的网段，用于第二阶段协商。
     *         "Protocol" => (string) IPSec 安全协议，取值：“esp”，“ah”
     *         "EncryptionAlgorithm" => (string) IPSec 加密算法，取值："aes128", "aes192", "aes256", "aes512", "3des"
     *         "AuthenticationAlgorithm" => (string) 第二阶段协商的认证算法。取值：md5、sha1、sha2-256。
     *         "PFSDhGroup" => (string) 第二阶段协商使用的 Diffie-Hellman 密钥交换算法。取值：disabled、1、2、5、14、15、16。
     *         "SALifeTime" => (string) 第二阶段协商出的 SA 的生存周期。单位：秒。取值范围：1200~604800
     *         "SALifetimeBytes" => (string) 第二阶段协商出的 SA 的生存周期。单位：字节 KB。取值范围：8000 – 20000000，默认使用SA超时时间
     *     ]
     *     "CloseAction" => (string) IPSec 关闭后动作，枚举值：restart、trap、none
     *     "DPDConf" => (object) [
     *         "Enabled" => (string) 是否开启 DPD（对等体存活检测）功能。取值：0（关闭）、1（开启）
     *         "Action" => (string) DPD超时后的动作,Enable为1（开启）时有效。可取值为clear（断开）、restart（重试）和 trap（流量触发）
     *         "Delay" => (string) DPD探测间隔时间。dpdEnable为1（开启）时有效。单位为秒，默认为 10
     *         "Timeout" => (string) DPD超时时间。即探测确认对端不存在需要的时间。dpdEnable为1（开启）时有效。单位为秒。取值范围为 30-60（IKEv2 默认为 0）
     *     ]
     *     "BGPConf" => (object) [
     *         "TunnelCidr" => (string) BGP隧道网段。该网段需是一个在 169.254.0.0/16 内的掩码长度为 30 的网段。
     *         "LocalAsn" => (string) Ucloud侧的自治系统号。
     *         "PeerAsn" => (string) 对端BGP ASN号。
     *         "LocalIp" => (string) 云端BGP地址。必须从BGP隧道网段内分配。
     *         "PeerIp" => (string) 用户端BGP地址。必须从BGP隧道网段内分配。
     *     ]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateCETunnelResponse
     * @throws UCloudException
     */
    public function updateCETunnel(UpdateCETunnelRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateCETunnelResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateCETunnelAttribute - 更新隧道属性
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/update_ce_tunnel_attribute
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPNTunnelId" => (string) 资源ID
     *     "Name" => (string) 资源名称
     *     "Remark" => (string) 备注
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "RequestId" => (string) 请求 ID
     * ]
     *
     * @return UpdateCETunnelAttributeResponse
     * @throws UCloudException
     */
    public function updateCETunnelAttribute(UpdateCETunnelAttributeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateCETunnelAttributeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateExportLine - 修改加速线路
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/update_export_line
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ResourceId" => (string) UReach资源ID
     *     "Bandwidth" => (string) 带宽大小（仅自定义套餐支持修改）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateExportLineResponse
     * @throws UCloudException
     */
    public function updateExportLine(UpdateExportLineRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateExportLineResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdatePOPGWAttribute - 更新UWAN虚拟路由器属性
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/update_popgw_attribute
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "PopGwId" => (string) UWAN虚拟路由器资源ID
     *     "Name" => (string) 资源名称
     *     "Remark" => (string) 备注
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "RequestId" => (string) 请求 ID
     * ]
     *
     * @return UpdatePOPGWAttributeResponse
     * @throws UCloudException
     */
    public function updatePOPGWAttribute(UpdatePOPGWAttributeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdatePOPGWAttributeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpgradeExportLine - 升级加速线路
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/upgrade_export_line
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ResourceId" => (string) UReach资源ID
     *     "PkgType" => (string) 目标套餐类型：2M-Entry、5M-Basic、10M-Enterprise
     *     "IpType" => (string) 原IP类型：International、BGP、Native、Resident
     *     "Bandwidth" => (integer) 带宽大小
     *     "ChargeType" => (string) 计费模式。枚举值为： Year，按年付费； Month，按月付费； Dynamic，按小时付费（需开启权限）。默认为月付
     *     "Quantity" => (integer) 购买时长。默认: 1。按小时购买(Dynamic)时无需此参数。 月付时，此参数传0，代表了购买至月末。
     *     "CouponId" => (integer) 代金券ID。请登录用户中心查看
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpgradeExportLineResponse
     * @throws UCloudException
     */
    public function upgradeExportLine(UpgradeExportLineRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpgradeExportLineResponse($resp->toArray(), $resp->getRequestId());
    }
}
