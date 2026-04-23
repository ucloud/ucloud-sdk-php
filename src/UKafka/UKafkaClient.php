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
namespace UCloud\UKafka;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\UKafka\Apis\AddUKafkaInstanceNodeRequest;
use UCloud\UKafka\Apis\AddUKafkaInstanceNodeResponse;
use UCloud\UKafka\Apis\CreateUKafkaInstanceRequest;
use UCloud\UKafka\Apis\CreateUKafkaInstanceResponse;
use UCloud\UKafka\Apis\DeleteUKafkaInstanceRequest;
use UCloud\UKafka\Apis\DeleteUKafkaInstanceResponse;
use UCloud\UKafka\Apis\DescribeUKafkaConsumerRequest;
use UCloud\UKafka\Apis\DescribeUKafkaConsumerResponse;
use UCloud\UKafka\Apis\DescribeUKafkaInstanceRequest;
use UCloud\UKafka\Apis\DescribeUKafkaInstanceResponse;
use UCloud\UKafka\Apis\GetUKafkaNodeTypeRequest;
use UCloud\UKafka\Apis\GetUKafkaNodeTypeResponse;
use UCloud\UKafka\Apis\IsUKafkaTopicNameExistRequest;
use UCloud\UKafka\Apis\IsUKafkaTopicNameExistResponse;
use UCloud\UKafka\Apis\ListUKafkaConsumersRequest;
use UCloud\UKafka\Apis\ListUKafkaConsumersResponse;
use UCloud\UKafka\Apis\ListUKafkaFrameworkVersionRequest;
use UCloud\UKafka\Apis\ListUKafkaFrameworkVersionResponse;
use UCloud\UKafka\Apis\ListUKafkaInstanceRequest;
use UCloud\UKafka\Apis\ListUKafkaInstanceResponse;
use UCloud\UKafka\Apis\ListUKafkaTopicsRequest;
use UCloud\UKafka\Apis\ListUKafkaTopicsResponse;
use UCloud\UKafka\Apis\ModifyUKafkaInstanceTypeRequest;
use UCloud\UKafka\Apis\ModifyUKafkaInstanceTypeResponse;
use UCloud\UKafka\Apis\ResizeUKafkaDiskRequest;
use UCloud\UKafka\Apis\ResizeUKafkaDiskResponse;

/**
 * This client is used to call actions of **UKafka** service
 */
class UKafkaClient extends Client
{

