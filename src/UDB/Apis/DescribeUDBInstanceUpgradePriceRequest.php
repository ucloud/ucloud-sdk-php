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
namespace UCloud\UDB\Apis;

use UCloud\Core\Request\Request;

class DescribeUDBInstanceUpgradePriceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeUDBInstanceUpgradePrice"]);
        $this->markRequired("Region");
        $this->markRequired("DBId");
        $this->markRequired("MemoryLimit");
        $this->markRequired("DiskSpace");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * DBId: 实例的Id
     *
     * @return string|null
     */
    public function getDBId()
    {
        return $this->get("DBId");
    }

    /**
     * DBId: 实例的Id
     *
     * @param string $dbId
     */
    public function setDBId($dbId)
    {
        $this->set("DBId", $dbId);
    }

    /**
     * MemoryLimit: 内存限制(MB)
     *
     * @return integer|null
     */
    public function getMemoryLimit()
    {
        return $this->get("MemoryLimit");
    }

    /**
     * MemoryLimit: 内存限制(MB)
     *
     * @param int $memoryLimit
     */
    public function setMemoryLimit($memoryLimit)
    {
        $this->set("MemoryLimit", $memoryLimit);
    }

    /**
     * DiskSpace: 磁盘空间(GB), 暂时支持20G - 500G
     *
     * @return integer|null
     */
    public function getDiskSpace()
    {
        return $this->get("DiskSpace");
    }

    /**
     * DiskSpace: 磁盘空间(GB), 暂时支持20G - 500G
     *
     * @param int $diskSpace
     */
    public function setDiskSpace($diskSpace)
    {
        $this->set("DiskSpace", $diskSpace);
    }

    /**
     * UseSSD: 是否使用SSD，默认为false
     *
     * @return boolean|null
     */
    public function getUseSSD()
    {
        return $this->get("UseSSD");
    }

    /**
     * UseSSD: 是否使用SSD，默认为false
     *
     * @param boolean $useSSD
     */
    public function setUseSSD($useSSD)
    {
        $this->set("UseSSD", $useSSD);
    }

    /**
     * SSDType: SSD类型，可选值为"SATA"、"PCI-E"，如果UseSSD为true ，则必选
     *
     * @return string|null
     */
    public function getSSDType()
    {
        return $this->get("SSDType");
    }

    /**
     * SSDType: SSD类型，可选值为"SATA"、"PCI-E"，如果UseSSD为true ，则必选
     *
     * @param string $ssdType
     */
    public function setSSDType($ssdType)
    {
        $this->set("SSDType", $ssdType);
    }
}
