<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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
namespace UCloud\PathX\Models;

use UCloud\Core\Response\Response;

class GlobalSSHInfo extends Response
{
    

    /**
     * InstanceId: 实例ID，资源唯一标识
     *
     * @return string|null
     */
    public function getInstanceId(): string
    {
        return $this->get("InstanceId");
    }

    /**
     * InstanceId: 实例ID，资源唯一标识
     *
     * @param string $instanceId
     */
    public function setInstanceId(string $instanceId)
    {
        $this->set("InstanceId", $instanceId);
    }

    /**
     * InstanceType: 枚举值：["Enterprise","Basic","Free","Welfare"], 分别代表企业版，基础版本，免费版本，较早的公测免费版
     *
     * @return string|null
     */
    public function getInstanceType(): string
    {
        return $this->get("InstanceType");
    }

    /**
     * InstanceType: 枚举值：["Enterprise","Basic","Free","Welfare"], 分别代表企业版，基础版本，免费版本，较早的公测免费版
     *
     * @param string $instanceType
     */
    public function setInstanceType(string $instanceType)
    {
        $this->set("InstanceType", $instanceType);
    }

    /**
     * AcceleratingDomain: GlobalSSH分配的加速域名。
     *
     * @return string|null
     */
    public function getAcceleratingDomain(): string
    {
        return $this->get("AcceleratingDomain");
    }

    /**
     * AcceleratingDomain: GlobalSSH分配的加速域名。
     *
     * @param string $acceleratingDomain
     */
    public function setAcceleratingDomain(string $acceleratingDomain)
    {
        $this->set("AcceleratingDomain", $acceleratingDomain);
    }

    /**
     * Area: 被SSH访问的IP所在地区
     *
     * @return string|null
     */
    public function getArea(): string
    {
        return $this->get("Area");
    }

    /**
     * Area: 被SSH访问的IP所在地区
     *
     * @param string $area
     */
    public function setArea(string $area)
    {
        $this->set("Area", $area);
    }

    /**
     * TargetIP: 被SSH访问的源站 IPv4地址。
     *
     * @return string|null
     */
    public function getTargetIP(): string
    {
        return $this->get("TargetIP");
    }

    /**
     * TargetIP: 被SSH访问的源站 IPv4地址。
     *
     * @param string $targetIP
     */
    public function setTargetIP(string $targetIP)
    {
        $this->set("TargetIP", $targetIP);
    }

    /**
     * Remark: 备注信息
     *
     * @return string|null
     */
    public function getRemark(): string
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 备注信息
     *
     * @param string $remark
     */
    public function setRemark(string $remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * Port: 源站服务器监听的SSH端口，windows系统为RDP端口
     *
     * @return integer|null
     */
    public function getPort(): int
    {
        return $this->get("Port");
    }

    /**
     * Port: 源站服务器监听的SSH端口，windows系统为RDP端口
     *
     * @param int $port
     */
    public function setPort(int $port)
    {
        $this->set("Port", $port);
    }

    /**
     * GlobalSSHPort: InstanceType等于Free时，由系统自动分配，不等于源站Port值。InstanceType不等于Free时，与源站Port值相同。
     *
     * @return integer|null
     */
    public function getGlobalSSHPort(): int
    {
        return $this->get("GlobalSSHPort");
    }

    /**
     * GlobalSSHPort: InstanceType等于Free时，由系统自动分配，不等于源站Port值。InstanceType不等于Free时，与源站Port值相同。
     *
     * @param int $globalSSHPort
     */
    public function setGlobalSSHPort(int $globalSSHPort)
    {
        $this->set("GlobalSSHPort", $globalSSHPort);
    }

    /**
     * ChargeType: 支付周期，如Month,Year,Dynamic等
     *
     * @return string|null
     */
    public function getChargeType(): string
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 支付周期，如Month,Year,Dynamic等
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * CreateTime: 资源创建时间戳
     *
     * @return integer|null
     */
    public function getCreateTime(): int
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 资源创建时间戳
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * ExpireTime: 资源过期时间戳
     *
     * @return integer|null
     */
    public function getExpireTime(): int
    {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: 资源过期时间戳
     *
     * @param int $expireTime
     */
    public function setExpireTime(int $expireTime)
    {
        $this->set("ExpireTime", $expireTime);
    }

    /**
     * Expire: 是否过期
     *
     * @return boolean|null
     */
    public function getExpire(): bool
    {
        return $this->get("Expire");
    }

    /**
     * Expire: 是否过期
     *
     * @param boolean $expire
     */
    public function setExpire(bool $expire)
    {
        $this->set("Expire", $expire);
    }

    /**
     * BandwidthPackage: globalssh Ultimate带宽包大小
     *
     * @return integer|null
     */
    public function getBandwidthPackage(): int
    {
        return $this->get("BandwidthPackage");
    }

    /**
     * BandwidthPackage: globalssh Ultimate带宽包大小
     *
     * @param int $bandwidthPackage
     */
    public function setBandwidthPackage(int $bandwidthPackage)
    {
        $this->set("BandwidthPackage", $bandwidthPackage);
    }

    /**
     * ForwardRegion: InstanceType为Basic版本时，需要展示具体分配的转发机房
     *
     * @return string|null
     */
    public function getForwardRegion(): string
    {
        return $this->get("ForwardRegion");
    }

    /**
     * ForwardRegion: InstanceType为Basic版本时，需要展示具体分配的转发机房
     *
     * @param string $forwardRegion
     */
    public function setForwardRegion(string $forwardRegion)
    {
        $this->set("ForwardRegion", $forwardRegion);
    }
}
