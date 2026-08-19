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
namespace UCloud\UWSC\Models;

use UCloud\Core\Response\Response;

class IPSecConf extends Response
{
    

    /**
     * CENetwork: 客户网段
     *
     * @return string[]|null
     */
    public function getCENetwork()
    {
        return $this->get("CENetwork");
    }

    /**
     * CENetwork: 客户网段
     *
     * @param string[] $ceNetwork
     */
    public function setCENetwork(array $ceNetwork)
    {
        $this->set("CENetwork", $ceNetwork);
    }

    /**
     * Protocol: 安全协议
     *
     * @return string|null
     */
    public function getProtocol()
    {
        return $this->get("Protocol");
    }

    /**
     * Protocol: 安全协议
     *
     * @param string $protocol
     */
    public function setProtocol($protocol)
    {
        $this->set("Protocol", $protocol);
    }

    /**
     * EncryptionAlgorithm: 加密算法
     *
     * @return string|null
     */
    public function getEncryptionAlgorithm()
    {
        return $this->get("EncryptionAlgorithm");
    }

    /**
     * EncryptionAlgorithm: 加密算法
     *
     * @param string $encryptionAlgorithm
     */
    public function setEncryptionAlgorithm($encryptionAlgorithm)
    {
        $this->set("EncryptionAlgorithm", $encryptionAlgorithm);
    }

    /**
     * AuthenticationAlgorithm: 认证算法
     *
     * @return string|null
     */
    public function getAuthenticationAlgorithm()
    {
        return $this->get("AuthenticationAlgorithm");
    }

    /**
     * AuthenticationAlgorithm: 认证算法
     *
     * @param string $authenticationAlgorithm
     */
    public function setAuthenticationAlgorithm($authenticationAlgorithm)
    {
        $this->set("AuthenticationAlgorithm", $authenticationAlgorithm);
    }

    /**
     * PFSDhGroup: 第二阶段协商使用的 Diffie-Hellman 密钥交换算法
     *
     * @return string|null
     */
    public function getPFSDhGroup()
    {
        return $this->get("PFSDhGroup");
    }

    /**
     * PFSDhGroup: 第二阶段协商使用的 Diffie-Hellman 密钥交换算法
     *
     * @param string $pfsDhGroup
     */
    public function setPFSDhGroup($pfsDhGroup)
    {
        $this->set("PFSDhGroup", $pfsDhGroup);
    }

    /**
     * SALifeTime: 第二阶段的 SA 的生存周期
     *
     * @return string|null
     */
    public function getSALifeTime()
    {
        return $this->get("SALifeTime");
    }

    /**
     * SALifeTime: 第二阶段的 SA 的生存周期
     *
     * @param string $saLifeTime
     */
    public function setSALifeTime($saLifeTime)
    {
        $this->set("SALifeTime", $saLifeTime);
    }

    /**
     * SALifetimeBytes: 第二阶段的 SA 的生存周期
     *
     * @return string|null
     */
    public function getSALifetimeBytes()
    {
        return $this->get("SALifetimeBytes");
    }

    /**
     * SALifetimeBytes: 第二阶段的 SA 的生存周期
     *
     * @param string $saLifetimeBytes
     */
    public function setSALifetimeBytes($saLifetimeBytes)
    {
        $this->set("SALifetimeBytes", $saLifetimeBytes);
    }
}
