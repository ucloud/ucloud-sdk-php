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
use UCloud\UEC\Models\DataSet;
use UCloud\UEC\Models\MonitorInfo;
use UCloud\UEC\Models\MonitorInfo;
use UCloud\UEC\Models\MonitorInfo;
use UCloud\UEC\Models\MonitorInfo;
use UCloud\UEC\Models\MonitorInfo;
use UCloud\UEC\Models\MonitorInfo;
use UCloud\UEC\Models\MonitorInfo;
use UCloud\UEC\Models\MonitorInfo;
use UCloud\UEC\Models\MonitorInfo;
use UCloud\UEC\Models\MonitorInfo;

class GetUEcVHostDataResponse extends Response
{
    

    /**
     * DataSets: 带宽数据实例集合
     *
     * @return DataSet|null
     */
    public function getDataSets(): DataSet
    {
        return new DataSet($this->get("DataSets"));
    }

    /**
     * DataSets: 带宽数据实例集合
     *
     * @param DataSet $dataSets
     */
    public function setDataSets(DataSet $dataSets)
    {
        $this->set("DataSets", $dataSets->getAll());
    }
}
