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

class DescribeUDBInstanceLogRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeUDBInstanceLog"]);
        $this->markRequired("Region");
        $this->markRequired("DBId");
        $this->markRequired("BeginTime");
        $this->markRequired("EndTime");
        $this->markRequired("LogType");
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
    public function setRegion(string $region)
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
    public function setZone(string $zone)
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
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }
    /**
     * DBId: 实例ID
     *
     * @return string|null
     */
    public function getDBId()
    {
        return $this->get("DBId");
    }

    /**
     * DBId: 实例ID
     *
     * @param string $dbId
     */
    public function setDBId(string $dbId)
    {
        $this->set("DBId", $dbId);
    }
    /**
     * BeginTime: 查询的日志开始的时间戳（Unix Timestamp）。对于实时查询，这个参数应该是上次轮询请求时的时间戳，后台会返回从该值到当前时间的日志内容。
     *
     * @return integer|null
     */
    public function getBeginTime()
    {
        return $this->get("BeginTime");
    }

    /**
     * BeginTime: 查询的日志开始的时间戳（Unix Timestamp）。对于实时查询，这个参数应该是上次轮询请求时的时间戳，后台会返回从该值到当前时间的日志内容。
     *
     * @param int $beginTime
     */
    public function setBeginTime(int $beginTime)
    {
        $this->set("BeginTime", $beginTime);
    }
    /**
     * EndTime: 查询日志的结束时间戳(Unix Timestamp），对于实时查询不传该值，与BeginTime的差值不超过24小时：(EndTime-BeginTime) < 24*60*60
     *
     * @return integer|null
     */
    public function getEndTime()
    {
        return $this->get("EndTime");
    }

    /**
     * EndTime: 查询日志的结束时间戳(Unix Timestamp），对于实时查询不传该值，与BeginTime的差值不超过24小时：(EndTime-BeginTime) < 24*60*60
     *
     * @param int $endTime
     */
    public function setEndTime(int $endTime)
    {
        $this->set("EndTime", $endTime);
    }
    /**
     * LogType: 查询日志的类型error：错误日志；slow：慢日志
     *
     * @return string|null
     */
    public function getLogType()
    {
        return $this->get("LogType");
    }

    /**
     * LogType: 查询日志的类型error：错误日志；slow：慢日志
     *
     * @param string $logType
     */
    public function setLogType(string $logType)
    {
        $this->set("LogType", $logType);
    }
}
