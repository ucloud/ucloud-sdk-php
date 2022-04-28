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
namespace UCloud\UPhone\Apis;

use UCloud\Core\Request\Request;
use UCloud\UPhone\Params\SetUPhoneGPSParamUPhoneGPSs;

class SetUPhoneGPSRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "SetUPhoneGPS"]);
        $this->markRequired("CityId");
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
     * CityId: 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *
     * @return string|null
     */
    public function getCityId()
    {
        return $this->get("CityId");
    }

    /**
     * CityId: 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *
     * @param string $cityId
     */
    public function setCityId($cityId)
    {
        $this->set("CityId", $cityId);
    }

    /**
     * UPhoneGPSs:
     *
     * @return SetUPhoneGPSParamUPhoneGPSs[]|null
     */
    public function getUPhoneGPSs()
    {
        $items = $this->get("UPhoneGPSs");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new SetUPhoneGPSParamUPhoneGPSs($item));
        }
        return $result;
    }

    /**
     * UPhoneGPSs:
     *
     * @param SetUPhoneGPSParamUPhoneGPSs[] $uPhoneGPSs
     */
    public function setUPhoneGPSs(array $uPhoneGPSs)
    {
        $result = [];
        foreach ($uPhoneGPSs as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
