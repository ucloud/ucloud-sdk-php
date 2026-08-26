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
namespace UCloud\ULogService\Models;

use UCloud\Core\Response\Response;

class LogQueryResult extends Response
{
    

    /**
     * TopicId: 所属日志ID
     *
     * @return string|null
     */
    public function getTopicId()
    {
        return $this->get("TopicId");
    }

    /**
     * TopicId: 所属日志ID
     *
     * @param string $topicId
     */
    public function setTopicId($topicId)
    {
        $this->set("TopicId", $topicId);
    }

    /**
     * TopicName: 所属日志名称
     *
     * @return string|null
     */
    public function getTopicName()
    {
        return $this->get("TopicName");
    }

    /**
     * TopicName: 所属日志名称
     *
     * @param string $topicName
     */
    public function setTopicName($topicName)
    {
        $this->set("TopicName", $topicName);
    }

    /**
     * IsOver: 检索结果是否到底
     *
     * @return boolean|null
     */
    public function getIsOver()
    {
        return $this->get("IsOver");
    }

    /**
     * IsOver: 检索结果是否到底
     *
     * @param boolean $isOver
     */
    public function setIsOver($isOver)
    {
        $this->set("IsOver", $isOver);
    }

    /**
     * Contents: 日志内容
     *
     * @return LogContent|null
     */
    public function getContents()
    {
        return new LogContent($this->get("Contents"));
    }

    /**
     * Contents: 日志内容
     *
     * @param LogContent $contents
     */
    public function setContents(array $contents)
    {
        $this->set("Contents", $contents->getAll());
    }

    /**
     * ScrollId: 滚动检索Id Deprecated
     *
     * @return string|null
     */
    public function getScrollId()
    {
        return $this->get("ScrollId");
    }

    /**
     * ScrollId: 滚动检索Id Deprecated
     *
     * @param string $scrollId
     */
    public function setScrollId($scrollId)
    {
        $this->set("ScrollId", $scrollId);
    }

    /**
     * LastId: 滚动检索,当前页最后一条数据ID
     *
     * @return string|null
     */
    public function getLastId()
    {
        return $this->get("LastId");
    }

    /**
     * LastId: 滚动检索,当前页最后一条数据ID
     *
     * @param string $lastId
     */
    public function setLastId($lastId)
    {
        $this->set("LastId", $lastId);
    }

    /**
     * LastTimestamp: 滚动检索,当前页最后一条数据Timestamp
     *
     * @return string|null
     */
    public function getLastTimestamp()
    {
        return $this->get("LastTimestamp");
    }

    /**
     * LastTimestamp: 滚动检索,当前页最后一条数据Timestamp
     *
     * @param string $lastTimestamp
     */
    public function setLastTimestamp($lastTimestamp)
    {
        $this->set("LastTimestamp", $lastTimestamp);
    }

    /**
     * Columns: 当使用SQL语句查询时，数据通过AnalysisRecords字段返回，Columns字段返回的是字段名和类型
     *
     * @return AnalysisField[]|null
     */
    public function getColumns()
    {
        $items = $this->get("Columns");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new AnalysisField($item));
        }
        return $result;
    }

    /**
     * Columns: 当使用SQL语句查询时，数据通过AnalysisRecords字段返回，Columns字段返回的是字段名和类型
     *
     * @param AnalysisField[] $columns
     */
    public function setColumns(array $columns)
    {
        $result = [];
        foreach ($columns as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * AnalysisRecords: 当使用SQL语句查询时，数据通过该字段返回
     *
     * @return string[]|null
     */
    public function getAnalysisRecords()
    {
        return $this->get("AnalysisRecords");
    }

    /**
     * AnalysisRecords: 当使用SQL语句查询时，数据通过该字段返回
     *
     * @param string[] $analysisRecords
     */
    public function setAnalysisRecords(array $analysisRecords)
    {
        $this->set("AnalysisRecords", $analysisRecords);
    }
}
