<?php
/**
 * Copyright 2022 UCloud Technology Co., Ltd.
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
namespace UCloud\VPC\Models;

use UCloud\Core\Response\Response;

class AssociationInfo extends Response
{
    

    /**
     * AssociationId: 绑定ID
     *
     * @return string|null
     */
    public function getAssociationId(): string
    {
        return $this->get("AssociationId");
    }

    /**
     * AssociationId: 绑定ID
     *
     * @param string $associationId
     */
    public function setAssociationId(string $associationId)
    {
        $this->set("AssociationId", $associationId);
    }

    /**
     * AclId: ACL的ID
     *
     * @return string|null
     */
    public function getAclId(): string
    {
        return $this->get("AclId");
    }

    /**
     * AclId: ACL的ID
     *
     * @param string $aclId
     */
    public function setAclId(string $aclId)
    {
        $this->set("AclId", $aclId);
    }

    /**
     * SubnetworkId: 绑定的子网ID
     *
     * @return string|null
     */
    public function getSubnetworkId(): string
    {
        return $this->get("SubnetworkId");
    }

    /**
     * SubnetworkId: 绑定的子网ID
     *
     * @param string $subnetworkId
     */
    public function setSubnetworkId(string $subnetworkId)
    {
        $this->set("SubnetworkId", $subnetworkId);
    }

    /**
     * CreateTime: 创建的Unix时间戳
     *
     * @return integer|null
     */
    public function getCreateTime(): int
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建的Unix时间戳
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime)
    {
        $this->set("CreateTime", $createTime);
    }
}
