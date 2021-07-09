<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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
namespace UCloud\UDDB\Models;

use UCloud\Core\Response\Response;

class DataNodeInfo extends Response {
    

    /**
     * Id: 数据节点ID
     *
     * @return string|null
     */
    public function getId(): string {
        return $this->get("Id");
    }

    /**
     * Id: 数据节点ID
     *
     * @param string $id
     */
    public function setId(string $id) {
        $this->set("Id", $id);
    }

    /**
     * Memory: 数据节点的内存配置, 单位：MB
     *
     * @return int|null
     */
    public function getMemory(): int {
        return $this->get("Memory");
    }

    /**
     * Memory: 数据节点的内存配置, 单位：MB
     *
     * @param int $memory
     */
    public function setMemory(int $memory) {
        $this->set("Memory", $memory);
    }

    /**
     * DiskSpace: 数据节点的磁盘大小配置. 单位: GB
     *
     * @return int|null
     */
    public function getDiskSpace(): int {
        return $this->get("DiskSpace");
    }

    /**
     * DiskSpace: 数据节点的磁盘大小配置. 单位: GB
     *
     * @param int $diskSpace
     */
    public function setDiskSpace(int $diskSpace) {
        $this->set("DiskSpace", $diskSpace);
    }

    /**
     * SlaveCount: 数据节点的只读实例个数.
     *
     * @return int|null
     */
    public function getSlaveCount(): int {
        return $this->get("SlaveCount");
    }

    /**
     * SlaveCount: 数据节点的只读实例个数.
     *
     * @param int $slaveCount
     */
    public function setSlaveCount(int $slaveCount) {
        $this->set("SlaveCount", $slaveCount);
    }

    /**
     * State: 数据分片状态, 状态列表如下: Init: 初始化中 Fail: 安装失败 Starting: 启动中 Running: 系统正常运行中 Shutdown: 关闭中 Shutoff: 已关闭 Deleted: 已删除 Upgrading: 系统升级中
     *
     * @return string|null
     */
    public function getState(): string {
        return $this->get("State");
    }

    /**
     * State: 数据分片状态, 状态列表如下: Init: 初始化中 Fail: 安装失败 Starting: 启动中 Running: 系统正常运行中 Shutdown: 关闭中 Shutoff: 已关闭 Deleted: 已删除 Upgrading: 系统升级中
     *
     * @param string $state
     */
    public function setState(string $state) {
        $this->set("State", $state);
    }

    /**
     * SlaveInfos: 只读实例信息列表
     *
     * @return SlaveInfo[]|null
     */
    public function getSlaveInfos(): array {
        $items = $this->get("SlaveInfos") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new SlaveInfo($item));
        }
        return $result;
    }

    /**
     * SlaveInfos: 只读实例信息列表
     *
     * @param SlaveInfo[] $slaveInfos
     */
    public function setSlaveInfos(array $slaveInfos) {
        $result = [];
        foreach ($slaveInfos as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * LastTransTaskId: 最近一次数据迁移任务id
     *
     * @return string|null
     */
    public function getLastTransTaskId(): string {
        return $this->get("LastTransTaskId");
    }

    /**
     * LastTransTaskId: 最近一次数据迁移任务id
     *
     * @param string $lastTransTaskId
     */
    public function setLastTransTaskId(string $lastTransTaskId) {
        $this->set("LastTransTaskId", $lastTransTaskId);
    }

    /**
     * CreateTime: 节点的创建时间
     *
     * @return string|null
     */
    public function getCreateTime(): string {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 节点的创建时间
     *
     * @param string $createTime
     */
    public function setCreateTime(string $createTime) {
        $this->set("CreateTime", $createTime);
    }


}
