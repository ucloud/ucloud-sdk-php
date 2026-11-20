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
namespace UCloud\UDBProxy\Models;

use UCloud\Core\Response\Response;

class BaseDBData extends Response
{
    

    /**
     * ID: 数据库ID
     *
     * @return string|null
     */
    public function getID()
    {
        return $this->get("ID");
    }

    /**
     * ID: 数据库ID
     *
     * @param string $id
     */
    public function setID($id)
    {
        $this->set("ID", $id);
    }

    /**
     * Name: 数据库名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 数据库名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * ReadWeight: 权重
     *
     * @return integer|null
     */
    public function getReadWeight()
    {
        return $this->get("ReadWeight");
    }

    /**
     * ReadWeight: 权重
     *
     * @param int $readWeight
     */
    public function setReadWeight($readWeight)
    {
        $this->set("ReadWeight", $readWeight);
    }
}
