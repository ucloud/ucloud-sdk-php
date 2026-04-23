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
use UCloud\UKafka\Models\ClusterInfo;
use UCloud\UKafka\Models\Broker;
use UCloud\UKafka\Models\Endpoints;
use UCloud\UKafka\Models\Url;
use UCloud\UKafka\Models\Url;
use UCloud\UKafka\Models\BrokerOfTopicInfo;
use UCloud\UKafka\Models\IP;
use UCloud\UKafka\Models\UHostConfig;

class DescribeUKafkaInstanceResponse extends Response
{
    

    /**
     * ClusterSet: 集群信息列表
     *
     * @return ClusterInfo[]|null
     */
    public function getClusterSet()
    {
        $items = $this->get("ClusterSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ClusterInfo($item));
        }
        return $result;
    }

    /**
     * ClusterSet: 集群信息列表
     *
     * @param ClusterInfo[] $clusterSet
     */
    public function setClusterSet(array $clusterSet)
    {
        $result = [];
        foreach ($clusterSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
