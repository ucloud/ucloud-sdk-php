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

class EnvList extends Response {
    

    /**
     * Key: 环境变量key值
     *
     * @return string|null
     */
    public function getKey(): string {
        return $this->get("Key");
    }

    /**
     * Key: 环境变量key值
     *
     * @param string $key
     */
    public function setKey(string $key) {
        $this->set("Key", $key);
    }

    /**
     * Value: 环境变量Value值
     *
     * @return string|null
     */
    public function getValue(): string {
        return $this->get("Value");
    }

    /**
     * Value: 环境变量Value值
     *
     * @param string $value
     */
    public function setValue(string $value) {
        $this->set("Value", $value);
    }


}
