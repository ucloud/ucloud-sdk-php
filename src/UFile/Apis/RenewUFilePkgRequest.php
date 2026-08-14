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
namespace UCloud\UFile\Apis;

use UCloud\Core\Request\Request;

class RenewUFilePkgRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "RenewUFilePkg"]);
        $this->markRequired("Region");
        $this->markRequired("ResourceId");
        $this->markRequired("PkgType");
        $this->markRequired("Duration");
        $this->markRequired("DurationUnit");
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
     * ResourceId: 资源ID
     *
     * @return string|null
     */
    public function getResourceId()
    {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: 资源ID
     *
     * @param string $resourceId
     */
    public function setResourceId($resourceId)
    {
        $this->set("ResourceId", $resourceId);
    }

    /**
     * PkgType: 资源类型ID
     *
     * @return integer|null
     */
    public function getPkgType()
    {
        return $this->get("PkgType");
    }

    /**
     * PkgType: 资源类型ID
     *
     * @param int $pkgType
     */
    public function setPkgType($pkgType)
    {
        $this->set("PkgType", $pkgType);
    }

    /**
     * Duration: 续费时长
     *
     * @return integer|null
     */
    public function getDuration()
    {
        return $this->get("Duration");
    }

    /**
     * Duration: 续费时长
     *
     * @param int $duration
     */
    public function setDuration($duration)
    {
        $this->set("Duration", $duration);
    }

    /**
     * DurationUnit: 时长单位
     *
     * @return string|null
     */
    public function getDurationUnit()
    {
        return $this->get("DurationUnit");
    }

    /**
     * DurationUnit: 时长单位
     *
     * @param string $durationUnit
     */
    public function setDurationUnit($durationUnit)
    {
        $this->set("DurationUnit", $durationUnit);
    }
}
