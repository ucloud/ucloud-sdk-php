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
namespace UCloud\UAIModelverse\Models;

use UCloud\Core\Response\Response;

class ModelPriceGroup extends Response
{
    

    /**
     * Manufacturer: 制造商
     *
     * @return string|null
     */
    public function getManufacturer()
    {
        return $this->get("Manufacturer");
    }

    /**
     * Manufacturer: 制造商
     *
     * @param string $manufacturer
     */
    public function setManufacturer($manufacturer)
    {
        $this->set("Manufacturer", $manufacturer);
    }

    /**
     * ModelName: 模型名称
     *
     * @return string|null
     */
    public function getModelName()
    {
        return $this->get("ModelName");
    }

    /**
     * ModelName: 模型名称
     *
     * @param string $modelName
     */
    public function setModelName($modelName)
    {
        $this->set("ModelName", $modelName);
    }

    /**
     * ModelId: ModelId
     *
     * @return string|null
     */
    public function getModelId()
    {
        return $this->get("ModelId");
    }

    /**
     * ModelId: ModelId
     *
     * @param string $modelId
     */
    public function setModelId($modelId)
    {
        $this->set("ModelId", $modelId);
    }

    /**
     * Tiers: 价格阶梯（有序数组）
     *
     * @return PriceTier[]|null
     */
    public function getTiers()
    {
        $items = $this->get("Tiers");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new PriceTier($item));
        }
        return $result;
    }

    /**
     * Tiers: 价格阶梯（有序数组）
     *
     * @param PriceTier[] $tiers
     */
    public function setTiers(array $tiers)
    {
        $result = [];
        foreach ($tiers as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
