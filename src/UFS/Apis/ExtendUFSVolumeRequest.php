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
namespace UCloud\UFS\Apis;

use UCloud\Core\Request\Request;

class ExtendUFSVolumeRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ExtendUFSVolume"]);
        $this->markRequired("Region");
        $this->markRequired("VolumeId");
        $this->markRequired("Size");
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
     * VolumeId: 文件系统ID
     *
     * @return string|null
     */
    public function getVolumeId()
    {
        return $this->get("VolumeId");
    }

    /**
     * VolumeId: 文件系统ID
     *
     * @param string $volumeId
     */
    public function setVolumeId($volumeId)
    {
        $this->set("VolumeId", $volumeId);
    }

    /**
     * Size: 文件系统大小，单位为GB，最大不超过20T，香港容量型必须为100的整数倍，Size最小为500GB，北京，上海，广州的容量型必须为1024的整数倍，Size最小为1024GB。性能型文件系统Size最小为100GB
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->get("Size");
    }

    /**
     * Size: 文件系统大小，单位为GB，最大不超过20T，香港容量型必须为100的整数倍，Size最小为500GB，北京，上海，广州的容量型必须为1024的整数倍，Size最小为1024GB。性能型文件系统Size最小为100GB
     *
     * @param int $size
     */
    public function setSize($size)
    {
        $this->set("Size", $size);
    }


}
