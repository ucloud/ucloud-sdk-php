<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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
namespace UCloud\UCompShare\Models;

use UCloud\Core\Response\Response;

class ULHostInstanceSet extends Response
{
    

    /**
     * Zone: 可用区。
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * ULHostId: 实例Id。
     *
     * @return string|null
     */
    public function getULHostId()
    {
        return $this->get("ULHostId");
    }

    /**
     * ULHostId: 实例Id。
     *
     * @param string $ulHostId
     */
    public function setULHostId($ulHostId)
    {
        $this->set("ULHostId", $ulHostId);
    }

    /**
     * Name: 实例名称。默认套餐Id
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 实例名称。默认套餐Id
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Tag: 业务组。
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组。
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * Remark: 备注。
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 备注。
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * ImageId: 镜像Id。
     *
     * @return string|null
     */
    public function getImageId()
    {
        return $this->get("ImageId");
    }

    /**
     * ImageId: 镜像Id。
     *
     * @param string $imageId
     */
    public function setImageId($imageId)
    {
        $this->set("ImageId", $imageId);
    }

    /**
     * ImageName: 镜像名称。
     *
     * @return string|null
     */
    public function getImageName()
    {
        return $this->get("ImageName");
    }

    /**
     * ImageName: 镜像名称。
     *
     * @param string $imageName
     */
    public function setImageName($imageName)
    {
        $this->set("ImageName", $imageName);
    }

    /**
     * Apps: 【数组】镜像包含的应用列表。
     *
     * @return string[]|null
     */
    public function getApps()
    {
        return $this->get("Apps");
    }

    /**
     * Apps: 【数组】镜像包含的应用列表。
     *
     * @param string[] $apps
     */
    public function setApps(array $apps)
    {
        $this->set("Apps", $apps);
    }

    /**
     * CPU: CPU核数。
     *
     * @return integer|null
     */
    public function getCPU()
    {
        return $this->get("CPU");
    }

    /**
     * CPU: CPU核数。
     *
     * @param int $cpu
     */
    public function setCPU($cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * Memory: 内存。单位：MB
     *
     * @return integer|null
     */
    public function getMemory()
    {
        return $this->get("Memory");
    }

    /**
     * Memory: 内存。单位：MB
     *
     * @param int $memory
     */
    public function setMemory($memory)
    {
        $this->set("Memory", $memory);
    }

    /**
     * State: 实例状态。枚举值：\\ >初始化: Initializing; \\ >启动中: Starting; \\> 运行中: Running; \\> 关机中: Stopping; \\ >关机: Stopped \\ >安装失败: Install Fail; \\ >重启中: Rebooting; \\ > 未知(空字符串，获取状态超时或出错)：""
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 实例状态。枚举值：\\ >初始化: Initializing; \\ >启动中: Starting; \\> 运行中: Running; \\> 关机中: Stopping; \\ >关机: Stopped \\ >安装失败: Install Fail; \\ >重启中: Rebooting; \\ > 未知(空字符串，获取状态超时或出错)：""
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }

    /**
     * ChargeType: 计费模式。枚举值：Month/Year
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费模式。枚举值：Month/Year
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * IPSet: IP信息
     *
     * @return UHostIPSet[]|null
     */
    public function getIPSet()
    {
        $items = $this->get("IPSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UHostIPSet($item));
        }
        return $result;
    }

    /**
     * IPSet: IP信息
     *
     * @param UHostIPSet[] $ipSet
     */
    public function setIPSet(array $ipSet)
    {
        $result = [];
        foreach ($ipSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * DiskSet: 磁盘信息
     *
     * @return ULHostDiskSet[]|null
     */
    public function getDiskSet()
    {
        $items = $this->get("DiskSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ULHostDiskSet($item));
        }
        return $result;
    }

    /**
     * DiskSet: 磁盘信息
     *
     * @param ULHostDiskSet[] $diskSet
     */
    public function setDiskSet(array $diskSet)
    {
        $result = [];
        foreach ($diskSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * EIPExclusiveUTPInfo: 流量包详情信息
     *
     * @return ExclusiveUTPInfo|null
     */
    public function getEIPExclusiveUTPInfo()
    {
        return new ExclusiveUTPInfo($this->get("EIPExclusiveUTPInfo"));
    }

    /**
     * EIPExclusiveUTPInfo: 流量包详情信息
     *
     * @param ExclusiveUTPInfo $eipExclusiveUTPInfo
     */
    public function setEIPExclusiveUTPInfo(array $eipExclusiveUTPInfo)
    {
        $this->set("EIPExclusiveUTPInfo", $eipExclusiveUTPInfo->getAll());
    }

    /**
     * AutoRenew: 是否自动续费。枚举值：Yes/No
     *
     * @return string|null
     */
    public function getAutoRenew()
    {
        return $this->get("AutoRenew");
    }

    /**
     * AutoRenew: 是否自动续费。枚举值：Yes/No
     *
     * @param string $autoRenew
     */
    public function setAutoRenew($autoRenew)
    {
        $this->set("AutoRenew", $autoRenew);
    }

    /**
     * IsExpire: 是否过期。枚举值：Yes/No
     *
     * @return string|null
     */
    public function getIsExpire()
    {
        return $this->get("IsExpire");
    }

    /**
     * IsExpire: 是否过期。枚举值：Yes/No
     *
     * @param string $isExpire
     */
    public function setIsExpire($isExpire)
    {
        $this->set("IsExpire", $isExpire);
    }

    /**
     * ExpireTime: 过期时间。Unix时间戳
     *
     * @return integer|null
     */
    public function getExpireTime()
    {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: 过期时间。Unix时间戳
     *
     * @param int $expireTime
     */
    public function setExpireTime($expireTime)
    {
        $this->set("ExpireTime", $expireTime);
    }

    /**
     * CreateTime: 创建时间。Unix时间戳
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间。Unix时间戳
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }
}
