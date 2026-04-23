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
namespace UCloud\UClickhouse;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\UClickhouse\Apis\CreateUClickhouseClusterRequest;
use UCloud\UClickhouse\Apis\CreateUClickhouseClusterResponse;
use UCloud\UClickhouse\Apis\DescribeUClickhouseClusterRequest;
use UCloud\UClickhouse\Apis\DescribeUClickhouseClusterResponse;
use UCloud\UClickhouse\Apis\DestroyUClickhouseClusterRequest;
use UCloud\UClickhouse\Apis\DestroyUClickhouseClusterResponse;
use UCloud\UClickhouse\Apis\ExpandUClickhouseClusterRequest;
use UCloud\UClickhouse\Apis\ExpandUClickhouseClusterResponse;
use UCloud\UClickhouse\Apis\GetUClickhouseClusterCreateOptionRequest;
use UCloud\UClickhouse\Apis\GetUClickhouseClusterCreateOptionResponse;
use UCloud\UClickhouse\Apis\ListUClickhouseClusterRequest;
use UCloud\UClickhouse\Apis\ListUClickhouseClusterResponse;
use UCloud\UClickhouse\Apis\ResizeUClickhouseClusterRequest;
use UCloud\UClickhouse\Apis\ResizeUClickhouseClusterResponse;
use UCloud\UClickhouse\Apis\RestartUClickhouseClusterServiceRequest;
use UCloud\UClickhouse\Apis\RestartUClickhouseClusterServiceResponse;

/**
 * This client is used to call actions of **UClickhouse** service
 */
class UClickhouseClient extends Client
{

