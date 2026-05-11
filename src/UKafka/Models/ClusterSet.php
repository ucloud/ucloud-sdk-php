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
namespace UCloud\UKafka\Models;

use UCloud\Core\Response\Response;

class ClusterSet extends Response
{
    

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
     * ClusterInstanceId: 实例id
     *
     * @return string|null
     */
    public function getClusterInstanceId()
    {
        return $this->get("ClusterInstanceId");
    }

    /**
     * ClusterInstanceId: 实例id
     *
     * @param string $clusterInstanceId
     */
    public function setClusterInstanceId($clusterInstanceId)
    {
        $this->set("ClusterInstanceId", $clusterInstanceId);
    }

    /**
     * ClusterInstanceName: 实例名称
     *
     * @return string|null
     */
    public function getClusterInstanceName()
    {
        return $this->get("ClusterInstanceName");
    }

    /**
     * ClusterInstanceName: 实例名称
     *
     * @param string $clusterInstanceName
     */
    public function setClusterInstanceName($clusterInstanceName)
    {
        $this->set("ClusterInstanceName", $clusterInstanceName);
    }

    /**
     * Framework: 框架
     *
     * @return string|null
     */
    public function getFramework()
    {
        return $this->get("Framework");
    }

    /**
     * Framework: 框架
     *
     * @param string $framework
     */
    public function setFramework($framework)
    {
        $this->set("Framework", $framework);
    }

    /**
     * FrameworkVersion: Kafka 框架版本
     *
     * @return string|null
     */
    public function getFrameworkVersion()
    {
        return $this->get("FrameworkVersion");
    }

    /**
     * FrameworkVersion: Kafka 框架版本
     *
     * @param string $frameworkVersion
     */
    public function setFrameworkVersion($frameworkVersion)
    {
        $this->set("FrameworkVersion", $frameworkVersion);
    }

    /**
     * Remark: 实例备注
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 实例备注
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * CreateTime: 实例创建时间戳
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 实例创建时间戳
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * RunningTime: 实例运行时间
     *
     * @return integer|null
     */
    public function getRunningTime()
    {
        return $this->get("RunningTime");
    }

    /**
     * RunningTime: 实例运行时间
     *
     * @param int $runningTime
     */
    public function setRunningTime($runningTime)
    {
        $this->set("RunningTime", $runningTime);
    }

    /**
     * ExpireTime: 实例过期时间
     *
     * @return integer|null
     */
    public function getExpireTime()
    {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: 实例过期时间
     *
     * @param int $expireTime
     */
    public function setExpireTime($expireTime)
    {
        $this->set("ExpireTime", $expireTime);
    }

    /**
     * AutoRenew: 是否自动续费
     *
     * @return string|null
     */
    public function getAutoRenew()
    {
        return $this->get("AutoRenew");
    }

    /**
     * AutoRenew: 是否自动续费
     *
     * @param string $autoRenew
     */
    public function setAutoRenew($autoRenew)
    {
        $this->set("AutoRenew", $autoRenew);
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
     * UHostCount: 实例节点个数
     *
     * @return integer|null
     */
    public function getUHostCount()
    {
        return $this->get("UHostCount");
    }

    /**
     * UHostCount: 实例节点个数
     *
     * @param int $uHostCount
     */
    public function setUHostCount($uHostCount)
    {
        $this->set("UHostCount", $uHostCount);
    }

    /**
     * RedundantCount: 冗余计数（已废弃）
     *
     * @return integer|null
     */
    public function getRedundantCount()
    {
        return $this->get("RedundantCount");
    }

    /**
     * RedundantCount: 冗余计数（已废弃）
     *
     * @param int $redundantCount
     */
    public function setRedundantCount($redundantCount)
    {
        $this->set("RedundantCount", $redundantCount);
    }

    /**
     * State: 实例当前状态,集群状态："Running"| "Abnormal"| "Creating"| "Deleting"| "CreateFailed"| "DeleteFailed"| "Unavailable"| "Deleted"| "Updating"| "Deploying"| "Migrating"| "ExpandFailed"
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 实例当前状态,集群状态："Running"| "Abnormal"| "Creating"| "Deleting"| "CreateFailed"| "DeleteFailed"| "Unavailable"| "Deleted"| "Updating"| "Deploying"| "Migrating"| "ExpandFailed"
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }

    /**
     * Tag: 实例标记
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 实例标记
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * InstanceGroupType: 实例机型
     *
     * @return string|null
     */
    public function getInstanceGroupType()
    {
        return $this->get("InstanceGroupType");
    }

    /**
     * InstanceGroupType: 实例机型
     *
     * @param string $instanceGroupType
     */
    public function setInstanceGroupType($instanceGroupType)
    {
        $this->set("InstanceGroupType", $instanceGroupType);
    }

    /**
     * VPCId: 所属 VPC id
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: 所属 VPC id
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * SubnetId: 所属子网 id
     *
     * @return string|null
     */
    public function getSubnetId()
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 所属子网 id
     *
     * @param string $subnetId
     */
    public function setSubnetId($subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * BusinessId: 业务组 ID
     *
     * @return string|null
     */
    public function getBusinessId()
    {
        return $this->get("BusinessId");
    }

    /**
     * BusinessId: 业务组 ID
     *
     * @param string $businessId
     */
    public function setBusinessId($businessId)
    {
        $this->set("BusinessId", $businessId);
    }

    /**
     * NewMessage: 事件状态未读消息（已废弃）
     *
     * @return string|null
     */
    public function getNewMessage()
    {
        return $this->get("NewMessage");
    }

    /**
     * NewMessage: 事件状态未读消息（已废弃）
     *
     * @param string $newMessage
     */
    public function setNewMessage($newMessage)
    {
        $this->set("NewMessage", $newMessage);
    }
}
