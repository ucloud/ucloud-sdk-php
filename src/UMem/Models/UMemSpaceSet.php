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

class UMemSpaceSet extends Response
{
    

    /**
     * Zone: 可用区，参见[可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区，参见[可用区列表](../summary/regionlist.html)
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * Tag:
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag:
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * RewriteTime: 运维时间0   //0点1   //1点依次类推
     *
     * @return integer|null
     */
    public function getRewriteTime()
    {
        return $this->get("RewriteTime");
    }

    /**
     * RewriteTime: 运维时间0   //0点1   //1点依次类推
     *
     * @param int $rewriteTime
     */
    public function setRewriteTime($rewriteTime)
    {
        $this->set("RewriteTime", $rewriteTime);
    }

    /**
     * SpaceId: 内存空间ID
     *
     * @return string|null
     */
    public function getSpaceId()
    {
        return $this->get("SpaceId");
    }

    /**
     * SpaceId: 内存空间ID
     *
     * @param string $spaceId
     */
    public function setSpaceId($spaceId)
    {
        $this->set("SpaceId", $spaceId);
    }

    /**
     * SubnetId:
     *
     * @return string|null
     */
    public function getSubnetId()
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId:
     *
     * @param string $subnetId
     */
    public function setSubnetId($subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * VPCId:
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId:
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * Name: 内存空间名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 内存空间名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * CreateTime: 创建时间
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * ExpireTime: 到期时间
     *
     * @return integer|null
     */
    public function getExpireTime()
    {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: 到期时间
     *
     * @param int $expireTime
     */
    public function setExpireTime($expireTime)
    {
        $this->set("ExpireTime", $expireTime);
    }

    /**
     * Type: 空间类型:single(无热备),double(热备)
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 空间类型:single(无热备),double(热备)
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * Protocol: 协议类型: memcache, redis
     *
     * @return string|null
     */
    public function getProtocol()
    {
        return $this->get("Protocol");
    }

    /**
     * Protocol: 协议类型: memcache, redis
     *
     * @param string $protocol
     */
    public function setProtocol($protocol)
    {
        $this->set("Protocol", $protocol);
    }

    /**
     * Size: 容量单位GB
     *
     * @return integer|null
     */
    public function getSize()
    {
        return $this->get("Size");
    }

    /**
     * Size: 容量单位GB
     *
     * @param int $size
     */
    public function setSize($size)
    {
        $this->set("Size", $size);
    }

    /**
     * UsedSize: 使用量单位MB
     *
     * @return integer|null
     */
    public function getUsedSize()
    {
        return $this->get("UsedSize");
    }

    /**
     * UsedSize: 使用量单位MB
     *
     * @param int $usedSize
     */
    public function setUsedSize($usedSize)
    {
        $this->set("UsedSize", $usedSize);
    }

    /**
     * State: Starting:创建中 Running:运行中 Fail:失败
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: Starting:创建中 Running:运行中 Fail:失败
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }

    /**
     * ChargeType: Year, Month, Dynamic, Trial
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: Year, Month, Dynamic, Trial
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Address: IP端口信息请参见 UMemSpaceAddressSet
     *
     * @return UMemSpaceAddressSet[]|null
     */
    public function getAddress()
    {
        $items = $this->get("Address");
        if ($items == null) {
            return [];
        }
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
    public function setAddress(array $address)
    {
        $result = [];
        foreach ($address as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
