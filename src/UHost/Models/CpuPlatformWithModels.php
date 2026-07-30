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

class CpuPlatformWithModels extends Response
{
    

    /**
     * Name: CPU平台
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: CPU平台
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * CpuModels: CPU Model列表
     *
     * @return string[]|null
     */
    public function getCpuModels()
    {
        return $this->get("CpuModels");
    }

    /**
     * CpuModels: CPU Model列表
     *
     * @param string[] $cpuModels
     */
    public function setCpuModels(array $cpuModels)
    {
        $this->set("CpuModels", $cpuModels);
    }

    /**
     * CpuFrequency: CPU频率
     *
     * @return string|null
     */
    public function getCpuFrequency()
    {
        return $this->get("CpuFrequency");
    }

    /**
     * CpuFrequency: CPU频率
     *
     * @param string $cpuFrequency
     */
    public function setCpuFrequency($cpuFrequency)
    {
        $this->set("CpuFrequency", $cpuFrequency);
    }
}
