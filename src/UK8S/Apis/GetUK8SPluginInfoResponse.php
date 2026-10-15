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
namespace UCloud\UK8S\Apis;

use UCloud\Core\Response\Response;
use UCloud\UK8S\Models\NodePlugin;
use UCloud\UK8S\Models\NodePluginInfo;
use UCloud\UK8S\Models\ClusterUpgradeInfo;
use UCloud\UK8S\Models\ClusterUpdateNodeInfo;
use UCloud\UK8S\Models\RuntimeConvertInfo;
use UCloud\UK8S\Models\VKNode;
use UCloud\UK8S\Models\VKNodeInfo;
use UCloud\UK8S\Models\CSIInfo;
use UCloud\UK8S\Models\CloudProviderInfo;
use UCloud\UK8S\Models\MonitorInfo;

class GetUK8SPluginInfoResponse extends Response
{
    

    /**
     * ClusterId: 集群ID
     *
     * @return string|null
     */
    public function getClusterId()
    {
        return $this->get("ClusterId");
    }

    /**
     * ClusterId: 集群ID
     *
     * @param string $clusterId
     */
    public function setClusterId($clusterId)
    {
        $this->set("ClusterId", $clusterId);
    }

    /**
     * CNIInfoSet: CNI插件信息, 参看NodePlugin
     *
     * @return NodePlugin|null
     */
    public function getCNIInfoSet()
    {
        return new NodePlugin($this->get("CNIInfoSet"));
    }

    /**
     * CNIInfoSet: CNI插件信息, 参看NodePlugin
     *
     * @param NodePlugin $cniInfoSet
     */
    public function setCNIInfoSet(array $cniInfoSet)
    {
        $this->set("CNIInfoSet", $cniInfoSet->getAll());
    }

    /**
     * ClusterStatus: 集群状态信息
     *
     * @return string|null
     */
    public function getClusterStatus()
    {
        return $this->get("ClusterStatus");
    }

    /**
     * ClusterStatus: 集群状态信息
     *
     * @param string $clusterStatus
     */
    public function setClusterStatus($clusterStatus)
    {
        $this->set("ClusterStatus", $clusterStatus);
    }

    /**
     * ClusterUpgradeInfo: 集群升级相关信息
     *
     * @return ClusterUpgradeInfo|null
     */
    public function getClusterUpgradeInfo()
    {
        return new ClusterUpgradeInfo($this->get("ClusterUpgradeInfo"));
    }

    /**
     * ClusterUpgradeInfo: 集群升级相关信息
     *
     * @param ClusterUpgradeInfo $clusterUpgradeInfo
     */
    public function setClusterUpgradeInfo(array $clusterUpgradeInfo)
    {
        $this->set("ClusterUpgradeInfo", $clusterUpgradeInfo->getAll());
    }

    /**
     * RuntimeConvertInfo: 集群容器运行时转换信息。
     *
     * @return RuntimeConvertInfo|null
     */
    public function getRuntimeConvertInfo()
    {
        return new RuntimeConvertInfo($this->get("RuntimeConvertInfo"));
    }

    /**
     * RuntimeConvertInfo: 集群容器运行时转换信息。
     *
     * @param RuntimeConvertInfo $runtimeConvertInfo
     */
    public function setRuntimeConvertInfo(array $runtimeConvertInfo)
    {
        $this->set("RuntimeConvertInfo", $runtimeConvertInfo->getAll());
    }

    /**
     * VKInfo: vk插件信息
     *
     * @return VKNode|null
     */
    public function getVKInfo()
    {
        return new VKNode($this->get("VKInfo"));
    }

    /**
     * VKInfo: vk插件信息
     *
     * @param VKNode $vkInfo
     */
    public function setVKInfo(array $vkInfo)
    {
        $this->set("VKInfo", $vkInfo->getAll());
    }

    /**
     * CSIInfo: CSI 插件版本与状态。
     *
     * @return CSIInfo|null
     */
    public function getCSIInfo()
    {
        return new CSIInfo($this->get("CSIInfo"));
    }

    /**
     * CSIInfo: CSI 插件版本与状态。
     *
     * @param CSIInfo $csiInfo
     */
    public function setCSIInfo(array $csiInfo)
    {
        $this->set("CSIInfo", $csiInfo->getAll());
    }

    /**
     * CloudProviderInfo: CloudProvider 插件版本与状态。
     *
     * @return CloudProviderInfo|null
     */
    public function getCloudProviderInfo()
    {
        return new CloudProviderInfo($this->get("CloudProviderInfo"));
    }

    /**
     * CloudProviderInfo: CloudProvider 插件版本与状态。
     *
     * @param CloudProviderInfo $cloudProviderInfo
     */
    public function setCloudProviderInfo(array $cloudProviderInfo)
    {
        $this->set("CloudProviderInfo", $cloudProviderInfo->getAll());
    }

    /**
     * MonitorInfo: 监控插件信息。
     *
     * @return MonitorInfo|null
     */
    public function getMonitorInfo()
    {
        return new MonitorInfo($this->get("MonitorInfo"));
    }

    /**
     * MonitorInfo: 监控插件信息。
     *
     * @param MonitorInfo $monitorInfo
     */
    public function setMonitorInfo(array $monitorInfo)
    {
        $this->set("MonitorInfo", $monitorInfo->getAll());
    }
}
