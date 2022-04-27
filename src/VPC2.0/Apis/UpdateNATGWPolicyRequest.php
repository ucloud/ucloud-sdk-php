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

namespace UCloud\VPC\Apis;

use UCloud\Core\Request\Request;

class UpdateNATGWPolicyRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateNATGWPolicy"]);
        $this->markRequired("Region");
        $this->markRequired("NATGWId");
        $this->markRequired("PolicyId");
        $this->markRequired("Protocol");
        $this->markRequired("SrcEIPId");
        $this->markRequired("SrcPort");
        $this->markRequired("DstIP");
        $this->markRequired("DstPort");
    }


    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion(string $region)
    {
        $this->set("Region", $region);
    }
    /**
     * ProjectId: 项目Id。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目Id。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }
    /**
     * NATGWId: NAT网关Id
     *
     * @return string|null
     */
    public function getNATGWId()
    {
        return $this->get("NATGWId");
    }

    /**
     * NATGWId: NAT网关Id
     *
     * @param string $natgwId
     */
    public function setNATGWId(string $natgwId)
    {
        $this->set("NATGWId", $natgwId);
    }
    /**
     * PolicyId: 转发策略Id
     *
     * @return string|null
     */
    public function getPolicyId()
    {
        return $this->get("PolicyId");
    }

    /**
     * PolicyId: 转发策略Id
     *
     * @param string $policyId
     */
    public function setPolicyId(string $policyId)
    {
        $this->set("PolicyId", $policyId);
    }
    /**
     * Protocol: 协议类型。枚举值为：TCP 、 UDP
     *
     * @return string|null
     */
    public function getProtocol()
    {
        return $this->get("Protocol");
    }

    /**
     * Protocol: 协议类型。枚举值为：TCP 、 UDP
     *
     * @param string $protocol
     */
    public function setProtocol(string $protocol)
    {
        $this->set("Protocol", $protocol);
    }
    /**
     * SrcEIPId: 源IP。填写对应的EIP Id
     *
     * @return string|null
     */
    public function getSrcEIPId()
    {
        return $this->get("SrcEIPId");
    }

    /**
     * SrcEIPId: 源IP。填写对应的EIP Id
     *
     * @param string $srcEIPId
     */
    public function setSrcEIPId(string $srcEIPId)
    {
        $this->set("SrcEIPId", $srcEIPId);
    }
    /**
     * SrcPort: 源端口。可填写固定端口，也可填写端口范围。支持的端口范围为1-6553
     *
     * @return string|null
     */
    public function getSrcPort()
    {
        return $this->get("SrcPort");
    }

    /**
     * SrcPort: 源端口。可填写固定端口，也可填写端口范围。支持的端口范围为1-6553
     *
     * @param string $srcPort
     */
    public function setSrcPort(string $srcPort)
    {
        $this->set("SrcPort", $srcPort);
    }
    /**
     * DstIP: 目标IP。填写对应的目标IP地址
     *
     * @return string|null
     */
    public function getDstIP()
    {
        return $this->get("DstIP");
    }

    /**
     * DstIP: 目标IP。填写对应的目标IP地址
     *
     * @param string $dstIP
     */
    public function setDstIP(string $dstIP)
    {
        $this->set("DstIP", $dstIP);
    }
    /**
     * DstPort: 目标端口。可填写固定端口，也可填写端口范围。支持的端口范围为1-65535
     *
     * @return string|null
     */
    public function getDstPort()
    {
        return $this->get("DstPort");
    }

    /**
     * DstPort: 目标端口。可填写固定端口，也可填写端口范围。支持的端口范围为1-65535
     *
     * @param string $dstPort
     */
    public function setDstPort(string $dstPort)
    {
        $this->set("DstPort", $dstPort);
    }
    /**
     * PolicyName: 转发策略名称。默认为空
     *
     * @return string|null
     */
    public function getPolicyName()
    {
        return $this->get("PolicyName");
    }

    /**
     * PolicyName: 转发策略名称。默认为空
     *
     * @param string $policyName
     */
    public function setPolicyName(string $policyName)
    {
        $this->set("PolicyName", $policyName);
    }
}
