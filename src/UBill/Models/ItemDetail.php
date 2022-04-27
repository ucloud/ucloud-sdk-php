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

namespace UCloud\UBill\Models;

use UCloud\Core\Response\Response;

use UCloud\UBill\Models\ListUBillDetailResponse;
use UCloud\UBill\Models\BillDetailItem;

class ItemDetail extends Response
{

    /**
     * ProductName: 产品小类名称
     *
     * @return string|null
     */
    public function getProductName()
    {
        return $this->get("ProductName");
    }

    /**
     * ProductName: 产品小类名称
     *
     * @param string $productName
     */
    public function setProductName(string $productName)
    {
        $this->set("ProductName", $productName);
    }
    /**
     * Value: 产品小类规格
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->get("Value");
    }

    /**
     * Value: 产品小类规格
     *
     * @param string $value
     */
    public function setValue(string $value)
    {
        $this->set("Value", $value);
    }
}
