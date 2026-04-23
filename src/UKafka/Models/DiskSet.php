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
namespace UCloud\UKafka\Models;

use UCloud\Core\Response\Response;

class DiskSet extends Response
{
    

    /**
     * Type: 磁盘类型。Boot 表示系统盘，Data 表示数据盘
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 磁盘类型。Boot 表示系统盘，Data 表示数据盘
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * Size: 磁盘大小
     *
     * @return string|null
     */
    public function getSize()
    {
        return $this->get("Size");
    }

    /**
     * Size: 磁盘大小
     *
     * @param string $size
     */
    public function setSize($size)
    {
        $this->set("Size", $size);
    }
}
