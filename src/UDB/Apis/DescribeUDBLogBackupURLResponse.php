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
namespace UCloud\UDB\Apis;

use UCloud\Core\Response\Response;

class DescribeUDBLogBackupURLResponse extends Response
{
    

    /**
     * BackupPath: 备份外网URL
     *
     * @return string|null
     */
    public function getBackupPath(): string
    {
        return $this->get("BackupPath");
    }

    /**
     * BackupPath: 备份外网URL
     *
     * @param string $backupPath
     */
    public function setBackupPath(string $backupPath)
    {
        $this->set("BackupPath", $backupPath);
    }

    /**
     * UsernetPath: 备份用户网URL
     *
     * @return string|null
     */
    public function getUsernetPath(): string
    {
        return $this->get("UsernetPath");
    }

    /**
     * UsernetPath: 备份用户网URL
     *
     * @param string $usernetPath
     */
    public function setUsernetPath(string $usernetPath)
    {
        $this->set("UsernetPath", $usernetPath);
    }
}
