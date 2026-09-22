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
namespace UCloud\VPC;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\VPC\Apis\AddSnatRuleRequest;
use UCloud\VPC\Apis\AddSnatRuleResponse;
use UCloud\VPC\Apis\AddSubnetIPv6Request;
use UCloud\VPC\Apis\AddSubnetIPv6Response;
use UCloud\VPC\Apis\AddVPCIPv6Request;
use UCloud\VPC\Apis\AddVPCIPv6Response;
use UCloud\VPC\Apis\AddVPCNetworkRequest;
use UCloud\VPC\Apis\AddVPCNetworkResponse;
use UCloud\VPC\Apis\AddWhiteListResourceRequest;
use UCloud\VPC\Apis\AddWhiteListResourceResponse;
use UCloud\VPC\Apis\AllocateBatchSecondaryIpRequest;
use UCloud\VPC\Apis\AllocateBatchSecondaryIpResponse;
use UCloud\VPC\Apis\AllocateSecondaryIpRequest;
use UCloud\VPC\Apis\AllocateSecondaryIpResponse;
use UCloud\VPC\Apis\AllocateVIPRequest;
use UCloud\VPC\Apis\AllocateVIPResponse;
use UCloud\VPC\Apis\AssignIPv6Request;
use UCloud\VPC\Apis\AssignIPv6Response;
use UCloud\VPC\Apis\AssociateRouteTableRequest;
use UCloud\VPC\Apis\AssociateRouteTableResponse;
use UCloud\VPC\Apis\AssociateSecGroupRequest;
use UCloud\VPC\Apis\AssociateSecGroupResponse;
use UCloud\VPC\Apis\AssociateSecGroupDynamicRequest;
use UCloud\VPC\Apis\AssociateSecGroupDynamicResponse;
use UCloud\VPC\Apis\AttachNetworkInterfaceRequest;
use UCloud\VPC\Apis\AttachNetworkInterfaceResponse;
use UCloud\VPC\Apis\CloneRouteTableRequest;
use UCloud\VPC\Apis\CloneRouteTableResponse;
use UCloud\VPC\Apis\CopySecGroupRequest;
use UCloud\VPC\Apis\CopySecGroupResponse;
use UCloud\VPC\Apis\CreateNATGWRequest;
use UCloud\VPC\Apis\CreateNATGWResponse;
use UCloud\VPC\Apis\CreateNATGWPolicyRequest;
use UCloud\VPC\Apis\CreateNATGWPolicyResponse;
use UCloud\VPC\Apis\CreateNetworkAclRequest;
use UCloud\VPC\Apis\CreateNetworkAclResponse;
use UCloud\VPC\Apis\CreateNetworkAclAssociationRequest;
use UCloud\VPC\Apis\CreateNetworkAclAssociationResponse;
use UCloud\VPC\Apis\CreateNetworkAclEntryRequest;
use UCloud\VPC\Apis\CreateNetworkAclEntryResponse;
use UCloud\VPC\Apis\CreateNetworkInterfaceRequest;
use UCloud\VPC\Apis\CreateNetworkInterfaceResponse;
use UCloud\VPC\Apis\CreateRouteTableRequest;
use UCloud\VPC\Apis\CreateRouteTableResponse;
use UCloud\VPC\Apis\CreateSecGroupRequest;
use UCloud\VPC\Apis\CreateSecGroupResponse;
use UCloud\VPC\Apis\CreateSecGroupRuleRequest;
use UCloud\VPC\Apis\CreateSecGroupRuleResponse;
use UCloud\VPC\Apis\CreateSnatDnatRuleRequest;
use UCloud\VPC\Apis\CreateSnatDnatRuleResponse;
use UCloud\VPC\Apis\CreateSubnetRequest;
use UCloud\VPC\Apis\CreateSubnetResponse;
use UCloud\VPC\Apis\CreateVPCRequest;
use UCloud\VPC\Apis\CreateVPCResponse;
use UCloud\VPC\Apis\CreateVPCIntercomRequest;
use UCloud\VPC\Apis\CreateVPCIntercomResponse;
use UCloud\VPC\Apis\DeleteNATGWRequest;
use UCloud\VPC\Apis\DeleteNATGWResponse;
use UCloud\VPC\Apis\DeleteNATGWPolicyRequest;
use UCloud\VPC\Apis\DeleteNATGWPolicyResponse;
use UCloud\VPC\Apis\DeleteNetworkAclRequest;
use UCloud\VPC\Apis\DeleteNetworkAclResponse;
use UCloud\VPC\Apis\DeleteNetworkAclAssociationRequest;
use UCloud\VPC\Apis\DeleteNetworkAclAssociationResponse;
use UCloud\VPC\Apis\DeleteNetworkAclEntryRequest;
use UCloud\VPC\Apis\DeleteNetworkAclEntryResponse;
use UCloud\VPC\Apis\DeleteNetworkInterfaceRequest;
use UCloud\VPC\Apis\DeleteNetworkInterfaceResponse;
use UCloud\VPC\Apis\DeleteRouteTableRequest;
use UCloud\VPC\Apis\DeleteRouteTableResponse;
use UCloud\VPC\Apis\DeleteSecGroupRequest;
use UCloud\VPC\Apis\DeleteSecGroupResponse;
use UCloud\VPC\Apis\DeleteSecGroupRuleRequest;
use UCloud\VPC\Apis\DeleteSecGroupRuleResponse;
use UCloud\VPC\Apis\DeleteSecondaryIpRequest;
use UCloud\VPC\Apis\DeleteSecondaryIpResponse;
use UCloud\VPC\Apis\DeleteSnatDnatRuleRequest;
use UCloud\VPC\Apis\DeleteSnatDnatRuleResponse;
use UCloud\VPC\Apis\DeleteSnatRuleRequest;
use UCloud\VPC\Apis\DeleteSnatRuleResponse;
use UCloud\VPC\Apis\DeleteSubnetRequest;
use UCloud\VPC\Apis\DeleteSubnetResponse;
use UCloud\VPC\Apis\DeleteSubnetIPv6Request;
use UCloud\VPC\Apis\DeleteSubnetIPv6Response;
use UCloud\VPC\Apis\DeleteVPCRequest;
use UCloud\VPC\Apis\DeleteVPCResponse;
use UCloud\VPC\Apis\DeleteVPCIPv6Request;
use UCloud\VPC\Apis\DeleteVPCIPv6Response;
use UCloud\VPC\Apis\DeleteVPCIntercomRequest;
use UCloud\VPC\Apis\DeleteVPCIntercomResponse;
use UCloud\VPC\Apis\DeleteWhiteListResourceRequest;
use UCloud\VPC\Apis\DeleteWhiteListResourceResponse;
use UCloud\VPC\Apis\DescribeInstanceNetworkInterfaceRequest;
use UCloud\VPC\Apis\DescribeInstanceNetworkInterfaceResponse;
use UCloud\VPC\Apis\DescribeNATGWRequest;
use UCloud\VPC\Apis\DescribeNATGWResponse;
use UCloud\VPC\Apis\DescribeNATGWPolicyRequest;
use UCloud\VPC\Apis\DescribeNATGWPolicyResponse;
use UCloud\VPC\Apis\DescribeNetworkAclRequest;
use UCloud\VPC\Apis\DescribeNetworkAclResponse;
use UCloud\VPC\Apis\DescribeNetworkAclAssociationRequest;
use UCloud\VPC\Apis\DescribeNetworkAclAssociationResponse;
use UCloud\VPC\Apis\DescribeNetworkAclAssociationBySubnetRequest;
use UCloud\VPC\Apis\DescribeNetworkAclAssociationBySubnetResponse;
use UCloud\VPC\Apis\DescribeNetworkAclEntryRequest;
use UCloud\VPC\Apis\DescribeNetworkAclEntryResponse;
use UCloud\VPC\Apis\DescribeNetworkInterfaceRequest;
use UCloud\VPC\Apis\DescribeNetworkInterfaceResponse;
use UCloud\VPC\Apis\DescribeResourceSecGroupRequest;
use UCloud\VPC\Apis\DescribeResourceSecGroupResponse;
use UCloud\VPC\Apis\DescribeRouteTableRequest;
use UCloud\VPC\Apis\DescribeRouteTableResponse;
use UCloud\VPC\Apis\DescribeSecGroupRequest;
use UCloud\VPC\Apis\DescribeSecGroupResponse;
use UCloud\VPC\Apis\DescribeSecGroupResourceRequest;
use UCloud\VPC\Apis\DescribeSecGroupResourceResponse;
use UCloud\VPC\Apis\DescribeSecondaryIpRequest;
use UCloud\VPC\Apis\DescribeSecondaryIpResponse;
use UCloud\VPC\Apis\DescribeSnatDnatRuleRequest;
use UCloud\VPC\Apis\DescribeSnatDnatRuleResponse;
use UCloud\VPC\Apis\DescribeSnatRuleRequest;
use UCloud\VPC\Apis\DescribeSnatRuleResponse;
use UCloud\VPC\Apis\DescribeSubnetRequest;
use UCloud\VPC\Apis\DescribeSubnetResponse;
use UCloud\VPC\Apis\DescribeSubnetResourceRequest;
use UCloud\VPC\Apis\DescribeSubnetResourceResponse;
use UCloud\VPC\Apis\DescribeVIPRequest;
use UCloud\VPC\Apis\DescribeVIPResponse;
use UCloud\VPC\Apis\DescribeVPCRequest;
use UCloud\VPC\Apis\DescribeVPCResponse;
use UCloud\VPC\Apis\DescribeVPCIntercomRequest;
use UCloud\VPC\Apis\DescribeVPCIntercomResponse;
use UCloud\VPC\Apis\DescribeWhiteListResourceRequest;
use UCloud\VPC\Apis\DescribeWhiteListResourceResponse;
use UCloud\VPC\Apis\DetachNetworkInterfaceRequest;
use UCloud\VPC\Apis\DetachNetworkInterfaceResponse;
use UCloud\VPC\Apis\DisableUniEipDirectModeRequest;
use UCloud\VPC\Apis\DisableUniEipDirectModeResponse;
use UCloud\VPC\Apis\DisableVPCIPv6Request;
use UCloud\VPC\Apis\DisableVPCIPv6Response;
use UCloud\VPC\Apis\DisassociateSecGroupRequest;
use UCloud\VPC\Apis\DisassociateSecGroupResponse;
use UCloud\VPC\Apis\EnableUniEipDirectModeRequest;
use UCloud\VPC\Apis\EnableUniEipDirectModeResponse;
use UCloud\VPC\Apis\EnableWhiteListRequest;
use UCloud\VPC\Apis\EnableWhiteListResponse;
use UCloud\VPC\Apis\GetAvailableResourceForPolicyRequest;
use UCloud\VPC\Apis\GetAvailableResourceForPolicyResponse;
use UCloud\VPC\Apis\GetAvailableResourceForSnatRuleRequest;
use UCloud\VPC\Apis\GetAvailableResourceForSnatRuleResponse;
use UCloud\VPC\Apis\GetAvailableResourceForWhiteListRequest;
use UCloud\VPC\Apis\GetAvailableResourceForWhiteListResponse;
use UCloud\VPC\Apis\GetNetworkAclTargetResourceRequest;
use UCloud\VPC\Apis\GetNetworkAclTargetResourceResponse;
use UCloud\VPC\Apis\ListSubnetForNATGWRequest;
use UCloud\VPC\Apis\ListSubnetForNATGWResponse;
use UCloud\VPC\Apis\ModifyRouteRuleRequest;
use UCloud\VPC\Apis\ModifyRouteRuleResponse;
use UCloud\VPC\Apis\MoveSecondaryIPMacRequest;
use UCloud\VPC\Apis\MoveSecondaryIPMacResponse;
use UCloud\VPC\Apis\ReleaseVIPRequest;
use UCloud\VPC\Apis\ReleaseVIPResponse;
use UCloud\VPC\Apis\SetGwDefaultExportRequest;
use UCloud\VPC\Apis\SetGwDefaultExportResponse;
use UCloud\VPC\Apis\SwitchToFirewallRequest;
use UCloud\VPC\Apis\SwitchToFirewallResponse;
use UCloud\VPC\Apis\SwitchToSecGroupRequest;
use UCloud\VPC\Apis\SwitchToSecGroupResponse;
use UCloud\VPC\Apis\UnassignIPv6Request;
use UCloud\VPC\Apis\UnassignIPv6Response;
use UCloud\VPC\Apis\UpdateNATGWRequest;
use UCloud\VPC\Apis\UpdateNATGWResponse;
use UCloud\VPC\Apis\UpdateNATGWPolicyRequest;
use UCloud\VPC\Apis\UpdateNATGWPolicyResponse;
use UCloud\VPC\Apis\UpdateNATGWSnatpoolRequest;
use UCloud\VPC\Apis\UpdateNATGWSnatpoolResponse;
use UCloud\VPC\Apis\UpdateNATGWSubnetRequest;
use UCloud\VPC\Apis\UpdateNATGWSubnetResponse;
use UCloud\VPC\Apis\UpdateNetworkAclRequest;
use UCloud\VPC\Apis\UpdateNetworkAclResponse;
use UCloud\VPC\Apis\UpdateNetworkAclEntryRequest;
use UCloud\VPC\Apis\UpdateNetworkAclEntryResponse;
use UCloud\VPC\Apis\UpdateNetworkInterfaceDefaultOutputRequest;
use UCloud\VPC\Apis\UpdateNetworkInterfaceDefaultOutputResponse;
use UCloud\VPC\Apis\UpdateRouteTableAttributeRequest;
use UCloud\VPC\Apis\UpdateRouteTableAttributeResponse;
use UCloud\VPC\Apis\UpdateSecGroupRequest;
use UCloud\VPC\Apis\UpdateSecGroupResponse;
use UCloud\VPC\Apis\UpdateSecGroupAssociationRequest;
use UCloud\VPC\Apis\UpdateSecGroupAssociationResponse;
use UCloud\VPC\Apis\UpdateSecGroupRuleRequest;
use UCloud\VPC\Apis\UpdateSecGroupRuleResponse;
use UCloud\VPC\Apis\UpdateSnatRuleRequest;
use UCloud\VPC\Apis\UpdateSnatRuleResponse;
use UCloud\VPC\Apis\UpdateSubnetAttributeRequest;
use UCloud\VPC\Apis\UpdateSubnetAttributeResponse;
use UCloud\VPC\Apis\UpdateVIPAttributeRequest;
use UCloud\VPC\Apis\UpdateVIPAttributeResponse;
use UCloud\VPC\Apis\UpdateVPCIPv6Request;
use UCloud\VPC\Apis\UpdateVPCIPv6Response;
use UCloud\VPC\Apis\UpdateVPCNetworkRequest;
use UCloud\VPC\Apis\UpdateVPCNetworkResponse;

