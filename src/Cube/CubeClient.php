<?php
/**
 * Copyright 2022 UCloud Technology Co., Ltd.
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
namespace UCloud\Cube;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\Cube\Apis\CreateCubeDeploymentRequest;
use UCloud\Cube\Apis\CreateCubeDeploymentResponse;
use UCloud\Cube\Apis\CreateCubePodRequest;
use UCloud\Cube\Apis\CreateCubePodResponse;
use UCloud\Cube\Apis\DeleteCubeDeploymentRequest;
use UCloud\Cube\Apis\DeleteCubeDeploymentResponse;
use UCloud\Cube\Apis\DeleteCubePodRequest;
use UCloud\Cube\Apis\DeleteCubePodResponse;
use UCloud\Cube\Apis\GetCubeDeploymentRequest;
use UCloud\Cube\Apis\GetCubeDeploymentResponse;
use UCloud\Cube\Apis\GetCubeExecTokenRequest;
use UCloud\Cube\Apis\GetCubeExecTokenResponse;
use UCloud\Cube\Apis\GetCubeExtendInfoRequest;
use UCloud\Cube\Apis\GetCubeExtendInfoResponse;
use UCloud\Cube\Apis\GetCubeMetricsRequest;
use UCloud\Cube\Apis\GetCubeMetricsResponse;
use UCloud\Cube\Apis\GetCubePodRequest;
use UCloud\Cube\Apis\GetCubePodResponse;
use UCloud\Cube\Apis\GetCubePriceRequest;
use UCloud\Cube\Apis\GetCubePriceResponse;
use UCloud\Cube\Apis\GetCubeTokenRequest;
use UCloud\Cube\Apis\GetCubeTokenResponse;
use UCloud\Cube\Apis\ListCubeDeploymentRequest;
use UCloud\Cube\Apis\ListCubeDeploymentResponse;
use UCloud\Cube\Apis\ListCubePodRequest;
use UCloud\Cube\Apis\ListCubePodResponse;
use UCloud\Cube\Apis\ModifyCubeExtendInfoRequest;
use UCloud\Cube\Apis\ModifyCubeExtendInfoResponse;
use UCloud\Cube\Apis\ModifyCubeTagRequest;
use UCloud\Cube\Apis\ModifyCubeTagResponse;
use UCloud\Cube\Apis\RebootCubePodRequest;
use UCloud\Cube\Apis\RebootCubePodResponse;
use UCloud\Cube\Apis\RenewCubePodRequest;
use UCloud\Cube\Apis\RenewCubePodResponse;
use UCloud\Cube\Apis\UpdateCubeDeploymentRequest;
use UCloud\Cube\Apis\UpdateCubeDeploymentResponse;

/**
 * This client is used to call actions of **Cube** service
 */
class CubeClient extends Client
{

