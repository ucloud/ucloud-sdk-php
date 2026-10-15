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

class GetUK8SIpamdStatusResponse extends Response
{
    

    /**
     * Installed: 是否已经安装
     *
     * @return boolean|null
     */
    public function getInstalled()
    {
        return $this->get("Installed");
    }

    /**
     * Installed: 是否已经安装
     *
     * @param boolean $installed
     */
    public function setInstalled($installed)
    {
        $this->set("Installed", $installed);
    }

    /**
     * Version: 当前ipamd的版本
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->get("Version");
    }

    /**
     * Version: 当前ipamd的版本
     *
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->set("Version", $version);
    }

    /**
     * LastVersion: ipamd可用最新版本
     *
     * @return string|null
     */
    public function getLastVersion()
    {
        return $this->get("LastVersion");
    }

    /**
     * LastVersion: ipamd可用最新版本
     *
     * @param string $lastVersion
     */
    public function setLastVersion($lastVersion)
    {
        $this->set("LastVersion", $lastVersion);
    }

    /**
     * ReleaseDate: 最新版本的发布日期
     *
     * @return integer|null
     */
    public function getReleaseDate()
    {
        return $this->get("ReleaseDate");
    }

    /**
     * ReleaseDate: 最新版本的发布日期
     *
     * @param int $releaseDate
     */
    public function setReleaseDate($releaseDate)
    {
        $this->set("ReleaseDate", $releaseDate);
    }

    /**
     * OpenTime: 当前 ipamd 插件的创建时间，Unix 时间戳，单位秒。
     *
     * @return integer|null
     */
    public function getOpenTime()
    {
        return $this->get("OpenTime");
    }

    /**
     * OpenTime: 当前 ipamd 插件的创建时间，Unix 时间戳，单位秒。
     *
     * @param int $openTime
     */
    public function setOpenTime($openTime)
    {
        $this->set("OpenTime", $openTime);
    }

    /**
     * CNIInitMode: 当前 CNI 初始化模式。
     *
     * @return string|null
     */
    public function getCNIInitMode()
    {
        return $this->get("CNIInitMode");
    }

    /**
     * CNIInitMode: 当前 CNI 初始化模式。
     *
     * @param string $cniInitMode
     */
    public function setCNIInitMode($cniInitMode)
    {
        $this->set("CNIInitMode", $cniInitMode);
    }

    /**
     * CNIInitVersionReady: 当前已安装的 ipamd 版本是否支持切换 CNI 初始化模式。
     *
     * @return boolean|null
     */
    public function getCNIInitVersionReady()
    {
        return $this->get("CNIInitVersionReady");
    }

    /**
     * CNIInitVersionReady: 当前已安装的 ipamd 版本是否支持切换 CNI 初始化模式。
     *
     * @param boolean $cniInitVersionReady
     */
    public function setCNIInitVersionReady($cniInitVersionReady)
    {
        $this->set("CNIInitVersionReady", $cniInitVersionReady);
    }
}
