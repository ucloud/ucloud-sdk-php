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
namespace UCloud\ULogService\Params;

use UCloud\Core\Request\Request;

class UpdateULogServiceTopicFieldParamFieldInfos extends Request
{
    

    /**
     * FieldName: 字段名称支持字母、横线(-)、斜杠(/)、特殊符号（@）、数字、下划线（_）和点（.），且不能以下划线开头，长度不超过255个字符
     *
     * @return string|null
     */
    public function getFieldName()
    {
        return $this->get("FieldName");
    }

    /**
     * FieldName: 字段名称支持字母、横线(-)、斜杠(/)、特殊符号（@）、数字、下划线（_）和点（.），且不能以下划线开头，长度不超过255个字符
     *
     * @param string $fieldName
     */
    public function setFieldName($fieldName)
    {
        $this->set("FieldName", $fieldName);
    }

    /**
     * FieldType: 主题字段类型（text、long、double）
     *
     * @return string|null
     */
    public function getFieldType()
    {
        return $this->get("FieldType");
    }

    /**
     * FieldType: 主题字段类型（text、long、double）
     *
     * @param string $fieldType
     */
    public function setFieldType($fieldType)
    {
        $this->set("FieldType", $fieldType);
    }
}
