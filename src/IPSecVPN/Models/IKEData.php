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
    public function getIKEAuthenticationAlgorithm()
    {
        return $this->get("IKEAuthenticationAlgorithm");
    }

    /**
     * IKEAuthenticationAlgorithm: IKE认证算法
     *
     * @param string $ikeAuthenticationAlgorithm
     */
    public function setIKEAuthenticationAlgorithm($ikeAuthenticationAlgorithm)
    {
        $this->set("IKEAuthenticationAlgorithm", $ikeAuthenticationAlgorithm);
    }

    /**
     * IKEDhGroup: IKEDH组
     *
     * @return string|null
     */
    public function getIKEDhGroup()
    {
        return $this->get("IKEDhGroup");
    }

    /**
     * IKEDhGroup: IKEDH组
     *
     * @param string $ikeDhGroup
     */
    public function setIKEDhGroup($ikeDhGroup)
    {
        $this->set("IKEDhGroup", $ikeDhGroup);
    }

    /**
     * IKEEncryptionAlgorithm: IKE加密算法
     *
     * @return string|null
     */
    public function getIKEEncryptionAlgorithm()
    {
        return $this->get("IKEEncryptionAlgorithm");
    }

    /**
     * IKEEncryptionAlgorithm: IKE加密算法
     *
     * @param string $ikeEncryptionAlgorithm
     */
    public function setIKEEncryptionAlgorithm($ikeEncryptionAlgorithm)
    {
        $this->set("IKEEncryptionAlgorithm", $ikeEncryptionAlgorithm);
    }

    /**
     * IKEExchangeMode: IKEv1协商模式
     *
     * @return string|null
     */
    public function getIKEExchangeMode()
    {
        return $this->get("IKEExchangeMode");
    }

    /**
     * IKEExchangeMode: IKEv1协商模式
     *
     * @param string $ikeExchangeMode
     */
    public function setIKEExchangeMode($ikeExchangeMode)
    {
        $this->set("IKEExchangeMode", $ikeExchangeMode);
    }

    /**
     * IKELocalId: IKE本地ID标识
     *
     * @return string|null
     */
    public function getIKELocalId()
    {
        return $this->get("IKELocalId");
    }

    /**
     * IKELocalId: IKE本地ID标识
     *
     * @param string $ikeLocalId
     */
    public function setIKELocalId($ikeLocalId)
    {
        $this->set("IKELocalId", $ikeLocalId);
    }

    /**
     * IKEPreSharedKey: IKE预共享秘钥
     *
     * @return string|null
     */
    public function getIKEPreSharedKey()
    {
        return $this->get("IKEPreSharedKey");
    }

    /**
     * IKEPreSharedKey: IKE预共享秘钥
     *
     * @param string $ikePreSharedKey
     */
    public function setIKEPreSharedKey($ikePreSharedKey)
    {
        $this->set("IKEPreSharedKey", $ikePreSharedKey);
    }

    /**
     * IKERemoteId: IKE对端ID标识
     *
     * @return string|null
     */
    public function getIKERemoteId()
    {
        return $this->get("IKERemoteId");
    }

    /**
     * IKERemoteId: IKE对端ID标识
     *
     * @param string $ikeRemoteId
     */
    public function setIKERemoteId($ikeRemoteId)
    {
        $this->set("IKERemoteId", $ikeRemoteId);
    }

    /**
     * IKESALifetime: IKE秘钥生存时间
     *
     * @return string|null
     */
    public function getIKESALifetime()
    {
        return $this->get("IKESALifetime");
    }

    /**
     * IKESALifetime: IKE秘钥生存时间
     *
     * @param string $ikesaLifetime
     */
    public function setIKESALifetime($ikesaLifetime)
    {
        $this->set("IKESALifetime", $ikesaLifetime);
    }

    /**
     * IKEVersion: IKE版本
     *
     * @return string|null
     */
    public function getIKEVersion()
    {
        return $this->get("IKEVersion");
    }

    /**
     * IKEVersion: IKE版本
     *
     * @param string $ikeVersion
     */
    public function setIKEVersion($ikeVersion)
    {
        $this->set("IKEVersion", $ikeVersion);
    }
}
