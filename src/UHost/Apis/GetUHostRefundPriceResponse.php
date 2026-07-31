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
namespace UCloud\UHost\Apis;

use UCloud\Core\Response\Response;
use UCloud\UHost\Models\UHostRefundPriceSet;

class GetUHostRefundPriceResponse extends Response
{
    

    /**
     * RefundPriceSet: 主机删除扣除费用详情
     *
     * @return UHostRefundPriceSet[]|null
     */
    public function getRefundPriceSet()
    {
        $items = $this->get("RefundPriceSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UHostRefundPriceSet($item));
        }
        return $result;
    }

    /**
     * RefundPriceSet: 主机删除扣除费用详情
     *
     * @param UHostRefundPriceSet[] $refundPriceSet
     */
    public function setRefundPriceSet(array $refundPriceSet)
    {
        $result = [];
        foreach ($refundPriceSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
