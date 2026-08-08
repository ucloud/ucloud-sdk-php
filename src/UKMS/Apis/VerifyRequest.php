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

use UCloud\Core\Request\Request;

class VerifyRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "Verify"]);
        $this->markRequired("Region");
        $this->markRequired("KeyId");
        $this->markRequired("SigningMessage");
        $this->markRequired("SignatureResult");
        $this->markRequired("SigningAlgorithm");
    }

    

    /**
     * Region: 地域。参见地域和可用区列表。
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。参见地域和可用区列表。
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子账号必须填写。
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子账号必须填写。
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * KeyId: 密钥 ID、ARN 或别名。
     *
     * @return string|null
     */
    public function getKeyId()
    {
        return $this->get("KeyId");
    }

    /**
     * KeyId: 密钥 ID、ARN 或别名。
     *
     * @param string $keyId
     */
    public function setKeyId($keyId)
    {
        $this->set("KeyId", $keyId);
    }

    /**
     * SigningMessage: 待验签的消息或消息摘要，Base64 编码。
     *
     * @return string|null
     */
    public function getSigningMessage()
    {
        return $this->get("SigningMessage");
    }

    /**
     * SigningMessage: 待验签的消息或消息摘要，Base64 编码。
     *
     * @param string $signingMessage
     */
    public function setSigningMessage($signingMessage)
    {
        $this->set("SigningMessage", $signingMessage);
    }

    /**
     * SignatureResult: 待验证的签名，Base64 编码。
     *
     * @return string|null
     */
    public function getSignatureResult()
    {
        return $this->get("SignatureResult");
    }

    /**
     * SignatureResult: 待验证的签名，Base64 编码。
     *
     * @param string $signatureResult
     */
    public function setSignatureResult($signatureResult)
    {
        $this->set("SignatureResult", $signatureResult);
    }

    /**
     * SigningAlgorithm: 签名时使用的算法。可选值：RSASSA_PSS_SHA_256、RSASSA_PSS_SHA_384、RSASSA_PSS_SHA_512、RSASSA_PKCS1_V1_5_SHA_256、RSASSA_PKCS1_V1_5_SHA_384、RSASSA_PKCS1_V1_5_SHA_512、ECDSA_SHA_256、ECDSA_SHA_384、ECDSA_SHA_512；须与密钥 KeySpec 匹配。
     *
     * @return string|null
     */
    public function getSigningAlgorithm()
    {
        return $this->get("SigningAlgorithm");
    }

    /**
     * SigningAlgorithm: 签名时使用的算法。可选值：RSASSA_PSS_SHA_256、RSASSA_PSS_SHA_384、RSASSA_PSS_SHA_512、RSASSA_PKCS1_V1_5_SHA_256、RSASSA_PKCS1_V1_5_SHA_384、RSASSA_PKCS1_V1_5_SHA_512、ECDSA_SHA_256、ECDSA_SHA_384、ECDSA_SHA_512；须与密钥 KeySpec 匹配。
     *
     * @param string $signingAlgorithm
     */
    public function setSigningAlgorithm($signingAlgorithm)
    {
        $this->set("SigningAlgorithm", $signingAlgorithm);
    }

    /**
     * ResourceId: UKMS 实例资源 ID。
     *
     * @return string|null
     */
    public function getResourceId()
    {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: UKMS 实例资源 ID。
     *
     * @param string $resourceId
     */
    public function setResourceId($resourceId)
    {
        $this->set("ResourceId", $resourceId);
    }

    /**
     * MessageType: 消息类型。可选值：RAW、DIGEST；默认 RAW。
     *
     * @return string|null
     */
    public function getMessageType()
    {
        return $this->get("MessageType");
    }

    /**
     * MessageType: 消息类型。可选值：RAW、DIGEST；默认 RAW。
     *
     * @param string $messageType
     */
    public function setMessageType($messageType)
    {
        $this->set("MessageType", $messageType);
    }
}
