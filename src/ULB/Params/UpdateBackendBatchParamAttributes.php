<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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
namespace UCloud\ULB\Params;

use UCloud\Core\Request\Request;

class UpdateBackendBatchParamAttributes extends Request
{
    

    /**
     * BackendId: 后端资源实例的ID(ULB后端ID，非资源自身ID)
     *
     * @return string|null
     */
    public function getBackendId()
    {
        return $this->get("BackendId");
    }

    /**
     * BackendId: 后端资源实例的ID(ULB后端ID，非资源自身ID)
     *
     * @param string $backendId
     */
    public function setBackendId($backendId)
    {
        $this->set("BackendId", $backendId);
    }

    /**
     * Port: 后端资源服务端口，取值范围[1-65535]
     *
     * @return integer|null
     */
    public function getPort()
    {
        return $this->get("Port");
    }

    /**
     * Port: 后端资源服务端口，取值范围[1-65535]
     *
     * @param int $port
     */
    public function setPort($port)
    {
        $this->set("Port", $port);
    }

    /**
     * Weight: 所添加的后端RS权重（在加权轮询算法下有效），取值范围[0-100]，默认为1
     *
     * @return integer|null
     */
    public function getWeight()
    {
        return $this->get("Weight");
    }

    /**
     * Weight: 所添加的后端RS权重（在加权轮询算法下有效），取值范围[0-100]，默认为1
     *
     * @param int $weight
     */
    public function setWeight($weight)
    {
        $this->set("Weight", $weight);
    }

    /**
     * Enabled: 后端实例状态开关
     *
     * @return integer|null
     */
    public function getEnabled()
    {
        return $this->get("Enabled");
    }

    /**
     * Enabled: 后端实例状态开关
     *
     * @param int $enabled
     */
    public function setEnabled($enabled)
    {
        $this->set("Enabled", $enabled);
    }

    /**
     * IsBackup: 是否为backup 0：主rs 1：备rs 默认为0
     *
     * @return integer|null
     */
    public function getIsBackup()
    {
        return $this->get("IsBackup");
    }

    /**
     * IsBackup: 是否为backup 0：主rs 1：备rs 默认为0
     *
     * @param int $isBackup
     */
    public function setIsBackup($isBackup)
    {
        $this->set("IsBackup", $isBackup);
    }
}
