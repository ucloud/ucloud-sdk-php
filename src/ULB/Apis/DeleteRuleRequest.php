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
namespace UCloud\ULB\Apis;

use UCloud\Core\Request\Request;

class DeleteRuleRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DeleteRule"]);
        $this->markRequired("Region");
        $this->markRequired("ProjectId");
        $this->markRequired("LoadBalancerId");
        $this->markRequired("ListenerId");
        $this->markRequired("RuleId");
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
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * LoadBalancerId: 应用型负载均衡实例的ID
     *
     * @return string|null
     */
    public function getLoadBalancerId()
    {
        return $this->get("LoadBalancerId");
    }

    /**
     * LoadBalancerId: 应用型负载均衡实例的ID
     *
     * @param string $loadBalancerId
     */
    public function setLoadBalancerId($loadBalancerId)
    {
        $this->set("LoadBalancerId", $loadBalancerId);
    }

    /**
     * ListenerId: 应用型负载均衡监听器的ID
     *
     * @return string|null
     */
    public function getListenerId()
    {
        return $this->get("ListenerId");
    }

    /**
     * ListenerId: 应用型负载均衡监听器的ID
     *
     * @param string $listenerId
     */
    public function setListenerId($listenerId)
    {
        $this->set("ListenerId", $listenerId);
    }

    /**
     * RuleId: 应用型负载均衡的转发规则的ID
     *
     * @return string|null
     */
    public function getRuleId()
    {
        return $this->get("RuleId");
    }

    /**
     * RuleId: 应用型负载均衡的转发规则的ID
     *
     * @param string $ruleId
     */
    public function setRuleId($ruleId)
    {
        $this->set("RuleId", $ruleId);
    }
}
