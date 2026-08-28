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
namespace UCloud\UK8S\Models;

use UCloud\Core\Response\Response;

class ULSPodLabelsMatch extends Response
{
    

    /**
     * NamespaceOperator: 命名空间名称的匹配操作符。可选值: in, notin。
     *
     * @return string|null
     */
    public function getNamespaceOperator()
    {
        return $this->get("NamespaceOperator");
    }

    /**
     * NamespaceOperator: 命名空间名称的匹配操作符。可选值: in, notin。
     *
     * @param string $namespaceOperator
     */
    public function setNamespaceOperator($namespaceOperator)
    {
        $this->set("NamespaceOperator", $namespaceOperator);
    }

    /**
     * Namespace: 要匹配的命名空间。namespaceOperator 存在时必需。
     *
     * @return string|null
     */
    public function getNamespace()
    {
        return $this->get("Namespace");
    }

    /**
     * Namespace: 要匹配的命名空间。namespaceOperator 存在时必需。
     *
     * @param string $namespace
     */
    public function setNamespace($namespace)
    {
        $this->set("Namespace", $namespace);
    }

    /**
     * Labels: 一个标签选择器数组，用于定义匹配的标签条件。
     *
     * @return ULSLabels[]|null
     */
    public function getLabels()
    {
        $items = $this->get("Labels");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ULSLabels($item));
        }
        return $result;
    }

    /**
     * Labels: 一个标签选择器数组，用于定义匹配的标签条件。
     *
     * @param ULSLabels[] $labels
     */
    public function setLabels(array $labels)
    {
        $result = [];
        foreach ($labels as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
