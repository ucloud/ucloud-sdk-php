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
namespace UCloud\UK8S\Apis;

use UCloud\Core\Response\Response;
use UCloud\UK8S\Models\K8SNodeCondition;

class DescribeUK8SNodeResponse extends Response
{
    

    /**
     * Name: 节点名称
     *
     * @return string|null
     */
    public function getName(): string
    {
        return $this->get("Name");
    }

    /**
     * Name: 节点名称
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->set("Name", $name);
    }

    /**
     * Labels: 字符串数组，每一项是类似 "kubernetes.io/arch=amd64" 的标签
     *
     * @return string[]|null
     */
    public function getLabels(): array
    {
        return $this->get("Labels");
    }

    /**
     * Labels: 字符串数组，每一项是类似 "kubernetes.io/arch=amd64" 的标签
     *
     * @param string[] $labels
     */
    public function setLabels(array $labels)
    {
        $this->set("Labels", $labels);
    }

    /**
     * Annotations: 字符串数组，每一项是类似 "node.alpha.kubernetes.io/ttl=0" 的注解
     *
     * @return string[]|null
     */
    public function getAnnotations(): array
    {
        return $this->get("Annotations");
    }

    /**
     * Annotations: 字符串数组，每一项是类似 "node.alpha.kubernetes.io/ttl=0" 的注解
     *
     * @param string[] $annotations
     */
    public function setAnnotations(array $annotations)
    {
        $this->set("Annotations", $annotations);
    }

    /**
     * CreationTimestamp: 时间戳，单位是 秒
     *
     * @return integer|null
     */
    public function getCreationTimestamp(): int
    {
        return $this->get("CreationTimestamp");
    }

    /**
     * CreationTimestamp: 时间戳，单位是 秒
     *
     * @param int $creationTimestamp
     */
    public function setCreationTimestamp(int $creationTimestamp)
    {
        $this->set("CreationTimestamp", $creationTimestamp);
    }

    /**
     * ProviderID: 字符串，如："UCloud://cn-sh2-02//uk8s-vsc0vgob-n-mpzxc"
     *
     * @return string|null
     */
    public function getProviderID(): string
    {
        return $this->get("ProviderID");
    }

    /**
     * ProviderID: 字符串，如："UCloud://cn-sh2-02//uk8s-vsc0vgob-n-mpzxc"
     *
     * @param string $providerID
     */
    public function setProviderID(string $providerID)
    {
        $this->set("ProviderID", $providerID);
    }

    /**
     * KernelVersion: 内核版本，如："4.19.0-6.el7.ucloud.x86_64"
     *
     * @return string|null
     */
    public function getKernelVersion(): string
    {
        return $this->get("KernelVersion");
    }

    /**
     * KernelVersion: 内核版本，如："4.19.0-6.el7.ucloud.x86_64"
     *
     * @param string $kernelVersion
     */
    public function setKernelVersion(string $kernelVersion)
    {
        $this->set("KernelVersion", $kernelVersion);
    }

    /**
     * OSImage: 操作系统类型，如："CentOS Linux 7 (Core)"
     *
     * @return string|null
     */
    public function getOSImage(): string
    {
        return $this->get("OSImage");
    }

    /**
     * OSImage: 操作系统类型，如："CentOS Linux 7 (Core)"
     *
     * @param string $osImage
     */
    public function setOSImage(string $osImage)
    {
        $this->set("OSImage", $osImage);
    }

    /**
     * ContainerRuntimeVersion: 容器运行时版本，如："docker://18.9.9"
     *
     * @return string|null
     */
    public function getContainerRuntimeVersion(): string
    {
        return $this->get("ContainerRuntimeVersion");
    }

    /**
     * ContainerRuntimeVersion: 容器运行时版本，如："docker://18.9.9"
     *
     * @param string $containerRuntimeVersion
     */
    public function setContainerRuntimeVersion(string $containerRuntimeVersion)
    {
        $this->set("ContainerRuntimeVersion", $containerRuntimeVersion);
    }

    /**
     * KubeletVersion: kubelet 版本
     *
     * @return string|null
     */
    public function getKubeletVersion(): string
    {
        return $this->get("KubeletVersion");
    }

    /**
     * KubeletVersion: kubelet 版本
     *
     * @param string $kubeletVersion
     */
    public function setKubeletVersion(string $kubeletVersion)
    {
        $this->set("KubeletVersion", $kubeletVersion);
    }

    /**
     * KubeProxyVersion: kubeproxy 版本
     *
     * @return string|null
     */
    public function getKubeProxyVersion(): string
    {
        return $this->get("KubeProxyVersion");
    }

