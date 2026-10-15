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
use UCloud\UK8S\Models\NodePluginInfo;

class GetUK8SCNINodeInfoResponse extends Response
{
    

    /**
     * NodeInfoSet: 节点 CNI 信息列表
     *
     * @return NodePluginInfo[]|null
     */
    public function getNodeInfoSet()
    {
        $items = $this->get("NodeInfoSet");
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
     * NodeInfoSet: 节点 CNI 信息列表
     *
     * @param NodePluginInfo[] $nodeInfoSet
     */
    public function setNodeInfoSet(array $nodeInfoSet)
    {
        $result = [];
        foreach ($nodeInfoSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * DataSource: 数据来源：database 表示数据库记录，ipamd_http 表示通过 ipamd 实时查询。
     *
     * @return string|null
     */
    public function getDataSource()
    {
        return $this->get("DataSource");
    }

    /**
     * DataSource: 数据来源：database 表示数据库记录，ipamd_http 表示通过 ipamd 实时查询。
     *
     * @param string $dataSource
     */
    public function setDataSource($dataSource)
    {
        $this->set("DataSource", $dataSource);
    }

    /**
     * Partial: 是否存在部分节点实时查询失败
     *
     * @return boolean|null
     */
    public function getPartial()
    {
        return $this->get("Partial");
    }

    /**
     * Partial: 是否存在部分节点实时查询失败
     *
     * @param boolean $partial
     */
    public function setPartial($partial)
    {
        $this->set("Partial", $partial);
    }

    /**
     * HighestVersion: 节点中的最高有效 CNI 版本
     *
     * @return string|null
     */
    public function getHighestVersion()
    {
        return $this->get("HighestVersion");
    }

    /**
     * HighestVersion: 节点中的最高有效 CNI 版本
     *
     * @param string $highestVersion
     */
    public function setHighestVersion($highestVersion)
    {
        $this->set("HighestVersion", $highestVersion);
    }

    /**
     * AllNodesSynced: 是否所有节点实时查询成功且 CNI 版本一致。数据来源为 database 时返回 false。
     *
     * @return boolean|null
     */
    public function getAllNodesSynced()
    {
        return $this->get("AllNodesSynced");
    }

    /**
     * AllNodesSynced: 是否所有节点实时查询成功且 CNI 版本一致。数据来源为 database 时返回 false。
     *
     * @param boolean $allNodesSynced
     */
    public function setAllNodesSynced($allNodesSynced)
    {
        $this->set("AllNodesSynced", $allNodesSynced);
    }
}
