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

class AppConfigSet extends Response
{
    

    /**
     * AppName: 需要安装的应用如：Hive,HBase, Spark,Hue,Pig等其他组件
     *
     * @return string|null
     */
    public function getAppName()
    {
        return $this->get("AppName");
    }

    /**
     * AppName: 需要安装的应用如：Hive,HBase, Spark,Hue,Pig等其他组件
     *
     * @param string $appName
     */
    public function setAppName($appName)
    {
        $this->set("AppName", $appName);
    }

    /**
     * AppVersion: 应用的版本号(0.13.1,0.98.6 等等)
     *
     * @return string|null
     */
    public function getAppVersion()
    {
        return $this->get("AppVersion");
    }

    /**
     * AppVersion: 应用的版本号(0.13.1,0.98.6 等等)
     *
     * @param string $appVersion
     */
    public function setAppVersion($appVersion)
    {
        $this->set("AppVersion", $appVersion);
    }

    /**
     * AppStatus: 应用的状态(运行中)'Running'｜(已停止)'Stopped'｜(启动中)'Starting'｜(停止中)'Stopping'|(启动失败)'StartFailed'|(停止失败)'StopFailed'|(安装中)'Installing'|(安装失败)'InstallFailed'|(未安装)'NotInstalled',
     *
     * @return string|null
     */
    public function getAppStatus()
    {
        return $this->get("AppStatus");
    }

    /**
     * AppStatus: 应用的状态(运行中)'Running'｜(已停止)'Stopped'｜(启动中)'Starting'｜(停止中)'Stopping'|(启动失败)'StartFailed'|(停止失败)'StopFailed'|(安装中)'Installing'|(安装失败)'InstallFailed'|(未安装)'NotInstalled',
     *
     * @param string $appStatus
     */
    public function setAppStatus($appStatus)
    {
        $this->set("AppStatus", $appStatus);
    }
}