    /**
     * AddUKafkaInstanceNode - 给实例添加节点
     *
     * See also: https://docs.ucloud.cn/api/ukafka-api/add_ukafka_instance_node
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceId" => (string) 实例ID
     *     "NodeType" => (string) 机型，支持的机型可通过GetUKafkaNodeType 接口返回的InstanceTypeSet[].InstanceTypeName
     *     "NodeCount" => (integer) 新添加节点数量
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return AddUKafkaInstanceNodeResponse
     * @throws UCloudException
     */
    public function addUKafkaInstanceNode(AddUKafkaInstanceNodeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AddUKafkaInstanceNodeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUKafkaInstance - 创建一个ukafka实例
     *
     * See also: https://docs.ucloud.cn/api/ukafka-api/create_ukafka_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "FrameworkVersion" => (string) kafka版本，支持的版本可通过ListUKafkaFrameworkVersion 接口返回字段的FrameworkVersions获取
     *     "VPCId" => (string) VPCID
     *     "SubnetId" => (string) 子网 ID
     *     "ChargeType" => (string) 付费方式
     *     "NodeType" => (string) 机型，支持的机型可通过GetUKafkaNodeType 接口返回的InstanceTypeSet[].InstanceTypeName
     *     "DiskSize" => (integer) 数据盘大小。支持范围根据GetUKafkaNodeType 接口返回的InstanceTypeSet[].MaxDiskSize 和MinDiskSize获取
     *     "InstanceName" => (string) 实例名，可自定义
     *     "BusinessId" => (string) 业务组，默认Default
     *     "Quantity" => (string) 实例数量，默认 1
     *     "NodeCount" => (integer) 集群节点数量。默认 3 节点
     *     "LogRetentionHours" => (string) kafka 日志保存时间，支持范围[1,240]。默认 72 小时
     *     "DiskControllerType" => (string) 磁盘管理方式,支持值：NONE、CLEAN。默认值：NONE
     *     "DiskThreshold" => (string) 磁盘清理阈值，支持范围[70,90]。DiskControllerType 为CLEAN 时必填。默认值 90
     *     "IsSecurityEnabled" => (string) 是否开启安全组，支持"true","false"，默认 false
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "InstanceId" => (string) 实例资源 ID
     * ]
     *
     * @return CreateUKafkaInstanceResponse
     * @throws UCloudException
     */
    public function createUKafkaInstance(CreateUKafkaInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUKafkaInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUKafkaInstance - 删除实例
     *
     * See also: https://docs.ucloud.cn/api/ukafka-api/delete_ukafka_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceId" => (string) 实例ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteUKafkaInstanceResponse
     * @throws UCloudException
     */
    public function deleteUKafkaInstance(DeleteUKafkaInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUKafkaInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUKafkaConsumer - 获取 Kafka 消费组信息
     *
     * See also: https://docs.ucloud.cn/api/ukafka-api/describe_ukafka_consumer
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目 ID。不填写为默认项目，子帐号必须填写。 请参考 [GetProjectList 接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ClusterInstanceId" => (string) Kafka 集群 ID
     *     "ConsumerGroup" => (string) 消费组组名
     *     "Type" => (string) 消费者组类型（同消费者组列表返回的类型值）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "GroupName" => (string) 消费者组组名
     *     "Type" => (string) 消费者组类型
     *     "Topics" => (string) 消费者组所订阅 topic 信息
     * ]
     *
     * @return DescribeUKafkaConsumerResponse
     * @throws UCloudException
     */
    public function describeUKafkaConsumer(DescribeUKafkaConsumerRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUKafkaConsumerResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUKafkaInstance - 获取整个集群的信息
     *
     * See also: https://docs.ucloud.cn/api/ukafka-api/describe_ukafka_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ClusterInstanceId" => (string) 实例ID，可以通过ListUKafkaInstance 接口的ClusterSet. ClusterInstanceId 获取
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ClusterSet" => (array<object>) 集群信息列表[
     *         [
     *             "Zone" => (string) 所属可用区
     *             "AutoRenew" => (string) 是否开启自动续费
     *             "BusinessId" => (string) 业务组 ID
     *             "ChargeType" => (string) 付费类型
     *             "ClusterInstanceId" => (string) 实例id
     *             "ClusterInstanceName" => (string) 实例名称
     *             "CreateTime" => (integer) 实例创建时间
     *             "ExpireTime" => (integer) 实例过期时间
     *             "Framework" => (string) 实例框架
     *             "FrameworkVersion" => (string) 实例框架版本
     *             "NetworkId" => (string) 网络 id（已废弃）
     *             "Remark" => (string) 实例备注
     *             "RunningTime" => (integer) 实例运行时间
     *             "State" => (string) 实例当前状态,实例状态："Running"| "Abnormal"| "Creating"| "Deleting"| "CreateFailed"| "DeleteFailed"| "Unavailable"| "Deleted"| "Updating"| "Deploying"| "Migrating"| "ExpandFailed"
     *             "SubnetId" => (string) 所属子网 id
     *             "Tag" => (string) 实例标记
     *             "UHostCount" => (integer) 实例节点个数
     *             "UHostSet" => (array<object>) 节点信息列表[
     *                 [
     *                     "Endpoints" => (object) broker 访问端点[
     *                         "PlainText" => (object) PLAINTEXT 协议访问信息[
     *                             "Protocal" => (string) 访问协议
     *                             "Addr" => (string) 访问地址
     *                         ]
     *                         "SaslPlainText" => (object) SASL_PLAINTEXT 协议访问信息[
     *                             "Protocal" => (string) 访问协议
     *                             "Addr" => (string) 访问地址
     *                         ]
     *                     ]
     *                     "BrokerId" => (string) broker id
     *                     "BrokerInfo" => (array<object>) broker 关联topic 信息[
     *                         [
     *                             "PartitionOnBroker" => (string) topic 在 broker 上分布的 partition 数量
     *                             "Partitions" => (string) topic 在 broker上 partition 列表
     *                             "Replication" => (integer) Topic 副本数
     *                             "TopicName" => (string) topic 名称
     *                             "TotalPartitions" => (integer) partition 数量
     *                         ]
     *                     ]
     *                     "CreateTime" => (string) broker 创建信息
     *                     "DomainName" => (string) broker 域名
     *                     "ExpireTime" => (integer) broker 过期时间
     *                     "IPSet" => (array<object>) broker IP 信息[
     *                         [
     *                             "IP" => (string) IP地址
     *                             "Type" => (string) IP类型
     *                         ]
     *                     ]
     *                     "InstanceGroupType" => (string) broker 机型信息
     *                     "KafkaPort" => (integer) kafka 服务端口
     *                     "Remark" => (string) broker 备注信息
     *                     "ResourceId" => (string) broker 注册资源信息
     *                     "SecurityGroupId" => (string) 安全组 id
     *                     "State" => (string) broker 当前状态
     *                     "UHostConfig" => (object) broker 节点配置[
     *                         "DiskType" => (string) 节点数据盘类型
     *                         "BootDiskSize" => (integer) 节点系统盘大小（单位G)【删除】
     *                         "CPU" => (integer) 节点 CPU 核心数
     *                         "DataDiskSize" => (integer) 节点数据盘大小（单位G)
     *                         "Memory" => (integer) 节点内存(单位MB)
     *                         "OS" => (string) 节点内部系统名称【删除】
     *                     ]
     *                     "UHostId" => (string) 节点 id
     *                     "UHostName" => (string) 节点名称
     *                     "UHostRole" => (string) 节点类型
     *                     "ZooKeeper" => (string) 节点是否部署 zookeeper
     *                     "ZooKeeperPort" => (integer) zookeeper 服务端口
     *                 ]
     *             ]
     *             "VPCId" => (string) 所属 VPC id
     *             "ValidBrokerNum" => (integer) 可用节点个数
     *             "IsOpenSecgroup" => (string) 是否开启安全组
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUKafkaInstanceResponse
     * @throws UCloudException
     */
    public function describeUKafkaInstance(DescribeUKafkaInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUKafkaInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUKafkaNodeType - 获取节点机型配置
     *
     * See also: https://docs.ucloud.cn/api/ukafka-api/get_ukafka_node_type
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NodeType" => (string) 传参时返回指定机型信息，参数为空时返回所有机型信息
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "NodeTypeSet" => (array<object>) 机型信息列表[
     *         [
     *             "DiskSet" => (object) 机型磁盘类型信息[
     *                 "Type" => (string) 磁盘类型。Boot 表示系统盘，Data 表示数据盘
     *                 "Size" => (string) 磁盘大小
     *             ]
     *             "CPU" => (integer) CPU核心数
     *             "DiskType" => (string) 磁盘类型。RSSD 表示固态云盘，SSD 表示本地固态盘，COMMON 表示本地 SATA 盘
     *             "NodeTypeName" => (string) 机型名称
     *             "Memory" => (string) 内存大小（单位 MB）
     *         ]
     *     ]
     * ]
     *
     * @return GetUKafkaNodeTypeResponse
     * @throws UCloudException
     */
    public function getUKafkaNodeType(GetUKafkaNodeTypeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUKafkaNodeTypeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * IsUKafkaTopicNameExist - 检查一个topic名称是否已经在集群中了
     *
     * See also: https://docs.ucloud.cn/api/ukafka-api/is_ukafka_topic_name_exist
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "ClusterInstanceId" => (string) 集群ID
     *     "TopicName" => (string) 待检查的topic名称
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "IsExist" => (string) 是否已经存在
     * ]
     *
     * @return IsUKafkaTopicNameExistResponse
     * @throws UCloudException
     */
    public function isUKafkaTopicNameExist(IsUKafkaTopicNameExistRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new IsUKafkaTopicNameExistResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUKafkaConsumers - 列出 Kafka 消费组
     *
     * See also: https://docs.ucloud.cn/api/ukafka-api/list_ukafka_consumers
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目 ID。不填写为默认项目，子帐号必须填写。 请参考 [GetProjectList 接口](../summary/get_project_list.html)
     *     "ClusterInstanceId" => (string) Kafka 集群 ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Groups" => (array<object>) 消费者组列表[
     *         [
     *             "GroupName" => (string) 消费者组组名
     *             "Type" => (string) 消费者组类型
     *             "NumOfTopics" => (integer) 订阅 Topic 数量
     *         ]
     *     ]
     * ]
     *
     * @return ListUKafkaConsumersResponse
     * @throws UCloudException
     */
    public function listUKafkaConsumers(ListUKafkaConsumersRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUKafkaConsumersResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUKafkaFrameworkVersion - 列举ukafka框架版本
     *
     * See also: https://docs.ucloud.cn/api/ukafka-api/list_ukafka_framework_version
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
     *     "FrameworkVersions" => (array<object>) kafka版本[
     *         [
     *             "Version" => (string) kafka版本
     *             "Label" => (string) kafka 版本标签。recommend 表示推荐版本，beta 表示公测版本
     *         ]
     *     ]
     * ]
     *
     * @return ListUKafkaFrameworkVersionResponse
     * @throws UCloudException
     */
    public function listUKafkaFrameworkVersion(ListUKafkaFrameworkVersionRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUKafkaFrameworkVersionResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUKafkaInstance - 列举集群信息
     *
     * See also: https://docs.ucloud.cn/api/ukafka-api/list_ukafka_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Limit" => (string) 默认为60
     *     "Offset" => (string) 默认为0
     *     "Filter" => (string) 是否过滤删除了的节点，默认为‘true’
     *     "VPCId" => (string) VPCId
     *     "SubnetId" => (string) SubnetId
     *     "BusinessId" => (string) 业务组 ID
     *     "ClusterInstanceId" => (string) 实例ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ClusterSet" => (string) 信息
     *     "TotalCount" => (string) 总数
     * ]
     *
     * @return ListUKafkaInstanceResponse
     * @throws UCloudException
     */
    public function listUKafkaInstance(ListUKafkaInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUKafkaInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUKafkaTopics - 展示kafka集群上所有topic
     *
     * See also: https://docs.ucloud.cn/api/ukafka-api/list_ukafka_topics
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目 ID。不填写为默认项目，子帐号必须填写。 请参考 [GetProjectList 接口](../summary/get_project_list.html)
     *     "ClusterInstanceId" => (string) 集群资源id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TopicList" => (array<object>) topic 信息列表[
     *         [
     *             "Topic" => (string) topic 名称
     *             "NumOfPartition" => (integer) 分区数量
     *             "NumOfOccupyBroker" => (integer) 占用 broker 数量
     *             "NumOfReplica" => (integer) 副本数量
     *             "UnderReplicasPer" => (number) 落后副本占比
     *             "Status" => (string) topic 状态
     *         ]
     *     ]
     *     "Length" => (integer) 列表长度
     * ]
     *
     * @return ListUKafkaTopicsResponse
     * @throws UCloudException
     */
    public function listUKafkaTopics(ListUKafkaTopicsRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUKafkaTopicsResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyUKafkaInstanceType - 规格升降级
     *
     * See also: https://docs.ucloud.cn/api/ukafka-api/modify_ukafka_instance_type
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceId" => (string) 实例ID
     *     "NodeType" => (string) 目标机型，支持的机型可通过GetUKafkaNodeType 接口返回的InstanceTypeSet[].InstanceTypeName
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ModifyUKafkaInstanceTypeResponse
     * @throws UCloudException
     */
    public function modifyUKafkaInstanceType(ModifyUKafkaInstanceTypeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyUKafkaInstanceTypeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ResizeUKafkaDisk - 磁盘扩容
     *
     * See also: https://docs.ucloud.cn/api/ukafka-api/resize_ukafka_disk
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceId" => (string) 实例ID
     *     "DiskSize" => (integer) 数据盘大小。支持范围根据GetUKafkaNodeType 接口返回的InstanceTypeSet[].MaxDiskSize 和MinDiskSize获取
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ResizeUKafkaDiskResponse
     * @throws UCloudException
     */
    public function resizeUKafkaDisk(ResizeUKafkaDiskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ResizeUKafkaDiskResponse($resp->toArray(), $resp->getRequestId());
    }
}
