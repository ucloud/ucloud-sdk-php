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

class CMK extends Response
{
    

    /**
     * KeyId: CMK 的唯一标识符
     *
     * @return string|null
     */
    public function getKeyId()
    {
        return $this->get("KeyId");
    }

    /**
     * KeyId: CMK 的唯一标识符
     *
     * @param string $keyId
     */
    public function setKeyId($keyId)
    {
        $this->set("KeyId", $keyId);
    }

    /**
     * KeyType: 密钥类型，如RSA、EC、DES
     *
     * @return string|null
     */
    public function getKeyType()
    {
        return $this->get("KeyType");
    }

    /**
     * KeyType: 密钥类型，如RSA、EC、DES
     *
     * @param string $keyType
     */
    public function setKeyType($keyType)
    {
        $this->set("KeyType", $keyType);
    }

    /**
     * CreatedTime: 创建时间
     *
     * @return integer|null
     */
    public function getCreatedTime()
    {
        return $this->get("CreatedTime");
    }

    /**
     * CreatedTime: 创建时间
     *
     * @param int $createdTime
     */
    public function setCreatedTime($createdTime)
    {
        $this->set("CreatedTime", $createdTime);
    }

    /**
     * Alias: 别名，与CMK一一对应
     *
     * @return string|null
     */
    public function getAlias()
    {
        return $this->get("Alias");
    }

    /**
     * Alias: 别名，与CMK一一对应
     *
     * @param string $alias
     */
    public function setAlias($alias)
    {
        $this->set("Alias", $alias);
    }

    /**
     * Status: 密钥状态 "Pre-Active", "Active", "Deactivated", "Compromised", "Destroyed", "Destroyed Compromised"
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 密钥状态 "Pre-Active", "Active", "Deactivated", "Compromised", "Destroyed", "Destroyed Compromised"
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * UpdateTime: 更新时间
     *
     * @return integer|null
     */
    public function getUpdateTime()
    {
        return $this->get("UpdateTime");
    }

    /**
     * UpdateTime: 更新时间
     *
     * @param int $updateTime
     */
    public function setUpdateTime($updateTime)
    {
        $this->set("UpdateTime", $updateTime);
    }

    /**
     * Description: 对密钥的描述说明
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->get("Description");
    }

    /**
     * Description: 对密钥的描述说明
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->set("Description", $description);
    }

    /**
     * PlanDeleteTime: 计划删除时间 时间戳
     *
     * @return integer|null
     */
    public function getPlanDeleteTime()
    {
        return $this->get("PlanDeleteTime");
    }

    /**
     * PlanDeleteTime: 计划删除时间 时间戳
     *
     * @param int $planDeleteTime
     */
    public function setPlanDeleteTime($planDeleteTime)
    {
        $this->set("PlanDeleteTime", $planDeleteTime);
    }
}
