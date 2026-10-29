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
namespace UCloud\UDBPostgreSQL\Apis;

use UCloud\Core\Response\Response;
use UCloud\UDBPostgreSQL\Models\UDBInstance;

class GetUPgSQLInstanceResponse extends Response
{
    

    /**
     * DataSet: DataSet
     *
     * @return UDBInstance|null
     */
    public function getDataSet()
    {
        return new UDBInstance($this->get("DataSet"));
    }

    /**
     * DataSet: DataSet
     *
     * @param UDBInstance $dataSet
     */
    public function setDataSet(array $dataSet)
    {
        $this->set("DataSet", $dataSet->getAll());
    }
}
