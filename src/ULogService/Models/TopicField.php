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
namespace UCloud\ULogService\Models;

use UCloud\Core\Response\Response;

class TopicField extends Response
{
    

    /**
     * FieldName: 索引名称
     *
     * @return string|null
     */
    public function getFieldName()
    {
        return $this->get("FieldName");
    }

    /**
     * FieldName: 索引名称
     *
     * @param string $fieldName
     */
    public function setFieldName($fieldName)
    {
        $this->set("FieldName", $fieldName);
    }

    /**
     * FieldType: 索引类型，可取的值有: long, double, text
     *
     * @return string|null
     */
    public function getFieldType()
    {
        return $this->get("FieldType");
    }

    /**
     * FieldType: 索引类型，可取的值有: long, double, text
     *
     * @param string $fieldType
     */
    public function setFieldType($fieldType)
    {
        $this->set("FieldType", $fieldType);
    }

    /**
     * IsReserved: 是否保留字段，true表示保留字段，false表示非保留字段
     *
     * @return boolean|null
     */
    public function getIsReserved()
    {
        return $this->get("IsReserved");
    }

    /**
     * IsReserved: 是否保留字段，true表示保留字段，false表示非保留字段
     *
     * @param boolean $isReserved
     */
    public function setIsReserved($isReserved)
    {
        $this->set("IsReserved", $isReserved);
    }
}
