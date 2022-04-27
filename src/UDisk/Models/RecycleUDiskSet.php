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
namespace UCloud\UDisk\Models;

use UCloud\Core\Response\Response;

class RecycleUDiskSet extends Response
{
    

    /**
     * UDiskId: 磁盘id
     *
     * @return string|null
     */
    public function getUDiskId(): string
    {
        return $this->get("UDiskId");
    }

    /**
     * UDiskId: 磁盘id
     *
     * @param string $uDiskId
     */
    public function setUDiskId(string $uDiskId)
    {
        $this->set("UDiskId", $uDiskId);
    }

    /**
     * CreateTime: 创建时间
     *
     * @return integer|null
     */
    public function getCreateTime(): int
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * ExpiredTime: 过期时间
     *
     * @return integer|null
     */
    public function getExpiredTime(): int
    {
        return $this->get("ExpiredTime");
    }

    /**
     * ExpiredTime: 过期时间
     *
     * @param int $expiredTime
     */
    public function setExpiredTime(int $expiredTime)
    {
        $this->set("ExpiredTime", $expiredTime);
    }

    /**
     * CountdownTime: 销毁倒计时
     *
     * @return integer|null
     */
    public function getCountdownTime(): int
    {
        return $this->get("CountdownTime");
    }

    /**
     * CountdownTime: 销毁倒计时
     *
     * @param int $countdownTime
     */
    public function setCountdownTime(int $countdownTime)
    {
        $this->set("CountdownTime", $countdownTime);
    }

    /**
     * Name: 磁盘名称
     *
     * @return string|null
     */
    public function getName(): string
    {
        return $this->get("Name");
    }

    /**
     * Name: 磁盘名称
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->set("Name", $name);
    }

    /**
     * Size: 磁盘容量
     *
     * @return integer|null
     */
    public function getSize(): int
    {
        return $this->get("Size");
    }

    /**
     * Size: 磁盘容量
     *
     * @param int $size
     */
    public function setSize(int $size)
    {
        $this->set("Size", $size);
    }

    /**
     * Tag: 业务组
     *
     * @return string|null
     */
    public function getTag(): string
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组
     *
     * @param string $tag
     */
    public function setTag(string $tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * Zone: 可用区
     *
     * @return string|null
     */
    public function getZone(): string
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区
     *
     * @param string $zone
     */
    public function setZone(string $zone)
    {
        $this->set("Zone", $zone);
    }
}
