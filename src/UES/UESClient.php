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
namespace UCloud\UES;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\UES\Apis\CreateUESInstanceRequest;
use UCloud\UES\Apis\CreateUESInstanceResponse;
use UCloud\UES\Apis\DeleteUESInstanceRequest;
use UCloud\UES\Apis\DeleteUESInstanceResponse;
use UCloud\UES\Apis\DescribeUESInstanceV2Request;
use UCloud\UES\Apis\DescribeUESInstanceV2Response;
use UCloud\UES\Apis\ExpandUESInstanceRequest;
use UCloud\UES\Apis\ExpandUESInstanceResponse;
use UCloud\UES\Apis\GetUESAppVersionRequest;
use UCloud\UES\Apis\GetUESAppVersionResponse;
use UCloud\UES\Apis\GetUESDiskSizeLimitationRequest;
use UCloud\UES\Apis\GetUESDiskSizeLimitationResponse;
use UCloud\UES\Apis\GetUESNodeConfRequest;
use UCloud\UES\Apis\GetUESNodeConfResponse;
use UCloud\UES\Apis\ListUESInstanceRequest;
use UCloud\UES\Apis\ListUESInstanceResponse;
use UCloud\UES\Apis\ResizeUESInstanceRequest;
use UCloud\UES\Apis\ResizeUESInstanceResponse;
use UCloud\UES\Apis\RestartUESInstanceRequest;
use UCloud\UES\Apis\RestartUESInstanceResponse;

/**
 * This client is used to call actions of **UES** service
 */
class UESClient extends Client
{

