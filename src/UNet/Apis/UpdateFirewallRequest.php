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
namespace UCloud\UNet\Apis;

use UCloud\Core\Request\Request;

class UpdateFirewallRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateFirewall"]);
        $this->markRequired("Region");
        $this->markRequired("FWId");
        $this->markRequired("Rule");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * FWId: 防火墙资源ID
     *
     * @return string|null
     */
    public function getFWId()
    {
        return $this->get("FWId");
    }

    /**
     * FWId: 防火墙资源ID
     *
     * @param string $fwId
     */
    public function setFWId($fwId)
    {
        $this->set("FWId", $fwId);
    }

    /**
     * Rule: 防火墙规则，例如：TCP|22|192.168.1.1/22|DROP|LOW|禁用22端口，第一个参数代表协议：第二个参数代表端口号，第三个参数为ip，第四个参数为ACCEPT（接受）和DROP（拒绝），第五个参数优先级：HIGH（高），MEDIUM（中），LOW（低），第六个参数为该条规则的自定义备注
     *
     * @return string[]|null
     */
    public function getRule()
    {
        return $this->get("Rule");
    }

    /**
     * Rule: 防火墙规则，例如：TCP|22|192.168.1.1/22|DROP|LOW|禁用22端口，第一个参数代表协议：第二个参数代表端口号，第三个参数为ip，第四个参数为ACCEPT（接受）和DROP（拒绝），第五个参数优先级：HIGH（高），MEDIUM（中），LOW（低），第六个参数为该条规则的自定义备注
     *
     * @param string[] $rule
     */
    public function setRule(array $rule)
    {
        $this->set("Rule", $rule);
    }


}
