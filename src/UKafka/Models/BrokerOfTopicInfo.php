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
namespace UCloud\UKafka\Models;

use UCloud\Core\Response\Response;

class BrokerOfTopicInfo extends Response
{
    

    /**
     * PartitionOnBroker: topic 在 broker 上分布的 partition 数量
     *
     * @return string|null
     */
    public function getPartitionOnBroker()
    {
        return $this->get("PartitionOnBroker");
    }

    /**
     * PartitionOnBroker: topic 在 broker 上分布的 partition 数量
     *
     * @param string $partitionOnBroker
     */
    public function setPartitionOnBroker($partitionOnBroker)
    {
        $this->set("PartitionOnBroker", $partitionOnBroker);
    }

    /**
     * Partitions: topic 在 broker上 partition 列表
     *
     * @return string|null
     */
    public function getPartitions()
    {
        return $this->get("Partitions");
    }

    /**
     * Partitions: topic 在 broker上 partition 列表
     *
     * @param string $partitions
     */
    public function setPartitions($partitions)
    {
        $this->set("Partitions", $partitions);
    }

    /**
     * Replication: Topic 副本数
     *
     * @return integer|null
     */
    public function getReplication()
    {
        return $this->get("Replication");
    }

    /**
     * Replication: Topic 副本数
     *
     * @param int $replication
     */
    public function setReplication($replication)
    {
        $this->set("Replication", $replication);
    }

    /**
     * TopicName: topic 名称
     *
     * @return string|null
     */
    public function getTopicName()
    {
        return $this->get("TopicName");
    }

    /**
     * TopicName: topic 名称
     *
     * @param string $topicName
     */
    public function setTopicName($topicName)
    {
        $this->set("TopicName", $topicName);
    }

    /**
     * TotalPartitions: partition 数量
     *
     * @return integer|null
     */
    public function getTotalPartitions()
    {
        return $this->get("TotalPartitions");
    }

    /**
     * TotalPartitions: partition 数量
     *
     * @param int $totalPartitions
     */
    public function setTotalPartitions($totalPartitions)
    {
        $this->set("TotalPartitions", $totalPartitions);
    }
}
