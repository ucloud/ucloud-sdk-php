<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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
namespace UCloud\PathX\Apis;

use UCloud\Core\Response\Response;
use UCloud\PathX\Models\UGAAInfo;
use UCloud\PathX\Models\UPathSet;
use UCloud\PathX\Models\UGAATask;
use UCloud\PathX\Models\UGAL4Forwarder;
use UCloud\PathX\Models\UGAL7Forwarder;
use UCloud\PathX\Models\OutPublicIpInfo;

class DescribeUGAInstanceResponse extends Response
{
    

    /**
     * UGAList: 全球加速实例信息列表
     *
     * @return UGAAInfo[]|null
     */
    public function getUGAList()
    {
        $items = $this->get("UGAList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UGAAInfo($item));
        }
        return $result;
    }

    /**
     * UGAList: 全球加速实例信息列表
     *
     * @param UGAAInfo[] $ugaList
     */
    public function setUGAList(array $ugaList)
    {
        $result = [];
        foreach ($ugaList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * TotalCount: 符合条件的总数
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 符合条件的总数
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }
}
