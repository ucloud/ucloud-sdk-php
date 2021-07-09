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
namespace UCloud\PathX\Apis;

use UCloud\Core\Request\Request;

class ModifyGlobalSSHTypeRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ModifyGlobalSSHType"]);
        $this->markRequired("ProjectId");
        $this->markRequired("InstanceId");
        $this->markRequired("InstanceType");
    }

    

    /**
     * ProjectId: 项目ID，如org-xxxx。请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID，如org-xxxx。请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * InstanceId: 实例ID,资源唯一标识
     *
     * @return string|null
     */
    public function getInstanceId(): string
    {
        return $this->get("InstanceId");
    }

    /**
     * InstanceId: 实例ID,资源唯一标识
     *
     * @param string $instanceId
     */
    public function setInstanceId(string $instanceId)
    {
        $this->set("InstanceId", $instanceId);
    }

    /**
     * InstanceType: 取值范围["Enterprise","Basic"]，分别对应企业版和基础版，表示升级后的实例类型。比如从Free版本升级为Basic版或Enterprise版，不可从收费版降级为免费版，或从企业版降级为基础版
     *
     * @return string|null
     */
    public function getInstanceType(): string
    {
        return $this->get("InstanceType");
    }

    /**
     * InstanceType: 取值范围["Enterprise","Basic"]，分别对应企业版和基础版，表示升级后的实例类型。比如从Free版本升级为Basic版或Enterprise版，不可从收费版降级为免费版，或从企业版降级为基础版
     *
     * @param string $instanceType
     */
    public function setInstanceType(string $instanceType)
    {
        $this->set("InstanceType", $instanceType);
    }

    /**
     * ChargeType: 支付方式，如按月、按年、按时
     *
     * @return string|null
     */
    public function getChargeType(): string
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 支付方式，如按月、按年、按时
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Quantity: 购买时间，当ChargeType为Month，Quantity为0代表购买到月底
     *
     * @return string|null
     */
    public function getQuantity(): string
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买时间，当ChargeType为Month，Quantity为0代表购买到月底
     *
     * @param string $quantity
     */
    public function setQuantity(string $quantity)
    {
        $this->set("Quantity", $quantity);
    }

    /**
     * CouponId: 可抵扣费用的券，通常不使用
     *
     * @return string|null
     */
    public function getCouponId(): string
    {
        return $this->get("CouponId");
    }

    /**
     * CouponId: 可抵扣费用的券，通常不使用
     *
     * @param string $couponId
     */
    public function setCouponId(string $couponId)
    {
        $this->set("CouponId", $couponId);
    }
}
