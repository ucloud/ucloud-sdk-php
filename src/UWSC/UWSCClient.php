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
namespace UCloud\UWSC;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\UWSC\Apis\AddExportLineRulesRequest;
use UCloud\UWSC\Apis\AddExportLineRulesResponse;
use UCloud\UWSC\Apis\BindCPERequest;
use UCloud\UWSC\Apis\BindCPEResponse;
use UCloud\UWSC\Apis\CreateCPERequest;
use UCloud\UWSC\Apis\CreateCPEResponse;
use UCloud\UWSC\Apis\CreateExportLineRequest;
use UCloud\UWSC\Apis\CreateExportLineResponse;
use UCloud\UWSC\Apis\DeleteExportLineRequest;
use UCloud\UWSC\Apis\DeleteExportLineResponse;
use UCloud\UWSC\Apis\DeleteExportLineRulesRequest;
use UCloud\UWSC\Apis\DeleteExportLineRulesResponse;
use UCloud\UWSC\Apis\DescribeCPERequest;
use UCloud\UWSC\Apis\DescribeCPEResponse;
use UCloud\UWSC\Apis\DescribeExportLineRequest;
use UCloud\UWSC\Apis\DescribeExportLineResponse;
use UCloud\UWSC\Apis\DescribeExportLineRulesRequest;
use UCloud\UWSC\Apis\DescribeExportLineRulesResponse;
use UCloud\UWSC\Apis\UpdateExportLineRequest;
use UCloud\UWSC\Apis\UpdateExportLineResponse;
use UCloud\UWSC\Apis\UpgradeExportLineRequest;
use UCloud\UWSC\Apis\UpgradeExportLineResponse;

/**
 * This client is used to call actions of **UWSC** service
 */
class UWSCClient extends Client
{

