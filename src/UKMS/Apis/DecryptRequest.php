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
use UCloud\UKMS\Params\DecryptParamEncryptionContext;

class DecryptRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "Decrypt"]);
        $this->markRequired("Region");
        $this->markRequired("CiphertextBlob");
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
     * CiphertextBlob: 待解密密文。
     *
     * @return string|null
     */
    public function getCiphertextBlob()
    {
        return $this->get("CiphertextBlob");
    }

    /**
     * CiphertextBlob: 待解密密文。
     *
     * @param string $ciphertextBlob
     */
    public function setCiphertextBlob($ciphertextBlob)
    {
        $this->set("CiphertextBlob", $ciphertextBlob);
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
     * KeyId: 主密钥 KeyId；对称密钥可空，从 CiphertextBlob 自动识别；非对称必填。
     *
     * @return string|null
     */
    public function getKeyId()
    {
        return $this->get("KeyId");
    }

    /**
     * KeyId: 主密钥 KeyId；对称密钥可空，从 CiphertextBlob 自动识别；非对称必填。
     *
     * @param string $keyId
     */
    public function setKeyId($keyId)
    {
        $this->set("KeyId", $keyId);
    }

    /**
     * EncryptionContext: 加密上下文，JSON Object。
     *
     * @return DecryptParamEncryptionContext|null
     */
    public function getEncryptionContext()
    {
        return new DecryptParamEncryptionContext($this->get("EncryptionContext"));
    }

    /**
     * EncryptionContext: 加密上下文，JSON Object。
     *
     * @param DecryptParamEncryptionContext $encryptionContext
     */
    public function setEncryptionContext(array $encryptionContext)
    {
        $this->set("EncryptionContext", $encryptionContext->getAll());
    }

    /**
     * EncryptionAlgorithm: 解密算法。可选值：SYMMETRIC_DEFAULT、RSAES_OAEP_SHA_1、RSAES_OAEP_SHA_256；非对称密钥解密时必填或使用默认 RSAES_OAEP_SHA_256。
     *
     * @return string|null
     */
    public function getEncryptionAlgorithm()
    {
        return $this->get("EncryptionAlgorithm");
    }

    /**
     * EncryptionAlgorithm: 解密算法。可选值：SYMMETRIC_DEFAULT、RSAES_OAEP_SHA_1、RSAES_OAEP_SHA_256；非对称密钥解密时必填或使用默认 RSAES_OAEP_SHA_256。
     *
     * @param string $encryptionAlgorithm
     */
    public function setEncryptionAlgorithm($encryptionAlgorithm)
    {
        $this->set("EncryptionAlgorithm", $encryptionAlgorithm);
    }
}
