<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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

class AclInfo extends Response {
    

    /**
     * VpcId: ACL所属的VPC ID
     *
     * @return string|null
     */
    public function getVpcId(): string {
        return $this->get("VpcId");
    }

    /**
     * VpcId: ACL所属的VPC ID
     *
     * @param string $vpcId
     */
    public function setVpcId(string $vpcId) {
        $this->set("VpcId", $vpcId);
    }

    /**
     * AclId: ACL的ID
     *
     * @return string|null
     */
    public function getAclId(): string {
        return $this->get("AclId");
    }

    /**
     * AclId: ACL的ID
     *
     * @param string $aclId
     */
    public function setAclId(string $aclId) {
        $this->set("AclId", $aclId);
    }

    /**
     * AclName: 名称
     *
     * @return string|null
     */
    public function getAclName(): string {
        return $this->get("AclName");
    }

    /**
     * AclName: 名称
     *
     * @param string $aclName
     */
    public function setAclName(string $aclName) {
        $this->set("AclName", $aclName);
    }

    /**
     * Description: 描述
     *
     * @return string|null
     */
    public function getDescription(): string {
        return $this->get("Description");
    }

    /**
     * Description: 描述
     *
     * @param string $description
     */
    public function setDescription(string $description) {
        $this->set("Description", $description);
    }

    /**
     * Entries: 所有的规则
     *
     * @return AclEntryInfo[]|null
     */
    public function getEntries(): array {
        $items = $this->get("Entries") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new AclEntryInfo($item));
        }
        return $result;
    }

    /**
     * Entries: 所有的规则
     *
     * @param AclEntryInfo[] $entries
     */
    public function setEntries(array $entries) {
        $result = [];
        foreach ($entries as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Associations: 所有的绑定关系，具体结构见下方AssociationInfo
     *
     * @return AssociationInfo[]|null
     */
    public function getAssociations(): array {
        $items = $this->get("Associations") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new AssociationInfo($item));
        }
        return $result;
    }

    /**
     * Associations: 所有的绑定关系，具体结构见下方AssociationInfo
     *
     * @param AssociationInfo[] $associations
     */
    public function setAssociations(array $associations) {
        $result = [];
        foreach ($associations as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * CreateTime: 创建的Unix时间戳
     *
     * @return int|null
     */
    public function getCreateTime(): int {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建的Unix时间戳
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime) {
        $this->set("CreateTime", $createTime);
    }

    /**
     * UpdateTime: 更改的Unix时间戳
     *
     * @return int|null
     */
    public function getUpdateTime(): int {
        return $this->get("UpdateTime");
    }

    /**
     * UpdateTime: 更改的Unix时间戳
     *
     * @param int $updateTime
     */
    public function setUpdateTime(int $updateTime) {
        $this->set("UpdateTime", $updateTime);
    }


}
