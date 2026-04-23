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
namespace UCloud\UHadoop\Apis;

use UCloud\Core\Response\Response;
use UCloud\UHadoop\Models\InstanceType;
use UCloud\UHadoop\Models\DiskSet;

class GetUHadoopNodeTypeResponse extends Response
{
    

    /**
     * InstanceTypeSet: 类型信息
     *
     * @return InstanceType[]|null
     */
    public function getInstanceTypeSet()
    {
        $items = $this->get("InstanceTypeSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new InstanceType($item));
        }
        return $result;
    }

    /**
     * InstanceTypeSet: 类型信息
     *
     * @param InstanceType[] $instanceTypeSet
     */
    public function setInstanceTypeSet(array $instanceTypeSet)
    {
        $result = [];
        foreach ($instanceTypeSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * MetaDataUDBUsable: 当前可用区是否支持元数据库使用UDB
     *
     * @return boolean|null
     */
    public function getMetaDataUDBUsable()
    {
        return $this->get("MetaDataUDBUsable");
    }

    /**
     * MetaDataUDBUsable: 当前可用区是否支持元数据库使用UDB
     *
     * @param boolean $metaDataUDBUsable
     */
    public function setMetaDataUDBUsable($metaDataUDBUsable)
    {
        $this->set("MetaDataUDBUsable", $metaDataUDBUsable);
    }

    /**
     * HostTypeSupportNodeType: 机型可支持的节点类型
     *
     * @return string|null
     */
    public function getHostTypeSupportNodeType()
    {
        return $this->get("HostTypeSupportNodeType");
    }

    /**
     * HostTypeSupportNodeType: 机型可支持的节点类型
     *
     * @param string $hostTypeSupportNodeType
     */
    public function setHostTypeSupportNodeType($hostTypeSupportNodeType)
    {
        $this->set("HostTypeSupportNodeType", $hostTypeSupportNodeType);
    }
}
