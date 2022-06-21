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
namespace UCloud\UPhone\Models;

use UCloud\Core\Response\Response;

class CityInstance extends Response
{
    

    /**
     * CityId: 城市Id，eg: cn-shanghai, cn-jinan
     *
     * @return string|null
     */
    public function getCityId()
    {
        return $this->get("CityId");
    }

    /**
     * CityId: 城市Id，eg: cn-shanghai, cn-jinan
     *
     * @param string $cityId
     */
    public function setCityId($cityId)
    {
        $this->set("CityId", $cityId);
    }

    /**
     * CityName: 城市名称，eg:上海二、济南市
     *
     * @return string|null
     */
    public function getCityName()
    {
        return $this->get("CityName");
    }

    /**
     * CityName: 城市名称，eg:上海二、济南市
     *
     * @param string $cityName
     */
    public function setCityName($cityName)
    {
        $this->set("CityName", $cityName);
    }

    /**
     * IsSoldOut: 表示该城市资源是否售罄
     *
     * @return boolean|null
     */
    public function getIsSoldOut()
    {
        return $this->get("IsSoldOut");
    }

    /**
     * IsSoldOut: 表示该城市资源是否售罄
     *
     * @param boolean $isSoldOut
     */
    public function setIsSoldOut($isSoldOut)
    {
        $this->set("IsSoldOut", $isSoldOut);
    }

    /**
     * CityType: 城市类型。枚举值： <br /> * CENTER，中心城市  <br />* EDGE，边缘计算城市
     *
     * @return string|null
     */
    public function getCityType()
    {
        return $this->get("CityType");
    }

    /**
     * CityType: 城市类型。枚举值： <br /> * CENTER，中心城市  <br />* EDGE，边缘计算城市
     *
     * @param string $cityType
     */
    public function setCityType($cityType)
    {
        $this->set("CityType", $cityType);
    }

    /**
     * CityAlias: 城市别名。如cn-sh2
     *
     * @return string|null
     */
    public function getCityAlias()
    {
        return $this->get("CityAlias");
    }

    /**
     * CityAlias: 城市别名。如cn-sh2
     *
     * @param string $cityAlias
     */
    public function setCityAlias($cityAlias)
    {
        $this->set("CityAlias", $cityAlias);
    }


}
