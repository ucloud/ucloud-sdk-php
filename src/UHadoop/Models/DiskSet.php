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
namespace UCloud\UHadoop\Models;

use UCloud\Core\Response\Response;

class DiskSet extends Response
{
    

    /**
     * Size: 总磁盘大小
     *
     * @return integer|null
     */
    public function getSize()
    {
        return $this->get("Size");
    }

    /**
     * Size: 总磁盘大小
     *
     * @param int $size
     */
    public function setSize($size)
    {
        $this->set("Size", $size);
    }

    /**
     * Type: 磁盘角色，分Data数据盘和Boot系统盘
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 磁盘角色，分Data数据盘和Boot系统盘
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * DiskType: 可支持的磁盘类型
     *
     * @return string[]|null
     */
    public function getDiskType()
    {
        return $this->get("DiskType");
    }

    /**
     * DiskType: 可支持的磁盘类型
     *
     * @param string[] $diskType
     */
    public function setDiskType(array $diskType)
    {
        $this->set("DiskType", $diskType);
    }

    /**
     * SingleDiskSize: 单块盘大小
     *
     * @return integer|null
     */
    public function getSingleDiskSize()
    {
        return $this->get("SingleDiskSize");
    }

    /**
     * SingleDiskSize: 单块盘大小
     *
     * @param int $singleDiskSize
     */
    public function setSingleDiskSize($singleDiskSize)
    {
        $this->set("SingleDiskSize", $singleDiskSize);
    }

    /**
     * DiskNum: 磁盘数量
     *
     * @return integer|null
     */
    public function getDiskNum()
    {
        return $this->get("DiskNum");
    }

    /**
     * DiskNum: 磁盘数量
     *
     * @param int $diskNum
     */
    public function setDiskNum($diskNum)
    {
        $this->set("DiskNum", $diskNum);
    }

    /**
     * DiskMaxNum: 最大磁盘数量
     *
     * @return string|null
     */
    public function getDiskMaxNum()
    {
        return $this->get("DiskMaxNum");
    }

    /**
     * DiskMaxNum: 最大磁盘数量
     *
     * @param string $diskMaxNum
     */
    public function setDiskMaxNum($diskMaxNum)
    {
        $this->set("DiskMaxNum", $diskMaxNum);
    }

    /**
     * DiskMaxSize: 最大单块盘容量，单位GB
     *
     * @return string|null
     */
    public function getDiskMaxSize()
    {
        return $this->get("DiskMaxSize");
    }

    /**
     * DiskMaxSize: 最大单块盘容量，单位GB
     *
     * @param string $diskMaxSize
     */
    public function setDiskMaxSize($diskMaxSize)
    {
        $this->set("DiskMaxSize", $diskMaxSize);
    }

    /**
     * DiskMinNum: 最小磁盘数量
     *
     * @return string|null
     */
    public function getDiskMinNum()
    {
        return $this->get("DiskMinNum");
    }

    /**
     * DiskMinNum: 最小磁盘数量
     *
     * @param string $diskMinNum
     */
    public function setDiskMinNum($diskMinNum)
    {
        $this->set("DiskMinNum", $diskMinNum);
    }

    /**
     * DiskMinSize: 最小单块盘容量，单位GB
     *
     * @return string|null
     */
    public function getDiskMinSize()
    {
        return $this->get("DiskMinSize");
    }

    /**
     * DiskMinSize: 最小单块盘容量，单位GB
     *
     * @param string $diskMinSize
     */
    public function setDiskMinSize($diskMinSize)
    {
        $this->set("DiskMinSize", $diskMinSize);
    }
}
