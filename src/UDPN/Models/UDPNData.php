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
namespace UCloud\UDPN\Models;

use UCloud\Core\Response\Response;

class UDPNData extends Response {
    

    /**
     * UDPNId: UDPN 资源短 ID
     *
     * @return string|null
     */
    public function getUDPNId(): string {
        return $this->get("UDPNId");
    }

    /**
     * UDPNId: UDPN 资源短 ID
     *
     * @param string $udpnId
     */
    public function setUDPNId(string $udpnId) {
        $this->set("UDPNId", $udpnId);
    }

    /**
     * Peer1: 可用区域 1
     *
     * @return string|null
     */
    public function getPeer1(): string {
        return $this->get("Peer1");
    }

    /**
     * Peer1: 可用区域 1
     *
     * @param string $peer1
     */
    public function setPeer1(string $peer1) {
        $this->set("Peer1", $peer1);
    }

    /**
     * Peer2: 可用区域 2
     *
     * @return string|null
     */
    public function getPeer2(): string {
        return $this->get("Peer2");
    }

    /**
     * Peer2: 可用区域 2
     *
     * @param string $peer2
     */
    public function setPeer2(string $peer2) {
        $this->set("Peer2", $peer2);
    }

    /**
     * ChargeType: 计费类型
     *
     * @return string|null
     */
    public function getChargeType(): string {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费类型
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType) {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Bandwidth: 带宽
     *
     * @return int|null
     */
    public function getBandwidth(): int {
        return $this->get("Bandwidth");
    }

    /**
     * Bandwidth: 带宽
     *
     * @param int $bandwidth
     */
    public function setBandwidth(int $bandwidth) {
        $this->set("Bandwidth", $bandwidth);
    }

    /**
     * CreateTime: unix 时间戳 创建时间
     *
     * @return int|null
     */
    public function getCreateTime(): int {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: unix 时间戳 创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime) {
        $this->set("CreateTime", $createTime);
    }

    /**
     * ExpireTime: unix 时间戳 到期时间
     *
     * @return int|null
     */
    public function getExpireTime(): int {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: unix 时间戳 到期时间
     *
     * @param int $expireTime
     */
    public function setExpireTime(int $expireTime) {
        $this->set("ExpireTime", $expireTime);
    }


}
