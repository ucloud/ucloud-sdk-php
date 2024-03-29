<?php
/**
 * Copyright 2022 UCloud Technology Co., Ltd.
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
namespace UCloud\UK8S\Apis;

use UCloud\Core\Response\Response;
use UCloud\UK8S\Models\ClusterSet;

class ListUK8SClusterV2Response extends Response
{
    

    /**
     * ClusterCount: 满足条件的集群数量
     *
     * @return integer|null
     */
    public function getClusterCount()
    {
        return $this->get("ClusterCount");
    }

    /**
     * ClusterCount: 满足条件的集群数量
     *
     * @param int $clusterCount
     */
    public function setClusterCount($clusterCount)
    {
        $this->set("ClusterCount", $clusterCount);
    }

    /**
     * ClusterSet: 集群信息，具体参考ClusterSet
     *
     * @return ClusterSet[]|null
     */
    public function getClusterSet()
    {
        $items = $this->get("ClusterSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ClusterSet($item));
        }
        return $result;
    }

    /**
     * ClusterSet: 集群信息，具体参考ClusterSet
     *
     * @param ClusterSet[] $clusterSet
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
