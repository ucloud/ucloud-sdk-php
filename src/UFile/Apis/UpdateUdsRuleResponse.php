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
namespace UCloud\UFile\Apis;

use UCloud\Core\Response\Response;

class UpdateUdsRuleResponse extends Response
{
    

    /**
     * RuleId: 返回规则的规则ID
     *
     * @return string|null
     */
    public function getRuleId()
    {
        return $this->get("RuleId");
    }

    /**
     * RuleId: 返回规则的规则ID
     *
     * @param string $ruleId
     */
    public function setRuleId($ruleId)
    {
        $this->set("RuleId", $ruleId);
    }

    /**
     * Mesage: 该请求的消息成功或者失败的描述
     *
     * @return string|null
     */
    public function getMesage()
    {
        return $this->get("Mesage");
    }

    /**
     * Mesage: 该请求的消息成功或者失败的描述
     *
     * @param string $mesage
     */
    public function setMesage($mesage)
    {
        $this->set("Mesage", $mesage);
    }
}
