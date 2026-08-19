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

class CreateCETunnelParamIKEConf extends Request
{
    

    /**
     * PreSharedKey: IKE 共享密钥
     *
     * @return string|null
     */
    public function getPreSharedKey()
    {
        return $this->get("PreSharedKey");
    }

    /**
     * PreSharedKey: IKE 共享密钥
     *
     * @param string $preSharedKey
     */
    public function setPreSharedKey($preSharedKey)
    {
        $this->set("PreSharedKey", $preSharedKey);
    }

    /**
     * Version: IKE 版本，取值： "ike v1"，"ike v2"
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->get("Version");
    }

    /**
     * Version: IKE 版本，取值： "ike v1"，"ike v2"
     *
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->set("Version", $version);
    }

    /**
     * ExchangeMode: IKE 协商模式，主模式(main)/野蛮模式(aggressive)，IKE V2时不使用该参数
     *
     * @return string|null
     */
    public function getExchangeMode()
    {
        return $this->get("ExchangeMode");
    }

    /**
     * ExchangeMode: IKE 协商模式，主模式(main)/野蛮模式(aggressive)，IKE V2时不使用该参数
     *
     * @param string $exchangeMode
     */
    public function setExchangeMode($exchangeMode)
    {
        $this->set("ExchangeMode", $exchangeMode);
    }

    /**
     * EncryptionAlgorithm: IKE 加密算法，取值："aes128", "aes192", "aes256", "aes512", "3des"
     *
     * @return string|null
     */
    public function getEncryptionAlgorithm()
    {
        return $this->get("EncryptionAlgorithm");
    }

    /**
     * EncryptionAlgorithm: IKE 加密算法，取值："aes128", "aes192", "aes256", "aes512", "3des"
     *
     * @param string $encryptionAlgorithm
     */
    public function setEncryptionAlgorithm($encryptionAlgorithm)
    {
        $this->set("EncryptionAlgorithm", $encryptionAlgorithm);
    }

    /**
     * AuthenticationAlgorithm: IKE 认证算法，取值："md5", "sha1", "sha2-256"
     *
     * @return string|null
     */
    public function getAuthenticationAlgorithm()
    {
        return $this->get("AuthenticationAlgorithm");
    }

    /**
     * AuthenticationAlgorithm: IKE 认证算法，取值："md5", "sha1", "sha2-256"
     *
     * @param string $authenticationAlgorithm
     */
    public function setAuthenticationAlgorithm($authenticationAlgorithm)
    {
        $this->set("AuthenticationAlgorithm", $authenticationAlgorithm);
    }

    /**
     * DhGroup: DH group，指定IKE交换密钥时使用的DH组。取值："1", "2", "5", "14", "15", "16"
     *
     * @return string|null
     */
    public function getDhGroup()
    {
        return $this->get("DhGroup");
    }

    /**
     * DhGroup: DH group，指定IKE交换密钥时使用的DH组。取值："1", "2", "5", "14", "15", "16"
     *
     * @param string $dhGroup
     */
    public function setDhGroup($dhGroup)
    {
        $this->set("DhGroup", $dhGroup);
    }

    /**
     * LocalId: 本端标识，取值：“auto”，“<ip-address>”
     *
     * @return string|null
     */
    public function getLocalId()
    {
        return $this->get("LocalId");
    }

    /**
     * LocalId: 本端标识，取值：“auto”，“<ip-address>”
     *
     * @param string $localId
     */
    public function setLocalId($localId)
    {
        $this->set("LocalId", $localId);
    }

    /**
     * RemoteId: 对端标识，取值：“auto”，“<ip-address>”
     *
     * @return string|null
     */
    public function getRemoteId()
    {
        return $this->get("RemoteId");
    }

    /**
     * RemoteId: 对端标识，取值：“auto”，“<ip-address>”
     *
     * @param string $remoteId
     */
    public function setRemoteId($remoteId)
    {
        $this->set("RemoteId", $remoteId);
    }

    /**
     * SALifeTime: IKE SA的生存周期，取值范围：600-604800
     *
     * @return string|null
     */
    public function getSALifeTime()
    {
        return $this->get("SALifeTime");
    }

    /**
     * SALifeTime: IKE SA的生存周期，取值范围：600-604800
     *
     * @param string $saLifeTime
     */
    public function setSALifeTime($saLifeTime)
    {
        $this->set("SALifeTime", $saLifeTime);
    }
}
