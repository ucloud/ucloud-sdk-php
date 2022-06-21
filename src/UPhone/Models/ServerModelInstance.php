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
namespace UCloud\UPhone\Models;

use UCloud\Core\Response\Response;

class ServerModelInstance extends Response
{
    

    /**
     * ServerModelName: ServerModel名称	
     *
     * @return string|null
     */
    public function getServerModelName()
    {
        return $this->get("ServerModelName");
    }

    /**
     * ServerModelName: ServerModel名称	
     *
     * @param string $serverModelName
     */
    public function setServerModelName($serverModelName)
    {
        $this->set("ServerModelName", $serverModelName);
    }

    /**
     * CPU: 虚拟CPU核数。可选参数：1-64（具体机型与CPU的对应关系参照控制台）。
     *
     * @return int|null
     */
    public function getCPU()
    {
        return $this->get("CPU");
    }

    /**
     * CPU: 虚拟CPU核数。可选参数：1-64（具体机型与CPU的对应关系参照控制台）。
     *
     * @param int $cpu
     */
    public function setCPU($cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * Memory: 内存大小。单位：MB。
     *
     * @return int|null
     */
    public function getMemory()
    {
        return $this->get("Memory");
    }

    /**
     * Memory: 内存大小。单位：MB。
     *
     * @param int $memory
     */
    public function setMemory($memory)
    {
        $this->set("Memory", $memory);
    }

    /**
     * DiskSet: 磁盘信息见 UPhoneDiskSet	
     *
     * @return ServerDiskSet[]|null
     */
    public function getDiskSet()
    {
        $items = $this->get("DiskSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ServerDiskSet($item));
        }
        return $result;
    }

    /**
     * DiskSet: 磁盘信息见 UPhoneDiskSet	
     *
     * @param ServerDiskSet[] $diskSet
     */
    public function setDiskSet(array $diskSet)
    {
        $result = [];
        foreach ($diskSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * GPUType: GPU类型	
     *
     * @return string|null
     */
    public function getGPUType()
    {
        return $this->get("GPUType");
    }

    /**
     * GPUType: GPU类型	
     *
     * @param string $gpuType
     */
    public function setGPUType($gpuType)
    {
        $this->set("GPUType", $gpuType);
    }

    /**
     * GPU: GPU个数	
     *
     * @return int|null
     */
    public function getGPU()
    {
        return $this->get("GPU");
    }

    /**
     * GPU: GPU个数	
     *
     * @param int $gpu
     */
    public function setGPU($gpu)
    {
        $this->set("GPU", $gpu);
    }

    /**
     * UPhoneSpecs: 【数组】手机说明，包含该服务器规格所能创建的手机规格名及对应手机开数。每项参数可见数据模型 [UPhoneSpec](#UPhoneSpec)	
     *
     * @return UPhoneSpec[]|null
     */
    public function getUPhoneSpecs()
    {
        $items = $this->get("UPhoneSpecs");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UPhoneSpec($item));
        }
        return $result;
    }

    /**
     * UPhoneSpecs: 【数组】手机说明，包含该服务器规格所能创建的手机规格名及对应手机开数。每项参数可见数据模型 [UPhoneSpec](#UPhoneSpec)	
     *
     * @param UPhoneSpec[] $uPhoneSpecs
     */
    public function setUPhoneSpecs(array $uPhoneSpecs)
    {
        $result = [];
        foreach ($uPhoneSpecs as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * ServerModelState: 表示该机型是否上线，用于前端判断是否开放给用户。枚举值：>AVAILABLE，开放>UNAVAILABLE, 不开放
     *
     * @return string|null
     */
    public function getServerModelState()
    {
        return $this->get("ServerModelState");
    }

    /**
     * ServerModelState: 表示该机型是否上线，用于前端判断是否开放给用户。枚举值：>AVAILABLE，开放>UNAVAILABLE, 不开放
     *
     * @param string $serverModelState
     */
    public function setServerModelState($serverModelState)
    {
        $this->set("ServerModelState", $serverModelState);
    }


}
