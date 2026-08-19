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
namespace UCloud\UWSC\Apis;

use UCloud\Core\Request\Request;

class UpdateBWPackageRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateBWPackage"]);
        $this->markRequired("ProjectId");
        $this->markRequired("BwId");
        $this->markRequired("BwMax");
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
     * BwId: 带宽包资源ID
     *
     * @return string|null
     */
    public function getBwId()
    {
        return $this->get("BwId");
    }

    /**
     * BwId: 带宽包资源ID
     *
     * @param string $bwId
     */
    public function setBwId($bwId)
    {
        $this->set("BwId", $bwId);
    }

    /**
     * BwMax: 带宽峰值
     *
     * @return float|null
     */
    public function getBwMax()
    {
        return $this->get("BwMax");
    }

    /**
     * BwMax: 带宽峰值
     *
     * @param float $bwMax
     */
    public function setBwMax($bwMax)
    {
        $this->set("BwMax", $bwMax);
    }
}
