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
namespace UCloud\UAIModelverse;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\UAIModelverse\Apis\CreateUMInferAPIKeyRequest;
use UCloud\UAIModelverse\Apis\CreateUMInferAPIKeyResponse;
use UCloud\UAIModelverse\Apis\DeleteUMInferAPIKeyRequest;
use UCloud\UAIModelverse\Apis\DeleteUMInferAPIKeyResponse;
use UCloud\UAIModelverse\Apis\DownloadListPaidOrdersRequest;
use UCloud\UAIModelverse\Apis\DownloadListPaidOrdersResponse;
use UCloud\UAIModelverse\Apis\DownloadListUnpaidOrdersRequest;
use UCloud\UAIModelverse\Apis\DownloadListUnpaidOrdersResponse;
use UCloud\UAIModelverse\Apis\DownloadOrderSummaryRequest;
use UCloud\UAIModelverse\Apis\DownloadOrderSummaryResponse;
use UCloud\UAIModelverse\Apis\DownloadUMInferRequestLogRequest;
use UCloud\UAIModelverse\Apis\DownloadUMInferRequestLogResponse;
use UCloud\UAIModelverse\Apis\GetFilterOptionsRequest;
use UCloud\UAIModelverse\Apis\GetFilterOptionsResponse;
use UCloud\UAIModelverse\Apis\GetOrderAmountRequest;
use UCloud\UAIModelverse\Apis\GetOrderAmountResponse;
use UCloud\UAIModelverse\Apis\GetUFSquareModelDetailRequest;
use UCloud\UAIModelverse\Apis\GetUFSquareModelDetailResponse;
use UCloud\UAIModelverse\Apis\GetUFSquareModelPricesRequest;
use UCloud\UAIModelverse\Apis\GetUFSquareModelPricesResponse;
use UCloud\UAIModelverse\Apis\GetUMInferRequestLogDetailRequest;
use UCloud\UAIModelverse\Apis\GetUMInferRequestLogDetailResponse;
use UCloud\UAIModelverse\Apis\ListPaidOrderSummaryRequest;
use UCloud\UAIModelverse\Apis\ListPaidOrderSummaryResponse;
use UCloud\UAIModelverse\Apis\ListPaidOrdersRequest;
use UCloud\UAIModelverse\Apis\ListPaidOrdersResponse;
use UCloud\UAIModelverse\Apis\ListUFSquareModelRequest;
use UCloud\UAIModelverse\Apis\ListUFSquareModelResponse;
use UCloud\UAIModelverse\Apis\ListUFSquareModelFiltersAuthRequest;
use UCloud\UAIModelverse\Apis\ListUFSquareModelFiltersAuthResponse;
use UCloud\UAIModelverse\Apis\ListUMInferAPIKeyRequest;
use UCloud\UAIModelverse\Apis\ListUMInferAPIKeyResponse;
use UCloud\UAIModelverse\Apis\ListUMInferRequestLogsRequest;
use UCloud\UAIModelverse\Apis\ListUMInferRequestLogsResponse;
use UCloud\UAIModelverse\Apis\ListUnpaidOrderSummaryRequest;
use UCloud\UAIModelverse\Apis\ListUnpaidOrderSummaryResponse;
use UCloud\UAIModelverse\Apis\ListUnpaidOrdersRequest;
use UCloud\UAIModelverse\Apis\ListUnpaidOrdersResponse;
use UCloud\UAIModelverse\Apis\StartPayUnpaidOrdersRequest;
use UCloud\UAIModelverse\Apis\StartPayUnpaidOrdersResponse;
use UCloud\UAIModelverse\Apis\UpdateUMInferAPIKeyRequest;
use UCloud\UAIModelverse\Apis\UpdateUMInferAPIKeyResponse;

/**
 * This client is used to call actions of **UAIModelverse** service
 */
class UAIModelverseClient extends Client
{

