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

namespace UCloud\UHost\Apis;

use UCloud\Core\Response\Response;

class ImportUHostKeyPairsResponse extends Response
{

    /**
     * KeyPairName: 密钥对名称
     *
     * @return string|null
     */
    public function getKeyPairName()
    {
        return $this->get("KeyPairName");
    }

    /**
     * KeyPairName: 密钥对名称
     *
     * @param string $keyPairName
     */
    public function setKeyPairName(string $keyPairName)
    {
        $this->set("KeyPairName", $keyPairName);
    }
    /**
     * KeyPairId: 密钥对标识
     *
     * @return string|null
     */
    public function getKeyPairId()
    {
        return $this->get("KeyPairId");
    }

    /**
     * KeyPairId: 密钥对标识
     *
     * @param string $keyPairId
     */
    public function setKeyPairId(string $keyPairId)
    {
        $this->set("KeyPairId", $keyPairId);
    }
    /**
     * KeyPairFingerPrint: 密钥对指纹。根据RFC4716定义的公钥指纹格式，采用MD5信息摘要算法。算法处理的具体信息格式：`ProjectIdKeyPairId|PublicKeyBody`。
     *
     * @return string|null
     */
    public function getKeyPairFingerPrint()
    {
        return $this->get("KeyPairFingerPrint");
    }

    /**
     * KeyPairFingerPrint: 密钥对指纹。根据RFC4716定义的公钥指纹格式，采用MD5信息摘要算法。算法处理的具体信息格式：`ProjectIdKeyPairId|PublicKeyBody`。
     *
     * @param string $keyPairFingerPrint
     */
    public function setKeyPairFingerPrint(string $keyPairFingerPrint)
    {
        $this->set("KeyPairFingerPrint", $keyPairFingerPrint);
    }
}
