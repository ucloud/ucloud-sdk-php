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

class ListUBillOverviewRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ListUBillOverview"]);
        $this->markRequired("BillingCycle");
        $this->markRequired("Dimension");
    }

    

    /**
     * BillingCycle: 账期，YYYY-MM格式，例如2022-02，只支持2018-05之后的查询
     *
     * @return string|null
     */
    public function getBillingCycle()
    {
        return $this->get("BillingCycle");
    }

    /**
     * BillingCycle: 账期，YYYY-MM格式，例如2022-02，只支持2018-05之后的查询
     *
     * @param string $billingCycle
     */
    public function setBillingCycle($billingCycle)
    {
        $this->set("BillingCycle", $billingCycle);
    }

    /**
     * Dimension: 账单维度, product 按产品聚合,project 按项目聚合，user 按子账号聚合	
     *
     * @return string|null
     */
    public function getDimension()
    {
        return $this->get("Dimension");
    }

    /**
     * Dimension: 账单维度, product 按产品聚合,project 按项目聚合，user 按子账号聚合	
     *
     * @param string $dimension
     */
    public function setDimension($dimension)
    {
        $this->set("Dimension", $dimension);
    }

    /**
     * HideUnpaid: 是否显示已入账账单, 1 已入账, 0 待入账 (默认0 )
     *
     * @return int|null
     */
    public function getHideUnpaid()
    {
        return $this->get("HideUnpaid");
    }

    /**
     * HideUnpaid: 是否显示已入账账单, 1 已入账, 0 待入账 (默认0 )
     *
     * @param int $hideUnpaid
     */
    public function setHideUnpaid($hideUnpaid)
    {
        $this->set("HideUnpaid", $hideUnpaid);
    }


}
