<?php
/**
 * Copyright 2022 UCloud Technology Co., Ltd.
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
namespace UCloud\UK8S\Models;

use UCloud\Core\Response\Response;

class DiskSet extends Response
{
    

    /**
     * Type: 磁盘类型。系统盘: Boot，数据盘: Data,网络盘：Udisk
     *
     * @return string|null
     */
    public function getType(): string
    {
        return $this->get("Type");
    }

    /**
     * Type: 磁盘类型。系统盘: Boot，数据盘: Data,网络盘：Udisk
     *
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->set("Type", $type);
    }

    /**
     * DiskId: 磁盘长ID
     *
     * @return string|null
     */
    public function getDiskId(): string
    {
        return $this->get("DiskId");
    }

    /**
     * DiskId: 磁盘长ID
     *
     * @param string $diskId
     */
    public function setDiskId(string $diskId)
    {
        $this->set("DiskId", $diskId);
    }

    /**
     * Name: UDisk名字（仅当磁盘是UDisk时返回）
     *
     * @return string|null
     */
    public function getName(): string
    {
        return $this->get("Name");
    }

    /**
     * Name: UDisk名字（仅当磁盘是UDisk时返回）
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->set("Name", $name);
    }

    /**
     * Drive: 磁盘盘符
     *
     * @return string|null
     */
    public function getDrive(): string
    {
        return $this->get("Drive");
    }

    /**
     * Drive: 磁盘盘符
     *
     * @param string $drive
     */
    public function setDrive(string $drive)
    {
        $this->set("Drive", $drive);
    }

    /**
     * Size: 磁盘大小，单位: GB
     *
     * @return integer|null
     */
    public function getSize(): int
    {
        return $this->get("Size");
    }

    /**
     * Size: 磁盘大小，单位: GB
     *
     * @param int $size
     */
    public function setSize(int $size)
    {
        $this->set("Size", $size);
    }

    /**
     * BackupType: 备份方案，枚举类型：BASIC_SNAPSHOT,普通快照；DATAARK,方舟。无快照则不返回该字段。
     *
     * @return string|null
     */
    public function getBackupType(): string
    {
        return $this->get("BackupType");
    }

    /**
     * BackupType: 备份方案，枚举类型：BASIC_SNAPSHOT,普通快照；DATAARK,方舟。无快照则不返回该字段。
     *
     * @param string $backupType
     */
    public function setBackupType(string $backupType)
    {
        $this->set("BackupType", $backupType);
    }

    /**
     * IOPS: 当前主机的IOPS值
     *
     * @return integer|null
     */
    public function getIOPS(): int
    {
        return $this->get("IOPS");
    }

    /**
     * IOPS: 当前主机的IOPS值
     *
     * @param int $iops
     */
    public function setIOPS(int $iops)
    {
        $this->set("IOPS", $iops);
    }

    /**
     * Encrypted: Yes: 加密 No: 非加密
     *
     * @return string|null
     */
    public function getEncrypted(): string
    {
        return $this->get("Encrypted");
    }

    /**
     * Encrypted: Yes: 加密 No: 非加密
     *
     * @param string $encrypted
     */
    public function setEncrypted(string $encrypted)
    {
        $this->set("Encrypted", $encrypted);
    }

    /**
     * DiskType: LOCAL_NOMAL| CLOUD_NORMAL| LOCAL_SSD| CLOUD_SSD|EXCLUSIVE_LOCAL_DISK
     *
     * @return string|null
     */
    public function getDiskType(): string
    {
        return $this->get("DiskType");
    }

    /**
     * DiskType: LOCAL_NOMAL| CLOUD_NORMAL| LOCAL_SSD| CLOUD_SSD|EXCLUSIVE_LOCAL_DISK
     *
     * @param string $diskType
     */
    public function setDiskType(string $diskType)
    {
        $this->set("DiskType", $diskType);
    }

    /**
     * IsBoot: True| False
     *
     * @return string|null
     */
    public function getIsBoot(): string
    {
        return $this->get("IsBoot");
    }

    /**
     * IsBoot: True| False
     *
     * @param string $isBoot
     */
    public function setIsBoot(string $isBoot)
    {
        $this->set("IsBoot", $isBoot);
    }
}
