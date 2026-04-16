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
namespace UCloud\UMongoDB\Models;

use UCloud\Core\Response\Response;

class MongodbInstance extends Response
{
    

    /**
     * Zone: 可用区
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * ClusterId: 副本集/分片集群ID
     *
     * @return string|null
     */
    public function getClusterId()
    {
        return $this->get("ClusterId");
    }

    /**
     * ClusterId: 副本集/分片集群ID
     *
     * @param string $clusterId
     */
    public function setClusterId($clusterId)
    {
        $this->set("ClusterId", $clusterId);
    }

    /**
     * Name: 副本集/分片集群实例名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 副本集/分片集群实例名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * DBVersion: 副本集/分片集群的Mongodb的版本，包括MongoDB-3.6, MongoDB-4.2
     *
     * @return string|null
     */
    public function getDBVersion()
    {
        return $this->get("DBVersion");
    }

    /**
     * DBVersion: 副本集/分片集群的Mongodb的版本，包括MongoDB-3.6, MongoDB-4.2
     *
     * @param string $dbVersion
     */
    public function setDBVersion($dbVersion)
    {
        $this->set("DBVersion", $dbVersion);
    }

    /**
     * ConnectURL: 副本集/分片集群的访问地址
     *
     * @return string|null
     */
    public function getConnectURL()
    {
        return $this->get("ConnectURL");
    }

    /**
     * ConnectURL: 副本集/分片集群的访问地址
     *
     * @param string $connectURL
     */
    public function setConnectURL($connectURL)
    {
        $this->set("ConnectURL", $connectURL);
    }

    /**
     * CreateTime: 副本集/分片集群的创建时间
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 副本集/分片集群的创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * ClusterType: 集群类型，ReplicaSet :副本集，SharedCluster：分片集
     *
     * @return string|null
     */
    public function getClusterType()
    {
        return $this->get("ClusterType");
    }

    /**
     * ClusterType: 集群类型，ReplicaSet :副本集，SharedCluster：分片集
     *
     * @param string $clusterType
     */
    public function setClusterType($clusterType)
    {
        $this->set("ClusterType", $clusterType);
    }

    /**
     * State: 副本集/分片集群状态标记 Initing：初始化中，InitFailed：安装失败，Starting：启动中，StartFailed：启动失败，Running：运行，Stopping：关闭中，Stopped：已关闭, StopFailed：关闭失败，Deleting：删除中，Deleted：已删除，DeleteFailed：删除失败，Restarting：重启中，RestartFailed：重启失败,Upgrading: 升降级中，UpgradeFailed: 升降级失败,Switching:主备切换中
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 副本集/分片集群状态标记 Initing：初始化中，InitFailed：安装失败，Starting：启动中，StartFailed：启动失败，Running：运行，Stopping：关闭中，Stopped：已关闭, StopFailed：关闭失败，Deleting：删除中，Deleted：已删除，DeleteFailed：删除失败，Restarting：重启中，RestartFailed：重启失败,Upgrading: 升降级中，UpgradeFailed: 升降级失败,Switching:主备切换中
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }

    /**
     * IPv6ConnectURL: 副本集/分片集IPv6访问地址
     *
     * @return string|null
     */
    public function getIPv6ConnectURL()
    {
        return $this->get("IPv6ConnectURL");
    }

    /**
     * IPv6ConnectURL: 副本集/分片集IPv6访问地址
     *
     * @param string $iPv6ConnectURL
     */
    public function setIPv6ConnectURL($iPv6ConnectURL)
    {
        $this->set("IPv6ConnectURL", $iPv6ConnectURL);
    }

    /**
     * ExpiredTime: DB实例过期时间，采用UTC计时时间戳
     *
     * @return integer|null
     */
    public function getExpiredTime()
    {
        return $this->get("ExpiredTime");
    }

    /**
     * ExpiredTime: DB实例过期时间，采用UTC计时时间戳
     *
     * @param int $expiredTime
     */
    public function setExpiredTime($expiredTime)
    {
        $this->set("ExpiredTime", $expiredTime);
    }

    /**
     * DataComputeType: 数据节点计算规格
     *
     * @return MongodbMachineType|null
     */
    public function getDataComputeType()
    {
        return new MongodbMachineType($this->get("DataComputeType"));
    }

    /**
     * DataComputeType: 数据节点计算规格
     *
     * @param MongodbMachineType $dataComputeType
     */
    public function setDataComputeType(array $dataComputeType)
    {
        $this->set("DataComputeType", $dataComputeType->getAll());
    }

    /**
     * VPCId: VPC的ID
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: VPC的ID
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
     * DiskSpace: 数据节点磁盘空间(GB)
     *
     * @return integer|null
     */
    public function getDiskSpace()
    {
        return $this->get("DiskSpace");
    }

    /**
     * DiskSpace: 数据节点磁盘空间(GB)
     *
     * @param int $diskSpace
     */
    public function setDiskSpace($diskSpace)
    {
        $this->set("DiskSpace", $diskSpace);
    }

    /**
     * Tag: 业务组
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * CrossZones: 跨可用区列表
     *
     * @return string[]|null
     */
    public function getCrossZones()
    {
        return $this->get("CrossZones");
    }

    /**
     * CrossZones: 跨可用区列表
     *
     * @param string[] $crossZones
     */
    public function setCrossZones(array $crossZones)
    {
        $this->set("CrossZones", $crossZones);
    }
}
