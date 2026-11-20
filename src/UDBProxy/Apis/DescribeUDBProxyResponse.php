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
namespace UCloud\UDBProxy\Apis;

use UCloud\Core\Response\Response;
use UCloud\UDBProxy\Models\Replica;
use UCloud\UDBProxy\Models\Node;
use UCloud\UDBProxy\Models\PrivateDomainInfo;

class DescribeUDBProxyResponse extends Response
{
    

    /**
     * UDBProxyID: UDBProxy实例ID
     *
     * @return string|null
     */
    public function getUDBProxyID()
    {
        return $this->get("UDBProxyID");
    }

    /**
     * UDBProxyID: UDBProxy实例ID
     *
     * @param string $udbProxyID
     */
    public function setUDBProxyID($udbProxyID)
    {
        $this->set("UDBProxyID", $udbProxyID);
    }

    /**
     * UDBProxyIP: UDB代理服务IP
     *
     * @return string|null
     */
    public function getUDBProxyIP()
    {
        return $this->get("UDBProxyIP");
    }

    /**
     * UDBProxyIP: UDB代理服务IP
     *
     * @param string $udbProxyIP
     */
    public function setUDBProxyIP($udbProxyIP)
    {
        $this->set("UDBProxyIP", $udbProxyIP);
    }

    /**
     * UDBProxyPort: UDB代理服务端口
     *
     * @return integer|null
     */
    public function getUDBProxyPort()
    {
        return $this->get("UDBProxyPort");
    }

    /**
     * UDBProxyPort: UDB代理服务端口
     *
     * @param int $udbProxyPort
     */
    public function setUDBProxyPort($udbProxyPort)
    {
        $this->set("UDBProxyPort", $udbProxyPort);
    }

    /**
     * State: 状态
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 状态
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }

    /**
     * CreateTime: 创建时间
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * ModifyTime: 修改时间
     *
     * @return integer|null
     */
    public function getModifyTime()
    {
        return $this->get("ModifyTime");
    }

    /**
     * ModifyTime: 修改时间
     *
     * @param int $modifyTime
     */
    public function setModifyTime($modifyTime)
    {
        $this->set("ModifyTime", $modifyTime);
    }

    /**
     * ReadWeightMode: 读权重模式:1-主节点模式;2-节点均衡模式;3-从节点均衡(排除主节点);5-用户自定义模式
     *
     * @return integer|null
     */
    public function getReadWeightMode()
    {
        return $this->get("ReadWeightMode");
    }

    /**
     * ReadWeightMode: 读权重模式:1-主节点模式;2-节点均衡模式;3-从节点均衡(排除主节点);5-用户自定义模式
     *
     * @param int $readWeightMode
     */
    public function setReadWeightMode($readWeightMode)
    {
        $this->set("ReadWeightMode", $readWeightMode);
    }

    /**
     * CPUCores: cpu核数
     *
     * @return integer|null
     */
    public function getCPUCores()
    {
        return $this->get("CPUCores");
    }

    /**
     * CPUCores: cpu核数
     *
     * @param int $cpuCores
     */
    public function setCPUCores($cpuCores)
    {
        $this->set("CPUCores", $cpuCores);
    }

    /**
     * Memory: 内存
     *
     * @return integer|null
     */
    public function getMemory()
    {
        return $this->get("Memory");
    }

    /**
     * Memory: 内存
     *
     * @param int $memory
     */
    public function setMemory($memory)
    {
        $this->set("Memory", $memory);
    }

    /**
     * NodeCount: 集群实例节点数
     *
     * @return integer|null
     */
    public function getNodeCount()
    {
        return $this->get("NodeCount");
    }

    /**
     * NodeCount: 集群实例节点数
     *
     * @param int $nodeCount
     */
    public function setNodeCount($nodeCount)
    {
        $this->set("NodeCount", $nodeCount);
    }

    /**
     * ZoneId: 可用区id
     *
     * @return integer|null
     */
    public function getZoneId()
    {
        return $this->get("ZoneId");
    }

    /**
     * ZoneId: 可用区id
     *
     * @param int $zoneId
     */
    public function setZoneId($zoneId)
    {
        $this->set("ZoneId", $zoneId);
    }

