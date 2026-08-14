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

class AvailablePkg extends Response
{
    

    /**
     * Type: 资源类型ID
     *
     * @return integer|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 资源类型ID
     *
     * @param int $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * Name: 资源类型名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 资源类型名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Specs: 支持购买的数量规格
     *
     * @return AvailablePkgSpecs[]|null
     */
    public function getSpecs()
    {
        $items = $this->get("Specs");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new AvailablePkgSpecs($item));
        }
        return $result;
    }

    /**
     * Specs: 支持购买的数量规格
     *
     * @param AvailablePkgSpecs[] $specs
     */
    public function setSpecs(array $specs)
    {
        $result = [];
        foreach ($specs as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * CommonDurations: 公共支持购买的时长，当一个Spec配了独立的Durations时，就按独立配置Durations生效；否者按CommonDurations生效
     *
     * @return AvailablePkgDurations[]|null
     */
    public function getCommonDurations()
    {
        $items = $this->get("CommonDurations");
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
     * CommonDurations: 公共支持购买的时长，当一个Spec配了独立的Durations时，就按独立配置Durations生效；否者按CommonDurations生效
     *
     * @param AvailablePkgDurations[] $commonDurations
     */
    public function setCommonDurations(array $commonDurations)
    {
        $result = [];
        foreach ($commonDurations as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
