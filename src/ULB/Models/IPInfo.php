<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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
namespace UCloud\ULB\Models;

use UCloud\Core\Response\Response;

class IPInfo extends Response
{
    

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
     * Id: 唯一标识ID
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->get("Id");
    }

    /**
     * Id: 唯一标识ID
     *
     * @param string $id
     */
    public function setId($id)
    {
        $this->set("Id", $id);
    }

    /**
     * IPVersion: IP协议版本
     *
     * @return string|null
     */
    public function getIPVersion()
    {
        return $this->get("IPVersion");
    }

    /**
     * IPVersion: IP协议版本
     *
     * @param string $ipVersion
     */
    public function setIPVersion($ipVersion)
    {
        $this->set("IPVersion", $ipVersion);
    }

    /**
     * OperatorName: 外网IP的运营商信息。枚举值为：Telecom -> 电信，Unicom -> 联通，International -> 国际IP，Bgp -> BGP，Duplet -> 双线（电信+联通双线路），BGPPro -> 精品BGP，China-mobile -> 中国移动，Anycast -> AnycastEIP
     *
     * @return string|null
     */
    public function getOperatorName()
    {
        return $this->get("OperatorName");
    }

    /**
     * OperatorName: 外网IP的运营商信息。枚举值为：Telecom -> 电信，Unicom -> 联通，International -> 国际IP，Bgp -> BGP，Duplet -> 双线（电信+联通双线路），BGPPro -> 精品BGP，China-mobile -> 中国移动，Anycast -> AnycastEIP
     *
     * @param string $operatorName
     */
    public function setOperatorName($operatorName)
    {
        $this->set("OperatorName", $operatorName);
    }

    /**
     * BandwidthType: 带宽类型。限定枚举值：1 -> 共享带宽，0 -> 普通带宽类型
     *
     * @return integer|null
     */
    public function getBandwidthType()
    {
        return $this->get("BandwidthType");
    }

    /**
     * BandwidthType: 带宽类型。限定枚举值：1 -> 共享带宽，0 -> 普通带宽类型
     *
     * @param int $bandwidthType
     */
    public function setBandwidthType($bandwidthType)
    {
        $this->set("BandwidthType", $bandwidthType);
    }

    /**
     * Bandwidth: 带宽值。单位M
     *
     * @return integer|null
     */
    public function getBandwidth()
    {
        return $this->get("Bandwidth");
    }

    /**
     * Bandwidth: 带宽值。单位M
     *
     * @param int $bandwidth
     */
    public function setBandwidth($bandwidth)
    {
        $this->set("Bandwidth", $bandwidth);
    }

    /**
     * AddressType: 网络模式。 限定枚举值：Internet -> 互联网，Intranet -> 内联网
     *
     * @return string|null
     */
    public function getAddressType()
    {
        return $this->get("AddressType");
    }

    /**
     * AddressType: 网络模式。 限定枚举值：Internet -> 互联网，Intranet -> 内联网
     *
     * @param string $addressType
     */
    public function setAddressType($addressType)
    {
        $this->set("AddressType", $addressType);
    }
}
