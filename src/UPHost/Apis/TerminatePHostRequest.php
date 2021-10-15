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

class TerminatePHostRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "TerminatePHost"]);
        $this->markRequired("Region");
        $this->markRequired("ProjectId");
        $this->markRequired("PHostId");
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
     * ReleaseEIP: 是否释放绑定的EIP。true: 解绑EIP后，并释放；其他值或不填：解绑EIP。
     *
     * @return boolean|null
     */
    public function getReleaseEIP()
    {
        return $this->get("ReleaseEIP");
    }

    /**
     * ReleaseEIP: 是否释放绑定的EIP。true: 解绑EIP后，并释放；其他值或不填：解绑EIP。
     *
     * @param boolean $releaseEIP
     */
    public function setReleaseEIP($releaseEIP)
    {
        $this->set("ReleaseEIP", $releaseEIP);
    }

    /**
     * ReleaseUDisk: 裸金属机型参数->删除主机时是否同时删除挂载的数据盘。默认为false。
     *
     * @return boolean|null
     */
    public function getReleaseUDisk()
    {
        return $this->get("ReleaseUDisk");
    }

    /**
     * ReleaseUDisk: 裸金属机型参数->删除主机时是否同时删除挂载的数据盘。默认为false。
     *
     * @param boolean $releaseUDisk
     */
    public function setReleaseUDisk($releaseUDisk)
    {
        $this->set("ReleaseUDisk", $releaseUDisk);
    }
}
