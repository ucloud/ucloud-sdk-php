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
namespace UCloud\UFile\Models;

use UCloud\Core\Response\Response;

class AvailablePkgSpecs extends Response
{
    

    /**
     * Durations: 仅针对当前规格生效的durations
     *
     * @return AvailablePkgDurations[]|null
     */
    public function getDurations()
    {
        $items = $this->get("Durations");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new AvailablePkgDurations($item));
        }
        return $result;
    }

    /**
     * Durations: 仅针对当前规格生效的durations
     *
     * @param AvailablePkgDurations[] $durations
     */
    public function setDurations(array $durations)
    {
        $result = [];
        foreach ($durations as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Amount: 购买数量
     *
     * @return integer|null
     */
    public function getAmount()
    {
        return $this->get("Amount");
    }

    /**
     * Amount: 购买数量
     *
     * @param int $amount
     */
    public function setAmount($amount)
    {
        $this->set("Amount", $amount);
    }

    /**
     * Unit: 数量的单位，如：GB，TB
     *
     * @return string|null
     */
    public function getUnit()
    {
        return $this->get("Unit");
    }

    /**
     * Unit: 数量的单位，如：GB，TB
     *
     * @param string $unit
     */
    public function setUnit($unit)
    {
        $this->set("Unit", $unit);
    }
}
