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

class DEK extends Response
{
    

    /**
     * ProjectId: 密钥所属项目的对外别名，格式为 org-xxx。该值由项目数字 ID 解析得到，可能因项目别名查询失败而为空。
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 密钥所属项目的对外别名，格式为 org-xxx。该值由项目数字 ID 解析得到，可能因项目别名查询失败而为空。
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * KeyId: 对外主密钥 ID（ukms_key_info.key_id）。
     *
     * @return string|null
     */
    public function getKeyId()
    {
        return $this->get("KeyId");
    }

    /**
     * KeyId: 对外主密钥 ID（ukms_key_info.key_id）。
     *
     * @param string $keyId
     */
    public function setKeyId($keyId)
    {
        $this->set("KeyId", $keyId);
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
     * KeyUsage: 按 KeySpec 派生的密钥用途。取值：ENCRYPT_DECRYPT、SIGN_VERIFY、GENERATE_VERIFY_MAC、KEY_AGREEMENT。
     *
     * @return string[]|null
     */
    public function getKeyUsage()
    {
        return $this->get("KeyUsage");
    }

    /**
     * KeyUsage: 按 KeySpec 派生的密钥用途。取值：ENCRYPT_DECRYPT、SIGN_VERIFY、GENERATE_VERIFY_MAC、KEY_AGREEMENT。
     *
     * @param string[] $keyUsage
     */
    public function setKeyUsage(array $keyUsage)
    {
        $this->set("KeyUsage", $keyUsage);
    }

    /**
     * Origin: 密钥来源，由 Origin 派生。取值：UCLOUD_KMS、EXTERNAL。当前 CreateKey 仅支持 UCLOUD_KMS。
     *
     * @return string|null
     */
    public function getOrigin()
    {
        return $this->get("Origin");
    }

    /**
     * Origin: 密钥来源，由 Origin 派生。取值：UCLOUD_KMS、EXTERNAL。当前 CreateKey 仅支持 UCLOUD_KMS。
     *
     * @param string $origin
     */
    public function setOrigin($origin)
    {
        $this->set("Origin", $origin);
    }

    /**
     * Status: 数据库密钥状态。常见取值：Active、Deactivated、PendingDeletion。
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 数据库密钥状态。常见取值：Active、Deactivated、PendingDeletion。
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * CreatedTime: 创建时间，Unix 时间戳。
     *
     * @return integer|null
     */
    public function getCreatedTime()
    {
        return $this->get("CreatedTime");
    }

    /**
     * CreatedTime: 创建时间，Unix 时间戳。
     *
     * @param int $createdTime
     */
    public function setCreatedTime($createdTime)
    {
        $this->set("CreatedTime", $createdTime);
    }

    /**
     * UpdateTime: 更新时间，Unix 时间戳。
     *
     * @return integer|null
     */
    public function getUpdateTime()
    {
        return $this->get("UpdateTime");
    }

    /**
     * UpdateTime: 更新时间，Unix 时间戳。
     *
     * @param int $updateTime
     */
    public function setUpdateTime($updateTime)
    {
        $this->set("UpdateTime", $updateTime);
    }

    /**
     * KeyRotationEnabled: 是否已开启自动轮转；未配置或已关闭均为 false
     *
     * @return boolean|null
     */
    public function getKeyRotationEnabled()
    {
        return $this->get("KeyRotationEnabled");
    }

    /**
     * KeyRotationEnabled: 是否已开启自动轮转；未配置或已关闭均为 false
     *
     * @param boolean $keyRotationEnabled
     */
    public function setKeyRotationEnabled($keyRotationEnabled)
    {
        $this->set("KeyRotationEnabled", $keyRotationEnabled);
    }

    /**
     * RotationPeriodInDays: 自动轮转周期(天)；未开启时为 0
     *
     * @return integer|null
     */
    public function getRotationPeriodInDays()
    {
        return $this->get("RotationPeriodInDays");
    }

    /**
     * RotationPeriodInDays: 自动轮转周期(天)；未开启时为 0
     *
     * @param int $rotationPeriodInDays
     */
    public function setRotationPeriodInDays($rotationPeriodInDays)
    {
        $this->set("RotationPeriodInDays", $rotationPeriodInDays);
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
     * PlanDeleteTime: 计划删除时间，Unix 时间戳。
     *
     * @return integer|null
     */
    public function getPlanDeleteTime()
    {
        return $this->get("PlanDeleteTime");
    }

    /**
     * PlanDeleteTime: 计划删除时间，Unix 时间戳。
     *
     * @param int $planDeleteTime
     */
    public function setPlanDeleteTime($planDeleteTime)
    {
        $this->set("PlanDeleteTime", $planDeleteTime);
    }

    /**
     * NextRotationDate: 下次自动轮转时间（Unix 时间戳，秒）；仅在已开启自动轮转时返回。
     *
     * @return integer|null
     */
    public function getNextRotationDate()
    {
        return $this->get("NextRotationDate");
    }

    /**
     * NextRotationDate: 下次自动轮转时间（Unix 时间戳，秒）；仅在已开启自动轮转时返回。
     *
     * @param int $nextRotationDate
     */
    public function setNextRotationDate($nextRotationDate)
    {
        $this->set("NextRotationDate", $nextRotationDate);
    }

    /**
     * OrganizationId: 密钥所属组织的数字 ID，来源于密钥关联的资源交易记录。
     *
     * @return integer|null
     */
    public function getOrganizationId()
    {
        return $this->get("OrganizationId");
    }

    /**
     * OrganizationId: 密钥所属组织的数字 ID，来源于密钥关联的资源交易记录。
     *
     * @param int $organizationId
     */
    public function setOrganizationId($organizationId)
    {
        $this->set("OrganizationId", $organizationId);
    }
}
