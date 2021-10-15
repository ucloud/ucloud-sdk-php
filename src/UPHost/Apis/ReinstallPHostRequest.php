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

class ReinstallPHostRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ReinstallPHost"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("PHostId");
        $this->markRequired("Password");
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
     * PHostId: PHost资源ID
     *
     * @return string|null
     */
    public function getPHostId()
    {
        return $this->get("PHostId");
    }

    /**
     * PHostId: PHost资源ID
     *
     * @param string $pHostId
     */
    public function setPHostId($pHostId)
    {
        $this->set("PHostId", $pHostId);
    }

    /**
     * Password: 密码
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->get("Password");
    }

    /**
     * Password: 密码
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->set("Password", $password);
    }

    /**
     * ImageId: 镜像Id，参考镜像列表，默认使用原镜像
     *
     * @return string|null
     */
    public function getImageId()
    {
        return $this->get("ImageId");
    }

    /**
     * ImageId: 镜像Id，参考镜像列表，默认使用原镜像
     *
     * @param string $imageId
     */
    public function setImageId($imageId)
    {
        $this->set("ImageId", $imageId);
    }

    /**
     * Name: 物理机名称，默认不更改
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 物理机名称，默认不更改
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Remark: 物理机备注，默认为不更改。
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 物理机备注，默认为不更改。
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * Tag: 业务组，默认不更改。
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组，默认不更改。
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * ReserveDisk: 是否保留数据盘，保留：Yes，不报留：No， 默认：Yes
     *
     * @return string|null
     */
    public function getReserveDisk()
    {
        return $this->get("ReserveDisk");
    }

    /**
     * ReserveDisk: 是否保留数据盘，保留：Yes，不报留：No， 默认：Yes
     *
     * @param string $reserveDisk
     */
    public function setReserveDisk($reserveDisk)
    {
        $this->set("ReserveDisk", $reserveDisk);
    }

    /**
     * Raid: 不保留数据盘重装，可选Raid
     *
     * @return string|null
     */
    public function getRaid()
    {
        return $this->get("Raid");
    }

    /**
     * Raid: 不保留数据盘重装，可选Raid
     *
     * @param string $raid
     */
    public function setRaid($raid)
    {
        $this->set("Raid", $raid);
    }

    /**
     * BootDiskSpace: 裸金属机型参数->系统盘大小。 单位：GB， 范围[20,500]， 步长：10
     *
     * @return integer|null
     */
    public function getBootDiskSpace()
    {
        return $this->get("BootDiskSpace");
    }

    /**
     * BootDiskSpace: 裸金属机型参数->系统盘大小。 单位：GB， 范围[20,500]， 步长：10
     *
     * @param int $bootDiskSpace
     */
    public function setBootDiskSpace($bootDiskSpace)
    {
        $this->set("BootDiskSpace", $bootDiskSpace);
    }
}
