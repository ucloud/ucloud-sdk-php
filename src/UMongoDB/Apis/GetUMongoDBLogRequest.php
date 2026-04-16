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
namespace UCloud\UMongoDB\Apis;

use UCloud\Core\Request\Request;

class GetUMongoDBLogRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetUMongoDBLog"]);
        $this->markRequired("Region");
        $this->markRequired("ClusterId");
        $this->markRequired("NodeId");
        $this->markRequired("Begin");
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
     * ClusterId: 集群id
     *
     * @return string|null
     */
    public function getClusterId()
    {
        return $this->get("ClusterId");
    }

    /**
     * ClusterId: 集群id
     *
     * @param string $clusterId
     */
    public function setClusterId($clusterId)
    {
        $this->set("ClusterId", $clusterId);
    }

    /**
     * NodeId: 节点id, 慢日志 mongos 节点不可选
     *
     * @return string|null
     */
    public function getNodeId()
    {
        return $this->get("NodeId");
    }

    /**
     * NodeId: 节点id, 慢日志 mongos 节点不可选
     *
     * @param string $nodeId
     */
    public function setNodeId($nodeId)
    {
        $this->set("NodeId", $nodeId);
    }

    /**
     * Begin: 查询的日志开始的时间戳（Unix Timestamp）。对于实时查询，这个参数应该是上次轮询请求时的时间戳，后台会返回从该值到当前时间的日志内容
     *
     * @return integer|null
     */
    public function getBegin()
    {
        return $this->get("Begin");
    }

    /**
     * Begin: 查询的日志开始的时间戳（Unix Timestamp）。对于实时查询，这个参数应该是上次轮询请求时的时间戳，后台会返回从该值到当前时间的日志内容
     *
     * @param int $begin
     */
    public function setBegin($begin)
    {
        $this->set("Begin", $begin);
    }

    /**
     * LogType: 日志类型:SlowLog,ErrorLog
     *
     * @return string|null
     */
    public function getLogType()
    {
        return $this->get("LogType");
    }

    /**
     * LogType: 日志类型:SlowLog,ErrorLog
     *
     * @param string $logType
     */
    public function setLogType($logType)
    {
        $this->set("LogType", $logType);
    }

    /**
     * End: 查询日志的结束时间戳(Unix Timestamp），对于实时查询不传该值，与BeginTime的差值不超过24小时：(EndTime-BeginTime) < 24*60*60
     *
     * @return integer|null
     */
    public function getEnd()
    {
        return $this->get("End");
    }

    /**
     * End: 查询日志的结束时间戳(Unix Timestamp），对于实时查询不传该值，与BeginTime的差值不超过24小时：(EndTime-BeginTime) < 24*60*60
     *
     * @param int $end
     */
    public function setEnd($end)
    {
        $this->set("End", $end);
    }
}
