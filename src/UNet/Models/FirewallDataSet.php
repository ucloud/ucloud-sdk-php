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
namespace UCloud\UNet\Models;

use UCloud\Core\Response\Response;

class FirewallDataSet extends Response {
    

    /**
     * FWId: 防火墙ID
     *
     * @return string|null
     */
    public function getFWId(): string {
        return $this->get("FWId");
    }

    /**
     * FWId: 防火墙ID
     *
     * @param string $fwId
     */
    public function setFWId(string $fwId) {
        $this->set("FWId", $fwId);
    }

    /**
     * GroupId: 安全组ID（即将废弃）
     *
     * @return string|null
     */
    public function getGroupId(): string {
        return $this->get("GroupId");
    }

    /**
     * GroupId: 安全组ID（即将废弃）
     *
     * @param string $groupId
     */
    public function setGroupId(string $groupId) {
        $this->set("GroupId", $groupId);
    }

    /**
     * Name: 防火墙名称
     *
     * @return string|null
     */
    public function getName(): string {
        return $this->get("Name");
    }

    /**
     * Name: 防火墙名称
     *
     * @param string $name
     */
    public function setName(string $name) {
        $this->set("Name", $name);
    }

    /**
     * Tag: 防火墙业务组
     *
     * @return string|null
     */
    public function getTag(): string {
        return $this->get("Tag");
    }

    /**
     * Tag: 防火墙业务组
     *
     * @param string $tag
     */
    public function setTag(string $tag) {
        $this->set("Tag", $tag);
    }

    /**
     * Remark: 防火墙备注
     *
     * @return string|null
     */
    public function getRemark(): string {
        return $this->get("Remark");
    }

    /**
     * Remark: 防火墙备注
     *
     * @param string $remark
     */
    public function setRemark(string $remark) {
        $this->set("Remark", $remark);
    }

    /**
     * ResourceCount: 防火墙绑定资源数量
     *
     * @return int|null
     */
    public function getResourceCount(): int {
        return $this->get("ResourceCount");
    }

    /**
     * ResourceCount: 防火墙绑定资源数量
     *
     * @param int $resourceCount
     */
    public function setResourceCount(int $resourceCount) {
        $this->set("ResourceCount", $resourceCount);
    }

    /**
     * CreateTime: 防火墙组创建时间，格式为Unix Timestamp
     *
     * @return int|null
     */
    public function getCreateTime(): int {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 防火墙组创建时间，格式为Unix Timestamp
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime) {
        $this->set("CreateTime", $createTime);
    }

    /**
     * Type: 防火墙组类型，枚举值为： "user defined", 用户自定义防火墙； "recommend web", 默认Web防火墙； "recommend non web", 默认非Web防火墙
     *
     * @return string|null
     */
    public function getType(): string {
        return $this->get("Type");
    }

    /**
     * Type: 防火墙组类型，枚举值为： "user defined", 用户自定义防火墙； "recommend web", 默认Web防火墙； "recommend non web", 默认非Web防火墙
     *
     * @param string $type
     */
    public function setType(string $type) {
        $this->set("Type", $type);
    }

    /**
     * Rule: 防火墙组中的规则列表，参见 FirewallRuleSet
     *
     * @return FirewallRuleSet[]|null
     */
    public function getRule(): array {
        $items = $this->get("Rule") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new FirewallRuleSet($item));
        }
        return $result;
    }

    /**
     * Rule: 防火墙组中的规则列表，参见 FirewallRuleSet
     *
     * @param FirewallRuleSet[] $rule
     */
    public function setRule(array $rule) {
        $result = [];
        foreach ($rule as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }


}
