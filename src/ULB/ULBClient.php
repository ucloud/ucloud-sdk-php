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
namespace UCloud\ULB;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\ULB\Apis\AllocateBackendRequest;
use UCloud\ULB\Apis\AllocateBackendResponse;
use UCloud\ULB\Apis\BindSSLRequest;
use UCloud\ULB\Apis\BindSSLResponse;
use UCloud\ULB\Apis\CreatePolicyRequest;
use UCloud\ULB\Apis\CreatePolicyResponse;
use UCloud\ULB\Apis\CreateSSLRequest;
use UCloud\ULB\Apis\CreateSSLResponse;
use UCloud\ULB\Apis\CreateULBRequest;
use UCloud\ULB\Apis\CreateULBResponse;
use UCloud\ULB\Apis\CreateVServerRequest;
use UCloud\ULB\Apis\CreateVServerResponse;
use UCloud\ULB\Apis\DeletePolicyRequest;
use UCloud\ULB\Apis\DeletePolicyResponse;
use UCloud\ULB\Apis\DeleteSSLRequest;
use UCloud\ULB\Apis\DeleteSSLResponse;
use UCloud\ULB\Apis\DeleteULBRequest;
use UCloud\ULB\Apis\DeleteULBResponse;
use UCloud\ULB\Apis\DeleteVServerRequest;
use UCloud\ULB\Apis\DeleteVServerResponse;
use UCloud\ULB\Apis\DescribeSSLRequest;
use UCloud\ULB\Apis\DescribeSSLResponse;
use UCloud\ULB\Apis\DescribeULBRequest;
use UCloud\ULB\Apis\DescribeULBResponse;
use UCloud\ULB\Apis\DescribeULBSimpleRequest;
use UCloud\ULB\Apis\DescribeULBSimpleResponse;
use UCloud\ULB\Apis\DescribeVServerRequest;
use UCloud\ULB\Apis\DescribeVServerResponse;
use UCloud\ULB\Apis\ReleaseBackendRequest;
use UCloud\ULB\Apis\ReleaseBackendResponse;
use UCloud\ULB\Apis\UnbindSSLRequest;
use UCloud\ULB\Apis\UnbindSSLResponse;
use UCloud\ULB\Apis\UpdateBackendAttributeRequest;
use UCloud\ULB\Apis\UpdateBackendAttributeResponse;
use UCloud\ULB\Apis\UpdatePolicyRequest;
use UCloud\ULB\Apis\UpdatePolicyResponse;
use UCloud\ULB\Apis\UpdateULBAttributeRequest;
use UCloud\ULB\Apis\UpdateULBAttributeResponse;
use UCloud\ULB\Apis\UpdateVServerAttributeRequest;
use UCloud\ULB\Apis\UpdateVServerAttributeResponse;

/**
 * This client is used to call actions of **ULB** service
 */
class ULBClient extends Client
{

