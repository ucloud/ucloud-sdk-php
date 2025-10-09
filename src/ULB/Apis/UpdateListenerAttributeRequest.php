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
namespace UCloud\ULB\Apis;

use UCloud\Core\Request\Request;
use UCloud\ULB\Params\UpdateListenerAttributeParamStickinessConfig;
use UCloud\ULB\Params\UpdateListenerAttributeParamHealthCheckConfig;

class UpdateListenerAttributeRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateListenerAttribute"]);
        $this->markRequired("Region");
        $this->markRequired("ProjectId");
        $this->markRequired("LoadBalancerId");
        $this->markRequired("ListenerId");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

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
     * Name: 监听器的名称。限定字符长度：[1-255]；限定特殊字符，仅支持：-_.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 监听器的名称。限定字符长度：[1-255]；限定特殊字符，仅支持：-_.
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Remark: 监听器的备注信息。限定字符长度：[0-255]
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 监听器的备注信息。限定字符长度：[0-255]
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * Certificates: （应用型专用）服务器默认证书ID。仅HTTPS监听支持
     *
     * @return string[]|null
     */
    public function getCertificates()
    {
        return $this->get("Certificates");
    }

    /**
     * Certificates: （应用型专用）服务器默认证书ID。仅HTTPS监听支持
     *
     * @param string[] $certificates
     */
    public function setCertificates(array $certificates)
    {
        $this->set("Certificates", $certificates);
    }

    /**
     * SecurityPolicyId: （应用型专用）安全策略组ID。仅HTTPS监听支持绑定。“Default”，表示绑定原生策略
     *
     * @return string|null
     */
    public function getSecurityPolicyId()
    {
        return $this->get("SecurityPolicyId");
    }

    /**
     * SecurityPolicyId: （应用型专用）安全策略组ID。仅HTTPS监听支持绑定。“Default”，表示绑定原生策略
     *
     * @param string $securityPolicyId
     */
    public function setSecurityPolicyId($securityPolicyId)
    {
        $this->set("SecurityPolicyId", $securityPolicyId);
    }

    /**
     * IdleTimeout: 连接空闲超时时间。单位：秒。应用型限定取值：[1-86400]
     *
     * @return integer|null
     */
    public function getIdleTimeout()
    {
        return $this->get("IdleTimeout");
    }

    /**
     * IdleTimeout: 连接空闲超时时间。单位：秒。应用型限定取值：[1-86400]
     *
     * @param int $idleTimeout
     */
    public function setIdleTimeout($idleTimeout)
    {
        $this->set("IdleTimeout", $idleTimeout);
    }

    /**
     * Scheduler: 负载均衡算法。应用型限定取值："Roundrobin"/"Source"/"WeightRoundrobin"/" Leastconn"/"Backup"
     *
     * @return string|null
     */
    public function getScheduler()
    {
        return $this->get("Scheduler");
    }

    /**
     * Scheduler: 负载均衡算法。应用型限定取值："Roundrobin"/"Source"/"WeightRoundrobin"/" Leastconn"/"Backup"
     *
     * @param string $scheduler
     */
    public function setScheduler($scheduler)
    {
        $this->set("Scheduler", $scheduler);
    }

    /**
     * StickinessConfig:
     *
     * @return UpdateListenerAttributeParamStickinessConfig|null
     */
    public function getStickinessConfig()
    {
        return new UpdateListenerAttributeParamStickinessConfig($this->get("StickinessConfig"));
    }

    /**
     * StickinessConfig:
     *
     * @param UpdateListenerAttributeParamStickinessConfig $stickinessConfig
     */
    public function setStickinessConfig(array $stickinessConfig)
    {
        $this->set("StickinessConfig", $stickinessConfig->getAll());
    }

    /**
     * HealthCheckConfig:
     *
     * @return UpdateListenerAttributeParamHealthCheckConfig|null
     */
    public function getHealthCheckConfig()
    {
        return new UpdateListenerAttributeParamHealthCheckConfig($this->get("HealthCheckConfig"));
    }

    /**
     * HealthCheckConfig:
     *
     * @param UpdateListenerAttributeParamHealthCheckConfig $healthCheckConfig
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
     * RedirectPort: （应用型专用）重定向端口。限定取值：[1-65535]
     *
     * @return integer|null
     */
    public function getRedirectPort()
    {
        return $this->get("RedirectPort");
    }

    /**
     * RedirectPort: （应用型专用）重定向端口。限定取值：[1-65535]
     *
     * @param int $redirectPort
     */
    public function setRedirectPort($redirectPort)
    {
        $this->set("RedirectPort", $redirectPort);
    }
}
