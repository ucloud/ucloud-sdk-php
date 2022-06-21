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
namespace UCloud\UDB\Apis;

use UCloud\Core\Request\Request;

class DescribeUDBInstanceBinlogRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeUDBInstanceBinlog"]);
        $this->markRequired("Region");
        $this->markRequired("DBId");
        $this->markRequired("BeginTime");
        $this->markRequired("EndTime");
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
     * DBId: DB实例Id
     *
     * @return string|null
     */
    public function getDBId()
    {
        return $this->get("DBId");
    }

    /**
     * DBId: DB实例Id
     *
     * @param string $dbId
     */
    public function setDBId($dbId)
    {
        $this->set("DBId", $dbId);
    }

    /**
     * BeginTime: 过滤条件:起始时间(时间戳)
     *
     * @return int|null
     */
    public function getBeginTime()
    {
        return $this->get("BeginTime");
    }

    /**
     * BeginTime: 过滤条件:起始时间(时间戳)
     *
     * @param int $beginTime
     */
    public function setBeginTime($beginTime)
    {
        $this->set("BeginTime", $beginTime);
    }

    /**
     * EndTime: 过滤条件:结束时间(时间戳)
     *
     * @return int|null
     */
    public function getEndTime()
    {
        return $this->get("EndTime");
    }

    /**
     * EndTime: 过滤条件:结束时间(时间戳)
     *
     * @param int $endTime
     */
    public function setEndTime($endTime)
    {
        $this->set("EndTime", $endTime);
    }


}
