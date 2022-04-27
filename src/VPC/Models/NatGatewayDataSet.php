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
namespace UCloud\VPC\Models;

use UCloud\Core\Response\Response;

class NatGatewayDataSet extends Response
{
    

    /**
     * NATGWId: natgw id
     *
     * @return string|null
     */
    public function getNATGWId(): string
    {
        return $this->get("NATGWId");
    }

    /**
     * NATGWId: natgw id
     *
     * @param string $natgwId
     */
    public function setNATGWId(string $natgwId)
    {
        $this->set("NATGWId", $natgwId);
    }

    /**
     * NATGWName: natgw名称
     *
     * @return string|null
     */
    public function getNATGWName(): string
    {
        return $this->get("NATGWName");
    }

    /**
     * NATGWName: natgw名称
     *
     * @param string $natgwName
     */
    public function setNATGWName(string $natgwName)
    {
        $this->set("NATGWName", $natgwName);
    }

    /**
     * Tag: 业务组
     *
     * @return string|null
     */
    public function getTag(): string
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组
     *
     * @param string $tag
     */
    public function setTag(string $tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * Remark: 备注
     *
     * @return string|null
     */
    public function getRemark(): string
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 备注
     *
     * @param string $remark
     */
    public function setRemark(string $remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * CreateTime: natgw创建时间
     *
     * @return integer|null
     */
    public function getCreateTime(): int
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: natgw创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * FirewallId: 绑定的防火墙Id
     *
     * @return string|null
     */
    public function getFirewallId(): string
    {
        return $this->get("FirewallId");
    }

    /**
     * FirewallId: 绑定的防火墙Id
     *
     * @param string $firewallId
     */
    public function setFirewallId(string $firewallId)
    {
        $this->set("FirewallId", $firewallId);
    }

    /**
     * VPCId: 所属VPC Id
     *
     * @return string|null
     */
    public function getVPCId(): string
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: 所属VPC Id
     *
     * @param string $vpcId
     */
    public function setVPCId(string $vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * SubnetSet: 子网 Id
     *
     * @return NatGatewaySubnetSet[]|null
     */
    public function getSubnetSet(): array
    {
        $items = $this->get("SubnetSet") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new NatGatewaySubnetSet($item));
        }
        return $result;
    }

    /**
     * SubnetSet: 子网 Id
     *
     * @param NatGatewaySubnetSet[] $subnetSet
     */
    public function setSubnetSet(array $subnetSet)
    {
        $result = [];
        foreach ($subnetSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * IPSet: 绑定的EIP 信息
     *
     * @return NatGatewayIPSet[]|null
     */
    public function getIPSet(): array
    {
        $items = $this->get("IPSet") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new NatGatewayIPSet($item));
        }
        return $result;
    }

    /**
     * IPSet: 绑定的EIP 信息
     *
     * @param NatGatewayIPSet[] $ipSet
     */
    public function setIPSet(array $ipSet)
    {
        $result = [];
        foreach ($ipSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * VPCName: VPC名称
     *
     * @return string|null
     */
    public function getVPCName(): string
    {
        return $this->get("VPCName");
    }

    /**
     * VPCName: VPC名称
     *
     * @param string $vpcName
     */
    public function setVPCName(string $vpcName)
    {
        $this->set("VPCName", $vpcName);
    }

    /**
     * IsSnatpoolEnabled: 枚举值，“enable”，默认出口规则使用了负载均衡；“disable”，默认出口规则未使用负载均衡。
     *
     * @return string|null
     */
    public function getIsSnatpoolEnabled(): string
    {
        return $this->get("IsSnatpoolEnabled");
    }

    /**
     * IsSnatpoolEnabled: 枚举值，“enable”，默认出口规则使用了负载均衡；“disable”，默认出口规则未使用负载均衡。
     *
     * @param string $isSnatpoolEnabled
     */
    public function setIsSnatpoolEnabled(string $isSnatpoolEnabled)
    {
        $this->set("IsSnatpoolEnabled", $isSnatpoolEnabled);
    }

    /**
     * PolicyId: 转发策略Id
     *
     * @return string[]|null
     */
    public function getPolicyId(): array
    {
        return $this->get("PolicyId");
    }

    /**
     * PolicyId: 转发策略Id
     *
     * @param string[] $policyId
     */
    public function setPolicyId(array $policyId)
    {
        $this->set("PolicyId", $policyId);
    }
}
