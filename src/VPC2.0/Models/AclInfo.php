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

use UCloud\VPC\Models\AclEntryInfo;
use UCloud\VPC\Models\TargetResourceInfo;
use UCloud\VPC\Models\AssociationInfo;
use UCloud\VPC\Models\DescribeNetworkAclResponse;

class AclInfo extends Response
{

    /**
     * VpcId: ACL所属的VPC ID
     *
     * @return string|null
     */
    public function getVpcId()
    {
        return $this->get("VpcId");
    }

    /**
     * VpcId: ACL所属的VPC ID
     *
     * @param string $vpcId
     */
    public function setVpcId(string $vpcId)
    {
        $this->set("VpcId", $vpcId);
    }
    /**
     * AclId: ACL的ID
     *
     * @return string|null
     */
    public function getAclId()
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
     * AclName: 名称
     *
     * @return string|null
     */
    public function getAclName()
    {
        return $this->get("AclName");
    }

    /**
     * AclName: 名称
     *
     * @param string $aclName
     */
    public function setAclName(string $aclName)
    {
        $this->set("AclName", $aclName);
    }
    /**
     * Description: 描述
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->get("Description");
    }

    /**
     * Description: 描述
     *
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->set("Description", $description);
    }
    /**
     * Entries: 所有的规则
     *
     * @return AclEntryInfoModel[]|null
     */
    public function getEntries()
    {
        $items = $this->get("Entries");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new AclEntryInfoModel($item));
        }
        return $result;
    }

    /**
     * Entries: 所有的规则
     *
     * @param AclEntryInfoModel[] $entries
     */
    public function setEntries(array $entries)
    {
        $result = [];
        foreach ($entries as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
    /**
     * Associations: 所有的绑定关系，具体结构见下方AssociationInfo
     *
     * @return AssociationInfoModel[]|null
     */
    public function getAssociations()
    {
        $items = $this->get("Associations");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new AssociationInfoModel($item));
        }
        return $result;
    }

    /**
     * Associations: 所有的绑定关系，具体结构见下方AssociationInfo
     *
     * @param AssociationInfoModel[] $associations
     */
    public function setAssociations(array $associations)
    {
        $result = [];
        foreach ($associations as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
    /**
     * CreateTime: 创建的Unix时间戳
     *
     * @return integer|null
     */
    public function getCreateTime()
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
    /**
     * UpdateTime: 更改的Unix时间戳
     *
     * @return integer|null
     */
    public function getUpdateTime()
    {
        return $this->get("UpdateTime");
    }

    /**
     * UpdateTime: 更改的Unix时间戳
     *
     * @param int $updateTime
     */
    public function setUpdateTime(int $updateTime)
    {
        $this->set("UpdateTime", $updateTime);
    }
}
