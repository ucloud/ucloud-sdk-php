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
namespace UCloud\ULB\Models;

use UCloud\Core\Response\Response;

class Rule extends Response
{
    

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
     * RuleConditions: 转发规则匹配条件。具体结构详见 RuleCondition
     *
     * @return RuleCondition[]|null
     */
    public function getRuleConditions()
    {
        $items = $this->get("RuleConditions");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new RuleCondition($item));
        }
        return $result;
    }

    /**
     * RuleConditions: 转发规则匹配条件。具体结构详见 RuleCondition
     *
     * @param RuleCondition[] $ruleConditions
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
     * RuleActions: 转发动作。具体规则详见RuleAction
     *
     * @return RuleAction[]|null
     */
    public function getRuleActions()
    {
        $items = $this->get("RuleActions");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new RuleAction($item));
        }
        return $result;
    }

    /**
     * RuleActions: 转发动作。具体规则详见RuleAction
     *
     * @param RuleAction[] $ruleActions
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
     * IsDefault: 是否为默认转发规则
     *
     * @return boolean|null
     */
    public function getIsDefault()
    {
        return $this->get("IsDefault");
    }

    /**
     * IsDefault: 是否为默认转发规则
     *
     * @param boolean $isDefault
     */
    public function setIsDefault($isDefault)
    {
        $this->set("IsDefault", $isDefault);
    }

    /**
     * Pass: 当转发的服务节点为空时，规则是否忽略
     *
     * @return boolean|null
     */
    public function getPass()
    {
        return $this->get("Pass");
    }

    /**
     * Pass: 当转发的服务节点为空时，规则是否忽略
     *
     * @param boolean $pass
     */
    public function setPass($pass)
    {
        $this->set("Pass", $pass);
    }
}
