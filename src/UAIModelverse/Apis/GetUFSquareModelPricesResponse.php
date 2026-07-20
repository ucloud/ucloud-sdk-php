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
use UCloud\UAIModelverse\Models\ModelPriceGroup;
use UCloud\UAIModelverse\Models\PriceTier;
use UCloud\UAIModelverse\Models\PriceRate;

class GetUFSquareModelPricesResponse extends Response
{
    

    /**
     * Models: 匹配模型的价格信息
     *
     * @return ModelPriceGroup[]|null
     */
    public function getModels()
    {
        $items = $this->get("Models");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ModelPriceGroup($item));
        }
        return $result;
    }

    /**
     * Models: 匹配模型的价格信息
     *
     * @param ModelPriceGroup[] $models
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
     * TotalCount: 总条数用于翻页
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 总条数用于翻页
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }
}
