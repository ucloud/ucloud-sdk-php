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
namespace UCloud\PathX\Models;

use UCloud\Core\Response\Response;

class OutPublicIpInfo extends Response
{
    

    /**
     * IP:  线路回源节点EIP
     *
     * @return string|null
     */
    public function getIP()
    {
        return $this->get("IP");
    }

    /**
     * IP:  线路回源节点EIP
     *
     * @param string $ip
     */
    public function setIP($ip)
    {
        $this->set("IP", $ip);
    }

    /**
     * Area: 线路回源节点机房代号
     *
     * @return string|null
     */
    public function getArea()
    {
        return $this->get("Area");
    }

    /**
     * Area: 线路回源节点机房代号
     *
     * @param string $area
     */
    public function setArea($area)
    {
        $this->set("Area", $area);
    }


}
