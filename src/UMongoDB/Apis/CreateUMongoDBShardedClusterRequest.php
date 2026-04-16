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
namespace UCloud\UMongoDB\Apis;

use UCloud\Core\Request\Request;
use UCloud\UMongoDB\Params\CreateUMongoDBShardedClusterParamLabels;
use UCloud\UMongoDB\Params\CreateUMongoDBShardedClusterParamSecGroupId;

class CreateUMongoDBShardedClusterRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUMongoDBShardedCluster"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("Name");
        $this->markRequired("DBVersion");
        $this->markRequired("AdminPassword");
        $this->markRequired("MongosNodeCount");
        $this->markRequired("ShardCount");
        $this->markRequired("NodeCount");
        $this->markRequired("DiskSpace");
        $this->markRequired("MachineTypeId");
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
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
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
     * Name: 副本集实例名称，至少6位
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 副本集实例名称，至少6位
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * DBVersion: 副本集的Mongodb的版本，例如MongoDB 3.6, MongoDB 4.2
     *
     * @return string|null
     */
    public function getDBVersion()
    {
        return $this->get("DBVersion");
    }

    /**
     * DBVersion: 副本集的Mongodb的版本，例如MongoDB 3.6, MongoDB 4.2
     *
     * @param string $dbVersion
     */
    public function setDBVersion($dbVersion)
    {
        $this->set("DBVersion", $dbVersion);
    }

    /**
     * AdminPassword: 管理员密码
     *
     * @return string|null
     */
    public function getAdminPassword()
    {
        return $this->get("AdminPassword");
    }

    /**
     * AdminPassword: 管理员密码
     *
     * @param string $adminPassword
     */
    public function setAdminPassword($adminPassword)
    {
        $this->set("AdminPassword", $adminPassword);
    }

    /**
     * MongosNodeCount: Mongos节点数量
     *
     * @return integer|null
     */
    public function getMongosNodeCount()
    {
        return $this->get("MongosNodeCount");
    }

    /**
     * MongosNodeCount: Mongos节点数量
     *
     * @param int $mongosNodeCount
     */
    public function setMongosNodeCount($mongosNodeCount)
    {
        $this->set("MongosNodeCount", $mongosNodeCount);
    }

    /**
     * ShardCount: 分片数量
     *
     * @return integer|null
     */
    public function getShardCount()
    {
        return $this->get("ShardCount");
    }

    /**
     * ShardCount: 分片数量
     *
     * @param int $shardCount
     */
    public function setShardCount($shardCount)
    {
        $this->set("ShardCount", $shardCount);
    }

    /**
     * NodeCount: 每个分片中节点数量
     *
     * @return integer|null
     */
    public function getNodeCount()
    {
        return $this->get("NodeCount");
    }

    /**
     * NodeCount: 每个分片中节点数量
     *
     * @param int $nodeCount
     */
    public function setNodeCount($nodeCount)
    {
        $this->set("NodeCount", $nodeCount);
    }

    /**
     * DiskSpace: 数据节点磁盘空间(GB):取值范围 20~32000，仅支持 10 的整数倍
     *
     * @return integer|null
     */
    public function getDiskSpace()
    {
        return $this->get("DiskSpace");
    }

    /**
     * DiskSpace: 数据节点磁盘空间(GB):取值范围 20~32000，仅支持 10 的整数倍
     *
     * @param int $diskSpace
     */
    public function setDiskSpace($diskSpace)
    {
        $this->set("DiskSpace", $diskSpace);
    }

    /**
     * MachineTypeId: 数据节点机型配置,如 o.mongo2m.medium
     *
     * @return string|null
     */
    public function getMachineTypeId()
    {
        return $this->get("MachineTypeId");
    }

    /**
     * MachineTypeId: 数据节点机型配置,如 o.mongo2m.medium
     *
     * @param string $machineTypeId
     */
    public function setMachineTypeId($machineTypeId)
    {
        $this->set("MachineTypeId", $machineTypeId);
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
     * Tag: 实例所在的业务组名称
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 实例所在的业务组名称
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * ChargeType: 付费方式：Year， Month， Dynamic，Trial，默认: Month
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 付费方式：Year， Month， Dynamic，Trial，默认: Month
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Quantity: 购买时长，默认值1
     *
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买时长，默认值1
     *
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->set("Quantity", $quantity);
    }

    /**
     * ListenPort: mongo服务端口
     *
     * @return integer|null
     */
    public function getListenPort()
    {
        return $this->get("ListenPort");
    }

    /**
     * ListenPort: mongo服务端口
     *
     * @param int $listenPort
     */
    public function setListenPort($listenPort)
    {
        $this->set("ListenPort", $listenPort);
    }

    /**
     * TemplateId: 参数配置模版id
     *
     * @return string|null
     */
    public function getTemplateId()
    {
        return $this->get("TemplateId");
    }

    /**
     * TemplateId: 参数配置模版id
     *
     * @param string $templateId
     */
    public function setTemplateId($templateId)
    {
        $this->set("TemplateId", $templateId);
    }

    /**
     * MongosMachineTypeId: Mongos节点机型配置
     *
     * @return string|null
     */
    public function getMongosMachineTypeId()
    {
        return $this->get("MongosMachineTypeId");
    }

    /**
     * MongosMachineTypeId: Mongos节点机型配置
     *
     * @param string $mongosMachineTypeId
     */
    public function setMongosMachineTypeId($mongosMachineTypeId)
    {
        $this->set("MongosMachineTypeId", $mongosMachineTypeId);
    }

    /**
     * Labels:
     *
     * @return CreateUMongoDBShardedClusterParamLabels[]|null
     */
    public function getLabels()
    {
        $items = $this->get("Labels");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CreateUMongoDBShardedClusterParamLabels($item));
        }
        return $result;
    }

    /**
     * Labels:
     *
     * @param CreateUMongoDBShardedClusterParamLabels[] $labels
     */
    public function setLabels(array $labels)
    {
        $result = [];
        foreach ($labels as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * SecGroupId:
     *
     * @return CreateUMongoDBShardedClusterParamSecGroupId[]|null
     */
    public function getSecGroupId()
    {
        $items = $this->get("SecGroupId");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CreateUMongoDBShardedClusterParamSecGroupId($item));
        }
        return $result;
    }

    /**
     * SecGroupId:
     *
     * @param CreateUMongoDBShardedClusterParamSecGroupId[] $secGroupId
     */
    public function setSecGroupId(array $secGroupId)
    {
        $result = [];
        foreach ($secGroupId as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
