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

class EncryptRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "Encrypt"]);
        $this->markRequired("Region");
        $this->markRequired("KeyId");
        $this->markRequired("Plaintext");
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
     * KeyId: 密钥资源长 ID 或别名。
     *
     * @return string|null
     */
    public function getKeyId()
    {
        return $this->get("KeyId");
    }

    /**
     * KeyId: 密钥资源长 ID 或别名。
     *
     * @param string $keyId
     */
    public function setKeyId($keyId)
    {
        $this->set("KeyId", $keyId);
    }

    /**
     * Plaintext: 待加密明文，Base64 编码。
     *
     * @return string|null
     */
    public function getPlaintext()
    {
        return $this->get("Plaintext");
    }

    /**
     * Plaintext: 待加密明文，Base64 编码。
     *
     * @param string $plaintext
     */
    public function setPlaintext($plaintext)
    {
        $this->set("Plaintext", $plaintext);
    }

    /**
     * EncryptionContext: 加密上下文，JSON Object。该参数内容会记录在日志中，请勿传入密码、密钥、令牌等敏感信息。
     *
     * @return string|null
     */
    public function getEncryptionContext()
    {
        return $this->get("EncryptionContext");
    }

    /**
     * EncryptionContext: 加密上下文，JSON Object。该参数内容会记录在日志中，请勿传入密码、密钥、令牌等敏感信息。
     *
     * @param string $encryptionContext
     */
    public function setEncryptionContext($encryptionContext)
    {
        $this->set("EncryptionContext", $encryptionContext);
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
     * EncryptionAlgorithm: 加密算法。可选值：SYMMETRIC_DEFAULT、RSAES_OAEP_SHA_1、RSAES_OAEP_SHA_256；对称密钥默认 SYMMETRIC_DEFAULT，RSA 默认 RSAES_OAEP_SHA_256。
     *
     * @return string|null
     */
    public function getEncryptionAlgorithm()
    {
        return $this->get("EncryptionAlgorithm");
    }

    /**
     * EncryptionAlgorithm: 加密算法。可选值：SYMMETRIC_DEFAULT、RSAES_OAEP_SHA_1、RSAES_OAEP_SHA_256；对称密钥默认 SYMMETRIC_DEFAULT，RSA 默认 RSAES_OAEP_SHA_256。
     *
     * @param string $encryptionAlgorithm
     */
    public function setEncryptionAlgorithm($encryptionAlgorithm)
    {
        $this->set("EncryptionAlgorithm", $encryptionAlgorithm);
    }
}
