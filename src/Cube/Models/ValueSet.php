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
namespace UCloud\Cube\Models;

use UCloud\Core\Response\Response;

class ValueSet extends Response
{
    

    /**
     * Value: 
     *
     * @return float|null
     */
    public function getValue()
    {
        return $this->get("Value");
    }

    /**
     * Value: 
     *
     * @param float $value
     */
    public function setValue($value)
    {
        $this->set("Value", $value);
    }

    /**
     * Timestamp: 
     *
     * @return int|null
     */
    public function getTimestamp()
    {
        return $this->get("Timestamp");
    }

    /**
     * Timestamp: 
     *
     * @param int $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->set("Timestamp", $timestamp);
    }


}
