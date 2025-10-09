<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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
namespace UCloud\UPFS\Models;

use UCloud\Core\Response\Response;

class UPFSVolumeInfo extends Response
{
    

    /**
     * Zone: 可用区名字
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区名字
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * VolumeName: 文件系统名称
     *
     * @return string|null
     */
    public function getVolumeName()
    {
        return $this->get("VolumeName");
    }

    /**
     * VolumeName: 文件系统名称
     *
     * @param string $volumeName
     */
    public function setVolumeName($volumeName)
    {
        $this->set("VolumeName", $volumeName);
    }

    /**
     * VolumeId: 文件系统ID
     *
     * @return string|null
     */
    public function getVolumeId()
    {
        return $this->get("VolumeId");
    }

    /**
     * VolumeId: 文件系统ID
     *
     * @param string $volumeId
     */
    public function setVolumeId($volumeId)
    {
        $this->set("VolumeId", $volumeId);
    }

    /**
     * ProtocolType: 文件系统协议类型
     *
     * @return string|null
     */
    public function getProtocolType()
    {
        return $this->get("ProtocolType");
    }

    /**
     * ProtocolType: 文件系统协议类型
     *
     * @param string $protocolType
     */
    public function setProtocolType($protocolType)
    {
        $this->set("ProtocolType", $protocolType);
    }

    /**
     * Remark: 文件系统备注信息
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 文件系统备注信息
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * Tag: 文件系统所属业务组
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 文件系统所属业务组
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * CreateTime: 文件系统创建时间（unix时间戳）
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 文件系统创建时间（unix时间戳）
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * ExpiredTime: 文件系统过期时间（unix时间戳）
     *
     * @return integer|null
     */
    public function getExpiredTime()
    {
        return $this->get("ExpiredTime");
    }

    /**
     * ExpiredTime: 文件系统过期时间（unix时间戳）
     *
     * @param int $expiredTime
     */
    public function setExpiredTime($expiredTime)
    {
        $this->set("ExpiredTime", $expiredTime);
    }

    /**
     * Size: 文件系统大小，单位GB
     *
     * @return integer|null
     */
    public function getSize()
    {
        return $this->get("Size");
    }

    /**
     * Size: 文件系统大小，单位GB
     *
     * @param int $size
     */
    public function setSize($size)
    {
        $this->set("Size", $size);
    }

    /**
     * IsExpired: 是否过期
     *
     * @return string|null
     */
    public function getIsExpired()
    {
        return $this->get("IsExpired");
    }

    /**
     * IsExpired: 是否过期
     *
     * @param string $isExpired
     */
    public function setIsExpired($isExpired)
    {
        $this->set("IsExpired", $isExpired);
    }

    /**
     * ChargeType: 计费类型
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费类型
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * MountStatus: 文件系统挂载状态
     *
     * @return integer|null
     */
    public function getMountStatus()
    {
        return $this->get("MountStatus");
    }

    /**
     * MountStatus: 文件系统挂载状态
     *
     * @param int $mountStatus
     */
    public function setMountStatus($mountStatus)
    {
        $this->set("MountStatus", $mountStatus);
    }

    /**
     * MountAddress: 文件系统挂载地址
     *
     * @return string|null
     */
    public function getMountAddress()
    {
        return $this->get("MountAddress");
    }

    /**
     * MountAddress: 文件系统挂载地址
     *
     * @param string $mountAddress
     */
    public function setMountAddress($mountAddress)
    {
        $this->set("MountAddress", $mountAddress);
    }
}
