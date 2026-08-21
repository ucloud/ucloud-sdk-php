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

class GenerateDataKeyPairResponse extends Response
{
    

    /**
     * KeyId: 用于加密私钥的 KMS 密钥
     *
     * @return string|null
     */
    public function getKeyId()
    {
        return $this->get("KeyId");
    }

    /**
     * KeyId: 用于加密私钥的 KMS 密钥
     *
     * @param string $keyId
     */
    public function setKeyId($keyId)
    {
        $this->set("KeyId", $keyId);
    }

    /**
     * KeyPairSpec: 生成的数据键对类型。
     *
     * @return string|null
     */
    public function getKeyPairSpec()
    {
        return $this->get("KeyPairSpec");
    }

    /**
     * KeyPairSpec: 生成的数据键对类型。
     *
     * @param string $keyPairSpec
     */
    public function setKeyPairSpec($keyPairSpec)
    {
        $this->set("KeyPairSpec", $keyPairSpec);
    }

    /**
     * PrivateKeyCiphertextBlob: 私钥的加密副本。
     *
     * @return string|null
     */
    public function getPrivateKeyCiphertextBlob()
    {
        return $this->get("PrivateKeyCiphertextBlob");
    }

    /**
     * PrivateKeyCiphertextBlob: 私钥的加密副本。
     *
     * @param string $privateKeyCiphertextBlob
     */
    public function setPrivateKeyCiphertextBlob($privateKeyCiphertextBlob)
    {
        $this->set("PrivateKeyCiphertextBlob", $privateKeyCiphertextBlob);
    }

    /**
     * PrivateKeyPlaintext: 私钥的明文副本。
     *
     * @return string|null
     */
    public function getPrivateKeyPlaintext()
    {
        return $this->get("PrivateKeyPlaintext");
    }

    /**
     * PrivateKeyPlaintext: 私钥的明文副本。
     *
     * @param string $privateKeyPlaintext
     */
    public function setPrivateKeyPlaintext($privateKeyPlaintext)
    {
        $this->set("PrivateKeyPlaintext", $privateKeyPlaintext);
    }

    /**
     * DataPublicKey: 公钥（明文）。
     *
     * @return string|null
     */
    public function getDataPublicKey()
    {
        return $this->get("DataPublicKey");
    }

    /**
     * DataPublicKey: 公钥（明文）。
     *
     * @param string $dataPublicKey
     */
    public function setDataPublicKey($dataPublicKey)
    {
        $this->set("DataPublicKey", $dataPublicKey);
    }
}
