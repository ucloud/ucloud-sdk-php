<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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
namespace UCloud\UPHost\Models;

use UCloud\Core\Response\Response;

class PHostClusterSet extends Response {
    

    /**
     * Name: 集群名。枚举值：千兆网络集群：1G；万兆网络集群：10G；智能网卡网络：25G；
     *
     * @return string|null
     */
    public function getName(): string {
        return $this->get("Name");
    }

    /**
     * Name: 集群名。枚举值：千兆网络集群：1G；万兆网络集群：10G；智能网卡网络：25G；
     *
     * @param string $name
     */
    public function setName(string $name) {
        $this->set("Name", $name);
    }

    /**
     * StockStatus: 库存状态。枚举值：有库存：Available；无库存：SoldOut
     *
     * @return string|null
     */
    public function getStockStatus(): string {
        return $this->get("StockStatus");
    }

    /**
     * StockStatus: 库存状态。枚举值：有库存：Available；无库存：SoldOut
     *
     * @param string $stockStatus
     */
    public function setStockStatus(string $stockStatus) {
        $this->set("StockStatus", $stockStatus);
    }


}
