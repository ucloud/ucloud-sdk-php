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
namespace UCloud\UNet\Apis;

use UCloud\Core\Request\Request;

class DescribeShareBandwidthPriceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeShareBandwidthPrice"]);
        $this->markRequired("Region");
        $this->markRequired("ChargeType");
        $this->markRequired("ShareBandwidth");
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
     * ChargeType: 付费方式, 预付费:Year 按年,Month 按月,Dynamic 按需;
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 付费方式, 预付费:Year 按年,Month 按月,Dynamic 按需;
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * ShareBandwidth: 共享带宽值
     *
     * @return int|null
     */
    public function getShareBandwidth()
    {
        return $this->get("ShareBandwidth");
    }

    /**
     * ShareBandwidth: 共享带宽值
     *
     * @param int $shareBandwidth
     */
    public function setShareBandwidth($shareBandwidth)
    {
        $this->set("ShareBandwidth", $shareBandwidth);
    }

    /**
     * Quantity: 购买数量
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买数量
     *
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->set("Quantity", $quantity);
    }

    /**
     * OperatorName: 香港地域支持：BGPPro和International。其他地域无需填写该字段
     *
     * @return string|null
     */
    public function getOperatorName()
    {
        return $this->get("OperatorName");
    }

    /**
     * OperatorName: 香港地域支持：BGPPro和International。其他地域无需填写该字段
     *
     * @param string $operatorName
     */
    public function setOperatorName($operatorName)
    {
        $this->set("OperatorName", $operatorName);
    }


}
