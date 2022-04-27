<?php

/**
 * Copyright 2022 UCloud Technology Co., Ltd.
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

namespace UCloud\VPC\Apis;

use UCloud\Core\Response\Response;

use UCloud\VPC\Models\VIPDetailSet;

class DescribeVIPResponse extends Response
{

    /**
     * VIPSet: 内网VIP详情，请见VIPDetailSet
     *
     * @return VIPDetailSetModel[]|null
     */
    public function getVIPSet()
    {
        $items = $this->get("VIPSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new VIPDetailSetModel($item));
        }
        return $result;
    }

    /**
     * VIPSet: 内网VIP详情，请见VIPDetailSet
     *
     * @param VIPDetailSetModel[] $vipSet
     */
    public function setVIPSet(array $vipSet)
    {
        $result = [];
        foreach ($vipSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
    /**
     * DataSet: 内网VIP地址列表
     *
     * @return string[]|null
     */
    public function getDataSet()
    {
        return $this->get("DataSet");
    }

    /**
     * DataSet: 内网VIP地址列表
     *
     * @param string[] $dataSet
     */
    public function setDataSet(array $dataSet)
    {
        $this->set("DataSet", $dataSet);
    }
    /**
     * TotalCount: vip数量
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: vip数量
     *
     * @param int $totalCount
     */
    public function setTotalCount(int $totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }
}
