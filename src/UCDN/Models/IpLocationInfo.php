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

namespace UCloud\UCDN\Models;

use UCloud\Core\Response\Response;

use UCloud\UCDN\Models\QueryIpLocationResponse;

class IpLocationInfo extends Response
{

    /**
     * Ip: 客户端请求的ip
     *
     * @return string|null
     */
    public function getIp()
    {
        return $this->get("Ip");
    }

    /**
     * Ip: 客户端请求的ip
     *
     * @param string $ip
     */
    public function setIp(string $ip)
    {
        $this->set("Ip", $ip);
    }
    /**
     * Area: 地区
     *
     * @return string|null
     */
    public function getArea()
    {
        return $this->get("Area");
    }

    /**
     * Area: 地区
     *
     * @param string $area
     */
    public function setArea(string $area)
    {
        $this->set("Area", $area);
    }
    /**
     * Isp: 运营商
     *
     * @return string|null
     */
    public function getIsp()
    {
        return $this->get("Isp");
    }

    /**
     * Isp: 运营商
     *
     * @param string $isp
     */
    public function setIsp(string $isp)
    {
        $this->set("Isp", $isp);
    }
    /**
     * City: 城市
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->get("City");
    }

    /**
     * City: 城市
     *
     * @param string $city
     */
    public function setCity(string $city)
    {
        $this->set("City", $city);
    }
    /**
     * Exist: ip是否存在
     *
     * @return boolean|null
     */
    public function getExist()
    {
        return $this->get("Exist");
    }

    /**
     * Exist: ip是否存在
     *
     * @param boolean $exist
     */
    public function setExist(bool $exist)
    {
        $this->set("Exist", $exist);
    }
}
