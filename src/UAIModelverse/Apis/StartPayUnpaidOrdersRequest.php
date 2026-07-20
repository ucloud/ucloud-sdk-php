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

class StartPayUnpaidOrdersRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "StartPayUnpaidOrders"]);
        $this->markRequired("OrderNos");
    }

    

    /**
     * OrderNos: 欠费订单号列表，最多 50 个
     *
     * @return string[]|null
     */
    public function getOrderNos()
    {
        return $this->get("OrderNos");
    }

    /**
     * OrderNos: 欠费订单号列表，最多 50 个
     *
     * @param string[] $orderNos
     */
    public function setOrderNos(array $orderNos)
    {
        $this->set("OrderNos", $orderNos);
    }
}
