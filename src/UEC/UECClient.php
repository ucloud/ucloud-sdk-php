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
namespace UCloud\UEC;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\UEC\Apis\BindUEcFirewallRequest;
use UCloud\UEC\Apis\BindUEcFirewallResponse;
use UCloud\UEC\Apis\CreateUEcFirewallRequest;
use UCloud\UEC\Apis\CreateUEcFirewallResponse;
use UCloud\UEC\Apis\CreateUEcHolderRequest;
use UCloud\UEC\Apis\CreateUEcHolderResponse;
use UCloud\UEC\Apis\CreateUEcSubnetRequest;
use UCloud\UEC\Apis\CreateUEcSubnetResponse;
use UCloud\UEC\Apis\CreateUEcVHostRequest;
use UCloud\UEC\Apis\CreateUEcVHostResponse;
use UCloud\UEC\Apis\DeleteUEcCustomImageRequest;
use UCloud\UEC\Apis\DeleteUEcCustomImageResponse;
use UCloud\UEC\Apis\DeleteUEcHolderRequest;
use UCloud\UEC\Apis\DeleteUEcHolderResponse;
use UCloud\UEC\Apis\DeleteUEcSubnetRequest;
use UCloud\UEC\Apis\DeleteUEcSubnetResponse;
use UCloud\UEC\Apis\DeleteUEcVHostRequest;
use UCloud\UEC\Apis\DeleteUEcVHostResponse;
use UCloud\UEC\Apis\DescribeUEcFirewallRequest;
use UCloud\UEC\Apis\DescribeUEcFirewallResponse;
use UCloud\UEC\Apis\DescribeUEcFirewallResourceRequest;
use UCloud\UEC\Apis\DescribeUEcFirewallResourceResponse;
use UCloud\UEC\Apis\DescribeUEcHolderRequest;
use UCloud\UEC\Apis\DescribeUEcHolderResponse;
use UCloud\UEC\Apis\DescribeUEcHolderIDCRequest;
use UCloud\UEC\Apis\DescribeUEcHolderIDCResponse;
use UCloud\UEC\Apis\DescribeUEcIDCRequest;
use UCloud\UEC\Apis\DescribeUEcIDCResponse;
use UCloud\UEC\Apis\DescribeUEcSubnetRequest;
use UCloud\UEC\Apis\DescribeUEcSubnetResponse;
use UCloud\UEC\Apis\DescribeUEcVHostRequest;
use UCloud\UEC\Apis\DescribeUEcVHostResponse;
use UCloud\UEC\Apis\DescribeUEcVHostISPRequest;
use UCloud\UEC\Apis\DescribeUEcVHostISPResponse;
use UCloud\UEC\Apis\GetUEcHolderLogRequest;
use UCloud\UEC\Apis\GetUEcHolderLogResponse;
use UCloud\UEC\Apis\GetUEcHolderMetricsRequest;
use UCloud\UEC\Apis\GetUEcHolderMetricsResponse;
use UCloud\UEC\Apis\GetUEcIDCCutInfoRequest;
use UCloud\UEC\Apis\GetUEcIDCCutInfoResponse;
use UCloud\UEC\Apis\GetUEcIDCVHostDataRequest;
use UCloud\UEC\Apis\GetUEcIDCVHostDataResponse;
use UCloud\UEC\Apis\GetUEcImageRequest;
use UCloud\UEC\Apis\GetUEcImageResponse;
use UCloud\UEC\Apis\GetUEcPodPriceRequest;
use UCloud\UEC\Apis\GetUEcPodPriceResponse;
use UCloud\UEC\Apis\GetUEcUpgradePriceRequest;
use UCloud\UEC\Apis\GetUEcUpgradePriceResponse;
use UCloud\UEC\Apis\GetUEcVHostDataRequest;
use UCloud\UEC\Apis\GetUEcVHostDataResponse;
use UCloud\UEC\Apis\GetUEcVHostPriceRequest;
use UCloud\UEC\Apis\GetUEcVHostPriceResponse;
use UCloud\UEC\Apis\ImportUEcCustomImageRequest;
use UCloud\UEC\Apis\ImportUEcCustomImageResponse;
use UCloud\UEC\Apis\LoginUEcDockerRequest;
use UCloud\UEC\Apis\LoginUEcDockerResponse;
use UCloud\UEC\Apis\ModifyUEcBandwidthRequest;
use UCloud\UEC\Apis\ModifyUEcBandwidthResponse;
use UCloud\UEC\Apis\ModifyUEcHolderNameRequest;
use UCloud\UEC\Apis\ModifyUEcHolderNameResponse;
use UCloud\UEC\Apis\ModifyUEcImageNameRequest;
use UCloud\UEC\Apis\ModifyUEcImageNameResponse;
use UCloud\UEC\Apis\PoweroffUEcVHostRequest;
use UCloud\UEC\Apis\PoweroffUEcVHostResponse;
use UCloud\UEC\Apis\ReinstallUEcVHostRequest;
use UCloud\UEC\Apis\ReinstallUEcVHostResponse;
use UCloud\UEC\Apis\RestartUEcHolderRequest;
use UCloud\UEC\Apis\RestartUEcHolderResponse;
use UCloud\UEC\Apis\RestartUEcVHostRequest;
use UCloud\UEC\Apis\RestartUEcVHostResponse;
use UCloud\UEC\Apis\StartUEcVHostRequest;
use UCloud\UEC\Apis\StartUEcVHostResponse;
use UCloud\UEC\Apis\StopUEcVHostRequest;
use UCloud\UEC\Apis\StopUEcVHostResponse;
use UCloud\UEC\Apis\UnBindUEcFirewallRequest;
use UCloud\UEC\Apis\UnBindUEcFirewallResponse;
use UCloud\UEC\Apis\UpdateUEcFirewallRequest;
use UCloud\UEC\Apis\UpdateUEcFirewallResponse;
use UCloud\UEC\Apis\UpdateUEcFirewallAttributeRequest;
use UCloud\UEC\Apis\UpdateUEcFirewallAttributeResponse;
use UCloud\UEC\Apis\UpdateUEcSubnetRequest;
use UCloud\UEC\Apis\UpdateUEcSubnetResponse;

/**
 * This client is used to call actions of **UEC** service
 */
class UECClient extends Client
{

