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

class TokenUsageTimestamp extends Response
{
    

    /**
     * Type: 类型，in输入 out输出 total总  request_count 请求次数 image_generation 生图张数
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 类型，in输入 out输出 total总  request_count 请求次数 image_generation 生图张数
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * Count: 数量
     *
     * @return integer|null
     */
    public function getCount()
    {
        return $this->get("Count");
    }

    /**
     * Count: 数量
     *
     * @param int $count
     */
    public function setCount($count)
    {
        $this->set("Count", $count);
    }

    /**
     * Timestamp: unix时间戳
     *
     * @return integer|null
     */
    public function getTimestamp()
    {
        return $this->get("Timestamp");
    }

    /**
     * Timestamp: unix时间戳
     *
     * @param int $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->set("Timestamp", $timestamp);
    }

    /**
     * Model: 模型名称
     *
     * @return string|null
     */
    public function getModel()
    {
        return $this->get("Model");
    }

    /**
     * Model: 模型名称
     *
     * @param string $model
     */
    public function setModel($model)
    {
        $this->set("Model", $model);
    }
}
