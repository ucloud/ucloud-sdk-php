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

use UCloud\UBill\Models\ResourceExtendInfo;
use UCloud\UBill\Models\ItemDetail;
use UCloud\UBill\Models\BillDetailItem;

class ListUBillDetailResponse extends Response
{

    /**
     * Items: 账单明细数组
     *
     * @return BillDetailItemModel[]|null
     */
    public function getItems()
    {
        $items = $this->get("Items");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new BillDetailItemModel($item));
        }
        return $result;
    }

    /**
     * Items: 账单明细数组
     *
     * @param BillDetailItemModel[] $items
     */
    public function setItems(array $items)
    {
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
    /**
     * TotalCount: 账单明细总长度
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 账单明细总长度
     *
     * @param int $totalCount
     */
    public function setTotalCount(int $totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }
}
