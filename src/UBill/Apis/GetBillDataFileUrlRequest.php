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

namespace UCloud\UBill\Apis;

use UCloud\Core\Request\Request;

class GetBillDataFileUrlRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetBillDataFileUrl"]);
        $this->markRequired("BillType");
        $this->markRequired("BillingCycle");
    }


    /**
     * BillType: 账单类型，传 0 时获取账单总览报表，传 1 获取账单明细报表
     *
     * @return integer|null
     */
    public function getBillType()
    {
        return $this->get("BillType");
    }

    /**
     * BillType: 账单类型，传 0 时获取账单总览报表，传 1 获取账单明细报表
     *
     * @param int $billType
     */
    public function setBillType(int $billType)
    {
        $this->set("BillType", $billType);
    }
    /**
     * BillingCycle: 账期(字符串格式，YYYY-MM，例如2021-08).   若BillingCycle 和 BillPeriod同时存在，BillingCycle 优先
     *
     * @return string|null
     */
    public function getBillingCycle()
    {
        return $this->get("BillingCycle");
    }

    /**
     * BillingCycle: 账期(字符串格式，YYYY-MM，例如2021-08).   若BillingCycle 和 BillPeriod同时存在，BillingCycle 优先
     *
     * @param string $billingCycle
     */
    public function setBillingCycle(string $billingCycle)
    {
        $this->set("BillingCycle", $billingCycle);
    }
    /**
     * BillPeriod: 此字段不推荐使用，建议使用BillingCycle.   若BillingCycle 和 BillPeriod同时存在，BillingCycle 优先
     *
     * @return integer|null
     */
    public function getBillPeriod()
    {
        return $this->get("BillPeriod");
    }

    /**
     * BillPeriod: 此字段不推荐使用，建议使用BillingCycle.   若BillingCycle 和 BillPeriod同时存在，BillingCycle 优先
     *
     * @param int $billPeriod
     */
    public function setBillPeriod(int $billPeriod)
    {
        $this->set("BillPeriod", $billPeriod);
    }
    /**
     * PaidType: 获取账单总览报表时，账单的支付状态，传 0 时获取待支付账单，传 1 时获取已支付账单。获取账单明细报表时该参数无效
     *
     * @return integer|null
     */
    public function getPaidType()
    {
        return $this->get("PaidType");
    }

    /**
     * PaidType: 获取账单总览报表时，账单的支付状态，传 0 时获取待支付账单，传 1 时获取已支付账单。获取账单明细报表时该参数无效
     *
     * @param int $paidType
     */
    public function setPaidType(int $paidType)
    {
        $this->set("PaidType", $paidType);
    }
    /**
     * RequireVersion: 如需求其他语言版本的账单则使用此参数。默认中文。如 RequireVersion = "EN"，则提供英文版本账单。
     *
     * @return string|null
     */
    public function getRequireVersion()
    {
        return $this->get("RequireVersion");
    }

    /**
     * RequireVersion: 如需求其他语言版本的账单则使用此参数。默认中文。如 RequireVersion = "EN"，则提供英文版本账单。
     *
     * @param string $requireVersion
     */
    public function setRequireVersion(string $requireVersion)
    {
        $this->set("RequireVersion", $requireVersion);
    }
    /**
     * Version: 文件版本，若为"v1"表示获取带有子用户信息的账单，可以为空
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->get("Version");
    }

    /**
     * Version: 文件版本，若为"v1"表示获取带有子用户信息的账单，可以为空
     *
     * @param string $version
     */
    public function setVersion(string $version)
    {
        $this->set("Version", $version);
    }
}
