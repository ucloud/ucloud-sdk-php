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
namespace UCloud\UES\Models;

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
     * BusinessId: 项目组ID标识
     *
     * @return string|null
     */
    public function getBusinessId()
    {
        return $this->get("BusinessId");
    }

    /**
     * BusinessId: 项目组ID标识
     *
     * @param string $businessId
     */
    public function setBusinessId($businessId)
    {
        $this->set("BusinessId", $businessId);
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
     * CreateTime: 创建时间
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * ExpireTime: 失效时间
     *
     * @return integer|null
     */
    public function getExpireTime()
    {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: 失效时间
     *
     * @param int $expireTime
     */
    public function setExpireTime($expireTime)
    {
        $this->set("ExpireTime", $expireTime);
    }

    /**
     * NodeCount: 节点个数，默认为集群大小
     *
     * @return integer|null
     */
    public function getNodeCount()
    {
        return $this->get("NodeCount");
    }

    /**
     * NodeCount: 节点个数，默认为集群大小
     *
     * @param int $nodeCount
     */
    public function setNodeCount($nodeCount)
    {
        $this->set("NodeCount", $nodeCount);
    }

    /**
     * RunTime: 实例运行时长
     *
     * @return integer|null
     */
    public function getRunTime()
    {
        return $this->get("RunTime");
    }

    /**
     * RunTime: 实例运行时长
     *
     * @param int $runTime
     */
    public function setRunTime($runTime)
    {
        $this->set("RunTime", $runTime);
    }

    /**
     * AppVersion: 应用服务版本号
     *
     * @return string|null
     */
    public function getAppVersion()
    {
        return $this->get("AppVersion");
    }

    /**
     * AppVersion: 应用服务版本号
     *
     * @param string $appVersion
     */
    public function setAppVersion($appVersion)
    {
        $this->set("AppVersion", $appVersion);
    }

    /**
     * State: 实例状态
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 实例状态
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }

    /**
     * InstanceId: 实例资源ID
     *
     * @return string|null
     */
    public function getInstanceId()
    {
        return $this->get("InstanceId");
    }

    /**
     * InstanceId: 实例资源ID
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
     * AppName: 应用名称
     *
     * @return string|null
     */
    public function getAppName()
    {
        return $this->get("AppName");
    }

    /**
     * AppName: 应用名称
     *
     * @param string $appName
     */
    public function setAppName($appName)
    {
        $this->set("AppName", $appName);
    }

    /**
     * UESInstanceId: 服务集群ID标识（弃用）
     *
     * @return string|null
     */
    public function getUESInstanceId()
    {
        return $this->get("UESInstanceId");
    }

    /**
     * UESInstanceId: 服务集群ID标识（弃用）
     *
     * @param string $uesInstanceId
     */
    public function setUESInstanceId($uesInstanceId)
    {
        $this->set("UESInstanceId", $uesInstanceId);
    }

    /**
     * UESInstanceName: 服务集群名称（弃用）
     *
     * @return string|null
     */
    public function getUESInstanceName()
    {
        return $this->get("UESInstanceName");
    }

    /**
     * UESInstanceName: 服务集群名称（弃用）
     *
     * @param string $uesInstanceName
     */
    public function setUESInstanceName($uesInstanceName)
    {
        $this->set("UESInstanceName", $uesInstanceName);
    }

    /**
     * ServiceVersion: 服务版本号（弃用）
     *
     * @return string|null
     */
    public function getServiceVersion()
    {
        return $this->get("ServiceVersion");
    }

    /**
     * ServiceVersion: 服务版本号（弃用）
     *
     * @param string $serviceVersion
     */
    public function setServiceVersion($serviceVersion)
    {
        $this->set("ServiceVersion", $serviceVersion);
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
     * Vip: VIP地址信息
     *
     * @return string|null
     */
    public function getVip()
    {
        return $this->get("Vip");
    }

    /**
     * Vip: VIP地址信息
     *
     * @param string $vip
     */
    public function setVip($vip)
    {
        $this->set("Vip", $vip);
    }

    /**
     * IsSecGroup: 是否开启安全组
     *
     * @return boolean|null
     */
    public function getIsSecGroup()
    {
        return $this->get("IsSecGroup");
    }

    /**
     * IsSecGroup: 是否开启安全组
     *
     * @param boolean $isSecGroup
     */
    public function setIsSecGroup($isSecGroup)
    {
        $this->set("IsSecGroup", $isSecGroup);
    }

    /**
     * MultiZones: 多可用区
     *
     * @return string[]|null
     */
    public function getMultiZones()
    {
        return $this->get("MultiZones");
    }

    /**
     * MultiZones: 多可用区
     *
     * @param string[] $multiZones
     */
    public function setMultiZones(array $multiZones)
    {
        $this->set("MultiZones", $multiZones);
    }

    /**
     * Resizable: 是否支持改配
     *
     * @return boolean|null
     */
    public function getResizable()
    {
        return $this->get("Resizable");
    }

    /**
     * Resizable: 是否支持改配
     *
     * @param boolean $resizable
     */
    public function setResizable($resizable)
    {
        $this->set("Resizable", $resizable);
    }
}
