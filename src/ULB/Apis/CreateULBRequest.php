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
namespace UCloud\ULB\Apis;

use UCloud\Core\Request\Request;

class CreateULBRequest extends Request {
    public function __construct()
    {
        parent::__construct(["Action" => "CreateULB"]);
        $this->markRequired("Region");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getRegion(): string {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @param string $region
     */
    public function setRegion(string $region) {
        $this->set("Region", $region);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId(): string {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId) {
        $this->set("ProjectId", $projectId);
    }

    /**
     * ULBName: 负载均衡的名字，默认值为“ULB”
     *
     * @return string|null
     */
    public function getULBName(): string {
        return $this->get("ULBName");
    }

    /**
     * ULBName: 负载均衡的名字，默认值为“ULB”
     *
     * @param string $ulbName
     */
    public function setULBName(string $ulbName) {
        $this->set("ULBName", $ulbName);
    }

    /**
     * Tag: 业务组
     *
     * @return string|null
     */
    public function getTag(): string {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组
     *
     * @param string $tag
     */
    public function setTag(string $tag) {
        $this->set("Tag", $tag);
    }

    /**
     * Remark: 备注
     *
     * @return string|null
     */
    public function getRemark(): string {
        return $this->get("Remark");
    }

    /**
     * Remark: 备注
     *
     * @param string $remark
     */
    public function setRemark(string $remark) {
        $this->set("Remark", $remark);
    }

    /**
     * OuterMode: 创建的ULB是否为外网模式，默认即为外网模式
     *
     * @return string|null
     */
    public function getOuterMode(): string {
        return $this->get("OuterMode");
    }

    /**
     * OuterMode: 创建的ULB是否为外网模式，默认即为外网模式
     *
     * @param string $outerMode
     */
    public function setOuterMode(string $outerMode) {
        $this->set("OuterMode", $outerMode);
    }

    /**
     * InnerMode: 创建的ULB是否为内网模式
     *
     * @return string|null
     */
    public function getInnerMode(): string {
        return $this->get("InnerMode");
    }

    /**
     * InnerMode: 创建的ULB是否为内网模式
     *
     * @param string $innerMode
     */
    public function setInnerMode(string $innerMode) {
        $this->set("InnerMode", $innerMode);
    }

    /**
     * ChargeType: 付费方式, 枚举值为: Year, 按年付费; Month, 按月付费; Dynamic, 按时付费
     *
     * @return string|null
     */
    public function getChargeType(): string {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 付费方式, 枚举值为: Year, 按年付费; Month, 按月付费; Dynamic, 按时付费
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType) {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * VPCId: ULB所在的VPC的ID, 如果不传则使用默认的VPC
     *
     * @return string|null
     */
    public function getVPCId(): string {
        return $this->get("VPCId");
    }

    /**
     * VPCId: ULB所在的VPC的ID, 如果不传则使用默认的VPC
     *
     * @param string $vpcId
     */
    public function setVPCId(string $vpcId) {
        $this->set("VPCId", $vpcId);
    }

    /**
     * SubnetId: 内网ULB 所属的子网ID，如果不传则使用默认的子网
     *
     * @return string|null
     */
    public function getSubnetId(): string {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 内网ULB 所属的子网ID，如果不传则使用默认的子网
     *
     * @param string $subnetId
     */
    public function setSubnetId(string $subnetId) {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * BusinessId: ULB 所属的业务组ID，如果不传则使用默认的业务组
     *
     * @return string|null
     */
    public function getBusinessId(): string {
        return $this->get("BusinessId");
    }

    /**
     * BusinessId: ULB 所属的业务组ID，如果不传则使用默认的业务组
     *
     * @param string $businessId
     */
    public function setBusinessId(string $businessId) {
        $this->set("BusinessId", $businessId);
    }

    /**
     * FirewallId: 防火墙ID，如果不传，则默认不绑定防火墙
     *
     * @return string|null
     */
    public function getFirewallId(): string {
        return $this->get("FirewallId");
    }

    /**
     * FirewallId: 防火墙ID，如果不传，则默认不绑定防火墙
     *
     * @param string $firewallId
     */
    public function setFirewallId(string $firewallId) {
        $this->set("FirewallId", $firewallId);
    }

    /**
     * ListenType: ULB 监听器类型，枚举值：RequestProxy，请求代理； PacketsTransmit ，报文转发。默认为RequestProxy
     *
     * @return string|null
     */
    public function getListenType(): string {
        return $this->get("ListenType");
    }

    /**
     * ListenType: ULB 监听器类型，枚举值：RequestProxy，请求代理； PacketsTransmit ，报文转发。默认为RequestProxy
     *
     * @param string $listenType
     */
    public function setListenType(string $listenType) {
        $this->set("ListenType", $listenType);
    }


}
