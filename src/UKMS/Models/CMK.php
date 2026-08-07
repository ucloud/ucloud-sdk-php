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
     * Type: 密钥类型，仅支持UCloudManagedKeys、CustomerManagedKeys。默认值CustomerManagedKeys
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 密钥类型，仅支持UCloudManagedKeys、CustomerManagedKeys。默认值CustomerManagedKeys
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
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
     * Enabled: 是否启用
     *
     * @return boolean|null
     */
    public function getEnabled()
    {
        return $this->get("Enabled");
    }

    /**
     * Enabled: 是否启用
     *
     * @param boolean $enabled
     */
    public function setEnabled($enabled)
    {
        $this->set("Enabled", $enabled);
    }

    /**
     * CreatedTime: 创建时间 时间戳
     *
     * @return integer|null
     */
    public function getCreatedTime()
    {
        return $this->get("CreatedTime");
    }

    /**
     * CreatedTime: 创建时间 时间戳
     *
     * @param int $createdTime
     */
    public function setCreatedTime($createdTime)
    {
        $this->set("CreatedTime", $createdTime);
    }

    /**
     * LastModifiedTime: 最后修改时间 时间戳
     *
     * @return integer|null
     */
    public function getLastModifiedTime()
    {
        return $this->get("LastModifiedTime");
    }

    /**
     * LastModifiedTime: 最后修改时间 时间戳
     *
     * @param int $lastModifiedTime
     */
    public function setLastModifiedTime($lastModifiedTime)
    {
        $this->set("LastModifiedTime", $lastModifiedTime);
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
