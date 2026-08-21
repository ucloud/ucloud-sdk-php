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
use UCloud\CloudWatch\Models\QueryMetricDataSummaryRespData;
use UCloud\CloudWatch\Models\ResourceSummary;
use UCloud\CloudWatch\Models\ResourceMonitorItem;
use UCloud\CloudWatch\Models\MetricSingleSample;
use UCloud\CloudWatch\Models\Product;
use UCloud\CloudWatch\Models\MetricSample;

class QueryMetricDataSummaryResponse extends Response
{
    

    /**
     * TraceId: 链路id
     *
     * @return string|null
     */
    public function getTraceId()
    {
        return $this->get("TraceId");
    }

    /**
     * TraceId: 链路id
     *
     * @param string $traceId
     */
    public function setTraceId($traceId)
    {
        $this->set("TraceId", $traceId);
    }

    /**
     * TotalCount: 总数
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 总数
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }

    /**
     * Data: 数据
     *
     * @return QueryMetricDataSummaryRespData|null
     */
    public function getData()
    {
        return new QueryMetricDataSummaryRespData($this->get("Data"));
    }

    /**
     * Data: 数据
     *
     * @param QueryMetricDataSummaryRespData $data
     */
    public function setData(array $data)
    {
        $this->set("Data", $data->getAll());
    }
}
