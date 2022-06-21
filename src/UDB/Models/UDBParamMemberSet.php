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
namespace UCloud\UDB\Models;

use UCloud\Core\Response\Response;

class UDBParamMemberSet extends Response
{
    

    /**
     * Key: 参数名称
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->get("Key");
    }

    /**
     * Key: 参数名称
     *
     * @param string $key
     */
    public function setKey($key)
    {
        $this->set("Key", $key);
    }

    /**
     * Value: 参数值
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->get("Value");
    }

    /**
     * Value: 参数值
     *
     * @param string $value
     */
    public function setValue($value)
    {
        $this->set("Value", $value);
    }

    /**
     * ValueType: 参数值应用类型，取值范围为{0,10,20,30},各值 代表意义为 0-unknown、10-int、20-string、 30-bool
     *
     * @return int|null
     */
    public function getValueType()
    {
        return $this->get("ValueType");
    }

    /**
     * ValueType: 参数值应用类型，取值范围为{0,10,20,30},各值 代表意义为 0-unknown、10-int、20-string、 30-bool
     *
     * @param int $valueType
     */
    public function setValueType($valueType)
    {
        $this->set("ValueType", $valueType);
    }

    /**
     * AllowedVal: 允许的值(根据参数类型，用分隔符表示)
     *
     * @return string|null
     */
    public function getAllowedVal()
    {
        return $this->get("AllowedVal");
    }

    /**
     * AllowedVal: 允许的值(根据参数类型，用分隔符表示)
     *
     * @param string $allowedVal
     */
    public function setAllowedVal($allowedVal)
    {
        $this->set("AllowedVal", $allowedVal);
    }

    /**
     * ApplyType: 参数值应用类型,取值范围为{0,10,20}，各值代表 意义为0-unknown、10-static、20-dynamic
     *
     * @return int|null
     */
    public function getApplyType()
    {
        return $this->get("ApplyType");
    }

    /**
     * ApplyType: 参数值应用类型,取值范围为{0,10,20}，各值代表 意义为0-unknown、10-static、20-dynamic
     *
     * @param int $applyType
     */
    public function setApplyType($applyType)
    {
        $this->set("ApplyType", $applyType);
    }

    /**
     * Modifiable: 是否可更改，默认为false
     *
     * @return boolean|null
     */
    public function getModifiable()
    {
        return $this->get("Modifiable");
    }

    /**
     * Modifiable: 是否可更改，默认为false
     *
     * @param boolean $modifiable
     */
    public function setModifiable($modifiable)
    {
        $this->set("Modifiable", $modifiable);
    }

    /**
     * FormatType: 允许值的格式类型，取值范围为{0,10,20}，意义分 别为PVFT_UNKOWN=0,PVFT_RANGE=10, PVFT_ENUM=20
     *
     * @return int|null
     */
    public function getFormatType()
    {
        return $this->get("FormatType");
    }

    /**
     * FormatType: 允许值的格式类型，取值范围为{0,10,20}，意义分 别为PVFT_UNKOWN=0,PVFT_RANGE=10, PVFT_ENUM=20
     *
     * @param int $formatType
     */
    public function setFormatType($formatType)
    {
        $this->set("FormatType", $formatType);
    }


}
