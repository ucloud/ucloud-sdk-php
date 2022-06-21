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
namespace UCloud\UMem\Models;

use UCloud\Core\Response\Response;

class URedisGroupSet extends Response
{
    

    /**
     * Zone: 实例所在可用区，或者master redis所在可用区，参见 [可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 实例所在可用区，或者master redis所在可用区，参见 [可用区列表](../summary/regionlist.html)
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * RewriteTime: 返回运维时间 0 //0点 1 //1点 以此类推
     *
     * @return int|null
     */
    public function getRewriteTime()
    {
        return $this->get("RewriteTime");
    }

    /**
     * RewriteTime: 返回运维时间 0 //0点 1 //1点 以此类推
     *
     * @param int $rewriteTime
     */
    public function setRewriteTime($rewriteTime)
    {
        $this->set("RewriteTime", $rewriteTime);
    }

    /**
     * Role: 实例类型
     *
     * @return string|null
     */
    public function getRole()
    {
        return $this->get("Role");
    }

    /**
     * Role: 实例类型
     *
     * @param string $role
     */
    public function setRole($role)
    {
        $this->set("Role", $role);
    }

    /**
     * VPCId: vpcid
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: vpcid
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * SubnetId: subnetid
     *
     * @return string|null
     */
    public function getSubnetId()
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: subnetid
     *
     * @param string $subnetId
     */
    public function setSubnetId($subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * GroupId: 组ID
     *
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->get("GroupId");
    }

    /**
     * GroupId: 组ID
     *
     * @param string $groupId
     */
    public function setGroupId($groupId)
    {
        $this->set("GroupId", $groupId);
    }

    /**
     * Name: 组名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 组名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
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
     * Protocol: 协议
     *
     * @return string|null
     */
    public function getProtocol()
    {
        return $this->get("Protocol");
    }

    /**
     * Protocol: 协议
     *
     * @param string $protocol
     */
    public function setProtocol($protocol)
    {
        $this->set("Protocol", $protocol);
    }

    /**
     * MemorySize: 容量单位GB
     *
     * @return int|null
     */
    public function getMemorySize()
    {
        return $this->get("MemorySize");
    }

    /**
     * MemorySize: 容量单位GB
     *
     * @param int $memorySize
     */
    public function setMemorySize($memorySize)
    {
        $this->set("MemorySize", $memorySize);
    }

    /**
     * GroupName: 组名称
     *
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->get("GroupName");
    }

    /**
     * GroupName: 组名称
     *
     * @param string $groupName
     */
    public function setGroupName($groupName)
    {
        $this->set("GroupName", $groupName);
    }

    /**
     * ConfigId: 节点的配置ID
     *
     * @return string|null
     */
    public function getConfigId()
    {
        return $this->get("ConfigId");
    }

    /**
     * ConfigId: 节点的配置ID
     *
     * @param string $configId
     */
    public function setConfigId($configId)
    {
        $this->set("ConfigId", $configId);
    }

    /**
     * VirtualIP: 节点的虚拟IP地址
     *
     * @return string|null
     */
    public function getVirtualIP()
    {
        return $this->get("VirtualIP");
    }

    /**
     * VirtualIP: 节点的虚拟IP地址
     *
     * @param string $virtualIP
     */
    public function setVirtualIP($virtualIP)
    {
        $this->set("VirtualIP", $virtualIP);
    }

    /**
     * Port: 节点分配的服务端口
     *
     * @return int|null
     */
    public function getPort()
    {
        return $this->get("Port");
    }

    /**
     * Port: 节点分配的服务端口
     *
     * @param int $port
     */
    public function setPort($port)
    {
        $this->set("Port", $port);
    }

    /**
     * Size: 容量单位GB
     *
     * @return int|null
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
     * @return int|null
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
     * AutoBackup: 是否需要自动备份,enable,disable
     *
     * @return string|null
     */
    public function getAutoBackup()
    {
        return $this->get("AutoBackup");
    }

    /**
     * AutoBackup: 是否需要自动备份,enable,disable
     *
     * @param string $autoBackup
     */
    public function setAutoBackup($autoBackup)
    {
        $this->set("AutoBackup", $autoBackup);
    }

    /**
     * BackupTime: 组自动备份开始时间,单位小时计,范围[0-23]
     *
     * @return int|null
     */
    public function getBackupTime()
    {
        return $this->get("BackupTime");
    }

    /**
     * BackupTime: 组自动备份开始时间,单位小时计,范围[0-23]
     *
     * @param int $backupTime
     */
    public function setBackupTime($backupTime)
    {
        $this->set("BackupTime", $backupTime);
    }

    /**
     * HighAvailability: 是否开启高可用,enable,disable
     *
     * @return string|null
     */
    public function getHighAvailability()
    {
        return $this->get("HighAvailability");
    }

    /**
     * HighAvailability: 是否开启高可用,enable,disable
     *
     * @param string $highAvailability
     */
    public function setHighAvailability($highAvailability)
    {
        $this->set("HighAvailability", $highAvailability);
    }

    /**
     * Version: Redis版本信息
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->get("Version");
    }

    /**
     * Version: Redis版本信息
     *
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->set("Version", $version);
    }

    /**
     * ExpireTime: 过期时间 (UNIX时间戳)
     *
     * @return int|null
     */
    public function getExpireTime()
    {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: 过期时间 (UNIX时间戳)
     *
     * @param int $expireTime
     */
    public function setExpireTime($expireTime)
    {
        $this->set("ExpireTime", $expireTime);
    }

    /**
     * ChargeType: 计费类型:Year,Month,Dynamic 默认Dynamic
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费类型:Year,Month,Dynamic 默认Dynamic
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * State: 状态标记 Creating // 初始化中 CreateFail // 创建失败 Deleting // 删除中 DeleteFail // 删除失败 Running // 运行 Resizing // 容量调整中 ResizeFail // 容量调整失败 Configing // 配置中 ConfigFail // 配置失败
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 状态标记 Creating // 初始化中 CreateFail // 创建失败 Deleting // 删除中 DeleteFail // 删除失败 Running // 运行 Resizing // 容量调整中 ResizeFail // 容量调整失败 Configing // 配置中 ConfigFail // 配置失败
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }

    /**
     * CreateTime: 创建时间 (UNIX时间戳)
     *
     * @return int|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间 (UNIX时间戳)
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * ModifyTime: 修改时间 (UNIX时间戳)
     *
     * @return int|null
     */
    public function getModifyTime()
    {
        return $this->get("ModifyTime");
    }

    /**
     * ModifyTime: 修改时间 (UNIX时间戳)
     *
     * @param int $modifyTime
     */
    public function setModifyTime($modifyTime)
    {
        $this->set("ModifyTime", $modifyTime);
    }

    /**
     * Tag: 业务组名称
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组名称
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * SlaveZone: 跨机房URedis，slave redis所在可用区，参见 [可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getSlaveZone()
    {
        return $this->get("SlaveZone");
    }

    /**
     * SlaveZone: 跨机房URedis，slave redis所在可用区，参见 [可用区列表](../summary/regionlist.html)
     *
     * @param string $slaveZone
     */
    public function setSlaveZone($slaveZone)
    {
        $this->set("SlaveZone", $slaveZone);
    }


}
