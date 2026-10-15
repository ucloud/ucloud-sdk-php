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

class UK8SAvailableInstanceType extends Response
{
    

    /**
     * Zone: 可用区
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * Name: 机型名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 机型名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Status: 机型状态
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 机型状态
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * Description: 机型描述
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->get("Description");
    }

    /**
     * Description: 机型描述
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->set("Description", $description);
    }

    /**
     * UHostFamilies: 主机系列列表
     *
     * @return InstanceTypeUHostFamily[]|null
     */
    public function getUHostFamilies()
    {
        $items = $this->get("UHostFamilies");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new InstanceTypeUHostFamily($item));
        }
        return $result;
    }

    /**
     * UHostFamilies: 主机系列列表
     *
     * @param InstanceTypeUHostFamily[] $uHostFamilies
     */
    public function setUHostFamilies(array $uHostFamilies)
    {
        $result = [];
        foreach ($uHostFamilies as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Disks: 支持的磁盘配置
     *
     * @return InstanceTypeDisk[]|null
     */
    public function getDisks()
    {
        $items = $this->get("Disks");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new InstanceTypeDisk($item));
        }
        return $result;
    }

    /**
     * Disks: 支持的磁盘配置
     *
     * @param InstanceTypeDisk[] $disks
     */
    public function setDisks(array $disks)
    {
        $result = [];
        foreach ($disks as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * MachineSizes: 支持的机型规格
     *
     * @return InstanceTypeMachineSize[]|null
     */
    public function getMachineSizes()
    {
        $items = $this->get("MachineSizes");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new InstanceTypeMachineSize($item));
        }
        return $result;
    }

    /**
     * MachineSizes: 支持的机型规格
     *
     * @param InstanceTypeMachineSize[] $machineSizes
     */
    public function setMachineSizes(array $machineSizes)
    {
        $result = [];
        foreach ($machineSizes as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Features: 机型特性列表
     *
     * @return InstanceTypeFeature[]|null
     */
    public function getFeatures()
    {
        $items = $this->get("Features");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new InstanceTypeFeature($item));
        }
        return $result;
    }

    /**
     * Features: 机型特性列表
     *
     * @param InstanceTypeFeature[] $features
     */
    public function setFeatures(array $features)
    {
        $result = [];
        foreach ($features as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * MachineClass: 机型类别
     *
     * @return string|null
     */
    public function getMachineClass()
    {
        return $this->get("MachineClass");
    }

    /**
     * MachineClass: 机型类别
     *
     * @param string $machineClass
     */
    public function setMachineClass($machineClass)
    {
        $this->set("MachineClass", $machineClass);
    }

    /**
     * InstanceType: 实例类型
     *
     * @return string|null
     */
    public function getInstanceType()
    {
        return $this->get("InstanceType");
    }

    /**
     * InstanceType: 实例类型
     *
     * @param string $instanceType
     */
    public function setInstanceType($instanceType)
    {
        $this->set("InstanceType", $instanceType);
    }

    /**
     * ParentType: 父机型类型
     *
     * @return string|null
     */
    public function getParentType()
    {
        return $this->get("ParentType");
    }

    /**
     * ParentType: 父机型类型
     *
     * @param string $parentType
     */
    public function setParentType($parentType)
    {
        $this->set("ParentType", $parentType);
    }

    /**
     * GraphicsMemory: 显存信息
     *
     * @return InstanceTypeValueRate|null
     */
    public function getGraphicsMemory()
    {
        return new InstanceTypeValueRate($this->get("GraphicsMemory"));
    }

    /**
     * GraphicsMemory: 显存信息
     *
     * @param InstanceTypeValueRate $graphicsMemory
     */
    public function setGraphicsMemory(array $graphicsMemory)
    {
        $this->set("GraphicsMemory", $graphicsMemory->getAll());
    }

    /**
     * Performance: 性能信息
     *
     * @return InstanceTypeValueRate|null
     */
    public function getPerformance()
    {
        return new InstanceTypeValueRate($this->get("Performance"));
    }

    /**
     * Performance: 性能信息
     *
     * @param InstanceTypeValueRate $performance
     */
    public function setPerformance(array $performance)
    {
        $this->set("Performance", $performance->getAll());
    }
}
