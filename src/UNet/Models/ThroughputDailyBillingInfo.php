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
namespace UCloud\UNet\Models;

use UCloud\Core\Response\Response;

class ThroughputDailyBillingInfo extends Response
{
    

    /**
     * StartTime: 计费开始时间
     *
     * @return int|null
     */
    public function getStartTime()
    {
        return $this->get("StartTime");
    }

    /**
     * StartTime: 计费开始时间
     *
     * @param int $startTime
     */
    public function setStartTime($startTime)
    {
        $this->set("StartTime", $startTime);
    }

    /**
     * EndTime: 计费结束时间
     *
     * @return int|null
     */
    public function getEndTime()
    {
        return $this->get("EndTime");
    }

    /**
     * EndTime: 计费结束时间
     *
     * @param int $endTime
     */
    public function setEndTime($endTime)
    {
        $this->set("EndTime", $endTime);
    }

    /**
     * QuantityOut: 计费流量，单位“GB”
     *
     * @return int|null
     */
    public function getQuantityOut()
    {
        return $this->get("QuantityOut");
    }

    /**
     * QuantityOut: 计费流量，单位“GB”
     *
     * @param int $quantityOut
     */
    public function setQuantityOut($quantityOut)
    {
        $this->set("QuantityOut", $quantityOut);
    }

    /**
     * BillingState: 是否已计费，“Yes”或者“No”
     *
     * @return string|null
     */
    public function getBillingState()
    {
        return $this->get("BillingState");
    }

    /**
     * BillingState: 是否已计费，“Yes”或者“No”
     *
     * @param string $billingState
     */
    public function setBillingState($billingState)
    {
        $this->set("BillingState", $billingState);
    }


}
