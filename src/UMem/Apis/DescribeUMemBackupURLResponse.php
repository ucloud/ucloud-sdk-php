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
namespace UCloud\UMem\Apis;

use UCloud\Core\Response\Response;

class DescribeUMemBackupURLResponse extends Response {
    

    /**
     * BackupURL: 备份url，每个分片一个下载URL
     *
     * @return string[]|null
     */
    public function getBackupURL(): array {
        return $this->get("BackupURL");
    }

    /**
     * BackupURL: 备份url，每个分片一个下载URL
     *
     * @param string[] $backupURL
     */
    public function setBackupURL(array $backupURL) {
        $this->set("BackupURL", $backupURL);
    }


}
