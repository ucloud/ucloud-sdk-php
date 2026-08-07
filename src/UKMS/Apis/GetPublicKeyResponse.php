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

class GetPublicKeyResponse extends Response
{
    

    /**
     * KeyId: 密钥 ID。
     *
     * @return string|null
     */
    public function getKeyId()
    {
        return $this->get("KeyId");
    }

    /**
     * KeyId: 密钥 ID。
     *
     * @param string $keyId
     */
    public function setKeyId($keyId)
    {
        $this->set("KeyId", $keyId);
    }

    /**
     * KmsPublicKey: PEM 或 DER 编码的公钥。
     *
     * @return string|null
     */
    public function getKmsPublicKey()
    {
        return $this->get("KmsPublicKey");
    }

    /**
     * KmsPublicKey: PEM 或 DER 编码的公钥。
     *
     * @param string $kmsPublicKey
     */
    public function setKmsPublicKey($kmsPublicKey)
    {
        $this->set("KmsPublicKey", $kmsPublicKey);
    }

    /**
     * KeySpec: 密钥规格。取值：SYMMETRIC_DEFAULT、RSA_2048、RSA_3072、RSA_4096、ECC_NIST_P256、ECC_NIST_P384、ECC_NIST_P521、HMAC_256、HMAC_384、HMAC_512。
     *
     * @return string|null
     */
    public function getKeySpec()
    {
        return $this->get("KeySpec");
    }

    /**
     * KeySpec: 密钥规格。取值：SYMMETRIC_DEFAULT、RSA_2048、RSA_3072、RSA_4096、ECC_NIST_P256、ECC_NIST_P384、ECC_NIST_P521、HMAC_256、HMAC_384、HMAC_512。
     *
     * @param string $keySpec
     */
    public function setKeySpec($keySpec)
    {
        $this->set("KeySpec", $keySpec);
    }

    /**
     * KeyUsage: 密钥用途。取值：ENCRYPT_DECRYPT、SIGN_VERIFY、GENERATE_VERIFY_MAC、KEY_AGREEMENT。
     *
     * @return string[]|null
     */
    public function getKeyUsage()
    {
        return $this->get("KeyUsage");
    }

    /**
     * KeyUsage: 密钥用途。取值：ENCRYPT_DECRYPT、SIGN_VERIFY、GENERATE_VERIFY_MAC、KEY_AGREEMENT。
     *
     * @param string[] $keyUsage
     */
    public function setKeyUsage(array $keyUsage)
    {
        $this->set("KeyUsage", $keyUsage);
    }

    /**
     * SigningAlgorithms: 支持的签名算法列表。取值范围：RSASSA_PSS_SHA_256、RSASSA_PSS_SHA_384、RSASSA_PSS_SHA_512、RSASSA_PKCS1_V1_5_SHA_256、RSASSA_PKCS1_V1_5_SHA_384、RSASSA_PKCS1_V1_5_SHA_512、ECDSA_SHA_256、ECDSA_SHA_384、ECDSA_SHA_512。
     *
     * @return string[]|null
     */
    public function getSigningAlgorithms()
    {
        return $this->get("SigningAlgorithms");
    }

    /**
     * SigningAlgorithms: 支持的签名算法列表。取值范围：RSASSA_PSS_SHA_256、RSASSA_PSS_SHA_384、RSASSA_PSS_SHA_512、RSASSA_PKCS1_V1_5_SHA_256、RSASSA_PKCS1_V1_5_SHA_384、RSASSA_PKCS1_V1_5_SHA_512、ECDSA_SHA_256、ECDSA_SHA_384、ECDSA_SHA_512。
     *
     * @param string[] $signingAlgorithms
     */
    public function setSigningAlgorithms(array $signingAlgorithms)
    {
        $this->set("SigningAlgorithms", $signingAlgorithms);
    }

    /**
     * EncryptionAlgorithms: 支持的加密算法列表。取值范围：RSAES_OAEP_SHA_1、RSAES_OAEP_SHA_256。
     *
     * @return string[]|null
     */
    public function getEncryptionAlgorithms()
    {
        return $this->get("EncryptionAlgorithms");
    }

    /**
     * EncryptionAlgorithms: 支持的加密算法列表。取值范围：RSAES_OAEP_SHA_1、RSAES_OAEP_SHA_256。
     *
     * @param string[] $encryptionAlgorithms
     */
    public function setEncryptionAlgorithms(array $encryptionAlgorithms)
    {
        $this->set("EncryptionAlgorithms", $encryptionAlgorithms);
    }
}
