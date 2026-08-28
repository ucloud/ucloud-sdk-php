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
namespace UCloud\UK8S\Params;

use UCloud\Core\Request\Request;

class CreateUK8SULSConfigParamMatchRulePodLabelsLabels extends Request
{
    

    /**
     * Key: 按 Pod 标签匹配时，要匹配的标签的 Key。
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->get("Key");
    }

    /**
     * Key: 按 Pod 标签匹配时，要匹配的标签的 Key。
     *
     * @param string $key
     */
    public function setKey($key)
    {
        $this->set("Key", $key);
    }

    /**
     * ValueOperator: 按 Pod 标签匹配时，标签值的匹配操作符。可选值: in, notin。
     *
     * @return string|null
     */
    public function getValueOperator()
    {
        return $this->get("ValueOperator");
    }

    /**
     * ValueOperator: 按 Pod 标签匹配时，标签值的匹配操作符。可选值: in, notin。
     *
     * @param string $valueOperator
     */
    public function setValueOperator($valueOperator)
    {
        $this->set("ValueOperator", $valueOperator);
    }

    /**
     * Value: 按 Pod 标签匹配时，要匹配的标签的值。
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->get("Value");
    }

    /**
     * Value: 按 Pod 标签匹配时，要匹配的标签的值。
     *
     * @param string $value
     */
    public function setValue($value)
    {
        $this->set("Value", $value);
    }
}
