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

class DescribeUDBBinlogBackupURLResponse extends Response {
    

    /**
     * BackupPath: DB实例备份文件的公网地址
     *
     * @return string|null
     */
    public function getBackupPath(): string {
        return $this->get("BackupPath");
    }

    /**
     * BackupPath: DB实例备份文件的公网地址
     *
     * @param string $backupPath
     */
    public function setBackupPath(string $backupPath) {
        $this->set("BackupPath", $backupPath);
    }

    /**
     * InnerBackupPath: DB实例备份文件的内网地址
     *
     * @return string|null
     */
    public function getInnerBackupPath(): string {
        return $this->get("InnerBackupPath");
    }

    /**
     * InnerBackupPath: DB实例备份文件的内网地址
     *
     * @param string $innerBackupPath
     */
    public function setInnerBackupPath(string $innerBackupPath) {
        $this->set("InnerBackupPath", $innerBackupPath);
    }


}
