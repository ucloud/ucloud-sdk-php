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

use UCloud\Core\Response\Response;
use UCloud\UAIModelverse\Models\FilterOptionString;
use UCloud\UAIModelverse\Models\FilterOptionString;
use UCloud\UAIModelverse\Models\FilterOptionString;
use UCloud\UAIModelverse\Models\FilterOptionInteger;
use UCloud\UAIModelverse\Models\FilterOptionString;
use UCloud\UAIModelverse\Models\FilterOptionString;
use UCloud\UAIModelverse\Models\FilterOptionInteger;
use UCloud\UAIModelverse\Models\FilterOptionString;
use UCloud\UAIModelverse\Models\FilterOptionInteger;

class GetFilterOptionsResponse extends Response
{
    

    /**
     * ResourceIds: 资源选项列表
     *
     * @return FilterOptionString[]|null
     */
    public function getResourceIds()
    {
        $items = $this->get("ResourceIds");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new FilterOptionString($item));
        }
        return $result;
    }

    /**
     * ResourceIds: 资源选项列表
     *
     * @param FilterOptionString[] $resourceIds
     */
    public function setResourceIds(array $resourceIds)
    {
        $result = [];
        foreach ($resourceIds as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Models: 模型选项列表
     *
     * @return FilterOptionString[]|null
     */
    public function getModels()
    {
        $items = $this->get("Models");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new FilterOptionString($item));
        }
        return $result;
    }

    /**
     * Models: 模型选项列表
     *
     * @param FilterOptionString[] $models
     */
    public function setModels(array $models)
    {
        $result = [];
        foreach ($models as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Dimensions: 账单维度选项列表
     *
     * @return FilterOptionString[]|null
     */
    public function getDimensions()
    {
        $items = $this->get("Dimensions");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new FilterOptionString($item));
        }
        return $result;
    }

    /**
     * Dimensions: 账单维度选项列表
     *
     * @param FilterOptionString[] $dimensions
     */
    public function setDimensions(array $dimensions)
    {
        $result = [];
        foreach ($dimensions as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * PricingUnits: 计费单位选项列表
     *
     * @return FilterOptionInteger[]|null
     */
    public function getPricingUnits()
    {
        $items = $this->get("PricingUnits");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new FilterOptionInteger($item));
        }
        return $result;
    }

    /**
     * PricingUnits: 计费单位选项列表
     *
     * @param FilterOptionInteger[] $pricingUnits
     */
    public function setPricingUnits(array $pricingUnits)
    {
        $result = [];
        foreach ($pricingUnits as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Regions: 地域选项列表
     *
     * @return FilterOptionString[]|null
     */
    public function getRegions()
    {
        $items = $this->get("Regions");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new FilterOptionString($item));
        }
        return $result;
    }

    /**
     * Regions: 地域选项列表
     *
     * @param FilterOptionString[] $regions
     */
    public function setRegions(array $regions)
    {
        $result = [];
        foreach ($regions as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * ProductCodes: 产品类型选项列表
     *
     * @return FilterOptionString[]|null
     */
    public function getProductCodes()
    {
        $items = $this->get("ProductCodes");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new FilterOptionString($item));
        }
        return $result;
    }

    /**
     * ProductCodes: 产品类型选项列表
     *
     * @param FilterOptionString[] $productCodes
     */
    public function setProductCodes(array $productCodes)
    {
        $result = [];
        foreach ($productCodes as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Projects: 项目选项列表
     *
     * @return FilterOptionInteger[]|null
     */
    public function getProjects()
    {
        $items = $this->get("Projects");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new FilterOptionInteger($item));
        }
        return $result;
    }

    /**
     * Projects: 项目选项列表
     *
     * @param FilterOptionInteger[] $projects
     */
    public function setProjects(array $projects)
    {
        $result = [];
        foreach ($projects as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * PricingSKUs: 计费 SKU 选项列表
     *
     * @return FilterOptionString[]|null
     */
    public function getPricingSKUs()
    {
        $items = $this->get("PricingSKUs");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new FilterOptionString($item));
        }
        return $result;
    }

    /**
     * PricingSKUs: 计费 SKU 选项列表
     *
     * @param FilterOptionString[] $pricingSKUs
     */
    public function setPricingSKUs(array $pricingSKUs)
    {
        $result = [];
        foreach ($pricingSKUs as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * OrderTypes: 订单类型选项列表
     *
     * @return FilterOptionInteger[]|null
     */
    public function getOrderTypes()
    {
        $items = $this->get("OrderTypes");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new FilterOptionInteger($item));
        }
        return $result;
    }

    /**
     * OrderTypes: 订单类型选项列表
     *
     * @param FilterOptionInteger[] $orderTypes
     */
    public function setOrderTypes(array $orderTypes)
    {
        $result = [];
        foreach ($orderTypes as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
