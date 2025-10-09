<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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

class CreateLoadBalancerRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateLoadBalancer"]);
        $this->markRequired("Region");
        $this->markRequired("ProjectId");
        $this->markRequired("VPCId");
        $this->markRequired("SubnetId");
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
     * VPCId: 负载均衡实例所属的VPC资源ID
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: 负载均衡实例所属的VPC资源ID
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * SubnetId: 负载均衡实例所属的子网资源ID。负载均衡实例的内网VIP和SNAT场景的源IP限定在该子网内；指定子网不影响添加后端服务节点时的范围，依旧是整个VPC下支持的资源
     *
     * @return string|null
     */
    public function getSubnetId()
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 负载均衡实例所属的子网资源ID。负载均衡实例的内网VIP和SNAT场景的源IP限定在该子网内；指定子网不影响添加后端服务节点时的范围，依旧是整个VPC下支持的资源
     *
     * @param string $subnetId
     */
    public function setSubnetId($subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * Type: 负载均衡实例的类型。限定枚举值："Application" / "Network"，默认值："Application"
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 负载均衡实例的类型。限定枚举值："Application" / "Network"，默认值："Application"
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * Name: 负载均衡实例的名称。默认值：lb；特殊字符仅支持：“-”，“_”，“.”；限定字符长度：[1-255]
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 负载均衡实例的名称。默认值：lb；特殊字符仅支持：“-”，“_”，“.”；限定字符长度：[1-255]
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Tag: 负载均衡实例所属的业务组ID。默认值为“Default”； 传空则为Default业务组
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 负载均衡实例所属的业务组ID。默认值为“Default”； 传空则为Default业务组
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * Remark: 负载均衡实例的备注信息。限定字符长度：[0-255]
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 负载均衡实例的备注信息。限定字符长度：[0-255]
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * IPVersion: 负载均衡实例的IP协议。限定枚举值："IPv4" / "IPv6"/"DualStack"，默认值为：“IPv4”
     *
     * @return string|null
     */
    public function getIPVersion()
    {
        return $this->get("IPVersion");
    }

    /**
     * IPVersion: 负载均衡实例的IP协议。限定枚举值："IPv4" / "IPv6"/"DualStack"，默认值为：“IPv4”
     *
     * @param string $ipVersion
     */
    public function setIPVersion($ipVersion)
    {
        $this->set("IPVersion", $ipVersion);
    }

    /**
     * ChargeType: 付费模式。限定枚举值："Year" / "Month"/"Day"/"Dynamic"，默认值为：“Month”
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 付费模式。限定枚举值："Year" / "Month"/"Day"/"Dynamic"，默认值为：“Month”
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Quantity: 购买的时长, 默认: 1; 0-> 购买至月末(0只在月付费有效，其余付费模式传0，实际收费按一个周期计费)
     *
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买的时长, 默认: 1; 0-> 购买至月末(0只在月付费有效，其余付费模式传0，实际收费按一个周期计费)
     *
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->set("Quantity", $quantity);
    }

    /**
     * CouponId: 代金券code
     *
     * @return string|null
     */
    public function getCouponId()
    {
        return $this->get("CouponId");
    }

    /**
     * CouponId: 代金券code
     *
     * @param string $couponId
     */
    public function setCouponId($couponId)
    {
        $this->set("CouponId", $couponId);
    }
}
