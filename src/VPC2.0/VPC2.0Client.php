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
namespace UCloud\VPC;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;


        
        
        
use UCloud\VPC\Apis\AddSnatRuleRequest;
use UCloud\VPC\Apis\AddSnatRuleResponse;
        
        
        
use UCloud\VPC\Apis\AddVPCNetworkRequest;
use UCloud\VPC\Apis\AddVPCNetworkResponse;
        
        
        
use UCloud\VPC\Apis\AddWhiteListResourceRequest;
use UCloud\VPC\Apis\AddWhiteListResourceResponse;
        
        
        
use UCloud\VPC\Apis\AllocateSecondaryIpRequest;
use UCloud\VPC\Apis\AllocateSecondaryIpResponse;
        
        
        
use UCloud\VPC\Apis\AllocateVIPRequest;
use UCloud\VPC\Apis\AllocateVIPResponse;
        
        
        
use UCloud\VPC\Apis\AssociateRouteTableRequest;
use UCloud\VPC\Apis\AssociateRouteTableResponse;
        
        
        
use UCloud\VPC\Apis\CloneRouteTableRequest;
use UCloud\VPC\Apis\CloneRouteTableResponse;
        
        
        
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
        
        
        
use UCloud\VPC\Apis\CreateRouteTableRequest;
use UCloud\VPC\Apis\CreateRouteTableResponse;
        
        
        
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
        
        
        
use UCloud\VPC\Apis\DeleteRouteTableRequest;
use UCloud\VPC\Apis\DeleteRouteTableResponse;
        
        
        
use UCloud\VPC\Apis\DeleteSecondaryIpRequest;
use UCloud\VPC\Apis\DeleteSecondaryIpResponse;
        
        
        
use UCloud\VPC\Apis\DeleteSnatDnatRuleRequest;
use UCloud\VPC\Apis\DeleteSnatDnatRuleResponse;
        
        
        
use UCloud\VPC\Apis\DeleteSnatRuleRequest;
use UCloud\VPC\Apis\DeleteSnatRuleResponse;
        
        
        
use UCloud\VPC\Apis\DeleteSubnetRequest;
use UCloud\VPC\Apis\DeleteSubnetResponse;
        
        
        
use UCloud\VPC\Apis\DeleteVPCRequest;
use UCloud\VPC\Apis\DeleteVPCResponse;
        
        
        
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
        
        
        
use UCloud\VPC\Apis\DescribeRouteTableRequest;
use UCloud\VPC\Apis\DescribeRouteTableResponse;
        
        
        
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
        
        
        
use UCloud\VPC\Apis\UpdateNATGWPolicyRequest;
use UCloud\VPC\Apis\UpdateNATGWPolicyResponse;
        
        
        
use UCloud\VPC\Apis\UpdateNATGWSubnetRequest;
use UCloud\VPC\Apis\UpdateNATGWSubnetResponse;
        
        
        
use UCloud\VPC\Apis\UpdateNetworkAclRequest;
use UCloud\VPC\Apis\UpdateNetworkAclResponse;
        
        
        
use UCloud\VPC\Apis\UpdateNetworkAclEntryRequest;
use UCloud\VPC\Apis\UpdateNetworkAclEntryResponse;
        
        
        
use UCloud\VPC\Apis\UpdateRouteTableAttributeRequest;
use UCloud\VPC\Apis\UpdateRouteTableAttributeResponse;
        
        
        
use UCloud\VPC\Apis\UpdateSnatRuleRequest;
use UCloud\VPC\Apis\UpdateSnatRuleResponse;
        
        
        
use UCloud\VPC\Apis\UpdateSubnetAttributeRequest;
use UCloud\VPC\Apis\UpdateSubnetAttributeResponse;
        
        
        
