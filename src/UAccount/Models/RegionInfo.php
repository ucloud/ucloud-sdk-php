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
namespace UCloud\UAccount\Models;

use UCloud\Core\Response\Response;

class RegionInfo extends Response
{
    

    /**
     * RegionId: 数据中心ID
     *
     * @return integer|null
     */
    public function getRegionId(): int
    {
        return $this->get("RegionId");
    }

    /**
     * RegionId: 数据中心ID
     *
     * @param int $regionId
     */
    public function setRegionId(int $regionId)
    {
        $this->set("RegionId", $regionId);
    }

    /**
     * RegionName: 数据中心名称
     *
     * @return string|null
     */
    public function getRegionName(): string
    {
        return $this->get("RegionName");
    }

    /**
     * RegionName: 数据中心名称
     *
     * @param string $regionName
     */
    public function setRegionName(string $regionName)
    {
        $this->set("RegionName", $regionName);
    }

    /**
     * IsDefault: 是否用户当前默认数据中心
     *
     * @return boolean|null
     */
    public function getIsDefault(): bool
    {
        return $this->get("IsDefault");
    }

    /**
     * IsDefault: 是否用户当前默认数据中心
     *
     * @param boolean $isDefault
     */
    public function setIsDefault(bool $isDefault)
    {
        $this->set("IsDefault", $isDefault);
    }

    /**
     * BitMaps: 用户在此数据中心的权限位
     *
     * @return string|null
     */
    public function getBitMaps(): string
    {
        return $this->get("BitMaps");
    }

    /**
     * BitMaps: 用户在此数据中心的权限位
     *
     * @param string $bitMaps
     */
    public function setBitMaps(string $bitMaps)
    {
        $this->set("BitMaps", $bitMaps);
    }

    /**
     * Region: 地域名字，如cn-bj
     *
     * @return string|null
     */
    public function getRegion(): string
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域名字，如cn-bj
     *
     * @param string $region
     */
    public function setRegion(string $region)
    {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区名字，如cn-bj-01
     *
     * @return string|null
     */
    public function getZone(): string
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区名字，如cn-bj-01
     *
     * @param string $zone
     */
    public function setZone(string $zone)
    {
        $this->set("Zone", $zone);
    }
}
