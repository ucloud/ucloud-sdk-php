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
namespace UCloud\UKafka\Apis;

use UCloud\Core\Response\Response;
use UCloud\UKafka\Models\TopicInfo;

class ListUKafkaTopicsResponse extends Response
{
    

    /**
     * TopicList: topic 信息列表
     *
     * @return TopicInfo[]|null
     */
    public function getTopicList()
    {
        $items = $this->get("TopicList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new TopicInfo($item));
        }
        return $result;
    }

    /**
     * TopicList: topic 信息列表
     *
     * @param TopicInfo[] $topicList
     */
    public function setTopicList(array $topicList)
    {
        $result = [];
        foreach ($topicList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Length: 列表长度
     *
     * @return integer|null
     */
    public function getLength()
    {
        return $this->get("Length");
    }

    /**
     * Length: 列表长度
     *
     * @param int $length
     */
    public function setLength($length)
    {
        $this->set("Length", $length);
    }
}
