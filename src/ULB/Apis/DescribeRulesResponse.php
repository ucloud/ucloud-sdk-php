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
use UCloud\ULB\Models\Rule;
use UCloud\ULB\Models\RuleCondition;
use UCloud\ULB\Models\HostConfigSet;
use UCloud\ULB\Models\PathConfigSet;
use UCloud\ULB\Models\RuleAction;
use UCloud\ULB\Models\ForwardConfigSet;
use UCloud\ULB\Models\ForwardTargetSet;
use UCloud\ULB\Models\FixedResponseConfigSet;
use UCloud\ULB\Models\InsertHeaderConfigSet;
use UCloud\ULB\Models\CorsConfigSet;
use UCloud\ULB\Models\RemoveHeaderConfigSet;

class DescribeRulesResponse extends Response
{
    

    /**
     * Rules: 转发规则信息
     *
     * @return Rule[]|null
     */
    public function getRules()
    {
        $items = $this->get("Rules");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new Rule($item));
        }
        return $result;
    }

    /**
     * Rules: 转发规则信息
     *
     * @param Rule[] $rules
     */
    public function setRules(array $rules)
    {
        $result = [];
        foreach ($rules as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
