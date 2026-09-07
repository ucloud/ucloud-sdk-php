<?php
/**
 * Copyright 2026 UCloud Technology Co., Ltd.
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
namespace UCloud\VPC\Params;

use UCloud\Core\Request\Request;

class CreateSecGroupRuleParamRule extends Request
{
    

    /**
     * Direction:  "Ingress/Egress"，入站规则/出站规则
     *
     * @return string|null
     */
    public function getDirection()
    {
        return $this->get("Direction");
    }

    /**
     * Direction:  "Ingress/Egress"，入站规则/出站规则
     *
     * @param string $direction
     */
    public function setDirection($direction)
    {
        $this->set("Direction", $direction);
    }

    /**
     * IPRange: IP 地址信息，逗号分隔。
     *
     * @return string|null
     */
    public function getIPRange()
    {
        return $this->get("IPRange");
    }

    /**
     * IPRange: IP 地址信息，逗号分隔。
     *
     * @param string $ipRange
     */
    public function setIPRange($ipRange)
    {
        $this->set("IPRange", $ipRange);
    }

    /**
     * Priority: 规则优先级。范围为 1~200
     *
     * @return integer|null
     */
    public function getPriority()
    {
        return $this->get("Priority");
    }

    /**
     * Priority: 规则优先级。范围为 1~200
     *
     * @param int $priority
     */
    public function setPriority($priority)
    {
        $this->set("Priority", $priority);
    }

    /**
     * ProtocolType:  协议类型。"TCP","UDP","ICMP","ICMPv6","ALL"
     *
     * @return string|null
     */
    public function getProtocolType()
    {
        return $this->get("ProtocolType");
    }

    /**
     * ProtocolType:  协议类型。"TCP","UDP","ICMP","ICMPv6","ALL"
     *
     * @param string $protocolType
     */
    public function setProtocolType($protocolType)
    {
        $this->set("ProtocolType", $protocolType);
    }

    /**
     * DstPort: 目的端口。逗号分隔，如 "80,443"、"443,2000-10000"
     *
     * @return string|null
     */
    public function getDstPort()
    {
        return $this->get("DstPort");
    }

    /**
     * DstPort: 目的端口。逗号分隔，如 "80,443"、"443,2000-10000"
     *
     * @param string $dstPort
     */
    public function setDstPort($dstPort)
    {
        $this->set("DstPort", $dstPort);
    }

    /**
     * RuleAction: 规则行为。"Accept" 或 "Drop"
     *
     * @return string|null
     */
    public function getRuleAction()
    {
        return $this->get("RuleAction");
    }

    /**
     * RuleAction: 规则行为。"Accept" 或 "Drop"
     *
     * @param string $ruleAction
     */
    public function setRuleAction($ruleAction)
    {
        $this->set("RuleAction", $ruleAction);
    }

    /**
     * Remark:  规则备注
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark:  规则备注
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * IPVersion: IP 版本，如 “IPv4”。支持 IPv6 后废弃
     *
     * @return string|null
     */
    public function getIPVersion()
    {
        return $this->get("IPVersion");
    }

    /**
     * IPVersion: IP 版本，如 “IPv4”。支持 IPv6 后废弃
     *
     * @param string $ipVersion
     */
    public function setIPVersion($ipVersion)
    {
        $this->set("IPVersion", $ipVersion);
    }
}
