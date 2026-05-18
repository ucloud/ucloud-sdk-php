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
namespace UCloud\UDB\Apis;

use UCloud\Core\Request\Request;

class DescribeUDBInstancePriceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeUDBInstancePrice"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("MemoryLimit");
        $this->markRequired("DiskSpace");
        $this->markRequired("DBTypeId");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * MemoryLimit: 内存限制(MB)，单位为MB.目前支持：2000-96000
     *
     * @return integer|null
     */
    public function getMemoryLimit()
    {
        return $this->get("MemoryLimit");
    }

    /**
     * MemoryLimit: 内存限制(MB)，单位为MB.目前支持：2000-96000
     *
     * @param int $memoryLimit
     */
    public function setMemoryLimit($memoryLimit)
    {
        $this->set("MemoryLimit", $memoryLimit);
    }

    /**
     * DiskSpace: 磁盘空间(GB),暂时支持20(GB) - 3000(GB), 输入不带单位
     *
     * @return integer|null
     */
    public function getDiskSpace()
    {
        return $this->get("DiskSpace");
    }

    /**
     * DiskSpace: 磁盘空间(GB),暂时支持20(GB) - 3000(GB), 输入不带单位
     *
     * @param int $diskSpace
     */
    public function setDiskSpace($diskSpace)
    {
        $this->set("DiskSpace", $diskSpace);
    }

    /**
     * DBTypeId: UDB实例的DB版本字符串
     *
     * @return string|null
     */
    public function getDBTypeId()
    {
        return $this->get("DBTypeId");
    }

    /**
     * DBTypeId: UDB实例的DB版本字符串
     *
     * @param string $dbTypeId
     */
    public function setDBTypeId($dbTypeId)
    {
        $this->set("DBTypeId", $dbTypeId);
    }

    /**
     * Count: 购买DB实例数量,最大数量为10台, 默认为1台
     *
     * @return integer|null
     */
    public function getCount()
    {
        return $this->get("Count");
    }

    /**
     * Count: 购买DB实例数量,最大数量为10台, 默认为1台
     *
     * @param int $count
     */
    public function setCount($count)
    {
        $this->set("Count", $count);
    }

    /**
     * ChargeType: Year，按年付费； Month，按月付费 Dynamic，按需付费（需开启权限) Trial，试用（需开启权限）默认为月付
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: Year，按年付费； Month，按月付费 Dynamic，按需付费（需开启权限) Trial，试用（需开启权限）默认为月付
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Quantity: DB购买多少个"计费时间单位"，默认值为1。比如：买2个月，Quantity就是2。如果计费单位是“按月”，并且Quantity为0，表示“购买到月底”
     *
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: DB购买多少个"计费时间单位"，默认值为1。比如：买2个月，Quantity就是2。如果计费单位是“按月”，并且Quantity为0，表示“购买到月底”
     *
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->set("Quantity", $quantity);
    }

    /**
     * SSDType: 该字段已废弃。
     *
     * @return string|null
     */
    public function getSSDType()
    {
        return $this->get("SSDType");
    }

    /**
     * SSDType: 该字段已废弃。
     *
     * @param string $ssdType
     */
    public function setSSDType($ssdType)
    {
        $this->set("SSDType", $ssdType);
    }

    /**
     * InstanceMode: 实例的部署类型。可选值为：Normal: 普通单点实例，Slave: 从库实例，HA: 高可用部署实例，默认是Normal
     *
     * @return string|null
     */
    public function getInstanceMode()
    {
        return $this->get("InstanceMode");
    }

    /**
     * InstanceMode: 实例的部署类型。可选值为：Normal: 普通单点实例，Slave: 从库实例，HA: 高可用部署实例，默认是Normal
     *
     * @param string $instanceMode
     */
    public function setInstanceMode($instanceMode)
    {
        $this->set("InstanceMode", $instanceMode);
    }

    /**
     * CPU: CPU个数，如果db类型为sqlserver，则为必填参数
     *
     * @return integer|null
     */
    public function getCPU()
    {
        return $this->get("CPU");
    }

    /**
     * CPU: CPU个数，如果db类型为sqlserver，则为必填参数
     *
     * @param int $cpu
     */
    public function setCPU($cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * InstanceType: 对于快杰机型，请使用最新的 SpecificationClass 和 StorageClass 字段进行创建。目前仅有少量地域支持 SATA_SSD 存储类型；若创建的是 SATA_SSD 机型，可通过该字段指定。字段说明：SATA_SSD：SATA SSD 机型（仅部分地域支持）NVMe_SSD：快杰机型
     *
     * @return string|null
     */
    public function getInstanceType()
    {
        return $this->get("InstanceType");
    }

    /**
     * InstanceType: 对于快杰机型，请使用最新的 SpecificationClass 和 StorageClass 字段进行创建。目前仅有少量地域支持 SATA_SSD 存储类型；若创建的是 SATA_SSD 机型，可通过该字段指定。字段说明：SATA_SSD：SATA SSD 机型（仅部分地域支持）NVMe_SSD：快杰机型
     *
     * @param string $instanceType
     */
    public function setInstanceType($instanceType)
    {
        $this->set("InstanceType", $instanceType);
    }

    /**
     * SpecificationType:   实例计算规格类型，0或不传代表使用内存方式购买，1代表使用内存-cpu可选配比方式购买，需要填写MachineType
     *
     * @return integer|null
     */
    public function getSpecificationType()
    {
        return $this->get("SpecificationType");
    }

    /**
     * SpecificationType:   实例计算规格类型，0或不传代表使用内存方式购买，1代表使用内存-cpu可选配比方式购买，需要填写MachineType
     *
     * @param int $specificationType
     */
    public function setSpecificationType($specificationType)
    {
        $this->set("SpecificationType", $specificationType);
    }

    /**
     * MachineType: 规格类型ID,当SpecificationType为1时有效
     *
     * @return string|null
     */
    public function getMachineType()
    {
        return $this->get("MachineType");
    }

    /**
     * MachineType: 规格类型ID,当SpecificationType为1时有效
     *
     * @param string $machineType
     */
    public function setMachineType($machineType)
    {
        $this->set("MachineType", $machineType);
    }

    /**
     * StorageClass: 存储类型 CLOUD_SSD: SSD云盘, CLOUD_RSSD: RSSD 云盘， CLOUD_SSD_ESSENTIAL: SSD Essential云盘 ，该字段和SpecificationClass组合优先级比InstanceType字段高
     *
     * @return string|null
     */
    public function getStorageClass()
    {
        return $this->get("StorageClass");
    }

    /**
     * StorageClass: 存储类型 CLOUD_SSD: SSD云盘, CLOUD_RSSD: RSSD 云盘， CLOUD_SSD_ESSENTIAL: SSD Essential云盘 ，该字段和SpecificationClass组合优先级比InstanceType字段高
     *
     * @param string $storageClass
     */
    public function setStorageClass($storageClass)
    {
        $this->set("StorageClass", $storageClass);
    }

    /**
     * SpecificationClass: 规格类型 O: NVME, OM: 共享型，N: 通用型
     *
     * @return string|null
     */
    public function getSpecificationClass()
    {
        return $this->get("SpecificationClass");
    }

    /**
     * SpecificationClass: 规格类型 O: NVME, OM: 共享型，N: 通用型
     *
     * @param string $specificationClass
     */
    public function setSpecificationClass($specificationClass)
    {
        $this->set("SpecificationClass", $specificationClass);
    }
}