    /**
     * CreateUMInferAPIKey - 创建apikey
     *
     * See also: https://docs.ucloud.cn/api/uai-modelverse-api/create_um_infer_api_key
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Name" => (string) apikey名称
     *     "ModelverseDisabled" => (integer) 是否modelverse可用 0: 启用 1: 禁用
     *     "SandBoxDisabled" => (integer) 是否沙盒可用 0: 启用 1: 禁用(astraflow 沙盒控制未上线，暂时无效)
     *     "DailyLimitAmount" => (string) 日限额，单位随用户所在渠道。126渠道单位为美元
     *     "MonthlyLimitAmount" => (string) 月限额，单位随用户所在渠道。126渠道单位为美元
     *     "GrantAllModels" => (boolean) 全部模型访问开关，开启不受 GrantedModels 参数控制，关闭只能访问 GrantedModels 中添加模型
     *     "GrantedModels" => (string) 授权模型，内容为数组格式。当 GrantAllModels 为false时 当前key只可访问数组中模型。例：["deepseek-ai/DeepSeek-V3.2-Think"]
     *     "IPWhitelist" => (string) ip白名单，换行分割的多组ip。支持IPv4和网段,输入后回车生效,最多100个, 示例:﻿192.168.1.1192.168.1.10-192.168.1.100192.168.1.10/24
     *     "InferenceLogEnabled" => (integer) 是否开启推理日志
     *     "ExpireTime" => (integer) API Key 过期时间，Unix 时间戳，单位为秒。传 -1 表示永不过期。
     *     "ModelAccessMode" => (string) 模型访问策略：whitelist 表示白名单模式，blacklist 表示黑名单模式。
     *     "DeniedModels" => (string) API Key 禁止访问的模型列表。内容为数组格式。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (object) apikey[
     *         "IPWhitelist" => (string) ip白名单，换行分割的多组ip。支持IPv4和网段,输入后回车生效,最多100个, 示例: ﻿ 192.168.1.1 192.168.1.10-192.168.1.100 192.168.1.10/24
     *         "InferenceLogEnabled" => (integer) 是否开启推理日志
     *         "DeniedModels" => (array<string>) 禁止访问的模型列表。当 ModelAccessMode=blacklist 时生效。
     *         "ModelAccessMode" => (string) 模型访问策略。可选值：whitelist（白名单模式，默认）或 blacklist（黑名单模式）。
     *         "KeyId" => (string) 资源ID
     *         "Name" => (string) 名称
     *         "ChannelId" => (integer) 渠道id
     *         "TopOrganizationId" => (integer) 公司id
     *         "OrganizationId" => (integer) 项目id
     *         "Status" => (integer) 状态，1 正常
     *         "CreateTime" => (integer) 创建时间
     *         "Key" => (string) 密钥值
     *         "ExpireTime" => (integer) 过期时间的unix时间戳，-1 用不过期
     *         "ModelverseDisabled" => (integer) 是否modelverse可用 0: 启用 1: 禁用
     *         "SandBoxDisabled" => (integer) 是否沙盒可用 0: 启用 1: 禁用(astraflow 沙盒控制未上线，暂时无效)
     *         "DailyLimitAmount" => (string) 日限额，单位随用户所在渠道。126渠道单位为美元
     *         "DailyUsedAmount" => (string) 日已使用额，单位随用户所在渠道。126渠道单位为美元
     *         "MonthlyLimitAmount" => (string) 月限额，单位随用户所在渠道。126渠道单位为美元
     *         "MonthlyUsedAmount" => (string) 月已使用额，单位随用户所在渠道。126渠道单位为美元
     *         "GrantAllModels" => (boolean) 全部模型访问开关，开启不受 GrantedModels 参数控制，关闭只能访问 GrantedModels 中添加模型
     *         "GrantedModels" => (array<string>) 授权的模型，英文逗号分隔，all表示所有模型都有权限
     *     ]
     *     "TotalCount" => (integer) 总条数
     * ]
     *
     * @return CreateUMInferAPIKeyResponse
     * @throws UCloudException
     */
    public function createUMInferAPIKey(CreateUMInferAPIKeyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUMInferAPIKeyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUMInferAPIKey - 删除apikey
     *
     * See also: https://docs.ucloud.cn/api/uai-modelverse-api/delete_um_infer_api_key
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "KeyId" => (string) 要删除的apikey id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UminferID" => (string) apikey 的资源ID
     * ]
     *
     * @return DeleteUMInferAPIKeyResponse
     * @throws UCloudException
     */
    public function deleteUMInferAPIKey(DeleteUMInferAPIKeyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUMInferAPIKeyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DownloadListPaidOrders - 生成已完成（已支付）订单明细 Excel 文件并返回 US3 预签名下载链接；查询条件与 ListPaidOrders 完全一致，StartTime/EndTime 必填；取数范围是 [StartTime, EndTime)，即取开始计费时间大于等于StartTime且小于EndTime的数据
     *
     * See also: https://docs.ucloud.cn/api/uai-modelverse-api/download_list_paid_orders
     *
     * Arguments:
     *
     * $args = [
     *     "StartTime" => (integer) 查询开始时间（Unix 时间戳，秒级），必填
     *     "EndTime" => (integer) 查询结束时间（Unix 时间戳，秒级），必填；必须大于 StartTime
     *     "ResourceIds" => (array<string>) 资源ID列表（可选）
     *     "ModelIds" => (array<string>) 模型ID列表（可选）
     *     "PricingUnits" => (array<integer>) 计费单位列表（多选，可选）
     *     "PricingSkus" => (array<string>) 计费单元（SKU）列表（可选）
     *     "OrderTypes" => (array<integer>) 订单类型数组（多选，可选）
     *     "OrganizationIds" => (array<integer>) 组织ID列表（可选）
     *     "Regions" => (array<string>) 地域列表（可选），参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProductCodes" => (array<string>) 产品类型列表（可选），枚举值：`modelverse`、`sandbox`
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (object) 下载文件信息[
     *         "DownloadURL" => (string) 文件下载链接（US3 预签名 URL，请在有效期内立即下载）
     *         "FileName" => (string) 文件名
     *         "FileSize" => (integer) 文件大小（字节）
     *     ]
     * ]
     *
     * @return DownloadListPaidOrdersResponse
     * @throws UCloudException
     */
    public function downloadListPaidOrders(DownloadListPaidOrdersRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DownloadListPaidOrdersResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DownloadListUnpaidOrders - 生成欠费（未支付）订单明细 Excel 文件并返回 US3 预签名下载链接；查询条件与 ListUnpaidOrders 完全一致，StartTime/EndTime 必填
     *
     * See also: https://docs.ucloud.cn/api/uai-modelverse-api/download_list_unpaid_orders
     *
     * Arguments:
     *
     * $args = [
     *     "StartTime" => (integer) 查询开始时间（Unix 时间戳，秒级），必填
     *     "EndTime" => (integer) 查询结束时间（Unix 时间戳，秒级），必填；必须大于 StartTime
     *     "ResourceIds" => (array<string>) 资源ID列表（可选）
     *     "ModelIds" => (array<string>) 模型ID列表（可选）
     *     "PricingUnits" => (array<integer>) 计费单位列表（多选，可选）
     *     "OrderTypes" => (array<integer>) 订单类型数组（多选，可选）
     *     "OrganizationIds" => (array<integer>) 组织ID列表（可选）
     *     "PricingSkus" => (array<string>) 计费单元（SKU）列表（可选）
     *     "ProductCodes" => (array<string>) 产品类型列表（可选），枚举值：`modelverse`、`sandbox`
     *     "Regions" => (array<string>) 地域列表（可选），参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (object) 下载文件信息[
     *         "DownloadURL" => (string) 文件下载链接（US3 预签名 URL，请在有效期内立即下载）
     *         "FileName" => (string) 文件名
     *         "FileSize" => (integer) 文件大小（字节）
     *     ]
     * ]
     *
     * @return DownloadListUnpaidOrdersResponse
     * @throws UCloudException
     */
    public function downloadListUnpaidOrders(DownloadListUnpaidOrdersRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DownloadListUnpaidOrdersResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DownloadOrderSummary - 生成订单汇总 Excel 文件（包含已完成订单和欠费订单两个 sheet），返回 US3 预签名下载链接；StartTime/EndTime 必填
     *
     * See also: https://docs.ucloud.cn/api/uai-modelverse-api/download_order_summary
     *
     * Arguments:
     *
     * $args = [
     *     "StartTime" => (integer) 查询开始时间（Unix 时间戳，秒级），必填
     *     "EndTime" => (integer) 查询结束时间（Unix 时间戳，秒级），必填；必须大于 StartTime
     *     "ResourceIds" => (array<string>) 资源ID列表（可选）
     *     "ModelIds" => (array<string>) 模型ID列表（可选）
     *     "PricingUnits" => (array<integer>) 计费单位列表（多选，可选）
     *     "OrderTypes" => (array<integer>) 订单类型数组（多选，可选）
     *     "ChargeTypes" => (array<integer>) 计费类型数组（多选，可选）
     *     "OrganizationIds" => (array<integer>) 组织ID列表（可选）
     *     "Regions" => (array<string>) 地域列表（可选），参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "PricingSkus" => (array<string>) 计费单元（SKU）列表（可选）
     *     "ProductCodes" => (array<string>) 产品类型列表（可选），枚举值：`modelverse`、`sandbox`
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (object) 下载文件信息[
     *         "DownloadURL" => (string) 文件下载链接（US3 预签名 URL，请在有效期内立即下载）
     *         "FileName" => (string) 文件名
     *         "FileSize" => (integer) 文件大小（字节）
     *     ]
     * ]
     *
     * @return DownloadOrderSummaryResponse
     * @throws UCloudException
     */
    public function downloadOrderSummary(DownloadOrderSummaryRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DownloadOrderSummaryResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DownloadUMInferRequestLog - 导出推理请求日志。单次导出时间范围最长 30 天，最多导出 2000 万条日志；同一 TopOrganizationID 同一时间仅允许 1 个导出任务在执行，已有任务执行中时请稍后重试。
     *
     * See also: https://docs.ucloud.cn/api/uai-modelverse-api/download_um_infer_request_log
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 业务地域，如 cn-wlcb。可先调用 ListUMInferRegions 获取可选地域
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。请参考 [GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "StartTime" => (integer) 导出开始时间，Unix 毫秒时间戳
     *     "EndTime" => (integer) 导出结束时间，Unix 毫秒时间戳，最长支持 30 天范围
     *     "Email" => (string) 接收导出结果的邮箱地址
     *     "ModelNames" => (array<string>) 模型名称列表，用于过滤
     *     "ApiKeyIds" => (array<string>) API Key ID 列表，用于过滤
     *     "RequestId" => (string) 请求 ID，用于精确过滤
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TaskId" => (string) 导出任务 ID
     *     "TotalCount" => (integer) 本次导出查询命中的日志行数
     * ]
     *
     * @return DownloadUMInferRequestLogResponse
     * @throws UCloudException
     */
    public function downloadUMInferRequestLog(DownloadUMInferRequestLogRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DownloadUMInferRequestLogResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetFilterOptions - 查询可用于订单筛选的资源、模型、地域等选项列表
     *
     * See also: https://docs.ucloud.cn/api/uai-modelverse-api/get_filter_options
     *
     * Arguments:
     *
     * $args = [
     *     "ProductCode" => (string) 产品类型（单选，可选），枚举值：`modelverse`、`sandbox`；为空时返回所有产品下的选项
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ResourceIds" => (array<object>) 资源选项列表[
     *         [
     *             "Name" => (string) 显示名称
     *             "Value" => (string) 值
     *         ]
     *     ]
     *     "Models" => (array<object>) 模型选项列表[
     *         [
     *             "Name" => (string) 显示名称
     *             "Value" => (string) 值
     *         ]
     *     ]
     *     "Dimensions" => (array<object>) 账单维度选项列表[
     *         [
     *             "Name" => (string) 显示名称
     *             "Value" => (string) 值
     *         ]
     *     ]
     *     "PricingUnits" => (array<object>) 计费单位选项列表[
     *         [
     *             "Name" => (string) 显示名称
     *             "Value" => (integer) 值
     *         ]
     *     ]
     *     "Regions" => (array<object>) 地域选项列表[
     *         [
     *             "Name" => (string) 显示名称
     *             "Value" => (string) 值
     *         ]
     *     ]
     *     "ProductCodes" => (array<object>) 产品类型选项列表[
     *         [
     *             "Name" => (string) 显示名称
     *             "Value" => (string) 值
     *         ]
     *     ]
     *     "Projects" => (array<object>) 项目选项列表[
     *         [
     *             "Name" => (string) 显示名称
     *             "Value" => (integer) 值
     *         ]
     *     ]
     *     "PricingSKUs" => (array<object>) 计费 SKU 选项列表[
     *         [
     *             "Name" => (string) 显示名称
     *             "Value" => (string) 值
     *         ]
     *     ]
     *     "OrderTypes" => (array<object>) 订单类型选项列表[
     *         [
     *             "Name" => (string) 显示名称
     *             "Value" => (integer) 值
     *         ]
     *     ]
     * ]
     *
     * @return GetFilterOptionsResponse
     * @throws UCloudException
     */
    public function getFilterOptions(GetFilterOptionsRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetFilterOptionsResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetOrderAmount - 查询指定条件下订单的金额汇总及数量统计
     *
     * See also: https://docs.ucloud.cn/api/uai-modelverse-api/get_order_amount
     *
     * Arguments:
     *
     * $args = [
     *     "StartTime" => (integer) 查询开始时间（Unix 时间戳，秒级）。需与 `EndTime` 同时提供，最大查询跨度 366 天
     *     "EndTime" => (integer) 查询结束时间（Unix 时间戳，秒级）。需与 `StartTime` 同时提供
     *     "ResourceIds" => (array<string>) 资源ID列表（可选）
     *     "ModelIds" => (array<string>) 模型ID列表（可选）
     *     "PricingUnits" => (array<integer>) 计费单位列表（可选）
     *     "PricingSkus" => (array<string>) 计费单元（SKU）列表（可选）
     *     "ProductCodes" => (array<string>) 产品类型列表（可选），枚举值：`modelverse`、`sandbox`
     *     "OrderTypes" => (array<integer>) 订单类型列表（可选）
     *     "Regions" => (array<string>) 地域列表（可选），参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "OrganizationIds" => (array<string>) 组织ID列表（可选）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalOrderAmount" => (string) 订单总额（所有订单的总金额）
     *     "PaidAmount" => (string) 已支付金额
     *     "UnpaidAmount" => (string) 待支付金额
     *     "CashAmount" => (string) 现金账户总金额
     *     "BonusAmount" => (string) 赠金账户总金额
     *     "CouponAmount" => (string) 代金券抵扣总额
     *     "StarCardAmount" => (string) 星力卡抵扣总金额
     *     "OrderCount" => (integer) 订单总数
     *     "PaidCount" => (integer) 已支付订单数
     *     "UnpaidCount" => (integer) 待支付订单数量
     * ]
     *
     * @return GetOrderAmountResponse
     * @throws UCloudException
     */
    public function getOrderAmount(GetOrderAmountRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetOrderAmountResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUFSquareModelDetail - 获取广场模型详情
     *
     * See also: https://docs.ucloud.cn/api/uai-modelverse-api/get_uf_square_model_detail
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Id" => (string) 主键
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "SquareModel" => (object) 模型[
     *         "BatchSquareModelId" => (string) 关联的 batch 模型广场id
     *         "IsHasBatch" => (boolean) 是否关联有可用 batch 模型
     *         "BatchName" => (string) 关联的 batch 模型名称
     *         "Manufacturer" => (string) 制造商
     *         "Id" => (string) 主键
     *         "Name" => (string) 名称
     *         "SimpleDescribe" => (string) 简要描述
     *         "Describe" => (string) 详细描述
     *         "Language" => (array<string>) 语言
     *         "MaxModelLen" => (integer) 模型长度
     *         "ModelType" => (string) 模型类型
     *         "HfUpdateTime" => (integer) HuggingFace 更新时间
     *         "CreateAt" => (integer) 创建时间
     *         "UpdateAt" => (integer) 更新时间
     *         "SupportedCapabilities" => (array<string>) 模型能力
     *         "Icon" => (string) 图标
     *         "Pricing" => (object) 定价策略[
     *             "Completion" => (number) 输出定价
     *             "Prompt" => (number) 提示词定价
     *             "Image" => (number) 生图定价
     *             "Video" => (string) 生视频定价
     *             "Currency" => (string) 币种
     *             "Unit" => (string) 单位（中文），如“次” “百万”
     *             "UnitEn" => (string) 单位（English），如“Time” “Million”
     *         ]
     *         "Tiers" => (array<object>) 价格阶梯（有序数组）[
     *             [
     *                 "Rates" => (array<object>) 该档位下的收费列表（有序数组）[
     *                     [
     *                         "ChargeItemDescriptionEn" => (string) 收费项描述英文描述
     *                         "Currency" => (string) 货币单位
     *                         "Unit" => (string) 计价单位
     *                         "UnitEn" => (string) 计价单位英文
     *                         "ChargeItem" => (string) 收费项：input/output/thinking/tool...
     *                         "ChargeItemDescription" => (string) 收费项描述
     *                         "Price" => (string) 价格
     *                     ]
     *                 ]
     *                 "DescriptionEn" => (string) 档位描述（例如 "标准上下文 32k"）
     *                 "Condition" => (string) 档位/条件（例如 "32k"、"128k"）
     *                 "Description" => (string) 档位描述（例如 "标准上下文 32k"）
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return GetUFSquareModelDetailResponse
     * @throws UCloudException
     */
    public function getUFSquareModelDetail(GetUFSquareModelDetailRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUFSquareModelDetailResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUFSquareModelPrices - 批量查询模型价格
     *
     * See also: https://docs.ucloud.cn/api/uai-modelverse-api/get_uf_square_model_prices
     *
     * Arguments:
     *
     * $args = [
     *     "Keyword" => (string) 模型名称模糊搜索（例：deepseek-r1）
     *     "Offset" => (integer) 列表起始位置偏移量，默认为0
     *     "Limit" => (integer) 返回数据长度，默认为20
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Models" => (array<object>) 匹配模型的价格信息[
     *         [
     *             "Manufacturer" => (string) 制造商
     *             "ModelName" => (string) 模型名称
     *             "ModelId" => (string) ModelId
     *             "Tiers" => (array<object>) 价格阶梯（有序数组）[
     *                 [
     *                     "Rates" => (array<object>) 该档位下的收费列表（有序数组）[
     *                         [
     *                             "ChargeItemDescriptionEn" => (string) 收费项描述英文描述
     *                             "Currency" => (string) 货币单位
     *                             "Unit" => (string) 计价单位
     *                             "UnitEn" => (string) 计价单位英文
     *                             "ChargeItem" => (string) 收费项：input/output/thinking/tool...
     *                             "ChargeItemDescription" => (string) 收费项描述
     *                             "Price" => (string) 价格
     *                         ]
     *                     ]
     *                     "DescriptionEn" => (string) 档位描述（例如 "标准上下文 32k"）
     *                     "Condition" => (string) 档位/条件（例如 "32k"、"128k"）
     *                     "Description" => (string) 档位描述（例如 "标准上下文 32k"）
     *                 ]
     *             ]
     *         ]
     *     ]
     *     "TotalCount" => (integer) 总条数用于翻页
     * ]
     *
     * @return GetUFSquareModelPricesResponse
     * @throws UCloudException
     */
    public function getUFSquareModelPrices(GetUFSquareModelPricesRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUFSquareModelPricesResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUMInferRequestLogDetail - 原始日志详情
     *
     * See also: https://docs.ucloud.cn/api/uai-modelverse-api/get_um_infer_request_log_detail
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 业务地域，如 cn-wlcb。可先调用 ListUMInferRegions 获取可选地域
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。请参考 [GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "RequestId" => (string) 请求 ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (object) 请求日志详情[
     *         "RequestId" => (string) 请求 ID
     *         "TopOrganizationId" => (string) 顶级组织 ID
     *         "OrganizationId" => (string) 组织 ID
     *         "ClientIp" => (string) 客户端 IP
     *         "Region" => (string) 业务地域
     *         "StartTime" => (integer) 请求开始时间，Unix 毫秒时间戳
     *         "StartTimeReadable" => (string) 请求开始时间，可读格式
     *         "ModelName" => (string) 模型名称
     *         "IsStream" => (boolean) 是否流式请求
     *         "ApiKeyId" => (string) API Key ID
     *         "HttpStatusCode" => (integer) HTTP 状态码
     *         "ErrorCode" => (string) 错误码
     *         "ErrorMessage" => (string) 错误信息
     *         "IsSuccess" => (boolean) 请求是否成功
     *         "Latency" => (integer) 请求总延迟，单位毫秒
     *         "FirstTokenLatency" => (integer) 首 Token 延迟，单位毫秒
     *         "OutputTokenThroughput" => (number) 输出 Token 吞吐
     *         "Usage" => (string) 模型返回的 usage 原文 JSON
     *         "Request" => (string) 请求原文，本期返回为空
     *         "Response" => (string) 响应原文，本期返回为空
     *         "Extras" => (string) 扩展信息，本期返回为空
     *     ]
     * ]
     *
     * @return GetUMInferRequestLogDetailResponse
     * @throws UCloudException
     */
    public function getUMInferRequestLogDetail(GetUMInferRequestLogDetailRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUMInferRequestLogDetailResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListPaidOrderSummary - 按指定维度汇总查询已完成（已支付）订单的统计数据
     *
     * See also: https://docs.ucloud.cn/api/uai-modelverse-api/list_paid_order_summary
     *
     * Arguments:
     *
     * $args = [
     *     "StartTime" => (integer) 查询开始时间（Unix 时间戳，秒级），必填
     *     "EndTime" => (integer) 查询结束时间（Unix 时间戳，秒级），必填；必须大于 StartTime
     *     "ResourceIds" => (array<string>) 资源ID数组（多选，可选）
     *     "ModelIds" => (array<string>) 模型ID数组（多选，可选)
     *     "PricingUnits" => (array<integer>) 计费单位数组（多选，可选）
     *     "OrderTypes" => (array<integer>) 订单类型数组（多选，可选）
     *     "ChargeTypes" => (array<integer>) 计费类型数组（多选，可选）
     *     "PricingSkus" => (array<string>) 计费单元（SKU）列表（可选）
     *     "ProductCodes" => (array<string>) 产品类型列表（多选，可选），枚举值：`modelverse`、`sandbox`
     *     "Regions" => (array<string>) 地域列表（多选，可选），参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "OrganizationIds" => (array<integer>) 组织ID列表（可选）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Summaries" => (array<object>) 已完成订单汇总列表[
     *         [
     *             "ResourceId" => (string) 资源ID
     *             "PricingSKU" => (string) 计费单元（SKU）名称
     *             "ModelID" => (string) 模型ID
     *             "ModelName" => (string) 模型名称
     *             "PricingUnit" => (integer) 计费单位（计量单元）
     *             "PricingUnitName" => (string) 计费单位名称
     *             "OrderType" => (integer) 订单类型
     *             "OrderTypeDisplay" => (string) 订单类型显示名
     *             "ChargeType" => (integer) 计费类型
     *             "Status" => (integer) 订单状态（2=已支付; 3=已撤销）
     *             "StatusDisplay" => (string) 订单状态显示名
     *             "ListPrice" => (string) 列表价（原单价）
     *             "DiscountPrice" => (string) 折后单价
     *             "SumQuantity" => (integer) 总用量（原始值）
     *             "SumQuantityDisplay" => (string) 总用量显示（格式化后的字符串，千token和百万token会进行转换）
     *             "SumOrderPrice" => (string) 总订单金额（格式化后的字符串）
     *             "SumOriginalPrice" => (string) 总原价（格式化后的字符串）
     *             "SumCashAccount" => (string) 总现金账户扣款（仅已完成订单返回）
     *             "SumStarCardAccount" => (string) 总星力卡抵扣金额（仅已完成订单返回）
     *             "SumBonusAccount" => (string) 总赠金账户扣款（仅已完成订单返回）
     *             "SumCoupon" => (string) 总代金券抵扣（仅已完成订单返回）
     *         ]
     *     ]
     * ]
     *
     * @return ListPaidOrderSummaryResponse
     * @throws UCloudException
     */
    public function listPaidOrderSummary(ListPaidOrderSummaryRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListPaidOrderSummaryResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListPaidOrders - 查询已完成（已支付）的订单明细列表，StartTime/EndTime 必填；取数范围是 [StartTime, EndTime)，即取开始计费时间大于等于StartTime且小于EndTime的数据
     *
     * See also: https://docs.ucloud.cn/api/uai-modelverse-api/list_paid_orders
     *
     * Arguments:
     *
     * $args = [
     *     "StartTime" => (integer) 查询开始时间（Unix 时间戳，秒级）。与 `EndTime` 同时提供时启用自定义周期查询；EndTime 必须大于 StartTime
     *     "EndTime" => (integer) 查询结束时间（Unix 时间戳，秒级）。需与 `StartTime` 同时提供
     *     "Page" => (integer) 页码，从1开始
     *     "PageSize" => (integer) 每页数量（最小10，最大100）
     *     "ResourceIds" => (array<string>) 资源ID数组（多选，可选）
     *     "ModelIds" => (array<string>) 模型ID数组（多选，可选）
     *     "PricingUnits" => (array<integer>) 计费单位数组（多选，可选）
     *     "OrderTypes" => (array<integer>) 订单类型数组（多选，可选）
     *     "PricingSkus" => (array<string>) 计费 SKU 列表（可选）
     *     "ProductCodes" => (array<string>) 产品类型列表（多选，可选），枚举值：`modelverse`、`sandbox`
     *     "Regions" => (array<string>) 地域列表（多选，可选），参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "OrganizationIds" => (array<integer>) 组织ID列表（可选）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Page" => (integer) 当前页码
     *     "PageSize" => (integer) 每页数量
     *     "Total" => (integer) 总记录数
     *     "Orders" => (array<object>) 订单列表[
     *         [
     *             "Region" => (string) 地域
     *             "ProductCode" => (string) 产品类型
     *             "ProductCodeDisplay" => (string) 产品类型显示名
     *             "StarCardAccount" => (string) 星力卡抵扣金额
     *             "OrderNo" => (string) 订单号
     *             "CompanyID" => (integer) 公司id
     *             "OrganizationID" => (integer) 项目ID
     *             "OrganizationName" => (string) 项目名称
     *             "UserEmail" => (string) 用户邮箱
     *             "ChargeType" => (integer) 计费类型
     *             "ChargeTypeDisplay" => (string) 计费类型显示名
     *             "Channel" => (integer) 渠道
     *             "Currency" => (string) 币种（如：CNY、USD）
     *             "CurrencyDisplay" => (string) 币种显示名
     *             "ResourceID" => (string) 资源ID
     *             "ModelID" => (string) 模型ID
     *             "ModelName" => (string) 模型名称
     *             "OrderType" => (integer) 订单类型
     *             "OrderTypeDisplay" => (string) 订单类型显示名
     *             "PricingSKU" => (string) 计费单元（SKU）名称
     *             "Quantity" => (integer) 用量
     *             "QuantityDisplay" => (string) 用量显示（含单位）
     *             "PricingUnit" => (integer) 计费单位（计量单元）
     *             "PricingUnitDisplay" => (string) 计费单位显示名（如：千Token、张、秒）
     *             "ListPrice" => (string) 列表价（原单价）
     *             "DiscountPrice" => (string) 折后价（折后单价）
     *             "OrderTotalPrice" => (string) 订单总额
     *             "OriginalPrice" => (string) 原价
     *             "Status" => (integer) 订单状态
     *             "StatusDisplay" => (string) 订单状态显示名
     *             "StartTime" => (integer) 开始计费时间（Unix 时间戳，秒级）
     *             "EndTime" => (integer) 结束计费时间（Unix 时间戳，秒级）
     *             "PaidTime" => (integer) 支付完成时间（Unix 时间戳，秒级）
     *             "CashAccount" => (string) 现金账户扣款金额
     *             "BonusAccount" => (string) 赠金账户扣款金额
     *             "Coupon" => (string) 代金券抵扣金额
     *             "UnpaidOrderNo" => (string) 欠费订单号
     *             "RegionDisplay" => (string) 地域显示名
     *         ]
     *     ]
     * ]
     *
     * @return ListPaidOrdersResponse
     * @throws UCloudException
     */
    public function listPaidOrders(ListPaidOrdersRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListPaidOrdersResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUFSquareModel - 查询模型广场数据
     *
     * See also: https://docs.ucloud.cn/api/uai-modelverse-api/list_uf_square_model
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ModelType" => (string) 模型类型
     *     "Keyword" => (string) 关键字
     *     "Offset" => (integer) 偏移量
     *     "Limit" => (integer) 每页数量
     *     "OrderBy" => (string) 排序字段
     *     "Order" => (string) 排序顺序，默认倒序
     *     "MaxModelLen" => (array<integer>) 上下文长度，数组类型，可选值 [0,4096,16384,32768,131072,256000,262144,1048576]
     *     "Language" => (array<string>) 语言，数组类型，可选值 ["chinese", "english"]
     *     "Manufacturer" => (array<string>) 制造商，可选值来源于ListUFSquareModelFilters枚举接口。可多选
     *     "Capabilities" => (array<string>) 模型特性，可选值来源于ListUFSquareModelFilters枚举接口。可多选
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 总数
     *     "SquareModels" => (array<object>) 广场模型[
     *         [
     *             "BatchSquareModelId" => (string) 关联的 batch 模型广场id
     *             "IsHasBatch" => (boolean) 是否关联有可用 batch 模型
     *             "BatchName" => (string) 关联的 batch 模型名称
     *             "Manufacturer" => (string) 制造商
     *             "Id" => (string) 主键
     *             "Name" => (string) 名称
     *             "SimpleDescribe" => (string) 简要描述
     *             "Describe" => (string) 详细描述
     *             "Language" => (array<string>) 语言
     *             "MaxModelLen" => (integer) 模型长度
     *             "ModelType" => (string) 模型类型
     *             "HfUpdateTime" => (integer) HuggingFace 更新时间
     *             "CreateAt" => (integer) 创建时间
     *             "UpdateAt" => (integer) 更新时间
     *             "SupportedCapabilities" => (array<string>) 模型能力
     *             "Icon" => (string) 图标
     *             "Pricing" => (object) 定价策略[
     *                 "Completion" => (number) 输出定价
     *                 "Prompt" => (number) 提示词定价
     *                 "Image" => (number) 生图定价
     *                 "Video" => (string) 生视频定价
     *                 "Currency" => (string) 币种
     *                 "Unit" => (string) 单位（中文），如“次” “百万”
     *                 "UnitEn" => (string) 单位（English），如“Time” “Million”
     *             ]
     *             "Tiers" => (array<object>) 价格阶梯（有序数组）[
     *                 [
     *                     "Rates" => (array<object>) 该档位下的收费列表（有序数组）[
     *                         [
     *                             "ChargeItemDescriptionEn" => (string) 收费项描述英文描述
     *                             "Currency" => (string) 货币单位
     *                             "Unit" => (string) 计价单位
     *                             "UnitEn" => (string) 计价单位英文
     *                             "ChargeItem" => (string) 收费项：input/output/thinking/tool...
     *                             "ChargeItemDescription" => (string) 收费项描述
     *                             "Price" => (string) 价格
     *                         ]
     *                     ]
     *                     "DescriptionEn" => (string) 档位描述（例如 "标准上下文 32k"）
     *                     "Condition" => (string) 档位/条件（例如 "32k"、"128k"）
     *                     "Description" => (string) 档位描述（例如 "标准上下文 32k"）
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return ListUFSquareModelResponse
     * @throws UCloudException
     */
    public function listUFSquareModel(ListUFSquareModelRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUFSquareModelResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUFSquareModelFiltersAuth - 登录状态下获取模型广场过滤器中内容
     *
     * See also: https://docs.ucloud.cn/api/uai-modelverse-api/list_uf_square_model_filters_auth
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ListUFSquareModelFiltersAuthResponse
     * @throws UCloudException
     */
    public function listUFSquareModelFiltersAuth(ListUFSquareModelFiltersAuthRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUFSquareModelFiltersAuthResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUMInferAPIKey - 列表查询apikey
     *
     * See also: https://docs.ucloud.cn/api/uai-modelverse-api/list_um_infer_api_key
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Offset" => (integer) 列表起始位置偏移量，默认为0
     *     "Limit" => (integer) 返回数据长度，默认为20，最大100
     *     "ModelverseDisabled" => (integer) 是否modelverse可用 0: 启用 1: 禁用
     *     "SandBoxDisabled" => (integer) 是否沙盒可用 0: 启用 1: 禁用(astraflow 沙盒控制未上线，暂时无效)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (array<object>) apikey[
     *         [
     *             "IPWhitelist" => (string) ip白名单，换行分割的多组ip。支持IPv4和网段,输入后回车生效,最多100个, 示例: ﻿ 192.168.1.1 192.168.1.10-192.168.1.100 192.168.1.10/24
     *             "InferenceLogEnabled" => (integer) 是否开启推理日志
     *             "DeniedModels" => (array<string>) 禁止访问的模型列表。当 ModelAccessMode=blacklist 时生效。
     *             "ModelAccessMode" => (string) 模型访问策略。可选值：whitelist（白名单模式，默认）或 blacklist（黑名单模式）。
     *             "KeyId" => (string) 资源ID
     *             "Name" => (string) 名称
     *             "ChannelId" => (integer) 渠道id
     *             "TopOrganizationId" => (integer) 公司id
     *             "OrganizationId" => (integer) 项目id
     *             "Status" => (integer) 状态，1 正常
     *             "CreateTime" => (integer) 创建时间
     *             "Key" => (string) 密钥值
     *             "ExpireTime" => (integer) 过期时间的unix时间戳，-1 用不过期
     *             "ModelverseDisabled" => (integer) 是否modelverse可用 0: 启用 1: 禁用
     *             "SandBoxDisabled" => (integer) 是否沙盒可用 0: 启用 1: 禁用(astraflow 沙盒控制未上线，暂时无效)
     *             "DailyLimitAmount" => (string) 日限额，单位随用户所在渠道。126渠道单位为美元
     *             "DailyUsedAmount" => (string) 日已使用额，单位随用户所在渠道。126渠道单位为美元
     *             "MonthlyLimitAmount" => (string) 月限额，单位随用户所在渠道。126渠道单位为美元
     *             "MonthlyUsedAmount" => (string) 月已使用额，单位随用户所在渠道。126渠道单位为美元
     *             "GrantAllModels" => (boolean) 全部模型访问开关，开启不受 GrantedModels 参数控制，关闭只能访问 GrantedModels 中添加模型
     *             "GrantedModels" => (array<string>) 授权的模型，英文逗号分隔，all表示所有模型都有权限
     *         ]
     *     ]
     * ]
     *
     * @return ListUMInferAPIKeyResponse
     * @throws UCloudException
     */
    public function listUMInferAPIKey(ListUMInferAPIKeyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUMInferAPIKeyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUMInferRequestLogs - 日志明细列表
     *
     * See also: https://docs.ucloud.cn/api/uai-modelverse-api/list_um_infer_request_logs
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 业务地域，如 cn-wlcb。可先调用 ListUMInferRegions 获取可选地域
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。请参考 [GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "StartTime" => (integer) 查询开始时间，Unix 毫秒时间戳
     *     "EndTime" => (integer) 查询结束时间，Unix 毫秒时间戳，必须大于等于 StartTime
     *     "ModelNames" => (array<string>) 模型名称列表，用于过滤
     *     "ApiKeyIds" => (array<string>) API Key ID 列表，用于过滤
     *     "RequestId" => (string) 请求 ID，用于精确过滤
     *     "Offset" => (integer) 列表偏移量，默认 0
     *     "Limit" => (integer) 返回数量，默认 20
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (object) 日志明细列表返回数据[
     *         "Summary" => (object) 汇总信息[
     *             "TotalRequests" => (integer) 查询条件命中的总请求数
     *             "FailedRequests" => (integer) 查询条件命中的失败请求数
     *         ]
     *         "Items" => (array<object>) 日志列表，数组元素为 RequestLogItem[
     *             [
     *                 "RequestId" => (string) 请求 ID
     *                 "StartTime" => (integer) 请求开始时间，Unix 毫秒时间戳
     *                 "StartTimeReadable" => (string) 请求开始时间，可读格式
     *                 "Region" => (string) 业务地域
     *                 "ModelName" => (string) 模型名称
     *                 "ApiKeyId" => (string) API Key ID
     *                 "ApiKeyName" => (string) API Key 名称
     *                 "Latency" => (integer) 请求总延迟，单位毫秒
     *                 "FirstTokenLatency" => (integer) 首 Token 延迟，单位毫秒
     *                 "OutputTokenThroughput" => (number) 输出 Token 吞吐
     *                 "HttpStatusCode" => (integer) HTTP 状态码
     *                 "ErrorCode" => (string) 错误码
     *                 "IsSuccess" => (boolean) 请求是否成功
     *                 "TotalTokens" => (integer) 总 Token 数
     *                 "PromptTokens" => (integer) 输入 Token 数
     *                 "CompletionTokens" => (integer) 输出 Token 数
     *                 "CacheHitTokens" => (integer) 缓存命中 Token 数
     *                 "CacheCreationTokens" => (integer) 缓存写入 Token 数
     *                 "CacheCreation5mTokens" => (integer) 5 分钟缓存写入 Token 数
     *                 "CacheCreation1hTokens" => (integer) 1 小时缓存写入 Token 数
     *                 "HasInferenceLog" => (boolean) 是否存在推理日志
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return ListUMInferRequestLogsResponse
     * @throws UCloudException
     */
    public function listUMInferRequestLogs(ListUMInferRequestLogsRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUMInferRequestLogsResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUnpaidOrderSummary - 按指定维度汇总查询欠费订单的统计数据
     *
     * See also: https://docs.ucloud.cn/api/uai-modelverse-api/list_unpaid_order_summary
     *
     * Arguments:
     *
     * $args = [
     *     "StartTime" => (integer) 查询开始时间（Unix 时间戳，秒级），必填
     *     "EndTime" => (integer) 查询结束时间（Unix 时间戳，秒级），必填；必须大于 StartTime
     *     "ResourceIds" => (array<string>) Key数组（多选，可选）
     *     "OrderTypes" => (integer) 订单类型数组（多选，可选）
     *     "ModelIds" => (array<string>) 模型ID数组（多选，可选）
     *     "PricingUnits" => (array<integer>) 计费单元数组（多选，可选）
     *     "ChargeTypes" => (array<integer>) 计费类型数组（多选，可选）
     *     "PricingSkus" => (array<string>) 计费单元（SKU）列表（可选）
     *     "Regions" => (array<string>) 地域列表（多选，可选），参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "OrganizationIds" => (array<integer>) 组织ID列表（可选）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Summaries" => (array<object>) 欠费订单汇总列表[
     *         [
     *             "ResourceId" => (string) 资源ID
     *             "PricingSKU" => (string) 计费单元（SKU）名称
     *             "ModelID" => (string) 模型ID
     *             "ModelName" => (string) 模型名称
     *             "PricingUnit" => (integer) 计费单位（计量单元）
     *             "PricingUnitName" => (string) 计费单位名称
     *             "OrderType" => (integer) 订单类型
     *             "OrderTypeDisplay" => (string) 订单类型显示名
     *             "ChargeType" => (integer) 计费类型
     *             "Status" => (integer) 订单状态（2=已支付; 3=已撤销）
     *             "StatusDisplay" => (string) 订单状态显示名
     *             "ListPrice" => (string) 列表价（原单价）
     *             "DiscountPrice" => (string) 折后单价
     *             "SumQuantity" => (integer) 总用量（原始值）
     *             "SumQuantityDisplay" => (string) 总用量显示（格式化后的字符串，千token和百万token会进行转换）
     *             "SumOrderPrice" => (string) 总订单金额（格式化后的字符串）
     *             "SumOriginalPrice" => (string) 总原价（格式化后的字符串）
     *             "SumCashAccount" => (string) 总现金账户扣款（仅已完成订单返回）
     *             "SumStarCardAccount" => (string) 总星力卡抵扣金额（仅已完成订单返回）
     *             "SumBonusAccount" => (string) 总赠金账户扣款（仅已完成订单返回）
     *             "SumCoupon" => (string) 总代金券抵扣（仅已完成订单返回）
     *         ]
     *     ]
     * ]
     *
     * @return ListUnpaidOrderSummaryResponse
     * @throws UCloudException
     */
    public function listUnpaidOrderSummary(ListUnpaidOrderSummaryRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUnpaidOrderSummaryResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUnpaidOrders - 查询当前欠费（未支付）的订单明细列表
     *
     * See also: https://docs.ucloud.cn/api/uai-modelverse-api/list_unpaid_orders
     *
     * Arguments:
     *
     * $args = [
     *     "EndTime" => (integer) 查询结束时间（Unix 时间戳，秒级）。需与 `StartTime` 同时提供
     *     "StartTime" => (integer) 查询开始时间（Unix 时间戳，秒级）。与 `EndTime` 同时提供时启用自定义周期查询；EndTime 必须大于 StartTime
     *     "PageSize" => (integer) 每页数量（最小10，最大100）
     *     "Page" => (integer) 页码,从1开始
     *     "ResourceIds" => (array<string>) key数组（多选，可选）
     *     "ModelIds" => (array<string>) 模型ID数组（多选，可选）
     *     "PricingUnits" => (array<integer>) 计费单元数组（多选，可选）
     *     "OrderTypes" => (array<integer>) 订单类型数组（多选，可选）
     *     "Regions" => (array<string>) 地域列表（多选，可选），参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "PricingSkus" => (array<string>) 计费 SKU 列表（可选）
     *     "ProductCodes" => (array<string>) 产品类型列表（多选，可选），枚举值：`modelverse`、`sandbox`
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Orders" => (array<object>) 欠费订单明细列表[
     *         [
     *             "Region" => (string) 地域代码
     *             "OrderNo" => (string) 订单号
     *             "SourceOrderNo" => (string) 来源订单号
     *             "CompanyID" => (integer) 公司id
     *             "OrganizationID" => (integer) 组织ID
     *             "OrganizationName" => (string) 组织名称
     *             "UserEmail" => (string) 用户邮箱
     *             "ChargeType" => (integer) 计费类型
     *             "ChargeTypeDisplay" => (string) 计价方式显示名
     *             "Channel" => (integer) 渠道
     *             "Currency" => (string) 币种（如：CNY、USD）
     *             "CurrencyDisplay" => (string) 币种显示名
     *             "ResourceID" => (string) 模型key
     *             "ResourceType" => (integer) 资源类型
     *             "ResourceTypeDisplay" => (string) 资源类型显示名
     *             "ModelID" => (string) 模型ID
     *             "ModelName" => (string) 模型名称
     *             "OrderType" => (integer) 订单类型
     *             "OrderTypeDisplay" => (string) 订单类型显示名
     *             "PricingSKU" => (string) 计费单元（SKU）名称
     *             "Quantity" => (integer) 用量
     *             "QuantityDisplay" => (string) 用量显示（含单位）
     *             "PricingUnit" => (integer) 计费单位（计量单元）
     *             "PricingUnitDisplay" => (string) 计费单位显示名（如：千Token、张、秒）
     *             "ListPrice" => (string) 列表价（原单价）
     *             "DiscountPrice" => (string) 折后价（折后单价）
     *             "OrderTotalPrice" => (string) 订单总额
     *             "OriginalPrice" => (string) 原价
     *             "Status" => (integer) 订单状态
     *             "StatusDisplay" => (string) 订单状态显示名
     *             "CreateTime" => (string) 创建订单时间（Unix 时间戳，秒级）
     *             "StartTime" => (integer) 开始计费时间（Unix 时间戳，秒级）
     *             "EndTime" => (integer) 结束计费时间（Unix 时间戳，秒级）
     *             "PaidTime" => (integer) 订单支付时间（Unix 时间戳，秒级）
     *             "RevocationTime" => (string) 撤销时间（Unix 时间戳，秒级）
     *             "RegionDisplay" => (string) 地域显示名
     *             "ProductCode" => (string) 产品类型
     *             "ProductCodeDisplay" => (string) 产品类型显示名
     *         ]
     *     ]
     * ]
     *
     * @return ListUnpaidOrdersResponse
     * @throws UCloudException
     */
    public function listUnpaidOrders(ListUnpaidOrdersRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUnpaidOrdersResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * StartPayUnpaidOrders - 批量支付欠费订单，指定 OrderNos 支付，最多 50 个
     *
     * See also: https://docs.ucloud.cn/api/uai-modelverse-api/start_pay_unpaid_orders
     *
     * Arguments:
     *
     * $args = [
     *     "OrderNos" => (array<string>) 欠费订单号列表，最多 50 个
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "SuccessCount" => (integer) 支付成功数量
     *     "FailureCount" => (integer) 支付失败数量
     *     "Results" => (object) 支付结果[
     *         "OrderNo" => (string) 订单号
     *         "Success" => (boolean) 是否支付成功
     *         "Reason" => (string) 失败原因（成功时为空）
     *     ]
     * ]
     *
     * @return StartPayUnpaidOrdersResponse
     * @throws UCloudException
     */
    public function startPayUnpaidOrders(StartPayUnpaidOrdersRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new StartPayUnpaidOrdersResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateUMInferAPIKey - 更新apikey
     *
     * See also: https://docs.ucloud.cn/api/uai-modelverse-api/update_um_infer_api_key
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "KeyId" => (string) apikey的id
     *     "Name" => (string) 更新的名称
     *     "ModelverseDisabled" => (integer) 是否modelverse可用 0: 启用 1: 禁用
     *     "SandBoxDisabled" => (integer) 是否沙盒可用 0: 启用 1: 禁用
     *     "DailyLimitAmount" => (string) 日限额，单位随用户所在渠道。126渠道单位为美元
     *     "MonthlyLimitAmount" => (string) 月限额，单位随用户所在渠道。126渠道单位为美元
     *     "GrantAllModels" => (boolean) 全部模型访问开关，开启不受 GrantedModels 参数控制，关闭只能访问 GrantedModels 中添加模型
     *     "GrantedModels" => (string) 授权模型，内容为数组格式。当 GrantAllModels 为false时 当前key只可访问数组中模型。例：["deepseek-ai/DeepSeek-V3.2-Think"]
     *     "IPWhitelist" => (string) ip白名单，换行分割的多组ip。支持IPv4和网段,输入后回车生效,最多100个, 示例: ﻿ 192.168.1.1 192.168.1.10-192.168.1.100 192.168.1.10/24
     *     "InferenceLogEnabled" => (integer) 是否开启推理日志
     *     "ExpireTime" => (integer) API Key 过期时间，Unix 时间戳，单位为秒。传 -1 表示永不过期。
     *     "ModelAccessMode" => (string) 模型访问策略。可选值：whitelist（白名单模式，默认）或 blacklist（黑名单模式）。
     *     "DeniedModels" => (string) 禁止访问的模型列表。当 ModelAccessMode=blacklist 时生效。数组类型，示例 ["gpt-4o", "sora-2"]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UminferID" => (string) apikey 的id
     * ]
     *
     * @return UpdateUMInferAPIKeyResponse
     * @throws UCloudException
     */
    public function updateUMInferAPIKey(UpdateUMInferAPIKeyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateUMInferAPIKeyResponse($resp->toArray(), $resp->getRequestId());
    }
}
