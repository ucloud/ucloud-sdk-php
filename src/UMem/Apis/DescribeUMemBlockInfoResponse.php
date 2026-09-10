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
namespace UCloud\UMem\Apis;

use UCloud\Core\Response\Response;
use UCloud\UMem\Models\UMemBlockInfo;

class DescribeUMemBlockInfoResponse extends Response
{
    

    /**
     * DataSet: 分布式redis 分片信息
     *
     * @return UMemBlockInfo[]|null
     */
    public function getDataSet()
    {
        $items = $this->get("DataSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UMemBlockInfo($item));
        }
        return $result;
    }

    /**
     * DataSet: 分布式redis 分片信息
     *
     * @param UMemBlockInfo[] $dataSet
     */
    public function setDataSet(array $dataSet)
    {
        $result = [];
        foreach ($dataSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * ReadMode: 集群读写分离策略。 枚举值[ "Custom": 用户自定义节点权重， "Uniform": 包括主节点在内的所有节点平均读请求， "ReadOnly": 读请求均分至只读节点]
     *
     * @return string|null
     */
    public function getReadMode()
    {
        return $this->get("ReadMode");
    }

    /**
     * ReadMode: 集群读写分离策略。 枚举值[ "Custom": 用户自定义节点权重， "Uniform": 包括主节点在内的所有节点平均读请求， "ReadOnly": 读请求均分至只读节点]
     *
     * @param string $readMode
     */
    public function setReadMode($readMode)
    {
        $this->set("ReadMode", $readMode);
    }
}
