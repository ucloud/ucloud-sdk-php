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
namespace UCloud\UK8S\Params;

use UCloud\Core\Request\Request;

class AddUK8SNodeGroupParamKubeletConfiguration extends Request
{
    

    /**
     * ContainerLogMaxFiles: 容器的日志文件个数上限，需大于等于2。控制台展示为containerLogMaxFiles
     *
     * @return integer|null
     */
    public function getContainerLogMaxFiles()
    {
        return $this->get("ContainerLogMaxFiles");
    }

    /**
     * ContainerLogMaxFiles: 容器的日志文件个数上限，需大于等于2。控制台展示为containerLogMaxFiles
     *
     * @param int $containerLogMaxFiles
     */
    public function setContainerLogMaxFiles($containerLogMaxFiles)
    {
        $this->set("ContainerLogMaxFiles", $containerLogMaxFiles);
    }

    /**
     * ContainerLogMaxSize: 容器日志文件轮换生成新文件的最大阈值，需以Mi结尾。控制台展示为containerLogMaxSize
     *
     * @return string|null
     */
    public function getContainerLogMaxSize()
    {
        return $this->get("ContainerLogMaxSize");
    }

    /**
     * ContainerLogMaxSize: 容器日志文件轮换生成新文件的最大阈值，需以Mi结尾。控制台展示为containerLogMaxSize
     *
     * @param string $containerLogMaxSize
     */
    public function setContainerLogMaxSize($containerLogMaxSize)
    {
        $this->set("ContainerLogMaxSize", $containerLogMaxSize);
    }

    /**
     * ImageGCHighThresholdPercent: 配置镜像的磁盘用量百分比阈值，一旦镜像用量超过此阈值，镜像垃圾收集会一直运行。取值范围[1, 100], 同时需大于ImageGCLowThresholdPercent取值。控制台展示为imageGCHighThresholdPercent
     *
     * @return integer|null
     */
    public function getImageGCHighThresholdPercent()
    {
        return $this->get("ImageGCHighThresholdPercent");
    }

    /**
     * ImageGCHighThresholdPercent: 配置镜像的磁盘用量百分比阈值，一旦镜像用量超过此阈值，镜像垃圾收集会一直运行。取值范围[1, 100], 同时需大于ImageGCLowThresholdPercent取值。控制台展示为imageGCHighThresholdPercent
     *
     * @param int $imageGCHighThresholdPercent
     */
    public function setImageGCHighThresholdPercent($imageGCHighThresholdPercent)
    {
        $this->set("ImageGCHighThresholdPercent", $imageGCHighThresholdPercent);
    }

    /**
     * ImageGCLowThresholdPercent: 配置镜像的磁盘用量百分比阈值，镜像用量低于此阈值时不会执行镜像垃圾收集操作。取值范围[1, 100], 同时需小于imageGCHighThresholdPercent取值。控制台展示为imageGCLowThresholdPercent
     *
     * @return integer|null
     */
    public function getImageGCLowThresholdPercent()
    {
        return $this->get("ImageGCLowThresholdPercent");
    }

    /**
     * ImageGCLowThresholdPercent: 配置镜像的磁盘用量百分比阈值，镜像用量低于此阈值时不会执行镜像垃圾收集操作。取值范围[1, 100], 同时需小于imageGCHighThresholdPercent取值。控制台展示为imageGCLowThresholdPercent
     *
     * @param int $imageGCLowThresholdPercent
     */
    public function setImageGCLowThresholdPercent($imageGCLowThresholdPercent)
    {
        $this->set("ImageGCLowThresholdPercent", $imageGCLowThresholdPercent);
    }

    /**
     * MaxPods: Node能运行的Pod最大数量。需大于0。控制台展示为maxPods
     *
     * @return integer|null
     */
    public function getMaxPods()
    {
        return $this->get("MaxPods");
    }

    /**
     * MaxPods: Node能运行的Pod最大数量。需大于0。控制台展示为maxPods
     *
     * @param int $maxPods
     */
    public function setMaxPods($maxPods)
    {
        $this->set("MaxPods", $maxPods);
    }

    /**
     * EvictionHard:
     *
     * @return AddUK8SNodeGroupParamKubeletConfigurationEvictionHard|null
     */
    public function getEvictionHard()
    {
        return new AddUK8SNodeGroupParamKubeletConfigurationEvictionHard($this->get("EvictionHard"));
    }

    /**
     * EvictionHard:
     *
     * @param AddUK8SNodeGroupParamKubeletConfigurationEvictionHard $evictionHard
     */
    public function setEvictionHard(array $evictionHard)
    {
        $this->set("EvictionHard", $evictionHard->getAll());
    }

    /**
     * EvictionSoft:
     *
     * @return AddUK8SNodeGroupParamKubeletConfigurationEvictionSoft|null
     */
    public function getEvictionSoft()
    {
        return new AddUK8SNodeGroupParamKubeletConfigurationEvictionSoft($this->get("EvictionSoft"));
    }

    /**
     * EvictionSoft:
     *
     * @param AddUK8SNodeGroupParamKubeletConfigurationEvictionSoft $evictionSoft
     */
    public function setEvictionSoft(array $evictionSoft)
    {
        $this->set("EvictionSoft", $evictionSoft->getAll());
    }

    /**
     * EvictionSoftGracePeriod:
     *
     * @return AddUK8SNodeGroupParamKubeletConfigurationEvictionSoftGracePeriod|null
     */
    public function getEvictionSoftGracePeriod()
    {
        return new AddUK8SNodeGroupParamKubeletConfigurationEvictionSoftGracePeriod($this->get("EvictionSoftGracePeriod"));
    }

    /**
     * EvictionSoftGracePeriod:
     *
     * @param AddUK8SNodeGroupParamKubeletConfigurationEvictionSoftGracePeriod $evictionSoftGracePeriod
     */
    public function setEvictionSoftGracePeriod(array $evictionSoftGracePeriod)
    {
        $this->set("EvictionSoftGracePeriod", $evictionSoftGracePeriod->getAll());
    }

    /**
     * KubeReserved:
     *
     * @return AddUK8SNodeGroupParamKubeletConfigurationKubeReserved|null
     */
    public function getKubeReserved()
    {
        return new AddUK8SNodeGroupParamKubeletConfigurationKubeReserved($this->get("KubeReserved"));
    }

    /**
     * KubeReserved:
     *
     * @param AddUK8SNodeGroupParamKubeletConfigurationKubeReserved $kubeReserved
     */
    public function setKubeReserved(array $kubeReserved)
    {
        $this->set("KubeReserved", $kubeReserved->getAll());
    }

    /**
     * SystemReserved:
     *
     * @return AddUK8SNodeGroupParamKubeletConfigurationSystemReserved|null
     */
    public function getSystemReserved()
    {
        return new AddUK8SNodeGroupParamKubeletConfigurationSystemReserved($this->get("SystemReserved"));
    }

    /**
     * SystemReserved:
     *
     * @param AddUK8SNodeGroupParamKubeletConfigurationSystemReserved $systemReserved
     */
    public function setSystemReserved(array $systemReserved)
    {
        $this->set("SystemReserved", $systemReserved->getAll());
    }
}
