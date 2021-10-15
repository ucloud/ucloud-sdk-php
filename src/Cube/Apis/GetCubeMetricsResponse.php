<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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
namespace UCloud\Cube\Apis;

use UCloud\Core\Response\Response;
use UCloud\Cube\Models\MetricDataSet;
use UCloud\Cube\Models\ValueSet;

class GetCubeMetricsResponse extends Response
{
    

    /**
     * DataSets: 时间序列集合
     *
     * @return MetricDataSet[]|null
     */
    public function getDataSets()
    {
        $items = $this->get("DataSets");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new MetricDataSet($item));
        }
        return $result;
    }

    /**
     * DataSets: 时间序列集合
     *
     * @param MetricDataSet[] $dataSets
     */
    public function setDataSets(array $dataSets)
    {
        $result = [];
        foreach ($dataSets as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
