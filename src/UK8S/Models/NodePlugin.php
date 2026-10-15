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

class NodePlugin extends Response
{
    

    /**
     * Name: 插件名称, 如 CNI, CSI, Flexv, CloudProvider
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 插件名称, 如 CNI, CSI, Flexv, CloudProvider
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * PluginInfoSet: 各个节点插件信息, 参照NodePluginInfo
     *
     * @return NodePluginInfo[]|null
     */
    public function getPluginInfoSet()
    {
        $items = $this->get("PluginInfoSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new NodePluginInfo($item));
        }
        return $result;
    }

    /**
     * PluginInfoSet: 各个节点插件信息, 参照NodePluginInfo
     *
     * @param NodePluginInfo[] $pluginInfoSet
     */
    public function setPluginInfoSet(array $pluginInfoSet)
    {
        $result = [];
        foreach ($pluginInfoSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * AvailableVersion: 最新插件版本
     *
     * @return string|null
     */
    public function getAvailableVersion()
    {
        return $this->get("AvailableVersion");
    }

    /**
     * AvailableVersion: 最新插件版本
     *
     * @param string $availableVersion
     */
    public function setAvailableVersion($availableVersion)
    {
        $this->set("AvailableVersion", $availableVersion);
    }

    /**
     * ReleaseTime: 最新插件发布时间
     *
     * @return string|null
     */
    public function getReleaseTime()
    {
        return $this->get("ReleaseTime");
    }

    /**
     * ReleaseTime: 最新插件发布时间
     *
     * @param string $releaseTime
     */
    public function setReleaseTime($releaseTime)
    {
        $this->set("ReleaseTime", $releaseTime);
    }

    /**
     * ManageEnabled: 插件管理是否开启
     *
     * @return boolean|null
     */
    public function getManageEnabled()
    {
        return $this->get("ManageEnabled");
    }

    /**
     * ManageEnabled: 插件管理是否开启
     *
     * @param boolean $manageEnabled
     */
    public function setManageEnabled($manageEnabled)
    {
        $this->set("ManageEnabled", $manageEnabled);
    }
}
