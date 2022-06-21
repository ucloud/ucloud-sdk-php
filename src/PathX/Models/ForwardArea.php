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
namespace UCloud\PathX\Models;

use UCloud\Core\Response\Response;

class ForwardArea extends Response
{
    

    /**
     * AreaCode: 源站区域代码
     *
     * @return string|null
     */
    public function getAreaCode()
    {
        return $this->get("AreaCode");
    }

    /**
     * AreaCode: 源站区域代码
     *
     * @param string $areaCode
     */
    public function setAreaCode($areaCode)
    {
        $this->set("AreaCode", $areaCode);
    }

    /**
     * Area: 源站区域中文
     *
     * @return string|null
     */
    public function getArea()
    {
        return $this->get("Area");
    }

    /**
     * Area: 源站区域中文
     *
     * @param string $area
     */
    public function setArea($area)
    {
        $this->set("Area", $area);
    }

    /**
     * CountryCode: 国家代码
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->get("CountryCode");
    }

    /**
     * CountryCode: 国家代码
     *
     * @param string $countryCode
     */
    public function setCountryCode($countryCode)
    {
        $this->set("CountryCode", $countryCode);
    }

    /**
     * FlagUnicode: 国旗unicode
     *
     * @return string|null
     */
    public function getFlagUnicode()
    {
        return $this->get("FlagUnicode");
    }

    /**
     * FlagUnicode: 国旗unicode
     *
     * @param string $flagUnicode
     */
    public function setFlagUnicode($flagUnicode)
    {
        $this->set("FlagUnicode", $flagUnicode);
    }

    /**
     * FlagEmoji: 国旗 emoji
     *
     * @return string|null
     */
    public function getFlagEmoji()
    {
        return $this->get("FlagEmoji");
    }

    /**
     * FlagEmoji: 国旗 emoji
     *
     * @param string $flagEmoji
     */
    public function setFlagEmoji($flagEmoji)
    {
        $this->set("FlagEmoji", $flagEmoji);
    }

    /**
     * ContinentCode: 大陆代码
     *
     * @return string|null
     */
    public function getContinentCode()
    {
        return $this->get("ContinentCode");
    }

    /**
     * ContinentCode: 大陆代码
     *
     * @param string $continentCode
     */
    public function setContinentCode($continentCode)
    {
        $this->set("ContinentCode", $continentCode);
    }


}
