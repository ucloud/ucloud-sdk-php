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
namespace UCloud\ULB;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\ULB\Apis\AddSSLBindingRequest;
use UCloud\ULB\Apis\AddSSLBindingResponse;
use UCloud\ULB\Apis\AddTargetsRequest;
use UCloud\ULB\Apis\AddTargetsResponse;
use UCloud\ULB\Apis\AllocateBackendRequest;
use UCloud\ULB\Apis\AllocateBackendResponse;
use UCloud\ULB\Apis\BindSSLRequest;
use UCloud\ULB\Apis\BindSSLResponse;
use UCloud\ULB\Apis\CreateListenerRequest;
use UCloud\ULB\Apis\CreateListenerResponse;
use UCloud\ULB\Apis\CreateLoadBalancerRequest;
use UCloud\ULB\Apis\CreateLoadBalancerResponse;
use UCloud\ULB\Apis\CreatePolicyRequest;
use UCloud\ULB\Apis\CreatePolicyResponse;
use UCloud\ULB\Apis\CreateRuleRequest;
use UCloud\ULB\Apis\CreateRuleResponse;
use UCloud\ULB\Apis\CreateSSLRequest;
use UCloud\ULB\Apis\CreateSSLResponse;
use UCloud\ULB\Apis\CreateSecurityPolicyRequest;
use UCloud\ULB\Apis\CreateSecurityPolicyResponse;
use UCloud\ULB\Apis\CreateULBRequest;
use UCloud\ULB\Apis\CreateULBResponse;
use UCloud\ULB\Apis\CreateVServerRequest;
use UCloud\ULB\Apis\CreateVServerResponse;
use UCloud\ULB\Apis\DeleteListenerRequest;
use UCloud\ULB\Apis\DeleteListenerResponse;
use UCloud\ULB\Apis\DeleteLoadBalancerRequest;
use UCloud\ULB\Apis\DeleteLoadBalancerResponse;
use UCloud\ULB\Apis\DeletePolicyRequest;
use UCloud\ULB\Apis\DeletePolicyResponse;
use UCloud\ULB\Apis\DeleteRuleRequest;
use UCloud\ULB\Apis\DeleteRuleResponse;
use UCloud\ULB\Apis\DeleteSSLRequest;
use UCloud\ULB\Apis\DeleteSSLResponse;
use UCloud\ULB\Apis\DeleteSSLBindingRequest;
use UCloud\ULB\Apis\DeleteSSLBindingResponse;
use UCloud\ULB\Apis\DeleteSecurityPolicyRequest;
use UCloud\ULB\Apis\DeleteSecurityPolicyResponse;
use UCloud\ULB\Apis\DeleteULBRequest;
use UCloud\ULB\Apis\DeleteULBResponse;
use UCloud\ULB\Apis\DeleteVServerRequest;
use UCloud\ULB\Apis\DeleteVServerResponse;
use UCloud\ULB\Apis\DescribeListenersRequest;
use UCloud\ULB\Apis\DescribeListenersResponse;
use UCloud\ULB\Apis\DescribeLoadBalancersRequest;
use UCloud\ULB\Apis\DescribeLoadBalancersResponse;
use UCloud\ULB\Apis\DescribeRulesRequest;
use UCloud\ULB\Apis\DescribeRulesResponse;
use UCloud\ULB\Apis\DescribeSSLRequest;
use UCloud\ULB\Apis\DescribeSSLResponse;
use UCloud\ULB\Apis\DescribeSSLV2Request;
use UCloud\ULB\Apis\DescribeSSLV2Response;
use UCloud\ULB\Apis\DescribeSecurityPoliciesRequest;
use UCloud\ULB\Apis\DescribeSecurityPoliciesResponse;
use UCloud\ULB\Apis\DescribeSecurityPoliciesV2Request;
use UCloud\ULB\Apis\DescribeSecurityPoliciesV2Response;
use UCloud\ULB\Apis\DescribeSupportCiphersRequest;
use UCloud\ULB\Apis\DescribeSupportCiphersResponse;
use UCloud\ULB\Apis\DescribeULBRequest;
use UCloud\ULB\Apis\DescribeULBResponse;
use UCloud\ULB\Apis\DescribeULBSimpleRequest;
use UCloud\ULB\Apis\DescribeULBSimpleResponse;
use UCloud\ULB\Apis\DescribeVServerRequest;
use UCloud\ULB\Apis\DescribeVServerResponse;
use UCloud\ULB\Apis\ReleaseBackendRequest;
use UCloud\ULB\Apis\ReleaseBackendResponse;
use UCloud\ULB\Apis\RemoveTargetsRequest;
use UCloud\ULB\Apis\RemoveTargetsResponse;
use UCloud\ULB\Apis\UnBindSecurityPolicyRequest;
use UCloud\ULB\Apis\UnBindSecurityPolicyResponse;
use UCloud\ULB\Apis\UnbindSSLRequest;
use UCloud\ULB\Apis\UnbindSSLResponse;
use UCloud\ULB\Apis\UpdateBackendAttributeRequest;
use UCloud\ULB\Apis\UpdateBackendAttributeResponse;
use UCloud\ULB\Apis\UpdateBackendBatchRequest;
use UCloud\ULB\Apis\UpdateBackendBatchResponse;
use UCloud\ULB\Apis\UpdateListenerAttributeRequest;
use UCloud\ULB\Apis\UpdateListenerAttributeResponse;
use UCloud\ULB\Apis\UpdateLoadBalancerAttributeRequest;
use UCloud\ULB\Apis\UpdateLoadBalancerAttributeResponse;
use UCloud\ULB\Apis\UpdatePolicyRequest;
use UCloud\ULB\Apis\UpdatePolicyResponse;
use UCloud\ULB\Apis\UpdateRuleAttributeRequest;
use UCloud\ULB\Apis\UpdateRuleAttributeResponse;
use UCloud\ULB\Apis\UpdateSSLAttributeRequest;
use UCloud\ULB\Apis\UpdateSSLAttributeResponse;
use UCloud\ULB\Apis\UpdateSSLBindingRequest;
use UCloud\ULB\Apis\UpdateSSLBindingResponse;
use UCloud\ULB\Apis\UpdateSecurityPolicyRequest;
use UCloud\ULB\Apis\UpdateSecurityPolicyResponse;
use UCloud\ULB\Apis\UpdateTargetsAttributeRequest;
use UCloud\ULB\Apis\UpdateTargetsAttributeResponse;
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
     * AddSSLBinding - ALB的监听器绑定SSL证书
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/add_ssl_binding
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "LoadBalancerId" => (string) 负载均衡实例的ID
     *     "ListenerId" => (string) 监听器的ID
     *     "SSLIds" => (array<string>) SSLId的数组
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return AddSSLBindingResponse
     * @throws UCloudException
     */
    public function addSSLBinding(AddSSLBindingRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AddSSLBindingResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * AddTargets - 给应用型负载均衡监听器添加后端服务节点
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/add_targets
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "LoadBalancerId" => (string) 负载均衡实例的ID
     *     "ListenerId" => (string) 监听器的ID
     *     "Targets" => (array<object>) [
     *         [
     *             "ResourceType" => (string) 服务节点的类型。限定枚举值："UHost" / "UNI"/"UPM"/"IP"，默认值："UHost"；非IP类型，如果该资源有多个IP，将只能添加主IP；非IP类型，展示时，会显示相关资源信息，IP类型只展示IP信息。在相关资源被删除时，非IP类型会把相关资源从lb中剔除，IP类型不保证这个逻辑
     *             "ResourceId" => (string) 服务节点的资源ID。在非IP类型时，必传
     *             "VPCId" => (string) 服务节点的VPC资源ID。在IP类型时，必传
     *             "SubnetId" => (string) 服务节点的子网资源ID。在IP类型时，必传
     *             "ResourceIP" => (string) 服务节点的IP。在IP类型时，必传
     *             "Port" => (integer) 服务节点的端口。限定取值：[1-65535]，默认值80
     *             "Weight" => (integer) 服务节点的权重。限定取值：[1-100]，默认值1；仅在加权轮询算法时有效
     *             "Enabled" => (boolean) 服务节点是否启用。默认值true
     *             "IsBackup" => (boolean) 服务节点是否为备节点。默认值false
     *         ]
     *     ]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Targets" => (array<object>) 服务节点信息[
     *         [
     *             "ResourceType" => (string) 服务节点的类型。限定枚举值：UHost -> 云主机，UNI -> 虚拟网卡，UPM -> 物理云主机，IP ->  IP类型； 默认值："UHost"； 非IP类型，如果该资源有多个IP，将只能添加主IP； 非IP类型，展示时，会显示相关资源信息，IP类型只展示IP信息。 在相关资源被删除时，非IP类型会把相关资源从lb中剔除，IP类型不保证这个逻辑
     *             "ResourceId" => (string) 服务节点的资源ID。在非IP类型时，必传
     *             "VPCId" => (string) 服务节点的VPC资源ID。在IP类型时，必传
     *             "SubnetId" => (string) 服务节点的子网资源ID。在IP类型时，必传
     *             "ResourceIP" => (string) 服务节点的IP。在IP类型时，必传
     *             "Port" => (integer) 服务节点的端口。限定取值：[1-65535]； 默认值：80
     *             "Weight" => (integer) 服务节点的权重。限定取值：[1-100]； 仅在加权轮询算法时有效； 默认值：1
     *             "Enabled" => (boolean) 服务节点是否启用。 默认值：true
     *             "IsBackup" => (boolean) 服务节点是否为备节点。 默认值：false
     *             "Id" => (string) 服务节点的标识ID。
     *             "State" => (string) 服务节点的健康检查状态。限定枚举值：Healthy -> 健康，Unhealthy -> 不健康
     *         ]
     *     ]
     * ]
     *
     * @return AddTargetsResponse
     * @throws UCloudException
     */
    public function addTargets(AddTargetsRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AddTargetsResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * AllocateBackend - 添加CLB后端资源实例
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/allocate_backend
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ULBId" => (string) 传统型负载均衡实例的ID
     *     "VServerId" => (string) VServer实例的ID
     *     "ResourceType" => (string) 所添加的后端资源的类型，枚举值：UHost -> 云主机；UNI -> 虚拟网卡；UPM -> 物理云主机；UHybrid->混合云主机；CUBE->Cube， IP->IP类型；默认值为UHost。报文转发模式不支持UHybrid、CUBE、IP
     *     "ResourceId" => (string) 所添加的后端资源的资源ID；与ResourceIP二选一必填
     *     "ResourceIP" => (string) 所添加的后端服务器的资源实例IP，当ResourceType 为 UHybrid 或 IP时有效，且必填；与ResourceId二选一必填
     *     "VPCId" => (string) 所添加的后端服务器所在的vpc，当ResourceType 为 UHybrid 或 IP 时有效，且必填
     *     "SubnetId" => (string) 所添加的后端服务器所在的子网，当ResourceType 为 UHybrid 或 IP 时有效，且必填
     *     "Port" => (integer) 所添加的后端资源服务端口，取值范围[1-65535]，默认80
     *     "Weight" => (integer) 所添加的后端RS权重（在加权轮询算法下有效），取值范围[1-100]，默认为1
     *     "Enabled" => (integer) 后端实例状态开关，枚举值： 1：启用； 0：禁用 默认为启用
     *     "IsBackup" => (integer) rs是否为backup，默认为00：普通rs1：backup的rs
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "BackendId" => (string) 所添加的后端资源在CLB中的对象ID，（为CLB系统中使用，与资源自身ID无关），可用于 UpdateBackendAttribute/UpdateBackendAttributeBatch/ReleaseBackend
     * ]
     *
     * @return AllocateBackendResponse
     * @throws UCloudException
     */
    public function allocateBackend(AllocateBackendRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AllocateBackendResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * BindSSL - 将SSL证书绑定到传统型负载均衡VServer
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/bind_ssl
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ULBId" => (string) 所绑定CLB实例ID
     *     "VServerId" => (string) 所绑定VServer实例ID
     *     "SSLId" => (string) SSL证书的Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return BindSSLResponse
     * @throws UCloudException
     */
    public function bindSSL(BindSSLRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new BindSSLResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateListener - 创建一个应用型负载均衡的监听器
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/create_listener
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "LoadBalancerId" => (string) 负载均衡实例的ID
     *     "Name" => (string) 监听器的名称。限定字符长度：[1-255]；限定特殊字符，仅支持：“-”，“_”，“.”；默认值：listener
     *     "Remark" => (string) 监听器的备注信息。限定字符长度：[0-255]
     *     "ListenerPort" => (integer) 监听器的监听端口。应用型限定取值：[1-65535]，默认值80
     *     "ListenerProtocol" => (string) 监听协议。应用型限定取值：“HTTP”/"HTTPS"，默认值“HTTP”
     *     "Certificates" => (array<string>) （应用型专用）服务器默认证书ID。仅HTTPS监听支持，且必填；暂时只支持最大长度为1
     *     "SecurityPolicyId" => (string) （应用型专用）安全策略组ID。仅HTTPS监听支持绑定；默认值“Default”，表示绑定原生策略
     *     "IdleTimeout" => (integer) 连接空闲超时时间。单位：秒。应用型限定取值：[1-86400]；默认值60
     *     "Scheduler" => (string) 负载均衡算法。应用型限定取值："Roundrobin"/"Source"/"WeightRoundrobin"/" Leastconn"/"Backup"，默认值"Roundrobin"
     *     "StickinessConfig" => (object) [
     *         "Enabled" => (boolean) 是否开启会话保持功能。应用型负载均衡实例基于Cookie实现；默认值为：false
     *         "Type" => (string) （应用型专用）Cookie处理方式。限定枚举值："ServerInsert" / "UserDefined"；默认值为：“ServerInsert”
     *         "CookieName" => (string) （应用型专用）自定义Cookie。当StickinessType取值"UserDefined"时有效；限定字符长度：[0-255]
     *     ]
     *     "HealthCheckConfig" => (object) [
     *         "Enabled" => (boolean) 是否开启健康检查功能。暂时不支持关闭。默认值为：true
     *         "Type" => (string) 健康检查方式。应用型限定取值：“Port”/"HTTP"，默认值：“Port”
     *         "Domain" => (string) （应用型专用）HTTP检查域名
     *         "Path" => (string) （应用型专用）HTTP检查路径
     *     ]
     *     "CompressionEnabled" => (boolean) （应用型专用）是否开启数据压缩功能。目前只支持使用gzip对特定文件类型进行压缩。默认值为：false
     *     "HTTP2Enabled" => (boolean) （应用型专用）是否开启HTTP/2特性。仅HTTPS监听支持开启；默认值为：false
     *     "RedirectEnabled" => (boolean) （应用型专用）是否开启HTTP重定向到HTTPS。仅HTTP监听支持开启；默认值为：false
     *     "RedirectPort" => (integer) （应用型专用）重定向端口。限定取值：[1-65535]，默认值443
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ListenerId" => (string) 监听器的ID
     * ]
     *
     * @return CreateListenerResponse
     * @throws UCloudException
     */
    public function createListener(CreateListenerRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateListenerResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateLoadBalancer - 创建一个应用型负载均衡实例
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/create_load_balancer
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPCId" => (string) 负载均衡实例所属的VPC资源ID
     *     "SubnetId" => (string) 负载均衡实例所属的子网资源ID。负载均衡实例的内网VIP和SNAT场景的源IP限定在该子网内；指定子网不影响添加后端服务节点时的范围，依旧是整个VPC下支持的资源
     *     "Type" => (string) 负载均衡实例的类型。限定枚举值："Application" / "Network"，默认值："Application"
     *     "Name" => (string) 负载均衡实例的名称。默认值：lb；特殊字符仅支持：“-”，“_”，“.”；限定字符长度：[1-255]
     *     "Tag" => (string) 负载均衡实例所属的业务组ID。默认值为“Default”； 传空则为Default业务组
     *     "Remark" => (string) 负载均衡实例的备注信息。限定字符长度：[0-255]
     *     "IPVersion" => (string) 负载均衡实例的IP协议。限定枚举值："IPv4" / "IPv6"/"DualStack"，默认值为：“IPv4”
     *     "ChargeType" => (string) 付费模式。限定枚举值："Year" / "Month"/"Day"/"Dynamic"，默认值为：“Month”
     *     "Quantity" => (integer) 购买的时长, 默认: 1; 0-> 购买至月末(0只在月付费有效，其余付费模式传0，实际收费按一个周期计费)
     *     "CouponId" => (string) 代金券code
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "LoadBalancerId" => (string) 负载均衡实例的ID
     * ]
     *
     * @return CreateLoadBalancerResponse
     * @throws UCloudException
     */
    public function createLoadBalancer(CreateLoadBalancerRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateLoadBalancerResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreatePolicy - 传统型负载均衡创建VServer内容转发策略
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/create_policy
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ULBId" => (string) 需要添加内容转发策略的传统型负载均衡实例ID
     *     "VServerId" => (string) 需要添加内容转发策略的传统型负载均衡VServer实例ID
     *     "BackendId" => (array<string>) 内容转发策略应用的传统型负载均衡后端资源实例的ID，来源于 AllocateBackend 返回的 BackendId
     *     "Match" => (string) 内容转发匹配字段
     *     "DomainMatchMode" => (string) 内容转发规则中域名的匹配方式，默认与原本一致。枚举值：Regular，正则；Wildcard，泛域名
     *     "Type" => (string) 内容转发匹配字段的类型
     *     "PolicyPriority" => (integer) 策略优先级，1-9999；只针对路径规则生效
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "PolicyId" => (string) 内容转发策略ID
     * ]
     *
     * @return CreatePolicyResponse
     * @throws UCloudException
     */
    public function createPolicy(CreatePolicyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreatePolicyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateRule - 给应用型负载均衡监听器创建一条转发规则
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/create_rule
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "LoadBalancerId" => (string) 负载均衡实例的ID
     *     "ListenerId" => (string) 监听器的ID
     *     "RuleConditions" => (array<object>) [
     *         [
     *             "Type" => (string) 匹配条件类型。限定枚举值："Host"/"Path"
     *             "HostConfig" => (object) [
     *                 "MatchMode" => (string) 匹配方式。限定枚举值："Regular"/"Wildcard"，默认值："Regular"
     *                 "Values" => (array<string>) 取值。暂时只支持数组长度为1；取值需符合相关匹配方式的条件；域名匹配时必填
     *             ]
     *             "PathConfig" => (object) [
     *                 "Values" => (array<string>) 取值。暂时只支持数组长度为1；取值需符合相关条件；路径匹配时必填
     *             ]
     *         ]
     *     ]
     *     "RuleActions" => (array<object>) [
     *         [
     *             "Type" => (string) 动作类型。限定枚举值："Forward"、"InsertHeader"、"Cors"、"FixedResponse"、"RemoveHeader"。只会处理 Type 对应的结构体。
     *             "ForwardConfig" => (object) [
     *                 "Targets" => (array<object>) [
     *                     [
     *                         "Id" => (string) 转发的后端服务节点的标识ID。限定在监听器的服务节点池里；数组长度可以是0；转发服务节点配置的数组长度不为0时，Id必填
     *                         "Weight" => (integer) 转发的后端服务节点的权重。仅监听器负载均衡算法是加权轮询是有效
     *                     ]
     *                 ]
     *             ]
     *             "Order" => (integer) 转发规则动作执行的顺序，取值为1~1000，按值从小到大执行动作。值不能为空，不能重复。Forward、FixedResponse 类型的动作不判断 Order，最后一个执行
     *             "InsertHeaderConfig" => (object) [
     *                 "Key" => (string) 插入的 header 字段名称，长度为 1~40 个字符，支持大小写字母 a~z、数字、下划线（_）和短划线（-）。头字段名称不能重复用于InsertHeader中。header 字段不能使用以下(此处判断大小写不敏感)x-real-ip、x-forwarded-for、x-forwarded-proto、x-forwarded-srcport、ucloud-alb-trace、connection、upgrade、content-length、transfer-encoding、keep-alive、te、host、cookie、remoteip、authority
     *                 "ValueType" => (string) 头字段内容类型。取值：UserDefined：用户指定。ReferenceHeader：引用用户请求头中的某一个字段。SystemDefined：系统定义。
     *                 "Value" => (string) 插入的 header 字段内容。ValueType 取值为 SystemDefined 时取值如下：ClientSrcPort：客户端端口。ClientSrcIp：客户端 IP 地址。Protocol：客户端请求的协议（HTTP 或 HTTPS)。RuleID：客户端请求命中的转发规则ID。ALBID：ALB ID。ALBPort：ALB 端口。ValueType 取值为 UserDefined 时：可以自定义头字段内容，限制长度为 1~128 个字符，只支持 ASCII 码值ch >= 32 && ch < 127范围内、不包括 $ 的可打印字符。ValueType 取值为 ReferenceHeader 时：可以引用请求头字段中的某一个字段，限制长度限制为 1~128 个字符，支持小写字母 a~z、数字、短划线（-）和下划线（_）。
     *             ]
     *             "RemoveHeaderConfig" => (object) [
     *                 "Key" => (string) 删除的 header 字段名称，目前只能删除以下几个默认配置的字段X-Real-IP、X-Forwarded-For、X-Forwarded-Proto、X-Forwarded-SrcPort
     *             ]
     *             "CorsConfig" => (object) [
     *                 "AllowOrigin" => (array<string>) 允许的访问来源列表。支持只配置一个元素*，或配置一个或多个值。单个值必须以http://或者https://开头，后边加一个正确的域名或一级泛域名。（例：http://*.test.abc.example.com）单个值可以不加端口，也可以指定端口，端口范围：1~65535。最多支持5个值
     *                 "AllowHeaders" => (array<string>) 允许跨域的 Header 列表。支持配置为*或配置一个或多个 value 值。单个 value 值只允许包含大小写字母、数字，不能以下划线（_）和短划线（-）开头或结尾，最大长度限制为 32 个字符。最多支持20个值
     *                 "ExposeHeaders" => (array<string>) 允许暴露的 Header 列表。支持配置为*或配置一个或多个 value 值。单个 value 值只允许包含大小写字母、数字，不能以下划线（_）和短划线（-）开头或结尾，最大长度限制为 32 个字符。最多支持20个值
     *                 "AllowMethods" => (array<string>) 选择跨域访问时允许的 HTTP 方法。取值：GET。POST。PUT。DELETE。HEAD。OPTIONS。PATCH。
     *                 "AllowCredentials" => (string) 是否允许携带凭证信息。取值：on：是。off：否。
     *                 "MaxAge" => (integer) 预检请求在浏览器的最大缓存时间，单位：秒。取值范围：-1~172800。
     *             ]
     *             "FixedResponseConfig" => (object) [
     *                 "HttpCode" => (integer) 返回的 HTTP 响应码，仅支持 2xx、4xx、5xx 数字，x 为任意数字。
     *                 "Content" => (string) 返回的固定内容。最大支持存储 1 KB，只支持 ASCII 码值ch >= 32 && ch < 127范围内、不包括 $ 的可打印字符。
     *             ]
     *         ]
     *     ]
     *     "Pass" => (boolean) 当转发的服务节点为空时，规则是否忽略。默认值true
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "RuleId" => (string) 转发规则的ID
     * ]
     *
     * @return CreateRuleResponse
     * @throws UCloudException
     */
    public function createRule(CreateRuleRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateRuleResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateSSL - 创建SSL证书，可以把整个 Pem 证书内容传过来，或者把证书、私钥、CA证书分别传过来
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/create_ssl
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SSLName" => (string) SSL证书的名字，默认值不为空
     *     "SSLType" => (string) 所添加的SSL证书类型，目前只支持Pem格式
     *     "SSLContent" => (string) SSL证书的完整内容，包括用户证书、加密证书的私钥、CA证书
     *     "UserCert" => (string) 用户的证书
     *     "PrivateKey" => (string) 加密证书的私钥
     *     "CaCert" => (string) CA证书
     *     "USSLId" => (string) USSL证书的ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "SSLId" => (string) SSL证书的Id
     * ]
     *
     * @return CreateSSLResponse
     * @throws UCloudException
     */
    public function createSSL(CreateSSLRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateSSLResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateSecurityPolicy - 创建安全策略
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/create_security_policy
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "TLSVersion" => (string) TLS版本
     *     "SSLCiphers" => (array<string>) 加密套件
     *     "SecurityPolicyName" => (string) 安全策略名称
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "SecurityPolicyId" => (string) 安全策略ID
     * ]
     *
     * @return CreateSecurityPolicyResponse
     * @throws UCloudException
     */
    public function createSecurityPolicy(CreateSecurityPolicyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateSecurityPolicyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateULB - 创建传统型负载均衡负载均衡实例，可以选择内网或者外网
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/create_ulb
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ULBName" => (string) 负载均衡的名字，默认值为“ULB”
     *     "Tag" => (string) 业务组
     *     "Remark" => (string) 备注
     *     "OuterMode" => (string) 创建的CLB是否为外网模式，默认即为外网模式
     *     "InnerMode" => (string) 创建的CLB是否为内网模式
     *     "ChargeType" => (string) 付费方式, 枚举值为: Year, 按年付费; Month, 按月付费; Dynamic, 按时付费
     *     "VPCId" => (string) CLB所在的VPC的ID。 如果不传则使用默认的VPC，若不传且无默认VPC则接口报错
     *     "SubnetId" => (string) CLB 所属的子网ID，如果不传则随机选择一个。
     *     "BusinessId" => (string) CLB 所属的业务组ID，如果不传则使用默认的业务组
     *     "FirewallId" => (string) 防火墙ID，如果不传，则默认不绑定防火墙
     *     "ListenType" => (string) CLB 监听器类型，外网CLB默认RequestProxy，内网ULB默认PacketsTransmit。枚举值：RequestProxy，请求代理； PacketsTransmit ，报文转发。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ULBId" => (string) 传统型负载均衡实例的Id
     *     "IPv6AddressId" => (string) IPv6地址Id
     * ]
     *
     * @return CreateULBResponse
     * @throws UCloudException
     */
    public function createULB(CreateULBRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateULBResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateVServer - 创建CLB的VServer实例，定义监听的协议和端口以及负载均衡算法
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/create_vserver
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ULBId" => (string) 传统型负载均衡实例ID
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
     *     "SecurityPolicyId" => (string) 安全策略组ID，默认值'Default'
     *     "EnableCompression" => (integer) 0:关闭 1:开启，用于数据压缩功能
     *     "ForwardPort" => (integer) 重定向端口，取值范围[0-65535]；默认值为0，代表关闭；仅HTTP协议支持开启重定向功能
     *     "EnableHTTP2" => (integer) 0:关闭 1:开启，用于开启http2功能；默认值为0
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "VServerId" => (string) VServer实例的Id
     * ]
     *
     * @return CreateVServerResponse
     * @throws UCloudException
     */
    public function createVServer(CreateVServerRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateVServerResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteListener - 删除一个应用型负载均衡监听器
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/delete_listener
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "LoadBalancerId" => (string) 应用型负载均衡实例的ID
     *     "ListenerId" => (string) 应用型负载均衡监听器的ID
     *     "RelatedRedirectDisabled" => (boolean) 是否关闭相关监听器的重定向功能。默认为false，即有其他监听器重定向到本监听器，则删除失败。为true时，会先关闭相关监听器的重定向功能，再删除本监听器。默认值为：false
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteListenerResponse
     * @throws UCloudException
     */
    public function deleteListener(DeleteListenerRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteListenerResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteLoadBalancer - 删除一个应用型负载均衡实例
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/delete_load_balancer
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "LoadBalancerId" => (string) 应用型负载均衡实例的ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteLoadBalancerResponse
     * @throws UCloudException
     */
    public function deleteLoadBalancer(DeleteLoadBalancerRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteLoadBalancerResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeletePolicy - 删除传统型负载均衡的内容转发策略
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/delete_policy
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "PolicyId" => (string) CLB的内容转发策略ID
     *     "VServerId" => (string) CLB的VServer 资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeletePolicyResponse
     * @throws UCloudException
     */
    public function deletePolicy(DeletePolicyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeletePolicyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteRule - 删除应用型负载均衡监听器的一条转发规则
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/delete_rule
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "LoadBalancerId" => (string) 应用型负载均衡实例的ID
     *     "ListenerId" => (string) 应用型负载均衡监听器的ID
     *     "RuleId" => (string) 应用型负载均衡的转发规则的ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteRuleResponse
     * @throws UCloudException
     */
    public function deleteRule(DeleteRuleRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteRuleResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteSSL - 删除SSL证书
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/delete_ssl
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
     * @return DeleteSSLResponse
     * @throws UCloudException
     */
    public function deleteSSL(DeleteSSLRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteSSLResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteSSLBinding - 删除监听器绑定的扩展证书
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/delete_ssl_binding
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "LoadBalancerId" => (string) 负载均衡实例的ID
     *     "ListenerId" => (string) 监听器的ID
     *     "SSLIds" => (array<string>) SSLId的数组
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteSSLBindingResponse
     * @throws UCloudException
     */
    public function deleteSSLBinding(DeleteSSLBindingRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteSSLBindingResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteSecurityPolicy - 删除安全策略
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/delete_security_policy
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SecurityPolicyId" => (string) 安全策略ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteSecurityPolicyResponse
     * @throws UCloudException
     */
    public function deleteSecurityPolicy(DeleteSecurityPolicyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteSecurityPolicyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteULB - 删除传统型负载均衡实例
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/delete_ulb
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ULBId" => (string) 传统型负载均衡实例的ID
     *     "ReleaseEip" => (boolean) 删除clb时是否释放绑定的EIP，false标识只解绑EIP，true表示会释放绑定的EIP，默认是false。Anycast IP 此参数无效
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteULBResponse
     * @throws UCloudException
     */
    public function deleteULB(DeleteULBRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteULBResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteVServer - 删除CLB的VServer实例
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/delete_vserver
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ULBId" => (string) 传统型负载均衡实例的ID
     *     "VServerId" => (string) CLB下的VServer实例的ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteVServerResponse
     * @throws UCloudException
     */
    public function deleteVServer(DeleteVServerRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteVServerResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeListeners - 描述一个指定的监听器或者一个应用型负载均衡实例下的所有监听器
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/describe_listeners
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ListenerId" => (string) 应用型负载均衡监听器的ID。若指定ListenerId，则忽略LoadBalancerId。ListenId和LoadBalancerId必选其一
     *     "LoadBalancerId" => (string) 应用型负载均衡实例的ID。未指定ListenId，则描述指定的LoadBalancerId下的所有监听器。
     *     "Offset" => (integer) 数据偏移量，默认为0
     *     "Limit" => (integer) 数据分页值，默认为100
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 满足条件的负载均衡监听器总数
     *     "Listeners" => (array<object>) 负载均衡监听器信息[
     *         [
     *             "ListenerId" => (string) 监听器的ID
     *             "Name" => (string) 监听器的名称
     *             "Remark" => (string) 监听器的备注信息
     *             "ListenerPort" => (integer) 监听器的监听端口
     *             "ListenerProtocol" => (string) 监听协议。应用型限定取值： HTTP、HTTPS
     *             "Certificates" => (array<object>) （应用型专用）服务器默认证书ID。仅HTTPS监听支持。具体接口详见 Certificate[
     *                 [
     *                     "SSLId" => (string) 证书ID
     *                     "IsDefault" => (boolean) 是否为默认证书
     *                 ]
     *             ]
     *             "SecurityPolicyId" => (string) （应用型专用）安全策略组ID。仅HTTPS监听支持绑定；Default -> 原生策略
     *             "IdleTimeout" => (integer) 连接空闲超时时间。单位：秒
     *             "Scheduler" => (string) 负载均衡算法。应用型限定取值：Roundrobin -> 轮询;Source -> 源地址； WeightRoundrobin -> 加权轮询; Leastconn -> 最小连接数；Backup ->主备模式
     *             "StickinessConfig" => (object) 会话保持相关配置。具体结构详见 StickinessConfigSet[
     *                 "Enabled" => (boolean) 是否开启会话保持功能。应用型负载均衡实例基于Cookie实现
     *                 "Type" => (string) （应用型专用）Cookie处理方式。限定枚举值： ServerInsert -> 自动生成KEY；UserDefined -> 用户自定义KEY
     *                 "CookieName" => (string) （应用型专用）自定义Cookie。当StickinessType取值"UserDefined"时有效
     *             ]
     *             "HealthCheckConfig" => (object) 健康检查相关配置。具体结构详见 HealthCheckConfigSet[
     *                 "Enabled" => (boolean) 是否开启健康检查功能。暂时不支持关闭。 默认值为：true
     *                 "Type" => (string) 健康检查方式。应用型限定取值： Port -> 端口检查；HTTP -> HTTP检查； 默认值：Port
     *                 "Domain" => (string) （应用型专用）HTTP检查域名。 当Type为HTTP时，此字段有意义，代表HTTP检查域名
     *                 "Path" => (string) （应用型专用）HTTP检查路径。当Type为HTTP时，此字段有意义，代表HTTP检查路径
     *             ]
     *             "CompressionEnabled" => (boolean) （应用型专用）是否开启数据压缩功能。目前只支持使用gzip对特定文件类型进行压缩
     *             "HTTP2Enabled" => (boolean) （应用型专用）是否开启HTTP/2特性。仅HTTPS监听支持开启
     *             "RedirectEnabled" => (boolean) （应用型专用）是否开启HTTP重定向到HTTPS。仅HTTP监听支持开启
     *             "RedirectPort" => (integer) （应用型专用）重定向端口
     *             "Targets" => (array<object>) 添加的服务节点信息。具体结构详见 Target[
     *                 [
     *                     "ResourceType" => (string) 服务节点的类型。限定枚举值：UHost -> 云主机，UNI -> 虚拟网卡，UPM -> 物理云主机，IP ->  IP类型； 默认值："UHost"； 非IP类型，如果该资源有多个IP，将只能添加主IP； 非IP类型，展示时，会显示相关资源信息，IP类型只展示IP信息。 在相关资源被删除时，非IP类型会把相关资源从lb中剔除，IP类型不保证这个逻辑
     *                     "ResourceId" => (string) 服务节点的资源ID
     *                     "ResourceName" => (string) 服务节点的资源名称
     *                     "VPCId" => (string) 服务节点的VPC资源ID
     *                     "SubnetId" => (string) 服务节点的子网资源ID
     *                     "ResourceIP" => (string) 服务节点的IP
     *                     "Port" => (integer) 服务节点的端口
     *                     "Weight" => (integer) 服务节点的权重。仅在加权轮询算法时有效
     *                     "Enabled" => (boolean) 服务节点是否启用
     *                     "IsBackup" => (boolean) 服务节点是否为备节点
     *                     "Id" => (string) 服务节点的标识ID。为ALB/NLB中使用，与资源自身ID无关，可用于UpdateTargetsAttribute/RemoveTargets
     *                     "State" => (string) 服务节点的健康检查状态。限定枚举值：Healthy -> 健康，Unhealthy -> 不健康
     *                 ]
     *             ]
     *             "Rules" => (array<object>) （应用型专用）转发规则信息[
     *                 [
     *                     "RuleId" => (string) 转发规则的ID
     *                     "RuleConditions" => (array<object>) 转发规则匹配条件。具体结构详见 RuleCondition[
     *                         [
     *                             "Type" => (string) 匹配条件类型。限定枚举值：Host，Path
     *                             "HostConfig" => (object) 域名相关配置。Type为Host时必填。具体结构详见 HostConfigSet[
     *                                 "Values" => (array<string>) 取值。暂时只支持数组长度为1； 取值需符合相关匹配方式的条件
     *                                 "MatchMode" => (string) 匹配方式。限定枚举值：Regular-正则，Wildcard-泛域名； 默认值：Regular
     *                             ]
     *                             "PathConfig" => (object) 路径相关配置。Type为Path时必填。具体结构详见 PathConfigSet[
     *                                 "Values" => (array<string>) 取值。暂时只支持数组长度为1； 取值需符合相关匹配方式的条件
     *                             ]
     *                         ]
     *                     ]
     *                     "RuleActions" => (array<object>) 转发动作。具体规则详见RuleAction[
     *                         [
     *                             "Type" => (string) 动作类型。限定枚举值：Forward、"InsertHeader"、"Cors"、"FixedResponse"、"RemoveHeader"
     *                             "ForwardConfig" => (object) 转发服务节点相关配置，对应 type 值: "Forward"。具体结构详见 ForwardConfigSet[
     *                                 "Targets" => (array<object>) 转发的后端服务节点。限定在监听器的服务节点池里；数组长度可以为0。具体结构详见 ForwardTargetSet[
     *                                     [
     *                                         "Id" => (string) 服务节点的标识ID
     *                                         "Weight" => (integer) 权重。仅监听器负载均衡算法是加权轮询是有效；取值范围[1-100]，默认值为1
     *                                     ]
     *                                 ]
     *                             ]
     *                             "FixedResponseConfig" => (object) 静态返回相关配置，对应 type 值: "FixedResponse"。具体结构详见 FixedResponseConfigSet[
     *                                 "HttpCode" => (integer) 返回的 HTTP 响应码，仅支持 2xx、4xx、5xx 数字，x 为任意数字。
     *                                 "Content" => (string) 返回的固定内容。最大支持存储 1 KB，只支持 ASCII 码值ch >= 32 && ch < 127范围内、不包括 $ 的可打印字符。
     *                             ]
     *                             "InsertHeaderConfig" => (object) 插入 header 相关配置，对应 type 值: "InsertHeader"。具体结构详见 InsertHeaderConfigSet[
     *                                 "Key" => (string) 插入的 header 字段名称，长度为 1~40 个字符，支持大小写字母 a~z、数字、下划线（_）和短划线（-）。头字段名称不能重复用于InsertHeader中。header 字段不能使用以下(此处判断大小写不敏感)x-real-ip、x-forwarded-for、x-forwarded-proto、x-forwarded-srcport、ucloud-alb-trace、connection、upgrade、content-length、transfer-encoding、keep-alive、te、host、cookie、remoteip、authority
     *                                 "Value" => (string) 插入的 header 字段内容。ValueType 取值为 SystemDefined 时取值如下：ClientSrcPort：客户端端口。ClientSrcIp：客户端 IP 地址。Protocol：客户端请求的协议（HTTP 或 HTTPS)。RuleID：客户端请求命中的转发规则ID。ALBID：ALB ID。ALBPort：ALB 端口。ValueType 取值为 UserDefined 时：可以自定义头字段内容，限制长度为 1~128 个字符，只支持 ASCII 码值ch >= 32 && ch < 127范围内、不包括 $ 的可打印字符。ValueType 取值为 ReferenceHeader 时：可以引用请求头字段中的某一个字段，限制长度限制为 1~128 个字符，支持小写字母 a~z、数字、短划线（-）和下划线（_）。
     *                                 "ValueType" => (string) 头字段内容类型。取值：UserDefined：用户指定。ReferenceHeader：引用用户请求头中的某一个字段。SystemDefined：系统定义。
     *                             ]
     *                             "CorsConfig" => (object) 跨域相关配置，对应 type 值: "Cors"。具体结构详见 CorsConfigSet[
     *                                 "AllowOrigin" => (array<string>) 允许的访问来源列表。支持只配置一个元素*，或配置一个或多个值。单个值必须以http://或者https://开头，后边加一个正确的域名或一级泛域名。（例：http://*.test.abc.example.com）单个值可以不加端口，也可以指定端口，端口范围：1~65535。最多支持5个值
     *                                 "AllowHeaders" => (array<string>) 允许跨域的 Header 列表。支持配置为*或配置一个或多个 value 值。单个 value 值只允许包含大小写字母、数字，不能以下划线（_）和短划线（-）开头或结尾，最大长度限制为 32 个字符。最多支持20个值
     *                                 "ExposeHeaders" => (array<string>) 允许暴露的 Header 列表。支持配置为*或配置一个或多个 value 值。单个 value 值只允许包含大小写字母、数字，不能以下划线（_）和短划线（-）开头或结尾，最大长度限制为 32 个字符。最多支持20个值
     *                                 "AllowMethods" => (array<string>) 选择跨域访问时允许的 HTTP 方法。取值：GETPOSTPUTDELETEHEADOPTIONSPATCH
     *                                 "AllowCredentials" => (string) 是否允许携带凭证信息。取值：on：是。off：否。
     *                                 "MaxAge" => (integer) 预检请求在浏览器的最大缓存时间，单位：秒。取值范围：-1~172800。
     *                             ]
     *                             "RemoveHeaderConfig" => (object) 删除 header 相关配置，对应 type 值: "RemoveHeader"。具体结构详见 RemoveHeaderConfigSet[
     *                                 "Key" => (string)    删除的 header 字段名称，目前只能删除以下几个默认配置的字段: X-Real-IP、X-Forwarded-For、X-Forwarded-Proto、X-Forwarded-SrcPort
     *                             ]
     *                             "Order" => (integer) 转发规则动作执行的顺序，取值为1~1000，按值从小到大执行动作。值不能为空，不能重复。Forward、FixedResponse 类型的动作不判断 Order，最后一个执行
     *                         ]
     *                     ]
     *                     "IsDefault" => (boolean) 是否为默认转发规则
     *                     "Pass" => (boolean) 当转发的服务节点为空时，规则是否忽略
     *                 ]
     *             ]
     *             "State" => (string) listener健康状态。限定枚举值：Healthy -> 健康，Unhealthy -> 不健康，PartialHealth -> 部分健康，None -> 无节点状态
     *         ]
     *     ]
     * ]
     *
     * @return DescribeListenersResponse
     * @throws UCloudException
     */
    public function describeListeners(DescribeListenersRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeListenersResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeLoadBalancers - 描述特定条件下的应用型负载均衡实例或者全部的应用型负载均衡实例
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/describe_load_balancers
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Type" => (string) 负载均衡实例的类型。限定枚举值："Application" / "Network"，默认值："Application"
     *     "ShowDetail" => (boolean) 是否获取监听器和后端服务节点的详细信息。默认值：false
     *     "LoadBalancerIds" => (array<string>) 负载均衡实例的ID。必须是同一类型的实例，若指定了实例ID，将忽略除Type外的其他过滤条件
     *     "VPCId" => (string) 限定所在的VPC
     *     "SubnetId" => (string) 限定所在的子网
     *     "Offset" => (string) 数据偏移量，默认为0
     *     "Limit" => (string) 数据分页值，默认为100
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 满足条件的负载均衡实例总数
     *     "LoadBalancers" => (array<object>) 负载均衡实例信息[
     *         [
     *             "VPCId" => (string) 负载均衡实例所属的VPC资源ID
     *             "SubnetId" => (string) 负载均衡实例所属的子网资源ID。负载均衡实例的内网VIP和SNAT场景的源IP限定在该子网内；指定子网不影响添加后端服务节点时的范围，依旧是整个VPC下支持的资源
     *             "LoadBalancerId" => (string) 负载均衡实例的ID
     *             "Type" => (string) 负载均衡实例的类型。限定枚举值：Application -> 应用型，Network -> 网络型
     *             "Name" => (string) 负载均衡实例的名称
     *             "Tag" => (string) 负载均衡实例所属的业务组ID
     *             "Remark" => (string) 负载均衡实例的备注信息
     *             "IPVersion" => (string) 负载均衡实例支持的IP协议版本
     *             "IPInfos" => (array<object>) 绑定的IP信息。具体结构详见 IPInfo[
     *                 [
     *                     "IP" => (string) IP地址
     *                     "Id" => (string) 唯一标识ID
     *                     "IPVersion" => (string) IP协议版本
     *                     "OperatorName" => (string) 外网IP的运营商信息。枚举值为：Telecom -> 电信，Unicom -> 联通，International -> 国际IP，Bgp -> BGP，Duplet -> 双线（电信+联通双线路），BGPPro -> 精品BGP，China-mobile -> 中国移动，Anycast -> AnycastEIP
     *                     "BandwidthType" => (integer) 带宽类型。限定枚举值：1 -> 共享带宽，0 -> 普通带宽类型
     *                     "Bandwidth" => (integer) 带宽值。单位M
     *                     "AddressType" => (string) 网络模式。 限定枚举值：Internet -> 互联网，Intranet -> 内联网
     *                 ]
     *             ]
     *             "SnatIPs" => (array<string>) 应用型实例的代理IP或网络型FULLNAT模式下snat所用的IP
     *             "Firewall" => (object) 防火墙信息[
     *                 "FirewallName" => (string) 防火墙名称
     *                 "FirewallId" => (string) 防火墙ID
     *             ]
     *             "AccessLogConfig" => (object) （应用型专用）访问日志相关配置[
     *                 "Enabled" => (boolean) （应用型专用）是否开启访问日志记录功能
     *                 "US3BucketName" => (string) （应用型专用）用于存储访问日志的bucket
     *                 "US3TokenId" => (string) （应用型专用）上传访问日志到bucket所需的token
     *             ]
     *             "ChargeType" => (string) 付费模式
     *             "PurchaseValue" => (integer) 有效期（计费）。格式为Unix Timestamp
     *             "CreateTime" => (integer) 负载均衡实例创建时间。格式为Unix Timestamp
     *             "Listeners" => (array<object>) 监听器信息。当ShowDetail为false时，为空[
     *                 [
     *                     "ListenerId" => (string) 监听器的ID
     *                     "Name" => (string) 监听器的名称
     *                     "Remark" => (string) 监听器的备注信息
     *                     "ListenerPort" => (integer) 监听器的监听端口
     *                     "ListenerProtocol" => (string) 监听协议。应用型限定取值： HTTP、HTTPS
     *                     "Certificates" => (array<object>) （应用型专用）服务器默认证书ID。仅HTTPS监听支持。具体接口详见 Certificate[
     *                         [
     *                             "SSLId" => (string) 证书ID
     *                             "IsDefault" => (boolean) 是否为默认证书
     *                         ]
     *                     ]
     *                     "SecurityPolicyId" => (string) （应用型专用）安全策略组ID。仅HTTPS监听支持绑定；Default -> 原生策略
     *                     "IdleTimeout" => (integer) 连接空闲超时时间。单位：秒
     *                     "Scheduler" => (string) 负载均衡算法。应用型限定取值：Roundrobin -> 轮询;Source -> 源地址； WeightRoundrobin -> 加权轮询; Leastconn -> 最小连接数；Backup ->主备模式
     *                     "StickinessConfig" => (object) 会话保持相关配置。具体结构详见 StickinessConfigSet[
     *                         "Enabled" => (boolean) 是否开启会话保持功能。应用型负载均衡实例基于Cookie实现
     *                         "Type" => (string) （应用型专用）Cookie处理方式。限定枚举值： ServerInsert -> 自动生成KEY；UserDefined -> 用户自定义KEY
     *                         "CookieName" => (string) （应用型专用）自定义Cookie。当StickinessType取值"UserDefined"时有效
     *                     ]
     *                     "HealthCheckConfig" => (object) 健康检查相关配置。具体结构详见 HealthCheckConfigSet[
     *                         "Enabled" => (boolean) 是否开启健康检查功能。暂时不支持关闭。 默认值为：true
     *                         "Type" => (string) 健康检查方式。应用型限定取值： Port -> 端口检查；HTTP -> HTTP检查； 默认值：Port
     *                         "Domain" => (string) （应用型专用）HTTP检查域名。 当Type为HTTP时，此字段有意义，代表HTTP检查域名
     *                         "Path" => (string) （应用型专用）HTTP检查路径。当Type为HTTP时，此字段有意义，代表HTTP检查路径
     *                     ]
     *                     "CompressionEnabled" => (boolean) （应用型专用）是否开启数据压缩功能。目前只支持使用gzip对特定文件类型进行压缩
     *                     "HTTP2Enabled" => (boolean) （应用型专用）是否开启HTTP/2特性。仅HTTPS监听支持开启
     *                     "RedirectEnabled" => (boolean) （应用型专用）是否开启HTTP重定向到HTTPS。仅HTTP监听支持开启
     *                     "RedirectPort" => (integer) （应用型专用）重定向端口
     *                     "Targets" => (array<object>) 添加的服务节点信息。具体结构详见 Target[
     *                         [
     *                             "ResourceType" => (string) 服务节点的类型。限定枚举值：UHost -> 云主机，UNI -> 虚拟网卡，UPM -> 物理云主机，IP ->  IP类型； 默认值："UHost"； 非IP类型，如果该资源有多个IP，将只能添加主IP； 非IP类型，展示时，会显示相关资源信息，IP类型只展示IP信息。 在相关资源被删除时，非IP类型会把相关资源从lb中剔除，IP类型不保证这个逻辑
     *                             "ResourceId" => (string) 服务节点的资源ID
     *                             "ResourceName" => (string) 服务节点的资源名称
     *                             "VPCId" => (string) 服务节点的VPC资源ID
     *                             "SubnetId" => (string) 服务节点的子网资源ID
     *                             "ResourceIP" => (string) 服务节点的IP
     *                             "Port" => (integer) 服务节点的端口
     *                             "Weight" => (integer) 服务节点的权重。仅在加权轮询算法时有效
     *                             "Enabled" => (boolean) 服务节点是否启用
     *                             "IsBackup" => (boolean) 服务节点是否为备节点
     *                             "Id" => (string) 服务节点的标识ID。为ALB/NLB中使用，与资源自身ID无关，可用于UpdateTargetsAttribute/RemoveTargets
     *                             "State" => (string) 服务节点的健康检查状态。限定枚举值：Healthy -> 健康，Unhealthy -> 不健康
     *                         ]
     *                     ]
     *                     "Rules" => (array<object>) （应用型专用）转发规则信息[
     *                         [
     *                             "RuleId" => (string) 转发规则的ID
     *                             "RuleConditions" => (array<object>) 转发规则匹配条件。具体结构详见 RuleCondition[
     *                                 [
     *                                     "Type" => (string) 匹配条件类型。限定枚举值：Host，Path
     *                                     "HostConfig" => (object) 域名相关配置。Type为Host时必填。具体结构详见 HostConfigSet[
     *                                         "Values" => (array<string>) 取值。暂时只支持数组长度为1； 取值需符合相关匹配方式的条件
     *                                         "MatchMode" => (string) 匹配方式。限定枚举值：Regular-正则，Wildcard-泛域名； 默认值：Regular
     *                                     ]
     *                                     "PathConfig" => (object) 路径相关配置。Type为Path时必填。具体结构详见 PathConfigSet[
     *                                         "Values" => (array<string>) 取值。暂时只支持数组长度为1； 取值需符合相关匹配方式的条件
     *                                     ]
     *                                 ]
     *                             ]
     *                             "RuleActions" => (array<object>) 转发动作。具体规则详见RuleAction[
     *                                 [
     *                                     "Type" => (string) 动作类型。限定枚举值：Forward、"InsertHeader"、"Cors"、"FixedResponse"、"RemoveHeader"
     *                                     "ForwardConfig" => (object) 转发服务节点相关配置，对应 type 值: "Forward"。具体结构详见 ForwardConfigSet[
     *                                         "Targets" => (array<object>) 转发的后端服务节点。限定在监听器的服务节点池里；数组长度可以为0。具体结构详见 ForwardTargetSet[
     *                                             [
     *                                                 "Id" => (string) 服务节点的标识ID
     *                                                 "Weight" => (integer) 权重。仅监听器负载均衡算法是加权轮询是有效；取值范围[1-100]，默认值为1
     *                                             ]
     *                                         ]
     *                                     ]
     *                                     "FixedResponseConfig" => (object) 静态返回相关配置，对应 type 值: "FixedResponse"。具体结构详见 FixedResponseConfigSet[
     *                                         "HttpCode" => (integer) 返回的 HTTP 响应码，仅支持 2xx、4xx、5xx 数字，x 为任意数字。
     *                                         "Content" => (string) 返回的固定内容。最大支持存储 1 KB，只支持 ASCII 码值ch >= 32 && ch < 127范围内、不包括 $ 的可打印字符。
     *                                     ]
     *                                     "InsertHeaderConfig" => (object) 插入 header 相关配置，对应 type 值: "InsertHeader"。具体结构详见 InsertHeaderConfigSet[
     *                                         "Key" => (string) 插入的 header 字段名称，长度为 1~40 个字符，支持大小写字母 a~z、数字、下划线（_）和短划线（-）。头字段名称不能重复用于InsertHeader中。header 字段不能使用以下(此处判断大小写不敏感)x-real-ip、x-forwarded-for、x-forwarded-proto、x-forwarded-srcport、ucloud-alb-trace、connection、upgrade、content-length、transfer-encoding、keep-alive、te、host、cookie、remoteip、authority
     *                                         "Value" => (string) 插入的 header 字段内容。ValueType 取值为 SystemDefined 时取值如下：ClientSrcPort：客户端端口。ClientSrcIp：客户端 IP 地址。Protocol：客户端请求的协议（HTTP 或 HTTPS)。RuleID：客户端请求命中的转发规则ID。ALBID：ALB ID。ALBPort：ALB 端口。ValueType 取值为 UserDefined 时：可以自定义头字段内容，限制长度为 1~128 个字符，只支持 ASCII 码值ch >= 32 && ch < 127范围内、不包括 $ 的可打印字符。ValueType 取值为 ReferenceHeader 时：可以引用请求头字段中的某一个字段，限制长度限制为 1~128 个字符，支持小写字母 a~z、数字、短划线（-）和下划线（_）。
     *                                         "ValueType" => (string) 头字段内容类型。取值：UserDefined：用户指定。ReferenceHeader：引用用户请求头中的某一个字段。SystemDefined：系统定义。
     *                                     ]
     *                                     "CorsConfig" => (object) 跨域相关配置，对应 type 值: "Cors"。具体结构详见 CorsConfigSet[
     *                                         "AllowOrigin" => (array<string>) 允许的访问来源列表。支持只配置一个元素*，或配置一个或多个值。单个值必须以http://或者https://开头，后边加一个正确的域名或一级泛域名。（例：http://*.test.abc.example.com）单个值可以不加端口，也可以指定端口，端口范围：1~65535。最多支持5个值
     *                                         "AllowHeaders" => (array<string>) 允许跨域的 Header 列表。支持配置为*或配置一个或多个 value 值。单个 value 值只允许包含大小写字母、数字，不能以下划线（_）和短划线（-）开头或结尾，最大长度限制为 32 个字符。最多支持20个值
     *                                         "ExposeHeaders" => (array<string>) 允许暴露的 Header 列表。支持配置为*或配置一个或多个 value 值。单个 value 值只允许包含大小写字母、数字，不能以下划线（_）和短划线（-）开头或结尾，最大长度限制为 32 个字符。最多支持20个值
     *                                         "AllowMethods" => (array<string>) 选择跨域访问时允许的 HTTP 方法。取值：GETPOSTPUTDELETEHEADOPTIONSPATCH
     *                                         "AllowCredentials" => (string) 是否允许携带凭证信息。取值：on：是。off：否。
     *                                         "MaxAge" => (integer) 预检请求在浏览器的最大缓存时间，单位：秒。取值范围：-1~172800。
     *                                     ]
     *                                     "RemoveHeaderConfig" => (object) 删除 header 相关配置，对应 type 值: "RemoveHeader"。具体结构详见 RemoveHeaderConfigSet[
     *                                         "Key" => (string)    删除的 header 字段名称，目前只能删除以下几个默认配置的字段: X-Real-IP、X-Forwarded-For、X-Forwarded-Proto、X-Forwarded-SrcPort
     *                                     ]
     *                                     "Order" => (integer) 转发规则动作执行的顺序，取值为1~1000，按值从小到大执行动作。值不能为空，不能重复。Forward、FixedResponse 类型的动作不判断 Order，最后一个执行
     *                                 ]
     *                             ]
     *                             "IsDefault" => (boolean) 是否为默认转发规则
     *                             "Pass" => (boolean) 当转发的服务节点为空时，规则是否忽略
     *                         ]
     *                     ]
     *                     "State" => (string) listener健康状态。限定枚举值：Healthy -> 健康，Unhealthy -> 不健康，PartialHealth -> 部分健康，None -> 无节点状态
     *                 ]
     *             ]
     *             "Status" => (string) lb状态：Normal-正常；Arrears-欠费停服
     *             "AutoRenewEnabled" => (boolean) 是否开启自动续费
     *         ]
     *     ]
     * ]
     *
     * @return DescribeLoadBalancersResponse
     * @throws UCloudException
     */
    public function describeLoadBalancers(DescribeLoadBalancersRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeLoadBalancersResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeRules - 描述一条指定的转发规则或者一个应用型负载均衡监听器下的所有转发规则
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/describe_rules
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "LoadBalancerId" => (string) 应用型负载均衡实例的ID
     *     "ListenerId" => (string) 监听器的ID
     *     "RuleId" => (string) 应用型负载均衡转发规则的ID。指定RuleId，则只描述该规则
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Rules" => (array<object>) 转发规则信息[
     *         [
     *             "RuleId" => (string) 转发规则的ID
     *             "RuleConditions" => (array<object>) 转发规则匹配条件。具体结构详见 RuleCondition[
     *                 [
     *                     "Type" => (string) 匹配条件类型。限定枚举值：Host，Path
     *                     "HostConfig" => (object) 域名相关配置。Type为Host时必填。具体结构详见 HostConfigSet[
     *                         "Values" => (array<string>) 取值。暂时只支持数组长度为1； 取值需符合相关匹配方式的条件
     *                         "MatchMode" => (string) 匹配方式。限定枚举值：Regular-正则，Wildcard-泛域名； 默认值：Regular
     *                     ]
     *                     "PathConfig" => (object) 路径相关配置。Type为Path时必填。具体结构详见 PathConfigSet[
     *                         "Values" => (array<string>) 取值。暂时只支持数组长度为1； 取值需符合相关匹配方式的条件
     *                     ]
     *                 ]
     *             ]
     *             "RuleActions" => (array<object>) 转发动作。具体规则详见RuleAction[
     *                 [
     *                     "Type" => (string) 动作类型。限定枚举值：Forward、"InsertHeader"、"Cors"、"FixedResponse"、"RemoveHeader"
     *                     "ForwardConfig" => (object) 转发服务节点相关配置，对应 type 值: "Forward"。具体结构详见 ForwardConfigSet[
     *                         "Targets" => (array<object>) 转发的后端服务节点。限定在监听器的服务节点池里；数组长度可以为0。具体结构详见 ForwardTargetSet[
     *                             [
     *                                 "Id" => (string) 服务节点的标识ID
     *                                 "Weight" => (integer) 权重。仅监听器负载均衡算法是加权轮询是有效；取值范围[1-100]，默认值为1
     *                             ]
     *                         ]
     *                     ]
     *                     "FixedResponseConfig" => (object) 静态返回相关配置，对应 type 值: "FixedResponse"。具体结构详见 FixedResponseConfigSet[
     *                         "HttpCode" => (integer) 返回的 HTTP 响应码，仅支持 2xx、4xx、5xx 数字，x 为任意数字。
     *                         "Content" => (string) 返回的固定内容。最大支持存储 1 KB，只支持 ASCII 码值ch >= 32 && ch < 127范围内、不包括 $ 的可打印字符。
     *                     ]
     *                     "InsertHeaderConfig" => (object) 插入 header 相关配置，对应 type 值: "InsertHeader"。具体结构详见 InsertHeaderConfigSet[
     *                         "Key" => (string) 插入的 header 字段名称，长度为 1~40 个字符，支持大小写字母 a~z、数字、下划线（_）和短划线（-）。头字段名称不能重复用于InsertHeader中。header 字段不能使用以下(此处判断大小写不敏感)x-real-ip、x-forwarded-for、x-forwarded-proto、x-forwarded-srcport、ucloud-alb-trace、connection、upgrade、content-length、transfer-encoding、keep-alive、te、host、cookie、remoteip、authority
     *                         "Value" => (string) 插入的 header 字段内容。ValueType 取值为 SystemDefined 时取值如下：ClientSrcPort：客户端端口。ClientSrcIp：客户端 IP 地址。Protocol：客户端请求的协议（HTTP 或 HTTPS)。RuleID：客户端请求命中的转发规则ID。ALBID：ALB ID。ALBPort：ALB 端口。ValueType 取值为 UserDefined 时：可以自定义头字段内容，限制长度为 1~128 个字符，只支持 ASCII 码值ch >= 32 && ch < 127范围内、不包括 $ 的可打印字符。ValueType 取值为 ReferenceHeader 时：可以引用请求头字段中的某一个字段，限制长度限制为 1~128 个字符，支持小写字母 a~z、数字、短划线（-）和下划线（_）。
     *                         "ValueType" => (string) 头字段内容类型。取值：UserDefined：用户指定。ReferenceHeader：引用用户请求头中的某一个字段。SystemDefined：系统定义。
     *                     ]
     *                     "CorsConfig" => (object) 跨域相关配置，对应 type 值: "Cors"。具体结构详见 CorsConfigSet[
     *                         "AllowOrigin" => (array<string>) 允许的访问来源列表。支持只配置一个元素*，或配置一个或多个值。单个值必须以http://或者https://开头，后边加一个正确的域名或一级泛域名。（例：http://*.test.abc.example.com）单个值可以不加端口，也可以指定端口，端口范围：1~65535。最多支持5个值
     *                         "AllowHeaders" => (array<string>) 允许跨域的 Header 列表。支持配置为*或配置一个或多个 value 值。单个 value 值只允许包含大小写字母、数字，不能以下划线（_）和短划线（-）开头或结尾，最大长度限制为 32 个字符。最多支持20个值
     *                         "ExposeHeaders" => (array<string>) 允许暴露的 Header 列表。支持配置为*或配置一个或多个 value 值。单个 value 值只允许包含大小写字母、数字，不能以下划线（_）和短划线（-）开头或结尾，最大长度限制为 32 个字符。最多支持20个值
     *                         "AllowMethods" => (array<string>) 选择跨域访问时允许的 HTTP 方法。取值：GETPOSTPUTDELETEHEADOPTIONSPATCH
     *                         "AllowCredentials" => (string) 是否允许携带凭证信息。取值：on：是。off：否。
     *                         "MaxAge" => (integer) 预检请求在浏览器的最大缓存时间，单位：秒。取值范围：-1~172800。
     *                     ]
     *                     "RemoveHeaderConfig" => (object) 删除 header 相关配置，对应 type 值: "RemoveHeader"。具体结构详见 RemoveHeaderConfigSet[
     *                         "Key" => (string)    删除的 header 字段名称，目前只能删除以下几个默认配置的字段: X-Real-IP、X-Forwarded-For、X-Forwarded-Proto、X-Forwarded-SrcPort
     *                     ]
     *                     "Order" => (integer) 转发规则动作执行的顺序，取值为1~1000，按值从小到大执行动作。值不能为空，不能重复。Forward、FixedResponse 类型的动作不判断 Order，最后一个执行
     *                 ]
     *             ]
     *             "IsDefault" => (boolean) 是否为默认转发规则
     *             "Pass" => (boolean) 当转发的服务节点为空时，规则是否忽略
     *         ]
     *     ]
     * ]
     *
     * @return DescribeRulesResponse
     * @throws UCloudException
     */
    public function describeRules(DescribeRulesRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeRulesResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeSSL - 获取SSL证书信息，仅能获取SSL证书与传统型负载均衡监听器的绑定关系
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/describe_ssl
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
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
     *             "SSLSource" => (integer) SSL证书来源，SSL证书来源，0代表证书来自于ULB平台，1代表证书来自于USSL平台
     *             "USSLId" => (string) USSL证书平台的编号,只有当SSLSource为1时才出现
     *             "Domains" => (string) SSL证书平台的域名，多域名时，不展示扩展域名
     *             "NotBefore" => (integer) 证书颁发时间
     *             "NotAfter" => (integer) 证书过期时间
     *         ]
     *     ]
     * ]
     *
     * @return DescribeSSLResponse
     * @throws UCloudException
     */
    public function describeSSL(DescribeSSLRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeSSLResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeSSLV2 - 获取SSL证书信息，该接口可以同时获取SSL与传统型和应用型负载均衡监听器的绑定关系
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/describe_sslv2
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SSLId" => (string) SSL证书的Id
     *     "Limit" => (integer) 数据分页值，默认为20
     *     "Offset" => (integer) 数据偏移量，默认值为0
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 满足条件的SSL证书总数
     *     "DataSet" => (array<object>) SSL证书详细信息，具体结构见SSLInfo[
     *         [
     *             "SSLId" => (string) SSL证书的Id
     *             "SSLName" => (string) SSL证书的名字
     *             "SSLType" => (string) SSL证书类型，暂时只有 Pem 一种类型
     *             "SSLContent" => (string) SSL证书的内容
     *             "CreateTime" => (integer) SSL证书的创建时间
     *             "HashValue" => (string) SSL证书的HASH值
     *             "Relations" => (array<object>) SSL绑定ULB和ALB的关系[
     *                 [
     *                     "LoadBalancerId" => (string) 负载均衡实例的ID
     *                     "LoadBalancerName" => (string) 负载均衡实例的名称
     *                     "ListenerId" => (string) 监听器的ID
     *                     "ListenerName" => (string) 监听器的名称
     *                     "IsDefault" => (boolean) 是否为监听器默认SSL证书
     *                 ]
     *             ]
     *             "SSLSource" => (integer) SSL证书来源，SSL证书来源，0代表证书来自于ULB平台，1代表证书来自于USSL平台
     *             "USSLId" => (string) USSL证书平台的编号,只有当SSLSource为1时才出现
     *             "Domains" => (string) SSL证书的域名
     *             "DNSNames" => (string) SSL证书的扩展域名
     *             "NotBefore" => (integer) 证书颁发时间
     *             "NotAfter" => (integer) 证书过期时间
     *         ]
     *     ]
     * ]
     *
     * @return DescribeSSLV2Response
     * @throws UCloudException
     */
    public function describeSSLV2(DescribeSSLV2Request $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeSSLV2Response($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeSecurityPolicies - 获取安全策略的信息，绑定关系仅能获取安全策略与传统型负载均衡监听器的绑定关系
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/describe_security_policies
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SecurityPolicyId" => (string) 安全策略ID
     *     "Limit" => (integer) 数据分页值
     *     "Offset" => (integer) 数据偏移量
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>)     安全策略列表，每项参数详见SecurityPolicy[
     *         [
     *             "SecurityPolicyId" => (string) 安全策略ID
     *             "SecurityPolicyName" => (string) 安全策略名称
     *             "TLSVersion" => (string) TLS最低版本
     *             "SSLCiphers" => (array<string>) 加密套件
     *             "SecurityPolicyType" => (integer) 安全策略类型 0：预定义 1：自定义
     *             "VServerSet" => (array<object>) 关联的监听[
     *                 [
     *                     "VServerId" => (string) 绑定的VServerId
     *                     "VServerName" => (string) 绑定的VServer名称
     *                     "Port" => (integer) VServer端口
     *                     "ULBId" => (string) ULB的ID
     *                 ]
     *             ]
     *         ]
     *     ]
     *     "TotalCount" => (integer) 满足条件的安全策略总数
     * ]
     *
     * @return DescribeSecurityPoliciesResponse
     * @throws UCloudException
     */
    public function describeSecurityPolicies(DescribeSecurityPoliciesRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeSecurityPoliciesResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeSecurityPoliciesV2 - 获取安全策略的信息，可以同时获取安全策略与传统型和应用性负载均衡监听器的绑定关系
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/describe_security_policies_v2
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SecurityPolicyId" => (string) 安全策略ID
     *     "Limit" => (integer) 数据分页值
     *     "Offset" => (integer) 数据偏移量
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>)     安全策略列表，每项参数详见SecurityPolicyInfo[
     *         [
     *             "SecurityPolicyId" => (string) 安全策略ID
     *             "SecurityPolicyName" => (string) 安全策略名称
     *             "TLSVersion" => (string) TLS最低版本
     *             "SSLCiphers" => (array<string>) 加密套件
     *             "SecurityPolicyType" => (integer) 安全策略类型 0：预定义 1：自定义
     *             "Relations" => (array<object>) 关联的监听[
     *                 [
     *                     "LoadBalancerId" => (string) 负载均衡实例的ID
     *                     "ListenerId" => (string) 监听器的ID
     *                     "ListenerName" => (string) 监听器的名称
     *                     "ListenerPort" => (integer) 监听端口
     *                 ]
     *             ]
     *         ]
     *     ]
     *     "TotalCount" => (integer) 满足条件的安全策略总数
     * ]
     *
     * @return DescribeSecurityPoliciesV2Response
     * @throws UCloudException
     */
    public function describeSecurityPoliciesV2(DescribeSecurityPoliciesV2Request $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeSecurityPoliciesV2Response($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeSupportCiphers - 返回安全策略所有支持的加密套件
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/describe_support_ciphers
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
     *     "DataSet" => (array<object>) 返回支持的TLS最低版本和加密套件，每项参数详见 TLSAndCiphers[
     *         [
     *             "TLSVersion" => (string) TLS最低版本
     *             "SSLCiphers" => (array<string>) 加密套件
     *         ]
     *     ]
     * ]
     *
     * @return DescribeSupportCiphersResponse
     * @throws UCloudException
     */
    public function describeSupportCiphers(DescribeSupportCiphersRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeSupportCiphersResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeULB - 获取CLB详细信息
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/describe_ulb
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Offset" => (integer) 数据偏移量，默认为0
     *     "Limit" => (integer) 数据分页值，默认为20
     *     "ULBId" => (string) 传统型负载均衡实例的Id。 若指定则返回指定的传统型负载均衡实例的信息； 若不指定则返回当前数据中心中所有的传统型负载均衡实例的信息
     *     "VPCId" => (string) CLB所属的VPC
     *     "SubnetId" => (string) CLB所属的子网ID
     *     "BusinessId" => (string) CLB所属的业务组ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 满足条件的CLB总数
     *     "DataSet" => (array<object>) CLB列表，每项参数详见 ULBSet[
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
     *                     "PersistenceType" => (string) VServer会话保持方式。枚举值为： None -> 关闭会话保持； ServerInsert -> 自动生成； UserDefined -> 用户自定义。
     *                     "ULBId" => (string) 负载均衡实例的Id
     *                     "Domain" => (string) 根据MonitorType确认； 当MonitorType为Port时，此字段无意义。当MonitorType为Path时，代表HTTP检查域名
     *                     "Path" => (string) 根据MonitorType确认； 当MonitorType为Port时，此字段无意义。当MonitorType为Path时，代表HTTP检查路径
     *                     "RequestMsg" => (string) 根据MonitorType确认； 当MonitorType为Customize时，此字段有意义，代表UDP检查发出的请求报文
     *                     "ResponseMsg" => (string) 根据MonitorType确认； 当MonitorType为Customize时，此字段有意义，代表UDP检查请求应收到的响应报文
     *                     "VServerId" => (string) VServer实例的Id
     *                     "VServerName" => (string) VServer实例的名字
     *                     "Protocol" => (string) VServer实例的协议。 枚举值为：HTTP，TCP，UDP，HTTPS。
     *                     "FrontendPort" => (integer) VServer服务端口
     *                     "Method" => (string) VServer负载均衡的模式，枚举值：Roundrobin -> 轮询;Source -> 源地址；ConsistentHash -> 一致性哈希；SourcePort -> 源地址（计算端口）；ConsistentHashPort -> 一致性哈希（计算端口）。
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
     *                             "SSLSource" => (integer) SSL证书来源，SSL证书来源，0代表证书来自于ULB平台，1代表证书来自于USSL平台
     *                             "USSLId" => (string) USSL证书平台的编号,只有当SSLSource为1时才出现
     *                             "Domains" => (string) SSL证书平台的域名，多域名时，不展示扩展域名
     *                             "NotBefore" => (integer) 证书颁发时间
     *                             "NotAfter" => (integer) 证书过期时间
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
     *                             "Weight" => (integer) 后端RS权重（在加权轮询算法下有效）
     *                             "VPCId" => (string) 后端服务器所在的VPC
     *                         ]
     *                     ]
     *                     "ListenType" => (string) 监听器类型，枚举值为: RequestProxy -> 请求代理；PacketsTransmit -> 报文转发
     *                     "PolicySet" => (array<object>) 内容转发信息列表，具体结构见下方 ULBPolicySet[
     *                         [
     *                             "DomainMatchMode" => (string) 内容转发规则中域名的匹配方式。枚举值：Regular，正则；Wildcard，泛域名
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
     *                     "EnableCompression" => (integer) 数据压缩开关，0:关闭 1:开启
     *                     "SecurityPolicy" => (object) VServer绑定的安全策略,具体结构见BindSecurityPolicy[
     *                         "SecurityPolicyId" => (string) 安全策略组ID
     *                         "SecurityPolicyName" => (string) 安全策略组名称
     *                         "TLSVersion" => (string) TLS最低版本
     *                         "SSLCiphers" => (array<string>) 加密套件
     *                         "SecurityPolicyType" => (integer) 安全策略类型 0：预定义 1：自定义
     *                     ]
     *                     "ForwardPort" => (integer) 重定向端口，取值范围[0-65535]；默认值为0，代表关闭；仅HTTP协议支持开启重定向功能
     *                     "EnableHTTP2" => (integer) 0:关闭 1:开启，用于开启http2功能；默认值为0
     *                 ]
     *             ]
     *             "ULBType" => (string) ULB 的类型
     *             "IPVersion" => (string) ULB ip类型，枚举值：IPv6 / IPv4 （内部测试，暂未对外开放）
     *             "SnatIps" => (array<string>) ULB后向代理IP，仅当有代理IP时返回否
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
     * @return DescribeULBResponse
     * @throws UCloudException
     */
    public function describeULB(DescribeULBRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeULBResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeULBSimple - 获取CLB信息
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/describe_ulb_simple
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Offset" => (integer) 数据偏移量，默认为0
     *     "Limit" => (integer) 数据分页值，默认为10000
     *     "ULBId" => (string) 传统型负载均衡实例的Id。 若指定则返回指定的传统型负载均衡实例的信息； 若不指定则返回当前数据中心中所有的传统型负载均衡实例的信息
     *     "VPCId" => (string) CLB所属的VPC
     *     "SubnetId" => (string) CLB所属的子网ID
     *     "BusinessId" => (string) CLB所属的业务组ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 满足条件的CLB总数
     *     "DataSet" => (array<object>) CLB列表，每项参数详见 ULBSimpleSet[
     *         [
     *             "ListenType" => (string) ULB 监听器类型，枚举值：RequestProxy，请求代理； PacketsTransmit ，报文转发；Comprehensive，兼容型；Pending，未定型
     *             "IPVersion" => (string) ULB提供服务的IP类型。枚举值，“IPv4”,"IPv6"。默认为“IPv4”
     *             "SnatIps" => (array<string>) ULB后向代理IP，仅当有代理IP时返回否
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
     *             "WAFMode" => (string) WAF功能状态，枚举类型：Unavailable：无法创建WAF；NoWAF：未绑定WAF；Intranet：内网回源Waf；Extranet：外网回源Waf
     *         ]
     *     ]
     * ]
     *
     * @return DescribeULBSimpleResponse
     * @throws UCloudException
     */
    public function describeULBSimple(DescribeULBSimpleRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeULBSimpleResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeVServer - 获取CLB下的VServer的详细信息
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/describe_vserver
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ULBId" => (string) 传统型负载均衡实例的Id
     *     "VServerId" => (string) CLB下的VServer实例的Id；若指定则返回指定的VServer实例的信息； 若不指定则返回当前传统型负载均衡实例下所有VServer的信息
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
     *             "PersistenceType" => (string) VServer会话保持方式。枚举值为： None -> 关闭会话保持； ServerInsert -> 自动生成； UserDefined -> 用户自定义。
     *             "ULBId" => (string) 负载均衡实例的Id
     *             "Domain" => (string) 根据MonitorType确认； 当MonitorType为Port时，此字段无意义。当MonitorType为Path时，代表HTTP检查域名
     *             "Path" => (string) 根据MonitorType确认； 当MonitorType为Port时，此字段无意义。当MonitorType为Path时，代表HTTP检查路径
     *             "RequestMsg" => (string) 根据MonitorType确认； 当MonitorType为Customize时，此字段有意义，代表UDP检查发出的请求报文
     *             "ResponseMsg" => (string) 根据MonitorType确认； 当MonitorType为Customize时，此字段有意义，代表UDP检查请求应收到的响应报文
     *             "VServerId" => (string) VServer实例的Id
     *             "VServerName" => (string) VServer实例的名字
     *             "Protocol" => (string) VServer实例的协议。 枚举值为：HTTP，TCP，UDP，HTTPS。
     *             "FrontendPort" => (integer) VServer服务端口
     *             "Method" => (string) VServer负载均衡的模式，枚举值：Roundrobin -> 轮询;Source -> 源地址；ConsistentHash -> 一致性哈希；SourcePort -> 源地址（计算端口）；ConsistentHashPort -> 一致性哈希（计算端口）。
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
     *                     "SSLSource" => (integer) SSL证书来源，SSL证书来源，0代表证书来自于ULB平台，1代表证书来自于USSL平台
     *                     "USSLId" => (string) USSL证书平台的编号,只有当SSLSource为1时才出现
     *                     "Domains" => (string) SSL证书平台的域名，多域名时，不展示扩展域名
     *                     "NotBefore" => (integer) 证书颁发时间
     *                     "NotAfter" => (integer) 证书过期时间
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
     *                     "Weight" => (integer) 后端RS权重（在加权轮询算法下有效）
     *                     "VPCId" => (string) 后端服务器所在的VPC
     *                 ]
     *             ]
     *             "ListenType" => (string) 监听器类型，枚举值为: RequestProxy -> 请求代理；PacketsTransmit -> 报文转发
     *             "PolicySet" => (array<object>) 内容转发信息列表，具体结构见下方 ULBPolicySet[
     *                 [
     *                     "DomainMatchMode" => (string) 内容转发规则中域名的匹配方式。枚举值：Regular，正则；Wildcard，泛域名
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
     *             "EnableCompression" => (integer) 数据压缩开关，0:关闭 1:开启
     *             "SecurityPolicy" => (object) VServer绑定的安全策略,具体结构见BindSecurityPolicy[
     *                 "SecurityPolicyId" => (string) 安全策略组ID
     *                 "SecurityPolicyName" => (string) 安全策略组名称
     *                 "TLSVersion" => (string) TLS最低版本
     *                 "SSLCiphers" => (array<string>) 加密套件
     *                 "SecurityPolicyType" => (integer) 安全策略类型 0：预定义 1：自定义
     *             ]
     *             "ForwardPort" => (integer) 重定向端口，取值范围[0-65535]；默认值为0，代表关闭；仅HTTP协议支持开启重定向功能
     *             "EnableHTTP2" => (integer) 0:关闭 1:开启，用于开启http2功能；默认值为0
     *         ]
     *     ]
     * ]
     *
     * @return DescribeVServerResponse
     * @throws UCloudException
     */
    public function describeVServer(DescribeVServerRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeVServerResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ReleaseBackend - 从CLB的VServer释放后端资源实例
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/release_backend
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ULBId" => (string) 传统型负载均衡实例的ID
     *     "BackendId" => (string) 后端资源实例的ID(CLB后端ID，非资源自身ID)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ReleaseBackendResponse
     * @throws UCloudException
     */
    public function releaseBackend(ReleaseBackendRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ReleaseBackendResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * RemoveTargets - 从应用型负载均衡监听器删除后端服务节点
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/remove_targets
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "LoadBalancerId" => (string) 负载均衡实例的ID
     *     "ListenerId" => (string) 监听器的ID
     *     "Ids" => (array<string>) 服务节点的标识ID。不超过20个；
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return RemoveTargetsResponse
     * @throws UCloudException
     */
    public function removeTargets(RemoveTargetsRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RemoveTargetsResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UnBindSecurityPolicy - 批量解绑安全策略，会同时解绑与传统型和应用型负载均衡监听器的绑定关系
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/un_bind_security_policy
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SecurityPolicyId" => (string) 安全策略ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UnBindSecurityPolicyResponse
     * @throws UCloudException
     */
    public function unBindSecurityPolicy(UnBindSecurityPolicyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UnBindSecurityPolicyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UnbindSSL - 从CLB下的VServer解绑SSL证书
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/unbind_ssl
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ULBId" => (string) 所绑定CLB实例ID
     *     "VServerId" => (string) CLB所绑定VServer实例ID
     *     "SSLId" => (string) SSL证书的Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UnbindSSLResponse
     * @throws UCloudException
     */
    public function unbindSSL(UnbindSSLRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UnbindSSLResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateBackendAttribute - 更新CLB后端资源实例(服务节点)属性
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/update_backend_attribute
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ULBId" => (string) 传统型负载均衡资源ID
     *     "BackendId" => (string) 后端资源实例的ID(CLB后端ID，非资源自身ID)
     *     "Port" => (integer) 后端资源服务端口，取值范围[1-65535]
     *     "Weight" => (integer) 所添加的后端RS权重（在加权轮询算法下有效），取值范围[1-100]，默认为1
     *     "Enabled" => (integer) 后端实例状态开关
     *     "IsBackup" => (integer) 是否为backup0：主rs1：备rs默认为0
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateBackendAttributeResponse
     * @throws UCloudException
     */
    public function updateBackendAttribute(UpdateBackendAttributeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateBackendAttributeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateBackendBatch - 批量更新ULB后端资源实例(服务节点)属性
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/update_backend_batch
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ULBId" => (string) 负载均衡资源ID
     *     "Attributes" => (array<object>) [
     *         [
     *             "BackendId" => (string) 后端资源实例的ID(ULB后端ID，非资源自身ID)
     *             "Port" => (integer) 后端资源服务端口，取值范围[1-65535]
     *             "Weight" => (integer) 所添加的后端RS权重（在加权轮询算法下有效），取值范围[0-100]，默认为1
     *             "Enabled" => (integer) 后端实例状态开关
     *             "IsBackup" => (integer) 是否为backup 0：主rs 1：备rs 默认为0
     *         ]
     *     ]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "BackendSet" => (array<object>) 返回ulb对每个rs的修改是否成功[
     *         [
     *             "BackendId" => (string) rs的资源ID
     *             "SubMessage" => (string) 修改rs返回的消息
     *             "SubRetCode" => (integer) 修改rs的返回值
     *         ]
     *     ]
     * ]
     *
     * @return UpdateBackendBatchResponse
     * @throws UCloudException
     */
    public function updateBackendBatch(UpdateBackendBatchRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateBackendBatchResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateListenerAttribute - 更新一个应用型负载均衡监听器的属性
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/update_listener_attribute
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "LoadBalancerId" => (string) 负载均衡实例的ID
     *     "ListenerId" => (string) 监听器的ID
     *     "Name" => (string) 监听器的名称。限定字符长度：[1-255]；限定特殊字符，仅支持：-_.
     *     "Remark" => (string) 监听器的备注信息。限定字符长度：[0-255]
     *     "Certificates" => (array<string>) （应用型专用）服务器默认证书ID。仅HTTPS监听支持
     *     "SecurityPolicyId" => (string) （应用型专用）安全策略组ID。仅HTTPS监听支持绑定。“Default”，表示绑定原生策略
     *     "IdleTimeout" => (integer) 连接空闲超时时间。单位：秒。应用型限定取值：[1-86400]
     *     "Scheduler" => (string) 负载均衡算法。应用型限定取值："Roundrobin"/"Source"/"WeightRoundrobin"/" Leastconn"/"Backup"
     *     "StickinessConfig" => (object) [
     *         "Enabled" => (boolean) 是否开启会话保持功能。应用型负载均衡实例基于Cookie实现，网络型负载均衡则基于源IP，保证在对应的空闲超时时间内，同一个源IP送到同一个服务节点。默认值为：false
     *         "Type" => (string) （应用型专用）Cookie处理方式。限定枚举值："ServerInsert" / "UserDefined"，默认值为：“ServerInsert”
     *         "CookieName" => (string) （应用型专用）自定义Cookie。当StickinessType取值"UserDefined"时有效；限定字符长度：[0-255]
     *     ]
     *     "HealthCheckConfig" => (object) [
     *         "Enabled" => (boolean) 是否开启健康检查功能。暂时不支持关闭；默认值为：true
     *         "Type" => (string) 健康检查方式。应用型限定取值：“Port”/"HTTP"；默认值：“Port”
     *         "Domain" => (string) （应用型专用）HTTP检查域名
     *         "Path" => (string) （应用型专用）HTTP检查路径
     *     ]
     *     "CompressionEnabled" => (boolean) （应用型专用）是否开启数据压缩功能。目前只支持使用gzip对特定文件类型进行压缩
     *     "HTTP2Enabled" => (boolean) （应用型专用）是否开启HTTP/2特性。仅HTTPS监听支持开启
     *     "RedirectEnabled" => (boolean) （应用型专用）是否开启HTTP重定向到HTTPS。仅HTTP监听支持开启
     *     "RedirectPort" => (integer) （应用型专用）重定向端口。限定取值：[1-65535]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateListenerAttributeResponse
     * @throws UCloudException
     */
    public function updateListenerAttribute(UpdateListenerAttributeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateListenerAttributeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateLoadBalancerAttribute - 更新一个应用型负载均衡实例的属性
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/update_load_balancer_attribute
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "LoadBalancerId" => (string) 负载均衡实例的ID
     *     "Name" => (string) 负载均衡实例的名称，不传则默认不修改
     *     "Tag" => (string) 负载均衡实例所属的业务组ID，不传则默认不修改
     *     "Remark" => (string) 负载均衡实例的备注信息，不传则默认不修改，限定字符长度：[0-255]
     *     "AccessLogConfig" => (object) [
     *         "Enabled" => (boolean) （应用型专用）是否开启访问日志记录功能
     *         "US3BucketName" => (string) （应用型专用）用于存储访问日志的bucket
     *         "US3TokenId" => (string) （应用型专用）上传访问日志到bucket所需的token
     *     ]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateLoadBalancerAttributeResponse
     * @throws UCloudException
     */
    public function updateLoadBalancerAttribute(UpdateLoadBalancerAttributeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateLoadBalancerAttributeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdatePolicy - 更新传统型负载均衡内容转发规则，包括转发规则后的服务节点
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/update_policy
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ULBId" => (string) 需要添加内容转发策略的传统型负载均衡实例ID
     *     "VServerId" => (string) 需要添加内容转发策略的VServer实例ID，只支持请求代理模式下，HTTP或HTTPS协议的CLB下的VServer
     *     "Match" => (string) 内容转发匹配字段
     *     "PolicyPriority" => (integer) 策略优先级，1-9999；只针对路径规则生效
     *     "DomainMatchMode" => (string) 内容转发规则中域名的匹配方式，默认与原本一致。枚举值：Regular，正则；Wildcard，泛域名
     *     "PolicyId" => (string) 传统型负载均衡转发规则的ID，当Type为Default时，可以不传或为空
     *     "BackendId" => (array<string>) 内容转发策略应用的后端资源实例的ID（CLB的后端节点Id），来源于 AllocateBackend 返回的 BackendId，不传表示更新转发节点为空
     *     "Type" => (string) 内容转发匹配字段的类型，枚举值：Domain -> 域名转发规则；Path -> 路径转发规则；Default -> 默认转发规则，不传默认值Domain
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdatePolicyResponse
     * @throws UCloudException
     */
    public function updatePolicy(UpdatePolicyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdatePolicyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateRuleAttribute - 更新应用型负载均衡监听器的一条转发规则的属性
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/update_rule_attribute
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "LoadBalancerId" => (string) 负载均衡实例的ID
     *     "ListenerId" => (string) 监听器的ID
     *     "RuleId" => (string) 转发规则的ID
     *     "RuleConditions" => (array<object>) [
     *         [
     *             "Type" => (string) 匹配条件类型。限定枚举值："Host"/"Path"；RuleConditions数组长度不为0时必填
     *             "HostConfig" => (object) [
     *                 "MatchMode" => (string) 匹配方式。限定枚举值："Regular"/"Wildcard"，默认值："Regular"
     *                 "Values" => (array<string>) 取值。暂时只支持数组长度为1；取值需符合相关匹配方式的条件；修改域名匹配时必填
     *             ]
     *             "PathConfig" => (object) [
     *                 "Values" => (array<string>) 取值。暂时只支持数组长度为1；取值需符合相关条件；修改路径匹配时必填
     *             ]
     *         ]
     *     ]
     *     "RuleActions" => (array<object>) [
     *         [
     *             "Type" => (string) 动作类型。限定枚举值："Forward"；RuleActions数组长度不为0时必填
     *             "ForwardConfig" => (object) [
     *                 "Targets" => (array<object>) [
     *                     [
     *                         "Id" => (string) 转发的后端服务节点的标识ID。限定在监听器的服务节点池里；数组长度可以是0；转发服务节点配置的数组长度不为0时，Id必填
     *                         "Weight" => (integer) 转发的后端服务节点的权重。仅监听器负载均衡算法是加权轮询是有效
     *                     ]
     *                 ]
     *             ]
     *             "Order" => (integer) 转发规则动作执行的顺序，取值为1~1000，按值从小到大执行动作。值不能为空，不能重复。Forward、FixedResponse 类型的动作不判断 Order，最后一个执行
     *             "InsertHeaderConfig" => (object) [
     *                 "Key" => (string) 插入的 header 字段名称，长度为 1~40 个字符，支持大小写字母 a~z、数字、下划线（_）和短划线（-）。头字段名称不能重复用于InsertHeader中。header 字段不能使用以下(此处判断大小写不敏感)x-real-ip、x-forwarded-for、x-forwarded-proto、x-forwarded-srcport、ucloud-alb-trace、connection、upgrade、content-length、transfer-encoding、keep-alive、te、host、cookie、remoteip、authority
     *                 "ValueType" => (string) 头字段内容类型。取值：UserDefined：用户指定。ReferenceHeader：引用用户请求头中的某一个字段。SystemDefined：系统定义。
     *                 "Value" => (string) 插入的 header 字段内容。ValueType 取值为 SystemDefined 时取值如下：ClientSrcPort：客户端端口。ClientSrcIp：客户端 IP 地址。Protocol：客户端请求的协议（HTTP 或 HTTPS)。RuleID：客户端请求命中的转发规则ID。ALBID：ALB ID。ALBPort：ALB 端口。ValueType 取值为 UserDefined 时：可以自定义头字段内容，限制长度为 1~128 个字符，只支持 ASCII 码值ch >= 32 && ch < 127范围内、不包括 $ 的可打印字符。ValueType 取值为 ReferenceHeader 时：可以引用请求头字段中的某一个字段，限制长度限制为 1~128 个字符，支持小写字母 a~z、数字、短划线（-）和下划线（_）。
     *             ]
     *             "RemoveHeaderConfig" => (object) [
     *                 "Key" => (string) 删除的 header 字段名称，目前只能删除以下几个默认配置的字段X-Real-IP、X-Forwarded-For、X-Forwarded-Proto、X-Forwarded-SrcPort
     *             ]
     *             "CorsConfig" => (object) [
     *                 "AllowOrigin" => (array<string>) 允许的访问来源列表。支持只配置一个元素*，或配置一个或多个值。单个值必须以http://或者https://开头，后边加一个正确的域名或一级泛域名。（例：http://*.test.abc.example.com）单个值可以不加端口，也可以指定端口，端口范围：1~65535。最多支持5个值
     *                 "AllowHeaders" => (array<string>) 允许跨域的 Header 列表。支持配置为*或配置一个或多个 value 值。单个 value 值只允许包含大小写字母、数字，不能以下划线（_）和短划线（-）开头或结尾，最大长度限制为 32 个字符。最多支持20个值
     *                 "ExposeHeaders" => (array<string>) 允许暴露的 Header 列表。支持配置为*或配置一个或多个 value 值。单个 value 值只允许包含大小写字母、数字，不能以下划线（_）和短划线（-）开头或结尾，最大长度限制为 32 个字符。最多支持20个值
     *                 "AllowMethods" => (array<string>) 选择跨域访问时允许的 HTTP 方法。取值：GET。POST。PUT。DELETE。HEAD。OPTIONS。PATCH。
     *                 "AllowCredentials" => (string) 是否允许携带凭证信息。取值：on：是。off：否。
     *                 "MaxAge" => (integer) 预检请求在浏览器的最大缓存时间，单位：秒。取值范围：-1~172800。
     *             ]
     *             "FixedResponseConfig" => (object) [
     *                 "HttpCode" => (integer) 返回的 HTTP 响应码，仅支持 2xx、4xx、5xx 数字，x 为任意数字。
     *                 "Content" => (string) 返回的固定内容。最大支持存储 1 KB，只支持 ASCII 码值ch >= 32 && ch < 127范围内、不包括 $ 的可打印字符。
     *             ]
     *         ]
     *     ]
     *     "Pass" => (boolean) 当转发的服务节点为空时，规则是否忽略。默认转发规则不可更改
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateRuleAttributeResponse
     * @throws UCloudException
     */
    public function updateRuleAttribute(UpdateRuleAttributeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateRuleAttributeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateSSLAttribute - 更新修改SSL的属性，如：修改SSLName
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/update_ssl_attribute
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SSLId" => (string) SSL的资源id
     *     "SSLName" => (string) SSL实例名称，不允许传空
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateSSLAttributeResponse
     * @throws UCloudException
     */
    public function updateSSLAttribute(UpdateSSLAttributeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateSSLAttributeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateSSLBinding - 将传统型或应用型负载均衡监听器绑定的证书更换为另一个证书，
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/update_ssl_binding
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "OldSSLId" => (string) 监听器实例绑定的旧的证书
     *     "NewSSLId" => (string) 监听器实例需要绑定的新的证书
     *     "LoadBalancerId" => (string) 所操作LB实例ID（仅LoadBalancerId传参时，将更换该LB所有原证书为OldSSLId的绑定关系；LoadBalancerId和ListenerId都不传参则将更新该项目下所有原证书为OldSSLId的绑定关系）（LB指CLB或ALB）
     *     "ListenerId" => (string) 所操作监听器实例ID（仅ListenerId传参时，将更换该监听器所有原证书为OldSSLId的绑定关系；LoadBalancerId和ListenerId都不传参则将更新该项目下所有原证书为OldSSLId的绑定关系；若LoadBalancerId与ListenerId皆有传参，则会强校验ULB与Vsserver的所属关系，将更换该ulb下vserver所绑定的OldSSLId为NewSSLId）（监听器指VServer或Listener）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateSSLBindingResponse
     * @throws UCloudException
     */
    public function updateSSLBinding(UpdateSSLBindingRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateSSLBindingResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateSecurityPolicy - 更新安全策略
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/update_security_policy
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SecurityPolicyId" => (string) 安全策略ID
     *     "SSLCiphers" => (array<string>) 加密套件，TLS最低版本和加密套件必须全不为空或全为空
     *     "TLSVersion" => (string) TLS最低版本，TLS最低版本和加密套件必须全不为空或全为空
     *     "SecurityPolicyName" => (string) 安全策略名称
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateSecurityPolicyResponse
     * @throws UCloudException
     */
    public function updateSecurityPolicy(UpdateSecurityPolicyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateSecurityPolicyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateTargetsAttribute - 更新应用型负载均衡监听器后端服务节点的属性
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/update_targets_attribute
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "LoadBalancerId" => (string) 负载均衡实例的ID
     *     "ListenerId" => (string) 监听器的ID
     *     "Targets" => (array<object>) [
     *         [
     *             "Id" => (string) 服务节点的标识ID。限定枚举值："UHost" / "UNI"/"UPM"/"IP"；要更新的Targets数组长度至少为1，不超过20个
     *             "Weight" => (integer) 服务节点的权重。限定取值：[1-100]，默认值1；仅在加权轮询算法时有效；要更新的Targets数组长度至少为1，不超过20个
     *             "Enabled" => (boolean) 服务节点是否启用。默认值true；要更新的Targets数组长度至少为1，不超过20个
     *             "IsBackup" => (boolean) 服务节点是否为备节点。默认值false；要更新的Targets数组长度至少为1，不超过20个
     *         ]
     *     ]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateTargetsAttributeResponse
     * @throws UCloudException
     */
    public function updateTargetsAttribute(UpdateTargetsAttributeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateTargetsAttributeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateULBAttribute - 更新CLB名字业务组备注等属性字段
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/update_ulb_attribute
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ULBId" => (string) CLB资源ID
     *     "Name" => (string) 名字，不传则默认不修改
     *     "Tag" => (string) 业务，不传则默认不修改
     *     "Remark" => (string) 备注，不传则默认不修改
     *     "EnableLog" => (integer) 日志开关，1代表开启日志，0代表关闭日志，传1时必须同时传BucketName，TokenName与TokenId二选一
     *     "BucketName" => (string) 设置用于存储ulb日志的bucket
     *     "TokenName" => (string) 用于指定上传到bucket所需的token，与TokenId选填其一即可
     *     "TokenId" => (string) 用于指定上传到bucket所需的token，与TokenName选填其一即可
     *     "IsWAFOn" => (string) 是否开启WAF。枚举类型：Yes，No，默认值为No
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateULBAttributeResponse
     * @throws UCloudException
     */
    public function updateULBAttribute(UpdateULBAttributeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateULBAttributeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateVServerAttribute - 更新传统型负载均衡VServer实例属性
     *
     * See also: https://docs.ucloud.cn/api/ulb-api/update_vserver_attribute
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ULBId" => (string) 传统型负载均衡实例ID
     *     "VServerId" => (string) 传统型负载均衡VServer实例ID
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
     *     "SecurityPolicyId" => (string) 安全策略组ID
     *     "EnableCompression" => (integer) 0:关闭 1:开启，用于数据压缩功能
     *     "ForwardPort" => (integer) 重定向端口，取值范围[0-65535]；默认值为0，代表关闭；仅HTTP协议支持开启重定向功能
     *     "EnableHTTP2" => (integer) 0:关闭 1:开启，用于开启http2功能；默认值为0
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateVServerAttributeResponse
     * @throws UCloudException
     */
    public function updateVServerAttribute(UpdateVServerAttributeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateVServerAttributeResponse($resp->toArray(), $resp->getRequestId());
    }
}
