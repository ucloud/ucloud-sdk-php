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
namespace UCloud\UClickhouse\Apis;

use UCloud\Core\Request\Request;
use UCloud\UClickhouse\Params\CreateUClickhouseClusterParamLabels;

class CreateUClickhouseClusterRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUClickhouseCluster"]);
        $this->markRequired("Region");
        $this->markRequired("ClickhouseMachineTypeId");
        $this->markRequired("DataDiskType");
        $this->markRequired("ClickhouseVersion");
        $this->markRequired("VPCId");
        $this->markRequired("SubnetId");
        $this->markRequired("AdminPassword");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * ClickhouseMachineTypeId: 集群机型，可通过GetUClickhouseClusterCreateOption接口获取具体值
     *
     * @return string|null
     */
    public function getClickhouseMachineTypeId()
    {
        return $this->get("ClickhouseMachineTypeId");
    }

    /**
     * ClickhouseMachineTypeId: 集群机型，可通过GetUClickhouseClusterCreateOption接口获取具体值
     *
     * @param string $clickhouseMachineTypeId
     */
    public function setClickhouseMachineTypeId($clickhouseMachineTypeId)
    {
        $this->set("ClickhouseMachineTypeId", $clickhouseMachineTypeId);
    }

    /**
     * DataDiskType: 数据盘类型，可通过GetUClickhouseClusterCreateOption接口获取具体值
     *
     * @return string|null
     */
    public function getDataDiskType()
    {
        return $this->get("DataDiskType");
    }

    /**
     * DataDiskType: 数据盘类型，可通过GetUClickhouseClusterCreateOption接口获取具体值
     *
     * @param string $dataDiskType
     */
    public function setDataDiskType($dataDiskType)
    {
        $this->set("DataDiskType", $dataDiskType);
    }

    /**
     * ClickhouseVersion: Clickhouse版本，可通过GetUClickhouseClusterCreateOption接口获取具体版本
     *
     * @return string|null
     */
    public function getClickhouseVersion()
    {
        return $this->get("ClickhouseVersion");
    }

    /**
     * ClickhouseVersion: Clickhouse版本，可通过GetUClickhouseClusterCreateOption接口获取具体版本
     *
     * @param string $clickhouseVersion
     */
    public function setClickhouseVersion($clickhouseVersion)
    {
        $this->set("ClickhouseVersion", $clickhouseVersion);
    }

    /**
     * VPCId: VPC ID
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: VPC ID
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
     * AdminPassword: 集群管理员密码，密码规则：1.密码长度限8-32个字符2.不能包含[A-Z],[a-z],[0-9]和[@#%^*+=_;:,?!&()-]之外的字符3.需要同时包含两项或以上（大写字母/小写字母/数字/特殊符号）
     *
     * @return string|null
     */
    public function getAdminPassword()
    {
        return $this->get("AdminPassword");
    }

    /**
     * AdminPassword: 集群管理员密码，密码规则：1.密码长度限8-32个字符2.不能包含[A-Z],[a-z],[0-9]和[@#%^*+=_;:,?!&()-]之外的字符3.需要同时包含两项或以上（大写字母/小写字母/数字/特殊符号）
     *
     * @param string $adminPassword
     */
    public function setAdminPassword($adminPassword)
    {
        $this->set("AdminPassword", $adminPassword);
    }

    /**
     * ShardCount: 分片数量，若传递，则至少1个分片,默认值为1
     *
     * @return integer|null
     */
    public function getShardCount()
    {
        return $this->get("ShardCount");
    }

    /**
     * ShardCount: 分片数量，若传递，则至少1个分片,默认值为1
     *
     * @param int $shardCount
     */
    public function setShardCount($shardCount)
    {
        $this->set("ShardCount", $shardCount);
    }

    /**
     * ReplicateCount: 副本数量，取值为1或2，1为单副本（非高可用），2为双副本（高可用），默认值为高可用（即为2）
     *
     * @return integer|null
     */
    public function getReplicateCount()
    {
        return $this->get("ReplicateCount");
    }

    /**
     * ReplicateCount: 副本数量，取值为1或2，1为单副本（非高可用），2为双副本（高可用），默认值为高可用（即为2）
     *
     * @param int $replicateCount
     */
    public function setReplicateCount($replicateCount)
    {
        $this->set("ReplicateCount", $replicateCount);
    }

    /**
     * DataDiskSize: 数据盘大小，最小100，步长为50，默认值为100，单位GB
     *
     * @return integer|null
     */
    public function getDataDiskSize()
    {
        return $this->get("DataDiskSize");
    }

    /**
     * DataDiskSize: 数据盘大小，最小100，步长为50，默认值为100，单位GB
     *
     * @param int $dataDiskSize
     */
    public function setDataDiskSize($dataDiskSize)
    {
        $this->set("DataDiskSize", $dataDiskSize);
    }

    /**
     * ChargeType: 付费类型，枚举值：Year（年付），Month（月付），Dynamic（时付），默认值为Month,月付
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 付费类型，枚举值：Year（年付），Month（月付），Dynamic（时付），默认值为Month,月付
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Quantity: 购买时长，默认值为1。月付时，此参数传0，代表购买至月末
     *
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买时长，默认值为1。月付时，此参数传0，代表购买至月末
     *
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->set("Quantity", $quantity);
    }

    /**
     * BackupId: 备份任务ID，从备份恢复时，该字段必传，此值为备份任务ID，可以从原集群备份任务列表（ListUClickhouseBackups）获取
     *
     * @return string|null
     */
    public function getBackupId()
    {
        return $this->get("BackupId");
    }

    /**
     * BackupId: 备份任务ID，从备份恢复时，该字段必传，此值为备份任务ID，可以从原集群备份任务列表（ListUClickhouseBackups）获取
     *
     * @param string $backupId
     */
    public function setBackupId($backupId)
    {
        $this->set("BackupId", $backupId);
    }

    /**
     * ClusterName: 实例名称名称规则：1.长度为1-50位的字符2.不能包含_,中文,[A-Z],[a-z],[0-9]之外的非法字符，集群名称默认为clickhouse
     *
     * @return string|null
     */
    public function getClusterName()
    {
        return $this->get("ClusterName");
    }

    /**
     * ClusterName: 实例名称名称规则：1.长度为1-50位的字符2.不能包含_,中文,[A-Z],[a-z],[0-9]之外的非法字符，集群名称默认为clickhouse
     *
     * @param string $clusterName
     */
    public function setClusterName($clusterName)
    {
        $this->set("ClusterName", $clusterName);
    }

    /**
     * IsZookeeperHA: 是否Zookeeper高可用，true为zookeeper高可用，false为非高可用，默认为true，高可用
     *
     * @return boolean|null
     */
    public function getIsZookeeperHA()
    {
        return $this->get("IsZookeeperHA");
    }

    /**
     * IsZookeeperHA: 是否Zookeeper高可用，true为zookeeper高可用，false为非高可用，默认为true，高可用
     *
     * @param boolean $isZookeeperHA
     */
    public function setIsZookeeperHA($isZookeeperHA)
    {
        $this->set("IsZookeeperHA", $isZookeeperHA);
    }

    /**
     * IsSecGroup: 是否开启安全组，true为开启，false为不开启，默认为false，不开启安全组
     *
     * @return string|null
     */
    public function getIsSecGroup()
    {
        return $this->get("IsSecGroup");
    }

    /**
     * IsSecGroup: 是否开启安全组，true为开启，false为不开启，默认为false，不开启安全组
     *
     * @param string $isSecGroup
     */
    public function setIsSecGroup($isSecGroup)
    {
        $this->set("IsSecGroup", $isSecGroup);
    }

    /**
     * IsMultiZone: 是否多可用区，默认为false
     *
     * @return string|null
     */
    public function getIsMultiZone()
    {
        return $this->get("IsMultiZone");
    }

    /**
     * IsMultiZone: 是否多可用区，默认为false
     *
     * @param string $isMultiZone
     */
    public function setIsMultiZone($isMultiZone)
    {
        $this->set("IsMultiZone", $isMultiZone);
    }

    /**
     * ZookeeperMachineTypeId: Zookeeper机型ID，IsZookeeperHA为true时，必传，可通过GetUClickhouseClusterCreateOption接口获取具体值
     *
     * @return string|null
     */
    public function getZookeeperMachineTypeId()
    {
        return $this->get("ZookeeperMachineTypeId");
    }

    /**
     * ZookeeperMachineTypeId: Zookeeper机型ID，IsZookeeperHA为true时，必传，可通过GetUClickhouseClusterCreateOption接口获取具体值
     *
     * @param string $zookeeperMachineTypeId
     */
    public function setZookeeperMachineTypeId($zookeeperMachineTypeId)
    {
        $this->set("ZookeeperMachineTypeId", $zookeeperMachineTypeId);
    }

    /**
     * ZookeeperDataDiskType: Zookeeper数据盘类型，IsZookeeperHA为true时，必传，可通过GetUClickhouseClusterCreateOption接口获取具体值
     *
     * @return string|null
     */
    public function getZookeeperDataDiskType()
    {
        return $this->get("ZookeeperDataDiskType");
    }

    /**
     * ZookeeperDataDiskType: Zookeeper数据盘类型，IsZookeeperHA为true时，必传，可通过GetUClickhouseClusterCreateOption接口获取具体值
     *
     * @param string $zookeeperDataDiskType
     */
    public function setZookeeperDataDiskType($zookeeperDataDiskType)
    {
        $this->set("ZookeeperDataDiskType", $zookeeperDataDiskType);
    }

    /**
     * ZookeeperDataDiskSize: Zookeeper数据盘大小，IsZookeeperHA为true时，必传，最小100，步长为50
     *
     * @return string|null
     */
    public function getZookeeperDataDiskSize()
    {
        return $this->get("ZookeeperDataDiskSize");
    }

    /**
     * ZookeeperDataDiskSize: Zookeeper数据盘大小，IsZookeeperHA为true时，必传，最小100，步长为50
     *
     * @param string $zookeeperDataDiskSize
     */
    public function setZookeeperDataDiskSize($zookeeperDataDiskSize)
    {
        $this->set("ZookeeperDataDiskSize", $zookeeperDataDiskSize);
    }

    /**
     * SecGroupIds: 安全组ID，IsSecGroup为true时，必传
     *
     * @return string|null
     */
    public function getSecGroupIds()
    {
        return $this->get("SecGroupIds");
    }

    /**
     * SecGroupIds: 安全组ID，IsSecGroup为true时，必传
     *
     * @param string $secGroupIds
     */
    public function setSecGroupIds($secGroupIds)
    {
        $this->set("SecGroupIds", $secGroupIds);
    }

    /**
     * MultiZones: 【数组】可用区名称，IsMultiZone为true时，必传，可通过ListUClickhouseAvailableZone获取支持的可用区
     *
     * @return string[]|null
     */
    public function getMultiZones()
    {
        return $this->get("MultiZones");
    }

    /**
     * MultiZones: 【数组】可用区名称，IsMultiZone为true时，必传，可通过ListUClickhouseAvailableZone获取支持的可用区
     *
     * @param string[] $multiZones
     */
    public function setMultiZones(array $multiZones)
    {
        $this->set("MultiZones", $multiZones);
    }

    /**
     * Labels:
     *
     * @return CreateUClickhouseClusterParamLabels[]|null
     */
    public function getLabels()
    {
        $items = $this->get("Labels");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CreateUClickhouseClusterParamLabels($item));
        }
        return $result;
    }

    /**
     * Labels:
     *
     * @param CreateUClickhouseClusterParamLabels[] $labels
     */
    public function setLabels(array $labels)
    {
        $result = [];
        foreach ($labels as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
