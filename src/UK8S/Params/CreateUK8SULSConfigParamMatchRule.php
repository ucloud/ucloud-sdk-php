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

class CreateUK8SULSConfigParamMatchRule extends Request
{
    

    /**
     * ContainerOperator: 容器名称匹配操作符。支持：in(包含)，notin(不包含)
     *
     * @return string|null
     */
    public function getContainerOperator()
    {
        return $this->get("ContainerOperator");
    }

    /**
     * ContainerOperator: 容器名称匹配操作符。支持：in(包含)，notin(不包含)
     *
     * @param string $containerOperator
     */
    public function setContainerOperator($containerOperator)
    {
        $this->set("ContainerOperator", $containerOperator);
    }

    /**
     * Container: 要匹配的容器名称，*表示所有容器，用逗号分隔
     *
     * @return string|null
     */
    public function getContainer()
    {
        return $this->get("Container");
    }

    /**
     * Container: 要匹配的容器名称，*表示所有容器，用逗号分隔
     *
     * @param string $container
     */
    public function setContainer($container)
    {
        $this->set("Container", $container);
    }

    /**
     * Workloads:
     *
     * @return CreateUK8SULSConfigParamMatchRuleWorkloads[]|null
     */
    public function getWorkloads()
    {
        $items = $this->get("Workloads");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CreateUK8SULSConfigParamMatchRuleWorkloads($item));
        }
        return $result;
    }

    /**
     * Workloads:
     *
     * @param CreateUK8SULSConfigParamMatchRuleWorkloads[] $workloads
     */
    public function setWorkloads(array $workloads)
    {
        $result = [];
        foreach ($workloads as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * PodLabels:
     *
     * @return CreateUK8SULSConfigParamMatchRulePodLabels|null
     */
    public function getPodLabels()
    {
        return new CreateUK8SULSConfigParamMatchRulePodLabels($this->get("PodLabels"));
    }

    /**
     * PodLabels:
     *
     * @param CreateUK8SULSConfigParamMatchRulePodLabels $podLabels
     */
    public function setPodLabels(array $podLabels)
    {
        $this->set("PodLabels", $podLabels->getAll());
    }
}
