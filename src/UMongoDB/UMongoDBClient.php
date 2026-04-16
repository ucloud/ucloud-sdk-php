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
namespace UCloud\UMongoDB;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\UMongoDB\Apis\BackupUMongoDBClusterRequest;
use UCloud\UMongoDB\Apis\BackupUMongoDBClusterResponse;
use UCloud\UMongoDB\Apis\BackupUMongoDBLogRequest;
use UCloud\UMongoDB\Apis\BackupUMongoDBLogResponse;
use UCloud\UMongoDB\Apis\CreateUMongoDBConfigTemplateRequest;
use UCloud\UMongoDB\Apis\CreateUMongoDBConfigTemplateResponse;
use UCloud\UMongoDB\Apis\CreateUMongoDBReplSetRequest;
use UCloud\UMongoDB\Apis\CreateUMongoDBReplSetResponse;
use UCloud\UMongoDB\Apis\CreateUMongoDBShardedClusterRequest;
use UCloud\UMongoDB\Apis\CreateUMongoDBShardedClusterResponse;
use UCloud\UMongoDB\Apis\DescribeUMongoDBBackupURLRequest;
use UCloud\UMongoDB\Apis\DescribeUMongoDBBackupURLResponse;
use UCloud\UMongoDB\Apis\DescribeUMongoDBInstanceRequest;
use UCloud\UMongoDB\Apis\DescribeUMongoDBInstanceResponse;
use UCloud\UMongoDB\Apis\GetUMongoDBBackupParamRequest;
use UCloud\UMongoDB\Apis\GetUMongoDBBackupParamResponse;
use UCloud\UMongoDB\Apis\GetUMongoDBCfgTempItemRequest;
use UCloud\UMongoDB\Apis\GetUMongoDBCfgTempItemResponse;
use UCloud\UMongoDB\Apis\GetUMongoDBLogRequest;
use UCloud\UMongoDB\Apis\GetUMongoDBLogResponse;
use UCloud\UMongoDB\Apis\GetUMongoDBRecoverTimeRangeRequest;
use UCloud\UMongoDB\Apis\GetUMongoDBRecoverTimeRangeResponse;
use UCloud\UMongoDB\Apis\ListUMongoDBBackupRequest;
use UCloud\UMongoDB\Apis\ListUMongoDBBackupResponse;
use UCloud\UMongoDB\Apis\ListUMongoDBConfigTemplateRequest;
use UCloud\UMongoDB\Apis\ListUMongoDBConfigTemplateResponse;
use UCloud\UMongoDB\Apis\ListUMongoDBInstancesRequest;
use UCloud\UMongoDB\Apis\ListUMongoDBInstancesResponse;
use UCloud\UMongoDB\Apis\ListUMongoDBLogPackageRequest;
use UCloud\UMongoDB\Apis\ListUMongoDBLogPackageResponse;
use UCloud\UMongoDB\Apis\ListUMongoDBMachineSpecRequest;
use UCloud\UMongoDB\Apis\ListUMongoDBMachineSpecResponse;
use UCloud\UMongoDB\Apis\ListUMongoDBMachineTypeRequest;
use UCloud\UMongoDB\Apis\ListUMongoDBMachineTypeResponse;
use UCloud\UMongoDB\Apis\ListUMongoDBVersionRequest;
use UCloud\UMongoDB\Apis\ListUMongoDBVersionResponse;
use UCloud\UMongoDB\Apis\ModifyUMongoDBAdminPasswordRequest;
use UCloud\UMongoDB\Apis\ModifyUMongoDBAdminPasswordResponse;
use UCloud\UMongoDB\Apis\ModifyUMongoDBAttributeRequest;
use UCloud\UMongoDB\Apis\ModifyUMongoDBAttributeResponse;
use UCloud\UMongoDB\Apis\ModifyUMongoDBBackupParamRequest;
use UCloud\UMongoDB\Apis\ModifyUMongoDBBackupParamResponse;
use UCloud\UMongoDB\Apis\ResizeUMongoDBInstanceRequest;
use UCloud\UMongoDB\Apis\ResizeUMongoDBInstanceResponse;
use UCloud\UMongoDB\Apis\RestartUMongoDBClusterRequest;
use UCloud\UMongoDB\Apis\RestartUMongoDBClusterResponse;
use UCloud\UMongoDB\Apis\StartUMongoDBClusterRequest;
use UCloud\UMongoDB\Apis\StartUMongoDBClusterResponse;
use UCloud\UMongoDB\Apis\StopUMongoDBClusterRequest;
use UCloud\UMongoDB\Apis\StopUMongoDBClusterResponse;

/**
 * This client is used to call actions of **UMongoDB** service
 */
class UMongoDBClient extends Client
{

