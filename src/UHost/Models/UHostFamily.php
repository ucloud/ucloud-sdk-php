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
namespace UCloud\UHost\Models;

use UCloud\Core\Response\Response;

class UHostFamily extends Response
{
    

    /**
     * Name: 规格族
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 规格族
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * CpuFrequency: CPU频率信息
     *
     * @return string|null
     */
    public function getCpuFrequency()
    {
        return $this->get("CpuFrequency");
    }

    /**
     * CpuFrequency: CPU频率信息
     *
     * @param string $cpuFrequency
     */
    public function setCpuFrequency($cpuFrequency)
    {
        $this->set("CpuFrequency", $cpuFrequency);
    }

    /**
     * CpuPlatforms: CPU平台信息
     *
     * @return CpuPlatformWithModels[]|null
     */
    public function getCpuPlatforms()
    {
        $items = $this->get("CpuPlatforms");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CpuPlatformWithModels($item));
        }
        return $result;
    }

    /**
     * CpuPlatforms: CPU平台信息
     *
     * @param CpuPlatformWithModels[] $cpuPlatforms
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
