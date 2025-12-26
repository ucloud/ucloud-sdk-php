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
namespace UCloud\UCompShare\Models;

use UCloud\Core\Response\Response;

class Software extends Response
{
    

    /**
     * Framework: 框架名称
     *
     * @return string|null
     */
    public function getFramework()
    {
        return $this->get("Framework");
    }

    /**
     * Framework: 框架名称
     *
     * @param string $framework
     */
    public function setFramework($framework)
    {
        $this->set("Framework", $framework);
    }

    /**
     * FrameworkVersion: 框架版本
     *
     * @return string|null
     */
    public function getFrameworkVersion()
    {
        return $this->get("FrameworkVersion");
    }

    /**
     * FrameworkVersion: 框架版本
     *
     * @param string $frameworkVersion
     */
    public function setFrameworkVersion($frameworkVersion)
    {
        $this->set("FrameworkVersion", $frameworkVersion);
    }

    /**
     * CUDAVersion: CUDA版本
     *
     * @return string|null
     */
    public function getCUDAVersion()
    {
        return $this->get("CUDAVersion");
    }

    /**
     * CUDAVersion: CUDA版本
     *
     * @param string $cudaVersion
     */
    public function setCUDAVersion($cudaVersion)
    {
        $this->set("CUDAVersion", $cudaVersion);
    }

    /**
     * Applications: 【array of string】应用列表
     *
     * @return string[]|null
     */
    public function getApplications()
    {
        return $this->get("Applications");
    }

    /**
     * Applications: 【array of string】应用列表
     *
     * @param string[] $applications
     */
    public function setApplications(array $applications)
    {
        $this->set("Applications", $applications);
    }
}
