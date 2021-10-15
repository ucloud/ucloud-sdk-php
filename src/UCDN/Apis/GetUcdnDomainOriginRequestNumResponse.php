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
namespace UCloud\UCDN\Apis;

use UCloud\Core\Response\Response;
use UCloud\UCDN\Models\RequestInfoV2;

class GetUcdnDomainOriginRequestNumResponse extends Response
{
    

    /**
     * RequestList: 请求数实例表。
     *
     * @return RequestInfoV2[]|null
     */
    public function getRequestList()
    {
        $items = $this->get("RequestList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new RequestInfoV2($item));
        }
        return $result;
    }

    /**
     * RequestList: 请求数实例表。
     *
     * @param RequestInfoV2[] $requestList
     */
    public function setRequestList(array $requestList)
    {
        $result = [];
        foreach ($requestList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
