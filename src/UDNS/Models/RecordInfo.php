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
namespace UCloud\UDNS\Models;

use UCloud\Core\Response\Response;

class RecordInfo extends Response
{
    

    /**
     * RecordId: 域名记录资源ID
     *
     * @return string|null
     */
    public function getRecordId()
    {
        return $this->get("RecordId");
    }

    /**
     * RecordId: 域名记录资源ID
     *
     * @param string $recordId
     */
    public function setRecordId($recordId)
    {
        $this->set("RecordId", $recordId);
    }

    /**
     * Name: 主机记录
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 主机记录
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Type: 记录类型
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 记录类型
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * ValueSet: 数值组
     *
     * @return ValueSet[]|null
     */
    public function getValueSet()
    {
        $items = $this->get("ValueSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ValueSet($item));
        }
        return $result;
    }

    /**
     * ValueSet: 数值组
     *
     * @param ValueSet[] $valueSet
     */
    public function setValueSet(array $valueSet)
    {
        $result = [];
        foreach ($valueSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * ValueType: 记录策略，标准或随机应答
     *
     * @return string|null
     */
    public function getValueType()
    {
        return $this->get("ValueType");
    }

    /**
     * ValueType: 记录策略，标准或随机应答
     *
     * @param string $valueType
     */
    public function setValueType($valueType)
    {
        $this->set("ValueType", $valueType);
    }

    /**
     * TTL: TTL值，单位为秒
     *
     * @return integer|null
     */
    public function getTTL()
    {
        return $this->get("TTL");
    }

    /**
     * TTL: TTL值，单位为秒
     *
     * @param int $ttl
     */
    public function setTTL($ttl)
    {
        $this->set("TTL", $ttl);
    }

    /**
     * Remark: 记录备注信息
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 记录备注信息
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }
}
