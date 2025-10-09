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

class CreateRuleParamRuleConditions extends Request
{
    

    /**
     * Type: 匹配条件类型。限定枚举值："Host"/"Path"
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 匹配条件类型。限定枚举值："Host"/"Path"
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * HostConfig:
     *
     * @return CreateRuleParamRuleConditionsHostConfig|null
     */
    public function getHostConfig()
    {
        return new CreateRuleParamRuleConditionsHostConfig($this->get("HostConfig"));
    }

    /**
     * HostConfig:
     *
     * @param CreateRuleParamRuleConditionsHostConfig $hostConfig
     */
    public function setHostConfig(array $hostConfig)
    {
        $this->set("HostConfig", $hostConfig->getAll());
    }

    /**
     * PathConfig:
     *
     * @return CreateRuleParamRuleConditionsPathConfig|null
     */
    public function getPathConfig()
    {
        return new CreateRuleParamRuleConditionsPathConfig($this->get("PathConfig"));
    }

    /**
     * PathConfig:
     *
     * @param CreateRuleParamRuleConditionsPathConfig $pathConfig
     */
    public function setPathConfig(array $pathConfig)
    {
        $this->set("PathConfig", $pathConfig->getAll());
    }
}
