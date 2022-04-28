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
namespace UCloud\UK8S\Models;

use UCloud\Core\Response\Response;

class IPSet extends Response
{
    

    /**
     * Type: 国际: Internation，BGP: Bgp，内网: Private
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 国际: Internation，BGP: Bgp，内网: Private
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * IPId: IP资源ID (内网IP无对应的资源ID)
     *
     * @return string|null
     */
    public function getIPId()
    {
        return $this->get("IPId");
    }

    /**
     * IPId: IP资源ID (内网IP无对应的资源ID)
     *
     * @param string $ipId
     */
    public function setIPId($ipId)
    {
        $this->set("IPId", $ipId);
    }

    /**
     * IP: IP地址
     *
     * @return string|null
     */
    public function getIP()
    {
        return $this->get("IP");
    }

    /**
     * IP: IP地址
     *
     * @param string $ip
     */
    public function setIP($ip)
    {
        $this->set("IP", $ip);
    }

    /**
     * Bandwidth: IP对应的带宽, 单位: Mb (内网IP不显示带宽信息)
     *
     * @return integer|null
     */
    public function getBandwidth()
    {
        return $this->get("Bandwidth");
    }

    /**
     * Bandwidth: IP对应的带宽, 单位: Mb (内网IP不显示带宽信息)
     *
     * @param int $bandwidth
     */
    public function setBandwidth($bandwidth)
    {
        $this->set("Bandwidth", $bandwidth);
    }

    /**
     * Default: 是否默认的弹性网卡的信息。true: 是默认弹性网卡；其他值：不是。
     *
     * @return string|null
     */
    public function getDefault()
    {
        return $this->get("Default");
    }

    /**
     * Default: 是否默认的弹性网卡的信息。true: 是默认弹性网卡；其他值：不是。
     *
     * @param string $default
     */
    public function setDefault($default)
    {
        $this->set("Default", $default);
    }
}