    /**
     * CreateCubeDeployment - 创建Cube的Deployment
     *
     * See also: https://docs.ucloud.cn/api/cube-api/create_cube_deployment
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPCId" => (string) VPCId
     *     "SubnetId" => (string) 子网Id
     *     "Deployment" => (string) base64编码的Deployment的yaml。大小不超过16KB
     *     "Name" => (string) Deployment名称
     *     "ChargeType" => (string) 计费模式。枚举值为： \\ > Year，按年付费； \\ > Month，按月付费；\\ > Postpay， \\ 后付费；默认为后付费
     *     "CpuPlatform" => (string) Cpu平台（V6：Intel、A2：AMD），默认V6。支持的地域（北京2B、北京2E、上海2A、广东、香港 、东京）目前北京2E仅有A2，其余地域仅有V6
     *     "KubeConfig" => (string) base64编码的kubeconfig。大小不超过16KB
     *     "Quantity" => (integer) 购买时长。默认:值 1。 月付时，此参数传0，代表购买至月末。
     *     "Tag" => (string) 业务组。默认：Default（Default即为未分组）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DeploymentId" => (string) 控制器ID
     *     "Deployment" => (string) 经过base64编码的Deployment的yaml
     * ]
     *
     * @return CreateCubeDeploymentResponse
     * @throws UCloudException
     */
    public function createCubeDeployment(CreateCubeDeploymentRequest $request = null) {
        $resp = $this->invoke($request);
        return new CreateCubeDeploymentResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateCubePod - 创建Pod
     *
     * See also: https://docs.ucloud.cn/api/cube-api/create_cube_pod
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPCId" => (string) VPCId
     *     "SubnetId" => (string) 子网Id
     *     "Pod" => (string) base64编码的Pod的yaml。大小不超过16KB
     *     "Group" => (string) pod所在组
     *     "Name" => (string) pod的名字
     *     "Tag" => (string) 业务组。默认：Default（Default即为未分组）
     *     "CpuPlatform" => (string) Cpu平台（V6：Intel、A2：AMD、Auto），默认Auto。支持的地域（北京2B、北京2E、上海2A、广东、香港 、东京）目前北京2E仅有A2，其余地域仅有V6
     *     "ChargeType" => (string) 计费模式。枚举值为： \\ > Year，按年付费； \\ > Month，按月付费；\\ > Postpay， \\ 后付费；默认为后付费
     *     "Quantity" => (integer) 购买时长。默认:值 1。 月付时，此参数传0，代表购买至月末。
     *     "KubeConfig" => (string) base64编码的kubeconfig。大小不超过16KB
     *     "CouponId" => (string) 代金券ID。请通过DescribeCoupon接口查询，或登录用户中心查看
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Pod" => (string) base64编码的yaml
     *     "CubeId" => (string) cube的资源Id
     * ]
     *
     * @return CreateCubePodResponse
     * @throws UCloudException
     */
    public function createCubePod(CreateCubePodRequest $request = null) {
        $resp = $this->invoke($request);
        return new CreateCubePodResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteCubeDeployment - 删除Cube的Deployment
     *
     * See also: https://docs.ucloud.cn/api/cube-api/delete_cube_deployment
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "DeploymentId" => (string) 控制器Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteCubeDeploymentResponse
     * @throws UCloudException
     */
    public function deleteCubeDeployment(DeleteCubeDeploymentRequest $request = null) {
        $resp = $this->invoke($request);
        return new DeleteCubeDeploymentResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteCubePod - 删除Pod
     *
     * See also: https://docs.ucloud.cn/api/cube-api/delete_cube_pod
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "Uid" => (string) cubeid和uid任意一个（必须）
     *     "CubeId" => (string) cubeid和uid任意一个（必须）
     *     "ReleaseEIP" => (boolean) 删除cube时是否释放绑定的EIP。默认为false。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteCubePodResponse
     * @throws UCloudException
     */
    public function deleteCubePod(DeleteCubePodRequest $request = null) {
        $resp = $this->invoke($request);
        return new DeleteCubePodResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetCubeDeployment - 获取Deployment的详细信息
     *
     * See also: https://docs.ucloud.cn/api/cube-api/get_cube_deployment
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "DeploymentId" => (string) Deployment的Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Deployment" => (string) 经过base64编码的Deployment的yaml
     * ]
     *
     * @return GetCubeDeploymentResponse
     * @throws UCloudException
     */
    public function getCubeDeployment(GetCubeDeploymentRequest $request = null) {
        $resp = $this->invoke($request);
        return new GetCubeDeploymentResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetCubeExecToken - 获取登录容器的token
     *
     * See also: https://docs.ucloud.cn/api/cube-api/get_cube_exec_token
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ContainerName" => (string) 容器名称
     *     "CubeId" => (string) CubeId 和 Uid 中必须填写任意一个。CubeId 是所有 Cube 资源的唯一 ID，如非在 UK8S 通过 Virtual Kubelet 插件创建的 Cube， 则必填 CubeId
     *     "Uid" => (string) CubeId 和 Uid 中必须填写任意一个。Uid 是在 UK8S 中通过 Virtual Kubelet 插件创建出的 Cube 的唯一标识
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Token" => (string) 有效时间5min
     *     "TerminalUrl" => (string) terminal的登录连接地址，限单点登录，有效时间5min
     * ]
     *
     * @return GetCubeExecTokenResponse
     * @throws UCloudException
     */
    public function getCubeExecToken(GetCubeExecTokenRequest $request = null) {
        $resp = $this->invoke($request);
        return new GetCubeExecTokenResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetCubeExtendInfo - 获取Cube的额外信息
     *
     * See also: https://docs.ucloud.cn/api/cube-api/get_cube_extend_info
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "CubeIds" => (string) id列表以逗号(,)分割
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ExtendInfo" => (array<object>) CubeExtendInfo[
     *         [
     *             "CubeId" => (string) Cube的Id
     *             "Name" => (string) Cube的名称
     *             "Eip" => (array<object>) EIPSet[
     *                 [
     *                     "Bandwidth" => (integer) EIP带宽值
     *                     "BandwidthType" => (integer) 带宽类型0标准普通带宽，1表示共享带宽
     *                     "CreateTime" => (integer) EIP创建时间
     *                     "EIPAddr" => (array<object>) EIP地址[
     *                         [
     *                             "IP" => (string) IP地址
     *                             "OperatorName" => (string) 线路名称BGP或者internalation
     *                         ]
     *                     ]
     *                     "EIPId" => (string) EIPId
     *                     "PayMode" => (string) 付费模式，带宽付费或者流量付费
     *                     "Resource" => (string) EIP绑定对象的资源Id
     *                     "Status" => (string) EIP状态，表示使用中或者空闲
     *                     "Weight" => (integer) EIP权重
     *                 ]
     *             ]
     *             "Expiration" => (integer) 资源有效期
     *             "Tag" => (string) 业务组名称
     *         ]
     *     ]
     * ]
     *
     * @return GetCubeExtendInfoResponse
     * @throws UCloudException
     */
    public function getCubeExtendInfo(GetCubeExtendInfoRequest $request = null) {
        $resp = $this->invoke($request);
        return new GetCubeExtendInfoResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetCubeMetrics - 获取Cube实例（Pod，PodX，Deploy等）监控数据时间序列
     *
     * See also: https://docs.ucloud.cn/api/cube-api/get_cube_metrics
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ResourceId" => (string) Cube实例资源ID
     *     "MetricName" => (array<string>) 监控指标名称
     *     "BeginTime" => (integer) 开始时间
     *     "EndTime" => (integer) 结束时间，必须大于开始时间
     *     "ContainerName" => (string) Pod内容器名称
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSets" => (array<object>) 时间序列集合[
     *         [
     *             "MetricName" => (string) 
     *             "Values" => (array<object>) [
     *                 [
     *                     "Value" => (number) 
     *                     "Timestamp" => (integer) 
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return GetCubeMetricsResponse
     * @throws UCloudException
     */
    public function getCubeMetrics(GetCubeMetricsRequest $request = null) {
        $resp = $this->invoke($request);
        return new GetCubeMetricsResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetCubePod - 获取Pod的详细信息
     *
     * See also: https://docs.ucloud.cn/api/cube-api/get_cube_pod
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "CubeId" => (string) CubeId和Uid任意一个
     *     "Uid" => (string) CubeId和Uid任意一个
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Pod" => (string) base64编码的pod的yaml
     * ]
     *
     * @return GetCubePodResponse
     * @throws UCloudException
     */
    public function getCubePod(GetCubePodRequest $request = null) {
        $resp = $this->invoke($request);
        return new GetCubePodResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetCubePrice - 获取cube的价格
     *
     * See also: https://docs.ucloud.cn/api/cube-api/get_cube_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Count" => (string) 购买数量
     *     "Cpu" => (string) CPU 配置，单位为毫核，例如如 1 核则须输入 1000
     *     "Mem" => (string) 内存配置，单位为 Mi，例如 1Gi 须输入 1024
     *     "ChargeType" => (string) 计费模式。枚举值为： \\ > Year，按年付费； \\ > Month，按月付费；\\ > Dynamic，按小时预付费 \\ > Postpay，按秒后付费，默认为月付
     *     "Quantity" => (integer) 购买时长。默认:值 1。按小时购买（Dynamic/Postpay）时无需此参数。 月付时，此参数传0，代表购买至月末。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Price" => (integer) 折扣后价格，单位为分
     *     "OriginalPrice" => (integer) 列表价格，单位为分
     * ]
     *
     * @return GetCubePriceResponse
     * @throws UCloudException
     */
    public function getCubePrice(GetCubePriceRequest $request = null) {
        $resp = $this->invoke($request);
        return new GetCubePriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetCubeToken - 获取Cube的token，可用于terminal登录、log获取
     *
     * See also: https://docs.ucloud.cn/api/cube-api/get_cube_token
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ContainerName" => (string) 容器名称
     *     "CubeId" => (string) CubeId 和 Uid 中必须填写任意一个。CubeId 是所有 Cube 资源的唯一 ID，如非在 UK8S 通过 Virtual Kubelet 插件创建的 Cube， 则必填 CubeId
     *     "Uid" => (string) CubeId 和 Uid 中必须填写任意一个。Uid 是在 UK8S 中通过 Virtual Kubelet 插件创建出的 Cube 的唯一标识
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Token" => (string) 有效时间5min
     * ]
     *
     * @return GetCubeTokenResponse
     * @throws UCloudException
     */
    public function getCubeToken(GetCubeTokenRequest $request = null) {
        $resp = $this->invoke($request);
        return new GetCubeTokenResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListCubeDeployment - 获取Cube的Deployment列表
     *
     * See also: https://docs.ucloud.cn/api/cube-api/list_cube_deployment
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Offset" => (integer) 默认0
     *     "Limit" => (integer) 默认20
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 
     *     "Deployments" => (array<string>) DeploymentInfo
     * ]
     *
     * @return ListCubeDeploymentResponse
     * @throws UCloudException
     */
    public function listCubeDeployment(ListCubeDeploymentRequest $request = null) {
        $resp = $this->invoke($request);
        return new ListCubeDeploymentResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListCubePod - 获取Pods列表
     *
     * See also: https://docs.ucloud.cn/api/cube-api/list_cube_pod
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPCId" => (string) VPC的Id
     *     "SubnetId" => (string) 子网Id
     *     "Group" => (string) 组名称
     *     "Offset" => (integer) 默认0
     *     "Limit" => (integer) 默认20
     *     "DeploymentId" => (string) Deployment的Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Pods" => (array<string>) Pod列表，每条数据都做了base64编码
     *     "TotalCount" => (integer) Cube的总数
     * ]
     *
     * @return ListCubePodResponse
     * @throws UCloudException
     */
    public function listCubePod(ListCubePodRequest $request = null) {
        $resp = $this->invoke($request);
        return new ListCubePodResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyCubeExtendInfo - 修改Cube额外信息
     *
     * See also: https://docs.ucloud.cn/api/cube-api/modify_cube_extend_info
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "CubeId" => (string) cube的id
     *     "Name" => (string) 修改的名字，规则（^[a-zA-Z0-9-_.\u4e00-\u9fa5]{1,32}）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ModifyCubeExtendInfoResponse
     * @throws UCloudException
     */
    public function modifyCubeExtendInfo(ModifyCubeExtendInfoRequest $request = null) {
        $resp = $this->invoke($request);
        return new ModifyCubeExtendInfoResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyCubeTag - 修改业务组名字
     *
     * See also: https://docs.ucloud.cn/api/cube-api/modify_cube_tag
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CubeId" => (string) CubeId
     *     "Tag" => (string) 业务组名称
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "CubeId" => (string) CubeId
     * ]
     *
     * @return ModifyCubeTagResponse
     * @throws UCloudException
     */
    public function modifyCubeTag(ModifyCubeTagRequest $request = null) {
        $resp = $this->invoke($request);
        return new ModifyCubeTagResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * RebootCubePod - 重启Cube Pod
     *
     * See also: https://docs.ucloud.cn/api/cube-api/reboot_cube_pod
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CubeId" => (string) cube资源id（cube-xxxxxx）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return RebootCubePodResponse
     * @throws UCloudException
     */
    public function rebootCubePod(RebootCubePodRequest $request = null) {
        $resp = $this->invoke($request);
        return new RebootCubePodResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * RenewCubePod - 更新Pod
     *
     * See also: https://docs.ucloud.cn/api/cube-api/renew_cube_pod
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "CubeId" => (string) 容器Id
     *     "Pod" => (string) base64编码的Pod的yaml
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Pod" => (string) base64编码过的yaml，需要解码获取信息
     * ]
     *
     * @return RenewCubePodResponse
     * @throws UCloudException
     */
    public function renewCubePod(RenewCubePodRequest $request = null) {
        $resp = $this->invoke($request);
        return new RenewCubePodResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateCubeDeployment - 更新Deployment
     *
     * See also: https://docs.ucloud.cn/api/cube-api/update_cube_deployment
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "DeploymentId" => (string) Deployment的Id
     *     "Deployment" => (string) base64编码的Deployment的yaml。大小不超过16KB
     *     "Name" => (string) Deployment的name
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Deployment" => (string) 经过base64编码的Deployment的yaml
     * ]
     *
     * @return UpdateCubeDeploymentResponse
     * @throws UCloudException
     */
    public function updateCubeDeployment(UpdateCubeDeploymentRequest $request = null) {
        $resp = $this->invoke($request);
        return new UpdateCubeDeploymentResponse($resp->toArray(), $resp->getRequestId());
    }
}
