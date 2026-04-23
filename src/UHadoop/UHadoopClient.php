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
namespace UCloud\UHadoop;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\UHadoop\Apis\AddUHadoopInstanceNodeRequest;
use UCloud\UHadoop\Apis\AddUHadoopInstanceNodeResponse;
use UCloud\UHadoop\Apis\CreateUHadoopInstanceRequest;
use UCloud\UHadoop\Apis\CreateUHadoopInstanceResponse;
use UCloud\UHadoop\Apis\DeleteUHadoopInstanceRequest;
use UCloud\UHadoop\Apis\DeleteUHadoopInstanceResponse;
use UCloud\UHadoop\Apis\DescribeUHadoopInstanceRequest;
use UCloud\UHadoop\Apis\DescribeUHadoopInstanceResponse;
use UCloud\UHadoop\Apis\GetUHadoopNodeTypeRequest;
use UCloud\UHadoop\Apis\GetUHadoopNodeTypeResponse;
use UCloud\UHadoop\Apis\ListUHadoopFrameworkAppRequest;
use UCloud\UHadoop\Apis\ListUHadoopFrameworkAppResponse;
use UCloud\UHadoop\Apis\ListUHadoopFrameworkAppByUseCaseRequest;
use UCloud\UHadoop\Apis\ListUHadoopFrameworkAppByUseCaseResponse;
use UCloud\UHadoop\Apis\ListUHadoopInstanceRequest;
use UCloud\UHadoop\Apis\ListUHadoopInstanceResponse;
use UCloud\UHadoop\Apis\RestartUHadoopServiceRequest;
use UCloud\UHadoop\Apis\RestartUHadoopServiceResponse;
use UCloud\UHadoop\Apis\UpgradeUHadoopNodeRequest;
use UCloud\UHadoop\Apis\UpgradeUHadoopNodeResponse;
use UCloud\UHadoop\Apis\UpgradeUHadoopNodeDiskRequest;
use UCloud\UHadoop\Apis\UpgradeUHadoopNodeDiskResponse;

/**
 * This client is used to call actions of **UHadoop** service
 */
class UHadoopClient extends Client
{

