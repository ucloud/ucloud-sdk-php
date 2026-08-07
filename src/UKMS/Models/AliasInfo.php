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

class AliasInfo extends Response
{
    

    /**
     * AliasName: 别名，含 alias/ 前缀。
     *
     * @return string|null
     */
    public function getAliasName()
    {
        return $this->get("AliasName");
    }

    /**
     * AliasName: 别名，含 alias/ 前缀。
     *
     * @param string $aliasName
     */
    public function setAliasName($aliasName)
    {
        $this->set("AliasName", $aliasName);
    }

    /**
     * TargetKeyId: 别名指向的密钥资源长 ID。
     *
     * @return string|null
     */
    public function getTargetKeyId()
    {
        return $this->get("TargetKeyId");
    }

    /**
     * TargetKeyId: 别名指向的密钥资源长 ID。
     *
     * @param string $targetKeyId
     */
    public function setTargetKeyId($targetKeyId)
    {
        $this->set("TargetKeyId", $targetKeyId);
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
     * LastUpdatedDate: 最后更新时间，Unix 时间戳。
     *
     * @return integer|null
     */
    public function getLastUpdatedDate()
    {
        return $this->get("LastUpdatedDate");
    }

    /**
     * LastUpdatedDate: 最后更新时间，Unix 时间戳。
     *
     * @param int $lastUpdatedDate
     */
    public function setLastUpdatedDate($lastUpdatedDate)
    {
        $this->set("LastUpdatedDate", $lastUpdatedDate);
    }
}
