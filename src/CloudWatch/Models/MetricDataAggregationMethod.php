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
namespace UCloud\CloudWatch\Models;

use UCloud\Core\Response\Response;

class MetricDataAggregationMethod extends Response
{
    

    /**
     * Label: 标签
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->get("Label");
    }

    /**
     * Label: 标签
     *
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->set("Label", $label);
    }

    /**
     * Value: 值
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->get("Value");
    }

    /**
     * Value: 值
     *
     * @param string $value
     */
    public function setValue($value)
    {
        $this->set("Value", $value);
    }

    /**
     * IsDefault: 是否是默认方式
     *
     * @return boolean|null
     */
    public function getIsDefault()
    {
        return $this->get("IsDefault");
    }

    /**
     * IsDefault: 是否是默认方式
     *
     * @param boolean $isDefault
     */
    public function setIsDefault($isDefault)
    {
        $this->set("IsDefault", $isDefault);
    }

    /**
     * Description: 描述
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->get("Description");
    }

    /**
     * Description: 描述
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->set("Description", $description);
    }
}
