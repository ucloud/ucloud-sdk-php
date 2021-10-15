<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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
namespace UCloud\UEC\Models;

use UCloud\Core\Response\Response;

class IDCCutInfo extends Response
{
    

    /**
     * IDCName: 机房名称
     *
     * @return string|null
     */
    public function getIDCName()
    {
        return $this->get("IDCName");
    }

    /**
     * IDCName: 机房名称
     *
     * @param string $idcName
     */
    public function setIDCName($idcName)
    {
        $this->set("IDCName", $idcName);
    }

    /**
     * Province: 省份
     *
     * @return string|null
     */
    public function getProvince()
    {
        return $this->get("Province");
    }

    /**
     * Province: 省份
     *
     * @param string $province
     */
    public function setProvince($province)
    {
        $this->set("Province", $province);
    }

    /**
     * City: 城市
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->get("City");
    }

    /**
     * City: 城市
     *
     * @param string $city
     */
    public function setCity($city)
    {
        $this->set("City", $city);
    }

    /**
     * StartTime: 割接开始时间
     *
     * @return integer|null
     */
    public function getStartTime()
    {
        return $this->get("StartTime");
    }

    /**
     * StartTime: 割接开始时间
     *
     * @param int $startTime
     */
    public function setStartTime($startTime)
    {
        $this->set("StartTime", $startTime);
    }

    /**
     * EndTime: 割接结束时间
     *
     * @return integer|null
     */
    public function getEndTime()
    {
        return $this->get("EndTime");
    }

    /**
     * EndTime: 割接结束时间
     *
     * @param int $endTime
     */
    public function setEndTime($endTime)
    {
        $this->set("EndTime", $endTime);
    }

    /**
     * CutType: 割接类型（中断、抖动、断电）
     *
     * @return string|null
     */
    public function getCutType()
    {
        return $this->get("CutType");
    }

    /**
     * CutType: 割接类型（中断、抖动、断电）
     *
     * @param string $cutType
     */
    public function setCutType($cutType)
    {
        $this->set("CutType", $cutType);
    }

    /**
     * ResourceSet: 受影响的资源信息列表
     *
     * @return ResourceSet[]|null
     */
    public function getResourceSet()
    {
        $items = $this->get("ResourceSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ResourceSet($item));
        }
        return $result;
    }

    /**
     * ResourceSet: 受影响的资源信息列表
     *
     * @param ResourceSet[] $resourceSet
     */
    public function setResourceSet(array $resourceSet)
    {
        $result = [];
        foreach ($resourceSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
