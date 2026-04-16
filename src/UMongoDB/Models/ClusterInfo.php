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

class ClusterInfo extends Response
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
     * ZoneId:
     *
     * @return integer|null
     */
    public function getZoneId()
    {
        return $this->get("ZoneId");
    }

    /**
     * ZoneId:
     *
     * @param int $zoneId
     */
    public function setZoneId($zoneId)
    {
        $this->set("ZoneId", $zoneId);
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
     * InstanceName: 实例名称
     *
     * @return string|null
     */
    public function getInstanceName()
    {
        return $this->get("InstanceName");
    }

    /**
     * InstanceName: 实例名称
     *
     * @param string $instanceName
     */
    public function setInstanceName($instanceName)
    {
        $this->set("InstanceName", $instanceName);
    }

    /**
     * State: 副本集/分片集群状态标记 Initing：初始化中，InitFailed：安装失败，Starting：启动中，StartFailed：启动失败，Running：运行，Stopping：关闭中，Stopped：已关闭, StopFailed：关闭失败，Deleting：删除中，Deleted：已删除，DeleteFailed：删除失败，Restarting：重启中，RestartFailed：重启失败,Upgrading: 升降级中，UpgradeFailed: 升降级失败,Switching:主备切换中，UpdatingSSL：修改SSL中，UpdateSSLFail：修改SSL失败
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 副本集/分片集群状态标记 Initing：初始化中，InitFailed：安装失败，Starting：启动中，StartFailed：启动失败，Running：运行，Stopping：关闭中，Stopped：已关闭, StopFailed：关闭失败，Deleting：删除中，Deleted：已删除，DeleteFailed：删除失败，Restarting：重启中，RestartFailed：重启失败,Upgrading: 升降级中，UpgradeFailed: 升降级失败,Switching:主备切换中，UpdatingSSL：修改SSL中，UpdateSSLFail：修改SSL失败
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }

    /**
     * DBVersion: 副本集的Mongodb的版本
     *
     * @return string|null
     */
    public function getDBVersion()
    {
        return $this->get("DBVersion");
    }

    /**
     * DBVersion: 副本集的Mongodb的版本
     *
     * @param string $dbVersion
     */
    public function setDBVersion($dbVersion)
    {
        $this->set("DBVersion", $dbVersion);
    }

    /**
     * DiskSpace: 磁盘空间(GB), 默认根据配置机型
     *
     * @return integer|null
     */
    public function getDiskSpace()
    {
        return $this->get("DiskSpace");
    }

    /**
     * DiskSpace: 磁盘空间(GB), 默认根据配置机型
     *
     * @param int $diskSpace
     */
    public function setDiskSpace($diskSpace)
    {
        $this->set("DiskSpace", $diskSpace);
    }

    /**
     * MachineTypeId: 计算规格
     *
     * @return string|null
     */
    public function getMachineTypeId()
    {
        return $this->get("MachineTypeId");
    }

    /**
     * MachineTypeId: 计算规格
     *
     * @param string $machineTypeId
     */
    public function setMachineTypeId($machineTypeId)
    {
        $this->set("MachineTypeId", $machineTypeId);
    }

    /**
     * CreateTime: DB实例创建时间
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: DB实例创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * ConfigReplicaInfo: ConfigSrv信息
     *
     * @return ReplicaInfo|null
     */
    public function getConfigReplicaInfo()
    {
        return new ReplicaInfo($this->get("ConfigReplicaInfo"));
    }

    /**
     * ConfigReplicaInfo: ConfigSrv信息
     *
     * @param ReplicaInfo $configReplicaInfo
     */
    public function setConfigReplicaInfo(array $configReplicaInfo)
    {
        $this->set("ConfigReplicaInfo", $configReplicaInfo->getAll());
    }

    /**
     * DataReplicaInfos: 数据副本信息
     *
     * @return ReplicaInfo[]|null
     */
    public function getDataReplicaInfos()
    {
        $items = $this->get("DataReplicaInfos");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ReplicaInfo($item));
        }
        return $result;
    }

    /**
     * DataReplicaInfos: 数据副本信息
     *
     * @param ReplicaInfo[] $dataReplicaInfos
     */
    public function setDataReplicaInfos(array $dataReplicaInfos)
    {
        $result = [];
        foreach ($dataReplicaInfos as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * MongosInfo: Mongos节点信息
     *
     * @return NodeInfo[]|null
     */
    public function getMongosInfo()
    {
        $items = $this->get("MongosInfo");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new NodeInfo($item));
        }
        return $result;
    }

    /**
     * MongosInfo: Mongos节点信息
     *
     * @param NodeInfo[] $mongosInfo
     */
    public function setMongosInfo(array $mongosInfo)
    {
        $result = [];
        foreach ($mongosInfo as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * ConnectURL: 副本集的访问地址
     *
     * @return string|null
     */
    public function getConnectURL()
    {
        return $this->get("ConnectURL");
    }

    /**
     * ConnectURL: 副本集的访问地址
     *
     * @param string $connectURL
     */
    public function setConnectURL($connectURL)
    {
        $this->set("ConnectURL", $connectURL);
    }

    /**
     * DeleteTime: DB实例删除时间
     *
     * @return integer|null
     */
    public function getDeleteTime()
    {
        return $this->get("DeleteTime");
    }

    /**
     * DeleteTime: DB实例删除时间
     *
     * @param int $deleteTime
     */
    public function setDeleteTime($deleteTime)
    {
        $this->set("DeleteTime", $deleteTime);
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
     * ShardCount: 分片数量，分片集有效
     *
     * @return integer|null
     */
    public function getShardCount()
    {
        return $this->get("ShardCount");
    }

    /**
     * ShardCount: 分片数量，分片集有效
     *
     * @param int $shardCount
     */
    public function setShardCount($shardCount)
    {
        $this->set("ShardCount", $shardCount);
    }

    /**
     * ShardNodeCount: 每分片节点数量，分片集有效
     *
     * @return integer|null
     */
    public function getShardNodeCount()
    {
        return $this->get("ShardNodeCount");
    }

    /**
     * ShardNodeCount: 每分片节点数量，分片集有效
     *
     * @param int $shardNodeCount
     */
    public function setShardNodeCount($shardNodeCount)
    {
        $this->set("ShardNodeCount", $shardNodeCount);
    }

    /**
     * MongosCount: Mongos节点数量，分片集有效
     *
     * @return integer|null
     */
    public function getMongosCount()
    {
        return $this->get("MongosCount");
    }

    /**
     * MongosCount: Mongos节点数量，分片集有效
     *
     * @param int $mongosCount
     */
    public function setMongosCount($mongosCount)
    {
        $this->set("MongosCount", $mongosCount);
    }

    /**
     * ConfigNodeCount: Config配置集群节点数量，分片集有效
     *
     * @return integer|null
     */
    public function getConfigNodeCount()
    {
        return $this->get("ConfigNodeCount");
    }

    /**
     * ConfigNodeCount: Config配置集群节点数量，分片集有效
     *
     * @param int $configNodeCount
     */
    public function setConfigNodeCount($configNodeCount)
    {
        $this->set("ConfigNodeCount", $configNodeCount);
    }

    /**
     * ConfigMachineType: Config配置集群节点配置，分片集有效
     *
     * @return string|null
     */
    public function getConfigMachineType()
    {
        return $this->get("ConfigMachineType");
    }

    /**
     * ConfigMachineType: Config配置集群节点配置，分片集有效
     *
     * @param string $configMachineType
     */
    public function setConfigMachineType($configMachineType)
    {
        $this->set("ConfigMachineType", $configMachineType);
    }

    /**
     * Tag: 实例业务组
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 实例业务组
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
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
     * ConfigComputeType: 配置节点计算规格
     *
     * @return MongodbMachineType|null
     */
    public function getConfigComputeType()
    {
        return new MongodbMachineType($this->get("ConfigComputeType"));
    }

    /**
     * ConfigComputeType: 配置节点计算规格
     *
     * @param MongodbMachineType $configComputeType
     */
    public function setConfigComputeType(array $configComputeType)
    {
        $this->set("ConfigComputeType", $configComputeType->getAll());
    }

    /**
     * MongosComputeType: 路由节点计算规格
     *
     * @return MongodbMachineType|null
     */
    public function getMongosComputeType()
    {
        return new MongodbMachineType($this->get("MongosComputeType"));
    }

    /**
     * MongosComputeType: 路由节点计算规格
     *
     * @param MongodbMachineType $mongosComputeType
     */
    public function setMongosComputeType(array $mongosComputeType)
    {
        $this->set("MongosComputeType", $mongosComputeType->getAll());
    }

    /**
     * CrossZones: 跨用区列表
     *
     * @return string[]|null
     */
    public function getCrossZones()
    {
        return $this->get("CrossZones");
    }

    /**
     * CrossZones: 跨用区列表
     *
     * @param string[] $crossZones
     */
    public function setCrossZones(array $crossZones)
    {
        $this->set("CrossZones", $crossZones);
    }

    /**
     * EnableSSL: 是否开启了SSL；1->未开启 2->开启
     *
     * @return integer|null
     */
    public function getEnableSSL()
    {
        return $this->get("EnableSSL");
    }

    /**
     * EnableSSL: 是否开启了SSL；1->未开启 2->开启
     *
     * @param int $enableSSL
     */
    public function setEnableSSL($enableSSL)
    {
        $this->set("EnableSSL", $enableSSL);
    }

    /**
     * SSLExpirationTime: SSL到期时间
     *
     * @return integer|null
     */
    public function getSSLExpirationTime()
    {
        return $this->get("SSLExpirationTime");
    }

    /**
     * SSLExpirationTime: SSL到期时间
     *
     * @param int $sslExpirationTime
     */
    public function setSSLExpirationTime($sslExpirationTime)
    {
        $this->set("SSLExpirationTime", $sslExpirationTime);
    }
}
