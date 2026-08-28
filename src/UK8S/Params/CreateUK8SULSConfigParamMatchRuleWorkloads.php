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
namespace UCloud\UK8S\Params;

use UCloud\Core\Request\Request;

class CreateUK8SULSConfigParamMatchRuleWorkloads extends Request
{
    

    /**
     * Namespace: 按工作负载匹配时，工作负载所在的命名空间。
     *
     * @return string|null
     */
    public function getNamespace()
    {
        return $this->get("Namespace");
    }

    /**
     * Namespace: 按工作负载匹配时，工作负载所在的命名空间。
     *
     * @param string $namespace
     */
    public function setNamespace($namespace)
    {
        $this->set("Namespace", $namespace);
    }

    /**
     * Type: 按工作负载匹配时，工作负载的类型，例如 deployment, statefulset, daemonset,job, cronjob。
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 按工作负载匹配时，工作负载的类型，例如 deployment, statefulset, daemonset,job, cronjob。
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * Name: 按工作负载匹配时，工作负载的名称。
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 按工作负载匹配时，工作负载的名称。
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }
}
