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

class KubeletConfiguration extends Response
{
    

    /**
     * ContainerLogMaxFiles: 最大日志文件数量
     *
     * @return integer|null
     */
    public function getContainerLogMaxFiles()
    {
        return $this->get("ContainerLogMaxFiles");
    }

    /**
     * ContainerLogMaxFiles: 最大日志文件数量
     *
     * @param int $containerLogMaxFiles
     */
    public function setContainerLogMaxFiles($containerLogMaxFiles)
    {
        $this->set("ContainerLogMaxFiles", $containerLogMaxFiles);
    }

    /**
     * ContainerLogMaxSize: 最大日志文件大小
     *
     * @return string|null
     */
    public function getContainerLogMaxSize()
    {
        return $this->get("ContainerLogMaxSize");
    }

    /**
     * ContainerLogMaxSize: 最大日志文件大小
     *
     * @param string $containerLogMaxSize
     */
    public function setContainerLogMaxSize($containerLogMaxSize)
    {
        $this->set("ContainerLogMaxSize", $containerLogMaxSize);
    }

    /**
     * EvictionHard: 硬性驱逐条件，EvictionCondition类型
     *
     * @return EvictionCondition|null
     */
    public function getEvictionHard()
    {
        return new EvictionCondition($this->get("EvictionHard"));
    }

    /**
     * EvictionHard: 硬性驱逐条件，EvictionCondition类型
     *
     * @param EvictionCondition $evictionHard
     */
    public function setEvictionHard(array $evictionHard)
    {
        $this->set("EvictionHard", $evictionHard->getAll());
    }

    /**
     * EvictionSoft: 软性驱逐条件，EvictionCondition类型
     *
     * @return EvictionCondition|null
     */
    public function getEvictionSoft()
    {
        return new EvictionCondition($this->get("EvictionSoft"));
    }

    /**
     * EvictionSoft: 软性驱逐条件，EvictionCondition类型
     *
     * @param EvictionCondition $evictionSoft
     */
    public function setEvictionSoft(array $evictionSoft)
    {
        $this->set("EvictionSoft", $evictionSoft->getAll());
    }

    /**
     * EvictionSoftGracePeriod: 软性驱逐宽限时间，EvictionCondition类型
     *
     * @return EvictionCondition|null
     */
    public function getEvictionSoftGracePeriod()
    {
        return new EvictionCondition($this->get("EvictionSoftGracePeriod"));
    }

    /**
     * EvictionSoftGracePeriod: 软性驱逐宽限时间，EvictionCondition类型
     *
     * @param EvictionCondition $evictionSoftGracePeriod
     */
    public function setEvictionSoftGracePeriod(array $evictionSoftGracePeriod)
    {
        $this->set("EvictionSoftGracePeriod", $evictionSoftGracePeriod->getAll());
    }

    /**
     * ImageGCHighThresholdPercent: 镜像垃圾收集阈值
     *
     * @return integer|null
     */
    public function getImageGCHighThresholdPercent()
    {
        return $this->get("ImageGCHighThresholdPercent");
    }

    /**
     * ImageGCHighThresholdPercent: 镜像垃圾收集阈值
     *
     * @param int $imageGCHighThresholdPercent
     */
    public function setImageGCHighThresholdPercent($imageGCHighThresholdPercent)
    {
        $this->set("ImageGCHighThresholdPercent", $imageGCHighThresholdPercent);
    }

    /**
     * ImageGCLowThresholdPercent: 停止镜像垃圾收集阈值
     *
     * @return integer|null
     */
    public function getImageGCLowThresholdPercent()
    {
        return $this->get("ImageGCLowThresholdPercent");
    }

    /**
     * ImageGCLowThresholdPercent: 停止镜像垃圾收集阈值
     *
     * @param int $imageGCLowThresholdPercent
     */
    public function setImageGCLowThresholdPercent($imageGCLowThresholdPercent)
    {
        $this->set("ImageGCLowThresholdPercent", $imageGCLowThresholdPercent);
    }

    /**
     * KubeReserved: kubelet预留资源，ReservedResource类型
     *
     * @return ReservedResource|null
     */
    public function getKubeReserved()
    {
        return new ReservedResource($this->get("KubeReserved"));
    }

    /**
     * KubeReserved: kubelet预留资源，ReservedResource类型
     *
     * @param ReservedResource $kubeReserved
     */
    public function setKubeReserved(array $kubeReserved)
    {
        $this->set("KubeReserved", $kubeReserved->getAll());
    }

    /**
     * SystemReserved: 系统预留资源，ReservedResource类型
     *
     * @return ReservedResource|null
     */
    public function getSystemReserved()
    {
        return new ReservedResource($this->get("SystemReserved"));
    }

    /**
     * SystemReserved: 系统预留资源，ReservedResource类型
     *
     * @param ReservedResource $systemReserved
     */
    public function setSystemReserved(array $systemReserved)
    {
        $this->set("SystemReserved", $systemReserved->getAll());
    }

    /**
     * MaxPods: 最大Pod数量
     *
     * @return integer|null
     */
    public function getMaxPods()
    {
        return $this->get("MaxPods");
    }

    /**
     * MaxPods: 最大Pod数量
     *
     * @param int $maxPods
     */
    public function setMaxPods($maxPods)
    {
        $this->set("MaxPods", $maxPods);
    }
}