    /**
     * BindUEcFirewall - 绑定防火墙，应用防火墙规则
     *
     * See also: https://docs.ucloud.cn/api/uec-api/bind_u_ec_firewall
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "FirewallId" => (string) 防火墙Id
     *     "ResourceId" => (string) 虚拟机资源Id或容器组资源id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return BindUEcFirewallResponse
     * @throws UCloudException
     */
    public function bindUEcFirewall(BindUEcFirewallRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new BindUEcFirewallResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUEcFirewall - 创建外网防火墙
     *
     * See also: https://docs.ucloud.cn/api/uec-api/create_u_ec_firewall
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Name" => (string) 防火墙名称
     *     "Rule" => (array<object>) [
     *         [
     *             "ProtocolType" => (string) 协议，可选值：TCP，UDP，ICMP
     *             "Port" => (string) 端口，范围用"-"符号分隔，如：1-65535
     *             "SrcIp" => (string) 源ip
     *             "Action" => (string) ACCEPT（接受）和DROP（拒绝）
     *             "Priority" => (string) 优先级：HIGH（高），MEDIUM（中），LOW（低）
     *             "Remark" => (string) 备注
     *         ]
     *     ]
     *     "Remark" => (string) 描述
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "FirewallId" => (string) 防火墙Id
     * ]
     *
     * @return CreateUEcFirewallResponse
     * @throws UCloudException
     */
    public function createUEcFirewall(CreateUEcFirewallRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUEcFirewallResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUEcHolder - 创建容器组
     *
     * See also: https://docs.ucloud.cn/api/uec-api/create_u_ec_holder
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "IdcId" => (string) 机房id
     *     "CpuCore" => (number) 容器组Cpu总核数
     *     "MemSize" => (integer) 容器组总内存，单位MB
     *     "SubnetId" => (string) 子网ID
     *     "Name" => (string) 容器组名称（默认default）
     *     "ProductType" => (string) 机型（normal-经济型，hf-标准型，默认normal）
     *     "RestartStrategy" => (integer) 重启策略（0总是，1失败是，2永不，默认0）
     *     "ElasticIp" => (string) 绑定外网ip（yes-绑定，no-不绑定，默认no）
     *     "Bandwidth" => (integer) 外网绑定的带宽（单位M，默认0，只有当ElasticIp为yes时，默认1）
     *     "FirewallId" => (string) 防火墙ID
     *     "ChargeType" => (integer) 付费方式（2按月、3按年。默认2，默认月付）
     *     "ChargeQuantity" => (integer) 月数或者年数（默认值：1，当为按月计费时，0表示计费到月底，默认值为0）
     *     "Pack" => (array<object>) [
     *         [
     *             "Name" => (string) 容器名称
     *             "CpuCore" => (number) 容器Cpu核数
     *             "MemSize" => (integer) 容器内存，单位MB
     *             "ImageName" => (string) 容器镜像名称
     *             "WorkDir" => (string) 容器工作目录
     *             "Cmd" => (string) 开启容器的命令
     *             "Args" => (string) 容器参数（多个用；隔开）
     *             "Environment" => (string) 容器环境变量（多个用；隔开,如：key1:value1;key2:value2）
     *             "ConfigDict" => (string) 容器配置字典（多个用；隔开，如：/data1:resId1;/data2:resId2）
     *         ]
     *     ]
     *     "Image" => (array<object>) [
     *         [
     *             "Message" => (string) 镜像用户名和密码（如镜像名：密码）
     *             "StoreAddress" => (string) 镜像仓库地址
     *         ]
     *     ]
     *     "Storage" => (array<object>) [
     *         [
     *             "Path" => (string) 存储卷挂载路径
     *             "ResourceId" => (string) 存储卷资源id
     *         ]
     *     ]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ResourceId" => (string) 容器组资源id
     * ]
     *
     * @return CreateUEcHolderResponse
     * @throws UCloudException
     */
    public function createUEcHolder(CreateUEcHolderRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUEcHolderResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUEcSubnet - 创建子网
     *
     * See also: https://docs.ucloud.cn/api/uec-api/create_u_ec_subnet
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "IdcId" => (string) 机房ID
     *     "CIDR" => (string) 子网cidr
     *     "SubnetName" => (string) 子网名称
     *     "Comment" => (string) 备注
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "SubnetId" => (string) 子网ID
     * ]
     *
     * @return CreateUEcSubnetResponse
     * @throws UCloudException
     */
    public function createUEcSubnet(CreateUEcSubnetRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUEcSubnetResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUEcVHost - 创建虚拟机v2.0
     *
     * See also: https://docs.ucloud.cn/api/uec-api/create_u_ec_v_host
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "IdcId" => (string) 机房id
     *     "CpuCore" => (integer) cpu核心数
     *     "MemSize" => (integer) 内存大小，单位GB
     *     "DiskSize" => (integer) 数据盘大小，单位GB
     *     "ImageId" => (string) 镜像ID
     *     "NetLimit" => (integer) 节点带宽限制，单位Mbs
     *     "NodeName" => (string) 节点名称
     *     "SysDiskSize" => (integer) 系统盘大小，单位GB， 默认20GB
     *     "AccountName" => (string) 账户名，默认root
     *     "PassWord" => (string) 密码
     *     "NodeCount" => (integer) 创建节点数量，默认1
     *     "ChargeType" => (integer) 付费方式，1按时，2按月，3按年，默认2
     *     "ChargeQuantity" => (integer) 月数或者年数，0计费到月底， 默认0
     *     "SubnetId" => (string) 子网ID
     *     "ProductType" => (string) 产品类型：normal（经济型），hf（标准型）,g(Gpu型)
     *     "FirewallId" => (string) 外网防护墙规则组，默认
     *     "Isp" => (array<integer>) 运营商（1-电信，2-联通，4移动）
     *     "IsNeedOuterIp" => (string) 是否需要外网ip（no-否）
     *     "Gpu" => (integer) Gpu卡核心数。仅Gpu机型支持此字段
     *     "GpuType" => (string) Gpu类型，枚举值["T4S"],ProductType为G时必填
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "NodeList" => (array<object>) 节点id（详情参考NodeList）[
     *         [
     *             "NodeId" => (string) 虚拟机资源id
     *         ]
     *     ]
     * ]
     *
     * @return CreateUEcVHostResponse
     * @throws UCloudException
     */
    public function createUEcVHost(CreateUEcVHostRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUEcVHostResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUEcCustomImage - 删除UEDN客户自定义镜像
     *
     * See also: https://docs.ucloud.cn/api/uec-api/delete_u_ec_custom_image
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ImageId" => (string) 镜像ID
     *     "IdcId" => (string) 机房ID，带机房ID表示只删除指定机房镜像
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ImageId" => (integer) 镜像ID
     * ]
     *
     * @return DeleteUEcCustomImageResponse
     * @throws UCloudException
     */
    public function deleteUEcCustomImage(DeleteUEcCustomImageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUEcCustomImageResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUEcHolder - 删除容器组
     *
     * See also: https://docs.ucloud.cn/api/uec-api/delete_u_ec_holder
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "HolderId" => (array<string>) 容器组资源id，n为0，1，2...
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteUEcHolderResponse
     * @throws UCloudException
     */
    public function deleteUEcHolder(DeleteUEcHolderRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUEcHolderResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUEcSubnet - 删除子网
     *
     * See also: https://docs.ucloud.cn/api/uec-api/delete_u_ec_subnet
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SubnetId" => (string) 子网ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteUEcSubnetResponse
     * @throws UCloudException
     */
    public function deleteUEcSubnet(DeleteUEcSubnetRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUEcSubnetResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUEcVHost - 删除vhost虚拟机 v2.0
     *
     * See also: https://docs.ucloud.cn/api/uec-api/delete_u_ec_v_host
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NodeId" => (array<string>) 节点id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteUEcVHostResponse
     * @throws UCloudException
     */
    public function deleteUEcVHost(DeleteUEcVHostRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUEcVHostResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUEcFirewall - 获取防火墙信息
     *
     * See also: https://docs.ucloud.cn/api/uec-api/describe_u_ec_firewall
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "FirewallId" => (string) 防火墙ID，默认为返回所有防火墙
     *     "ResourceId" => (string) 绑定防火墙组的虚拟机资源ID
     *     "Limit" => (integer) 返回数据长度，默认为20
     *     "Offset" => (integer) 列表起始位置偏移量，默认为0
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "FirewallSet" => (array<object>) 防火墙组详细信息，参见 FirewallInfo[
     *         [
     *             "FirewallId" => (string) 防火墙Id
     *             "Name" => (string) 防火墙名称
     *             "CreateTime" => (integer) 创建时间
     *             "Rule" => (array<object>) 防火墙规则组，详情参见RuleInfo[
     *                 [
     *                     "ProtocolType" => (string) 协议，可选值：TCP，UDP，ICMP
     *                     "Port" => (string) 端口，范围用"-"符号分隔，如：1-65535
     *                     "SrcIp" => (string) 源ip
     *                     "Action" => (string) ACCEPT（接受）和DROP（拒绝）
     *                     "Priority" => (string) 优先级：HIGH（高），MEDIUM（中），LOW（低）
     *                     "Remark" => (string) 备注
     *                 ]
     *             ]
     *             "ResourceCount" => (integer) 防火墙绑定资源数量
     *             "Type" => (string) 防火墙组类型，枚举值为： "user defined", 用户自定义防火墙； "recommend web", 默认Web防火墙； "recommend non web", 默认非Web防火墙
     *             "Remark" => (string) 描述
     *         ]
     *     ]
     *     "TotalCount" => (integer) 满足条件的节点总数
     * ]
     *
     * @return DescribeUEcFirewallResponse
     * @throws UCloudException
     */
    public function describeUEcFirewall(DescribeUEcFirewallRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUEcFirewallResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUEcFirewallResource - 防火墙绑定的资源列表
     *
     * See also: https://docs.ucloud.cn/api/uec-api/describe_u_ec_firewall_resource
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "FirewallId" => (string) 防火墙Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ResourceSet" => (array<object>) 资源列表，详情参见ResourceInfo[
     *         [
     *             "ResourceId" => (string) 资源Id
     *             "PublicIpList" => (array<string>) 节点公网Ip列表
     *             "Name" => (string) 节点名称
     *             "State" => (integer) 节点状态，1部署中，2待启动，3启动中，4运行中，5正在停止，6已停止，7正在更新，8正在重启，9正在删除， 10已经删除,11异常
     *             "Remark" => (string) 节点备注
     *         ]
     *     ]
     *     "TotalCount" => (integer) 资源总数
     * ]
     *
     * @return DescribeUEcFirewallResourceResponse
     * @throws UCloudException
     */
    public function describeUEcFirewallResource(DescribeUEcFirewallResourceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUEcFirewallResourceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUEcHolder - 获得容器组信息
     *
     * See also: https://docs.ucloud.cn/api/uec-api/describe_u_ec_holder
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "HolderId" => (array<string>) 容器组资源id
     *     "Limit" => (integer) 返回数据长度，默认为20，非负整数
     *     "Offset" => (integer) 列表起始位置偏移量，默认为0。非负整数
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "HolderList" => (array<object>) 容器组列表（详情参考HolderList）[
     *         [
     *             "ResourceId" => (string) 容器组资源id
     *             "HolderName" => (string) 容器组名称
     *             "SubnetId" => (string) 容器组子网id
     *             "InnerIp" => (string) 容器组内网ip
     *             "IpList" => (array<object>) 容器组外网ip集合（详情参考IpList）[
     *                 [
     *                     "Ip" => (string) 外网ip
     *                     "Isp" => (string) 运营商
     *                 ]
     *             ]
     *             "State" => (integer) 容器组运行状态0：初始化；1：拉取镜像；2：启动中；3：运行中；4：错误；5：正在重启；6：正在删除；7：已经删除；8：容器运行错误；9：启动失败；99：异常
     *             "CreateTime" => (integer) 创建时间
     *             "ExpireTime" => (integer) 过期时间
     *             "Type" => (integer) 线路类型（运营商类型： 0-其它, 1-一线城市单线,2-二线城市单线, 3-全国教育网, 4-全国三通）
     *             "IdcId" => (string) 机房id
     *             "OcName" => (string) 机房名称
     *             "Province" => (string) 省份名称
     *             "City" => (string) 城市名称
     *             "RestartStrategy" => (integer) 0：总是；1：失败是；2：永不
     *             "DockerCount" => (integer) 容器数量
     *             "DockerInfo" => (array<object>) 容器信息（详情参考DockerInfo）[
     *                 [
     *                     "CpuCores" => (number) CPU核数（/核）精度0.1核
     *                     "MemSize" => (number) 内存大小（Gi）
     *                     "Name" => (string) 容器名称
     *                     "State" => (integer) 容器状态，0：初始化；1：拉取镜像；2：拉取镜像失败；3：启动中；4：运行中；5：正在停止；6：已停止；7：已删除；8：镜像拉取成功；9：启动失败；99：异常
     *                     "ImageName" => (string) 镜像名称
     *                     "WorkDir" => (string) 工作目录
     *                     "Command" => (string) 命令
     *                     "Args" => (string) 参数
     *                     "EnvList" => (array<object>) 环境变量（详情参考EnvList）[
     *                         [
     *                             "Key" => (string) 环境变量key值
     *                             "Value" => (string) 环境变量Value值
     *                         ]
     *                     ]
     *                     "CfgDictList" => (array<object>) 容器配置字典（详情参考CfgDictList）[
     *                         [
     *                             "Name" => (string) 名称
     *                             "MountPath" => (string) 挂载路径
     *                             "ResourceId" => (string) 资源id
     *                         ]
     *                     ]
     *                 ]
     *             ]
     *             "ProductType" => (string) 机器类型（normal经济型，hf标准型）
     *             "NetLimit" => (integer) 外网绑定的带宽
     *             "FirewallId" => (string) 外网防火墙id
     *             "StorVolumeInfo" => (array<object>) 存储卷信息（详情参考StorVolumeInfo）[
     *                 [
     *                     "Name" => (string) 名称
     *                     "ResourceId" => (string) 资源id
     *                     "MountPoint" => (string) 挂载点
     *                     "DiskSize" => (integer) 容量（单位GB）
     *                 ]
     *             ]
     *             "StorVolumeCount" => (integer) 存储卷数量
     *             "ImageList" => (array<object>) 容器组镜像密钥列表（详情参考ImageList）[
     *                 [
     *                     "StoreAddr" => (string) 仓库地址
     *                     "UserName" => (string) 用户名称
     *                     "ImageKey" => (string) 镜像密钥
     *                 ]
     *             ]
     *         ]
     *     ]
     *     "TotalCount" => (integer) 满足条件的容器组总数
     * ]
     *
     * @return DescribeUEcHolderResponse
     * @throws UCloudException
     */
    public function describeUEcHolder(DescribeUEcHolderRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUEcHolderResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUEcHolderIDC - 获取容器组机房信息
     *
     * See also: https://docs.ucloud.cn/api/uec-api/describe_u_ec_holder_idc
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Cpu" => (number) 容器组Cpu核数
     *     "Memory" => (integer) 容器组内存大小（单位MB）
     *     "IdcId" => (array<string>) Idc机房id。默认全部机房
     *     "Type" => (integer) 0-其它, 1-一线城市单线,2-二线城市单线, 3-全国教育网, 4-全国三通
     *     "ProductType" => (string) 产品类型，normal标准型，hf高性能型
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "IdcList" => (array<object>) 机房列表，具体参考下面IdcInfo[
     *         [
     *             "IdcId" => (string) 机房ID
     *             "Name" => (string) 机房名称
     *             "Isp" => (string) 运营商
     *             "Province" => (string) 省份
     *             "City" => (string) 城市
     *             "Type" => (integer) 运营商类型：0-其它, 1-一线城市单线,2-二线城市单线, 3-全国教育网, 4-全国三通
     *             "MaxNodeCnt" => (integer) 机房可创建节点最大数量
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUEcHolderIDCResponse
     * @throws UCloudException
     */
    public function describeUEcHolderIDC(DescribeUEcHolderIDCRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUEcHolderIDCResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUEcIDC - 获取IDC机房列表
     *
     * See also: https://docs.ucloud.cn/api/uec-api/describe_u_ec_idc
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Cpu" => (integer) 节点cpu核数
     *     "Memory" => (integer) 节点内存大小， 单位GB
     *     "IdcId" => (array<string>) Idc机房id。默认全部机房
     *     "Type" => (integer) 0-其它, 1-一线城市单线,2-二线城市单线, 3-全国教育网, 4-全国三通
     *     "ProductType" => (string) 产品类型：normal（通用型），hf（高主频型）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "IdcList" => (array<object>) 获取的机房信息，具体参考下面IdcInfo[
     *         [
     *             "IdcId" => (string) 机房ID
     *             "Name" => (string) 机房名称
     *             "Isp" => (string) 运营商
     *             "Province" => (string) 省份
     *             "City" => (string) 城市
     *             "Type" => (integer) 运营商类型：0-其它, 1-一线城市单线,2-二线城市单线, 3-全国教育网, 4-全国三通
     *             "MaxNodeCnt" => (integer) 机房可创建节点最大数量
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUEcIDCResponse
     * @throws UCloudException
     */
    public function describeUEcIDC(DescribeUEcIDCRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUEcIDCResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUEcSubnet - 获取子网列表
     *
     * See also: https://docs.ucloud.cn/api/uec-api/describe_u_ec_subnet
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "IdcId" => (string) 机房ID
     *     "SubnetId" => (string) 子网ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "SubnetList" => (array<object>) 子网信息列表[
     *         [
     *             "SubnetId" => (string) 子网ID
     *             "SubnetName" => (string) 子网名称
     *             "IdcId" => (string) 机房ID
     *             "CIDR" => (string) 子网cidr
     *             "CreateTime" => (integer) 创建时间
     *             "Comment" => (string) 备注
     *             "TotalIpCnt" => (integer) 总ip数
     *             "AvailableIPCnt" => (integer) 可用ip数
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUEcSubnetResponse
     * @throws UCloudException
     */
    public function describeUEcSubnet(DescribeUEcSubnetRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUEcSubnetResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUEcVHost - 获取虚拟机列表 2.0
     *
     * See also: https://docs.ucloud.cn/api/uec-api/describe_u_ec_v_host
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "IdcId" => (array<string>) Idc机房id。默认全部机房
     *     "NodeId" => (array<string>) 节点id，创建节点时生成的id。默认全部节点
     *     "Offset" => (integer) 数据偏移量，默认0，非负整数
     *     "Limit" => (integer) 返回数据长度， 默认20，非负整数
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 满足条件的节点总数
     *     "NodeList" => (array<object>) 节点列表[
     *         [
     *             "NodeName" => (string) 节点名称
     *             "NodeId" => (string) 节点ID
     *             "CoreNum" => (integer) Cpu核数
     *             "MemSize" => (integer) 节点内存大小，单位GB
     *             "SysDiskSize" => (integer) 系统盘大小， 单位GB
     *             "DiskSize" => (integer) 数据盘大小， 单位GB
     *             "State" => (integer) 节点状态，1部署中，2待启动，3启动中，4运行中，5正在停止，6已停止，7正在更新，8正在重启，9正在删除， 10已经删除,11异常
     *             "NetLimit" => (integer) 节点带宽限制， 单位Mbs
     *             "IdcId" => (string) 机房ID
     *             "OcName" => (string) 机房名称
     *             "Province" => (string) 省份
     *             "City" => (string) 城市
     *             "Type" => (integer) 运营商类型： 0-其它, 1-一线城市单线,2-二线城市单线, 3-全国教育网, 4-全国三通
     *             "ChargeType" => (integer) 付费类型：1按时, 2按月,3按年
     *             "CreateTime" => (integer) 创建时间
     *             "ExpiredTime" => (integer) 过期时间
     *             "ImageName" => (string) 镜像名称
     *             "NodeIpList" => (array<object>) 外网ip集合（详情参考NodeIpList）[
     *                 [
     *                     "Ip" => (string) 外网ip
     *                     "Isp" => (string) 运营商
     *                     "IspName" => (string) 运营商名称
     *                 ]
     *             ]
     *             "FirewallId" => (string) 防火墙Id
     *             "ProductType" => (string) 机器类型(normal-经济型,hf-标准型,g-GPU型)
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUEcVHostResponse
     * @throws UCloudException
     */
    public function describeUEcVHost(DescribeUEcVHostRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUEcVHostResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUEcVHostISP - 获取虚拟机运营商信息
     *
     * See also: https://docs.ucloud.cn/api/uec-api/describe_u_ec_v_host_isp
     *
     * Arguments:
     *
     * $args = [
     *     "IspName" => (string) 运营商名称
     *     "Province" => (string) 省份
     *     "City" => (string) 城市
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "NodeIspList" => (array<object>) 节点运营商列表[
     *         [
     *             "Province" => (string) 省份
     *             "City" => (string) 城市
     *             "LineType" => (string) 线路类型
     *             "IspName" => (string) 机房运营商名称
     *             "IdcName" => (string) 机房名称
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUEcVHostISPResponse
     * @throws UCloudException
     */
    public function describeUEcVHostISP(DescribeUEcVHostISPRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUEcVHostISPResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUEcHolderLog - 获取单个容器日志
     *
     * See also: https://docs.ucloud.cn/api/uec-api/get_u_ec_holder_log
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "PackName" => (string) 容器名称
     *     "ResourceId" => (string) 容器组资源id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (string) 返回的日志数据
     * ]
     *
     * @return GetUEcHolderLogResponse
     * @throws UCloudException
     */
    public function getUEcHolderLog(GetUEcHolderLogRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUEcHolderLogResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUEcHolderMetrics - 获取容器（CPU利用率，带宽，内存）数据
     *
     * See also: https://docs.ucloud.cn/api/uec-api/get_u_ec_holder_metrics
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "PackName" => (string) 容器名称
     *     "Type" => (array<string>) n为0 CPU利用率, 1内存使用率, 2网卡出带宽, 3网卡入带宽, 4网卡出包数, 5网卡入包数
     *     "ResourceId" => (string) 容器组资源id
     *     "StartTime" => (integer) 开始时间
     *     "EndTime" => (integer) 结束时间
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSets" => (object) 获得的监控数据（详情参考MetricisDataSet）[
     *         "CPUUtilization" => (array<object>) cpu利用率（详情参考MonitorInfo）[
     *             [
     *                 "TimeStamp" => (integer) 时间戳
     *                 "Value" => (integer) 值
     *             ]
     *         ]
     *         "MemUtilization" => (array<object>) 内存使用率（详情参考MonitorInfo）[
     *             [
     *                 "TimeStamp" => (integer) 时间戳
     *                 "Value" => (integer) 值
     *             ]
     *         ]
     *         "NetPacketOut" => (array<object>) 网卡出包数（详情参考MonitorInfo）[
     *             [
     *                 "TimeStamp" => (integer) 时间戳
     *                 "Value" => (integer) 值
     *             ]
     *         ]
     *         "NetPacketIn" => (array<object>) 网卡入包数（详情参考MonitorInfo）[
     *             [
     *                 "TimeStamp" => (integer) 时间戳
     *                 "Value" => (integer) 值
     *             ]
     *         ]
     *         "NICOut" => (array<object>) 网卡出带宽（详情参考MonitorInfo）[
     *             [
     *                 "TimeStamp" => (integer) 时间戳
     *                 "Value" => (integer) 值
     *             ]
     *         ]
     *         "NICIn" => (array<object>) 网卡入带宽（详情参考MonitorInfo）[
     *             [
     *                 "TimeStamp" => (integer) 时间戳
     *                 "Value" => (integer) 值
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return GetUEcHolderMetricsResponse
     * @throws UCloudException
     */
    public function getUEcHolderMetrics(GetUEcHolderMetricsRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUEcHolderMetricsResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUEcIDCCutInfo - 获取机房割接信息
     *
     * See also: https://docs.ucloud.cn/api/uec-api/get_u_ec_idc_cut_info
     *
     * Arguments:
     *
     * $args = [
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "IDCCutInfo" => (array<object>) 机房割接信息[
     *         [
     *             "IDCName" => (string) 机房名称
     *             "Province" => (string) 省份
     *             "City" => (string) 城市
     *             "StartTime" => (integer) 割接开始时间
     *             "EndTime" => (integer) 割接结束时间
     *             "CutType" => (string) 割接类型（中断、抖动、断电）
     *             "ResourceSet" => (array<object>) 受影响的资源信息列表[
     *                 [
     *                     "NodeId" => (string) 节点id
     *                     "OuterIps" => (array<string>) 机器外网ip集合
     *                 ]
     *             ]
     *         ]
     *     ]
     *     "TotalCount" => (integer) 满足条件的机房总数
     * ]
     *
     * @return GetUEcIDCCutInfoResponse
     * @throws UCloudException
     */
    public function getUEcIDCCutInfo(GetUEcIDCCutInfoRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUEcIDCCutInfoResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUEcIDCVHostData - 获取机房虚拟机监控数据
     *
     * See also: https://docs.ucloud.cn/api/uec-api/get_u_ec_idcv_host_data
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NodeId" => (array<string>) 节点资源id；n为0，1，2...
     *     "Type" => (array<string>) 监控数据类型；n为0,1,2,3,4...,9
     *     "BeginTime" => (integer) 开始时间戳
     *     "EndTime" => (integer) 结束时间戳
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSets" => (object) 监控数据集合[
     *         "CPUUtilization" => (array<object>) cpu使用率[
     *             [
     *                 "TimeStamp" => (integer) 时间戳
     *                 "Value" => (integer) 值
     *             ]
     *         ]
     *         "MemUtilization" => (array<object>) 内存使用率[
     *             [
     *                 "TimeStamp" => (integer) 时间戳
     *                 "Value" => (integer) 值
     *             ]
     *         ]
     *         "NICOut" => (array<object>) 网卡出带宽[
     *             [
     *                 "TimeStamp" => (integer) 时间戳
     *                 "Value" => (integer) 值
     *             ]
     *         ]
     *         "NICIn" => (array<object>) 网卡入带宽[
     *             [
     *                 "TimeStamp" => (integer) 时间戳
     *                 "Value" => (integer) 值
     *             ]
     *         ]
     *         "NetPacketOut" => (array<object>) 网卡出包量[
     *             [
     *                 "TimeStamp" => (integer) 时间戳
     *                 "Value" => (integer) 值
     *             ]
     *         ]
     *         "NetPacketIn" => (array<object>) 网卡入包量[
     *             [
     *                 "TimeStamp" => (integer) 时间戳
     *                 "Value" => (integer) 值
     *             ]
     *         ]
     *         "IORead" => (array<object>) 磁盘读取量[
     *             [
     *                 "TimeStamp" => (integer) 时间戳
     *                 "Value" => (integer) 值
     *             ]
     *         ]
     *         "IOWrite" => (array<object>) 磁盘写入量[
     *             [
     *                 "TimeStamp" => (integer) 时间戳
     *                 "Value" => (integer) 值
     *             ]
     *         ]
     *         "DiskReadOps" => (array<object>) 磁盘读取次数[
     *             [
     *                 "TimeStamp" => (integer) 时间戳
     *                 "Value" => (integer) 值
     *             ]
     *         ]
     *         "DiskWriteOps" => (array<object>) 磁盘写入次数[
     *             [
     *                 "TimeStamp" => (integer) 时间戳
     *                 "Value" => (integer) 值
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return GetUEcIDCVHostDataResponse
     * @throws UCloudException
     */
    public function getUEcIDCVHostData(GetUEcIDCVHostDataRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUEcIDCVHostDataResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUEcImage - uec2.0
     *
     * See also: https://docs.ucloud.cn/api/uec-api/get_u_ec_image
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ImageType" => (string) 镜像类型：1标准镜像，2行业镜像，3自定义镜像
     *     "Offset" => (integer) 数据偏移量，默认0，非负整数
     *     "Limit" => (integer) 返回数据长度， 默认20，非负整数
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ImageList" => (array<object>) 获取的镜像信息，具体参考下面ImageInfo[
     *         [
     *             "ImageId" => (string) 镜像ID
     *             "ImageName" => (string) 镜像名称
     *             "ImageType" => (integer) 镜像类型：1标准镜像，2行业镜像，3自定义镜像
     *             "OcType" => (string) 系统类型：unix, windows
     *             "ImageDesc" => (string) 镜像描述
     *             "State" => (integer) 镜像状态：镜像状态 1可用，2不可用，3制作中
     *             "ImageSize" => (integer) 镜像大小，单位GB
     *             "CreateTime" => (integer) 镜像创建时间戳
     *             "DeployInfoList" => (array<object>) 部署详情列表[
     *                 [
     *                     "IdcId" => (string) 机房ID
     *                     "State" => (integer) 镜像状态 1-可用, 2-不可用, 3-获取中, 4-转换中, 5-部署中
     *                 ]
     *             ]
     *             "Gpu" => (integer) 是否支持Gpu(1-支持,0-不支持)
     *         ]
     *     ]
     *     "TotalCount" => (integer) 镜像总数
     * ]
     *
     * @return GetUEcImageResponse
     * @throws UCloudException
     */
    public function getUEcImage(GetUEcImageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUEcImageResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUEcPodPrice - 获得容器组价格
     *
     * See also: https://docs.ucloud.cn/api/uec-api/get_u_ec_pod_price
     *
     * Arguments:
     *
     * $args = [
     *     "IdcId" => (string) 机房id
     *     "CpuCore" => (number) 容器组总Cpu核心数
     *     "MemSize" => (integer) 容器组总内存大小（单位M）
     *     "ChargeType" => (integer) 支付类型（2按月，3按年，默认2）
     *     "ChargeQuantity" => (integer) 月数或年数（默认值：1，当支付类型为按月时，默认值为0）
     *     "ProductType" => (string) 产品类型（normal：标准型，hf：高性能型，默认：normal）
     *     "ElasticIp" => (string) 是否绑定外网IP（yes：是，no：否，默认：no）
     *     "Bandwidth" => (integer) 绑定的带宽，默认0，当绑定外网IP时默认1（单位M）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "HolderPrice" => (number) 容器组价格
     *     "IpPrice" => (number) IP和带宽价格
     * ]
     *
     * @return GetUEcPodPriceResponse
     * @throws UCloudException
     */
    public function getUEcPodPrice(GetUEcPodPriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUEcPodPriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUEcUpgradePrice - 获取虚拟机调整差价
     *
     * See also: https://docs.ucloud.cn/api/uec-api/get_u_ec_upgrade_price
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NodeId" => (string) 虚拟机资源ID
     *     "CpuCore" => (integer) cpu核心数
     *     "MemSize" => (integer) 内存大小，单位GB
     *     "SysDiskSize" => (integer) 系统盘大小，单位GB
     *     "DiskSize" => (integer) 数据盘大小，单位GB
     *     "NetLimit" => (integer) 节点带宽限制，单位Mbs
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Price" => (integer) 规格调整差价
     * ]
     *
     * @return GetUEcUpgradePriceResponse
     * @throws UCloudException
     */
    public function getUEcUpgradePrice(GetUEcUpgradePriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUEcUpgradePriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUEcVHostData - 获取虚拟机监控数据
     *
     * See also: https://docs.ucloud.cn/api/uec-api/get_u_ec_v_host_data
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NodeId" => (string) 节点id
     *     "Type" => (array<integer>) 0CPU使用率, 1内存使用率, 2 网卡出流量, 3网卡入流量, 4网卡出包量, 5网卡入包量, 6磁盘读流量, 7磁盘写流量, 8磁盘读次数, 9磁盘写次数
     *     "BeginTime" => (integer) 查询起始时间
     *     "EndTime" => (integer) 查询结束时间
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSets" => (object) 带宽数据实例集合[
     *         "CPUUtilization" => (array<object>) cpu使用率[
     *             [
     *                 "TimeStamp" => (integer) 时间戳
     *                 "Value" => (integer) 值
     *             ]
     *         ]
     *         "MemUtilization" => (array<object>) 内存使用率[
     *             [
     *                 "TimeStamp" => (integer) 时间戳
     *                 "Value" => (integer) 值
     *             ]
     *         ]
     *         "NICOut" => (array<object>) 网卡出带宽[
     *             [
     *                 "TimeStamp" => (integer) 时间戳
     *                 "Value" => (integer) 值
     *             ]
     *         ]
     *         "NICIn" => (array<object>) 网卡入带宽[
     *             [
     *                 "TimeStamp" => (integer) 时间戳
     *                 "Value" => (integer) 值
     *             ]
     *         ]
     *         "NetPacketOut" => (array<object>) 网卡出包量[
     *             [
     *                 "TimeStamp" => (integer) 时间戳
     *                 "Value" => (integer) 值
     *             ]
     *         ]
     *         "NetPacketIn" => (array<object>) 网卡入包量[
     *             [
     *                 "TimeStamp" => (integer) 时间戳
     *                 "Value" => (integer) 值
     *             ]
     *         ]
     *         "IORead" => (array<object>) 磁盘读取量[
     *             [
     *                 "TimeStamp" => (integer) 时间戳
     *                 "Value" => (integer) 值
     *             ]
     *         ]
     *         "IOWrite" => (array<object>) 磁盘写入量[
     *             [
     *                 "TimeStamp" => (integer) 时间戳
     *                 "Value" => (integer) 值
     *             ]
     *         ]
     *         "DiskReadOps" => (array<object>) 磁盘读取次数[
     *             [
     *                 "TimeStamp" => (integer) 时间戳
     *                 "Value" => (integer) 值
     *             ]
     *         ]
     *         "DiskWriteOps" => (array<object>) 磁盘写入次数[
     *             [
     *                 "TimeStamp" => (integer) 时间戳
     *                 "Value" => (integer) 值
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return GetUEcVHostDataResponse
     * @throws UCloudException
     */
    public function getUEcVHostData(GetUEcVHostDataRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUEcVHostDataResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUEcVHostPrice - 获取虚拟机价格
     *
     * See also: https://docs.ucloud.cn/api/uec-api/get_u_ec_v_host_price
     *
     * Arguments:
     *
     * $args = [
     *     "IdcId" => (string) 机房Id
     *     "NodeCount" => (integer) 节点数量，默认1
     *     "CpuCore" => (integer) CPU核数
     *     "MemSize" => (integer) 内存大小，单位GB
     *     "SysDiskSize" => (integer) 系统盘大小，单位GB
     *     "DiskSize" => (integer) 数据盘大小，单位GB
     *     "NetLimit" => (integer) 网络带宽限速，单位Mbs
     *     "ChargeType" => (integer) 付费方式，1按时，2按月，3按年，默认2
     *     "ChargeQuantity" => (integer) 月数或者年数，0计费到月底， 默认0
     *     "ProductType" => (string) 产品类型：normal（经济型），hf（标准型），g(Gpu型),默认normal
     *     "IpCount" => (integer) 外网IP的数量，默认1
     *     "Gpu" => (integer) Gpu卡核心数。仅Gpu机型支持此字段
     *     "GpuType" => (string) Gpu类型，枚举值["T4"],ProductType为g时必填
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "NodePrice" => (number) 节点价格
     *     "IpPrice" => (number) Ip和带宽价格
     * ]
     *
     * @return GetUEcVHostPriceResponse
     * @throws UCloudException
     */
    public function getUEcVHostPrice(GetUEcVHostPriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUEcVHostPriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ImportUEcCustomImage - 导入自定义镜像
     *
     * See also: https://docs.ucloud.cn/api/uec-api/import_u_ec_custom_image
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "IdcId" => (array<string>) 镜像需要导入机房，默认分发到所有机房
     *     "ImageId" => (string) 镜像Id，不传参表示新导入镜像，传参表示已有镜像分发到指定机房
     *     "ImageName" => (string) 镜像名称，不带镜像ID时必填
     *     "UFileUrl" => (string) UFile镜像文件下载地址，不带镜像ID时必填
     *     "OsType" => (string) 操作系统平台，linux、windows(当前版本暂不支持windows)，不带镜像ID时必填
     *     "Format" => (string) 镜像格式，可选RAW、qcow2， 不带镜像ID时必填
     *     "ImageDesc" => (string) 镜像描述
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ImageId" => (string) 镜像Id
     * ]
     *
     * @return ImportUEcCustomImageResponse
     * @throws UCloudException
     */
    public function importUEcCustomImage(ImportUEcCustomImageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ImportUEcCustomImageResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * LoginUEcDocker - 登录容器
     *
     * See also: https://docs.ucloud.cn/api/uec-api/login_u_ec_docker
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ResourceId" => (string) 容器组资源id
     *     "Name" => (string) 容器名称
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "SessionId" => (string) 返回的token
     *     "Link" => (string) 登录地址
     *     "LinkPort" => (integer) 登录端口
     * ]
     *
     * @return LoginUEcDockerResponse
     * @throws UCloudException
     */
    public function loginUEcDocker(LoginUEcDockerRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new LoginUEcDockerResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyUEcBandwidth - 修改节点带宽限制
     *
     * See also: https://docs.ucloud.cn/api/uec-api/modify_u_ec_bandwidth
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NodeId" => (string) 节点Id
     *     "NetLimit" => (string) 节点带宽限制，单位Mbs
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ModifyUEcBandwidthResponse
     * @throws UCloudException
     */
    public function modifyUEcBandwidth(ModifyUEcBandwidthRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyUEcBandwidthResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyUEcHolderName - 修改容器组名称
     *
     * See also: https://docs.ucloud.cn/api/uec-api/modify_u_ec_holder_name
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ResourceId" => (string) 容器组资源id
     *     "Name" => (string) 容器组名称
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ModifyUEcHolderNameResponse
     * @throws UCloudException
     */
    public function modifyUEcHolderName(ModifyUEcHolderNameRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyUEcHolderNameResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyUEcImageName - 修改镜像名称
     *
     * See also: https://docs.ucloud.cn/api/uec-api/modify_u_ec_image_name
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ImageId" => (string) 镜像ID
     *     "ImageName" => (string) 镜像名称
     *     "ImageDesc" => (string) 镜像描述
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ModifyUEcImageNameResponse
     * @throws UCloudException
     */
    public function modifyUEcImageName(ModifyUEcImageNameRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyUEcImageNameResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * PoweroffUEcVHost - 虚拟机断电
     *
     * See also: https://docs.ucloud.cn/api/uec-api/poweroff_u_ec_v_host
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NodeId" => (array<string>) 虚拟机资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return PoweroffUEcVHostResponse
     * @throws UCloudException
     */
    public function poweroffUEcVHost(PoweroffUEcVHostRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new PoweroffUEcVHostResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ReinstallUEcVHost - 虚拟机重装系统
     *
     * See also: https://docs.ucloud.cn/api/uec-api/reinstall_u_ec_v_host
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NodeId" => (string) 虚拟机资源ID
     *     "ImageId" => (string) 镜像ID
     *     "KeepData" => (integer) 是否保留数据盘数据， 0-不保留，1-保留，默认为1
     *     "Password" => (string) 节点密码
     *     "SysDiskSize" => (integer) 系统盘大小，单位GB
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ReinstallUEcVHostResponse
     * @throws UCloudException
     */
    public function reinstallUEcVHost(ReinstallUEcVHostRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ReinstallUEcVHostResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * RestartUEcHolder - 重启容器组
     *
     * See also: https://docs.ucloud.cn/api/uec-api/restart_u_ec_holder
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ResourceId" => (array<string>) 容器组资源id，n为0，1，2...
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return RestartUEcHolderResponse
     * @throws UCloudException
     */
    public function restartUEcHolder(RestartUEcHolderRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RestartUEcHolderResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * RestartUEcVHost - 重启虚拟机v2.0
     *
     * See also: https://docs.ucloud.cn/api/uec-api/restart_u_ec_v_host
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NodeId" => (array<string>) 节点id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return RestartUEcVHostResponse
     * @throws UCloudException
     */
    public function restartUEcVHost(RestartUEcVHostRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RestartUEcVHostResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * StartUEcVHost - 启动UEC虚拟机
     *
     * See also: https://docs.ucloud.cn/api/uec-api/start_u_ec_v_host
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NodeId" => (array<string>) 虚拟机资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return StartUEcVHostResponse
     * @throws UCloudException
     */
    public function startUEcVHost(StartUEcVHostRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new StartUEcVHostResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * StopUEcVHost - 停止UEC虚拟机
     *
     * See also: https://docs.ucloud.cn/api/uec-api/stop_u_ec_v_host
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NodeId" => (array<string>) 虚拟机资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return StopUEcVHostResponse
     * @throws UCloudException
     */
    public function stopUEcVHost(StopUEcVHostRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new StopUEcVHostResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UnBindUEcFirewall - 解绑防火墙
     *
     * See also: https://docs.ucloud.cn/api/uec-api/un_bind_u_ec_firewall
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "FirewallId" => (string) 防火墙Id
     *     "ResourceId" => (string) 节点Id或容器组资源id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UnBindUEcFirewallResponse
     * @throws UCloudException
     */
    public function unBindUEcFirewall(UnBindUEcFirewallRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UnBindUEcFirewallResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateUEcFirewall - 更新防火墙信息，新增和删除规则
     *
     * See also: https://docs.ucloud.cn/api/uec-api/update_u_ec_firewall
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "FirewallId" => (string) 防火墙Id
     *     "Rule" => (array<object>) [
     *         [
     *             "ProtocolType" => (string) 协议，可选值：TCP，UDP，ICMP
     *             "Port" => (string) 端口，范围用"-"符号分隔，如：1-65535
     *             "SrcIp" => (string) 源ip
     *             "Action" => (string) ACCEPT（接受）和DROP（拒绝）
     *             "Priority" => (string)   优先级：HIGH（高），MEDIUM（中），LOW（低）
     *             "Remark" => (string) 备注
     *         ]
     *     ]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateUEcFirewallResponse
     * @throws UCloudException
     */
    public function updateUEcFirewall(UpdateUEcFirewallRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateUEcFirewallResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateUEcFirewallAttribute - 更新防火墙名称及描述
     *
     * See also: https://docs.ucloud.cn/api/uec-api/update_u_ec_firewall_attribute
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "FirewallId" => (string) 防火墙Id
     *     "Name" => (string) 防火墙名称
     *     "Remark" => (string) 描述
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateUEcFirewallAttributeResponse
     * @throws UCloudException
     */
    public function updateUEcFirewallAttribute(UpdateUEcFirewallAttributeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateUEcFirewallAttributeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateUEcSubnet - 更新子网信息
     *
     * See also: https://docs.ucloud.cn/api/uec-api/update_u_ec_subnet
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SubnetId" => (string) 子网ID
     *     "SubnetName" => (string) 子网名称
     *     "Comment" => (string) 备注
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateUEcSubnetResponse
     * @throws UCloudException
     */
    public function updateUEcSubnet(UpdateUEcSubnetRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateUEcSubnetResponse($resp->toArray(), $resp->getRequestId());
    }
}
