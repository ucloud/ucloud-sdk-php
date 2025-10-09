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
namespace UCloud\ULB\Params;

use UCloud\Core\Request\Request;

class CreateRuleParamRuleActions extends Request
{
    

    /**
     * Type: 动作类型。限定枚举值："Forward"、"InsertHeader"、"Cors"、"FixedResponse"、"RemoveHeader"。只会处理 Type 对应的结构体。
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 动作类型。限定枚举值："Forward"、"InsertHeader"、"Cors"、"FixedResponse"、"RemoveHeader"。只会处理 Type 对应的结构体。
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * ForwardConfig:
     *
     * @return CreateRuleParamRuleActionsForwardConfig|null
     */
    public function getForwardConfig()
    {
        return new CreateRuleParamRuleActionsForwardConfig($this->get("ForwardConfig"));
    }

    /**
     * ForwardConfig:
     *
     * @param CreateRuleParamRuleActionsForwardConfig $forwardConfig
     */
    public function setForwardConfig(array $forwardConfig)
    {
        $this->set("ForwardConfig", $forwardConfig->getAll());
    }

    /**
     * Order: 转发规则动作执行的顺序，取值为1~1000，按值从小到大执行动作。值不能为空，不能重复。Forward、FixedResponse 类型的动作不判断 Order，最后一个执行
     *
     * @return integer|null
     */
    public function getOrder()
    {
        return $this->get("Order");
    }

    /**
     * Order: 转发规则动作执行的顺序，取值为1~1000，按值从小到大执行动作。值不能为空，不能重复。Forward、FixedResponse 类型的动作不判断 Order，最后一个执行
     *
     * @param int $order
     */
    public function setOrder($order)
    {
        $this->set("Order", $order);
    }

    /**
     * InsertHeaderConfig:
     *
     * @return CreateRuleParamRuleActionsInsertHeaderConfig|null
     */
    public function getInsertHeaderConfig()
    {
        return new CreateRuleParamRuleActionsInsertHeaderConfig($this->get("InsertHeaderConfig"));
    }

    /**
     * InsertHeaderConfig:
     *
     * @param CreateRuleParamRuleActionsInsertHeaderConfig $insertHeaderConfig
     */
    public function setInsertHeaderConfig(array $insertHeaderConfig)
    {
        $this->set("InsertHeaderConfig", $insertHeaderConfig->getAll());
    }

    /**
     * RemoveHeaderConfig:
     *
     * @return CreateRuleParamRuleActionsRemoveHeaderConfig|null
     */
    public function getRemoveHeaderConfig()
    {
        return new CreateRuleParamRuleActionsRemoveHeaderConfig($this->get("RemoveHeaderConfig"));
    }

    /**
     * RemoveHeaderConfig:
     *
     * @param CreateRuleParamRuleActionsRemoveHeaderConfig $removeHeaderConfig
     */
    public function setRemoveHeaderConfig(array $removeHeaderConfig)
    {
        $this->set("RemoveHeaderConfig", $removeHeaderConfig->getAll());
    }

    /**
     * CorsConfig:
     *
     * @return CreateRuleParamRuleActionsCorsConfig|null
     */
    public function getCorsConfig()
    {
        return new CreateRuleParamRuleActionsCorsConfig($this->get("CorsConfig"));
    }

    /**
     * CorsConfig:
     *
     * @param CreateRuleParamRuleActionsCorsConfig $corsConfig
     */
    public function setCorsConfig(array $corsConfig)
    {
        $this->set("CorsConfig", $corsConfig->getAll());
    }

    /**
     * FixedResponseConfig:
     *
     * @return CreateRuleParamRuleActionsFixedResponseConfig|null
     */
    public function getFixedResponseConfig()
    {
        return new CreateRuleParamRuleActionsFixedResponseConfig($this->get("FixedResponseConfig"));
    }

    /**
     * FixedResponseConfig:
     *
     * @param CreateRuleParamRuleActionsFixedResponseConfig $fixedResponseConfig
     */
    public function setFixedResponseConfig(array $fixedResponseConfig)
    {
        $this->set("FixedResponseConfig", $fixedResponseConfig->getAll());
    }
}
