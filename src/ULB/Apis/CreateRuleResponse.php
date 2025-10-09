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

use UCloud\Core\Response\Response;

class CreateRuleResponse extends Response
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
}
