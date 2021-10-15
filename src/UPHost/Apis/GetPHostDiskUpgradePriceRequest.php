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
namespace UCloud\UPHost\Apis;

use UCloud\Core\Request\Request;

class GetPHostDiskUpgradePriceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetPHostDiskUpgradePrice"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("PHostId");
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
     * PHostId: UPHost实例ID。
     *
     * @return string|null
     */
    public function getPHostId()
    {
        return $this->get("PHostId");
    }

    /**
     * PHostId: UPHost实例ID。
     *
     * @param string $pHostId
     */
    public function setPHostId($pHostId)
    {
        $this->set("PHostId", $pHostId);
    }

    /**
     * DiskSpace: 磁盘大小，单位GB，必须是10GB的整数倍。系统盘20-500GB，数据盘单块盘20-32000GB。
     *
     * @return integer|null
     */
    public function getDiskSpace()
    {
        return $this->get("DiskSpace");
    }

    /**
     * DiskSpace: 磁盘大小，单位GB，必须是10GB的整数倍。系统盘20-500GB，数据盘单块盘20-32000GB。
     *
     * @param int $diskSpace
     */
    public function setDiskSpace($diskSpace)
    {
        $this->set("DiskSpace", $diskSpace);
    }

    /**
     * UDiskId: 磁盘 ID。获取扩容价格必填（只能扩不能减）；重装时候不需要填（根据所选盘大小决定）
     *
     * @return string|null
     */
    public function getUDiskId()
    {
        return $this->get("UDiskId");
    }

    /**
     * UDiskId: 磁盘 ID。获取扩容价格必填（只能扩不能减）；重装时候不需要填（根据所选盘大小决定）
     *
     * @param string $uDiskId
     */
    public function setUDiskId($uDiskId)
    {
        $this->set("UDiskId", $uDiskId);
    }

    /**
     * ReinstallTag: 是否重装价格获取。复用此接口。扩容只能增加云盘大小。重装不限制。枚举值：true/false
     *
     * @return boolean|null
     */
    public function getReinstallTag()
    {
        return $this->get("ReinstallTag");
    }

    /**
     * ReinstallTag: 是否重装价格获取。复用此接口。扩容只能增加云盘大小。重装不限制。枚举值：true/false
     *
     * @param boolean $reinstallTag
     */
    public function setReinstallTag($reinstallTag)
    {
        $this->set("ReinstallTag", $reinstallTag);
    }
}
