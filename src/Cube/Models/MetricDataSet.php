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

namespace UCloud\Cube\Models;

use UCloud\Core\Response\Response;

use UCloud\Cube\Models\ValueSet;
use UCloud\Cube\Models\GetCubeMetricsResponse;

class MetricDataSet extends Response
{

    /**
     * MetricName:
     *
     * @return string|null
     */
    public function getMetricName()
    {
        return $this->get("MetricName");
    }

    /**
     * MetricName:
     *
     * @param string $metricName
     */
    public function setMetricName(string $metricName)
    {
        $this->set("MetricName", $metricName);
    }
    /**
     * Values:
     *
     * @return ValueSetModel[]|null
     */
    public function getValues()
    {
        $items = $this->get("Values");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ValueSetModel($item));
        }
        return $result;
    }

    /**
     * Values:
     *
     * @param ValueSetModel[] $values
     */
    public function setValues(array $values)
    {
        $result = [];
        foreach ($values as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
