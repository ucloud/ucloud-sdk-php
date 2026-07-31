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
namespace UCloud\UHost\Models;

use UCloud\Core\Response\Response;

class NameFrequency extends Response
{
    

    /**
     * Name: 机型名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 机型名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Frequency: 频率
     *
     * @return Frequency|null
     */
    public function getFrequency()
    {
        return new Frequency($this->get("Frequency"));
    }

    /**
     * Frequency: 频率
     *
     * @param Frequency $frequency
     */
    public function setFrequency(array $frequency)
    {
        $this->set("Frequency", $frequency->getAll());
    }
}
