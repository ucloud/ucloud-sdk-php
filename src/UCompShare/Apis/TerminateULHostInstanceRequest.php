<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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
namespace UCloud\UCompShare\Apis;

use UCloud\Core\Request\Request;

class TerminateULHostInstanceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "TerminateULHostInstance"]);
        $this->markRequired("Region");
        $this->markRequired("ULHostId");
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
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * ULHostId: ULHost资源Id
     *
     * @return string|null
     */
    public function getULHostId()
    {
        return $this->get("ULHostId");
    }

    /**
     * ULHostId: ULHost资源Id
     *
     * @param string $ulHostId
     */
    public function setULHostId($ulHostId)
    {
        $this->set("ULHostId", $ulHostId);
    }

    /**
     * ReleaseUDisk: 删除主机时是否同时删除挂载的数据盘。默认为false。
     *
     * @return boolean|null
     */
    public function getReleaseUDisk()
    {
        return $this->get("ReleaseUDisk");
    }

    /**
     * ReleaseUDisk: 删除主机时是否同时删除挂载的数据盘。默认为false。
     *
     * @param boolean $releaseUDisk
     */
    public function setReleaseUDisk($releaseUDisk)
    {
        $this->set("ReleaseUDisk", $releaseUDisk);
    }
}
