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
namespace UCloud\ULogService;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\ULogService\Apis\BindULogServiceGroupToCollectConfRequest;
use UCloud\ULogService\Apis\BindULogServiceGroupToCollectConfResponse;
use UCloud\ULogService\Apis\CreateULogServiceCollectConfRequest;
use UCloud\ULogService\Apis\CreateULogServiceCollectConfResponse;
use UCloud\ULogService\Apis\CreateULogServiceLogSetRequest;
use UCloud\ULogService\Apis\CreateULogServiceLogSetResponse;
use UCloud\ULogService\Apis\CreateULogServiceMachineGroupRequest;
use UCloud\ULogService\Apis\CreateULogServiceMachineGroupResponse;
use UCloud\ULogService\Apis\CreateULogServiceTopicRequest;
use UCloud\ULogService\Apis\CreateULogServiceTopicResponse;
use UCloud\ULogService\Apis\DeleteULogServiceCollectConfRequest;
use UCloud\ULogService\Apis\DeleteULogServiceCollectConfResponse;
use UCloud\ULogService\Apis\DeleteULogServiceLogSetRequest;
use UCloud\ULogService\Apis\DeleteULogServiceLogSetResponse;
use UCloud\ULogService\Apis\DeleteULogServiceMachineGroupRequest;
use UCloud\ULogService\Apis\DeleteULogServiceMachineGroupResponse;
use UCloud\ULogService\Apis\DeleteULogServiceTopicRequest;
use UCloud\ULogService\Apis\DeleteULogServiceTopicResponse;
use UCloud\ULogService\Apis\DescribeULogServiceMachineGroupRequest;
use UCloud\ULogService\Apis\DescribeULogServiceMachineGroupResponse;
use UCloud\ULogService\Apis\GetULogServiceTopicFieldRequest;
use UCloud\ULogService\Apis\GetULogServiceTopicFieldResponse;
use UCloud\ULogService\Apis\ListULogServiceCollectConfRequest;
use UCloud\ULogService\Apis\ListULogServiceCollectConfResponse;
use UCloud\ULogService\Apis\ListULogServiceLogSetRequest;
use UCloud\ULogService\Apis\ListULogServiceLogSetResponse;
use UCloud\ULogService\Apis\ListULogServiceMachineGroupRequest;
use UCloud\ULogService\Apis\ListULogServiceMachineGroupResponse;
use UCloud\ULogService\Apis\ListULogServiceTopicRequest;
use UCloud\ULogService\Apis\ListULogServiceTopicResponse;
use UCloud\ULogService\Apis\QueryULogServiceLogRequest;
use UCloud\ULogService\Apis\QueryULogServiceLogResponse;
use UCloud\ULogService\Apis\UpdateULogServiceCollectConfRequest;
use UCloud\ULogService\Apis\UpdateULogServiceCollectConfResponse;
use UCloud\ULogService\Apis\UpdateULogServiceMachineGroupRequest;
use UCloud\ULogService\Apis\UpdateULogServiceMachineGroupResponse;
use UCloud\ULogService\Apis\UpdateULogServiceTopicFieldRequest;
use UCloud\ULogService\Apis\UpdateULogServiceTopicFieldResponse;

/**
 * This client is used to call actions of **ULogService** service
 */
class ULogServiceClient extends Client
{

