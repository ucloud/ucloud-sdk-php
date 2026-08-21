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
namespace UCloud\CloudWatch\Apis;

use UCloud\Core\Response\Response;
use UCloud\CloudWatch\Models\AlertStrategy;
use UCloud\CloudWatch\Models\AlertRule;

class ListAlertStrategyResponse extends Response
{
    

    /**
     * Data: 告警策略集合
     *
     * @return AlertStrategy[]|null
     */
    public function getData()
    {
        $items = $this->get("Data");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new AlertStrategy($item));
        }
        return $result;
    }

    /**
     * Data: 告警策略集合
     *
     * @param AlertStrategy[] $data
     */
    public function setData(array $data)
    {
        $result = [];
        foreach ($data as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * TotalCount: 告警策略总数
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 告警策略总数
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }

    /**
     * TraceId: 链路ID
     *
     * @return string|null
     */
    public function getTraceId()
    {
        return $this->get("TraceId");
    }

    /**
     * TraceId: 链路ID
     *
     * @param string $traceId
     */
    public function setTraceId($traceId)
    {
        $this->set("TraceId", $traceId);
    }
}
