<?php
/**
 * Copyright 2022 UCloud Technology Co., Ltd.
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
namespace UCloud\UHost\Models;

use UCloud\Core\Response\Response;

class Features extends Response
{
    

    /**
     * Name: 可支持的特性名称。目前支持的特性网络增强|NetCapability、热升级|Hotplug
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 可支持的特性名称。目前支持的特性网络增强|NetCapability、热升级|Hotplug
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Modes: 可以提供的模式类别
     *
     * @return FeatureModes[]|null
     */
    public function getModes()
    {
        $items = $this->get("Modes");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new FeatureModes($item));
        }
        return $result;
    }

    /**
     * Modes: 可以提供的模式类别
     *
     * @param FeatureModes[] $modes
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
