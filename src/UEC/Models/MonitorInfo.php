<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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
namespace UCloud\UEC\Models;

use UCloud\Core\Response\Response;

class MonitorInfo extends Response
{
    

    /**
     * TimeStamp: 时间戳
     *
     * @return integer|null
     */
    public function getTimeStamp(): int
    {
        return $this->get("TimeStamp");
    }

    /**
     * TimeStamp: 时间戳
     *
     * @param int $timeStamp
     */
    public function setTimeStamp(int $timeStamp)
    {
        $this->set("TimeStamp", $timeStamp);
    }

    /**
     * Value: 值
     *
     * @return integer|null
     */
    public function getValue(): int
    {
        return $this->get("Value");
    }

    /**
     * Value: 值
     *
     * @param int $value
     */
    public function setValue(int $value)
    {
        $this->set("Value", $value);
    }
}
