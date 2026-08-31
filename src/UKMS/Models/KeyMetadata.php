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
namespace UCloud\UKMS\Models;

use UCloud\Core\Response\Response;

class KeyMetadata extends Response
{
    

    /**
     * ProjectId: 密钥所属项目ID。
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 密钥所属项目ID。
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
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
     * CreationDate: 创建时间，Unix 时间戳。
     *
     * @return integer|null
     */
    public function getCreationDate()
    {
        return $this->get("CreationDate");
    }

    /**
     * CreationDate: 创建时间，Unix 时间戳。
     *
     * @param int $creationDate
     */
    public function setCreationDate($creationDate)
    {
        $this->set("CreationDate", $creationDate);
    }

    /**
     * Enabled: 是否启用。取值：true、false。
     *
     * @return string|null
     */
    public function getEnabled()
    {
        return $this->get("Enabled");
    }

    /**
     * Enabled: 是否启用。取值：true、false。
     *
     * @param string $enabled
     */
    public function setEnabled($enabled)
    {
        $this->set("Enabled", $enabled);
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
     * KeyState: 密钥对外状态。取值：Enabled、Disabled、PendingDeletion、PendingImport、Unavailable。
     *
     * @return string|null
     */
    public function getKeyState()
    {
        return $this->get("KeyState");
    }

    /**
     * KeyState: 密钥对外状态。取值：Enabled、Disabled、PendingDeletion、PendingImport、Unavailable。
     *
     * @param string $keyState
     */
    public function setKeyState($keyState)
    {
        $this->set("KeyState", $keyState);
    }

    /**
     * Origin: 密钥材料来源。取值：UCLOUD_KMS、EXTERNAL；当前 CreateKey 仅支持 UCLOUD_KMS。
     *
     * @return string|null
     */
    public function getOrigin()
    {
        return $this->get("Origin");
    }

    /**
     * Origin: 密钥材料来源。取值：UCLOUD_KMS、EXTERNAL；当前 CreateKey 仅支持 UCLOUD_KMS。
     *
     * @param string $origin
     */
    public function setOrigin($origin)
    {
        $this->set("Origin", $origin);
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
     * DeletionProtection: 是否开启删除保护。取值：true、false。
     *
     * @return boolean|null
     */
    public function getDeletionProtection()
    {
        return $this->get("DeletionProtection");
    }

    /**
     * DeletionProtection: 是否开启删除保护。取值：true、false。
     *
     * @param boolean $deletionProtection
     */
    public function setDeletionProtection($deletionProtection)
    {
        $this->set("DeletionProtection", $deletionProtection);
    }

    /**
     * KeyVersion: 当前密钥版本。
     *
     * @return integer|null
     */
    public function getKeyVersion()
    {
        return $this->get("KeyVersion");
    }

    /**
     * KeyVersion: 当前密钥版本。
     *
     * @param int $keyVersion
     */
    public function setKeyVersion($keyVersion)
    {
        $this->set("KeyVersion", $keyVersion);
    }

    /**
     * ResourceId: 密钥所属的 UKMS 实例资源 ID。
     *
     * @return string|null
     */
    public function getResourceId()
    {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: 密钥所属的 UKMS 实例资源 ID。
     *
     * @param string $resourceId
     */
    public function setResourceId($resourceId)
    {
        $this->set("ResourceId", $resourceId);
    }

    /**
     * Description: 密钥描述。
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->get("Description");
    }

    /**
     * Description: 密钥描述。
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->set("Description", $description);
    }

    /**
     * DeletionDate: 计划删除时间，Unix 时间戳。
     *
     * @return integer|null
     */
    public function getDeletionDate()
    {
        return $this->get("DeletionDate");
    }

    /**
     * DeletionDate: 计划删除时间，Unix 时间戳。
     *
     * @param int $deletionDate
     */
    public function setDeletionDate($deletionDate)
    {
        $this->set("DeletionDate", $deletionDate);
    }

    /**
     * Arn: ucs:ukms:{Region}:{CompanyId}:key/{KeyId}
     *
     * @return string|null
     */
    public function getArn()
    {
        return $this->get("Arn");
    }

    /**
     * Arn: ucs:ukms:{Region}:{CompanyId}:key/{KeyId}
     *
     * @param string $arn
     */
    public function setArn($arn)
    {
        $this->set("Arn", $arn);
    }

    /**
     * OrganizationId: 所属组织数字 ID
     *
     * @return integer|null
     */
    public function getOrganizationId()
    {
        return $this->get("OrganizationId");
    }

    /**
     * OrganizationId: 所属组织数字 ID
     *
     * @param int $organizationId
     */
    public function setOrganizationId($organizationId)
    {
        $this->set("OrganizationId", $organizationId);
    }
}
