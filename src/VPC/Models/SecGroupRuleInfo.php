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
namespace UCloud\VPC\Models;

use UCloud\Core\Response\Response;

class SecGroupRuleInfo extends Response
{
    

    /**
     * RuleId: 规则ID
     *
     * @return string|null
     */
    public function getRuleId()
    {
        return $this->get("RuleId");
    }

    /**
     * RuleId: 规则ID
     *
     * @param string $ruleId
     */
    public function setRuleId($ruleId)
    {
        $this->set("RuleId", $ruleId);
    }

    /**
     * Direction: "Ingress/Egress"，入站规则/出站规则
     *
     * @return string|null
     */
    public function getDirection()
    {
        return $this->get("Direction");
    }

    /**
     * Direction: "Ingress/Egress"，入站规则/出站规则
     *
     * @param string $direction
     */
    public function setDirection($direction)
    {
        $this->set("Direction", $direction);
    }

    /**
     * IPRange: 地址
     *
     * @return string|null
     */
    public function getIPRange()
    {
        return $this->get("IPRange");
    }

    /**
     * IPRange: 地址
     *
     * @param string $ipRange
     */
    public function setIPRange($ipRange)
    {
        $this->set("IPRange", $ipRange);
    }

    /**
     * Priority: 优先级
     *
     * @return integer|null
     */
    public function getPriority()
    {
        return $this->get("Priority");
    }

    /**
     * Priority: 优先级
     *
     * @param int $priority
     */
    public function setPriority($priority)
    {
        $this->set("Priority", $priority);
    }

    /**
     * ProtocolType: 协议类型
     *
     * @return string|null
     */
    public function getProtocolType()
    {
        return $this->get("ProtocolType");
    }

    /**
     * ProtocolType: 协议类型
     *
     * @param string $protocolType
     */
    public function setProtocolType($protocolType)
    {
        $this->set("ProtocolType", $protocolType);
    }

    /**
     * DstPort: 目标端口
     *
     * @return string|null
     */
    public function getDstPort()
    {
        return $this->get("DstPort");
    }

    /**
     * DstPort: 目标端口
     *
     * @param string $dstPort
     */
    public function setDstPort($dstPort)
    {
        $this->set("DstPort", $dstPort);
    }

    /**
     * RuleAction: 匹配策略
     *
     * @return string|null
     */
    public function getRuleAction()
    {
        return $this->get("RuleAction");
    }

    /**
     * RuleAction: 匹配策略
     *
     * @param string $ruleAction
     */
    public function setRuleAction($ruleAction)
    {
        $this->set("RuleAction", $ruleAction);
    }

    /**
     * Remark: 安全组规则备注
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 安全组规则备注
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * IPVersion: IP 版本，如 "IPv4"。支持 IPv6 后废弃
     *
     * @return string|null
     */
    public function getIPVersion()
    {
        return $this->get("IPVersion");
    }

    /**
     * IPVersion: IP 版本，如 "IPv4"。支持 IPv6 后废弃
     *
     * @param string $ipVersion
     */
    public function setIPVersion($ipVersion)
    {
        $this->set("IPVersion", $ipVersion);
    }
}
