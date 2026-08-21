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

class GetProductMetricsRespData extends Response
{
    

    /**
     * Total: 查询结果总数
     *
     * @return integer|null
     */
    public function getTotal()
    {
        return $this->get("Total");
    }

    /**
     * Total: 查询结果总数
     *
     * @param int $total
     */
    public function setTotal($total)
    {
        $this->set("Total", $total);
    }

    /**
     * List: 指标列表
     *
     * @return Metirc[]|null
     */
    public function getList()
    {
        $items = $this->get("List");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new Metirc($item));
        }
        return $result;
    }

    /**
     * List: 指标列表
     *
     * @param Metirc[] $list
     */
    public function setList(array $list)
    {
        $result = [];
        foreach ($list as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * UnitConfigs: 单位转换信息
     *
     * @return MetricUnitConfig[]|null
     */
    public function getUnitConfigs()
    {
        $items = $this->get("UnitConfigs");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new MetricUnitConfig($item));
        }
        return $result;
    }

    /**
     * UnitConfigs: 单位转换信息
     *
     * @param MetricUnitConfig[] $unitConfigs
     */
    public function setUnitConfigs(array $unitConfigs)
    {
        $result = [];
        foreach ($unitConfigs as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
