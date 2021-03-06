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
namespace UCloud\UDB\Apis;

use UCloud\Core\Request\Request;

class ClearUDBLogRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ClearUDBLog"]);
        $this->markRequired("Region");
        $this->markRequired("DBId");
        $this->markRequired("LogType");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getRegion(): string
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @param string $region
     */
    public function setRegion(string $region)
    {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getZone(): string
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @param string $zone
     */
    public function setZone(string $zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * DBId: DB实例的id,该值可以通过DescribeUDBInstance获取
     *
     * @return string|null
     */
    public function getDBId(): string
    {
        return $this->get("DBId");
    }

    /**
     * DBId: DB实例的id,该值可以通过DescribeUDBInstance获取
     *
     * @param string $dbId
     */
    public function setDBId(string $dbId)
    {
        $this->set("DBId", $dbId);
    }

    /**
     * LogType: 日志类型，10-error（暂不支持）、20-slow（暂不支持 ）、30-binlog
     *
     * @return integer|null
     */
    public function getLogType(): int
    {
        return $this->get("LogType");
    }

    /**
     * LogType: 日志类型，10-error（暂不支持）、20-slow（暂不支持 ）、30-binlog
     *
     * @param int $logType
     */
    public function setLogType(int $logType)
    {
        $this->set("LogType", $logType);
    }

    /**
     * BeforeTime: 删除时间点(至少前一天)之前log，采用时间戳(秒)，默认当 前时间点前一天
     *
     * @return integer|null
     */
    public function getBeforeTime(): int
    {
        return $this->get("BeforeTime");
    }

    /**
     * BeforeTime: 删除时间点(至少前一天)之前log，采用时间戳(秒)，默认当 前时间点前一天
     *
     * @param int $beforeTime
     */
    public function setBeforeTime(int $beforeTime)
    {
        $this->set("BeforeTime", $beforeTime);
    }
}
