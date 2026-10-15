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
namespace UCloud\UK8S\Models;

use UCloud\Core\Response\Response;

class NodePluginInfo extends Response
{
    

    /**
     * Node: Node节点名称
     *
     * @return string|null
     */
    public function getNode()
    {
        return $this->get("Node");
    }

    /**
     * Node: Node节点名称
     *
     * @param string $node
     */
    public function setNode($node)
    {
        $this->set("Node", $node);
    }

    /**
     * Version: 插件版本
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->get("Version");
    }

    /**
     * Version: 插件版本
     *
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->set("Version", $version);
    }

    /**
     * Status: 插件工作状态，0：未知，1：正常，2：异常, 3: 升级中
     *
     * @return integer|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 插件工作状态，0：未知，1：正常，2：异常, 3: 升级中
     *
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * UpdateTime: 插件信息更新时间
     *
     * @return integer|null
     */
    public function getUpdateTime()
    {
        return $this->get("UpdateTime");
    }

    /**
     * UpdateTime: 插件信息更新时间
     *
     * @param int $updateTime
     */
    public function setUpdateTime($updateTime)
    {
        $this->set("UpdateTime", $updateTime);
    }

    /**
     * OperationResult: 上次插件操作结果，0：没有上次操作结果，或当前正在执行升级或查询 1：获取成功 2 获取失败  3 升级成功 4 升级失败
     *
     * @return integer|null
     */
    public function getOperationResult()
    {
        return $this->get("OperationResult");
    }

    /**
     * OperationResult: 上次插件操作结果，0：没有上次操作结果，或当前正在执行升级或查询 1：获取成功 2 获取失败  3 升级成功 4 升级失败
     *
     * @param int $operationResult
     */
    public function setOperationResult($operationResult)
    {
        $this->set("OperationResult", $operationResult);
    }

    /**
     * IP: Node节点IP
     *
     * @return string|null
     */
    public function getIP()
    {
        return $this->get("IP");
    }

    /**
     * IP: Node节点IP
     *
     * @param string $ip
     */
    public function setIP($ip)
    {
        $this->set("IP", $ip);
    }
}
