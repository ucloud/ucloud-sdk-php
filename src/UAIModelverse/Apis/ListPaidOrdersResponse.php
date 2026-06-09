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
use UCloud\UAIModelverse\Models\OrderItemDetail;

class ListPaidOrdersResponse extends Response
{
    

    /**
     * Page: 当前页码
     *
     * @return integer|null
     */
    public function getPage()
    {
        return $this->get("Page");
    }

    /**
     * Page: 当前页码
     *
     * @param int $page
     */
    public function setPage($page)
    {
        $this->set("Page", $page);
    }

    /**
     * PageSize: 每页数量
     *
     * @return integer|null
     */
    public function getPageSize()
    {
        return $this->get("PageSize");
    }

    /**
     * PageSize: 每页数量
     *
     * @param int $pageSize
     */
    public function setPageSize($pageSize)
    {
        $this->set("PageSize", $pageSize);
    }

    /**
     * Total: 总记录数
     *
     * @return integer|null
     */
    public function getTotal()
    {
        return $this->get("Total");
    }

    /**
     * Total: 总记录数
     *
     * @param int $total
     */
    public function setTotal($total)
    {
        $this->set("Total", $total);
    }

    /**
     * Orders: 订单列表
     *
     * @return OrderItemDetail[]|null
     */
    public function getOrders()
    {
        $items = $this->get("Orders");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new OrderItemDetail($item));
        }
        return $result;
    }

    /**
     * Orders: 订单列表
     *
     * @param OrderItemDetail[] $orders
     */
    public function setOrders(array $orders)
    {
        $result = [];
        foreach ($orders as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