    /**
     * AllocateBackend - 添加ULB后端资源实例
     *
     * See also: https://docs.ucloud.cn/api/ULB-api/allocate_backend
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "ULBId" => (string) 负载均衡实例的ID
     *     "VServerId" => (string) VServer实例的ID
     *     "ResourceType" => (string) 所添加的后端资源的类型，枚举值：UHost -> 云主机；UNI -> 虚拟网卡；UPM -> 物理云主机； UDHost -> 私有专区主机；UDocker -> 容器；UHybrid->混合云主机；CUBE->Cube；默认值为UHost。报文转发模式不支持UDocker、UHybrid、CUBE
     *     "ResourceId" => (string) 所添加的后端资源的资源ID
     *     "ResourceIP" => (string) 所添加的后端服务器的资源实例IP，当ResourceType 为 UHybrid 时有效，且必填
     *     "VPCId" => (string) 所添加的后端服务器所在的vpc，当ResourceType 为 UHybrid 时有效，且必填
     *     "SubnetId" => (string) 所添加的后端服务器所在的子网，当ResourceType 为 UHybrid 时有效，且必填
     *     "Port" => (integer) 所添加的后端资源服务端口，取值范围[1-65535]，默认80
     *     "Weight" => (integer) 所添加的后端RS权重（在加权轮询算法下有效），取值范围[0-100]，默认为1
     *     "Enabled" => (integer) 后端实例状态开关，枚举值： 1：启用； 0：禁用 默认为启用
     *     "IsBackup" => (integer) rs是否为backup，默认为00：普通rs1：backup的rs
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "BackendId" => (string) 所添加的后端资源在ULB中的对象ID，（为ULB系统中使用，与资源自身ID无关），可用于 UpdateBackendAttribute/UpdateBackendAttributeBatch/ReleaseBackend
     * ]
     *
     * @throws UCloudException
     */
    public function allocateBackend(AllocateBackendRequest $request = null): AllocateBackendResponse
    {
        $resp = $this->invoke($request);
        return new AllocateBackendResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * BindSSL - 将SSL证书绑定到VServer
     *
     * See also: https://docs.ucloud.cn/api/ULB-api/bind_ssl
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "ULBId" => (string) 所绑定ULB实例ID
     *     "VServerId" => (string) 所绑定VServer实例ID
     *     "SSLId" => (string) SSL证书的Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function bindSSL(BindSSLRequest $request = null): BindSSLResponse
    {
        $resp = $this->invoke($request);
        return new BindSSLResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreatePolicy - 创建VServer内容转发策略
     *
     * See also: https://docs.ucloud.cn/api/ULB-api/create_policy
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "ULBId" => (string) 需要添加内容转发策略的负载均衡实例ID
     *     "VServerId" => (string) 需要添加内容转发策略的VServer实例ID
     *     "BackendId" => (array<string>) 内容转发策略应用的后端资源实例的ID，来源于 AllocateBackend 返回的 BackendId
     *     "Match" => (string) 内容转发匹配字段
     *     "Type" => (string) 内容转发匹配字段的类型
     *     "PolicyPriority" => (integer) 策略优先级，1-9999
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "PolicyId" => (string) 内容转发策略ID
     * ]
     *
     * @throws UCloudException
     */
    public function createPolicy(CreatePolicyRequest $request = null): CreatePolicyResponse
    {
        $resp = $this->invoke($request);
        return new CreatePolicyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateSSL - 创建SSL证书，可以把整个 Pem 证书内容传过来，或者把证书、私钥、CA证书分别传过来
     *
     * See also: https://docs.ucloud.cn/api/ULB-api/create_ssl
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "SSLName" => (string) SSL证书的名字，默认值为空
     *     "SSLType" => (string) 所添加的SSL证书类型，目前只支持Pem格式
     *     "SSLContent" => (string) SSL证书的完整内容，包括用户证书、加密证书的私钥、CA证书
     *     "UserCert" => (string) 用户的证书
     *     "PrivateKey" => (string) 加密证书的私钥
     *     "CaCert" => (string) CA证书
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "SSLId" => (string) SSL证书的Id
     * ]
     *
     * @throws UCloudException
     */
    public function createSSL(CreateSSLRequest $request = null): CreateSSLResponse
    {
        $resp = $this->invoke($request);
        return new CreateSSLResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateULB - 创建负载均衡实例，可以选择内网或者外网
     *
     * See also: https://docs.ucloud.cn/api/ULB-api/create_ulb
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "ULBName" => (string) 负载均衡的名字，默认值为“ULB”
     *     "Tag" => (string) 业务组
     *     "Remark" => (string) 备注
     *     "OuterMode" => (string) 创建的ULB是否为外网模式，默认即为外网模式
     *     "InnerMode" => (string) 创建的ULB是否为内网模式
     *     "ChargeType" => (string) 付费方式, 枚举值为: Year, 按年付费; Month, 按月付费; Dynamic, 按时付费
     *     "VPCId" => (string) ULB所在的VPC的ID, 如果不传则使用默认的VPC
     *     "SubnetId" => (string) 内网ULB 所属的子网ID，如果不传则使用默认的子网
     *     "BusinessId" => (string) ULB 所属的业务组ID，如果不传则使用默认的业务组
     *     "FirewallId" => (string) 防火墙ID，如果不传，则默认不绑定防火墙
     *     "ListenType" => (string) ULB 监听器类型，枚举值：RequestProxy，请求代理； PacketsTransmit ，报文转发。默认为RequestProxy
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ULBId" => (string) 负载均衡实例的Id
     *     "IPv6AddressId" => (string) IPv6地址Id
     * ]
     *
     * @throws UCloudException
     */
    public function createULB(CreateULBRequest $request = null): CreateULBResponse
    {
        $resp = $this->invoke($request);
        return new CreateULBResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateVServer - 创建VServer实例，定义监听的协议和端口以及负载均衡算法
     *
     * See also: https://docs.ucloud.cn/api/ULB-api/create_vserver
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ULBId" => (string) 负载均衡实例ID
     *     "VServerName" => (string) VServer实例名称，默认为"VServer"
     *     "ListenType" => (string) 监听器类型，枚举值，RequestProxy ，请求代理；PacketsTransmit ，报文转发。默认为RequestProxy
     *     "Protocol" => (string) VServer实例的协议，请求代理模式下有 HTTP、HTTPS、TCP，报文转发下有 TCP，UDP。默认为“HTTP"
     *     "FrontendPort" => (integer) VServer后端端口，取值范围[1-65535]；默认值为80
     *     "Method" => (string) VServer负载均衡模式，枚举值：Roundrobin -> 轮询;Source -> 源地址；ConsistentHash -> 一致性哈希；SourcePort -> 源地址（计算端口）；ConsistentHashPort -> 一致性哈希（计算端口）; WeightRoundrobin -> 加权轮询; Leastconn -> 最小连接数;Backup ->主备模式。ConsistentHash，SourcePort，ConsistentHashPort 只在报文转发中使用；Leastconn只在请求代理中使用；Roundrobin、Source和WeightRoundrobin,Backup在请求代理和报文转发中使用。默认为："Roundrobin"
     *     "PersistenceType" => (string) VServer会话保持方式，默认关闭会话保持。枚举值：None -> 关闭；ServerInsert -> 自动生成KEY；UserDefined -> 用户自定义KEY。
     *     "PersistenceInfo" => (string) 根据PersistenceType确认； None和ServerInsert： 此字段无意义； UserDefined：此字段传入自定义会话保持String
     *     "ClientTimeout" => (integer) ListenType为RequestProxy时表示空闲连接的回收时间，单位：秒，取值范围：时(0，86400]，默认值为60；ListenType为PacketsTransmit时表示连接保持的时间，单位：秒，取值范围：[60，900]，0 表示禁用连接保持
     *     "MonitorType" => (string) 健康检查类型，枚举值：Port -> 端口检查；Path -> 路径检查；Ping -> Ping探测；Customize -> UDP检查请求代理型默认值为Port，其中TCP协议仅支持Port，其他协议支持Port和Path;报文转发型TCP协议仅支持Port，UDP协议支持Ping、Port和Customize，默认值为Ping
     *     "Domain" => (string) 根据MonitorType确认； 当MonitorType为Path时，此字段有意义，代表HTTP检查域名
     *     "Path" => (string) 根据MonitorType确认； 当MonitorType为Path时，此字段有意义，代表HTTP检查路径
     *     "RequestMsg" => (string) 根据MonitorType确认； 当MonitorType为Customize时，此字段有意义，代表UDP检查发出的请求报文
     *     "ResponseMsg" => (string) 根据MonitorType确认； 当MonitorType为Customize时，此字段有意义，代表UDP检查请求应收到的响应报文
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "VServerId" => (string) VServer实例的Id
     * ]
     *
     * @throws UCloudException
     */
    public function createVServer(CreateVServerRequest $request = null): CreateVServerResponse
    {
        $resp = $this->invoke($request);
        return new CreateVServerResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeletePolicy - 删除内容转发策略
     *
     * See also: https://docs.ucloud.cn/api/ULB-api/delete_policy
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "PolicyId" => (string) 内容转发策略ID
     *     "VServerId" => (string) VServer 资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function deletePolicy(DeletePolicyRequest $request = null): DeletePolicyResponse
    {
        $resp = $this->invoke($request);
        return new DeletePolicyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteSSL - 删除SSL证书
     *
     * See also: https://docs.ucloud.cn/api/ULB-api/delete_ssl
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "SSLId" => (string) SSL证书的ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function deleteSSL(DeleteSSLRequest $request = null): DeleteSSLResponse
    {
        $resp = $this->invoke($request);
        return new DeleteSSLResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteULB - 删除负载均衡实例
     *
     * See also: https://docs.ucloud.cn/api/ULB-api/delete_ulb
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "ULBId" => (string) 负载均衡实例的ID
     *     "ReleaseEip" => (boolean) 删除ulb时是否释放绑定的EIP，false标识只解绑EIP，true表示会释放绑定的EIP，默认是false。Anycast IP 此参数无效
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function deleteULB(DeleteULBRequest $request = null): DeleteULBResponse
    {
        $resp = $this->invoke($request);
        return new DeleteULBResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteVServer - 删除VServer实例
     *
     * See also: https://docs.ucloud.cn/api/ULB-api/delete_vserver
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "ULBId" => (string) 负载均衡实例的ID
     *     "VServerId" => (string) VServer实例的ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function deleteVServer(DeleteVServerRequest $request = null): DeleteVServerResponse
    {
        $resp = $this->invoke($request);
        return new DeleteVServerResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeSSL - 获取SSL证书信息
     *
     * See also: https://docs.ucloud.cn/api/ULB-api/describe_ssl
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "SSLId" => (string) SSL证书的Id
     *     "Limit" => (integer) 数据分页值，默认为20
     *     "Offset" => (integer) 数据偏移量，默认值为0
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 满足条件的SSL证书总数
     *     "DataSet" => (array<object>) SSL证书详细信息，具体结构见 ULBSSLSet[
     *         [
     *             "SSLId" => (string) SSL证书的Id
     *             "SSLName" => (string) SSL证书的名字
     *             "SSLType" => (string) SSL证书类型，暂时只有 Pem 一种类型
     *             "SSLContent" => (string) SSL证书的内容
     *             "CreateTime" => (integer) SSL证书的创建时间
     *             "HashValue" => (string) SSL证书的HASH值
     *             "BindedTargetSet" => (array<object>) SSL证书绑定到的对象[
     *                 [
     *                     "VServerId" => (string) SSL证书绑定到的VServer的资源ID
     *                     "VServerName" => (string) 对应的VServer的名字
     *                     "ULBId" => (string) VServer 所属的ULB实例的资源ID
     *                     "ULBName" => (string) ULB实例的名称
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function describeSSL(DescribeSSLRequest $request = null): DescribeSSLResponse
    {
        $resp = $this->invoke($request);
        return new DescribeSSLResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeULB - 获取ULB详细信息
     *
     * See also: https://docs.ucloud.cn/api/ULB-api/describe_ulb
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Offset" => (integer) 数据偏移量，默认为0
     *     "Limit" => (integer) 数据分页值，默认为20
     *     "ULBId" => (string) 负载均衡实例的Id。 若指定则返回指定的负载均衡实例的信息； 若不指定则返回当前数据中心中所有的负载均衡实例的信息
     *     "VPCId" => (string) ULB所属的VPC
     *     "SubnetId" => (string) ULB所属的子网ID
     *     "BusinessId" => (string) ULB所属的业务组ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 满足条件的ULB总数
     *     "DataSet" => (array<object>) ULB列表，每项参数详见 ULBSet[
     *         [
     *             "ULBId" => (string) 负载均衡的资源ID
     *             "Name" => (string) 负载均衡的资源名称
     *             "Tag" => (string) 负载均衡的业务组名称
     *             "Remark" => (string) 负载均衡的备注
     *             "BandwidthType" => (integer) 带宽类型，枚举值为： 0，非共享带宽； 1，共享带宽
     *             "Bandwidth" => (integer) 带宽
     *             "CreateTime" => (integer) ULB的创建时间，格式为Unix Timestamp
     *             "IPSet" => (array<object>) ULB的详细信息列表，具体结构见下方 ULBIPSet[
     *                 [
     *                     "OperatorName" => (string) 弹性IP的运营商信息，枚举值为：  Bgp：BGP IP International：国际IP
     *                     "EIP" => (string) 弹性IP地址
     *                     "EIPId" => (string) 弹性IP的ID
     *                     "BandwidthType" => (integer) 弹性IP的带宽类型，枚举值：1 表示是共享带宽，0 普通带宽类型（暂未对外开放）
     *                     "Bandwidth" => (integer) 弹性IP的带宽值（暂未对外开放）
     *                 ]
     *             ]
     *             "VServerSet" => (array<object>) 负载均衡实例中存在的VServer实例列表，具体结构见下方 ULBVServerSet[
     *                 [
     *                     "MonitorType" => (string) 健康检查类型，枚举值：Port -> 端口检查；Path -> 路径检查；Ping -> Ping探测， Customize -> UDP检查请求代理型默认值为Port，其中TCP协议仅支持Port，其他协议支持Port和Path; 报文转发型TCP协议仅支持Port，UDP协议支持Ping、Port和Customize
     *                     "Domain" => (string) 根据MonitorType确认； 当MonitorType为Port时，此字段无意义。当MonitorType为Path时，代表HTTP检查域名
     *                     "Path" => (string) 根据MonitorType确认； 当MonitorType为Port时，此字段无意义。当MonitorType为Path时，代表HTTP检查路径
     *                     "RequestMsg" => (string) 根据MonitorType确认； 当MonitorType为Customize时，此字段有意义，代表UDP检查发出的请求报文
     *                     "ResponseMsg" => (string) 根据MonitorType确认； 当MonitorType为Customize时，此字段有意义，代表UDP检查请求应收到的响应报文
     *                     "VServerId" => (string) VServer实例的Id
     *                     "VServerName" => (string) VServer实例的名字
     *                     "Protocol" => (string) VServer实例的协议。 枚举值为：HTTP，TCP，UDP，HTTPS。
     *                     "FrontendPort" => (integer) VServer服务端口
     *                     "Method" => (string) VServer负载均衡的模式，枚举值：Roundrobin -> 轮询;Source -> 源地址；ConsistentHash -> 一致性哈希；SourcePort -> 源地址（计算端口）；ConsistentHashPort -> 一致性哈希（计算端口）。
     *                     "PersistenceType" => (string) VServer会话保持方式。枚举值为： None -> 关闭会话保持； ServerInsert -> 自动生成； UserDefined -> 用户自定义。
     *                     "PersistenceInfo" => (string) 根据PersistenceType确定： None或ServerInsert，此字段为空； UserDefined，此字段展示用户自定义会话string。
     *                     "ClientTimeout" => (integer) 空闲连接的回收时间，单位：秒。
     *                     "Status" => (integer) VServer的运行状态。枚举值： 0 -> rs全部运行正常;1 -> rs全部运行异常；2 -> rs部分运行异常。
     *                     "SSLSet" => (array<object>) VServer绑定的SSL证书信息，具体结构见下方 ULBSSLSet。[
     *                         [
     *                             "SSLId" => (string) SSL证书的Id
     *                             "SSLName" => (string) SSL证书的名字
     *                             "SSLType" => (string) SSL证书类型，暂时只有 Pem 一种类型
     *                             "SSLContent" => (string) SSL证书的内容
     *                             "CreateTime" => (integer) SSL证书的创建时间
     *                             "HashValue" => (string) SSL证书的HASH值
     *                             "BindedTargetSet" => (array<object>) SSL证书绑定到的对象[
     *                                 [
     *                                     "VServerId" => (string) SSL证书绑定到的VServer的资源ID
     *                                     "VServerName" => (string) 对应的VServer的名字
     *                                     "ULBId" => (string) VServer 所属的ULB实例的资源ID
     *                                     "ULBName" => (string) ULB实例的名称
     *                                 ]
     *                             ]
     *                         ]
     *                     ]
     *                     "BackendSet" => (array<object>) 后端资源信息列表，具体结构见下方 ULBBackendSet[
     *                         [
     *                             "BackendId" => (string) 后端资源实例的Id
     *                             "ResourceType" => (string) 资源实例的类型
     *                             "ResourceId" => (string) 资源实例的资源Id
     *                             "ResourceName" => (string) 资源实例的资源名称
     *                             "SubResourceType" => (string) 资源绑定的虚拟网卡实例的类型
     *                             "SubResourceId" => (string) 资源绑定的虚拟网卡实例的资源Id
     *                             "SubResourceName" => (string) 资源绑定的虚拟网卡实例的资源名称
     *                             "PrivateIP" => (string) 后端提供服务的内网IP
     *                             "Port" => (integer) 后端提供服务的端口
     *                             "Enabled" => (integer) 后端提供服务的实例启用与否，枚举值：0 禁用 1 启用
     *                             "Status" => (integer) 后端提供服务的实例运行状态，枚举值：0健康检查健康状态 1 健康检查异常
     *                             "SubnetId" => (string) 后端提供服务的资源所在的子网的ID
     *                             "IsBackup" => (integer) 是否为backup，只有当vserver的Backup属性为1时才会有此字段，说明：0：主rs1：备rs
     *                         ]
     *                     ]
     *                     "ListenType" => (string) 监听器类型，枚举值为: RequestProxy -> 请求代理；PacketsTransmit -> 报文转发
     *                     "PolicySet" => (array<object>) 内容转发信息列表，具体结构见下方 ULBPolicySet[
     *                         [
     *                             "PolicyId" => (string) 内容转发Id，默认内容转发类型下为空。
     *                             "PolicyType" => (string) 内容类型，枚举值：Custom -> 客户自定义；Default -> 默认内容转发
     *                             "Type" => (string) 内容转发匹配字段的类型，枚举值：Domain -> 域名；Path -> 路径； 默认内容转发类型下为空
     *                             "Match" => (string) 内容转发匹配字段;默认内容转发类型下为空。
     *                             "PolicyPriority" => (integer) 内容转发优先级，范围[1,9999]，数字越大优先级越高。默认内容转发规则下为0。
     *                             "VServerId" => (string) 所属VServerId
     *                             "TotalCount" => (integer) 默认内容转发类型下返回当前rs总数
     *                             "BackendSet" => (array<object>) 内容转发下rs的详细信息，参考PolicyBackendSet[
     *                                 [
     *                                     "BackendId" => (string) 所添加的后端资源在ULB中的对象ID，（为ULB系统中使用，与资源自身ID无关
     *                                     "ResourceType" => (string) 所添加的后端资源的类型，枚举值：UHost -> 云主机；UPM -> 物理云主机； UDHost -> 私有专区主机；UDocker -> 容器；UHybrid->混合云主机；CUBE->Cube；UNI -> 虚拟网卡
     *                                     "ResourceName" => (string) 后端资源的实例名称
     *                                     "SubResourceId" => (string) 如果资源绑定了弹性网卡，则展示弹性网卡的资源ID
     *                                     "SubResourceName" => (string) 如果资源绑定了弹性网卡，则展示弹性网卡的资源名称
     *                                     "SubResourceType" => (string) "UNI"或者为空
     *                                     "ObjectId" => (string) 后端资源的对象ID
     *                                     "Port" => (integer) 所添加的后端资源服务端口
     *                                     "PrivateIP" => (string) 后端资源的内网IP
     *                                 ]
     *                             ]
     *                         ]
     *                     ]
     *                 ]
     *             ]
     *             "ULBType" => (string) ULB 的类型
     *             "IPVersion" => (string) ULB ip类型，枚举值：IPv6 / IPv4 （内部测试，暂未对外开放）
     *             "ListenType" => (string) ULB 监听器类型，枚举值：RequestProxy，请求代理； PacketsTransmit ，报文转发；Comprehensive，兼容型；Pending，未定型
     *             "VPCId" => (string) ULB所在的VPC的ID
     *             "SubnetId" => (string) ULB 为 InnerMode 时，ULB 所属的子网ID，默认为空
     *             "BusinessId" => (string) ULB 所属的业务组ID
     *             "PrivateIP" => (string) ULB的内网IP，当ULBType为OuterMode时，该值为空
     *             "FirewallSet" => (array<object>) 防火墙信息，具体结构见下方 FirewallSet[
     *                 [
     *                     "FirewallName" => (string) 防火墙名称
     *                     "FirewallId" => (string) 防火墙ID
     *                 ]
     *             ]
     *             "EnableLog" => (integer) ULB是否开启日志功能。0，关闭；1，开启
     *             "LogSet" => (object) 日志功能相关信息，仅当EnableLog为true时会返回，具体结构见下方 LoggerSet[
     *                 "BucketName" => (string) ulb日志上传的bucket
     *                 "TokenID" => (string) 上传到bucket使用的token的tokenid
     *                 "TokenName" => (string) bucket的token名称
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function describeULB(DescribeULBRequest $request = null): DescribeULBResponse
    {
        $resp = $this->invoke($request);
        return new DescribeULBResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeULBSimple - 获取ULB信息
     *
     * See also: https://docs.ucloud.cn/api/ULB-api/describe_ulb_simple
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "Offset" => (integer) 数据偏移量，默认为0
     *     "Limit" => (integer) 数据分页值，默认为10000
     *     "ULBId" => (string) 负载均衡实例的Id。 若指定则返回指定的负载均衡实例的信息； 若不指定则返回当前数据中心中所有的负载均衡实例的信息
     *     "VPCId" => (string) ULB所属的VPC
     *     "SubnetId" => (string) ULB所属的子网ID
     *     "BusinessId" => (string) ULB所属的业务组ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 满足条件的ULB总数
     *     "DataSet" => (array<object>) ULB列表，每项参数详见 ULBSimpleSet[
     *         [
     *             "ListenType" => (string) ULB 监听器类型，枚举值：RequestProxy，请求代理； PacketsTransmit ，报文转发；Comprehensive，兼容型；Pending，未定型
     *             "IPVersion" => (string) ULB提供服务的IP类型。枚举值，“IPv4”,"IPv6"。默认为“IPv4”
     *             "ULBId" => (string) 负载均衡的资源ID
     *             "Name" => (string) 负载均衡的资源名称
     *             "Tag" => (string) 负载均衡的业务组名称
     *             "Remark" => (string) 负载均衡的备注
     *             "CreateTime" => (integer) ULB的创建时间，格式为Unix Timestamp
     *             "VPCId" => (string) ULB所在的VPC的ID
     *             "SubnetId" => (string) ULB 为 InnerMode 时，ULB 所属的子网ID
     *             "BusinessId" => (string) ULB 所属的业务组ID
     *             "PrivateIP" => (string) ULB的内网IP，当ULBType为OuterMode时，该值为空
     *             "BandwidthType" => (integer) 带宽类型，枚举值为： 0，非共享带宽； 1，共享带宽
     *             "Bandwidth" => (integer) 带宽
     *             "IPSet" => (array<object>) ULB的详细信息列表，具体结构见下方 ULBIPSet[
     *                 [
     *                     "OperatorName" => (string) 弹性IP的运营商信息，枚举值为：  Bgp：BGP IP International：国际IP
     *                     "EIP" => (string) 弹性IP地址
     *                     "EIPId" => (string) 弹性IP的ID
     *                     "BandwidthType" => (integer) 弹性IP的带宽类型，枚举值：1 表示是共享带宽，0 普通带宽类型（暂未对外开放）
     *                     "Bandwidth" => (integer) 弹性IP的带宽值（暂未对外开放）
     *                 ]
     *             ]
     *             "VServerCount" => (integer) ulb下vserver数量
     *             "ULBType" => (string) ULB 的类型（InnerMode or OuterMode）
     *             "FirewallSet" => (array<object>) 防火墙信息，具体结构见下方 FirewallSet[
     *                 [
     *                     "FirewallName" => (string) 防火墙名称
     *                     "FirewallId" => (string) 防火墙ID
     *                 ]
     *             ]
     *             "EnableLog" => (integer) ULB是否开启日志功能。0，关闭；1，开启
     *             "LogSet" => (object) 日志功能相关信息，仅当EnableLog为true时会返回，具体结构见下方 LoggerSet[
     *                 "BucketName" => (string) ulb日志上传的bucket
     *                 "TokenID" => (string) 上传到bucket使用的token的tokenid
     *                 "TokenName" => (string) bucket的token名称
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function describeULBSimple(DescribeULBSimpleRequest $request = null): DescribeULBSimpleResponse
    {
        $resp = $this->invoke($request);
        return new DescribeULBSimpleResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeVServer - 获取ULB下的VServer的详细信息
     *
     * See also: https://docs.ucloud.cn/api/ULB-api/describe_vserver
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ULBId" => (string) 负载均衡实例的Id
     *     "VServerId" => (string) VServer实例的Id；若指定则返回指定的VServer实例的信息； 若不指定则返回当前负载均衡实例下所有VServer的信息
     *     "Limit" => (integer) 数据分页值
     *     "Offset" => (integer) 数据偏移量
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 满足条件的VServer总数
     *     "DataSet" => (array<object>) VServer列表，每项参数详见 ULBVServerSet[
     *         [
     *             "MonitorType" => (string) 健康检查类型，枚举值：Port -> 端口检查；Path -> 路径检查；Ping -> Ping探测， Customize -> UDP检查请求代理型默认值为Port，其中TCP协议仅支持Port，其他协议支持Port和Path; 报文转发型TCP协议仅支持Port，UDP协议支持Ping、Port和Customize
     *             "Domain" => (string) 根据MonitorType确认； 当MonitorType为Port时，此字段无意义。当MonitorType为Path时，代表HTTP检查域名
     *             "Path" => (string) 根据MonitorType确认； 当MonitorType为Port时，此字段无意义。当MonitorType为Path时，代表HTTP检查路径
     *             "RequestMsg" => (string) 根据MonitorType确认； 当MonitorType为Customize时，此字段有意义，代表UDP检查发出的请求报文
     *             "ResponseMsg" => (string) 根据MonitorType确认； 当MonitorType为Customize时，此字段有意义，代表UDP检查请求应收到的响应报文
     *             "VServerId" => (string) VServer实例的Id
     *             "VServerName" => (string) VServer实例的名字
     *             "Protocol" => (string) VServer实例的协议。 枚举值为：HTTP，TCP，UDP，HTTPS。
     *             "FrontendPort" => (integer) VServer服务端口
     *             "Method" => (string) VServer负载均衡的模式，枚举值：Roundrobin -> 轮询;Source -> 源地址；ConsistentHash -> 一致性哈希；SourcePort -> 源地址（计算端口）；ConsistentHashPort -> 一致性哈希（计算端口）。
     *             "PersistenceType" => (string) VServer会话保持方式。枚举值为： None -> 关闭会话保持； ServerInsert -> 自动生成； UserDefined -> 用户自定义。
     *             "PersistenceInfo" => (string) 根据PersistenceType确定： None或ServerInsert，此字段为空； UserDefined，此字段展示用户自定义会话string。
     *             "ClientTimeout" => (integer) 空闲连接的回收时间，单位：秒。
     *             "Status" => (integer) VServer的运行状态。枚举值： 0 -> rs全部运行正常;1 -> rs全部运行异常；2 -> rs部分运行异常。
     *             "SSLSet" => (array<object>) VServer绑定的SSL证书信息，具体结构见下方 ULBSSLSet。[
     *                 [
     *                     "SSLId" => (string) SSL证书的Id
     *                     "SSLName" => (string) SSL证书的名字
     *                     "SSLType" => (string) SSL证书类型，暂时只有 Pem 一种类型
     *                     "SSLContent" => (string) SSL证书的内容
     *                     "CreateTime" => (integer) SSL证书的创建时间
     *                     "HashValue" => (string) SSL证书的HASH值
     *                     "BindedTargetSet" => (array<object>) SSL证书绑定到的对象[
     *                         [
     *                             "VServerId" => (string) SSL证书绑定到的VServer的资源ID
     *                             "VServerName" => (string) 对应的VServer的名字
     *                             "ULBId" => (string) VServer 所属的ULB实例的资源ID
     *                             "ULBName" => (string) ULB实例的名称
     *                         ]
     *                     ]
     *                 ]
     *             ]
     *             "BackendSet" => (array<object>) 后端资源信息列表，具体结构见下方 ULBBackendSet[
     *                 [
     *                     "BackendId" => (string) 后端资源实例的Id
     *                     "ResourceType" => (string) 资源实例的类型
     *                     "ResourceId" => (string) 资源实例的资源Id
     *                     "ResourceName" => (string) 资源实例的资源名称
     *                     "SubResourceType" => (string) 资源绑定的虚拟网卡实例的类型
     *                     "SubResourceId" => (string) 资源绑定的虚拟网卡实例的资源Id
     *                     "SubResourceName" => (string) 资源绑定的虚拟网卡实例的资源名称
     *                     "PrivateIP" => (string) 后端提供服务的内网IP
     *                     "Port" => (integer) 后端提供服务的端口
     *                     "Enabled" => (integer) 后端提供服务的实例启用与否，枚举值：0 禁用 1 启用
     *                     "Status" => (integer) 后端提供服务的实例运行状态，枚举值：0健康检查健康状态 1 健康检查异常
     *                     "SubnetId" => (string) 后端提供服务的资源所在的子网的ID
     *                     "IsBackup" => (integer) 是否为backup，只有当vserver的Backup属性为1时才会有此字段，说明：0：主rs1：备rs
     *                 ]
     *             ]
     *             "ListenType" => (string) 监听器类型，枚举值为: RequestProxy -> 请求代理；PacketsTransmit -> 报文转发
     *             "PolicySet" => (array<object>) 内容转发信息列表，具体结构见下方 ULBPolicySet[
     *                 [
     *                     "PolicyId" => (string) 内容转发Id，默认内容转发类型下为空。
     *                     "PolicyType" => (string) 内容类型，枚举值：Custom -> 客户自定义；Default -> 默认内容转发
     *                     "Type" => (string) 内容转发匹配字段的类型，枚举值：Domain -> 域名；Path -> 路径； 默认内容转发类型下为空
     *                     "Match" => (string) 内容转发匹配字段;默认内容转发类型下为空。
     *                     "PolicyPriority" => (integer) 内容转发优先级，范围[1,9999]，数字越大优先级越高。默认内容转发规则下为0。
     *                     "VServerId" => (string) 所属VServerId
     *                     "TotalCount" => (integer) 默认内容转发类型下返回当前rs总数
     *                     "BackendSet" => (array<object>) 内容转发下rs的详细信息，参考PolicyBackendSet[
     *                         [
     *                             "BackendId" => (string) 所添加的后端资源在ULB中的对象ID，（为ULB系统中使用，与资源自身ID无关
     *                             "ResourceType" => (string) 所添加的后端资源的类型，枚举值：UHost -> 云主机；UPM -> 物理云主机； UDHost -> 私有专区主机；UDocker -> 容器；UHybrid->混合云主机；CUBE->Cube；UNI -> 虚拟网卡
     *                             "ResourceName" => (string) 后端资源的实例名称
     *                             "SubResourceId" => (string) 如果资源绑定了弹性网卡，则展示弹性网卡的资源ID
     *                             "SubResourceName" => (string) 如果资源绑定了弹性网卡，则展示弹性网卡的资源名称
     *                             "SubResourceType" => (string) "UNI"或者为空
     *                             "ObjectId" => (string) 后端资源的对象ID
     *                             "Port" => (integer) 所添加的后端资源服务端口
     *                             "PrivateIP" => (string) 后端资源的内网IP
     *                         ]
     *                     ]
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function describeVServer(DescribeVServerRequest $request = null): DescribeVServerResponse
    {
        $resp = $this->invoke($request);
        return new DescribeVServerResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ReleaseBackend - 从VServer释放后端资源实例
     *
     * See also: https://docs.ucloud.cn/api/ULB-api/release_backend
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "ULBId" => (string) 负载均衡实例的ID
     *     "BackendId" => (string) 后端资源实例的ID(ULB后端ID，非资源自身ID)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function releaseBackend(ReleaseBackendRequest $request = null): ReleaseBackendResponse
    {
        $resp = $this->invoke($request);
        return new ReleaseBackendResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UnbindSSL - 从VServer解绑SSL证书
     *
     * See also: https://docs.ucloud.cn/api/ULB-api/unbind_ssl
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "ULBId" => (string) 所绑定ULB实例ID
     *     "VServerId" => (string) 所绑定VServer实例ID
     *     "SSLId" => (string) SSL证书的Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function unbindSSL(UnbindSSLRequest $request = null): UnbindSSLResponse
    {
        $resp = $this->invoke($request);
        return new UnbindSSLResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateBackendAttribute - 更新ULB后端资源实例(服务节点)属性
     *
     * See also: https://docs.ucloud.cn/api/ULB-api/update_backend_attribute
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ULBId" => (string) 负载均衡资源ID
     *     "BackendId" => (string) 后端资源实例的ID(ULB后端ID，非资源自身ID)
     *     "Port" => (integer) 后端资源服务端口，取值范围[1-65535]
     *     "Weight" => (integer) 所添加的后端RS权重（在加权轮询算法下有效），取值范围[0-100]，默认为1
     *     "Enabled" => (integer) 后端实例状态开关
     *     "IsBackup" => (integer) 是否为backup0：主rs1：备rs默认为0
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function updateBackendAttribute(UpdateBackendAttributeRequest $request = null): UpdateBackendAttributeResponse
    {
        $resp = $this->invoke($request);
        return new UpdateBackendAttributeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdatePolicy - 更新内容转发规则，包括转发规则后的服务节点
     *
     * See also: https://docs.ucloud.cn/api/ULB-api/update_policy
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "ULBId" => (string) 需要添加内容转发策略的负载均衡实例ID
     *     "VServerId" => (string) 需要添加内容转发策略的VServer实例ID，只支持请求代理模式下，HTTP或HTTPS协议的VServer
     *     "Match" => (string) 内容转发匹配字段
     *     "PolicyId" => (string) 转发规则的ID，当Type为Default时，可以不传或为空
     *     "BackendId" => (array<string>) 内容转发策略应用的后端资源实例的ID，来源于 AllocateBackend 返回的 BackendId，不传表示更新转发节点为空
     *     "Type" => (string) 内容转发匹配字段的类型，枚举值：Domain -> 域名转发规则；Path -> 路径转发规则；Default -> 默认转发规则，不传默认值Domain
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function updatePolicy(UpdatePolicyRequest $request = null): UpdatePolicyResponse
    {
        $resp = $this->invoke($request);
        return new UpdatePolicyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateULBAttribute - 更新ULB名字业务组备注等属性字段
     *
     * See also: https://docs.ucloud.cn/api/ULB-api/update_ulb_attribute
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "ULBId" => (string) ULB资源ID
     *     "Name" => (string) 名字
     *     "Tag" => (string) 业务
     *     "Remark" => (string) 备注
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function updateULBAttribute(UpdateULBAttributeRequest $request = null): UpdateULBAttributeResponse
    {
        $resp = $this->invoke($request);
        return new UpdateULBAttributeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateVServerAttribute - 更新VServer实例属性
     *
     * See also: https://docs.ucloud.cn/api/ULB-api/update_vserver_attribute
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ULBId" => (string) 负载均衡实例ID
     *     "VServerId" => (string) VServer实例ID
     *     "VServerName" => (string) VServer实例名称，若无此字段则不做修改
     *     "Method" => (string) VServer负载均衡模式，枚举值：Roundrobin -> 轮询;Source -> 源地址；ConsistentHash -> 一致性哈希；SourcePort -> 源地址（计算端口）；ConsistentHashPort -> 一致性哈希（计算端口）; WeightRoundrobin -> 加权轮询; Leastconn -> 最小连接数；Backup -> 主备模式。ConsistentHash，SourcePort，ConsistentHashPort 只在报文转发中使用；Leastconn只在请求代理中使用；Roundrobin、Source和WeightRoundrobin,Backup在请求代理和报文转发中使用。默认为："Roundrobin"
     *     "PersistenceType" => (string) VServer会话保持模式，若无此字段则不做修改。枚举值：None：关闭；ServerInsert：自动生成KEY；UserDefined：用户自定义KEY。
     *     "PersistenceInfo" => (string) 根据PersistenceType确定: None或ServerInsert, 此字段无意义; UserDefined, 则此字段传入用户自定义会话保持String. 若无此字段则不做修改
     *     "ClientTimeout" => (integer) 请求代理的VServer下表示空闲连接的回收时间，单位：秒，取值范围：时(0，86400]，默认值为60；报文转发的VServer下表示回话保持的时间，单位：秒，取值范围：[60，900]，0 表示禁用连接保持
     *     "MonitorType" => (string) 健康检查类型，枚举值：Port -> 端口检查；Path -> 路径检查；Ping -> Ping探测，Customize -> UDP检查请求代理型默认值为Port，其中TCP协议仅支持Port，其他协议支持Port和Path;报文转发型TCP协议仅支持Port，UDP协议支持Ping、Port和Customize，默认值为Ping
     *     "Domain" => (string) MonitorType 为 Path 时指定健康检查发送请求时HTTP HEADER 里的域名
     *     "Path" => (string) MonitorType 为 Path 时指定健康检查发送请求时的路径，默认为 /
     *     "RequestMsg" => (string) 根据MonitorType确认； 当MonitorType为Customize时，此字段有意义，代表UDP检查发出的请求报文
     *     "ResponseMsg" => (string) 根据MonitorType确认； 当MonitorType为Customize时，此字段有意义，代表UDP检查请求应收到的响应报文
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function updateVServerAttribute(UpdateVServerAttributeRequest $request = null): UpdateVServerAttributeResponse
    {
        $resp = $this->invoke($request);
        return new UpdateVServerAttributeResponse($resp->toArray(), $resp->getRequestId());
    }
}
