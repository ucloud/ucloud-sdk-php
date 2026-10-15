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

class ClusterUpgradeInfo extends Response
{
    

    /**
     * UpdateTime: 集群信息更新时间戳，单位 s
     *
     * @return integer|null
     */
    public function getUpdateTime()
    {
        return $this->get("UpdateTime");
    }

    /**
     * UpdateTime: 集群信息更新时间戳，单位 s
     *
     * @param int $updateTime
     */
    public function setUpdateTime($updateTime)
    {
        $this->set("UpdateTime", $updateTime);
    }

    /**
     * Stage: string，集群升级所处阶段 Unknown、Precheck、MasterUpdating、NodeUpdating、Failed、Success集群从未进行过升级则返回 Unknown集群开始升级过程几个阶段 Precheck->MasterUpdating->NodeUpdating→Success如果升级失败则为 Failed
     *
     * @return string|null
     */
    public function getStage()
    {
        return $this->get("Stage");
    }

    /**
     * Stage: string，集群升级所处阶段 Unknown、Precheck、MasterUpdating、NodeUpdating、Failed、Success集群从未进行过升级则返回 Unknown集群开始升级过程几个阶段 Precheck->MasterUpdating->NodeUpdating→Success如果升级失败则为 Failed
     *
     * @param string $stage
     */
    public function setStage($stage)
    {
        $this->set("Stage", $stage);
    }

    /**
     * Version: string， 集群当前版本
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->get("Version");
    }

    /**
     * Version: string， 集群当前版本
     *
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->set("Version", $version);
    }

    /**
     * TargetVersion: string，集群升级目标版本
     *
     * @return string|null
     */
    public function getTargetVersion()
    {
        return $this->get("TargetVersion");
    }

    /**
     * TargetVersion: string，集群升级目标版本
     *
     * @param string $targetVersion
     */
    public function setTargetVersion($targetVersion)
    {
        $this->set("TargetVersion", $targetVersion);
    }

    /**
     * AvailableVersions: string 数组，可用新版本，例如  ["1.15.12","1.16.15","1.17.4","1.18.9"]
     *
     * @return string[]|null
     */
    public function getAvailableVersions()
    {
        return $this->get("AvailableVersions");
    }

    /**
     * AvailableVersions: string 数组，可用新版本，例如  ["1.15.12","1.16.15","1.17.4","1.18.9"]
     *
     * @param string[] $availableVersions
     */
    public function setAvailableVersions(array $availableVersions)
    {
        $this->set("AvailableVersions", $availableVersions);
    }

    /**
     * NodeInfoSet: 各个节点升级信息, 参照  ClusterUpdateNodeInfo
     *
     * @return ClusterUpdateNodeInfo[]|null
     */
    public function getNodeInfoSet()
    {
        $items = $this->get("NodeInfoSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ClusterUpdateNodeInfo($item));
        }
        return $result;
    }

    /**
     * NodeInfoSet: 各个节点升级信息, 参照  ClusterUpdateNodeInfo
     *
     * @param ClusterUpdateNodeInfo[] $nodeInfoSet
     */
    public function setNodeInfoSet(array $nodeInfoSet)
    {
        $result = [];
        foreach ($nodeInfoSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
