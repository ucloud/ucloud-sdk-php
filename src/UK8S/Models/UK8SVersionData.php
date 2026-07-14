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

class UK8SVersionData extends Response
{
    

    /**
     * K8sVersion: K8S 版本
     *
     * @return string|null
     */
    public function getK8sVersion()
    {
        return $this->get("K8sVersion");
    }

    /**
     * K8sVersion: K8S 版本
     *
     * @param string $k8sVersion
     */
    public function setK8sVersion($k8sVersion)
    {
        $this->set("K8sVersion", $k8sVersion);
    }

    /**
     * ContainerdVersion: Containerd 版本
     *
     * @return string|null
     */
    public function getContainerdVersion()
    {
        return $this->get("ContainerdVersion");
    }

    /**
     * ContainerdVersion: Containerd 版本
     *
     * @param string $containerdVersion
     */
    public function setContainerdVersion($containerdVersion)
    {
        $this->set("ContainerdVersion", $containerdVersion);
    }
}
