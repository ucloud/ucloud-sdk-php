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
namespace UCloud\Sandbox\Models;

use UCloud\Core\Response\Response;

class Site extends Response
{
    

    /**
     * Name: 名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Ready: 是否就绪
     *
     * @return boolean|null
     */
    public function getReady()
    {
        return $this->get("Ready");
    }

    /**
     * Ready: 是否就绪
     *
     * @param boolean $ready
     */
    public function setReady($ready)
    {
        $this->set("Ready", $ready);
    }

    /**
     * ID: 站点ID
     *
     * @return string|null
     */
    public function getID()
    {
        return $this->get("ID");
    }

    /**
     * ID: 站点ID
     *
     * @param string $id
     */
    public function setID($id)
    {
        $this->set("ID", $id);
    }

    /**
     * SandboxID: 沙箱ID
     *
     * @return string|null
     */
    public function getSandboxID()
    {
        return $this->get("SandboxID");
    }

    /**
     * SandboxID: 沙箱ID
     *
     * @param string $sandboxID
     */
    public function setSandboxID($sandboxID)
    {
        $this->set("SandboxID", $sandboxID);
    }

    /**
     * Host: 站点访问地址
     *
     * @return string|null
     */
    public function getHost()
    {
        return $this->get("Host");
    }

    /**
     * Host: 站点访问地址
     *
     * @param string $host
     */
    public function setHost($host)
    {
        $this->set("Host", $host);
    }

    /**
     * KeyID: 站点Key ID
     *
     * @return string|null
     */
    public function getKeyID()
    {
        return $this->get("KeyID");
    }

    /**
     * KeyID: 站点Key ID
     *
     * @param string $keyID
     */
    public function setKeyID($keyID)
    {
        $this->set("KeyID", $keyID);
    }

    /**
     * UpdateTime: 更新时间
     *
     * @return integer|null
     */
    public function getUpdateTime()
    {
        return $this->get("UpdateTime");
    }

    /**
     * UpdateTime: 更新时间
     *
     * @param int $updateTime
     */
    public function setUpdateTime($updateTime)
    {
        $this->set("UpdateTime", $updateTime);
    }

    /**
     * AccessCode: 访问码
     *
     * @return string|null
     */
    public function getAccessCode()
    {
        return $this->get("AccessCode");
    }

    /**
     * AccessCode: 访问码
     *
     * @param string $accessCode
     */
    public function setAccessCode($accessCode)
    {
        $this->set("AccessCode", $accessCode);
    }

    /**
     * ConnectKey: 连接密钥
     *
     * @return string|null
     */
    public function getConnectKey()
    {
        return $this->get("ConnectKey");
    }

    /**
     * ConnectKey: 连接密钥
     *
     * @param string $connectKey
     */
    public function setConnectKey($connectKey)
    {
        $this->set("ConnectKey", $connectKey);
    }

    /**
     * Envs: 站点环境变量。格式：["key=value"]
     *
     * @return string[]|null
     */
    public function getEnvs()
    {
        return $this->get("Envs");
    }

    /**
     * Envs: 站点环境变量。格式：["key=value"]
     *
     * @param string[] $envs
     */
    public function setEnvs(array $envs)
    {
        $this->set("Envs", $envs);
    }

    /**
     * CustomDomain: 自定义域名
     *
     * @return string|null
     */
    public function getCustomDomain()
    {
        return $this->get("CustomDomain");
    }

    /**
     * CustomDomain: 自定义域名
     *
     * @param string $customDomain
     */
    public function setCustomDomain($customDomain)
    {
        $this->set("CustomDomain", $customDomain);
    }

    /**
     * CustomDomainStatus: 自定义域名签发状态
     *
     * @return string|null
     */
    public function getCustomDomainStatus()
    {
        return $this->get("CustomDomainStatus");
    }

    /**
     * CustomDomainStatus: 自定义域名签发状态
     *
     * @param string $customDomainStatus
     */
    public function setCustomDomainStatus($customDomainStatus)
    {
        $this->set("CustomDomainStatus", $customDomainStatus);
    }

    /**
     * CustomDomainError: 自定义域名签发错误信息
     *
     * @return string|null
     */
    public function getCustomDomainError()
    {
        return $this->get("CustomDomainError");
    }

    /**
     * CustomDomainError: 自定义域名签发错误信息
     *
     * @param string $customDomainError
     */
    public function setCustomDomainError($customDomainError)
    {
        $this->set("CustomDomainError", $customDomainError);
    }

    /**
     * IPAccess: IP限制
     *
     * @return SiteIPAccess|null
     */
    public function getIPAccess()
    {
        return new SiteIPAccess($this->get("IPAccess"));
    }

    /**
     * IPAccess: IP限制
     *
     * @param SiteIPAccess $ipAccess
     */
    public function setIPAccess(array $ipAccess)
    {
        $this->set("IPAccess", $ipAccess->getAll());
    }
}
