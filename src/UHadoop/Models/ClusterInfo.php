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
     * Tag: 集群Tag
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 集群Tag
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
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
     * Framework: 框架，值为'Hadoop'|'HDFS'|'MR'|'StarRocks'之一,框架，例如Hadoop|MR|HDFS|StarRocks Hadoop框架包含存储与计算服务 MR集群包含计算服务 HDFS只包含存储服务,StarRocks为StarRocks集群
     *
     * @return string|null
     */
    public function getFramework()
    {
        return $this->get("Framework");
    }

    /**
     * Framework: 框架，值为'Hadoop'|'HDFS'|'MR'|'StarRocks'之一,框架，例如Hadoop|MR|HDFS|StarRocks Hadoop框架包含存储与计算服务 MR集群包含计算服务 HDFS只包含存储服务,StarRocks为StarRocks集群
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
     * ReleaseVersion: Uhadoop版本，值为 uhadoop 3.0|uhadoop 2.2|uhadoop 3.1
     *
     * @return string|null
     */
    public function getReleaseVersion()
    {
        return $this->get("ReleaseVersion");
    }

    /**
     * ReleaseVersion: Uhadoop版本，值为 uhadoop 3.0|uhadoop 2.2|uhadoop 3.1
     *
     * @param string $releaseVersion
     */
    public function setReleaseVersion($releaseVersion)
    {
        $this->set("ReleaseVersion", $releaseVersion);
    }

    /**
     * HadoopVersion: Hadoop版本，值为 hadoop3.2.1-udh3.0|hadoop3.3.4-udh3.1|hadoop2.8.5-udh2.2
     *
     * @return string|null
     */
    public function getHadoopVersion()
    {
        return $this->get("HadoopVersion");
    }

    /**
     * HadoopVersion: Hadoop版本，值为 hadoop3.2.1-udh3.0|hadoop3.3.4-udh3.1|hadoop2.8.5-udh2.2
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
     * ChargeType: 付费类型
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 付费类型
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * ExpireTime: 到期时间
     *
     * @return string|null
     */
    public function getExpireTime()
    {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: 到期时间
     *
     * @param string $expireTime
     */
    public function setExpireTime($expireTime)
    {
        $this->set("ExpireTime", $expireTime);
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

    /**
     * MasterCount: Master节点数量
     *
     * @return string|null
     */
    public function getMasterCount()
    {
        return $this->get("MasterCount");
    }

    /**
     * MasterCount: Master节点数量
     *
     * @param string $masterCount
     */
    public function setMasterCount($masterCount)
    {
        $this->set("MasterCount", $masterCount);
    }

    /**
     * CoreCount: core节点数量
     *
     * @return string|null
     */
    public function getCoreCount()
    {
        return $this->get("CoreCount");
    }

    /**
     * CoreCount: core节点数量
     *
     * @param string $coreCount
     */
    public function setCoreCount($coreCount)
    {
        $this->set("CoreCount", $coreCount);
    }

    /**
     * TaskCount: Task节点数量
     *
     * @return string|null
     */
    public function getTaskCount()
    {
        return $this->get("TaskCount");
    }

    /**
     * TaskCount: Task节点数量
     *
     * @param string $taskCount
     */
    public function setTaskCount($taskCount)
    {
        $this->set("TaskCount", $taskCount);
    }

    /**
     * RunningTime: 运行时间
     *
     * @return string|null
     */
    public function getRunningTime()
    {
        return $this->get("RunningTime");
    }

    /**
     * RunningTime: 运行时间
     *
     * @param string $runningTime
     */
    public function setRunningTime($runningTime)
    {
        $this->set("RunningTime", $runningTime);
    }

    /**
     * AppConfigSet: 组件集合
     *
     * @return string|null
     */
    public function getAppConfigSet()
    {
        return $this->get("AppConfigSet");
    }

    /**
     * AppConfigSet: 组件集合
     *
     * @param string $appConfigSet
     */
    public function setAppConfigSet($appConfigSet)
    {
        $this->set("AppConfigSet", $appConfigSet);
    }

    /**
     * AppConfigCount: 组件数量
     *
     * @return string|null
     */
    public function getAppConfigCount()
    {
        return $this->get("AppConfigCount");
    }

    /**
     * AppConfigCount: 组件数量
     *
     * @param string $appConfigCount
     */
    public function setAppConfigCount($appConfigCount)
    {
        $this->set("AppConfigCount", $appConfigCount);
    }

    /**
     * IsOpenSecGroup: 是否开启安全组
     *
     * @return string|null
     */
    public function getIsOpenSecGroup()
    {
        return $this->get("IsOpenSecGroup");
    }

    /**
     * IsOpenSecGroup: 是否开启安全组
     *
     * @param string $isOpenSecGroup
     */
    public function setIsOpenSecGroup($isOpenSecGroup)
    {
        $this->set("IsOpenSecGroup", $isOpenSecGroup);
    }

    /**
     * NodeSet: 节点集合
     *
     * @return string|null
     */
    public function getNodeSet()
    {
        return $this->get("NodeSet");
    }

    /**
     * NodeSet: 节点集合
     *
     * @param string $nodeSet
     */
    public function setNodeSet($nodeSet)
    {
        $this->set("NodeSet", $nodeSet);
    }

    /**
     * NodeCount: 节点数量
     *
     * @return string|null
     */
    public function getNodeCount()
    {
        return $this->get("NodeCount");
    }

    /**
     * NodeCount: 节点数量
     *
     * @param string $nodeCount
     */
    public function setNodeCount($nodeCount)
    {
        $this->set("NodeCount", $nodeCount);
    }
}
