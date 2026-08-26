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
namespace UCloud\ULogService\Models;

use UCloud\Core\Response\Response;

class LogAgent extends Response
{
    

    /**
     * Label: 主机标签
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->get("Label");
    }

    /**
     * Label: 主机标签
     *
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->set("Label", $label);
    }

    /**
     * HostIp: 主机IP
     *
     * @return string|null
     */
    public function getHostIp()
    {
        return $this->get("HostIp");
    }

    /**
     * HostIp: 主机IP
     *
     * @param string $hostIp
     */
    public function setHostIp($hostIp)
    {
        $this->set("HostIp", $hostIp);
    }

    /**
     * InstanceId: logagent id
     *
     * @return string|null
     */
    public function getInstanceId()
    {
        return $this->get("InstanceId");
    }

    /**
     * InstanceId: logagent id
     *
     * @param string $instanceId
     */
    public function setInstanceId($instanceId)
    {
        $this->set("InstanceId", $instanceId);
    }

    /**
     * AgentVersion: LogAgent版本
     *
     * @return string|null
     */
    public function getAgentVersion()
    {
        return $this->get("AgentVersion");
    }

    /**
     * AgentVersion: LogAgent版本
     *
     * @param string $agentVersion
     */
    public function setAgentVersion($agentVersion)
    {
        $this->set("AgentVersion", $agentVersion);
    }

    /**
     * Status: logagent状态，NORMAL：正常，OFFLINE： 离线
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: logagent状态，NORMAL：正常，OFFLINE： 离线
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * OffLineTime: 离线时间，单位是ms
     *
     * @return string|null
     */
    public function getOffLineTime()
    {
        return $this->get("OffLineTime");
    }

    /**
     * OffLineTime: 离线时间，单位是ms
     *
     * @param string $offLineTime
     */
    public function setOffLineTime($offLineTime)
    {
        $this->set("OffLineTime", $offLineTime);
    }
}
