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

use UCloud\UEC\Models\IDCCutInfo;
use UCloud\UEC\Models\ResourceSet;

class GetUEcIDCCutInfoResponse extends Response
{

    /**
     * IDCCutInfo: 机房割接信息
     *
     * @return IDCCutInfoModel[]|null
     */
    public function getIDCCutInfo()
    {
        $items = $this->get("IDCCutInfo");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new IDCCutInfoModel($item));
        }
        return $result;
    }

    /**
     * IDCCutInfo: 机房割接信息
     *
     * @param IDCCutInfoModel[] $idcCutInfo
     */
    public function setIDCCutInfo(array $idcCutInfo)
    {
        $result = [];
        foreach ($idcCutInfo as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
    /**
     * TotalCount: 满足条件的机房总数
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 满足条件的机房总数
     *
     * @param int $totalCount
     */
    public function setTotalCount(int $totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }
}