    /**
     * AddExportLineRules - 添加加速规则
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/add_export_line_rules
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ResourceId" => (string) UReach资源ID
     *     "RuleTypes" => (array<string>) 白名单类型：Developer、CrossBorder
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return AddExportLineRulesResponse
     * @throws UCloudException
     */
    public function addExportLineRules(AddExportLineRulesRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AddExportLineRulesResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * BindCPE - 绑定 CPE
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/bind_cpe
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CPEId" => (string) cpe id
     *     "Sn" => (string) sn id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return BindCPEResponse
     * @throws UCloudException
     */
    public function bindCPE(BindCPERequest $request = null)
    {
        $resp = $this->invoke($request);
        return new BindCPEResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateCPE - 创建 CPE
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/create_cpe
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Name" => (string) cpe 名称
     *     "Remark" => (string) cpe 备注
     *     "DeviceType" => (string) 设备型号，枚举值: UCPE3600、UCPE3601
     *     "Label" => (string) 标签：UReach智能网关：Access
     *     "UserInfo" => (string) 结构体，详见UserInfo模型
     *     "Count" => (integer) 数量，默认为1
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "CPEId" => (string) cpe id
     * ]
     *
     * @return CreateCPEResponse
     * @throws UCloudException
     */
    public function createCPE(CreateCPERequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateCPEResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateExportLine - 创建加速线路
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/create_export_line
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "FromRegion" => (string) 本端地域
     *     "ToRegion" => (string) 目标地域
     *     "IpType" => (string) IP类型：International、BGP、Native、Resident
     *     "CPEId" => (string) CPE Id
     *     "PkgType" => (string) 套餐类型：2M-Entry、5M-Basic、10M-Enterprise
     *     "Bandwidth" => (integer) 带宽大小
     *     "Name" => (string) 资源名称
     *     "Tag" => (string) 业务组名称, 默认为 "Default"
     *     "ChargeType" => (string) 计费模式。枚举值为： Year，按年付费； Month，按月付费； Dynamic，按小时付费（需开启权限）。默认为月付
     *     "Quantity" => (integer) 购买时长。默认: 1。按小时购买(Dynamic)时无需此参数。 月付时，此参数传0，代表了购买至月末。
     *     "Remark" => (string) 备注
     *     "PayMode" => (string) 计费类型：fixed-bw，固定带宽；traffic，流量计费
     *     "CouponId" => (integer) 代金券ID。请登录用户中心查看
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ResourceId" => (string) 资源ID
     * ]
     *
     * @return CreateExportLineResponse
     * @throws UCloudException
     */
    public function createExportLine(CreateExportLineRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateExportLineResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteExportLine - 删除加速线路
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/delete_export_line
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ResourceId" => (string) UReach资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteExportLineResponse
     * @throws UCloudException
     */
    public function deleteExportLine(DeleteExportLineRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteExportLineResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteExportLineRules - 删除加速规则
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/delete_export_line_rules
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ResourceId" => (string) UReach资源ID
     *     "RuleTypes" => (array<string>) 白名单类型：Developer、CrossBorder
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteExportLineRulesResponse
     * @throws UCloudException
     */
    public function deleteExportLineRules(DeleteExportLineRulesRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteExportLineRulesResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeCPE - 查询 CPE 信息
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/describe_cpe
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CPEId" => (string) cpe id
     *     "Label" => (string) 标签：Access、Network
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "CPEInfos" => (array<object>) cpe 详情[
     *         [
     *             "CPEId" => (string) 资源ID
     *             "CPEName" => (string) 资源名称
     *             "Remark" => (string) 备注
     *             "DeviceTypeName" => (string) 设备型号
     *             "Vendor" => (string) 供应商
     *             "PopGwId" => (array<string>) 绑定的UWAN资源ID
     *             "Sn" => (string) 设备SN
     *             "Status" => (integer) 状态
     *             "ConfUpdateTime" => (integer) 配置更新时间
     *             "Ports" => (array<string>) 端口
     *             "LinkNum" => (integer) 链路数量
     *             "CreateTime" => (integer) 创建时间
     *             "LineStatus" => (string) 是否与线路绑定
     *             "ResourceIds" => (array<string>) 绑定的UReach线路资源ID
     *             "UseTime" => (integer) 有效使用时间(天)
     *         ]
     *     ]
     * ]
     *
     * @return DescribeCPEResponse
     * @throws UCloudException
     */
    public function describeCPE(DescribeCPERequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeCPEResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeExportLine - 查询CPE绑定的加速线路信息
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/describe_export_line
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CPEId" => (string) CPE资源ID
     *     "ResourceId" => (string) UReach资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "LineInfos" => (array<object>) 线路信息[
     *         [
     *             "Name" => (string) 名称
     *             "Remark" => (string) 备注
     *             "ResourceId" => (string) 线路资源ID
     *             "InstanceId" => (string) 线路资源ID对应的加速线路ID
     *             "Bandwidth" => (integer) 带宽大小(Mbps)
     *             "ChargeType" => (string) 付费方式(按月、按年等)
     *             "PayMode" => (string) 计费方式(固定带宽: fixed-bw；流量计费：traffic)
     *             "FromRegion" => (string) 入口地域
     *             "FromRegionName" => (string) 入口地域名称
     *             "ToRegion" => (string) 出口地域
     *             "ToRegionName" => (string) 出口地域名称
     *             "IP" => (array<string>)
     *             "Status" => (string) 线路是否绑定CPE；"1"：已绑定；"0"未绑定
     *             "CreateTime" => (integer) 创建时间
     *             "ExpireTime" => (integer) 到期时间
     *             "CPEIds" => (array<string>) 线路绑定的CPE资源ID
     *             "PkgType" => (string) 套餐类型
     *             "IpType" => (string) IP类型
     *             "InstanceStatus" => (string) 是否过期(normal/expire)
     *             "Socks" => (object) [
     *                 "Addr" => (string)
     *                 "Port" => (integer)
     *                 "Account" => (string)
     *             ]
     *             "Source" => (array<string>) 源IP地址
     *         ]
     *     ]
     * ]
     *
     * @return DescribeExportLineResponse
     * @throws UCloudException
     */
    public function describeExportLine(DescribeExportLineRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeExportLineResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeExportLineRules - 查询白名单
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/describe_export_line_rules
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ResourceId" => (string) UReach资源ID
     *     "RuleType" => (string) 白名单类型
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "WhiteListInfos" => (array<object>) 白名单信息[
     *         [
     *             "RuleType" => (string)
     *             "Name" => (string)
     *             "Remark" => (string)
     *         ]
     *     ]
     * ]
     *
     * @return DescribeExportLineRulesResponse
     * @throws UCloudException
     */
    public function describeExportLineRules(DescribeExportLineRulesRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeExportLineRulesResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateExportLine - 修改加速线路
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/update_export_line
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ResourceId" => (string) UReach资源ID
     *     "Bandwidth" => (string) 带宽大小（仅自定义套餐支持修改）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateExportLineResponse
     * @throws UCloudException
     */
    public function updateExportLine(UpdateExportLineRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateExportLineResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpgradeExportLine - 升级加速线路
     *
     * See also: https://docs.ucloud.cn/api/uwsc-api/upgrade_export_line
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ResourceId" => (string) UReach资源ID
     *     "PkgType" => (string) 目标套餐类型：2M-Entry、5M-Basic、10M-Enterprise
     *     "IpType" => (string) 原IP类型：International、BGP、Native、Resident
     *     "Bandwidth" => (integer) 带宽大小
     *     "ChargeType" => (string) 计费模式。枚举值为： Year，按年付费； Month，按月付费； Dynamic，按小时付费（需开启权限）。默认为月付
     *     "Quantity" => (integer) 购买时长。默认: 1。按小时购买(Dynamic)时无需此参数。 月付时，此参数传0，代表了购买至月末。
     *     "CouponId" => (integer) 代金券ID。请登录用户中心查看
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpgradeExportLineResponse
     * @throws UCloudException
     */
    public function upgradeExportLine(UpgradeExportLineRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpgradeExportLineResponse($resp->toArray(), $resp->getRequestId());
    }
}
