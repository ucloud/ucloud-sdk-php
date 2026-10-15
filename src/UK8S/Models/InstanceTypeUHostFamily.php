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

class InstanceTypeUHostFamily extends Response
{
    

    /**
     * Name: 规格族名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 规格族名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * CpuFrequency: CPU 频率
     *
     * @return string|null
     */
    public function getCpuFrequency()
    {
        return $this->get("CpuFrequency");
    }

    /**
     * CpuFrequency: CPU 频率
     *
     * @param string $cpuFrequency
     */
    public function setCpuFrequency($cpuFrequency)
    {
        $this->set("CpuFrequency", $cpuFrequency);
    }

    /**
     * CpuPlatforms: 支持的 CPU 平台
     *
     * @return InstanceTypeCpuPlatform[]|null
     */
    public function getCpuPlatforms()
    {
        $items = $this->get("CpuPlatforms");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new InstanceTypeCpuPlatform($item));
        }
        return $result;
    }

    /**
     * CpuPlatforms: 支持的 CPU 平台
     *
     * @param InstanceTypeCpuPlatform[] $cpuPlatforms
     */
    public function setCpuPlatforms(array $cpuPlatforms)
    {
        $result = [];
        foreach ($cpuPlatforms as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
