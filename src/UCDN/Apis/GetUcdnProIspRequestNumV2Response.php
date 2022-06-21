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
namespace UCloud\UCDN\Apis;

use UCloud\Core\Response\Response;
use UCloud\UCDN\Models\ProIspRequestNumSetV2;
use UCloud\UCDN\Models\ProIspRequestListV2;

class GetUcdnProIspRequestNumV2Response extends Response
{
    

    /**
     * RequestNumSet: 按省份的请求数实例表。具体参考下面RequestList
     *
     * @return ProIspRequestNumSetV2[]|null
     */
    public function getRequestNumSet()
    {
        $items = $this->get("RequestNumSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ProIspRequestNumSetV2($item));
        }
        return $result;
    }

    /**
     * RequestNumSet: 按省份的请求数实例表。具体参考下面RequestList
     *
     * @param ProIspRequestNumSetV2[] $requestNumSet
     */
    public function setRequestNumSet(array $requestNumSet)
    {
        $result = [];
        foreach ($requestNumSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }


}
