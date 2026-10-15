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

class CloudProviderInfo extends Response
{
    

    /**
     * Name: 插件名称。
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 插件名称。
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * AvailableVersion: 最新可用插件版本。
     *
     * @return string|null
     */
    public function getAvailableVersion()
    {
        return $this->get("AvailableVersion");
    }

    /**
     * AvailableVersion: 最新可用插件版本。
     *
     * @param string $availableVersion
     */
    public function setAvailableVersion($availableVersion)
    {
        $this->set("AvailableVersion", $availableVersion);
    }

    /**
     * ReleaseTime: 最新可用版本的发布时间。
     *
     * @return string|null
     */
    public function getReleaseTime()
    {
        return $this->get("ReleaseTime");
    }

    /**
     * ReleaseTime: 最新可用版本的发布时间。
     *
     * @param string $releaseTime
     */
    public function setReleaseTime($releaseTime)
    {
        $this->set("ReleaseTime", $releaseTime);
    }

    /**
     * ManageEnabled: 是否开启插件托管。
     *
     * @return boolean|null
     */
    public function getManageEnabled()
    {
        return $this->get("ManageEnabled");
    }

    /**
     * ManageEnabled: 是否开启插件托管。
     *
     * @param boolean $manageEnabled
     */
    public function setManageEnabled($manageEnabled)
    {
        $this->set("ManageEnabled", $manageEnabled);
    }

    /**
     * Version: 当前插件版本。
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->get("Version");
    }

    /**
     * Version: 当前插件版本。
     *
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->set("Version", $version);
    }

    /**
     * Status: 插件状态。
     *
     * @return integer|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 插件状态。
     *
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * UpdateTime: 更新时间，Unix 时间戳，单位秒。
     *
     * @return integer|null
     */
    public function getUpdateTime()
    {
        return $this->get("UpdateTime");
    }

    /**
     * UpdateTime: 更新时间，Unix 时间戳，单位秒。
     *
     * @param int $updateTime
     */
    public function setUpdateTime($updateTime)
    {
        $this->set("UpdateTime", $updateTime);
    }

    /**
     * OperationResult: 上次插件操作结果。
     *
     * @return integer|null
     */
    public function getOperationResult()
    {
        return $this->get("OperationResult");
    }

    /**
     * OperationResult: 上次插件操作结果。
     *
     * @param int $operationResult
     */
    public function setOperationResult($operationResult)
    {
        $this->set("OperationResult", $operationResult);
    }
}
