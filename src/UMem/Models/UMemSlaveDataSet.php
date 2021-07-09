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

class UMemSlaveDataSet extends Response
{
    

    /**
     * Zone: 实例所在可用区，或者master redis所在可用区，参见 [可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getZone(): string
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 实例所在可用区，或者master redis所在可用区，参见 [可用区列表](../summary/regionlist.html)
     *
     * @param string $zone
     */
    public function setZone(string $zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * SubnetId: 子网
     *
     * @return string|null
     */
    public function getSubnetId(): string
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 子网
     *
     * @param string $subnetId
     */
    public function setSubnetId(string $subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * VPCId: vpc
     *
     * @return string|null
     */
    public function getVPCId(): string
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: vpc
     *
     * @param string $vpcId
     */
    public function setVPCId(string $vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * VirtualIP:
     *
     * @return string|null
     */
    public function getVirtualIP(): string
    {
        return $this->get("VirtualIP");
    }

    /**
     * VirtualIP:
     *
     * @param string $virtualIP
     */
    public function setVirtualIP(string $virtualIP)
    {
        $this->set("VirtualIP", $virtualIP);
    }

    /**
     * RewriteTime: 主备Redis返回运维时间 0//0点 1 //1点 以此类推
     *
     * @return integer|null
     */
    public function getRewriteTime(): int
    {
        return $this->get("RewriteTime");
    }

    /**
     * RewriteTime: 主备Redis返回运维时间 0//0点 1 //1点 以此类推
     *
     * @param int $rewriteTime
     */
    public function setRewriteTime(int $rewriteTime)
    {
        $this->set("RewriteTime", $rewriteTime);
    }

    /**
     * MasterGroupId: 主实例id
     *
     * @return string|null
     */
    public function getMasterGroupId(): string
    {
        return $this->get("MasterGroupId");
    }

    /**
     * MasterGroupId: 主实例id
     *
     * @param string $masterGroupId
     */
    public function setMasterGroupId(string $masterGroupId)
    {
        $this->set("MasterGroupId", $masterGroupId);
    }

    /**
     * GroupId: 资源id
     *
     * @return string|null
     */
    public function getGroupId(): string
    {
        return $this->get("GroupId");
    }

    /**
     * GroupId: 资源id
     *
     * @param string $groupId
     */
    public function setGroupId(string $groupId)
    {
        $this->set("GroupId", $groupId);
    }

    /**
     * Port: 端口
     *
     * @return integer|null
     */
    public function getPort(): int
    {
        return $this->get("Port");
    }

    /**
     * Port: 端口
     *
     * @param int $port
     */
    public function setPort(int $port)
    {
        $this->set("Port", $port);
    }

    /**
     * MemorySize: 实力大小
     *
     * @return integer|null
     */
    public function getMemorySize(): int
    {
        return $this->get("MemorySize");
    }

    /**
     * MemorySize: 实力大小
     *
     * @param int $memorySize
     */
    public function setMemorySize(int $memorySize)
    {
        $this->set("MemorySize", $memorySize);
    }

    /**
     * GroupName: 资源名称
     *
     * @return string|null
     */
    public function getGroupName(): string
    {
        return $this->get("GroupName");
    }

    /**
     * GroupName: 资源名称
     *
     * @param string $groupName
     */
    public function setGroupName(string $groupName)
    {
        $this->set("GroupName", $groupName);
    }

    /**
     * Role: 表示实例是主库还是从库,master,slave
     *
     * @return string|null
     */
    public function getRole(): string
    {
        return $this->get("Role");
    }

    /**
     * Role: 表示实例是主库还是从库,master,slave
     *
     * @param string $role
     */
    public function setRole(string $role)
    {
        $this->set("Role", $role);
    }

    /**
     * ModifyTime: 修改时间
     *
     * @return integer|null
     */
    public function getModifyTime(): int
    {
        return $this->get("ModifyTime");
    }

    /**
     * ModifyTime: 修改时间
     *
     * @param int $modifyTime
     */
    public function setModifyTime(int $modifyTime)
    {
        $this->set("ModifyTime", $modifyTime);
    }

    /**
     * Name: 资源名称
     *
     * @return string|null
     */
    public function getName(): string
    {
        return $this->get("Name");
    }

    /**
     * Name: 资源名称
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->set("Name", $name);
    }

    /**
     * CreateTime: 创建时间
     *
     * @return integer|null
     */
    public function getCreateTime(): int
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * ExpireTime: 到期时间
     *
     * @return integer|null
     */
    public function getExpireTime(): int
    {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: 到期时间
     *
     * @param int $expireTime
     */
    public function setExpireTime(int $expireTime)
    {
        $this->set("ExpireTime", $expireTime);
    }

    /**
     * Size: 容量单位GB
     *
     * @return integer|null
     */
    public function getSize(): int
    {
        return $this->get("Size");
    }

    /**
     * Size: 容量单位GB
     *
     * @param int $size
     */
    public function setSize(int $size)
    {
        $this->set("Size", $size);
    }

    /**
     * UsedSize: 使用量单位MB
     *
     * @return integer|null
     */
    public function getUsedSize(): int
    {
        return $this->get("UsedSize");
    }

    /**
     * UsedSize: 使用量单位MB
     *
     * @param int $usedSize
     */
    public function setUsedSize(int $usedSize)
    {
        $this->set("UsedSize", $usedSize);
    }

    /**
     * State: 实例状态                                  Starting                  // 创建中       Creating                  // 初始化中     CreateFail                // 创建失败     Fail                      // 创建失败     Deleting                  // 删除中       DeleteFail                // 删除失败     Running                   // 运行         Resizing                  // 容量调整中   ResizeFail                // 容量调整失败 Configing                 // 配置中       ConfigFail                // 配置失败Restarting                // 重启中SetPasswordFail  //设置密码失败
     *
     * @return string|null
     */
    public function getState(): string
    {
        return $this->get("State");
    }

    /**
     * State: 实例状态                                  Starting                  // 创建中       Creating                  // 初始化中     CreateFail                // 创建失败     Fail                      // 创建失败     Deleting                  // 删除中       DeleteFail                // 删除失败     Running                   // 运行         Resizing                  // 容量调整中   ResizeFail                // 容量调整失败 Configing                 // 配置中       ConfigFail                // 配置失败Restarting                // 重启中SetPasswordFail  //设置密码失败
     *
     * @param string $state
     */
    public function setState(string $state)
    {
        $this->set("State", $state);
    }

    /**
     * ChargeType: 计费模式，Year, Month, Dynamic, Trial
     *
     * @return string|null
     */
    public function getChargeType(): string
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费模式，Year, Month, Dynamic, Trial
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Tag: 业务组名称
     *
     * @return string|null
     */
    public function getTag(): string
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组名称
     *
     * @param string $tag
     */
    public function setTag(string $tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * ResourceType: distributed: 分布式版Redis,或者分布式Memcache；single：主备版Redis,或者单机Memcache；performance：高性能版
     *
     * @return string|null
     */
    public function getResourceType(): string
    {
        return $this->get("ResourceType");
    }

    /**
     * ResourceType: distributed: 分布式版Redis,或者分布式Memcache；single：主备版Redis,或者单机Memcache；performance：高性能版
     *
     * @param string $resourceType
     */
    public function setResourceType(string $resourceType)
    {
        $this->set("ResourceType", $resourceType);
    }

    /**
     * ConfigId: 节点的配置ID
     *
     * @return string|null
     */
    public function getConfigId(): string
    {
        return $this->get("ConfigId");
    }

    /**
     * ConfigId: 节点的配置ID
     *
     * @param string $configId
     */
    public function setConfigId(string $configId)
    {
        $this->set("ConfigId", $configId);
    }

    /**
     * Version: Redis版本信息
     *
     * @return string|null
     */
    public function getVersion(): string
    {
        return $this->get("Version");
    }

    /**
     * Version: Redis版本信息
     *
     * @param string $version
     */
    public function setVersion(string $version)
    {
        $this->set("Version", $version);
    }
}
