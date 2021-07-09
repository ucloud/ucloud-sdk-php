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
namespace UCloud\UMem\Models;

use UCloud\Core\Response\Response;

class UMemBackupSet extends Response {
    

    /**
     * BackupName: 备份名称
     *
     * @return string|null
     */
    public function getBackupName(): string {
        return $this->get("BackupName");
    }

    /**
     * BackupName: 备份名称
     *
     * @param string $backupName
     */
    public function setBackupName(string $backupName) {
        $this->set("BackupName", $backupName);
    }

    /**
     * CreateTime: 创建时间
     *
     * @return int|null
     */
    public function getCreateTime(): int {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime) {
        $this->set("CreateTime", $createTime);
    }

    /**
     * State: Starting:备份中 Done:完成
     *
     * @return string|null
     */
    public function getState(): string {
        return $this->get("State");
    }

    /**
     * State: Starting:备份中 Done:完成
     *
     * @param string $state
     */
    public function setState(string $state) {
        $this->set("State", $state);
    }

    /**
     * BackupId: 空间的备份ID
     *
     * @return string|null
     */
    public function getBackupId(): string {
        return $this->get("BackupId");
    }

    /**
     * BackupId: 空间的备份ID
     *
     * @param string $backupId
     */
    public function setBackupId(string $backupId) {
        $this->set("BackupId", $backupId);
    }

    /**
     * BackupType: 备份类型: auto(自动) ,manual(手动)
     *
     * @return string|null
     */
    public function getBackupType(): string {
        return $this->get("BackupType");
    }

    /**
     * BackupType: 备份类型: auto(自动) ,manual(手动)
     *
     * @param string $backupType
     */
    public function setBackupType(string $backupType) {
        $this->set("BackupType", $backupType);
    }

    /**
     * BlockCount: 本次备份，分片的数量
     *
     * @return int|null
     */
    public function getBlockCount(): int {
        return $this->get("BlockCount");
    }

    /**
     * BlockCount: 本次备份，分片的数量
     *
     * @param int $blockCount
     */
    public function setBlockCount(int $blockCount) {
        $this->set("BlockCount", $blockCount);
    }


}
