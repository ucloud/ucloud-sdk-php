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

namespace UCloud\UFile\Models;

use UCloud\Core\Response\Response;

use UCloud\UFile\Models\GetUFileBucketDailyReportResponse;
use UCloud\UFile\Models\UFileTotalReportItem;
use UCloud\UFile\Models\GetUFileDailyReportResponse;
use UCloud\UFile\Models\UFileDailyReportItem;

class UFileReportItem extends Response
{

    /**
     * Total: 总消费情况
     *
     * @return UFileTotalReportItemModel[]|null
     */
    public function getTotal()
    {
        $items = $this->get("Total");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UFileTotalReportItemModel($item));
        }
        return $result;
    }

    /**
     * Total: 总消费情况
     *
     * @param UFileTotalReportItemModel[] $total
     */
    public function setTotal(array $total)
    {
        $result = [];
        foreach ($total as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
    /**
     * Daily: 日消费情况
     *
     * @return UFileDailyReportItemModel[]|null
     */
    public function getDaily()
    {
        $items = $this->get("Daily");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UFileDailyReportItemModel($item));
        }
        return $result;
    }

    /**
     * Daily: 日消费情况
     *
     * @param UFileDailyReportItemModel[] $daily
     */
    public function setDaily(array $daily)
    {
        $result = [];
        foreach ($daily as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