    /**
     * CreateUClickhouseCluster - 创建UClickhouse集群
     *
     * See also: https://docs.ucloud.cn/api/uclickhouse-api/create_u_clickhouse_cluster
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ClickhouseMachineTypeId" => (string) 集群机型，可通过GetUClickhouseClusterCreateOption接口获取具体值
     *     "DataDiskType" => (string) 数据盘类型，可通过GetUClickhouseClusterCreateOption接口获取具体值
     *     "ClickhouseVersion" => (string) Clickhouse版本，可通过GetUClickhouseClusterCreateOption接口获取具体版本
     *     "VPCId" => (string) VPC ID
     *     "SubnetId" => (string) 子网ID
     *     "AdminPassword" => (string) 集群管理员密码，密码规则：1.密码长度限8-32个字符2.不能包含[A-Z],[a-z],[0-9]和[@#%^*+=_;:,?!&()-]之外的字符3.需要同时包含两项或以上（大写字母/小写字母/数字/特殊符号）
     *     "ShardCount" => (integer) 分片数量，若传递，则至少1个分片,默认值为1
     *     "ReplicateCount" => (integer) 副本数量，取值为1或2，1为单副本（非高可用），2为双副本（高可用），默认值为高可用（即为2）
     *     "DataDiskSize" => (integer) 数据盘大小，最小100，步长为50，默认值为100，单位GB
     *     "ChargeType" => (string) 付费类型，枚举值：Year（年付），Month（月付），Dynamic（时付），默认值为Month,月付
     *     "Quantity" => (integer) 购买时长，默认值为1。月付时，此参数传0，代表购买至月末
     *     "BackupId" => (string) 备份任务ID，从备份恢复时，该字段必传，此值为备份任务ID，可以从原集群备份任务列表（ListUClickhouseBackups）获取
     *     "ClusterName" => (string) 实例名称名称规则：1.长度为1-50位的字符2.不能包含_,中文,[A-Z],[a-z],[0-9]之外的非法字符，集群名称默认为clickhouse
     *     "IsZookeeperHA" => (boolean) 是否Zookeeper高可用，true为zookeeper高可用，false为非高可用，默认为true，高可用
     *     "IsSecGroup" => (string) 是否开启安全组，true为开启，false为不开启，默认为false，不开启安全组
     *     "IsMultiZone" => (string) 是否多可用区，默认为false
     *     "ZookeeperMachineTypeId" => (string) Zookeeper机型ID，IsZookeeperHA为true时，必传，可通过GetUClickhouseClusterCreateOption接口获取具体值
     *     "ZookeeperDataDiskType" => (string) Zookeeper数据盘类型，IsZookeeperHA为true时，必传，可通过GetUClickhouseClusterCreateOption接口获取具体值
     *     "ZookeeperDataDiskSize" => (string) Zookeeper数据盘大小，IsZookeeperHA为true时，必传，最小100，步长为50
     *     "SecGroupIds" => (string) 安全组ID，IsSecGroup为true时，必传
     *     "MultiZones" => (array<string>) 【数组】可用区名称，IsMultiZone为true时，必传，可通过ListUClickhouseAvailableZone获取支持的可用区
     *     "Labels" => (array<object>) [
     *         [
     *             "Key" => (string) 标签的key
     *             "Value" => (string) 标签的value
     *         ]
     *     ]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (object) 返回数据[
     *         "ClusterId" => (string) 集群ID
     *     ]
     * ]
     *
     * @return CreateUClickhouseClusterResponse
     * @throws UCloudException
     */
    public function createUClickhouseCluster(CreateUClickhouseClusterRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUClickhouseClusterResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUClickhouseCluster - 获取集群信息
     *
     * See also: https://docs.ucloud.cn/api/uclickhouse-api/describe_u_clickhouse_cluster
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ClusterId" => (string) 集群ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (object) 返回数据[
     *         "ZookeeperNodes" => (array<object>) Zookeeper节点列表，为空时，说明该集群没有zookeeper集群[
     *             [
     *                 "Zone" => (string) 可用区名称
     *                 "NodeId" => (string) 节点ID
     *                 "ClusterId" => (string) 集群ID
     *                 "NodeName" => (string) 节点名称
     *                 "CPU" => (integer) CPU
     *                 "Memory" => (integer) 内存
     *                 "SysDiskSize" => (integer) 系统盘大小
     *                 "SysDiskType" => (string) 系统盘类型
     *                 "DataDiskSize" => (integer) 数据盘大小
     *                 "DataDiskType" => (string) 数据盘类型
     *                 "CreateTimestamp" => (integer) 创建时间
     *                 "MachineType" => (string) 机型
     *                 "ZookeeperMyId" => (string) zookeeper的myid
     *                 "ServiceStatus" => (string) 服务状态：RUNNING（运行中）、STARTING（启动中）、STOPPED（已停止）、RESTARTING（重启中）
     *                 "ResourceId" => (string) 资源ID
     *             ]
     *         ]
     *         "ClickhouseNodes" => (array<object>) Clickhouse节点列表[
     *             [
     *                 "Zone" => (string) 可用区名称
     *                 "NodeId" => (string) 节点ID
     *                 "ClusterId" => (string) 集群ID
     *                 "NodeName" => (string) 节点名称
     *                 "CPU" => (integer) CPU大小
     *                 "Memory" => (integer) 内存，GB
     *                 "SysDiskSize" => (integer) 系统盘大小,GB
     *                 "SysDiskType" => (string) 系统盘类型
     *                 "DataDiskSize" => (integer) 数据盘大小,GB
     *                 "DataDiskType" => (string) 数据盘类型
     *                 "IPv4" => (string) ipv4
     *                 "CreateTimestamp" => (integer) 创建时间
     *                 "MachineType" => (string) 机型
     *                 "ShardGroup" => (string) 分片组
     *                 "ServiceStatus" => (string) 服务状态：RUNNING（运行中）、STARTING（启动中）、STOPPED（已停止）、RESTARTING（重启中）
     *                 "ResourceId" => (string) 资源ID
     *             ]
     *         ]
     *         "Payment" => (object) 支付信息[
     *             "CreateTimestamp" => (integer) 创建时间
     *             "ExpireTimestamp" => (integer) 过期时间
     *             "ChargeType" => (string) 支付类型
     *             "Price" => (integer) 价格
     *             "OriginalPrice" => (integer) 原始价格
     *             "ResourceId" => (string) 资源ID
     *         ]
     *         "Cluster" => (object) 集群信息[
     *             "ClusterId" => (string) 集群ID
     *             "TopOrganizationId" => (integer) 公司ID
     *             "OrganizationId" => (integer) 项目ID
     *             "ClusterName" => (string) 集群名称
     *             "VPCId" => (string) VPCID
     *             "SubnetId" => (string) 子网ID
     *             "ClickhouseVersion" => (string) 集群版本
     *             "ZookeeperVersion" => (string) Zookeeper版本
     *             "MachineType" => (string) 机型
     *             "Status" => (string) 集群状态：CREATING（创建中）、RUNNING（运行中）、RESIZING（变配中）、RESTARTING（重启中）、UPGRADING（升级中）、DESTROYING（销毁中）、DESTROYED（已删除）、CREATE_FAILED（创建失败）、RESTART_FAILED（重启失败）、DESTROY_FAILED（删除失败）、RESIZE_FAILED（变配失败）、BACKUP_RESTORING（备份恢复中）、BACKUP_RESTORE_FAILED（备份恢复失败）、EXPANDING（扩容中）、EXPAND_FAILED（扩容失败）
     *             "ShardCount" => (integer) 分片数
     *             "ReplicateCount" => (integer) 副本数
     *             "CreateTimestamp" => (integer) 集群创建时间
     *             "ClickhouseMachineTypeId" => (string) Clickhouse机型ID
     *             "ClickhouseMachineTypeName" => (string) Clickhouse机型名称
     *             "RegionId" => (integer) 地域ID
     *             "ZookeeperMachineTypeId" => (string) Zookeeper机型ID
     *             "ZookeeperMachineTypeName" => (string) Zookeeper机型名称
     *             "ClickhouseDataDiskType" => (string) Clickhouse数据盘类型
     *             "ClickhouseDataDiskSize" => (integer) Clickhouse数据盘大小
     *             "ZookeeperDataDiskType" => (string) Zookeeper数据盘类型
     *             "ZookeeperDataDiskSize" => (integer) Zookeeper数据盘大小
     *             "ClickhouseNodeCPU" => (integer) Clickhouse节点CPU
     *             "ClickhouseNodeMemory" => (integer) Clickhouse内存
     *             "ZookeeperNodeCPU" => (integer) Zookeeper节点CPU
     *             "ZookeeperNodeMemory" => (integer) Zookeeper节点内存
     *             "IsZookeeperHA" => (string) Zookeeper是否高可用
     *             "IsSecgroup" => (string) 实例是否开启安全组
     *             "IsBackup" => (string) 实例是否开启备份
     *             "IsTieredStorage" => (string) 实例是否开启冷热分层
     *             "MultiZones" => (array<string>) 实例所在可用区
     *             "ExpireTimestamp" => (number) 实例过期时间
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUClickhouseClusterResponse
     * @throws UCloudException
     */
    public function describeUClickhouseCluster(DescribeUClickhouseClusterRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUClickhouseClusterResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DestroyUClickhouseCluster - 删除CK集群
     *
     * See also: https://docs.ucloud.cn/api/uclickhouse-api/destroy_u_clickhouse_cluster
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ClusterId" => (string) 集群ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DestroyUClickhouseClusterResponse
     * @throws UCloudException
     */
    public function destroyUClickhouseCluster(DestroyUClickhouseClusterRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DestroyUClickhouseClusterResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ExpandUClickhouseCluster - 集群水平扩容
     *
     * See also: https://docs.ucloud.cn/api/uclickhouse-api/expand_u_clickhouse_cluster
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ClusterId" => (string) 集群ID
     *     "TotalNodeCount" => (integer) 扩容后集群的节点数量，集群为高可用时，需要传入偶数个节点
     *     "SyncNodeId" => (string) 水平扩容时，选择某一个原节点的ID，用于同步表结构/用户信息。不传递时，表示不同步表结构/用户信息，仅水平扩容节点数量
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ExpandUClickhouseClusterResponse
     * @throws UCloudException
     */
    public function expandUClickhouseCluster(ExpandUClickhouseClusterRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ExpandUClickhouseClusterResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUClickhouseClusterCreateOption - 获取Clickhouse的创建配置项
     *
     * See also: https://docs.ucloud.cn/api/uclickhouse-api/get_u_clickhouse_cluster_create_option
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (object) 数据[
     *         "ClickhouseVersions" => (array<object>) 支持的CK版本[
     *             [
     *                 "Version" => (string) 版本号
     *                 "VersionName" => (string) 版本名称
     *             ]
     *         ]
     *         "ClickhouseMachineTypes" => (array<object>) 支持的CK机型[
     *             [
     *                 "ClickhouseMachineTypeName" => (string) CK机型名称
     *                 "ClickhouseMachineTypeOptions" => (array<object>) CK机型可选项[
     *                     [
     *                         "ClickhouseMachineTypeId" => (string) Clickhouse机型ID
     *                         "MachineType" => (string) 机型
     *                         "CPU" => (integer) CPU大小
     *                         "Memory" => (integer) 内存大小，GB
     *                         "DataDisks" => (array<object>) 数据盘列表[
     *                             [
     *                                 "DiskType" => (string) 磁盘类型
     *                                 "MinDiskSize" => (integer) 最小值，GB
     *                                 "MaxDiskSize" => (integer) 最大值，GB
     *                                 "DefaultDataDiskSize" => (integer) 默认大小，GB
     *                                 "Step" => (integer) 步长，GB
     *                             ]
     *                         ]
     *                         "NodeCounts" => (array<integer>) 允许创建的节点个数
     *                     ]
     *                 ]
     *                 "IsSecgroupMachineType" => (string) 机型是否支持安全组
     *             ]
     *         ]
     *         "MaxNodeCount" => (integer) 实例可创建的最大节点数量
     *         "ZookeeperMachineTypes" => (array<object>) 支持的Zookeeper机型[
     *             [
     *                 "ClickhouseMachineTypeName" => (string) CK机型名称
     *                 "ClickhouseMachineTypeOptions" => (array<object>) CK机型可选项[
     *                     [
     *                         "ClickhouseMachineTypeId" => (string) Clickhouse机型ID
     *                         "MachineType" => (string) 机型
     *                         "CPU" => (integer) CPU大小
     *                         "Memory" => (integer) 内存大小，GB
     *                         "DataDisks" => (array<object>) 数据盘列表[
     *                             [
     *                                 "DiskType" => (string) 磁盘类型
     *                                 "MinDiskSize" => (integer) 最小值，GB
     *                                 "MaxDiskSize" => (integer) 最大值，GB
     *                                 "DefaultDataDiskSize" => (integer) 默认大小，GB
     *                                 "Step" => (integer) 步长，GB
     *                             ]
     *                         ]
     *                         "NodeCounts" => (array<integer>) 允许创建的节点个数
     *                     ]
     *                 ]
     *                 "IsSecgroupMachineType" => (string) 机型是否支持安全组
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return GetUClickhouseClusterCreateOptionResponse
     * @throws UCloudException
     */
    public function getUClickhouseClusterCreateOption(GetUClickhouseClusterCreateOptionRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUClickhouseClusterCreateOptionResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUClickhouseCluster - 获取UClickhouse集群列表
     *
     * See also: https://docs.ucloud.cn/api/uclickhouse-api/list_u_clickhouse_cluster
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
     *     "Data" => (object) 返回数据[
     *         "Clusters" => (object) 集群列表[
     *             "ClusterId" => (string) 集群ID
     *             "TopOrganizationId" => (integer) 公司ID
     *             "OrganizationId" => (integer) 项目ID
     *             "ClusterName" => (string) 集群名称
     *             "VPCId" => (string) VPCID
     *             "SubnetId" => (string) 子网ID
     *             "ClickhouseVersion" => (string) 集群版本
     *             "ZookeeperVersion" => (string) Zookeeper版本
     *             "MachineType" => (string) 机型
     *             "Status" => (string) 集群状态：CREATING（创建中）、RUNNING（运行中）、RESIZING（变配中）、RESTARTING（重启中）、UPGRADING（升级中）、DESTROYING（销毁中）、DESTROYED（已删除）、CREATE_FAILED（创建失败）、RESTART_FAILED（重启失败）、DESTROY_FAILED（删除失败）、RESIZE_FAILED（变配失败）、BACKUP_RESTORING（备份恢复中）、BACKUP_RESTORE_FAILED（备份恢复失败）、EXPANDING（扩容中）、EXPAND_FAILED（扩容失败）
     *             "ShardCount" => (integer) 分片数
     *             "ReplicateCount" => (integer) 副本数
     *             "CreateTimestamp" => (integer) 集群创建时间
     *             "ClickhouseMachineTypeId" => (string) Clickhouse机型ID
     *             "ClickhouseMachineTypeName" => (string) Clickhouse机型名称
     *             "RegionId" => (integer) 地域ID
     *             "ZookeeperMachineTypeId" => (string) Zookeeper机型ID
     *             "ZookeeperMachineTypeName" => (string) Zookeeper机型名称
     *             "ClickhouseDataDiskType" => (string) Clickhouse数据盘类型
     *             "ClickhouseDataDiskSize" => (integer) Clickhouse数据盘大小
     *             "ZookeeperDataDiskType" => (string) Zookeeper数据盘类型
     *             "ZookeeperDataDiskSize" => (integer) Zookeeper数据盘大小
     *             "ClickhouseNodeCPU" => (integer) Clickhouse节点CPU
     *             "ClickhouseNodeMemory" => (integer) Clickhouse内存
     *             "ZookeeperNodeCPU" => (integer) Zookeeper节点CPU
     *             "ZookeeperNodeMemory" => (integer) Zookeeper节点内存
     *             "IsZookeeperHA" => (string) Zookeeper是否高可用
     *             "IsSecgroup" => (string) 实例是否开启安全组
     *             "IsBackup" => (string) 实例是否开启备份
     *             "IsTieredStorage" => (string) 实例是否开启冷热分层
     *             "MultiZones" => (array<string>) 实例所在可用区
     *             "ExpireTimestamp" => (number) 实例过期时间
     *         ]
     *         "TotalCount" => (integer) 集群总数
     *     ]
     * ]
     *
     * @return ListUClickhouseClusterResponse
     * @throws UCloudException
     */
    public function listUClickhouseCluster(ListUClickhouseClusterRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUClickhouseClusterResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ResizeUClickhouseCluster - 集群改配
     *
     * See also: https://docs.ucloud.cn/api/uclickhouse-api/resize_u_clickhouse_cluster
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ClusterId" => (string) 集群ID
     *     "TargetMachineTypeId" => (string) 目标机型ID，可通过GetUClickhouseClusterCreateOption接口获取具体值，与TargetDataDiskSize不能同时为空
     *     "TargetDataDiskSize" => (integer) 目标磁盘大小，单位GB，只能扩容，与TargetMachineTypeId不能同时为空
     *     "IsZooKeeperNode" => (boolean) 是否为zookeeper节点，为true时表示升级zookeeper节点规格，为false时表示升级clickhouse节点规格，默认为false
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ResizeUClickhouseClusterResponse
     * @throws UCloudException
     */
    public function resizeUClickhouseCluster(ResizeUClickhouseClusterRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ResizeUClickhouseClusterResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * RestartUClickhouseClusterService - 重启集群的UClickhouse服务
     *
     * See also: https://docs.ucloud.cn/api/uclickhouse-api/restart_u_clickhouse_cluster_service
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ClusterId" => (string) 集群ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return RestartUClickhouseClusterServiceResponse
     * @throws UCloudException
     */
    public function restartUClickhouseClusterService(RestartUClickhouseClusterServiceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RestartUClickhouseClusterServiceResponse($resp->toArray(), $resp->getRequestId());
    }
}
