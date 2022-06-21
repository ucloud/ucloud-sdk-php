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

class CpuPlatforms extends Response
{
    

    /**
     * Intel: 返回Intel的CPU平台信息，例如：Intel: ['Intel/CascadeLake','Intel/CascadelakeR','Intel/IceLake']
     *
     * @return string[]|null
     */
    public function getIntel()
    {
        return $this->get("Intel");
    }

    /**
     * Intel: 返回Intel的CPU平台信息，例如：Intel: ['Intel/CascadeLake','Intel/CascadelakeR','Intel/IceLake']
     *
     * @param string[] $intel
     */
    public function setIntel(array $intel)
    {
        $this->set("Intel", $intel);
    }

    /**
     * Amd: 返回AMD的CPU平台信息，例如：AMD: ['Amd/Epyc2']
     *
     * @return string[]|null
     */
    public function getAmd()
    {
        return $this->get("Amd");
    }

    /**
     * Amd: 返回AMD的CPU平台信息，例如：AMD: ['Amd/Epyc2']
     *
     * @param string[] $amd
     */
    public function setAmd(array $amd)
    {
        $this->set("Amd", $amd);
    }

    /**
     * Ampere: 返回Arm的CPU平台信息，例如：Ampere: ['Ampere/Altra']
     *
     * @return string[]|null
     */
    public function getAmpere()
    {
        return $this->get("Ampere");
    }

    /**
     * Ampere: 返回Arm的CPU平台信息，例如：Ampere: ['Ampere/Altra']
     *
     * @param string[] $ampere
     */
    public function setAmpere(array $ampere)
    {
        $this->set("Ampere", $ampere);
    }


}
