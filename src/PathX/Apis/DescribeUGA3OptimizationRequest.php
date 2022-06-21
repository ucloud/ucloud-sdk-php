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
namespace UCloud\PathX\Apis;

use UCloud\Core\Request\Request;

class DescribeUGA3OptimizationRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeUGA3Optimization"]);
        $this->markRequired("AreaCode");
    }

    

    /**
     * ProjectId: 项目ID,如org-xxxx。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID,如org-xxxx。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * AreaCode: 源站AreaCode
     *
     * @return string|null
     */
    public function getAreaCode()
    {
        return $this->get("AreaCode");
    }

    /**
     * AreaCode: 源站AreaCode
     *
     * @param string $areaCode
     */
    public function setAreaCode($areaCode)
    {
        $this->set("AreaCode", $areaCode);
    }

    /**
     * TimeRange: 默认一天 ，枚举类型["Hour","Day","Week"]
     *
     * @return string|null
     */
    public function getTimeRange()
    {
        return $this->get("TimeRange");
    }

    /**
     * TimeRange: 默认一天 ，枚举类型["Hour","Day","Week"]
     *
     * @param string $timeRange
     */
    public function setTimeRange($timeRange)
    {
        $this->set("TimeRange", $timeRange);
    }

    /**
     * AccelerationArea: 加速大区,默认Global,[    "Global":"全球",    "AP":"亚太",    "EU":"欧洲",    "ME":"中东",    "OA":"大洋洲",    "AF":"非洲",    "NA":"北美洲",    "SA":"南美洲"]
     *
     * @return string|null
     */
    public function getAccelerationArea()
    {
        return $this->get("AccelerationArea");
    }

    /**
     * AccelerationArea: 加速大区,默认Global,[    "Global":"全球",    "AP":"亚太",    "EU":"欧洲",    "ME":"中东",    "OA":"大洋洲",    "AF":"非洲",    "NA":"北美洲",    "SA":"南美洲"]
     *
     * @param string $accelerationArea
     */
    public function setAccelerationArea($accelerationArea)
    {
        $this->set("AccelerationArea", $accelerationArea);
    }


}
