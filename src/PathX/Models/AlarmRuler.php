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
namespace UCloud\PathX\Models;

use UCloud\Core\Response\Response;

class AlarmRuler extends Response
{
    

    /**
     * AlarmStrategy: 收敛策略，可选范围 ['Exponential','Continuous','Once']，分别对应指数递增、连续告警、单次告警
     *
     * @return string|null
     */
    public function getAlarmStrategy(): string
    {
        return $this->get("AlarmStrategy");
    }

    /**
     * AlarmStrategy: 收敛策略，可选范围 ['Exponential','Continuous','Once']，分别对应指数递增、连续告警、单次告警
     *
     * @param string $alarmStrategy
     */
    public function setAlarmStrategy(string $alarmStrategy)
    {
        $this->set("AlarmStrategy", $alarmStrategy);
    }

    /**
     * AlarmFrequency: 告警探测周期，单位秒
     *
     * @return integer|null
     */
    public function getAlarmFrequency(): int
    {
        return $this->get("AlarmFrequency");
    }

    /**
     * AlarmFrequency: 告警探测周期，单位秒
     *
     * @param int $alarmFrequency
     */
    public function setAlarmFrequency(int $alarmFrequency)
    {
        $this->set("AlarmFrequency", $alarmFrequency);
    }

    /**
     * Compare: 比较策略，可选 ['GE','LE']  分别代表不小于和不大于
     *
     * @return string|null
     */
    public function getCompare(): string
    {
        return $this->get("Compare");
    }

    /**
     * Compare: 比较策略，可选 ['GE','LE']  分别代表不小于和不大于
     *
     * @param string $compare
     */
    public function setCompare(string $compare)
    {
        $this->set("Compare", $compare);
    }

    /**
     * ContactGroupId: 联系组ID
     *
     * @return integer|null
     */
    public function getContactGroupId(): int
    {
        return $this->get("ContactGroupId");
    }

    /**
     * ContactGroupId: 联系组ID
     *
     * @param int $contactGroupId
     */
    public function setContactGroupId(int $contactGroupId)
    {
        $this->set("ContactGroupId", $contactGroupId);
    }

    /**
     * MetricName: 告警指标名称, 所有n的个数必须一致。目前仅允许以下四项：UpathNetworkOut:出向带宽，UpathNetworkIn:入向带宽，UpathNetworkOutUsage:出向带宽使用率，UpathNetworkInUsage:入向带宽使用率
     *
     * @return string|null
     */
    public function getMetricName(): string
    {
        return $this->get("MetricName");
    }

    /**
     * MetricName: 告警指标名称, 所有n的个数必须一致。目前仅允许以下四项：UpathNetworkOut:出向带宽，UpathNetworkIn:入向带宽，UpathNetworkOutUsage:出向带宽使用率，UpathNetworkInUsage:入向带宽使用率
     *
     * @param string $metricName
     */
    public function setMetricName(string $metricName)
    {
        $this->set("MetricName", $metricName);
    }

    /**
     * Threshold: 告警阈值，带宽使用率的阈值范围是[50,100]的正整数，带宽告警阈值为1000000的倍数, 如大于2Mbps则告警 阈值应该传 2000000
     *
     * @return integer|null
     */
    public function getThreshold(): int
    {
        return $this->get("Threshold");
    }

    /**
     * Threshold: 告警阈值，带宽使用率的阈值范围是[50,100]的正整数，带宽告警阈值为1000000的倍数, 如大于2Mbps则告警 阈值应该传 2000000
     *
     * @param int $threshold
     */
    public function setThreshold(int $threshold)
    {
        $this->set("Threshold", $threshold);
    }

    /**
     * TriggerCount: 告警触发周期（次数）
     *
     * @return integer|null
     */
    public function getTriggerCount(): int
    {
        return $this->get("TriggerCount");
    }

    /**
     * TriggerCount: 告警触发周期（次数）
     *
     * @param int $triggerCount
     */
    public function setTriggerCount(int $triggerCount)
    {
        $this->set("TriggerCount", $triggerCount);
    }

    /**
     * AlarmTemplateRuleId: 告警模板策略ID
     *
     * @return integer|null
     */
    public function getAlarmTemplateRuleId(): int
    {
        return $this->get("AlarmTemplateRuleId");
    }

    /**
     * AlarmTemplateRuleId: 告警模板策略ID
     *
     * @param int $alarmTemplateRuleId
     */
    public function setAlarmTemplateRuleId(int $alarmTemplateRuleId)
    {
        $this->set("AlarmTemplateRuleId", $alarmTemplateRuleId);
    }

    /**
     * ResourceType: 资源类型
     *
     * @return string|null
     */
    public function getResourceType(): string
    {
        return $this->get("ResourceType");
    }

    /**
     * ResourceType: 资源类型
     *
     * @param string $resourceType
     */
    public function setResourceType(string $resourceType)
    {
        $this->set("ResourceType", $resourceType);
    }
}
