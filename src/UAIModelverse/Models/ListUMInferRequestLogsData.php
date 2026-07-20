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
namespace UCloud\UAIModelverse\Models;

use UCloud\Core\Response\Response;

class ListUMInferRequestLogsData extends Response
{
    

    /**
     * Summary: 汇总信息
     *
     * @return RequestLogSummary|null
     */
    public function getSummary()
    {
        return new RequestLogSummary($this->get("Summary"));
    }

    /**
     * Summary: 汇总信息
     *
     * @param RequestLogSummary $summary
     */
    public function setSummary(array $summary)
    {
        $this->set("Summary", $summary->getAll());
    }

    /**
     * Items: 日志列表，数组元素为 RequestLogItem
     *
     * @return RequestLogItem[]|null
     */
    public function getItems()
    {
        $items = $this->get("Items");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new RequestLogItem($item));
        }
        return $result;
    }

    /**
     * Items: 日志列表，数组元素为 RequestLogItem
     *
     * @param RequestLogItem[] $items
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
