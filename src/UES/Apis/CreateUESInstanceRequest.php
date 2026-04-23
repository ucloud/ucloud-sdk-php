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
namespace UCloud\UES\Apis;

use UCloud\Core\Request\Request;

class CreateUESInstanceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUESInstance"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("InstanceName");
        $this->markRequired("NodeConf");
        $this->markRequired("VPCId");
        $this->markRequired("SubnetId");
        $this->markRequired("KibanaNodeConf");
        $this->markRequired("KibanaNodeDiskConf");
        $this->markRequired("AppVersion");
        $this->markRequired("NodeDiskConf");
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
     * NodeConf: 节点配置标识, 支持的机型可通过GetUESNodeConf NodeConfList[].NodeConf
     *
     * @return string|null
     */
    public function getNodeConf()
    {
        return $this->get("NodeConf");
    }

    /**
     * NodeConf: 节点配置标识, 支持的机型可通过GetUESNodeConf NodeConfList[].NodeConf
     *
     * @param string $nodeConf
     */
    public function setNodeConf($nodeConf)
    {
        $this->set("NodeConf", $nodeConf);
    }

    /**
     * VPCId: VPCID标识
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: VPCID标识
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * SubnetId: 子网ID标识
     *
     * @return string|null
     */
    public function getSubnetId()
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 子网ID标识
     *
     * @param string $subnetId
     */
    public function setSubnetId($subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * KibanaNodeConf: Kibana节点配置, 支持的机型可通过GetUESNodeConf NodeConfList[].NodeConf
     *
     * @return string|null
     */
    public function getKibanaNodeConf()
    {
        return $this->get("KibanaNodeConf");
    }

    /**
     * KibanaNodeConf: Kibana节点配置, 支持的机型可通过GetUESNodeConf NodeConfList[].NodeConf
     *
     * @param string $kibanaNodeConf
     */
    public function setKibanaNodeConf($kibanaNodeConf)
    {
        $this->set("KibanaNodeConf", $kibanaNodeConf);
    }

    /**
     * KibanaNodeDiskConf: Kibana节点磁盘类型
     *
     * @return string|null
     */
    public function getKibanaNodeDiskConf()
    {
        return $this->get("KibanaNodeDiskConf");
    }

    /**
     * KibanaNodeDiskConf: Kibana节点磁盘类型
     *
     * @param string $kibanaNodeDiskConf
     */
    public function setKibanaNodeDiskConf($kibanaNodeDiskConf)
    {
        $this->set("KibanaNodeDiskConf", $kibanaNodeDiskConf);
    }

    /**
     * AppVersion: 应用服务版本号，支持的类型通过GetUESAppVersion AppVersionList[].AppVersion
     *
     * @return string|null
     */
    public function getAppVersion()
    {
        return $this->get("AppVersion");
    }

    /**
     * AppVersion: 应用服务版本号，支持的类型通过GetUESAppVersion AppVersionList[].AppVersion
     *
     * @param string $appVersion
     */
    public function setAppVersion($appVersion)
    {
        $this->set("AppVersion", $appVersion);
    }

    /**
     * NodeDiskConf: 磁盘类型
     *
     * @return string|null
     */
    public function getNodeDiskConf()
    {
        return $this->get("NodeDiskConf");
    }

    /**
     * NodeDiskConf: 磁盘类型
     *
     * @param string $nodeDiskConf
     */
    public function setNodeDiskConf($nodeDiskConf)
    {
        $this->set("NodeDiskConf", $nodeDiskConf);
    }

    /**
     * NodeSize: 节点个数，默认数目为3
     *
     * @return integer|null
     */
    public function getNodeSize()
    {
        return $this->get("NodeSize");
    }

    /**
     * NodeSize: 节点个数，默认数目为3
     *
     * @param int $nodeSize
     */
    public function setNodeSize($nodeSize)
    {
        $this->set("NodeSize", $nodeSize);
    }

    /**
     * NodeDiskSize: 节点磁盘大小，默认为100G
     *
     * @return integer|null
     */
    public function getNodeDiskSize()
    {
        return $this->get("NodeDiskSize");
    }

    /**
     * NodeDiskSize: 节点磁盘大小，默认为100G
     *
     * @param int $nodeDiskSize
     */
    public function setNodeDiskSize($nodeDiskSize)
    {
        $this->set("NodeDiskSize", $nodeDiskSize);
    }

    /**
     * ServiceUserName: elasticsearch 服务用户名称，默认为elastic；OpenSearch 服务用户名称，固定为admin
     *
     * @return string|null
     */
    public function getServiceUserName()
    {
        return $this->get("ServiceUserName");
    }

    /**
     * ServiceUserName: elasticsearch 服务用户名称，默认为elastic；OpenSearch 服务用户名称，固定为admin
     *
     * @param string $serviceUserName
     */
    public function setServiceUserName($serviceUserName)
    {
        $this->set("ServiceUserName", $serviceUserName);
    }

    /**
     * ServicePasswd: 服务用户密码，默认为changeme
     *
     * @return string|null
     */
    public function getServicePasswd()
    {
        return $this->get("ServicePasswd");
    }

    /**
     * ServicePasswd: 服务用户密码，默认为changeme
     *
     * @param string $servicePasswd
     */
    public function setServicePasswd($servicePasswd)
    {
        $this->set("ServicePasswd", $servicePasswd);
    }

    /**
     * AppName: 应用名称，支持的类型通过GetUESAppVersion AppVersionList[].AppName, 默认为elasticsearch
     *
     * @return string|null
     */
    public function getAppName()
    {
        return $this->get("AppName");
    }

    /**
     * AppName: 应用名称，支持的类型通过GetUESAppVersion AppVersionList[].AppName, 默认为elasticsearch
     *
     * @param string $appName
     */
    public function setAppName($appName)
    {
        $this->set("AppName", $appName);
    }

    /**
     * Remark: 备注，默认为空
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 备注，默认为空
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * ChargeType: 计费类型，默认为Month
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费类型，默认为Month
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Quantity: 计费长度，默认为1
     *
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 计费长度，默认为1
     *
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->set("Quantity", $quantity);
    }

    /**
     * MasterConf: 主节点类型标示，支持的机型可通过GetUESNodeConf NodeConfList[].NodeConf, 默认为空
     *
     * @return string|null
     */
    public function getMasterConf()
    {
        return $this->get("MasterConf");
    }

    /**
     * MasterConf: 主节点类型标示，支持的机型可通过GetUESNodeConf NodeConfList[].NodeConf, 默认为空
     *
     * @param string $masterConf
     */
    public function setMasterConf($masterConf)
    {
        $this->set("MasterConf", $masterConf);
    }

    /**
     * BusinessId: 业务组ID标识
     *
     * @return string|null
     */
    public function getBusinessId()
    {
        return $this->get("BusinessId");
    }

    /**
     * BusinessId: 业务组ID标识
     *
     * @param string $businessId
     */
    public function setBusinessId($businessId)
    {
        $this->set("BusinessId", $businessId);
    }

    /**
     * CoordinatingNodeConf: Coordinating节点机型配置，, 支持的机型可通过GetUESNodeConf NodeConfList[].NodeConf,  默认为空
     *
     * @return string|null
     */
    public function getCoordinatingNodeConf()
    {
        return $this->get("CoordinatingNodeConf");
    }

    /**
     * CoordinatingNodeConf: Coordinating节点机型配置，, 支持的机型可通过GetUESNodeConf NodeConfList[].NodeConf,  默认为空
     *
     * @param string $coordinatingNodeConf
     */
    public function setCoordinatingNodeConf($coordinatingNodeConf)
    {
        $this->set("CoordinatingNodeConf", $coordinatingNodeConf);
    }

    /**
     * CoordinatingNodeSize: Coordinating节点数量
     *
     * @return integer|null
     */
    public function getCoordinatingNodeSize()
    {
        return $this->get("CoordinatingNodeSize");
    }

    /**
     * CoordinatingNodeSize: Coordinating节点数量
     *
     * @param int $coordinatingNodeSize
     */
    public function setCoordinatingNodeSize($coordinatingNodeSize)
    {
        $this->set("CoordinatingNodeSize", $coordinatingNodeSize);
    }

    /**
     * CoordinatingNodeDiskConf: Coordinating节点磁盘类型
     *
     * @return string|null
     */
    public function getCoordinatingNodeDiskConf()
    {
        return $this->get("CoordinatingNodeDiskConf");
    }

    /**
     * CoordinatingNodeDiskConf: Coordinating节点磁盘类型
     *
     * @param string $coordinatingNodeDiskConf
     */
    public function setCoordinatingNodeDiskConf($coordinatingNodeDiskConf)
    {
        $this->set("CoordinatingNodeDiskConf", $coordinatingNodeDiskConf);
    }

    /**
     * IsSecGroup: 是否开启安全组，默认为false
     *
     * @return boolean|null
     */
    public function getIsSecGroup()
    {
        return $this->get("IsSecGroup");
    }

    /**
     * IsSecGroup: 是否开启安全组，默认为false
     *
     * @param boolean $isSecGroup
     */
    public function setIsSecGroup($isSecGroup)
    {
        $this->set("IsSecGroup", $isSecGroup);
    }

    /**
     * SecGroupIds: 安全组ID，开启安全组必填，至多可以同时绑定5个安全组
     *
     * @return string[]|null
     */
    public function getSecGroupIds()
    {
        return $this->get("SecGroupIds");
    }

    /**
     * SecGroupIds: 安全组ID，开启安全组必填，至多可以同时绑定5个安全组
     *
     * @param string[] $secGroupIds
     */
    public function setSecGroupIds(array $secGroupIds)
    {
        $this->set("SecGroupIds", $secGroupIds);
    }

    /**
     * IsMultiZone: 是否为多可用区，默认为false
     *
     * @return boolean|null
     */
    public function getIsMultiZone()
    {
        return $this->get("IsMultiZone");
    }

    /**
     * IsMultiZone: 是否为多可用区，默认为false
     *
     * @param boolean $isMultiZone
     */
    public function setIsMultiZone($isMultiZone)
    {
        $this->set("IsMultiZone", $isMultiZone);
    }

    /**
     * MultiZones: 多可用区名称，默认空数组 []
     *
     * @return string[]|null
     */
    public function getMultiZones()
    {
        return $this->get("MultiZones");
    }

    /**
     * MultiZones: 多可用区名称，默认空数组 []
     *
     * @param string[] $multiZones
     */
    public function setMultiZones(array $multiZones)
    {
        $this->set("MultiZones", $multiZones);
    }
}
