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
namespace UCloud\UHadoop\Models;

use UCloud\Core\Response\Response;

class UseCases extends Response
{
    

    /**
     * Case: 集群种类
     *
     * @return string|null
     */
    public function getCase()
    {
        return $this->get("Case");
    }

    /**
     * Case: 集群种类
     *
     * @param string $case
     */
    public function setCase($case)
    {
        $this->set("Case", $case);
    }

    /**
     * MustHas: 依赖的组件
     *
     * @return string|null
     */
    public function getMustHas()
    {
        return $this->get("MustHas");
    }

    /**
     * MustHas: 依赖的组件
     *
     * @param string $mustHas
     */
    public function setMustHas($mustHas)
    {
        $this->set("MustHas", $mustHas);
    }

    /**
     * AppVersion: 组件版本
     *
     * @return string|null
     */
    public function getAppVersion()
    {
        return $this->get("AppVersion");
    }

    /**
     * AppVersion: 组件版本
     *
     * @param string $appVersion
     */
    public function setAppVersion($appVersion)
    {
        $this->set("AppVersion", $appVersion);
    }
}
