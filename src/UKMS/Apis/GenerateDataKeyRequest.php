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

class GenerateDataKeyRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GenerateDataKey"]);
        $this->markRequired("Region");
        $this->markRequired("KeyId");
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
     * KeyId: 密钥资源长 ID、ARN 或别名。
     *
     * @return string|null
     */
    public function getKeyId()
    {
        return $this->get("KeyId");
    }

    /**
     * KeyId: 密钥资源长 ID、ARN 或别名。
     *
     * @param string $keyId
     */
    public function setKeyId($keyId)
    {
        $this->set("KeyId", $keyId);
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
     * KeySpec: 数据密钥规格。可选值：AES_256、AES_128；默认 AES_256。与 NumberOfBytes 二选一，同时填写时 NumberOfBytes 优先。
     *
     * @return string|null
     */
    public function getKeySpec()
    {
        return $this->get("KeySpec");
    }

    /**
     * KeySpec: 数据密钥规格。可选值：AES_256、AES_128；默认 AES_256。与 NumberOfBytes 二选一，同时填写时 NumberOfBytes 优先。
     *
     * @param string $keySpec
     */
    public function setKeySpec($keySpec)
    {
        $this->set("KeySpec", $keySpec);
    }

    /**
     * NumberOfBytes: 生成数据密钥的字节长度，取值范围 1~1024。与 KeySpec 二选一，同时填写时本字段优先。
     *
     * @return integer|null
     */
    public function getNumberOfBytes()
    {
        return $this->get("NumberOfBytes");
    }

    /**
     * NumberOfBytes: 生成数据密钥的字节长度，取值范围 1~1024。与 KeySpec 二选一，同时填写时本字段优先。
     *
     * @param int $numberOfBytes
     */
    public function setNumberOfBytes($numberOfBytes)
    {
        $this->set("NumberOfBytes", $numberOfBytes);
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
}
