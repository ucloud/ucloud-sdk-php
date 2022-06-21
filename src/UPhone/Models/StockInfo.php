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
namespace UCloud\UPhone\Models;

use UCloud\Core\Response\Response;

class StockInfo extends Response
{
    

    /**
     * ModelName: ServerModel名称
     *
     * @return string|null
     */
    public function getModelName()
    {
        return $this->get("ModelName");
    }

    /**
     * ModelName: ServerModel名称
     *
     * @param string $modelName
     */
    public function setModelName($modelName)
    {
        $this->set("ModelName", $modelName);
    }

    /**
     * StockCount: 资源余量
     *
     * @return int|null
     */
    public function getStockCount()
    {
        return $this->get("StockCount");
    }

    /**
     * StockCount: 资源余量
     *
     * @param int $stockCount
     */
    public function setStockCount($stockCount)
    {
        $this->set("StockCount", $stockCount);
    }


}
