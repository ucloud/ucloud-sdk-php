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

class UFileReportItem extends Response
{
    

    /**
     * Total: 总消费情况
     *
     * @return UFileTotalReportItem[]|null
     */
    public function getTotal()
    {
        $items = $this->get("Total");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UFileTotalReportItem($item));
        }
        return $result;
    }

    /**
     * Total: 总消费情况
     *
     * @param UFileTotalReportItem[] $total
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
     * @return UFileDailyReportItem[]|null
     */
    public function getDaily()
    {
        $items = $this->get("Daily");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UFileDailyReportItem($item));
        }
        return $result;
    }

    /**
     * Daily: 日消费情况
     *
     * @param UFileDailyReportItem[] $daily
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
