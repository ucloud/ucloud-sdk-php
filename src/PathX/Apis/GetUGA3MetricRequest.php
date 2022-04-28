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

class GetUGA3MetricRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetUGA3Metric"]);
        $this->markRequired("ProjectId");
        $this->markRequired("InstanceId");
        $this->markRequired("BeginTime");
        $this->markRequired("EndTime");
    }

    

    /**
     * ProjectId: 项目ID。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * InstanceId: 资源ID
     *
     * @return string|null
     */
    public function getInstanceId()
    {
        return $this->get("InstanceId");
    }

    /**
     * InstanceId: 资源ID
     *
     * @param string $instanceId
     */
    public function setInstanceId($instanceId)
    {
        $this->set("InstanceId", $instanceId);
    }

    /**
     * BeginTime: 查询起始时间，10位长度时间戳
     *
     * @return integer|null
     */
    public function getBeginTime()
    {
        return $this->get("BeginTime");
    }

    /**
     * BeginTime: 查询起始时间，10位长度时间戳
     *
     * @param int $beginTime
     */
    public function setBeginTime($beginTime)
    {
        $this->set("BeginTime", $beginTime);
    }

    /**
     * EndTime: 查询结束时间，10位长度时间戳
     *
     * @return integer|null
     */
    public function getEndTime()
    {
        return $this->get("EndTime");
    }

    /**
     * EndTime: 查询结束时间，10位长度时间戳
     *
     * @param int $endTime
     */
    public function setEndTime($endTime)
    {
        $this->set("EndTime", $endTime);
    }

    /**
     * MetricName: 查询监控的指标项。可不传 NetworkOut:出口总带宽    NetworkIn：入口总带宽 NetworkOutUsage：出口带宽使用率 NetworkInUsage：入口总带宽使用率 NetworkOutSubline ：子线路出口带宽  NetworkInSubline：子线路入口带宽    Delay：线路平均延迟    DelaySubline：子线路延迟  ConnectCount：当前连接数  ConnectCountSubline：子线路当前连接数    DelayPromote：延迟提升   DelayPromoteSubline：子线路延迟提升
     *
     * @return string[]|null
     */
    public function getMetricName()
    {
        return $this->get("MetricName");
    }

    /**
     * MetricName: 查询监控的指标项。可不传 NetworkOut:出口总带宽    NetworkIn：入口总带宽 NetworkOutUsage：出口带宽使用率 NetworkInUsage：入口总带宽使用率 NetworkOutSubline ：子线路出口带宽  NetworkInSubline：子线路入口带宽    Delay：线路平均延迟    DelaySubline：子线路延迟  ConnectCount：当前连接数  ConnectCountSubline：子线路当前连接数    DelayPromote：延迟提升   DelayPromoteSubline：子线路延迟提升
     *
     * @param string[] $metricName
     */
    public function setMetricName(array $metricName)
    {
        $this->set("MetricName", $metricName);
    }

    /**
     * IsSubline: 是否为子线路。为了简化查询,true 会返回所有子线路监控项可以，false:返回所有汇总的监控数据
     *
     * @return boolean|null
     */
    public function getIsSubline()
    {
        return $this->get("IsSubline");
    }

    /**
     * IsSubline: 是否为子线路。为了简化查询,true 会返回所有子线路监控项可以，false:返回所有汇总的监控数据
     *
     * @param boolean $isSubline
     */
    public function setIsSubline($isSubline)
    {
        $this->set("IsSubline", $isSubline);
    }

    /**
     * AreaCode: 子线路AreaCode ,子线路的时候传，不是子线路可以不传
     *
     * @return string|null
     */
    public function getAreaCode()
    {
        return $this->get("AreaCode");
    }

    /**
     * AreaCode: 子线路AreaCode ,子线路的时候传，不是子线路可以不传
     *
     * @param string $areaCode
     */
    public function setAreaCode($areaCode)
    {
        $this->set("AreaCode", $areaCode);
    }
}
