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

class AlertRecord extends Response
{
    

    /**
     * Region: 可用区
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 可用区
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * RecordID: 告警记录RecordID
     *
     * @return integer|null
     */
    public function getRecordID()
    {
        return $this->get("RecordID");
    }

    /**
     * RecordID: 告警记录RecordID
     *
     * @param int $recordID
     */
    public function setRecordID($recordID)
    {
        $this->set("RecordID", $recordID);
    }

    /**
     * ProjectID: 项目ProjectID
     *
     * @return integer|null
     */
    public function getProjectID()
    {
        return $this->get("ProjectID");
    }

    /**
     * ProjectID: 项目ProjectID
     *
     * @param int $projectID
     */
    public function setProjectID($projectID)
    {
        $this->set("ProjectID", $projectID);
    }

    /**
     * StrategyName: 告警记录触发告警策略名称
     *
     * @return string|null
     */
    public function getStrategyName()
    {
        return $this->get("StrategyName");
    }

    /**
     * StrategyName: 告警记录触发告警策略名称
     *
     * @param string $strategyName
     */
    public function setStrategyName($strategyName)
    {
        $this->set("StrategyName", $strategyName);
    }

    /**
     * ProductType: 产品类型
     *
     * @return integer|null
     */
    public function getProductType()
    {
        return $this->get("ProductType");
    }

    /**
     * ProductType: 产品类型
     *
     * @param int $productType
     */
    public function setProductType($productType)
    {
        $this->set("ProductType", $productType);
    }

    /**
     * ProductName: 产品类型名称
     *
     * @return string|null
     */
    public function getProductName()
    {
        return $this->get("ProductName");
    }

    /**
     * ProductName: 产品类型名称
     *
     * @param string $productName
     */
    public function setProductName($productName)
    {
        $this->set("ProductName", $productName);
    }

    /**
     * ResourceID: 资源id
     *
     * @return string|null
     */
    public function getResourceID()
    {
        return $this->get("ResourceID");
    }

    /**
     * ResourceID: 资源id
     *
     * @param string $resourceID
     */
    public function setResourceID($resourceID)
    {
        $this->set("ResourceID", $resourceID);
    }

    /**
     * MetricID: 指标id
     *
     * @return integer|null
     */
    public function getMetricID()
    {
        return $this->get("MetricID");
    }

    /**
     * MetricID: 指标id
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
     * UnitName: 指标单位名称
     *
     * @return string|null
     */
    public function getUnitName()
    {
        return $this->get("UnitName");
    }

    /**
     * UnitName: 指标单位名称
     *
     * @param string $unitName
     */
    public function setUnitName($unitName)
    {
        $this->set("UnitName", $unitName);
    }

    /**
     * StrategyID: 告警记录触发告警策略Id
     *
     * @return integer|null
     */
    public function getStrategyID()
    {
        return $this->get("StrategyID");
    }

    /**
     * StrategyID: 告警记录触发告警策略Id
     *
     * @param int $strategyID
     */
    public function setStrategyID($strategyID)
    {
        $this->set("StrategyID", $strategyID);
    }

    /**
     * RuleID: 告警记录触发告警规则Id
     *
     * @return integer|null
     */
    public function getRuleID()
    {
        return $this->get("RuleID");
    }

    /**
     * RuleID: 告警记录触发告警规则Id
     *
     * @param int $ruleID
     */
    public function setRuleID($ruleID)
    {
        $this->set("RuleID", $ruleID);
    }

    /**
     * Tag: 告警点tag信息
     *
     * @return string[]|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 告警点tag信息
     *
     * @param string[] $tag
     */
    public function setTag(array $tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * Value: 告警当前值
     *
     * @return integer|null
     */
    public function getValue()
    {
        return $this->get("Value");
    }

    /**
     * Value: 告警当前值
     *
     * @param int $value
     */
    public function setValue($value)
    {
        $this->set("Value", $value);
    }

    /**
     * ThresholdCompare: 比较符
     *
     * @return integer|null
     */
    public function getThresholdCompare()
    {
        return $this->get("ThresholdCompare");
    }

    /**
     * ThresholdCompare: 比较符
     *
     * @param int $thresholdCompare
     */
    public function setThresholdCompare($thresholdCompare)
    {
        $this->set("ThresholdCompare", $thresholdCompare);
    }

    /**
     * ThresholdValue: 告警阈值
     *
     * @return integer|null
     */
    public function getThresholdValue()
    {
        return $this->get("ThresholdValue");
    }

    /**
     * ThresholdValue: 告警阈值
     *
     * @param int $thresholdValue
     */
    public function setThresholdValue($thresholdValue)
    {
        $this->set("ThresholdValue", $thresholdValue);
    }

    /**
     * ShieldRuleID: 告警屏蔽规则id(如果配置了屏蔽规则，并且满足条件)
     *
     * @return integer|null
     */
    public function getShieldRuleID()
    {
        return $this->get("ShieldRuleID");
    }

    /**
     * ShieldRuleID: 告警屏蔽规则id(如果配置了屏蔽规则，并且满足条件)
     *
     * @param int $shieldRuleID
     */
    public function setShieldRuleID($shieldRuleID)
    {
        $this->set("ShieldRuleID", $shieldRuleID);
    }

    /**
     * Level: 告警等级
     *
     * @return string|null
     */
    public function getLevel()
    {
        return $this->get("Level");
    }

    /**
     * Level: 告警等级
     *
     * @param string $level
     */
    public function setLevel($level)
    {
        $this->set("Level", $level);
    }

    /**
     * Status: 告警状态
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 告警状态
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * StartAt: 告警触发时间
     *
     * @return integer|null
     */
    public function getStartAt()
    {
        return $this->get("StartAt");
    }

    /**
     * StartAt: 告警触发时间
     *
     * @param int $startAt
     */
    public function setStartAt($startAt)
    {
        $this->set("StartAt", $startAt);
    }

    /**
     * EndAt: 告警结束时间
     *
     * @return integer|null
     */
    public function getEndAt()
    {
        return $this->get("EndAt");
    }

    /**
     * EndAt: 告警结束时间
     *
     * @param int $endAt
     */
    public function setEndAt($endAt)
    {
        $this->set("EndAt", $endAt);
    }

    /**
     * ContentAttrList: 产品相关的额外属性列表
     *
     * @return ContentAttrItem[]|null
     */
    public function getContentAttrList()
    {
        $items = $this->get("ContentAttrList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ContentAttrItem($item));
        }
        return $result;
    }

    /**
     * ContentAttrList: 产品相关的额外属性列表
     *
     * @param ContentAttrItem[] $contentAttrList
     */
    public function setContentAttrList(array $contentAttrList)
    {
        $result = [];
        foreach ($contentAttrList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