    /**
     * BindULogServiceGroupToCollectConf - 日志主题采集配置绑定机器组
     *
     * See also: https://docs.ucloud.cn/api/ulogservice-api/bind_u_log_service_group_to_collect_conf
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "TopicId" => (string) 日志主题ID
     *     "CollectConfId" => (integer) 采集配置id
     *     "MachineGroupIds" => (integer) 机器组ID，是一个数组
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return BindULogServiceGroupToCollectConfResponse
     * @throws UCloudException
     */
    public function bindULogServiceGroupToCollectConf(BindULogServiceGroupToCollectConfRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new BindULogServiceGroupToCollectConfResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateULogServiceCollectConf - 创建日志主题采集配置
     *
     * See also: https://docs.ucloud.cn/api/ulogservice-api/create_u_log_service_collect_conf
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "TopicId" => (string) 日志主题ID
     *     "Name" => (string) 配置名称
     *     "LogType" => (string) 日志解析类型，决定了如何结构化日志。可选值: json:json 格式，delimiter:分隔符，full_regex:完全正则，multi_line_full_regex:多行完全正则，multi_line_delimiter: 多行分隔符正则，minimal_list:单行全文日志,multi_line:多行全文日志
     *     "CollectPolicy" => (string) 采集策略。可选值: full (全量采集存量日志), increment (从当前时间点增量采集)。默认为 full。
     *     "Encode" => (string) 日志原文的编码格式。可选值: utf-8, gbk。默认为 utf-8。
     *     "Keys" => (array<string>) 索引字段key，是一个数组
     *     "Delimiter" => (string) 当 LogType 为delimiter 或multi_line_delimiter时可选，支持多字符分隔，需要转换成Base64
     *     "MatchRule" => (string) 行首正则表达式。当 logType 为多行模式 (如 multi_line 或 multi_line_full_regex或multi_line_delimiter) 时，用于标识一条新日志的开始。需要转换成Base64
     *     "ExtractRule" => (string) 日志提取正则表达式。当 logType 为正则模式 (如 full_regex,multi_line_full_regex) 时，用于从日志中提取字段。需要转换成Base64
     *     "UnMatchKey" => (string) 如果 UnMatchUpload 为 true，无法解析的日志原文将被存放在此字段指定的 Key 下。默认为 LogParseFailure。
     *     "FilePaths" => (array<object>) [
     *         [
     *             "Path" => (string) 定义采集路径，数组类型
     *             "File" => (string) 定义采集路径的文件名，数组类型
     *         ]
     *     ]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return CreateULogServiceCollectConfResponse
     * @throws UCloudException
     */
    public function createULogServiceCollectConf(CreateULogServiceCollectConfRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateULogServiceCollectConfResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateULogServiceLogSet - 创建日志集
     *
     * See also: https://docs.ucloud.cn/api/ulogservice-api/create_u_log_service_log_set
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "LogSetName" => (string) 日志集名称  长度为1~64位
     *     "LogSetRemark" => (string) 日志集备注  长度为0~255位
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "LogSetId" => (string) 日志集资源ID
     * ]
     *
     * @return CreateULogServiceLogSetResponse
     * @throws UCloudException
     */
    public function createULogServiceLogSet(CreateULogServiceLogSetRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateULogServiceLogSetResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateULogServiceMachineGroup - 创建机器组
     *
     * See also: https://docs.ucloud.cn/api/ulogservice-api/create_u_log_service_machine_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceId" => (string) 日志服务实例资源ID
     *     "Name" => (string) 机器组名称;格式校验：^[\w]{1,23}$
     *     "Type" => (string) 采集客户端识别模式;可选值 LABEL | IP;
     *     "Labels" => (string) 采集客户端识别标识，是一个数组
     *     "Ips" => (string) 机器IP，如果Type是IP，那么Ips可以填写IP，是一个数组
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return CreateULogServiceMachineGroupResponse
     * @throws UCloudException
     */
    public function createULogServiceMachineGroup(CreateULogServiceMachineGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateULogServiceMachineGroupResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateULogServiceTopic - 创建ULogService主题
     *
     * See also: https://docs.ucloud.cn/api/ulogservice-api/create_u_log_service_topic
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "TopicName" => (string) 主题名称，校验规则"^[\w]{1,64}$"
     *     "ReserveAge" => (integer) 保存时间 1~730 天
     *     "LogSetId" => (string) 日志集ID
     *     "TopicShardNum" => (integer) 分区数量，固定是2
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TopicId" => (string) 主题ID
     * ]
     *
     * @return CreateULogServiceTopicResponse
     * @throws UCloudException
     */
    public function createULogServiceTopic(CreateULogServiceTopicRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateULogServiceTopicResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteULogServiceCollectConf - 删除日志主题采集配置
     *
     * See also: https://docs.ucloud.cn/api/ulogservice-api/delete_u_log_service_collect_conf
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "TopicId" => (string) 日志主题ID
     *     "CollectConfId" => (integer) 日志主题采集配置ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteULogServiceCollectConfResponse
     * @throws UCloudException
     */
    public function deleteULogServiceCollectConf(DeleteULogServiceCollectConfRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteULogServiceCollectConfResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteULogServiceLogSet - 删除日志集
     *
     * See also: https://docs.ucloud.cn/api/ulogservice-api/delete_u_log_service_log_set
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "LogSetId" => (string) 日志集ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteULogServiceLogSetResponse
     * @throws UCloudException
     */
    public function deleteULogServiceLogSet(DeleteULogServiceLogSetRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteULogServiceLogSetResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteULogServiceMachineGroup - 删除机器组
     *
     * See also: https://docs.ucloud.cn/api/ulogservice-api/delete_u_log_service_machine_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Id" => (integer) 删除的机器组ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteULogServiceMachineGroupResponse
     * @throws UCloudException
     */
    public function deleteULogServiceMachineGroup(DeleteULogServiceMachineGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteULogServiceMachineGroupResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteULogServiceTopic - 删除ULogService主题
     *
     * See also: https://docs.ucloud.cn/api/ulogservice-api/delete_u_log_service_topic
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "TopicId" => (string) 主题Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteULogServiceTopicResponse
     * @throws UCloudException
     */
    public function deleteULogServiceTopic(DeleteULogServiceTopicRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteULogServiceTopicResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeULogServiceMachineGroup - 查询日志采集机器组
     *
     * See also: https://docs.ucloud.cn/api/ulogservice-api/describe_u_log_service_machine_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Id" => (string) 机器组ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "MachineGroup" => (object) 机器组信息[
     *         "Id" => (integer) 机器组ID
     *         "Name" => (string) 机器组名称
     *         "Type" => (string) 机器组类型，取值有：LABEL和IP
     *         "LogAgents" => (object) LogAgent信息，数组类型[
     *             "Label" => (string) 主机标签
     *             "HostIp" => (string) 主机IP
     *             "InstanceId" => (string) logagent id
     *             "AgentVersion" => (string) LogAgent版本
     *             "Status" => (string) logagent状态，NORMAL：正常，OFFLINE： 离线
     *             "OffLineTime" => (string) 离线时间，单位是ms
     *         ]
     *         "Labels" => (array<string>) 机器组标签，数组类型
     *         "Ips" => (string) 机器组Ip，数组类型
     *     ]
     * ]
     *
     * @return DescribeULogServiceMachineGroupResponse
     * @throws UCloudException
     */
    public function describeULogServiceMachineGroup(DescribeULogServiceMachineGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeULogServiceMachineGroupResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetULogServiceTopicField - 获取ULogService主题索引字段
     *
     * See also: https://docs.ucloud.cn/api/ulogservice-api/get_u_log_service_topic_field
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "TopicId" => (string) 主题Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (array<object>) 索引字段数据，是一个数组[
     *         [
     *             "FieldName" => (string) 索引名称
     *             "FieldType" => (string) 索引类型，可取的值有: long, double, text
     *             "IsReserved" => (boolean) 是否保留字段，true表示保留字段，false表示非保留字段
     *         ]
     *     ]
     * ]
     *
     * @return GetULogServiceTopicFieldResponse
     * @throws UCloudException
     */
    public function getULogServiceTopicField(GetULogServiceTopicFieldRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetULogServiceTopicFieldResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListULogServiceCollectConf - 查询日志主题采集配置列表
     *
     * See also: https://docs.ucloud.cn/api/ulogservice-api/list_u_log_service_collect_conf
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "TopicId" => (integer) 日志主题ID
     *     "CollectConfId" => (integer) 采集配置ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "CollectConfs" => (object) 日志采集配置列表[
     *         "TopicId" => (integer) 日志主题ID
     *         "State" => (integer) State
     *         "MachineGroups" => (array<object>) 机器组ID，是一个数组[
     *             [
     *                 "Id" => (string) 机器组ID
     *                 "Name" => (string) 机器组名称
     *                 "Type" => (string) 采集器识别类型：LABEL：机器标识，IP：IP类型
     *                 "CreateTime" => (integer) 创建时间
     *                 "UpdateTime" => (integer) 修改时间
     *             ]
     *         ]
     *         "Id" => (integer) Id
     *         "Name" => (string) 日志采集配置名称
     *         "LogType" => (string) 日志解析类型，决定了如何结构化日志。可选值: json:json 格式，delimiter:分隔符，full_regex:完全正则，multi_line_full_regex:多行完全正则，multi_line_delimiter: 多行分隔符正则，minimal_list:单行全文日志,multi_line:多行全文日志
     *         "CollectPolicy" => (string) 采集策略。可选值: full (全量采集存量日志), increment (从当前时间点增量采集)。默认为 full。
     *         "Encode" => (string) 日志原文的编码格式。可选值: utf-8, gbk。默认为 utf-8。
     *         "Keys" => (string) 索引字段key，是一个数组
     *         "Delimiter" => (string) 当 LogType 为delimiter 或multi_line_delimiter时可选，支持多字符分隔，需要转换成Base64
     *         "MatchRule" => (string) 行首正则表达式。当 logType 为多行模式 (如 multi_line 或 multi_line_full_regex或multi_line_delimiter) 时，用于标识一条新日志的开始。需要转换成Base64
     *         "ExtractRule" => (string) 日志提取正则表达式。当 logType 为正则模式 (如 full_regex,multi_line_full_regex) 时，用于从日志中提取字段。需要转换成Base64
     *         "UnMatchKey" => (string) 如果 UnMatchUpload 为 true，无法解析的日志原文将被存放在此字段指定的 Key 下。默认为 LogParseFailure。
     *         "FilePaths" => (array<object>) FilePaths[
     *             [
     *                 "Path" => (string) 路径
     *                 "File" => (string) 文件名
     *             ]
     *         ]
     *         "CreateTime" => (integer) CreateTime
     *         "UpdateTime" => (integer) updateTime
     *     ]
     * ]
     *
     * @return ListULogServiceCollectConfResponse
     * @throws UCloudException
     */
    public function listULogServiceCollectConf(ListULogServiceCollectConfRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListULogServiceCollectConfResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListULogServiceLogSet - 查询日志集列表
     *
     * See also: https://docs.ucloud.cn/api/ulogservice-api/list_u_log_service_log_set
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
     *     "Data" => (array<object>) 返回日志主题数据，是一个数组[
     *         [
     *             "TopicCount" => (integer) 日志集下主题数量
     *             "LogSetRemark" => (string) 日志集备注
     *             "LogSetName" => (string) 日志集名称
     *             "CreateTime" => (integer) 创建时间
     *             "UpdateTime" => (integer) 更新时间
     *         ]
     *     ]
     * ]
     *
     * @return ListULogServiceLogSetResponse
     * @throws UCloudException
     */
    public function listULogServiceLogSet(ListULogServiceLogSetRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListULogServiceLogSetResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListULogServiceMachineGroup - 查看机器组列表
     *
     * See also: https://docs.ucloud.cn/api/ulogservice-api/list_u_log_service_machine_group
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
     *     "MachineGroups" => (array<object>) 机器组信息列表[
     *         [
     *             "Id" => (string) 机器组ID
     *             "Name" => (string) 机器组名称
     *             "Type" => (string) 采集器识别类型：LABEL：机器标识，IP：IP类型
     *             "CreateTime" => (integer) 创建时间
     *             "UpdateTime" => (integer) 修改时间
     *         ]
     *     ]
     * ]
     *
     * @return ListULogServiceMachineGroupResponse
     * @throws UCloudException
     */
    public function listULogServiceMachineGroup(ListULogServiceMachineGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListULogServiceMachineGroupResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListULogServiceTopic - 获取ULogService主题
     *
     * See also: https://docs.ucloud.cn/api/ulogservice-api/list_u_log_service_topic
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "LogSetId" => (string) 日志集ID
     *     "Offset" => (integer) 分页起始条目数, 默认为0
     *     "Limit" => (integer) 分页限制数,默认为30
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (array<object>) 主题列表[
     *         [
     *             "TopicName" => (string) 主题名称
     *             "TopicId" => (string) 主题ID
     *             "TopicShardNum" => (integer) 分区数量，固定是2
     *             "ReserveAge" => (integer) 保存时间 1~730 天
     *             "IsReserved" => (integer) 是否保留：0 - NORMAL, 1 - RESERVED
     *             "TopicDesc" => (string) 主题描述
     *         ]
     *     ]
     *     "TotalCount" => (integer) 主题总数
     * ]
     *
     * @return ListULogServiceTopicResponse
     * @throws UCloudException
     */
    public function listULogServiceTopic(ListULogServiceTopicRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListULogServiceTopicResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * QueryULogServiceLog - 查询ULogService日志
     *
     * See also: https://docs.ucloud.cn/api/ulogservice-api/query_u_log_service_log
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "QueryCriteria" => (string) 查询条件，使用Base64编码。目前只支持查询索引，多个索引查询使用AND。比如:index1:http AND index2:http2
     *     "SortOrder" => (string) 日志时间排序;可选值ASC|DESC
     *     "TopicId" => (string) 主题ID
     *     "StartTime" => (integer) 起始日志时间，秒级时间戳
     *     "EndTime" => (integer) 终止日志时间，秒级时间戳
     *     "Size" => (integer) 一次返回条数，默认20。仅当检索分析语句不包含SQL时有效。SQL结果条数方式可以在SQL里使用limit语法。
     *     "ScrollId" => (string) Deprecated. 滚动加载参数ScrollId
     *     "LastId" => (string) 滚动加载参数,上一页最后一条数据的ID
     *     "LastTimestamp" => (string) 滚动加载参数,上一页最后一条数据的timestamp
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (object) 请求结果[
     *         "TopicId" => (string) 所属日志ID
     *         "TopicName" => (string) 所属日志名称
     *         "IsOver" => (boolean) 检索结果是否到底
     *         "Contents" => (object) 日志内容[
     *             "LogId" => (string) 日志标识ID
     *             "HostName" => (string) 日志来源主机
     *             "FileName" => (string) 日志文件路径
     *             "Timestamp" => (integer) 日志时间
     *             "LogJson" => (string) JSON格式的日志内容
     *         ]
     *         "ScrollId" => (string) 滚动检索Id Deprecated
     *         "LastId" => (string) 滚动检索,当前页最后一条数据ID
     *         "LastTimestamp" => (string) 滚动检索,当前页最后一条数据Timestamp
     *         "Columns" => (array<object>) 当使用SQL语句查询时，数据通过AnalysisRecords字段返回，Columns字段返回的是字段名和类型[
     *             [
     *                 "Name" => (string) 字段名
     *                 "Type" => (string) 字段类型
     *             ]
     *         ]
     *         "AnalysisRecords" => (array<string>) 当使用SQL语句查询时，数据通过该字段返回
     *     ]
     * ]
     *
     * @return QueryULogServiceLogResponse
     * @throws UCloudException
     */
    public function queryULogServiceLog(QueryULogServiceLogRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new QueryULogServiceLogResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateULogServiceCollectConf - 修改日志主题采集配置
     *
     * See also: https://docs.ucloud.cn/api/ulogservice-api/update_u_log_service_collect_conf
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "TopicId" => (string) 日志主题ID
     *     "CollectConfId" => (integer) 日志主题采集配置ID
     *     "LogType" => (string) 日志解析类型，决定了如何结构化日志。可选值: json:json 格式，delimiter:分隔符，full_regex:完全正则，multi_line_full_regex:多行完全正则，multi_line_delimiter: 多行分隔符正则，minimal_list:单行全文日志,multi_line:多行全文日志
     *     "CollectPolicy" => (string) 采集策略。可选值: full (全量采集存量日志), increment (从当前时间点增量采集)。默认为 full。
     *     "Encode" => (string) 日志原文的编码格式。可选值: utf-8, gbk。默认为 utf-8。
     *     "Keys" => (array<string>) 索引字段key，是一个数组
     *     "Delimiter" => (string) 当 LogType 为delimiter 或multi_line_delimiter时可选，支持多字符分隔，需要转换成Base64
     *     "MatchRule" => (string) 行首正则表达式。当 logType 为多行模式 (如 multi_line 或 multi_line_full_regex或multi_line_delimiter) 时，用于标识一条新日志的开始。需要转换成Base64
     *     "ExtractRule" => (string) 日志提取正则表达式。当 logType 为正则模式 (如 full_regex,multi_line_full_regex) 时，用于从日志中提取字段。需要转换成Base64
     *     "UnMatchKey" => (string) 如果 UnMatchUpload 为 true，无法解析的日志原文将被存放在此字段指定的 Key 下。默认为 LogParseFailure。
     *     "FilePaths" => (array<object>) [
     *         [
     *             "Path" => (string) 定义采集路径，数组类型
     *             "File" => (string) 定义采集路径的文件名，数组类型
     *         ]
     *     ]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateULogServiceCollectConfResponse
     * @throws UCloudException
     */
    public function updateULogServiceCollectConf(UpdateULogServiceCollectConfRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateULogServiceCollectConfResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateULogServiceMachineGroup - 更新日志机器组
     *
     * See also: https://docs.ucloud.cn/api/ulogservice-api/update_u_log_service_machine_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Name" => (string) 机器组名称; 格式校验：^[\w]{1,255}$
     *     "Type" => (string) 采集客户端识别模式;可选值 LABEL | IP;
     *     "Id" => (integer) 机器组ID
     *     "Labels" => (string) 采集客户端识别标识，数组类型
     *     "Ips" => (string) 机器IP，如果Type是IP，那么Ips可以填写IP，是一个数组
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateULogServiceMachineGroupResponse
     * @throws UCloudException
     */
    public function updateULogServiceMachineGroup(UpdateULogServiceMachineGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateULogServiceMachineGroupResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateULogServiceTopicField - 更新ULogService主题索引字段
     *
     * See also: https://docs.ucloud.cn/api/ulogservice-api/update_u_log_service_topic_field
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "TopicId" => (string) 主题Id
     *     "FieldInfos" => (array<object>) [
     *         [
     *             "FieldName" => (string) 字段名称支持字母、横线(-)、斜杠(/)、特殊符号（@）、数字、下划线（_）和点（.），且不能以下划线开头，长度不超过255个字符
     *             "FieldType" => (string) 主题字段类型（text、long、double）
     *         ]
     *     ]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateULogServiceTopicFieldResponse
     * @throws UCloudException
     */
    public function updateULogServiceTopicField(UpdateULogServiceTopicFieldRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateULogServiceTopicFieldResponse($resp->toArray(), $resp->getRequestId());
    }
}
