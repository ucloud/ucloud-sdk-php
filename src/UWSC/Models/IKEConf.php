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

class IKEConf extends Response
{
    

    /**
     * PreSharedKey: 预共享密钥
     *
     * @return string|null
     */
    public function getPreSharedKey()
    {
        return $this->get("PreSharedKey");
    }

    /**
     * PreSharedKey: 预共享密钥
     *
     * @param string $preSharedKey
     */
    public function setPreSharedKey($preSharedKey)
    {
        $this->set("PreSharedKey", $preSharedKey);
    }

    /**
     * Version: 版本
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->get("Version");
    }

    /**
     * Version: 版本
     *
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->set("Version", $version);
    }

    /**
     * ExchangeMode: 协商模式
     *
     * @return string|null
     */
    public function getExchangeMode()
    {
        return $this->get("ExchangeMode");
    }

    /**
     * ExchangeMode: 协商模式
     *
     * @param string $exchangeMode
     */
    public function setExchangeMode($exchangeMode)
    {
        $this->set("ExchangeMode", $exchangeMode);
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
     * DhGroup: 分组信息
     *
     * @return string|null
     */
    public function getDhGroup()
    {
        return $this->get("DhGroup");
    }

    /**
     * DhGroup: 分组信息
     *
     * @param string $dhGroup
     */
    public function setDhGroup($dhGroup)
    {
        $this->set("DhGroup", $dhGroup);
    }

    /**
     * LocalId: 本端标识
     *
     * @return string|null
     */
    public function getLocalId()
    {
        return $this->get("LocalId");
    }

    /**
     * LocalId: 本端标识
     *
     * @param string $localId
     */
    public function setLocalId($localId)
    {
        $this->set("LocalId", $localId);
    }

    /**
     * RemoteId: 对端标识
     *
     * @return string|null
     */
    public function getRemoteId()
    {
        return $this->get("RemoteId");
    }

    /**
     * RemoteId: 对端标识
     *
     * @param string $remoteId
     */
    public function setRemoteId($remoteId)
    {
        $this->set("RemoteId", $remoteId);
    }

    /**
     * SALifeTime: IKE SA的生存周期
     *
     * @return string|null
     */
    public function getSALifeTime()
    {
        return $this->get("SALifeTime");
    }

    /**
     * SALifeTime: IKE SA的生存周期
     *
     * @param string $saLifeTime
     */
    public function setSALifeTime($saLifeTime)
    {
        $this->set("SALifeTime", $saLifeTime);
    }
}
