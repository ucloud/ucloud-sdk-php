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
namespace UCloud\UDBProxy\Models;

use UCloud\Core\Response\Response;

class UDBProxyBaseItem extends Response
{
    

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
     * ID: 代理ID
     *
     * @return string|null
     */
    public function getID()
    {
        return $this->get("ID");
    }

    /**
     * ID: 代理ID
     *
     * @param string $id
     */
    public function setID($id)
    {
        $this->set("ID", $id);
    }

    /**
     * IP: 代理IP
     *
     * @return string|null
     */
    public function getIP()
    {
        return $this->get("IP");
    }

    /**
     * IP: 代理IP
     *
     * @param string $ip
     */
    public function setIP($ip)
    {
        $this->set("IP", $ip);
    }

    /**
     * Port: 代理端口
     *
     * @return integer|null
     */
    public function getPort()
    {
        return $this->get("Port");
    }

    /**
     * Port: 代理端口
     *
     * @param int $port
     */
    public function setPort($port)
    {
        $this->set("Port", $port);
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
     * ZoneID: 可用区ID
     *
     * @return integer|null
     */
    public function getZoneID()
    {
        return $this->get("ZoneID");
    }

    /**
     * ZoneID: 可用区ID
     *
     * @param int $zoneID
     */
    public function setZoneID($zoneID)
    {
        $this->set("ZoneID", $zoneID);
    }

    /**
     * NodeCount: 代理节点数
     *
     * @return integer|null
     */
    public function getNodeCount()
    {
        return $this->get("NodeCount");
    }

    /**
     * NodeCount: 代理节点数
     *
     * @param int $nodeCount
     */
    public function setNodeCount($nodeCount)
    {
        $this->set("NodeCount", $nodeCount);
    }

    /**
     * CPUCores: 单个代理节点CPU核数
     *
     * @return integer|null
     */
    public function getCPUCores()
    {
        return $this->get("CPUCores");
    }

    /**
     * CPUCores: 单个代理节点CPU核数
     *
     * @param int $cpuCores
     */
    public function setCPUCores($cpuCores)
    {
        $this->set("CPUCores", $cpuCores);
    }

    /**
     * Memory: 单个代理内存
     *
     * @return integer|null
     */
    public function getMemory()
    {
        return $this->get("Memory");
    }

    /**
     * Memory: 单个代理内存
     *
     * @param int $memory
     */
    public function setMemory($memory)
    {
        $this->set("Memory", $memory);
    }

    /**
     * Name: 代理名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 代理名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
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
     * BaseDBDataArr: 加入代理DB信息
     *
     * @return BaseDBData[]|null
     */
    public function getBaseDBDataArr()
    {
        $items = $this->get("BaseDBDataArr");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new BaseDBData($item));
        }
        return $result;
    }

    /**
     * BaseDBDataArr: 加入代理DB信息
     *
     * @param BaseDBData[] $baseDBDataArr
     */
    public function setBaseDBDataArr(array $baseDBDataArr)
    {
        $result = [];
        foreach ($baseDBDataArr as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
