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

namespace UCloud\PathX\Apis;

use UCloud\Core\Response\Response;

use UCloud\PathX\Models\MatricPoint;
use UCloud\PathX\Models\UGA3Metric;

class GetUGA3MetricResponse extends Response
{

    /**
     * DataSet: 监控数据结果集
     *
     * @return UGA3MetricModel|null
     */
    public function getDataSet()
    {
        return new UGA3MetricModel($this->get("DataSet"));
    }

    /**
     * DataSet: 监控数据结果集
     *
     * @param UGA3MetricModel $dataSet
     */
    public function setDataSet(UGA3MetricModel $dataSet)
    {
        $this->set("DataSet", $dataSet->getAll());
    }
}
