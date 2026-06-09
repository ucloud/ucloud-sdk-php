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

class ListUnpaidOrdersRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ListUnpaidOrders"]);
        $this->markRequired("EndTime");
        $this->markRequired("StartTime");
        $this->markRequired("PageSize");
        $this->markRequired("Page");
    }

    

    /**
     * EndTime: 查询结束时间（Unix 时间戳，秒级）。需与 `StartTime` 同时提供
     *
     * @return integer|null
     */
    public function getEndTime()
    {
        return $this->get("EndTime");
    }

    /**
     * EndTime: 查询结束时间（Unix 时间戳，秒级）。需与 `StartTime` 同时提供
     *
     * @param int $endTime
     */
    public function setEndTime($endTime)
    {
        $this->set("EndTime", $endTime);
    }

    /**
     * StartTime: 查询开始时间（Unix 时间戳，秒级）。与 `EndTime` 同时提供时启用自定义周期查询；EndTime 必须大于 StartTime
     *
     * @return integer|null
     */
    public function getStartTime()
    {
        return $this->get("StartTime");
    }

    /**
     * StartTime: 查询开始时间（Unix 时间戳，秒级）。与 `EndTime` 同时提供时启用自定义周期查询；EndTime 必须大于 StartTime
     *
     * @param int $startTime
     */
    public function setStartTime($startTime)
    {
        $this->set("StartTime", $startTime);
    }

    /**
     * PageSize: 每页数量（最小10，最大100）
     *
     * @return integer|null
     */
    public function getPageSize()
    {
        return $this->get("PageSize");
    }

    /**
     * PageSize: 每页数量（最小10，最大100）
     *
     * @param int $pageSize
     */
    public function setPageSize($pageSize)
    {
        $this->set("PageSize", $pageSize);
    }

    /**
     * Page: 页码,从1开始
     *
     * @return integer|null
     */
    public function getPage()
    {
        return $this->get("Page");
    }

    /**
     * Page: 页码,从1开始
     *
     * @param int $page
     */
    public function setPage($page)
    {
        $this->set("Page", $page);
    }

    /**
     * ResourceIds: key数组（多选，可选）
     *
     * @return string[]|null
     */
    public function getResourceIds()
    {
        return $this->get("ResourceIds");
    }

    /**
     * ResourceIds: key数组（多选，可选）
     *
     * @param string[] $resourceIds
     */
    public function setResourceIds(array $resourceIds)
    {
        $this->set("ResourceIds", $resourceIds);
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
     * OrderTypes: 订单类型数组（多选，可选）
     *
     * @return int[]|null
     */
    public function getOrderTypes()
    {
        return $this->get("OrderTypes");
    }

    /**
     * OrderTypes: 订单类型数组（多选，可选）
     *
     * @param int[] $orderTypes
     */
    public function setOrderTypes(array $orderTypes)
    {
        $this->set("OrderTypes", $orderTypes);
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
     * PricingSkus: 计费 SKU 列表（可选）
     *
     * @return string[]|null
     */
    public function getPricingSkus()
    {
        return $this->get("PricingSkus");
    }

    /**
     * PricingSkus: 计费 SKU 列表（可选）
     *
     * @param string[] $pricingSkus
     */
    public function setPricingSkus(array $pricingSkus)
    {
        $this->set("PricingSkus", $pricingSkus);
    }

    /**
     * ProductCodes: 产品类型列表（多选，可选），枚举值：`modelverse`、`sandbox`
     *
     * @return string[]|null
     */
    public function getProductCodes()
    {
        return $this->get("ProductCodes");
    }

    /**
     * ProductCodes: 产品类型列表（多选，可选），枚举值：`modelverse`、`sandbox`
     *
     * @param string[] $productCodes
     */
    public function setProductCodes(array $productCodes)
    {
        $this->set("ProductCodes", $productCodes);
    }
}
