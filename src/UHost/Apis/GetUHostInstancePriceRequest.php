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
namespace UCloud\UHost\Apis;

use UCloud\Core\Request\Request;
use UCloud\UHost\Params\GetUHostInstancePriceParamDisks;
use UCloud\UHost\Params\GetUHostInstancePriceParamVolumes;
use UCloud\UHost\Params\GetUHostInstancePriceParamVirtualGpu;

class GetUHostInstancePriceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetUHostInstancePrice"]);
        $this->markRequired("Region");
        $this->markRequired("CPU");
        $this->markRequired("Memory");
        $this->markRequired("Count");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion(): string
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion(string $region)
    {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getZone(): string
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $zone
     */
    public function setZone(string $zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * CPU: CPU核数。可选参数：1-64。可选范围参照控制台。默认值: 4
     *
     * @return integer|null
     */
    public function getCPU(): int
    {
        return $this->get("CPU");
    }

    /**
     * CPU: CPU核数。可选参数：1-64。可选范围参照控制台。默认值: 4
     *
     * @param int $cpu
     */
    public function setCPU(int $cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * Memory: 内存大小。单位：MB。范围 ：[1024, 262144]，取值为1024的倍数（可选范围参照好控制台）。默认值：8192
     *
     * @return integer|null
     */
    public function getMemory(): int
    {
        return $this->get("Memory");
    }

    /**
     * Memory: 内存大小。单位：MB。范围 ：[1024, 262144]，取值为1024的倍数（可选范围参照好控制台）。默认值：8192
     *
     * @param int $memory
     */
    public function setMemory(int $memory)
    {
        $this->set("Memory", $memory);
    }

    /**
     * Count: 购买台数，范围[1,5]
     *
     * @return integer|null
     */
    public function getCount(): int
    {
        return $this->get("Count");
    }

    /**
     * Count: 购买台数，范围[1,5]
     *
     * @param int $count
     */
    public function setCount(int $count)
    {
        $this->set("Count", $count);
    }

    /**
     * Disks:
     *
     * @return GetUHostInstancePriceParamDisks[]|null
     */
    public function getDisks(): array
    {
        $items = $this->get("Disks") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new GetUHostInstancePriceParamDisks($item));
        }
        return $result;
    }

    /**
     * Disks:
     *
     * @param GetUHostInstancePriceParamDisks[] $disks
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
     * ImageId: 镜像Id，可通过 [DescribeImage](describe_image.html) 获取镜像ID， 如果镜像ID不传，系统盘大小必传
     *
     * @return string|null
     */
    public function getImageId(): string
    {
        return $this->get("ImageId");
    }

    /**
     * ImageId: 镜像Id，可通过 [DescribeImage](describe_image.html) 获取镜像ID， 如果镜像ID不传，系统盘大小必传
     *
     * @param string $imageId
     */
    public function setImageId(string $imageId)
    {
        $this->set("ImageId", $imageId);
    }

    /**
     * GPU: GPU卡核心数。仅GPU机型支持此字段。
     *
     * @return integer|null
     */
    public function getGPU(): int
    {
        return $this->get("GPU");
    }

    /**
     * GPU: GPU卡核心数。仅GPU机型支持此字段。
     *
     * @param int $gpu
     */
    public function setGPU(int $gpu)
    {
        $this->set("GPU", $gpu);
    }

    /**
     * ChargeType: 计费模式。枚举值为： \\ > Year，按年付费； \\ > Month，按月付费；\\ > Dynamic，按小时付费 // >Preemptive 抢占式实例 \\ 如果不传某个枚举值，默认返回年付、月付、时付的价格组合集。
     *
     * @return string|null
     */
    public function getChargeType(): string
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费模式。枚举值为： \\ > Year，按年付费； \\ > Month，按月付费；\\ > Dynamic，按小时付费 // >Preemptive 抢占式实例 \\ 如果不传某个枚举值，默认返回年付、月付、时付的价格组合集。
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * NetCapability: 网络增强。枚举值：Normal，不开启; Super，开启网络增强1.0。 默认值为Normal。
     *
     * @return string|null
     */
    public function getNetCapability(): string
    {
        return $this->get("NetCapability");
    }

    /**
     * NetCapability: 网络增强。枚举值：Normal，不开启; Super，开启网络增强1.0。 默认值为Normal。
     *
     * @param string $netCapability
     */
    public function setNetCapability(string $netCapability)
    {
        $this->set("NetCapability", $netCapability);
    }

    /**
     * UHostType: 【待废弃】云主机机型（V1版本概念）。参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     *
     * @return string|null
     */
    public function getUHostType(): string
    {
        return $this->get("UHostType");
    }

    /**
     * UHostType: 【待废弃】云主机机型（V1版本概念）。参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     *
     * @param string $uHostType
     */
    public function setUHostType(string $uHostType)
    {
        $this->set("UHostType", $uHostType);
    }

    /**
     * MachineType: 云主机机型（V2版本概念）。枚举值["N", "C", "G", "O", "OS", "OPRO", "OMAX", "O.BM"]。参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     *
     * @return string|null
     */
    public function getMachineType(): string
    {
        return $this->get("MachineType");
    }

    /**
     * MachineType: 云主机机型（V2版本概念）。枚举值["N", "C", "G", "O", "OS", "OPRO", "OMAX", "O.BM"]。参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     *
     * @param string $machineType
     */
    public function setMachineType(string $machineType)
    {
        $this->set("MachineType", $machineType);
    }

    /**
     * GpuType: GPU类型，枚举值["K80", "P40", "V100", "T4","T4S","2080Ti","2080Ti-4C","1080Ti"]
     *
     * @return string|null
     */
    public function getGpuType(): string
    {
        return $this->get("GpuType");
    }

    /**
     * GpuType: GPU类型，枚举值["K80", "P40", "V100", "T4","T4S","2080Ti","2080Ti-4C","1080Ti"]
     *
     * @param string $gpuType
     */
    public function setGpuType(string $gpuType)
    {
        $this->set("GpuType", $gpuType);
    }

    /**
     * Quantity: 购买时长。默认: 1。按小时购买(Dynamic)时无需此参数。 月付时，此参数传0，代表了购买至月末。
     *
     * @return integer|null
     */
    public function getQuantity(): int
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买时长。默认: 1。按小时购买(Dynamic)时无需此参数。 月付时，此参数传0，代表了购买至月末。
     *
     * @param int $quantity
     */
    public function setQuantity(int $quantity)
    {
        $this->set("Quantity", $quantity);
    }

    /**
     * CpuPlatform: 取值"Intel" "Amd"，默认值“Intel”
     *
     * @return string|null
     */
    public function getCpuPlatform(): string
    {
        return $this->get("CpuPlatform");
    }

    /**
     * CpuPlatform: 取值"Intel" "Amd"，默认值“Intel”
     *
     * @param string $cpuPlatform
     */
    public function setCpuPlatform(string $cpuPlatform)
    {
        $this->set("CpuPlatform", $cpuPlatform);
    }

    /**
     * Volumes:
     *
     * @return GetUHostInstancePriceParamVolumes[]|null
     */
    public function getVolumes(): array
    {
        $items = $this->get("Volumes") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new GetUHostInstancePriceParamVolumes($item));
        }
        return $result;
    }

    /**
     * Volumes:
     *
     * @param GetUHostInstancePriceParamVolumes[] $volumes
     */
    public function setVolumes(array $volumes)
    {
        $result = [];
        foreach ($volumes as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * VirtualGpu:
     *
     * @return GetUHostInstancePriceParamVirtualGpu|null
     */
    public function getVirtualGpu(): GetUHostInstancePriceParamVirtualGpu
    {
        return new GetUHostInstancePriceParamVirtualGpu($this->get("VirtualGpu"));
    }

    /**
     * VirtualGpu:
     *
     * @param GetUHostInstancePriceParamVirtualGpu $virtualGpu
     */
    public function setVirtualGpu(GetUHostInstancePriceParamVirtualGpu $virtualGpu)
    {
        $this->set("VirtualGpu", $virtualGpu->getAll());
    }
}
