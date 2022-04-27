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
namespace UCloud\UDDB\Models;

use UCloud\Core\Response\Response;

class PriceDetailInfo extends Response
{
    

    /**
     * MiddlewarePrice: 中间件路由节点费用
     *
     * @return float|null
     */
    public function getMiddlewarePrice(): float
    {
        return $this->get("MiddlewarePrice");
    }

    /**
     * MiddlewarePrice: 中间件路由节点费用
     *
     * @param float $middlewarePrice
     */
    public function setMiddlewarePrice(float $middlewarePrice)
    {
        $this->set("MiddlewarePrice", $middlewarePrice);
    }

    /**
     * DataNodePrice: 存储节点费用
     *
     * @return float|null
     */
    public function getDataNodePrice(): float
    {
        return $this->get("DataNodePrice");
    }

    /**
     * DataNodePrice: 存储节点费用
     *
     * @param float $dataNodePrice
     */
    public function setDataNodePrice(float $dataNodePrice)
    {
        $this->set("DataNodePrice", $dataNodePrice);
    }

    /**
     * DataNodeSlavePrice: 只读实例费用
     *
     * @return float|null
     */
    public function getDataNodeSlavePrice(): float
    {
        return $this->get("DataNodeSlavePrice");
    }

    /**
     * DataNodeSlavePrice: 只读实例费用
     *
     * @param float $dataNodeSlavePrice
     */
    public function setDataNodeSlavePrice(float $dataNodeSlavePrice)
    {
        $this->set("DataNodeSlavePrice", $dataNodeSlavePrice);
    }
}
