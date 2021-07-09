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
namespace UCloud\UMem\Models;

use UCloud\Core\Response\Response;

class UMemSpaceSet extends Response {
    

    /**
     * Zone: 可用区，参见[可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getZone(): string {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区，参见[可用区列表](../summary/regionlist.html)
     *
     * @param string $zone
     */
    public function setZone(string $zone) {
        $this->set("Zone", $zone);
    }

    /**
     * Tag: 
     *
     * @return string|null
     */
    public function getTag(): string {
        return $this->get("Tag");
    }

    /**
     * Tag: 
     *
     * @param string $tag
     */
    public function setTag(string $tag) {
        $this->set("Tag", $tag);
    }

    /**
     * RewriteTime: 运维时间0   //0点1   //1点依次类推
     *
     * @return int|null
     */
    public function getRewriteTime(): int {
        return $this->get("RewriteTime");
    }

    /**
     * RewriteTime: 运维时间0   //0点1   //1点依次类推
     *
     * @param int $rewriteTime
     */
    public function setRewriteTime(int $rewriteTime) {
        $this->set("RewriteTime", $rewriteTime);
    }

    /**
     * SpaceId: 内存空间ID
     *
     * @return string|null
     */
    public function getSpaceId(): string {
        return $this->get("SpaceId");
    }

    /**
     * SpaceId: 内存空间ID
     *
     * @param string $spaceId
     */
    public function setSpaceId(string $spaceId) {
        $this->set("SpaceId", $spaceId);
    }

    /**
     * SubnetId: 
     *
     * @return string|null
     */
    public function getSubnetId(): string {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 
     *
     * @param string $subnetId
     */
    public function setSubnetId(string $subnetId) {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * VPCId: 
     *
     * @return string|null
     */
    public function getVPCId(): string {
        return $this->get("VPCId");
    }

    /**
     * VPCId: 
     *
     * @param string $vpcId
     */
    public function setVPCId(string $vpcId) {
        $this->set("VPCId", $vpcId);
    }

    /**
     * Name: 内存空间名称
     *
     * @return string|null
     */
    public function getName(): string {
        return $this->get("Name");
    }

    /**
     * Name: 内存空间名称
     *
     * @param string $name
     */
    public function setName(string $name) {
        $this->set("Name", $name);
    }

    /**
     * CreateTime: 创建时间
     *
     * @return int|null
     */
    public function getCreateTime(): int {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime) {
        $this->set("CreateTime", $createTime);
    }

    /**
     * ExpireTime: 到期时间
     *
     * @return int|null
     */
    public function getExpireTime(): int {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: 到期时间
     *
     * @param int $expireTime
     */
    public function setExpireTime(int $expireTime) {
        $this->set("ExpireTime", $expireTime);
    }

    /**
     * Type: 空间类型:single(无热备),double(热备)
     *
     * @return string|null
     */
    public function getType(): string {
        return $this->get("Type");
    }

    /**
     * Type: 空间类型:single(无热备),double(热备)
     *
     * @param string $type
     */
    public function setType(string $type) {
        $this->set("Type", $type);
    }

    /**
     * Protocol: 协议类型: memcache, redis
     *
     * @return string|null
     */
    public function getProtocol(): string {
        return $this->get("Protocol");
    }

    /**
     * Protocol: 协议类型: memcache, redis
     *
     * @param string $protocol
     */
    public function setProtocol(string $protocol) {
        $this->set("Protocol", $protocol);
    }

    /**
     * Size: 容量单位GB
     *
     * @return int|null
     */
    public function getSize(): int {
        return $this->get("Size");
    }

    /**
     * Size: 容量单位GB
     *
     * @param int $size
     */
    public function setSize(int $size) {
        $this->set("Size", $size);
    }

    /**
     * UsedSize: 使用量单位MB
     *
     * @return int|null
     */
    public function getUsedSize(): int {
        return $this->get("UsedSize");
    }

    /**
     * UsedSize: 使用量单位MB
     *
     * @param int $usedSize
     */
    public function setUsedSize(int $usedSize) {
        $this->set("UsedSize", $usedSize);
    }

    /**
     * State: Starting:创建中 Running:运行中 Fail:失败
     *
     * @return string|null
     */
    public function getState(): string {
        return $this->get("State");
    }

    /**
     * State: Starting:创建中 Running:运行中 Fail:失败
     *
     * @param string $state
     */
    public function setState(string $state) {
        $this->set("State", $state);
    }

    /**
     * ChargeType: Year, Month, Dynamic, Trial
     *
     * @return string|null
     */
    public function getChargeType(): string {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: Year, Month, Dynamic, Trial
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType) {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Address: IP端口信息请参见 UMemSpaceAddressSet
     *
     * @return UMemSpaceAddressSet[]|null
     */
    public function getAddress(): array {
        $items = $this->get("Address") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UMemSpaceAddressSet($item));
        }
        return $result;
    }

    /**
     * Address: IP端口信息请参见 UMemSpaceAddressSet
     *
     * @param UMemSpaceAddressSet[] $address
     */
    public function setAddress(array $address) {
        $result = [];
        foreach ($address as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }


}
