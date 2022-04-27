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

class GetUGA3PriceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetUGA3Price"]);
        $this->markRequired("ProjectId");
        $this->markRequired("Bandwidth");
        $this->markRequired("AreaCode");
    }

    

    /**
     * ProjectId: 项目ID。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * Bandwidth: 共享带宽大小
     *
     * @return integer|null
     */
    public function getBandwidth(): int
    {
        return $this->get("Bandwidth");
    }

    /**
     * Bandwidth: 共享带宽大小
     *
     * @param int $bandwidth
     */
    public function setBandwidth(int $bandwidth)
    {
        $this->set("Bandwidth", $bandwidth);
    }

    /**
     * AreaCode: 源站区域
     *
     * @return string|null
     */
    public function getAreaCode(): string
    {
        return $this->get("AreaCode");
    }

    /**
     * AreaCode: 源站区域
     *
     * @param string $areaCode
     */
    public function setAreaCode(string $areaCode)
    {
        $this->set("AreaCode", $areaCode);
    }

    /**
     * Quantity: 购买时间数量，当ChargeType为Month时 Quantity默认为0，代表购买至月底。按年按小时必须为大于0
     *
     * @return integer|null
     */
    public function getQuantity(): int
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买时间数量，当ChargeType为Month时 Quantity默认为0，代表购买至月底。按年按小时必须为大于0
     *
     * @param int $quantity
     */
    public function setQuantity(int $quantity)
    {
        $this->set("Quantity", $quantity);
    }

    /**
     * ChargeType: 计费方式，默认按月支付。Month: 按月; Year: 按年; Dynamic: 按小时收
     *
     * @return string|null
     */
    public function getChargeType(): string
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费方式，默认按月支付。Month: 按月; Year: 按年; Dynamic: 按小时收
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * AccelerationArea: 加速大区,默认返回所有加速大区价格
     *
     * @return string|null
     */
    public function getAccelerationArea(): string
    {
        return $this->get("AccelerationArea");
    }

    /**
     * AccelerationArea: 加速大区,默认返回所有加速大区价格
     *
     * @param string $accelerationArea
     */
    public function setAccelerationArea(string $accelerationArea)
    {
        $this->set("AccelerationArea", $accelerationArea);
    }
}
