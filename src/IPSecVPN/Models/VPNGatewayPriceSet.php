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
namespace UCloud\IPSecVPN\Models;

use UCloud\Core\Response\Response;

class VPNGatewayPriceSet extends Response
{
    

    /**
     * ChargeType: VPN网关付费方式
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: VPN网关付费方式
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Price: VPN网关价格, 单位"元"
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->get("Price");
    }

    /**
     * Price: VPN网关价格, 单位"元"
     *
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->set("Price", $price);
    }

    /**
     * PurchaseValue: 资源有效期, 以Unix Timestamp表示
     *
     * @return int|null
     */
    public function getPurchaseValue()
    {
        return $this->get("PurchaseValue");
    }

    /**
     * PurchaseValue: 资源有效期, 以Unix Timestamp表示
     *
     * @param int $purchaseValue
     */
    public function setPurchaseValue($purchaseValue)
    {
        $this->set("PurchaseValue", $purchaseValue);
    }


}
