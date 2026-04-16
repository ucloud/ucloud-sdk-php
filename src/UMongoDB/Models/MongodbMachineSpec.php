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
namespace UCloud\UMongoDB\Models;

use UCloud\Core\Response\Response;

class MongodbMachineSpec extends Response
{
    

    /**
     * ClassType: 规格类型;O | N
     *
     * @return string|null
     */
    public function getClassType()
    {
        return $this->get("ClassType");
    }

    /**
     * ClassType: 规格类型;O | N
     *
     * @param string $classType
     */
    public function setClassType($classType)
    {
        $this->set("ClassType", $classType);
    }

    /**
     * DiskType: 磁盘类型;CLOUD_RSSD | CLOUD_SSD | LOCAL_SSD
     *
     * @return string[]|null
     */
    public function getDiskType()
    {
        return $this->get("DiskType");
    }

    /**
     * DiskType: 磁盘类型;CLOUD_RSSD | CLOUD_SSD | LOCAL_SSD
     *
     * @param string[] $diskType
     */
    public function setDiskType(array $diskType)
    {
        $this->set("DiskType", $diskType);
    }

    /**
     * ComputeType: 计算规格列表
     *
     * @return MongodbMachineType[]|null
     */
    public function getComputeType()
    {
        $items = $this->get("ComputeType");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new MongodbMachineType($item));
        }
        return $result;
    }

    /**
     * ComputeType: 计算规格列表
     *
     * @param MongodbMachineType[] $computeType
     */
    public function setComputeType(array $computeType)
    {
        $result = [];
        foreach ($computeType as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * DefaultMachineType: 默认规格
     *
     * @return MongodbMachineType|null
     */
    public function getDefaultMachineType()
    {
        return new MongodbMachineType($this->get("DefaultMachineType"));
    }

    /**
     * DefaultMachineType: 默认规格
     *
     * @param MongodbMachineType $defaultMachineType
     */
    public function setDefaultMachineType(array $defaultMachineType)
    {
        $this->set("DefaultMachineType", $defaultMachineType->getAll());
    }
}
