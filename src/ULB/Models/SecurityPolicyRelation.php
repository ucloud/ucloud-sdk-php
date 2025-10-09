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
namespace UCloud\ULB\Models;

use UCloud\Core\Response\Response;

class SecurityPolicyRelation extends Response
{
    

    /**
     * LoadBalancerId: 负载均衡实例的ID
     *
     * @return string|null
     */
    public function getLoadBalancerId()
    {
        return $this->get("LoadBalancerId");
    }

    /**
     * LoadBalancerId: 负载均衡实例的ID
     *
     * @param string $loadBalancerId
     */
    public function setLoadBalancerId($loadBalancerId)
    {
        $this->set("LoadBalancerId", $loadBalancerId);
    }

    /**
     * ListenerId: 监听器的ID
     *
     * @return string|null
     */
    public function getListenerId()
    {
        return $this->get("ListenerId");
    }

    /**
     * ListenerId: 监听器的ID
     *
     * @param string $listenerId
     */
    public function setListenerId($listenerId)
    {
        $this->set("ListenerId", $listenerId);
    }

    /**
     * ListenerName: 监听器的名称
     *
     * @return string|null
     */
    public function getListenerName()
    {
        return $this->get("ListenerName");
    }

    /**
     * ListenerName: 监听器的名称
     *
     * @param string $listenerName
     */
    public function setListenerName($listenerName)
    {
        $this->set("ListenerName", $listenerName);
    }

    /**
     * ListenerPort: 监听端口
     *
     * @return integer|null
     */
    public function getListenerPort()
    {
        return $this->get("ListenerPort");
    }

    /**
     * ListenerPort: 监听端口
     *
     * @param int $listenerPort
     */
    public function setListenerPort($listenerPort)
    {
        $this->set("ListenerPort", $listenerPort);
    }
}
