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
namespace UCloud\UFile\Apis;

use UCloud\Core\Response\Response;
use UCloud\UFile\Models\UFileQuotaDataSetItem;
use UCloud\UFile\Models\UFileQuotaLeft;
use UCloud\UFile\Models\UFileQuotaLeft;
use UCloud\UFile\Models\UFileQuotaLeft;

class GetUFileQuotaInfoResponse extends Response
{
    

    /**
     * DataSet: 配额信息数据集
     *
     * @return UFileQuotaDataSetItem[]|null
     */
    public function getDataSet()
    {
        $items = $this->get("DataSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UFileQuotaDataSetItem($item));
        }
        return $result;
    }

    /**
     * DataSet: 配额信息数据集
     *
     * @param UFileQuotaDataSetItem[] $dataSet
     */
    public function setDataSet(array $dataSet)
    {
        $result = [];
        foreach ($dataSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
