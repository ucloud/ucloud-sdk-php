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

class ModifyUPathTemplateRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ModifyUPathTemplate"]);
        $this->markRequired("ProjectId");
        $this->markRequired("UPathId");
    }

    

    /**
     * ProjectId: 项目ID。请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * UPathId: 加速线路实例ID
     *
     * @return string|null
     */
    public function getUPathId()
    {
        return $this->get("UPathId");
    }

    /**
     * UPathId: 加速线路实例ID
     *
     * @param string $uPathId
     */
    public function setUPathId($uPathId)
    {
        $this->set("UPathId", $uPathId);
    }

    /**
     * MetricName: 告警指标名称, 所有n的个数必须一致。目前仅允许以下四项：UpathNetworkOut:出向带宽，UpathNetworkIn:入向带宽，UpathNetworkOutUsage:出向带宽使用率，UpathNetworkInUsage:入向带宽使用率
     *
     * @return string[]|null
     */
    public function getMetricName()
    {
        return $this->get("MetricName");
    }

    /**
     * MetricName: 告警指标名称, 所有n的个数必须一致。目前仅允许以下四项：UpathNetworkOut:出向带宽，UpathNetworkIn:入向带宽，UpathNetworkOutUsage:出向带宽使用率，UpathNetworkInUsage:入向带宽使用率
     *
     * @param string[] $metricName
     */
    public function setMetricName(array $metricName)
    {
        $this->set("MetricName", $metricName);
    }

    /**
     * Threshold: 告警阈值，带宽使用率的阈值范围是[50,100]的正整数，带宽告警阈值为1000000的倍数, 如大于2Mbps则告警 阈值应该传 2000000
     *
     * @return int[]|null
     */
    public function getThreshold()
    {
        return $this->get("Threshold");
    }

    /**
     * Threshold: 告警阈值，带宽使用率的阈值范围是[50,100]的正整数，带宽告警阈值为1000000的倍数, 如大于2Mbps则告警 阈值应该传 2000000
     *
     * @param int[] $threshold
     */
    public function setThreshold(array $threshold)
    {
        $this->set("Threshold", $threshold);
    }

    /**
     * AlarmFrequency: 告警探测周期，单位：秒
     *
     * @return int[]|null
     */
    public function getAlarmFrequency()
    {
        return $this->get("AlarmFrequency");
    }

    /**
     * AlarmFrequency: 告警探测周期，单位：秒
     *
     * @param int[] $alarmFrequency
     */
    public function setAlarmFrequency(array $alarmFrequency)
    {
        $this->set("AlarmFrequency", $alarmFrequency);
    }

    /**
     * ContactGroupId: 告警组id
     *
     * @return int[]|null
     */
    public function getContactGroupId()
    {
        return $this->get("ContactGroupId");
    }

    /**
     * ContactGroupId: 告警组id
     *
     * @param int[] $contactGroupId
     */
    public function setContactGroupId(array $contactGroupId)
    {
        $this->set("ContactGroupId", $contactGroupId);
    }

    /**
     * Compare: 比较策略，可选 ['GE','LE']  分别代表不小于和不大于
     *
     * @return string[]|null
     */
    public function getCompare()
    {
        return $this->get("Compare");
    }

    /**
     * Compare: 比较策略，可选 ['GE','LE']  分别代表不小于和不大于
     *
     * @param string[] $compare
     */
    public function setCompare(array $compare)
    {
        $this->set("Compare", $compare);
    }

    /**
     * AlarmStrategy: 收敛策略，可选范围 ['Exponential','Continuous','Once']，分别对应指数递增、连续告警、单次告警
     *
     * @return string[]|null
     */
    public function getAlarmStrategy()
    {
        return $this->get("AlarmStrategy");
    }

    /**
     * AlarmStrategy: 收敛策略，可选范围 ['Exponential','Continuous','Once']，分别对应指数递增、连续告警、单次告警
     *
     * @param string[] $alarmStrategy
     */
    public function setAlarmStrategy(array $alarmStrategy)
    {
        $this->set("AlarmStrategy", $alarmStrategy);
    }

    /**
     * TriggerCount: 告警触发周期（次数）
     *
     * @return int[]|null
     */
    public function getTriggerCount()
    {
        return $this->get("TriggerCount");
    }

    /**
     * TriggerCount: 告警触发周期（次数）
     *
     * @param int[] $triggerCount
     */
    public function setTriggerCount(array $triggerCount)
    {
        $this->set("TriggerCount", $triggerCount);
    }
}
