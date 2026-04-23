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
namespace UCloud\UES\Models;

use UCloud\Core\Response\Response;

class AppVersion extends Response
{
    

    /**
     * AppName: 应用名称，默认值为elasticsearch
     *
     * @return string|null
     */
    public function getAppName()
    {
        return $this->get("AppName");
    }

    /**
     * AppName: 应用名称，默认值为elasticsearch
     *
     * @param string $appName
     */
    public function setAppName($appName)
    {
        $this->set("AppName", $appName);
    }

    /**
     * AppVersion: 应用版本号
     *
     * @return string|null
     */
    public function getAppVersion()
    {
        return $this->get("AppVersion");
    }

    /**
     * AppVersion: 应用版本号
     *
     * @param string $appVersion
     */
    public function setAppVersion($appVersion)
    {
        $this->set("AppVersion", $appVersion);
    }

    /**
     * IsMultiZone: 是否支持多区部署，默认为false
     *
     * @return boolean|null
     */
    public function getIsMultiZone()
    {
        return $this->get("IsMultiZone");
    }

    /**
     * IsMultiZone: 是否支持多区部署，默认为false
     *
     * @param boolean $isMultiZone
     */
    public function setIsMultiZone($isMultiZone)
    {
        $this->set("IsMultiZone", $isMultiZone);
    }
}
