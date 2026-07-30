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
namespace UCloud\UHost\Models;

use UCloud\Core\Response\Response;

class MachineTypes extends Response
{
    

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
     * Description: 机型中文名称
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->get("Description");
    }

    /**
     * Description: 机型中文名称
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->set("Description", $description);
    }

    /**
     * OperationStatus: 机型ComponentCode
     *
     * @return string|null
     */
    public function getOperationStatus()
    {
        return $this->get("OperationStatus");
    }

    /**
     * OperationStatus: 机型ComponentCode
     *
     * @param string $operationStatus
     */
    public function setOperationStatus($operationStatus)
    {
        $this->set("OperationStatus", $operationStatus);
    }

    /**
     * CpuPlatforms: CPU平台列表
     *
     * @return CpuPlatformStatus[]|null
     */
    public function getCpuPlatforms()
    {
        $items = $this->get("CpuPlatforms");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CpuPlatformStatus($item));
        }
        return $result;
    }

    /**
     * CpuPlatforms: CPU平台列表
     *
     * @param CpuPlatformStatus[] $cpuPlatforms
     */
    public function setCpuPlatforms(array $cpuPlatforms)
    {
        $result = [];
        foreach ($cpuPlatforms as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Disks: 磁盘信息
     *
     * @return FamiliesDisks[]|null
     */
    public function getDisks()
    {
        $items = $this->get("Disks");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new FamiliesDisks($item));
        }
        return $result;
    }

    /**
     * Disks: 磁盘信息
     *
     * @param FamiliesDisks[] $disks
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
     * MachineSizes: 规格信息
     *
     * @return MachineSizes[]|null
     */
    public function getMachineSizes()
    {
        $items = $this->get("MachineSizes");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new MachineSizes($item));
        }
        return $result;
    }

    /**
     * MachineSizes: 规格信息
     *
     * @param MachineSizes[] $machineSizes
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
     * Features: 特性信息
     *
     * @return Features[]|null
     */
    public function getFeatures()
    {
        $items = $this->get("Features");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new Features($item));
        }
        return $result;
    }

    /**
     * Features: 特性信息
     *
     * @param Features[] $features
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
     * ParentType: 父类型。如GPU机型的父类型为"G"
     *
     * @return string|null
     */
    public function getParentType()
    {
        return $this->get("ParentType");
    }

    /**
     * ParentType: 父类型。如GPU机型的父类型为"G"
     *
     * @param string $parentType
     */
    public function setParentType($parentType)
    {
        $this->set("ParentType", $parentType);
    }

    /**
     * GpuType: GPU信息
     *
     * @return FamiliesGpuType|null
     */
    public function getGpuType()
    {
        return new FamiliesGpuType($this->get("GpuType"));
    }

    /**
     * GpuType: GPU信息
     *
     * @param FamiliesGpuType $gpuType
     */
    public function setGpuType(array $gpuType)
    {
        $this->set("GpuType", $gpuType->getAll());
    }

    /**
     * SceneCategories: 场景分类
     *
     * @return string[]|null
     */
    public function getSceneCategories()
    {
        return $this->get("SceneCategories");
    }

    /**
     * SceneCategories: 场景分类
     *
     * @param string[] $sceneCategories
     */
    public function setSceneCategories(array $sceneCategories)
    {
        $this->set("SceneCategories", $sceneCategories);
    }

    /**
     * GpuSeries: GPU系列
     *
     * @return string|null
     */
    public function getGpuSeries()
    {
        return $this->get("GpuSeries");
    }

    /**
     * GpuSeries: GPU系列
     *
     * @param string $gpuSeries
     */
    public function setGpuSeries($gpuSeries)
    {
        $this->set("GpuSeries", $gpuSeries);
    }

    /**
     * UHostFamilies: 规格族信息
     *
     * @return UHostFamily[]|null
     */
    public function getUHostFamilies()
    {
        $items = $this->get("UHostFamilies");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UHostFamily($item));
        }
        return $result;
    }

    /**
     * UHostFamilies: 规格族信息
     *
     * @param UHostFamily[] $uHostFamilies
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
     * Virtual: 是否为非真实机型
     *
     * @return boolean|null
     */
    public function getVirtual()
    {
        return $this->get("Virtual");
    }

    /**
     * Virtual: 是否为非真实机型
     *
     * @param boolean $virtual
     */
    public function setVirtual($virtual)
    {
        $this->set("Virtual", $virtual);
    }

    /**
     * ProType: 仅OPROG\OPRO机型返回
     *
     * @return NameFrequency|null
     */
    public function getProType()
    {
        return new NameFrequency($this->get("ProType"));
    }

    /**
     * ProType: 仅OPROG\OPRO机型返回
     *
     * @param NameFrequency $proType
     */
    public function setProType(array $proType)
    {
        $this->set("ProType", $proType->getAll());
    }
}
