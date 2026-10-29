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
namespace UCloud\UDBPostgreSQL\Models;

use UCloud\Core\Response\Response;

class PgSQLVersion extends Response
{
    

    /**
     * DBVersion: PgSQL版本
     *
     * @return string|null
     */
    public function getDBVersion()
    {
        return $this->get("DBVersion");
    }

    /**
     * DBVersion: PgSQL版本
     *
     * @param string $dbVersion
     */
    public function setDBVersion($dbVersion)
    {
        $this->set("DBVersion", $dbVersion);
    }

    /**
     * Available: 2位二进制控制是否开放单点和高可用，前一位控制单点是否开放，后一位控制高可用，例如"01"代表只开放高可用，"10"代表只开放单点，"11"代表全开放
     *
     * @return string|null
     */
    public function getAvailable()
    {
        return $this->get("Available");
    }

    /**
     * Available: 2位二进制控制是否开放单点和高可用，前一位控制单点是否开放，后一位控制高可用，例如"01"代表只开放高可用，"10"代表只开放单点，"11"代表全开放
     *
     * @param string $available
     */
    public function setAvailable($available)
    {
        $this->set("Available", $available);
    }
}
