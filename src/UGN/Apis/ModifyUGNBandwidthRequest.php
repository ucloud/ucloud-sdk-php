<?php
/**
 * Copyright 2023 UCloud Technology Co., Ltd.
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
namespace UCloud\UGN\Apis;

use UCloud\Core\Request\Request;

class ModifyUGNBandwidthRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ModifyUGNBandwidth"]);
        $this->markRequired("PackageID");
        $this->markRequired("UGNID");
        $this->markRequired("BandWidth");
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
     * PackageID: 带宽包id
     *
     * @return string|null
     */
    public function getPackageID()
    {
        return $this->get("PackageID");
    }

    /**
     * PackageID: 带宽包id
     *
     * @param string $packageID
     */
    public function setPackageID($packageID)
    {
        $this->set("PackageID", $packageID);
    }

    /**
     * UGNID: 云联网id
     *
     * @return string|null
     */
    public function getUGNID()
    {
        return $this->get("UGNID");
    }

    /**
     * UGNID: 云联网id
     *
     * @param string $ugnid
     */
    public function setUGNID($ugnid)
    {
        $this->set("UGNID", $ugnid);
    }

    /**
     * BandWidth: 带宽值
     *
     * @return integer|null
     */
    public function getBandWidth()
    {
        return $this->get("BandWidth");
    }

    /**
     * BandWidth: 带宽值
     *
     * @param int $bandWidth
     */
    public function setBandWidth($bandWidth)
    {
        $this->set("BandWidth", $bandWidth);
    }
}
