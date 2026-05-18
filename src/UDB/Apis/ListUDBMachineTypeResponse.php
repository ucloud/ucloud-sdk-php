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
namespace UCloud\UDB\Apis;

use UCloud\Core\Response\Response;
use UCloud\UDB\Models\MachineType;
use UCloud\UDB\Models\MachineType;

class ListUDBMachineTypeResponse extends Response
{
    

    /**
     * DataSet: 计算规格列表
     *
     * @return MachineType[]|null
     */
    public function getDataSet()
    {
        $items = $this->get("DataSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new MachineType($item));
        }
        return $result;
    }

    /**
     * DataSet: 计算规格列表
     *
     * @param MachineType[] $dataSet
     */
    public function setDataSet(array $dataSet)
    {
        $result = [];
        foreach ($dataSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * DefaultMachineType: 默认计算规格
     *
     * @return MachineType|null
     */
    public function getDefaultMachineType()
    {
        return new MachineType($this->get("DefaultMachineType"));
    }

    /**
     * DefaultMachineType: 默认计算规格
     *
     * @param MachineType $defaultMachineType
     */
    public function setDefaultMachineType(array $defaultMachineType)
    {
        $this->set("DefaultMachineType", $defaultMachineType->getAll());
    }
}