    /**
     * KubeProxyVersion: kubeproxy 版本
     *
     * @param string $kubeProxyVersion
     */
    public function setKubeProxyVersion(string $kubeProxyVersion)
    {
        $this->set("KubeProxyVersion", $kubeProxyVersion);
    }

    /**
     * InternalIP: 内部 IP 地址
     *
     * @return string|null
     */
    public function getInternalIP(): string
    {
        return $this->get("InternalIP");
    }

    /**
     * InternalIP: 内部 IP 地址
     *
     * @param string $internalIP
     */
    public function setInternalIP(string $internalIP)
    {
        $this->set("InternalIP", $internalIP);
    }

    /**
     * Hostname: 主机名
     *
     * @return string|null
     */
    public function getHostname(): string
    {
        return $this->get("Hostname");
    }

    /**
     * Hostname: 主机名
     *
     * @param string $hostname
     */
    public function setHostname(string $hostname)
    {
        $this->set("Hostname", $hostname);
    }

    /**
     * AllocatedPodCount: 已分配到当前节点的 Pod 数量
     *
     * @return integer|null
     */
    public function getAllocatedPodCount(): int
    {
        return $this->get("AllocatedPodCount");
    }

    /**
     * AllocatedPodCount: 已分配到当前节点的 Pod 数量
     *
     * @param int $allocatedPodCount
     */
    public function setAllocatedPodCount(int $allocatedPodCount)
    {
        $this->set("AllocatedPodCount", $allocatedPodCount);
    }

    /**
     * PodCapacity: 节点允许的可分配 Pod 最大数量
     *
     * @return integer|null
     */
    public function getPodCapacity(): int
    {
        return $this->get("PodCapacity");
    }

    /**
     * PodCapacity: 节点允许的可分配 Pod 最大数量
     *
     * @param int $podCapacity
     */
    public function setPodCapacity(int $podCapacity)
    {
        $this->set("PodCapacity", $podCapacity);
    }

    /**
     * Unschedulable: 是否禁止调度
     *
     * @return boolean|null
     */
    public function getUnschedulable(): bool
    {
        return $this->get("Unschedulable");
    }

    /**
     * Unschedulable: 是否禁止调度
     *
     * @param boolean $unschedulable
     */
    public function setUnschedulable(bool $unschedulable)
    {
        $this->set("Unschedulable", $unschedulable);
    }

    /**
     * CPUCapacity: 节点 CPU 总量
     *
     * @return string|null
     */
    public function getCPUCapacity(): string
    {
        return $this->get("CPUCapacity");
    }

    /**
     * CPUCapacity: 节点 CPU 总量
     *
     * @param string $cpuCapacity
     */
    public function setCPUCapacity(string $cpuCapacity)
    {
        $this->set("CPUCapacity", $cpuCapacity);
    }

    /**
     * MemoryCapacity: 节点内存总量
     *
     * @return string|null
     */
    public function getMemoryCapacity(): string
    {
        return $this->get("MemoryCapacity");
    }

    /**
     * MemoryCapacity: 节点内存总量
     *
     * @param string $memoryCapacity
     */
    public function setMemoryCapacity(string $memoryCapacity)
    {
        $this->set("MemoryCapacity", $memoryCapacity);
    }

    /**
     * MemoryRequests: 节点上已分配 Pod 的内存请求量
     *
     * @return string|null
     */
    public function getMemoryRequests(): string
    {
        return $this->get("MemoryRequests");
    }

    /**
     * MemoryRequests: 节点上已分配 Pod 的内存请求量
     *
     * @param string $memoryRequests
     */
    public function setMemoryRequests(string $memoryRequests)
    {
        $this->set("MemoryRequests", $memoryRequests);
    }

    /**
     * MemoryRequestsFraction: 节点上已分配 Pod 的内存请求量占内存总量的比例，如返回值为 "4.5"，则意味着请求量占总量的 4.5%
     *
     * @return string|null
     */
    public function getMemoryRequestsFraction(): string
    {
        return $this->get("MemoryRequestsFraction");
    }

    /**
     * MemoryRequestsFraction: 节点上已分配 Pod 的内存请求量占内存总量的比例，如返回值为 "4.5"，则意味着请求量占总量的 4.5%
     *
     * @param string $memoryRequestsFraction
     */
    public function setMemoryRequestsFraction(string $memoryRequestsFraction)
    {
        $this->set("MemoryRequestsFraction", $memoryRequestsFraction);
    }

