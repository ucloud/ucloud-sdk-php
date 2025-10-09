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

class CreateSecurityPolicyRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateSecurityPolicy"]);
        $this->markRequired("Region");
        $this->markRequired("ProjectId");
        $this->markRequired("TLSVersion");
        $this->markRequired("SSLCiphers");
        $this->markRequired("SecurityPolicyName");
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
     * TLSVersion: TLS版本
     *
     * @return string|null
     */
    public function getTLSVersion()
    {
        return $this->get("TLSVersion");
    }

    /**
     * TLSVersion: TLS版本
     *
     * @param string $tlsVersion
     */
    public function setTLSVersion($tlsVersion)
    {
        $this->set("TLSVersion", $tlsVersion);
    }

    /**
     * SSLCiphers: 加密套件
     *
     * @return string[]|null
     */
    public function getSSLCiphers()
    {
        return $this->get("SSLCiphers");
    }

    /**
     * SSLCiphers: 加密套件
     *
     * @param string[] $sslCiphers
     */
    public function setSSLCiphers(array $sslCiphers)
    {
        $this->set("SSLCiphers", $sslCiphers);
    }

    /**
     * SecurityPolicyName: 安全策略名称
     *
     * @return string|null
     */
    public function getSecurityPolicyName()
    {
        return $this->get("SecurityPolicyName");
    }

    /**
     * SecurityPolicyName: 安全策略名称
     *
     * @param string $securityPolicyName
     */
    public function setSecurityPolicyName($securityPolicyName)
    {
        $this->set("SecurityPolicyName", $securityPolicyName);
    }
}
