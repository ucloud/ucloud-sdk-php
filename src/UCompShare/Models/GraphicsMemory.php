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
namespace UCloud\UCompShare\Models;

use UCloud\Core\Response\Response;

class GraphicsMemory extends Response
{
    

    /**
     * Value: 值，单位是GB
     *
     * @return integer|null
     */
    public function getValue()
    {
        return $this->get("Value");
    }

    /**
     * Value: 值，单位是GB
     *
     * @param int $value
     */
    public function setValue($value)
    {
        $this->set("Value", $value);
    }

    /**
     * Rate: 交互展示参数，可忽略
     *
     * @return integer|null
     */
    public function getRate()
    {
        return $this->get("Rate");
    }

    /**
     * Rate: 交互展示参数，可忽略
     *
     * @param int $rate
     */
    public function setRate($rate)
    {
        $this->set("Rate", $rate);
    }
}
