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

class MetricSingleSample extends Response
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
     * TagsList: 指标标签列表
     *
     * @return Product[]|null
     */
    public function getTagsList()
    {
        $items = $this->get("TagsList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new Product($item));
        }
        return $result;
    }

    /**
     * TagsList: 指标标签列表
     *
     * @param Product[] $tagsList
     */
    public function setTagsList(array $tagsList)
    {
        $result = [];
        foreach ($tagsList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Value: 指标单个样本点对象
     *
     * @return MetricSample|null
     */
    public function getValue()
    {
        return new MetricSample($this->get("Value"));
    }

    /**
     * Value: 指标单个样本点对象
     *
     * @param MetricSample $value
     */
    public function setValue(array $value)
    {
        $this->set("Value", $value->getAll());
    }
}
