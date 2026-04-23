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
namespace UCloud\UClickhouse\Models;

use UCloud\Core\Response\Response;

class Payment extends Response
{
    

    /**
     * CreateTimestamp: 创建时间
     *
     * @return integer|null
     */
    public function getCreateTimestamp()
    {
        return $this->get("CreateTimestamp");
    }

    /**
     * CreateTimestamp: 创建时间
     *
     * @param int $createTimestamp
     */
    public function setCreateTimestamp($createTimestamp)
    {
        $this->set("CreateTimestamp", $createTimestamp);
    }

    /**
     * ExpireTimestamp: 过期时间
     *
     * @return integer|null
     */
    public function getExpireTimestamp()
    {
        return $this->get("ExpireTimestamp");
    }

    /**
     * ExpireTimestamp: 过期时间
     *
     * @param int $expireTimestamp
     */
    public function setExpireTimestamp($expireTimestamp)
    {
        $this->set("ExpireTimestamp", $expireTimestamp);
    }

    /**
     * ChargeType: 支付类型
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 支付类型
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Price: 价格
     *
     * @return integer|null
     */
    public function getPrice()
    {
        return $this->get("Price");
    }

    /**
     * Price: 价格
     *
     * @param int $price
     */
    public function setPrice($price)
    {
        $this->set("Price", $price);
    }

    /**
     * OriginalPrice: 原始价格
     *
     * @return integer|null
     */
    public function getOriginalPrice()
    {
        return $this->get("OriginalPrice");
    }

    /**
     * OriginalPrice: 原始价格
     *
     * @param int $originalPrice
     */
    public function setOriginalPrice($originalPrice)
    {
        $this->set("OriginalPrice", $originalPrice);
    }

    /**
     * ResourceId: 资源ID
     *
     * @return string|null
     */
    public function getResourceId()
    {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: 资源ID
     *
     * @param string $resourceId
     */
    public function setResourceId($resourceId)
    {
        $this->set("ResourceId", $resourceId);
    }
}
