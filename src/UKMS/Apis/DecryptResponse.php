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
namespace UCloud\UKMS\Apis;

use UCloud\Core\Response\Response;

class DecryptResponse extends Response
{
    

    /**
     * Plaintext: 解密后的明文，Base64 编码。
     *
     * @return string|null
     */
    public function getPlaintext()
    {
        return $this->get("Plaintext");
    }

    /**
     * Plaintext: 解密后的明文，Base64 编码。
     *
     * @param string $plaintext
     */
    public function setPlaintext($plaintext)
    {
        $this->set("Plaintext", $plaintext);
    }

    /**
     * KeyId: 密钥资源长 ID。
     *
     * @return string|null
     */
    public function getKeyId()
    {
        return $this->get("KeyId");
    }

    /**
     * KeyId: 密钥资源长 ID。
     *
     * @param string $keyId
     */
    public function setKeyId($keyId)
    {
        $this->set("KeyId", $keyId);
    }

    /**
     * EncryptionAlgorithm: 实际使用的解密算法。取值：SYMMETRIC_DEFAULT、RSAES_OAEP_SHA_1、RSAES_OAEP_SHA_256。
     *
     * @return string|null
     */
    public function getEncryptionAlgorithm()
    {
        return $this->get("EncryptionAlgorithm");
    }

    /**
     * EncryptionAlgorithm: 实际使用的解密算法。取值：SYMMETRIC_DEFAULT、RSAES_OAEP_SHA_1、RSAES_OAEP_SHA_256。
     *
     * @param string $encryptionAlgorithm
     */
    public function setEncryptionAlgorithm($encryptionAlgorithm)
    {
        $this->set("EncryptionAlgorithm", $encryptionAlgorithm);
    }
}
