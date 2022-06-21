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

use UCloud\Core\Response\Response;
use UCloud\UBill\Models\BillOverviewItem;

class ListUBillOverviewResponse extends Response
{
    

    /**
     * TotalCount: 账单总览数据总数
     *
     * @return int|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 账单总览数据总数
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }

    /**
     * TotalPaidAmount: 已入账订单总额（已入账时显示）
     *
     * @return string|null
     */
    public function getTotalPaidAmount()
    {
        return $this->get("TotalPaidAmount");
    }

    /**
     * TotalPaidAmount: 已入账订单总额（已入账时显示）
     *
     * @param string $totalPaidAmount
     */
    public function setTotalPaidAmount($totalPaidAmount)
    {
        $this->set("TotalPaidAmount", $totalPaidAmount);
    }

    /**
     * TotalPaidAmountReal: 现金账户扣款总额	（已入账时显示）
     *
     * @return string|null
     */
    public function getTotalPaidAmountReal()
    {
        return $this->get("TotalPaidAmountReal");
    }

    /**
     * TotalPaidAmountReal: 现金账户扣款总额	（已入账时显示）
     *
     * @param string $totalPaidAmountReal
     */
    public function setTotalPaidAmountReal($totalPaidAmountReal)
    {
        $this->set("TotalPaidAmountReal", $totalPaidAmountReal);
    }

    /**
     * TotalUnpaidAmount: 待入账订单总额（待入账时显示）
     *
     * @return string|null
     */
    public function getTotalUnpaidAmount()
    {
        return $this->get("TotalUnpaidAmount");
    }

    /**
     * TotalUnpaidAmount: 待入账订单总额（待入账时显示）
     *
     * @param string $totalUnpaidAmount
     */
    public function setTotalUnpaidAmount($totalUnpaidAmount)
    {
        $this->set("TotalUnpaidAmount", $totalUnpaidAmount);
    }

    /**
     * Items: 账单聚合数据
     *
     * @return BillOverviewItem[]|null
     */
    public function getItems()
    {
        $items = $this->get("Items");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new BillOverviewItem($item));
        }
        return $result;
    }

    /**
     * Items: 账单聚合数据
     *
     * @param BillOverviewItem[] $items
     */
    public function setItems(array $items)
    {
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }


}
