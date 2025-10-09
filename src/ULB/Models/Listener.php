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

class Listener extends Response
{
    

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
     * Name: 监听器的名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 监听器的名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Remark: 监听器的备注信息
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 监听器的备注信息
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * ListenerPort: 监听器的监听端口
     *
     * @return integer|null
     */
    public function getListenerPort()
    {
        return $this->get("ListenerPort");
    }

    /**
     * ListenerPort: 监听器的监听端口
     *
     * @param int $listenerPort
     */
    public function setListenerPort($listenerPort)
    {
        $this->set("ListenerPort", $listenerPort);
    }

    /**
     * ListenerProtocol: 监听协议。应用型限定取值： HTTP、HTTPS
     *
     * @return string|null
     */
    public function getListenerProtocol()
    {
        return $this->get("ListenerProtocol");
    }

    /**
     * ListenerProtocol: 监听协议。应用型限定取值： HTTP、HTTPS
     *
     * @param string $listenerProtocol
     */
    public function setListenerProtocol($listenerProtocol)
    {
        $this->set("ListenerProtocol", $listenerProtocol);
    }

    /**
     * Certificates: （应用型专用）服务器默认证书ID。仅HTTPS监听支持。具体接口详见 Certificate
     *
     * @return Certificate[]|null
     */
    public function getCertificates()
    {
        $items = $this->get("Certificates");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new Certificate($item));
        }
        return $result;
    }

    /**
     * Certificates: （应用型专用）服务器默认证书ID。仅HTTPS监听支持。具体接口详见 Certificate
     *
     * @param Certificate[] $certificates
     */
    public function setCertificates(array $certificates)
    {
        $result = [];
        foreach ($certificates as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * SecurityPolicyId: （应用型专用）安全策略组ID。仅HTTPS监听支持绑定；Default -> 原生策略
     *
     * @return string|null
     */
    public function getSecurityPolicyId()
    {
        return $this->get("SecurityPolicyId");
    }

    /**
     * SecurityPolicyId: （应用型专用）安全策略组ID。仅HTTPS监听支持绑定；Default -> 原生策略
     *
     * @param string $securityPolicyId
     */
    public function setSecurityPolicyId($securityPolicyId)
    {
        $this->set("SecurityPolicyId", $securityPolicyId);
    }

    /**
     * IdleTimeout: 连接空闲超时时间。单位：秒
     *
     * @return integer|null
     */
    public function getIdleTimeout()
    {
        return $this->get("IdleTimeout");
    }

    /**
     * IdleTimeout: 连接空闲超时时间。单位：秒
     *
     * @param int $idleTimeout
     */
    public function setIdleTimeout($idleTimeout)
    {
        $this->set("IdleTimeout", $idleTimeout);
    }

    /**
     * Scheduler: 负载均衡算法。应用型限定取值：Roundrobin -> 轮询;Source -> 源地址； WeightRoundrobin -> 加权轮询; Leastconn -> 最小连接数；Backup ->主备模式
     *
     * @return string|null
     */
    public function getScheduler()
    {
        return $this->get("Scheduler");
    }

    /**
     * Scheduler: 负载均衡算法。应用型限定取值：Roundrobin -> 轮询;Source -> 源地址； WeightRoundrobin -> 加权轮询; Leastconn -> 最小连接数；Backup ->主备模式
     *
     * @param string $scheduler
     */
    public function setScheduler($scheduler)
    {
        $this->set("Scheduler", $scheduler);
    }

    /**
     * StickinessConfig: 会话保持相关配置。具体结构详见 StickinessConfigSet
     *
     * @return StickinessConfigSet|null
     */
    public function getStickinessConfig()
    {
        return new StickinessConfigSet($this->get("StickinessConfig"));
    }

    /**
     * StickinessConfig: 会话保持相关配置。具体结构详见 StickinessConfigSet
     *
     * @param StickinessConfigSet $stickinessConfig
     */
    public function setStickinessConfig(array $stickinessConfig)
    {
        $this->set("StickinessConfig", $stickinessConfig->getAll());
    }

    /**
     * HealthCheckConfig: 健康检查相关配置。具体结构详见 HealthCheckConfigSet
     *
     * @return HealthCheckConfigSet|null
     */
    public function getHealthCheckConfig()
    {
        return new HealthCheckConfigSet($this->get("HealthCheckConfig"));
    }

    /**
     * HealthCheckConfig: 健康检查相关配置。具体结构详见 HealthCheckConfigSet
     *
     * @param HealthCheckConfigSet $healthCheckConfig
     */
    public function setHealthCheckConfig(array $healthCheckConfig)
    {
        $this->set("HealthCheckConfig", $healthCheckConfig->getAll());
    }

    /**
     * CompressionEnabled: （应用型专用）是否开启数据压缩功能。目前只支持使用gzip对特定文件类型进行压缩
     *
     * @return boolean|null
     */
    public function getCompressionEnabled()
    {
        return $this->get("CompressionEnabled");
    }

    /**
     * CompressionEnabled: （应用型专用）是否开启数据压缩功能。目前只支持使用gzip对特定文件类型进行压缩
     *
     * @param boolean $compressionEnabled
     */
    public function setCompressionEnabled($compressionEnabled)
    {
        $this->set("CompressionEnabled", $compressionEnabled);
    }

    /**
     * HTTP2Enabled: （应用型专用）是否开启HTTP/2特性。仅HTTPS监听支持开启
     *
     * @return boolean|null
     */
    public function getHTTP2Enabled()
    {
        return $this->get("HTTP2Enabled");
    }

    /**
     * HTTP2Enabled: （应用型专用）是否开启HTTP/2特性。仅HTTPS监听支持开启
     *
     * @param boolean $http2Enabled
     */
    public function setHTTP2Enabled($http2Enabled)
    {
        $this->set("HTTP2Enabled", $http2Enabled);
    }

    /**
     * RedirectEnabled: （应用型专用）是否开启HTTP重定向到HTTPS。仅HTTP监听支持开启
     *
     * @return boolean|null
     */
    public function getRedirectEnabled()
    {
        return $this->get("RedirectEnabled");
    }

    /**
     * RedirectEnabled: （应用型专用）是否开启HTTP重定向到HTTPS。仅HTTP监听支持开启
     *
     * @param boolean $redirectEnabled
     */
    public function setRedirectEnabled($redirectEnabled)
    {
        $this->set("RedirectEnabled", $redirectEnabled);
    }

    /**
     * RedirectPort: （应用型专用）重定向端口
     *
     * @return integer|null
     */
    public function getRedirectPort()
    {
        return $this->get("RedirectPort");
    }

    /**
     * RedirectPort: （应用型专用）重定向端口
     *
     * @param int $redirectPort
     */
    public function setRedirectPort($redirectPort)
    {
        $this->set("RedirectPort", $redirectPort);
    }

    /**
     * Targets: 添加的服务节点信息。具体结构详见 Target
     *
     * @return Target[]|null
     */
    public function getTargets()
    {
        $items = $this->get("Targets");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new Target($item));
        }
        return $result;
    }

    /**
     * Targets: 添加的服务节点信息。具体结构详见 Target
     *
     * @param Target[] $targets
     */
    public function setTargets(array $targets)
    {
        $result = [];
        foreach ($targets as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Rules: （应用型专用）转发规则信息
     *
     * @return Rule[]|null
     */
    public function getRules()
    {
        $items = $this->get("Rules");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new Rule($item));
        }
        return $result;
    }

    /**
     * Rules: （应用型专用）转发规则信息
     *
     * @param Rule[] $rules
     */
    public function setRules(array $rules)
    {
        $result = [];
        foreach ($rules as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * State: listener健康状态。限定枚举值：Healthy -> 健康，Unhealthy -> 不健康，PartialHealth -> 部分健康，None -> 无节点状态
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: listener健康状态。限定枚举值：Healthy -> 健康，Unhealthy -> 不健康，PartialHealth -> 部分健康，None -> 无节点状态
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }
}
