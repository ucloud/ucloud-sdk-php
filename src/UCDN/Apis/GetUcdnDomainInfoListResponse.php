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
use UCloud\UCDN\Models\DomainBaseInfo;

class GetUcdnDomainInfoListResponse extends Response
{
    

    /**
     * TotalCount: 账户下域名总个数
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 账户下域名总个数
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }

    /**
     * DomainInfoList: 域名基本信息
     *
     * @return DomainBaseInfo[]|null
     */
    public function getDomainInfoList()
    {
        $items = $this->get("DomainInfoList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new DomainBaseInfo($item));
        }
        return $result;
    }

    /**
     * DomainInfoList: 域名基本信息
     *
     * @param DomainBaseInfo[] $domainInfoList
     */
    public function setDomainInfoList(array $domainInfoList)
    {
        $result = [];
        foreach ($domainInfoList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