    /**
     * MemoryLimits: 节点上已分配 Pod 的内存限制量
     *
     * @return string|null
     */
    public function getMemoryLimits(): string
    {
        return $this->get("MemoryLimits");
    }

    /**
     * MemoryLimits: 节点上已分配 Pod 的内存限制量
     *
     * @param string $memoryLimits
     */
    public function setMemoryLimits(string $memoryLimits)
    {
        $this->set("MemoryLimits", $memoryLimits);
    }

    /**
     * MemoryLimitsFraction: 节点上已分配 Pod 的内存限制量占内存总量的比例，如返回值为 "18"，则意味着限制量占总量的 18%
     *
     * @return string|null
     */
    public function getMemoryLimitsFraction(): string
    {
        return $this->get("MemoryLimitsFraction");
    }

    /**
     * MemoryLimitsFraction: 节点上已分配 Pod 的内存限制量占内存总量的比例，如返回值为 "18"，则意味着限制量占总量的 18%
     *
     * @param string $memoryLimitsFraction
     */
    public function setMemoryLimitsFraction(string $memoryLimitsFraction)
    {
        $this->set("MemoryLimitsFraction", $memoryLimitsFraction);
    }

    /**
     * CPURequests: 节点上已分配 Pod 的 CPU 请求量
     *
     * @return string|null
     */
    public function getCPURequests(): string
    {
        return $this->get("CPURequests");
    }

    /**
     * CPURequests: 节点上已分配 Pod 的 CPU 请求量
     *
     * @param string $cpuRequests
     */
    public function setCPURequests(string $cpuRequests)
    {
        $this->set("CPURequests", $cpuRequests);
    }

    /**
     * CPURequestsFraction: 节点上已分配 Pod 的 CPU 请求量占 CPU 总量的比例
     *
     * @return string|null
     */
    public function getCPURequestsFraction(): string
    {
        return $this->get("CPURequestsFraction");
    }

    /**
     * CPURequestsFraction: 节点上已分配 Pod 的 CPU 请求量占 CPU 总量的比例
     *
     * @param string $cpuRequestsFraction
     */
    public function setCPURequestsFraction(string $cpuRequestsFraction)
    {
        $this->set("CPURequestsFraction", $cpuRequestsFraction);
    }

    /**
     * CPULimits: 节点上已分配 Pod 的 CPU 限制值
     *
     * @return string|null
     */
    public function getCPULimits(): string
    {
        return $this->get("CPULimits");
    }

    /**
     * CPULimits: 节点上已分配 Pod 的 CPU 限制值
     *
     * @param string $cpuLimits
     */
    public function setCPULimits(string $cpuLimits)
    {
        $this->set("CPULimits", $cpuLimits);
    }

    /**
     * CPULimitsFraction: 节点上已分配 Pod 的 CPU 限制值占 CPU 总量的比例
     *
     * @return string|null
     */
    public function getCPULimitsFraction(): string
    {
        return $this->get("CPULimitsFraction");
    }

    /**
     * CPULimitsFraction: 节点上已分配 Pod 的 CPU 限制值占 CPU 总量的比例
     *
     * @param string $cpuLimitsFraction
     */
    public function setCPULimitsFraction(string $cpuLimitsFraction)
    {
        $this->set("CPULimitsFraction", $cpuLimitsFraction);
    }

    /**
     * Conditions: 节点状态数组
     *
     * @return K8SNodeCondition[]|null
     */
    public function getConditions(): array
    {
        $items = $this->get("Conditions") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new K8SNodeCondition($item));
        }
        return $result;
    }

    /**
     * Conditions: 节点状态数组
     *
     * @param K8SNodeCondition[] $conditions
     */
    public function setConditions(array $conditions)
    {
        $result = [];
        foreach ($conditions as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * ContainerImages: 节点上镜像名称数组
     *
     * @return string[]|null
     */
    public function getContainerImages(): array
    {
        return $this->get("ContainerImages");
    }

    /**
     * ContainerImages: 节点上镜像名称数组
     *
     * @param string[] $containerImages
     */
    public function setContainerImages(array $containerImages)
    {
        $this->set("ContainerImages", $containerImages);
    }

    /**
     * Taints: 字符串数组，每一项是类似 "node-role.kubernetes.io/master:NoSchedule" 的污点
     *
     * @return string[]|null
     */
    public function getTaints(): array
    {
        return $this->get("Taints");
    }

    /**
     * Taints: 字符串数组，每一项是类似 "node-role.kubernetes.io/master:NoSchedule" 的污点
     *
     * @param string[] $taints
     */
    public function setTaints(array $taints)
    {
        $this->set("Taints", $taints);
    }
}
