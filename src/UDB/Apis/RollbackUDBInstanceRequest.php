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
namespace UCloud\UDB\Apis;

use UCloud\Core\Request\Request;

class RollbackUDBInstanceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "RollbackUDBInstance"]);
        $this->markRequired("Region");
        $this->markRequired("SrcDBId");
        $this->markRequired("RecoveryTime");
        $this->markRequired("Tables");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * SrcDBId: 源实例的Id
     *
     * @return string|null
     */
    public function getSrcDBId()
    {
        return $this->get("SrcDBId");
    }

    /**
     * SrcDBId: 源实例的Id
     *
     * @param string $srcDBId
     */
    public function setSrcDBId($srcDBId)
    {
        $this->set("SrcDBId", $srcDBId);
    }

    /**
     * RecoveryTime: 恢复到某个时间点的时间戳(UTC时间格式，默认单位秒)
     *
     * @return string|null
     */
    public function getRecoveryTime()
    {
        return $this->get("RecoveryTime");
    }

    /**
     * RecoveryTime: 恢复到某个时间点的时间戳(UTC时间格式，默认单位秒)
     *
     * @param string $recoveryTime
     */
    public function setRecoveryTime($recoveryTime)
    {
        $this->set("RecoveryTime", $recoveryTime);
    }

    /**
     * Tables: 指定需要恢复的表，格式为(库名.表名)， 指定多个用逗号隔开，eg: [ udb.test, mysql_school.my_student]
     *
     * @return string|null
     */
    public function getTables()
    {
        return $this->get("Tables");
    }

    /**
     * Tables: 指定需要恢复的表，格式为(库名.表名)， 指定多个用逗号隔开，eg: [ udb.test, mysql_school.my_student]
     *
     * @param string $tables
     */
    public function setTables($tables)
    {
        $this->set("Tables", $tables);
    }
}
