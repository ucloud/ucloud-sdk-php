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
namespace UCloud\CloudWatch;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\CloudWatch\Apis\BindAlertStrategyRequest;
use UCloud\CloudWatch\Apis\BindAlertStrategyResponse;
use UCloud\CloudWatch\Apis\CreateAlertStrategyRequest;
use UCloud\CloudWatch\Apis\CreateAlertStrategyResponse;
use UCloud\CloudWatch\Apis\CreateAlertStrategyTemplateRequest;
use UCloud\CloudWatch\Apis\CreateAlertStrategyTemplateResponse;
use UCloud\CloudWatch\Apis\DeleteAlertStrategyTemplateRequest;
use UCloud\CloudWatch\Apis\DeleteAlertStrategyTemplateResponse;
use UCloud\CloudWatch\Apis\EnableAlertStrategyRequest;
use UCloud\CloudWatch\Apis\EnableAlertStrategyResponse;
use UCloud\CloudWatch\Apis\GetMetricDataAggregationMethodRequest;
use UCloud\CloudWatch\Apis\GetMetricDataAggregationMethodResponse;
use UCloud\CloudWatch\Apis\GetProductMetricsRequest;
use UCloud\CloudWatch\Apis\GetProductMetricsResponse;
use UCloud\CloudWatch\Apis\ListAlertRecordRequest;
use UCloud\CloudWatch\Apis\ListAlertRecordResponse;
use UCloud\CloudWatch\Apis\ListAlertStrategyRequest;
use UCloud\CloudWatch\Apis\ListAlertStrategyResponse;
use UCloud\CloudWatch\Apis\ListAlertStrategyTemplateRequest;
use UCloud\CloudWatch\Apis\ListAlertStrategyTemplateResponse;
use UCloud\CloudWatch\Apis\ListMonitorProductRequest;
use UCloud\CloudWatch\Apis\ListMonitorProductResponse;
use UCloud\CloudWatch\Apis\ModifyAlertStrategyRemarkRequest;
use UCloud\CloudWatch\Apis\ModifyAlertStrategyRemarkResponse;
use UCloud\CloudWatch\Apis\QueryMetricDataSetRequest;
use UCloud\CloudWatch\Apis\QueryMetricDataSetResponse;
use UCloud\CloudWatch\Apis\QueryMetricDataSummaryRequest;
use UCloud\CloudWatch\Apis\QueryMetricDataSummaryResponse;
use UCloud\CloudWatch\Apis\UnBindAlertStrategyRequest;
use UCloud\CloudWatch\Apis\UnBindAlertStrategyResponse;
use UCloud\CloudWatch\Apis\UpdateAlertStrategyRequest;
use UCloud\CloudWatch\Apis\UpdateAlertStrategyResponse;
use UCloud\CloudWatch\Apis\UpdateAlertStrategyTemplateRequest;
use UCloud\CloudWatch\Apis\UpdateAlertStrategyTemplateResponse;

/**
 * This client is used to call actions of **CloudWatch** service
 */
class CloudWatchClient extends Client
{

