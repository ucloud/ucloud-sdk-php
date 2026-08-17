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
namespace UCloud\UHadoop\Models;

use UCloud\Core\Response\Response;

class SecurityGroupConfig extends Response
{
    

    /**
     * GroupId: 防火墙ID
     *
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->get("GroupId");
    }

    /**
     * GroupId: 防火墙ID
     *
     * @param string $groupId
     */
    public function setGroupId($groupId)
    {
        $this->set("GroupId", $groupId);
    }

    /**
     * GroupName: 防火墙组的名称
     *
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->get("GroupName");
    }

    /**
     * GroupName: 防火墙组的名称
     *
     * @param string $groupName
     */
    public function setGroupName($groupName)
    {
        $this->set("GroupName", $groupName);
    }

    /**
     * CreateTime: 放火墙组创建时间，格式为Unix Timestamp
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 放火墙组创建时间，格式为Unix Timestamp
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * Type: 防火墙组类型，枚举值为： 0：用户自定义防火墙； 1：默认 Web防火墙； 2：默认非Web防火墙
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 防火墙组类型，枚举值为： 0：用户自定义防火墙； 1：默认 Web防火墙； 2：默认非Web防火墙
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }
}
