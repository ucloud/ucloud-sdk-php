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
namespace UCloud\UMongoDB\Models;

use UCloud\Core\Response\Response;

class BackupParam extends Response
{
    

    /**
     * ClusterId: 实例ID
     *
     * @return string|null
     */
    public function getClusterId()
    {
        return $this->get("ClusterId");
    }

    /**
     * ClusterId: 实例ID
     *
     * @param string $clusterId
     */
    public function setClusterId($clusterId)
    {
        $this->set("ClusterId", $clusterId);
    }

    /**
     * AutoBackupToggleWeek: 自动备份预期周几 (1-7 表示 周一到周末，多个数据用','分割，eg: 3,7)
     *
     * @return string|null
     */
    public function getAutoBackupToggleWeek()
    {
        return $this->get("AutoBackupToggleWeek");
    }

    /**
     * AutoBackupToggleWeek: 自动备份预期周几 (1-7 表示 周一到周末，多个数据用','分割，eg: 3,7)
     *
     * @param string $autoBackupToggleWeek
     */
    public function setAutoBackupToggleWeek($autoBackupToggleWeek)
    {
        $this->set("AutoBackupToggleWeek", $autoBackupToggleWeek);
    }

    /**
     * AutoBackupToggleTime: 自动备份预期时间范围 (24小时制，精确到分钟，00:00~23:59)
     *
     * @return string|null
     */
    public function getAutoBackupToggleTime()
    {
        return $this->get("AutoBackupToggleTime");
    }

    /**
     * AutoBackupToggleTime: 自动备份预期时间范围 (24小时制，精确到分钟，00:00~23:59)
     *
     * @param string $autoBackupToggleTime
     */
    public function setAutoBackupToggleTime($autoBackupToggleTime)
    {
        $this->set("AutoBackupToggleTime", $autoBackupToggleTime);
    }

    /**
     * AutoBackupCopies: 自动备份保存份数
     *
     * @return integer|null
     */
    public function getAutoBackupCopies()
    {
        return $this->get("AutoBackupCopies");
    }

    /**
     * AutoBackupCopies: 自动备份保存份数
     *
     * @param int $autoBackupCopies
     */
    public function setAutoBackupCopies($autoBackupCopies)
    {
        $this->set("AutoBackupCopies", $autoBackupCopies);
    }

    /**
     * ManualBackupCopies: 手动备份保存份数
     *
     * @return integer|null
     */
    public function getManualBackupCopies()
    {
        return $this->get("ManualBackupCopies");
    }

    /**
     * ManualBackupCopies: 手动备份保存份数
     *
     * @param int $manualBackupCopies
     */
    public function setManualBackupCopies($manualBackupCopies)
    {
        $this->set("ManualBackupCopies", $manualBackupCopies);
    }

    /**
     * Disabled: 是否禁用(false:未禁用;true:禁用)
     *
     * @return boolean|null
     */
    public function getDisabled()
    {
        return $this->get("Disabled");
    }

    /**
     * Disabled: 是否禁用(false:未禁用;true:禁用)
     *
     * @param boolean $disabled
     */
    public function setDisabled($disabled)
    {
        $this->set("Disabled", $disabled);
    }
}
