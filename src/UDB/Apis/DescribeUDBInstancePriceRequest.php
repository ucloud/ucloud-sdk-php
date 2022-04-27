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
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getRegion(): string
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @param string $region
     */
    public function setRegion(string $region)
    {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getZone(): string
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @param string $zone
     */
    public function setZone(string $zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * MemoryLimit: 内存限制(MB)，单位为MB.目前支持：1000-96000
     *
     * @return integer|null
     */
    public function getMemoryLimit(): int
    {
        return $this->get("MemoryLimit");
    }

    /**
     * MemoryLimit: 内存限制(MB)，单位为MB.目前支持：1000-96000
     *
     * @param int $memoryLimit
     */
    public function setMemoryLimit(int $memoryLimit)
    {
        $this->set("MemoryLimit", $memoryLimit);
    }

    /**
     * DiskSpace: 磁盘空间(GB),暂时支持20(GB) - 3000(GB), 输入不带单位
     *
     * @return integer|null
     */
    public function getDiskSpace(): int
    {
        return $this->get("DiskSpace");
    }

    /**
     * DiskSpace: 磁盘空间(GB),暂时支持20(GB) - 3000(GB), 输入不带单位
     *
     * @param int $diskSpace
     */
    public function setDiskSpace(int $diskSpace)
    {
        $this->set("DiskSpace", $diskSpace);
    }

    /**
     * DBTypeId: UDB实例的DB版本字符串
     *
     * @return string|null
     */
    public function getDBTypeId(): string
    {
        return $this->get("DBTypeId");
    }

    /**
     * DBTypeId: UDB实例的DB版本字符串
     *
     * @param string $dbTypeId
     */
    public function setDBTypeId(string $dbTypeId)
    {
        $this->set("DBTypeId", $dbTypeId);
    }

    /**
     * Count: 购买DB实例数量,最大数量为10台, 默认为1台
     *
     * @return integer|null
     */
    public function getCount(): int
    {
        return $this->get("Count");
    }

    /**
     * Count: 购买DB实例数量,最大数量为10台, 默认为1台
     *
     * @param int $count
     */
    public function setCount(int $count)
    {
        $this->set("Count", $count);
    }

    /**
     * ChargeType: Year，按年付费； Month，按月付费 Dynamic，按需付费（需开启权限) Trial，试用（需开启权限）默认为月付
     *
     * @return string|null
     */
    public function getChargeType(): string
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: Year，按年付费； Month，按月付费 Dynamic，按需付费（需开启权限) Trial，试用（需开启权限）默认为月付
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Quantity: DB购买多少个"计费时间单位"，默认值为1。比如：买2个月，Quantity就是2。如果计费单位是“按月”，并且Quantity为0，表示“购买到月底”
     *
     * @return integer|null
     */
    public function getQuantity(): int
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: DB购买多少个"计费时间单位"，默认值为1。比如：买2个月，Quantity就是2。如果计费单位是“按月”，并且Quantity为0，表示“购买到月底”
     *
     * @param int $quantity
     */
    public function setQuantity(int $quantity)
    {
        $this->set("Quantity", $quantity);
    }

    /**
     * UseSSD: 是否使用SSD，只能填true或false，默认为false
     *
     * @return string|null
     */
    public function getUseSSD(): string
    {
        return $this->get("UseSSD");
    }

    /**
     * UseSSD: 是否使用SSD，只能填true或false，默认为false
     *
     * @param string $useSSD
     */
    public function setUseSSD(string $useSSD)
    {
        $this->set("UseSSD", $useSSD);
    }

    /**
     * SSDType: SSD类型，可选值为"SATA"、"PCI-E"，如果UseSSD为true ，则必填
     *
     * @return string|null
     */
    public function getSSDType(): string
    {
        return $this->get("SSDType");
    }

    /**
     * SSDType: SSD类型，可选值为"SATA"、"PCI-E"，如果UseSSD为true ，则必填
     *
     * @param string $ssdType
     */
    public function setSSDType(string $ssdType)
    {
        $this->set("SSDType", $ssdType);
    }

    /**
     * InstanceMode: 实例的部署类型。可选值为：Normal: 普通单点实例，Slave: 从库实例,HA: 高可用部署实例，默认是Normal
     *
     * @return string|null
     */
    public function getInstanceMode(): string
    {
        return $this->get("InstanceMode");
    }

    /**
     * InstanceMode: 实例的部署类型。可选值为：Normal: 普通单点实例，Slave: 从库实例,HA: 高可用部署实例，默认是Normal
     *
     * @param string $instanceMode
     */
    public function setInstanceMode(string $instanceMode)
    {
        $this->set("InstanceMode", $instanceMode);
    }
}
