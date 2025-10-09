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
use UCloud\ULB\Params\UpdateRuleAttributeParamRuleConditions;
use UCloud\ULB\Params\UpdateRuleAttributeParamRuleConditionsHostConfig;
use UCloud\ULB\Params\UpdateRuleAttributeParamRuleConditionsPathConfig;
use UCloud\ULB\Params\UpdateRuleAttributeParamRuleActions;
use UCloud\ULB\Params\UpdateRuleAttributeParamRuleActionsForwardConfig;
use UCloud\ULB\Params\UpdateRuleAttributeParamRuleActionsForwardConfigTargets;
use UCloud\ULB\Params\UpdateRuleAttributeParamRuleActionsInsertHeaderConfig;
use UCloud\ULB\Params\UpdateRuleAttributeParamRuleActionsRemoveHeaderConfig;
use UCloud\ULB\Params\UpdateRuleAttributeParamRuleActionsCorsConfig;
use UCloud\ULB\Params\UpdateRuleAttributeParamRuleActionsFixedResponseConfig;

class UpdateRuleAttributeRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateRuleAttribute"]);
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
     * LoadBalancerId: 负载均衡实例的ID
     *
     * @return string|null
     */
    public function getLoadBalancerId()
    {
        return $this->get("LoadBalancerId");
    }

    /**
     * LoadBalancerId: 负载均衡实例的ID
     *
     * @param string $loadBalancerId
     */
    public function setLoadBalancerId($loadBalancerId)
    {
        $this->set("LoadBalancerId", $loadBalancerId);
    }

    /**
     * ListenerId: 监听器的ID
     *
     * @return string|null
     */
    public function getListenerId()
    {
        return $this->get("ListenerId");
    }

    /**
     * ListenerId: 监听器的ID
     *
     * @param string $listenerId
     */
    public function setListenerId($listenerId)
    {
        $this->set("ListenerId", $listenerId);
    }

    /**
     * RuleId: 转发规则的ID
     *
     * @return string|null
     */
    public function getRuleId()
    {
        return $this->get("RuleId");
    }

    /**
     * RuleId: 转发规则的ID
     *
     * @param string $ruleId
     */
    public function setRuleId($ruleId)
    {
        $this->set("RuleId", $ruleId);
    }

    /**
     * RuleConditions:
     *
     * @return UpdateRuleAttributeParamRuleConditions[]|null
     */
    public function getRuleConditions()
    {
        $items = $this->get("RuleConditions");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UpdateRuleAttributeParamRuleConditions($item));
        }
        return $result;
    }

    /**
     * RuleConditions:
     *
     * @param UpdateRuleAttributeParamRuleConditions[] $ruleConditions
     */
    public function setRuleConditions(array $ruleConditions)
    {
        $result = [];
        foreach ($ruleConditions as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * RuleActions:
     *
     * @return UpdateRuleAttributeParamRuleActions[]|null
     */
    public function getRuleActions()
    {
        $items = $this->get("RuleActions");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UpdateRuleAttributeParamRuleActions($item));
        }
        return $result;
    }

    /**
     * RuleActions:
     *
     * @param UpdateRuleAttributeParamRuleActions[] $ruleActions
     */
    public function setRuleActions(array $ruleActions)
    {
        $result = [];
        foreach ($ruleActions as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Pass: 当转发的服务节点为空时，规则是否忽略。默认转发规则不可更改
     *
     * @return boolean|null
     */
    public function getPass()
    {
        return $this->get("Pass");
    }

    /**
     * Pass: 当转发的服务节点为空时，规则是否忽略。默认转发规则不可更改
     *
     * @param boolean $pass
     */
    public function setPass($pass)
    {
        $this->set("Pass", $pass);
    }
}
