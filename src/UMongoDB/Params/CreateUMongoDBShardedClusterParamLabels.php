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
namespace UCloud\UMongoDB\Params;

use UCloud\Core\Request\Request;

class CreateUMongoDBShardedClusterParamLabels extends Request
{
    

    /**
     * Key: 用户资源标签的键值
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->get("Key");
    }

    /**
     * Key: 用户资源标签的键值
     *
     * @param string $key
     */
    public function setKey($key)
    {
        $this->set("Key", $key);
    }

    /**
     * Value: 用户资源标签值
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->get("Value");
    }

    /**
     * Value: 用户资源标签值
     *
     * @param string $value
     */
    public function setValue($value)
    {
        $this->set("Value", $value);
    }
}
