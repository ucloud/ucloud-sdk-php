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
namespace UCloud\UK8S\Models;

use UCloud\Core\Response\Response;

class InstanceTypeDisk extends Response
{
    

    /**
     * Name: 磁盘配置名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 磁盘配置名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * BootDisk: 支持的系统盘配置
     *
     * @return InstanceTypeBootDisk[]|null
     */
    public function getBootDisk()
    {
        $items = $this->get("BootDisk");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new InstanceTypeBootDisk($item));
        }
        return $result;
    }

    /**
     * BootDisk: 支持的系统盘配置
     *
     * @param InstanceTypeBootDisk[] $bootDisk
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
     * DataDisk: 支持的数据盘配置
     *
     * @return InstanceTypeDataDisk[]|null
     */
    public function getDataDisk()
    {
        $items = $this->get("DataDisk");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new InstanceTypeDataDisk($item));
        }
        return $result;
    }

    /**
     * DataDisk: 支持的数据盘配置
     *
     * @param InstanceTypeDataDisk[] $dataDisk
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
