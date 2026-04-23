<?php
/**
 * Copyright 2026 UCloud Technology Co., Ltd.
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
namespace UCloud\UClickhouse\Models;

use UCloud\Core\Response\Response;

class ClickhouseCluster extends Response
{
    

    /**
     * ClusterId: 集群ID
     *
     * @return string|null
     */
    public function getClusterId()
    {
        return $this->get("ClusterId");
    }

    /**
     * ClusterId: 集群ID
     *
     * @param string $clusterId
     */
    public function setClusterId($clusterId)
    {
        $this->set("ClusterId", $clusterId);
    }

    /**
     * TopOrganizationId: 公司ID
     *
     * @return integer|null
     */
    public function getTopOrganizationId()
    {
        return $this->get("TopOrganizationId");
    }

    /**
     * TopOrganizationId: 公司ID
     *
     * @param int $topOrganizationId
     */
    public function setTopOrganizationId($topOrganizationId)
    {
        $this->set("TopOrganizationId", $topOrganizationId);
    }

    /**
     * OrganizationId: 项目ID
     *
     * @return integer|null
     */
    public function getOrganizationId()
    {
        return $this->get("OrganizationId");
    }

    /**
     * OrganizationId: 项目ID
     *
     * @param int $organizationId
     */
    public function setOrganizationId($organizationId)
    {
        $this->set("OrganizationId", $organizationId);
    }

    /**
     * ClusterName: 集群名称
     *
     * @return string|null
     */
    public function getClusterName()
    {
        return $this->get("ClusterName");
    }

    /**
     * ClusterName: 集群名称
     *
     * @param string $clusterName
     */
    public function setClusterName($clusterName)
    {
        $this->set("ClusterName", $clusterName);
    }

    /**
     * VPCId: VPCID
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: VPCID
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * SubnetId: 子网ID
     *
     * @return string|null
     */
    public function getSubnetId()
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 子网ID
     *
     * @param string $subnetId
     */
    public function setSubnetId($subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * ClickhouseVersion: 集群版本
     *
     * @return string|null
     */
    public function getClickhouseVersion()
    {
        return $this->get("ClickhouseVersion");
    }

    /**
     * ClickhouseVersion: 集群版本
     *
     * @param string $clickhouseVersion
     */
    public function setClickhouseVersion($clickhouseVersion)
    {
        $this->set("ClickhouseVersion", $clickhouseVersion);
    }

    /**
     * ZookeeperVersion: Zookeeper版本
     *
     * @return string|null
     */
    public function getZookeeperVersion()
    {
        return $this->get("ZookeeperVersion");
    }

    /**
     * ZookeeperVersion: Zookeeper版本
     *
     * @param string $zookeeperVersion
     */
    public function setZookeeperVersion($zookeeperVersion)
    {
        $this->set("ZookeeperVersion", $zookeeperVersion);
    }

    /**
     * MachineType: 机型
     *
     * @return string|null
     */
    public function getMachineType()
    {
        return $this->get("MachineType");
    }

    /**
     * MachineType: 机型
     *
     * @param string $machineType
     */
    public function setMachineType($machineType)
    {
        $this->set("MachineType", $machineType);
    }

    /**
     * Status: 集群状态：CREATING（创建中）、RUNNING（运行中）、RESIZING（变配中）、RESTARTING（重启中）、UPGRADING（升级中）、DESTROYING（销毁中）、DESTROYED（已删除）、CREATE_FAILED（创建失败）、RESTART_FAILED（重启失败）、DESTROY_FAILED（删除失败）、RESIZE_FAILED（变配失败）、BACKUP_RESTORING（备份恢复中）、BACKUP_RESTORE_FAILED（备份恢复失败）、EXPANDING（扩容中）、EXPAND_FAILED（扩容失败）
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 集群状态：CREATING（创建中）、RUNNING（运行中）、RESIZING（变配中）、RESTARTING（重启中）、UPGRADING（升级中）、DESTROYING（销毁中）、DESTROYED（已删除）、CREATE_FAILED（创建失败）、RESTART_FAILED（重启失败）、DESTROY_FAILED（删除失败）、RESIZE_FAILED（变配失败）、BACKUP_RESTORING（备份恢复中）、BACKUP_RESTORE_FAILED（备份恢复失败）、EXPANDING（扩容中）、EXPAND_FAILED（扩容失败）
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * ShardCount: 分片数
     *
     * @return integer|null
     */
    public function getShardCount()
    {
        return $this->get("ShardCount");
    }

    /**
     * ShardCount: 分片数
     *
     * @param int $shardCount
     */
    public function setShardCount($shardCount)
    {
        $this->set("ShardCount", $shardCount);
    }

    /**
     * ReplicateCount: 副本数
     *
     * @return integer|null
     */
    public function getReplicateCount()
    {
        return $this->get("ReplicateCount");
    }

    /**
     * ReplicateCount: 副本数
     *
     * @param int $replicateCount
     */
    public function setReplicateCount($replicateCount)
    {
        $this->set("ReplicateCount", $replicateCount);
    }

    /**
     * CreateTimestamp: 集群创建时间
     *
     * @return integer|null
     */
    public function getCreateTimestamp()
    {
        return $this->get("CreateTimestamp");
    }

    /**
     * CreateTimestamp: 集群创建时间
     *
     * @param int $createTimestamp
     */
    public function setCreateTimestamp($createTimestamp)
    {
        $this->set("CreateTimestamp", $createTimestamp);
    }

    /**
     * ClickhouseMachineTypeId: Clickhouse机型ID
     *
     * @return string|null
     */
    public function getClickhouseMachineTypeId()
    {
        return $this->get("ClickhouseMachineTypeId");
    }

    /**
     * ClickhouseMachineTypeId: Clickhouse机型ID
     *
     * @param string $clickhouseMachineTypeId
     */
    public function setClickhouseMachineTypeId($clickhouseMachineTypeId)
    {
        $this->set("ClickhouseMachineTypeId", $clickhouseMachineTypeId);
    }

    /**
     * ClickhouseMachineTypeName: Clickhouse机型名称
     *
     * @return string|null
     */
    public function getClickhouseMachineTypeName()
    {
        return $this->get("ClickhouseMachineTypeName");
    }

    /**
     * ClickhouseMachineTypeName: Clickhouse机型名称
     *
     * @param string $clickhouseMachineTypeName
     */
    public function setClickhouseMachineTypeName($clickhouseMachineTypeName)
    {
        $this->set("ClickhouseMachineTypeName", $clickhouseMachineTypeName);
    }

    /**
     * RegionId: 地域ID
     *
     * @return integer|null
     */
    public function getRegionId()
    {
        return $this->get("RegionId");
    }

    /**
     * RegionId: 地域ID
     *
     * @param int $regionId
     */
    public function setRegionId($regionId)
    {
        $this->set("RegionId", $regionId);
    }

    /**
     * ZookeeperMachineTypeId: Zookeeper机型ID
     *
     * @return string|null
     */
    public function getZookeeperMachineTypeId()
    {
        return $this->get("ZookeeperMachineTypeId");
    }

    /**
     * ZookeeperMachineTypeId: Zookeeper机型ID
     *
     * @param string $zookeeperMachineTypeId
     */
    public function setZookeeperMachineTypeId($zookeeperMachineTypeId)
    {
        $this->set("ZookeeperMachineTypeId", $zookeeperMachineTypeId);
    }

    /**
     * ZookeeperMachineTypeName: Zookeeper机型名称
     *
     * @return string|null
     */
    public function getZookeeperMachineTypeName()
    {
        return $this->get("ZookeeperMachineTypeName");
    }

    /**
     * ZookeeperMachineTypeName: Zookeeper机型名称
     *
     * @param string $zookeeperMachineTypeName
     */
    public function setZookeeperMachineTypeName($zookeeperMachineTypeName)
    {
        $this->set("ZookeeperMachineTypeName", $zookeeperMachineTypeName);
    }

    /**
     * ClickhouseDataDiskType: Clickhouse数据盘类型
     *
     * @return string|null
     */
    public function getClickhouseDataDiskType()
    {
        return $this->get("ClickhouseDataDiskType");
    }

    /**
     * ClickhouseDataDiskType: Clickhouse数据盘类型
     *
     * @param string $clickhouseDataDiskType
     */
    public function setClickhouseDataDiskType($clickhouseDataDiskType)
    {
        $this->set("ClickhouseDataDiskType", $clickhouseDataDiskType);
    }

    /**
     * ClickhouseDataDiskSize: Clickhouse数据盘大小
     *
     * @return integer|null
     */
    public function getClickhouseDataDiskSize()
    {
        return $this->get("ClickhouseDataDiskSize");
    }

    /**
     * ClickhouseDataDiskSize: Clickhouse数据盘大小
     *
     * @param int $clickhouseDataDiskSize
     */
    public function setClickhouseDataDiskSize($clickhouseDataDiskSize)
    {
        $this->set("ClickhouseDataDiskSize", $clickhouseDataDiskSize);
    }

    /**
     * ZookeeperDataDiskType: Zookeeper数据盘类型
     *
     * @return string|null
     */
    public function getZookeeperDataDiskType()
    {
        return $this->get("ZookeeperDataDiskType");
    }

    /**
     * ZookeeperDataDiskType: Zookeeper数据盘类型
     *
     * @param string $zookeeperDataDiskType
     */
    public function setZookeeperDataDiskType($zookeeperDataDiskType)
    {
        $this->set("ZookeeperDataDiskType", $zookeeperDataDiskType);
    }

    /**
     * ZookeeperDataDiskSize: Zookeeper数据盘大小
     *
     * @return integer|null
     */
    public function getZookeeperDataDiskSize()
    {
        return $this->get("ZookeeperDataDiskSize");
    }

    /**
     * ZookeeperDataDiskSize: Zookeeper数据盘大小
     *
     * @param int $zookeeperDataDiskSize
     */
    public function setZookeeperDataDiskSize($zookeeperDataDiskSize)
    {
        $this->set("ZookeeperDataDiskSize", $zookeeperDataDiskSize);
    }

    /**
     * ClickhouseNodeCPU: Clickhouse节点CPU
     *
     * @return integer|null
     */
    public function getClickhouseNodeCPU()
    {
        return $this->get("ClickhouseNodeCPU");
    }

    /**
     * ClickhouseNodeCPU: Clickhouse节点CPU
     *
     * @param int $clickhouseNodeCPU
     */
    public function setClickhouseNodeCPU($clickhouseNodeCPU)
    {
        $this->set("ClickhouseNodeCPU", $clickhouseNodeCPU);
    }

    /**
     * ClickhouseNodeMemory: Clickhouse内存
     *
     * @return integer|null
     */
    public function getClickhouseNodeMemory()
    {
        return $this->get("ClickhouseNodeMemory");
    }

    /**
     * ClickhouseNodeMemory: Clickhouse内存
     *
     * @param int $clickhouseNodeMemory
     */
    public function setClickhouseNodeMemory($clickhouseNodeMemory)
    {
        $this->set("ClickhouseNodeMemory", $clickhouseNodeMemory);
    }

    /**
     * ZookeeperNodeCPU: Zookeeper节点CPU
     *
     * @return integer|null
     */
    public function getZookeeperNodeCPU()
    {
        return $this->get("ZookeeperNodeCPU");
    }

    /**
     * ZookeeperNodeCPU: Zookeeper节点CPU
     *
     * @param int $zookeeperNodeCPU
     */
    public function setZookeeperNodeCPU($zookeeperNodeCPU)
    {
        $this->set("ZookeeperNodeCPU", $zookeeperNodeCPU);
    }

    /**
     * ZookeeperNodeMemory: Zookeeper节点内存
     *
     * @return integer|null
     */
    public function getZookeeperNodeMemory()
    {
        return $this->get("ZookeeperNodeMemory");
    }

    /**
     * ZookeeperNodeMemory: Zookeeper节点内存
     *
     * @param int $zookeeperNodeMemory
     */
    public function setZookeeperNodeMemory($zookeeperNodeMemory)
    {
        $this->set("ZookeeperNodeMemory", $zookeeperNodeMemory);
    }

    /**
     * IsZookeeperHA: Zookeeper是否高可用
     *
     * @return string|null
     */
    public function getIsZookeeperHA()
    {
        return $this->get("IsZookeeperHA");
    }

    /**
     * IsZookeeperHA: Zookeeper是否高可用
     *
     * @param string $isZookeeperHA
     */
    public function setIsZookeeperHA($isZookeeperHA)
    {
        $this->set("IsZookeeperHA", $isZookeeperHA);
    }

    /**
     * IsSecgroup: 实例是否开启安全组
     *
     * @return string|null
     */
    public function getIsSecgroup()
    {
        return $this->get("IsSecgroup");
    }

    /**
     * IsSecgroup: 实例是否开启安全组
     *
     * @param string $isSecgroup
     */
    public function setIsSecgroup($isSecgroup)
    {
        $this->set("IsSecgroup", $isSecgroup);
    }

    /**
     * IsBackup: 实例是否开启备份
     *
     * @return string|null
     */
    public function getIsBackup()
    {
        return $this->get("IsBackup");
    }

    /**
     * IsBackup: 实例是否开启备份
     *
     * @param string $isBackup
     */
    public function setIsBackup($isBackup)
    {
        $this->set("IsBackup", $isBackup);
    }

    /**
     * IsTieredStorage: 实例是否开启冷热分层
     *
     * @return string|null
     */
    public function getIsTieredStorage()
    {
        return $this->get("IsTieredStorage");
    }

    /**
     * IsTieredStorage: 实例是否开启冷热分层
     *
     * @param string $isTieredStorage
     */
    public function setIsTieredStorage($isTieredStorage)
    {
        $this->set("IsTieredStorage", $isTieredStorage);
    }

    /**
     * MultiZones: 实例所在可用区
     *
     * @return string[]|null
     */
    public function getMultiZones()
    {
        return $this->get("MultiZones");
    }

    /**
     * MultiZones: 实例所在可用区
     *
     * @param string[] $multiZones
     */
    public function setMultiZones(array $multiZones)
    {
        $this->set("MultiZones", $multiZones);
    }

    /**
     * ExpireTimestamp: 实例过期时间
     *
     * @return float|null
     */
    public function getExpireTimestamp()
    {
        return $this->get("ExpireTimestamp");
    }

    /**
     * ExpireTimestamp: 实例过期时间
     *
     * @param float $expireTimestamp
     */
    public function setExpireTimestamp($expireTimestamp)
    {
        $this->set("ExpireTimestamp", $expireTimestamp);
    }
}
