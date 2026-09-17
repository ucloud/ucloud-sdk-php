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
namespace UCloud\UAIModelverse\Models;

use UCloud\Core\Response\Response;

class FilterOption extends Response
{
    

    /**
     * Children:
     *
     * @return string|null
     */
    public function getChildren()
    {
        return $this->get("Children");
    }

    /**
     * Children:
     *
     * @param string $children
     */
    public function setChildren($children)
    {
        $this->set("Children", $children);
    }

    /**
     * Label: 显示标签
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->get("Label");
    }

    /**
     * Label: 显示标签
     *
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->set("Label", $label);
    }

    /**
     * LabelEn: 英文标签
     *
     * @return string|null
     */
    public function getLabelEn()
    {
        return $this->get("LabelEn");
    }

    /**
     * LabelEn: 英文标签
     *
     * @param string $labelEn
     */
    public function setLabelEn($labelEn)
    {
        $this->set("LabelEn", $labelEn);
    }

    /**
     * Value: 枚举值
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->get("Value");
    }

    /**
     * Value: 枚举值
     *
     * @param string $value
     */
    public function setValue($value)
    {
        $this->set("Value", $value);
    }
}
