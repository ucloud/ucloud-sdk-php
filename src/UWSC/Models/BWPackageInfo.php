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
namespace UCloud\UWSC\Models;

use UCloud\Core\Response\Response;

class BWPackageInfo extends Response
{
    

    /**
     * BwId: UWAN 网关带宽 ID
     *
     * @return string|null
     */
    public function getBwId()
    {
        return $this->get("BwId");
    }

    /**
     * BwId: UWAN 网关带宽 ID
     *
     * @param string $bwId
     */
    public function setBwId($bwId)
    {
        $this->set("BwId", $bwId);
    }

    /**
     * Name: 带宽包名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 带宽包名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Remark: 备注
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 备注
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * PayMode: 计费方式eg:(固定带宽)
     *
     * @return string|null
     */
    public function getPayMode()
    {
        return $this->get("PayMode");
    }

    /**
     * PayMode: 计费方式eg:(固定带宽)
     *
     * @param string $payMode
     */
    public function setPayMode($payMode)
    {
        $this->set("PayMode", $payMode);
    }

    /**
     * ChargeType: 付费方式eg:(Month)
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 付费方式eg:(Month)
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * PublicIp: 网关外网 IP
     *
     * @return string|null
     */
    public function getPublicIp()
    {
        return $this->get("PublicIp");
    }

    /**
     * PublicIp: 网关外网 IP
     *
     * @param string $publicIp
     */
    public function setPublicIp($publicIp)
    {
        $this->set("PublicIp", $publicIp);
    }

    /**
     * BandWidth: 最大带宽值
     *
     * @return float|null
     */
    public function getBandWidth()
    {
        return $this->get("BandWidth");
    }

    /**
     * BandWidth: 最大带宽值
     *
     * @param float $bandWidth
     */
    public function setBandWidth($bandWidth)
    {
        $this->set("BandWidth", $bandWidth);
    }

    /**
     * DueTime: 过期时间
     *
     * @return integer|null
     */
    public function getDueTime()
    {
        return $this->get("DueTime");
    }

    /**
     * DueTime: 过期时间
     *
     * @param int $dueTime
     */
    public function setDueTime($dueTime)
    {
        $this->set("DueTime", $dueTime);
    }
}