    /**
     * BackupUMongoDBCluster - 备份集群数据库
     *
     * See also: https://docs.ucloud.cn/api/umongodb-api/backup_umon_go_db_cluster
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ClusterId" => (string) 实例ID
     *     "BackupName" => (string) 备份名称
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "BackupId" => (string) 备份ID
     *     "ClusterId" => (string) 实例ID
     * ]
     *
     * @return BackupUMongoDBClusterResponse
     * @throws UCloudException
     */
    public function backupUMongoDBCluster(BackupUMongoDBClusterRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new BackupUMongoDBClusterResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * BackupUMongoDBLog - 日志打包
     *
     * See also: https://docs.ucloud.cn/api/umongodb-api/backup_umon_go_db_log
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Name" => (string) 日志包名称
     *     "ClusterId" => (string) 集群id
     *     "NodeId" => (string) 节点id, 慢日志 mongos 节点不可选
     *     "Begin" => (integer) 日志开始时间,最早为7x24小时前
     *     "End" => (integer) 日志结束时间,时间区间不能超过24小时
     *     "LogType" => (string) 日志类型:SlowLog,ErrorLog
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return BackupUMongoDBLogResponse
     * @throws UCloudException
     */
    public function backupUMongoDBLog(BackupUMongoDBLogRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new BackupUMongoDBLogResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUMongoDBConfigTemplate - 创建配置模板
     *
     * See also: https://docs.ucloud.cn/api/umongodb-api/create_umon_go_db_config_template
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "TemplateName" => (string) 模板名称
     *     "ClusterType" => (string) 集群类型
     *     "MongodbVersion" => (string) mongo版本
     *     "BaseTemplateId" => (string) 基础模板
     *     "Description" => (string) 模板描述
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TemplateId" => (string) 模板Id
     * ]
     *
     * @return CreateUMongoDBConfigTemplateResponse
     * @throws UCloudException
     */
    public function createUMongoDBConfigTemplate(CreateUMongoDBConfigTemplateRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUMongoDBConfigTemplateResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUMongoDBReplSet - 创建一个Mongodb副本集群
     *
     * See also: https://docs.ucloud.cn/api/umongodb-api/create_umon_go_db_repl_set
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Name" => (string) 副本集实例名称，至少6位
     *     "DBVersion" => (string) 副本集的Mongodb的版本，例如MongoDB 3.6, MongoDB 4.2
     *     "AdminPassword" => (string) 管理员密码
     *     "DiskSpace" => (integer) 磁盘空间 (GB)：取值范围 20~32000，仅支持 10 的整数倍
     *     "MachineTypeId" => (string) 机型配置,如 o.mongo2m.medium
     *     "NodeCount" => (integer) 副本集节点数量：仅支持 3、5、7 奇数节点
     *     "ListenPort" => (integer) mongo服务端口
     *     "SubnetId" => (string) 子网ID
     *     "VPCId" => (string) VPC的ID
     *     "Tag" => (string) 实例所在的业务组名称
     *     "ChargeType" => (string) 付费方式：Year， Month， Dynamic，Trial，默认: Month
     *     "Quantity" => (integer) 购买时长，默认值1
     *     "CrossZones" => (array<string>) 跨可用区列表
     *     "Labels" => (array<object>) [
     *         [
     *             "Key" => (string) 用户资源标签的键值
     *             "Value" => (string) 用户资源标签值
     *         ]
     *     ]
     *     "SecGroupId" => (array<object>) [
     *         [
     *             "Id" => (string) 安全组 ID。至多可以同时绑定5个安全组。
     *             "Priority" => (integer) 安全组优先级。取值范围[1, 5]
     *         ]
     *     ]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return CreateUMongoDBReplSetResponse
     * @throws UCloudException
     */
    public function createUMongoDBReplSet(CreateUMongoDBReplSetRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUMongoDBReplSetResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUMongoDBShardedCluster - 创建一个Mongodb分片集群
     *
     * See also: https://docs.ucloud.cn/api/umongodb-api/create_umon_go_db_sharded_cluster
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Name" => (string) 副本集实例名称，至少6位
     *     "DBVersion" => (string) 副本集的Mongodb的版本，例如MongoDB 3.6, MongoDB 4.2
     *     "AdminPassword" => (string) 管理员密码
     *     "MongosNodeCount" => (integer) Mongos节点数量
     *     "ShardCount" => (integer) 分片数量
     *     "NodeCount" => (integer) 每个分片中节点数量
     *     "DiskSpace" => (integer) 数据节点磁盘空间(GB):取值范围 20~32000，仅支持 10 的整数倍
     *     "MachineTypeId" => (string) 数据节点机型配置,如 o.mongo2m.medium
     *     "SubnetId" => (string) 子网ID
     *     "VPCId" => (string) VPC的ID
     *     "Tag" => (string) 实例所在的业务组名称
     *     "ChargeType" => (string) 付费方式：Year， Month， Dynamic，Trial，默认: Month
     *     "Quantity" => (integer) 购买时长，默认值1
     *     "ListenPort" => (integer) mongo服务端口
     *     "TemplateId" => (string) 参数配置模版id
     *     "MongosMachineTypeId" => (string) Mongos节点机型配置
     *     "Labels" => (array<object>) [
     *         [
     *             "Key" => (string) 用户资源标签的键值
     *             "Value" => (string) 用户资源标签值
     *         ]
     *     ]
     *     "SecGroupId" => (array<object>) [
     *         [
     *             "Id" => (string) 安全组 ID。至多可以同时绑定5个安全组。
     *             "Priority" => (integer) 安全组优先级。取值范围[1, 5]
     *         ]
     *     ]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return CreateUMongoDBShardedClusterResponse
     * @throws UCloudException
     */
    public function createUMongoDBShardedCluster(CreateUMongoDBShardedClusterRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUMongoDBShardedClusterResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUMongoDBBackupURL - 获取实例备份下载链接
     *
     * See also: https://docs.ucloud.cn/api/umongodb-api/describe_umon_go_db_backup_url
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ClusterId" => (string) 集群ID
     *     "BackupId" => (string) 文件备份ID
     *     "PackageId" => (integer) 打包ID
     *     "ValidTime" => (integer) 备份链接过期时间（单位秒）
     *     "Category" => (string) 类型:如 oplog
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "InternetAddress" => (string) 备份文件公网地址
     *     "IntranetAddress" => (string) 备份文件内网地址
     * ]
     *
     * @return DescribeUMongoDBBackupURLResponse
     * @throws UCloudException
     */
    public function describeUMongoDBBackupURL(DescribeUMongoDBBackupURLRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUMongoDBBackupURLResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUMongoDBInstance - 描述MongoDB实例
     *
     * See also: https://docs.ucloud.cn/api/umongodb-api/describe_umon_go_db_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ClusterId" => (string) 实例资源ID
     *     "ClusterType" => (string) 集群类型，ReplicaSet：副本集，SharedCluster：分片集群
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ClusterInfo" => (object) 副本集信息[
     *         "Zone" => (string) 可用区
     *         "ZoneId" => (integer)
     *         "ClusterType" => (string) 集群类型，ReplicaSet :副本集，SharedCluster：分片集
     *         "ClusterId" => (string) 集群ID
     *         "InstanceName" => (string) 实例名称
     *         "State" => (string) 副本集/分片集群状态标记 Initing：初始化中，InitFailed：安装失败，Starting：启动中，StartFailed：启动失败，Running：运行，Stopping：关闭中，Stopped：已关闭, StopFailed：关闭失败，Deleting：删除中，Deleted：已删除，DeleteFailed：删除失败，Restarting：重启中，RestartFailed：重启失败,Upgrading: 升降级中，UpgradeFailed: 升降级失败,Switching:主备切换中，UpdatingSSL：修改SSL中，UpdateSSLFail：修改SSL失败
     *         "DBVersion" => (string) 副本集的Mongodb的版本
     *         "DiskSpace" => (integer) 磁盘空间(GB), 默认根据配置机型
     *         "MachineTypeId" => (string) 计算规格
     *         "CreateTime" => (integer) DB实例创建时间
     *         "ConfigReplicaInfo" => (object) ConfigSrv信息[
     *             "ReplicaId" => (string) 副本集ID
     *             "ClusterId" => (string) 集群ID
     *             "ReplicaType" => (string) 副本类型,ConfigRepl或者DataRepl
     *             "State" => (string) 副本集/分片集群状态标记 Initing：初始化中，InitFailed：安装失败，Starting：启动中，StartFailed：启动失败，Running：运行，Stopping：关闭中，Stopped：已关闭, StopFailed：关闭失败，Deleting：删除中，Deleted：已删除，DeleteFailed：删除失败，Restarting：重启中，RestartFailed：重启失败。
     *             "MachineType" => (string) 机器类型
     *             "MachineTypeId" => (string) 机器类型Id
     *             "IsolationGroupId" => (string) 隔离组ID
     *             "NodeInfos" => (array<object>) 副本集下的节点信息[
     *                 [
     *                     "Zone" => (string) 可用区
     *                     "ZoneId" => (integer) 可用区ID
     *                     "NodeId" => (string) 节点ID
     *                     "NodeRole" => (string) 节点角色，Primary/Secondary/Arbiter/Startup等等
     *                     "NodeType" => (string) 节点类型
     *                     "State" => (string) 副本集/分片集群状态标记 Initing：初始化中，InitFailed：安装失败，Starting：启动中，StartFailed：启动失败，Running：运行，Stopping：关闭中，Stopped：已关闭, StopFailed：关闭失败，Deleting：删除中，Deleted：已删除，DeleteFailed：删除失败，Restarting：重启中，RestartFailed：重启失败。
     *                     "DBVersion" => (string) 副本集的Mongodb的版本
     *                     "ClusterId" => (string) 节点所属副本集ID
     *                     "VirtualClusterId" => (string) 虚拟节点ID
     *                     "MachineType" => (string) 机型信息
     *                     "MachineTypeId" => (string) 机型信息ID
     *                     "CreateTime" => (integer) DB实例创建时间
     *                     "DataDisk" => (object) 数据盘信息[
     *                         "DiskId" => (string) 磁盘id
     *                         "DiskSize" => (integer) 磁盘容量单位GB
     *                     ]
     *                     "SysDisk" => (object) 系统盘信息[
     *                         "DiskId" => (string) 磁盘id
     *                         "DiskSize" => (integer) 磁盘容量单位GB
     *                     ]
     *                 ]
     *             ]
     *             "NodeCount" => (integer) 副本集下的节点数量
     *             "CreateTime" => (integer) 副本集创建时间
     *             "DeleteTime" => (integer) 副本集删除时间
     *             "ModifyTime" => (integer) 副本集修改时间
     *         ]
     *         "DataReplicaInfos" => (array<object>) 数据副本信息 [
     *             [
     *                 "ReplicaId" => (string) 副本集ID
     *                 "ClusterId" => (string) 集群ID
     *                 "ReplicaType" => (string) 副本类型,ConfigRepl或者DataRepl
     *                 "State" => (string) 副本集/分片集群状态标记 Initing：初始化中，InitFailed：安装失败，Starting：启动中，StartFailed：启动失败，Running：运行，Stopping：关闭中，Stopped：已关闭, StopFailed：关闭失败，Deleting：删除中，Deleted：已删除，DeleteFailed：删除失败，Restarting：重启中，RestartFailed：重启失败。
     *                 "MachineType" => (string) 机器类型
     *                 "MachineTypeId" => (string) 机器类型Id
     *                 "IsolationGroupId" => (string) 隔离组ID
     *                 "NodeInfos" => (array<object>) 副本集下的节点信息[
     *                     [
     *                         "Zone" => (string) 可用区
     *                         "ZoneId" => (integer) 可用区ID
     *                         "NodeId" => (string) 节点ID
     *                         "NodeRole" => (string) 节点角色，Primary/Secondary/Arbiter/Startup等等
     *                         "NodeType" => (string) 节点类型
     *                         "State" => (string) 副本集/分片集群状态标记 Initing：初始化中，InitFailed：安装失败，Starting：启动中，StartFailed：启动失败，Running：运行，Stopping：关闭中，Stopped：已关闭, StopFailed：关闭失败，Deleting：删除中，Deleted：已删除，DeleteFailed：删除失败，Restarting：重启中，RestartFailed：重启失败。
     *                         "DBVersion" => (string) 副本集的Mongodb的版本
     *                         "ClusterId" => (string) 节点所属副本集ID
     *                         "VirtualClusterId" => (string) 虚拟节点ID
     *                         "MachineType" => (string) 机型信息
     *                         "MachineTypeId" => (string) 机型信息ID
     *                         "CreateTime" => (integer) DB实例创建时间
     *                         "DataDisk" => (object) 数据盘信息[
     *                             "DiskId" => (string) 磁盘id
     *                             "DiskSize" => (integer) 磁盘容量单位GB
     *                         ]
     *                         "SysDisk" => (object) 系统盘信息[
     *                             "DiskId" => (string) 磁盘id
     *                             "DiskSize" => (integer) 磁盘容量单位GB
     *                         ]
     *                     ]
     *                 ]
     *                 "NodeCount" => (integer) 副本集下的节点数量
     *                 "CreateTime" => (integer) 副本集创建时间
     *                 "DeleteTime" => (integer) 副本集删除时间
     *                 "ModifyTime" => (integer) 副本集修改时间
     *             ]
     *         ]
     *         "MongosInfo" => (array<object>) Mongos节点信息[
     *             [
     *                 "Zone" => (string) 可用区
     *                 "ZoneId" => (integer) 可用区ID
     *                 "NodeId" => (string) 节点ID
     *                 "NodeRole" => (string) 节点角色，Primary/Secondary/Arbiter/Startup等等
     *                 "NodeType" => (string) 节点类型
     *                 "State" => (string) 副本集/分片集群状态标记 Initing：初始化中，InitFailed：安装失败，Starting：启动中，StartFailed：启动失败，Running：运行，Stopping：关闭中，Stopped：已关闭, StopFailed：关闭失败，Deleting：删除中，Deleted：已删除，DeleteFailed：删除失败，Restarting：重启中，RestartFailed：重启失败。
     *                 "DBVersion" => (string) 副本集的Mongodb的版本
     *                 "ClusterId" => (string) 节点所属副本集ID
     *                 "VirtualClusterId" => (string) 虚拟节点ID
     *                 "MachineType" => (string) 机型信息
     *                 "MachineTypeId" => (string) 机型信息ID
     *                 "CreateTime" => (integer) DB实例创建时间
     *                 "DataDisk" => (object) 数据盘信息[
     *                     "DiskId" => (string) 磁盘id
     *                     "DiskSize" => (integer) 磁盘容量单位GB
     *                 ]
     *                 "SysDisk" => (object) 系统盘信息[
     *                     "DiskId" => (string) 磁盘id
     *                     "DiskSize" => (integer) 磁盘容量单位GB
     *                 ]
     *             ]
     *         ]
     *         "ConnectURL" => (string) 副本集的访问地址
     *         "DeleteTime" => (integer) DB实例删除时间
     *         "SubnetId" => (string) 子网ID
     *         "VPCId" => (string) VPC的ID
     *         "ShardCount" => (integer) 分片数量，分片集有效
     *         "ShardNodeCount" => (integer) 每分片节点数量，分片集有效
     *         "MongosCount" => (integer) Mongos节点数量，分片集有效
     *         "ConfigNodeCount" => (integer) Config配置集群节点数量，分片集有效
     *         "ConfigMachineType" => (string) Config配置集群节点配置，分片集有效
     *         "Tag" => (string) 实例业务组
     *         "DataComputeType" => (object) 数据节点计算规格[
     *             "MachineTypeId" => (string) 机器类型ID o.mongo2m.medium，o.mongo2m.xlarge
     *             "Description" => (string) 配置简称  2C4G
     *             "Cpu" => (integer) cpu核数
     *             "Memory" => (integer) 内存用量(GB)
     *             "UHhostMachineType" => (string) 机器类型，N/O
     *             "Group" => (string) 配置分组，2m , 4m
     *         ]
     *         "ConfigComputeType" => (object) 配置节点计算规格[
     *             "MachineTypeId" => (string) 机器类型ID o.mongo2m.medium，o.mongo2m.xlarge
     *             "Description" => (string) 配置简称  2C4G
     *             "Cpu" => (integer) cpu核数
     *             "Memory" => (integer) 内存用量(GB)
     *             "UHhostMachineType" => (string) 机器类型，N/O
     *             "Group" => (string) 配置分组，2m , 4m
     *         ]
     *         "MongosComputeType" => (object) 路由节点计算规格[
     *             "MachineTypeId" => (string) 机器类型ID o.mongo2m.medium，o.mongo2m.xlarge
     *             "Description" => (string) 配置简称  2C4G
     *             "Cpu" => (integer) cpu核数
     *             "Memory" => (integer) 内存用量(GB)
     *             "UHhostMachineType" => (string) 机器类型，N/O
     *             "Group" => (string) 配置分组，2m , 4m
     *         ]
     *         "CrossZones" => (array<string>) 跨用区列表
     *         "EnableSSL" => (integer) 是否开启了SSL；1->未开启 2->开启
     *         "SSLExpirationTime" => (integer) SSL到期时间
     *     ]
     * ]
     *
     * @return DescribeUMongoDBInstanceResponse
     * @throws UCloudException
     */
    public function describeUMongoDBInstance(DescribeUMongoDBInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUMongoDBInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUMongoDBBackupParam - 获取实例备份策略
     *
     * See also: https://docs.ucloud.cn/api/umongodb-api/get_umon_go_db_backup_param
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ClusterId" => (string) 实例ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (object) 备份策略信息[
     *         "ClusterId" => (string) 实例ID
     *         "AutoBackupToggleWeek" => (string) 自动备份预期周几 (1-7 表示 周一到周末，多个数据用','分割，eg: 3,7)
     *         "AutoBackupToggleTime" => (string) 自动备份预期时间范围 (24小时制，精确到分钟，00:00~23:59)
     *         "AutoBackupCopies" => (integer) 自动备份保存份数
     *         "ManualBackupCopies" => (integer) 手动备份保存份数
     *         "Disabled" => (boolean) 是否禁用(false:未禁用;true:禁用)
     *     ]
     * ]
     *
     * @return GetUMongoDBBackupParamResponse
     * @throws UCloudException
     */
    public function getUMongoDBBackupParam(GetUMongoDBBackupParamRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUMongoDBBackupParamResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUMongoDBCfgTempItem - 获取配置模板内容
     *
     * See also: https://docs.ucloud.cn/api/umongodb-api/get_umon_go_db_cfg_temp_item
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "TemplateId" => (string) 配置模板Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 配置模板项[
     *         [
     *             "ItemId" => (string) itemId
     *             "TemplateId" => (string) 模板ID
     *             "ConfigName" => (string) 配置名称
     *             "ConfigValue" => (string) 配置值
     *             "CreateTime" => (integer) 创建时间
     *             "ModifyTime" => (integer) 修改时间
     *             "ConfigOption" => (object) 配置选项[
     *                 "MongodbVersion" => (string) mongo版本
     *                 "OptionName" => (string) 配置选项名
     *                 "OptionValueType" => (string) 配置选项类型 string,int,bool
     *                 "OptionValues" => (string) 配置选项值范围
     *                 "OptionDefaultValue" => (string) 默认值
     *                 "IsDefaultOption" => (boolean) 是否为默认选项
     *                 "EnableModify" => (boolean) 是否可修改
     *                 "EnableDisplay" => (boolean) 是否前端展示
     *                 "ForceRestart" => (boolean) 是否需重启
     *                 "OptionFormatType" => (string) 选项值格式
     *                 "AllowedApplyType" => (string) 允许应用类型
     *                 "Description" => (string) 描述
     *             ]
     *             "NodeType" => (string) 节点类型: DataNode:数据节点 | ConfigSrvNode:配置节点 | MongosNode:路由节点
     *         ]
     *     ]
     * ]
     *
     * @return GetUMongoDBCfgTempItemResponse
     * @throws UCloudException
     */
    public function getUMongoDBCfgTempItem(GetUMongoDBCfgTempItemRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUMongoDBCfgTempItemResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUMongoDBLog - 查询某一段时间内集群节点的错误日志或慢查询日志
     *
     * See also: https://docs.ucloud.cn/api/umongodb-api/get_umon_go_db_log
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ClusterId" => (string) 集群id
     *     "NodeId" => (string) 节点id, 慢日志 mongos 节点不可选
     *     "Begin" => (integer) 查询的日志开始的时间戳（Unix Timestamp）。对于实时查询，这个参数应该是上次轮询请求时的时间戳，后台会返回从该值到当前时间的日志内容
     *     "LogType" => (string) 日志类型:SlowLog,ErrorLog
     *     "End" => (integer) 查询日志的结束时间戳(Unix Timestamp），对于实时查询不传该值，与BeginTime的差值不超过24小时：(EndTime-BeginTime) < 24*60*60
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Log" => (string) 查询到的日志内容，一段纯文本
     *     "MaxLine" => (integer) 支持的最大行数
     *     "IsTruncate" => (boolean) 是否已被截断
     * ]
     *
     * @return GetUMongoDBLogResponse
     * @throws UCloudException
     */
    public function getUMongoDBLog(GetUMongoDBLogRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUMongoDBLogResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUMongoDBRecoverTimeRange - 获取UMongoDB可回档时间范围
     *
     * See also: https://docs.ucloud.cn/api/umongodb-api/get_umon_go_db_recover_time_range
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ClusterId" => (string) 集群id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "EarliestTime" => (integer) 最早可回档时间点
     *     "LatestTime" => (integer) 最晚可回档时间点
     * ]
     *
     * @return GetUMongoDBRecoverTimeRangeResponse
     * @throws UCloudException
     */
    public function getUMongoDBRecoverTimeRange(GetUMongoDBRecoverTimeRangeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUMongoDBRecoverTimeRangeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUMongoDBBackup - 拉取实例备份列表
     *
     * See also: https://docs.ucloud.cn/api/umongodb-api/list_umon_go_db_backup
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ClusterId" => (string) 实例ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 备份列表[
     *         [
     *             "Zone" => (string) 可用区
     *             "BackupId" => (string) 备份ID
     *             "BackupName" => (string) 备份名称
     *             "ClusterId" => (string) 实例ID
     *             "State" => (string) 备份状态
     *             "BackupSize" => (integer) 备份数据大小
     *             "BackupType" => (string) 备份类型
     *             "StartTime" => (integer) 备份开始时间
     *             "EndTime" => (integer) 备份结束时间
     *             "VirtualClusterId" => (string) 虚拟节点id
     *             "ReplicaType" => (string) 副本类型,ConfigRepl或者DataRepl
     *             "BatchId" => (string) 批次id
     *             "DiskSize" => (integer) 磁盘大小
     *         ]
     *     ]
     * ]
     *
     * @return ListUMongoDBBackupResponse
     * @throws UCloudException
     */
    public function listUMongoDBBackup(ListUMongoDBBackupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUMongoDBBackupResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUMongoDBConfigTemplate - 拉取配置模板
     *
     * See also: https://docs.ucloud.cn/api/umongodb-api/list_umon_go_db_config_template
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
     *     "DataSet" => (array<object>) 配置模板列表[
     *         [
     *             "TemplateId" => (string) 模板ID
     *             "TemplateName" => (string) 模板名称
     *             "MongodbVersion" => (string) mongo版本
     *             "ClusterType" => (string) 集群类型
     *             "TemplateType" => (string) 模板类型 UsersTemplate DefaultTemplate
     *             "CreateTime" => (integer) 创建时间
     *             "ModifyTime" => (integer) 修改时间
     *             "DeleteTime" => (integer) 删除时间
     *             "Description" => (string) 模板描述
     *         ]
     *     ]
     * ]
     *
     * @return ListUMongoDBConfigTemplateResponse
     * @throws UCloudException
     */
    public function listUMongoDBConfigTemplate(ListUMongoDBConfigTemplateRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUMongoDBConfigTemplateResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUMongoDBInstances - 获取副本集/分片集群列表
     *
     * See also: https://docs.ucloud.cn/api/umongodb-api/list_umon_go_db_instances
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ClusterId" => (string) 集群ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 副本集ID[
     *         [
     *             "Zone" => (string) 可用区
     *             "ClusterId" => (string) 副本集/分片集群ID
     *             "Name" => (string) 副本集/分片集群实例名称
     *             "DBVersion" => (string) 副本集/分片集群的Mongodb的版本，包括MongoDB-3.6, MongoDB-4.2
     *             "ConnectURL" => (string) 副本集/分片集群的访问地址
     *             "CreateTime" => (integer) 副本集/分片集群的创建时间
     *             "ClusterType" => (string) 集群类型，ReplicaSet :副本集，SharedCluster：分片集
     *             "State" => (string) 副本集/分片集群状态标记 Initing：初始化中，InitFailed：安装失败，Starting：启动中，StartFailed：启动失败，Running：运行，Stopping：关闭中，Stopped：已关闭, StopFailed：关闭失败，Deleting：删除中，Deleted：已删除，DeleteFailed：删除失败，Restarting：重启中，RestartFailed：重启失败,Upgrading: 升降级中，UpgradeFailed: 升降级失败,Switching:主备切换中
     *             "IPv6ConnectURL" => (string) 副本集/分片集IPv6访问地址
     *             "ExpiredTime" => (integer) DB实例过期时间，采用UTC计时时间戳
     *             "DataComputeType" => (object) 数据节点计算规格[
     *                 "MachineTypeId" => (string) 机器类型ID o.mongo2m.medium，o.mongo2m.xlarge
     *                 "Description" => (string) 配置简称  2C4G
     *                 "Cpu" => (integer) cpu核数
     *                 "Memory" => (integer) 内存用量(GB)
     *                 "UHhostMachineType" => (string) 机器类型，N/O
     *                 "Group" => (string) 配置分组，2m , 4m
     *             ]
     *             "VPCId" => (string) VPC的ID
     *             "SubnetId" => (string) 子网ID
     *             "DiskSpace" => (integer) 数据节点磁盘空间(GB)
     *             "Tag" => (string) 业务组
     *             "CrossZones" => (array<string>) 跨可用区列表
     *         ]
     *     ]
     * ]
     *
     * @return ListUMongoDBInstancesResponse
     * @throws UCloudException
     */
    public function listUMongoDBInstances(ListUMongoDBInstancesRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUMongoDBInstancesResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUMongoDBLogPackage - 日志打包列表
     *
     * See also: https://docs.ucloud.cn/api/umongodb-api/list_umon_go_db_log_package
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ClusterId" => (string) 集群id
     *     "NodeId" => (string) 节点id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 列表[
     *         [
     *             "Id" => (integer) id
     *             "Name" => (string) 名称
     *             "State" => (string) Package_Running,Package_Success,Package_Failed,Package_Deleting,Package_Deleted,Package_DeleteFailed
     *             "Size" => (integer) 大小,单位字节
     *             "PackageType" => (string) SlowLog,ErrorLog
     *             "ClusterId" => (string) 集群id
     *             "NodeId" => (string) 节点id
     *             "Role" => (string) 角色
     *             "Begin" => (integer) 开始时间
     *             "End" => (integer) 结束时间
     *             "CreateTime" => (integer) 创建时间
     *             "FinishTime" => (integer) 完成时间
     *         ]
     *     ]
     * ]
     *
     * @return ListUMongoDBLogPackageResponse
     * @throws UCloudException
     */
    public function listUMongoDBLogPackage(ListUMongoDBLogPackageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUMongoDBLogPackageResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUMongoDBMachineSpec - 获取UMongoDB支持机器类型列表
     *
     * See also: https://docs.ucloud.cn/api/umongodb-api/list_umon_go_db_machine_spec
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ClassType" => (string) 机型,如O
     *     "DiskType" => (string) 磁盘类型，如CLOUD_RSSD
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 规格列表[
     *         [
     *             "ClassType" => (string) 规格类型;O | N
     *             "DiskType" => (array<string>) 磁盘类型;CLOUD_RSSD | CLOUD_SSD | LOCAL_SSD
     *             "ComputeType" => (array<object>) 计算规格列表[
     *                 [
     *                     "MachineTypeId" => (string) 机器类型ID o.mongo2m.medium，o.mongo2m.xlarge
     *                     "Description" => (string) 配置简称  2C4G
     *                     "Cpu" => (integer) cpu核数
     *                     "Memory" => (integer) 内存用量(GB)
     *                     "UHhostMachineType" => (string) 机器类型，N/O
     *                     "Group" => (string) 配置分组，2m , 4m
     *                 ]
     *             ]
     *             "DefaultMachineType" => (object) 默认规格[
     *                 "MachineTypeId" => (string) 机器类型ID o.mongo2m.medium，o.mongo2m.xlarge
     *                 "Description" => (string) 配置简称  2C4G
     *                 "Cpu" => (integer) cpu核数
     *                 "Memory" => (integer) 内存用量(GB)
     *                 "UHhostMachineType" => (string) 机器类型，N/O
     *                 "Group" => (string) 配置分组，2m , 4m
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return ListUMongoDBMachineSpecResponse
     * @throws UCloudException
     */
    public function listUMongoDBMachineSpec(ListUMongoDBMachineSpecRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUMongoDBMachineSpecResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUMongoDBMachineType - 获取UmongDB支持机器类型列表
     *
     * See also: https://docs.ucloud.cn/api/umongodb-api/list_umon_go_db_machine_type
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) [
     *         [
     *             "MachineTypeId" => (string) 机器类型ID o.mongo2m.medium，o.mongo2m.xlarge
     *             "Description" => (string) 配置简称  2C4G
     *             "Cpu" => (integer) cpu核数
     *             "Memory" => (integer) 内存用量(GB)
     *             "UHhostMachineType" => (string) 机器类型，N/O
     *             "Group" => (string) 配置分组，2m , 4m
     *         ]
     *     ]
     * ]
     *
     * @return ListUMongoDBMachineTypeResponse
     * @throws UCloudException
     */
    public function listUMongoDBMachineType(ListUMongoDBMachineTypeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUMongoDBMachineTypeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUMongoDBVersion - 获取UMongoDB支持版本列表
     *
     * See also: https://docs.ucloud.cn/api/umongodb-api/list_umon_go_db_version
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) [
     *         [
     *             "DBVersion" => (string) MongoDB版本
     *         ]
     *     ]
     * ]
     *
     * @return ListUMongoDBVersionResponse
     * @throws UCloudException
     */
    public function listUMongoDBVersion(ListUMongoDBVersionRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUMongoDBVersionResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyUMongoDBAdminPassword - 修改MongoDB集群root密码
     *
     * See also: https://docs.ucloud.cn/api/umongodb-api/modify_umon_go_db_admin_password
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ClusterId" => (string) 集群ID
     *     "Password" => (string) 集群新密码(密码格式使用BASE64编码)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ModifyUMongoDBAdminPasswordResponse
     * @throws UCloudException
     */
    public function modifyUMongoDBAdminPassword(ModifyUMongoDBAdminPasswordRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyUMongoDBAdminPasswordResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyUMongoDBAttribute - 修改MongoDB集群名称
     *
     * See also: https://docs.ucloud.cn/api/umongodb-api/modify_umon_go_db_attribute
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ClusterId" => (string) 集群id
     *     "Name" => (string) 集群新名称(输入长度为6~63位名称)
     *     "RemarkName" => (string) 集群备注(Name和RemarkName必传其一)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ModifyUMongoDBAttributeResponse
     * @throws UCloudException
     */
    public function modifyUMongoDBAttribute(ModifyUMongoDBAttributeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyUMongoDBAttributeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyUMongoDBBackupParam - 修改实例备份策略
     *
     * See also: https://docs.ucloud.cn/api/umongodb-api/modify_umon_go_db_backup_param
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ClusterId" => (string) 实例ID
     *     "AutoBackupToggleWeek" => (string) 自动备份预期星期几(1～7),默认 3,7 (周三，周日)
     *     "AutoBackupToggleTime" => (string) 自动备份预期开始时间范围(00:00~23:59),默认 5:00~6:00
     *     "Disabled" => (boolean) 是否禁用,true:禁用;false:开启
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ModifyUMongoDBBackupParamResponse
     * @throws UCloudException
     */
    public function modifyUMongoDBBackupParam(ModifyUMongoDBBackupParamRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyUMongoDBBackupParamResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ResizeUMongoDBInstance - 集群配置升降级
     *
     * See also: https://docs.ucloud.cn/api/umongodb-api/resize_umon_go_db_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ClusterId" => (string) 集群资源ID
     *     "DiskSpace" => (integer) 集群数据节点磁盘配置
     *     "MachineTypeId" => (string) 集群数据节点机型配置
     *     "MongosMachineTypeId" => (string) 集群Mongos节点机型配置
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ResizeUMongoDBInstanceResponse
     * @throws UCloudException
     */
    public function resizeUMongoDBInstance(ResizeUMongoDBInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ResizeUMongoDBInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * RestartUMongoDBCluster - 重启集群
     *
     * See also: https://docs.ucloud.cn/api/umongodb-api/restart_umon_go_db_cluster
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ClusterId" => (string) 集群ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ClusterId" => (string) 集群ID
     * ]
     *
     * @return RestartUMongoDBClusterResponse
     * @throws UCloudException
     */
    public function restartUMongoDBCluster(RestartUMongoDBClusterRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RestartUMongoDBClusterResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * StartUMongoDBCluster - 启动集群
     *
     * See also: https://docs.ucloud.cn/api/umongodb-api/start_umon_go_db_cluster
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ClusterId" => (string) 集群ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ClusterId" => (string) 集群ID
     * ]
     *
     * @return StartUMongoDBClusterResponse
     * @throws UCloudException
     */
    public function startUMongoDBCluster(StartUMongoDBClusterRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new StartUMongoDBClusterResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * StopUMongoDBCluster - 停止集群
     *
     * See also: https://docs.ucloud.cn/api/umongodb-api/stop_umon_go_db_cluster
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ClusterId" => (string) 集群ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ClusterId" => (string) 集群ID
     * ]
     *
     * @return StopUMongoDBClusterResponse
     * @throws UCloudException
     */
    public function stopUMongoDBCluster(StopUMongoDBClusterRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new StopUMongoDBClusterResponse($resp->toArray(), $resp->getRequestId());
    }
}
