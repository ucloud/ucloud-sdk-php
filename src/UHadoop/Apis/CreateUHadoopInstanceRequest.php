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
namespace UCloud\UHadoop\Apis;

use UCloud\Core\Request\Request;

class CreateUHadoopInstanceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUHadoopInstance"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("Password");
        $this->markRequired("FrameworkVersion");
        $this->markRequired("InstanceGroupConfigs");
        $this->markRequired("VPCId");
        $this->markRequired("SubnetId");
        $this->markRequired("AppConfig");
        $this->markRequired("Framework");
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
     * Password: 集群机器的登录密码
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->get("Password");
    }

    /**
     * Password: 集群机器的登录密码
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->set("Password", $password);
    }

    /**
     * FrameworkVersion: 版本,例如：3.2.1-udh3.0,通过ListUHadoopFrameworkApp接口获取
     *
     * @return string|null
     */
    public function getFrameworkVersion()
    {
        return $this->get("FrameworkVersion");
    }

    /**
     * FrameworkVersion: 版本,例如：3.2.1-udh3.0,通过ListUHadoopFrameworkApp接口获取
     *
     * @param string $frameworkVersion
     */
    public function setFrameworkVersion($frameworkVersion)
    {
        $this->set("FrameworkVersion", $frameworkVersion);
    }

    /**
     * InstanceGroupConfigs: 节点配置，里面包括NodeType（机型），NodeRole（节点类别，值为其中之一：master|core|task），Count（数量），DataDiskType（数据盘类别），DataDiskSize（数据盘大小），DataDiskNum（数据盘数量），BootDiskType（系统盘类型），BootDiskSize（系统盘大小），通过GetUHadoopNodeType接口获取，示例为：InstanceGroupConfigs.0.NodeType=o.hadoop2m.xlargeInstanceGroupConfigs.0.NodeRole=masterInstanceGroupConfigs.0.Count=2InstanceGroupConfigs.0.DataDiskType=CLOUD_RSSDInstanceGroupConfigs.0.DataDiskSize=100InstanceGroupConfigs.0.DataDiskNum=1InstanceGroupConfigs.0.BootDiskType=CLOUD_RSSDInstanceGroupConfigs.0.BootDiskSize=50InstanceGroupConfigs.1.NodeType=o.hadoop2m.xlargeInstanceGroupConfigs.1.NodeRole=coreInstanceGroupConfigs.1.Count=3InstanceGroupConfigs.1.DataDiskType=CLOUD_RSSDInstanceGroupConfigs.1.DataDiskSize=200InstanceGroupConfigs.1.DataDiskNum=1InstanceGroupConfigs.1.BootDiskType=CLOUD_RSSDInstanceGroupConfigs.1.BootDiskSize=50
     *
     * @return string[]|null
     */
    public function getInstanceGroupConfigs()
    {
        return $this->get("InstanceGroupConfigs");
    }

    /**
     * InstanceGroupConfigs: 节点配置，里面包括NodeType（机型），NodeRole（节点类别，值为其中之一：master|core|task），Count（数量），DataDiskType（数据盘类别），DataDiskSize（数据盘大小），DataDiskNum（数据盘数量），BootDiskType（系统盘类型），BootDiskSize（系统盘大小），通过GetUHadoopNodeType接口获取，示例为：InstanceGroupConfigs.0.NodeType=o.hadoop2m.xlargeInstanceGroupConfigs.0.NodeRole=masterInstanceGroupConfigs.0.Count=2InstanceGroupConfigs.0.DataDiskType=CLOUD_RSSDInstanceGroupConfigs.0.DataDiskSize=100InstanceGroupConfigs.0.DataDiskNum=1InstanceGroupConfigs.0.BootDiskType=CLOUD_RSSDInstanceGroupConfigs.0.BootDiskSize=50InstanceGroupConfigs.1.NodeType=o.hadoop2m.xlargeInstanceGroupConfigs.1.NodeRole=coreInstanceGroupConfigs.1.Count=3InstanceGroupConfigs.1.DataDiskType=CLOUD_RSSDInstanceGroupConfigs.1.DataDiskSize=200InstanceGroupConfigs.1.DataDiskNum=1InstanceGroupConfigs.1.BootDiskType=CLOUD_RSSDInstanceGroupConfigs.1.BootDiskSize=50
     *
     * @param string[] $instanceGroupConfigs
     */
    public function setInstanceGroupConfigs(array $instanceGroupConfigs)
    {
        $this->set("InstanceGroupConfigs", $instanceGroupConfigs);
    }

    /**
     * VPCId: VPCId
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: VPCId
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
     * AppConfig: 集群需要安装的组件，格式：组件#版本通过ListUHadoopFrameworkApp接口获取，例如：Spark#3.3.0
     *
     * @return string[]|null
     */
    public function getAppConfig()
    {
        return $this->get("AppConfig");
    }

    /**
     * AppConfig: 集群需要安装的组件，格式：组件#版本通过ListUHadoopFrameworkApp接口获取，例如：Spark#3.3.0
     *
     * @param string[] $appConfig
     */
    public function setAppConfig(array $appConfig)
    {
        $this->set("AppConfig", $appConfig);
    }

    /**
     * Framework: 框架名称，‘Hadoop’ | ‘HDFS’ | ‘MR‘|'‘StarRocks’，Hadoop框架包含存储与计算服务，MR集群包含计算服务 ，HDFS只包含存储服务
     *
     * @return string|null
     */
    public function getFramework()
    {
        return $this->get("Framework");
    }

    /**
     * Framework: 框架名称，‘Hadoop’ | ‘HDFS’ | ‘MR‘|'‘StarRocks’，Hadoop框架包含存储与计算服务，MR集群包含计算服务 ，HDFS只包含存储服务
     *
     * @param string $framework
     */
    public function setFramework($framework)
    {
        $this->set("Framework", $framework);
    }

    /**
     * ChargeType: 支付类别，默认：Month
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 支付类别，默认：Month
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Quantity: 数量，默认1
     *
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 数量，默认1
     *
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->set("Quantity", $quantity);
    }

    /**
     * BusinessId: 工作组ID，默认Default
     *
     * @return string|null
     */
    public function getBusinessId()
    {
        return $this->get("BusinessId");
    }

    /**
     * BusinessId: 工作组ID，默认Default
     *
     * @param string $businessId
     */
    public function setBusinessId($businessId)
    {
        $this->set("BusinessId", $businessId);
    }

    /**
     * StorgeClusterId: Framework为‘MR’时，存储集群ID
     *
     * @return string|null
     */
    public function getStorgeClusterId()
    {
        return $this->get("StorgeClusterId");
    }

    /**
     * StorgeClusterId: Framework为‘MR’时，存储集群ID
     *
     * @param string $storgeClusterId
     */
    public function setStorgeClusterId($storgeClusterId)
    {
        $this->set("StorgeClusterId", $storgeClusterId);
    }

    /**
     * StandAloneMetaStore: 目前只支持传‘udb’
     *
     * @return string|null
     */
    public function getStandAloneMetaStore()
    {
        return $this->get("StandAloneMetaStore");
    }

    /**
     * StandAloneMetaStore: 目前只支持传‘udb’
     *
     * @param string $standAloneMetaStore
     */
    public function setStandAloneMetaStore($standAloneMetaStore)
    {
        $this->set("StandAloneMetaStore", $standAloneMetaStore);
    }

    /**
     * IsSecurityEnabled: 是否开启安全组
     *
     * @return string|null
     */
    public function getIsSecurityEnabled()
    {
        return $this->get("IsSecurityEnabled");
    }

    /**
     * IsSecurityEnabled: 是否开启安全组
     *
     * @param string $isSecurityEnabled
     */
    public function setIsSecurityEnabled($isSecurityEnabled)
    {
        $this->set("IsSecurityEnabled", $isSecurityEnabled);
    }

    /**
     * SecGroupIds: 安全组ID，字符串数组，IsSecurityEnabled为true时生效
     *
     * @return string|null
     */
    public function getSecGroupIds()
    {
        return $this->get("SecGroupIds");
    }

    /**
     * SecGroupIds: 安全组ID，字符串数组，IsSecurityEnabled为true时生效
     *
     * @param string $secGroupIds
     */
    public function setSecGroupIds($secGroupIds)
    {
        $this->set("SecGroupIds", $secGroupIds);
    }

    /**
     * US3Bucket: US3 bucket名称，仅支持框架为StarRocks存算分离时传入
     *
     * @return string|null
     */
    public function getUS3Bucket()
    {
        return $this->get("US3Bucket");
    }

    /**
     * US3Bucket: US3 bucket名称，仅支持框架为StarRocks存算分离时传入
     *
     * @param string $us3Bucket
     */
    public function setUS3Bucket($us3Bucket)
    {
        $this->set("US3Bucket", $us3Bucket);
    }

    /**
     * US3AccessKey: US3 配置公钥，仅支持框架为StarRocks存算分离时传入
     *
     * @return string|null
     */
    public function getUS3AccessKey()
    {
        return $this->get("US3AccessKey");
    }

    /**
     * US3AccessKey: US3 配置公钥，仅支持框架为StarRocks存算分离时传入
     *
     * @param string $us3AccessKey
     */
    public function setUS3AccessKey($us3AccessKey)
    {
        $this->set("US3AccessKey", $us3AccessKey);
    }

    /**
     * US3SecretKey: US3 配置私钥，仅支持框架为StarRocks存算分离时传入
     *
     * @return string|null
     */
    public function getUS3SecretKey()
    {
        return $this->get("US3SecretKey");
    }

    /**
     * US3SecretKey: US3 配置私钥，仅支持框架为StarRocks存算分离时传入
     *
     * @param string $us3SecretKey
     */
    public function setUS3SecretKey($us3SecretKey)
    {
        $this->set("US3SecretKey", $us3SecretKey);
    }

    /**
     * US3TokenName: US3 Token名称，仅支持框架为StarRocks存算分离时传入
     *
     * @return string|null
     */
    public function getUS3TokenName()
    {
        return $this->get("US3TokenName");
    }

    /**
     * US3TokenName: US3 Token名称，仅支持框架为StarRocks存算分离时传入
     *
     * @param string $us3TokenName
     */
    public function setUS3TokenName($us3TokenName)
    {
        $this->set("US3TokenName", $us3TokenName);
    }

    /**
     * InstanceName: 实例名称，默认为实例ID
     *
     * @return string|null
     */
    public function getInstanceName()
    {
        return $this->get("InstanceName");
    }

    /**
     * InstanceName: 实例名称，默认为实例ID
     *
     * @param string $instanceName
     */
    public function setInstanceName($instanceName)
    {
        $this->set("InstanceName", $instanceName);
    }
}
