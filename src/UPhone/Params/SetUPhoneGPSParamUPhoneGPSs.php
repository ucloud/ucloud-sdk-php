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
namespace UCloud\UPhone\Params;

use UCloud\Core\Request\Request;

class SetUPhoneGPSParamUPhoneGPSs extends Request
{
    

    /**
     * UPhoneId: 云手机ID
     *
     * @return string|null
     */
    public function getUPhoneId()
    {
        return $this->get("UPhoneId");
    }

    /**
     * UPhoneId: 云手机ID
     *
     * @param string $uPhoneId
     */
    public function setUPhoneId($uPhoneId)
    {
        $this->set("UPhoneId", $uPhoneId);
    }

    /**
     * Longitude: 经度：-180~180
     *
     * @return float|null
     */
    public function getLongitude()
    {
        return $this->get("Longitude");
    }

    /**
     * Longitude: 经度：-180~180
     *
     * @param float $longitude
     */
    public function setLongitude($longitude)
    {
        $this->set("Longitude", $longitude);
    }

    /**
     * Latitude: 纬度：-90~90
     *
     * @return float|null
     */
    public function getLatitude()
    {
        return $this->get("Latitude");
    }

    /**
     * Latitude: 纬度：-90~90
     *
     * @param float $latitude
     */
    public function setLatitude($latitude)
    {
        $this->set("Latitude", $latitude);
    }

    /**
     * Altitude: 海拔
     *
     * @return float|null
     */
    public function getAltitude()
    {
        return $this->get("Altitude");
    }

    /**
     * Altitude: 海拔
     *
     * @param float $altitude
     */
    public function setAltitude($altitude)
    {
        $this->set("Altitude", $altitude);
    }


}
