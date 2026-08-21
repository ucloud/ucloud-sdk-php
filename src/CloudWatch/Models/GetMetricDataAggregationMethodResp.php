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

class GetMetricDataAggregationMethodResp extends Response
{
    

    /**
     * List: 聚合方式列表
     *
     * @return MetricDataAggregationMethod[]|null
     */
    public function getList()
    {
        $items = $this->get("List");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new MetricDataAggregationMethod($item));
        }
        return $result;
    }

    /**
     * List: 聚合方式列表
     *
     * @param MetricDataAggregationMethod[] $list
     */
    public function setList(array $list)
    {
        $result = [];
        foreach ($list as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