/**
 * This client is used to call actions of **VPC** service
 */
class VPCClient extends Client
{

    /**
     * AddSnatRule - 对于绑定了多个EIP的NAT网关，您可以将一个子网下的某台云主机映射到某个特定的EIP上，规则生效后，则该云主机通过该特定的EIP访问互联网。
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/add_snat_rule
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NATGWId" => (string) NAT网关的ID
     *     "SourceIp" => (string) 需要出外网的私网IP地址，例如10.9.7.xx
     *     "SnatIp" => (string) EIP的ip地址,例如106.75.xx.xx
     *     "Name" => (string) snat规则名称，默认为“出口规则”
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return AddSnatRuleResponse
     * @throws UCloudException
     */
    public function addSnatRule(AddSnatRuleRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AddSnatRuleResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * AddSubnetIPv6 - 子网关联IPv6
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/add_subnet_ip_v6
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SubnetworkId" => (string) 子网ID
     *     "VPCId" => (string) 私有网络 ID
     *     "VPCIPv6Network" => (string) 所属VPC的IPv6网段，可选，不填默认选择一个VPC IPv6网段进行分配
     *     "IPv6Network" => (string) 指定IPv6网段
     *     "IPv6PrefixLength" => (integer) 指定IPv6网段掩码
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "IPv6Network" => (string) IPv6网段
     * ]
     *
     * @return AddSubnetIPv6Response
     * @throws UCloudException
     */
    public function addSubnetIPv6(AddSubnetIPv6Request $request = null)
    {
        $resp = $this->invoke($request);
        return new AddSubnetIPv6Response($resp->toArray(), $resp->getRequestId());
    }

    /**
     * AddVPCIPv6 - VPC关联IPv6网段
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/add_vpc_ip_v6
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPCId" => (string) VPC资源ID
     *     "OperatorName" => (string) 类型 BGP | Telecom | ChinaMobile | Unicom
     *     "IPv6NetworkType" => (string) Default--默认网段、Custom--客户自带
     *     "IPv6Network" => (string) 指定IPv6网段
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "IPv6Network" => (string) IPv6网段
     * ]
     *
     * @return AddVPCIPv6Response
     * @throws UCloudException
     */
    public function addVPCIPv6(AddVPCIPv6Request $request = null)
    {
        $resp = $this->invoke($request);
        return new AddVPCIPv6Response($resp->toArray(), $resp->getRequestId());
    }

