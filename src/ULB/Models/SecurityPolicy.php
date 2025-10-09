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

class SecurityPolicy extends Response
{
    

    /**
     * SecurityPolicyId: 安全策略ID
     *
     * @return string|null
     */
    public function getSecurityPolicyId()
    {
        return $this->get("SecurityPolicyId");
    }

    /**
     * SecurityPolicyId: 安全策略ID
     *
     * @param string $securityPolicyId
     */
    public function setSecurityPolicyId($securityPolicyId)
    {
        $this->set("SecurityPolicyId", $securityPolicyId);
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

    /**
     * TLSVersion: TLS最低版本
     *
     * @return string|null
     */
    public function getTLSVersion()
    {
        return $this->get("TLSVersion");
    }

    /**
     * TLSVersion: TLS最低版本
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
     * SecurityPolicyType: 安全策略类型 0：预定义 1：自定义
     *
     * @return integer|null
     */
    public function getSecurityPolicyType()
    {
        return $this->get("SecurityPolicyType");
    }

    /**
     * SecurityPolicyType: 安全策略类型 0：预定义 1：自定义
     *
     * @param int $securityPolicyType
     */
    public function setSecurityPolicyType($securityPolicyType)
    {
        $this->set("SecurityPolicyType", $securityPolicyType);
    }

    /**
     * VServerSet: 关联的监听
     *
     * @return BindVServerInfo[]|null
     */
    public function getVServerSet()
    {
        $items = $this->get("VServerSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new BindVServerInfo($item));
        }
        return $result;
    }

    /**
     * VServerSet: 关联的监听
     *
     * @param BindVServerInfo[] $vServerSet
     */
    public function setVServerSet(array $vServerSet)
    {
        $result = [];
        foreach ($vServerSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
