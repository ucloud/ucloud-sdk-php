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
namespace UCloud\UK8S\Models;

use UCloud\Core\Response\Response;

class UhostInfo extends Response
{
    

    /**
     * Zone: 所在机房
     *
     * @return string|null
     */
    public function getZone(): string
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 所在机房
     *
     * @param string $zone
     */
    public function setZone(string $zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * Name: 主机名称
     *
     * @return string|null
     */
    public function getName(): string
    {
        return $this->get("Name");
    }

    /**
     * Name: 主机名称
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->set("Name", $name);
    }

    /**
     * CPU: Cpu数量
     *
     * @return integer|null
     */
    public function getCPU(): int
    {
        return $this->get("CPU");
    }

    /**
     * CPU: Cpu数量
     *
     * @param int $cpu
     */
    public function setCPU(int $cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * Memory: 内存
     *
     * @return integer|null
     */
    public function getMemory(): int
    {
        return $this->get("Memory");
    }

    /**
     * Memory: 内存
     *
     * @param int $memory
     */
    public function setMemory(int $memory)
    {
        $this->set("Memory", $memory);
    }

    /**
     * IPSet: 节点IP信息
     *
     * @return IPSet[]|null
     */
    public function getIPSet(): array
    {
        $items = $this->get("IPSet") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new IPSet($item));
        }
        return $result;
    }

    /**
     * IPSet: 节点IP信息
     *
     * @param IPSet[] $ipSet
     */
    public function setIPSet(array $ipSet)
    {
        $result = [];
        foreach ($ipSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * DiskSet: 节点磁盘信息
     *
     * @return DiskSet[]|null
     */
    public function getDiskSet(): array
    {
        $items = $this->get("DiskSet") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new DiskSet($item));
        }
        return $result;
    }

    /**
     * DiskSet: 节点磁盘信息
     *
     * @param DiskSet[] $diskSet
     */
    public function setDiskSet(array $diskSet)
    {
        $result = [];
        foreach ($diskSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * NodeId: 主机ID
     *
     * @return string|null
     */
    public function getNodeId(): string
    {
        return $this->get("NodeId");
    }

    /**
     * NodeId: 主机ID
     *
     * @param string $nodeId
     */
    public function setNodeId(string $nodeId)
    {
        $this->set("NodeId", $nodeId);
    }

    /**
     * OsName: 镜像信息
     *
     * @return string|null
     */
    public function getOsName(): string
    {
        return $this->get("OsName");
    }

    /**
     * OsName: 镜像信息
     *
     * @param string $osName
     */
    public function setOsName(string $osName)
    {
        $this->set("OsName", $osName);
    }

    /**
     * CreateTime: 创建时间
     *
     * @return integer|null
     */
    public function getCreateTime(): int
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * ExpireTime: 到期时间
     *
     * @return integer|null
     */
    public function getExpireTime(): int
    {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: 到期时间
     *
     * @param int $expireTime
     */
    public function setExpireTime(int $expireTime)
    {
        $this->set("ExpireTime", $expireTime);
    }

    /**
     * State: 主机状态
     *
     * @return string|null
     */
    public function getState(): string
    {
        return $this->get("State");
    }

    /**
     * State: 主机状态
     *
     * @param string $state
     */
    public function setState(string $state)
    {
        $this->set("State", $state);
    }

    /**
     * NodeType: 节点类型：uhost表示云主机;uphost表示物理云主机
     *
     * @return string|null
     */
    public function getNodeType(): string
    {
        return $this->get("NodeType");
    }

    /**
     * NodeType: 节点类型：uhost表示云主机;uphost表示物理云主机
     *
     * @param string $nodeType
     */
    public function setNodeType(string $nodeType)
    {
        $this->set("NodeType", $nodeType);
    }
}
