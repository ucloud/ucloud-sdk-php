<?php
/**
 * Copyright 2022 UCloud Technology Co., Ltd.
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
namespace UCloud\IPSecVPN\Models;

use UCloud\Core\Response\Response;

class IKEData extends Response
{
    

    /**
     * IKEAuthenticationAlgorithm: IKE认证算法
     *
     * @return string|null
     */
    public function getIKEAuthenticationAlgorithm(): string
    {
        return $this->get("IKEAuthenticationAlgorithm");
    }

    /**
     * IKEAuthenticationAlgorithm: IKE认证算法
     *
     * @param string $ikeAuthenticationAlgorithm
     */
    public function setIKEAuthenticationAlgorithm(string $ikeAuthenticationAlgorithm)
    {
        $this->set("IKEAuthenticationAlgorithm", $ikeAuthenticationAlgorithm);
    }

    /**
     * IKEDhGroup: IKEDH组
     *
     * @return string|null
     */
    public function getIKEDhGroup(): string
    {
        return $this->get("IKEDhGroup");
    }

    /**
     * IKEDhGroup: IKEDH组
     *
     * @param string $ikeDhGroup
     */
    public function setIKEDhGroup(string $ikeDhGroup)
    {
        $this->set("IKEDhGroup", $ikeDhGroup);
    }

    /**
     * IKEEncryptionAlgorithm: IKE加密算法
     *
     * @return string|null
     */
    public function getIKEEncryptionAlgorithm(): string
    {
        return $this->get("IKEEncryptionAlgorithm");
    }

    /**
     * IKEEncryptionAlgorithm: IKE加密算法
     *
     * @param string $ikeEncryptionAlgorithm
     */
    public function setIKEEncryptionAlgorithm(string $ikeEncryptionAlgorithm)
    {
        $this->set("IKEEncryptionAlgorithm", $ikeEncryptionAlgorithm);
    }

    /**
     * IKEExchangeMode: IKEv1协商模式
     *
     * @return string|null
     */
    public function getIKEExchangeMode(): string
    {
        return $this->get("IKEExchangeMode");
    }

    /**
     * IKEExchangeMode: IKEv1协商模式
     *
     * @param string $ikeExchangeMode
     */
    public function setIKEExchangeMode(string $ikeExchangeMode)
    {
        $this->set("IKEExchangeMode", $ikeExchangeMode);
    }

    /**
     * IKELocalId: IKE本地ID标识
     *
     * @return string|null
     */
    public function getIKELocalId(): string
    {
        return $this->get("IKELocalId");
    }

    /**
     * IKELocalId: IKE本地ID标识
     *
     * @param string $ikeLocalId
     */
    public function setIKELocalId(string $ikeLocalId)
    {
        $this->set("IKELocalId", $ikeLocalId);
    }

    /**
     * IKEPreSharedKey: IKE预共享秘钥
     *
     * @return string|null
     */
    public function getIKEPreSharedKey(): string
    {
        return $this->get("IKEPreSharedKey");
    }

    /**
     * IKEPreSharedKey: IKE预共享秘钥
     *
     * @param string $ikePreSharedKey
     */
    public function setIKEPreSharedKey(string $ikePreSharedKey)
    {
        $this->set("IKEPreSharedKey", $ikePreSharedKey);
    }

    /**
     * IKERemoteId: IKE对端ID标识
     *
     * @return string|null
     */
    public function getIKERemoteId(): string
    {
        return $this->get("IKERemoteId");
    }

    /**
     * IKERemoteId: IKE对端ID标识
     *
     * @param string $ikeRemoteId
     */
    public function setIKERemoteId(string $ikeRemoteId)
    {
        $this->set("IKERemoteId", $ikeRemoteId);
    }

    /**
     * IKESALifetime: IKE秘钥生存时间
     *
     * @return string|null
     */
    public function getIKESALifetime(): string
    {
        return $this->get("IKESALifetime");
    }

    /**
     * IKESALifetime: IKE秘钥生存时间
     *
     * @param string $ikesaLifetime
     */
    public function setIKESALifetime(string $ikesaLifetime)
    {
        $this->set("IKESALifetime", $ikesaLifetime);
    }

    /**
     * IKEVersion: IKE版本
     *
     * @return string|null
     */
    public function getIKEVersion(): string
    {
        return $this->get("IKEVersion");
    }

    /**
     * IKEVersion: IKE版本
     *
     * @param string $ikeVersion
     */
    public function setIKEVersion(string $ikeVersion)
    {
        $this->set("IKEVersion", $ikeVersion);
    }
}
