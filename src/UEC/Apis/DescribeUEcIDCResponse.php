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

use UCloud\UEC\Models\IdcInfo;

class DescribeUEcIDCResponse extends Response
{

    /**
     * IdcList: 获取的机房信息，具体参考下面IdcInfo
     *
     * @return IdcInfoModel[]|null
     */
    public function getIdcList()
    {
        $items = $this->get("IdcList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new IdcInfoModel($item));
        }
        return $result;
    }

    /**
     * IdcList: 获取的机房信息，具体参考下面IdcInfo
     *
     * @param IdcInfoModel[] $idcList
     */
    public function setIdcList(array $idcList)
    {
        $result = [];
        foreach ($idcList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