use UCloud\VPC\Apis\UpdateVIPAttributeRequest;
use UCloud\VPC\Apis\UpdateVIPAttributeResponse;
        
        
        
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
     * @throws UCloudException
     */
    public function addSnatRule(AddSnatRuleRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AddSnatRuleResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * AddVPCNetwork - 添加VPC网段
     *
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
     * @throws UCloudException
     */
    public function addWhiteListResource(AddWhiteListResourceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AddWhiteListResourceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * AllocateSecondaryIp - 分配ip（用于uk8s使用）
     *
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
     * @throws UCloudException
     */
    public function allocateVIP(AllocateVIPRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AllocateVIPResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * AssociateRouteTable - 绑定子网的路由表
     *
     * @throws UCloudException
     */
    public function associateRouteTable(AssociateRouteTableRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AssociateRouteTableResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CloneRouteTable - 将现有的路由表复制为一张新的路由表
     *
     * @throws UCloudException
     */
    public function cloneRouteTable(CloneRouteTableRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CloneRouteTableResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateNATGW - 创建NAT网关
     *
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
     * @throws UCloudException
     */
    public function createNetworkAclEntry(CreateNetworkAclEntryRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateNetworkAclEntryResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateRouteTable - 创建路由表
     *
     * @throws UCloudException
     */
    public function createRouteTable(CreateRouteTableRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateRouteTableResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateSnatDnatRule - 调用接口后会自动创建内外网IP之间的SNAT和DNAT规则，支持TCP、UDP协议全端口
     *
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
     * @throws UCloudException
     */
    public function deleteNetworkAclEntry(DeleteNetworkAclEntryRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteNetworkAclEntryResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteRouteTable - 删除自定义路由表
     *
     * @throws UCloudException
     */
    public function deleteRouteTable(DeleteRouteTableRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteRouteTableResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteSecondaryIp - 删除ip（用于uk8s使用）
     *
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
     * @throws UCloudException
     */
    public function deleteSubnet(DeleteSubnetRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteSubnetResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteVPC - 删除VPC
     *
     * @throws UCloudException
     */
    public function deleteVPC(DeleteVPCRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteVPCResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteVPCIntercom - 删除VPC互通关系
     *
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
     * @throws UCloudException
     */
    public function describeNetworkInterface(DescribeNetworkInterfaceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeNetworkInterfaceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeRouteTable - 获取路由表详细信息(包括路由策略)
     *
     * @throws UCloudException
     */
    public function describeRouteTable(DescribeRouteTableRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeRouteTableResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeSecondaryIp - 查询SecondaryIp（uk8s使用）
     *
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
     * @throws UCloudException
     */
    public function describeWhiteListResource(DescribeWhiteListResourceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeWhiteListResourceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * EnableWhiteList - 修改NAT网关白名单开关
     *
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
     * @throws UCloudException
     */
    public function setGwDefaultExport(SetGwDefaultExportRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new SetGwDefaultExportResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpdateNATGWPolicy - 更新NAT网关端口转发规则
     *
     * @throws UCloudException
     */
    public function updateNATGWPolicy(UpdateNATGWPolicyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateNATGWPolicyResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpdateNATGWSubnet - 更新NAT网关绑定的子网
     *
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
     * @throws UCloudException
     */
    public function updateNetworkAclEntry(UpdateNetworkAclEntryRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateNetworkAclEntryResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpdateRouteTableAttribute - 更新路由表基本信息
     *
     * @throws UCloudException
     */
    public function updateRouteTableAttribute(UpdateRouteTableAttributeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateRouteTableAttributeResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpdateSnatRule - 更新指定的出口规则（SNAT规则）
     *
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
     * @throws UCloudException
     */
    public function updateVIPAttribute(UpdateVIPAttributeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateVIPAttributeResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpdateVPCNetwork - 更新VPC网段
     *
     * @throws UCloudException
     */
    public function updateVPCNetwork(UpdateVPCNetworkRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateVPCNetworkResponse($resp->toArray(), $resp->getRequestId());
    }
}
