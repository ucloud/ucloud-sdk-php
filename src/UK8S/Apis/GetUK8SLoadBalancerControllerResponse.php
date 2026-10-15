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
namespace UCloud\UK8S\Apis;

use UCloud\Core\Response\Response;

class GetUK8SLoadBalancerControllerResponse extends Response
{
    

    /**
     * LastVersion: 最新可用版本。
     *
     * @return string|null
     */
    public function getLastVersion()
    {
        return $this->get("LastVersion");
    }

    /**
     * LastVersion: 最新可用版本。
     *
     * @param string $lastVersion
     */
    public function setLastVersion($lastVersion)
    {
        $this->set("LastVersion", $lastVersion);
    }

    /**
     * Version: 当前安装版本。
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->get("Version");
    }

    /**
     * Version: 当前安装版本。
     *
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->set("Version", $version);
    }

    /**
     * Installed: 是否安装
     *
     * @return boolean|null
     */
    public function getInstalled()
    {
        return $this->get("Installed");
    }

    /**
     * Installed: 是否安装
     *
     * @param boolean $installed
     */
    public function setInstalled($installed)
    {
        $this->set("Installed", $installed);
    }

    /**
     * CreateTime: 安装时间，Unix 时间戳，单位秒。
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 安装时间，Unix 时间戳，单位秒。
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * Status: 运行状态：unknown、running、notReady。
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 运行状态：unknown、running、notReady。
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }
}
