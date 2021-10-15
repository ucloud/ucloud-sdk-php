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
namespace UCloud\UPHost\Models;

use UCloud\Core\Response\Response;

class PHostDescDiskSet extends Response
{
    

    /**
     * Space: 单盘大小，单位GB
     *
     * @return integer|null
     */
    public function getSpace()
    {
        return $this->get("Space");
    }

    /**
     * Space: 单盘大小，单位GB
     *
     * @param int $space
     */
    public function setSpace($space)
    {
        $this->set("Space", $space);
    }

    /**
     * Count: 磁盘数量
     *
     * @return integer|null
     */
    public function getCount()
    {
        return $this->get("Count");
    }

    /**
     * Count: 磁盘数量
     *
     * @param int $count
     */
    public function setCount($count)
    {
        $this->set("Count", $count);
    }

    /**
     * Type: 磁盘属性
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 磁盘属性
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * Name: 磁盘名称，sys/data
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 磁盘名称，sys/data
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * IOCap: 磁盘IO性能，单位MB/s（待废弃）
     *
     * @return integer|null
     */
    public function getIOCap()
    {
        return $this->get("IOCap");
    }

    /**
     * IOCap: 磁盘IO性能，单位MB/s（待废弃）
     *
     * @param int $ioCap
     */
    public function setIOCap($ioCap)
    {
        $this->set("IOCap", $ioCap);
    }

    /**
     * Drive: 裸金属机型参数：磁盘盘符
     *
     * @return string|null
     */
    public function getDrive()
    {
        return $this->get("Drive");
    }

    /**
     * Drive: 裸金属机型参数：磁盘盘符
     *
     * @param string $drive
     */
    public function setDrive($drive)
    {
        $this->set("Drive", $drive);
    }

    /**
     * DiskId: 裸金属机型参数：磁盘ID
     *
     * @return string|null
     */
    public function getDiskId()
    {
        return $this->get("DiskId");
    }

    /**
     * DiskId: 裸金属机型参数：磁盘ID
     *
     * @param string $diskId
     */
    public function setDiskId($diskId)
    {
        $this->set("DiskId", $diskId);
    }

    /**
     * IsBoot: 裸金属机型参数：是否是启动盘。True/False
     *
     * @return string|null
     */
    public function getIsBoot()
    {
        return $this->get("IsBoot");
    }

    /**
     * IsBoot: 裸金属机型参数：是否是启动盘。True/False
     *
     * @param string $isBoot
     */
    public function setIsBoot($isBoot)
    {
        $this->set("IsBoot", $isBoot);
    }
}
