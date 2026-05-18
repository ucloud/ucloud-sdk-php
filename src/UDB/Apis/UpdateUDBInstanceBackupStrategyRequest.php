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

class UpdateUDBInstanceBackupStrategyRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateUDBInstanceBackupStrategy"]);
        $this->markRequired("Region");
        $this->markRequired("DBId");
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
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * DBId: 主节点的Id
     *
     * @return string|null
     */
    public function getDBId()
    {
        return $this->get("DBId");
    }

    /**
     * DBId: 主节点的Id
     *
     * @param string $dbId
     */
    public function setDBId($dbId)
    {
        $this->set("DBId", $dbId);
    }

    /**
     * BackupTime: 备份的整点时间，范围[0,23]
     *
     * @return integer|null
     */
    public function getBackupTime()
    {
        return $this->get("BackupTime");
    }

    /**
     * BackupTime: 备份的整点时间，范围[0,23]
     *
     * @param int $backupTime
     */
    public function setBackupTime($backupTime)
    {
        $this->set("BackupTime", $backupTime);
    }

    /**
     * BackupDate: 备份时期标记位。共7位，每一位为一周中一天的备份情况，0表示关闭当天备份，1表示打开当天备份。最右边的一位为星期天的备份开关，其余从右到左依次为星期一到星期六的备份配置开关，每周必须至少设置两天备份。例如：1100000表示打开星期六和星期五的备份功能
     *
     * @return string|null
     */
    public function getBackupDate()
    {
        return $this->get("BackupDate");
    }

    /**
     * BackupDate: 备份时期标记位。共7位，每一位为一周中一天的备份情况，0表示关闭当天备份，1表示打开当天备份。最右边的一位为星期天的备份开关，其余从右到左依次为星期一到星期六的备份配置开关，每周必须至少设置两天备份。例如：1100000表示打开星期六和星期五的备份功能
     *
     * @param string $backupDate
     */
    public function setBackupDate($backupDate)
    {
        $this->set("BackupDate", $backupDate);
    }

    /**
     * ForceDump: 当导出某些数据遇到问题后，是否强制导出其他剩余数据默认是false需要同时设置BackupDate字段
     *
     * @return boolean|null
     */
    public function getForceDump()
    {
        return $this->get("ForceDump");
    }

    /**
     * ForceDump: 当导出某些数据遇到问题后，是否强制导出其他剩余数据默认是false需要同时设置BackupDate字段
     *
     * @param boolean $forceDump
     */
    public function setForceDump($forceDump)
    {
        $this->set("ForceDump", $forceDump);
    }

    /**
     * BackupMethod: 选择默认的备份方式，可选nobackup表示不备份， snapshot 表示使用快照备份，logic 表示使用逻辑备份。需要同时设置BackupDate字段。（快照备份即物理备份。SSD版本的mysql实例支持设置为snapshot，NVMe版本的mysql实例支持设置为xtrabackup）
     *
     * @return string|null
     */
    public function getBackupMethod()
    {
        return $this->get("BackupMethod");
    }

    /**
     * BackupMethod: 选择默认的备份方式，可选nobackup表示不备份， snapshot 表示使用快照备份，logic 表示使用逻辑备份。需要同时设置BackupDate字段。（快照备份即物理备份。SSD版本的mysql实例支持设置为snapshot，NVMe版本的mysql实例支持设置为xtrabackup）
     *
     * @param string $backupMethod
     */
    public function setBackupMethod($backupMethod)
    {
        $this->set("BackupMethod", $backupMethod);
    }

    /**
     * UserTokenID: 自动备份转存到用户自己的bucket 的tokenid， 需要用户自己自己设置权限
     *
     * @return string|null
     */
    public function getUserTokenID()
    {
        return $this->get("UserTokenID");
    }

    /**
     * UserTokenID: 自动备份转存到用户自己的bucket 的tokenid， 需要用户自己自己设置权限
     *
     * @param string $userTokenID
     */
    public function setUserTokenID($userTokenID)
    {
        $this->set("UserTokenID", $userTokenID);
    }

    /**
     * UserBucket: 自动备份转存到用户自己的bucket名称，要包含到对应的token id里
     *
     * @return string|null
     */
    public function getUserBucket()
    {
        return $this->get("UserBucket");
    }

    /**
     * UserBucket: 自动备份转存到用户自己的bucket名称，要包含到对应的token id里
     *
     * @param string $userBucket
     */
    public function setUserBucket($userBucket)
    {
        $this->set("UserBucket", $userBucket);
    }

    /**
     * EnableBinlogBackup: 是否开启binlog备份, 默认为未开启
     *
     * @return boolean|null
     */
    public function getEnableBinlogBackup()
    {
        return $this->get("EnableBinlogBackup");
    }

    /**
     * EnableBinlogBackup: 是否开启binlog备份, 默认为未开启
     *
     * @param boolean $enableBinlogBackup
     */
    public function setEnableBinlogBackup($enableBinlogBackup)
    {
        $this->set("EnableBinlogBackup", $enableBinlogBackup);
    }

    /**
     * BinlogRemoteSaveDays: 远端binlog保存时长(天)
     *
     * @return integer|null
     */
    public function getBinlogRemoteSaveDays()
    {
        return $this->get("BinlogRemoteSaveDays");
    }

    /**
     * BinlogRemoteSaveDays: 远端binlog保存时长(天)
     *
     * @param int $binlogRemoteSaveDays
     */
    public function setBinlogRemoteSaveDays($binlogRemoteSaveDays)
    {
        $this->set("BinlogRemoteSaveDays", $binlogRemoteSaveDays);
    }
}
