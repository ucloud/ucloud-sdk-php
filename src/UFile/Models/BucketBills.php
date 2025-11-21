<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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
namespace UCloud\UFile\Models;

use UCloud\Core\Response\Response;

class BucketBills extends Response
{
    

    /**
     * BucketBills:
     *
     * @return UFileDailyBillItem[]|null
     */
    public function getBucketBills()
    {
        $items = $this->get("BucketBills");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UFileDailyBillItem($item));
        }
        return $result;
    }

    /**
     * BucketBills:
     *
     * @param UFileDailyBillItem[] $bucketBills
     */
    public function setBucketBills(array $bucketBills)
    {
        $result = [];
        foreach ($bucketBills as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
