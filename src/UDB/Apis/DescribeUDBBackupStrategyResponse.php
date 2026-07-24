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

use UCloud\Core\Response\Response;
use UCloud\UDB\Models\UFileDataSet;

class DescribeUDBBackupStrategyResponse extends Response
{
    

    /**
     * BackupBeginTime: 备份策略，不可修改，开始时间，单位小时计，默认3点
     *
     * @return integer|null
     */
    public function getBackupBeginTime()
    {
        return $this->get("BackupBeginTime");
    }

    /**
     * BackupBeginTime: 备份策略，不可修改，开始时间，单位小时计，默认3点
     *
     * @param int $backupBeginTime
     */
    public function setBackupBeginTime($backupBeginTime)
    {
        $this->set("BackupBeginTime", $backupBeginTime);
    }

    /**
     * BackupDate: 备份日期标记位。共7位,每一位为一周中一天的备份情况 0表示关闭当天备份,1表示打开当天备份。最右边的一位 为星期天的备份开关，其余从右到左依次为星期一到星期 六的备份配置开关，每周必须至少设置两天备份。 例如：1100000 表示打开星期六和星期五的自动备份功能
     *
     * @return string|null
     */
    public function getBackupDate()
    {
        return $this->get("BackupDate");
    }

    /**
     * BackupDate: 备份日期标记位。共7位,每一位为一周中一天的备份情况 0表示关闭当天备份,1表示打开当天备份。最右边的一位 为星期天的备份开关，其余从右到左依次为星期一到星期 六的备份配置开关，每周必须至少设置两天备份。 例如：1100000 表示打开星期六和星期五的自动备份功能
     *
     * @param string $backupDate
     */
    public function setBackupDate($backupDate)
    {
        $this->set("BackupDate", $backupDate);
    }

    /**
     * BackupMethod: 默认的备份方式，nobackup表示不备份， snapshot 表示使用快照备份，logic 表示使用逻辑备份，xtrabackup表示使用物理备份。ark_snapshot 方舟快照备份
     *
     * @return string|null
     */
    public function getBackupMethod()
    {
        return $this->get("BackupMethod");
    }

    /**
     * BackupMethod: 默认的备份方式，nobackup表示不备份， snapshot 表示使用快照备份，logic 表示使用逻辑备份，xtrabackup表示使用物理备份。ark_snapshot 方舟快照备份
     *
     * @param string $backupMethod
     */
    public function setBackupMethod($backupMethod)
    {
        $this->set("BackupMethod", $backupMethod);
    }

    /**
     * UserUFileData: 用户转存备份到自己的UFILE配置, 结构参考UFileDataSet
     *
     * @return UFileDataSet|null
     */
    public function getUserUFileData()
    {
        return new UFileDataSet($this->get("UserUFileData"));
    }

    /**
     * UserUFileData: 用户转存备份到自己的UFILE配置, 结构参考UFileDataSet
     *
     * @param UFileDataSet $userUFileData
     */
    public function setUserUFileData(array $userUFileData)
    {
        $this->set("UserUFileData", $userUFileData->getAll());
    }

    /**
     * SaveDays: 保留多少天
     *
     * @return integer|null
     */
    public function getSaveDays()
    {
        return $this->get("SaveDays");
    }

    /**
     * SaveDays: 保留多少天
     *
     * @param int $saveDays
     */
    public function setSaveDays($saveDays)
    {
        $this->set("SaveDays", $saveDays);
    }
}