    /**
     * CreateUESInstance - 创建实例
     *
     * See also: https://docs.ucloud.cn/api/ues-api/create_ues_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceName" => (string) 实例名称
     *     "NodeConf" => (string) 节点配置标识, 支持的机型可通过GetUESNodeConf NodeConfList[].NodeConf
     *     "VPCId" => (string) VPCID标识
     *     "SubnetId" => (string) 子网ID标识
     *     "KibanaNodeConf" => (string) Kibana节点配置, 支持的机型可通过GetUESNodeConf NodeConfList[].NodeConf
     *     "KibanaNodeDiskConf" => (string) Kibana节点磁盘类型
     *     "AppVersion" => (string) 应用服务版本号，支持的类型通过GetUESAppVersion AppVersionList[].AppVersion
     *     "NodeDiskConf" => (string) 磁盘类型
     *     "NodeSize" => (integer) 节点个数，默认数目为3
     *     "NodeDiskSize" => (integer) 节点磁盘大小，默认为100G
     *     "ServiceUserName" => (string) elasticsearch 服务用户名称，默认为elastic；OpenSearch 服务用户名称，固定为admin
     *     "ServicePasswd" => (string) 服务用户密码，默认为changeme
     *     "AppName" => (string) 应用名称，支持的类型通过GetUESAppVersion AppVersionList[].AppName, 默认为elasticsearch
     *     "Remark" => (string) 备注，默认为空
     *     "ChargeType" => (string) 计费类型，默认为Month
     *     "Quantity" => (integer) 计费长度，默认为1
     *     "MasterConf" => (string) 主节点类型标示，支持的机型可通过GetUESNodeConf NodeConfList[].NodeConf, 默认为空
     *     "BusinessId" => (string) 业务组ID标识
     *     "CoordinatingNodeConf" => (string) Coordinating节点机型配置，, 支持的机型可通过GetUESNodeConf NodeConfList[].NodeConf,  默认为空
     *     "CoordinatingNodeSize" => (integer) Coordinating节点数量
     *     "CoordinatingNodeDiskConf" => (string) Coordinating节点磁盘类型
     *     "IsSecGroup" => (boolean) 是否开启安全组，默认为false
     *     "SecGroupIds" => (array<string>) 安全组ID，开启安全组必填，至多可以同时绑定5个安全组
     *     "IsMultiZone" => (boolean) 是否为多可用区，默认为false
     *     "MultiZones" => (array<string>) 多可用区名称，默认空数组 []
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "InstanceId" => (string) 实例ID
     * ]
     *
     * @return CreateUESInstanceResponse
     * @throws UCloudException
     */
    public function createUESInstance(CreateUESInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUESInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUESInstance - 删除实例
     *
     * See also: https://docs.ucloud.cn/api/ues-api/delete_ues_instance
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
     * @return DeleteUESInstanceResponse
     * @throws UCloudException
     */
    public function deleteUESInstance(DeleteUESInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUESInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUESInstanceV2 - 查询指定实例详细信息
     *
     * See also: https://docs.ucloud.cn/api/ues-api/describe_ues_instance_v2
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceId" => (string) 集群实例ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Result" => (object) 返回结果[
     *         "RequestId" => (string)
     *         "ClusterInfo" => (object) [
     *             "Region" => (string) 地域
     *             "Zone" => (string) 可用区
     *             "UESInstanceId" => (string) 服务集群ID标识
     *             "UESInstanceName" => (string) 服务集群名称
     *             "ServiceVersion" => (string) 服务版本号
     *             "VPCId" => (string) VPCID标识
     *             "State" => (string) 服务集群状态
     *             "BusinessId" => (string) 项目组ID标识
     *             "SubnetId" => (string) 子网ID标识
     *             "Vip" => (string) Vip
     *         ]
     *         "NodeInfoList" => (array<object>) [
     *             [
     *                 "NodeId" => (string) 节点ID
     *                 "NodeName" => (string) 节点名称
     *                 "NodeRole" => (string) 节点类型
     *                 "NodeIP" => (string) 节点IP
     *                 "NodeConf" => (string) 节点配置标识
     *                 "NodeState" => (string) 节点状态
     *                 "DiskType" => (string) 节点磁盘类型
     *                 "DiskSize" => (integer) 节点磁盘大小
     *                 "Memory" => (integer) 节点内存大小
     *                 "CPU" => (integer) 节点cpu数量
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUESInstanceV2Response
     * @throws UCloudException
     */
    public function describeUESInstanceV2(DescribeUESInstanceV2Request $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUESInstanceV2Response($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ExpandUESInstance - 扩容实例节点
     *
     * See also: https://docs.ucloud.cn/api/ues-api/expand_ues_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceId" => (string) 实例ID
     *     "NodeCount" => (integer) 扩容后对应类型节点的数目
     *     "NodeRole" => (string) 节点类型（compute、coordinating）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ExpandUESInstanceResponse
     * @throws UCloudException
     */
    public function expandUESInstance(ExpandUESInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ExpandUESInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUESAppVersion - 获取服务应用版本列表
     *
     * See also: https://docs.ucloud.cn/api/ues-api/get_ues_app_version
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
     *     "TotalCount" => (integer) 服务应用版本个数
     *     "AppVersionList" => (array<object>) 服务应用版本列表[
     *         [
     *             "AppName" => (string) 应用名称，默认值为elasticsearch
     *             "AppVersion" => (string) 应用版本号
     *             "IsMultiZone" => (boolean) 是否支持多区部署，默认为false
     *         ]
     *     ]
     * ]
     *
     * @return GetUESAppVersionResponse
     * @throws UCloudException
     */
    public function getUESAppVersion(GetUESAppVersionRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUESAppVersionResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUESDiskSizeLimitation - 获取磁盘容量限制
     *
     * See also: https://docs.ucloud.cn/api/ues-api/get_ues_disk_size_limitation
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
     *     "DiskSizeLimitationSet" => (array<object>) 各磁盘类型容量限制列表[
     *         [
     *             "DiskType" => (string) 数据盘类别，包含普通云盘|CLOUD_NORMAL、SSD云盘|CLOUD_SSD和RSSD云盘|CLOUD_RSSD。普通本地盘只包含普通本地盘|LOCAL_NORMAL一种。SSD本地盘只包含SSD本地盘|LOCAL_SSD一种。
     *             "MaxSize" => (integer) 最大值，单位GB
     *             "MinSize" => (integer) 最小值，单位GB
     *         ]
     *     ]
     * ]
     *
     * @return GetUESDiskSizeLimitationResponse
     * @throws UCloudException
     */
    public function getUESDiskSizeLimitation(GetUESDiskSizeLimitationRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUESDiskSizeLimitationResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUESNodeConf - 获取节点配置列表
     *
     * See also: https://docs.ucloud.cn/api/ues-api/get_ues_node_conf
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
     *     "TotalCount" => (integer) 所有节点配置信息的个数
     *     "NodeConfList" => (array<object>) 服务节点配置信息列表[
     *         [
     *             "Memory" => (integer) 内存，单位为GB
     *             "CPU" => (integer) CPU数量
     *             "NodeConf" => (string) 节点配置标识
     *             "DiskType" => (string) 磁盘类型[RSSD|SSD]
     *             "DiskSize" => (integer) 磁盘大小，单位为GB
     *             "IsSecGroup" => (boolean) 是否支持安全组[true|false]
     *         ]
     *     ]
     * ]
     *
     * @return GetUESNodeConfResponse
     * @throws UCloudException
     */
    public function getUESNodeConf(GetUESNodeConfRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUESNodeConfResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUESInstance - 获取实例列表
     *
     * See also: https://docs.ucloud.cn/api/ues-api/list_ues_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Offset" => (integer) 数据偏移量, 默认为0
     *     "Limit" => (integer) 返回数据长度, 默认为30
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ClusterSet" => (array<object>) 实例信息列表[
     *         [
     *             "Zone" => (string) 可用区
     *             "BusinessId" => (string) 项目组ID标识
     *             "ChargeType" => (string) 计费类型，默认为Month
     *             "CreateTime" => (integer) 创建时间
     *             "ExpireTime" => (integer) 失效时间
     *             "NodeCount" => (integer) 节点个数，默认为集群大小
     *             "RunTime" => (integer) 实例运行时长
     *             "AppVersion" => (string) 应用服务版本号
     *             "State" => (string) 实例状态
     *             "InstanceId" => (string) 实例资源ID
     *             "InstanceName" => (string) 实例名称
     *             "AppName" => (string) 应用名称
     *             "UESInstanceId" => (string) 服务集群ID标识（弃用）
     *             "UESInstanceName" => (string) 服务集群名称（弃用）
     *             "ServiceVersion" => (string) 服务版本号（弃用）
     *             "SubnetId" => (string) 子网ID标识
     *             "Tag" => (string) 业务组
     *             "VPCId" => (string) VPCID标识
     *             "Vip" => (string) VIP地址信息
     *             "IsSecGroup" => (boolean) 是否开启安全组
     *             "MultiZones" => (array<string>) 多可用区
     *             "Resizable" => (boolean) 是否支持改配
     *         ]
     *     ]
     *     "TotalCount" => (integer) 实例个数
     * ]
     *
     * @return ListUESInstanceResponse
     * @throws UCloudException
     */
    public function listUESInstance(ListUESInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUESInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ResizeUESInstance - 改配实例节点配置
     *
     * See also: https://docs.ucloud.cn/api/ues-api/resize_ues_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceId" => (string) 实例ID
     *     "NodeRole" => (string) 节点类型（compute、master、coordinating、kibana、dashboard）
     *     "NodeConf" => (string) 改配节点类型，NodeDiskSize为0，基于NodeRole 进行改配
     *     "NodeDiskSize" => (integer) 改配节点磁盘大小，NodeConf 为空字符串，基于NodeRole 进行改配
     *     "ForceResizing" => (boolean) 进行改配操作是否强制检查集群健康状态，默认为false
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ResizeUESInstanceResponse
     * @throws UCloudException
     */
    public function resizeUESInstance(ResizeUESInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ResizeUESInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * RestartUESInstance - 重启实例
     *
     * See also: https://docs.ucloud.cn/api/ues-api/restart_ues_instance
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
     * @return RestartUESInstanceResponse
     * @throws UCloudException
     */
    public function restartUESInstance(RestartUESInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RestartUESInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
}
