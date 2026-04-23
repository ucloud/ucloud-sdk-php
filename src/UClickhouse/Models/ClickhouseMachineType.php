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
namespace UCloud\UClickhouse\Models;

use UCloud\Core\Response\Response;

class ClickhouseMachineType extends Response
{
    

    /**
     * ClickhouseMachineTypeName: CK机型名称
     *
     * @return string|null
     */
    public function getClickhouseMachineTypeName()
    {
        return $this->get("ClickhouseMachineTypeName");
    }

    /**
     * ClickhouseMachineTypeName: CK机型名称
     *
     * @param string $clickhouseMachineTypeName
     */
    public function setClickhouseMachineTypeName($clickhouseMachineTypeName)
    {
        $this->set("ClickhouseMachineTypeName", $clickhouseMachineTypeName);
    }

    /**
     * ClickhouseMachineTypeOptions: CK机型可选项
     *
     * @return ClickhouseMachineTypeOption[]|null
     */
    public function getClickhouseMachineTypeOptions()
    {
        $items = $this->get("ClickhouseMachineTypeOptions");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ClickhouseMachineTypeOption($item));
        }
        return $result;
    }

    /**
     * ClickhouseMachineTypeOptions: CK机型可选项
     *
     * @param ClickhouseMachineTypeOption[] $clickhouseMachineTypeOptions
     */
    public function setClickhouseMachineTypeOptions(array $clickhouseMachineTypeOptions)
    {
        $result = [];
        foreach ($clickhouseMachineTypeOptions as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * IsSecgroupMachineType: 机型是否支持安全组
     *
     * @return string|null
     */
    public function getIsSecgroupMachineType()
    {
        return $this->get("IsSecgroupMachineType");
    }

    /**
     * IsSecgroupMachineType: 机型是否支持安全组
     *
     * @param string $isSecgroupMachineType
     */
    public function setIsSecgroupMachineType($isSecgroupMachineType)
    {
        $this->set("IsSecgroupMachineType", $isSecgroupMachineType);
    }
}
