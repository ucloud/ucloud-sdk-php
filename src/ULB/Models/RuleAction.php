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

class RuleAction extends Response
{
    

    /**
     * Type: 动作类型。限定枚举值：Forward、"InsertHeader"、"Cors"、"FixedResponse"、"RemoveHeader"
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 动作类型。限定枚举值：Forward、"InsertHeader"、"Cors"、"FixedResponse"、"RemoveHeader"
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * ForwardConfig: 转发服务节点相关配置，对应 type 值: "Forward"。具体结构详见 ForwardConfigSet
     *
     * @return ForwardConfigSet|null
     */
    public function getForwardConfig()
    {
        return new ForwardConfigSet($this->get("ForwardConfig"));
    }

    /**
     * ForwardConfig: 转发服务节点相关配置，对应 type 值: "Forward"。具体结构详见 ForwardConfigSet
     *
     * @param ForwardConfigSet $forwardConfig
     */
    public function setForwardConfig(array $forwardConfig)
    {
        $this->set("ForwardConfig", $forwardConfig->getAll());
    }

    /**
     * FixedResponseConfig: 静态返回相关配置，对应 type 值: "FixedResponse"。具体结构详见 FixedResponseConfigSet
     *
     * @return FixedResponseConfigSet|null
     */
    public function getFixedResponseConfig()
    {
        return new FixedResponseConfigSet($this->get("FixedResponseConfig"));
    }

    /**
     * FixedResponseConfig: 静态返回相关配置，对应 type 值: "FixedResponse"。具体结构详见 FixedResponseConfigSet
     *
     * @param FixedResponseConfigSet $fixedResponseConfig
     */
    public function setFixedResponseConfig(array $fixedResponseConfig)
    {
        $this->set("FixedResponseConfig", $fixedResponseConfig->getAll());
    }

    /**
     * InsertHeaderConfig: 插入 header 相关配置，对应 type 值: "InsertHeader"。具体结构详见 InsertHeaderConfigSet
     *
     * @return InsertHeaderConfigSet|null
     */
    public function getInsertHeaderConfig()
    {
        return new InsertHeaderConfigSet($this->get("InsertHeaderConfig"));
    }

    /**
     * InsertHeaderConfig: 插入 header 相关配置，对应 type 值: "InsertHeader"。具体结构详见 InsertHeaderConfigSet
     *
     * @param InsertHeaderConfigSet $insertHeaderConfig
     */
    public function setInsertHeaderConfig(array $insertHeaderConfig)
    {
        $this->set("InsertHeaderConfig", $insertHeaderConfig->getAll());
    }

    /**
     * CorsConfig: 跨域相关配置，对应 type 值: "Cors"。具体结构详见 CorsConfigSet
     *
     * @return CorsConfigSet|null
     */
    public function getCorsConfig()
    {
        return new CorsConfigSet($this->get("CorsConfig"));
    }

    /**
     * CorsConfig: 跨域相关配置，对应 type 值: "Cors"。具体结构详见 CorsConfigSet
     *
     * @param CorsConfigSet $corsConfig
     */
    public function setCorsConfig(array $corsConfig)
    {
        $this->set("CorsConfig", $corsConfig->getAll());
    }

    /**
     * RemoveHeaderConfig: 删除 header 相关配置，对应 type 值: "RemoveHeader"。具体结构详见 RemoveHeaderConfigSet
     *
     * @return RemoveHeaderConfigSet|null
     */
    public function getRemoveHeaderConfig()
    {
        return new RemoveHeaderConfigSet($this->get("RemoveHeaderConfig"));
    }

    /**
     * RemoveHeaderConfig: 删除 header 相关配置，对应 type 值: "RemoveHeader"。具体结构详见 RemoveHeaderConfigSet
     *
     * @param RemoveHeaderConfigSet $removeHeaderConfig
     */
    public function setRemoveHeaderConfig(array $removeHeaderConfig)
    {
        $this->set("RemoveHeaderConfig", $removeHeaderConfig->getAll());
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
}
