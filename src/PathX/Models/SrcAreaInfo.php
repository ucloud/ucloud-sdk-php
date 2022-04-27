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

class SrcAreaInfo extends Response
{
    

    /**
     * AreaCode: AreaCode ,城市机场代码
     *
     * @return string|null
     */
    public function getAreaCode(): string
    {
        return $this->get("AreaCode");
    }

    /**
     * AreaCode: AreaCode ,城市机场代码
     *
     * @param string $areaCode
     */
    public function setAreaCode(string $areaCode)
    {
        $this->set("AreaCode", $areaCode);
    }

    /**
     * Area: AreaCode对应城市名
     *
     * @return string|null
     */
    public function getArea(): string
    {
        return $this->get("Area");
    }

    /**
     * Area: AreaCode对应城市名
     *
     * @param string $area
     */
    public function setArea(string $area)
    {
        $this->set("Area", $area);
    }

    /**
     * FlagEmoji: 国旗Emoji
     *
     * @return string|null
     */
    public function getFlagEmoji(): string
    {
        return $this->get("FlagEmoji");
    }

    /**
     * FlagEmoji: 国旗Emoji
     *
     * @param string $flagEmoji
     */
    public function setFlagEmoji(string $flagEmoji)
    {
        $this->set("FlagEmoji", $flagEmoji);
    }

    /**
     * FlagUnicode: 国旗Unicode
     *
     * @return string|null
     */
    public function getFlagUnicode(): string
    {
        return $this->get("FlagUnicode");
    }

    /**
     * FlagUnicode: 国旗Unicode
     *
     * @param string $flagUnicode
     */
    public function setFlagUnicode(string $flagUnicode)
    {
        $this->set("FlagUnicode", $flagUnicode);
    }
}
