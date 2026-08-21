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

class QueryMetricDataRespItem extends Response
{
    

    /**
     * Metric: 指标名
     *
     * @return string|null
     */
    public function getMetric()
    {
        return $this->get("Metric");
    }

    /**
     * Metric: 指标名
     *
     * @param string $metric
     */
    public function setMetric($metric)
    {
        $this->set("Metric", $metric);
    }

    /**
     * ErrCode: 该指标查询的处理状态码
     *
     * @return integer|null
     */
    public function getErrCode()
    {
        return $this->get("ErrCode");
    }

    /**
     * ErrCode: 该指标查询的处理状态码
     *
     * @param int $errCode
     */
    public function setErrCode($errCode)
    {
        $this->set("ErrCode", $errCode);
    }

    /**
     * ErrMsg: 该指标查询的状态说明
     *
     * @return string|null
     */
    public function getErrMsg()
    {
        return $this->get("ErrMsg");
    }

    /**
     * ErrMsg: 该指标查询的状态说明
     *
     * @param string $errMsg
     */
    public function setErrMsg($errMsg)
    {
        $this->set("ErrMsg", $errMsg);
    }

    /**
     * TagEntries: 标签列表。每项为 TagEntry：TagName（标签名）和 KeyList（该标签的全部候选值）。
     *
     * @return ObjectType[]|null
     */
    public function getTagEntries()
    {
        $items = $this->get("TagEntries");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ObjectType($item));
        }
        return $result;
    }

    /**
     * TagEntries: 标签列表。每项为 TagEntry：TagName（标签名）和 KeyList（该标签的全部候选值）。
     *
     * @param ObjectType[] $tagEntries
     */
    public function setTagEntries(array $tagEntries)
    {
        $result = [];
        foreach ($tagEntries as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Results: 查询到的时间序列列表
     *
     * @return MetricResult[]|null
     */
    public function getResults()
    {
        $items = $this->get("Results");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new MetricResult($item));
        }
        return $result;
    }

    /**
     * Results: 查询到的时间序列列表
     *
     * @param MetricResult[] $results
     */
    public function setResults(array $results)
    {
        $result = [];
        foreach ($results as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