    /**
     * Name: 名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * MaxConnection: UDB代理服务最大连接数
     *
     * @return integer|null
     */
    public function getMaxConnection()
    {
        return $this->get("MaxConnection");
    }

    /**
     * MaxConnection: UDB代理服务最大连接数
     *
     * @param int $maxConnection
     */
    public function setMaxConnection($maxConnection)
    {
        $this->set("MaxConnection", $maxConnection);
    }

    /**
     * DelayThreshold: 延迟阈值(单位s)
     *
     * @return integer|null
     */
    public function getDelayThreshold()
    {
        return $this->get("DelayThreshold");
    }

    /**
     * DelayThreshold: 延迟阈值(单位s)
     *
     * @param int $delayThreshold
     */
    public function setDelayThreshold($delayThreshold)
    {
        $this->set("DelayThreshold", $delayThreshold);
    }

    /**
     * UDBReplicas: UDB集群数据
     *
     * @return Replica[]|null
     */
    public function getUDBReplicas()
    {
        $items = $this->get("UDBReplicas");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new Replica($item));
        }
        return $result;
    }

    /**
     * UDBReplicas: UDB集群数据
     *
     * @param Replica[] $udbReplicas
     */
    public function setUDBReplicas(array $udbReplicas)
    {
        $result = [];
        foreach ($udbReplicas as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Nodes: 集群实例服务节点数据
     *
     * @return Node[]|null
     */
    public function getNodes()
    {
        $items = $this->get("Nodes");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new Node($item));
        }
        return $result;
    }

    /**
     * Nodes: 集群实例服务节点数据
     *
     * @param Node[] $nodes
     */
    public function setNodes(array $nodes)
    {
        $result = [];
        foreach ($nodes as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * SQLLimitCount: sql限流数量
     *
     * @return integer|null
     */
    public function getSQLLimitCount()
    {
        return $this->get("SQLLimitCount");
    }

    /**
     * SQLLimitCount: sql限流数量
     *
     * @param int $sqlLimitCount
     */
    public function setSQLLimitCount($sqlLimitCount)
    {
        $this->set("SQLLimitCount", $sqlLimitCount);
    }

    /**
     * SQLRouterCount: sql路由数量
     *
     * @return integer|null
     */
    public function getSQLRouterCount()
    {
        return $this->get("SQLRouterCount");
    }

    /**
     * SQLRouterCount: sql路由数量
     *
     * @param int $sqlRouterCount
     */
    public function setSQLRouterCount($sqlRouterCount)
    {
        $this->set("SQLRouterCount", $sqlRouterCount);
    }

    /**
     * InstanceVersion: 实例版本
     *
     * @return string|null
     */
    public function getInstanceVersion()
    {
        return $this->get("InstanceVersion");
    }

    /**
     * InstanceVersion: 实例版本
     *
     * @param string $instanceVersion
     */
    public function setInstanceVersion($instanceVersion)
    {
        $this->set("InstanceVersion", $instanceVersion);
    }

    /**
     * EnableTransSplit: 是否启用事务拆分(1：启用事务拆分，2:关闭事务拆分)
     *
     * @return integer|null
     */
    public function getEnableTransSplit()
    {
        return $this->get("EnableTransSplit");
    }

    /**
     * EnableTransSplit: 是否启用事务拆分(1：启用事务拆分，2:关闭事务拆分)
     *
     * @param int $enableTransSplit
     */
    public function setEnableTransSplit($enableTransSplit)
    {
        $this->set("EnableTransSplit", $enableTransSplit);
    }

    /**
     * PrivateDomainInfo: 代理实例的内网域名及其开关状态，含域名地址、域名开关、域名数据源指向
     *
     * @return PrivateDomainInfo|null
     */
    public function getPrivateDomainInfo()
    {
        return new PrivateDomainInfo($this->get("PrivateDomainInfo"));
    }

    /**
     * PrivateDomainInfo: 代理实例的内网域名及其开关状态，含域名地址、域名开关、域名数据源指向
     *
     * @param PrivateDomainInfo $privateDomainInfo
     */
    public function setPrivateDomainInfo(array $privateDomainInfo)
    {
        $this->set("PrivateDomainInfo", $privateDomainInfo->getAll());
    }
}
