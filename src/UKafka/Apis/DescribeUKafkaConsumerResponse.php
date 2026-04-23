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

class DescribeUKafkaConsumerResponse extends Response
{
    

    /**
     * GroupName: 消费者组组名
     *
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->get("GroupName");
    }

    /**
     * GroupName: 消费者组组名
     *
     * @param string $groupName
     */
    public function setGroupName($groupName)
    {
        $this->set("GroupName", $groupName);
    }

    /**
     * Type: 消费者组类型
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 消费者组类型
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * Topics: 消费者组所订阅 topic 信息
     *
     * @return string|null
     */
    public function getTopics()
    {
        return $this->get("Topics");
    }

    /**
     * Topics: 消费者组所订阅 topic 信息
     *
     * @param string $topics
     */
    public function setTopics($topics)
    {
        $this->set("Topics", $topics);
    }
}