    /**
     * AddUHadoopInstanceNode - 给已有集群添加一定数量的节点
     *
     * See also: https://docs.ucloud.cn/api/uhadoop-api/add_uhadoop_instance_node
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "NodeRole" => (string) 节点的角色，值为task|core|client之一
     *     "NodeType" => (string) 机型，如：o.hadoop2m.medium，可从GetUHadoopNodeType接口获取
     *     "InstanceId" => (string) 实例ID
     *     "DataDiskNum" => (string) 数据盘数量，非裸金属机型时必填
     *     "Password" => (string) 密码,NodeRole为client时必填
     *     "BootDiskSize" => (string) 系统盘容量,非裸金属机型必填
     *     "BootDiskType" => (string) 系统盘类型，非裸金属机型必填，例如：CLOUD_RSSD
     *     "DataDiskSize" => (string) 数据盘容量，非裸金属机型必填
     *     "DataDiskType" => (string) 数据盘类型，非裸金属机型必填，例如：CLOUD_RSSD
     *     "NodeCount" => (integer) 节点数量,默认为1
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return AddUHadoopInstanceNodeResponse
     * @throws UCloudException
     */
    public function addUHadoopInstanceNode(AddUHadoopInstanceNodeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AddUHadoopInstanceNodeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUHadoopInstance - 新建一个uhadoop集群
     *
     * See also: https://docs.ucloud.cn/api/uhadoop-api/create_uhadoop_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Password" => (string) 集群机器的登录密码
     *     "FrameworkVersion" => (string) 版本,例如：3.2.1-udh3.0,通过ListUHadoopFrameworkApp接口获取
     *     "InstanceGroupConfigs" => (array<string>) 节点配置，里面包括NodeType（机型），NodeRole（节点类别，值为其中之一：master|core|task），Count（数量），DataDiskType（数据盘类别），DataDiskSize（数据盘大小），DataDiskNum（数据盘数量），BootDiskType（系统盘类型），BootDiskSize（系统盘大小），通过GetUHadoopNodeType接口获取，示例为：InstanceGroupConfigs.0.NodeType=o.hadoop2m.xlargeInstanceGroupConfigs.0.NodeRole=masterInstanceGroupConfigs.0.Count=2InstanceGroupConfigs.0.DataDiskType=CLOUD_RSSDInstanceGroupConfigs.0.DataDiskSize=100InstanceGroupConfigs.0.DataDiskNum=1InstanceGroupConfigs.0.BootDiskType=CLOUD_RSSDInstanceGroupConfigs.0.BootDiskSize=50InstanceGroupConfigs.1.NodeType=o.hadoop2m.xlargeInstanceGroupConfigs.1.NodeRole=coreInstanceGroupConfigs.1.Count=3InstanceGroupConfigs.1.DataDiskType=CLOUD_RSSDInstanceGroupConfigs.1.DataDiskSize=200InstanceGroupConfigs.1.DataDiskNum=1InstanceGroupConfigs.1.BootDiskType=CLOUD_RSSDInstanceGroupConfigs.1.BootDiskSize=50
     *     "VPCId" => (string) VPCId
     *     "SubnetId" => (string) 子网ID
     *     "AppConfig" => (array<string>) 集群需要安装的组件，格式：组件#版本通过ListUHadoopFrameworkApp接口获取，例如：Spark#3.3.0
     *     "Framework" => (string) 框架，值为'Hadoop'|'HDFS'|'MR'|'StarRocks'之一,框架，例如Hadoop|MR|HDFS|StarRocks Hadoop框架包含存储与计算服务 MR集群包含计算服务 HDFS只包含存储服务,StarRocks为StarRocks集群
     *     "ChargeType" => (string) 支付类别，默认：Month
     *     "Quantity" => (integer) 数量，默认1
     *     "BusinessId" => (string) 工作组ID，默认Default
     *     "StorgeClusterId" => (string) Framework为‘MR’时，存储集群ID
     *     "StandAloneMetaStore" => (string) 目前只支持传‘udb’
     *     "IsSecurityEnabled" => (string) 是否开启安全组
     *     "SecGroupIds" => (string) 安全组ID，字符串数组，IsSecurityEnabled为true时生效
     *     "US3Bucket" => (string) US3 bucket名称，仅支持框架为StarRocks存算分离时传入
     *     "US3AccessKey" => (string) US3 配置公钥，仅支持框架为StarRocks存算分离时传入
     *     "US3SecretKey" => (string) US3 配置私钥，仅支持框架为StarRocks存算分离时传入
     *     "US3TokenName" => (string) US3 Token名称，仅支持框架为StarRocks存算分离时传入
     *     "InstanceName" => (string) 实例名称，默认为实例ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "InstanceId" => (string) 实例ID
     * ]
     *
     * @return CreateUHadoopInstanceResponse
     * @throws UCloudException
     */
    public function createUHadoopInstance(CreateUHadoopInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUHadoopInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUHadoopInstance - 删除掉一个uhadoop集群
     *
     * See also: https://docs.ucloud.cn/api/uhadoop-api/delete_uhadoop_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceId" => (string) 实例ID
     *     "ReleaseEIP" => (boolean) 是否释放绑定的EIP。true: 解绑EIP后，并释放；其他值或不填：解绑EIP。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteUHadoopInstanceResponse
     * @throws UCloudException
     */
    public function deleteUHadoopInstance(DeleteUHadoopInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUHadoopInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUHadoopInstance - 描述集群
     *
     * See also: https://docs.ucloud.cn/api/uhadoop-api/describe_uhadoop_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "InstanceId" => (string) 实例ID
     *     "VPCId" => (string) VPCID
     *     "SubnetId" => (string) 子网ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ClusterSet" => (array<object>) 集群信息[
     *         [
     *             "Zone" => (string) 可用区
     *             "Tag" => (string) 集群Tag
     *             "InstanceId" => (string) 实例ID
     *             "InstanceName" => (string) 实例名称
     *             "Framework" => (string) 框架，值为'Hadoop'|'HDFS'|'MR'|'StarRocks'之一,框架，例如Hadoop|MR|HDFS|StarRocks Hadoop框架包含存储与计算服务 MR集群包含计算服务 HDFS只包含存储服务,StarRocks为StarRocks集群
     *             "VPCId" => (string) VPC ID
     *             "SubnetId" => (string) 子网ID
     *             "BusinessId" => (string) 业务组ID
     *             "ReleaseVersion" => (string) Uhadoop版本，值为 uhadoop 3.0|uhadoop 2.2|uhadoop 3.1
     *             "HadoopVersion" => (string) Hadoop版本，值为 hadoop3.2.1-udh3.0|hadoop3.3.4-udh3.1|hadoop2.8.5-udh2.2
     *             "CreateTime" => (string) 创建时间
     *             "ChargeType" => (string) 付费类型
     *             "ExpireTime" => (string) 到期时间
     *             "State" => (string) 状态，值为以下其中之一，Running(运行中)|Creating(创建中)|CreateFailed(创建失败)|Deploying(部署中)|Updating(变更中)
     *             "MasterCount" => (string) Master节点数量
     *             "CoreCount" => (string) core节点数量
     *             "TaskCount" => (string) Task节点数量
     *             "RunningTime" => (string) 运行时间
     *             "AppConfigSet" => (string) 组件集合
     *             "AppConfigCount" => (string) 组件数量
     *             "IsOpenSecGroup" => (string) 是否开启安全组
     *             "NodeSet" => (string) 节点集合
     *             "NodeCount" => (string) 节点数量
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUHadoopInstanceResponse
     * @throws UCloudException
     */
    public function describeUHadoopInstance(DescribeUHadoopInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUHadoopInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUHadoopNodeType - 获取节点类型信息
     *
     * See also: https://docs.ucloud.cn/api/uhadoop-api/get_uhadoop_node_type
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "FrameworkVersion" => (string) 框架版本，例如3.2.1-udh3.0，通过ListUHadoopFrameworkApp接口获取
     *     "NodeRole" => (string) 角色，master|core|task
     *     "NodeType" => (string) 机型名称
     *     "Framework" => (string) 框架，例如Hadoop|MR|HDFS|StarRocks，Hadoop框架包含存储与计算服务，MR集群包含计算服务，HDFS只包含存储服务，StarRocks为StarRocks集群
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "InstanceTypeSet" => (array<object>) 类型信息[
     *         [
     *             "NodeType" => (string) 机型名称
     *             "HostType" => (string) 机型种类，可选Outstanding(快杰机型)|General(普通机型)|BareMetal(裸金属机型)|GPU(GPU机型)四种类型
     *             "SuitableRole" => (array<string>) 可用的节点类型，值为core|task|master之一
     *             "CPU" => (string) cpu大小
     *             "CPUToMemoryRatio" => (string) cpu内存比
     *             "Memory" => (string) 内存大小
     *             "DiskSet" => (array<object>) 磁盘信息[
     *                 [
     *                     "Size" => (integer) 总磁盘大小
     *                     "Type" => (string) 磁盘角色，分Data数据盘和Boot系统盘
     *                     "DiskType" => (array<string>) 可支持的磁盘类型
     *                     "SingleDiskSize" => (integer) 单块盘大小
     *                     "DiskNum" => (integer) 磁盘数量
     *                     "DiskMaxNum" => (string) 最大磁盘数量
     *                     "DiskMaxSize" => (string) 最大单块盘容量，单位GB
     *                     "DiskMinNum" => (string) 最小磁盘数量
     *                     "DiskMinSize" => (string) 最小单块盘容量，单位GB
     *                 ]
     *             ]
     *             "IsUsable" => (string) 是否可用,该机型是否支持创建
     *             "IsOpenSecgroup" => (string) 是否支持开启安全组
     *             "GpuType" => (string) GPU型号
     *             "GpuCount" => (integer) GPU数量
     *         ]
     *     ]
     *     "MetaDataUDBUsable" => (boolean) 当前可用区是否支持元数据库使用UDB
     *     "HostTypeSupportNodeType" => (string) 机型可支持的节点类型
     * ]
     *
     * @return GetUHadoopNodeTypeResponse
     * @throws UCloudException
     */
    public function getUHadoopNodeType(GetUHadoopNodeTypeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUHadoopNodeTypeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUHadoopFrameworkApp - 列举可选app
     *
     * See also: https://docs.ucloud.cn/api/uhadoop-api/list_uhadoop_framework_app
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Framework" => (string) 框架，值为'Hadoop'|'HDFS'|'MR'|'StarRocks'之一,框架，例如Hadoop|MR|HDFS|StarRocks Hadoop框架包含存储与计算服务 MR集群包含计算服务 HDFS只包含存储服务,StarRocks为StarRocks集群
     *     "InstanceId" => (string) 实例ID,可选。传的话，过滤出适合此集群的app信息。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "AppConfigSet" => (array<object>) 应用配置详情[
     *         [
     *             "AppName" => (string) 需要安装的应用如：Hive,HBase, Spark,Hue,Pig等其他组件
     *             "AppVersion" => (string) 应用的版本号(0.13.1,0.98.6 等等)
     *             "AppStatus" => (string) 应用的状态(运行中)'Running'｜(已停止)'Stopped'｜(启动中)'Starting'｜(停止中)'Stopping'|(启动失败)'StartFailed'|(停止失败)'StopFailed'|(安装中)'Installing'|(安装失败)'InstallFailed'|(未安装)'NotInstalled',
     *         ]
     *     ]
     * ]
     *
     * @return ListUHadoopFrameworkAppResponse
     * @throws UCloudException
     */
    public function listUHadoopFrameworkApp(ListUHadoopFrameworkAppRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUHadoopFrameworkAppResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUHadoopFrameworkAppByUseCase - 按使用场景列出uhadoop的框架和框架中的应用
     *
     * See also: https://docs.ucloud.cn/api/uhadoop-api/list_uhadoop_framework_app_by_use_case
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
     *     "AppConfigSet" => (array<object>) 使用场景的app版本信息[
     *         [
     *             "ReleaseVersion" => (string) UHadoop版本，值为 uhadoop 3.0|uhadoop 2.2|uhadoop 3.1
     *             "HadoopVersion" => (string) Hadoop版本，值为 hadoop3.2.1-udh3.0|hadoop3.3.4-udh3.1 |hadoop2.8.5-udh2.2
     *             "Framework" => (string) 框架，值为'Hadoop'|'HDFS'|'MR'|'StarRocks'之一,框架，例如Hadoop|MR|HDFS|StarRocks Hadoop框架包含存储与计算服务 MR集群包含计算服务 HDFS只包含存储服务,StarRocks为StarRocks集群
     *             "FrameworkVersion" => (string) 框架版本
     *             "UseCases" => (array<object>) 框架示例[
     *                 [
     *                     "ClusterCase" => (string) 集群种类
     *                     "MustHas" => (string) 依赖的组件
     *                     "AppVersion" => (string) 组件版本
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return ListUHadoopFrameworkAppByUseCaseResponse
     * @throws UCloudException
     */
    public function listUHadoopFrameworkAppByUseCase(ListUHadoopFrameworkAppByUseCaseRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUHadoopFrameworkAppByUseCaseResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUHadoopInstance - 列出用户所有的uhadoop集群
     *
     * See also: https://docs.ucloud.cn/api/uhadoop-api/list_uhadoop_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Limit" => (integer) 获取列表的长度限制，默认值为60
     *     "Offset" => (integer) 获取列表的偏移，默认值为0
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ClusterSet" => (array<object>) 集群信息集合[
     *         [
     *             "Zone" => (string) 可用区
     *             "InstanceId" => (string) 实例ID
     *             "InstanceName" => (string) 实例名称
     *             "Framework" => (string) 框架，值为'Hadoop'|'HDFS'|'MR'|'StarRocks'之一，Hadoop框架包含存储与计算服务，MR集群包含计算服务，HDFS只包含存储服务，StarRocks为StarRocks集群
     *             "VPCId" => (string) VPC ID
     *             "SubnetId" => (string) 子网ID
     *             "BusinessId" => (string) 业务组ID
     *             "ReleaseVersion" => (string)     Uhadoop版本，值为 uhadoop 3.0|uhadoop 2.2|uhadoop 3.1
     *             "HadoopVersion" => (string) Hadoop版本，值为 hadoop3.2.1-udh3.0|hadoop3.3.4-udh3.1 |hadoop2.8.5-udh2.2
     *             "CreateTime" => (string) 创建时间
     *             "State" => (string) 状态，值为以下其中之一，Running(运行中)|Creating(创建中)|CreateFailed(创建失败)|Deploying(部署中)|Updating(变更中)
     *         ]
     *     ]
     *     "TotalCount" => (integer) 总数
     * ]
     *
     * @return ListUHadoopInstanceResponse
     * @throws UCloudException
     */
    public function listUHadoopInstance(ListUHadoopInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUHadoopInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * RestartUHadoopService - 重启集群服务（包含start|stop|restart）
     *
     * See also: https://docs.ucloud.cn/api/uhadoop-api/restart_uhadoop_service
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ServiceName" => (string) 要操作的服务名。可通过ListUHadoopFrameworkApp接口获取
     *     "InstanceId" => (string) 实例ID
     *     "ApplicationVersion" => (string) 应用版本，ApplicationVersion传参时，表示这次操作是整个应用所有服务。
     *     "OnlyStart" => (boolean) 只启动。值为false|true之一，默认false，当OnlyStart和OnlyStop同时置为true，则重启。
     *     "OnlyStop" => (boolean) 只停止。值为false|true之一，默认false。当OnlyStart和OnlyStop同时置为true，则重启。
     *     "NodeId" => (array<string>) 要操作的NodeId数组。如果传入，则用于过滤操作哪些Node。
     *     "NodeRole" => (array<string>) 要操作的NodeRole数组。如果传入，则用于过滤操作哪些Node。值为以下之一master|core|task
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "State" => (string) 当前执行状态，running(操作运行中)|success(操作成功)|failed(操作失败)|killed(操作被终止)。
     * ]
     *
     * @return RestartUHadoopServiceResponse
     * @throws UCloudException
     */
    public function restartUHadoopService(RestartUHadoopServiceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RestartUHadoopServiceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpgradeUHadoopNode - 升级uhadoop节点
     *
     * See also: https://docs.ucloud.cn/api/uhadoop-api/upgrade_uhadoop_node
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NodeRole" => (string) 节点角色，支持"master"|"core"|"task"
     *     "NodeType" => (string) 节点新机型，通过GetUHadoopNodeType接口获取
     *     "InstanceId" => (string) 实例ID
     *     "NodeNames" => (array<string>) 节点名称，当NodeRole不为master时必填
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpgradeUHadoopNodeResponse
     * @throws UCloudException
     */
    public function upgradeUHadoopNode(UpgradeUHadoopNodeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpgradeUHadoopNodeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpgradeUHadoopNodeDisk - 扩容集群节点磁盘
     *
     * See also: https://docs.ucloud.cn/api/uhadoop-api/upgrade_uhadoop_node_disk
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NodeRole" => (string) 节点角色，值为master|core|task之一
     *     "DataDiskSize" => (integer) 新的数据盘磁盘大小
     *     "InstanceId" => (string) 实例ID
     *     "NodeNames" => (array<string>) 节点名称集合,当NodeRole不为master时必填
     *     "BootDiskSize" => (integer) 系统盘磁盘大小，仅支持云盘裸金属机型（系统盘和数据盘数值同时增加、只会处理系统盘参数）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpgradeUHadoopNodeDiskResponse
     * @throws UCloudException
     */
    public function upgradeUHadoopNodeDisk(UpgradeUHadoopNodeDiskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpgradeUHadoopNodeDiskResponse($resp->toArray(), $resp->getRequestId());
    }
}
