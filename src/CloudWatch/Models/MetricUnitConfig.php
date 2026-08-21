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

class MetricUnitConfig extends Response
{
    

    /**
     * UnitCnNames: 指标中文名列表
     *
     * @return string[]|null
     */
    public function getUnitCnNames()
    {
        return $this->get("UnitCnNames");
    }

    /**
     * UnitCnNames: 指标中文名列表
     *
     * @param string[] $unitCnNames
     */
    public function setUnitCnNames(array $unitCnNames)
    {
        $this->set("UnitCnNames", $unitCnNames);
    }

    /**
     * UnitEnNames: 指标英文名列表
     *
     * @return string[]|null
     */
    public function getUnitEnNames()
    {
        return $this->get("UnitEnNames");
    }

    /**
     * UnitEnNames: 指标英文名列表
     *
     * @param string[] $unitEnNames
     */
    public function setUnitEnNames(array $unitEnNames)
    {
        $this->set("UnitEnNames", $unitEnNames);
    }

    /**
     * ConversionFactor: 转换因子
     *
     * @return integer|null
     */
    public function getConversionFactor()
    {
        return $this->get("ConversionFactor");
    }

    /**
     * ConversionFactor: 转换因子
     *
     * @param int $conversionFactor
     */
    public function setConversionFactor($conversionFactor)
    {
        $this->set("ConversionFactor", $conversionFactor);
    }

    /**
     * ConversionRules: 转换规则
     *
     * @return ConversionRule[]|null
     */
    public function getConversionRules()
    {
        $items = $this->get("ConversionRules");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ConversionRule($item));
        }
        return $result;
    }

    /**
     * ConversionRules: 转换规则
     *
     * @param ConversionRule[] $conversionRules
     */
    public function setConversionRules(array $conversionRules)
    {
        $result = [];
        foreach ($conversionRules as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
