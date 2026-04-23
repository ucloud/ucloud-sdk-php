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
namespace UCloud\UClickhouse\Models;

use UCloud\Core\Response\Response;

class GetCreateUClickhouseClusterOptionResponseData extends Response
{
    

    /**
     * ClickhouseVersions: 支持的CK版本
     *
     * @return ClickhouseVersion[]|null
     */
    public function getClickhouseVersions()
    {
        $items = $this->get("ClickhouseVersions");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ClickhouseVersion($item));
        }
        return $result;
    }

    /**
     * ClickhouseVersions: 支持的CK版本
     *
     * @param ClickhouseVersion[] $clickhouseVersions
     */
    public function setClickhouseVersions(array $clickhouseVersions)
    {
        $result = [];
        foreach ($clickhouseVersions as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * ClickhouseMachineTypes: 支持的CK机型
     *
     * @return ClickhouseMachineType[]|null
     */
    public function getClickhouseMachineTypes()
    {
        $items = $this->get("ClickhouseMachineTypes");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ClickhouseMachineType($item));
        }
        return $result;
    }

    /**
     * ClickhouseMachineTypes: 支持的CK机型
     *
     * @param ClickhouseMachineType[] $clickhouseMachineTypes
     */
    public function setClickhouseMachineTypes(array $clickhouseMachineTypes)
    {
        $result = [];
        foreach ($clickhouseMachineTypes as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * MaxNodeCount: 实例可创建的最大节点数量
     *
     * @return integer|null
     */
    public function getMaxNodeCount()
    {
        return $this->get("MaxNodeCount");
    }

    /**
     * MaxNodeCount: 实例可创建的最大节点数量
     *
     * @param int $maxNodeCount
     */
    public function setMaxNodeCount($maxNodeCount)
    {
        $this->set("MaxNodeCount", $maxNodeCount);
    }

    /**
     * ZookeeperMachineTypes: 支持的Zookeeper机型
     *
     * @return ClickhouseMachineType[]|null
     */
    public function getZookeeperMachineTypes()
    {
        $items = $this->get("ZookeeperMachineTypes");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ClickhouseMachineType($item));
        }
        return $result;
    }

    /**
     * ZookeeperMachineTypes: 支持的Zookeeper机型
     *
     * @param ClickhouseMachineType[] $zookeeperMachineTypes
     */
    public function setZookeeperMachineTypes(array $zookeeperMachineTypes)
    {
        $result = [];
        foreach ($zookeeperMachineTypes as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
