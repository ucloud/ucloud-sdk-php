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
namespace UCloud\CloudWatch\Apis;

use UCloud\Core\Request\Request;
use UCloud\CloudWatch\Params\QueryMetricDenseDataParamMetricInfos;
use UCloud\CloudWatch\Params\QueryMetricDenseDataParamMetricInfosTags;

class QueryMetricDenseDataRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "QueryMetricDenseData"]);
        $this->markRequired("ProductKey");
        $this->markRequired("StartTime");
        $this->markRequired("EndTime");
    }

    

    /**
     * Region: 地域。 全局产品可不传，其他类型必传。
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 全局产品可不传，其他类型必传。
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * ProjectId: 项目ID
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * ProductKey: 资源类型
     *
     * @return string|null
     */
    public function getProductKey()
    {
        return $this->get("ProductKey");
    }

    /**
     * ProductKey: 资源类型
     *
     * @param string $productKey
     */
    public function setProductKey($productKey)
    {
        $this->set("ProductKey", $productKey);
    }

    /**
     * StartTime: 开始时间戳
     *
     * @return integer|null
     */
    public function getStartTime()
    {
        return $this->get("StartTime");
    }

    /**
     * StartTime: 开始时间戳
     *
     * @param int $startTime
     */
    public function setStartTime($startTime)
    {
        $this->set("StartTime", $startTime);
    }

    /**
     * EndTime: 截止时间戳
     *
     * @return integer|null
     */
    public function getEndTime()
    {
        return $this->get("EndTime");
    }

    /**
     * EndTime: 截止时间戳
     *
     * @param int $endTime
     */
    public function setEndTime($endTime)
    {
        $this->set("EndTime", $endTime);
    }

    /**
     * MetricInfos:
     *
     * @return QueryMetricDenseDataParamMetricInfos[]|null
     */
    public function getMetricInfos()
    {
        $items = $this->get("MetricInfos");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new QueryMetricDenseDataParamMetricInfos($item));
        }
        return $result;
    }

    /**
     * MetricInfos:
     *
     * @param QueryMetricDenseDataParamMetricInfos[] $metricInfos
     */
    public function setMetricInfos(array $metricInfos)
    {
        $result = [];
        foreach ($metricInfos as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
