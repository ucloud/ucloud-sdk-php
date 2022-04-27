<?php
/**
 * Copyright 2022 UCloud Technology Co., Ltd.
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
namespace UCloud\IPSecVPN\Models;

use UCloud\Core\Response\Response;

class VPNGatewayDataSet extends Response
{
    

    /**
     * VPNGatewayId: 网关Id
     *
     * @return string|null
     */
    public function getVPNGatewayId(): string
    {
        return $this->get("VPNGatewayId");
    }

    /**
     * VPNGatewayId: 网关Id
     *
     * @param string $vpnGatewayId
     */
    public function setVPNGatewayId(string $vpnGatewayId)
    {
        $this->set("VPNGatewayId", $vpnGatewayId);
    }

    /**
     * VPNGatewayName: 网关名字
     *
     * @return string|null
     */
    public function getVPNGatewayName(): string
    {
        return $this->get("VPNGatewayName");
    }

    /**
     * VPNGatewayName: 网关名字
     *
     * @param string $vpnGatewayName
     */
    public function setVPNGatewayName(string $vpnGatewayName)
    {
        $this->set("VPNGatewayName", $vpnGatewayName);
    }

    /**
     * Tag: 网关业务组
     *
     * @return string|null
     */
    public function getTag(): string
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 网关业务组
     *
     * @param string $tag
     */
    public function setTag(string $tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * Remark: 网关备注
     *
     * @return string|null
     */
    public function getRemark(): string
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 网关备注
     *
     * @param string $remark
     */
    public function setRemark(string $remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * VPCId: 所属VPCId
     *
     * @return string|null
     */
    public function getVPCId(): string
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: 所属VPCId
     *
     * @param string $vpcId
     */
    public function setVPCId(string $vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * VPCName: 所属VPC名字
     *
     * @return string|null
     */
    public function getVPCName(): string
    {
        return $this->get("VPCName");
    }

    /**
     * VPCName: 所属VPC名字
     *
     * @param string $vpcName
     */
    public function setVPCName(string $vpcName)
    {
        $this->set("VPCName", $vpcName);
    }

    /**
     * ChargeType: 付费类型
     *
     * @return string|null
     */
    public function getChargeType(): string
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 付费类型
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * CreateTime: 创建时间
     *
     * @return integer|null
     */
    public function getCreateTime(): int
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * ExpireTime: 到期时间
     *
     * @return integer|null
     */
    public function getExpireTime(): int
    {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: 到期时间
     *
     * @param int $expireTime
     */
    public function setExpireTime(int $expireTime)
    {
        $this->set("ExpireTime", $expireTime);
    }

    /**
     * AutoRenew: 是否自动续费
     *
     * @return string|null
     */
    public function getAutoRenew(): string
    {
        return $this->get("AutoRenew");
    }

    /**
     * AutoRenew: 是否自动续费
     *
     * @param string $autoRenew
     */
    public function setAutoRenew(string $autoRenew)
    {
        $this->set("AutoRenew", $autoRenew);
    }

    /**
     * Grade: 网关类型
     *
     * @return string|null
     */
    public function getGrade(): string
    {
        return $this->get("Grade");
    }

    /**
     * Grade: 网关类型
     *
     * @param string $grade
     */
    public function setGrade(string $grade)
    {
        $this->set("Grade", $grade);
    }

    /**
     * EIP: 绑定EIP的IP地址
     *
     * @return string|null
     */
    public function getEIP(): string
    {
        return $this->get("EIP");
    }

    /**
     * EIP: 绑定EIP的IP地址
     *
     * @param string $eip
     */
    public function setEIP(string $eip)
    {
        $this->set("EIP", $eip);
    }

    /**
     * EIPType: EIP类型
     *
     * @return string|null
     */
    public function getEIPType(): string
    {
        return $this->get("EIPType");
    }

    /**
     * EIPType: EIP类型
     *
     * @param string $eipType
     */
    public function setEIPType(string $eipType)
    {
        $this->set("EIPType", $eipType);
    }

    /**
     * EIPId: EIPID
     *
     * @return string|null
     */
    public function getEIPId(): string
    {
        return $this->get("EIPId");
    }

    /**
     * EIPId: EIPID
     *
     * @param string $eipId
     */
    public function setEIPId(string $eipId)
    {
        $this->set("EIPId", $eipId);
    }
}
