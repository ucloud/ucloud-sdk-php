<?php
/**
 * Copyright 2026 UCloud Technology Co., Ltd.
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

use UCloud\Core\Response\Response;

class CopySecGroupResponse extends Response
{
    

    /**
     * SecGroupId: 复制得到的安全组ID
     *
     * @return string|null
     */
    public function getSecGroupId()
    {
        return $this->get("SecGroupId");
    }

    /**
     * SecGroupId: 复制得到的安全组ID
     *
     * @param string $secGroupId
     */
    public function setSecGroupId($secGroupId)
    {
        $this->set("SecGroupId", $secGroupId);
    }

    /**
     * RuleID: 复制得到的规则ID
     *
     * @return string[]|null
     */
    public function getRuleID()
    {
        return $this->get("RuleID");
    }

    /**
     * RuleID: 复制得到的规则ID
     *
     * @param string[] $ruleID
     */
    public function setRuleID(array $ruleID)
    {
        $this->set("RuleID", $ruleID);
    }
}
