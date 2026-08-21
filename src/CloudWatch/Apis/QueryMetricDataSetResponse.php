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
use UCloud\CloudWatch\Models\QueryMetricDataResp;
use UCloud\CloudWatch\Models\QueryMetricDataRespItem;
use UCloud\CloudWatch\Models\TagEntry;
use UCloud\CloudWatch\Models\MetricResult;
use UCloud\CloudWatch\Models\TagListItem;
use UCloud\CloudWatch\Models\MetricSample;

class QueryMetricDataSetResponse extends Response
{
    

    /**
     * TraceId: 日志链路id
     *
     * @return string|null
     */
    public function getTraceId()
    {
        return $this->get("TraceId");
    }

    /**
     * TraceId: 日志链路id
     *
     * @param string $traceId
     */
    public function setTraceId($traceId)
    {
        $this->set("TraceId", $traceId);
    }

    /**
     * Data: QueryMetricDataResp
     *
     * @return QueryMetricDataResp|null
     */
    public function getData()
    {
        return new QueryMetricDataResp($this->get("Data"));
    }

    /**
     * Data: QueryMetricDataResp
     *
     * @param QueryMetricDataResp $data
     */
    public function setData(array $data)
    {
        $this->set("Data", $data->getAll());
    }
}
