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
namespace UCloud\UClickhouse\Models;

use UCloud\Core\Response\Response;

class DescribeUClickhouseClusterResponseData extends Response
{
    

    /**
     * ZookeeperNodes: Zookeeper节点列表，为空时，说明该集群没有zookeeper集群
     *
     * @return ZookeeperNode[]|null
     */
    public function getZookeeperNodes()
    {
        $items = $this->get("ZookeeperNodes");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ZookeeperNode($item));
        }
        return $result;
    }

    /**
     * ZookeeperNodes: Zookeeper节点列表，为空时，说明该集群没有zookeeper集群
     *
     * @param ZookeeperNode[] $zookeeperNodes
     */
    public function setZookeeperNodes(array $zookeeperNodes)
    {
        $result = [];
        foreach ($zookeeperNodes as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * ClickhouseNodes: Clickhouse节点列表
     *
     * @return ClickhouseNode[]|null
     */
    public function getClickhouseNodes()
    {
        $items = $this->get("ClickhouseNodes");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ClickhouseNode($item));
        }
        return $result;
    }

    /**
     * ClickhouseNodes: Clickhouse节点列表
     *
     * @param ClickhouseNode[] $clickhouseNodes
     */
    public function setClickhouseNodes(array $clickhouseNodes)
    {
        $result = [];
        foreach ($clickhouseNodes as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Payment: 支付信息
     *
     * @return Payment|null
     */
    public function getPayment()
    {
        return new Payment($this->get("Payment"));
    }

    /**
     * Payment: 支付信息
     *
     * @param Payment $payment
     */
    public function setPayment(array $payment)
    {
        $this->set("Payment", $payment->getAll());
    }

    /**
     * Cluster: 集群信息
     *
     * @return ClickhouseCluster|null
     */
    public function getCluster()
    {
        return new ClickhouseCluster($this->get("Cluster"));
    }

    /**
     * Cluster: 集群信息
     *
     * @param ClickhouseCluster $cluster
     */
    public function setCluster(array $cluster)
    {
        $this->set("Cluster", $cluster->getAll());
    }
}
