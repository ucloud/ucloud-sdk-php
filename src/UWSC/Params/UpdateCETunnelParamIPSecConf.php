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
namespace UCloud\UWSC\Params;

use UCloud\Core\Request\Request;

class UpdateCETunnelParamIPSecConf extends Request
{
    

    /**
     * CENetwork: 需要和 VPC 互通的本地数据中心侧的网段，用于第二阶段协商。
     *
     * @return string[]|null
     */
    public function getCENetwork()
    {
        return $this->get("CENetwork");
    }

    /**
     * CENetwork: 需要和 VPC 互通的本地数据中心侧的网段，用于第二阶段协商。
     *
     * @param string[] $ceNetwork
     */
    public function setCENetwork(array $ceNetwork)
    {
        $this->set("CENetwork", $ceNetwork);
    }

    /**
     * Protocol: IPSec 安全协议，取值：“esp”，“ah”
     *
     * @return string|null
     */
    public function getProtocol()
    {
        return $this->get("Protocol");
    }

    /**
     * Protocol: IPSec 安全协议，取值：“esp”，“ah”
     *
     * @param string $protocol
     */
    public function setProtocol($protocol)
    {
        $this->set("Protocol", $protocol);
    }

    /**
     * EncryptionAlgorithm: IPSec 加密算法，取值："aes128", "aes192", "aes256", "aes512", "3des"
     *
     * @return string|null
     */
    public function getEncryptionAlgorithm()
    {
        return $this->get("EncryptionAlgorithm");
    }

    /**
     * EncryptionAlgorithm: IPSec 加密算法，取值："aes128", "aes192", "aes256", "aes512", "3des"
     *
     * @param string $encryptionAlgorithm
     */
    public function setEncryptionAlgorithm($encryptionAlgorithm)
    {
        $this->set("EncryptionAlgorithm", $encryptionAlgorithm);
    }

    /**
     * AuthenticationAlgorithm: 第二阶段协商的认证算法。取值：md5、sha1、sha2-256。
     *
     * @return string|null
     */
    public function getAuthenticationAlgorithm()
    {
        return $this->get("AuthenticationAlgorithm");
    }

    /**
     * AuthenticationAlgorithm: 第二阶段协商的认证算法。取值：md5、sha1、sha2-256。
     *
     * @param string $authenticationAlgorithm
     */
    public function setAuthenticationAlgorithm($authenticationAlgorithm)
    {
        $this->set("AuthenticationAlgorithm", $authenticationAlgorithm);
    }

    /**
     * PFSDhGroup: 第二阶段协商使用的 Diffie-Hellman 密钥交换算法。取值：disabled、1、2、5、14、15、16。
     *
     * @return string|null
     */
    public function getPFSDhGroup()
    {
        return $this->get("PFSDhGroup");
    }

    /**
     * PFSDhGroup: 第二阶段协商使用的 Diffie-Hellman 密钥交换算法。取值：disabled、1、2、5、14、15、16。
     *
     * @param string $pfsDhGroup
     */
    public function setPFSDhGroup($pfsDhGroup)
    {
        $this->set("PFSDhGroup", $pfsDhGroup);
    }

    /**
     * SALifeTime: 第二阶段协商出的 SA 的生存周期。单位：秒。取值范围：1200~604800
     *
     * @return string|null
     */
    public function getSALifeTime()
    {
        return $this->get("SALifeTime");
    }

    /**
     * SALifeTime: 第二阶段协商出的 SA 的生存周期。单位：秒。取值范围：1200~604800
     *
     * @param string $saLifeTime
     */
    public function setSALifeTime($saLifeTime)
    {
        $this->set("SALifeTime", $saLifeTime);
    }

    /**
     * SALifetimeBytes: 第二阶段协商出的 SA 的生存周期。单位：字节 KB。取值范围：8000 – 20000000，默认使用SA超时时间
     *
     * @return string|null
     */
    public function getSALifetimeBytes()
    {
        return $this->get("SALifetimeBytes");
    }

    /**
     * SALifetimeBytes: 第二阶段协商出的 SA 的生存周期。单位：字节 KB。取值范围：8000 – 20000000，默认使用SA超时时间
     *
     * @param string $saLifetimeBytes
     */
    public function setSALifetimeBytes($saLifetimeBytes)
    {
        $this->set("SALifetimeBytes", $saLifetimeBytes);
    }
}
