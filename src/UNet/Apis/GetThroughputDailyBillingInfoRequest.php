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
namespace UCloud\UNet\Apis;

use UCloud\Core\Request\Request;

class GetThroughputDailyBillingInfoRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetThroughputDailyBillingInfo"]);
        $this->markRequired("Region");
        $this->markRequired("EIPId");
        $this->markRequired("StartTime");
        $this->markRequired("EndTime");
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
     * EIPId: EIP的资源ID
     *
     * @return string|null
     */
    public function getEIPId()
    {
        return $this->get("EIPId");
    }

    /**
     * EIPId: EIP的资源ID
     *
     * @param string $eipId
     */
    public function setEIPId($eipId)
    {
        $this->set("EIPId", $eipId);
    }

    /**
     * StartTime: 查询开始时间时间戳
     *
     * @return integer|null
     */
    public function getStartTime()
    {
        return $this->get("StartTime");
    }

    /**
     * StartTime: 查询开始时间时间戳
     *
     * @param int $startTime
     */
    public function setStartTime($startTime)
    {
        $this->set("StartTime", $startTime);
    }

    /**
     * EndTime: 查询结束时间时间戳
     *
     * @return integer|null
     */
    public function getEndTime()
    {
        return $this->get("EndTime");
    }

    /**
     * EndTime: 查询结束时间时间戳
     *
     * @param int $endTime
     */
    public function setEndTime($endTime)
    {
        $this->set("EndTime", $endTime);
    }
}
