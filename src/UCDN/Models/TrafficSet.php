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
namespace UCloud\UCDN\Models;

use UCloud\Core\Response\Response;

class TrafficSet extends Response
{
    

    /**
     * Areacode: 购买流量的区域, cn: 国内; abroad: 国外
     *
     * @return string|null
     */
    public function getAreacode()
    {
        return $this->get("Areacode");
    }

    /**
     * Areacode: 购买流量的区域, cn: 国内; abroad: 国外
     *
     * @param string $areacode
     */
    public function setAreacode($areacode)
    {
        $this->set("Areacode", $areacode);
    }

    /**
     * TrafficTotal: Areacode区域内总购买流量, 单位GB
     *
     * @return float|null
     */
    public function getTrafficTotal()
    {
        return $this->get("TrafficTotal");
    }

    /**
     * TrafficTotal: Areacode区域内总购买流量, 单位GB
     *
     * @param float $trafficTotal
     */
    public function setTrafficTotal($trafficTotal)
    {
        $this->set("TrafficTotal", $trafficTotal);
    }

    /**
     * TrafficLeft: Areacode区域内总剩余流量, 单位GB
     *
     * @return float|null
     */
    public function getTrafficLeft()
    {
        return $this->get("TrafficLeft");
    }

    /**
     * TrafficLeft: Areacode区域内总剩余流量, 单位GB
     *
     * @param float $trafficLeft
     */
    public function setTrafficLeft($trafficLeft)
    {
        $this->set("TrafficLeft", $trafficLeft);
    }

    /**
     * TrafficUsed: Areacode区域内总使用流量, 单位GB
     *
     * @return float|null
     */
    public function getTrafficUsed()
    {
        return $this->get("TrafficUsed");
    }

    /**
     * TrafficUsed: Areacode区域内总使用流量, 单位GB
     *
     * @param float $trafficUsed
     */
    public function setTrafficUsed($trafficUsed)
    {
        $this->set("TrafficUsed", $trafficUsed);
    }
}
