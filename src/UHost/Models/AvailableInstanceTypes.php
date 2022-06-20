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

class AvailableInstanceTypes extends Response
{
    

    /**
     * Name: 机型名称：快杰O型|O 、快杰共享型|OM 、快杰内存型|OMEM 、 快杰PRO型|OPRO、通用N型|N、高主频C型|C和GPU G型|G等
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 机型名称：快杰O型|O 、快杰共享型|OM 、快杰内存型|OMEM 、 快杰PRO型|OPRO、通用N型|N、高主频C型|C和GPU G型|G等
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Status: 机型状态：可售|Normal 、 公测|Beta、售罄|Soldout、隐藏|Hidden
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 机型状态：可售|Normal 、 公测|Beta、售罄|Soldout、隐藏|Hidden
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * CpuPlatforms: 支持的CPU平台，并且按照Intel、AMD和Ampere分类返回
     *
     * @return CpuPlatforms|null
     */
    public function getCpuPlatforms()
    {
        return new CpuPlatforms($this->get("CpuPlatforms"));
    }

    /**
     * CpuPlatforms: 支持的CPU平台，并且按照Intel、AMD和Ampere分类返回
     *
     * @param CpuPlatforms $cpuPlatforms
     */
    public function setCpuPlatforms(array $cpuPlatforms)
    {
        $this->set("CpuPlatforms", $cpuPlatforms->getAll());
    }

    /**
     * Disks: 磁盘信息。磁盘主要分类如下：云盘|cloudDisk、普通本地盘|normalLocalDisk和SSD本地盘|ssdLocalDisk。其中云盘主要包含普通云盘|CLOUD_NORMAL、SSD云盘|CLOUD_SSD和RSSD云盘|CLOUD_RSSD。普通本地盘只包含普通本地盘|LOCAL_NORMAL一种。SSD本地盘只包含SSD本地盘|LOCAL_SSD一种。MinimalSize为磁盘最小值，如果没有该字段，最小值取基础镜像Size值即可（linux为20G，windows为40G）。MaximalSize为磁盘最大值。InstantResize表示系统盘是否允许扩容，如果是本地盘，则不允许扩容，InstantResize为false。Features为磁盘可支持的服务：数据方舟|DATAARK，快照服务|SNAPSHOT，加密盘|Encrypted。
     *
     * @return Disks[]|null
     */
    public function getDisks()
    {
        $items = $this->get("Disks");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new Disks($item));
        }
        return $result;
    }

    /**
     * Disks: 磁盘信息。磁盘主要分类如下：云盘|cloudDisk、普通本地盘|normalLocalDisk和SSD本地盘|ssdLocalDisk。其中云盘主要包含普通云盘|CLOUD_NORMAL、SSD云盘|CLOUD_SSD和RSSD云盘|CLOUD_RSSD。普通本地盘只包含普通本地盘|LOCAL_NORMAL一种。SSD本地盘只包含SSD本地盘|LOCAL_SSD一种。MinimalSize为磁盘最小值，如果没有该字段，最小值取基础镜像Size值即可（linux为20G，windows为40G）。MaximalSize为磁盘最大值。InstantResize表示系统盘是否允许扩容，如果是本地盘，则不允许扩容，InstantResize为false。Features为磁盘可支持的服务：数据方舟|DATAARK，快照服务|SNAPSHOT，加密盘|Encrypted。
     *
     * @param Disks[] $disks
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
     * MachineSizes: GPU、CPU和内存信息。Gpu为GPU可支持的规格，Cpu和Memory分别为CPU和内存可支持的规格。如果非GPU机型，GPU为0。MinimalCpuPlatform代表含义这个CPU和内存规格只能在列出来的CPU平台支持。
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
     * MachineSizes: GPU、CPU和内存信息。Gpu为GPU可支持的规格，Cpu和Memory分别为CPU和内存可支持的规格。如果非GPU机型，GPU为0。MinimalCpuPlatform代表含义这个CPU和内存规格只能在列出来的CPU平台支持。
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
     * Features:    虚机可支持的特性。目前支持的特性网络增强|NetCapability、热升级|Hotplug。网络增强分为关闭|Normal、网络增强1.0|Super和网络增强2.0|Ultra。Name为可支持的特性名称，Modes为可以提供的模式类别等，RelatedToImageFeature为镜像上支持这个特性的标签。例如DescribeImage返回的字段Features包含HotPlug，说明该镜像支持热升级。MinimalCpuPlatform表示这个特性必须是列出来的CPU平台及以上的CPU才支持。
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
     * Features:    虚机可支持的特性。目前支持的特性网络增强|NetCapability、热升级|Hotplug。网络增强分为关闭|Normal、网络增强1.0|Super和网络增强2.0|Ultra。Name为可支持的特性名称，Modes为可以提供的模式类别等，RelatedToImageFeature为镜像上支持这个特性的标签。例如DescribeImage返回的字段Features包含HotPlug，说明该镜像支持热升级。MinimalCpuPlatform表示这个特性必须是列出来的CPU平台及以上的CPU才支持。
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
     * MachineClass: 区分是否是GPU机型：GPU机型|GPU，非GPU机型|Normal。
     *
     * @return string|null
     */
    public function getMachineClass()
    {
        return $this->get("MachineClass");
    }

    /**
     * MachineClass: 区分是否是GPU机型：GPU机型|GPU，非GPU机型|Normal。
     *
     * @param string $machineClass
     */
    public function setMachineClass($machineClass)
    {
        $this->set("MachineClass", $machineClass);
    }

    /**
     * GraphicsMemory: GPU的显存指标，value为值，单位是GB。
     *
     * @return GraphicsMemory|null
     */
    public function getGraphicsMemory()
    {
        return new GraphicsMemory($this->get("GraphicsMemory"));
    }

    /**
     * GraphicsMemory: GPU的显存指标，value为值，单位是GB。
     *
     * @param GraphicsMemory $graphicsMemory
     */
    public function setGraphicsMemory(array $graphicsMemory)
    {
        $this->set("GraphicsMemory", $graphicsMemory->getAll());
    }

    /**
     * Performance: GPU的性能指标，value为值，单位是TFlops。
     *
     * @return Performance|null
     */
    public function getPerformance()
    {
        return new Performance($this->get("Performance"));
    }

    /**
     * Performance: GPU的性能指标，value为值，单位是TFlops。
     *
     * @param Performance $performance
     */
    public function setPerformance(array $performance)
    {
        $this->set("Performance", $performance->getAll());
    }
}
