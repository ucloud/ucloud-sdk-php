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
namespace UCloud\UEC\Models;

use UCloud\Core\Response\Response;

class NodeIpList extends Response
{
    

    /**
     * Ip: 外网ip
     *
     * @return string|null
     */
    public function getIp()
    {
        return $this->get("Ip");
    }

    /**
     * Ip: 外网ip
     *
     * @param string $ip
     */
    public function setIp($ip)
    {
        $this->set("Ip", $ip);
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
    public function setIsp($isp)
    {
        $this->set("Isp", $isp);
    }

    /**
     * IspName: 运营商名称
     *
     * @return string|null
     */
    public function getIspName()
    {
        return $this->get("IspName");
    }

    /**
     * IspName: 运营商名称
     *
     * @param string $ispName
     */
    public function setIspName($ispName)
    {
        $this->set("IspName", $ispName);
    }


}
