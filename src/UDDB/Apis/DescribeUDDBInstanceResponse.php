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
namespace UCloud\UDDB\Apis;

use UCloud\Core\Response\Response;
use UCloud\UDDB\Models\DataSetUDDB;
use UCloud\UDDB\Models\DataNodeInfo;
use UCloud\UDDB\Models\SlaveInfo;

class DescribeUDDBInstanceResponse extends Response
{
    

    /**
     * DataSet: UDDB实例信息列表, 参见DataSetUDDB项定义
     *
     * @return DataSetUDDB[]|null
     */
    public function getDataSet(): array
    {
        $items = $this->get("DataSet") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new DataSetUDDB($item));
        }
        return $result;
    }

    /**
     * DataSet: UDDB实例信息列表, 参见DataSetUDDB项定义
     *
     * @param DataSetUDDB[] $dataSet
     */
    public function setDataSet(array $dataSet)
    {
        $result = [];
        foreach ($dataSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
