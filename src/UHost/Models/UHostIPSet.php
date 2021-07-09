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
namespace UCloud\UHost\Models;

use UCloud\Core\Response\Response;

class UHostIPSet extends Response {
    

    /**
     * IPMode: IPv4/IPv6；
     *
     * @return string|null
     */
    public function getIPMode(): string {
        return $this->get("IPMode");
    }

    /**
     * IPMode: IPv4/IPv6；
     *
     * @param string $ipMode
     */
    public function setIPMode(string $ipMode) {
        $this->set("IPMode", $ipMode);
    }

    /**
     * Default: 内网 Private 类型下，表示是否为默认网卡。true: 是默认网卡；其他值：不是。
     *
     * @return string|null
     */
    public function getDefault(): string {
        return $this->get("Default");
    }

    /**
     * Default: 内网 Private 类型下，表示是否为默认网卡。true: 是默认网卡；其他值：不是。
     *
     * @param string $default
     */
    public function setDefault(string $default) {
        $this->set("Default", $default);
    }

    /**
     * Mac: 内网 Private 类型下，当前网卡的Mac。
     *
     * @return string|null
     */
    public function getMac(): string {
        return $this->get("Mac");
    }

    /**
     * Mac: 内网 Private 类型下，当前网卡的Mac。
     *
     * @param string $mac
     */
    public function setMac(string $mac) {
        $this->set("Mac", $mac);
    }

    /**
     * Weight: 当前EIP的权重。权重最大的为当前的出口IP。
     *
     * @return int|null
     */
    public function getWeight(): int {
        return $this->get("Weight");
    }

    /**
     * Weight: 当前EIP的权重。权重最大的为当前的出口IP。
     *
     * @param int $weight
     */
    public function setWeight(int $weight) {
        $this->set("Weight", $weight);
    }

    /**
     * Type: 国际: Internation，BGP: Bgp，内网: Private
     *
     * @return string|null
     */
    public function getType(): string {
        return $this->get("Type");
    }

    /**
     * Type: 国际: Internation，BGP: Bgp，内网: Private
     *
     * @param string $type
     */
    public function setType(string $type) {
        $this->set("Type", $type);
    }

    /**
     * IPId: 外网IP资源ID 。(内网IP无对应的资源ID)
     *
     * @return string|null
     */
    public function getIPId(): string {
        return $this->get("IPId");
    }

    /**
     * IPId: 外网IP资源ID 。(内网IP无对应的资源ID)
     *
     * @param string $ipId
     */
    public function setIPId(string $ipId) {
        $this->set("IPId", $ipId);
    }

    /**
     * IP: IP地址
     *
     * @return string|null
     */
    public function getIP(): string {
        return $this->get("IP");
    }

    /**
     * IP: IP地址
     *
     * @param string $ip
     */
    public function setIP(string $ip) {
        $this->set("IP", $ip);
    }

    /**
     * Bandwidth: IP对应的带宽, 单位: Mb  (内网IP不显示带宽信息)
     *
     * @return int|null
     */
    public function getBandwidth(): int {
        return $this->get("Bandwidth");
    }

    /**
     * Bandwidth: IP对应的带宽, 单位: Mb  (内网IP不显示带宽信息)
     *
     * @param int $bandwidth
     */
    public function setBandwidth(int $bandwidth) {
        $this->set("Bandwidth", $bandwidth);
    }

    /**
     * VPCId: IP地址对应的VPC ID。（北京一不支持，字段返回为空）
     *
     * @return string|null
     */
    public function getVPCId(): string {
        return $this->get("VPCId");
    }

    /**
     * VPCId: IP地址对应的VPC ID。（北京一不支持，字段返回为空）
     *
     * @param string $vpcId
     */
    public function setVPCId(string $vpcId) {
        $this->set("VPCId", $vpcId);
    }

    /**
     * SubnetId: IP地址对应的子网 ID。（北京一不支持，字段返回为空）
     *
     * @return string|null
     */
    public function getSubnetId(): string {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: IP地址对应的子网 ID。（北京一不支持，字段返回为空）
     *
     * @param string $subnetId
     */
    public function setSubnetId(string $subnetId) {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * NetworkInterfaceId: 弹性网卡为默认网卡时，返回对应的 ID 值
     *
     * @return string|null
     */
    public function getNetworkInterfaceId(): string {
        return $this->get("NetworkInterfaceId");
    }

    /**
     * NetworkInterfaceId: 弹性网卡为默认网卡时，返回对应的 ID 值
     *
     * @param string $networkInterfaceId
     */
    public function setNetworkInterfaceId(string $networkInterfaceId) {
        $this->set("NetworkInterfaceId", $networkInterfaceId);
    }


}
