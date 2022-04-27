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

namespace UCloud\PathX\Apis;

use UCloud\Core\Request\Request;

class CreateUPathRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUPath"]);
        $this->markRequired("ProjectId");
        $this->markRequired("Name");
        $this->markRequired("LineId");
        $this->markRequired("Bandwidth");
    }


    /**
     * ProjectId: 项目ID,如org-xxxx。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID,如org-xxxx。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }
    /**
     * Name: 名字，便于记忆区分
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 名字，便于记忆区分
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->set("Name", $name);
    }
    /**
     * LineId: 选择的线路，由DescribePathXLineConfig接口提供
     *
     * @return string|null
     */
    public function getLineId()
    {
        return $this->get("LineId");
    }

    /**
     * LineId: 选择的线路，由DescribePathXLineConfig接口提供
     *
     * @param string $lineId
     */
    public function setLineId(string $lineId)
    {
        $this->set("LineId", $lineId);
    }
    /**
     * Bandwidth: 当PostPaid为false时，该值为预付费固定带宽；当PostPaid为true时，该值为后付费保底带宽，保底带宽越大可用的上限带宽越大。最小1Mbps,最大带宽由 DescribePathXLineConfig 接口获得。可联系产品团队咨询最大带宽。
     *
     * @return integer|null
     */
    public function getBandwidth()
    {
        return $this->get("Bandwidth");
    }

    /**
     * Bandwidth: 当PostPaid为false时，该值为预付费固定带宽；当PostPaid为true时，该值为后付费保底带宽，保底带宽越大可用的上限带宽越大。最小1Mbps,最大带宽由 DescribePathXLineConfig 接口获得。可联系产品团队咨询最大带宽。
     *
     * @param int $bandwidth
     */
    public function setBandwidth(int $bandwidth)
    {
        $this->set("Bandwidth", $bandwidth);
    }
    /**
     * ChargeType: 计费模式，默认为Month 按月收费,可选范围['Month','Year','Dynamic']
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费模式，默认为Month 按月收费,可选范围['Month','Year','Dynamic']
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }
    /**
     * Quantity: 购买周期，ChargeType为Month时，Quantity默认为0代表购买到月底，按时和按年付费该参数必须大于0
     *
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买周期，ChargeType为Month时，Quantity默认为0代表购买到月底，按时和按年付费该参数必须大于0
     *
     * @param int $quantity
     */
    public function setQuantity(int $quantity)
    {
        $this->set("Quantity", $quantity);
    }
    /**
     * PostPaid: 是否开启后付费, 默认为false ，不开启后付费。当ChargeType为Dynamic时不能开启后付费。
     *
     * @return boolean|null
     */
    public function getPostPaid()
    {
        return $this->get("PostPaid");
    }

    /**
     * PostPaid: 是否开启后付费, 默认为false ，不开启后付费。当ChargeType为Dynamic时不能开启后付费。
     *
     * @param boolean $postPaid
     */
    public function setPostPaid(bool $postPaid)
    {
        $this->set("PostPaid", $postPaid);
    }
    /**
     * PathType: private:专线线路；public:海外SD-WAN。默认为private。
     *
     * @return string|null
     */
    public function getPathType()
    {
        return $this->get("PathType");
    }

    /**
     * PathType: private:专线线路；public:海外SD-WAN。默认为private。
     *
     * @param string $pathType
     */
    public function setPathType(string $pathType)
    {
        $this->set("PathType", $pathType);
    }
    /**
     * CouponId: 代金券Id
     *
     * @return string|null
     */
    public function getCouponId()
    {
        return $this->get("CouponId");
    }

    /**
     * CouponId: 代金券Id
     *
     * @param string $couponId
     */
    public function setCouponId(string $couponId)
    {
        $this->set("CouponId", $couponId);
    }
}
