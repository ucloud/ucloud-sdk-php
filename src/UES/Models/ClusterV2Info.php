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

class ClusterV2Info extends Response
{
    

    /**
     * Region: 地域
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

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
     * UESInstanceId: 服务集群ID标识
     *
     * @return string|null
     */
    public function getUESInstanceId()
    {
        return $this->get("UESInstanceId");
    }

    /**
     * UESInstanceId: 服务集群ID标识
     *
     * @param string $uesInstanceId
     */
    public function setUESInstanceId($uesInstanceId)
    {
        $this->set("UESInstanceId", $uesInstanceId);
    }

    /**
     * UESInstanceName: 服务集群名称
     *
     * @return string|null
     */
    public function getUESInstanceName()
    {
        return $this->get("UESInstanceName");
    }

    /**
     * UESInstanceName: 服务集群名称
     *
     * @param string $uesInstanceName
     */
    public function setUESInstanceName($uesInstanceName)
    {
        $this->set("UESInstanceName", $uesInstanceName);
    }

    /**
     * ServiceVersion: 服务版本号
     *
     * @return string|null
     */
    public function getServiceVersion()
    {
        return $this->get("ServiceVersion");
    }

    /**
     * ServiceVersion: 服务版本号
     *
     * @param string $serviceVersion
     */
    public function setServiceVersion($serviceVersion)
    {
        $this->set("ServiceVersion", $serviceVersion);
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
     * State: 服务集群状态
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 服务集群状态
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
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
     * Vip: Vip
     *
     * @return string|null
     */
    public function getVip()
    {
        return $this->get("Vip");
    }

    /**
     * Vip: Vip
     *
     * @param string $vip
     */
    public function setVip($vip)
    {
        $this->set("Vip", $vip);
    }
}
