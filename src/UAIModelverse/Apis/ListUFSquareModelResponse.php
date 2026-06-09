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
use UCloud\UAIModelverse\Models\SquareModel;
use UCloud\UAIModelverse\Models\Pricing;

class ListUFSquareModelResponse extends Response
{
    

    /**
     * TotalCount: 总数
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 总数
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }

    /**
     * SquareModels: 广场模型
     *
     * @return SquareModel[]|null
     */
    public function getSquareModels()
    {
        $items = $this->get("SquareModels");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new SquareModel($item));
        }
        return $result;
    }

    /**
     * SquareModels: 广场模型
     *
     * @param SquareModel[] $squareModels
     */
    public function setSquareModels(array $squareModels)
    {
        $result = [];
        foreach ($squareModels as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
