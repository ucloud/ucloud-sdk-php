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
namespace UCloud\VPC\Models;

use UCloud\Core\Response\Response;

class NATGWPolicyDataSet extends Response {
    

    /**
     * NATGWId: NAT网关Id
     *
     * @return string|null
     */
    public function getNATGWId(): string {
        return $this->get("NATGWId");
    }

    /**
     * NATGWId: NAT网关Id
     *
     * @param string $natgwId
     */
    public function setNATGWId(string $natgwId) {
        $this->set("NATGWId", $natgwId);
    }

    /**
     * PolicyId: 转发策略Id
     *
     * @return string|null
     */
    public function getPolicyId(): string {
        return $this->get("PolicyId");
    }

    /**
     * PolicyId: 转发策略Id
     *
     * @param string $policyId
     */
    public function setPolicyId(string $policyId) {
        $this->set("PolicyId", $policyId);
    }

    /**
     * Protocol: 协议类型
     *
     * @return string|null
     */
    public function getProtocol(): string {
        return $this->get("Protocol");
    }

    /**
     * Protocol: 协议类型
     *
     * @param string $protocol
     */
    public function setProtocol(string $protocol) {
        $this->set("Protocol", $protocol);
    }

    /**
     * SrcEIP: 端口转发前端EIP
     *
     * @return string|null
     */
    public function getSrcEIP(): string {
        return $this->get("SrcEIP");
    }

    /**
     * SrcEIP: 端口转发前端EIP
     *
     * @param string $srcEIP
     */
    public function setSrcEIP(string $srcEIP) {
        $this->set("SrcEIP", $srcEIP);
    }

    /**
     * SrcEIPId: 端口转发前端EIP Id
     *
     * @return string|null
     */
    public function getSrcEIPId(): string {
        return $this->get("SrcEIPId");
    }

    /**
     * SrcEIPId: 端口转发前端EIP Id
     *
     * @param string $srcEIPId
     */
    public function setSrcEIPId(string $srcEIPId) {
        $this->set("SrcEIPId", $srcEIPId);
    }

    /**
     * SrcPort: 源端口
     *
     * @return string|null
     */
    public function getSrcPort(): string {
        return $this->get("SrcPort");
    }

    /**
     * SrcPort: 源端口
     *
     * @param string $srcPort
     */
    public function setSrcPort(string $srcPort) {
        $this->set("SrcPort", $srcPort);
    }

    /**
     * DstIP: 目的地址
     *
     * @return string|null
     */
    public function getDstIP(): string {
        return $this->get("DstIP");
    }

    /**
     * DstIP: 目的地址
     *
     * @param string $dstIP
     */
    public function setDstIP(string $dstIP) {
        $this->set("DstIP", $dstIP);
    }

    /**
     * DstPort: 目的端口
     *
     * @return string|null
     */
    public function getDstPort(): string {
        return $this->get("DstPort");
    }

    /**
     * DstPort: 目的端口
     *
     * @param string $dstPort
     */
    public function setDstPort(string $dstPort) {
        $this->set("DstPort", $dstPort);
    }

    /**
     * PolicyName: 转发策略名称
     *
     * @return string|null
     */
    public function getPolicyName(): string {
        return $this->get("PolicyName");
    }

    /**
     * PolicyName: 转发策略名称
     *
     * @param string $policyName
     */
    public function setPolicyName(string $policyName) {
        $this->set("PolicyName", $policyName);
    }


}
