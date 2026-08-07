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

class SignResponse extends Response
{
    

    /**
     * SignatureResult: 签名结果，Base64 编码。
     *
     * @return string|null
     */
    public function getSignatureResult()
    {
        return $this->get("SignatureResult");
    }

    /**
     * SignatureResult: 签名结果，Base64 编码。
     *
     * @param string $signatureResult
     */
    public function setSignatureResult($signatureResult)
    {
        $this->set("SignatureResult", $signatureResult);
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
     * SigningAlgorithm: 实际使用的签名算法。取值：RSASSA_PSS_SHA_256、RSASSA_PSS_SHA_384、RSASSA_PSS_SHA_512、RSASSA_PKCS1_V1_5_SHA_256、RSASSA_PKCS1_V1_5_SHA_384、RSASSA_PKCS1_V1_5_SHA_512、ECDSA_SHA_256、ECDSA_SHA_384、ECDSA_SHA_512。
     *
     * @return string|null
     */
    public function getSigningAlgorithm()
    {
        return $this->get("SigningAlgorithm");
    }

    /**
     * SigningAlgorithm: 实际使用的签名算法。取值：RSASSA_PSS_SHA_256、RSASSA_PSS_SHA_384、RSASSA_PSS_SHA_512、RSASSA_PKCS1_V1_5_SHA_256、RSASSA_PKCS1_V1_5_SHA_384、RSASSA_PKCS1_V1_5_SHA_512、ECDSA_SHA_256、ECDSA_SHA_384、ECDSA_SHA_512。
     *
     * @param string $signingAlgorithm
     */
    public function setSigningAlgorithm($signingAlgorithm)
    {
        $this->set("SigningAlgorithm", $signingAlgorithm);
    }
}
