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
namespace UCloud\UDBPostgreSQL\Apis;

use UCloud\Core\Response\Response;

class GetUPgSQLBackupStrategyResponse extends Response
{
    

    /**
     * BackupTimeRange: 自动备份预计开始时间范围
     *
     * @return string|null
     */
    public function getBackupTimeRange()
    {
        return $this->get("BackupTimeRange");
    }

    /**
     * BackupTimeRange: 自动备份预计开始时间范围
     *
     * @param string $backupTimeRange
     */
    public function setBackupTimeRange($backupTimeRange)
    {
        $this->set("BackupTimeRange", $backupTimeRange);
    }

    /**
     * BackupWeek: 自动备份预期星期几(1~7)开始
     *
     * @return string|null
     */
    public function getBackupWeek()
    {
        return $this->get("BackupWeek");
    }

    /**
     * BackupWeek: 自动备份预期星期几(1~7)开始
     *
     * @param string $backupWeek
     */
    public function setBackupWeek($backupWeek)
    {
        $this->set("BackupWeek", $backupWeek);
    }

    /**
     * BackupMethod: 默认的备份方式
     *
     * @return string|null
     */
    public function getBackupMethod()
    {
        return $this->get("BackupMethod");
    }

    /**
     * BackupMethod: 默认的备份方式
     *
     * @param string $backupMethod
     */
    public function setBackupMethod($backupMethod)
    {
        $this->set("BackupMethod", $backupMethod);
    }
}
