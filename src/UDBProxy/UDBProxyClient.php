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
namespace UCloud\UDBProxy;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\UDBProxy\Apis\DescribeUDBProxyRequest;
use UCloud\UDBProxy\Apis\DescribeUDBProxyResponse;
use UCloud\UDBProxy\Apis\ListUDBProxyClientRequest;
use UCloud\UDBProxy\Apis\ListUDBProxyClientResponse;
use UCloud\UDBProxy\Apis\ListUDBProxyInstanceByDBRequest;
use UCloud\UDBProxy\Apis\ListUDBProxyInstanceByDBResponse;

/**
 * This client is used to call actions of **UDBProxy** service
 */
class UDBProxyClient extends Client
{

    /**
     * DescribeUDBProxy - 获取UDB代理服务详细信息
     *
     * See also: https://docs.ucloud.cn/api/udbproxy-api/describe_udb_proxy
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UDBProxyID" => (string) 读写分离ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UDBProxyID" => (string) UDBProxy实例ID
     *     "UDBProxyIP" => (string) UDB代理服务IP
     *     "UDBProxyPort" => (integer) UDB代理服务端口
     *     "State" => (string) 状态
     *     "CreateTime" => (integer) 创建时间
     *     "ModifyTime" => (integer) 修改时间
     *     "ReadWeightMode" => (integer) 读权重模式:1-主节点模式;2-节点均衡模式;3-从节点均衡(排除主节点);5-用户自定义模式
     *     "CPUCores" => (integer) cpu核数
     *     "Memory" => (integer) 内存
     *     "NodeCount" => (integer) 集群实例节点数
     *     "ZoneId" => (integer) 可用区id
     *     "Name" => (string) 名称
     *     "MaxConnection" => (integer) UDB代理服务最大连接数
     *     "DelayThreshold" => (integer) 延迟阈值(单位s)
     *     "UDBReplicas" => (array<object>) UDB集群数据[
     *         [
     *             "ID" => (string) 数据库ID
     *             "IP" => (string) 数据库IP
     *             "Port" => (integer) 数据库服务端口
     *             "ReadWeight" => (integer) 读权重
     *             "State" => (string) 状态
     *             "Role" => (string) 角色[master-主库，slave-从库]
     *             "CreateTime" => (integer) 创建时间
     *             "ModifyTime" => (integer) 修改时间
     *             "JoinState" => (boolean) 是否加入代理服务(true:加入，false:未加入)
     *             "Name" => (string) 数据库名称
     *         ]
     *     ]
     *     "Nodes" => (array<object>) 集群实例服务节点数据[
     *         [
     *             "ID" => (string) 服务节点id
     *             "State" => (string) 服务节点状态
     *         ]
     *     ]
     *     "SQLLimitCount" => (integer) sql限流数量
     *     "SQLRouterCount" => (integer) sql路由数量
     *     "InstanceVersion" => (string) 实例版本
     *     "EnableTransSplit" => (integer) 是否启用事务拆分(1：启用事务拆分，2:关闭事务拆分)
     *     "PrivateDomainInfo" => (object) 代理实例的内网域名及其开关状态，含域名地址、域名开关、域名数据源指向[
     *         "PrivateDomain" => (string) 实例的内网域名地址，形如 xxx.ucloudcs.com；未开通内网域名时为空字符串
     *         "EnablePrivateDomain" => (integer) 内网域名是否已开启：1 已开启，2 已关闭；未开通内网域名时返回 2
     *         "EnableConnectToDB" => (integer) 内网域名指向的数据源：1 指向主库（可直连数据库），2 指向代理（经 UDBProxy访问）；未开通时返回 2
     *     ]
     * ]
     *
     * @return DescribeUDBProxyResponse
     * @throws UCloudException
     */
    public function describeUDBProxy(DescribeUDBProxyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDBProxyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUDBProxyClient - 查询代理客户端连接IP信息(实时）
     *
     * See also: https://docs.ucloud.cn/api/udbproxy-api/list_udb_proxy_client
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UDBProxyID" => (string) 代理ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UDBProxyID" => (string) 代理ID
     *     "NodeClientInfos" => (array<object>) 代理节点客户端IP连接信息[
     *         [
     *             "Records" => (array<object>) 客户端IP连接信息[
     *                 [
     *                     "ID" => (integer) 当前连接DB进程ID
     *                     "User" => (string) 启动这个线程的用户
     *                     "Host" => (string) 代理连接DB地址
     *                     "DB" => (string) 当前执行的命令是在哪一个数据库上。如果没有指定数据库，则该值为 NULL
     *                     "Command" => (string) 显示当前连接的执行的命令
     *                     "Time" => (integer) 表示该线程处于当前状态的时间
     *                     "State" => (string) 线程的状态，和 Command 对应
     *                     "Info" => (string) 一般记录的是线程执行的语句
     *                     "ClientHost" => (string) 客户端来源IP地址
     *                     "DBID" => (string) 数据库资源ID
     *                     "Role" => (string) 数据库角色(主库/从库)
     *                 ]
     *             ]
     *             "ID" => (string) 代理节点ID
     *             "IP" => (string) 代理节点IP
     *         ]
     *     ]
     * ]
     *
     * @return ListUDBProxyClientResponse
     * @throws UCloudException
     */
    public function listUDBProxyClient(ListUDBProxyClientRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUDBProxyClientResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUDBProxyInstanceByDB - 查询DB启用代理数据
     *
     * See also: https://docs.ucloud.cn/api/udbproxy-api/list_udb_proxy_instance_by_db
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "DBID" => (string) 数据库DB资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UDBProxyBaseItems" => (array<object>) 代理列表数据[
     *         [
     *             "ReadWeightMode" => (integer) 读权重模式:1-主节点模式;2-节点均衡模式;3-从节点均衡(排除主节点);5-用户自定义模式
     *             "CreateTime" => (integer) 创建时间
     *             "ID" => (string) 代理ID
     *             "IP" => (string) 代理IP
     *             "Port" => (integer) 代理端口
     *             "State" => (string) 状态
     *             "ZoneID" => (integer) 可用区ID
     *             "NodeCount" => (integer) 代理节点数
     *             "CPUCores" => (integer) 单个代理节点CPU核数
     *             "Memory" => (integer) 单个代理内存
     *             "Name" => (string) 代理名称
     *             "InstanceVersion" => (string) 实例版本
     *             "BaseDBDataArr" => (array<object>) 加入代理DB信息[
     *                 [
     *                     "ID" => (string) 数据库ID
     *                     "Name" => (string) 数据库名称
     *                     "ReadWeight" => (integer) 权重
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return ListUDBProxyInstanceByDBResponse
     * @throws UCloudException
     */
    public function listUDBProxyInstanceByDB(ListUDBProxyInstanceByDBRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUDBProxyInstanceByDBResponse($resp->toArray(), $resp->getRequestId());
    }
}
