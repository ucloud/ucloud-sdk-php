<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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
namespace UCloud\ULB\Params;

use UCloud\Core\Request\Request;

class UpdateRuleAttributeParamRuleConditionsHostConfig extends Request
{
    

    /**
     * MatchMode: 匹配方式。限定枚举值："Regular"/"Wildcard"，默认值："Regular"
     *
     * @return string|null
     */
    public function getMatchMode()
    {
        return $this->get("MatchMode");
    }

    /**
     * MatchMode: 匹配方式。限定枚举值："Regular"/"Wildcard"，默认值："Regular"
     *
     * @param string $matchMode
     */
    public function setMatchMode($matchMode)
    {
        $this->set("MatchMode", $matchMode);
    }

    /**
     * Values: 取值。暂时只支持数组长度为1；取值需符合相关匹配方式的条件；修改域名匹配时必填
     *
     * @return string[]|null
     */
    public function getValues()
    {
        return $this->get("Values");
    }

    /**
     * Values: 取值。暂时只支持数组长度为1；取值需符合相关匹配方式的条件；修改域名匹配时必填
     *
     * @param string[] $values
     */
    public function setValues(array $values)
    {
        $this->set("Values", $values);
    }
}
