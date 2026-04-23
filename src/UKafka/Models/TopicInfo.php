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

class TopicInfo extends Response
{
    

    /**
     * Topic: topic 名称
     *
     * @return string|null
     */
    public function getTopic()
    {
        return $this->get("Topic");
    }

    /**
     * Topic: topic 名称
     *
     * @param string $topic
     */
    public function setTopic($topic)
    {
        $this->set("Topic", $topic);
    }

    /**
     * NumOfPartition: 分区数量
     *
     * @return integer|null
     */
    public function getNumOfPartition()
    {
        return $this->get("NumOfPartition");
    }

    /**
     * NumOfPartition: 分区数量
     *
     * @param int $numOfPartition
     */
    public function setNumOfPartition($numOfPartition)
    {
        $this->set("NumOfPartition", $numOfPartition);
    }

    /**
     * NumOfOccupyBroker: 占用 broker 数量
     *
     * @return integer|null
     */
    public function getNumOfOccupyBroker()
    {
        return $this->get("NumOfOccupyBroker");
    }

    /**
     * NumOfOccupyBroker: 占用 broker 数量
     *
     * @param int $numOfOccupyBroker
     */
    public function setNumOfOccupyBroker($numOfOccupyBroker)
    {
        $this->set("NumOfOccupyBroker", $numOfOccupyBroker);
    }

    /**
     * NumOfReplica: 副本数量
     *
     * @return integer|null
     */
    public function getNumOfReplica()
    {
        return $this->get("NumOfReplica");
    }

    /**
     * NumOfReplica: 副本数量
     *
     * @param int $numOfReplica
     */
    public function setNumOfReplica($numOfReplica)
    {
        $this->set("NumOfReplica", $numOfReplica);
    }

    /**
     * UnderReplicasPer: 落后副本占比
     *
     * @return float|null
     */
    public function getUnderReplicasPer()
    {
        return $this->get("UnderReplicasPer");
    }

    /**
     * UnderReplicasPer: 落后副本占比
     *
     * @param float $underReplicasPer
     */
    public function setUnderReplicasPer($underReplicasPer)
    {
        $this->set("UnderReplicasPer", $underReplicasPer);
    }

    /**
     * Status: topic 状态
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: topic 状态
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }
}
