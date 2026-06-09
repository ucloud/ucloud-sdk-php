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
namespace UCloud\UAIModelverse\Apis;

use UCloud\Core\Request\Request;

class ListUnpaidOrderSummaryRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ListUnpaidOrderSummary"]);
        $this->markRequired("StartTime");
        $this->markRequired("EndTime");
    }

    

    /**
     * StartTime: 查询开始时间（Unix 时间戳，秒级），必填
     *
     * @return integer|null
     */
    public function getStartTime()
    {
        return $this->get("StartTime");
    }

    /**
     * StartTime: 查询开始时间（Unix 时间戳，秒级），必填
     *
     * @param int $startTime
     */
    public function setStartTime($startTime)
    {
        $this->set("StartTime", $startTime);
    }

    /**
     * EndTime: 查询结束时间（Unix 时间戳，秒级），必填；必须大于 StartTime
     *
     * @return integer|null
     */
    public function getEndTime()
    {
        return $this->get("EndTime");
    }

    /**
     * EndTime: 查询结束时间（Unix 时间戳，秒级），必填；必须大于 StartTime
     *
     * @param int $endTime
     */
    public function setEndTime($endTime)
    {
        $this->set("EndTime", $endTime);
    }

    /**
     * ResourceIds: Key数组（多选，可选）
     *
     * @return string[]|null
     */
    public function getResourceIds()
    {
        return $this->get("ResourceIds");
    }

    /**
     * ResourceIds: Key数组（多选，可选）
     *
     * @param string[] $resourceIds
     */
    public function setResourceIds(array $resourceIds)
    {
        $this->set("ResourceIds", $resourceIds);
    }

    /**
     * OrderTypes: 订单类型数组（多选，可选）
     *
     * @return integer|null
     */
    public function getOrderTypes()
    {
        return $this->get("OrderTypes");
    }

    /**
     * OrderTypes: 订单类型数组（多选，可选）
     *
     * @param int $orderTypes
     */
    public function setOrderTypes($orderTypes)
    {
        $this->set("OrderTypes", $orderTypes);
    }

    /**
     * ModelIds: 模型ID数组（多选，可选）
     *
     * @return string[]|null
     */
    public function getModelIds()
    {
        return $this->get("ModelIds");
    }

    /**
     * ModelIds: 模型ID数组（多选，可选）
     *
     * @param string[] $modelIds
     */
    public function setModelIds(array $modelIds)
    {
        $this->set("ModelIds", $modelIds);
    }

    /**
     * PricingUnits: 计费单元数组（多选，可选）
     *
     * @return int[]|null
     */
    public function getPricingUnits()
    {
        return $this->get("PricingUnits");
    }

    /**
     * PricingUnits: 计费单元数组（多选，可选）
     *
     * @param int[] $pricingUnits
     */
    public function setPricingUnits(array $pricingUnits)
    {
        $this->set("PricingUnits", $pricingUnits);
    }

    /**
     * ChargeTypes: 计费类型数组（多选，可选）
     *
     * @return int[]|null
     */
    public function getChargeTypes()
    {
        return $this->get("ChargeTypes");
    }

    /**
     * ChargeTypes: 计费类型数组（多选，可选）
     *
     * @param int[] $chargeTypes
     */
    public function setChargeTypes(array $chargeTypes)
    {
        $this->set("ChargeTypes", $chargeTypes);
    }

    /**
     * PricingSkus: 计费单元（SKU）列表（可选）
     *
     * @return string[]|null
     */
    public function getPricingSkus()
    {
        return $this->get("PricingSkus");
    }

    /**
     * PricingSkus: 计费单元（SKU）列表（可选）
     *
     * @param string[] $pricingSkus
     */
    public function setPricingSkus(array $pricingSkus)
    {
        $this->set("PricingSkus", $pricingSkus);
    }

    /**
     * Regions: 地域列表（多选，可选），参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string[]|null
     */
    public function getRegions()
    {
        return $this->get("Regions");
    }

    /**
     * Regions: 地域列表（多选，可选），参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string[] $regions
     */
    public function setRegions(array $regions)
    {
        $this->set("Regions", $regions);
    }

    /**
     * OrganizationIds: 组织ID列表（可选）
     *
     * @return int[]|null
     */
    public function getOrganizationIds()
    {
        return $this->get("OrganizationIds");
    }

    /**
     * OrganizationIds: 组织ID列表（可选）
     *
     * @param int[] $organizationIds
     */
    public function setOrganizationIds(array $organizationIds)
    {
        $this->set("OrganizationIds", $organizationIds);
    }
}
