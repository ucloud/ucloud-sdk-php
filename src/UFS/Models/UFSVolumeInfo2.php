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
namespace UCloud\UFS\Models;

use UCloud\Core\Response\Response;

class UFSVolumeInfo2 extends Response
{
    

    /**
     * VolumeName: 文件系统名称
     *
     * @return string|null
     */
    public function getVolumeName(): string
    {
        return $this->get("VolumeName");
    }

    /**
     * VolumeName: 文件系统名称
     *
     * @param string $volumeName
     */
    public function setVolumeName(string $volumeName)
    {
        $this->set("VolumeName", $volumeName);
    }

    /**
     * VolumeId: 文件系统ID
     *
     * @return string|null
     */
    public function getVolumeId(): string
    {
        return $this->get("VolumeId");
    }

    /**
     * VolumeId: 文件系统ID
     *
     * @param string $volumeId
     */
    public function setVolumeId(string $volumeId)
    {
        $this->set("VolumeId", $volumeId);
    }

    /**
     * TotalMountPointNum: 当前文件系统已创建的挂载点数目
     *
     * @return integer|null
     */
    public function getTotalMountPointNum(): int
    {
        return $this->get("TotalMountPointNum");
    }

    /**
     * TotalMountPointNum: 当前文件系统已创建的挂载点数目
     *
     * @param int $totalMountPointNum
     */
    public function setTotalMountPointNum(int $totalMountPointNum)
    {
        $this->set("TotalMountPointNum", $totalMountPointNum);
    }

    /**
     * MaxMountPointNum: 文件系统允许创建的最大挂载点数目
     *
     * @return integer|null
     */
    public function getMaxMountPointNum(): int
    {
        return $this->get("MaxMountPointNum");
    }

    /**
     * MaxMountPointNum: 文件系统允许创建的最大挂载点数目
     *
     * @param int $maxMountPointNum
     */
    public function setMaxMountPointNum(int $maxMountPointNum)
    {
        $this->set("MaxMountPointNum", $maxMountPointNum);
    }

    /**
     * StorageType: 文件系统存储类型，枚举值，Basic表示容量型，Advanced表示性能型
     *
     * @return string|null
     */
    public function getStorageType(): string
    {
        return $this->get("StorageType");
    }

    /**
     * StorageType: 文件系统存储类型，枚举值，Basic表示容量型，Advanced表示性能型
     *
     * @param string $storageType
     */
    public function setStorageType(string $storageType)
    {
        $this->set("StorageType", $storageType);
    }

    /**
     * ProtocolType: 文件系统协议，枚举值，NFSv3表示NFS V3协议，NFSv4表示NFS V4协议
     *
     * @return string|null
     */
    public function getProtocolType(): string
    {
        return $this->get("ProtocolType");
    }

    /**
     * ProtocolType: 文件系统协议，枚举值，NFSv3表示NFS V3协议，NFSv4表示NFS V4协议
     *
     * @param string $protocolType
     */
    public function setProtocolType(string $protocolType)
    {
        $this->set("ProtocolType", $protocolType);
    }

    /**
     * Remark: 文件系统备注信息
     *
     * @return string|null
     */
    public function getRemark(): string
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 文件系统备注信息
     *
     * @param string $remark
     */
    public function setRemark(string $remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * Tag: 文件系统所属业务组
     *
     * @return string|null
     */
    public function getTag(): string
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 文件系统所属业务组
     *
     * @param string $tag
     */
    public function setTag(string $tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * CreateTime: 文件系统创建时间（unix时间戳）
     *
     * @return integer|null
     */
    public function getCreateTime(): int
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 文件系统创建时间（unix时间戳）
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * ExpiredTime: 文件系统过期时间（unix时间戳）
     *
     * @return integer|null
     */
    public function getExpiredTime(): int
    {
        return $this->get("ExpiredTime");
    }

    /**
     * ExpiredTime: 文件系统过期时间（unix时间戳）
     *
     * @param int $expiredTime
     */
    public function setExpiredTime(int $expiredTime)
    {
        $this->set("ExpiredTime", $expiredTime);
    }

    /**
     * Size: 文件系统大小，单位GB
     *
     * @return integer|null
     */
    public function getSize(): int
    {
        return $this->get("Size");
    }

    /**
     * Size: 文件系统大小，单位GB
     *
     * @param int $size
     */
    public function setSize(int $size)
    {
        $this->set("Size", $size);
    }

    /**
     * UsedSize: 文件系统当前使用容量，单位GB
     *
     * @return integer|null
     */
    public function getUsedSize(): int
    {
        return $this->get("UsedSize");
    }

    /**
     * UsedSize: 文件系统当前使用容量，单位GB
     *
     * @param int $usedSize
     */
    public function setUsedSize(int $usedSize)
    {
        $this->set("UsedSize", $usedSize);
    }

    /**
     * IsExpired: 是否过期
     *
     * @return string|null
     */
    public function getIsExpired(): string
    {
        return $this->get("IsExpired");
    }

    /**
     * IsExpired: 是否过期
     *
     * @param string $isExpired
     */
    public function setIsExpired(string $isExpired)
    {
        $this->set("IsExpired", $isExpired);
    }
}