    /**
     * BindAlertStrategy - 绑定告警策略
     *
     * See also: https://docs.ucloud.cn/api/cloudwatch-api/bind_alert_strategy
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "AlertStrategyIDs" => (array<integer>) 告警策略id数组
     *     "Resources" => (array<string>) 资源数组
     *     "ProductKey" => (string) 产品唯一标识，参见 [产品概览](https://docs.ucloud.cn/cloudwatch/metric/intro)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return BindAlertStrategyResponse
     * @throws UCloudException
     */
    public function bindAlertStrategy(BindAlertStrategyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new BindAlertStrategyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateAlertStrategy - 创建告警策略
     *
     * See also: https://docs.ucloud.cn/api/cloudwatch-api/create_alert_strategy
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Name" => (string) 告警策略名称。最大长度255个字符
     *     "ProductKey" => (string) 产品唯一标识，参见 [产品概览](https://docs.ucloud.cn/cloudwatch/metric/intro)
     *     "ObjectType" => (integer) 绑定资源类型1 - 资源组 2 - 资源
     *     "ConfigMode" => (integer) 条件设置方式1 - 手动配置 2 - 选择模版
     *     "Resources" => (array<string>) 绑定资源，对应绑定资源类型ObjectType=2
     *     "ResourceGroupIDs" => (array<integer>) 绑定资源组，对应绑定资源类型ObjectType=1
     *     "TemplateId" => (integer) 模板id.对应ConfigMode=2时候需要填写
     *     "RuleSet" => (array<object>) [
     *         [
     *             "MetricID" => (integer) 规则指标ID。参考该类型产品下返回的指标列表GetProductMetrics
     *             "ThresholdCompare" => (integer) 阈值比较方式。 枚举值：1：>= 2：<= 3：> 4：< 5：== 6：!=
     *             "ThresholdValue" => (integer) 触发阈值
     *             "TriggerCount" => (integer) 触发次数
     *             "SendPeriodType" => (string) 触发周期。枚举值continuous - 连续exponent - 指数single - 不重复
     *             "Level" => (string) 告警等级。枚举值：P0,P1,P2,P3
     *             "Status" => (integer) 告警状态。枚举值0 - 关闭1 - 开启
     *             "SendInterval" => (integer) 沉默周期(告警周期选择为连续时必填)
     *         ]
     *     ]
     *     "NotifyType" => (string) 通知类型。枚举值： group - 通知组 user - 通知人
     *     "NotifyUserIDs" => (array<integer>) 通知人id
     *     "NotifyGroupIDs" => (array<integer>) 通知人组id
     *     "NotifyChannelDs" => (array<string>) 通知渠道。枚举值：sms - 短信email - 邮件webhook - 回调
     *     "CallbackLanguage" => (string) 当通知渠道=回调webhook时，需要设置回调语言。枚举值：cn - 中文en - 英文
     *     "CallbackUrls" => (array<string>) 回调URL地址
     *     "NotifyTemplateId" => (string) 通知模板id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (object) 创建告警策略返回对象[
     *         "AlertStrategyID" => (integer) 告警策略id
     *     ]
     * ]
     *
     * @return CreateAlertStrategyResponse
     * @throws UCloudException
     */
    public function createAlertStrategy(CreateAlertStrategyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateAlertStrategyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateAlertStrategyTemplate - 新建条件模板
     *
     * See also: https://docs.ucloud.cn/api/cloudwatch-api/create_alert_strategy_template
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Name" => (string) 告警模板名称。最大长度64个字符
     *     "ProductKey" => (string) 产品唯一标识，参见 [产品概览](https://docs.ucloud.cn/cloudwatch/metric/intro)
     *     "RuleSet" => (array<object>) [
     *         [
     *             "MetricID" => (integer) 规则指标ID。参考该类型产品下返回的指标列表GetProductMetrics
     *             "ThresholdCompare" => (integer) 阈值比较方式。枚举值: 1：>= 2：<= 3：> 4：< 5：== 6：!=
     *             "ThresholdValue" => (integer) 触发阈值
     *             "TriggerCount" => (integer) 触发次数
     *             "SendPeriodType" => (string) 触发周期。枚举值：continuous连续 exponent 指数 single 不重复
     *             "Level" => (string) 告警等级。枚举值：P0,P1,P2,P3
     *             "Status" => (integer) 告警状态。枚举值：0-关闭 1-开启
     *             "SendInterval" => (integer) 沉默周期(告警周期选择为连续时必填)
     *         ]
     *     ]
     *     "Remark" => (string) 备注
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (object) 创建告警模板返回对象[
     *         "TemplateID" => (integer) 告警模板ID
     *     ]
     * ]
     *
     * @return CreateAlertStrategyTemplateResponse
     * @throws UCloudException
     */
    public function createAlertStrategyTemplate(CreateAlertStrategyTemplateRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateAlertStrategyTemplateResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteAlertStrategyTemplate - 删除告警条件模板
     *
     * See also: https://docs.ucloud.cn/api/cloudwatch-api/delete_alert_strategy_template
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "TemplateID" => (array<integer>) 告警模板ID(支持批量删除)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (object) 删除告警模板返回对象[
     *         "TemplateID" => (array<integer>) 模板ID
     *     ]
     * ]
     *
     * @return DeleteAlertStrategyTemplateResponse
     * @throws UCloudException
     */
    public function deleteAlertStrategyTemplate(DeleteAlertStrategyTemplateRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteAlertStrategyTemplateResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * EnableAlertStrategy - 是否启用告警策略
     *
     * See also: https://docs.ucloud.cn/api/cloudwatch-api/enable_alert_strategy
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "AlertStrategyID" => (integer) 告警策略id
     *     "Status" => (integer) 启用状态0 停用 1 启用
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (object) 返回数据[
     *         "AlertStrategyID" => (integer) 告警策略id
     *     ]
     * ]
     *
     * @return EnableAlertStrategyResponse
     * @throws UCloudException
     */
    public function enableAlertStrategy(EnableAlertStrategyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new EnableAlertStrategyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetMetricDataAggregationMethod - 获取指标数据聚合方式
     *
     * See also: https://docs.ucloud.cn/api/cloudwatch-api/get_metric_data_aggregation_method
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
     *     "Data" => (object) 获取指标数据聚合方式返回结果[
     *         "List" => (array<object>) 聚合方式列表[
     *             [
     *                 "Label" => (string) 标签
     *                 "Value" => (string) 值
     *                 "IsDefault" => (boolean) 是否是默认方式
     *                 "Description" => (string) 描述
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return GetMetricDataAggregationMethodResponse
     * @throws UCloudException
     */
    public function getMetricDataAggregationMethod(GetMetricDataAggregationMethodRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetMetricDataAggregationMethodResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetProductMetrics - 获取云产品关联的指标列表
     *
     * See also: https://docs.ucloud.cn/api/cloudwatch-api/get_product_metrics
     *
     * Arguments:
     *
     * $args = [
     *     "ProductKey" => (string) 产品唯一标识，参见 [产品概览](https://docs.ucloud.cn/cloudwatch/metric/intro)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (object) 返回数据[
     *         "Total" => (integer) 查询结果总数
     *         "List" => (array<object>) 指标列表[
     *             [
     *                 "ProductType" => (integer) 云产品ID
     *                 "UnitID" => (integer) 单位ID
     *                 "MetricID" => (integer) 指标ID
     *                 "Metric" => (string) 指标唯一标识 (uhost_cpu_usage)
     *                 "MetricEnName" => (string) 指标英文名称
     *                 "MetricChName" => (string) 指标中文名称
     *                 "MetricEnDesc" => (string) 指标英文描述
     *                 "MetricChDesc" => (string) 指标中文描述
     *                 "MetricGroup" => (string) 指标分类/指标组
     *                 "FrequencyMs" => (integer) 上报频率毫秒
     *                 "Unit" => (object) 单位[
     *                     "UnitID" => (integer) 单位id
     *                     "GroupId" => (integer) GroupId
     *                     "UnitEnName" => (string) 单位英文名称
     *                     "UnitChName" => (string) 单位中文名称
     *                     "UnitDesc" => (string) 单位描述
     *                     "ConversionFactor" => (integer) 转换因子
     *                     "CreatedBy" => (string) 创建人
     *                     "UpdatedBy" => (string) 修改人
     *                     "CreatedAt" => (string) 创建时间
     *                     "UpdatedAt" => (string) 修改时间
     *                     "DeletedAt" => (integer) 删除时间
     *                 ]
     *                 "CreatedBy" => (string) 创建者
     *                 "CreatedAt" => (string) 创建时间
     *                 "UpdatedBy" => (string) 修改者
     *                 "UpdatedAt" => (string) 修改时间
     *             ]
     *         ]
     *         "UnitConfigs" => (array<object>) 单位转换信息[
     *             [
     *                 "UnitCnNames" => (array<string>) 指标中文名列表
     *                 "UnitEnNames" => (array<string>) 指标英文名列表
     *                 "ConversionFactor" => (integer) 转换因子
     *                 "ConversionRules" => (array<object>) 转换规则[
     *                     [
     *                         "From" => (string) 来源
     *                         "To" => (string) 目标
     *                         "ConversionFactor" => (integer) 转换因子
     *                     ]
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return GetProductMetricsResponse
     * @throws UCloudException
     */
    public function getProductMetrics(GetProductMetricsRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetProductMetricsResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListAlertRecord - 获取时间段内的告警记录
     *
     * See also: https://docs.ucloud.cn/api/cloudwatch-api/list_alert_record
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "StartAt" => (integer) 开始时间，查询告警记录开始时间，不支持查询距当前时间一年前的数据)，值为10位数时间戳
     *     "EndAt" => (integer) 结束时间，查询告警记录结束时间(查询开始时间和结束时间不能超过一个月)，值为10位数时间戳
     *     "Fuzzy" => (string) 模糊查询(支持资源id模糊搜索)
     *     "Filter" => (object) [
     *         "ProductTypes" => (array<integer>) 产品ID，根据产品类型精确搜索对应的告警记录，参见 [产品概览](https://docs.ucloud.cn/cloudwatch/metric/intro)
     *         "Levels" => (array<string>) 告警级别，根据告警级别精确搜索对应的告警记录，枚举值:P0,P1,P2,P3
     *         "Status" => (array<string>) 告警状态，根据告警状态精确搜索对应的告警记录，枚举值：firing-告警中，resolved-已恢复
     *     ]
     *     "OrderType" => (string) 排序(默认根据告警发生时间倒序)，枚举值：asc-升序，desc-降序
     *     "Limit" => (integer) 查询返回数量，默认值300，最大值：300。
     *     "Offset" => (integer) 数据偏移量 (默认0)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (array<object>) 告警记录集合[
     *         [
     *             "Region" => (string) 可用区
     *             "RecordID" => (integer) 告警记录RecordID
     *             "ProjectID" => (integer) 项目ProjectID
     *             "StrategyName" => (string) 告警记录触发告警策略名称
     *             "ProductType" => (integer) 产品类型
     *             "ProductName" => (string) 产品类型名称
     *             "ResourceID" => (string) 资源id
     *             "MetricID" => (integer) 指标id
     *             "MetricName" => (string) 指标名称
     *             "UnitName" => (string) 指标单位名称
     *             "StrategyID" => (integer) 告警记录触发告警策略Id
     *             "RuleID" => (integer) 告警记录触发告警规则Id
     *             "Tag" => (array<string>) 告警点tag信息
     *             "Value" => (integer) 告警当前值
     *             "ThresholdCompare" => (integer) 比较符
     *             "ThresholdValue" => (integer) 告警阈值
     *             "ShieldRuleID" => (integer) 告警屏蔽规则id(如果配置了屏蔽规则，并且满足条件)
     *             "Level" => (string) 告警等级
     *             "Status" => (string) 告警状态
     *             "StartAt" => (integer) 告警触发时间
     *             "EndAt" => (integer) 告警结束时间
     *             "ContentAttrList" => (array<object>) 产品相关的额外属性列表[
     *                 [
     *                     "Key" => (string) 键
     *                     "Value" => (string) 值
     *                 ]
     *             ]
     *         ]
     *     ]
     *     "TotalCount" => (integer) 告警记录总数
     * ]
     *
     * @return ListAlertRecordResponse
     * @throws UCloudException
     */
    public function listAlertRecord(ListAlertRecordRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListAlertRecordResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListAlertStrategy - 获取告警策略列表
     *
     * See also: https://docs.ucloud.cn/api/cloudwatch-api/list_alert_strategy
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Fuzzy" => (string) 模糊查询(支持告警策略名称模糊搜索)
     *     "Filter" => (object) [
     *         "ProductTypes" => (array<integer>) 产品ID，参见 [产品概览](https://docs.ucloud.cn/cloudwatch/metric/intro)
     *         "AlertStrategyIDs" => (array<integer>) 告警策略id，根据策略id获取告警策略列表
     *         "Status" => (array<integer>) 告警策略状态，根据告警策略状态精确搜索对应的告警策略，枚举值：0-停用，1-启用
     *     ]
     *     "Resources" => (array<string>) 资源id集合,根据资源id返回绑定的告警策略列表
     *     "Limit" => (integer) 查询返回数量，默认值300，最大值：300。
     *     "Offset" => (integer) 数据偏移量 (默认0)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (array<object>) 告警策略集合[
     *         [
     *             "RuleSet" => (array<object>) 告警规则集合[
     *                 [
     *                     "RuleID" => (integer) 规则ID
     *                     "MetricID" => (integer) 规则指标ID。参考该类型产品下返回的指标列表GetProductMetrics
     *                     "MetricName" => (string) 指标名称
     *                     "ThresholdCompare" => (integer) 阈值比较方式枚举值比较方式:1->=2-<=3->4-<5-==6-!=
     *                     "ThresholdValue" => (number) 触发阈值
     *                     "TriggerCount" => (integer) 触发次数
     *                     "SendPeriodType" => (string) 触发周期。枚举值：continuous连续 exponent 指数 single 不重复
     *                     "SendInterval" => (integer) 发送间隔
     *                     "Level" => (string) 告警等级。枚举值：P0,P1,P2,P3
     *                     "Status" => (integer) 告警状态。枚举值：0-关闭 1-开启
     *                     "UnitID" => (integer) 单位id
     *                     "UnitName" => (string) 单位名称
     *                 ]
     *             ]
     *             "AlertStrategyID" => (integer) 告警策略Id
     *             "Name" => (string) 告警策略名称
     *             "ProductType" => (integer) 资源类型
     *             "ProductKey" => (string) 资源类型名称
     *             "ConfigMode" => (integer) 告警规则配置类型(基于模板配置、基于手工配置)
     *             "TemplateId" => (integer) 模板Id
     *             "NotifyType" => (string) 通知方式(通知组：group，通知人：user)
     *             "NotifyUserIDs" => (array<integer>) 通知人用户id集合
     *             "NotifyGroupIDs" => (array<integer>) 通知组id集合
     *             "NotifyChannelDs" => (array<string>) 通知渠道('email', 'sms', 'webhook')
     *             "CallbackLanguage" => (string) 回调语言(cn,en)
     *             "CallbackUrls" => (array<string>) 回调地址
     *             "Status" => (integer) 告警策略状态
     *             "Remark" => (string) 告警策略备注
     *             "CreatedBy" => (string) 创建人
     *             "UpdatedBy" => (string) 更新人
     *             "CreatedAt" => (integer) 创建时间
     *             "UpdatedAt" => (integer) 更新时间
     *         ]
     *     ]
     *     "TotalCount" => (integer) 告警策略总数
     *     "TraceId" => (string) 链路ID
     * ]
     *
     * @return ListAlertStrategyResponse
     * @throws UCloudException
     */
    public function listAlertStrategy(ListAlertStrategyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListAlertStrategyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListAlertStrategyTemplate - 条件模板列表
     *
     * See also: https://docs.ucloud.cn/api/cloudwatch-api/list_alert_strategy_template
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Filter" => (object) [
     *         "TemplateIDs" => (array<integer>) 模板id集合，根据模板id获取告警条件模板列表
     *     ]
     *     "Limit" => (integer) 查询返回数量，默认值300，最大值：300。
     *     "Offset" => (integer) 数据偏移量 (默认0)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (array<object>) 条件模板列表[
     *         [
     *             "CompanyID" => (integer) 公司id
     *             "TemplateID" => (integer) 模板Id
     *             "Name" => (string) 告警模板名称
     *             "ProductType" => (integer) 产品类型(数值型)。参考ListMonitorProduct获取监控对象类型列表
     *             "ProductKey" => (string) 产品类型(字符型)。参考ListMonitorProduct获取监控对象类型列表
     *             "RuleSet" => (array<object>) 告警条件规则[
     *                 [
     *                     "RuleID" => (integer) 规则ID
     *                     "MetricID" => (integer) 规则指标ID。参考该类型产品下返回的指标列表GetProductMetrics
     *                     "MetricName" => (string) 指标名称
     *                     "ThresholdCompare" => (integer) 阈值比较方式枚举值比较方式:1->=2-<=3->4-<5-==6-!=
     *                     "ThresholdValue" => (number) 触发阈值
     *                     "TriggerCount" => (integer) 触发次数
     *                     "SendPeriodType" => (string) 触发周期。枚举值：continuous连续 exponent 指数 single 不重复
     *                     "SendInterval" => (integer) 发送间隔
     *                     "Level" => (string) 告警等级。枚举值：P0,P1,P2,P3
     *                     "Status" => (integer) 告警状态。枚举值：0-关闭 1-开启
     *                     "UnitID" => (integer) 单位id
     *                     "UnitName" => (string) 单位名称
     *                 ]
     *             ]
     *             "Remark" => (string) 条件模板备注
     *         ]
     *     ]
     *     "TotalCount" => (integer) 条件模板总条数
     * ]
     *
     * @return ListAlertStrategyTemplateResponse
     * @throws UCloudException
     */
    public function listAlertStrategyTemplate(ListAlertStrategyTemplateRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListAlertStrategyTemplateResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListMonitorProduct - 获取监控对象类型列表
     *
     * See also: https://docs.ucloud.cn/api/cloudwatch-api/list_monitor_product
     *
     * Arguments:
     *
     * $args = [
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (object) 返回数据[
     *         "Total" => (integer) 查询结果总数
     *         "List" => (array<object>) 查询结果列表[
     *             [
     *                 "Id" => (integer) ID
     *                 "ProductType" => (integer) 资源类型ID
     *                 "ProductKey" => (string) 资源类型唯一key
     *                 "ProductName" => (string) 产品名称
     *                 "ProductName1" => (string) 产品子名称
     *                 "ProductChName" => (string) 产品中文名称
     *                 "ProductEnName" => (string) 产品英文名称
     *                 "Metas" => (string) {Type: 1|2, Key:string, Name: string}[] -> JSON字符串
     *                 "ProductGroup" => (string) 产品分组
     *             ]
     *         ]
     *     ]
     *     "TraceId" => (string) 链路ID
     * ]
     *
     * @return ListMonitorProductResponse
     * @throws UCloudException
     */
    public function listMonitorProduct(ListMonitorProductRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListMonitorProductResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyAlertStrategyRemark - 修改告警策略备注
     *
     * See also: https://docs.ucloud.cn/api/cloudwatch-api/modify_alert_strategy_remark
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "AlertStrategyID" => (integer) 策略id
     *     "Name" => (string) 策略名称
     *     "Remark" => (string) 策略备注
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (object) 返回数据[
     *         "AlertStrategyID" => (integer) 告警策略id
     *     ]
     * ]
     *
     * @return ModifyAlertStrategyRemarkResponse
     * @throws UCloudException
     */
    public function modifyAlertStrategyRemark(ModifyAlertStrategyRemarkRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyAlertStrategyRemarkResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * QueryMetricDataSet - 查询监控指标数据集
     *
     * See also: https://docs.ucloud.cn/api/cloudwatch-api/query_metric_data_set
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ProductKey" => (string) 产品唯一标识，参见 [产品概览](https://docs.ucloud.cn/cloudwatch/metric/intro)
     *     "StartTime" => (integer) 开始时间，值为10位数时间戳
     *     "EndTime" => (integer) 截止时间，值为10位数时间戳
     *     "CalcMethod" => (string) 计算方式，枚举值如下：raw:原始值,max:最大值,min:最小值,avg:平均值,sum:求和
     *     "Period" => (integer) 周期，单位为秒，即：数据查询时，返回数据点的时间间隔。不同的查询时间范围，对应的周期不同：0<时间范围<=1h——周期：1分钟/5分钟，对应的枚举值为60、300；1h<时间范围<=12h——周期：1分钟/5分钟/1小时，对应的枚举值为60、300、3600；12h<时间范围<=24h——周期：5分钟/1小时，对应的枚举值为300、3600；1天<时间范围<=30天——周期：1小时/6小时/24小时，对应的枚举值为3600、21600、86400
     *     "MetricInfos" => (array<object>) [
     *         [
     *             "Metric" => (string) 指标名，参数中N的取值范围为 0～9
     *             "ResourceId" => (string) 指标所属资源id，参数中N的取值范围为 0～9
     *             "TagOperation" => (string) 多个 Tag 条件的匹配方式；可选 and（默认）或 or。TagList 中使用 or 时最多支持 3 个 Tag。
     *             "TagList" => (array<object>) [
     *                 [
     *                     "TagKey" => (string) 要查询指标的Tag的key，参数中N的取值范围为 0～9
     *                     "TagValues" => (array<string>) 要查询指标的Tag的Value，参数中N的取值范围为 0～9
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TraceId" => (string) 日志链路id
     *     "Data" => (object) QueryMetricDataResp[
     *         "InvalidResourceIds" => (array<string>) 无效或无权限资源的 ID 列表
     *         "List" => (array<object>) 查询的结果集[
     *             [
     *                 "Metric" => (string) 指标名
     *                 "ErrCode" => (integer) 该指标查询的处理状态码
     *                 "ErrMsg" => (string) 该指标查询的状态说明
     *                 "TagEntries" => (array<object>) 标签列表。每项为 TagEntry：TagName（标签名）和 KeyList（该标签的全部候选值）。[
     *                     [
     *                         "TagName" => (string) 标签名称
     *                         "KeyList" => (array<string>) 标签候选值列表
     *                     ]
     *                 ]
     *                 "Results" => (array<object>) 查询到的时间序列列表[
     *                     [
     *                         "ResourceId" => (string) 资源的短id
     *                         "ResourceName" => (string) 资源名称
     *                         "TagList" => (array<object>) 资源标签列表。每项为 TagListItem：Tag（标签名）和 TagValue（标签值）。[
     *                             [
     *                                 "Tag" => (string) 标签名
     *                                 "TagValue" => (string) 标签值
     *                             ]
     *                         ]
     *                         "Values" => (array<object>) 指标数据点列表，元素为 MetricPoint[
     *                             [
     *                                 "Timestamp" => (integer) 时间戳
     *                                 "Value" => (number) 样本值
     *                             ]
     *                         ]
     *                     ]
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return QueryMetricDataSetResponse
     * @throws UCloudException
     */
    public function queryMetricDataSet(QueryMetricDataSetRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new QueryMetricDataSetResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * QueryMetricDataSummary - 获取资源看图属性列表
     *
     * See also: https://docs.ucloud.cn/api/cloudwatch-api/query_metric_data_summary
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ProductKey" => (string) 产品唯一标识，参见 [产品概览](https://docs.ucloud.cn/cloudwatch/metric/intro)
     *     "Offset" => (integer) 跳过的数量
     *     "Limit" => (integer) 当前页数据尺寸
     *     "Metrics" => (array<string>) 指定要查询的指标列表，不指定则使用默认的指标集合
     *     "ResourceIds" => (array<string>) 指定要查询的资源ID列表
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TraceId" => (string) 链路id
     *     "TotalCount" => (integer) 总数
     *     "Data" => (object) 数据[
     *         "Total" => (integer) 总数
     *         "List" => (array<object>) 结果集[
     *             [
     *                 "Region" => (string) 地域
     *                 "Zone" => (string) 可用区
     *                 "ProjectId" => (integer) 项目id
     *                 "ResourceExtendAttrList" => (array<object>) 资源扩展属性列表[
     *                     [
     *                         "Key" => (string) 键
     *                         "Value" => (string) 值
     *                     ]
     *                 ]
     *                 "LabelAttrList" => (array<object>) 资源标签属性列表[
     *                     [
     *                         "Key" => (string) 键
     *                         "Value" => (string) 值
     *                     ]
     *                 ]
     *                 "CompanyId" => (integer) 公司id
     *                 "ResourceId" => (string) 资源id
     *                 "Name" => (string) 资源名称
     *                 "RegionCN" => (string) 地域中文名
     *                 "ZoneCN" => (string) 可用区中文
     *                 "ProductKey" => (string) 产品类型
     *                 "OrganizationId" => (integer) 项目id
     *                 "Status" => (integer) 资源状态
     *                 "MonitorAttr" => (array<object>) 资源的各项指标当前值列表[
     *                     [
     *                         "Metric" => (string) 指标名
     *                         "MetricValues" => (array<object>) 指标数据数组[
     *                             [
     *                                 "Metric" => (string) 指标名
     *                                 "TagsList" => (array<object>) 指标标签列表[
     *                                     [
     *                                         "Tag" => (string) 标签名
     *                                         "TagValue" => (string) 标签值
     *                                     ]
     *                                 ]
     *                                 "Value" => (object) 指标单个样本点对象[
     *                                     "Timestamp" => (integer) 时间戳
     *                                     "Value" => (number) 样本值
     *                                 ]
     *                             ]
     *                         ]
     *                     ]
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return QueryMetricDataSummaryResponse
     * @throws UCloudException
     */
    public function queryMetricDataSummary(QueryMetricDataSummaryRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new QueryMetricDataSummaryResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UnBindAlertStrategy - 解绑告警策略
     *
     * See also: https://docs.ucloud.cn/api/cloudwatch-api/un_bind_alert_strategy
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID
     *     "AlertStrategyIDs" => (array<integer>) 告警策略数组
     *     "Resources" => (array<string>) 资源数组
     *     "ProductKey" => (string) 产品唯一标识，参见 [产品概览](https://docs.ucloud.cn/cloudwatch/metric/intro)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UnBindAlertStrategyResponse
     * @throws UCloudException
     */
    public function unBindAlertStrategy(UnBindAlertStrategyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UnBindAlertStrategyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateAlertStrategy - 更新告警策略
     *
     * See also: https://docs.ucloud.cn/api/cloudwatch-api/update_alert_strategy
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "AlertStrategyID" => (string) 告警策略id
     *     "Name" => (string) 告警策略名称。最大长度255个字符
     *     "ProductKey" => (string) 产品唯一标识，参见 [产品概览](https://docs.ucloud.cn/cloudwatch/metric/intro)
     *     "ObjectType" => (integer) 绑定资源类型 1 资源组 2 资源
     *     "ConfigMode" => (integer) 条件设置方式 1. 手动配置 2.选择模版
     *     "Resources" => (array<string>) 绑定资源，对应绑定资源类型ObjectType=2
     *     "ResourceGroupIDs" => (array<integer>) 绑定资源组，对应绑定资源类型ObjectType=1
     *     "TemplateId" => (integer) 模板id.对应ConfigMode=2
     *     "RuleSet" => (array<object>) [
     *         [
     *             "MetricID" => (integer) 规则指标ID。参考该类型产品下返回的指标列表GetProductMetrics
     *             "ThresholdCompare" => (integer) 阈值比较方式。 枚举值：1：>= 2：<= 3：> 4：< 5：== 6：!=
     *             "ThresholdValue" => (integer) 触发阈值
     *             "TriggerCount" => (integer) 触发次数
     *             "SendPeriodType" => (string) 触发周期。枚举值：continuous连续 exponent 指数 single 不重复
     *             "Level" => (string) 告警等级。枚举值：P0,P1,P2,P3
     *             "Status" => (integer) 告警状态。枚举值：0-关闭 1-开启
     *             "SendInterval" => (integer) 沉默周期(告警周期选择为连续时必填)
     *         ]
     *     ]
     *     "NotifyType" => (string) 通知类型 通知组 group 通知人 user
     *     "NotifyUserIDs" => (array<integer>) 通知人id
     *     "NotifyGroupIDs" => (array<integer>) 通知人组id
     *     "NotifyChannelDs" => (array<string>) 通知渠道 短信sms 邮件email 回调webhook
     *     "CallbackLanguage" => (string) 通知渠道回调webhook 回调语言 中文cn 英文en
     *     "CallbackUrls" => (array<string>) 回调url
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (object) 更新告警策略返回对象[
     *         "AlertStrategyID" => (integer) 告警策略id
     *     ]
     * ]
     *
     * @return UpdateAlertStrategyResponse
     * @throws UCloudException
     */
    public function updateAlertStrategy(UpdateAlertStrategyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateAlertStrategyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateAlertStrategyTemplate - 编辑条件模板
     *
     * See also: https://docs.ucloud.cn/api/cloudwatch-api/update_alert_strategy_template
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "TemplateID" => (integer) 条件模板ID
     *     "Name" => (string) 告警模板名称。最大长度64个字符
     *     "ProductKey" => (string) 产品唯一标识，参见 [产品概览](https://docs.ucloud.cn/cloudwatch/metric/intro)
     *     "RuleSet" => (array<object>) [
     *         [
     *             "MetricID" => (integer) 规则指标ID。参考该类型产品下返回的指标列表GetProductMetrics
     *             "ThresholdCompare" => (integer) 阈值比较方式。枚举值比较方式: 1->=2-<= 3-> 4-< 5-== 6-!=
     *             "ThresholdValue" => (integer) 触发阈值
     *             "TriggerCount" => (integer) 触发次数
     *             "SendPeriodType" => (string) 触发周期。枚举值：continuous连续 exponent 指数 single 不重复
     *             "Level" => (string) 告警等级。枚举值：P0,P1,P2,P3
     *             "Status" => (integer) 告警状态。枚举值：0-关闭 1-开启
     *             "SendInterval" => (integer) 沉默周期(告警周期选择为连续时必填)
     *         ]
     *     ]
     *     "Remark" => (string) 备注
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (object) 更新条件模板ID[
     *         "TemplateID" => (integer) 告警模板ID
     *     ]
     * ]
     *
     * @return UpdateAlertStrategyTemplateResponse
     * @throws UCloudException
     */
    public function updateAlertStrategyTemplate(UpdateAlertStrategyTemplateRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateAlertStrategyTemplateResponse($resp->toArray(), $resp->getRequestId());
    }
}
