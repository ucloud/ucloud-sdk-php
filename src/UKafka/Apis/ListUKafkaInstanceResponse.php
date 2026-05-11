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
use UCloud\UKafka\Models\ClusterSet;

class ListUKafkaInstanceResponse extends Response
{
    

    /**
     * ClusterSet: 实例信息
     *
     * @return ClusterSet|null
     */
    public function getClusterSet()
    {
        return new ClusterSet($this->get("ClusterSet"));
    }

    /**
     * ClusterSet: 实例信息
     *
     * @param ClusterSet $clusterSet
     */
    public function setClusterSet(array $clusterSet)
    {
        $this->set("ClusterSet", $clusterSet->getAll());
    }

    /**
     * TotalCount: 总数
     *
     * @return string|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 总数
     *
     * @param string $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }
}
