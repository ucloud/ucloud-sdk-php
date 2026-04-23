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
namespace UCloud\UHadoop\Models;

use UCloud\Core\Response\Response;

class ListClusterInfo extends Response
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
     * InstanceId: 实例ID
     *
     * @return string|null
     */
    public function getInstanceId()
    {
        return $this->get("InstanceId");
    }

    /**
     * InstanceId: 实例ID
     *
     * @param string $instanceId
     */
    public function setInstanceId($instanceId)
    {
        $this->set("InstanceId", $instanceId);
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
     * Framework: 框架，值为'Hadoop'|'HDFS'|'MR'|'StarRocks'之一，Hadoop框架包含存储与计算服务，MR集群包含计算服务，HDFS只包含存储服务，StarRocks为StarRocks集群
     *
     * @return string|null
     */
    public function getFramework()
    {
        return $this->get("Framework");
    }

    /**
     * Framework: 框架，值为'Hadoop'|'HDFS'|'MR'|'StarRocks'之一，Hadoop框架包含存储与计算服务，MR集群包含计算服务，HDFS只包含存储服务，StarRocks为StarRocks集群
     *
     * @param string $framework
     */
    public function setFramework($framework)
    {
        $this->set("Framework", $framework);
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
     * BusinessId: 业务组ID
     *
     * @return string|null
     */
    public function getBusinessId()
    {
        return $this->get("BusinessId");
    }

    /**
     * BusinessId: 业务组ID
     *
     * @param string $businessId
     */
    public function setBusinessId($businessId)
    {
        $this->set("BusinessId", $businessId);
    }

    /**
     * ReleaseVersion:  Uhadoop版本，值为 uhadoop 3.0|uhadoop 2.2|uhadoop 3.1
     *
     * @return string|null
     */
    public function getReleaseVersion()
    {
        return $this->get("ReleaseVersion");
    }

    /**
     * ReleaseVersion:  Uhadoop版本，值为 uhadoop 3.0|uhadoop 2.2|uhadoop 3.1
     *
     * @param string $releaseVersion
     */
    public function setReleaseVersion($releaseVersion)
    {
        $this->set("ReleaseVersion", $releaseVersion);
    }

    /**
     * HadoopVersion: Hadoop版本，值为 hadoop3.2.1-udh3.0|hadoop3.3.4-udh3.1 |hadoop2.8.5-udh2.2
     *
     * @return string|null
     */
    public function getHadoopVersion()
    {
        return $this->get("HadoopVersion");
    }

    /**
     * HadoopVersion: Hadoop版本，值为 hadoop3.2.1-udh3.0|hadoop3.3.4-udh3.1 |hadoop2.8.5-udh2.2
     *
     * @param string $hadoopVersion
     */
    public function setHadoopVersion($hadoopVersion)
    {
        $this->set("HadoopVersion", $hadoopVersion);
    }

    /**
     * CreateTime: 创建时间
     *
     * @return string|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间
     *
     * @param string $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * State: 状态，值为以下其中之一，Running(运行中)|Creating(创建中)|CreateFailed(创建失败)|Deploying(部署中)|Updating(变更中)
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 状态，值为以下其中之一，Running(运行中)|Creating(创建中)|CreateFailed(创建失败)|Deploying(部署中)|Updating(变更中)
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }
}
