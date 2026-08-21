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

class Metirc extends Response
{
    

    /**
     * ProductType: 云产品ID
     *
     * @return integer|null
     */
    public function getProductType()
    {
        return $this->get("ProductType");
    }

    /**
     * ProductType: 云产品ID
     *
     * @param int $productType
     */
    public function setProductType($productType)
    {
        $this->set("ProductType", $productType);
    }

    /**
     * UnitID: 单位ID
     *
     * @return integer|null
     */
    public function getUnitID()
    {
        return $this->get("UnitID");
    }

    /**
     * UnitID: 单位ID
     *
     * @param int $unitID
     */
    public function setUnitID($unitID)
    {
        $this->set("UnitID", $unitID);
    }

    /**
     * MetricID: 指标ID
     *
     * @return integer|null
     */
    public function getMetricID()
    {
        return $this->get("MetricID");
    }

    /**
     * MetricID: 指标ID
     *
     * @param int $metricID
     */
    public function setMetricID($metricID)
    {
        $this->set("MetricID", $metricID);
    }

    /**
     * Metric: 指标唯一标识 (uhost_cpu_usage)
     *
     * @return string|null
     */
    public function getMetric()
    {
        return $this->get("Metric");
    }

    /**
     * Metric: 指标唯一标识 (uhost_cpu_usage)
     *
     * @param string $metric
     */
    public function setMetric($metric)
    {
        $this->set("Metric", $metric);
    }

    /**
     * MetricEnName: 指标英文名称
     *
     * @return string|null
     */
    public function getMetricEnName()
    {
        return $this->get("MetricEnName");
    }

    /**
     * MetricEnName: 指标英文名称
     *
     * @param string $metricEnName
     */
    public function setMetricEnName($metricEnName)
    {
        $this->set("MetricEnName", $metricEnName);
    }

    /**
     * MetricChName: 指标中文名称
     *
     * @return string|null
     */
    public function getMetricChName()
    {
        return $this->get("MetricChName");
    }

    /**
     * MetricChName: 指标中文名称
     *
     * @param string $metricChName
     */
    public function setMetricChName($metricChName)
    {
        $this->set("MetricChName", $metricChName);
    }

    /**
     * MetricEnDesc: 指标英文描述
     *
     * @return string|null
     */
    public function getMetricEnDesc()
    {
        return $this->get("MetricEnDesc");
    }

    /**
     * MetricEnDesc: 指标英文描述
     *
     * @param string $metricEnDesc
     */
    public function setMetricEnDesc($metricEnDesc)
    {
        $this->set("MetricEnDesc", $metricEnDesc);
    }

    /**
     * MetricChDesc: 指标中文描述
     *
     * @return string|null
     */
    public function getMetricChDesc()
    {
        return $this->get("MetricChDesc");
    }

    /**
     * MetricChDesc: 指标中文描述
     *
     * @param string $metricChDesc
     */
    public function setMetricChDesc($metricChDesc)
    {
        $this->set("MetricChDesc", $metricChDesc);
    }

    /**
     * MetricGroup: 指标分类/指标组
     *
     * @return string|null
     */
    public function getMetricGroup()
    {
        return $this->get("MetricGroup");
    }

    /**
     * MetricGroup: 指标分类/指标组
     *
     * @param string $metricGroup
     */
    public function setMetricGroup($metricGroup)
    {
        $this->set("MetricGroup", $metricGroup);
    }

    /**
     * FrequencyMs: 上报频率毫秒
     *
     * @return integer|null
     */
    public function getFrequencyMs()
    {
        return $this->get("FrequencyMs");
    }

    /**
     * FrequencyMs: 上报频率毫秒
     *
     * @param int $frequencyMs
     */
    public function setFrequencyMs($frequencyMs)
    {
        $this->set("FrequencyMs", $frequencyMs);
    }

    /**
     * Unit: 单位
     *
     * @return MetricUnit|null
     */
    public function getUnit()
    {
        return new MetricUnit($this->get("Unit"));
    }

    /**
     * Unit: 单位
     *
     * @param MetricUnit $unit
     */
    public function setUnit(array $unit)
    {
        $this->set("Unit", $unit->getAll());
    }

    /**
     * CreatedBy: 创建者
     *
     * @return string|null
     */
    public function getCreatedBy()
    {
        return $this->get("CreatedBy");
    }

    /**
     * CreatedBy: 创建者
     *
     * @param string $createdBy
     */
    public function setCreatedBy($createdBy)
    {
        $this->set("CreatedBy", $createdBy);
    }

    /**
     * CreatedAt: 创建时间
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->get("CreatedAt");
    }

    /**
     * CreatedAt: 创建时间
     *
     * @param string $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->set("CreatedAt", $createdAt);
    }

    /**
     * UpdatedBy: 修改者
     *
     * @return string|null
     */
    public function getUpdatedBy()
    {
        return $this->get("UpdatedBy");
    }

    /**
     * UpdatedBy: 修改者
     *
     * @param string $updatedBy
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->set("UpdatedBy", $updatedBy);
    }

    /**
     * UpdatedAt: 修改时间
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->get("UpdatedAt");
    }

    /**
     * UpdatedAt: 修改时间
     *
     * @param string $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->set("UpdatedAt", $updatedAt);
    }
}
