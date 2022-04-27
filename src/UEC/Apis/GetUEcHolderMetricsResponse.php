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

namespace UCloud\UEC\Apis;

use UCloud\Core\Response\Response;

use UCloud\UEC\Models\MetricisDataSet;
use UCloud\UEC\Models\MonitorInfo;

class GetUEcHolderMetricsResponse extends Response
{

    /**
     * DataSets: 获得的监控数据（详情参考MetricisDataSet）
     *
     * @return MetricisDataSetModel|null
     */
    public function getDataSets()
    {
        return new MetricisDataSetModel($this->get("DataSets"));
    }

    /**
     * DataSets: 获得的监控数据（详情参考MetricisDataSet）
     *
     * @param MetricisDataSetModel $dataSets
     */
    public function setDataSets(MetricisDataSetModel $dataSets)
    {
        $this->set("DataSets", $dataSets->getAll());
    }
}
