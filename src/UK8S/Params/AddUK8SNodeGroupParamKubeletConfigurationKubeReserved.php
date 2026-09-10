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

class AddUK8SNodeGroupParamKubeletConfigurationKubeReserved extends Request
{
    

    /**
     * CPU: kubelet预留CPU资源，以m结尾。控制台展示为kubeReserved - cpu
     *
     * @return string|null
     */
    public function getCPU()
    {
        return $this->get("CPU");
    }

    /**
     * CPU: kubelet预留CPU资源，以m结尾。控制台展示为kubeReserved - cpu
     *
     * @param string $cpu
     */
    public function setCPU($cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * Memory: kubelet预留内存资源，以Mi结尾。控制台展示为kubeReserved - memory
     *
     * @return string|null
     */
    public function getMemory()
    {
        return $this->get("Memory");
    }

    /**
     * Memory: kubelet预留内存资源，以Mi结尾。控制台展示为kubeReserved - memory
     *
     * @param string $memory
     */
    public function setMemory($memory)
    {
        $this->set("Memory", $memory);
    }

    /**
     * EphemeralStorage: kubelet预留存储空间，以Gi结尾。控制台展示为kubeReserved - ephemeral-storage
     *
     * @return string|null
     */
    public function getEphemeralStorage()
    {
        return $this->get("EphemeralStorage");
    }

    /**
     * EphemeralStorage: kubelet预留存储空间，以Gi结尾。控制台展示为kubeReserved - ephemeral-storage
     *
     * @param string $ephemeralStorage
     */
    public function setEphemeralStorage($ephemeralStorage)
    {
        $this->set("EphemeralStorage", $ephemeralStorage);
    }

    /**
     * Pid: kubelet预留pid数量，必须大于等于500, string方式提供。控制台展示为kubeReserved - pid
     *
     * @return string|null
     */
    public function getPid()
    {
        return $this->get("Pid");
    }

    /**
     * Pid: kubelet预留pid数量，必须大于等于500, string方式提供。控制台展示为kubeReserved - pid
     *
     * @param string $pid
     */
    public function setPid($pid)
    {
        $this->set("Pid", $pid);
    }
}
