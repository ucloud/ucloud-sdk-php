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

class InstanceTypeFeature extends Response
{
    

    /**
     * Name: 特性名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 特性名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Modes: 特性模式列表
     *
     * @return InstanceTypeFeatureMode[]|null
     */
    public function getModes()
    {
        $items = $this->get("Modes");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new InstanceTypeFeatureMode($item));
        }
        return $result;
    }

    /**
     * Modes: 特性模式列表
     *
     * @param InstanceTypeFeatureMode[] $modes
     */
    public function setModes(array $modes)
    {
        $result = [];
        foreach ($modes as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
