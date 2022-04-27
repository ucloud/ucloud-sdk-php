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

namespace UCloud\UEC\Apis;

use UCloud\Core\Response\Response;

use UCloud\UEC\Models\ImageList;
use UCloud\UEC\Models\DockerInfo;
use UCloud\UEC\Models\CfgDictList;
use UCloud\UEC\Models\EnvList;
use UCloud\UEC\Models\IpList;
use UCloud\UEC\Models\HolderList;
use UCloud\UEC\Models\StorVolumeInfo;

class DescribeUEcHolderResponse extends Response
{

    /**
     * HolderList: 容器组列表（详情参考HolderList）
     *
     * @return HolderListModel[]|null
     */
    public function getHolderList()
    {
        $items = $this->get("HolderList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new HolderListModel($item));
        }
        return $result;
    }

    /**
     * HolderList: 容器组列表（详情参考HolderList）
     *
     * @param HolderListModel[] $holderList
     */
    public function setHolderList(array $holderList)
    {
        $result = [];
        foreach ($holderList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
    /**
     * TotalCount: 满足条件的容器组总数
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 满足条件的容器组总数
     *
     * @param int $totalCount
     */
    public function setTotalCount(int $totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }
}
