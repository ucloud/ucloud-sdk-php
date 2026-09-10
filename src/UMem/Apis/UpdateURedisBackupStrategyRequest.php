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
namespace UCloud\UMem\Apis;

use UCloud\Core\Request\Request;

class UpdateURedisBackupStrategyRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateURedisBackupStrategy"]);
        $this->markRequired("Region");
        $this->markRequired("GroupId");
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
     * GroupId: 组的ID
     *
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->get("GroupId");
    }

    /**
     * GroupId: 组的ID
     *
     * @param string $groupId
     */
    public function setGroupId($groupId)
    {
        $this->set("GroupId", $groupId);
    }

    /**
     * BackupTime: 备份时间，默认为0
     *
     * @return string|null
     */
    public function getBackupTime()
    {
        return $this->get("BackupTime");
    }

    /**
     * BackupTime: 备份时间，默认为0
     *
     * @param string $backupTime
     */
    public function setBackupTime($backupTime)
    {
        $this->set("BackupTime", $backupTime);
    }

    /**
     * AutoBackup: 是否打开默认备份功能。enable(打开)，disable(关闭)，默认enable
     *
     * @return string|null
     */
    public function getAutoBackup()
    {
        return $this->get("AutoBackup");
    }

    /**
     * AutoBackup: 是否打开默认备份功能。enable(打开)，disable(关闭)，默认enable
     *
     * @param string $autoBackup
     */
    public function setAutoBackup($autoBackup)
    {
        $this->set("AutoBackup", $autoBackup);
    }

    /**
     * SlaveZone: 跨机房URedis，slave所在可用区（必须和Zone在同一Region，且不可相同）
     *
     * @return string|null
     */
    public function getSlaveZone()
    {
        return $this->get("SlaveZone");
    }

    /**
     * SlaveZone: 跨机房URedis，slave所在可用区（必须和Zone在同一Region，且不可相同）
     *
     * @param string $slaveZone
     */
    public function setSlaveZone($slaveZone)
    {
        $this->set("SlaveZone", $slaveZone);
    }

    /**
     * OperationType: 操作类型，不传默认为normal(即操控自动备份打开以及时间)，modify（修改跨地域备份策略）,close(关闭跨地域备份策略)
     *
     * @return string|null
     */
    public function getOperationType()
    {
        return $this->get("OperationType");
    }

    /**
     * OperationType: 操作类型，不传默认为normal(即操控自动备份打开以及时间)，modify（修改跨地域备份策略）,close(关闭跨地域备份策略)
     *
     * @param string $operationType
     */
    public function setOperationType($operationType)
    {
        $this->set("OperationType", $operationType);
    }

    /**
     * DstRegion: 跨可用备份目标地域（当Operation为modify时必选）
     *
     * @return string|null
     */
    public function getDstRegion()
    {
        return $this->get("DstRegion");
    }

    /**
     * DstRegion: 跨可用备份目标地域（当Operation为modify时必选）
     *
     * @param string $dstRegion
     */
    public function setDstRegion($dstRegion)
    {
        $this->set("DstRegion", $dstRegion);
    }

    /**
     * SaveDays: 保存天数（当Operation为modify时必选）
     *
     * @return integer|null
     */
    public function getSaveDays()
    {
        return $this->get("SaveDays");
    }

    /**
     * SaveDays: 保存天数（当Operation为modify时必选）
     *
     * @param int $saveDays
     */
    public function setSaveDays($saveDays)
    {
        $this->set("SaveDays", $saveDays);
    }
}
