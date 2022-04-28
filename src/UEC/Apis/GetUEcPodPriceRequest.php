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
namespace UCloud\UEC\Apis;

use UCloud\Core\Request\Request;

class GetUEcPodPriceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetUEcPodPrice"]);
        $this->markRequired("IdcId");
    }

    

    /**
     * IdcId: 机房id
     *
     * @return string|null
     */
    public function getIdcId()
    {
        return $this->get("IdcId");
    }

    /**
     * IdcId: 机房id
     *
     * @param string $idcId
     */
    public function setIdcId($idcId)
    {
        $this->set("IdcId", $idcId);
    }

    /**
     * CpuCore: 容器组总Cpu核心数
     *
     * @return float|null
     */
    public function getCpuCore()
    {
        return $this->get("CpuCore");
    }

    /**
     * CpuCore: 容器组总Cpu核心数
     *
     * @param float $cpuCore
     */
    public function setCpuCore($cpuCore)
    {
        $this->set("CpuCore", $cpuCore);
    }

    /**
     * MemSize: 容器组总内存大小（单位M）
     *
     * @return integer|null
     */
    public function getMemSize()
    {
        return $this->get("MemSize");
    }

    /**
     * MemSize: 容器组总内存大小（单位M）
     *
     * @param int $memSize
     */
    public function setMemSize($memSize)
    {
        $this->set("MemSize", $memSize);
    }

    /**
     * ChargeType: 支付类型（2按月，3按年，默认2）
     *
     * @return integer|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 支付类型（2按月，3按年，默认2）
     *
     * @param int $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * ChargeQuantity: 月数或年数（默认值：1，当支付类型为按月时，默认值为0）
     *
     * @return integer|null
     */
    public function getChargeQuantity()
    {
        return $this->get("ChargeQuantity");
    }

    /**
     * ChargeQuantity: 月数或年数（默认值：1，当支付类型为按月时，默认值为0）
     *
     * @param int $chargeQuantity
     */
    public function setChargeQuantity($chargeQuantity)
    {
        $this->set("ChargeQuantity", $chargeQuantity);
    }

    /**
     * ProductType: 产品类型（normal：标准型，hf：高性能型，默认：normal）
     *
     * @return string|null
     */
    public function getProductType()
    {
        return $this->get("ProductType");
    }

    /**
     * ProductType: 产品类型（normal：标准型，hf：高性能型，默认：normal）
     *
     * @param string $productType
     */
    public function setProductType($productType)
    {
        $this->set("ProductType", $productType);
    }

    /**
     * ElasticIp: 是否绑定外网IP（yes：是，no：否，默认：no）
     *
     * @return string|null
     */
    public function getElasticIp()
    {
        return $this->get("ElasticIp");
    }

    /**
     * ElasticIp: 是否绑定外网IP（yes：是，no：否，默认：no）
     *
     * @param string $elasticIp
     */
    public function setElasticIp($elasticIp)
    {
        $this->set("ElasticIp", $elasticIp);
    }

    /**
     * Bandwidth: 绑定的带宽，默认0，当绑定外网IP时默认1（单位M）
     *
     * @return integer|null
     */
    public function getBandwidth()
    {
        return $this->get("Bandwidth");
    }

    /**
     * Bandwidth: 绑定的带宽，默认0，当绑定外网IP时默认1（单位M）
     *
     * @param int $bandwidth
     */
    public function setBandwidth($bandwidth)
    {
        $this->set("Bandwidth", $bandwidth);
    }
}
