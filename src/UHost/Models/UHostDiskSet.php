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
namespace UCloud\UHost\Models;

use UCloud\Core\Response\Response;

class UHostDiskSet extends Response
{
    

    /**
     * DiskType: 磁盘类型。请参考[[api:uhost-api:disk_type|磁盘类型]]。
     *
     * @return string|null
     */
    public function getDiskType()
    {
        return $this->get("DiskType");
    }

    /**
     * DiskType: 磁盘类型。请参考[[api:uhost-api:disk_type|磁盘类型]]。
     *
     * @param string $diskType
     */
    public function setDiskType($diskType)
    {
        $this->set("DiskType", $diskType);
    }

    /**
     * IsBoot: 是否是系统盘。枚举值：\\ > True，是系统盘 \\ > False，是数据盘（默认）。Disks数组中有且只能有一块盘是系统盘。
     *
     * @return string|null
     */
    public function getIsBoot()
    {
        return $this->get("IsBoot");
    }

    /**
     * IsBoot: 是否是系统盘。枚举值：\\ > True，是系统盘 \\ > False，是数据盘（默认）。Disks数组中有且只能有一块盘是系统盘。
     *
     * @param string $isBoot
     */
    public function setIsBoot($isBoot)
    {
        $this->set("IsBoot", $isBoot);
    }

    /**
     * Encrypted: "true": 加密盘 "false"：非加密盘
     *
     * @return string|null
     */
    public function getEncrypted()
    {
        return $this->get("Encrypted");
    }

    /**
     * Encrypted: "true": 加密盘 "false"：非加密盘
     *
     * @param string $encrypted
     */
    public function setEncrypted($encrypted)
    {
        $this->set("Encrypted", $encrypted);
    }

    /**
     * Type: 【建议不再使用】磁盘类型。系统盘: Boot，数据盘: Data,网络盘：Udisk
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 【建议不再使用】磁盘类型。系统盘: Boot，数据盘: Data,网络盘：Udisk
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * DiskId: 磁盘ID
     *
     * @return string|null
     */
    public function getDiskId()
    {
        return $this->get("DiskId");
    }

    /**
     * DiskId: 磁盘ID
     *
     * @param string $diskId
     */
    public function setDiskId($diskId)
    {
        $this->set("DiskId", $diskId);
    }

    /**
     * Name: UDisk名字（仅当磁盘是UDisk时返回）
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: UDisk名字（仅当磁盘是UDisk时返回）
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Drive: 磁盘盘符
     *
     * @return string|null
     */
    public function getDrive()
    {
        return $this->get("Drive");
    }

    /**
     * Drive: 磁盘盘符
     *
     * @param string $drive
     */
    public function setDrive($drive)
    {
        $this->set("Drive", $drive);
    }

    /**
     * Size: 磁盘大小，单位: GB
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->get("Size");
    }

    /**
     * Size: 磁盘大小，单位: GB
     *
     * @param int $size
     */
    public function setSize($size)
    {
        $this->set("Size", $size);
    }

    /**
     * BackupType: 备份方案。若开通了数据方舟，则为DATAARK
     *
     * @return string|null
     */
    public function getBackupType()
    {
        return $this->get("BackupType");
    }

    /**
     * BackupType: 备份方案。若开通了数据方舟，则为DATAARK
     *
     * @param string $backupType
     */
    public function setBackupType($backupType)
    {
        $this->set("BackupType", $backupType);
    }


}
