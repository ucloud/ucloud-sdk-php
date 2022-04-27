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
namespace UCloud\UBill;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\UBill\Apis\GetBalanceRequest;
use UCloud\UBill\Apis\GetBalanceResponse;
use UCloud\UBill\Apis\GetBillDataFileUrlRequest;
use UCloud\UBill\Apis\GetBillDataFileUrlResponse;
use UCloud\UBill\Apis\ListUBillDetailRequest;
use UCloud\UBill\Apis\ListUBillDetailResponse;
use UCloud\UBill\Apis\ListUBillOverviewRequest;
use UCloud\UBill\Apis\ListUBillOverviewResponse;

/**
 * This client is used to call actions of **UBill** service
 */
class UBillClient extends Client
{

    /**
     * GetBalance - 获取账户余额
     *
     * See also: https://docs.ucloud.cn/api/ubill-api/get_balance
     *
     * Arguments:
     *
     * $args = [
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "AccountInfo" => (object) 账户余额信息[
     *         "AmountFreeze" => (string) 冻结账户金额
     *         "AmountCredit" => (string) 信用账户余额
     *         "AmountFree" => (string) 赠送账户余额
     *         "Amount" => (string) 账户余额
     *         "AmountAvailable" => (string) 账户可用余额
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function getBalance(GetBalanceRequest $request = null): GetBalanceResponse
    {
        $resp = $this->invoke($request);
        return new GetBalanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetBillDataFileUrl - 生成账单数据文件下载的 url
     *
     * See also: https://docs.ucloud.cn/api/ubill-api/get_bill_data_file_url
     *
     * Arguments:
     *
     * $args = [
     *     "BillType" => (integer) 账单类型，传 0 时获取账单总览报表，传 1 获取账单明细报表
     *     "BillingCycle" => (string) 账期(字符串格式，YYYY-MM，例如2021-08).   若BillingCycle 和 BillPeriod同时存在，BillingCycle 优先
     *     "BillPeriod" => (integer) 此字段不推荐使用，建议使用BillingCycle.   若BillingCycle 和 BillPeriod同时存在，BillingCycle 优先
     *     "PaidType" => (integer) 获取账单总览报表时，账单的支付状态，传 0 时获取待支付账单，传 1 时获取已支付账单。获取账单明细报表时该参数无效
     *     "RequireVersion" => (string) 如需求其他语言版本的账单则使用此参数。默认中文。如 RequireVersion = "EN"，则提供英文版本账单。
     *     "Version" => (string) 文件版本，若为"v1"表示获取带有子用户信息的账单，可以为空
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "FileUrl" => (string) 交易账单数据下载URL
     *     "IsValid" => (string) 生成的 URL是否有效，即有对应数据文件
     * ]
     *
     * @throws UCloudException
     */
    public function getBillDataFileUrl(GetBillDataFileUrlRequest $request = null): GetBillDataFileUrlResponse
    {
        $resp = $this->invoke($request);
        return new GetBillDataFileUrlResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUBillDetail - 获取某个账期内的所有消费。
     *
     * See also: https://docs.ucloud.cn/api/ubill-api/list_u_bill_detail
     *
     * Arguments:
     *
     * $args = [
     *     "BillingCycle" => (string) 账期，YYYY-MM，比如2021-08，只支持2018-05之后的查询
     *     "ProjectName" => (string) 项目名称 (筛选项, 默认全部)
     *     "ResourceIds" => (array<string>) 资源ID(筛选项, 默认全部) 支持多筛选，多筛选请在请求参数中添加多个字段例ResourceIds.0: uhost-bzgf1gh5，ResourceIds.1: uhost-gu1xpspa，
     *     "OrderType" => (string) 订单类型 (筛选项, 默认全部) 。枚举值：\\ > OT_BUY:新购 \\ > OT_RENEW:续费 \\ > OT_UPGRADE:升级 \\ > OT_REFUND:退费 \\ > OT_DOWNGRADE:降级 \\ > OT_SUSPEND:结算 \\ > OT_PAYMENT:删除资源回款 \\ > OT_POSTPAID_PAYMENT:后付费回款 \\ > OT_RECOVER:删除恢复 \\ > OT_POSTPAID_RENEW:过期续费回款
     *     "ChargeType" => (string) 计费方式 (筛选项, 默认全部)。枚举值：\\ > Dynamic:按时 \\ > Month:按月 \\ > Year:按年 \\ > Once:一次性按量 \\ > Used:按量 \\ > Post:后付费
     *     "ShowZero" => (integer) 是否显示0元订单 (0 不显示, 1 显示, 默认0)
     *     "PaidState" => (integer) 支付状态 (筛选项, 1:仅显示未支付订单; 2:仅显示已支付订单; 0:两者都显示)
     *     "UserEmail" => (string) 用户邮箱，可以根据用户邮箱来进行筛选
     *     "Limit" => (integer) 每页数量，默认值25，最大值：100。
     *     "Offset" => (integer) 数据偏移量 (默认0)
     *     "ResourceTypes" => (array<string>) 产品类型 (筛选项, 默认全部),支持多筛选，多筛选请在请求参数中添加多个字段。枚举值：\\ > uhost:云主机 \\ > udisk:普通云硬盘 \\ > udb:云数据库 \\ > eip:弹性IP \\ > ufile:对象存储 \\ > fortress_host:堡垒机 \\ > ufs:文件存储 \\ > waf:WEB应用防火墙 \\ > ues:弹性搜索 \\ > udisk_ssd:SSD云硬盘 \\ > rssd:RSSD云硬盘
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Items" => (array<object>) 账单明细数组[
     *         [
     *             "Amount" => (string) 订单总金额
     *             "AmountReal" => (string) 现金账户支付
     *             "AmountFree" => (string) 赠送金额抵扣
     *             "AmountCoupon" => (string) 代金券抵扣
     *             "AzGroupCName" => (string) 可用区
     *             "ChargeType" => (string) 计费方式 (筛选项, 默认全部)。枚举值：\\ > Dynamic:按时 \\ > Month:按月 \\ > Year:按年 \\ > Once:一次性按量 \\ > Used:按量 \\ > Post:后付费
     *             "CreateTime" => (integer) 创建时间（时间戳）
     *             "StartTime" => (integer) 开始时间（时间戳）
     *             "OrderNo" => (string) 订单号
     *             "OrderType" => (string) 订单类型 (筛选项, 默认全部) 。枚举值：\\ > OT_BUY:新购 \\ > OT_RENEW:续费 \\ > OT_UPGRADE:升级 \\ > OT_REFUND:退费 \\ > OT_DOWNGRADE:降级 \\ > OT_SUSPEND:结算 \\ > OT_PAYMENT:删除资源回款 \\ > OT_POSTPAID_PAYMENT:后付费回款 \\ > OT_RECOVER:删除恢复 \\ > OT_POSTPAID_RENEW:过期续费回款
     *             "ProjectName" => (string) 项目名称
     *             "ResourceId" => (string) 资源ID
     *             "ResourceType" => (string) 产品类型。枚举值：\\ > uhost:云主机 \\ > udisk:普通云硬盘 \\ > udb:云数据库 \\ > eip:弹性IP \\ > ufile:对象存储 \\ > fortress_host:堡垒机 \\ > ufs:文件存储 \\ > waf:WEB应用防火墙 \\ > ues:弹性搜索 \\ > udisk_ssd:SSD云硬盘 \\ > rssd:RSSD云硬盘
     *             "ResourceTypeCode" => (integer) 产品类型代码
     *             "ItemDetails" => (array<object>) 产品配置[
     *                 [
     *                     "ProductName" => (string) 产品小类名称
     *                     "Value" => (string) 产品小类规格
     *                 ]
     *             ]
     *             "ResourceExtendInfo" => (array<object>) 资源标识[
     *                 [
     *                     "KeyId" => (string) 资源标识健
     *                     "Value" => (string) 资源标识值
     *                 ]
     *             ]
     *             "ShowHover" => (integer) 订单支付状态。枚举值：\\> 0:未支付 \\ > 1:已支付
     *             "UserEmail" => (string) 账户邮箱
     *             "UserName" => (string) 账户名
     *             "UserDisplayName" => (string) 账户昵称
     *             "Admin" => (integer) 是否为主账号。枚举值：\\ > 0:子账号 \\ > 1:主账号
     *         ]
     *     ]
     *     "TotalCount" => (integer) 账单明细总长度
     * ]
     *
     * @throws UCloudException
     */
    public function listUBillDetail(ListUBillDetailRequest $request = null): ListUBillDetailResponse
    {
        $resp = $this->invoke($request);
        return new ListUBillDetailResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUBillOverview - 账单总览。可按产品/项目/用户纬度获取某个账期内账单总览信息。
     *
     * See also: https://docs.ucloud.cn/api/ubill-api/list_u_bill_overview
     *
     * Arguments:
     *
     * $args = [
     *     "BillingCycle" => (string) 账期，YYYY-MM格式，例如2022-02，只支持2018-05之后的查询
     *     "Dimension" => (string) 账单维度, product 按产品聚合,project 按项目聚合，user 按子账号聚合
     *     "HideUnpaid" => (integer) 是否显示已入账账单, 1 已入账, 0 待入账 (默认0 )
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 账单总览数据总数
     *     "TotalPaidAmount" => (string) 已入账订单总额（已入账时显示）
     *     "TotalPaidAmountReal" => (string) 现金账户扣款总额   （已入账时显示）
     *     "TotalUnpaidAmount" => (string) 待入账订单总额（待入账时显示）
     *     "Items" => (array<object>) 账单聚合数据[
     *         [
     *             "Dimension" => (string) 账单维度, product 按产品维度聚合,project 按项目维度聚合，user 按子账号维度聚合
     *             "Amount" => (string) 订单总金额
     *             "AmountCoupon" => (string) 代金券抵扣（已入账时显示）
     *             "AmountFree" => (string) 赠送金额抵扣（已入账时显示）
     *             "AmountReal" => (string) 现金账户支付（已入账时显示）
     *             "ProductCategory" => (string) 产品分类   （账单维度按产品筛选时显示）
     *             "ResourceType" => (string) 产品类型  （账单维度按产品筛选时显示）
     *             "ResourceTypeCode" => (integer) 产品类型代码（账单维度按产品筛选时显示）
     *             "ProjectName" => (string) 项目名称（账单维度按项目筛选时显示）
     *             "UserEmail" => (string) 账户邮箱（账单维度按子账号筛选时显示）
     *             "UserName" => (string) 账户名   （账单维度按子账号筛选时显示）
     *             "UserDisplayName" => (string) 账户昵称（账单维度按子账号筛选时显示）
     *             "Admin" => (integer) 该账户是否为主账号，1 主账号，0 子账号（账单维度按子账号筛选时显示）
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function listUBillOverview(ListUBillOverviewRequest $request = null): ListUBillOverviewResponse
    {
        $resp = $this->invoke($request);
        return new ListUBillOverviewResponse($resp->toArray(), $resp->getRequestId());
    }
}
