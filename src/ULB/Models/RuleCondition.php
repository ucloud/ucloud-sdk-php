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

class RuleCondition extends Response
{
    

    /**
     * Type: 匹配条件类型。限定枚举值：Host，Path
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 匹配条件类型。限定枚举值：Host，Path
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * HostConfig: 域名相关配置。Type为Host时必填。具体结构详见 HostConfigSet
     *
     * @return HostConfigSet|null
     */
    public function getHostConfig()
    {
        return new HostConfigSet($this->get("HostConfig"));
    }

    /**
     * HostConfig: 域名相关配置。Type为Host时必填。具体结构详见 HostConfigSet
     *
     * @param HostConfigSet $hostConfig
     */
    public function setHostConfig(array $hostConfig)
    {
        $this->set("HostConfig", $hostConfig->getAll());
    }

    /**
     * PathConfig: 路径相关配置。Type为Path时必填。具体结构详见 PathConfigSet
     *
     * @return PathConfigSet|null
     */
    public function getPathConfig()
    {
        return new PathConfigSet($this->get("PathConfig"));
    }

    /**
     * PathConfig: 路径相关配置。Type为Path时必填。具体结构详见 PathConfigSet
     *
     * @param PathConfigSet $pathConfig
     */
    public function setPathConfig(array $pathConfig)
    {
        $this->set("PathConfig", $pathConfig->getAll());
    }
}
