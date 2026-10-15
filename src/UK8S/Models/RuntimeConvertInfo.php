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

class RuntimeConvertInfo extends Response
{
    

    /**
     * NodeInfoSet: 各节点的运行时转换状态。
     *
     * @return NodePluginInfo[]|null
     */
    public function getNodeInfoSet()
    {
        $items = $this->get("NodeInfoSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new NodePluginInfo($item));
        }
        return $result;
    }

    /**
     * NodeInfoSet: 各节点的运行时转换状态。
     *
     * @param NodePluginInfo[] $nodeInfoSet
     */
    public function setNodeInfoSet(array $nodeInfoSet)
    {
        $result = [];
        foreach ($nodeInfoSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Stage: 集群从未进行过运行时转换则返回 Unknown集群运行时转换几个阶段 Precheck->Updating→Success如果转换失败则为 Failed
     *
     * @return string|null
     */
    public function getStage()
    {
        return $this->get("Stage");
    }

    /**
     * Stage: 集群从未进行过运行时转换则返回 Unknown集群运行时转换几个阶段 Precheck->Updating→Success如果转换失败则为 Failed
     *
     * @param string $stage
     */
    public function setStage($stage)
    {
        $this->set("Stage", $stage);
    }

    /**
     * UpdateTime: 运行时转换信息更新时间，Unix 时间戳，单位秒。
     *
     * @return integer|null
     */
    public function getUpdateTime()
    {
        return $this->get("UpdateTime");
    }

    /**
     * UpdateTime: 运行时转换信息更新时间，Unix 时间戳，单位秒。
     *
     * @param int $updateTime
     */
    public function setUpdateTime($updateTime)
    {
        $this->set("UpdateTime", $updateTime);
    }

    /**
     * RuntimeName: 容器运行时名称。
     *
     * @return string|null
     */
    public function getRuntimeName()
    {
        return $this->get("RuntimeName");
    }

    /**
     * RuntimeName: 容器运行时名称。
     *
     * @param string $runtimeName
     */
    public function setRuntimeName($runtimeName)
    {
        $this->set("RuntimeName", $runtimeName);
    }

    /**
     * RuntimeVersion: 容器运行时版本。
     *
     * @return string|null
     */
    public function getRuntimeVersion()
    {
        return $this->get("RuntimeVersion");
    }

    /**
     * RuntimeVersion: 容器运行时版本。
     *
     * @param string $runtimeVersion
     */
    public function setRuntimeVersion($runtimeVersion)
    {
        $this->set("RuntimeVersion", $runtimeVersion);
    }
}
