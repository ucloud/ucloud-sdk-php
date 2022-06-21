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
namespace UCloud\UPhone\Apis;

use UCloud\Core\Response\Response;
use UCloud\UPhone\Models\StockInfo;
use UCloud\UPhone\Models\ServerModelInstance;
use UCloud\UPhone\Models\ServerDiskSet;
use UCloud\UPhone\Models\UPhoneSpec;

class DescribeUPhoneServerModelResponse extends Response
{
    

    /**
     * TotalCount: ServerModelInstance总数
     *
     * @return int|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: ServerModelInstance总数
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }

    /**
     * Stock: 服务器model的库存
     *
     * @return StockInfo[]|null
     */
    public function getStock()
    {
        $items = $this->get("Stock");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new StockInfo($item));
        }
        return $result;
    }

    /**
     * Stock: 服务器model的库存
     *
     * @param StockInfo[] $stock
     */
    public function setStock(array $stock)
    {
        $result = [];
        foreach ($stock as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * ServerModels: ServerModel实例列表，每项参数可见数据模型 ServerModelInstance
     *
     * @return ServerModelInstance[]|null
     */
    public function getServerModels()
    {
        $items = $this->get("ServerModels");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ServerModelInstance($item));
        }
        return $result;
    }

    /**
     * ServerModels: ServerModel实例列表，每项参数可见数据模型 ServerModelInstance
     *
     * @param ServerModelInstance[] $serverModels
     */
    public function setServerModels(array $serverModels)
    {
        $result = [];
        foreach ($serverModels as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }


}
