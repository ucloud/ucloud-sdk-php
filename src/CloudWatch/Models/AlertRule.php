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
namespace UCloud\CloudWatch\Models;

use UCloud\Core\Response\Response;

class AlertRule extends Response
{
    

    /**
     * RuleID: 规则ID
     *
     * @return integer|null
     */
    public function getRuleID()
    {
        return $this->get("RuleID");
    }

    /**
     * RuleID: 规则ID
     *
     * @param int $ruleID
     */
    public function setRuleID($ruleID)
    {
        $this->set("RuleID", $ruleID);
    }

    /**
     * MetricID: 规则指标ID。参考该类型产品下返回的指标列表GetProductMetrics
     *
     * @return integer|null
     */
    public function getMetricID()
    {
        return $this->get("MetricID");
    }

    /**
     * MetricID: 规则指标ID。参考该类型产品下返回的指标列表GetProductMetrics
     *
     * @param int $metricID
     */
    public function setMetricID($metricID)
    {
        $this->set("MetricID", $metricID);
    }

    /**
     * MetricName: 指标名称
     *
     * @return string|null
     */
    public function getMetricName()
    {
        return $this->get("MetricName");
    }

    /**
     * MetricName: 指标名称
     *
     * @param string $metricName
     */
    public function setMetricName($metricName)
    {
        $this->set("MetricName", $metricName);
    }

    /**
     * ThresholdCompare: 阈值比较方式枚举值比较方式:1->=2-<=3->4-<5-==6-!=
     *
     * @return integer|null
     */
    public function getThresholdCompare()
    {
        return $this->get("ThresholdCompare");
    }

    /**
     * ThresholdCompare: 阈值比较方式枚举值比较方式:1->=2-<=3->4-<5-==6-!=
     *
     * @param int $thresholdCompare
     */
    public function setThresholdCompare($thresholdCompare)
    {
        $this->set("ThresholdCompare", $thresholdCompare);
    }

    /**
     * ThresholdValue: 触发阈值
     *
     * @return float|null
     */
    public function getThresholdValue()
    {
        return $this->get("ThresholdValue");
    }

    /**
     * ThresholdValue: 触发阈值
     *
     * @param float $thresholdValue
     */
    public function setThresholdValue($thresholdValue)
    {
        $this->set("ThresholdValue", $thresholdValue);
    }

    /**
     * TriggerCount: 触发次数
     *
     * @return integer|null
     */
    public function getTriggerCount()
    {
        return $this->get("TriggerCount");
    }

    /**
     * TriggerCount: 触发次数
     *
     * @param int $triggerCount
     */
    public function setTriggerCount($triggerCount)
    {
        $this->set("TriggerCount", $triggerCount);
    }

    /**
     * SendPeriodType: 触发周期。枚举值：continuous连续 exponent 指数 single 不重复
     *
     * @return string|null
     */
    public function getSendPeriodType()
    {
        return $this->get("SendPeriodType");
    }

    /**
     * SendPeriodType: 触发周期。枚举值：continuous连续 exponent 指数 single 不重复
     *
     * @param string $sendPeriodType
     */
    public function setSendPeriodType($sendPeriodType)
    {
        $this->set("SendPeriodType", $sendPeriodType);
    }

    /**
     * SendInterval: 发送间隔
     *
     * @return integer|null
     */
    public function getSendInterval()
    {
        return $this->get("SendInterval");
    }

    /**
     * SendInterval: 发送间隔
     *
     * @param int $sendInterval
     */
    public function setSendInterval($sendInterval)
    {
        $this->set("SendInterval", $sendInterval);
    }

    /**
     * Level: 告警等级。枚举值：P0,P1,P2,P3
     *
     * @return string|null
     */
    public function getLevel()
    {
        return $this->get("Level");
    }

    /**
     * Level: 告警等级。枚举值：P0,P1,P2,P3
     *
     * @param string $level
     */
    public function setLevel($level)
    {
        $this->set("Level", $level);
    }

    /**
     * Status: 告警状态。枚举值：0-关闭 1-开启
     *
     * @return integer|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 告警状态。枚举值：0-关闭 1-开启
     *
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * UnitID: 单位id
     *
     * @return integer|null
     */
    public function getUnitID()
    {
        return $this->get("UnitID");
    }

    /**
     * UnitID: 单位id
     *
     * @param int $unitID
     */
    public function setUnitID($unitID)
    {
        $this->set("UnitID", $unitID);
    }

    /**
     * UnitName: 单位名称
     *
     * @return string|null
     */
    public function getUnitName()
    {
        return $this->get("UnitName");
    }

    /**
     * UnitName: 单位名称
     *
     * @param string $unitName
     */
    public function setUnitName($unitName)
    {
        $this->set("UnitName", $unitName);
    }
}
