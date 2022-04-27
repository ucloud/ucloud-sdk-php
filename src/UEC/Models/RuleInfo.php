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

use UCloud\UEC\Models\FirewallInfo;
use UCloud\UEC\Models\DescribeUEcFirewallResponse;

class RuleInfo extends Response
{

    /**
     * ProtocolType: 协议，可选值：TCP，UDP，ICMP
     *
     * @return string|null
     */
    public function getProtocolType()
    {
        return $this->get("ProtocolType");
    }

    /**
     * ProtocolType: 协议，可选值：TCP，UDP，ICMP
     *
     * @param string $protocolType
     */
    public function setProtocolType(string $protocolType)
    {
        $this->set("ProtocolType", $protocolType);
    }
    /**
     * Port: 端口，范围用"-"符号分隔，如：1-65535
     *
     * @return string|null
     */
    public function getPort()
    {
        return $this->get("Port");
    }

    /**
     * Port: 端口，范围用"-"符号分隔，如：1-65535
     *
     * @param string $port
     */
    public function setPort(string $port)
    {
        $this->set("Port", $port);
    }
    /**
     * SrcIp: 源ip
     *
     * @return string|null
     */
    public function getSrcIp()
    {
        return $this->get("SrcIp");
    }

    /**
     * SrcIp: 源ip
     *
     * @param string $srcIp
     */
    public function setSrcIp(string $srcIp)
    {
        $this->set("SrcIp", $srcIp);
    }
    /**
     * Action: ACCEPT（接受）和DROP（拒绝）
     *
     * @return string|null
     */
    public function getAction()
    {
        return $this->get("Action");
    }

    /**
     * Action: ACCEPT（接受）和DROP（拒绝）
     *
     * @param string $action
     */
    public function setAction(string $action)
    {
        $this->set("Action", $action);
    }
    /**
     * Priority: 优先级：HIGH（高），MEDIUM（中），LOW（低）
     *
     * @return string|null
     */
    public function getPriority()
    {
        return $this->get("Priority");
    }

    /**
     * Priority: 优先级：HIGH（高），MEDIUM（中），LOW（低）
     *
     * @param string $priority
     */
    public function setPriority(string $priority)
    {
        $this->set("Priority", $priority);
    }
    /**
     * Remark: 备注
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 备注
     *
     * @param string $remark
     */
    public function setRemark(string $remark)
    {
        $this->set("Remark", $remark);
    }
}
