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
namespace UCloud\CloudWatch\Models;

use UCloud\Core\Response\Response;

class ResourceMonitorItem extends Response
{
    

    /**
     * Metric: 指标名
     *
     * @return string|null
     */
    public function getMetric()
    {
        return $this->get("Metric");
    }

    /**
     * Metric: 指标名
     *
     * @param string $metric
     */
    public function setMetric($metric)
    {
        $this->set("Metric", $metric);
    }

    /**
     * MetricValues: 指标数据数组
     *
     * @return MetricSingleSample[]|null
     */
    public function getMetricValues()
    {
        $items = $this->get("MetricValues");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new MetricSingleSample($item));
        }
        return $result;
    }

    /**
     * MetricValues: 指标数据数组
     *
     * @param MetricSingleSample[] $metricValues
     */
    public function setMetricValues(array $metricValues)
    {
        $result = [];
        foreach ($metricValues as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
