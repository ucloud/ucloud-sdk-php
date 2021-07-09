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
namespace UCloud\UHost\Models;

use UCloud\Core\Response\Response;

class IsolationGroup extends Response {
    

    /**
     * GroupName: 硬件隔离组名称
     *
     * @return string|null
     */
    public function getGroupName(): string {
        return $this->get("GroupName");
    }

    /**
     * GroupName: 硬件隔离组名称
     *
     * @param string $groupName
     */
    public function setGroupName(string $groupName) {
        $this->set("GroupName", $groupName);
    }

    /**
     * GroupId: 硬件隔离组id
     *
     * @return string|null
     */
    public function getGroupId(): string {
        return $this->get("GroupId");
    }

    /**
     * GroupId: 硬件隔离组id
     *
     * @param string $groupId
     */
    public function setGroupId(string $groupId) {
        $this->set("GroupId", $groupId);
    }

    /**
     * SpreadInfoSet: 每个可用区中的机器数量。参见数据结构SpreadInfo。
     *
     * @return SpreadInfo[]|null
     */
    public function getSpreadInfoSet(): array {
        $items = $this->get("SpreadInfoSet") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new SpreadInfo($item));
        }
        return $result;
    }

    /**
     * SpreadInfoSet: 每个可用区中的机器数量。参见数据结构SpreadInfo。
     *
     * @param SpreadInfo[] $spreadInfoSet
     */
    public function setSpreadInfoSet(array $spreadInfoSet) {
        $result = [];
        foreach ($spreadInfoSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Remark: 备注
     *
     * @return string|null
     */
    public function getRemark(): string {
        return $this->get("Remark");
    }

    /**
     * Remark: 备注
     *
     * @param string $remark
     */
    public function setRemark(string $remark) {
        $this->set("Remark", $remark);
    }


}
