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

class CreateKeyRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateKey"]);
        $this->markRequired("Region");
        $this->markRequired("ResourceId");
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
     * Description: 密钥描述，最多 8192 字符。
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->get("Description");
    }

    /**
     * Description: 密钥描述，最多 8192 字符。
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->set("Description", $description);
    }

    /**
     * Alias: 可选密钥别名，格式为 alias/name。
     *
     * @return string|null
     */
    public function getAlias()
    {
        return $this->get("Alias");
    }

    /**
     * Alias: 可选密钥别名，格式为 alias/name。
     *
     * @param string $alias
     */
    public function setAlias($alias)
    {
        $this->set("Alias", $alias);
    }

    /**
     * KeySpec: 密钥规格，默认 SYMMETRIC_DEFAULT（AES_256）。可选值：SYMMETRIC_DEFAULT(AES_256)、RSA_2048、RSA_3072、RSA_4096、ECC_NIST_P256、ECC_NIST_P384、ECC_NIST_P521、HMAC_256、HMAC_384、HMAC_512。
     *
     * @return string|null
     */
    public function getKeySpec()
    {
        return $this->get("KeySpec");
    }

    /**
     * KeySpec: 密钥规格，默认 SYMMETRIC_DEFAULT（AES_256）。可选值：SYMMETRIC_DEFAULT(AES_256)、RSA_2048、RSA_3072、RSA_4096、ECC_NIST_P256、ECC_NIST_P384、ECC_NIST_P521、HMAC_256、HMAC_384、HMAC_512。
     *
     * @param string $keySpec
     */
    public function setKeySpec($keySpec)
    {
        $this->set("KeySpec", $keySpec);
    }

    /**
     * KeyUsage: 密钥用途
     *
     * @return string|null
     */
    public function getKeyUsage()
    {
        return $this->get("KeyUsage");
    }

    /**
     * KeyUsage: 密钥用途
     *
     * @param string $keyUsage
     */
    public function setKeyUsage($keyUsage)
    {
        $this->set("KeyUsage", $keyUsage);
    }

    /**
     * Origin: 密钥材料来源，默认 UCLOUD_KMS。当前仅支持 UCLOUD_KMS；EXTERNAL 为 BYOK 规划值，当前传入会返回 100660。
     *
     * @return string|null
     */
    public function getOrigin()
    {
        return $this->get("Origin");
    }

    /**
     * Origin: 密钥材料来源，默认 UCLOUD_KMS。当前仅支持 UCLOUD_KMS；EXTERNAL 为 BYOK 规划值，当前传入会返回 100660。
     *
     * @param string $origin
     */
    public function setOrigin($origin)
    {
        $this->set("Origin", $origin);
    }

    /**
     * DeletionProtection: 是否开启删除保护。可选值：true、false；默认 false。
     *
     * @return string|null
     */
    public function getDeletionProtection()
    {
        return $this->get("DeletionProtection");
    }

    /**
     * DeletionProtection: 是否开启删除保护。可选值：true、false；默认 false。
     *
     * @param string $deletionProtection
     */
    public function setDeletionProtection($deletionProtection)
    {
        $this->set("DeletionProtection", $deletionProtection);
    }
}
