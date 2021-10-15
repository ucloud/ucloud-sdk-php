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
use UCloud\UCDN\Models\HttpCodeV2Detail;

class GetUcdnDomainOriginHttpCodeDetailResponse extends Response
{
    

    /**
     * HttpCodeV2Detail: 状态码详情
     *
     * @return HttpCodeV2Detail[]|null
     */
    public function getHttpCodeV2Detail()
    {
        $items = $this->get("HttpCodeV2Detail");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new HttpCodeV2Detail($item));
        }
        return $result;
    }

    /**
     * HttpCodeV2Detail: 状态码详情
     *
     * @param HttpCodeV2Detail[] $httpCodeV2Detail
     */
    public function setHttpCodeV2Detail(array $httpCodeV2Detail)
    {
        $result = [];
        foreach ($httpCodeV2Detail as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
