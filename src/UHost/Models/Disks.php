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

class Disks extends Response
{
    

    /**
     * Name: 磁盘介质类别信息，磁盘主要分类如下：云盘|cloudDisk、普通本地盘|normalLocalDisk和SSD本地盘|ssdLocalDisk。 
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 磁盘介质类别信息，磁盘主要分类如下：云盘|cloudDisk、普通本地盘|normalLocalDisk和SSD本地盘|ssdLocalDisk。 
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * BootDisk: 系统盘信息
     *
     * @return BootDiskInfo[]|null
     */
    public function getBootDisk()
    {
        $items = $this->get("BootDisk");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new BootDiskInfo($item));
        }
        return $result;
    }

    /**
     * BootDisk: 系统盘信息
     *
     * @param BootDiskInfo[] $bootDisk
     */
    public function setBootDisk(array $bootDisk)
    {
        $result = [];
        foreach ($bootDisk as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * DataDisk: 数据盘信息
     *
     * @return DataDiskInfo[]|null
     */
    public function getDataDisk()
    {
        $items = $this->get("DataDisk");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new DataDiskInfo($item));
        }
        return $result;
    }

    /**
     * DataDisk: 数据盘信息
     *
     * @param DataDiskInfo[] $dataDisk
     */
    public function setDataDisk(array $dataDisk)
    {
        $result = [];
        foreach ($dataDisk as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }


}