    /**
     * AddVPCNetwork - 添加VPC网段
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/add_vpc_network
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPCId" => (string) 源VPC短ID
     *     "Network" => (array<string>) 增加网段
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return AddVPCNetworkResponse
     * @throws UCloudException
     */
    public function addVPCNetwork(AddVPCNetworkRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AddVPCNetworkResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * AddWhiteListResource - 添加NAT网关白名单
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/add_white_list_resource
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目Id。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NATGWId" => (string) NAT网关Id
     *     "ResourceIds" => (array<string>) 可添加白名单的资源Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return AddWhiteListResourceResponse
     * @throws UCloudException
     */
    public function addWhiteListResource(AddWhiteListResourceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AddWhiteListResourceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * AllocateBatchSecondaryIp - 批量申请虚拟网卡辅助IP
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/allocate_batch_secondary_ip
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Mac" => (string) 节点mac
     *     "ObjectId" => (string) 资源Id
     *     "SubnetId" => (string) 子网Id（若未指定，则根据zone获取默认子网进行创建）
     *     "VPCId" => (string) vpcId
     *     "Ip" => (array<string>) 【arry】支持按如下方式申请：①按网段：如192.168.1.32/27，掩码数字最小为27   ②指定IP地址，如192.168.1.3
     *     "Count" => (integer) 申请的内网IP数量
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "IpsInfo" => (array<object>) 详见IpsInfo[
     *         [
     *             "Ip" => (string) 内网IP地址
     *             "Mask" => (string) 掩码
     *             "Gateway" => (string) 网关
     *             "Mac" => (string) MAC地址
     *             "SubnetId" => (string) 子网资源ID
     *             "VPCId" => (string) VPC资源ID
     *             "Status" => (object) IP分配结果，详见StatusInfo[
     *                 "StatusCode" => (string) 枚举值：Succeeded，Failed
     *                 "Message" => (string) IP分配失败原因
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return AllocateBatchSecondaryIpResponse
     * @throws UCloudException
     */
    public function allocateBatchSecondaryIp(AllocateBatchSecondaryIpRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AllocateBatchSecondaryIpResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * AllocateSecondaryIp - 分配ip（用于uk8s使用）
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/allocate_secondary_ip
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Mac" => (string) 节点mac
     *     "ObjectId" => (string) 资源Id
     *     "SubnetId" => (string) 子网Id（若未指定，则根据zone获取默认子网进行创建）
     *     "VPCId" => (string) vpcId
     *     "Ip" => (string) 指定Ip分配
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "IpInfo" => (object) [
     *         "Ip" => (string)
     *         "Mask" => (string)
     *         "Gateway" => (string)
     *         "Mac" => (string)
     *         "SubnetId" => (string)
     *         "VPCId" => (string)
     *     ]
     * ]
     *
     * @return AllocateSecondaryIpResponse
     * @throws UCloudException
     */
    public function allocateSecondaryIp(AllocateSecondaryIpRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AllocateSecondaryIpResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * AllocateVIP - 根据提供信息，申请内网VIP(Virtual IP），多用于高可用程序作为漂移IP。
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/allocate_vip
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域
     *     "Zone" => (string) 可用区
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPCId" => (string) 指定vip所属的VPC
     *     "SubnetId" => (string) 子网id
     *     "Ip" => (string) 指定ip
     *     "Count" => (integer) 申请数量，默认: 1
     *     "Name" => (string) vip名，默认：VIP
     *     "Tag" => (string) 业务组名称，默认为Default
     *     "Remark" => (string) 备注
     *     "BusinessId" => (string) 业务组
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "VIPSet" => (array<object>) 申请到的VIP资源相关信息[
     *         [
     *             "VIP" => (string) 虚拟ip
     *             "VIPId" => (string) 虚拟ip id
     *             "VPCId" => (string) VPC id
     *         ]
     *     ]
     *     "DataSet" => (array<string>) 申请到的VIP地址
     * ]
     *
     * @return AllocateVIPResponse
     * @throws UCloudException
     */
    public function allocateVIP(AllocateVIPRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AllocateVIPResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * AssignIPv6 - 申请IPv6地址
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/assign_ip_v6
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SubnetworkId" => (string) 子网ID
     *     "ObjectId" => (string) 资源短ID
     *     "VPCId" => (string) vpc ID
     *     "InstanceId" => (string) 实际资源短ID--pass产品实际ID
     *     "InstanceType" => (integer) 与InstanceID对应，实际资源大类ID--pass产品实际类型
     *     "Mac" => (string) 选填，资源的Mac
     *     "IPv6Addresses" => (array<string>) 指定IP分配，与Count互斥
     *     "Count" => (integer) 指定数量分配，与IPv6Addresses互斥
     *     "Attribute" => (string) IP属性：支持开启公网(Normal)、仅支持内网(Private)，默认Normal
     *     "Segment" => (string) 指定网段分配IP
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "IPv6Addresses" => (array<string>) IPv6地址
     *     "OperatorName" => (string) IP类型
     *     "IPv6Gateway" => (string) IPv6网关
     *     "Mask" => (integer) 掩码
     * ]
     *
     * @return AssignIPv6Response
     * @throws UCloudException
     */
    public function assignIPv6(AssignIPv6Request $request = null)
    {
        $resp = $this->invoke($request);
        return new AssignIPv6Response($resp->toArray(), $resp->getRequestId());
    }

    /**
     * AssociateRouteTable - 绑定子网的路由表
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/associate_route_table
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SubnetId" => (string) 子网ID
     *     "RouteTableId" => (string) 路由表资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return AssociateRouteTableResponse
     * @throws UCloudException
     */
    public function associateRouteTable(AssociateRouteTableRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AssociateRouteTableResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * AssociateSecGroup - 绑定资源到安全组
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/associate_sec_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ResourceId" => (array<string>) 资源短 ID，安全组参数和该字段只支持一个批量。支持 string 数组。
     *     "PrioritySecGroup" => (array<object>) [
     *         [
     *             "Priority" => (integer) 绑定优先级。该字段和资源 ID 只支持一个批量。支持 PrioritySecGroup 的 JSON 格式数组。
     *             "SecGroupId" => (string) 安全组 ID。该字段和资源 ID 只支持一个批量。支持 PrioritySecGroup 的 JSON 格式数组。
     *         ]
     *     ]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return AssociateSecGroupResponse
     * @throws UCloudException
     */
    public function associateSecGroup(AssociateSecGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AssociateSecGroupResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * AssociateSecGroupDynamic - 绑定安全组，动态调整绑定优先级
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/associate_sec_group_dynamic
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ResourceId" => (array<string>) 资源短 ID 数组。支持数组模式。Type 为 string 数组。
     *     "SecGroupId" => (string) 安全组ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return AssociateSecGroupDynamicResponse
     * @throws UCloudException
     */
    public function associateSecGroupDynamic(AssociateSecGroupDynamicRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AssociateSecGroupDynamicResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * AttachNetworkInterface - 绑定网卡到云主机
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/attach_network_interface
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InterfaceId" => (string) 虚拟网卡ID
     *     "InstanceId" => (string) 云主机ID（仅支持绑定开启网卡功能，且未开启网络增强的云主机）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return AttachNetworkInterfaceResponse
     * @throws UCloudException
     */
    public function attachNetworkInterface(AttachNetworkInterfaceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AttachNetworkInterfaceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CloneRouteTable - 将现有的路由表复制为一张新的路由表
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/clone_route_table
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "RouteTableId" => (string) 被克隆的路由表ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "RouteTableId" => (string) 复制后新的路由表资源ID
     * ]
     *
     * @return CloneRouteTableResponse
     * @throws UCloudException
     */
    public function cloneRouteTable(CloneRouteTableRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CloneRouteTableResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CopySecGroup - 复制安全组
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/copy_sec_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SecGroupId" => (string) 源安全组ID
     *     "DstRegion" => (string) 目的地域
     *     "DstProjectId" => (string) 目的项目ID
     *     "DstVPCId" => (string) 目的VPC ID
     *     "DstName" => (string) 目的安全组名称，最长64个字符
     *     "DstRemark" => (string) 目的安全组备注
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "SecGroupId" => (string) 复制得到的安全组ID
     *     "RuleID" => (array<string>) 复制得到的规则ID
     * ]
     *
     * @return CopySecGroupResponse
     * @throws UCloudException
     */
    public function copySecGroup(CopySecGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CopySecGroupResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateNATGW - 创建NAT网关
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/create_natgw
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目Id。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NATGWName" => (string) NAT网关名称
     *     "EIPIds" => (array<string>) NAT网关绑定的EIPId
     *     "FirewallId" => (string) NAT网关绑定的防火墙Id
     *     "SubnetworkIds" => (array<string>) NAT网关绑定的子网Id，默认为空。
     *     "VPCId" => (string) NAT网关所属的VPC Id。默认为Default VPC Id
     *     "IfOpen" => (integer) 白名单开关标记。0表示关闭，1表示开启。默认为0
     *     "Tag" => (string) 业务组。默认为空
     *     "Remark" => (string) 备注。默认为空
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "NATGWId" => (string) 申请到的NATGateWay Id
     * ]
     *
     * @return CreateNATGWResponse
     * @throws UCloudException
     */
    public function createNATGW(CreateNATGWRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateNATGWResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateNATGWPolicy - 添加NAT网关端口转发规则
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/create_natgw_policy
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目Id。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NATGWId" => (string) NAT网关Id
     *     "Protocol" => (string) 协议类型。枚举值为：TCP、UDP
     *     "SrcEIPId" => (string) 源IP。填写对应的EIP Id
     *     "SrcPort" => (string) 源端口。可填写固定端口，也可填写端口范围。支持的端口范围为1-65535
     *     "DstIP" => (string) 目标IP。填写对应的目标IP地址
     *     "DstPort" => (string) 目标端口。可填写固定端口，也可填写端口范围。支持的端口范围为1-65535
     *     "PolicyName" => (string) 转发策略名称。默认为空
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "PolicyId" => (string) 创建时分配的策略Id
     * ]
     *
     * @return CreateNATGWPolicyResponse
     * @throws UCloudException
     */
    public function createNATGWPolicy(CreateNATGWPolicyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateNATGWPolicyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateNetworkAcl - 创建网络ACL
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/create_network_acl
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VpcId" => (string) 将要创建的ACL所属VPC的ID
     *     "AclName" => (string) ACL的名称
     *     "Description" => (string) ACL的描述
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "AclId" => (string) 创建的ACL的ID
     * ]
     *
     * @return CreateNetworkAclResponse
     * @throws UCloudException
     */
    public function createNetworkAcl(CreateNetworkAclRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateNetworkAclResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateNetworkAclAssociation - 创建ACL的绑定关系
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/create_network_acl_association
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "AclId" => (string) ACL的ID
     *     "SubnetworkId" => (string) 需要绑定的子网ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "AssociationId" => (string) 创建的绑定关系的ID
     *     "PrevAssociation" => (object) 该子网之前的绑定关系信息[
     *         "AssociationId" => (string) 绑定ID
     *         "AclId" => (string) ACL的ID
     *         "SubnetworkId" => (string) 绑定的子网ID
     *         "CreateTime" => (integer) 创建的Unix时间戳
     *     ]
     * ]
     *
     * @return CreateNetworkAclAssociationResponse
     * @throws UCloudException
     */
    public function createNetworkAclAssociation(CreateNetworkAclAssociationRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateNetworkAclAssociationResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateNetworkAclEntry - 创建ACL的规则
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/create_network_acl_entry
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "AclId" => (string) ACL的ID
     *     "Priority" => (integer) Entry的优先级，对于同样的Direction来说，不能重复
     *     "Direction" => (string) 出向或者入向（“Ingress”, "Egress")
     *     "IpProtocol" => (string) 协议规则描述
     *     "CidrBlock" => (string) IPv4段的CIDR表示
     *     "PortRange" => (string) 针对的端口范围
     *     "EntryAction" => (string) 规则的行为("Accept", "Reject")
     *     "Description" => (string) 描述。长度限制为不超过32字节。
     *     "TargetType" => (integer) 应用目标类型。0代表“子网内全部资源”，1代表“子网内指定资源”，默认为0
     *     "TargetResourceIds" => (array<string>) 应用目标资源列表。默认为全部资源生效。TargetType为0时不用填写该值。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "EntryId" => (string) 创建的Entry的ID
     * ]
     *
     * @return CreateNetworkAclEntryResponse
     * @throws UCloudException
     */
    public function createNetworkAclEntry(CreateNetworkAclEntryRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateNetworkAclEntryResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateNetworkInterface - 创建虚拟网卡
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/create_network_interface
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPCId" => (string) 所属VPCID
     *     "SubnetId" => (string) 所属子网ID
     *     "Name" => (string) 虚拟网卡名称，默认为 NetworkInterface
     *     "PrivateIp" => (array<string>) 指定内网IP。当前一个网卡仅支持绑定一个内网IP
     *     "SecurityGroupId" => (string) 防火墙GroupId，默认：Web推荐防火墙 可由DescribeSecurityGroupResponse中的GroupId取得
     *     "Tag" => (string) 业务组
     *     "Remark" => (string) 备注
     *     "SecurityMode" => (integer) 指定使用 安全组还是防火墙。为 0 时绑定防火墙，为1时绑定安全组
     *     "PrioritySecGroup" => (array<object>) [
     *         [
     *             "Priority" => (integer) 安全组优先级
     *             "SecGroupId" => (string) 安全组 ID
     *         ]
     *     ]
     *     "EipDirectMode" => (boolean) 是否开启EIP直通，默认false
     *     "EipDirectVersion" => (integer) 枚举值1:EIP网卡可见2:EIP直通默认为1
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "NetworkInterface" => (object) 若创建成功，则返回虚拟网卡信息。创建失败，无此参数[
     *         "InterfaceId" => (string) 虚拟网卡资源ID
     *         "VPCId" => (string) 所属VPC
     *         "SubnetId" => (string) 所属子网
     *         "PrivateIpSet" => (array<string>) 关联内网IP。当前一个网卡仅支持绑定一个内网IP
     *         "MacAddress" => (string) 关联Mac
     *         "Status" => (integer) 绑定状态
     *         "Name" => (string) 虚拟网卡名称
     *         "Netmask" => (string) 内网IP掩码
     *         "Gateway" => (string) 默认网关
     *         "AttachInstanceId" => (string) 绑定实例资源ID
     *         "Default" => (boolean) 是否是绑定实例的默认网卡 false:不是 true:是
     *         "CreateTime" => (integer) 创建时间
     *         "Remark" => (string) 备注
     *         "Tag" => (string) 业务组
     *         "EipDirectMode" => (boolean) 是否开启EIP直通模式
     *         "EipDirectVersion" => (integer) EIP直通版本
     *     ]
     * ]
     *
     * @return CreateNetworkInterfaceResponse
     * @throws UCloudException
     */
    public function createNetworkInterface(CreateNetworkInterfaceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateNetworkInterfaceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateRouteTable - 创建路由表
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/create_route_table
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPCId" => (string) 所属的VPC资源ID
     *     "Name" => (string) 路由表名称。默认为RouteTable
     *     "Tag" => (string) 路由表所属业务组
     *     "Remark" => (string) 备注
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "RouteTableId" => (string) 路由表ID
     * ]
     *
     * @return CreateRouteTableResponse
     * @throws UCloudException
     */
    public function createRouteTable(CreateRouteTableRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateRouteTableResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateSecGroup - 创建安全组
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/create_sec_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPCID" => (string) 资源ID所属的VPC
     *     "Name" => (string) 安全组名称，最长64个字符。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "SecGroupId" => (string) 安全组ID
     * ]
     *
     * @return CreateSecGroupResponse
     * @throws UCloudException
     */
    public function createSecGroup(CreateSecGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateSecGroupResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateSecGroupRule -
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/create_sec_group_rule
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SecGroupId" => (string) 需要添加规则的安全组资源ID。
     *     "Rule" => (array<object>) [
     *         [
     *             "Direction" => (string)  "Ingress/Egress"，入站规则/出站规则
     *             "IPRange" => (string) IP 地址信息，逗号分隔。
     *             "Priority" => (integer) 规则优先级。范围为 1~200
     *             "ProtocolType" => (string)  协议类型。"TCP","UDP","ICMP","ICMPv6","ALL"
     *             "DstPort" => (string) 目的端口。逗号分隔，如 "80,443"、"443,2000-10000"
     *             "RuleAction" => (string) 规则行为。"Accept" 或 "Drop"
     *             "Remark" => (string)  规则备注
     *             "IPVersion" => (string) IP 版本，如 “IPv4”。支持 IPv6 后废弃
     *         ]
     *     ]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "RuleId" => (array<string>) 规则 ID
     * ]
     *
     * @return CreateSecGroupRuleResponse
     * @throws UCloudException
     */
    public function createSecGroupRule(CreateSecGroupRuleRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateSecGroupRuleResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateSnatDnatRule - 调用接口后会自动创建内外网IP之间的SNAT和DNAT规则，支持TCP、UDP协议全端口
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/create_snat_dnat_rule
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "PrivateIp" => (array<string>) 内网P地址
     *     "EIP" => (array<string>) EIP的IP地址。按入参顺序，PrivateIp与EIP一一对应建立映射关系。
     *     "NATGWId" => (string) 映射所使用的NAT网关资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return CreateSnatDnatRuleResponse
     * @throws UCloudException
     */
    public function createSnatDnatRule(CreateSnatDnatRuleRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateSnatDnatRuleResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateSubnet - 创建子网
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/create_subnet
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPCId" => (string) VPC资源ID
     *     "Subnet" => (string) 子网网络地址，例如192.168.0.0
     *     "Netmask" => (integer) 子网网络号位数，默认为24
     *     "SubnetName" => (string) 子网名称，默认为Subnet
     *     "Tag" => (string) 业务组名称，默认为Default
     *     "Remark" => (string) 备注
     *     "AssociateIPv6" => (boolean) 是否关联IPv6
     *     "VPCIPv6Network" => (string) 所属VPC的IPv6网段，可选，不填默认从VPC IPv6网段中选择一个进行分配
     *     "IPv6Network" => (string) IPv6网段
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "SubnetId" => (string) 子网ID
     *     "IPv6Network" => (string) IPv6网段
     * ]
     *
     * @return CreateSubnetResponse
     * @throws UCloudException
     */
    public function createSubnet(CreateSubnetRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateSubnetResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateVPC - 创建VPC
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/create_vpc
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Name" => (string) VPC名称
     *     "Network" => (array<string>) VPC网段
     *     "Tag" => (string) 业务组名称
     *     "Remark" => (string) 备注
     *     "AssociateIPv6" => (boolean) 是否关联IPv6
     *     "OperatorName" => (string) IPv6网段类型
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "VPCId" => (string) VPC资源Id
     * ]
     *
     * @return CreateVPCResponse
     * @throws UCloudException
     */
    public function createVPC(CreateVPCRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateVPCResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateVPCIntercom - 新建VPC互通关系
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/create_vpc_intercom
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 源VPC所在地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 源VPC所在项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPCId" => (string) 源VPC短ID
     *     "DstVPCId" => (string) 目的VPC短ID
     *     "DstRegion" => (string) 目的VPC所在地域，默认与源VPC同地域。
     *     "DstProjectId" => (string) 目的VPC项目ID。默认与源VPC同项目。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return CreateVPCIntercomResponse
     * @throws UCloudException
     */
    public function createVPCIntercom(CreateVPCIntercomRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateVPCIntercomResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteNATGW - 删除NAT网关
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/delete_natgw
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目Id。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NATGWId" => (string) NAT网关Id
     *     "ReleaseEip" => (boolean) 是否释放绑定的EIP。true：解绑并释放；false：只解绑不释放。默认为false
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteNATGWResponse
     * @throws UCloudException
     */
    public function deleteNATGW(DeleteNATGWRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteNATGWResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteNATGWPolicy - 删除NAT网关端口转发规则
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/delete_natgw_policy
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目Id。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NATGWId" => (string) NAT网关Id
     *     "PolicyId" => (string) 端口转发规则Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteNATGWPolicyResponse
     * @throws UCloudException
     */
    public function deleteNATGWPolicy(DeleteNATGWPolicyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteNATGWPolicyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteNetworkAcl - 删除网络ACL
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/delete_network_acl
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "AclId" => (string) 需要删除的AclId
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteNetworkAclResponse
     * @throws UCloudException
     */
    public function deleteNetworkAcl(DeleteNetworkAclRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteNetworkAclResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteNetworkAclAssociation - 删除网络ACL绑定关系
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/delete_network_acl_association
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "AclId" => (string) 需要删除的AclId
     *     "SubnetworkId" => (string) 绑定的子网ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteNetworkAclAssociationResponse
     * @throws UCloudException
     */
    public function deleteNetworkAclAssociation(DeleteNetworkAclAssociationRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteNetworkAclAssociationResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteNetworkAclEntry - 删除ACL的规则
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/delete_network_acl_entry
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "AclId" => (string) Acl的ID
     *     "EntryId" => (string) 需要删除的EntryId
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteNetworkAclEntryResponse
     * @throws UCloudException
     */
    public function deleteNetworkAclEntry(DeleteNetworkAclEntryRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteNetworkAclEntryResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteNetworkInterface - 删除网卡
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/delete_network_interface
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InterfaceId" => (string) 虚拟网卡ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteNetworkInterfaceResponse
     * @throws UCloudException
     */
    public function deleteNetworkInterface(DeleteNetworkInterfaceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteNetworkInterfaceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteRouteTable - 删除自定义路由表
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/delete_route_table
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "RouteTableId" => (string) 路由表资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteRouteTableResponse
     * @throws UCloudException
     */
    public function deleteRouteTable(DeleteRouteTableRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteRouteTableResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteSecGroup - 删除安全组
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/delete_sec_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SecGroupId" => (array<string>) 安全组资源 Id。支持 string 数组格式。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteSecGroupResponse
     * @throws UCloudException
     */
    public function deleteSecGroup(DeleteSecGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteSecGroupResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteSecGroupRule -
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/delete_sec_group_rule
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SecGroupId" => (string) 所属安全组 ID。
     *     "RuleId" => (array<string>) 安全组规则 ID。支持 string 数组格式。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteSecGroupRuleResponse
     * @throws UCloudException
     */
    public function deleteSecGroupRule(DeleteSecGroupRuleRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteSecGroupRuleResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteSecondaryIp - 删除ip（用于uk8s使用）
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/delete_secondary_ip
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Ip" => (string) ip
     *     "Mac" => (string) mac
     *     "SubnetId" => (string) 子网Id
     *     "VPCId" => (string) VPCId
     *     "ObjectId" => (string) 资源Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteSecondaryIpResponse
     * @throws UCloudException
     */
    public function deleteSecondaryIp(DeleteSecondaryIpRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteSecondaryIpResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteSnatDnatRule - 删除NAT创建内外网IP映射规则
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/delete_snat_dnat_rule
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "EIP" => (array<string>) EIP的IP地址,PrivateIp与EIP需一一对应
     *     "PrivateIp" => (array<string>) 内网P地址
     *     "NATGWId" => (string) 映射所使用的NAT网关资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteSnatDnatRuleResponse
     * @throws UCloudException
     */
    public function deleteSnatDnatRule(DeleteSnatDnatRuleRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteSnatDnatRuleResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteSnatRule - 删除指定的出口规则（SNAT规则）
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/delete_snat_rule
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NATGWId" => (string) NAT网关的ID
     *     "SourceIp" => (string) 需要出外网的私网IP地址，例如10.9.7.xx
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteSnatRuleResponse
     * @throws UCloudException
     */
    public function deleteSnatRule(DeleteSnatRuleRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteSnatRuleResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteSubnet - 删除子网
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/delete_subnet
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SubnetId" => (string) 子网ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteSubnetResponse
     * @throws UCloudException
     */
    public function deleteSubnet(DeleteSubnetRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteSubnetResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteSubnetIPv6 - 子网取消关联IPv6
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/delete_subnet_ip_v6
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SubnetworkId" => (string) 子网ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteSubnetIPv6Response
     * @throws UCloudException
     */
    public function deleteSubnetIPv6(DeleteSubnetIPv6Request $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteSubnetIPv6Response($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteVPC - 删除VPC
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/delete_vpc
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPCId" => (string) VPC资源Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteVPCResponse
     * @throws UCloudException
     */
    public function deleteVPC(DeleteVPCRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteVPCResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteVPCIPv6 - VPC取消关联IPv6网段
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/delete_vpc_ip_v6
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPCId" => (string) VPC资源ID
     *     "IPv6Network" => (string) IPv6网段
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteVPCIPv6Response
     * @throws UCloudException
     */
    public function deleteVPCIPv6(DeleteVPCIPv6Request $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteVPCIPv6Response($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteVPCIntercom - 删除VPC互通关系
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/delete_vpc_intercom
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 源VPC所在地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 源VPC所在项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPCId" => (string) 源VPC短ID
     *     "DstVPCId" => (string) 目的VPC短ID
     *     "DstRegion" => (string) 目的VPC所在地域，默认为源VPC所在地域
     *     "DstProjectId" => (string) 目的VPC所在项目ID，默认为源VPC所在项目ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteVPCIntercomResponse
     * @throws UCloudException
     */
    public function deleteVPCIntercom(DeleteVPCIntercomRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteVPCIntercomResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteWhiteListResource - 删除NAT网关白名单列表
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/delete_white_list_resource
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目Id。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NATGWId" => (string) NAT网关Id
     *     "ResourceIds" => (array<string>) 删除白名单的资源Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteWhiteListResourceResponse
     * @throws UCloudException
     */
    public function deleteWhiteListResource(DeleteWhiteListResourceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteWhiteListResourceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeInstanceNetworkInterface - 展示云主机绑定的网卡信息
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/describe_instance_network_interface
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceId" => (string) 云主机ID
     *     "Offset" => (integer) 默认为0
     *     "Limit" => (integer) 默认为20
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "NetworkInterfaceSet" => (array<object>) 虚拟网卡信息[
     *         [
     *             "InterfaceId" => (string) 虚拟网卡资源ID
     *             "VPCId" => (string) 所属VPC
     *             "SubnetId" => (string) 所属子网
     *             "PrivateIpSet" => (array<string>) 关联内网IP。当前一个网卡仅支持绑定一个内网IP
     *             "MacAddress" => (string) 关联Mac
     *             "Status" => (integer) 绑定状态
     *             "Name" => (string) 虚拟网卡名称
     *             "Netmask" => (string) 内网IP掩码
     *             "Gateway" => (string) 默认网关
     *             "AttachInstanceId" => (string) 绑定实例资源ID
     *             "Default" => (boolean) 是否是绑定实例的默认网卡 false:不是 true:是
     *             "CreateTime" => (integer) 创建时间
     *             "Remark" => (string) 备注
     *             "Tag" => (string) 业务组
     *             "EIPIdSet" => (array<string>) 虚拟网卡绑定的EIP ID信息
     *             "FirewallIdSet" => (array<string>) 虚拟网卡绑定的防火墙ID信息
     *         ]
     *     ]
     * ]
     *
     * @return DescribeInstanceNetworkInterfaceResponse
     * @throws UCloudException
     */
    public function describeInstanceNetworkInterface(DescribeInstanceNetworkInterfaceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeInstanceNetworkInterfaceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeNATGW - 获取NAT网关信息
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/describe_natgw
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目Id。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NATGWIds" => (array<string>) NAT网关Id。默认为该项目下所有NAT网关
     *     "Offset" => (integer) 数据偏移量。默认为0
     *     "Limit" => (integer) 数据分页值。默认为20
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 满足条件的实例的总数
     *     "DataSet" => (array<object>) 查到的NATGW信息列表[
     *         [
     *             "NATGWId" => (string) natgw id
     *             "NATGWName" => (string) natgw名称
     *             "Tag" => (string) 业务组
     *             "Remark" => (string) 备注
     *             "CreateTime" => (integer) natgw创建时间
     *             "FirewallId" => (string) 绑定的防火墙Id
     *             "VPCId" => (string) 所属VPC Id
     *             "SubnetSet" => (array<object>) 子网 Id[
     *                 [
     *                     "Subnet" => (string) 子网网段
     *                     "SubnetworkId" => (string) 子网id
     *                     "SubnetName" => (string) 子网名字
     *                 ]
     *             ]
     *             "IPSet" => (array<object>) 绑定的EIP 信息[
     *                 [
     *                     "EIPId" => (string) 外网IP的 EIPId
     *                     "Weight" => (integer) 权重为100的为出口
     *                     "BandwidthType" => (string) EIP带宽类型
     *                     "Bandwidth" => (integer) 带宽
     *                     "IPResInfo" => (array<object>) 外网IP信息[
     *                         [
     *                             "OperatorName" => (string) IP的运营商信息
     *                             "EIP" => (string) 外网IP
     *                         ]
     *                     ]
     *                 ]
     *             ]
     *             "VPCName" => (string) VPC名称
     *             "IsSnatpoolEnabled" => (string) 枚举值，“enable”，默认出口规则使用了负载均衡；“disable”，默认出口规则未使用负载均衡。
     *             "PolicyId" => (array<string>) 转发策略Id
     *         ]
     *     ]
     * ]
     *
     * @return DescribeNATGWResponse
     * @throws UCloudException
     */
    public function describeNATGW(DescribeNATGWRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeNATGWResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeNATGWPolicy - 展示NAT网关端口转发规则
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/describe_natgw_policy
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目Id。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NATGWId" => (string) NAT网关Id
     *     "Limit" => (integer) 返回数据长度，默认为10000
     *     "Offset" => (integer) 列表起始位置偏移量，默认为0
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 满足条件的转发策略总数
     *     "DataSet" => (array<object>) 查到的NATGW 转发策略的详细信息[
     *         [
     *             "NATGWId" => (string) NAT网关Id
     *             "PolicyId" => (string) 转发策略Id
     *             "Protocol" => (string) 协议类型
     *             "SrcEIP" => (string) 端口转发前端EIP
     *             "SrcEIPId" => (string) 端口转发前端EIP Id
     *             "SrcPort" => (string) 源端口
     *             "DstIP" => (string) 目的地址
     *             "DstPort" => (string) 目的端口
     *             "PolicyName" => (string) 转发策略名称
     *         ]
     *     ]
     * ]
     *
     * @return DescribeNATGWPolicyResponse
     * @throws UCloudException
     */
    public function describeNATGWPolicy(DescribeNATGWPolicyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeNATGWPolicyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeNetworkAcl - 获取网络ACL
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/describe_network_acl
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Offset" => (integer) 列表偏移量
     *     "Limit" => (string) 列表获取的个数限制
     *     "VpcId" => (string) 需要获取的ACL所属的VPC的ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "AclList" => (array<object>) ACL的信息，具体结构见下方AclInfo[
     *         [
     *             "VpcId" => (string) ACL所属的VPC ID
     *             "AclId" => (string) ACL的ID
     *             "AclName" => (string) 名称
     *             "Description" => (string) 描述
     *             "Entries" => (array<object>) 所有的规则[
     *                 [
     *                     "EntryId" => (string) Entry的ID
     *                     "Priority" => (string) 优先级
     *                     "Direction" => (string) 出向或者入向
     *                     "IpProtocol" => (string) 针对的IP协议
     *                     "CidrBlock" => (string) IP段的CIDR信息
     *                     "PortRange" => (string) Port的段信息
     *                     "EntryAction" => (string) 匹配规则的动作
     *                     "TargetType" => (integer) 应用目标类型。 0代表“子网内全部资源” ，1代表“子网内指定资源” 。
     *                     "CreateTime" => (integer) 创建的Unix时间戳
     *                     "UpdateTime" => (integer) 更改的Unix时间戳
     *                     "TargetResourceList" => (array<object>) 应用目标资源信息。TargetType为0时不返回该值。具体结构见下方TargetResourceInfo[
     *                         [
     *                             "SubnetworkId" => (string) 子网ID
     *                             "ResourceName" => (string) 资源名称
     *                             "ResourceId" => (string) 资源ID
     *                             "ResourceType" => (integer) 资源类型
     *                             "SubResourceName" => (string) 资源绑定的虚拟网卡的名称
     *                             "SubResourceId" => (string) 资源绑定的虚拟网卡的ID
     *                             "SubResourceType" => (integer) 资源绑定虚拟网卡的类型
     *                             "PrivateIp" => (string) 资源内网IP
     *                         ]
     *                     ]
     *                     "TargetResourceCount" => (integer) 应用目标资源数量。TargetType为0时不返回该值。
     *                 ]
     *             ]
     *             "Associations" => (array<object>) 所有的绑定关系，具体结构见下方AssociationInfo[
     *                 [
     *                     "AssociationId" => (string) 绑定ID
     *                     "AclId" => (string) ACL的ID
     *                     "SubnetworkId" => (string) 绑定的子网ID
     *                     "CreateTime" => (integer) 创建的Unix时间戳
     *                 ]
     *             ]
     *             "CreateTime" => (integer) 创建的Unix时间戳
     *             "UpdateTime" => (integer) 更改的Unix时间戳
     *         ]
     *     ]
     * ]
     *
     * @return DescribeNetworkAclResponse
     * @throws UCloudException
     */
    public function describeNetworkAcl(DescribeNetworkAclRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeNetworkAclResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeNetworkAclAssociation - 获取网络ACL的绑定关系列表
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/describe_network_acl_association
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "AclId" => (string) Acl的ID
     *     "Offset" => (integer) 列表偏移量
     *     "Limit" => (string) 列表获取的个数限制
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "AssociationList" => (array<object>) 绑定信息列表[
     *         [
     *             "AssociationId" => (string) 绑定ID
     *             "AclId" => (string) ACL的ID
     *             "SubnetworkId" => (string) 绑定的子网ID
     *             "CreateTime" => (integer) 创建的Unix时间戳
     *         ]
     *     ]
     * ]
     *
     * @return DescribeNetworkAclAssociationResponse
     * @throws UCloudException
     */
    public function describeNetworkAclAssociation(DescribeNetworkAclAssociationRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeNetworkAclAssociationResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeNetworkAclAssociationBySubnet - 获取子网的ACL绑定信息
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/describe_network_acl_association_by_subnet
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SubnetworkId" => (string) 子网的ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Association" => (object) 绑定信息[
     *         "AssociationId" => (string) 绑定ID
     *         "AclId" => (string) ACL的ID
     *         "SubnetworkId" => (string) 绑定的子网ID
     *         "CreateTime" => (integer) 创建的Unix时间戳
     *     ]
     * ]
     *
     * @return DescribeNetworkAclAssociationBySubnetResponse
     * @throws UCloudException
     */
    public function describeNetworkAclAssociationBySubnet(DescribeNetworkAclAssociationBySubnetRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeNetworkAclAssociationBySubnetResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeNetworkAclEntry - 获取ACL的规则信息
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/describe_network_acl_entry
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "AclId" => (string) ACL的ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "EntryList" => (array<object>) 所有的规则信息[
     *         [
     *             "EntryId" => (string) Entry的ID
     *             "Priority" => (string) 优先级
     *             "Direction" => (string) 出向或者入向
     *             "IpProtocol" => (string) 针对的IP协议
     *             "CidrBlock" => (string) IP段的CIDR信息
     *             "PortRange" => (string) Port的段信息
     *             "EntryAction" => (string) 匹配规则的动作
     *             "TargetType" => (integer) 应用目标类型。 0代表“子网内全部资源” ，1代表“子网内指定资源” 。
     *             "CreateTime" => (integer) 创建的Unix时间戳
     *             "UpdateTime" => (integer) 更改的Unix时间戳
     *             "TargetResourceList" => (array<object>) 应用目标资源信息。TargetType为0时不返回该值。具体结构见下方TargetResourceInfo[
     *                 [
     *                     "SubnetworkId" => (string) 子网ID
     *                     "ResourceName" => (string) 资源名称
     *                     "ResourceId" => (string) 资源ID
     *                     "ResourceType" => (integer) 资源类型
     *                     "SubResourceName" => (string) 资源绑定的虚拟网卡的名称
     *                     "SubResourceId" => (string) 资源绑定的虚拟网卡的ID
     *                     "SubResourceType" => (integer) 资源绑定虚拟网卡的类型
     *                     "PrivateIp" => (string) 资源内网IP
     *                 ]
     *             ]
     *             "TargetResourceCount" => (integer) 应用目标资源数量。TargetType为0时不返回该值。
     *         ]
     *     ]
     * ]
     *
     * @return DescribeNetworkAclEntryResponse
     * @throws UCloudException
     */
    public function describeNetworkAclEntry(DescribeNetworkAclEntryRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeNetworkAclEntryResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeNetworkInterface - 展示虚拟网卡信息
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/describe_network_interface
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPCId" => (string) 所属VPC
     *     "SubnetId" => (string) 所属子网
     *     "InterfaceId" => (array<string>) 虚拟网卡ID,可指定 0~n
     *     "OnlyDefault" => (boolean) 若为true 只返回默认网卡默认为false
     *     "NoRecycled" => (boolean) 若为true 过滤绑定在回收站主机中的网卡。默认为false。
     *     "Tag" => (string) 业务组
     *     "Limit" => (integer) 默认为20
     *     "Offset" => (integer) 默认为0
     *     "WithSecGroup" => (boolean) 是否展示安全组信息
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "NetworkInterfaceSet" => (array<object>) 虚拟网卡信息[
     *         [
     *             "InterfaceId" => (string) 虚拟网卡资源ID
     *             "VPCId" => (string) 所属VPC
     *             "SubnetId" => (string) 所属子网
     *             "PrivateIpSet" => (array<string>) 关联内网IP。当前一个网卡仅支持绑定一个内网IP
     *             "MacAddress" => (string) 关联Mac
     *             "Status" => (integer) 绑定状态
     *             "EIPIdSet" => (array<string>) EIP Id 集合
     *             "FirewallIdSet" => (array<string>) 防火墙 ID 集合
     *             "FirewallSet" => (array<object>) 防火墙信息[
     *                 [
     *                     "Id" => (string) 防火墙资源 ID
     *                     "Name" => (string) 防火墙资源名称
     *                 ]
     *             ]
     *             "EipDirectMode" => (boolean) EIP 直通 false：不是，true：是
     *             "EipDirectionVersion" => (integer) EIP 直通版本信息
     *             "DefaultOutput" => (string) 默认IP 出口
     *             "PrivateIp" => (array<object>) 私有 IP 信息[
     *                 [
     *                     "IpType" => (string) ip类型 SecondaryIp/PrimaryIp
     *                     "IpAddr" => (array<string>) ip 地址
     *                 ]
     *             ]
     *             "IPv6AddressInfo" => (array<object>) IPv6 地址信息[
     *                 [
     *                     "IPv6Address" => (string) IPv6 地址
     *                     "IPv6Id" => (string) IPv6 资源 ID
     *                     "Attribute" => (string) 属性
     *                 ]
     *             ]
     *             "IPv6Gateway" => (string) IPv6 网关地址
     *             "IPv6Mask" => (integer) IPv6 掩码
     *             "OperatorName" => (string) 运营商
     *             "SecGroupCount" => (integer) 关联安全组数量
     *             "SecGroup" => (array<object>) 关联安全组信息[
     *                 [
     *                     "Name" => (string) 安全组名称
     *                     "Priority" => (integer) 关联优先级
     *                     "SecGroupId" => (string) 安全组ID
     *                 ]
     *             ]
     *             "Name" => (string) 虚拟网卡名称
     *             "Netmask" => (string) 内网IP掩码
     *             "Gateway" => (string) 默认网关
     *             "AttachInstanceId" => (string) 绑定实例资源ID
     *             "Default" => (boolean) 是否是绑定实例的默认网卡 false:不是 true:是
     *             "CreateTime" => (integer) 创建时间
     *             "Remark" => (string) 备注
     *             "Tag" => (string) 业务组
     *             "PrivateIpLimit" => (object) 私有 IP 配额[
     *                 "PrivateIpCount" => (integer) 网卡拥有的内网IP数量
     *                 "PrivateIpQuota" => (integer) 网卡内网IP配额
     *             ]
     *         ]
     *     ]
     *     "TotalCount" => (integer) 虚拟网卡总数
     * ]
     *
     * @return DescribeNetworkInterfaceResponse
     * @throws UCloudException
     */
    public function describeNetworkInterface(DescribeNetworkInterfaceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeNetworkInterfaceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeResourceSecGroup - 查询资源绑定的安全组信息
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/describe_resource_sec_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ResourceType" => (string) 资源类型，如 uhost, uni
     *     "Offset" => (integer) 分页查询时的偏移量。传入了 ResourceId 则不分页。
     *     "Limit" => (integer) 分页查询时的最大返回资源数量。
     *     "VPCId" => (string) VPC ID。非必须，分页使用（分页时，也可不传）；ResourceId 非空时，忽略
     *     "ResourceId" => (array<string>) 资源 ID 数组，如果指定则不分页；否则分页获取该账号下的指定类型的资源。支持  string 数组格式。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 资源总数量。传入 ResourceId 时，为传入资源中的有效资源数量。
     *     "DataSet" => (array<object>) 资源绑定的安全组信息[
     *         [
     *             "ResourceId" => (string) 资源 ID
     *             "ResourceName" => (string) 资源名称
     *             "Count" => (integer) 该资源绑定的安全组数量
     *             "SecGroupInfo" => (array<object>) 绑定安全组信息[
     *                 [
     *                     "SecGroupId" => (string) 安全组 ID
     *                     "Name" => (string) 安全组名称
     *                     "VPCId" => (string) 安全组所属 VPC
     *                     "Priority" => (integer) 该资源与该安全组绑定的优先级
     *                 ]
     *             ]
     *             "PermitAssociate" => (boolean) 表示是否允许绑定安全组
     *             "ExInfo" => (object) 资源额外信息[
     *                 "SuperResourceId" => (string) 父级资源ID
     *                 "ResourceName" => (string) 资源名称
     *                 "IP" => (array<string>) 主机内网IP
     *                 "EIP" => (array<string>) 主机外网IP
     *                 "Uni" => (array<object>) 弹性网卡信息[
     *                     [
     *                         "ResourceId" => (string) 资源ID
     *                         "Count" => (integer) 资源绑定安全组数量
     *                         "SecGroupInfo" => (array<object>) 详见SecGroupSimpleInfo[
     *                             [
     *                                 "SecGroupId" => (string) 安全组资源ID
     *                                 "Name" => (string) 安全组名称
     *                             ]
     *                         ]
     *                     ]
     *                 ]
     *                 "SuperResourceName" => (string) 父级资源名称
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return DescribeResourceSecGroupResponse
     * @throws UCloudException
     */
    public function describeResourceSecGroup(DescribeResourceSecGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeResourceSecGroupResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeRouteTable - 获取路由表详细信息(包括路由策略)
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/describe_route_table
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPCId" => (string) 所属VPC的资源ID
     *     "RouteTableId" => (string) 路由表资源ID
     *     "OffSet" => (integer) 数据偏移量。默认为0
     *     "Limit" => (integer) 数据分页值。默认为20
     *     "BusinessId" => (string) 业务组ID
     *     "Brief" => (boolean) 默认为 false, 返回详细路由规则信息
     *     "LongId" => (string) 默认为 false, 表示路由表是短 ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "RouteTables" => (array<object>) 路由表信息[
     *         [
     *             "RouteTableId" => (string) 路由表资源ID
     *             "RouteTableType" => (integer) 路由表类型。1为默认路由表，0为自定义路由表
     *             "SubnetCount" => (integer) 绑定该路由表的子网数量
     *             "SubnetIds" => (array<string>) 绑定该路由表的子网
     *             "VPCId" => (string) 路由表所属的VPC资源ID
     *             "VPCName" => (string) 路由表所属的VPC资源名称
     *             "Tag" => (string) 路由表所属业务组
     *             "Remark" => (string) 路由表备注
     *             "CreateTime" => (integer) 创建时间戳
     *             "RouteRules" => (array<object>) 路由规则[
     *                 [
     *                     "AccountId" => (integer) 项目ID信息
     *                     "DstAddr" => (string) 目的地址
     *                     "DstPort" => (integer) 保留字段，暂未使用
     *                     "NexthopId" => (string) 路由下一跳资源ID
     *                     "NexthopType" => (string) 路由表下一跳类型。LOCAL，本VPC内部通信路由；PUBLIC，公共服务路由；CNAT，外网路由；UDPN，跨域高速通道路由；HYBRIDGW，混合云路由；INSTANCE，实例路由；VNET，VPC联通路由；IPSEC VPN，指向VPN网关的路由。
     *                     "InstanceType" => (string) 实例类型，枚举值：UHOST，云主机；UNI，虚拟网卡；PHOST，物理云主机
     *                     "OriginAddr" => (string) 保留字段，暂未使用
     *                     "Priority" => (integer) 保留字段，暂未使用
     *                     "Remark" => (string) 路由规则备注
     *                     "RouteRuleId" => (string) 规则ID
     *                     "RouteTableId" => (string) 路由表资源ID
     *                     "RuleType" => (integer) 路由规则类型。0，系统路由规则；1，自定义路由规则
     *                     "SrcAddr" => (string) 保留字段，暂未使用
     *                     "SrcPort" => (integer) 保留字段，暂未使用
     *                     "VNetId" => (string) 所属的VPC
     *                 ]
     *             ]
     *         ]
     *     ]
     *     "TotalCount" => (integer) RouteTables字段的数量
     * ]
     *
     * @return DescribeRouteTableResponse
     * @throws UCloudException
     */
    public function describeRouteTable(DescribeRouteTableRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeRouteTableResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeSecGroup -
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/describe_sec_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Limit" => (integer) 分页查询数据长度。默认为20
     *     "Offset" => (integer) 分页查询起始位置偏移量。默认为0
     *     "VPCId" => (string) 资源ID所属的 VPC ID
     *     "SecGroupId" => (array<string>) 安全组资源 ID 数组，传入则 Offset/Limit/BusinessId 失效。支持数组格式。Type 为 string 数组。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 详见SecGroupInfo[
     *         [
     *             "SecGroupId" => (string) 安全组资源ID
     *             "Name" => (string) 安全组名称
     *             "VPCId" => (string) VPC资源ID
     *             "Account" => (integer) 用户 ID
     *             "Tag" => (string) 业务组
     *             "Remark" => (string) 备注
     *             "Type" => (string) 安全组类型，枚举值为： "user defined", 自定义创建安全组； "recommend web", 使用Web模板创建的安全组； "recommend non web", 使用非Web模板创建的安全组
     *             "CreateTime" => (integer) 创建的时间，格式为Unix Timestamp，如 1747030299
     *             "Rule" => (array<object>) 安全组组中的规则列表，参见 SecGroupRuleInfo[
     *                 [
     *                     "RuleId" => (string) 规则ID
     *                     "Direction" => (string) "Ingress/Egress"，入站规则/出站规则
     *                     "IPRange" => (string) 地址
     *                     "Priority" => (integer) 优先级
     *                     "ProtocolType" => (string) 协议类型
     *                     "DstPort" => (string) 目标端口
     *                     "RuleAction" => (string) 匹配策略
     *                     "Remark" => (string) 安全组规则备注
     *                     "IPVersion" => (string) IP 版本，如 "IPv4"。支持 IPv6 后废弃
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return DescribeSecGroupResponse
     * @throws UCloudException
     */
    public function describeSecGroup(DescribeSecGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeSecGroupResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeSecGroupResource - 获取安全组绑资源信息
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/describe_sec_group_resource
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SecGroupId" => (string) 安全组资源ID。
     *     "Limit" => (integer) 分页查询长度。默认为20
     *     "Offset" => (integer) 分页查询起始位置偏移量。默认为0
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 详见SecGroupResourceInfo[
     *         [
     *             "Zone" => (integer) 可用区
     *             "SubResourceName" => (string) 绑定的虚拟网卡的名称
     *             "SubResourceId" => (string) 资源绑定的虚拟网卡的ID
     *             "SubResourceType" => (string) 绑定的虚拟网卡的类型，“uni”，虚拟网卡
     *             "Name" => (string) 名称
     *             "PrivateIp" => (string) 内网IP
     *             "ResourceId" => (string) 资源ID
     *             "ResourceType" => (string) 资源类型。"unatgw"，NAT网关； "uhost"，云主机； "upm"，物理云主机； "hadoophost"，hadoop节点； "fortresshost"，堡垒机； "udhost"，私有专区主机；"udockhost"，容器；"dbaudit"，数据库审计，“uni”，虚拟网卡。
     *             "Tag" => (string) 业务组
     *         ]
     *     ]
     *     "TotalCount" => (integer) 安全组绑定的资源总数
     * ]
     *
     * @return DescribeSecGroupResourceResponse
     * @throws UCloudException
     */
    public function describeSecGroupResource(DescribeSecGroupResourceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeSecGroupResourceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeSecondaryIp - 查询SecondaryIp（uk8s使用）
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/describe_secondary_ip
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SubnetId" => (string) 子网Id
     *     "VPCId" => (string) VPCId
     *     "Ip" => (string) Ip
     *     "Mac" => (string) Mac
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) [
     *         [
     *             "Ip" => (string)
     *             "Mask" => (string)
     *             "Gateway" => (string)
     *             "Mac" => (string)
     *             "SubnetId" => (string)
     *             "VPCId" => (string)
     *         ]
     *     ]
     * ]
     *
     * @return DescribeSecondaryIpResponse
     * @throws UCloudException
     */
    public function describeSecondaryIp(DescribeSecondaryIpRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeSecondaryIpResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeSnatDnatRule - 获取基于NAT创建的内外网IP映射规则信息
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/describe_snat_dnat_rule
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NATGWId" => (array<string>) 获取NAT上添加的所有SnatDnatRule信息
     *     "EIP" => (array<string>) 获取EIP对应的SnatDnatRule信息
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 规则信息[
     *         [
     *             "PrivateIp" => (string) 内网IP地址
     *             "NATGWId" => (string) 映射所使用的NAT网关资源ID
     *             "EIP" => (string) EIP的IP地址
     *         ]
     *     ]
     * ]
     *
     * @return DescribeSnatDnatRuleResponse
     * @throws UCloudException
     */
    public function describeSnatDnatRule(DescribeSnatDnatRuleRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeSnatDnatRuleResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeSnatRule - 获取Nat网关的出口规则（SNAT规则）
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/describe_snat_rule
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NATGWId" => (string) NAT网关的ID
     *     "SourceIp" => (string) 需要出外网的私网IP地址，例如10.9.7.xx
     *     "SnatIp" => (string) EIP的ip地址,例如106.75.xx.xx
     *     "Offset" => (string) 偏移，默认为0
     *     "Limit" => (string) 分页，默认为20
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 某个NAT网关的所有Snat规则[
     *         [
     *             "SnatIp" => (string) EIP地址，如106.76.xx.xx
     *             "SourceIp" => (string) 资源的内网IP地址
     *             "SubnetworkId" => (string) SourceIp所属的子网id
     *             "Name" => (string) snat规则名称
     *         ]
     *     ]
     *     "TotalCount" => (integer) 规则数量
     * ]
     *
     * @return DescribeSnatRuleResponse
     * @throws UCloudException
     */
    public function describeSnatRule(DescribeSnatRuleRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeSnatRuleResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeSubnet - 获取子网信息
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/describe_subnet
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SubnetIds" => (array<string>) 子网id数组，适用于一次查询多个子网信息
     *     "SubnetId" => (string) 子网id，适用于一次查询一个子网信息
     *     "RouteTableId" => (string) 路由表Id
     *     "VPCId" => (string) VPC资源id
     *     "Tag" => (string) 业务组名称，默认为Default
     *     "Offset" => (integer) 偏移量，默认为0
     *     "Limit" => (integer) 列表长度，默认为20
     *     "ShowAvailableIPs" => (boolean) 是否返回子网的可用IP数，true为是，false为否，默认不返回
     *     "IgnoreResource" => (boolean) 默认为 false针对控制台调用，可设置为true，不进行控制台非必要数据的查询
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 子网总数量
     *     "DataSet" => (array<object>) 子网信息数组，具体资源见下方SubnetInfo[
     *         [
     *             "Zone" => (string) 可用区名称
     *             "IPv6Network" => (string) IPv6网段
     *             "VPCId" => (string) VPCId
     *             "VPCName" => (string) VPC名称
     *             "SubnetId" => (string) 子网Id
     *             "SubnetName" => (string) 子网名称
     *             "Remark" => (string) 备注
     *             "Tag" => (string) 业务组
     *             "SubnetType" => (integer) 子网类型
     *             "Subnet" => (string) 子网网段
     *             "Netmask" => (string) 子网掩码
     *             "Gateway" => (string) 子网网关
     *             "CreateTime" => (integer) 创建时间
     *             "HasNATGW" => (boolean) 是否有natgw
     *             "RouteTableId" => (string) 路由表Id
     *             "AvailableIPs" => (integer) 可用IP数量
     *             "AvailableIPv6Count" => (integer) 可用IPv6数量
     *         ]
     *     ]
     * ]
     *
     * @return DescribeSubnetResponse
     * @throws UCloudException
     */
    public function describeSubnet(DescribeSubnetRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeSubnetResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeSubnetResource - 展示子网资源
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/describe_subnet_resource
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SubnetId" => (string) 子网id
     *     "ResourceType" => (string) 资源类型，默认为全部资源类型。枚举值为：UHOST，云主机；PHOST，物理云主机；ULB，负载均衡；UHADOOP_HOST，hadoop节点；UFORTRESS_HOST，堡垒机；UNATGW，NAT网关；UKAFKA，Kafka消息队列；UMEM，内存存储；DOCKER，容器集群；UDB，数据库；UDW，数据仓库；VIP，内网VIP.
     *     "Offset" => (integer) 列表起始位置偏移量，默认为0
     *     "Limit" => (integer) 单页返回数据长度，默认为20
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 总数
     *     "DataSet" => (array<object>) 返回数据集，请见SubnetResource[
     *         [
     *             "Name" => (string) 资源名称
     *             "ResourceId" => (string) 资源Id
     *             "ResourceType" => (string) 资源类型。对应的资源类型：UHOST，云主机；PHOST，物理云主机；ULB，负载均衡；UHADOOP_HOST，hadoop节点；UFORTRESS_HOST，堡垒机；UNATGW，NAT网关；UKAFKA，Kafka消息队列；UMEM，内存存储；DOCKER，容器集群；UDB，数据库；UDW，数据仓库；VIP，内网VIP.
     *             "SubResourceName" => (string) 资源绑定的虚拟网卡的实例名称
     *             "SubResourceId" => (string) 资源绑定的虚拟网卡的实例ID
     *             "SubResourceType" => (string) 资源绑定的虚拟网卡的类型
     *             "IP" => (string) 资源ip
     *             "IPv6Address" => (string) 资源的IPv6地址
     *         ]
     *     ]
     * ]
     *
     * @return DescribeSubnetResourceResponse
     * @throws UCloudException
     */
    public function describeSubnetResource(DescribeSubnetResourceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeSubnetResourceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeVIP - 获取内网VIP详细信息
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/describe_vip
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPCId" => (string) vpc的id,指定SubnetId时必填
     *     "SubnetId" => (string) 子网id，不指定则获取VPCId下的所有vip
     *     "VIPId" => (string) VIP ID
     *     "Tag" => (string) 业务组名称, 默认为 Default
     *     "BusinessId" => (string) 业务组
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "VIPSet" => (array<object>) 内网VIP详情，请见VIPDetailSet[
     *         [
     *             "Zone" => (string) 地域
     *             "VIPId" => (string) 虚拟ip id
     *             "CreateTime" => (integer) 创建时间
     *             "RealIp" => (string) 真实主机ip
     *             "VIP" => (string) 虚拟ip
     *             "SubnetId" => (string) 子网id
     *             "VPCId" => (string) VPC id
     *             "Name" => (string) VIP名称
     *             "Remark" => (string) VIP备注
     *             "Tag" => (string) VIP所属业务组
     *         ]
     *     ]
     *     "DataSet" => (array<string>) 内网VIP地址列表
     *     "TotalCount" => (integer) vip数量
     * ]
     *
     * @return DescribeVIPResponse
     * @throws UCloudException
     */
    public function describeVIP(DescribeVIPRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeVIPResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeVPC - 获取VPC信息
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/describe_vpc
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPCIds" => (array<string>) VPCId
     *     "Tag" => (string) 业务组名称
     *     "Offset" => (integer) 数据偏移量，默认为0
     *     "Limit" => (integer) 数据分页值
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) vpc信息，具体结构见下方VPCInfo[
     *         [
     *             "NetworkInfo" => (array<object>) vpc地址空间信息，详见VPCNetworkInfo[
     *                 [
     *                     "Network" => (string) vpc地址空间
     *                     "SubnetCount" => (integer) 地址空间中子网数量
     *                 ]
     *             ]
     *             "SubnetCount" => (integer) 子网数
     *             "CreateTime" => (integer) 创建时间
     *             "UpdateTime" => (integer) 更新时间
     *             "Tag" => (string) 业务组
     *             "Name" => (string) VPC名称
     *             "VPCType" => (string) DefaultVPC 默认VPC，DefinedVPC，自定义VPC     
     *             "VPCId" => (string) VPC资源ID
     *             "Network" => (array<string>) VPC网段
     *             "IPv6Network" => (string) VPC关联的IPv6网段
     *             "OperatorName" => (string) VPC关联的IPv6网段所属运营商
     *             "IPv6NetworkInfos" => (array<object>) VPC关联的IPv6网段信息[
     *                 [
     *                     "IPv6Network" => (string) IPv6网段
     *                     "OperatorName" => (string) 类型
     *                     "IPv6SubnetCount" => (integer) IPv6子网数量
     *                 ]
     *             ]
     *         ]
     *     ]
     *     "TotalCount" => (integer)
     * ]
     *
     * @return DescribeVPCResponse
     * @throws UCloudException
     */
    public function describeVPC(DescribeVPCRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeVPCResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeVPCIntercom - 获取VPC互通信息
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/describe_vpc_intercom
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 源VPC所在地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 源VPC所在项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPCId" => (string) VPC短ID
     *     "DstRegion" => (string) 目的VPC所在地域，默认为全部地域
     *     "DstProjectId" => (string) 目的项目ID，默认为全部项目
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 联通VPC信息数组[
     *         [
     *             "ProjectId" => (string) 项目Id
     *             "VPCType" => (integer) vpc类型（1表示托管VPC，0表示公有云VPC）
     *             "AccountId" => (integer) 项目Id（数字）
     *             "Network" => (array<string>) VPC的地址空间
     *             "DstRegion" => (string) 所属地域
     *             "Name" => (string) VPC名字
     *             "VPCId" => (string) VPCId
     *             "Tag" => (string) 业务组（未分组显示为 Default）
     *         ]
     *     ]
     * ]
     *
     * @return DescribeVPCIntercomResponse
     * @throws UCloudException
     */
    public function describeVPCIntercom(DescribeVPCIntercomRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeVPCIntercomResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeWhiteListResource - 展示NAT网关白名单资源列表
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/describe_white_list_resource
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目id
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "NATGWIds" => (array<string>) NAT网关的Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 白名单资源的详细信息，详见DescribeResourceWhiteListDataSet[
     *         [
     *             "NATGWId" => (string) NATGateWay Id
     *             "IfOpen" => (integer) 白名单开关标记
     *             "ObjectIPInfo" => (array<object>) 白名单详情[
     *                 [
     *                     "GwType" => (string) natgw字符串
     *                     "PrivateIP" => (string) 白名单资源的内网IP
     *                     "ResourceId" => (string) 白名单资源Id信息
     *                     "ResourceName" => (string) 白名单资源名称
     *                     "ResourceType" => (string) 白名单资源类型
     *                     "SubResourceId" => (string) 资源绑定的虚拟网卡的实例ID
     *                     "SubResourceName" => (string) 资源绑定的虚拟网卡的实例名称
     *                     "SubResourceType" => (string) 资源绑定的虚拟网卡的类型
     *                     "VPCId" => (string) 白名单资源所属VPCId
     *                 ]
     *             ]
     *         ]
     *     ]
     *     "TotalCount" => (integer) 上述DataSet总数量
     * ]
     *
     * @return DescribeWhiteListResourceResponse
     * @throws UCloudException
     */
    public function describeWhiteListResource(DescribeWhiteListResourceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeWhiteListResourceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DetachNetworkInterface - 解绑云主机关联网卡
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/detach_network_interface
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InterfaceId" => (string) 虚拟网卡ID
     *     "InstanceId" => (string) 云主机ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DetachNetworkInterfaceResponse
     * @throws UCloudException
     */
    public function detachNetworkInterface(DetachNetworkInterfaceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DetachNetworkInterfaceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DisableUniEipDirectMode - 关闭虚拟网卡EIP直通功能
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/disable_uni_eip_direct_mode
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPCId" => (string) VPC ID
     *     "InterfaceId" => (string) 虚拟网卡ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DisableUniEipDirectModeResponse
     * @throws UCloudException
     */
    public function disableUniEipDirectMode(DisableUniEipDirectModeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DisableUniEipDirectModeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DisableVPCIPv6 - VPC关闭IPv6
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/disable_vpc_ip_v6
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPCId" => (string) VPC资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DisableVPCIPv6Response
     * @throws UCloudException
     */
    public function disableVPCIPv6(DisableVPCIPv6Request $request = null)
    {
        $resp = $this->invoke($request);
        return new DisableVPCIPv6Response($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DisassociateSecGroup - 解绑安全组和资源绑定关系
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/disassociate_sec_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SecGroupId" => (array<string>) 安全组ID，不传表示解绑安全组绑定的所以资源，安全组ID和资源ID至少传一个,且只能有一个批量。支持 string 数组格式。
     *     "ResourceId" => (array<string>) 资源ID，不传表示解绑资源上所有安全组，安全组ID和资源ID至少传一个，且只能有一个批量。支持 string 数组格式。
     *     "Force" => (boolean) 是否强制解绑。默认为 false。为 true 表示强制解绑，用于删除资源前的解绑，因为开启安全组特性的资源至少绑定一个安全组，正常情况下是不允许解绑所有安全组。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DisassociateSecGroupResponse
     * @throws UCloudException
     */
    public function disassociateSecGroup(DisassociateSecGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DisassociateSecGroupResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * EnableUniEipDirectMode - 开启虚拟网卡EIP直通功能
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/enable_uni_eip_direct_mode
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPCId" => (string) VPC ID
     *     "InterfaceId" => (string) 虚拟网卡ID
     *     "EipDirectVersion" => (integer) 枚举值：1-EIP网卡可见2-EIP直通默认为1
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return EnableUniEipDirectModeResponse
     * @throws UCloudException
     */
    public function enableUniEipDirectMode(EnableUniEipDirectModeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new EnableUniEipDirectModeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * EnableWhiteList - 修改NAT网关白名单开关
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/enable_white_list
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目Id。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NATGWId" => (string) NAT网关Id
     *     "IfOpen" => (integer) 白名单开关标记。0：关闭；1：开启。默认为0
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return EnableWhiteListResponse
     * @throws UCloudException
     */
    public function enableWhiteList(EnableWhiteListRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new EnableWhiteListResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetAvailableResourceForPolicy - 获取NAT网关可配置端口转发规则的资源信息
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/get_available_resource_for_policy
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目Id。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NATGWId" => (string) NAT网关Id
     *     "Limit" => (integer) 返回数据长度，默认为20
     *     "Offset" => (integer) 列表起始位置偏移量，默认为0
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 支持资源类型的信息[
     *         [
     *             "ResourceId" => (string) 资源的Id
     *             "PrivateIP" => (string) 资源对应的内网Ip
     *             "ResourceType" => (string) 资源类型。"uhost"：云主机； "upm"，物理云主机； "hadoophost"：hadoop节点； "fortresshost"：堡垒机： "udockhost"，容器
     *         ]
     *     ]
     *     "TotalCount" => (integer) 可配置端口转发规则的资源总数
     * ]
     *
     * @return GetAvailableResourceForPolicyResponse
     * @throws UCloudException
     */
    public function getAvailableResourceForPolicy(GetAvailableResourceForPolicyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetAvailableResourceForPolicyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetAvailableResourceForSnatRule - 获取可用于添加snat规则（出口规则）的资源列表
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/get_available_resource_for_snat_rule
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NATGWId" => (string) NAT网关Id
     *     "Offset" => (integer) 数据偏移量, 默认为0
     *     "Limit" => (integer) 数据分页值, 默认为20
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 返回的资源详细信息[
     *         [
     *             "ResourceId" => (string) 资源ID
     *             "ResourceName" => (string) 资源名称
     *             "PrivateIP" => (string) 资源内网IP
     *             "ResourceType" => (string) 资源类型
     *             "SubnetworkId" => (string) 资源所属VPC的ID
     *             "VPCId" => (string) 资源所属子网的ID
     *         ]
     *     ]
     *     "TotalCount" => (integer) 总数
     * ]
     *
     * @return GetAvailableResourceForSnatRuleResponse
     * @throws UCloudException
     */
    public function getAvailableResourceForSnatRule(GetAvailableResourceForSnatRuleRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetAvailableResourceForSnatRuleResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetAvailableResourceForWhiteList - 获取NAT网关可添加白名单的资源
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/get_available_resource_for_white_list
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目Id。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NATGWId" => (string) NAT网关Id
     *     "Offset" => (integer) 数据偏移量, 默认为0
     *     "Limit" => (integer) 数据分页值, 默认为20
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 返回白名单列表的详细信息[
     *         [
     *             "ResourceId" => (string) 资源类型Id
     *             "ResourceName" => (string) 资源名称
     *             "PrivateIP" => (string) 资源的内网Ip
     *             "ResourceType" => (string) 资源类型。"uhost"：云主机； "upm"，物理云主机； "hadoophost"：hadoop节点； "fortresshost"：堡垒机： "udockhost"，容器
     *             "SubResourceName" => (string) 资源绑定的虚拟网卡的实例名称
     *             "VPCId" => (string) 资源所属VPCId
     *             "SubnetworkId" => (string) 资源所属子网Id
     *             "SubResourceId" => (string) 资源绑定的虚拟网卡的实例ID
     *             "SubResourceType" => (string) 资源绑定的虚拟网卡的实例类型
     *         ]
     *     ]
     *     "TotalCount" => (integer) 白名单资源列表的总的个数
     * ]
     *
     * @return GetAvailableResourceForWhiteListResponse
     * @throws UCloudException
     */
    public function getAvailableResourceForWhiteList(GetAvailableResourceForWhiteListRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetAvailableResourceForWhiteListResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetNetworkAclTargetResource - 获取ACL规则应用目标列表
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/get_network_acl_target_resource
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SubnetworkId" => (array<string>) 子网ID。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TargetResourceList" => (array<object>) ACL规则应用目标资源列表，具体结构见下方TargetResourceInfo[
     *         [
     *             "SubnetworkId" => (string) 子网ID
     *             "ResourceName" => (string) 资源名称
     *             "ResourceId" => (string) 资源ID
     *             "ResourceType" => (integer) 资源类型
     *             "SubResourceName" => (string) 资源绑定的虚拟网卡的名称
     *             "SubResourceId" => (string) 资源绑定的虚拟网卡的ID
     *             "SubResourceType" => (integer) 资源绑定虚拟网卡的类型
     *             "PrivateIp" => (string) 资源内网IP
     *         ]
     *     ]
     *     "TotalCount" => (integer) ACL规则应用目标资源总数
     * ]
     *
     * @return GetNetworkAclTargetResourceResponse
     * @throws UCloudException
     */
    public function getNetworkAclTargetResource(GetNetworkAclTargetResourceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetNetworkAclTargetResourceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListSubnetForNATGW - 展示NAT网关可绑定的子网列表
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/list_subnet_for_natgw
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目Id。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPCId" => (string) NAT网关所属VPC Id。默认值为Default VPC Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 具体参数请见NatgwSubnetDataSet[
     *         [
     *             "Subnet" => (string) 子网网段
     *             "Netmask" => (string) 掩码
     *             "HasNATGW" => (boolean) 是否绑定NATGW
     *             "SubnetId" => (string) 子网id
     *             "SubnetName" => (string) 子网名字
     *         ]
     *     ]
     * ]
     *
     * @return ListSubnetForNATGWResponse
     * @throws UCloudException
     */
    public function listSubnetForNATGW(ListSubnetForNATGWRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListSubnetForNATGWResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyRouteRule - 路由策略增、删、改
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/modify_route_rule
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "RouteTableId" => (string) 通过DescribeRouteTable拿到
     *     "RouteRule" => (array<string>) 格式: RouteRuleId | 目的网段 | 下一跳类型（支持INSTANCE、VIP） | 下一跳 |优先级（保留字段，填写0即可）| 备注 | 增、删、改标志（add/delete/update） 。"添加"示例: test_id | 10.8.0.0/16 | instance | uhost-xd8ja | 0 | Default Route Rule| add (添加的RouteRuleId填任意非空字符串) 。"删除"示例: routerule-xk3jxa | 10.8.0.0/16 | instance | uhost-xd8ja | 0 | Default Route Rule| delete (RouteRuleId来自DescribeRouteTable中)     。“修改”示例: routerule-xk3jxa | 10.8.0.0/16 | instance | uhost-cjksa2 | 0 | Default Route Rule| update (RouteRuleId来自DescribeRouteTable中)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ModifyRouteRuleResponse
     * @throws UCloudException
     */
    public function modifyRouteRule(ModifyRouteRuleRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyRouteRuleResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * MoveSecondaryIPMac - 把 Secondary IP 从旧 MAC 迁移到新 MAC
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/move_secondary_ip_mac
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Ip" => (string) Secondary IP
     *     "OldMac" => (string) 旧 Mac。Secondary IP 当前所绑定的 Mac
     *     "NewMac" => (string) 新 Mac。Secondary IP 迁移的目的 Mac
     *     "SubnetId" => (string) 子网 ID。IP/OldMac/NewMac 三者必须在同一子网
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return MoveSecondaryIPMacResponse
     * @throws UCloudException
     */
    public function moveSecondaryIPMac(MoveSecondaryIPMacRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new MoveSecondaryIPMacResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ReleaseVIP - 释放VIP资源
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/release_vip
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域
     *     "Zone" => (string) 可用区
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写
     *     "VIPId" => (string) 内网VIP的id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ReleaseVIPResponse
     * @throws UCloudException
     */
    public function releaseVIP(ReleaseVIPRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ReleaseVIPResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * SetGwDefaultExport - 设置NAT网关的默认出口
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/set_gw_default_export
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目Id。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NATGWId" => (string) NAT网关Id
     *     "ExportIp" => (string) NAT网关绑定的EIP。ExportIp和ExportEipId必填一个
     *     "ExportEipId" => (string) NAT网关绑定的EIP Id。ExportIp和ExportEipId必填一个
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return SetGwDefaultExportResponse
     * @throws UCloudException
     */
    public function setGwDefaultExport(SetGwDefaultExportRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new SetGwDefaultExportResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * SwitchToFirewall - 切换至防火墙模式
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/switch_to_firewall
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ResourceId" => (string) 资源ID。资源类型为 UHost、UNI、PAAS 资源
     *     "Firewall" => (string) 防火墙 ID
     *     "NodeToFirewall" => (string) map[string]string，string 到 防火墙 ID 的映射。ResourceId是uhost则Node是uni；ResourceId是uhadoop则Node是hadoophost
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return SwitchToFirewallResponse
     * @throws UCloudException
     */
    public function switchToFirewall(SwitchToFirewallRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new SwitchToFirewallResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * SwitchToSecGroup - 切换至安全组模式
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/switch_to_sec_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ResourceId" => (string) 资源ID。资源类型为 UHost、UNI、PAAS 资源
     *     "IsRemoveFirewall" => (boolean) 是否移除当前的防火墙（且绑定默认全通的防火墙）
     *     "PrioritySecGroup" => (array<string>) PrioritySecGroup类型的数组
     *     "UniToPrioritySecGroup" => (string) map[string][]PrioritySecGroup， string 到 PrioritySecGroup 数组的映射
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return SwitchToSecGroupResponse
     * @throws UCloudException
     */
    public function switchToSecGroup(SwitchToSecGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new SwitchToSecGroupResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UnassignIPv6 - 释放IPv6地址
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/unassign_ip_v6
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ObjectId" => (string) 资源ID
     *     "IPv6Addresses" => (array<string>) IPv6地址
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UnassignIPv6Response
     * @throws UCloudException
     */
    public function unassignIPv6(UnassignIPv6Request $request = null)
    {
        $resp = $this->invoke($request);
        return new UnassignIPv6Response($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateNATGW - 更新nat网关基本信息
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/update_natgw
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NATGWId" => (string) natgw id
     *     "NATGWName" => (string) NATGateWay 名字
     *     "Tag" => (string) 业务组
     *     "Remark" => (string) 备注
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateNATGWResponse
     * @throws UCloudException
     */
    public function updateNATGW(UpdateNATGWRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateNATGWResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateNATGWPolicy - 更新NAT网关端口转发规则
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/update_natgw_policy
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目Id。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NATGWId" => (string) NAT网关Id
     *     "PolicyId" => (string) 转发策略Id
     *     "Protocol" => (string) 协议类型。枚举值为：TCP 、 UDP
     *     "SrcEIPId" => (string) 源IP。填写对应的EIP Id
     *     "SrcPort" => (string) 源端口。可填写固定端口，也可填写端口范围。支持的端口范围为1-6553
     *     "DstIP" => (string) 目标IP。填写对应的目标IP地址
     *     "DstPort" => (string) 目标端口。可填写固定端口，也可填写端口范围。支持的端口范围为1-65535
     *     "PolicyName" => (string) 转发策略名称。默认为空
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateNATGWPolicyResponse
     * @throws UCloudException
     */
    public function updateNATGWPolicy(UpdateNATGWPolicyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateNATGWPolicyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateNATGWSnatpool - NAT网关默认出口规则是否开启Snatpool，若开启，对应控制台上的负载均衡流量出口方式。
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/update_natgw_snatpool
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NATGWId" => (string) NAT网关的资源ID
     *     "IsSnatpoolEnabled" => (string) 开启，"enable"；关闭，"disable"；
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateNATGWSnatpoolResponse
     * @throws UCloudException
     */
    public function updateNATGWSnatpool(UpdateNATGWSnatpoolRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateNATGWSnatpoolResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateNATGWSubnet - 更新NAT网关绑定的子网
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/update_natgw_subnet
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目Id。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NATGWId" => (string) NAT网关Id
     *     "SubnetworkIds" => (array<string>) NAT网关绑定的子网Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateNATGWSubnetResponse
     * @throws UCloudException
     */
    public function updateNATGWSubnet(UpdateNATGWSubnetRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateNATGWSubnetResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateNetworkAcl - 更改ACL
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/update_network_acl
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "AclName" => (string) Acl的名称
     *     "AclId" => (string) 需要更改的ACL ID
     *     "Description" => (string) 描述
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateNetworkAclResponse
     * @throws UCloudException
     */
    public function updateNetworkAcl(UpdateNetworkAclRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateNetworkAclResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateNetworkAclEntry - 更新ACL的规则
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/update_network_acl_entry
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "AclId" => (string) ACL的ID
     *     "EntryId" => (string) 需要更新的Entry Id
     *     "Priority" => (integer) Entry的优先级，对于同样的Direction来说，不能重复
     *     "Direction" => (string) 出向或者入向（“Ingress”, "Egress")
     *     "IpProtocol" => (string) 针对的协议规则
     *     "CidrBlock" => (string) IPv4段的CIDR表示
     *     "PortRange" => (string) 针对的端口范围
     *     "EntryAction" => (string) 规则的行为("Accept", "Reject")
     *     "Description" => (string) 描述
     *     "TargetType" => (integer) 应用目标类型。0代表“子网内全部资源”， 1代表“子网内指定资源”。默认为0
     *     "TargetResourceIds" => (array<string>) 应用目标资源列表。默认为全部资源生效。TargetType为0时不用填写该值
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateNetworkAclEntryResponse
     * @throws UCloudException
     */
    public function updateNetworkAclEntry(UpdateNetworkAclEntryRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateNetworkAclEntryResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateNetworkInterfaceDefaultOutput - 更新虚拟网卡默认出口(仅用于开启EIP网卡可见模式的虚拟网卡)
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/update_network_interface_default_output
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InterfaceId" => (string) 虚拟网卡Id
     *     "Output" => (string) 出口IP
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateNetworkInterfaceDefaultOutputResponse
     * @throws UCloudException
     */
    public function updateNetworkInterfaceDefaultOutput(UpdateNetworkInterfaceDefaultOutputRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateNetworkInterfaceDefaultOutputResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateRouteTableAttribute - 更新路由表基本信息
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/update_route_table_attribute
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "RouteTableId" => (string) 路由表ID
     *     "Name" => (string) 名称
     *     "Remark" => (string) 备注
     *     "Tag" => (string) 业务组名称
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateRouteTableAttributeResponse
     * @throws UCloudException
     */
    public function updateRouteTableAttribute(UpdateRouteTableAttributeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateRouteTableAttributeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateSecGroup - 更新安全组基本信息
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/update_sec_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SecGroupId" => (array<string>) 安全组资源ID数组。不支持 .n 格式。Type 为 string 数组。
     *     "Name" => (string) 安全组名称，默认为空，为空则不做修改。Name,Tag,Remark必须填写1个及以上
     *     "Remark" => (string) 安全组备注，默认为空，为空则不做修改。Name,Tag,Remark必须填写1个及以上
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateSecGroupResponse
     * @throws UCloudException
     */
    public function updateSecGroup(UpdateSecGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateSecGroupResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateSecGroupAssociation - 仅对操作的安全组ID生效，其他已有的绑定关系不受影响。
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/update_sec_group_association
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ResourceId" => (string) 资源ID
     *     "OldSecGroupId" => (array<string>) 被替换的安全组ID。支持数组格式，即为 string 数组。
     *     "NewPrioritySecGroup" => (array<object>) [
     *         [
     *             "Priority" => (integer) 新绑定安全组的绑定优先级。支持 NewPrioritySecGroup 为数组格式，即传对应数据的 JSON 格式数组。
     *             "SecGroupId" => (string) 需新绑定的安全组ID
     *         ]
     *     ]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateSecGroupAssociationResponse
     * @throws UCloudException
     */
    public function updateSecGroupAssociation(UpdateSecGroupAssociationRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateSecGroupAssociationResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateSecGroupRule -
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/update_sec_group_rule
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SecGroupId" => (string) 规则所属得安全组 ID。
     *     "Rule" => (array<object>) [
     *         [
     *             "RuleId" => (string) 规则 ID
     *             "Direction" => (string)  "Ingress/Egress"，入站规则/出站规则
     *             "IPRange" => (string) IP 地址信息，逗号分隔。
     *             "Priority" => (integer) 规则优先级。范围为 1~200
     *             "ProtocolType" => (string)  协议类型。"TCP","UDP","ICMP","ICMPv6","ALL"
     *             "DstPort" => (string) 目的端口。逗号分隔，如 "80,443"、"443,2000-10000"
     *             "RuleAction" => (string) 规则行为。"Accept" 或 "Drop"
     *             "Remark" => (string)  规则备注
     *             "IPVersion" => (string) IP 版本，如 “IPv4”。支持 IPv6 后废弃
     *         ]
     *     ]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateSecGroupRuleResponse
     * @throws UCloudException
     */
    public function updateSecGroupRule(UpdateSecGroupRuleRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateSecGroupRuleResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateSnatRule - 更新指定的出口规则（SNAT规则）
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/update_snat_rule
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NATGWId" => (string) NAT网关的ID，
     *     "SourceIp" => (string) 需要出外网的私网IP地址，例如10.9.7.xx
     *     "SnatIp" => (string) EIP的ip地址,例如106.75.xx.xx
     *     "Name" => (string) snat名称，即出口规则名称
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateSnatRuleResponse
     * @throws UCloudException
     */
    public function updateSnatRule(UpdateSnatRuleRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateSnatRuleResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateSubnetAttribute - 更新子网信息
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/update_subnet_attribute
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SubnetId" => (string) 子网ID
     *     "Name" => (string) 子网名称(如果Name不填写，Tag必须填写)
     *     "Tag" => (string) 业务组名称(如果Tag不填写，Name必须填写)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateSubnetAttributeResponse
     * @throws UCloudException
     */
    public function updateSubnetAttribute(UpdateSubnetAttributeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateSubnetAttributeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateVIPAttribute - 更新VIP信息
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/update_vip_attribute
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VIPId" => (string) 内网VIP的资源Id
     *     "Remark" => (string) 内网VIP的备注
     *     "Name" => (string) 内网VIP的名称
     *     "Tag" => (string) 内网VIP所属的业务组
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateVIPAttributeResponse
     * @throws UCloudException
     */
    public function updateVIPAttribute(UpdateVIPAttributeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateVIPAttributeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateVPCIPv6 - 更新VPC IPv6网段
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/update_vpc_ip_v6
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPCId" => (string) VPC资源ID
     *     "IPv6NetworkConfig" => (array<object>) [
     *         [
     *             "IPv6Network" => (string) 需要保留的所有网段
     *             "OperatorName" => (string) 网段对应的运营商类型
     *             "Type" => (string) 网段分类：Default--默认网段、Custom--客户自带网段
     *         ]
     *     ]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateVPCIPv6Response
     * @throws UCloudException
     */
    public function updateVPCIPv6(UpdateVPCIPv6Request $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateVPCIPv6Response($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateVPCNetwork - 更新VPC网段
     *
     * See also: https://docs.ucloud.cn/api/vpc-api/update_vpc_network
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPCId" => (string) VPC的ID
     *     "Network" => (array<string>) 需要保留的VPC网段。当前仅支持删除VPC网段，添加网段请参考[AddVPCNetwork](https://docs.ucloud.cn/api/vpc2.0-api/add_vpc_network)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateVPCNetworkResponse
     * @throws UCloudException
     */
    public function updateVPCNetwork(UpdateVPCNetworkRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateVPCNetworkResponse($resp->toArray(), $resp->getRequestId());
    }
}
