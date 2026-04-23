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
namespace UCloud\UKafka\Apis;

use UCloud\Core\Request\Request;

class CreateUKafkaInstanceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUKafkaInstance"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("FrameworkVersion");
        $this->markRequired("VPCId");
        $this->markRequired("SubnetId");
        $this->markRequired("ChargeType");
        $this->markRequired("NodeType");
        $this->markRequired("DiskSize");
        $this->markRequired("InstanceName");
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
     * FrameworkVersion: kafka版本，支持的版本可通过ListUKafkaFrameworkVersion 接口返回字段的FrameworkVersions获取
     *
     * @return string|null
     */
    public function getFrameworkVersion()
    {
        return $this->get("FrameworkVersion");
    }

    /**
     * FrameworkVersion: kafka版本，支持的版本可通过ListUKafkaFrameworkVersion 接口返回字段的FrameworkVersions获取
     *
     * @param string $frameworkVersion
     */
    public function setFrameworkVersion($frameworkVersion)
    {
        $this->set("FrameworkVersion", $frameworkVersion);
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
     * SubnetId: 子网 ID
     *
     * @return string|null
     */
    public function getSubnetId()
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 子网 ID
     *
     * @param string $subnetId
     */
    public function setSubnetId($subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * ChargeType: 付费方式
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 付费方式
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * NodeType: 机型，支持的机型可通过GetUKafkaNodeType 接口返回的InstanceTypeSet[].InstanceTypeName
     *
     * @return string|null
     */
    public function getNodeType()
    {
        return $this->get("NodeType");
    }

    /**
     * NodeType: 机型，支持的机型可通过GetUKafkaNodeType 接口返回的InstanceTypeSet[].InstanceTypeName
     *
     * @param string $nodeType
     */
    public function setNodeType($nodeType)
    {
        $this->set("NodeType", $nodeType);
    }

    /**
     * DiskSize: 数据盘大小。支持范围根据GetUKafkaNodeType 接口返回的InstanceTypeSet[].MaxDiskSize 和MinDiskSize获取
     *
     * @return integer|null
     */
    public function getDiskSize()
    {
        return $this->get("DiskSize");
    }

    /**
     * DiskSize: 数据盘大小。支持范围根据GetUKafkaNodeType 接口返回的InstanceTypeSet[].MaxDiskSize 和MinDiskSize获取
     *
     * @param int $diskSize
     */
    public function setDiskSize($diskSize)
    {
        $this->set("DiskSize", $diskSize);
    }

    /**
     * InstanceName: 实例名，可自定义
     *
     * @return string|null
     */
    public function getInstanceName()
    {
        return $this->get("InstanceName");
    }

    /**
     * InstanceName: 实例名，可自定义
     *
     * @param string $instanceName
     */
    public function setInstanceName($instanceName)
    {
        $this->set("InstanceName", $instanceName);
    }

    /**
     * BusinessId: 业务组，默认Default
     *
     * @return string|null
     */
    public function getBusinessId()
    {
        return $this->get("BusinessId");
    }

    /**
     * BusinessId: 业务组，默认Default
     *
     * @param string $businessId
     */
    public function setBusinessId($businessId)
    {
        $this->set("BusinessId", $businessId);
    }

    /**
     * Quantity: 实例数量，默认 1
     *
     * @return string|null
     */
    public function getQuantity()
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 实例数量，默认 1
     *
     * @param string $quantity
     */
    public function setQuantity($quantity)
    {
        $this->set("Quantity", $quantity);
    }

    /**
     * NodeCount: 集群节点数量。默认 3 节点
     *
     * @return integer|null
     */
    public function getNodeCount()
    {
        return $this->get("NodeCount");
    }

    /**
     * NodeCount: 集群节点数量。默认 3 节点
     *
     * @param int $nodeCount
     */
    public function setNodeCount($nodeCount)
    {
        $this->set("NodeCount", $nodeCount);
    }

    /**
     * LogRetentionHours: kafka 日志保存时间，支持范围[1,240]。默认 72 小时
     *
     * @return string|null
     */
    public function getLogRetentionHours()
    {
        return $this->get("LogRetentionHours");
    }

    /**
     * LogRetentionHours: kafka 日志保存时间，支持范围[1,240]。默认 72 小时
     *
     * @param string $logRetentionHours
     */
    public function setLogRetentionHours($logRetentionHours)
    {
        $this->set("LogRetentionHours", $logRetentionHours);
    }

    /**
     * DiskControllerType: 磁盘管理方式,支持值：NONE、CLEAN。默认值：NONE
     *
     * @return string|null
     */
    public function getDiskControllerType()
    {
        return $this->get("DiskControllerType");
    }

    /**
     * DiskControllerType: 磁盘管理方式,支持值：NONE、CLEAN。默认值：NONE
     *
     * @param string $diskControllerType
     */
    public function setDiskControllerType($diskControllerType)
    {
        $this->set("DiskControllerType", $diskControllerType);
    }

    /**
     * DiskThreshold: 磁盘清理阈值，支持范围[70,90]。DiskControllerType 为CLEAN 时必填。默认值 90
     *
     * @return string|null
     */
    public function getDiskThreshold()
    {
        return $this->get("DiskThreshold");
    }

    /**
     * DiskThreshold: 磁盘清理阈值，支持范围[70,90]。DiskControllerType 为CLEAN 时必填。默认值 90
     *
     * @param string $diskThreshold
     */
    public function setDiskThreshold($diskThreshold)
    {
        $this->set("DiskThreshold", $diskThreshold);
    }

    /**
     * IsSecurityEnabled: 是否开启安全组，支持"true","false"，默认 false
     *
     * @return string|null
     */
    public function getIsSecurityEnabled()
    {
        return $this->get("IsSecurityEnabled");
    }

    /**
     * IsSecurityEnabled: 是否开启安全组，支持"true","false"，默认 false
     *
     * @param string $isSecurityEnabled
     */
    public function setIsSecurityEnabled($isSecurityEnabled)
    {
        $this->set("IsSecurityEnabled", $isSecurityEnabled);
    }
}
