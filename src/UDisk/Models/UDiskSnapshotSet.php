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
namespace UCloud\UDisk\Models;

use UCloud\Core\Response\Response;

class UDiskSnapshotSet extends Response {
    

    /**
     * Zone: 可用区
     *
     * @return string|null
     */
    public function getZone(): string {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区
     *
     * @param string $zone
     */
    public function setZone(string $zone) {
        $this->set("Zone", $zone);
    }

    /**
     * SnapshotId: 快照Id
     *
     * @return string|null
     */
    public function getSnapshotId(): string {
        return $this->get("SnapshotId");
    }

    /**
     * SnapshotId: 快照Id
     *
     * @param string $snapshotId
     */
    public function setSnapshotId(string $snapshotId) {
        $this->set("SnapshotId", $snapshotId);
    }

    /**
     * Name: 快照名称
     *
     * @return string|null
     */
    public function getName(): string {
        return $this->get("Name");
    }

    /**
     * Name: 快照名称
     *
     * @param string $name
     */
    public function setName(string $name) {
        $this->set("Name", $name);
    }

    /**
     * UDiskId: 快照的源UDisk的Id
     *
     * @return string|null
     */
    public function getUDiskId(): string {
        return $this->get("UDiskId");
    }

    /**
     * UDiskId: 快照的源UDisk的Id
     *
     * @param string $uDiskId
     */
    public function setUDiskId(string $uDiskId) {
        $this->set("UDiskId", $uDiskId);
    }

    /**
     * UDiskName: 快照的源UDisk的Name
     *
     * @return string|null
     */
    public function getUDiskName(): string {
        return $this->get("UDiskName");
    }

    /**
     * UDiskName: 快照的源UDisk的Name
     *
     * @param string $uDiskName
     */
    public function setUDiskName(string $uDiskName) {
        $this->set("UDiskName", $uDiskName);
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
     * Size: 容量单位GB
     *
     * @return int|null
     */
    public function getSize(): int {
        return $this->get("Size");
    }

    /**
     * Size: 容量单位GB
     *
     * @param int $size
     */
    public function setSize(int $size) {
        $this->set("Size", $size);
    }

    /**
     * Status: 快照状态，Normal:正常,Failed:失败,Creating:制作中
     *
     * @return string|null
     */
    public function getStatus(): string {
        return $this->get("Status");
    }

    /**
     * Status: 快照状态，Normal:正常,Failed:失败,Creating:制作中
     *
     * @param string $status
     */
    public function setStatus(string $status) {
        $this->set("Status", $status);
    }

    /**
     * DiskType: 磁盘类型，0:数据盘，1:系统盘
     *
     * @return int|null
     */
    public function getDiskType(): int {
        return $this->get("DiskType");
    }

    /**
     * DiskType: 磁盘类型，0:数据盘，1:系统盘
     *
     * @param int $diskType
     */
    public function setDiskType(int $diskType) {
        $this->set("DiskType", $diskType);
    }

    /**
     * ExpiredTime: 过期时间
     *
     * @return int|null
     */
    public function getExpiredTime(): int {
        return $this->get("ExpiredTime");
    }

    /**
     * ExpiredTime: 过期时间
     *
     * @param int $expiredTime
     */
    public function setExpiredTime(int $expiredTime) {
        $this->set("ExpiredTime", $expiredTime);
    }

    /**
     * Comment: 快照描述
     *
     * @return string|null
     */
    public function getComment(): string {
        return $this->get("Comment");
    }

    /**
     * Comment: 快照描述
     *
     * @param string $comment
     */
    public function setComment(string $comment) {
        $this->set("Comment", $comment);
    }

    /**
     * IsUDiskAvailable: 对应磁盘是否处于可用状态
     *
     * @return boolean|null
     */
    public function getIsUDiskAvailable(): bool {
        return $this->get("IsUDiskAvailable");
    }

    /**
     * IsUDiskAvailable: 对应磁盘是否处于可用状态
     *
     * @param boolean $isUDiskAvailable
     */
    public function setIsUDiskAvailable(bool $isUDiskAvailable) {
        $this->set("IsUDiskAvailable", $isUDiskAvailable);
    }

    /**
     * Version: 快照版本
     *
     * @return string|null
     */
    public function getVersion(): string {
        return $this->get("Version");
    }

    /**
     * Version: 快照版本
     *
     * @param string $version
     */
    public function setVersion(string $version) {
        $this->set("Version", $version);
    }

    /**
     * UHostId: 对应磁盘制作快照时所挂载的主机
     *
     * @return string|null
     */
    public function getUHostId(): string {
        return $this->get("UHostId");
    }

    /**
     * UHostId: 对应磁盘制作快照时所挂载的主机
     *
     * @param string $uHostId
     */
    public function setUHostId(string $uHostId) {
        $this->set("UHostId", $uHostId);
    }

    /**
     * UKmsMode: 是否是加密盘快照，是:"Yes", 否:"No"
     *
     * @return string|null
     */
    public function getUKmsMode(): string {
        return $this->get("UKmsMode");
    }

    /**
     * UKmsMode: 是否是加密盘快照，是:"Yes", 否:"No"
     *
     * @param string $uKmsMode
     */
    public function setUKmsMode(string $uKmsMode) {
        $this->set("UKmsMode", $uKmsMode);
    }

    /**
     * CmkId: 该快照的cmk id
     *
     * @return string|null
     */
    public function getCmkId(): string {
        return $this->get("CmkId");
    }

    /**
     * CmkId: 该快照的cmk id
     *
     * @param string $cmkId
     */
    public function setCmkId(string $cmkId) {
        $this->set("CmkId", $cmkId);
    }

    /**
     * DataKey: 该快照的密文密钥
     *
     * @return string|null
     */
    public function getDataKey(): string {
        return $this->get("DataKey");
    }

    /**
     * DataKey: 该快照的密文密钥
     *
     * @param string $dataKey
     */
    public function setDataKey(string $dataKey) {
        $this->set("DataKey", $dataKey);
    }

    /**
     * CmkIdStatus: 该快照cmk的状态, Enabled(正常)，Disabled(失效)，Deleted(删除)，NoCmkId(非加密盘)
     *
     * @return string|null
     */
    public function getCmkIdStatus(): string {
        return $this->get("CmkIdStatus");
    }

    /**
     * CmkIdStatus: 该快照cmk的状态, Enabled(正常)，Disabled(失效)，Deleted(删除)，NoCmkId(非加密盘)
     *
     * @param string $cmkIdStatus
     */
    public function setCmkIdStatus(string $cmkIdStatus) {
        $this->set("CmkIdStatus", $cmkIdStatus);
    }

    /**
     * CmkIdAlias: cmk id 别名
     *
     * @return string|null
     */
    public function getCmkIdAlias(): string {
        return $this->get("CmkIdAlias");
    }

    /**
     * CmkIdAlias: cmk id 别名
     *
     * @param string $cmkIdAlias
     */
    public function setCmkIdAlias(string $cmkIdAlias) {
        $this->set("CmkIdAlias", $cmkIdAlias);
    }


}
