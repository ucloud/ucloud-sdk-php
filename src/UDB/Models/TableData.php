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
namespace UCloud\UDB\Models;

use UCloud\Core\Response\Response;

class TableData extends Response
{
    

    /**
     * TableName: 表名称
     *
     * @return string|null
     */
    public function getTableName()
    {
        return $this->get("TableName");
    }

    /**
     * TableName: 表名称
     *
     * @param string $tableName
     */
    public function setTableName($tableName)
    {
        $this->set("TableName", $tableName);
    }

    /**
     * DBName: 表所属的库名称
     *
     * @return string|null
     */
    public function getDBName()
    {
        return $this->get("DBName");
    }

    /**
     * DBName: 表所属的库名称
     *
     * @param string $dbName
     */
    public function setDBName($dbName)
    {
        $this->set("DBName", $dbName);
    }

    /**
     * Engine: 表的引擎（innodb, myisam）
     *
     * @return string|null
     */
    public function getEngine()
    {
        return $this->get("Engine");
    }

    /**
     * Engine: 表的引擎（innodb, myisam）
     *
     * @param string $engine
     */
    public function setEngine($engine)
    {
        $this->set("Engine", $engine);
    }
}
