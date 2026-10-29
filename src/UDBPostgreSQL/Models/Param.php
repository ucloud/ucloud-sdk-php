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
namespace UCloud\UDBPostgreSQL\Models;

use UCloud\Core\Response\Response;

class Param extends Response
{
    

    /**
     * Key: 参数Key
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->get("Key");
    }

    /**
     * Key: 参数Key
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
     * ValueType: 值类型
     *
     * @return integer|null
     */
    public function getValueType()
    {
        return $this->get("ValueType");
    }

    /**
     * ValueType: 值类型
     *
     * @param int $valueType
     */
    public function setValueType($valueType)
    {
        $this->set("ValueType", $valueType);
    }

    /**
     * AllowedVal: 允许的值
     *
     * @return string|null
     */
    public function getAllowedVal()
    {
        return $this->get("AllowedVal");
    }

    /**
     * AllowedVal: 允许的值
     *
     * @param string $allowedVal
     */
    public function setAllowedVal($allowedVal)
    {
        $this->set("AllowedVal", $allowedVal);
    }

    /**
     * ApplyType: 允许类型
     *
     * @return integer|null
     */
    public function getApplyType()
    {
        return $this->get("ApplyType");
    }

    /**
     * ApplyType: 允许类型
     *
     * @param int $applyType
     */
    public function setApplyType($applyType)
    {
        $this->set("ApplyType", $applyType);
    }

    /**
     * Modifiable: 是否可以修改
     *
     * @return boolean|null
     */
    public function getModifiable()
    {
        return $this->get("Modifiable");
    }

    /**
     * Modifiable: 是否可以修改
     *
     * @param boolean $modifiable
     */
    public function setModifiable($modifiable)
    {
        $this->set("Modifiable", $modifiable);
    }

    /**
     * FormatType: 参数格式类型
     *
     * @return integer|null
     */
    public function getFormatType()
    {
        return $this->get("FormatType");
    }

    /**
     * FormatType: 参数格式类型
     *
     * @param int $formatType
     */
    public function setFormatType($formatType)
    {
        $this->set("FormatType", $formatType);
    }
}
