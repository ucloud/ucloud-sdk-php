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
namespace UCloud\UDNS\Apis;

use UCloud\Core\Response\Response;
use UCloud\UDNS\Models\ZoneInfo;
use UCloud\UDNS\Models\VPCInfo;

class DescribeUDNSZoneResponse extends Response
{
    

    /**
     * TotalCount: 符合查询条件的域名数量
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 符合查询条件的域名数量
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }

    /**
     * DNSZoneInfos: 域名资源信息
     *
     * @return ZoneInfo[]|null
     */
    public function getDNSZoneInfos()
    {
        $items = $this->get("DNSZoneInfos");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ZoneInfo($item));
        }
        return $result;
    }

    /**
     * DNSZoneInfos: 域名资源信息
     *
     * @param ZoneInfo[] $dnsZoneInfos
     */
    public function setDNSZoneInfos(array $dnsZoneInfos)
    {
        $result = [];
        foreach ($dnsZoneInfos as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
