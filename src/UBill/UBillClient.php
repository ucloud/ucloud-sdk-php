<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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

/**
 * This client is used to call actions of **UBill** service
 */
class UBillClient extends Client {

    /**
     * GetBalance - 获取账户余额
     *
     * See also: https://docs.ucloud.cn/api/UBill-api/get_balance
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
    public function getBalance(GetBalanceRequest $request = null): GetBalanceResponse {
        $resp = $this->invoke($request);
        return new GetBalanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetBillDataFileUrl - 生成账单数据文件下载的 url
     *
     * See also: https://docs.ucloud.cn/api/UBill-api/get_bill_data_file_url
     *
     * Arguments:
     *
     * $args = [
     *     "BillPeriod" => (integer) 账期（时间戳格式）
     *     "BillType" => (integer) 账单类型，传 0 时获取账单总览报表，传 1 获取账单明细报表
     *     "PaidType" => (integer) 获取账单总览报表时，账单的支付状态，传 0 时获取待支付账单，传 1 时获取已支付账单。获取账单明细报表时该参数无效
     *     "RequireVersion" => (string) 如需求其他语言版本的账单则使用此参数。默认中文。如 RequireVersion = "EN"，则提供英文版本账单。
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
    public function getBillDataFileUrl(GetBillDataFileUrlRequest $request = null): GetBillDataFileUrlResponse {
        $resp = $this->invoke($request);
        return new GetBillDataFileUrlResponse($resp->toArray(), $resp->getRequestId());
    }
}
